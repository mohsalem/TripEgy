
@extends('index')
@section('content')




<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h2>Primary Attendee</h2>
    
        <table id="myTable1" class=" table order-list1">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-2">
                <input type="text" name="name1" class="form-control" />
            </td>
            <td class="col-sm-2">
                <input type="text" name="sname1"  class="form-control"/>
            </td>
            <td class="col-sm-2">
                <input type="mail" name="mail1"  class="form-control"/>
            </td>
        </tr>
    </tbody>
</table>
    
        <h2>Addtional Attendees</h2>
    <table id="myTable" class=" table order-list">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>AIA Member</td>
            <td>Member Id</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-2">
                <input type="text" name="name" class="form-control" />
            </td>
            <td class="col-sm-2">
                <input type="text" name="sname"  class="form-control"/>
            </td>
            <td class="col-sm-2">
                <input type="mail" name="mail"  class="form-control"/>
            </td>
            <td class="col-sm-2">
                <input type="checkbox" name="phone"  class="form-control"/>
            </td>
            <td class="col-sm-2">
                <input type="text" name="memberid"  class="form-control"/>
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>
                <input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete">
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="1" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Attendee" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
<hr/>
<div class="row">
    <div class="col-sm-2">
    <input type="button" class="btn btn-lg btn-block " id="pay" value="Pay" />
    </div>
</div>

</div>


<script type="text/javascript">
    $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="sname' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="mail' + counter + '"/></td>';
        cols += '<td><input type="checkbox" class="form-control" name="phone' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="memberid' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1;
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}

</script>











<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="/create_event" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="name">
                <input type="text" class="form-control" name="description">
                <input type="date" class="form-control" name="from">
                <input type="date" class="form-control" name="to">
                <input type="date" class="form-control" name="deadline_date">
                <input type="text" class="form-control" name="location">
                <input type="text" class="form-control" name="location_name">
                <input type="text" class="form-control" name="facility">
                <input type="text" class="form-control" name="max_bookings">
                <input type="file" class="form-control" name="photo">
                <button type="submit" class="btn btn-primary">ADD EVENT</button>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- for the session messages --}}
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session()->get('success')) }}</div>
            @elseif (session()->has('danger'))
            <div class="alert alert-danger" role="alert" id="show">{{ session()->get('danger')) }}</div>
            @else 
            <div></div>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection