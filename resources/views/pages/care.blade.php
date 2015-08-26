@extends('layout')

@section('title', 'Tattoos - Tattoo Cultr')

@section('header')
    <style>
        p{
            font-size: 16px;
            line-height: 1.5;
            padding: 0 0 20px;
            color: #666666;
            font-weight: 100;
            font-family: 'Open Sans', sans-serif;
        }
        ul li p{
            font-size: 16px;
            line-height: 1.5;
            padding: 0;
            color: #666666;
            font-weight: 100;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid main" id="page-top">
        <div class="row">
            <div class="no-cover">
            </div>
            <br><br>
            <div class="container">
                <h2 class="text-center">Tattoo <span class="text-danger">aftercare</span></h2>
                <hr>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h3>How to care for your <span class="text-danger">tattoo</span></h3>
            <br>
            <div class="text-center">
                <img class="img-responsive" src="{!! asset('assets/images/care1.jpg') !!}" alt="">
            </div>            <br>
            <hr>
            <p>The healing of your tattoo is the final aspect of your art piece.  The opinions and advice given are endless, and there are more experts out there than tattoos. Since we guarantee our work we ask you to follow our advice and not your buddy’s that has three tattoos. Just as with a psychiatrist, you’ll probably never get the same advice or instructions from different artists.  But after many years of combined experience, you will find this information very beneficial in healing your Unique Ink tattoo.
                A tattoo normally takes anywhere from 7 to 14 days to look fully healed, depending on the type, style, size and placement.  The truth is that it can really take up to a month for a tattoo to be fully healed below the surface of the skin and for your body’s natural healing abilities to lock the ink in completely. Yes, all of these things can and will make a difference.  There is no “idiot proof” method, but if you take the time to read the following, you will stand a much better chance of healing your tattoo without any problems to ensure that it looks as good as possible.</p>
        </div>

        <div class="container secton-hr">
            <h3>Top 7 Tattoo Aftercare <span class="text-danger">Tips</span>:</h3>
            <div class="text-center">
                <img src="{!! asset('assets/images/care2.jpg') !!}" alt="">
            </div>
            <br>

            <ol>
                <li>
                    <p>
                        Pay attention to what your tattooist tells you and do precisely what he or she instructs. If she/he is a professional with experience, they will certainly know what product and healing technique works best for their own work, in general, and for their clients in particular. Keep in mind, if you change the aftercare for whatever reason the tattooist is not obliged to touch up your tattoo free of cost. It is your responsibility to take care of your tattoo once you leave the studio.
                    </p>
                </li>
                <li>
                    <p>
                        <strong>DO NOT WRAP YOUR TATTOO AGAIN</strong> unless explicitly instructed to do so by your artist. It is extremely important to keep the tattoo clean after the protection has actually been taken off. Remember, your new tattoo is just like an open injury, do not forget that! Most tattooists advise hand-washing the tattoo extremely lightly though thoroughly with your (CLEAN) fingers, using an unscented, anti-bacterial soap. Allow it to air dry or lightly pat it dry with a clean paper towel. <strong>CLEAN</strong>. Everything you use or touch must be clean. You don’t want cat hairs sitting on your healing tattoo.
                    </p>
                </li>
                <li>
                    <p>
                        It is very common that a new tattoo be sensitive, red or slightly inflamed. Most people experience some irritation a day or so after getting a new tattoo (it differs depending on the size, placement and amount of work in the tattoo). If these symptoms continues longer than 3 or 4 days, call your tattooist so you can set up a time to come to the shop so they can see it and advise you.
                    </p>
                </li>
                <li>
                    <p>
                        Your tattoo will weep in the first couple of days. The fluid may be clear or slightly colored the same as your tattoo. This is normal, and it does not indicate that your tattoo is coming out. Just clean it regularly as instructed and let it go through the healing process. Your body knows how to heal itself, you are merely assisting it.
                    </p>
                </li>
                <li>
                    <p>
                        Keep your tattoo slightly moist. If you allow it to dry out it can lead to a thick scab formation and you don’t want that. Drying out your tattoo can cause it to slow the recovery procedure and could even harm the tattoo. Your tattooist will likely advise a cream or ointment to use and how often to apply to your new tattoo. DO NOT OVERSATURATE your tattoo! Too much ointment on your tattoo and it cannot breathe. A very light coat is all that’s needed. Patting off excess ointment so that it is barely even shiny. A dab is all you need.
                    </p>
                </li>
                <li>
                    <p>
                        Within a couple of days to a week, a thin layer of skin will start to peel or flake off from the whole tattoo, just like the peeling you receive from sunburn. Again, this is totally normal. It is essentially the scabby layer and dead skin coming off. Do not scratch it or play with it! It will probably itch throughout this time, do not scratch! Your tattoo will still be extremely delicate and you could end up scratching it open. One remedy for the itch is to lightly pat or slap it with a clean paper towel.
                    </p>
                </li>
                <li>
                    <p>
                        Do not soak your tattoo for at least two weeks from the day it’s been done. So no bathing or swimming (sauna is also not recommended). Showering is entirely great, in fact cleaning your tattoo under the shower is probably the simplest way to do it. Your tattooist might encourage you to avoid these things for a longer period of time; it depends on your skin healing time and which aftercare you use.
                    </p>
                </li>
            </ol>
        </div>

        <div class="container">
            <h3>TATTOO AFTERCARE <span class="text-danger">INSTRUCTIONS</span></h3>
            <br>
            <div class="text-center">
                <img class="img-responsive" src="{!! asset('assets/images/care3.jpg') !!}" alt="">
            </div>
            <br>
            <hr>
            <h4>If you have any questions about your tattoo or the healing process, please call or e-mail.</h4>

            <br>
            <h4>Please do</h4>
            <ul>
                <li>
                    <p>
                        Always wash your hands before touching your tattoo!
                    </p>
                </li>
                <li>
                    <p>
                        When you get home: Remove bandage within 2-3 hours after getting your tattoo. Do not re-bandage.
                    </p>
                </li>
                <li>
                    <p>
                        Wash your tattoo with an anti-bacterial liquid soap. Be gentle, do not use a washcloth or anything that will exfoliate your tattoo. Only use your hands.
                    </p>
                </li>
                <li>
                    <p>
                        Gently pat your tattoo dry with a clean cloth or paper towel. Do not rub, or use a fabric with a rough surface.
                    </p>
                </li>
                <li>
                    <p>
                        The first 3-4 days: Rub a small amount of ointment on your tattoo. You may use Bacitracin, A&D, Neosporin, or Tattoo Lube– whatever you know you’re not allergic to. Always use clean hands and do not place your fingers back into the ointment after touching your tattoo. Make sure to rub the ointment in so that it is not shiny, or greasy– you want the thinnest amount possible. Pat off any excess ointment with a clean cloth or paper towel. Do not use Vaseline, petroleum or Bag Balm. Wash, dry and apply ointment 3-5 times daily, as needed.
                    </p>
                </li>
                <li>
                    <p>
                        On the first night, you may want to wrap your tattoo in saran wrap to prevent sticking to your bedding. Do not use any cloth bandages or pads, as the fibers of this material can adhere to your open tattoo and hinder the healing process.
                    </p>
                </li>
                <li>
                    <p>
                        Wear clean, soft clothing over your tattoo for the first 2 weeks– nothing abrasive or irritating. For a foot tattoo: go barefoot as much as possible. If you must wear shoes, first wrap your clean tattoo in saran wrap, then cover with a clean cotton sock before putting on your shoe. Avoid sandals or flip flops for this period to prevent chafing and damage to the tattoo.
                    </p>
                </li>
                <li>
                    <p>
                        After day 4: On the 3rd or 4th day your tattoo will begin to peel. This is normal! Do not pick at the skin. Begin using a mild, white, unscented lotion, free of dyes or Perfumes.
                    </p>
                </li>
                <li>
                    <p>
                        Use lotion for minimum 2 weeks, 1-2 times daily.
                    </p>
                </li>
            </ul>

            <br>
            <h4>Things to avoid:</h4>
            <ul>
                <li>
                    <p>
                        Do not pick, scratch, peel, slap, rub or irritate your tattoo.
                    </p>
                </li>
                <li>
                    <p>
                        You can shower, but you may not soak your tattoo for 2 weeks. No swimming, soaking or hot tub.
                    </p>
                </li>
                <li>
                    <p>
                        You may not expose your tattoo to the sun for at least 3 weeks, after that you must use sun block.
                    </p>
                </li>
                <li>
                    <p>
                        Do not wear abrasive materials, jewelry, or shoes that rub against your tattoo.
                    </p>
                </li>
                <li>
                    <p>
                        Do not let anyone touch your tattoo, unless they wash their hands.
                    </p>
                    </li>
                <li>
                    <p>
                        Beware of gym equipment, wash it well before usingit.
                    </p>
                </li>
            </ul>

            <br>
            <h4>You can also</h4>
            <ul>
                <li>
                    <p>
                        Ice your tattoo to reduce swelling.
                    </p>
                </li>
                <li>
                    <p>
                        Elevate your tattoo, to reduce swelling.
                    </p>
                </li>
                <li>
                    <p>
                        Take short showers.
                    </p>
                </li>
            </ul>

        </div>


        <br><br><br><br><br>
    </section>


@endsection

@section('footer')
@endsection