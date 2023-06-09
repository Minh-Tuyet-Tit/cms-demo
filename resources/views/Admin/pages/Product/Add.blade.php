@extends('layouts.layoutAdmin')

@section('main')
    <div class="col-md-12">




        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/product/create') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input name="pro_name" type="text" class="form-control" value="{{ old('pro_name') }}"
                                    placeholder="Enter name product" />
                                @error('pro_name')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Price</label>
                                <input name="price" type="number" class="form-control" value="{{ old('price') }}"
                                    placeholder="Enter price product" />
                                @error('price')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Order</label>
                                <input name="order" type="number" class="form-control" placeholder="Enter Order"
                                    value="{{ old('order') }}" />
                                @error('order')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>View count</label>
                                <input name="view_count" type="number" value="0" class="form-control"
                                    placeholder="Enter price product" />
                                @error('view_count')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Summary</label>
                                <textarea name="summary" id="product-summary" placeholder="Enter Summary Product">
                                
                                    <?php echo old('summary'); ?>
                                    {{-- <figure class="image image-style-side"><img src="" alt="">
                                        <figcaption></figcaption>
                                    </figure> --}}
                                </textarea>
                                @error('summary')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="product-description" placeholder="Enter Description Product"><?php echo old('description'); ?></textarea>
                                @error('description')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Meta keyword</label>
                                <input name="meta_keyword" type="text" class="form-control"
                                    placeholder="Enter meta_keyword" value="{{ old('meta_keyword') }}" />

                                @error('meta_keyword')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Meta description</label>
                                <input name="meta_description" type="text" class="form-control"
                                    value="{{ old('meta_description') }}" placeholder="Enter meta_description" />
                                @error('meta_description')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Category</label>
                                <select name="catPro_id" class="form-control">
                                    @foreach ($category as $cate)
                                        <option value="{{ $cate->id }}">{{ $cate->cat_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    @foreach ($status as $st)
                                        <option value="{{ $st->id }}">{{ $st->status_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date public</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" name="date_public" class="form-control datetimepicker-input"
                                        value="{{ old('date_public') }}
                                        data-target="#reservationdate" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- image -->
                            <div class="form-group">
                                <label>Images</label>
                                <button   type="button" class="btn btn-primary ml-4 mb-4 mt-4" data-toggle="modal"
                                    data-target="#modelId"><i class="far fa-image"></i></button>
                                <div class="image_product"></div>
                                <input name="images" hidden id="images" type="text" class="form-control"
                                    value="{{ old('images') }}" />
                                
                                @error('images')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                        </div>


                    </div>
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- list images -->
                            <div class="form-group">
                                <label>List Images</label>
                                <button type="button" class="btn btn-primary ml-4 mb-4 mt-4" data-toggle="modal"
                                    data-target="#list-img"><i class="fas fa-images"></i></button>
                                <div class="row list-image-product"></div>
                                <input name="list_images" hidden id="list-images" type="text" class="form-control"
                                    value="{{ old('list_images') }}" />
                                
                                @error('images')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                        </div>


                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary mt-3" role="button">Add</button>
                        <a style="float: right" href="{{ url('admin/product') }}" class="btn btn-dark mt-3"
                            role="button">Cancle</a>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>





   
@endsection()
