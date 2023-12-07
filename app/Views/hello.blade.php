<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KNUT7 - {{ KNUT_VERSION }} </title>  

  <style>

/* General */

body {
  font-family: Arial, sans-serif;
  margin: 0;    
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

h1, h2, h3 {
  color: #3f51b5;
}

a {
  color: #3f51b5;  
}

/* Header */

header {
  background-color: #3f51b5;
  color: #fff;
  padding: 20px;
}

header h1 {
  margin: 0;
  color: #fff;
  font-size: 14px;
}

/* Main */

main {
  flex-grow: 1;
  padding: 20px;  
}

/* Sections */

#hero {
  text-align: center; 
}

#features ul {
  list-style: none;
  padding-left: 0;
}

#features li {
  margin-bottom: 10px; 
}

#docs a {
  background-color: #3f51b5;
  color: #fff;
  padding: 10px 15px;
  border-radius: 4px;
  text-decoration: none;
}

/* Footer */

footer {
  background-color: #eee;  
  padding: 20px;
  text-align: center;  
}

footer p {
  margin: 0;
  color: #777;
}

</style>

</head>

<body>

  <header>
    <h1>KNUT7 {{ KNUT_VERSION }}
    <br />current PHP version: {{ PHP_VERSION }}</h1>
  </header>

  <main>

    <section id="hero">

      <h2>Your powerful PHP framework</h2>

      <p>
        Build robust and scalable PHP applications with KNUT7. 
        Optimized for performance and productivity.
      </p>

      <a href="#" class="button">Get started</a>

    </section>
    
    <section id="features">

      <h3>Features</h3>

      <ul>
        <li>⚡ Fast routing</li>
        <li>🔐 Strong security</li>
        <li>📦 Dependency management</li> 
        <li>⚙️ Flexible configuration</li>
      </ul>

    </section>

    <section id="docs">

      <h3>Documentation</h3>

      <p>
        Learn more about installing, configuring and developing with KNUT7.
      </p>

      <a href="#">See the docs</a>

    </section>

  </main>
  
  <footer>
    <p>&copy; Marcio Zebedeu</p>
  </footer>

</body>
</html>