@foreach (get_level_zero_categories()->take(10) as $key => $category)
<div class=" category-nav-element category__slider__item"  data-id="{{ $category->id }}">
    <a href="{{ route('products.category', $category->slug) }}">
        <div class="single__category text-center">
            <div class="single__category__thumb">
                <img class="cat-image lazyload"   src="{{ static_asset('assets/img/placeholder.jpg') }}"
                data-src="{{ uploaded_asset($category->icon) }}"
                width="16"
                alt="{{ $category->getTranslation('name') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
            </div>
            <div class="single__category__contents mt-3">
                <h6 class="single__category__title">{{ $category->getTranslation('name') }}</h6>
            </div>
        </div>
    </a>
    @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
        <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
            <div class="c-preloader text-center absolute-center">
                <i class="las la-spinner la-spin la-3x opacity-70"></i>
            </div>
        </div>
    @endif
</div>
@endforeach
