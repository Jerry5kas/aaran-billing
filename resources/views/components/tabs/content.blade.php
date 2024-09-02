<section
    x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
    role="tabpanel"
    class="p-8 space-y-2"
>
    {{$slot}}
</section>
