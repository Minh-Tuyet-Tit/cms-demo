@extends('layouts.layoutAdmin')

@section('main')
    <div class="col-md-12">




        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Update Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/post/update/' . $post->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Post title</label>
                                <input name="post_title" type="text" class="form-control" value="{{ $post->post_title }}"
                                    placeholder="Enter name post" />
                                @error('post_title')
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
                                    value="{{ $post->order }}" />
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
                                    value="{{ $post->view_count }}" placeholder="Enter price post" />
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
                                <textarea name="summary" id="product-summary" placeholder="Enter Summary Product"><?php echo $post->summary; ?></textarea>
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
                                <textarea name="description" id="product-description" placeholder="Enter Description Product"><?php echo $post->description; ?></textarea>
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
                                    value="{{ $post->meta_keyword }}" placeholder="Enter meta_keyword" />
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
                                    value="{{ $post->meta_description }}" placeholder="Enter meta_description" />
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
                                <select name="cat_id" class="form-control">
                                    @foreach ($category as $cate)
                                        <option {{$cate->id==$post->cat_id ?'selected':''}} value="{{ $cate->id }}">{{ $cate->cat_name }}</option>
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
                                        <option {{$st->id == $post->status ? 'selected':''}} value="{{ $st->id }}">{{ $st->status_name }}</option>
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
                                    <input type="datetime" name="date_public" class="form-control"
                                        value="{{ $post->date_public }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Images</label>
                                <button type="button" class="btn btn-primary ml-4 mb-4 mt-4" data-toggle="modal"
                                    data-target="#modelId"><i class="far fa-image"></i></button>
                                <div class="image_product"></div>
                                <input name="image" hidden id="images" type="text" class="form-control"
                                    value="{{ $post->image }}" placeholder="Enter meta_description" />
                                @error('images')
                                    <div class="alert alert-default-secondary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                        </div>


                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary mt-3" role="button">Update</button>
                        <a style="float: right" href="{{ url('admin/post') }}" class="btn btn-dark mt-3"
                            role="button">Cancle</a>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection()
