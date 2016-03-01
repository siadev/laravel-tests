{{--
    Provide Blade injection to shorten the namespace path to "countries"
    Which can then be accessed with $countries::all() as an example.
    much easier lower down than typping LaravelExamples\Http\Tools\Countries.
    So Blade injection allow you to directly access a class.
 --}}
@inject('countries', 'LaravelExamples\Http\Tools\Countries')

{{ csrf_field() }}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label">
            <label for="street"
                   class="form-label glyphicon glyphicon-road text-left">&nbsp;Street:</label>
        </span>
        <input type="text" name="street" id="street"
               class="form-control" value="{{ old('street') }}" required>
    </div>
</div> {{-- Street --}}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label">
            <label for="city"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;City:</label>
        </span>
        <input type="text" name="city" id="city"
               class="form-control" value="{{ old('city') }}" required>
    </div>
</div> {{-- city --}}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label">
            <label for="state"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;State:</label>
        </span>
        <input type="text" name="state" id="state"
               class="form-control form-field-2col" value="{{ old('state') }}" required>

        <span class="input-group-addon flyer-label">
            <label for="postcode"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;Postcode:</label>
        </span>
        <input type="text" name="postcode" id="postcode"
               class="form-control" value="{{ old('postcode') }}" required>
    </div>
</div> {{-- State and postcode --}}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label">
            <label for="country"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;Country:</label>
        </span>
        <select name="country" id="country" class="form-control form-field-2col">
            {{--<option selected="Australia">Australia</option>--}}
            @foreach($countries::all() as $country => $code)
                @if($code=="au")
                    <option selected="{{ $code }}">{{$country}}</option>
                @else
                    <option value="{{ $code }}">{{ $country }}</option>
                @endif
            @endforeach
        </select>

        <span class="input-group-addon flyer-label">
            <label for="price"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;Price:</label>
        </span>
        <input type="text" name="price" id="price"
               class="form-control" value="{{ old('price') }}" required>
    </div>
</div> {{-- Country and Price --}}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label" style="vertical-align: top">
            <label for="description"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;Description:</label>
        </span>
        <textarea type="text" name="description" id="description"
               class="form-control" rows="10" required>{{ old('description') }}</textarea>
    </div>
</div> {{-- Description --}}

<div class="form-group group-field">
    <div class="input-group">
        <span class="input-group-addon flyer-label">
            <label for="place"
                   class="form-label glyphicon glyphicon-list-alt text-left">&nbsp;uk, fr, au</label>
        </span>
        <input type="text" name="place" id="place"
               class="form-control" value="{{ old('place') }}" required>
    </div>
</div> {{-- city --}}

<div class="form-group" style="text-align: right">
    <button type="submit" class="btn btn-primary">Submit Request</button>
</div>