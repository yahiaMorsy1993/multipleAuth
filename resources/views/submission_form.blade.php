@extends('layouts.app')
@section('content')
<div class="panel panel-danger">
    <h1 align="center" style="font-size:30px;" ><label class="badge badge-dark col-sm-12"> Online Conference Paper Submission</label></h1>
    <div class="panel-body">

        @include('common.errors')

        <form action=" {{url('saved')}} " method="POST" class="form-horizontal validationEngineContainer" enctype="multipart/form-data" id="subscribe" onsubmit="if(document.getElementById('terms1').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" >

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="container">

            <div class="form-group">
            <p><label class="badge badge-danger col-sm-12 " style="font-size:12px;">All Fields With ( * ) Are Required </label></p>

            </div>

            <div class="form-row">
              <div class="col-sm-2">
                <label  class=" control-label "><i class="fas fa-user-alt"></i> Title * :</label>
              </div>
                <div class="col-sm-7">
                  <select type="text"  name="title" id="title" class="form-control custom-select mr-sm-2">
                      <option selected> ...Choose...</option>
                    <option value="mr" > Mr.</option>
                    <option value="mrs" > Mrs</option>
                    <option value="dr" > Dr.</option>
                    <option value="assist_prof_dr" > Assist.Prof.Dr</option>
                    <option value="assoc_prof_dr" > Assoc.Prof.Dr</option>
                    <option value="prof_dr" > Prof.Dr</option>

                  </select>
                </div>
            </div>
<br>
            <div class="form-row">
              <div class="col-sm-2">
                <label  class=" control-label "><i class="fas fa-user-alt"></i> Name * :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:14px; height:30px;"  name="name" id="name" class="form-control" required autofocus>

                </div>
            </div>
<br>            

             <div class="form-row">
               <div class="col-sm-2">

               <label  class="control-label"><i class="fas fa-user-alt"></i> Surname * :</label>
              </div>
                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;"  name="surname" id="surname" class="form-control" required>
                </div>
            </div>
<br>

            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-address-book"></i> Institution * :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="institution" id="institution" class="form-control" required >
                </div>
            </div>
<br>
            <div class="form-row">
              <div class="col-sm-2">
                  <label class="control-label"><i class="fas fa-globe-americas"></i> Country * :</label>
                </div>
                <div class="col-sm-7">
                  <select class="form-control"  name="country" id="country" required>
                      <option>-- Choose --</option>
                      @foreach($countries as $country)
                      <option value="{{$country->Name}}">{{$country->Name}}</option>
                      @endforeach
                  </select>
              </div>  
              </div> 
<br>

            <div class="form-row required">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-envelope"></i> Corresponding Author's email  * :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="corresponding_email" id="corresponding_email" class="form-control" required>
                </div>
            </div> 
<br> 

            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-envelope"></i> Alternative (Authors') email :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="alternative_email" id="alternative_email" class="form-control" >
                </div>
            </div> 
<br>
            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-newspaper"></i> Paper Title* :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="paper_title" id="paper_title" class="form-control" >
                </div>
            </div>
<br>
            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-city"></i> Conference City* :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="conference_city" id="conference_city" class="form-control" >
                </div>
            </div>   
<br>
            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-newspaper"></i> Conference Title* :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="conference_title" id="conference_title" class="form-control" >
                </div>
            </div>                     
<br>
            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-newspaper"></i> Abstract* :</label>
              </div>

                <div class="col-sm-7">
                    <textarea type="text" style="font-size:16px; height:90px;" name="abstract" id="abstract" class="form-control" ></textarea>
                </div>
            </div>
<br>

            <div class="form-row">
              <div class="col-sm-2">
                <label  class="control-label "><i class="fas fa-newspaper"></i> Keywords* :</label>
              </div>

                <div class="col-sm-7">
                    <input type="text" style="font-size:16px; height:30px;" name="keywords" id="keywords" class="form-control" ></input>
                </div>
            </div>
<br>
          <div class="form-group">
              <label  class="control-label "> <i class="fas fa-paperclip"></i> Attach Your File (The paper must be in accordance with the isems template in .doc format.)*</label>
              <input type="file" class="form-control-file" id="file" name="file">
            </div>         
<br>
<div class="container">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="type" id="type" value="Poster Presentation">
          <label class="form-check-label" for="exampleRadios1">
           Poster Presentation
          </label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="type" id="type" value="Oral Presentation">
          <label class="form-check-label" for="exampleRadios1">
           Oral Presentation
          </label>
        </div>

          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="type" id="type" value="Print FULL PaperOral Presentation">
          <label class="form-check-label" for="exampleRadios1">
           Print FULL Paper
          </label>
        </div> 

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="type" id="type" value="Print ONLY abstract Presentation">
          <label class="form-check-label" for="exampleRadios1">
        Print ONLY abstract            
          </label>
        </div>   
</div>
<br>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="terms1" name="terms1" value="accept" required>
        <label class="form-check-label"> I accept the terms of the following Honor Code and Plagiarism Statement for Paper Submission, and that the paper is original research contribution with the references properly cited in the manuscript.</label>
      </div>
<br>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="terms2" name="terms2" value="accept" required>
        <label class="form-check-label">  I accept the terms of the following Copyright Agreement, and on submitting the full text paper for possible publication to Integrated Scientific, Engineering and Management. I confirm, acknowledge and agree expressly to the terms and conditions of this copyright agreement. This copyright agreement prevails and is binding to the contributing author(s). </label>
      </div>

<br>
      <div class="pull-center">
         <button type="submit" class="btn btn-dark btn-block " style="height:40px; width: 150px; text-align: center; margin: 0 auto;"> Save & Finish </button>

      </div>

            {{csrf_field()}}

        </form>

    </div>
</div>


@endsection
