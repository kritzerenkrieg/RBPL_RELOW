<!-- resources/views/components/card-catalog.blade.php -->

@php
    $gudangData = \App\Models\Gudang::all();
    $cards = $gudangData->map(function ($gudang) {
        return [
            'nama_gudang' => $gudang->nama_gudang,
            'lokasi_gudang' => $gudang->lokasi_gudang,
            'harga_gudang' => $gudang->harga_gudang,
        ];
    });
@endphp

<div id="cardContainer">
    @foreach($cards as $card)
        <div class="card">
            <h3>{{ $card['nama_gudang'] }}</h3>
            <p>Lokasi: {{ $card['lokasi_gudang'] }}</p>
            <p>Harga: {{ $card['harga_gudang'] }}</p>
            <button onclick="order('{{ $card['nama_gudang'] }}')">Order</button>
        </div>
    @endforeach
</div>

<div class="pagination">
    <button onclick="previousPage()">Previous</button>
    <span id="currentPage">{{ $currentPage }}</span>
    <button onclick="nextPage()">Next</button>
</div>

<script>
    var cardsPerPage = {{ $cardsPerPage }};
    var currentPage = {{ $currentPage }};
    var cardData = @json($cards);

    function renderCards() {
        var cardContainer = document.getElementById("cardContainer");
        cardContainer.innerHTML = "";

        var startIndex = (currentPage - 1) * cardsPerPage;
        var endIndex = startIndex + cardsPerPage;
        var pageCards = cardData.slice(startIndex, endIndex);

        pageCards.forEach(function(card) {
            var cardDiv = document.createElement("div");
            cardDiv.classList.add("card");

            var title = document.createElement("h3");
            title.textContent = card.nama_gudang;
            cardDiv.appendChild(title);

            var location = document.createElement("p");
            location.textContent = "Lokasi: " + card.lokasi_gudang;
            cardDiv.appendChild(location);

            var price = document.createElement("p");
            price.textContent = "Harga: " + card.harga_gudang;
            cardDiv.appendChild(price);

            var button = document.createElement("button");
            button.textContent = "Order";
            button.onclick = function() {
                order(card.nama_gudang);
            };
            cardDiv.appendChild(button);

            cardContainer.appendChild(cardDiv);
        });
    }

    function order(productTitle) {
        // Add your code to handle the order functionality here
        alert("Order placed for " + productTitle + "!");
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            document.getElementById("currentPage").textContent = currentPage;
            renderCards();
        }
    }

    function nextPage() {
        var maxPages = Math.ceil(cardData.length / cardsPerPage);
        if (currentPage < maxPages) {
            currentPage++;
            document.getElementById("currentPage").textContent = currentPage;
            renderCards();
        }
    }

    renderCards();
</script>
