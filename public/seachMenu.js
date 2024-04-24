const selectBox = document.querySelector('.select-box');
const selectOption = document.querySelector('.select-option');
const soValue = document.querySelector('#soValue');
const optionSearch = document.querySelector('#optionSearch');
const options = document.querySelector('.options');
const optionsList = document.querySelectorAll('.options li a span');

selectOption.addEventListener('click', function(){
    selectBox.classList.toggle('active');
});

optionsList.forEach(function(optionsListSingLe){
    optionsListSingLe.addEventListener('click', function(){
        text = this.textContent;
        soValue.value = text;
        selectBox.classList.remove('active');
    })
    
});

// function updateName(nameLi){
//     optionSearch.value = '';
//     addCountry(nameLi.textContent);
//     selectBox.classList.remove('active');
//     soValue.firstElementChild.value = nameLi.textContent;
// }

optionSearch.addEventListener('keyup',function(){
    var fuler, li, i, textValue;
    fuler = optionSearch.value.toUpperCase();
    li = options.getElementsByTagName('li');
    for(i=0;i<li.length;i++){
        liCount = li[i];
        textValue = liCount.textContent || liCount.innerText;
        if(textValue.toUpperCase().indexOf(fuler)> -1){
            li[i].style.display = '';
        }else{
            li[i].style.display = 'none';
        }
    }
})



// <!-- 
// <div class="form-group">

//     <div class="dropdown bootstrap-select form-control aiz- dropup show select-box">
//         <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="category_id" title="-- Thuốc không kê đơn">
//             <div class="filter-option select-option">
//                 <div class="filter-option-inner-inner"  id="soValue" ></div>
//             </div>
//         </button>
//         <div class="dropdown-menu" style="max-height: 251px; overflow: hidden;">
//             <div class="bs-searchbox"><input type="search" class="form-control" placeholder="Tìm kiếm loại sản phẩm" id="optionSearch"></div>
//             <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 185px; overflow-y: auto;">
//                 <ul class="dropdown-menu inner show options" style="margin-top: 0px; margin-bottom: 0px;">
//                     @foreach ($category as $categor)
//                     <li><a class="dropdown-item" id="bs-select-1-0"><span class="text">{{$categor->name_category}}</span></a></li>
//                     @endforeach
//                 </ul>
//             </div>
//         </div>
//     </div>

// </div> -->
