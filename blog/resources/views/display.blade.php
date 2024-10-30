<div>
    <h1>List of all Images</h1>
    
    <style>
        .image-style {
            width:200px; /* Adjust width as needed */
             height: auto; 
            border-radius: 10px; /* Adds rounded corners */
            margin: 10px; /* Adds spacing between images */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Adds shadow */
            transition: transform 0.3s ease-in-out; /* Animation for hover */
        }

        .image-style:hover {
            transform: scale(1.05); /* Slight zoom effect on hover */
        }
    </style>

    @foreach($imgData as $img)
        <img src="{{url('storage/'.$img->path)}}" alt="" class="image-style">
    @endforeach
    <a href="/upload">Upload Image</a>
</div>
