<?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns:moz="http://www.mozilla.org/2006/browser/search/" xmlns="http://a9.com/-/spec/opensearch/1.1/">
    <ShortName>{{ $name }}</ShortName>
    <Description>{{ $description['before_name'] }} {{ $name }} {{ $description['after_name'] }}</Description>
    <InputEncoding>UTF-8</InputEncoding>
    <Url method="get" type="text/html" 
    template="{{ $route_string }}"/>
</OpenSearchDescription>
