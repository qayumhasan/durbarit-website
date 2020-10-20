@extends('admin.master')
@section('contents')
<section class="page_content">
    <!-- panel -->
    <div class="panel mb-0">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title">
                        <span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Slider</span>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="panel_title">
                        <a href="{{route('slider.create')}}" class="btn btn-success"><i class="fas fa-plus"></i></span>
                            <span>Add Slider</span></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="panel_body">
            <div class="table-responsive">
                <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
                    <thead>
                        <tr>
                            <th>
                                SL
                            </th>
                            <th>Heading</th>
                            <th>Details</th>

                            <th>Image</th>
                            <th>Status</th>
                            <th>manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $row)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td> {{$row->heading}} </td>
                            <td> {!!Str::limit($row->paragraph,100)!!} </td>


                            <td>
                                <img src="{{asset('public/images/slider/')}}/{{$row->image}}" alt="" height="40px">
                            </td>
                            @if($row->status == 1)
                                <td class="center"><span class="btn btn-success">Active</span></td>
                            @else
                                <td class="center"><span class="btn btn-danger">InActive</span></td>
                            @endif
                            <td>

                                @if($row->status == 1)
                                <a href="{{route('slider.show',$row->id)}}"
                                    class="btn btn-success btn-sm text-white" data-toggle="tooltip"
                                    data-placement="right" title="active" data-original-title="active"><i
                                        class="far fa-thumbs-up"></i></a>
                                @else
                                <a href="{{route('slider.show',$row->id)}}"
                                    class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                    data-placement="right" title="active" data-original-title="active"><i
                                        class="far fa-thumbs-down"></i></a>
                                @endif
                                | <a href="{{route('slider.edit',$row->id)}}"
                                    class="btn btn-info btn-sm text-white" title="edit" data-original-title="edit"><i
                                        class="fas fa-pencil-alt"></i></a> |

                                <button type="submit" id="delete"onclick="form_submit()" href="#"
                                    class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                    data-placement="right" title="Delete" data-original-title="Delete"><i
                                        class="far fa-trash-alt"></i></button>

                                <form id="slider_form" method="post" action="{{route('slider.destroy',$row->id)}}">
                                    @csrf
                                    @method('DELETE')

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<script>
    function form_submit(){
        var formname =document.getElementById('slider_form').submit();

    }
</script>

@endsection('contents')
