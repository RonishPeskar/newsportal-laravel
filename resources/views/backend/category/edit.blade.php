<x-app-layout>
    <div class="card">
      <div class="card-header d-flex justify-content-between">
          <h5>Edit Categories</h5>
          <a href="{{route('category.index')}}" class="btn btn-primary">Back</a>
      </div>
      <div class="card-body">
          <form action="{{route('category.update', $category->id)}}" method="post">
              @csrf
              @method('put')
              <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" class="form-control" type="text" name="name" value="{{$category->name}}">
              </div>
              <div class="form-group">
                  <label for="slug">Slug</label>
                  <input id="slug" class="form-control" type="text" name="slug" value="{{$category->slug}}">
              </div>
              <button class="btn btn-primary">Save Record</button>
          </form>
      </div>
    </div>
  </x-app-layout>
