{{--
    Provide Blade injection to shorten the namespace path to "countries"
    Which can then be accessed with $countries::all() as an example.
    much easier lower down than typping App\Http\Tools\Countries.
    So Blade injection allow you to directly access a class.
 --}}
@inject('countries', 'App\Http\Tools\Countries')

{{ csrf_field() }}

<div class="form-group">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
</div>

<div class="form-group">
    <label for="city">city:</label>
    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
</div>

<div class="form-group">
    <label for="postcode">postcode:</label>
    <input type="text" name="postcode" id="postcode" class="form-control" value="{{ old('postcode') }}">
</div>

<div class="form-group">
    <label for="state">state:</label>
    <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}">
</div>

<div class="form-group">
    <label for="country">country:</label>
    <select name="country" id="country" class="form-control">
        {{--<option selected="Australia">Australia</option>--}}
        @foreach($countries::all() as $country => $code)
            @if($code=="au")
                <option selected="{{ $code }}">{{$country}}</option>
            @else
                <option value="{{ $code }}">{{ $country }}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="price">Price:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
</div>

<div class="form-group">
    <label for="description">Home Description:</label>
            <textarea type="text" name="description" id="description"
                      class="form-control" rows="10">{{ old('description') }}</textarea>
</div>

<div class="form-group">
    <label for="photos">Photos:</label>
    <input type="file" name="photos" id="photos" class="form-control" value="{{ old('photos') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit Request</button>
</div>