@extends('app')

@section('title' , 'Account List')

@section('Component')

    <section class="section">
        <div class="row">

        <div class="pagetitle">
            <h1>@yield('title')</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
            </nav>
        </div>

        <div class="col-xl-12">

            <div class="card">
            <div class="card-body pt-3">
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>
                        <b>N</b>ame
                        </th>
                        <th>Student Number</th>
                        <th>Section</th>
                        <th>Program</th>
                        <th>Completion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->student_number }}</td>
                        <td>{{ $user->section }}</td>
                        <td>{{ $user->course }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('user.show', $user->user_number) }}">
                                View
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
            </div>

        </div>
        </div>
    </section>

@endsection