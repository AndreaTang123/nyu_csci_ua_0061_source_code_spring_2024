<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macro 8</title>
    <style>
        nav a:link {
            padding: 10px;
            border-radius: 0px;
            border: 1px solid black;
            text-decoration: none;
        }

        nav {
            margin-bottom: 20px;;
        }

        .active {
            border: 1px solid black;
            background-color: #DDD;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Movie Database</h1>
    <nav>
        <a href="#" class="tab active" data-mycontentpanel="#view">View All</a>
        <a href="#" class="tab" data-mycontentpanel="#add">Add Movie</a>
        <a href="#" class="tab" data-mycontentpanel="#search">Search Movies</a>
    </nav>

    <div id="content">
        <div id="view">
            <h2>View</h2>
        </div>
        <div id="add" class="hidden">
            <h2>Add</h2>
        </div>
        <div id="search" class="hidden">
            <h2>Search</h2>
        </div>
    </div>
    <script>
        // get a ref to all .tab elements
        let allTabs = document.querySelectorAll('.tab');

        // visit each element
        for (let i = 0; i < allTabs.length; i++) {
            // have each element listen for mouse clicks
            allTabs[i].onclick = function (event) {
                // when clicked, make the current active tab inactive
                document.querySelector('.active').classList.remove('active');

                // make this tab active
                event.currentTarget.classList.add('active');

                // hide all of the other content panels
                let allContent = document.querySelectorAll('#content div');
                for (let j = 0; j < allContent.length; j++) {
                    allContent[j].classList.add('hidden');
                }

                // use our dataset property (#ID) to figure out which tab should be shown by using its ID
                let myContentPanel = document.querySelector(event.currentTarget.dataset.mycontentpanel);
                myContentPanel.classList.remove('hidden');
            }
        }


    </script>
</body>

</html>