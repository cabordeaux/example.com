
<?php

$pageTitle = "My Resume";
$description = "This is my resume";
$content = <<<EOT
<main>
  <h1>Clovis Bordeaux</h1>

  <div>
    <a href="https://www.linkedin.com/in/cabordeaux/" target="_blank" rel="noopener">LinkedIn</a>
    //&#x25CF;
    <a href="https://github.com/cabordeaux" target="_blank" rel="noopener">GitHub</a>
    //&#x25CF;
    Greater Chicago Area
  </div>
  
  <section>
    <h2>Web Developer</h2>
    <p>
    A servant/leader proponent of innovative technology solutions in educational and enterprise settings.  An avid hands-on teacher/learner comfortable in networking and software environments, with experiences in building responsive, interactive applications, who adapts easily to challenging situations, with a natural talent for explaining complex concepts using easy-to-understand language.  Experienced in Express, Javascript, Angular and Ionic environments.
    </p>

    <section>
      <h3>Core Competencies</h3>
      <ul>
        <li>
          Building Linux Systems including server, development and production environments
        </li>
        <li>
          Responsive interactive applications development
        </li>
        <li>
          Strong analytical and problem-solving skills
        </li>
        <li>
          Network design
      </ul>
    </section>
    
    <section>
      <h3>Techincal Proficiencies</h3>
  
      <ul>
        <li>Platforms: Linux, Windows, Mac, LAMP, MEAN, NodeJS, Angular, Ionic</li>
        <li>Database: MySQL, MongoDB</li>
        <li>Tools: Command-line, VS Code, SSH, Git, Gulp, Bootstrap, Gulp</li>
        <li>Languages: HTML, CSS, JavaScript, ES6, PHP, Python, Bash, SQL, Angular</li>
      </ul>
    </section>
  </section>

  <section>
    <h2>EDUCATION</h2>

    <h3>Continuing Education, Microtrain Technologies, Chicago, IL 2018-Present</h3>
    <p>
      
    </p>
    <ul>
      <li>Agile full Stack web and hybrid mobile applications development</li>
      <li>Created static pages with menus and external links</li>
      <li>Hybrid Mobile Development with Ionic</li>
      <li>Developed blog platform with user log-in privledges</li>
      <li>Ported applications to interactive webpages</li>
      <li>Set up email server with Domain Keys Infrastructure Management</li>
      <li>Designed animation sequences and computation algorithms</li>
      <li>Optimized UX/UI for useability and appearance</li>
      <li>Built API</li>
      <li>Integrated server-side languages</li>
    </ul>
    <h3>Certifications and Degree Programs</h3>
    <ul>
      <li>Comp TIA A+ Certification, 2018</li>
      <li>MBA, Roosevelt University, 1985</li>
      <li>B.Ed. Webster University, 1972</li>
    </ul>
  </section>

  <section>
    <h2>PROFESSIONAL EXPERIENCE</h2>
    <h3>Intern</h3>
    <h3>FreeGeek NFP, Chicago, IL 2018</h3>
    <p>
     A computer recycling and warehousing facility
    </p>
    <ul>
      <li>Installed and tested Linux systems on desktops and servers</li>
      <li>Taught classes in HTML</li>
      <li>Inspected builds for quality assurance</li>
      <li>Implemented OSI Layers Model and IEEE Standards</li>
      <li>Transposed standard notatin to binary and IPv6 notation as needed</li>
    </ul>
  </section>

  <section>
    <h3>Professional Service Technician</h3>
    <h3>The Handy Company, Chicago, 2015-2017</h3>
    <p>
    A Provider of Installation Services for Homes and Businesses
    </p>
    <ul>
      <li>Installed Smart TV's with wall mounts and in-wall wiring</li>
      <li>Set up wireless communications devices</li>
      <li>Activated purchase plans, devices, and wireless access points</li>
      <li>Installed security systems and cameras</li>
    </ul>
  </section>
  
</main>
EOT;

require '../core/layout.php';