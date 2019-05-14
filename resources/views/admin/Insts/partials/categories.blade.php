@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($inst->id)

                @foreach ($inst->categories as $category_inst)

                    @if ($category->id == $category_inst->id)
                        selected="selected"
                    @endif

                @endforeach

            @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.insts.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
