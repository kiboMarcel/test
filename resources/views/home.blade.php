@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                    <div class="card">
                      
                        <div class="card-content collapse show">
                            <div class="card-body">
                               
                                <form class="form" action="{{ route ('contact.store')}}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Contact</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="projectinput1">First Name</label>
                                                    <input type="text" id="projectinput1" class="form-control" placeholder="name" name="name">
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="projectinput3">E-mail</label>
                                                    <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div class="form-group">
                                            <label for="userinput8">Message</label>
                                            <textarea id="userinput8" rows="5" class="form-control border-primary" name="message" ></textarea>
                                        </div>
                                     
                                    </div>
        
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
               
        
              
        </div>
    </div>
</div>
@endsection
