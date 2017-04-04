@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')

       
    <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form class="form-horizontal" action="/products/{{ $product->id }}" method="POST" role="form">
                {{ csrf_field() }}
                    <div class="header">Edit a product</div>
                    <div class="form-content">
                        <h4 class="heading">Product Details</h4>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-key"></i></label>
                                <input name="name" class="form-control" placeholder="name" type="text" value="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-info"></i></label>
                                <input name="description" class="form-control" placeholder="description" type="text" value="{{ $product->description }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-line-chart"></i></label>
                                <input name="price" class="form-control" placeholder="price" type="text" value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-pie-chart"></i></label>
                                <input name="stock" class="form-control" placeholder="stock" type="text" value="{{ $product->stock }}">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">subcategory</label>
                            <div class="col-sm-12">
                                <select name="subcategory_id" data-placeholder="Choose a subcategory..." class="chosen-select form-control"  tabindex="2">
                                @foreach (\App\Subcategory::all() as $subcategory)
                                @if ($product->subcategory_id ==  $subcategory->id)
                                    <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                                @else
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endelse
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">company</label>
                            <div class="col-sm-12">
                                <select name="company_id" data-placeholder="Choose a company..." class="chosen-select form-control"  tabindex="2">
                                @foreach (\App\Company::all() as $company)
                                @if ($product->company_id == $company->id)
                                    <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                                @else
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endelse
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">size</label>
                            <div class="col-sm-12">
                                <select name="sizes[]" data-placeholder="Choose a size..." class="chosen-select form-control" multiple tabindex="4">
                                <?php $chosen_sizes_array = array(); ?>
                                @foreach ($product->sizes as $chosen_size)
                                        <option value="{{ $chosen_size->id }}" selected>{{ $chosen_size->name }}</option>
                                        <?php array_push($chosen_sizes_array, $chosen_size->id ); ?>
                                @endforeach
                                @foreach (\App\Size::all() as $size)
                                @if (!in_array($size->id, $chosen_sizes_array))
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">size</label>
                            <div class="col-sm-12">
                                <select name="colors[]" data-placeholder="Choose a color..." class="chosen-select form-control" multiple tabindex="4">
                                <?php $chosen_colors_array = array(); ?>
                                @foreach ($product->colors as $chosen_color)
                                        <option value="{{ $chosen_color->id }}" selected>{{ $chosen_color->name }}</option>
                                        <?php array_push($chosen_colors_array, $chosen_color->id ); ?>
                                @endforeach
                                @foreach (\App\Color::all() as $color)
                                @if (!in_array($color->id, $chosen_colors_array))
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">size</label>
                            <div class="col-sm-12">
                                <select name="tags[]" data-placeholder="Choose a tag..." class="chosen-select form-control" multiple tabindex="4">
                                <?php $chosen_tags_array = array(); ?>
                                @foreach ($product->tags as $chosen_tag)
                                        <option value="{{ $chosen_tag->id }}" selected>{{ $chosen_tag->name }}</option>
                                        <?php array_push($chosen_tags_array, $chosen_tag->id ); ?>
                                @endforeach
                                @foreach (\App\Tag::all() as $tag)
                                @if (!in_array($tag->id, $chosen_tags_array))
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-default">EDIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>



    </div>
    </div>
</div>
@endsection
