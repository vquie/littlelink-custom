<label for='button' class='form-label'>Select a predefined site</label>
<?php use App\Models\Button; $button = Button::find($button_id); if(isset($button->name)){$buttonName = $button->name;}else{$buttonName = 0;} ?>

<select name='button' class='form-control'>
        @if($buttonName != 0)<option value='{{$buttonName}}'>{{ucfirst($buttonName)}}</option>@endif
    @foreach ($buttons as $b)
        @if(!in_array($b["name"], ["custom_website", "custom", $buttonName]))
        <option class='button button-{{$b["name"]}}' value='{{$b["name"]}}' {{ $b["selected"] == true ? "selected" : ""}}>{{$b["title"]}}</option>
        @endif
    @endforeach
</select>

<label for='title' class='form-label'>Custom Title</label>
<input type='text' name='title' value='{{$link_title}}' class='form-control' />
<span class='small text-muted'>Leave blank for default title</span><br>

<label for='link' class='form-label'>URL</label>
<input type='url' name='link' value='{{$link_url}}' class='form-control' required />
<span class='small text-muted'>Enter the link URL</span>

