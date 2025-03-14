@extends('app')

@section('title', 'Student List')

@section('Component')

<div class="pagetitle">
  <h1> @yield('title') </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item active">@yield('title') </li>
    </ol>
  </nav>
</div>

    <section class="section">

            <div class="row">

              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body">
                    
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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
                            <td>{{ $student->student_number }}</td>
                            <td>{{ $student->section }}</td>
                            <td>{{ $student->course }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('student.show', $student->student_number) }}">
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