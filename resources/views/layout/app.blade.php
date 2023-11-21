<!DOCTYPE html>
@include('layout.header')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .biography {
      font-family: 'Times New Roman', Times, serif;
      max-width: 1450px;
      margin: 30px auto;
      padding: 26px;
      background-color: #fff;
      box-shadow: 0 0 8px rgba(10, 10, 10, 0.992);
      text-align: justify;
      line-height: 1.5;
    }
    .img_deg
    {
      float: inherit;
      object-position: 1cm;
      width: 337px;
      height: 3in;
      margin-top:100px;
    }
    .img_right{
        float: right;
        object-position: -1cm;
        width: 337px;
        height: 3in;
        margin-top: 100px;
    }
    .img_centerlogo{
        float:inherit;
        object-position: 0.1cm;
        width: 100px;
        height: 0.9in;
        margin-top: 20px;
        margin-bottom: 98px;
        margin-left: 20px;


    }
    h2 {text-align: center;}
    h3 {text-align: center;}

    </style>

    <title>Bill Gates</title>
</head>
<body>



    <section id="content">

      <img class="img_deg" src="https://cdn.britannica.com/71/103171-050-BD1B685A/Bill-Gates-Microsoft-Corporation-operating-system-press-2001.jpg">
      <img class="img_deg" src="https://media.gettyimages.com/id/1692521154/photo/new-york-new-york-bill-gates-attends-goalkeepers-2023-daytime-event-at-jazz-at-lincoln-center.jpg?s=612x612&w=0&k=20&c=Y2XlSNFOKYx8sGX-FidHqfMRULIJumwNFbnv2ituY8Y=">
      <img class="img_right" src="https://media.gettyimages.com/id/1678294687/photo/washington-dc-bill-gates-co-chair-of-the-bill-melinda-gates-foundation-arrives-for-the-ai.jpg?s=612x612&w=0&k=20&c=qM_TB33XE6EAbTYv72MaHtl1OlmerW9p30E4WJTI6p8=">
      <img class="img_right" src="https://media.gettyimages.com/id/1719101440/photo/brussels-belgium-co-founding-of-bill-melinda-gates-foundation-bill-gates-attends-a-ceremony.jpg?s=612x612&w=0&k=20&c=kQF8C0ejnQ39r-SAk9kJG_XxWl_E9YVsr4wDxayl44o=">
      <img class="img_centerlogo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/2048px-Microsoft_logo.svg.png">
      <div class="biography">
            <br>

            <hr>
           <i><p><h3>"This website is dedicated to the life and achievements of Bill Gates, one of the greatest minds in the history of computers."</h3></p></i>
           <hr>
            <h2>Bill Gates</h2>


            <p>
              Bill Gate is a business magnate, software developer, philanthropist, and author. He co-founded Microsoft Corporation in 1975,
              which became the world's largest personal-computer software company. Gates led the company as chairman and CEO until he stepped
              down as CEO in 2000, but he remained actively involved in its management.
            </p>

            <p>
              In the late 1990s, Gates became known for his philanthropic work, particularly in global health and education. Along with his
              then-wife Melinda, he established the Bill & Melinda Gates Foundation in 2000, which has since become one of the world's
              largest private charitable foundations.
            </p>

            <p>
              Gates has received numerous awards and honors for his technological innovations and charitable work. He continues to be a
              influential figure in the technology industry and a leading advocate for global health and education.
            </p>
            <p>
              Gates wrote his first software program at the age of 13. In high school he helped form a group of programmers who computerized their school’s payroll system and founded Traf-O-Data,
              a company that sold traffic-counting systems to local governments. In 1975 Gates, then a sophomore at Harvard University, joined his hometown friend Paul G. Allen to develop software for the first microcomputers.
              They began by adapting BASIC, a popular programming language used on large computers, for use on microcomputers.
            </p>
              <p>
              With the success of this project, Gates left Harvard during his junior year and, with Allen, formed Microsoft.
              Gates’s sway over the infant microcomputer industry greatly increased when Microsoft licensed an operating system called MS-DOS to International Business Machines Corporation—then the world’s biggest computer supplier and industry pacesetter—for use on its first microcomputer,
               the IBM PC (personal computer). After the machine’s release in 1981, IBM quickly set the technical standard for the PC industry, and MS-DOS likewise pushed out competing operating systems. While Microsoft’s independence strained relations with IBM,
               Gates deftly manipulated the larger company so that it became permanently dependent on him for crucial software. Makers of IBM-compatible PCs, or clones, also turned to Microsoft for their basic software. By the start of the 1990s he had become the PC industry’s ultimate kingmaker.
            </p>
            <p>
                The story of progress is complicated and that's why Bill Gates is always looking for a better way to communicate it. Recently, Gates shared an infographic that tells the story simply,
                clearly and visually.Gates is part of a group of thinkers, authors, statisticians and historians who attempt to explain why today is the greatest time to be alive in all of human history.
                While the data clearly supports their argument, a host of psychological barriers makes it difficult to get the news across.
                One of those psychological barriers is what Nobel Prize-winning economist, Daniel Kahneman, called availability bias.
            </p>
            <p>
                In short, what we see or read every day skews our perspective.
                And since "bad is stronger than good"—we pay more attention to threats than positive news—the threatening news passes more easily through our mental filters.
                In survey after survey, most people don't know how much progress we've made in the last 20, 50, 100 and 200 years simply due to the fact that they don’t see it every day.
            </p>
    </section>

</body>

</html>
@include('layout.footer')
