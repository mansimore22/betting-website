@extends('client.layout.main-layout')

@section('title')
    Id
@endsection
@section('content')
    <!-- ==================== Start Home ==================== -->
    <div class="rs-container">
        <div class="rs-tabs">
            <button class="rs-tab active">MY IDs</button>
            <button class="rs-tab">CREATE ID</button>
        </div>
        <div class="rs-search-bar">
            <input type="text" placeholder="Search...">
            <select>
                <option value="all">All Site</option>
                <option value="site1">Site 1</option>
                <option value="site2">Site 2</option>
            </select>
        </div>
        <div class="rs-cards">
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="CBTF 247">
                </div>
                <div class="rs-info">
                    <h3>CBTF 247</h3>
                    <p>cbtf247.in</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="Go Match">
                </div>
                <div class="rs-info">
                    <h3>Go Match</h3>
                    <p>gomatch9.com</p>
                    {{-- <span class="rs-badge">Trending</span> --}}
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="Go ID">
                </div>
                <div class="rs-info">
                    <h3>Go ID (D247)</h3>
                    <p>goid9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="King Exchange">
                </div>
                <div class="rs-info">
                    <h3>King Exchange</h3>
                    <p>kingexch9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="King Exchange">
                </div>
                <div class="rs-info">
                    <h3>King Exchange</h3>
                    <p>kingexch9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="King Exchange">
                </div>
                <div class="rs-info">
                    <h3>King Exchange</h3>
                    <p>kingexch9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="King Exchange">
                </div>
                <div class="rs-info">
                    <h3>King Exchange</h3>
                    <p>kingexch9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
            <div class="rs-card">
                <div class="rs-logo">
                    <img src="https://ss.manage90.com/go-punt/uploads/accounts/1683890655942_785802_YWRVSGTFHGWHPVKFQPNVHQQDR.png"
                        alt="King Exchange">
                </div>
                <div class="rs-info">
                    <h3>King Exchange</h3>
                    <p>kingexch9.com</p>
                </div>
                <button class="rs-create-btn">Create</button>
            </div>
        </div>
    </div>
    <!-- ==================== End Home==================== -->
@endsection
