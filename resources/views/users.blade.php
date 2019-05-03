@extends('index')
@section('content')
<h1 class="title">الأعضـــاء</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12"">
            <table id="example" class="display table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>إسم العضو</th>
                        <th>البريد الإلكتروني</th>
                        <th>رقم الهاتف</th>
                        <th>العمر</th>
                        <th>النوع</th>
                        <th>الصلاحيات</th>
                        <th>حالة الحساب</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td><a href="users/{{$user->name}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->birthdate}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->account_type}}</td>
                        <td>{{$user->account_status}}</td>
                        <td>
                            {{-- upgrade to admin --}}
                            <form action="users/{{$user->id}}/upgrade" method="POST">
                                {{ csrf_field() }}
                                <button class="btn cusbtn" type="submit"> تغيير الصلاحيات <i class="fa fa-level-up" aria-hidden="true"></i></button>
                            </form>
                            {{-- ban user --}}
                            <form action="users/{{$user->id}}/ban" method="POST">
                                {{ csrf_field() }}
                                <button class="btn cusbtn" type="submit"> حظر / فك الحظر <i class="fa fa-ban" aria-hidden="true"></i></button>
                            </form>
                            {{-- delete user --}}
                            <form action="users/{{$user->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn cusbtn" type="submit"> حذف العضو نهائيا <i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>إسم العضو</th>
                        <th>البريد الإلكتروني</th>
                        <th>رقم الهاتف</th>
                        <th>العمر</th>
                        <th>النوع</th>
                        <th>الصلاحيات</th>
                        <th>حالة الحساب</th>
                        <th>العمليات</th>
                    </tr>
                </tfoot>
            </table>
            {{ $users->links() }}
            @if (session()->has('message'))
            <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
            @endif
        </div>
    </div>
</div>

<script>
     $(document).ready( function () {
        $('#myTable').DataTable();
    } );
            
            
    $(document).ready(function() {
        $('#example').DataTable( {
            scrollY:        '50vh',
            scrollCollapse: true,
            paging:         false
        } );
    } );
</script>

      
@endsection

