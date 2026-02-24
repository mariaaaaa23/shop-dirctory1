@extends('admin.layout.master')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> ویرایش دسته بندی  </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form action="{{ route('categories.update', $category) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="caregory_id">دسته والد</label>
                    <select name="category_id" id="category_id" class="form-controller">
                        <option value="" disabled selected>دسته والد را انتخاب کنید...</option>
                        @foreach ($categories as $parent )
                            <option
                            {{-- اگه دسته ای که انتخاب کردیم والد داشت بهمون نشون میده --}}
                            @if ($parent->id == $category->category_id)
                                selected
                            @endif
                             value="{{ $parent->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $category->title }}">
                </div>


                <div class="form-group">
                    <label for="title">اسلاگ</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $category->slug }}" >
                </div>


                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                </div>


            </form>

        </div>
        @include('admin.layout.errors')
        @include('admin.layout.notification')
@endsection