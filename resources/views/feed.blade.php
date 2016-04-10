@extends('master')

@section('body')


<div class="panel panel-default">
    <div class="panel-body">
      <div class="media">
        <div class="media-left">
          <a href="#"><img class="media-object" data-src="holder.js/64x64" alt="64x64" src="{{ asset('profile1.png') }}" data-holder-rendered="true" style="width: 64px; height: 64px;" id="profile_image"> </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading" id="profile_name">Ryan Beckett</h4>
          <h5 id="status_time">14th January</h5>
          <p id="status_message">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>

      <hr>

      <div class="btn-group">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="btn_status_show_dive_info">Dive Info</button>
      </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
<!-- Modal -->



@stop
