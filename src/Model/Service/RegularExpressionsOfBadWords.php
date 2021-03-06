<?php
namespace MonthlyBasis\ContentModeration\Model\Service;

/**
 * WARNING
 *
 * The following code contains extremely explicit language.
 *
 * We have written code to replace bad words posted by users with !@#$%^&.
 *
 * In order to ensure that this code is functioning properly,
 * we must use explicit language in our own code.
 *
 * Sorry.
 */
class RegularExpressionsOfBadWords
{
    public function getRegularExpressionsOfBadWords(
    ): array {
        return [
            /*
             * Test string to trigger bad word detectors in production
             * for users who should not have to type a bad word.
             */
            '/ozeybhv/',

            '/8={2,}D/i',
            /*
             * Cannot use word boundary (\b) around dollar sign because
             * dollar sign is not a word character.
             * So, just hard-code some variations for now.
             */
            '/\ba\s*ss(es)?\b/i',
            '/\bazz\b/i',
            '/a(s|\$)\$/i',
            '/a\$(s|\$)/i',
            '/\ba\*\*/i',
            '/@ss/i',
            '/@\$\$/i',
            '/\bas(s|\W)hole/i',
            '/\ba holes\b/i',
            '/a§š/i',

            '/bastard/i',

            '/b(1|l)tch/i',
            '/b\W*(i\W*)?t\W*c\W*h\b/i',
            '/bi+(t|\W)?ch/i',
            '/bicth/i',
            '/bi\dch/i',
            '/a b\*+/i',
            '/biyach/i',

            '/blow\s?job/i',

            '/\bboobs\b/i',
            '/bullshi?t/i',
            '/\bclit\b/i',
            '/cock\s*suck/i',
            '/\bcum\b/i',

            '/\bc(\W|\_| )*(u|\W) ?n ?t/i',

            '/dammit/i',
            '/damnit/i',

            '/douche/i',

            '/d\W?(!|1|i)(c|k)k\b/i',
            '/d[\!\#\*]{2}k/i',

            '/dumbass/i',
            '/dumba\W\W/i',
            '/f(a|4)g/i',
            '/fap/i',
            '/fleshlight/i',
            '/foreskin/i',

            '/\bf(###|\*\*\*|\-\-\-)/i',
            '/\bf[^\w\=\/\( ]+k/i',
            '/\bf\W+ck/i',
            '/\bf\W*a\W*g\b/i',

            '/\bfu\W?k\b/i',
            '/fu\W?king?/i',

            // Foreign alphabets
            '/ƒμςκ/i',

            // Symbols
            '/\bf_u?ck/i',

            '/f(\W)*(u|v)e?\W*c\W*k/i',
            '/\bf\W*c\W*k\b/i',
            '/\bf off\b/i',
            '/\bfuc/i',

            '/\bhoe/i',
            '/\bhorny/i',

            '/god ?damn/i',
            '/jigaboo/i',
            '/jackass/i',
            '/kike/i',
            '/lesbian/i',
            '/masturbat/i',
            '/\bmilf\b/i',

            '/(n|ɴ)\W*(1|i|l|\!|\¡)\W*g\W*g/i',
            '/ngga/i',
            '/n(i|!)99/i',
            '/\bnicker\b/i',
            '/nick gurr/i',
            '/niglet/i',
            '/\bnig\b/i',
            '/nogger/i',

            '/orgasm/i',

            '/peni(s|5)/i',

            '/phuck/i',

            '/\bp\s*o\s*(r|ɾ)\s*n/i',
            '/\bp(o|\W)rn/i',

            '/p\s*u\s*s\s*s\s*y/i',
            '/p\W*u\W*s\W*s\W*y/i',

            '/\bs\W*h(\W*(i|1)\W*|\W+)t/i',

            '/s(l|1)(u|ü)t/i',
            '/suck my/i',

            '/\btits?\b/i',
            '/titties/i',

            '/vagina/i',
            '/wh(o|0)re/i',
            '/w\s+h\s+o\s+r\s+e/i',
            '/xhamster/i',
            '/xvideos/i',
        ];
    }
}
