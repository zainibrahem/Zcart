<section>
   <div class="top-rated">
       <div class="container">
           <div class="top-rated__inner">
               <div class="top-rated__header">
                   <div class="sell-header sell-header--bold">
                       <div class="sell-header__title">
                           <h2>{{trans('theme.additional_item')}}</h2>
                       </div>
                       <div class="header-line">
                           <span></span>
                       </div>
                       <div class="best-deal__arrow">
                           <ul>
                               <li><button class="left-arrow slider-arrow slick-arrow top-rated-left"><i class="fal fa-chevron-left"></i></button></li>
                               <li><button class="right-arrow slider-arrow slick-arrow top-rated-right"><i class="fal fa-chevron-right"></i></button></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="top-rated__items">
                   <div class="top-rated__items-inner">

                      {{-- <div class="top-rated__items-box box">
                           <div class="top-rated__items-img box-img">
                               <img src="images/p1.png" alt="">
                           </div>
                           <div class="top-rated__items-ratting box-ratting">
                               <ul>
                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                                   <li><a href="#"><i class="fas fa-star"></i></a></li>
                               </ul>
                           </div>
                           <div class="top-rated__items-title box-title">
                               <a href="#">letest gloves fight like </a>
                           </div>
                       </div>--}}

                       @include('theme::partials._product_horizontal', ['products' => $additional_items, 'pricing' => 1, 'hover' => 1])

                   </div>
               </div>
           </div>
       </div>
   </div>
</section>