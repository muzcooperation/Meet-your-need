<div class="box box-primary">
    <form action="@if(isset($directory)){{route('admin.universities.update',$directory->id)}}@else{{route('admin.universities.store')}}@endif" role="form" class="form-horizontal" method="post">
        @if(isset($directory))
            {{method_field('PATCH')}}
        @else
            {{method_field('POST')}}
        @endif

        {{csrf_field()}}

        <div class="form-group">
            <input id="map-search-input" type="text" placeholder="Search Box">
            <div id="map" style="height: 300px"></div>
        </div>
    <div class="box-body pl-4">
            <!-- <div class="py-4">
                <button type="button" class="btn btn-success" onclick="openMap" data-target="#mapModal">Select a Location</button>
            </div> -->
            <div class="form-group">
                <label for="program_name" class="col-sm-2 control-label">Program Name<span class="text-danger"> *</span></label>
                <div class="col-sm-10">
                    <input type="text" name="program_name" class="form-control" id="program_name" placeholder="Program Name" value="{{old('program_name')}}">
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
                    <input type="date" name="date" class="form-control" id="date" placeholder="Program Date" value="{{old('date')}}">
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
                    <input type="text" name="department" class="form-control" id="department" placeholder="Department" value="{{old('department')}}">
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
                    <input type="text" name="scholarship" class="form-control" id="scholarship" placeholder="Scholarship" value="{{old('scholarship')}}">
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
                    <input type="file" accept="image/gif, image/jpeg, image/png" name="image" class="form-control" id="image" placeholder="Image">
                </div>

                @if ($errors->has('image'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
    </div>
    <div class="box-footer pl-4">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>


 <script>
      var currLat = -33.8688;
      var currLong = 151.2195;

      function openMap() {
        $('#mapModal').modal({
            backdrop: 'static',
            keyboard: false
        }).on('shown.bs.modal', function () {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        });
      }

        function showPosition(position) {
          currLat = position.coords.latitude;
          currLong = position.coords.longitude;

          var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: currLat, lng: currLong},
              zoom: 15
          });

          // Create the search box and link it to the UI element.
          var input = $('#map-search-input')[0];
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
                  console.log(place, 'search result');

                  if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                  }
                  // Create a marker for each place.
                  markers.push(new google.maps.Marker({
                    map: map,
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

        function initAutocomplete() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition);
          } 
      }

    </script>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.google_api_key')}}&libraries=places&callback=initAutocomplete"
         async defer></script>
