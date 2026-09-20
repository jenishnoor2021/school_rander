@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>{{ $config['label'] }} <small>Categories and content</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">{{ $config['label'] }}</li>
    </ol>
  </section>
  <section class="content">
    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
    @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
    <div class="row">
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Add category</h3>
          </div>
          <div class="box-body">
            <form method="POST" action="{{ route('admin.categories.store', $type) }}">
              @csrf
              <div class="form-group"><label for="name">Category name</label><input class="form-control" id="name" name="name" required maxlength="255"></div>
              <button class="btn btn-success" type="submit">Add category</button>
            </form>
          </div>
        </div>
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">All categories</h3>
          </div>
          <div class="list-group">
            @foreach($categories as $category)
            <div class="list-group-item {{ $selected && $selected->id === $category->id ? 'active' : '' }}">
              <a href="{{ route('admin.categories.index', ['type' => $type, 'category' => $category->id]) }}" style="color:inherit">{{ $category->name }}</a>
              <span class="pull-right">
                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editCategory{{ $category->id }}"><i class="fa fa-edit"></i></button>
                <form method="POST" action="{{ route('admin.categories.destroy', [$type, $category->id]) }}" style="display:inline" onsubmit="return confirm('Delete this category?')">@csrf @method('DELETE')<button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i></button></form>
              </span>
            </div>
            <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="{{ route('admin.categories.update', [$type, $category->id]) }}">@csrf @method('PATCH')<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4>Edit category</h4>
                    </div>
                    <div class="modal-body"><input class="form-control" name="name" value="{{ $category->name }}" required maxlength="255"></div>
                    <div class="modal-footer"><button class="btn btn-primary" type="submit">Save</button></div>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">{{ $selected ? 'Manage '.$selected->name.' items' : 'Select a category' }}</h3>
          </div>
          <div class="box-body">
            @if($selected)
            <div class="well well-sm">
              <h4 style="margin-top:0"><i class="fa fa-plus-circle"></i> Add item to “{{ $selected->name }}”</h4>
              <form method="POST" action="{{ route($config['store']) }}" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <input type="hidden" name="category_id" value="{{ $selected->id }}">
                <div class="form-group"><label class="col-sm-3 control-label" for="item-title">Title</label>
                  <div class="col-sm-9"><input class="form-control" id="item-title" name="text" required maxlength="255" placeholder="Enter a title"></div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label" for="item-image">Image</label>
                  <div class="col-sm-9"><input class="form-control" id="item-image" type="file" name="file" accept="image/*" required></div>
                </div>
                <div class="form-group" style="margin-bottom:0">
                  <div class="col-sm-offset-3 col-sm-9"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save item</button></div>
                </div>
              </form>
            </div>
            @endif
            @if($selected && $items->count())
            <table class="table table-bordered table-striped">
              <thead class="bg-primary">
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th width="150">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)<tr>
                  <td>{{ $item->text }}</td>
                  <td>@if($item->file)<img src="{{ $item->file }}" height="50" alt="{{ $item->text }}">@endif</td>
                  <td><a href="{{ route($config['edit'], ['id' => $item->id, 'return_url' => url()->full()]) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a> <a href="{{ route($config['destroy'], $item->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Delete this item?')"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>@endforeach
              </tbody>
            </table>
            {{ $items->appends(['category' => $selected->id])->links('pagination::bootstrap-4') }}
            @elseif($selected)<p>No items have been added to this category yet.</p>
            @else<p>Add a category to begin managing content.</p>@endif
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection