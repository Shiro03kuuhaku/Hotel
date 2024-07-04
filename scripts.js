// Data fasilitas hotel
const facilitiesData = [
  {
    name: "SWIMMING POOL",
    description: "INFINITY'S POOL",
    image: "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailImage: "https://images.unsplash.com/photo-1534009502677-4e5080efa8c6?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailDescription: `
      The Infinity Pool at Nothing's Hotel offers an unforgettable swimming experience. With breathtaking views of the city skyline, this pool is designed to provide guests with a sense of boundless luxury and relaxation. Equipped with a state-of-the-art heating system, the pool ensures comfortable swimming in any weather, making it an ideal retreat year-round.
      
      Surrounding the pool is a stylish lounge area, perfect for unwinding after a refreshing swim. Guests can relax in plush loungers while sipping on refreshing drinks from the poolside bar. The combination of stunning views, modern amenities, and attentive service makes the Infinity Pool a standout feature of Nothing's Hotel, offering a serene escape from the bustling city life.
    `
  },
  {
    name: "SPA",
    description: "RELAX SPA",
    image: "https://plus.unsplash.com/premium_photo-1661682818783-c13fc92569ce?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailImage: "https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?q=80&w=1769&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailDescription: `
      The Relaxation Spa at Nothing's Hotel is a haven of tranquility, meticulously crafted to provide an immersive experience in rejuvenation and wellness. From the moment you step through our doors, you are enveloped in an atmosphere of serenity, designed to transport you away from the hustle and bustle of everyday life.
      
      Our spa offers an extensive range of indulgent treatments, each meticulously curated to cater to your unique needs and desires. Whether you're seeking the deep relaxation of a traditional massage, the invigorating benefits of aromatherapy, or the therapeutic warmth of hot stone therapy, our team of skilled therapists is dedicated to ensuring your complete satisfaction.
    `
  },
  {
    name: "RESTAURANT",
    description: "GAIA RESTAURANT",
    image: "https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailImage: "https://images.unsplash.com/photo-1519690889869-e705e59f72e1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailDescription: `
      Gaia Restaurant offers a dining experience that seamlessly blends local flavors with international influences. Nestled within our hotel, Gaia Restaurant is a culinary destination where freshness meets creativity and tradition meets innovation. Our culinary team is committed to sourcing the finest locally-sourced ingredients, ensuring that every dish is not only delicious but also healthy and sustainable.
      
      Step into our restaurant and be greeted by an inviting atmosphere that stimulates the senses and ignites the palate. The open design concept allows guests to immerse themselves in the culinary spectacle unfolding in our interactive kitchen, where our talented chefs showcase their culinary prowess with flair and finesse.
    `
  },
  {
    name: "GYM",
    description: "GYM",
    image: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailImage: "https://images.unsplash.com/photo-1558611848-73f7eb4001a1?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    detailDescription: `
      The Active Gym at Nothing's Hotel is equipped with state-of-the-art fitness equipment and cutting-edge fitness tracking technology. With personal trainers on hand, guests can tailor their workout routines or join group classes such as pilates, spinning, and HIIT. After their workout, the recovery area with cryotherapy and hydrotherapy pool offers the perfect way to relax muscles.
      
      Our gym is a sanctuary for fitness enthusiasts of all levels, providing a dynamic environment where guests can pursue their health and wellness goals with guidance and support from our experienced trainers. Whether you're a seasoned athlete or just starting your fitness journey, our facilities and programs are designed to empower you to achieve your best self.
    `
  },
];

// Fungsi untuk membuat slide fasilitas
// Memperbarui createFacilitySlide fungsi untuk menambahkan margin pada gambar
function createFacilitySlide(facility, index) {
  const activeClass = index === 0 ? 'active' : '';
  const slide = `
    <div class="carousel-item ${activeClass}">
      <img src="${facility.image}" class="d-block w-100" alt="${facility.name}">
      <div class="carousel-caption d-none d-md-block">
        <h5>${facility.name}</h5>
        <p>${facility.description}</p>
      </div>
    </div>
  `;
  return slide;
}

// Fungsi untuk menampilkan fasilitas dalam carousel dan rincian detail
function displayFacilities() {
  const facilitiesContainer = document.getElementById('facilities');
  let facilitiesHTML = '';
  facilitiesData.forEach((facility, index) => {
    facilitiesHTML += createFacilitySlide(facility, index);
  });
  facilitiesContainer.innerHTML = facilitiesHTML;

  // Menambahkan penjelasan rinci dan gambar detail dengan margin
  const detailedFacilitiesContainer = document.getElementById('detailedFacilities');
  let detailedFacilitiesHTML = '';
  facilitiesData.forEach((facility) => {
    detailedFacilitiesHTML += `
      <div class="d-flex justify-content-between align-items-center my-3">
        <div class="flex-grow-1 text-wrapper">
          <h3>${facility.name}</h3>
          <p>${facility.detailDescription}</p>
        </div>
        <div class="flex-shrink-0">
          <img src="${facility.detailImage}" alt="${facility.name} detail" class="img-fluid rounded detail-image">
        </div>
      </div>
      <hr>
    `;
  });
  detailedFacilitiesContainer.innerHTML = detailedFacilitiesHTML;
}

// Memanggil fungsi untuk menampilkan fasilitas saat halaman dimuat
document.addEventListener('DOMContentLoaded', displayFacilities);

