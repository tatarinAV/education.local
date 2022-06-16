@foreach ($educationalMaterials as $educationalMaterial)
                    {{ $educationalMaterial->title }}
                @endforeach
{{ $educationalMaterials->links() }}
