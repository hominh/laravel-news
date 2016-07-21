@extends('admin.master')
@section('content')
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 0; ?>
                            @foreach($data as $item)
                            <?php $stt = $stt + 1; ?>

                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $item["username"] !!}</td>
                                <td>
                                   {!! $item["email"] !!}
                                </td>
                                <td>
                                    @if($item["level"] == 2)
                                        Super admin
                                    @elseif($item["level"] == 1)
                                        Admin
                                    @else
                                        Member
                                    @endif
                                </td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
            <a onclick="return confirmDelete('Are you sure Delete?')" href="{{ URL::route('admin.user.getDelete',$item['id']) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ URL::route('admin.user.getEdit',$item['id']) }}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
               @endsection()