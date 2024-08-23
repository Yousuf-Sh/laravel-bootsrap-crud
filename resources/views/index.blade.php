@extends('layouts.app')

@section('title','Students list ')

@section('content')
<div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NAME</th>
            <th scope="col">COURSE</th>
            <th scope="col">EDIT</th>
            <th scope="col">REMOVE</th>
        </tr>
        </thead>
       <tbody>
        @forelse ($students as $student)
            <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->description}}</td>
            <td><form method="GET" action="{{route('students.create')}}">
                    <button type="submit" class="btn btn-outline-secondary mb-3">EDIT</button>
                </form>
            </td>            
            <td><button type="submit">REMOVE</button></td>            
            </tr>     
    
        @empty
            <div>Empty list recieved</div>
        @endforelse
    
    </tbody> 
    
    </table>
</form>
</div>
@endsection
@forelse ($students as $student)
        <div>            
            
        </div>
    
    @empty
        <div>Empty list recieved</div>
    @endforelse