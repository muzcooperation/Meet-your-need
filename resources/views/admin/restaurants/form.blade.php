<div class="box box-primary">
    <form action="@if(isset($directory)){{route('admin.restaurants.update',$directory->id)}}@else{{route('admin.restaurants.store')}}@endif" role="form" class="form-horizontal" method="post">
        @if(isset($directory))
            {{method_field('PATCH')}}
        @else
            {{method_field('POST')}}
        @endif

        {{csrf_field()}}
    <div class="box-body pl-4">
            <div class="py-4">
                <button type="button" class="btn btn-success" onclick="openMap" data-target="#mapModal">Select a Location</button>
            </div>
            <div class="form-group">
                <label for="program_name" class="col-sm-2 control-label">Program Name<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="text" name="program_name" class="form-control" id="program_name" placeholder="Program Name"
                    @if(isset($directory))value="{{$directory->title}}"@endif>
                </div>

                @if ($errors->has('program_name'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('program_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="date" class="col-sm-2 control-label">Date<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Program Date"
                    @if(isset($directory))value="{{$directory->title}}"@endif>
                </div>

                @if ($errors->has('date'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="department" class="col-sm-2 control-label">Department<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="text" name="department" class="form-control" id="department" placeholder="Department"
                    @if(isset($directory))value="{{$directory->title}}"@endif>
                </div>

                @if ($errors->has('department'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('department') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="scholarship" class="col-sm-2 control-label">Scholarship<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="text" name="scholarship" class="form-control" id="scholarship" placeholder="Scholarship"
                    @if(isset($directory))value="{{$directory->title}}"@endif>
                </div>

                @if ($errors->has('scholarship'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('scholarship') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
               <label for="criteria" class="col-sm-2 control-label">Admission Criteria<span class="text-danger"> *</span></label>
                 <div class="col-sm-10">
                   <textarea type="text" name="criteria" class="form-control text-left" id="criteria" placeholder="Criteria">
                       @if(isset($directory)){{$directory->description}}@endif
                    </textarea>
                </div>

                @if ($errors->has('criteria'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('criteria') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Image<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="file" accept="image/gif, image/jpeg, image/png" name="image" class="form-control" id="image" placeholder="Image"
                    @if(isset($directory))value="{{$directory->title}}"@endif>
                </div>

                @if ($errors->has('image'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Modal -->
            <!-- <div class="modal fade" id="mapModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                  
                </div>
            </div> -->

    </div>
    <div class="box-footer pl-4">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>


<!--  <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function openMap() {
        $('#mapModal').modal({
            backdrop: 'static',
            keyboard: false
        }).on('shown.bs.modal', function () {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        });
      }

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&libraries=places&callback=initAutocomplete"
         async defer></script> -->