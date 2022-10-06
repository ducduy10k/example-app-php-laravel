@props(['data'])
<x-card-container class="p-4">
    <h1><?php echo $data['name']; ?></h1>
    <h2><?php echo $data['description']; ?></h2>
</x-card-container>
