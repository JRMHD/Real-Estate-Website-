<section>
    <h2>UNIT TYPES</h2>
    <p>Click on a unit type to view more details</p>
    <div class="unit-container">
        <div class="unit-card" onclick="location.href='5B+DSQ'">
            <div style="height: 350px;">
                <img src="images/5bed.jpg" alt="5B+DSQ">
            </div>
            <div class="card-content">
                <h3><i class="fas fa-home" style="margin-right: 0.5rem; font-size: 1.6rem;"></i>5B+DSQ</h3>
                <p>Spacious five-bedroom unit with a detached servant quarters.</p>
            </div>
        </div>
        <div class="unit-card" onclick="location.href='5B+DSQ'">
            <div style="height: 350px;">
                <img src="images/gallery1.jpg" alt="4B+DSQ PLUS">
            </div>
            <div class="card-content">
                <h3><i class="fas fa-plus-square" style="margin-right: 0.5rem; font-size: 1.6rem;"></i>4B+DSQ PLUS
                </h3>
                <p>Enhanced four-bedroom unit with extra space and a servant quarters.</p>
            </div>
        </div>
        <div class="unit-card" onclick="location.href='5B+DSQ'">
            <div style="height: 350px;">
                <img src="images/gallery2.jpg" alt="4B+DSQ">
            </div>
            <div class="card-content">
                <h3><i class="fas fa-building" style="margin-right: 0.5rem; font-size: 1.6rem;"></i>4B+DSQ</h3>
                <p>Comfortable four-bedroom unit with a detached servant quarters.</p>
            </div>
        </div>
        <div class="unit-card" onclick="location.href='5B+DSQ'">
            <div style="height: 400px;">
                <img src="images/gallery3.jpg" alt="3B+DSQ PLUS">
            </div>
            <div class="card-content">
                <h3><i class="fas fa-star" style="margin-right: 0.5rem; font-size: 1.6rem;"></i>3B+DSQ PLUS</h3>
                <p>Upgraded three-bedroom unit with additional space and a servant quarters.</p>
            </div>
        </div>
        <div class="unit-card" onclick="location.href='5B+DSQ'">
            <div style="height: 400px;">
                <img src="images/gallery4.jpg" alt="3B+DSQ">
            </div>
            <div class="card-content">
                <h3><i class="fas fa-bed" style="margin-right: 0.5rem; font-size: 1.6rem;"></i>3B+DSQ</h3>
                <p>Three-bedroom unit with a detached servant quarters.</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.unit-card').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.2)';
            card.querySelector('img').style.transform = 'scale(1.1)';
        });
        card.addEventListener('mouseout', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
            card.querySelector('img').style.transform = 'scale(1)';
        });
    });
</script>
<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    section {
        padding: 4rem 2rem;
        background-color: white;
    }

    h2 {
        text-align: center;
        color: #D4AF37;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    p {
        text-align: center;
        color: #333;
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }

    .unit-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
    }

    .unit-card {
        flex-basis: calc(33.33% - 1.33rem);
        background-color: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .unit-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .unit-card .card-content {
        padding: 1.5rem;
    }

    .unit-card h3 {
        font-size: 1.4rem;
        color: #D4AF37;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    .unit-card p {
        color: #333;
        font-size: 0.9rem;
    }

    @media (max-width: 991px) {
        .unit-card {
            flex-basis: calc(50% - 1.33rem);
        }
    }

    @media (max-width: 767px) {
        .unit-card {
            flex-basis: calc(100% - 1.33rem);
        }
    }
</style>
