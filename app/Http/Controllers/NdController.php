<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\checkoutCart;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Comment;
use App\Models\Company;
use App\Models\endow_product;
use App\Models\Endows;
use App\Models\ImageProduct;
use App\Models\NdTechnique;
use App\Models\Technique;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;

class NdController extends Controller
{
    public function form_basic()
    {
        $techniques = Technique::all();
        $category = Category::all();
        $company = Company::all();
        $endows = Endows::all();
        return view('form-basic', compact('category', 'company', 'techniques', 'endows'));
    }

    public function ndstore(Request $request)
    {
        $file_name = null;
        // dd($request->techniques, $request->nameTechniques);
        if ($request->has('techniques')) {
            $seenTechniques = [];
            foreach ($request->techniques as $item) {
                if (in_array($item, $seenTechniques)) {
                    return redirect()->back()->with('error', true);
                } else {
                    $seenTechniques[] = $item;
                }
            }
        }

        if ($request->has('endows')) {
            $seenTechniques = [];
            foreach ($request->endows as $item) {
                if (in_array($item, $seenTechniques)) {
                    return redirect()->back()->with('error2', true);
                } else {
                    $seenTechniques[] = $item;
                }
            }
        }
        if ($request->has('file')) {
            $file = $request->file;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/image'), $file_name);
        }
        $giam = null;
        $gia = null;
        if ($request->discount != null && $request->old_price != null) {
            $giam = floatval($request->discount);

            $test = 1 - ($giam / 100);
            $gia = round($request->old_price * $test);

            $gia = $this->roundDownToNearest($gia, 1000);
        }


        $conten = Content::create([
            'discount' => $giam,
            'file' => $file_name,
            'content' => $request->content,
            'old_price' => $request->old_price,
            'price_after_discount' => $gia,
            'status' => $request->status,
            'sold' => 0,
            'category_id' => $request->categoryId,
            'company_id' => $request->companyId,
            'product_specifications' => $request->product_specifications,
            'product_reviews' => $request->product_reviews,
            'quantity' => $request->quantity,
        ]);

        if ($request->has('imageFiles')) {
            foreach ($request->imageFiles as $item) {
                $nameItem = $item->getClientOriginalName();
                $item->move(base_path('public/imagesp'), $nameItem);
                $imageProduct = ImageProduct::create([
                    'title' => $nameItem,
                    'content_id' => $conten->id,
                ]);
                // dd($conten->id);
            }
        }

        $aa = 0;
        if ($request->has('techniques')) {
            foreach ($request->techniques as $item) {
                $ndTechnique = NdTechnique::create([
                    'nameTechnique' => $request->nameTechniques[$aa],
                    'technique_id' => $item,
                    'content_id' => $conten->id,
                ]);
                $aa++;
            }
        }

        if ($request->has('endows')) {
            foreach ($request->endows as $item) {
                $endowProduct = endow_product::create([
                    'endow_id' => $item,
                    'content_id' => $conten->id,
                ]);
            }
        }

        return redirect()->back()->with('redirect', true);
    }


    public function ndindex(Request $request)
    {
        $query = Content::query();
        $category = Category::all();
        $company = Company::all();
        $namKey = null;
        $namCom = null;
        $namCate = null;
        $namSta = null;


        if ($request->searchStatus != 0) {
            $seachStatus = $request->input('searchStatus');
            $query->where('status', 'like', '%' . $seachStatus . '%');
            $namSta = $seachStatus;
        }
        if ($request->proCom != 0) {
            $proCom = $request->input('proCom');
            $query->where('company_id', $proCom);
            $namCom = $proCom;
        }
        if ($request->proCate != 0) {
            $proCate = $request->input('proCate');
            $query->where('category_id', $proCate);
            $namCate = $proCate;
        }
        if ($request->has('keyword')) {
            $tk = $request->input('keyword');
            $query->where('content', 'like', '%' . $tk . '%');
            $namKey = $tk;
        }
        $contents = $query->paginate(10);
        // dd($contents);
        return view('nd', compact('contents', 'namKey', 'category', 'company', 'namCom', 'namCate', 'namSta'));
    }


    public function nddelete($id)
    {
        // $content = Content::where('id', '=', $id)->first();
        $content = Content::find($id);
        // if($content){
        // $fileDelete = $content->file;
        $imageProducts = ImageProduct::where("content_id", $id)->get();
        foreach ($imageProducts as $imageProduct) {
            $path = public_path('imagesp/' . $imageProduct->title);
            if (unlink($path)) {
                $imageProduct->delete();
            }
        }
        $path = public_path('image/' . $content->file);
        if (unlink($path)) {
            $content->delete();
        }
        // }
        return redirect()->route(route: 'ndindex');
    }

    public function ndUpdate($id)
    {
        $ckeckCate = 0;
        $ckeckCompa = 0;
        $ckeckTechni = 0;
        $ckeckEndow = 0;
        $content = Content::find($id);
        $category = Category::all();
        $company = Company::all();
        $ndTechniques = NdTechnique::where('content_id', $id)->get();
        $techniques = Technique::all();
        $endows = Endows::all();
        $endowProducts = endow_product::where('content_id', $id)->get();
        foreach ($category as $item) {
            if ($item->id != $content->category_id) {
                $ckeckCate = 1;
            }
        }
        foreach ($company as $item) {
            if ($item->id != $content->company_id) {
                $ckeckCompa = 1;
            }
        }
        foreach ($techniques as $item) {
            foreach ($ndTechniques as $item2) {
                if ($item->id != $item2->technique_id) {
                    $ckeckTechni = 1;
                }
            }
        }
        foreach ($endows as $item) {
            foreach ($endowProducts as $item2) {
                if ($item->id != $item2->endow_id) {
                    $ckeckEndow = 1;
                }
            }
        }
        return view('form-update', compact('ckeckEndow', 'ckeckTechni','ckeckCate', 'ckeckCompa', 'content', 'category', 'company', 'ndTechniques', 'techniques', 'endows', 'endowProducts'));
    }
    public function ndfromUpdate(Request $request, $id)
    {
        $content = Content::find($id);
        $contents = null;
        if ($request->has('techniques')) {
            $seenTechniques = [];
            foreach ($request->techniques as $item) {
                if (in_array($item, $seenTechniques)) {
                    return redirect()->back()->with('error', true);
                } else {
                    $seenTechniques[] = $item;
                }
            }
        }

        if ($request->has('endows')) {
            $seenTechniques = [];
            foreach ($request->endows as $item) {
                if (in_array($item, $seenTechniques)) {
                    return redirect()->back()->with('error2', true);
                } else {
                    $seenTechniques[] = $item;
                }
            }
        }

        $test2s = NdTechnique::where('content_id', $id)->get();
        foreach ($test2s as $test2) {
            $test2->delete();
        }
        $aa = 0;
        if ($request->has('techniques')) {
            foreach ($request->techniques as $item) {
                $ndTechnique = NdTechnique::create([
                    'nameTechnique' => $request->nameTechniques[$aa],
                    'technique_id' => $item,
                    'content_id' => $id,
                ]);
                $aa++;
            }
        }

        $endowProducts = endow_product::where('content_id', $id)->get();
        foreach ($endowProducts as $endowProduct) {
            $endowProduct->delete();
        }

        if ($request->has('endows')) {
            foreach ($request->endows as $item) {
                $endowProduct = endow_product::create([
                    'endow_id' => $item,
                    'content_id' => $id,
                ]);
            }
        }

        // dd($request->techniques,$request->nameTechniques);

        if ($request->has('file')) {
            $path = public_path('image/' . $content->file);
            unlink($path);
            $file = $request->file('file');
            $contents = time() . "_" . $file->getClientOriginalName();
            $file->move(base_path('public/image'), $contents);
            $request['file'] = $contents;
        }
        if ($contents == null) {
            $contents = $content->file;
        }
        $giam = null;
        $gia = null;
        if ($request->discount != null && $request->old_price != null) {
            $giam = floatval($request->discount);

            $test = 1 - ($giam / 100);
            $gia = round($request->old_price * $test);

            $gia = $this->roundDownToNearest($gia, 1000);
        }

        $content->discount = $giam;
        $content->file = $contents;
        $content->content = $request->input('content');
        $content->old_price = $request->input('old_price');
        $content->price_after_discount = $gia;
        $content->status = $request->input('status');
        $content->product_specifications = $request->input('product_specifications');
        $content->category_id = $request->input('categoryId');
        $content->company_id = $request->input('companyId');
        $content->quantity = $request->input('quantity');
        $content->product_reviews = $request->input('product_reviews');
        $content->save();

        if ($request->has('imageFiles')) {
            foreach ($request->imageFiles as $item) {
                $nameItem = $item->getClientOriginalName();
                $item->move(base_path('public/imagesp'), $nameItem);
                $imageProduct = ImageProduct::create([
                    'title' => $nameItem,
                    'content_id' => $id,
                ]);
            }
        }

        return redirect()->back()->with('redirect', true);
    }
    public function ndSee($id)
    {
        $content = Content::find($id);
        return view('form-see');
    }
    public function ndfromSee($id)
    {
        // $content = Content::where('id', '=', $id)->select('*')->first();
        $pro = Content::find($id);
        $comments = Comment::where('article_id', $id)->get();
        return view('form-see', compact('pro', 'comments'));
    }
    public function blfromSee(Request $request)
    {
        $commen = Comment::create([
            'article_id' => $request->article_id,
            'comment' => $request->comment,
        ]);
        return redirect()->back();
    }

    // public function test(Request $request){
    //     $URL_EDIT_KEY = route('ndUpdate', ['title' => $request->id]);
    //     $token =  Content::where('id', $request->id)->first();
    //     return response()->json([
    //         "url" => $URL_EDIT_KEY,
    //         "unit_name" => $token->title,
    //     ]);
    // }

    private function roundDownToNearest($number, $nearest)
    {
        return ceil($number / $nearest) * $nearest;
    }

    public function homePage()
    {
        $cart = 0;
        $cartCancel = 0;
        $price = 0;
        $product = Content::all()->count();
        $user = User::where('user_type', 'user')->get()->count();
        $inventory = Content::where('sold', '<=', 1)->get()->count();
        $carts = checkoutCart::all();
        foreach ($carts as $item) {
            if ($item->order_status != 3) {
                $cart += 1;
                $price += $item->totalPrice;
            } else {
                $cartCancel += 1;
            }
        }
        $products = Content::where('sold', '>', 1)->orderBy('sold', 'desc')->limit(10)->get();

        // dd($user);
        return view('index', compact('cart', 'cartCancel', 'product', 'user', 'inventory', 'price', 'products'));
    }
}
