{{--
    Provide Blade injection to shorten the namespace path to "countries"
    Which can then be accessed with $countries::all() as an example.
    much easier lower down than typping LaravelExamples\Http\Tools\Countries.
    So Blade injection allow you to directly access a class.
 --}}
@inject('countries', 'LaravelExamples\Http\Tools\Countries')

{{ csrf_field() }}

<div class="input-group group-field">
    <label class="input-group-addon flyer-label" for="street">
        <i class="fa fa-home"></i>
    </label>

    <input type="text" name="street" id="street"
           class="form-control" value="{{ old('street') }}" placeholder="Street">

</div> {{-- Street --}}

<div class="input-group group-field">
    <label for="city" class="input-group-addon flyer-label">
        <i class="fa fa-building"></i>
    </label>

    <input type="text" name="city" id="city"
           class="form-control" value="{{ old('city') }}" placeholder="City">
</div> {{-- City --}}

<div class="input-group group-field">
    <label class="input-group-addon flyer-label" for="state">
        <i class="fa fa-envelope-o fa-fw"></i>
    </label>

    <input type="text" name="state" id="state"
           class="form-control" value="{{ old('state') }}" placeholder="State">

    <label class="input-group-addon flyer-label" for="postcode">
        <i class="fa fa-map-marker"></i>
    </label>
    <input type="text" name="postcode" id="postcode"
           class="form-control" value="{{ old('postcode') }}" placeholder="Postcode">
</div> {{-- State and Postcode --}}

<div class="input-group group-field">
    <label class="input-group-addon flyer-label" for="country">
        <i class="fa fa-chevron-circle-down"></i>
    </label>

    <select name="country" id="country" class="form-control">
        @foreach($countries::all() as $country => $code)
            @if($code=="au")  // Make Australia the selected item.
                <option selected="{{ $code }}">{{$country}}</option>
            @else
                <option value="{{ $code }}">{{ $country }}</option>
            @endif
        @endforeach
    </select>

    <label class="input-group-addon flyer-label" for="price">
        <i class="fa fa-usd"></i>
    </label>
    <input type="text" name="price" id="price"
           class="form-control" value="{{ old('price') }}" placeholder="Price">
</div> {{-- Country and Price --}}

<div class="input-group group-field">
    <label for="description" class="input-group-addon flyer-label">
        <i class="fa fa-file-text-o"></i>
    </label>
        <textarea type="text" name="description" id="description"
               class="form-control" rows="10" placeholder="Description">{{ old('description') }}</textarea>
</div> {{-- Description --}}

<div class="input-group group-field">
    <label for="place" class="input-group-addon flyer-label">
        <i class="fa fa-chevron-circle-down"></i>
    </label>
    <select name="place" id="place" class="form-control">
        <option value="uk">uk</option>
        <option value="fr">fr</option>
        <option value="au">au</option>
    </select>
</div> {{-- place --}}

<div class="form-group" style="text-align: right">
    <button type="submit" class="btn btn-primary">Submit Request</button>
</div> {{-- Submit Button--}}