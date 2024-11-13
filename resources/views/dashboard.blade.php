<x-app-layout>
  

   <section>
<div class="card-container">
    <!-- Card 1: Manage Candidates -->
    <div class="card">
      <div class="card-icon">👥</div>
      <div class="card-title">Manage Candidates</div>
      <div class="card-description">Handle all candidate profiles, track applications, and manage communication easily.</div>
      <a href="{{ route('candidates.index') }}" class="btn btn-light">Manage</a>
    </div>

    <!-- Card 2: Manage Employers -->
    <div class="card">
      <div class="card-icon">🏢</div>
      <div class="card-title">Manage Employers</div>
      <div class="card-description">Oversee employer accounts, job postings, and collaboration with recruiters.</div>
      <a href="{{ route('employers.index') }}" class="btn btn-light">Manage</a>
    </div>

    <!-- Card 3: Manage Blogs -->
    <div class="card">
      <div class="card-icon">📝</div>
      <div class="card-title">Manage Blogs</div>
      <div class="card-description">Create, edit, and manage blog posts to keep your community informed and engaged.</div>
      <a href="{{ route('blog.index') }}" class="btn btn-light">Manage</a>
    </div>

    <!-- Card 4: Manage Industry -->
    <div class="card">
      <div class="card-icon">🏭</div>
      <div class="card-title">Manage Industry</div>
      <div class="card-description">Keep industry-related data updated to ensure relevant job matches.</div>
      <a href="{{ route('industries.index') }}" class="btn btn-light">Manage</a>
    </div>

    <!-- Card 5: Manage Messages -->
    <div class="card">
      <div class="card-icon">✉️</div>
      <div class="card-title">Manage Messages</div>
      <div class="card-description">Easily view and respond to messages from both candidates and employers.</div>
      <a href="{{ route('messages.create') }}" class="btn btn-light">Manage</a>
    </div>

    <!-- Card 6: Manage Contacts -->
    <div class="card">
      <div class="card-icon">📞</div>
      <div class="card-title">Manage Contacts</div>
      <div class="card-description">Manage your contact list to keep communication channels clear and effective.</div>
      <a href="{{ route('contacts.index') }}" class="btn btn-light">Manage</a>
    </div>
  </div>




  <style>
 section {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      max-width: 1200px;
      padding: 20px;
    }
    .card {
      background: #1d2674;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      color: #333;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
    .card-icon {
      font-size: 40px;
      margin-bottom: 15px;
      color: #fff;
    }
    .card-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #fff;
    }
    .card-description {
      font-size: 16px;
      margin-bottom: 20px;
      color: #fff;
    }
    .card a{
      background-color: #ffffff;
      color: #333;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .card button:hover {
      background-color: #ffe0b3;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
      .card-container {
        grid-template-columns: 1fr;
      }
      .card {
        padding: 15px;
      }
      .card-icon {
        font-size: 35px;
      }
      .card-title {
        font-size: 20px;
      }
      .card-description {
        font-size: 14px;
      }
      .card a{
        padding: 8px 15px;
      }
    }

    @media (max-width: 480px) {
      .card {
        padding: 10px;
      }
      .card-icon {
        font-size: 30px;
      }
      .card-title {
        font-size: 18px;
      }
      .card-description {
        font-size: 13px;
      }
      .card button {
        padding: 7px 12px;
        font-size: 14px;
      }
    }
  </style>



</section>




</x-app-layout>
