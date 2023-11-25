<!DOCTYPE html>
<html lang="en">
    @include('layout.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achievements</title>
</head>
<style>
    body{
        background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20230703/pngtree-minimalist-space-3d-render-vibrant-purple-waves-on-blue-purple-gradient-image_3742526.jpg");
        height:300%;
        background-position:
        background-repeat: no-repeat;
        background-size: 1600px;
    }


    section {
        max-width: 800px;
        margin: 100px auto;
        background-color: whitesmoke;
        padding: 80px;
        color: black;
        box-shadow: 0 0 300px rgba(36, 174, 228, 0.992);
        border-radius: 50px;
        line-height: 1.5;
        text-align:justify;
        background: linear-gradient( rgb(173, 195, 255), rgb(53, 188, 255));
    }

    h2 {
        color:black;
    }

    .achievement {
        align-items:baseline;
        margin-bottom: 20px;
        margin-left:auto;
        margin-right: auto;
        text-align: center;
        line-height: 1.5
    }

    .achievement img {
        width: 450px;
        height: 340px;
        border-radius: 22px;

    }

    .achievement-text {
        flex-grow: unset;
        margin-right:auto;
        margin-left: auto;
        margin-bottom: auto;
        margin-top: auto;
        text-align: justify;

    }
    .text{
        line-height: 1.7;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <br>

    <section>
        <h2>Philanthropy</h2>
        <div class="achievement">
            <img src="https://cdn.geekwire.com/wp-content/uploads/2016/11/gatesmedal-630x408.png" alt="Philanthropy Icon">
            <div class="achievement-text">
                <p>Founded in 2000 by Bill and Melinda Gates, the Gates Foundation is a global philanthropic powerhouse addressing critical issues worldwide.</p>

                <h2>Areas of Focus:</h2>
                <ul>
                    <li><strong>Global Health:</strong> Combatting infectious diseases, vaccine development, and healthcare improvement.</li>
                    <li><strong>Education:</strong> Enhancing educational opportunities, innovation, and technology in learning.</li>
                    <li><strong>Poverty Alleviation:</strong> Working to reduce extreme poverty globally through sustainable solutions.</li>
                    <li><strong>Access to Information Technology:</strong> Investing in technology to empower underserved populations.</li>
                    <li><strong>Women's and Children's Health:</strong> Improving maternal and child health, with a focus on family planning and nutrition.</li>
                    <li><strong>Agricultural Development:</strong> Supporting programs to improve food security and assist small-scale farmers.</li>
                </ul>

                <h2>Approach:</h2>
                <p>The foundation adopts a strategic, data-driven approach, collaborating with governments, NGOs, and the private sector to maximize impact.</p>

                <h2>Notable Initiatives:</h2>
                <ul>
                    <li><strong>GAVI (Global Alliance for Vaccines and Immunization):</strong> Key supporter for increasing access to immunization in developing countries.</li>
                    <li><strong>Global Fund to Fight AIDS, Tuberculosis, and Malaria:</strong> Substantial funding to combat major infectious diseases.</li>
                    <li><strong>Common Core State Standards Initiative:</strong> Supporting the development of common core standards to improve education in the U.S.</li>
                </ul>

                <p>Note: Bill and Melinda Gates announced their divorce in 2021, but as of the last update in January 2022, they intended to continue their joint work at the foundation. Please check for any recent developments.</p>

            </div>
        </div>
    </section>

    <section>

        <h2>Technology</h2>

        <div class="achievement">
            <img src="https://i.pcmag.com/imagery/reviews/00xBy0JjVybodfIwWxeGCkZ-1.fit_lim.size_1050x591.v1679417407.jpg" alt="Technology Icon">
            <div class="achievement-text">
            <div class="text">
                <p>Bill Gates played a pivotal role in the development of the Windows operating system, and his achievements in this regard are significant. Windows, first released in 1985, became one of the most popular and widely used operating systems for personal computers. Here are some key achievements related to Windows and Bill Gates:</p>

    <ol>
        <li><strong>Windows 1.0 (1985):</strong> The initial release of Windows marked the beginning of a graphical user interface for MS-DOS-based systems. It introduced features like overlapping windows and icons, setting the foundation for future versions.</li>

        <li><strong>Windows 3.0 (1990):</strong> This version was a major success, introducing Program Manager and File Manager, as well as support for TrueType fonts. It significantly improved the user interface and contributed to Windows' growing popularity.</li>

        <li><strong>Windows 95 (1995):</strong> A groundbreaking release that brought a new Start menu, taskbar, and the Plug and Play feature. Windows 95 was a massive commercial success and is considered a milestone in the history of personal computing.</li>

        <li><strong>Windows XP (2001):</strong> Known for its stability and user-friendly interface, Windows XP became one of the most widely used operating systems. It brought improvements in multimedia support and networking capabilities.</li>

        <li><strong>Windows 7 (2009):</strong> Following the less successful Windows Vista, Windows 7 was well-received for its performance improvements, redesigned taskbar, and enhanced touch support. It became a widely adopted and reliable operating system.</li>

        <li><strong>Windows 8 and 8.1 (2012):</strong> Despite mixed reviews, these versions introduced a more touch-centric interface, aiming for a unified experience across various devices.</li>

        <li><strong>Windows 10 (2015):</strong> Windows 10 marked a shift to a "Windows as a Service" model, with continuous updates and improvements. It brought back the Start menu, introduced the Microsoft Edge browser, and aimed for a seamless experience across devices.</li>
    </ol>

    <p>Bill Gates' achievements in the realm of operating systems extend beyond Windows. His leadership and vision at Microsoft were instrumental in establishing the company as a dominant force in the software industry. Windows, under his guidance, became synonymous with personal computing for millions of users worldwide.</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Business</h2>

        <div class="achievement">

        <img src="images/logo.png"alt="Business Icon" >
            <div class="achievement-text">
                {{-- <p>Led Microsoft to become one of the world's largest and most successful technology companies.</p> --}}
                <p>Bill Gates played a pivotal role in leading Microsoft to become one of the world's largest and most successful technology companies.</p>

    <h2>Key Achievements:</h2>
    <p>Under Bill Gates' leadership, Microsoft achieved the following:</p>
    <ul>
        <li><strong>Technological Innovation:</strong> Led the company in developing groundbreaking technologies and software solutions.</li>
        <li><strong>Operating Systems:</strong> Microsoft's Windows operating system became the dominant platform for personal computers worldwide.</li>
        <li><strong>Microsoft Office Suite:</strong> Introduced and popularized the Microsoft Office suite, including Word, Excel, and PowerPoint.</li>
        <li><strong>Global Impact:</strong> Expanded Microsoft's influence globally, contributing to the growth of the technology industry.</li>
        <li><strong>Business Expansion:</strong> Oversaw the expansion of Microsoft's product portfolio and services, diversifying the company's offerings.</li>
        <li><strong>Strategic Partnerships:</strong> Fostered key partnerships with other tech companies, contributing to the overall success of the industry.</li>
    </ul>

    <h2>Business Leadership:</h2>
    <p>Bill Gates' strategic vision and business acumen were instrumental in Microsoft's success. His leadership style emphasized innovation, collaboration, and a focus on delivering products that shaped the digital landscape.</p>

    <p>Microsoft, founded in 1975, became a powerhouse under Gates' guidance, playing a crucial role in the personal computer revolution and the subsequent evolution of the technology industry.</p>

    <p>While Bill Gates stepped down from his day-to-day role at Microsoft in 2008, his impact on the company and the technology sector as a whole is enduring.</p>

    <h2>Philanthropy and Beyond:</h2>
    <p>Post his active role at Microsoft, Bill Gates has dedicated much of his time and wealth to philanthropic endeavors, co-founding the Bill & Melinda Gates Foundation to address global health and education issues.</p>

            </div>
        </div>
    </section>

</body>
@include('layout.footer')
</html>
