@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('layouts.error')

       
    <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form class="form-horizontal" action="/products" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="header">Add a new product</div>
                    <div class="form-content">
                        <h4 class="heading">Product Details</h4>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-key"></i></label>
                                <input name="name" class="form-control" placeholder="name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-info"></i></label>
                                <input name="description" class="form-control" placeholder="description" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-file"></i></label>
                                <input name="image" class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-line-chart"></i></label>
                                <input name="price" class="form-control" placeholder="price" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-pie-chart"></i></label>
                                <input name="stock" class="form-control" placeholder="stock" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">subcategory</label>
                            <div class="col-sm-12">
                                <select name="subcategory_id" data-placeholder="Choose a subcategory..." class="chosen-select form-control"  tabindex="2">
                                    <option value=""></option>
                                @foreach (\App\Subcategory::all() as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">company</label>
                            <div class="col-sm-12">
                                <select name="company_id" data-placeholder="Choose a company..." class="chosen-select form-control"  tabindex="2">
                                    <option value=""></option>
                                @foreach (\App\Company::all() as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">size</label>
                            <div class="col-sm-12">
                                <select name="sizes[]" data-placeholder="Choose a size..." class="chosen-select form-control" multiple tabindex="4">
                                @foreach (\App\Size::all() as $size)
                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">color</label>
                            <div class="col-sm-12">
                                <select name="colors[]" data-placeholder="Choose a color..." class="chosen-select form-control" multiple tabindex="4">
                                @foreach (\App\Color::all() as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="heading-label">tag</label>
                            <div class="col-sm-12">
                                <select name="tags[]" data-placeholder="Choose a tag..." class="chosen-select form-control" multiple tabindex="4">
                                @foreach (\App\Tag::all() as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-default">ADD</button>
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
