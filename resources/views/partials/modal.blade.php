<!-- The Modal -->
<div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{ $produk->nama_produk }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p>Detail review</p>
                <p id="review"></p>
                <p>
                    Value to money: <span id="valueModal"></span><br>
                    Sound quality: <span id="soundQModal"></span><br>
                    Harga: Rp<span id="hargaModal"></span><br>
                    Tipe buds: <span id="budsModal"></span><br>
                    Bluetooth codec: <span id="codecModal"></span><br>
                    Daya tahan baterai: <span id="bateraiModal"></span><br>
                    Sound tuning: <span id="tuningModal"></span><br>
                </p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button class="btn primary-btn btn-dark left-panel">
                    <a href="linkBeli" id="linkBeli" class="text-white text-decoration-none">link pembelian</a>
                </button>
                <button type="button" class="btn btn-primary btn-danger" data-bs-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
