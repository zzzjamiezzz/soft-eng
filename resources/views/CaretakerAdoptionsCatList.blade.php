@extends('layouts.CaretakerTemplate')

@section('title',"Adoptions (Cat List)")

@section('content')
<div class="user-main-pagetitle-container">
    <p class="user-main-pagetitle-text">
        Adoptions (Cat List)
    </p>
</div>
<div class="user-main-content">
    <div class="user-main-content-searchbar-container-for-21rowtable">
        <form class="user-main-content-searchbar-form">
                <input type="text" placeholder="Search" class="user-main-content-searchbar-input" name="search">
        </form>
    </div>
    <div class="user-main-content-create-button-container mt-2"> <!-- Add margin for spacing -->
        <a href="{{route('caretaker.adoptions.add.sanctuaryList')}}" class="btn btn-dark">Create</a>
    </div>
    <!-- with create searchbar container -->
    <div class="user-main-content-21rowtable-container">
        @if ($cats->isEmpty())
        <p>There are no any cats for adoption in this Sanctuary</p>
        @else
        <table class="user-main-content-21rowtable manager-cat-records">
            <tr class="user-main-content-21rowtable-tablehead">
                <th>
                    Name
                </th>
                <th>
                    Breed
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Birthdate
                </th>
                <th>
                    Remove
                </th>
            </tr>
        @foreach($cats as $key => $cat)
            <tr class="user-main-content-21rowtable-tabledata"  >
                <td>
                    {{$cat->name}}
                </td>
                <td>
                    {{$cat->breed}}
                </td>
                <td>
                    @if ($cat->gender==false)
                    Female
                    @else
                    Male
                    @endif
                </td>
                <td>
                    {{$cat->birthdate}}
                </td>
                <td>
                    <a href="{{route('caretaker.adoptions.remove',['catID'=>$cat->id,'sanctuaryID'=>$sanctuaryID])}}"><i class="bi bi-x-square fs-3"></i></a>
                </td>
            </tr>
        @endforeach
        </table>
        @endif
</div>
                <!-- Pagination from simple-bootstrap-5.blade -->
        <div class="d-flex justify-content-center">
            @if(!$cats->isEmpty())
            {{$cats->withQueryString()->links('vendor.pagination.bootstrap-4')}}
        @endif
    </div>
</div>

@endsection
