<style scoped>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        display: flex;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        border: none;
        outline: none;
        flex: 1;
        cursor: pointer;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border-top: none;
    }

    .intro-table {
        width: 90%;
        position: absolute;
        right: 0px;
        right: 0px;
        bottom: 0px;
        top: 0px;
        border: 1px solid #1c9f9f;
        margin-bottom: 10px;
    }

    .active .tab-title {}

    @media (max-width: 1024px) {
        .intro-table {
            width: 100%;
        }

        .tab button {
            padding: 3px 2px;

        }


    }
</style>
<div class="intro-table">
    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'London')">
            <div class="tab-title">Overview</div>
        </button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Leadership</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Links</button>
    </div>

    <div id="London" class="tabcontent" style="display:block">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
</div>