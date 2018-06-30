<div class="col-md">{{ bs()->formGroup()->label('Slug (alphanumeric, max. 20 chars, optional)')->control(bs()->text('slug')->placeholder('eXamp1e')) }}</div>
<div class="col-md">{{ bs()->formGroup()->label('Title (max. 50 chars)')->control(bs()->text('title')->placeholder('Example Homepage')) }}</div>
<div class="col-md">{{ bs()->formGroup()->label('Description (max. 255 chars)')->control(bs()->textArea('description')) }}</div>
<div class="col-md">{{ bs()->formGroup()->label('Link (max. 2000 chars)')->control(bs()->textArea('link')) }}</div>