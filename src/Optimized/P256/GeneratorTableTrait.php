<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\P256;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait GeneratorTableTrait
{
    public static function generatorTable()
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0x6b17d1f2e12c4247f8bce6e563a440f277037d812deb33a0f4a13945d898c296', 16),
                    gmp_init('0x4fe342e2fe1a7f9b8ee7eb4a7c0f9e162bce33576b315ececbb6406837bf51f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88b13398542d5c8e69a0be9fe51bba8fffab23c970e684814e4b1cf45751336f', 16),
                    gmp_init('0x4126885e7f786af905338238e5346d5fe77fc46388668bd0fd59be3190d2f5d1', 16),
                    gmp_init('0x8d761fd160e5bb67afe5854016bb02b6f80baf8d4b7fce3c852842092b408ce3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cf6f359c28335db9598cf594050008ef6d1d4b3f6eb9c56f274bc89996cf794', 16),
                    gmp_init('0xbab81c492426f90381395727509d18b338185a6563de88ff7222a779807378bd', 16),
                    gmp_init('0xa627cf275950e7af6c3cac85c689a0ba6c8bee32c9b71350d31e3012fc5246b5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3323341a2fc7e5476fb3b8121b1f067ab6a3b36f8a1ea5e230ce73db7a041e1a', 16),
                    gmp_init('0xef43e06c37e7483196c416b2158b49cef7c0130d7fb365ed509b237d8f881743', 16),
                    gmp_init('0x2316121e4aec6626d02254f66732d05510fb4e201e1bb0d7aee69cac7266c74f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x454413ffe59583f2577a5c615b58e983dce9e599b87a3353dd3163f8beaa3fa', 16),
                    gmp_init('0xe679d7fa740a306d6b3a191338fa01e154d97b37bba202dcc2859c33db0ff14', 16),
                    gmp_init('0xa9abe4c490384e13bff0ed5885745fd30094c576916725ddc207334d6c19bbd0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee0d64f3094bf7e35237a70fc79efbae10a77b6e880050859a220a6bb026d4bc', 16),
                    gmp_init('0xd6a453af7af58b4f01557276ad1da471cc1271f4ffd194295234c426d6973b0', 16),
                    gmp_init('0xaff9fbb574fda99c7f92a901a44f1f675c0b14f736335b52efa1716fb7114a05', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195f8eb0dba7f7bbd509565ac473c73788b2c2531ef2b5a7f3142ebefb11916c', 16),
                    gmp_init('0x6c59156a09c573d98fa91fd0ab1ec6b3e636afb9cbd31699f7a6677b170898c', 16),
                    gmp_init('0xf8b271b4c943be439577d13a11e08e4b49abe0477db8c6caf8c7cef865ef9cdf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7a7e7ee010d8dcc06362d7cb9d42a4f12f588ca3456d891d0e447cde8b6de01', 16),
                    gmp_init('0xa8ebc2064b979e866a6c4b37f505f0cd3a3623cc5c0ecba8b1d8d13996d7b5cb', 16),
                    gmp_init('0x8234a3414b59e92e576596c2576d2517722230efcad264130f80703ec29b5609', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dc84709a5ad18d949b8c43c5c7b6d71797a064d9e29ea53edbcba0e92f40318', 16),
                    gmp_init('0x4e700d0315c3db962f76f545474ecccbcd689b67b63fc8de34e5165552225181', 16),
                    gmp_init('0xf9e3ba1793c4acef5e6021988b492f37ac3c3fb9a2c5a1ee62893755ebe0dcd3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1d8fe7952b25892a96619523b1f7a001ac735d102b0c322c047a4bbbbfaf268', 16),
                    gmp_init('0x72a0b65a46ef331a2807e67aa05269c611cc331abb6a9665251a62fd1e3388cd', 16),
                    gmp_init('0x4aa430201305bfaedd078541a34ec72ada9b5f1d1048b03252e1c129d7020332', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc04f345c4d0fbd2273a40a769ffc5f069a34dce6c5a046b4fcc2fb7b532409', 16),
                    gmp_init('0xc22fadef3f816779d1ca94f362c42efb0d2a9d0f91f3dcf3834542f4ccc818f', 16),
                    gmp_init('0x772b97733bb3db366c9e3345ec3b2a95d6980bda480796a4021827c903d08cf1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54f5f96861f908574b8d015bcbf4449f2f4214c11d2627d477d8d2c5b4420f05', 16),
                    gmp_init('0xe29ffb684164907f1889c580d43eebd5092760105f254c547a7c5e8c61e6fe3b', 16),
                    gmp_init('0xe3087f5cf66697b27a0dd11c46b15ae9716d714d373702db896ff6c4e7301a20', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f288b396269d65ed9e8fb73be40d20e7accb39d7f12dab097f1dfac993f423a', 16),
                    gmp_init('0x3b3450727bc7f2cf879fe621a6cfc4b04848dea94283c73c94dad2e370c3c094', 16),
                    gmp_init('0x2fd92fcd6fe2e7a4b89c4725c5ad674e5fb9466fd25a095b6b343bdf9e511a61', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcce66bc1de80ff7d11212d3513c827bfbe7a89b064b0c60c0eb0e4aecfc8449b', 16),
                    gmp_init('0x1c45495cc3d023881647cb1a750b5943b5ffe612a528324bc0b18d2d5188a9dd', 16),
                    gmp_init('0x458e7715993c3da7f0f75dfa0c99fb229e59de3f823000f4751714dec71cdb5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b53cc88d4d402727055374545c8d70c60c0e61746922dee49c2edf08726e430', 16),
                    gmp_init('0xcefc20d3c1644fa7f5107a6f8d01019b3602d62bac7388e7013405af0f4141ed', 16),
                    gmp_init('0x80b16391ead61d3b1e51c54028eb1a6d0320d71a5b26e95bca05f347548cf1cf', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x560c44e762500117756699296c8ec32eebbd27d4936f8d93a3bf81e96d57af3f', 16),
                    gmp_init('0xed0a0366dff582ea02c9feca790f1d4ed9d2481e2a8cde32d8d15b76e70a4ca8', 16),
                    gmp_init('0x231b46b7475fcb0fc4dfe62cdc0397d2809406d48a4741cc953fdc71bbecf293', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe31e53eca6c0773a86ec5119e58c9e5cd34ac64154e393268a5f2bc2e65d3a17', 16),
                    gmp_init('0x6f431ffcb0389d85220c0b3e049a1b4f0eb652e3c4082b8e81dfebb7f77c87b0', 16),
                    gmp_init('0xc1810ff38bedbde033dcd6f2bc1d8a05d55d9be2662e0c1e40d66f6b8771f626', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3073c9e8c596deb46e4689c51360760ec7ef893fbe841dd753cc4cba1c409046', 16),
                    gmp_init('0x53ef2c65a479eb69f8ba8555deed8c49bcb190ca7b3863f4d9faa40269729148', 16),
                    gmp_init('0xa15288c59287c514d3cb12debc8961c0f41a5de2c0bf3ca063cbb70069b4ff94', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f7e3e359f44c25ded89089e8c24243d0aa54f492bc626f3c90b3122e3f0097b', 16),
                    gmp_init('0x5db10fdeaaeebb425c5f29685931ac98f137d43c735b903c3030b5aaa520bb93', 16),
                    gmp_init('0x6a3f733e14abe4b8724b4ed453ad551eea99a27fc6cf8b39e624a6506e3ccb99', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc9e910add054dd1ab93aa2a989e4dee30c434642c5a1728d2d01f49607d5132', 16),
                    gmp_init('0xd8a131aca7c2bfaecaa0854592352561fe27668bd9aacc9bc60330e3df735abd', 16),
                    gmp_init('0xefc16d53cc157ab636d988a23f759dcd234ebaa66d562c7856420e87b6f5472a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf877b76a382192df6449254412fcc905f5240a5817e33bbeda2488f64c9619bc', 16),
                    gmp_init('0xc827557eee2d2fa6b9867f58ac0448acc0ba16d64b1cf3f493cb70c3e1a7cbca', 16),
                    gmp_init('0x96a71a9016c9a7165f0a86bd2e939fbbcb8c69e79c246b92466a7cdbeb2d6eb2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3a0e072f7ed54bd34b9a2fdb39ccd087ca6b4a3ae70594e69e89a224a5a5707', 16),
                    gmp_init('0x21cba462df90cbb51fbbb7a0696b39fdcd0ed161d7b634980c4c678c9c1fd4d9', 16),
                    gmp_init('0x79c835919170ea4f283b9f203b1c6da87432d2e8978216886e8a7703c3f68394', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6b517a90966648be374c0dc0186d6c78afb91793f6499da8e58be93f9b3725', 16),
                    gmp_init('0x115716b24895d558371888e82772ccf25f8f68ab993d8bee23677693692888c6', 16),
                    gmp_init('0x218b4d9c2e70865dabf84dde57bf889a6a365db05b007223cac694db10c685ff', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce38e542b0ad7edfd7f05d84e5d0bda352d85c57fef24fd1bed4f0f31b7ce228', 16),
                    gmp_init('0x41fc558b4b19f7560de6f79ff0edf9825aef7f1f9d2491c28db9109d26a9a865', 16),
                    gmp_init('0x5ecaf537773d91799044fa3aa817369fa00dcad940b78149bcbadc12d0a8920', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x445c3c2cc8964425edd01ac77901ad8e488f5078f303ac722045d9e23a8cf1b8', 16),
                    gmp_init('0x8deeb313616c09eb16425d2a884e47cfaf51441096af60582fe971a1363bbc16', 16),
                    gmp_init('0xfd26fd8b943eccbccf73273d9814aad7def8070e00cbaeb0e62aeee2090b6b1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf889d8bed9ce71f562eddb1983abff8d8287eddf8a288ae407e2247fd1afd8', 16),
                    gmp_init('0x767eec8af3ae4fd8e0976b2197beec9083604afb2ff6398041827899d83fee38', 16),
                    gmp_init('0xde6167cdb2a2c1ae854e4b84c22246347ff514773170ce424ebec4af449fe913', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ca81b07bdd723630403c411c93f5cecb09c43d552a03b27603f65292ed03685', 16),
                    gmp_init('0xda5f428730644ff867a7192db324d915c604891c44eaffff5e7686c72491a5d6', 16),
                    gmp_init('0xb35241323dea2b27705560f39ecdf2f261fa05ca70b61b8b464e8d9ef4256504', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5ef12fcbd2415fc608a4e455d3395fd71c028d59a8fd79bec99120c297d429f', 16),
                    gmp_init('0xefa4e8f5b80383fed452b9c1e4752b44a6ca53323d7e66df88cd3dd17aaac188', 16),
                    gmp_init('0x86f78d346dbdd2e3b5c4cbcf3691bd20a3d90e6113161bbb2a964e0c66c3ccbb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x221973cdd5c58d432700a304f8b6ef18fcf213538933145f3d15d165d5e25b8f', 16),
                    gmp_init('0xa8d3d37ac45ff53847b7161fc816f69e76d008918eead87bb0f18a0f64f79187', 16),
                    gmp_init('0x8b1000f572902618e3e3b7bad8b80e81b1efa38f66f3a427875c4e4ba3a7f000', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23af5e459f84083fe54ff8bb58f9e6b8a7af024321172fa520e3474f39813946', 16),
                    gmp_init('0x83c10500fd17598bcc61b31485c52e176ca31690300322c91233290dc1db275a', 16),
                    gmp_init('0xc0f170f04e6f9e9a955a7dd7e5a70bfcf640953bdabbbeb2217f3877b6754558', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x304f151a8d40aa8963db2e66ead02e983ed4d0c63d4124bf8589eee7e65f4fa9', 16),
                    gmp_init('0xbd4c2193e633728bbca339b60beec241c7756eac00be9285368c22881eb60a25', 16),
                    gmp_init('0xb75abd9490992bb57e618e877d3f834b38580eb2410f630a86181cb69dadbf82', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd52f92e30f0fba51995a9f5e58b8b53d93fa0be90acc108865ed2d1cbc5f1c9', 16),
                    gmp_init('0x115b313d62c17539edee8f7f4fcf3fee25555d734e6ddc429cefce5265bf2581', 16),
                    gmp_init('0xb2cb7b26d5869dee1cc3f5a32378725c58a2632c9531ad8a8e7d39042cfd1b0f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57613d5fcc9079886b0255394c46da86d14123656b468f76b0e959514147525', 16),
                    gmp_init('0x27e82bf1822385421fa235fb89a5c24b89c5d1b3dd33c84e8371acb2dbd437ba', 16),
                    gmp_init('0x94ce944fb9f3c1bff13defbfe1af763be6bebcbc5cbc7682f59a9392f08b08b8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd03a683131f52ec212222f6f72356fbe029c54ee5e5a44a052282dec3d3e3c85', 16),
                    gmp_init('0x2ad1efcd1e51b7cd41d259d9cf73c94ab6f0b0f66d7924a88b03db93e31b3f6a', 16),
                    gmp_init('0xb0bb838407088bc6127a6c9635631e8e8192999cd449995f169a17bfae1eeca5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a9b169c98b09a42fcb36391e83f7f397dbcf5f5c37742eeb4ee8ae43d3269b9', 16),
                    gmp_init('0x77c2cd22632ea10c9352d3a59ad578ca10a84ed68d54780f250ca6aa6ac3b620', 16),
                    gmp_init('0xa37821058c51abe54e2e2d16d91e243d3a7f099a5d902890edfabc4d04c1b37e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35b8ef13201f31d3a974bfea3c749f3a9f744be790c90139188bc37cf10669df', 16),
                    gmp_init('0x17fea3a2429c9e7c21cde073558c5b731b7df2416c7dcff3c45ee33f01299039', 16),
                    gmp_init('0x675c007e8162a0a9503ba86436be6994b6d2faf257c91598a2e0778220bfa6fa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1213e8110855da5a6cceade3acd18eda6b802381ec6aa0cb73f2bf43073b787', 16),
                    gmp_init('0x2481ed1707ac8868ba85a7c19a9b91d24b9113f45d6e19dd2687a66c58fa07a7', 16),
                    gmp_init('0xc6a4cba05145b4dad5c869458020e1bc6c625c1bb3d7bc52b0ef3834e304968f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bad98c8b9e2b54894f9a0dfbf9e2ab0189927001713e7d6cf199deead0cb432', 16),
                    gmp_init('0x22f05075364a8107e7f8bc7ce207fcf34eaaab80eb2591fad4ac634290ec803', 16),
                    gmp_init('0x16843156fa7521d5e890fd0022ec65f6b7ea12ee7ca557755a8e1fcbfb0a2aaf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e00a2b6e0633fd8de9ffe74af22cb0db3247b2f92a06406d017ef79a920f66a', 16),
                    gmp_init('0xb57394cd2a55258450f1fe44a84d6a83ffd0417762186204633f81d9954e3ca3', 16),
                    gmp_init('0xf82946fc258c348b8af7e123fa989e1f51ee92d4a0db6ba4c5f4e2ef935f8d37', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c3b8283618ce4345da7a55077f50c7cc32772f65ea70553072db58c393626b0', 16),
                    gmp_init('0x796d7824bdbbd7fccbe7c2051367a508bfc89a41a11e617fd45ba93fb21eeb22', 16),
                    gmp_init('0x16e19d6fbec749c37a6a9010cc0e369f7f7064e24fd6b3b356216bdb65f1fc95', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11d8009f421c685c73f347ab85f1e7a3f2ecfe5e62e6b772bfae0ecc126b5f3', 16),
                    gmp_init('0xc8f7305b28d200c664a78f0919a12627ca48898ccaa195174e220789b240f0c7', 16),
                    gmp_init('0x34efe9e217364f5292040c6e3aa42a3f54bed425bff7fee321e49e77896b5495', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d23f62537a0ae4c5e9bacf2e710177004539e93971ba3c5c5dbbfe5e3de0923', 16),
                    gmp_init('0xbe681b7c1a7da667e0b9080221a177ef40d95df4e8a685dd7b186e2123fd87d2', 16),
                    gmp_init('0x9a98a0e60ab1a829a42709fb32f6a2d71e31c60b8551504c5520f4c2766b2afa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea121c07ff5930d620b372e40c9e427bfc3e99b924d8865af24c441ff30d292f', 16),
                    gmp_init('0x9a787fe903adff4771e91cef3ae5e0b43ba42ebf06cda13117fb70e5e9ff39fb', 16),
                    gmp_init('0xe98327e7a6435b0eebd1dc3e109fcd5b9d02848c0ee00740ba55b64aac56cf70', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fe2f61de3aab9a5a97ecf6740be4e3fbcda41b39a38172f05241645458d73b1', 16),
                    gmp_init('0xc8ab59dba61805aff84775d4a1b848b417942b09339d65c066e2eadb6c9beb5b', 16),
                    gmp_init('0xd25eb416cab2b66389155f354d54ed8d59f398242c8963a4a9d7f0becfee0a76', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16321dbcf7055ee5420d6aabd53d7bc01f589feb5df5c644140be78bc0ad6bb5', 16),
                    gmp_init('0x84742044df51290e0306b16f2c7a476dbf39c2ef744975f923791fc485fccf7a', 16),
                    gmp_init('0x72ad6911248a54cfd9f96c06b742e3ade8f82198731a8ec30625ab0da4732045', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb993864a01bece05eb1dd6e37bd3cd203ae77a754817843312957ffa5df44ccb', 16),
                    gmp_init('0xef65cb7253823201c648bf038fbef75bbc6c6d4aeeb60b81f7b5669bab471715', 16),
                    gmp_init('0x4a1a19ad8ebfe198913c19b348c2d9c77042d3427d315bef37680f18c6919d99', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x896c177fe49e6d3984c2309ea9c19c038d5a3b941a8726a94fd08b491d9026c6', 16),
                    gmp_init('0xd0b4edee987e79ea4625b7953003585409bd2e78da8b5df52442d03a5de44bb7', 16),
                    gmp_init('0x506455d0d01a6a865b4621b778ecb18676f21c968a1ca01d06c395329ad4dc93', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5258861d5557742f4e96717231ad8cd21077520564f7e45c19cb25a8a2a74490', 16),
                    gmp_init('0x4fbf15498385dfe3f5cafec18afa5a449c43bebe05152c32a8eaae8fbf86f3bc', 16),
                    gmp_init('0x331fb25e7c493b634dcb053c60da2d87a8d2baa35cde48781a3471377afd6dbc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe881081a5a620892024f801e0afc97a560884ea7d0e4857409a9de0d338f891d', 16),
                    gmp_init('0xd814d2220bde137c2e16a549c41e09a133484da4cea5a34fde62d5ce8e53a399', 16),
                    gmp_init('0x91e9280d1af2134556640fb093df70c22da8f38ce5cb68ec269d000364d2f3c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc83ec0bdc3d487f88850b0ba600ce6dd76cf7b0d8b758eda58ab47d623fa49e6', 16),
                    gmp_init('0xb10d8c07f71fa741b8b08973d203a8db31ca40dd62dea3d94bb42bdd6009bb19', 16),
                    gmp_init('0xb02fcda746ed0226822a3c8670808a33b41e8f4134df5197b3cc503f0ef8bbd6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x831c6e104d746d00a68eecd782c06e7a75c82a1f87a200b9603b993a2fc93267', 16),
                    gmp_init('0x4bea9a295ec567471fbbfc90fea8eac1a67aa7d68d82eada89a01d68f2fba23', 16),
                    gmp_init('0xface326561015ebecefbe8aed562fda3c657107d41c81b539dcf9fe3a95dbddc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x956ac733b740f992f7280b09e0d9aaf684a5c7f49f8884083f9ee785e3c6af3b', 16),
                    gmp_init('0xcae98c11bb577155e37e0e87b016f545a39f86948b9dbf829c5e8451c921f37c', 16),
                    gmp_init('0x272a17253d8aa548d48c035674d9aaf1dd9106148c8dd9211db5e68afd729f69', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd07c4d14e6af9e844ddc77be08b37aae88ef646bea03f6d813cdd533c6ac9790', 16),
                    gmp_init('0x905af613537c98dd89605ad367d758624e750e07a74f2f60f6479f8fc6b872fd', 16),
                    gmp_init('0xa282df162670dc9a65d88357336a28e2b5c2609708eb5ad5d4ebd92e79078e34', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1158092be6864fcf14f47c869e6687e5f7cb814b0528f3e745302ddec60716b', 16),
                    gmp_init('0x264cd9f5f00bcf5a2c377c7036a81aada1b8094ef854d45e206e5efd3ca996e6', 16),
                    gmp_init('0xf6d9c6682cd487f7758ba42792d27d7c331a7ea37543a3162366a1d9a7426348', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe08d77ed5a42e704f33a0189f2cee3e4a0813dbe53e6ffa12cb85432be37ef50', 16),
                    gmp_init('0x39cf83f3433564096854219a83ec7577697280485312c460b7b34ee6fc694379', 16),
                    gmp_init('0x95d83f57599f1813511d1c291ee99f0d3e66417fd34524559655ae281ffcd1b3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2ae49b66ebd4f1377a1e0ea18346e310a4a10310a85410e4a563910aedca4c6', 16),
                    gmp_init('0xe737c2bb4743efd2d1704d1fd932493c60c7118f0c83d2eb316f2befe0071cd2', 16),
                    gmp_init('0x5f524fc4fba2a8ec5e1996b4a8b07d0f8726c3623b68d5bf4229548d32fbbe4e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe8327af0c9c9fc64de1b0b250bb57f3008f74c30fc0e0eda5254651cd8e1ca9', 16),
                    gmp_init('0x6d8df0b00ac5586ad178f0bc392f3ad8e1a7b49e8c681db47a5d68a1605f404b', 16),
                    gmp_init('0x856db09d6083de1bd2fa943dfc9e0881859f771416d45fbd81083653e7c8d010', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c7322f4a75debb8a96a409792bddfeaa1e6cd65c76c73ac974de5a696f78ae0', 16),
                    gmp_init('0x176f848a2aa40c3637b3ca4104cd212165965266670e362f1e936e0a462dbe26', 16),
                    gmp_init('0xc887a47775209efafea1b112f76ab4981c3634eccb5a3133126af83c8f6f395f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf94a6b3c6a114e12f08ae3f0779c871efc4a825ad373714452b7d4b761a491db', 16),
                    gmp_init('0x33ae094ce93885807d4ca63c6ee3241351f509b477daade27fa67b0d3bcd9e6', 16),
                    gmp_init('0x6208f17d1beef5503b5824209d7865a1a6bf7ff503c8488c76ab41c35656f65b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62edfbddbc2c9af7543defdb68a6580b63b9a82276ddf016c0a1f0040db05239', 16),
                    gmp_init('0xc36800c7111f5c022f5da04ebfceb5f1799098df10f234ff5b0428341f903e36', 16),
                    gmp_init('0x264089b568bfad2399b49f2058348015e3a9ebe60a883a1bd4c014933d707399', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x25c903f80ef17e552200f14d1fccf1d77b976af28d8a1867b65dc445c62d1010', 16),
                    gmp_init('0xfa0d51734a50184b9de20e3e91be2e4f0714b2a37bb294e5e05af3c46c01fba4', 16),
                    gmp_init('0x948f980c267d01076be2c02586bd73f75dbe6a0a5d4156ff6eb1af9b6ac804cc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadd8730704bec598f91df918d6653e726e48454501afab137831e594b92379aa', 16),
                    gmp_init('0xc67de5d9888b88f23f6a5f69fa1e4787b20696cf0b0db3d9051ef92f6da15eb2', 16),
                    gmp_init('0x19540b92d035fa34c89ac877e874da14ffa8ed8b84694a661d447ce2d0092c33', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fe454d0a083bea708228d7f61b269a51b714d1114b4d1a54a264d4fcdd179be', 16),
                    gmp_init('0x8b703dac41259a0934c2564414c4c668825b603c0c6038fc3c6215e5121606fe', 16),
                    gmp_init('0x61a15df473d83d0ea5bfa8b71948e3cd42b496796759a47077e5a4c32f1935dc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb43d0439817eb8dc06b1a64d925d36e0c019bddb35032e7a638cbbe7297b63b', 16),
                    gmp_init('0x5fa2458e124cea9a5365966daeded62381e5d67d1f551fbe70daec97e58f4833', 16),
                    gmp_init('0x116050268c9f465b37058c7c9229bce952d68abe5622a0162b134e6074b34498', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x903e3b925295e7faa04b2b090dd43e63fc66029527b6afc8cafa569eef9a8906', 16),
                    gmp_init('0x4a75c1b8e89c6f9a84e50017452a9c288081ce924abed24b06c593487b386db9', 16),
                    gmp_init('0x4242cd12e2ab1a438f5912b2e0ebda3716fa04cc9392641df3f0ea5128666eac', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x592a6d8f62952749e0b9ed18498958eaba2a664a606350d858d4bb15b0180d50', 16),
                    gmp_init('0x3251a0a9d5efdb0fdcc86c8a9dadd679c1f419fd7c3e3b2526e447f0533eefa1', 16),
                    gmp_init('0x67fa4d564a30f2466d504dd762a01dac8014df84ca1aa9e9e765454916d2d38', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38c655364f647469eed1e080b8d451064d0ab1f1908df1bae882b97b28eacd55', 16),
                    gmp_init('0xe98b48a41aa8dd1df8ea65d245921ed3f2c5b00b9e622d0aaa43640bb719d89a', 16),
                    gmp_init('0xc0b270e505c3342a79fea25b89b341f37faf743ae4d92b03cd3b5a106a823a7a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa37c168acaf75cff6ef364fb600a174c60a9c71e817db9f3bc8e7f182fc70eef', 16),
                    gmp_init('0x45a8c5146cce9df7fd89c5bd8dab01a8aed3c61d180291d00a20b912863fca32', 16),
                    gmp_init('0x6ba6f4b4c129a211941b675ebc195267caf446b5ce2cc96a6447314ef5ddd9f0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d3ea625b0947d853204f5b6761730ca5310817210dd9801bb860dbb873d71cd', 16),
                    gmp_init('0xc7322f8a275f6d0562e5531c5a5f7919e3f56e29596463d0a511db1853e3b46c', 16),
                    gmp_init('0x1edae36b7d4c634aed205950515e6859be2828e98cc66d466a01b9d61cfa5da4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc217caee5c606cfb2ebdd09f96452b835ade6c6a5a90455e20db023f0f14736', 16),
                    gmp_init('0x265aec95d98982796087a51076a08fab19ac5bae3abe617a71a50c3a34eaa69a', 16),
                    gmp_init('0x9a4ce0a912dc4985cf3df939df5d4bbdaf5b9a15409d8d48d491d627fe17d031', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c6bfe288e670511bbc37af4d07aa5a93eaa393caff3df678572399a42333317', 16),
                    gmp_init('0xbf8b96794f5ab5c627a7769d6356c1cdf7714899c782aa3d678494df54ed159f', 16),
                    gmp_init('0xec00dcb518d2dd4c802d60f85f071405bf1b218d7093f400fa94af2cb171489c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba622ad3058b47989830ce6bb98168a624332a8edc52986365343c6971ef2c6a', 16),
                    gmp_init('0x954e3a90164c31cdce744fd8bf1a296d1456b9cfd481d55427b216a805114a9', 16),
                    gmp_init('0x5368bec000102a64d406d76c100e8fb2e343deefd1e02f3665c55fe4839f20a7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5a358b0d67e4a4cd250ab94b4983d4e8464f2dca2650928844d61c84badfe2', 16),
                    gmp_init('0x5ae2aa257b0ee4dbe917e80b297a12e2c89ee62b559fd61e5bfb468cfa932b71', 16),
                    gmp_init('0x21c89fae817ab1e01157ab11b4f10016f47996edba5b641252628bc517882e8a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b0177cc324fe0b690f1840afb138c5e96dd3a874b6ea0fb2052d3506e9eba02', 16),
                    gmp_init('0xcb84da36e80900b9f7d05d00b6335ee0261b0bed49edd2856c7cc7122ba1d6f', 16),
                    gmp_init('0xa3561461ed308184761a688c7ac3dd5d2bcb60549c5297cfdef537909a97adf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd32aa307dd7b3c8ac896221f66df724971a142ca888fa84ea4b0bde51fcd5a20', 16),
                    gmp_init('0x7af716654f311444c0256b79f127c05e4127d9ad9f76c162c8153f756f1d139e', 16),
                    gmp_init('0xfd277ea79268ce94c5c918b40ef7334f28679df5471a401b50c64fc3d922299d', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7842423508111974c9a804ea9843df3041e58cb14147348290e27c7e17301e49', 16),
                    gmp_init('0xa518dd111cfa01b8f75f7755a93ed98abe7d209b32f507c73c0d958b57e54a15', 16),
                    gmp_init('0x7c89c4960a88c3e09bfdca34fc258cc70e805f32ed930198d76cda7ef71ec0c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6717d9dc29d7353e6076efe9f1f1061c7f921699cf011f0b0aa6416b334e10d', 16),
                    gmp_init('0xaabfccc6c18e9af623d1fa724a95ac0f05e66aab1117c65db7c989f385a81b05', 16),
                    gmp_init('0xcdcf4d64d39ee44ada48d766031a5ef6286da134d96236683d0bbea71fe3abfe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e1986509a4785ac78469ed50bce1af5ed0b265e647dd72d2b6d5e456f8f6ece', 16),
                    gmp_init('0x2367d516e3346773570151ce60f35fda0610cebd5c5c41f680556f1619b7cb47', 16),
                    gmp_init('0x2b58b32aee0f28e6d19e2fb2fbf3ce518cae1e87843c8e6fc8741c5da9033d5f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e1ee2a0b6be8e0d6b3a79d9c37ced26ccf239e583b699b75e86a718c6c776db', 16),
                    gmp_init('0xf6986f9986cb238e589e23f2f413dffc7b1149c6b137f78d49d8d4a7a3c06b49', 16),
                    gmp_init('0xc0dc6c7ffeeba9e509fdb62c0a1abe13d4c128a584d0b6ba45463e1257b0732', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3acf35618f1b1719c9504167a539ad11cc24a473a18334ececa174295eeccbf8', 16),
                    gmp_init('0x35f42130a566b143072639a8ff203cd60fd2882e91d81e415b2667c05f85a96', 16),
                    gmp_init('0xf15790fa36fcf38e07fe9e0750878c122bf120c205e3e511d8f90605601f2290', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b8c4a5916654707f85ac6f33cb8a3883f7f8f270cef176a0ae925a7acafa240', 16),
                    gmp_init('0x2e8e9bf944f1034cb54aea2c810f015bac74f174e5117408f04b24d4000ac247', 16),
                    gmp_init('0x5e4a8571cacfd750152205eab258471bbd0e3f40c8b437dc68ee12c4a4ec66ae', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x158ba08c19998ef1b29c6d465d3dd9bd80be71d94eb39e360b99caa6c48ec7f7', 16),
                    gmp_init('0xa33cce90f72cfd9e7f7becfe98d842c0b21aacadf395da0b01de56d6d73e6b66', 16),
                    gmp_init('0xfda19afdab30b2c08f7e9ca4ab8a64da00d5f9194643b6d193f4e7d3981e5295', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xecde0ac51a9e9f32091e456ca43154bef6bb86833d3b8df8c6c19d6be77f0087', 16),
                    gmp_init('0x63e37a2d139633bd55e5b3a72b8c0d8fc278aa5d60a1576259d9ade0b9eae84a', 16),
                    gmp_init('0x27334295ba76ac1b3567dca4c7e8ef691d7c623980a551fd77d413a5f795bb2b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfc4813df103ffed1068019ba880b081436f07dc6378500bc88cad029c700ec4', 16),
                    gmp_init('0xe094c8ea39e7f5026be9f00eeb422445a78a268e110e27e9a88acf9fbed66b8e', 16),
                    gmp_init('0x44afd0cd532b4f45874efb21ecac3f89d56f21a63fb08809bfed390c58a899', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37bf590a4ad097282ecfbeb48e6261b935627930063134137cf2bafc8e6baea3', 16),
                    gmp_init('0x69b978a0880a721f691f8e3b8b359c0f4d28ee212ad65c5af8eaa50a7b807374', 16),
                    gmp_init('0x2621352bc67c2c57d7ea4b03a73f74d1384d0eae99f7c44040bd66503e2bdb05', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c9b36cefebb447d72bd5a8b0e116b69f85bf664457278fa8d2acbb86d487da', 16),
                    gmp_init('0xc69ef3d0b284083a1f9adbfd60db1d61a1797a7f449ef98c76c6f93539980a56', 16),
                    gmp_init('0x6ebeb955708b5287faf63cb97eb8561756dd6e49b565ba5d48ea306308652c5b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x171fe9e860a46174f8f207f53518f39d3eb07d9d68f4ad334b09980053a98e74', 16),
                    gmp_init('0x2f757c9bbdbc3b696303a811076f55f14c573afcbdbd65ced18983b9bc00b2fe', 16),
                    gmp_init('0xabce334196c190d5a973e4b10e38b30992cb22fbc061a2a9c601d9df22d52b38', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b8127ff2b52460d85ebc54513a8e84d26269c816fb7d4b709c4ab212c425cc8', 16),
                    gmp_init('0x18ba792b5458a0477f7879a87783e50efb247852c2d327e9311fee7e29c59370', 16),
                    gmp_init('0x2552121753a903ced22ea9ade6093eadbc9cff7ee4482c0d94838778563075a5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d19089856d833c7eaf58316914bf8a0e042cb9ac3705d13a778b2a170a81930', 16),
                    gmp_init('0xc7123af5fed125b0aa3ea111fa92f15a68647a9aaf8fe2c7a05bab0f0f2bbd5a', 16),
                    gmp_init('0x18f042fc475a9181326f6a6b7d5640750475436ccb25b5af6ebc1cb637200ff2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26149adf14e75252436b57c4d34744763ae894e255580c8acd0f45d689eb9ea7', 16),
                    gmp_init('0xc7249871a4383cd5357b841bb9d59b7231d318473ea6c56ae0a615247e8759d5', 16),
                    gmp_init('0x10670ebaaa848b5cfc4f997b1bd7902d8b3d66bfc3585dc8b6eca6a649354fd', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2c507c8494163fb294df079ffdf84ea1adf7fbbc8050226f1c4f8a7b6de64ddd', 16),
                    gmp_init('0x7e54f91ec8ce6ce7afcd7a5950f1391dd095c0cf7e1c9ce25a8e7a0760752df5', 16),
                    gmp_init('0x980d3383241b8b7837871d0ed09b6af1c9e45d5808a8b2e7afe9a426c266b96b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeffff86c7f88f01ee42cf793e987f77a62653a08a7d1510d0945908293e01d60', 16),
                    gmp_init('0xf58c4cb96c873756876eb01d1d21a1dec05b74e7cb4887afa6da8d1b5bb6c034', 16),
                    gmp_init('0xfa2731a1eb2769a544f388866c56ee2de8c3c235521f39ec8878b8a3647d00b9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f932ff0e6c25554c5bd363b14e966a9f0e200f7ef7afc4c816889cc59433b0d', 16),
                    gmp_init('0xfac345d2235e2a826120ce5f9fd0e4ec4c0a6ec5bea8f0cebfee95315c6d687e', 16),
                    gmp_init('0xb14c5fb18b4be73bc7a37461b1a19dd0084f20da4e967c0c3fa596a3018f0680', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53eb8b9d351106bd8fb493a2df4e8045c86ef1ed3a804b9764955a5b71daabad', 16),
                    gmp_init('0xbe5cb51c4e48c817e2da5e6cedce341b35f6160af5202090fbc95824629a8b3c', 16),
                    gmp_init('0x1a8faa1543c7c4a2f44b975d27e758757b3140e6b07233691d6557fbcadf3407', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6aace56c1b4a389abac9f751e0989c351b220d52318c2279bcf615e428f71849', 16),
                    gmp_init('0xc4f1609702508503a27bf04ae9da7c6e3e263834f5a8dab6b7346b212d347337', 16),
                    gmp_init('0x864d9112952617ba326972b5c705bb725514db4de3ccf8d779355c8afd89196', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xead4308ada3cde7bfebd1118cb50520ea942b5919f706e4f70c838c3de075daf', 16),
                    gmp_init('0x6bf76957ae59e86d5f6d9d2751b03059f440d3a27e436e72fb47822cb88d49bb', 16),
                    gmp_init('0x53a2d1977341c6d0dce50110c4711fa8f782c83770fe39f368e62c34cdab186a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x197d0a351846dde01f7548e8037d989dc7c74b32b27cca062001314b91173218', 16),
                    gmp_init('0xe4179101a56de13b7e8ad5d8eaa2766952ca284dfd9c239571820ab0dd92a05', 16),
                    gmp_init('0xaafd155b532d0287af65c7bd275cdeae5b6ad36642a7fa5785adf2beae50d7d4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fccbf2dda0f078433d72b1275d70db82515b2f65575e4127a8537a382cb017', 16),
                    gmp_init('0x87f5d7a2eda0372b935ce232318be31b6367e45139c8c4ebc7f4cc5e641838fa', 16),
                    gmp_init('0xf85b1f1bf562cc4b0d7cc942c9dd41ab69ab091ad2f9bb1da3ac99d665cbb854', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe4bb99d7816977a6f3fe342eff646d1099f1e59c365c6113a27cb78a719eb786', 16),
                    gmp_init('0x28ff0668548b6aef107f6de08a321d43bb4a777b4b5b315105a940aa9767a08c', 16),
                    gmp_init('0xff681d03cabafec54b430e2b0f5d1adcfbb5683502d2b9375ecf1948748d06ba', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48ebeeaa39cda70345f0e96f98b56354601f486301455e2b32dc917425dd548e', 16),
                    gmp_init('0xd52d8f3d09e6e4ec18a8adfd16c31de793d061ce5c22c1ee2ddb9fa4fde6d032', 16),
                    gmp_init('0xb8b9138d01ac9ddd1ecf724f5d9dd8bec8ad662250b16a7c7a0fe3924870ffdb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x487d444810a388ced3a646ee728a78e47d1388421e7386c0483920d869c88884', 16),
                    gmp_init('0x832409739a9fe89e86c060fa2f2e56e786955c0110a2342ee8076fe738eee091', 16),
                    gmp_init('0x4e187a9cbbf37a3b5d7ea1b6d30672b6128c68bb361c11b956c8b64f1090729', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x262ca0434715baa73ca29f3dde0aa743f87764e997ee7d948d25033708531e5d', 16),
                    gmp_init('0xae132185a9f95a86844d8b032385d74f070498570948b424d3781a4a4b849b22', 16),
                    gmp_init('0x957e97834bc2e282c0b952699b8966132a73d5b625df98503addefa5a3752570', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb15457c379c449075a2365d8fbcb71ca3f5a66e35fbfae2d2fda513e4ce67a33', 16),
                    gmp_init('0xef4ad22fb2d040957ec6ff0b4522c2c68d042c15790e0e5f4d8773bb8850a00c', 16),
                    gmp_init('0xd959adebf1d3f00e9a28de70b10e32ae7647aaa01349204ab4b80d2ab0cfa571', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafe7f919b834259270d4a8fb29ffd554deb26621d2efdccbb0f0a3e85d0fb79f', 16),
                    gmp_init('0x51f431137be46af599c4cb2654a92ed1afcd7830617cdb758a453dfb9af6d74', 16),
                    gmp_init('0xf13b477ff4497033d313c7dd074f3c1299daeb8c07e75c7bb89559befb5bc6d0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8072ea103c6173394b9e7e96f380f7cc14203d1ccf076f98d56b543977252ddf', 16),
                    gmp_init('0x20542895220b3097005b2bd6d58ed74c892b9d0d72569a97f9d3b60aa48e7500', 16),
                    gmp_init('0x9c9cb7abdd31e4e5ecb57aec85b3646d91eb03d9a6aee7c7f1ea4a3fcea05de8', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x205c8e018c27354746b899dc9399c509437a1b383efa6bcd5912a3854549c4c3', 16),
                    gmp_init('0x2113361556746a15a0be93cc31405e779830666e24347f86b6673dc9348fab7d', 16),
                    gmp_init('0x42f546ba3c44c69e8cdd3e9b9b56cfc74475082182f4aa5733d4b0a9959bf9c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47b36492bfbddb4b2c05fbbf3910224013288ecc61c7284aca5a854ace9c432d', 16),
                    gmp_init('0xe37797206e95428d4b581adf21e88876a7c2e27124041d58b14b3f937f04cb5b', 16),
                    gmp_init('0x86cc2eef9c2d06db81103cc241c5280ee527a891a8c5ca7012ec686e92ea5e64', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95f9c6e876c2ddfffe8f4b63bcf2b04dff586d3bcdc0b0b3e0b50ebf9a34c273', 16),
                    gmp_init('0x5c5698070af1d35626bce094d5770e76307e42c1ed4213579e500617b484786', 16),
                    gmp_init('0x11f627ec47875b49aedc8e5c80271d90eae5b5a2d81f54cfca460c8a8ab5ad15', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc23272e1e43ad0dcfa524b65ba0fd61d811d27e23c01a6e32be038aae4c1c3e', 16),
                    gmp_init('0xa45cfb694802e0afc058522a03b71d03656f98d249e50dc8a876bd6dd4224f3', 16),
                    gmp_init('0x1567e99f2709979c44a76fa4cd54e0cd497fafefc88757c2fab453ef021d69fb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0758c331e77722aef0768c7a08ffa9bb8d3f0d07c2ae338f667b8026d786e2b', 16),
                    gmp_init('0x8a088c49aa1d7eca588c48d0fa063f9d9a54680b9e32d04afe53192df9231b9', 16),
                    gmp_init('0x9f1aa409273bccd486e74212345a395d6592e44541627974a23eb1f0f5c67e23', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee54cbbac56c96aacc8645873e43686ebebbae7f86d66ff186bf6d1e91e7d649', 16),
                    gmp_init('0x23856273296454ce03a9de56c318a936490197cf0342359cc832c3357e40f520', 16),
                    gmp_init('0x4dcc021d064f425fcc1885b606871fe0c5cfe9eb4405b05f711b5576a23026e2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d2287f000cd0a08c03e696c50d00ac933d315027d5ea4066dcf383b30c2bf45', 16),
                    gmp_init('0xa9a8d90ba190d117daf6dfb2925f2e32ded261a9b5844f7843a2e8c380312490', 16),
                    gmp_init('0x526495b756dab97c0e46528bb12942c91c32207ae9812b6cdf9a43d34acce8f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f0e56d06607deb8b1756a7ece30803e3a1470e536d6b16d51fb4578b80d726e', 16),
                    gmp_init('0x2fd67998a1f9bd695f4bf133a1db8987e173230f48cf7620262da0980319a41', 16),
                    gmp_init('0x34e854d3dde5422568029b43acf2f291f605ceb2fa8567dccd12f8b135552fd9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd74d10af12b7d45a0d40095f26fad767e0b22cf2b855f079760f60e818fd39b6', 16),
                    gmp_init('0x228e25d567439ac0789aa15fac0c87b07c2fcab16f02c77a1e97a1676bef6191', 16),
                    gmp_init('0xd1cd9d6423c981604472c1d4861b82152941d0ecaa428f80c923d4d6b96ab7e6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd530a08f1f2e4483dc93cfe0cb2bfc92856e56330acbfb7a5acd9e82d4dbb39c', 16),
                    gmp_init('0x4c2176c65d0bda01f30f96b6492d2464623b705c25e7988453c7eff369010c24', 16),
                    gmp_init('0x5a4afb8e5bc2e453aec1a5a11f22f1edaf1200ef93bf3a8317fe659fa13df79b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe28eedb01bb1e62976c332a860941d44940819e7db686e763181e7e9f7342500', 16),
                    gmp_init('0x9979e5ae336c3acfea180a3873341e61c9fa0d020f078082224807d800e80497', 16),
                    gmp_init('0x805d59bd1284bfa2ce3ffed508513efb38de8a7a6600802a82ad64f1490c769c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe981bac403975bce1d95a4e5c749f2961fa5060b5512e6c74a7dd0ac279f33ed', 16),
                    gmp_init('0x40e2a01f47235ad0cd44c2a5477a184d0a7cd2d73bd976d408b37bb1e52dae96', 16),
                    gmp_init('0xafcf914c714ba7f45640fd7ee4f1adea9bcc24f2786989ffcc238fe0bb5bed0e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7d460f911fe00ce20a5a6f46f9de182ff8880589e7552adf7c4d91aaa00647e', 16),
                    gmp_init('0x4ef08198dd17e9959847170dfcbccf7e9abce81febd748461f09d90031b7344', 16),
                    gmp_init('0x883242993b2cd707f3033efd2653f7c89a9c2119d6553837bfad23b0b9eda00', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98ecb964b202df810f680fed5d21c40d9991d2d6187e24a8e8a2e1cd60fff687', 16),
                    gmp_init('0x4bafc511a110cbf3c18b70854e72a48199d8f1ef8e20d17bbab86b2264165f49', 16),
                    gmp_init('0x70c7d39940eccede60751152b8379a89f392b4bc5c180b3602c6a4cdf6c661be', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e2bedc6c9c7944ee0169f6de563896f5b4d2ed26d48e99cb0001498c2117ad', 16),
                    gmp_init('0x3a934537a5876a43994b562d15c2911b7a6749fb2720e31131296cf27474b242', 16),
                    gmp_init('0xf1bd707d0e6d53c64e19618bf83e4d3484ac3a4784c79a7478a44c2d8b33292e', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xeab0f45188a3f33e854345124918098cc8e7d8cf8f4213574c2600b5e2aa40bb', 16),
                    gmp_init('0xe326a326862a0cf5843cd71d8ce6101b15c0ad7a6813388423527892218bb142', 16),
                    gmp_init('0x95c542bc9ca57f4d9effd44406d6a6639e88e7f1a97c00793bfac55319fc579b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1395de89d2ec558e9dd0db2f27ca8c1776c725ee9f3d82ab40d37348fb7e0fb7', 16),
                    gmp_init('0x8e8765921b93f6c32c0a19293babd22ea0b97804367399a54aa960358076476a', 16),
                    gmp_init('0x178d324337938aea8e97922d35e92744edb798daa64aeb258221212811b07e70', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc4089b3d881277c72b9a438696186417a4bcfe429a8e8c4d2412a9e56ddb5e7', 16),
                    gmp_init('0x11f8ae02b973295388bc1579b44fc45524ae1a24fd3395c3bda197bbb5747a34', 16),
                    gmp_init('0xd2baa9d93d9444293f35aa73ba82204f716e01d600699ba98a301e7c993ea78d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91f9fbfa8bafbd571f9b40f161055834e5a026f28dbc5394536fc818d3e89cfb', 16),
                    gmp_init('0x491300e0f963c74bebba3c1600cea6091ef298e9183c44451a0d7098af56583d', 16),
                    gmp_init('0x637fea525a0f784caa1ba336dde71805c963121c67c5f1a301df5f2abe08c652', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec16137342924f1b8f87deec0ee8124fdb3cb0976f935f464a36f999bdde1b50', 16),
                    gmp_init('0xdfa0a767413600022a8dabcfd7b6080a0fb86f7132f06b62a3206affe40f0e0f', 16),
                    gmp_init('0x97eaf1ec727ef9afeacf53131a8f5d33bbc04cbf4f6c1192c5a0cac196eac3af', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33635ce2759aec977d8fbd698f6cdb965382aa944b5e359fdbc9075c05169eac', 16),
                    gmp_init('0x7832226eee3ce7a0a876e59d0db02dff782cb57a23be8ae648576e41b8aae605', 16),
                    gmp_init('0xdfa28d3df73791cdf11238bac1c0bf4b2fe7fa6dce7cc3ca1414ca026fd1f533', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9db7c1dd056bf2f17aecd1d3bb5dc4c0232f594138e7a673a5f7f5b61e759a6f', 16),
                    gmp_init('0x9623a94ed72941f3a8499232b63196af0d23b2478f075b1277464ebda165888f', 16),
                    gmp_init('0x8c90022ab3dd95a8d3904d1072aaa9e30eb178983eda3a9dd68900aa8a9758c7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0cb96e288ce81aa8e623d4a2db3d41ddce58d1c220ea1802a4f566102372baf', 16),
                    gmp_init('0xe2390acb942bb77a4ad51ef372917d0e93d56b0f1d24dcf571ed3724a1ea9737', 16),
                    gmp_init('0xe465a241acfee0371c3b22b0fde0c8362beddd13bc3b0cb2bb805f0cc6036a9a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155eab22419129d95bedc60790064d1c8d23fd4862825038e9c403fc2e5b9d7a', 16),
                    gmp_init('0x616e80fb8435a0fb78fe5a487d26cb4f0f71ab811db42b6350e3df953739fd2b', 16),
                    gmp_init('0xed91ded31fb8110593d3877fdf14ae1a7efbe61541b779e878d8f5a58c51670f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66a3abc86cd45e163754fea10e1fee5550aba471d8293dfb6315a8f152a442df', 16),
                    gmp_init('0x3fd2f20d78926d4ab42f26ddc70a3ae2079a311b605caef21cca2ea6e4e34955', 16),
                    gmp_init('0x53923818085bea3d09b93ee5c8a30b67f77f14dfc0b831e810a29f18d3d6666d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb8ef7936fd934a3e7cad1c0a3cc03d52d73ee49b429593ad44d6b9ae80cf4a8', 16),
                    gmp_init('0xbbab9ae906b720b064af633eb6f05bf968df985abd152a3addad78a853681a9a', 16),
                    gmp_init('0xc3737cbde8d291148690bfd649a9a301941631b65adddb7b47befaee6cf59a62', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7db94967f567e10b26dc74f7028a46d75253fff6c54357f6d256f9fb2fb37c6b', 16),
                    gmp_init('0x37a6c501b8895b4405a470a69e62e9767a8437c69970cb90ea3b24cf197e73fd', 16),
                    gmp_init('0x6c48c041df5d157950c5d39000fd0dcbd2c6407645c8d35ea5f4c2f776658d23', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb075d3e70bee6e35f5382c1cf118e83bcea329c1577ab72bac85a951516941d0', 16),
                    gmp_init('0xe8994c282a8e7d8f59e6a650e5a7426be2c81c85090b4bfd7e15b284b0f8c49', 16),
                    gmp_init('0x439a7d86f5f79d75168ac70ac6cb1639d63742edb6f1ee3033e6875d6e5b53f2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bbb0c02dfe4a7bb8ee8cd1f3707acc2352633c2cf0345e396072760a20c7261', 16),
                    gmp_init('0x7b849c9fd6e85e8174a03ac9c67db0d92b36fdf5b838ee3bc37f3ef0a2125d90', 16),
                    gmp_init('0x384ddebca68ad4e12668a5ebaa64e45f51034fe31985766893f8559cb43bfa6c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd230f0664ba48e14d48e5e83814bf3172d1f23a1fc118a39e4073bc1d8c67b15', 16),
                    gmp_init('0x7349a4443732fa680b6ed168b374b0bce2ade0a5f7dc8ac0d06a453036d1cfc7', 16),
                    gmp_init('0x325f8b8811260995e3b671f453e9326d5e4bcce8597c1d7dc00aa451b890c768', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9b39dffa87e5679fd56920573050441abcd1d8649c7fa887ca981f170f617d48', 16),
                    gmp_init('0x8a1dddb758d99f78756bdeaa503b84678d049ad3bf793c581c3157c7c9021c3e', 16),
                    gmp_init('0x286847f80f0769771c5f89b0c13baeb72674a183ee08abd0c95752720de06ccc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x969fcfa6c891c222866f5bf095044a75d2473bf80b1426213c10a3e91fdc2cdc', 16),
                    gmp_init('0xe41a8f4192c8c8e7cd3c5656ec578df93a24f8cbf6657f8cfb2acb881d77df2b', 16),
                    gmp_init('0x8bf8030709888e9e2465d82d25bb3e3b40a477e0cce387da746f181c2eb977bc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99044d94b0ea01f423c5eb9c5ef4ee9c2e553f13f9bde06c4009441d9e338a76', 16),
                    gmp_init('0x8de5f472d44f4998d7f70f75837b6a6bd0d24fc8082c6565a9086aa920bbac7b', 16),
                    gmp_init('0x643c3f825cb5e1fe3b43f5a1e6c55d1a401fe537f3d44acb6a43aaeaf582f169', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea6722bcdaa7317631759c6d0a936187c26939a699223841938487142341ae6c', 16),
                    gmp_init('0xa87f564d787e148e1087cdf6cc94bca4b1cd6f415e44f76e516bb697664b32f2', 16),
                    gmp_init('0x95bd52ed4d9c842f8fc8de1e278f7ea2c2a3a1bfdf6a6ec720f91765831cfed4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0278900e0cb87a73aa40fa8fa15a671e828e508b664f96b74f84eb71fafce43', 16),
                    gmp_init('0x99b2262b8bd73fe2b023dafd7620fd57d7c72413c435b08d40e71ca963d9d742', 16),
                    gmp_init('0xcf0c304531f1d8169eb648b3bef2eb2d353f011e6aa6a18a778cd35f28ec5f85', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65ba2244bcbd18534d7daa5fa65a39513212145943b7b54080157d4e0ec7d2b0', 16),
                    gmp_init('0xb1a6a4b6d3f4f970269bfdacae5c0ee0fbf67c747d27dc03aee294aa38ccc7ae', 16),
                    gmp_init('0x3f0f8d9e007fcac886c3b967b11a476ced51303a9321a976cc58b37479d1e5ac', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8223ef1ae16b18ea53530f8cd93aa26bcb3ffee15dcea76c5bd2aa6a94acba0a', 16),
                    gmp_init('0x88e6aaed433d55769efb48a413aa492092aa14d84cb36a8ad221eaca24b2642e', 16),
                    gmp_init('0x8efdf5f4a2f1aa2ab3512b623bae8744eb64f3dfb445272c82ab661785ebe7d3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94a38844f574a803f990e12fbbc7a01fea617ebebbda0c67f394a5554d1b8880', 16),
                    gmp_init('0xb9ea767c91ac5212d3efa59fe4c30936e5219e91776b1880d1c9edb2efe9b0cc', 16),
                    gmp_init('0xcaae496bd3df1e9e36effd9224ba9721bc93f4767ddaa586d11f7bb614875b2e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56d53d1c3fb0bd73af2c91116c929bb15c1418978ba1d0e30c872506b32d5c84', 16),
                    gmp_init('0xbf874ef2eebde4be7e989410a06b405d0fb85fad968475a33b85029e23d1be0c', 16),
                    gmp_init('0x6342dfcbaf1cb56a5c4c6b4ceba0d5a5483f2305b1d2547fd3abd3a83a612231', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d104a2be319647306a32a4392d76e21210c2d665ccd7f5ed48a0273d0101f53', 16),
                    gmp_init('0x68d3309e17a6acb480e6e5eab0ded891d522f27d1be94cf24a8f12657c678160', 16),
                    gmp_init('0x37d181862ca7d4dce57f8eb4597f5598d1770c270b02472953edf1a126bd9785', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40e2b179aa318178274998a62942e427f35b178651d02eac185a505cea886bb9', 16),
                    gmp_init('0xc13c776dc98360b70095f9cda4d8438c244b588814ede1788745ff6b437fffda', 16),
                    gmp_init('0x4acff9fb214059bddd180d68ba28c94ae4c1def74876f251f247b422cb3b3bb4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca63a44fe35bb110c21e6b4071d65c7f7ab353622108c36810e533c67a9b380a', 16),
                    gmp_init('0x8b5f624f083a326d2c274eb4b48cbf15cc9b030e73e24c47f904d6ee0f9ecd5e', 16),
                    gmp_init('0x8a20e77df6e31193f080975ff56f87f4e4aac314d90d55f888e21e1396c5d4af', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6e62eae104c497be0d2288b2a462ffdd365137793fef00cb69eb02b7928ea54', 16),
                    gmp_init('0x274ad07ac8278f5be858521336d283f1d817cbcfeb23eb63497ece9637bf811f', 16),
                    gmp_init('0x8e4b5e5da2608d6905e0a029dce30ee89306ba6aaf022916b01e090272e9b260', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d62ecd5c78e81fdd7be8174f6d9d7f1b37c211ddd70d6ed6c0709018107e68', 16),
                    gmp_init('0x768a1d4196f1e50c7d8b0d95b595ea4be509a29a858ee0a7a87f900ad3624847', 16),
                    gmp_init('0x4ebd22a26118062168f7c9d86b40616bae384c14f41c5e26d1368f9341c7ac63', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd05844c9d7fbfa69992aa093d80648d36bb6773770b29965b36a1619e49b04ac', 16),
                    gmp_init('0x2bcb26bafc80b2dab8309d8d21bd30de6f3e6076a349cbfd22cba33853ffaf63', 16),
                    gmp_init('0x357b990fb586a2bb247733a70ee8e27ca62db68e80b97bde8f309c1daa0edae9', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7619069f9d69bbfb8623967e3bbd69a23ec9b5b531e54b36689058490dc82a8e', 16),
                    gmp_init('0x939bf2d7cf156e761d24135f0599877754839eaa043490959860d67c18bf6ae5', 16),
                    gmp_init('0x34689d84479c5527cd6dc61109a6fa3d4fd2d201d96dd5b60c2a37614b236268', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d949391367b1192e396fc8df548350b6724f5450b125027be35d6ef1f46c421', 16),
                    gmp_init('0xec86742de0cae77c0c6d6757ce5cd4745c997c7d05e3cfd9998f8ceb891e34b4', 16),
                    gmp_init('0x9fc246a6314982ddfc265d61c7546db00564349ae7b36efa25b1d756d81db387', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e6b36c694547774e761c0ccab1d305a963674a4463a85bbf946519a07afd40', 16),
                    gmp_init('0xe384ac6eb98d1c03f1368c29a9adef151aeb6bedd8ca635c2574910f8123dd2e', 16),
                    gmp_init('0xe9450f0af021e2ae634bb663b4f59d8fbd26ac05994be3c606b5e258dc110387', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4f05b2132e093352fae42d3564521e8d1b224c33e675cea69392f0550bb4dc4', 16),
                    gmp_init('0xe4b76760ff85c8f95a0854e0a91cb34b7b1d95af567c2ddd50170fbfcb2ffad7', 16),
                    gmp_init('0xdb055b2f334fdd0c80aedd9bb2f1da08c8354859bbfb60c5273ab95c154b6d78', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x912754790e5ce37bed6a9432a134b3ed3b04f10cbb5246472393cc84124a8b35', 16),
                    gmp_init('0x610d0d32b2d5bc74ea90e922ce208ac0a112e73fa4eca7d6dc9e37eb0cb6665c', 16),
                    gmp_init('0xf2bbd7f8b0b444708a497e85478cbeaf72a7cd25046047b92e6e3a8f8ef6f961', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x635338834bf5be866e3eb91ffd99fae1149c036bd98f4ccae4522388af3ff045', 16),
                    gmp_init('0x63c38269dabef84fb87fb897cdbeeaf864783e698dfd6a125390348e085deb3d', 16),
                    gmp_init('0x424ade3ca28aa0767f34fe2e4bd729da10b297a3fec9e74813263e737c262462', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69ffd36b34c1d971f72bf84474fbcaa9996147ac1877d2180f05936ac2ceef6a', 16),
                    gmp_init('0x4dab4a86f3d320bbca729df7f863ecb5ed78824489c5d75bfd95e876e897d654', 16),
                    gmp_init('0xc1a0f18965a12125dc770313856945027e72fc2adc91968f15970ca731d7a498', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c974cddc5ea368892b351d66a7a04695ddcd50bd0b828794632a9f88492360a', 16),
                    gmp_init('0xbbd22fed9ea702f21ee8b16ece3c90c80774e21d40712c3403d33a37ef59b185', 16),
                    gmp_init('0x342565db259b6afc6debb6d1becc830c1045c791499b29cf54938c7fdfc91522', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae986892a1b79264f4b181c18288c868baf3b7ea3d91781f8050fd6084161b35', 16),
                    gmp_init('0x981f5a446627bdb204151f50f53675fd7ea9b221768d57da8707ef60c763d24d', 16),
                    gmp_init('0xc3ec54cbaa387f8a7bab02cc52c75437347041906e97d0388bf1d58c5cd6f98d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8541dde04c7615e1fc66b56a8fdc560e0f09b781ada13cc1a933174ee84c4ee0', 16),
                    gmp_init('0xacd4207d46811385b2453426cf4dbe5e894ba664279a4342a3dfda775cf9f00d', 16),
                    gmp_init('0x80aa1418dee76989789e0c6ef1c210dc2ef1fcdd29447f146cbae5ae4c56a05b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc37dbb0598e10c727af70f475bc20e351886aa2d29c4c43011b0169466cef88', 16),
                    gmp_init('0x3921179285fffe180aa9de61d2497c23e3efb3b89353efd4c8c14f3bbbb2f6be', 16),
                    gmp_init('0x9d2cc0950db14472f288fc4708924f095ab42eb4371aa8fca35a9a260f6c04e3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb3fda62df118e16955a7f7155e608238840a1066c0b61f967f4a5ac87691a08', 16),
                    gmp_init('0xe37987b9d8e956fae25b9ca276c0f5b6911bb6600c3f9be17f9c649ae93e0a7a', 16),
                    gmp_init('0x19a61b19c3c82f9a0dbc0c4413bcdce596590d1239b997ec042fac6e0e0789d9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79029c1f9215d5fe066ba3f7dcee3280a423ec2d0e2787d29070774804f5f9db', 16),
                    gmp_init('0xde72224e59d70b7c8c0617c756ba66845232335bc7f8d1fa7fef28e8cec100e0', 16),
                    gmp_init('0x90a3ca58c3cd9376c2053a56b338cf1ae94798fcdca42c4404c3269b3791bdbf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55237112cf46c6b11b41fcb8715b6abe74ade05bcc878063729e73d223bb6fb9', 16),
                    gmp_init('0x3d269a3ee1badaf4dd04cb5dd4762e802c95c761cb4d05e07814b8faf748c78e', 16),
                    gmp_init('0x33d231101fa4fe2b0e4b9fd1e38e3141ad8e5d7326a5b1f5d454accddcb360f8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf77ac8ee07c7db12b8901eb775c04681f8591bc87c0d8994ab8c25d7dd1e327', 16),
                    gmp_init('0xeb1a19c1917f47f94fee0362fd4a41d5b27369f5110a1c816acc0b7460eb0a0b', 16),
                    gmp_init('0x322b0016927ed6dc87fa34b1add8b4f983829ee4825a495b4320b2e498fa2b5a', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3833c0cb9b52edfd67db2a81b5027202e1ff223009e58a2e8f3e36235b7dc8bd', 16),
                    gmp_init('0x8091a25a4eb478ab8dd2ff155ceeffc7e3c47269160902b78f05d9bc4a98f5cd', 16),
                    gmp_init('0x9e18fbee52c36b212c76abc7121e193848646136ac6936576e424135a4630121', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8b6c2aec965f6f911367c7d6da45d4304b7575bc9345fe2d1cc41be57d2f039', 16),
                    gmp_init('0xab106b686a6b60717d26d9a10c0e24277a07c91cddfd000da167ffae5219473b', 16),
                    gmp_init('0x612a436e65bec22b7e3d83924b0ae5e603af40f85920340d7b5982cdf49a0aca', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77b2d81847ec84138d0711e5dec8189cb3fc7617c3629c0f01ceaaa9e52a8bc0', 16),
                    gmp_init('0xa7885cdf472a3ab37669e6f8ca18756411b3d59504810ac5aa5f49f5b51dfe10', 16),
                    gmp_init('0xde8ae5c5d6ff6ed6cdd62a680eef270b070e11e6681729954c5ce46215fdc80b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa11f8e16c7f48e780bdcc1b6b30e2fb0cee4ae6af9bddc9a2973ac97e1edff62', 16),
                    gmp_init('0x97fb25292d7420b3a1d4f39e0c99bd098ec186f6b6bc9ebab257afc1c8d30e38', 16),
                    gmp_init('0x3feb44d5829a6405c01fe8bc0178f74520c05d60adb9bfb28d0183edbfb821c6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x744a91681eddad4c19156b4f3076dd0abda365dfa7565a4320b33c1af2c854f', 16),
                    gmp_init('0x755c88fd264fadac7f5c885538ea736691929cb77cd5c341be26ebd696171780', 16),
                    gmp_init('0xc0d5af8bb46ef3ba70cbf0ab225fc628707568d42faee78566688146f82b39a4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x965a321a9b8210000bf16b2f1975b22b8869e6b8e5669248bc6b9ec9b583fa7d', 16),
                    gmp_init('0x42539219c1f69a5a7fb3e2f8429dbd480c2b401e37569c58f420bfc85860c1fd', 16),
                    gmp_init('0x6940d48c5afe9bdbfdaedca9ddc16f0e2268ade72fa69c98e5d6936cbf244104', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x915ddb60d412fcb9eed635d3172f28c7e3c36b2a5f49d052aad10aa1ce4e20f2', 16),
                    gmp_init('0xf789fc1d687278ce97fce8ef89b21c6bef186086712242134be7fb2c7ad40871', 16),
                    gmp_init('0xdab29296d17e949094cacf9513e300a25984f2561cf7cc6f602d319d3dd77ceb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55ddc67bbd53105af240da8e7f26a876bd2bc71cb627395084be413f86214e25', 16),
                    gmp_init('0xb9d34d6bc103b50d59ec17ad727549173a900bc080b76e87d444b4baa738766b', 16),
                    gmp_init('0xc8df594698b7b56f449555ae687e824f40d8eba7654f19c23d92446dbdebc3ad', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa575b07f4a899fc79ab0bf6b68ae240b4780ea9a61f7c9f19a74307cbb49ee1e', 16),
                    gmp_init('0x1646a6c7f47edbdce9d06cf1fe66a646a06efa7566b60a03710968cc2e806a28', 16),
                    gmp_init('0x72bb4a98025d9358a6690c4b481af265ef1e8b182d034875a572dee871e2bd58', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeff27b16103ace6b9d67da35c16c8fac73be6200e5d11d48d8e96d6dfc7f5d4a', 16),
                    gmp_init('0x2e507e4f75c97d42ace5be36c4301bb0f86ec0720e10889db465cf0001e03330', 16),
                    gmp_init('0xe8407da51964fd1e05a98425c7ae3c612cf710aebb4127b72333b3ac946da4b0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f4203fd3b7bfc11a50a8be3be195889829a31449f0e06afa4e4201ad291532e', 16),
                    gmp_init('0x44e6c706d38859c52a686f3dbe7ae6f9a60d6df3d17b0dfdc7f6e254ad9918a5', 16),
                    gmp_init('0x13d2f145dc08e885dc74c7dafc7e542a45ff6980cbac57a4794e9c106d9aa011', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31354d3e658f274ddb05e46cd0da1c0c0744f9e12ec01e75f14cd9e4201d2d02', 16),
                    gmp_init('0x79e4f319d8af9456715a17e7368d73feafa601d7cf25475b8de51ddbffa66092', 16),
                    gmp_init('0xbf5799e6b6aade0b06524fa02c4283711e8ba76d163e59b0d986e9c3f977ff6c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4d3766e709bf300effc828efbca27227b361cf4fa1227ec9c4c801c37eb6b39', 16),
                    gmp_init('0xae7044d9dc7c2d941474f84db995ef35696bd5b6f1937434ce9c911173a05a29', 16),
                    gmp_init('0xdc9e99a83887ae8c06e29806d245fafb375f22467d3d907d4a7a4bec50c101e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2caf5eac058bcd628873fd2f967c40b866a457f91aa69179382e621782406f79', 16),
                    gmp_init('0x341509c6d516243c24b837b01d9649475c72c5d83aeaa70c5e2bd93ebd9b40fe', 16),
                    gmp_init('0x91b77c76a96f1b457caaaadd3e228357fda13450d139b947274fbc7898c18663', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x670c823a396faf4975d83e44b1e99d932254f1771d1f522eddb305050492d5e4', 16),
                    gmp_init('0x37017bab13d48efcbd381e77462ba6dc2b439953c46095bc9fddde8edc8c99c', 16),
                    gmp_init('0x4765689ef1c4f2f45d4164c96b7cc827d993969e5558f00d94f999fe77f5c3ae', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x32e07f5c7f3a704db58379ce9ee101911985c7945bf95d83c81b86c24fd9a71c', 16),
                    gmp_init('0x4830d437ff818365fa6df71a031e77b8eea1c49fe2c872f6f4c26551be89bbdd', 16),
                    gmp_init('0x724a8db0d7cd3c319415433c2414862719b26ffa7565e9f089dad7e89ef38a8b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179de0b630d6da74bf2710fb5bfbc00c22ae40a0bd65bcc94ad843d4b6d8752', 16),
                    gmp_init('0x9f067f7d756638bc6810c2256aa6b7fab2fb5464e07aa6980a7de920b0a59ae2', 16),
                    gmp_init('0x1636d8107661a301e556eaea71e2430ba491c88560a0ec170532814fe5e69748', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30139de2b29404b97e457b3a1d3b3bfc64fef7e70806efbd1442943678931f4e', 16),
                    gmp_init('0x47effe3c0cf063d8960f01d712a1f17081bb118a61b8a858872846cc304f9ea6', 16),
                    gmp_init('0xa8ee56fbf92c4507559276889c75d4d5b16259e739fb0684c88c9dd966df1e43', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78d90a39fb8bf5b7303a9944e37c001da0fb7188115b21e684aecc6519813fa6', 16),
                    gmp_init('0xd8836496d8b0ee7273a407a2042c7e9ae0139fc2c37057abb179873202c67be0', 16),
                    gmp_init('0xa53555c1b0c265b163ce7a41b6239503a7ffce51e8180cca1731faef91def631', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac5952f563e15bfe31bbe5ccea3a917d04ac20224db7d1cfe19997f098157de', 16),
                    gmp_init('0xd1ddd3027e5e72da558abb2dcbd26de6d2dc459fabdc65542e3a55cf7f6ed2da', 16),
                    gmp_init('0xd30fcefe485a4db37dee2a906961dbf7bb14008f7e7d611e0cc63872f9a2575c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x218839d7be3cad307add2b48f9702ef00c30083e26d346ef4fa883c70484f8d1', 16),
                    gmp_init('0xb85e5b67f8062b187dd7db58e418ade3933cfaf4858c429aac32c962d5ada566', 16),
                    gmp_init('0x3c6337610a5c74b0b6419c60098f536b20b888ea79a4b4c61ab3f9a7cdcdd18c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfd3dc540ddd49055a9bfce1399ab36b0ebbb2021d2c6e1da2fdf52e20dbe440', 16),
                    gmp_init('0x4aa6277944ebe7da54d0fa048f571e2be74e87370f91627f4c9ece1ae4aeb8da', 16),
                    gmp_init('0xc42fa099ed76b8146760af988fccdec69ea7e857354d6bcf2752d282bd26638c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6bff5af9e360edce16cfd3675066e3a3907484447a5e5a914aaeb75b14d265c', 16),
                    gmp_init('0x17c45c2511e832652130b79ecb6e7bafb80e5fe0b024211cc5ae2e0e74164719', 16),
                    gmp_init('0x3f04ccdfe2902745884d89276837cd50937eb1d2e6c135242a4ec9682f63fd97', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x450ad9df5c7441d76cf2c4797f1e3837ec02adab9c52be5d467d583fd7217f02', 16),
                    gmp_init('0x49f43f42e7364f47c398d209d0ba8ce92c9553f8dbc79d0e1d5fdf265e7a3ff9', 16),
                    gmp_init('0x3f445f4f6f7a0d0b0a504256153b50b0d7341e06e320f662fd550a48e19f540', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x488d362b74f50ccdf24e31898aaa77d30a53f57d5ef4720b8c1ddf9d81d98fb', 16),
                    gmp_init('0x70ea4a17f02549704d1d43ca85ab3d8df919901ebfb835a4bf0d44d11e6a684c', 16),
                    gmp_init('0x8638bc4af4836b83a4e459bf60d9ed36736152e2456954881f7277057423be0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56f1cda026f7acd54af752a93a2afe72a69ff601ad3b0a599e0446855f3398e5', 16),
                    gmp_init('0x8eff3ffdf5cba9deb86cc27aa53884e6fbd2fc0cdc3805b81091c504a05f9eea', 16),
                    gmp_init('0x9ebc1dcb392fa1018931b1279b2a1e19169087b7f8373f1aea4095e2e20cf70a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x781550c2d08d52f6e2a80daaf7bdc6cda2fc25f4ed3da740b99d0dbf8473e62c', 16),
                    gmp_init('0xfdf6d0ce2ad2c5fe3a561d05a180180f2381af930999f30e075fe88f2340045c', 16),
                    gmp_init('0x42b39989aa3896b9b1041eb57bd9d0a46e22a5be39a12f1f771ef7c2f4b67333', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec0c5091162b1c112596cc24554a96f4da88d0a5ed3aa18e699b39414808e8d', 16),
                    gmp_init('0x3730ad1a661ad4922d2e5527a76b52e4b229e6f6efe1e22b35f2708a8b397f11', 16),
                    gmp_init('0x54545fa0be4f7e67fe935b42e3bc81ca669b3f198400c953138213b11d2a4383', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21f50946f49e680015c468e33bb3138c8eb8c8980c8d160bedb61a33e77a9e28', 16),
                    gmp_init('0x7718ac63696f113ea02fb6d9dd3ad8c2c30448fcdf70c6a44f78f319d6e26d9d', 16),
                    gmp_init('0x82cbb2c7519a7fadffd949cd8220a2d430043415035c5e6a692c4dbfa3461f8b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f8292e7569d95c801b7b0374ef41847299b85cd4c6e6c5071bf460bb0219c43', 16),
                    gmp_init('0xaf9f5847ac2e01a8437e29497193ffc2f4462a557cd47c2faa9f1ccf229876fd', 16),
                    gmp_init('0xeb238d9e390617cfc028518e670d19879406375180861a2b69fd78bd22ef0efb', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa81f53cec7f80450a8568ee7e06b01d09a95ad380fc9ed97cf693f3386c34147', 16),
                    gmp_init('0x1ce7daf699b8fe702e9489cb6e8b57f939e7b09932fb726577dc709e09d125e', 16),
                    gmp_init('0x84adb08cb6a83b069cf6365b45478a1e3c13adc1027a09d3d75dfbceb98c0eb1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bed98035c1bafae66dccf4604af22c8f1cea606720bb43f129ea1345607a15e', 16),
                    gmp_init('0x4189bce2913d1a5437cf5dcedcc0791c7ad597a3899b7de833840f304dd4c9ea', 16),
                    gmp_init('0x2de0fd2b44089562f51a68a7ffe594a7be20f2c699db9ca9a36774acc376f751', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4007e0f2cdf8443590ded647d7d818ec3c940215a92857d0898a4566f2b20e0', 16),
                    gmp_init('0xf60f6ee21c06d7473f8b1df74300d8e2e2bfdf4e333c649a90d9002a8bc1f0b3', 16),
                    gmp_init('0x4c77d31b90cb3bdc355d20fe8a12e1251f98fef12c8f2c8da1d48ca01d5864c6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8be432c64448169a2a3b48d781ddad4ec3dbbddc9f31b9be68720686a89460', 16),
                    gmp_init('0xf09b2363badd1b837c025bae474501964d2b87105337f6913e1003e849fad134', 16),
                    gmp_init('0x5abd4749fb7c22831dce5a47e9abe512aa0477c201fb28f02856dc353997b8d7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x671ba9d644961a07440542ecd38bdc309b8e5ab8083dbc637b98dfe449b4f795', 16),
                    gmp_init('0x86adfdca66a5d26c71e70e7e43537964de23ef77c9a51fc73cecd0324e7038ba', 16),
                    gmp_init('0x6b2783cc01b85dd3045f466961fc60653423ecbaf393aa968d0e3458dca338d5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3adc8004121dda35d1c6458b3cf8a043761adc614d5883a231deb2bd29e910ac', 16),
                    gmp_init('0xe979422343b1df7169b554e5e3598bff179ea07bc4fb5e25a7aa120f3390b76c', 16),
                    gmp_init('0x77b4c750f91720c2b5ef2d6018509170a0ee189782683d0c2df3862007265320', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd2e4f3657a11ee3f4eb069c7d7fc2ddaf11e23d0a48090d2721937f7148c7f2', 16),
                    gmp_init('0x3fa55535be12b8cd8cbc872b2ba39e65a9cf3d5c893b7efa94b8ec7843ae292d', 16),
                    gmp_init('0x4ae9601952d7b1c438c34c85987c4da9869d9ba799ae00a72bb7809a2f160fb0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x454eb72cda43340623acd794337bf133623a21b5012d79780ad317b7910fad42', 16),
                    gmp_init('0x70de0ffb34d2a12f3fbd3fe065021bcb297364cea29aed08a46fd948b8748f9e', 16),
                    gmp_init('0x5fce2cb0e68e38f015fd30297faf5331548a91409405c8cc81d6d957881eaa7c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27fb28f2a36d2e471ee6439d035c9d7daf5d624f6a1abc0bbf4f8fed8e0aae6f', 16),
                    gmp_init('0x679a1729788a52e0eb7d9745495dd545886aee85339ee9187e617028f43f2662', 16),
                    gmp_init('0xde9b94dc41c27fed186d666ca7998159804bcafd9097311b5a23530f545ebdba', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70f7595f3eebb6534e950c2ef5373b3297adf011fbd0ece95523856692d292f1', 16),
                    gmp_init('0x53db38ed5387d02ec8686f3acc8692108411b3185fbb467299850bd6d95ab36f', 16),
                    gmp_init('0x90f7a901028a900f69086d841ed3b391ef3d5ccc5019b0610bf1738f7983bec2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6004f9b5dcc4f131e92f466fa8db50d861e470ce9c5a5dc3de77f8a0bdd813ce', 16),
                    gmp_init('0x857037b866fa2d0144401c5b0fc7124b6876205f7cd0517cd49673e474794e2', 16),
                    gmp_init('0xa558e9ea445aa393c0681721b385e47ba9316560168d3b955f55a47b25d8a87', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55f058aeeebda32fc2d66ce4bf9b848b5ac03bb08d585e9793b9ff7ea52a73f1', 16),
                    gmp_init('0x3d67f18f9bb36673948bfd017eeb268951a70d0c26a24994aa26f6ddbc883739', 16),
                    gmp_init('0x5c1e470411b249844f2931cd348f88ff8a83706ab703bf7463832bb771994a18', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f666e1585099f2b6d8fb493e0ca63b2bb0c01ea40bf69cdbae6ec1776435b66', 16),
                    gmp_init('0xe50d0cc662c31ecb9abe53a2b5c590a4bb6c9fe3a7dc0e032a43500117ede6dd', 16),
                    gmp_init('0x84dc0f9e8494086ac7ddfd46856ff2815bf3bf76e8012e333144aa52cb41994e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72b0e13d036c59c5236b6f5269e36e64b8d87807e4dd4b880f49ddfeebfdbb01', 16),
                    gmp_init('0x304fcda98a4209758078448641ec9c8b63badcba9ff26f864effcb164b941970', 16),
                    gmp_init('0x11afa172cab1fd89ef10e639c805c8188fa00d83d039a79c1c5b049ee4df6da4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f94c0f0288aa9ea01bbd70da6d46bb9ffade3720761e7d6d483fe5b35e15433', 16),
                    gmp_init('0x3d30b77a43c27b78b75dddd2195861f1a5c1326cdb2ed44790de2a320d9b12ae', 16),
                    gmp_init('0x16a699665f9e62a47aabf77c4968bd304e4c77cfb1aee3459545f1eb9e522d28', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4560c9e388257055775189f1875d93a336552d84ce3aaf9f69d19edc9f3d8456', 16),
                    gmp_init('0x1ed575397ebcd3404662ed321110eadcf5aba237f021fc3f13e2f35e9f078638', 16),
                    gmp_init('0x814821d323ddf9b308772c278ad9f4baa0d90b7a8152f48e0b66f629e5608e2a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2b99691fbac359435f074102ba43e267a96b04449ce54b76466dfdbaa34acee', 16),
                    gmp_init('0x48536994d95249f68839f3ab349c9c0ac7dfad887b85945ebfb88be69a5bdb', 16),
                    gmp_init('0x1779417d4a4be8268db0df6895c274803380bd34e2bcafa3f43fc8c7f739ae7d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75b84ab079a30187c72d9ab13bdefc2c8e38818f31e659596fc548be8afc25c6', 16),
                    gmp_init('0x5deec66fc0458fd573d5802b6c91557b8bdb39aac749651d6ae88183c74fbe45', 16),
                    gmp_init('0x91ba83a5fed53c2589b5c5bd4d632f99dcf8e3adde66551d3450f913dd1c8c2c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7514cc96cb18477d9fa058fe313a7115016201d407e94468c66b53f6b9ae1619', 16),
                    gmp_init('0xe76f4d42d59e67999f83a6d9cf5af4778cc962cbbbdac8e65ee9f2abdf5c3649', 16),
                    gmp_init('0xbeef4dea813f873f6dd97ef5a29facf31a2d80d2f226260d4291113478f10ddd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4f382aaa1378430ae84c5b882079d3d5a2d99502847bd2a87e6e9f2bfba268a', 16),
                    gmp_init('0x560b6af186e076ee015afa6a3b5ad257be894a2e46e02c2397d71bbb58db07d2', 16),
                    gmp_init('0x337589cb224ad64d0ee01de8faa460e871ab1247057a1f4579c833271e9d5f1c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x714d41ea2209894bf2a07f3301f4c64ce10e2861b79142fd56d4d5787a211abc', 16),
                    gmp_init('0x21b96e5adb0420cc10fab5c2ab99a6af67a920462af374603b8fd80b07c00679', 16),
                    gmp_init('0x77a4f081194efe94d4fe0ff2c4c88dbdeb6d57429e4245dcb139e521d8957e46', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd906c4ac721bff000fb04c85c51919be96a906f5004201a6585b901c2d1df1c9', 16),
                    gmp_init('0x389ff89a80190c102578f429fe82727a0245555649e2504de39ffc670fccbb96', 16),
                    gmp_init('0x87c9e8aff8251174ea68187301a61d07ff3bbb6aa03305a2aa3f92d692ece13', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d75d5da2994b16bf67695c7c2c36693566184e4694e5364123af3903b260a07', 16),
                    gmp_init('0x270cb73bd9cdf16e8be78ec7064deaacb7380ff62a6330ea68bc55d8192798ca', 16),
                    gmp_init('0x627b05071e2739a8cb2d806621eb069361cc871f2056709cc84759759da5c76f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fc1d3da5165bfe129f957c2ef6c011f7449ec7d25527e3f82c699332ee9fc0d', 16),
                    gmp_init('0xe02f793d3c49779c50c7a07180972c8b3487894d973f2e1eca3fdaa2c4ba3196', 16),
                    gmp_init('0x9f13a61fa491020a0d9f7a5c431d22688e245f637c1da4a10b261fd42eb9325c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdcb97dd792f56bcf3c1cfe4c1b4ce89441138b990b52ef9861c565d1c8ba6540', 16),
                    gmp_init('0x5c84074a14539c62fe1a05fe0f9cabd383eaa4301a6dda8be7f62c4f69e9feb3', 16),
                    gmp_init('0xbd804385b94dd9d43cd468e655c66f25fdb5fda6347b5f05ab4cff91fd2a38b1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91018fe2c5e5703e8e19ebe4870e6856f00034e728b68f2b7a9b019c2c377803', 16),
                    gmp_init('0x5504b706699380019354b70a28308375a0d831ed24fec6f65e52b687c0c1a0ae', 16),
                    gmp_init('0x68881c650501bcebc8dd83753850bf228eea5afe76eba14172cd2f3f4d68a5f1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda19b65b2186c6009f573eaa2d34e6a27c1d5bad8d12203256589222d3991a9a', 16),
                    gmp_init('0x66c9c4b2b3cd057d9c865a6375541fa7db2cc156a8057ecb59314e426e90e8c0', 16),
                    gmp_init('0xe3b69f01f9a7ac58ec99919f068f100554d463d546e4f88cadd4d3b38bcc295d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56fc64ff00ce0ead7571929921b17600456c90c3d65e61852989fa920ef7c7b', 16),
                    gmp_init('0xd8924a17e45d3ce1f99d509b79d44dfe0748ed7623724848410249c4bb7e4966', 16),
                    gmp_init('0x8236f339436e52808641ed1ce0a8fcc700786837e2bfd4860db0cf792e512c20', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x310635a131362885e9ead6148de7680f75264898db2cf635ffb048628f6a2856', 16),
                    gmp_init('0xd47d873fe94aa1b5701db65e5839241339bd903294b1be55e6e39a9e8ce8e06b', 16),
                    gmp_init('0x401755a17dc46c8736bf9e748ba3b91d383760bf0b830d16fe55b30a46c5dcd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59c7a4c2fe1f3094cf6e8c9c3a662b1b6ad3a036a02a5e6055132a23e1d4d753', 16),
                    gmp_init('0x47f3a96ebc96c85cee7ce6db0ef152b632d3452c9d720a489193064bb73d2dc1', 16),
                    gmp_init('0x450955ca842089dee99ced1cb2f45bd03ac4219ce26c4f0fc34219e20807bb38', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd76ab444abf7c430fe6c065ec377a46141eb3d0b792eca8b4da412e6c70cc528', 16),
                    gmp_init('0xee11a4bde7b6e26250335d4204598fc83d68189edfb5c06b5260fcefc1e5bb58', 16),
                    gmp_init('0xf261a538d15257ccf8b9668dff6ab5408b8bd213fc19e13e72d59c38bd0dc7f6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcff6bfe069e87a5fc2ed8d36c9f586ed23cf637bb1cf798d49b9eddba2d8a41', 16),
                    gmp_init('0x2394b5c041dcb1e64691197c82e9a5d7f6fe40bb44e0739c90c1aecf3d1f358c', 16),
                    gmp_init('0x7cf4dbb8a7f1d4d14b16121804eedce159908d6a589eb9d94580d1a4a7d4a75', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bbf46c8e5a1e1c4a653eac2e47b74019b9b229a03fd8832b88ed24fbf330521', 16),
                    gmp_init('0x240571aa14ca783e68f53eb9b47d62bd9dfb2d85a7f569b0e363e677478d64e7', 16),
                    gmp_init('0x20f2f1f4e2eee6a948d9b95a773822156b78095ab210c187033ebd182285c205', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46bba293f5a3b414613b6019fae0aba968bbe7e8845877d0f5cb8e88064907a1', 16),
                    gmp_init('0x243435add67d8520b9838e7e6dff942dce76b773523c5740e0c96a679e227091', 16),
                    gmp_init('0x8309b431a4678f74df9477801c00255f522ca8a1789176123fb3451e10fae3ef', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x752d89808f1445cc888a07f368a58c525e6c82bf50b10ad98b5bcccb53b6814', 16),
                    gmp_init('0xc738f6206e7100f8f6001c23098435884dec16a5ffe63f08ad042c9f86c48412', 16),
                    gmp_init('0xe2998ad382e1c1bbe5c844609a1d13884ed8e2a06468679f7c22a893640f01f1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd55d04bc3386809569522db23e5140b1de88a60962a9d42cd74bb601bc39338f', 16),
                    gmp_init('0x270aaea650ff122d0115627154f3af35d1d875f10bb0d59898cbc660b810ab98', 16),
                    gmp_init('0xdaa60d408574fa3b52438d3532105a4038fa66ecf566d328fe1eeae677526b26', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x650d4c1f4b92b6c36bb497a00c06cd592f434664bf708fcc9e91e97fd5a56d9a', 16),
                    gmp_init('0x4faee5a476ed2dbb30c97e8b61250f88723727f8d7472204a44fb18718b9557f', 16),
                    gmp_init('0x7087bc34fa4c637afa00a0d8decbcb62854e61a51d026cf95777eb3659094bb4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x942ff6f1325a9df78e0bc4d5c5db18ed72ff1d37b3b479bb9f0b5d7171906bf4', 16),
                    gmp_init('0xa1b626a0c3b6561a1ad3b686ba982f55d3b483683d38551bec277609275cc9cd', 16),
                    gmp_init('0xfb69242ac5f5d2e90922dfea5145a9e7f4e9d08a671e4f020a7533235f54752d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9df381b2c7efb506856844c470d74128378d6cec17ba5504add04af280f2c8af', 16),
                    gmp_init('0xb5587629fd11556ffc7383b756f4003d4d8d8fced721c132747498e1ddeaf39b', 16),
                    gmp_init('0x683fb32fb2c780cc6a56cd038e2221838114b0a84c1b9708ffeae858515c18cb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d49e027d3f7cc1f6f255ef2d82319011110b0b36f1817c91a4a729078a0419d', 16),
                    gmp_init('0x25ba95e82df136d60c148be6a85ff9d8c4156ea1060c7aa687ad83d91e97def5', 16),
                    gmp_init('0x29e437041bf246b2d9710e75c6e20f5fd8734156b0478b83e5115c49b66c8a9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3a6b9470e79e3c25fbd7bf1390aef1f8ce345d491c6bf066115afb3ab3f17c2', 16),
                    gmp_init('0x34715d51d40c423d23975671d1360adc7570d1ed6a92e27486dc0c693146950c', 16),
                    gmp_init('0x8a3a20e67992bdace9bd1d92a1f1a994e221894e351177f7ca2cbb2cc3f4d5f6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d1bfc8f12ec1e447c1e1b781ecf8b4d40775e8c6647651a81b4f54af5bc0a14', 16),
                    gmp_init('0x499d8eac06e55ad4532388799161da0bd28fd52546621ace44398d5fb248c427', 16),
                    gmp_init('0xf745b66a769f8956db7a069d7e41ce8fdac43f273d41e75e903592378377cef3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3515432b9d1a4af6d78f6347a94398ed149defb684b6bcdf1325400bce601ac', 16),
                    gmp_init('0x662699858e7b8f99da07b7e000f664d694018329269fab245dc7617c824a1243', 16),
                    gmp_init('0x13b66fda9fa559aa95e778002b4ea6afc3bf88dbe31d8596fe2fced0664c12c3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x266e8763dc4c3335a2c096b4bc31460f2f195d38360bace30ac63e282802e297', 16),
                    gmp_init('0x413ad3a65dbec61667ede8a334bd0f2d647be27ad8769af95571eab53a717f1a', 16),
                    gmp_init('0xc8bdcef2f15854cc35c64d138699598d3251f3e5a6852b14cae01fc2c162a431', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd731db1a7095511569a4fd9c9d227a175e2a9008fe1dd07f9f2b373705ce437', 16),
                    gmp_init('0xae35d61ccdc99acc03b8372024c42436998f02f619d8168e1665d4f322750f18', 16),
                    gmp_init('0x81f3f8a8086c1e2f273c802063b50fe4be9b723bcd8ab7ddd5b16ece40500073', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x931f4ae428a4ad81ee0aa89cf5247ce85d4dd696c61b4bb9d4761e57b7fbe', 16),
                    gmp_init('0x7e88e5e6a142d5c2269f21a158e82ab2c79fcecb26e397b96fd5b9fbcd0a69a5', 16),
                    gmp_init('0x2626dc2dd5e06cd19de5e6afb6c5dbdd3e41dc1472e7b8ef11eb0662e41c44b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0e58b550d1b83cad0e9398a5ac9ee0dfe84f352143fee0c6e61e1f8441d5af6', 16),
                    gmp_init('0xcceb44a1b482d5c506c9be9bd197b5f356c2e528d01f79e2f2c76f57c95991ae', 16),
                    gmp_init('0xd2a8df2375ef95a02e14a58cba2630f5b0b44972e6d72d6fbe6cce707d86b022', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43248dfa65ab5e70ef45402ea5e4adf65f04b81f8c43b55a08832a4bca1751a1', 16),
                    gmp_init('0x1e71e282069cb0962f6781a1ee3ec411808c9a8458aba46187b9415d49a8875f', 16),
                    gmp_init('0x6a2a703dd6fade37a3e7b43277b50c56abd295c6383a75e2982862334672a710', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81fa3274198f188d2e7eaa0583306a57b7cb094cbcb1cc6147b6398bbc6136a1', 16),
                    gmp_init('0xf3e41def1bfdfd6d1d5f5fca1aefcee53c36bb89d1ec4ba5bf49f983165bc206', 16),
                    gmp_init('0x358ee2259d39902be8845d98ec296777d389262a71c7f2d34fefa1f4cca7dc7a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cd64845d3a8a520773acb37069b12a91f06a0fc04e6f306bc3500cfa73a7b41', 16),
                    gmp_init('0x20e4ae2c7d0448c0f853dc937e452918501e091235f5fae94e968fe275a484ef', 16),
                    gmp_init('0xba68b7edcc0605872cfee46e6e3a8b568cff0dbdd36db7f50051593598db9019', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x634c5bed456c75941d5ce6e57f00b3c65d18b237a8e1f51bd8209cda3df34a3e', 16),
                    gmp_init('0x289bae793c881ff1d26f9a6a542653bad7aa4a4ef3cbb07dd0125de8b4aff65f', 16),
                    gmp_init('0x4c9b58c88108870b161ddb774535ffb2eff3a8e04b712485737aaf370e45776f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca00afedce5e57787c9b9001019a8bc9339214fb33b0be29da1d2ba741bb7d3d', 16),
                    gmp_init('0xd75729f5b241691c4f7d2ccfc00353d344d30fbdffa63c4adf169096a13499ac', 16),
                    gmp_init('0xd6d763c8c8bf6e756896072b2e82309d004c394922ce4f72e5b3c4b667e70013', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa55067e7fbd744323b8d9d1d3b5f4d4c0882bfd055420a2a449e96d216da7a1b', 16),
                    gmp_init('0xcd703aeb058c3d46b8712e623ac0641dca73484b6e3b5ac7cc1eb2fe7973e80d', 16),
                    gmp_init('0xae133f3176fb9a69572cbeb7b1fb4848c338274ac9e3dfd3a0b1b5ef21cb7253', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7e38730beb3441af4a02a6b9a8dfb7f37050b6cf99d06bcaae72c12797bade', 16),
                    gmp_init('0xd657d0229e5c2677f3c01e99fd30e97c691ce786a1ae7c750dfd2f51ab7aa3f', 16),
                    gmp_init('0xbeedb5b2a33d5a633f21de36f5e3f024a78a61c48b5a3da534ffb0857082e59b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x671a0d65458edc624936a854182d0ebb96b37829a5e89a3ae8732d15427a1b4a', 16),
                    gmp_init('0x2b0825f6895b59f54ccccfac2b0bdb95aebb2d2cbdad287622b843616b391d28', 16),
                    gmp_init('0x3a4467c81c0ecca4fb9b71665e39a4cbe1cb3c910f92f63a614c46a688c8e204', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5d13be5787d12eb8e03cd68492d6f92195b8008b092fb199d2ec3d7517f3e09', 16),
                    gmp_init('0xf3c9119fe594576e1f482069f764b72408fd3551cf6a3c491851ac37d67efa0e', 16),
                    gmp_init('0x99097c3e0899c95fc50cecd88ac9dea8c1e7a8b5262764416321a1008f4b4e15', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe67b7d8934964faa3ec40bdc303d5bc412539caaea03b4d0de9eb6ea3e0f285b', 16),
                    gmp_init('0x9b40c37e62b490b36a605467db04bec5df13d1bece25cbfece1dad3b4612b5a5', 16),
                    gmp_init('0x295f3d4bde09f9feb68448623cee7801085da59a84cd18ea7581e6883745fa7e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5c5a4d7fc5e94c090a389d1eeabfcd4248b381f139a59d3f3a1f02c80c6f48e', 16),
                    gmp_init('0x2fe8bb3242df152a89377548aa1b8f3b8793cff6c86f0c44c344e62e60a7950e', 16),
                    gmp_init('0x12b654bac6916f997cb699fa0868d774a128c621303251677bf448881e241f20', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bba3e22a47dd310d976367200977bb09f45baf0207d4402135dad65ef9d90c7', 16),
                    gmp_init('0xf41c39628b194f556ded254442e91eaa87b9f8847a1885752bd8007e9f07d090', 16),
                    gmp_init('0x81b66cd305be627b0d31ca2fd85299606f04069862866d58d85d5c587db2cd39', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ef737f80b0da80be29defb212a358e05cb0b3a1cfd9848daea79b047347bcaf', 16),
                    gmp_init('0x7b5b7ef1ebf9edeb3d83175ec74e8b37a8ecd03d1492771d6dd89e4eae606841', 16),
                    gmp_init('0xc849753d8654a1be7a21dc3c806cd05a045b8889d40b3fc010855b2be768539d', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x204840d4474202039d3056c86c05ba5d40acf346c353756a1d09a560533d5a89', 16),
                    gmp_init('0x21774599a4caafc9334ccc5656090c0e2c54fb7797d32ea8bb3f0efd8a7a99c9', 16),
                    gmp_init('0xd61e5aec9a633d46c41557f06add0ecc2e59076aa716e8844b291fbd34c40b7f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5974d2fc0b36a25c6d3c1ced19a9ff2ee3f5e431ca8d4e493140ca2dfc15e82a', 16),
                    gmp_init('0x3f77dd13a4d0be025f5542b02233b7064e8a2ed50254dd4c4c78f478f64a0a11', 16),
                    gmp_init('0x58fa88bceea7964c7a324836b9fd0e16f39495673853d60542cffd3bac63dddf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d859468a7c7ef2ba784454830b1333c9363980a459a6c80df1b71c066f38dfa', 16),
                    gmp_init('0x436f6561ecff8e64aa38e78d389612489c6f949d4321eeb9f737e74a8abd976d', 16),
                    gmp_init('0xbcc644592cbaf8363533071753a49b45938ad2d53d66311ca61f6f0f47dd4a47', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6422265f799d6c150ecfab23886754b9b5c1d15166ab9252f60f7b0896b1447', 16),
                    gmp_init('0x356e16ec12e1ffa7bf33ca2ee191c73350a5bf3c2220904b8259f99900637139', 16),
                    gmp_init('0x13e85a26e3a39330b5dfee7042fd0a483ef0d60e9effb2526f6d361c7025412d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x813ed37436c41ff1ab12ba47d49218d781c74188767ce61f6d2e3d22ae35b8f9', 16),
                    gmp_init('0xf1523047b317e27ae29efa35beb68f0608b983570162b8861742894cf7108832', 16),
                    gmp_init('0xded2291d25c373c90f51c41f67f52e4f65343415c6901c3b21ee19ae17409985', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c979b4e161f793a4f0c2177101a5ae140d30c4380304f26887ad0200ebee9c', 16),
                    gmp_init('0xa25e9b0fa110ea59e0c1f4a020b85c564e27d66c05d1b9648dfadc01417d8794', 16),
                    gmp_init('0x7dc08bd9be89d3546b0687ec140c0dc5484026f04d2f356af5af71d43092b76e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0bb37eebff8093673fd2b2a15157f2277c95fd8f4da15a3d6c6be2bab69de4f', 16),
                    gmp_init('0x8d9c6f2ec71a22869ec5eced8a8a8632b76f16c7b4adbbedb2ed6c4124122d2b', 16),
                    gmp_init('0x9006afa632876aea540ee086b1a336da89fc1e3c9aeafedb9fe3b1d006aaec1e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7dbe6c27e5aed6ed4517ee6d7bcec9f1e12adbe6a5e04bfe388b64ae61dab86', 16),
                    gmp_init('0xe284930daaa9baf37df18778132850d65cc376b336a65c23169df4c67219b695', 16),
                    gmp_init('0x39b0b6722e3590b7eac85935acfd0aaf63d08c3a8796e3214619781bc7f70498', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf52ddce30581e09fd2591a2bd1e0732f0626e383669805c5ac5d7d617370d9a4', 16),
                    gmp_init('0x19b031d453f00022044ca5b218edb2ede93db3cffe4289d148fd4f321c41c47a', 16),
                    gmp_init('0xbac5591477c5a3579eeb65854aefd37b5a1ad216c055634100556888a6227b6a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e29c4a1d63c525cd4d9dd6f2c28c34e253b18d95aa0707847c70cb75f9aa84', 16),
                    gmp_init('0x25ab8bba2f86f0d6126859cabfe5b318b800b7d8cba239dd8e8aa4f502342ae4', 16),
                    gmp_init('0x24b27edf337db2633b00cae2473a51905a89226375923deea77e87ad3689a25e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57f3dadb21cc58afc77794ef56c63f70d5cbc23c75cd34f24a2332578d7a1e87', 16),
                    gmp_init('0x658ea624f6330e08b0984e3cc855a945d4d3965348dce9e7091e0c0b4a84dc9a', 16),
                    gmp_init('0x19b9217720ace31ff178c92911d29fe2c5803c6e97dd2cc6f756134cf0e7daf8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2db3b3d51129ba19d59a87d38da9bfc3e188599a666de243da6bfdd4ede5d5d', 16),
                    gmp_init('0x1883e3e1ac365ca3e3d1a4975250f0fac1d943e67748abdca869a00cceda96ac', 16),
                    gmp_init('0xe5aa117c8ff58774edaa568bf8f44fc9baf49342d4761ccbafa1a6ceb12b6fdd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x207df6dfc421fde0d01f9ad232d710bbe94a07faf81eeb02be49ee8e0444447a', 16),
                    gmp_init('0xdf9992ed9c64eb46ef0557d21ad55d3b4cdbcdae25dc31a16fa69e49377ac511', 16),
                    gmp_init('0x2bef5c20c2714f0d65304eab3811c705443b6c8c4c39f34836dbaa69580734d3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcae62c9d6d136e6e10d152299fb9036220e35fd87b13dc235e435006e24a8106', 16),
                    gmp_init('0xb4dac4b9b2870f622e1ecf3e4deff08b86bb275d30e967257151f1b8801dff89', 16),
                    gmp_init('0xe9ac91418bfd9bf385ed65b03c60d7cde28564e2825cd0ad5236ba200dc26dd0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe87b2df5ad78e41ee32fef326648c8c4f68c8a5f234ec40acd8bf5b3b6e2317d', 16),
                    gmp_init('0xd6138664aae370e8d275c1d265da526657bf4a7004f6d04e58edce50674ccfc5', 16),
                    gmp_init('0xc0d3de963ce7f48ce9a8077ec680cce13f31a9e9ef52bc7c2df1ce9bb1522d44', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5dfaadd753136d6f5cb99e683b5abff1953160f2ffccb81d32d0a41c24cb975f', 16),
                    gmp_init('0xef0b2a69b5eb161d0285c131619276ea7096c99cfa8f0c680562f8776bf7a835', 16),
                    gmp_init('0xb1ff6fbd0526afd648e4af80ff5096fb0cfdd1f34843bbc81abdfb55692ad6ee', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5af872c19f6802ddc2e4b4b632bbb84e8ce7c8ba82ac9e0edccf9fff229bc1b2', 16),
                    gmp_init('0x686aee9145e07fc5f158732d08316732ee09ff5a8fd500d754df3d8ec7ada8', 16),
                    gmp_init('0x3fb57ad58d5e17c0b597e42ad3cba1d4b668df415ae1b6c0c62328080376a54b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7f527f633ef4a74ae1eac8c901cc1c62665c939066b3ffd845f495788fced50', 16),
                    gmp_init('0x96d7a1667dd9dbc3c548e1bb70a46157545ba2cf6fa0eade4f55389d19ca7317', 16),
                    gmp_init('0x55a193b57cdf80fa33c190ae1a4856dcc0acb90906b7a44b9f95ce0c1eeb934d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90c1fd96b7583b830354917659fb929112a14f89665742016b35da9e8014ecce', 16),
                    gmp_init('0x6be0a228a8b87ab8d4997395fbc91a78c1748d0c5600a786e08f58a708805941', 16),
                    gmp_init('0x2c3f27155bfb141e3c73ae6cf1fe1c2a15c3ca340d37852e57134b6101047a0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb7b49ec9aefaceb92831df0b7112fd3a5619081f0599ddbbcf6f42a99bb8db3', 16),
                    gmp_init('0x7463b2c497cae6f7384f2b8b7ff8b6fa4f1e878eaa00c24f509c5ede4c7ece61', 16),
                    gmp_init('0x7e4a5f6e3d4808026d89bcb6fc41b7c5229fd3487439c8bb7bec2eadfda02cc6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89bfa1d5a33130aefcf9332aaf4591ce57eac67da2217afa4c3530ff98c6015a', 16),
                    gmp_init('0x82d574f606bf38595ef805d289ca2ae9b184dcc305e175d32f3c11c3d364a91f', 16),
                    gmp_init('0x466e992c068cb66e24be5f40443f4483b3e3aad24cb89e50e89d1d4159849c68', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf8adf1870ffef616523764effef26f3d44047f9b393f5ed61a5147937373fd5', 16),
                    gmp_init('0x34b18763ed29e8b76f095f896bf81b23aeb2f4c720b4da5099edbabd3983bd54', 16),
                    gmp_init('0x51ccf58fcced66204501a5f218bca9a38f57d77b5bf5c94edff321c28450f06', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72b7dbca4e242b083b73143c3b007b5da110ad398537baf356ba7ff52695abe5', 16),
                    gmp_init('0x4a2628a144f1365444bd2b16edd6da96a0bfa35fbbfab75cca6bfba7d95a4ea2', 16),
                    gmp_init('0x8b9a8dac9d52c575d7ae0342009a6dbd183bc08a268e3fae2aad227fb03be8e8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5d359bc9680bc75dd6e238873bf17737060dce2c5d0c4774f87b9ff828ee5aa', 16),
                    gmp_init('0x1efa72064b5f11d627addec84d5cd47264b4d00a94ec953a11c2aa40c47b0139', 16),
                    gmp_init('0x46588ca805eb31e28c235b55e3c99eb907dfa684de8a8a421e009ee49cd28078', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3198eb5c44fe55aa09819958e889d3e4bd75d68e72c73863d90fc321dab3619', 16),
                    gmp_init('0xdfa0ac5339bb2fc24cdf7900ef4d3ac4bf2e74ba9c75bf9cefd29ff595cebfa', 16),
                    gmp_init('0x7e0776b0f784bb077fa2fa15ea99f0d6627cd327795c4173478bddb9bfb56c62', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2016a3187ef58957da3d22ecef466c4c9fa3c7bd2a393014dcc44c68ea4ca9e', 16),
                    gmp_init('0x5655d785017f048d16393b515e426f3ba74dee75e75c3580d64c2418010f099', 16),
                    gmp_init('0xcde279cfea2ca9ac858487d5732314ba310c3c6e11f84a0b12182202f93e9136', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde8116ce8d82cec64d79d181dba456b5471e8979327f6bec8ab05e262b8759da', 16),
                    gmp_init('0x7b9d9ca67e574f570de5705e6aaf255ac88063167bab0f9d0698a21b4d2f2143', 16),
                    gmp_init('0x8903b90942308a6b95485f9949e5d1476e3f7ff41c12b13c7a9fdc1de3ff8b9f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e52440e054e0c30975622d0588b54bb1cf6601fe4b64d9032f05e83a008d068', 16),
                    gmp_init('0x8b8ca3b31e9f22f783e07d421eebdb0cdf79eb941aaeb212bbfad1e46ee268fa', 16),
                    gmp_init('0x655d6122f64d36603644836d7877714c3da9348328b850ecfbcc268083be409e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf29e2ef46371f9fc8a9ea162b3cfa3ab0c24579cdaf5f48e0fcb78ba035ac59', 16),
                    gmp_init('0x83fb187b9dc9ce3a6f0d92ab2d4a87702ae3fbda85b75ca353a17e335daefeb1', 16),
                    gmp_init('0x3e4b29ec9477fc38f1b10bc0e768ce523ea94732f64f18da4186f441eb9c393d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19f62465fdf452adbc8290af0291ab84d3425107d41a31d5478af4d7715827b1', 16),
                    gmp_init('0x58927c3e41d0d0eb91854cba0275ce9f897ddb70dd4e7a77e63bfc4a58063022', 16),
                    gmp_init('0x66a0fdcaddc81972c6a2f4d1d298cb8a124eea934dc40e0b65cc3a79fa6af119', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xee6bb2b7f313144c2f8d8ef60e021a6ebeb4890eb1c0eb81b4868cd56dcdd2d7', 16),
                    gmp_init('0x7e48b004604e7f99de8af7b0403b6a3ca0b0687a1fcff66d46a14102f69cd0f4', 16),
                    gmp_init('0xb3cadb5280dbc0bcdc87311a0ea9c14bba2fbd2434e7229a87315d4736237b28', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cf595d795e451844673d88219f4b1c4cd01b978d63bf00b1ac3c2c102b00248', 16),
                    gmp_init('0x87166114ddc9df74805bd95815ab6028d26c4136667d370d6927b63fafd4e0d4', 16),
                    gmp_init('0x330aa964495e42ae52f155929b36d0e1c06cf087c250c18220d1bd021390a508', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x908c668a79f9362d3dca2ba65b7252bf7ce0db435c800a8fab87a169084571da', 16),
                    gmp_init('0x1cdae54b86bf6b64b7eda30f5bb55dd546857145949c60928c7f128c27f69d16', 16),
                    gmp_init('0x74e781e292cc0eba750775b62640a3a3daa24a492e1ebf5db07e357d230709ee', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc1f62343b3931f37157625c56a1cb99a322d8f7a8ba8a432ef39294d2f7c894', 16),
                    gmp_init('0x48da5cd9849d4ca1d013ac76c443d5f3dd6d8ac4b0a92903a3a237079f5cc44f', 16),
                    gmp_init('0xe16a3e8a371c94710866a0839e4bc48eebedee2d781b2a7ef39217fd15b37261', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95ff0dee20f3a637a7648755fbccd5e9e9b35f89f3422a7482bbe677d0c2f7f1', 16),
                    gmp_init('0xb7b1d2de5e174e29cb76a86511fd1f788bfd05575ca9b9f0986f82b727c2ff73', 16),
                    gmp_init('0xfa60bcecc4236b043c57095b62cde032f006c9d3dd34a5b7f17243707f4e4ede', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x526cacbec41326f0db1b6f0dfde6eab99c4d0923b1e9fde0e2e82a1ad15abdf8', 16),
                    gmp_init('0x56c0c9f366acd54f1aa2a21a1b01441bc843b823937955d4e6ae6721cf8a54c8', 16),
                    gmp_init('0x3c40f9d18aa523c1c66fe8988adf514cb06df2f7fdc23071732bbd8ac13582e4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc19b3d80110b23b980419af3aa61f414b16c542288db1003f5453149c9db96', 16),
                    gmp_init('0x455b91b469757acd49dd372733579a3d6ffef3de49b01cb79ded2ca70cc83fe9', 16),
                    gmp_init('0x9352d662a3c09adf1941bbc7c106c01e4b7b1a5598bf2f0882abf85977e370ce', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf6804c8d90091ec1f3b1c56afa7466605bfeb6a42b5939851b3c0353ec7b7ba', 16),
                    gmp_init('0x2a8691c52b0a03be1a092211366a92d095081a74e19e1cb84eeabeb05aa17a96', 16),
                    gmp_init('0xf85a74b9d9ebfe825c0a8acf934019786e675e0faf35b36f2c5e6cc234d1c1e7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d6759d50777c7eac141504e3a5bb8ad544b48d9434f72fe98c1a357ed7ba974', 16),
                    gmp_init('0xa89fe7c777ccd331fca30718aa070ce2505eeaec2d76c90b3b09390295a03739', 16),
                    gmp_init('0x2399b84ec560da5169dcc6fd2174bf89542c2b4ccc9860d08f4d8b9fc364410f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9cbea18f1669779c1e2d2fd1c1d714a2a367e3d392e83627c6b5b54c3b16f1', 16),
                    gmp_init('0x46630419ec73b88b80c15ee1795851109c2140d14add12a78851e8bb07c6f0a', 16),
                    gmp_init('0x14ebe9d252ad99852a4d7347348c3275f4a6d5eadbb2e5c6bf47303e4cf81462', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24d9e9408026a104d54ddc043410405f26acdaf221b163cf47a137c9c0fb1a24', 16),
                    gmp_init('0x8c472eeed93a07cb8ca1186d1f921cd340af833d9679787a86e74ca93e804dad', 16),
                    gmp_init('0xb9253b943c1095599f2b55edbb3ce79113d2a10f51e8bb5256546943c84e167b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbc5c23f7d253ac465ba0da12920b352340fd4259f112bd45d9f2d204624572a', 16),
                    gmp_init('0x567bc370c2439d7038ae307fbf938ce05d91ced32a27f6cfde27708de0d46766', 16),
                    gmp_init('0x711200d3aa8a82a48d0cef2c3318bb549b74c18e8f015421bb898b3ed96ca217', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70c83fd36d62b2b18d26e6071b767da1a702fcdbbf564f99921a1c0dced829e', 16),
                    gmp_init('0xb52bc7a536cf2077b1cc34f0b5ba3080f2ea113001014208950ee9fdb6d50649', 16),
                    gmp_init('0xa3c97ea89a1fa3bcd1f01acc84cfa095a7ed7fd311a18184198d253901dc54fe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3640d59d9819bff787836d45b7e297c4da4116c862ec8a54b901771be4f7adde', 16),
                    gmp_init('0x5d639cca79add92409660715528520771687f68a07c314e5519ce9505abfaa50', 16),
                    gmp_init('0x31a043b516b7b7b3ef4984c72c932ae7bf7c428dc6ac7c2f1e1daa5c513ae97e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdc68cedf62322ad911991904c943f062714feca35a057f8ac33d243ebcb598a', 16),
                    gmp_init('0x84f8feba2ad3c741456406a47c9f9172329ea47f8607c4d9d14755adc1aec72b', 16),
                    gmp_init('0x82b5db0ca2c43ba9a68543764285c0fddef9863a7f98b2b7a2222bad13be5aa1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x65d5ebe60a13db55a86f355ffbca86aa4c3184a9ae0d1d5c47032f27de17c5c2', 16),
                    gmp_init('0x76fc2f4c75878289b209624f61fc7ce6c95340323de675f768364cf46fe27782', 16),
                    gmp_init('0xec0841cf16aa1480a113461fb910d92e7f9364a1ce09ba96bd176f729bd2f711', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1d7b80c07ff75de691551858e43336b15bedf88d57b2575991664d178201f43', 16),
                    gmp_init('0x355b985b84e889f8c0a9d713353395fd35a2f2ea19bdcc02bf22d5178bfbf5b3', 16),
                    gmp_init('0xf6470554e170adcd74493c5b19142e53c7ed36d91e1bcc57cf4521b4b15dd3c5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x158db1e162a904d00886edc84bcc253e58b491fa759497c2c49fa250a869d43c', 16),
                    gmp_init('0x46d7f727058e57bc4f2e209f4489c37ff850948f1a46f5b4a6c36c7a5d2d6ef', 16),
                    gmp_init('0xb02b18ead6318afa14cca0b3dad0c4594c779492c09f3df627cbdd62c01a67f3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dabb895dc5e6dc07b4aab64976f42c4b1ec70122625211e74e9178b21a354bd', 16),
                    gmp_init('0xf2d22991552676035697c4359f95403508cc999d1d640a00fc9c071d5aea2f37', 16),
                    gmp_init('0x53d9a7492d24f9caad65216bd0b88379557b037d73b9e0032ff5d38af7b3bc2a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf661a83cff7fc465e050e1d8d079e085af3d5929401c38d087472c3a92e2972', 16),
                    gmp_init('0xb6ca3fad8b8efccbca67f55af7016f0f072334037dff3a1da23c0c962d55454f', 16),
                    gmp_init('0xafcd60ca7430111e5ae5e2d0d5a29e3e18ea08e436009f15a0d928d01630c2b0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2de7d62dcf9a4ef5cc782b2230ffe2c5cfbf969c6ca6bbde85738aade553c26c', 16),
                    gmp_init('0x73335372a37eb56fe905644484b6d25b80b0ce0a265b0cf73566c4a164a114a1', 16),
                    gmp_init('0xc63078a8780e268d96d5ef2531c2532ed894c592c6b60689179b56faf4bbc73', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5041e4c3da85d3c7688b3ea326db8fae1bf2249c5b2952704efea2eedfd86976', 16),
                    gmp_init('0xa0a71f6fc887b15128555d40bedb228ece364c960aa0da9014d80d7f2d62e9f7', 16),
                    gmp_init('0x5b909b636c5ab47505cd2baf0b578001f6d7cb9fe9e221a05b045aa479faa31c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46d1ed3d68589861e3d0e45cf6f8e194f2428f16cd61bc5380e41fa9f7503672', 16),
                    gmp_init('0xb2e68d0d0fc1e6c7dbd68d29bb156a3d972866f9aca69ae8c6b44a19860be856', 16),
                    gmp_init('0x3bc20e5ef77c470a27a283d9dc94776b7b3a1c858d5c8eed15bd095f21b83887', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2c5bf1f0b4e9c031a9f275406449398a1bbec27a449d64a06eb5e45b1d6733c', 16),
                    gmp_init('0xbd8ecb3bdb99ff2bc92683d5506e4e0ad562c6f0355bd55558fb121fe5fbd507', 16),
                    gmp_init('0x69b9ddbb594deb59b90a26980bc5431792c798ba127a51d1e5e358f2c83b2644', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a3c312f919fc404a81b92248f144c7fde4d34654f217b331249a8d7cd5b34f2', 16),
                    gmp_init('0xde106e5a968bd9517b88ce5853eb16ba9ac03297801ac1fd9b167b1d0a3e34eb', 16),
                    gmp_init('0x8dab3d7cd305f46dfc2fa841292d5a3572cd963fe974e2e390ebd96b25f2f412', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed69c19861d4b19ffeabfeaf6853802165f2b52b9f89f2995bb90c5cfa700662', 16),
                    gmp_init('0x31a4977183c3507865ffaf1dd191d741f5db273990b9fde3635a9b8d84ff5524', 16),
                    gmp_init('0x3d4c4ba737c1e623e752443e858290588067a244cebb0f8a4f38d6fbad32cec3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x545e57b98db114dd8e2a3050669dd4820c445678f361fdb8dbc7851760a607f3', 16),
                    gmp_init('0x4d9234aa29ad2b8b38406b25465aea80f71b3872a9cd4370fcb2ac97ebdcb50c', 16),
                    gmp_init('0x4a335ddcf008686e6129bed942afbe00de29c31c2e7cda490162c2a85ee1ad9f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82367b3f175b13d0d2a2e9a958171e44c270b2fc95042149e72a7394cb3a6ac5', 16),
                    gmp_init('0x253ec54a3d182955b18d9a0de294191c080f04cdb8faff2ef18ee0a17ce5f92f', 16),
                    gmp_init('0xcaa272ce2dc667bad54043c8c9d2784fb63099fe4d9dfe399f58a75688d5663c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a8ad7ee1f9301e7145b3e718ea970feab730d3f8b95790da7c48c02e7646afb', 16),
                    gmp_init('0x99276cf113d9688e6fe84a4bc2f09db5512e18de2fdea4ae2e3d0f382abe6ca8', 16),
                    gmp_init('0x6fcd30a5fc9a2c856d698d968bdb817a375e90ee351a0f3c39a158a4530e6818', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x248196c472688b125599673c8156bb257ee83260c4f19e1788bf22ddcbf10d3', 16),
                    gmp_init('0x20b437dd5b7336df0e3b27255228e77f1194afd945968f85aecb3f24823f7e92', 16),
                    gmp_init('0x1708ebd6f5977695bcc14378f90e52b16a7367e6c14b67f1aac771cbf45e27a9', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x171672a5f204999a2fc92bccf878b2a5cc7727a4083407d152a2ec5c1cab8606', 16),
                    gmp_init('0x7270bc833fe973e593c830052c87e05afa8975d9a13ef1c7d79bdc1dfc060ce3', 16),
                    gmp_init('0xa819d14b4a22b04855270f2558404940d5575bbf44c532a25efeeca9eef45be', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbe532ab163bea6a838e239029c3ad86e4e3397e13dcd73624d123af25d4f085', 16),
                    gmp_init('0xc9192f1faf8c634066d6f8476048e5ea775654643301983f33daa42632331423', 16),
                    gmp_init('0x88baba05691a99149b71f98d9ca69b5c0cd72fe8535bb37e1fcba0e8d725697a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97a3a7f043248a9747bfc2d87000c0de14069371f940ddf058afa0335de27b62', 16),
                    gmp_init('0x1ef3f303a5d3f7a114fada477c1feccf6963957dab2fc0c64203c88045e10746', 16),
                    gmp_init('0x105dc5a8c56117fd47be37ae51d2123cebe60e3dc68a61808d71d01de0263a9c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x773e8b4fe99691e816ce0d74879aee141925abda4de8d4ef9669a7875af79afc', 16),
                    gmp_init('0xe89537a01f07429c8c717fa4c1bc6bb8ac55a987d1150a0258fd57efd24dc00', 16),
                    gmp_init('0xe2ec6fa8c88e16e634fc2f8e21ff7ecb6c79a779dec9751df1cb2af28c759c84', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73b2393b02772af380214227fa25cef86191896dbaf7e825c9e8c4761dc34fa5', 16),
                    gmp_init('0x679ac9bd5ef1b8c99a3fc672cceebf1d1227c3b21dc9586e2e12c308851f08da', 16),
                    gmp_init('0xab44092c08ad89f990d46fbfcf50fb23c6120423660b94b857b9d061527257e3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc84fe39bf60d0ec3e89d0e176f84309d22d340716bfb3d56772008238ffe9ce9', 16),
                    gmp_init('0x10f1d51208cb20302f881f4a904d59c87cc2aaef0126280e5ec03a72627da681', 16),
                    gmp_init('0xada197b553d56027ec18374d9fbd6f4da62da8b96b409972b16c35df001cd0cb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9fbfe75dfcd0ae4d9232bd443b064417ac52d0972f658ffacc329e45f985e91', 16),
                    gmp_init('0xe5d8dfed050ebaaedfe2152f3f26adb895f913ad75dc3b8b93530dde9b454da8', 16),
                    gmp_init('0xeb64ad6d668e06f37b26b299bd8c7443cfe10163e1039c541e5e5d41b2e56b1b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1cb688c6753480f4a1197a7fbb185ec565d8129fc210e652e2a65e87feae9e', 16),
                    gmp_init('0xb496b69317e55b1b4e0a87e7decf15f13ca0301696761e2830af0c1a9e9b0ca', 16),
                    gmp_init('0x4f0040b79707e83d64d23bec6163d4fb81cdabf56f791944cd66f4d026f090cb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddf6631b7d33ee15e97109ae289d664d3a5d4207776da74f6c2c7b8dcfb23402', 16),
                    gmp_init('0x99eaba2b08f33fbcb9f87eaf828ccb2226d77b84d0455f443c87c673dbd59c81', 16),
                    gmp_init('0xef599d8b67c3a4a76b01b00bf2953df1578ea7257a50fea2521c2b270423f3fd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa4cfe847c28387cdf58eff93e75b11e0092a0acb90cf04ea23c2f8df8bc6a60', 16),
                    gmp_init('0xe3a50aac9710dc1dc10967ae374f28a2472ee9347fdbea0ee346b9a2b827d0c2', 16),
                    gmp_init('0xe33f64411aa035510c82b13df85d2d7a79eb134f085061643b461038d8a16060', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce0d4752b4db7d3db76ca1e16bb7e6dd80402345d6beb2461095958f65df5ee4', 16),
                    gmp_init('0x25faa5047d5b5cb0318594bc7d3606a93b357ce299a113cb05f053d588708e92', 16),
                    gmp_init('0x66f5002899c76ef64df18e96016fb21ab6257034790a079b3bb536745a6e5f89', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec784ec5ce025658b27487d48decb68a0786571df2094a94c23ae3d7282f6c8', 16),
                    gmp_init('0x9062d27c5d8a7fa0664aa89a38883160c244005d14f4e033341719fb88e209de', 16),
                    gmp_init('0xb27d995f2ebd38b7c27e66546ef3118b8a73cac62daf40b31ee8d27f498c6f5f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e918d104c4e2d027fdca559c52397784ffcce1ab9bb9ca9ba803e8ff912e008', 16),
                    gmp_init('0x56354c5e6390c75166eb4ee3e48240c496629569753b862337295103d5c0c1ca', 16),
                    gmp_init('0xd3569b678cc056d06eda78efd584bba6fa2a98d4807ac56aaf76660e8c7a93bc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80f2187a837d0c252bc910a74aa0d213c360d9b3137bccb47c3d294100a5d44c', 16),
                    gmp_init('0xa4a9eb23edcce45b9df7604b710b7da6e251a1726b4e615f69976585035e58fe', 16),
                    gmp_init('0x197f6f8c7a15ceb279d5165ffa277732e8567ae55647408e7b1d1f9622cbb376', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb84137b7faa6c92595d3966765f0f2dfa37f3774e31a1e1462044d480adedb6', 16),
                    gmp_init('0x91c02a3e1339d4473cf5ba57807e836b54acc2c9246e926bd51f592bdad6a9fb', 16),
                    gmp_init('0x887901120b460e87aadf586e1a861dd823054a89dd602d7106754057394183a2', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc6db957126dd60faeb1dcb7024df99215eaf16fd505018c3f5fc2f5889040ac5', 16),
                    gmp_init('0x334852d72b598b709cb964f77e844217568df1f8835b2cf475920a2ee2e6cb6b', 16),
                    gmp_init('0x6560bdc98f49e5e6f364b5d04157caaece8620891217203150aca608b1dbd14a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x291a57c26b412f32aa340f73d8a3549be3888ae6400dd9ea04a2f71c442336e1', 16),
                    gmp_init('0x1f0237ee723d32796f0b061f66e4e61ebcef43b1e34ecd7e5e85ccaffc1c4e4d', 16),
                    gmp_init('0xc33fe6a3a09b984ff3554ce75e4bdbb553527e70551b20973f961b8b280e68c3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ab833119f6a9e5d5eeefe90e165a9a0cf8681cad1d4835ca52f1989dfeabb86', 16),
                    gmp_init('0xc32f50702e31aac26c23f6994c87ae3ae8d0aa063e531c150f22e6fd8ec58907', 16),
                    gmp_init('0x514b65abb34af1f614ab0a91117413e9f7dbd69267b3eea5c4f7b3307f6bc4a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x702f182b35590e666e707127e56fe1835f027535fcf0dc83965194413fdefa0c', 16),
                    gmp_init('0xe6318cf6725ccc9b86a54b0bc1dcee6c4e75d26cc4a839b384d21606d1630404', 16),
                    gmp_init('0x33fc0c02bea265a4640c3fce04b3d3277e24d28fe6a6d99f81208d715ac3aac5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8585bdeacb5454849160e6c1a2675927253be082cf066148902bd38f1eb1c118', 16),
                    gmp_init('0xc27ac740f9bb77dfa163d45837b127ed3f614d471d47a7debedc730536fd6548', 16),
                    gmp_init('0x5e209bc4e6e339f4aa5bff11634da506303c6932dda2fe382d3c3a16662b4ea6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79778ccccd47eb6fdbdf07cfebe17f1de6148ca1aec74b41c9da124dd7edde7', 16),
                    gmp_init('0x9aafdf7658ce7af22a2c0cb2249ea3af4831d88005e5cc1362d3a72a19bfabb', 16),
                    gmp_init('0xc39452e5d161f083fb63240741d6cc0b2465e87f541ae18bf1fbbabbc1b27803', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18a783d30feb5b33a42647c6e4b935a43e8dcf956c97c3f9b193a0cea3890bb1', 16),
                    gmp_init('0xe1ae6dc7ef5a62519ace5a2c0c38da219a74da3742fa045c94d858687b953b10', 16),
                    gmp_init('0x7f5ae94ede9bad3a91f8934b67b5506244ceeef4599e12d7af201258d0702f96', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x473f11db7da8006b69f8ef278b92d9dd87a48b6d9511b90bf7a9a38c045283a4', 16),
                    gmp_init('0xc2e270bc67d5379d0b10c570c6053e949744a6fd50134bd933cbe5fc7e0afe01', 16),
                    gmp_init('0xa9802915e85019cb1b1439169a339b00edeeae673f81eca4b5d74588c2e9bb23', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf64c21bfdd1ef118770db7e82a058629c461560fe3368f778615097212d2bb5a', 16),
                    gmp_init('0x4a6c2b3f63f3190f78038eb475f6b271efb35d45f50d7261977f86f28fdebb18', 16),
                    gmp_init('0x6aab855f48192404820e5beccb83b7d8785c5f4176bc8840fd84ffdbf73286fb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3ab937237bcdd77ffa21a227370dce9fa37e06a50121a4e5b28e372b90cd776', 16),
                    gmp_init('0x7d07555d466046defae7c9f6a02e8e16834fe9f74dd55c2c0a62ee88dc0d3697', 16),
                    gmp_init('0x7018ed7df7b0cc97cc2c1b3816accdafe629aa0c4c38a6d9ba2fd35a9e0ff31d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bc6af7d5ff05e978f272ee67c4b0a6c2d23318de4a9f51675aad8590b22add8', 16),
                    gmp_init('0xefbafb7ad9ad58202a7816d789b0f1ab6958d3eadec8b3e270588974aef946fe', 16),
                    gmp_init('0x570554d1d9c1e29cee7eb54cd78352fa17447714daa5acc4fc7ce318a47efae0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xacf585c46474f24f131a227339633bbb06f9c334e6cc7b5b460d788c53305490', 16),
                    gmp_init('0xe271ceba867521b0ad7e180c0c6d780f0883c40c915279720f15bc836caad9e0', 16),
                    gmp_init('0xb63f931bfec8f13b11edba23e480f8eae280e4a9bbb5894a941086e034764424', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x767d15872d0b1d37e717e1a85c0119da81f9d539d6bbdde5c39f8a8d50005ca8', 16),
                    gmp_init('0x586f44db295a0b3e2c77570776a5529a568de18812826559cc23d8297824ac48', 16),
                    gmp_init('0x47df24b68aed6549adf1a40604bc40b425592754ed5dd1cdf4e6e34bc6c4026f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bb0fd35d205780e32b4d2b7b8cd45f9f65b7ca4ae3af34b650227d46de7aec7', 16),
                    gmp_init('0xa00302b49887fa07fb0bf950295654c48ae91cd32e930d628eb8dd6d6836e63b', 16),
                    gmp_init('0x4b8e056c4587fe6f82aae96d26dcebbf71acf639adc9ab3c99c200450271ad21', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57ff206d37ad5624d3b72216b66ac0237e0c2be5ffd92618213b088669f0eb5c', 16),
                    gmp_init('0xd871cc7bb5033d6cbc4224cf544d586e2d8fe29267ec165fd866fa441b9da78e', 16),
                    gmp_init('0x9c3154244697975bb98b8398fda064a3e5dc9a0ea9e5c346fb9945d5e6591de1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa51710b8f51202bc984a85cc799c4512566b4ce478e8e1295c783cef329c875e', 16),
                    gmp_init('0xbf75103fa60162f5b89733a25d2cceacb1ad2c44fcf7ceab5419eaf46ce5235d', 16),
                    gmp_init('0xe695ea8c4f0ca34b96aba34907c9af720df205391a177cfc8d0000106841467b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37d55aee69e8d9810273ed1d9b2d9a892ce9f549aaf52987b33c962a6cc07de3', 16),
                    gmp_init('0xb91c307af10821bc8abbe8080bbea6128d33fe4dec2dfe20a286d166dbdf3815', 16),
                    gmp_init('0x66d8149adffd7f1de339b6c4e938e4ff0f7acfc75451e31471ece60eaa37530a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x573b165c1a29a0d24ec8bb0ff2ccef6db311a93a309defbd4ba1aa7165a4ac13', 16),
                    gmp_init('0x2b23b6f7fc2605d3bc106666b7c14e656bfe544de11d7b4e34b24e12dd0e1524', 16),
                    gmp_init('0xdd387030132f192fe3eb6ac0b8fff5efe9466637955cbf483c4abef5c0df59c1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c0be487f0c3fa5016525d377c7c7e007f18812fe69b5cb2b10d8c87bac3e6a5', 16),
                    gmp_init('0x97de0944d6d417dbdf12389d6b6e86438cd80684795ba9d8c1eaf384b8eb0280', 16),
                    gmp_init('0x97d25e631934997b93dbc87d208aaa54f65379e14ea7acdb6f05baf90e98da29', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6e923e7aef22a1a99fddb9fb34cb0345b815fd437bf85522defd080fe88b2d6', 16),
                    gmp_init('0xc65dd6be90bde195dff6adf074eddc02eda2543a4c673b2aef53fc01781434b1', 16),
                    gmp_init('0x74f46cb60b671cd059a4e7dda05051834bfb06c2166c0d2ffeba97dee759fcde', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2ff475dc31fcb5a9a70b263c7af1bd46ff093c210626b6351b50a1a58369bbf', 16),
                    gmp_init('0x7859958ac90d1a2d7b248f105fdfbf17ef6eb7ed261388e172eb2a672c1de606', 16),
                    gmp_init('0x531497e5c1eafd301d8ab9b6864037a43eb5214b114ca1bfa7fcd1d43613c7e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f9cfaa90a0a3b2ef43b5e2a33006f4d689b3dbd32637a001476158895d6e605', 16),
                    gmp_init('0x9a5987b2ed6869fb9d8662a4c68d939d1890c7cc83c39e8e493e6a91ef81370c', 16),
                    gmp_init('0xa78885c269086ab8bd5465d4ecdcde61e5aba677d48b3b49670198f08d6c740a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdcecc2eb3b9628ac71eed307127687b97dfb934933f2f06c47377052ac4fd58e', 16),
                    gmp_init('0x58484f09141455d074d0d31fd642cba808532440f7b89c42c916c96c2baab1e3', 16),
                    gmp_init('0xa55015eaee6480bbde992e2f0d2f77e4159a5f0237ca72bf4d4d3bc35e5b8587', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c25400cce9816914daede50baf04945515a07c04ada1d49b9ae64032fd2d86f', 16),
                    gmp_init('0x7e5d6b2a49274579acd20759be3522ec82970cff9654a9d1749f44d53f835135', 16),
                    gmp_init('0xdd93337bc5085ca5f6957686a44df5e45862bdc0fbe70120ed3db0ccf70a1851', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c8afa6e2e2502b40c80685774cf6913c1130699191bdfa0e3b8a760605b619b', 16),
                    gmp_init('0xa663fa2be326a23ac8be84341184d758350a78dcaee02b14e442b4addfab962b', 16),
                    gmp_init('0x1dd4cfd11dcbd2998756d5b17c0394aaa20f36e41f765cb33f052738c3dbc3e1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac1002b5c292f212e2ca0de3a9308ed045d8c3ea0f1b9935c2cc7bbae0c13b4c', 16),
                    gmp_init('0xdcd37878ed273648ab10e134c81a3e2ec3e9cbd25c6af28ef65b096af0c0d2aa', 16),
                    gmp_init('0x10ff2d88de5e6110996415b6dfb0d0aaa5e50390e617b410ac5a33db284a529a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdeb9c866f2f51bd0283ba5ae04e6d0bc1f0c6698099a62ac90ddd22346ec6a25', 16),
                    gmp_init('0x84df836b52007080ae78fd9028701e2f49b3c79de87c38a575809344496c2f8a', 16),
                    gmp_init('0xb3e15af5741867bb297c63ee1d027624032a217944f4e4231c232123573b00f9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4fcd3e19ad0d214f9d282c94a5939ac30e3641870fabbd90e2634af4bd7442c', 16),
                    gmp_init('0x49f03625913cd0878cc129cfff0e470d9fe6123b47fe6dafa98d70c753ee6ab9', 16),
                    gmp_init('0x8c04c4c0acb412c4f5f325d4e35709d7a114c0900e9aa6aa12949cd066c0fc5e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x440f9ec3f26cc7ac0d119eaff66ace816519ca2370b4bb4b6b0f65a973af1549', 16),
                    gmp_init('0xe9b750d16afc88c0f12ad63b1a3fc698d2694d0d96038f5198734e9a56039a55', 16),
                    gmp_init('0x9167937d5aee9a3d1be1889ed070e98cc1b4e3702f60b43b20fd2b432afc28ba', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8b9c56dcf0fb7ff3e598e9647e1edc04f1e525d0185574f9198ed3193a6140f', 16),
                    gmp_init('0xf00a771b339fbae5ded8b5e8cf861460d569bd4bfd6492e4a492bf4a538b7234', 16),
                    gmp_init('0x73625e8f5d64704152503a9062f83f752058f4c464d25920f8d0d4e936663351', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4704048397e00352e0bd33c52dc02e1721f59ebb39a84a8cadf5e3a2c7be5819', 16),
                    gmp_init('0x8296041a1f45a48ddae9546982966e77cdd47db060858aa6bb0601873635e3c6', 16),
                    gmp_init('0x36be1702c59c1d539537d83db87b03594e9c152d18fef74a5f6752c12168b483', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeba243bc48b53bd416a46ca2d7174ae1e25fa5f14da89211777c92adc9aecb60', 16),
                    gmp_init('0xbd1152c0e2f0682e7ba60eee43c76e6de35e6222f1c79e5204aa43069d3efb19', 16),
                    gmp_init('0x6ff5e41daeb372d70faa787aa52bdac935b7fd9f6029faff172735392bf289c8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafde84342bcfb16bcd87dcfa99b6806e97c1ba5db775d17a16352e47a3d8a069', 16),
                    gmp_init('0xf2e1fc06496f5be4e83298c213365bf7e199c4597bbf9d6d678f85b64d2389f9', 16),
                    gmp_init('0x937c98773d1de61f6ceb1c3e09068b0a43ee0bdcb6b770197cf01ffd583d8786', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0cb7c0e66ae8801ae9ca8a21c87e4be553128a77687284e8e12d9db7c75029a', 16),
                    gmp_init('0x1c4a98046c33edde53cd36c8befd31b7035ce23a18b6c774060dd1f326c332c9', 16),
                    gmp_init('0xe50a3981b8ac1353f417fe6f89ef30862ef4748ab5ceb73b623c9c93855fb0f5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c7e641138adaabe3125f2f43f4eb0d43f50d2798059f428a2e76338bf8fd609', 16),
                    gmp_init('0xd53ae33adad58f8ff7a300284f3b6087c3ca8b783a8ad749eef3e8d4707c2b4f', 16),
                    gmp_init('0xdeaa2df0c5f41cb231c9a0237d7abd635b96f56fcf68e6fef81f45c1f32011c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6397df4318ab8d87fdd3a7f78c9aab2b2480f55d09c2d16f29bc13b80483ba', 16),
                    gmp_init('0xe529c60a4faa5eb263fba4c6a71512b000ec6dcf123a14c1aed62b9584db7501', 16),
                    gmp_init('0x57bc0ce881d50db428e635e118ca470ec54ee1b1b4f4e922d9391efe1c00e287', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x774ba201f6976189b1a557b115b04075e78a41aa18b24b282aab407b472e450a', 16),
                    gmp_init('0x9318285ad2ac918d75d5202c60e7da8450a39d0be7c26bd58ac6cf7c9cc189ab', 16),
                    gmp_init('0xda480529dfe3e6275f11562923edf8a9ae2f2b29772353a73a0f2c7afc051eaa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf47b7cec69feb4f8f2606ca589fbf35984b3be7296b29a6cd98c0d796cb7b212', 16),
                    gmp_init('0xa633441d0763273d7ce7f2560ae0b95d9f5d07b692762db7b1ef17dde0c0d551', 16),
                    gmp_init('0x9dcd9cf1d87826390bed5196747d4b944efa60be05493c101f7b9f1958cb23af', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc5a53605456ba81e30425749857f1255f3d89f56a7847503ef9140cec7b7bc3', 16),
                    gmp_init('0xd0d6efeae6a4b8ba4804e77260a002afa374b174b0bafb121b27db2857f36e95', 16),
                    gmp_init('0x642f71edc105e5c446bef75cf35daa745ab027d78efab0bf001fe0a312c6ccbb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29e97d2703ec1c243daffe88db8da0d3920eda50f02d52aea6f4b932b9efe075', 16),
                    gmp_init('0x25b4beb4f30eb66ba90a955717b6c642cf5dc56a8b4c16a1162c195c24884741', 16),
                    gmp_init('0xb92c618bd8be5d3d24ec4523cfb0a4a1da6abfdb314beb87551c97192a11cf82', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c4e584012e231ae2474244c3c512ff50cb06cfa7f802d50d1a3abdb331373f6', 16),
                    gmp_init('0xc4dea460f17a89ad987fe392f176517d654ffaf213147eb014a76553891eb717', 16),
                    gmp_init('0x8477b4995370d2a341d0c6b689848536986492986f08044db6db6154c67a3cb0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b54e6649d6700eb14db27de46ee1fe5add887e5d1e5e96416e92bad9089a0a4', 16),
                    gmp_init('0xed1bde2f18b9de918808261410ad95592d6de9079e74100636090aff3ed19924', 16),
                    gmp_init('0x58823b44a08803981e1c40cce556e29ea08a16c7921a4e8d5a1e4527591410cb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa9fe2a700c8a64334cca85c5473b9c25204f6cff160f0fddd438607a1cb5c5e', 16),
                    gmp_init('0x29cf637d1fb1c64745f89d422a7f0eeba2b91a9107b7fd944fe5cb16c546d66f', 16),
                    gmp_init('0x5ee02f77690dafd49369b5f0fcdd4c4fa0a5e9cfcf92a355d7e1a79f41a40ffe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e8d2f4a7c142273544b21fa02adb5e80c2f0cac7e19d9e5e998cb6be7bc3f89', 16),
                    gmp_init('0x3295ebe0e2574f65922f09e89f66f73fb2b3524f2d5e555e164edc01a43fcf61', 16),
                    gmp_init('0x211817d65c424727a30fd007d88da16ccc64fc9a5d863ff3d90493601ad1676a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd37fef3cd7811613dc4912a9fe4112edc53dad4a4b7a2e00702b91ce8d65da9', 16),
                    gmp_init('0x78065d1ac2855e5f715b247d44141f70d47d119d72cb7241c0d89b359a5acea0', 16),
                    gmp_init('0x9da9f92ac0a7be87ab10d2799feafdcc9f89d459337d78a9f30a6aa192c352ce', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf3524d1d9933f27c7ce8dae5740feca310691954111ee9b77655d8672c8f0f95', 16),
                    gmp_init('0xe30807b04d2902484ad04548f1de9010fc81f1933f57fb7745ab0f73531ec1f', 16),
                    gmp_init('0x5427f1cff1e16ca65adaad9d119cd62903adf14aaf4f29fa7ed9622fc195a466', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b2ab32b39ecb724ced4a101780fae62e500c5535211810bab5eb1b36cf18f8', 16),
                    gmp_init('0x21022b0105daf18758018b206afe80bf0dd99f04d1bdfbca12c7ea34268e42ae', 16),
                    gmp_init('0x48d7b4b9461a7ab60622529afe6e0c0bfbac3b0f9237c27227fab2876e179c61', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5ebcf197eae2a5acc6e7c4bdfbe8cfbb5761196e2b7dae6da4dd90de8745f33', 16),
                    gmp_init('0x3e73cdcbeb46046db6056e1cd78cec889a6c9adfed38d06a1ef435b778ac8b7f', 16),
                    gmp_init('0xe82be9cdb711e0aa545ca4bb307d9cb91b665bb3176d3ca0fd3eecbd7c2311c5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fad41068396f9bdff4b728227e87734a2ff0ca3f6cfb05e41108804197c8a5e', 16),
                    gmp_init('0x4159eff6f62a0ed92ab53a23348cbef8b0d0491608590393d39b6659946658f2', 16),
                    gmp_init('0xa5213f510834dcb9b787a4a44f4e636fef582cc994a21a2de54c9e94a33deeac', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf381ab01e75b3a429801629bc2ace87338cce5c8a25cbcb487c7f2fefb2096e', 16),
                    gmp_init('0xe78f0e5d43c4094f58d2aee01fdc00d25eaf9a462f7abd27c0cfccff22d9879c', 16),
                    gmp_init('0xff4f9fa81e3b97bf93d6beaba0215827ac3b77a16271766a32feace3d5f168d4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94fa638a144542fd8e86f6ad3348aa027c6be6e0616049b0b789e8a090a36ab', 16),
                    gmp_init('0xd05c31d0357bb8208bc8c82dd55e3f568dc28d45c2976cc8a608b12a4a67a455', 16),
                    gmp_init('0x7252ac26cc79d40dbf393432b76dedff824c607e5a8c8c009b231f2f803cfd61', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd24d20f1d77661cdf6f8a8ca5586d2897e13ca2afd1d4df585cefaa5cb99518', 16),
                    gmp_init('0x3e6a5a2ed893eb7c7fa8640f66c2858b90d8a2018b2751c4dc07f4ad41743197', 16),
                    gmp_init('0x687b51258108fd7237c6035ceac9cff01ea68d5e29e57ccb435b8ad7b691f405', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a36a075db4436f84443af06e912f84dd8948f623923d2ea0ce43583862af8ff', 16),
                    gmp_init('0x57a53db8f76b9d2867b71964447d246ddee4d4235f4c9c7fd6726a95fead9251', 16),
                    gmp_init('0x1ef58cfa605a11be4fb8c708ede7bb514ec445d6c2008bd0f9894b032ec494c6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49bf435142787c4fdcc03fc7fa1a73473610645326a243861c9a3b4b9f7b202c', 16),
                    gmp_init('0x92db84f46e58890385c06de2dafd4641265fd0480446fabd8566cd82fd7da2b5', 16),
                    gmp_init('0x91da00d452f3e0a2c59414bcafc3ebc536de7fe7e4d7d710472c7801c0ed0e46', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c6e5d6b781b69f23045c3cc0b82ce90f784bfcdbfcb56ef0ae9c30d18d1325', 16),
                    gmp_init('0x11aa6a6e993b930c94d53cc141d2cc0806c9391ee5e553016b8ed3cc01de4987', 16),
                    gmp_init('0xdef23c155a4b1d0e5a240c6dbc9c81f89cfa77d9663ac5c0632938fa47f73b7a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3191362ea1b00b62392f9ef06379615fa890b148e63d73f27c41377b84dad3d', 16),
                    gmp_init('0x13b77f1b2c5ab89a9e99a2bbeaf4a3b4e9732d2f4d5aca19641ef91e5a630e5e', 16),
                    gmp_init('0x7719826389ed3ae5645dbf181953b51ab5eca1051f0f7e581e20f6273a7fa51b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaea2af3b78cfa69c4e1ac7ae5271813cd095a6994f02f0a55d71b398a2465dc3', 16),
                    gmp_init('0xa8d0b4baca4d2f19d82e9f815b108a9d80774f024bd1bdf2f8a1f74599867116', 16),
                    gmp_init('0xeeece49cbf7f0aaa24c6b888ab34fdb0faf8a7fd17939790be2668a8beab86fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa39ab7f354c03fb226e40454888526561120ee09d8d90366ecbd094e08db17e', 16),
                    gmp_init('0x5fff4addba228055e700eb08e5083a17c7dbfeac008a5638ba9b91a336ce4342', 16),
                    gmp_init('0x304e959cbfa96c1c0183ca5aa281e7d27bfa01ea67f3928ef82512614bf0d626', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb467e0f2754bfc78e5073d1a7e2c257eb0eeabf15be2e99703332e3cbec64881', 16),
                    gmp_init('0x9f963bc9adb3ff3138e93f34dae442c72e7cd4d3a7272370830d53f4d84bc83', 16),
                    gmp_init('0xdd858a0bb581e9182c53430863f221a7d44f533054012eafd2f4ba2c619f1060', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59d4886e9f3fe58316605f8e69aeaf10333a6c3558309e097b7faf1f2ef03205', 16),
                    gmp_init('0xd94ef37571466a56514ceff82020fc16934557146ef4ee57e6fa736efe5ec16f', 16),
                    gmp_init('0x74b2605e130fc36e72a1a8d910ae040bec4b6c3d6a6c655e79e53fdb4f501e05', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x417ef678ac0748ade25b671f6e88fb12184034ac82de19e98ad2c2975aa879c2', 16),
                    gmp_init('0x929619b0cc594b011fa11509b7c35a48107cbd7770f56b018efefb8c285e3f53', 16),
                    gmp_init('0xff316913a88f90528bd8bcb8edbc890bf1d89b67824825c9b00612d270ef462', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bb41817fe1bd57d3ebcc6ca945d6ab2ad12256a2c55bc05162f6a0ba4185924', 16),
                    gmp_init('0x6722a904779ae3cf2c21f73bc31b2b2ec2e75c4784a55a7e746b596eee14cab2', 16),
                    gmp_init('0x3b1d49b33bf7b406afb8f561a46eb650d6e442ec7cd15b2d15bfbd39523188b9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb6ef5509b2826fa1e15394d0364aeb06f0332a5b9483e90851d8a78eecb72d0', 16),
                    gmp_init('0xacdb3a8621f575a20726bf3b3165b52153d4d7ad1b0e172be6aba7ee2458e6c6', 16),
                    gmp_init('0x6ff6d4920bbb5348853cc7f5c88269a9a377508c1215e2a9ee134f70b0ac43fa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5edf2de03c47e02dbfec3a03bd6cccb347b23ecebee81d4b9fdc6a42c7b562c', 16),
                    gmp_init('0xe5a49b8b1d80c4be2bea59c79df6f9839b57714abc1b3f29c2ad70493bf03513', 16),
                    gmp_init('0x505ef7adb35c55334fea0c2f1ac422838d122e7b908896fd9140fa50405fe9dd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6c7357ea19025f023a87258e7677864acec147348b0e8792ced3c19096637b1', 16),
                    gmp_init('0xc10c01f0f2a9606666b69899ddd96dd68826fe885839b42193f30874d1acf2c4', 16),
                    gmp_init('0x93c74ae1245e5c30e56b0302c7687592caa68c5d753f82e59c2fb6bb29bbd17f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4841e6f7f5e24bd4eb30dde929a8009c4a97e7bf400a2264d144604b51dfd889', 16),
                    gmp_init('0x76cbac4532029ab3929a6e8056e140ce42f1f08ead241f317fc5f632b94e7659', 16),
                    gmp_init('0xc177dc10299053221cbe2990dc806c3530617d1bccf50685dd5f5fe3deb09df3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e16e41cd2402759d144f4ff93175edbf7e0c043d6d78a328121fc4ad4cb5b81', 16),
                    gmp_init('0xc3ca8ab71ceff97e7a01ac2d088e0ac54dee953221a3a68e0fe5b902dfde4809', 16),
                    gmp_init('0x6bdc547cd740f33c9b71e94157dfd4e63f0509d41ef13dccf5faa316ab8d5868', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd72f1a362c4e1f33c23a27e99d099f264fd87da5e6c9b37572dfe0a9f714243f', 16),
                    gmp_init('0xbd4011638fef31534e9835cda9f576b43682be7c8c6d9e84389c89dfd73a5233', 16),
                    gmp_init('0x6bf989707e61ef1ff3137da2e23dfb40e92c6d2ff9dc3ea014d4895ad9a4a9e5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8fe44e6cc6b754c41976d2d4ce87b8d64295cc266599d59e321188ed262792', 16),
                    gmp_init('0x8dae7bf3209b1e03837231bce2b12ecdcd850094f425a0cc1e5a748c2ed5ccff', 16),
                    gmp_init('0xb0db06840c5707c94e8434edfd65b6613281a8b848c26b3683a24b7de1947df', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca61d0714d7e2de6b2853e4206d6c82a45e9a655bf5e5d30f09b7129cc7a9c30', 16),
                    gmp_init('0xc0e88059bde3cae128aac2c1e72ff374f4a5066de99245304100de26cc3c6d93', 16),
                    gmp_init('0x301322855a0a8601de5f1ebddd1f1c5e946158daf50bc09f37cbf38bbfe37428', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1531c06740252d42359101a78328009517aa2cc4e4be72b4e774a47fe6403f75', 16),
                    gmp_init('0xc00ffce8d435e6cb5b1497e7dac00d104ce6aa68647529c2e40916664da2978', 16),
                    gmp_init('0xa05c4ec1fbf33efca226546d237f0d39eb63af059770b38308e58ecf7c881097', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35cf5c1e524f10e6bb7db3b6efb9c2b8248850701af2e5725c02e45dbac63f96', 16),
                    gmp_init('0x60fb9ecfbcb014be8250fedee02327e8eaa89b9f20352717b0bdb7aa4814f98a', 16),
                    gmp_init('0xcb78613b242ea346ad9bdb39afe92daaa83703a6b25301c65d25b6781d3b314f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d0baa923f49fc21cdd2d9a15dc2ad6cca467f2686d3cc10005d5c2d1ac4c4eb', 16),
                    gmp_init('0x5b9d08cb244bd89667f9546c12ee17ad41d23646e52a18ca307ce02cf0904a8b', 16),
                    gmp_init('0xc72fdc7b1f4d783f7c22f1ecf94470ecbd64f007079455edac9e7c47d98e9950', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0efa646e473b1fab49aad5dd507ac31a148876b87ce565154cba96baa90866b', 16),
                    gmp_init('0x6a0d2147ab112e4272f87ada924bf2b581428340bb8fe2f470008a4406028af4', 16),
                    gmp_init('0xca5e31a7267da764d5800b5291e6ee1ae3f069d739b57e3c0d3245b95a11011f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2431f7513dcdeceb0e1c5788bdf6445b3cb656012996ffa688c9cd8ac9a7bd04', 16),
                    gmp_init('0x93be6a3c7ceda85fd66d806cc1a1df6f450b89f31a6e754a5055df599aedb8f1', 16),
                    gmp_init('0xd128d78055963eac0ce707116460ab3a1ad0727e710f55364a5952211e93451a', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf1627ace7bdb692d57c53501b30e895d631f579c55dac61bb15bae14edbd7e55', 16),
                    gmp_init('0x8975230976972ab34c9b6a286fb383e0162dcd57edaaea32afd88399a07face7', 16),
                    gmp_init('0x7dd5f3758526f86e69f36b685bd8eec2ff8f6173cf30df920aad55b6752de3c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21acd08359c3232f046018909bb91381847c027b87d0023f3b6d2a2deac69ef6', 16),
                    gmp_init('0xbdbabcb3140b00e572a8293a9b2050c1b29692bb23fdf5d80221574ff08dfe47', 16),
                    gmp_init('0x7618970e7556eae9e1b1fbfeb7d2bb71f3e0c71a4cb35d980730b0d864ed6a09', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48c0d1cfa3deed37baffe7370a70a4228be19a39e4f39675de9c839cec9c7642', 16),
                    gmp_init('0x54b1425bbdb514307a9fd9fc69d4af24ec8aeb27fcd6f1cec36fe23ea75deabe', 16),
                    gmp_init('0xc9b7f3e5e5ef156d75ae803a72ce63b8fccb044b6a6fa10eccb5f64a190bd1b7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8466da040f6909a36fe73d1632c9babe0c72eb09bbc3b24e7e7e3cf38a3b4f8', 16),
                    gmp_init('0x4787419cb0e98cd0047b26566fa7fbb54acb76a45e587299df58755f952f4eda', 16),
                    gmp_init('0x7c3f265913c92ba4b546a8d5788b1f7cd99dc03660a400d72b105f833a17fa29', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d7ebd1908434f78285fb1bc3c4a5468dcaae35900a57f3912322848ac038473', 16),
                    gmp_init('0x4cc37a0ba63f092951bf07b62d657c7166276d87dce93eade9b5f2c829baf4ed', 16),
                    gmp_init('0xb4c2c35e9e67bf473b5a0d5c86d06b80ba62418c65d28f6d1740b31292c9af64', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x114621c354c85f17184a99eaaddac8267725cda5e1a91d44014a2efb2bf8e84d', 16),
                    gmp_init('0xeb9aaa9a486520371e2d1455e13256021fa579ed73f5815d39a2e1471ae1abc8', 16),
                    gmp_init('0xfe1d97ba41ef895dddc5fc5ed221122adec9e99070396c14a29c65a1bb254ad3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83b8e792cd8317afecb372d99da9cd059c5689042efd71145307376e02d054ee', 16),
                    gmp_init('0x1896e691178c6985185a22e3aad63b9328b4ba0d6e87ea3bb1e9a1a503bbfd70', 16),
                    gmp_init('0x34a005a26aef540b1eb1328dedc7c08770b3806b69f493490c13a6b1637a6760', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d03c034721f2d5b8872f1ac7f8a906c39ba3b66d351908f59042e84822eaa08', 16),
                    gmp_init('0xe4d7ba2fe987abade8b11589296c9dafbd29669913a05844009341f44093e0d7', 16),
                    gmp_init('0x928978aabdadde45dba5f6fcf4690c4a6163fb048760c8c213bac41ba766dceb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47da5efd6b59bae33731b561734a9881378bed460fac5ce74e18a82cdf4b1904', 16),
                    gmp_init('0x5d009a86e00c555620e24db0cb9ebc8e669e292dcb60997dda074964a657d808', 16),
                    gmp_init('0xc3b741ab673110aefefbf1bd9257e99221bb480fcbb558e0b717205af52814a6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7d4ac219468b431f65e810acc4c4ebbc89ea8b307e16bc80f3dda1cd0b93ff', 16),
                    gmp_init('0x70eaafbb627477379da5a8ed75808931bf7da8c045f15049a9875ad255648435', 16),
                    gmp_init('0xea948a723a26b810c2aba2432efe28d4958706deecbcaab308d738e1474b2ac3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d7575d9daabced5552bfe71ab5a1432d00528813730a733dab0a5d7bf3213b7', 16),
                    gmp_init('0xbcb1f6ee93db047099bf81a44d818bb3bb8c3e8b2c843a7e25458da2fc273cbb', 16),
                    gmp_init('0xbd8cbeb7393076de9c5494283a23b90e32b91c06fd42b332aee32b1e7280e351', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfa856ef5b03609a2df10587a962abd4b44185fc227b46ce8415fd28d0f393d1', 16),
                    gmp_init('0x562a2eac347336ebed9e1a9d59f6e889fdccfd6bc4222a1b4cd21c5374917843', 16),
                    gmp_init('0xcd653660237dca93e8c8f61520de7417240ee32b192c1f7ca19c47ac4d4591ab', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce305862b15f40b8991dbe2d8033fa04f01eccbe7a961a14f28f080b4084d8dc', 16),
                    gmp_init('0x443b6a658234f0a3511b98ab2b2d306f6f34d8873112ba7570afac61ba477c61', 16),
                    gmp_init('0xe27e7038f71b457d6a53b8bee38284dfb16e23667cb8ea2d786b8f9c64324146', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80cdc0c18061fee185e8e4fb02184c051bbaab7fde497f617b833122f283ce97', 16),
                    gmp_init('0xa252498fa6389ea61f1c8972144dd998b6d733bbf2d0c8a49f6db70e1ed04aa', 16),
                    gmp_init('0xfa1a8b9bbe123681969ce7ba38265a4d3c43d0e87804ee72187417f2d79bfc92', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8802148bcb84281d3e9123424911a0a374805989fcef89207f7c9e396564dd96', 16),
                    gmp_init('0xbda6d4ce0ddfb6bb11f9b3468c91a24e2454c6222ed3b3467b93f0c58ac26bd1', 16),
                    gmp_init('0x1bde57061a763047225329613a787fe1efe0e6b92c8e6d0ca6ccad44510ca042', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2f68988223843a98bebf16f7a95f9d8f441b4f6686eef68ff8b890ca48ba561e', 16),
                    gmp_init('0xdc126581534947f1c310bda678aa2a5ea5ea12b4b87f29cadfcfcb9ca1b46c96', 16),
                    gmp_init('0x9234541e268c8605034f251d859cc04673f772026d0a4ea0f6afd2b5339da29', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdea8ce33a5c2ec3c64c5d6199da8cec0207c7b423b5f39b3b916e6853efab7a4', 16),
                    gmp_init('0x7b5e386fdc6bfbfb75210b9f80fa18b5d73b6c061075edf637d16cc540c39fa0', 16),
                    gmp_init('0xe852f8f1db953920016aa5f68a48d282033a0b7b1dab3c30dcd4359fb85bffba', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xada6b5bb4a41cbfa6c853476588da0c4ebe14d05f69202853787a9497f902ecd', 16),
                    gmp_init('0xb27b521653728e825f6e68e78cc683c69b508660060f70aff5079cd124e79bfa', 16),
                    gmp_init('0xf751d6abfc2c598282afee1fe00861ec7e7e06ba512dd8d0e9a6c0b092088e20', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef7d9c2509eec509a162f49c0b66e48aa704ca0a3c52c45c8f4a1fce52e5ed3a', 16),
                    gmp_init('0xca5bb31540cacda202820be15fad7f92233a81732f27f2b79c03aa2f01e90d5', 16),
                    gmp_init('0xefc592ab0a6f97d4184e9862ec8ffe276dbf7c731f3e40fe14300ee214a6effc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffed68b1ff547a1d189a445f82055b0fb3e77e601dc8794f5049df76fcddc06a', 16),
                    gmp_init('0xd06fa7046ce0db95b149279772e8ee27f0267baefb9db31c1b82f7648f3a33fb', 16),
                    gmp_init('0xb9a615a5cfb2503211a985d6416f17223bfbf738ff3b8936f845fb715ecff116', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37e0a64a5398d82cab9c29bc296e2fa20a3a7babeddbd57a2df498a82e1e9d5b', 16),
                    gmp_init('0x4a157c91a1e4d6eee4fe03d5b63825b0b9faaf81039c6c82a88b6bcd8a57c59f', 16),
                    gmp_init('0xc3a1f644cb638f537d6f74fc7b2c25be18681265678ece72e5c3709763a6d464', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf824fd54ad97db3e14e45f0d85a06a7da33eb1cac7078e927e1f93d0d61f4a22', 16),
                    gmp_init('0x9aacc8a2653268cc32a02a2178bb537844e9ea1f52d5d326cf76df5dc70b41fd', 16),
                    gmp_init('0x1bfadd417fe03713e10b939cb3ffd4150c708b5d8f1637838f903808e964e999', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e9de692cd5674c5486992b62c024be2f3908b885b9e2d75bd531c9d1d166c4c', 16),
                    gmp_init('0xc225e1b3916c1758bd5761101d03848585cb9a666fa6af39980cd340796f105e', 16),
                    gmp_init('0xd69e1fd82fc7bf326a777f845aa835243671448b4a2e7ce76e4c9b02a5df2dcd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91e940fc6abb9ab005ceb98f99f7317bf39f80e2c8a5a81bc5bc0839618a30a1', 16),
                    gmp_init('0xe7bb191216db5f99e3bb89f3fd44d3044bfeb7864d65b6571d4c429dbdcba446', 16),
                    gmp_init('0x7a84d38cb653b5bc9efa38a282656148c19678f14f888e979481a2493676ade1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf14242c10e5a22a381604555f145423c8cfeda1f4acdb2407b59fc6827cbae5f', 16),
                    gmp_init('0x69d6d1935ca5508e3c8b95123eb9c685b38333eedb7617c45b4fa93fb41cd36a', 16),
                    gmp_init('0xafa5cc4e09b5f42363bf97feafd265765c97a2cef724830d693787da36e24f8b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a1fdeb73de21e08435a0429efce924025349ea31e898f1ea97968e78184fe7', 16),
                    gmp_init('0xff8fc011ba3b968c1c89a570e877188984b68e88e581b66629e87e341f48c4b7', 16),
                    gmp_init('0xd5cb74954f45eae12308efe170f895f09c1c51421c2c720531dfcd6b5a1ffe10', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2617641e53cf408928b59a3d864a990b23a9a62dd0591bab2c4261a46c06ee7a', 16),
                    gmp_init('0x8631c55e9e468877656e1e3e62b8e1d015935522b9af797cf0621f36c354dd37', 16),
                    gmp_init('0x3c6151b83a0e7ab1196ba325a1f8c50ce59df2ef122a80549c2015b03e404548', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc34e8843b7f7a4fb8915a780f2fc71d0906fc4fb624f7e8cb81f5d5fe6870e7', 16),
                    gmp_init('0xab2cdee65602cccfeca9b85bb161abe6ca7bd193f80ec36ce23538404bb5021e', 16),
                    gmp_init('0xb9d982ad59655e04a9bacb257cca2d2da959a2a848e4261d0835946e03d827f3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7d87e7a2673b215b5fed983b55003d38e2760e535c02a74bdac6402f984b8be', 16),
                    gmp_init('0x773ece8cbc6eb480e505d731d0d806134733b3e3a6e67b5d57f97832b0ea8037', 16),
                    gmp_init('0x3f6c044b5eba06ac6bba2cd4421073a0b6e4801e19c80df81c710c80f5a87ba7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf57895c97156b15d3406c01063fb3a5f3d9df355bf8979bfaf549a79e3234ebb', 16),
                    gmp_init('0xc14ff9dad6754d001ad3e1ed0adfe0609f6edfdeee319e3dcb94e0d7439e63af', 16),
                    gmp_init('0xaab04635306c3075c9ff8056f362a7a89475ae0b2c67de0d043c64c1202b2517', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b7083900a14e26bd9c23c7417abdd39b7951c161f33cc58669020343639f911', 16),
                    gmp_init('0xdf284826774900cbbe4249f3dc68c39c7d368fe713539cca46ca976f5b9e4895', 16),
                    gmp_init('0xc1b1501e53cbe2834e371a68ca8cfb4218420ef5a9f1759b51887242152b5e80', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2aade9e58266da8be46b8db97569d40cbaed254d851a4fbaac382ae6fbc2818c', 16),
                    gmp_init('0x9477be10d74b9f243e15e43a8bf3c4ed9e16567b5faca89156e14d1b29f100ed', 16),
                    gmp_init('0x1186f9472cfa2f481670611b5e87642796efe68b484e22857cc418ba126ef661', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8db5dbc2875378ebd79dba8c284090d7c7430127384ddfbddecb45284f09ee1f', 16),
                    gmp_init('0x66ee90da35e88aecefed8977bfa2a3b8f05740b3fb0bbba85aa71b1019aa027', 16),
                    gmp_init('0xe2c0af1f66eec00e0d1570d35649fd3567f4492b1d33ea36006ccec4f543bbb9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a757f2b0166736c3577fc239682c215792e30e91500b2964cf69b7eb1079685', 16),
                    gmp_init('0xb5a397b1e5c0778e1f5827597f4d0a2adbd066580b1bd7428622c0e970d9e006', 16),
                    gmp_init('0x9dd6e82a74a8313f79784fa85975d27739ab0edfb87909dd56a389d36c67e6aa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34d333097bd62440e9b2decd2a6d79fdb1b393b124df3903ac8ce61fbf24f7d8', 16),
                    gmp_init('0xddc116d5e2dab38b8a4c9e8d06e4dda225ebac14d461853e131dde9fd37abaaf', 16),
                    gmp_init('0x938b1d9e886fae8da017535f68642659ed17e58138dca0692de1c7391efc1ff2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2875461cb4a03c4125a7d95ac68a70f40529eafe19ba78375c851313dde22fc5', 16),
                    gmp_init('0x70ed850a9d45eded941450926f3deb11be09de9dcbd21a39cf991275e75e5de3', 16),
                    gmp_init('0xf2fcfe2afe6c3245d39471d285b1b03d79386f9b8712111f33e4f924291b06cd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x461bcd93cdba71eebaa9ac9e3774a50bf5423faf2432847c141c739f3781babc', 16),
                    gmp_init('0x47de611308653eabd63a10c049b661551b9f5117451d569417c5c97491712ac0', 16),
                    gmp_init('0xa00ad18088bf6b7f720b4912477f3b3e5e198e0d347c2e3f371df19c312c1cee', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99f82f467a4877c958598e3f9f4341f6fc4b4ecbf8da1d25df1f05258dc5f9d6', 16),
                    gmp_init('0x418f39f3454a69c7c1261ccc4a3dea8c299949b5e2bb9bb9f9126ff8fbbc58c7', 16),
                    gmp_init('0x27f92742f95e4e7dfad98b8e41610f171b6a5cc64b043aea54486c11db9576e5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6ae22ec2c3286400110f2dbc882408c75abd0c67e5172310f1dbb4f241a7b0c', 16),
                    gmp_init('0xcdb9f9ff74a86c35b6d53a9ee18fa1d60a40da227e403355af532215624d0cbd', 16),
                    gmp_init('0x330410b8cdd79f6dbcfb84ff30b61935fcd1a99a89f2b69f653bb8818c2b4908', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9f78bd211b35ad48cbeff89925acaef328d7a3d47a14b170108a48f5905deab', 16),
                    gmp_init('0x834581f03bf5848019f3aadfc24c73f9aaff39e28da157dc8d71af71155b71d4', 16),
                    gmp_init('0xc850850d46df51006d9e4e47c2e332eb84f9da338c4158bfbe70795607de551c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbca31d163be69e25172cc23181e781623ad010ab72e45645f6130ea054604a40', 16),
                    gmp_init('0xc0b92ebd833f1b762f2e6dba8b87695e096125394e184549e1416f149935fcdd', 16),
                    gmp_init('0xaf6110869440dab8ccd1a7b03810b15fa3a4e5c43366676104df6af053090bc2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x219e33c0f1bedf6a45296b9b33fc76656c021f3743252dc0bb860baba1b5749f', 16),
                    gmp_init('0xb85588ab33bfb8a39ab65cdaab7fb0bb2c56d5299ceae1da391d354400627aaf', 16),
                    gmp_init('0x1935a45d28b744940bb774f93aedc68bd13801ac53468a552ed046982d413863', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc5697d346f5e940e70a4f085712968fadd96469c48dc6655eb3447aa790a6a', 16),
                    gmp_init('0xb90a7fa35782160b5f9ee25b34fe1c0d8478ac6693138d36b8fca39d10a04d8', 16),
                    gmp_init('0x45148986dccfe11c9f7fbed61325f8171a7c1eb660e649d13e7e8b5119659011', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbcae481f6a4e99136a77c756b6273be1228e34562f26e2f9a5b90a38a73cbedc', 16),
                    gmp_init('0xda1b163e98464e55d69be89adefb0b4902ce91b5d7fb9c8696e80442b9b5a69a', 16),
                    gmp_init('0xe208c697d5e67a4c3f7720a130abbac286e72a6ea74c5ef684f6e94c0b857393', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4c0304a050696ed1766bc735c11f4928e8b4de92d90e63525bac997629358a3', 16),
                    gmp_init('0x13e14958107fb3bb38de4471b61e101e91874689c37ebbf495aaf5d0015a818b', 16),
                    gmp_init('0xcd6ebf613b0e47ab49025ac6fdb2cbf4b7aa76dc94fa854650ee0f1ed537efc8', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2e934ee2f484eec3a0353f823ce399f537f6a85b296df589672cf8a68bd84466', 16),
                    gmp_init('0x46172c671b0f6e97e364778c4d7e67a5681514b0c7643eff6c80d39040007c37', 16),
                    gmp_init('0x4339028ce76ab41a8baf32d1ac7ca6b8a22988fd92a475b49754e9d6862b391d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd68568fd0c1cfc475cbc3ca9e846dccae034076bf4e189c4ce7926ba80ac081a', 16),
                    gmp_init('0x8a4b65c7efc17985223e159709cf06c07c27107905f633fe9d8c110a4f2986b4', 16),
                    gmp_init('0x8eab81d34e48e759ceea57924343644acc85349de4c8e9305ca894efef079534', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e00785d8075178b290363876ccd361eba0111409b64387ef719e6f180a32697', 16),
                    gmp_init('0x913cb49a621a1a7010c413025bbcfd8edee16b9adfb0ca159989800ac1a06178', 16),
                    gmp_init('0x2d9afc99113ebdb3696e884315eb6965869ccea797de0aa536660faf32157283', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc12362e51cda5c3a70ffb27caa9715b68d20fdbccbe2f18519aaaccb8493264', 16),
                    gmp_init('0x1e708323d8104355824500062aa3f63fc97935eb9fb074580bdd3c7e5a213234', 16),
                    gmp_init('0xd95bc7d82693193b0a2a206383f954a16f652789ada0bda5f34e2b86305096a2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91f098b910b750b18f09bfd03d3c03b6833f453a833e7613f53771699cc61dec', 16),
                    gmp_init('0x91e38e20a6dd83628a2fd8ccfc9337daa460878fd5cdc6b7eb610d786ed8bc62', 16),
                    gmp_init('0x3ff8aefc30924b8e2f5eb91393de1b6b074216a30e570674dd2749ecf5586ff8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x613281abd63f6f5acd0205d1ff0aa006050f98e1314572a2a2e845fb00e3fbcc', 16),
                    gmp_init('0xcd3d8812152cb634d84fe120c2f9157e4c69e4e27652162d556cb68e8901db5', 16),
                    gmp_init('0x6f21223b5f397a513f735820131a102b5c98981737eefe14bdfd7005e5842338', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd12a2b33b1e3d7eff482e1a1549d5427c13ca223352d01ccb24360d0a99f19f6', 16),
                    gmp_init('0xeccebcb91dfce783e9d465162cdb85c482a59e13a89ac9d8610c5dc8b2982fe0', 16),
                    gmp_init('0xe38e8398d2c0c35565990216a28863171298d8c6b6d0410ce15c33ca24608315', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaddd594db81b7aa005f5a301cd96ad9a36b15d45c02e61471ee21ff5fe389e', 16),
                    gmp_init('0xf888b57d3ef7dd2298bcd85b51b2930bd8a6f75855d929423f62b6daf9b613af', 16),
                    gmp_init('0x59ae8188fd1771ead1a8601155b2323de6cbe62f1862c5e3fd7e4370606fa380', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6410d2be611d57bca4d089df72046e76d6bbe19f9e27bf3cea46696a9d41b056', 16),
                    gmp_init('0x9d224d4be74dbe7dc445e7c28c7c7409ecb80b23235bab02d219da04c70f8259', 16),
                    gmp_init('0xbd1a0f199c8689de0c2e1a6c1726e9dd300b3413b32f57af08f818f21a95fa32', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8deba44c8bdb8f393fbb36b178ccdb0c94ebc5769bbfc3035e107d3832460fdd', 16),
                    gmp_init('0x262c1eacff166613d2c458cfb80bd6229b5e22b13a9fec96814ed71b8dc9d0d2', 16),
                    gmp_init('0xcb3ff458c29b8895bb241e38550648aa10ccbd5038fe9023879790f49feaa6b0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1bb26eae03ae5352ec09d62b08d7921b0c47a4c68dbf9ec46f230a1326b3c26', 16),
                    gmp_init('0xaedbc38e6401191d3035fad27a186c6768e5ecdbecffaa5e23f2363ba8dda281', 16),
                    gmp_init('0x96562a4b4451daa7df03109005726c6a485d8e6f4aee2275a75aa43c4c031f13', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf3e0d81d0a67b71e312f4d0d8599160cbb9911faab4f7e03da06b0786d4b1f2', 16),
                    gmp_init('0xbe2b115917e9674812e75f210f04844dab55f9b8aafaeec31ecba5c0f09b182', 16),
                    gmp_init('0x286bdd8444b8a8fcdff4786db8396c9978cec29a0b41cfa0eea7317f6471a682', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x605f00ce18ae839c4747ba8a4c7e4cef3509f7e120d75800f4bbce1dd9cef6f4', 16),
                    gmp_init('0x2decbbfb754f6e634c5f3ca3018ba9bc58f0c044333e2192589e6b998b8e435', 16),
                    gmp_init('0x4d0b30c12cfcf94382aaef08bbcd0ad170270d60ba939f2a69877df01076fcb2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb6db8a0a6559d3a1d37407e974e4b1fee9702b559807194a698947ff01f12f', 16),
                    gmp_init('0x7e6f5bd12964685716b2d627789c399c65741953093ce8b9973908a2baf14049', 16),
                    gmp_init('0x61972412fc132ab56a847982fb85fbe425ad8241ffd6c5d40035bbad6ff0266b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x472933691634b2ddbace94ecdef2c6014b4008b5ecdbb7e55c3a5c7d8b4330a', 16),
                    gmp_init('0x5edcd68bf5528c98e6a08199d80dba3f5b64d924b8fd23bc32e5c2e6ecf55241', 16),
                    gmp_init('0x4bcfb7b9c9d3d93e51ad2d17982d4e4d3e0950fb80e89724f571c21e15c9b9c7', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x87535db34b4b4e1d87962450f2f88e72bb3195a7d39c520f961e39f3b340ab6', 16),
                    gmp_init('0x9e9e4e98f0e4d60f405d08a8bf96001db5df9ce82905a03a84f417ae3b752e92', 16),
                    gmp_init('0xd38109408861ceabca0e26f2b8607b316e612116460cae8a3485c006e62443f3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20056c107133c326a2d2183b31676080356a3aa639c282f157a22580081af155', 16),
                    gmp_init('0x2b8945d3e4e12f19ef935ebba328912818aa88d5653d1920d93739dfa471d95', 16),
                    gmp_init('0x3cb1e72d28cd2fca0b4a211e054207a9863169e1e1c34cd45a0e4ba35c6225b7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd56e744989212f5a5dadf37cd229598033444f0638f169dd50acde4b955a6310', 16),
                    gmp_init('0xbde9fd5913b5a9c742d2ed97211d9b84d43795407d1def579d9344fa8a50ab07', 16),
                    gmp_init('0xb49d97853f48a008da30b40e9b299b867364890c2246da39f26b934db580f2b3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8646c6107976b7aee30c72216925666a7eb2e38e92c69fcf7a8e48d815530758', 16),
                    gmp_init('0xfe7b207b83f74300989e558759605e72bac18d68c5485f2d36cd74e04c222adf', 16),
                    gmp_init('0x5b7b3a37c6f84297a53624987b6c8354844008fec2256ddf9471a98516a46ec5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9dd61160c5d16e1aaee4903704418339b82a0272da04a7eafd22d3b60cb8ec5c', 16),
                    gmp_init('0xcaa3be673b63488f50f937cc9c9637cb85d68cdea2be97d0bb2503579addab35', 16),
                    gmp_init('0x9b15ed62b287dde4dcdf0b97091061042adfeb7cfc5649ae1cf9e7851b33cc87', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bb7181b82ddc840e1cdd905d4b17100dc6a2279aa83764d8bc43c7717d9e762', 16),
                    gmp_init('0x9b529a2bb458e1dbb27cbb0c2a8317e72f99f25fba5e38f7b1e26873fad449ac', 16),
                    gmp_init('0x1047d79c2cb836fc0f3d29ceb871fd01ef512bcbbc107f1424b7b0e8f4d56aaf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf46f07b70c07134377b2cf028a388aeae568bc17621af6dc11f25efe228cd689', 16),
                    gmp_init('0x92ed6db99c2ec0da7b38bfe18cede643a077976d353db80374ceffc4779ada88', 16),
                    gmp_init('0xef59ee5ad61bc109554c6d89c27021952da91fe9348ae2bf8cbc01b6665c01c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb341990d10f3b799311e3aab78ed1b0636e7ae7c107281010e615a08d469bc45', 16),
                    gmp_init('0x66066021c7cdf74de67972944732eb2778e83ee1fe9fd3e6ac07b7f83e88dcca', 16),
                    gmp_init('0x4668728395d94f375a742dfac7f66bb66aeb03520d6bb1b1e5ae7bc3519887bf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68f2d0e74a0438ce2302f5c7d11c8951815a994b84c1bf5ce72b81d1f0000df', 16),
                    gmp_init('0xa497df7e4d3d70f619fc3f20e2a558af7b7519ff0e24e3c1ca4aac36859fcb12', 16),
                    gmp_init('0x42c202a6b58e7f71f0f98a9777881d59a77e497b2dcc9329e94b48960e9bf856', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7c0fa59af4c4959f621306f622e29ba07c52b9e6ebb894aa0774680daea8bcd', 16),
                    gmp_init('0x7c830f47d9848476c0133ae9f0a186786276b5e69ac37da53c7983c687243475', 16),
                    gmp_init('0x36016b1138f2b86a60ef408e9384a43c386223988a6723b3a0832e4be06eb3eb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x171e6c7a8dffe61699ce33b203c3ae6f0738c49850fda049d7674f0fefced4fd', 16),
                    gmp_init('0xf47bfe281f331a1f9799814e8b062a474664c38bc95369fc9eabfffd257b7a75', 16),
                    gmp_init('0x947ec1c825ec72ecbb8b3c627cc286a69f91f30f56091f68ea85b7e4ab5b9d44', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfd75b5d3c292200f4fde886953f2bd50e6d83be1dd43060a5a29048348eb7f6', 16),
                    gmp_init('0x8f5f11246d9a960bf30a35ec4388cd268830b3d9aeaf3359f54dbb1c50665679', 16),
                    gmp_init('0x9a79533750993cbd865870652e3a9ebe0cd819133e6a5c2a1775592a441759c4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x684d7ea954011a2c9df440e01e940a537f3a52bf46af9bb8ab8002799be26e5e', 16),
                    gmp_init('0xa7174af385780525bd4c2f24afa823ca5410f15a2d4bb4186220680cfb56b7bf', 16),
                    gmp_init('0x64bf1c1e051bafd0ef8c8118cc20a3347ae0bfb2250057bc92d7460d2ee0d88e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x553fae838dee17a707b82c5c373e04093dfe44de5358e9f0786c9a0ec4733424', 16),
                    gmp_init('0x95423800441b4c632f938e252a0600985cb89674d03b7cb0f98cf3bcccb098dc', 16),
                    gmp_init('0x60e27af84b0fff1ae959bb58c9a052aefc5db4e7cd2dc1c3a1c8b7d5e0d264cf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf80ccc40add79558af9e9575a21d3b52aff63afef5baeaed9797db4f910540e', 16),
                    gmp_init('0x3aa827709f553862bdab7630adc5128e5115151fa9cf53965577508e496ca40e', 16),
                    gmp_init('0xc7ddea1930ad74e128f008d52ad2bc16416fcdf39e1b0cad93ceb3d87c9f94ab', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4c3aaf6c6c00704e96eda89461d63fd2c97ee1e6786fc785e6afac7aa92f9b1', 16),
                    gmp_init('0x14f1edaeb8e9c8d4797d164a3946c7ff50a7c8cd59139a4dbce354e6e4df09c3', 16),
                    gmp_init('0x80119ced9a5ce83c4e31f8de1a38f89d5f9ff9f637dca86d116a4217f83e55d2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe70ee0b4b177d3fe727ecbd353c8a1f7df421872e6e25cc569e0059874d4370c', 16),
                    gmp_init('0x1417b3c4765e1e773165b595603867b3af4a3d3d1f1ae9c404cee3edc205f947', 16),
                    gmp_init('0xbf403ed22ed26a82a4ab40bcc03504f0456950c5748580409dd415cae09aac25', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b0715ed2e7408dd4aeb92e29a27fffcf45f63c2b4865036c13fdd9ecb78f126', 16),
                    gmp_init('0x877e5356508c6390778271ce9678b99018181d65ec6a18b77eaa35218b8e109c', 16),
                    gmp_init('0xc78a43c82907f2eb90211dacc29e00337bc3f882dcb10eda7ea313057eba4581', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9261cf69d51d0b3d1c423be72f0b1f99bcbd7cc5487d0faa82bce088dc57f027', 16),
                    gmp_init('0xdccbcf39482cf7ff6b54d5581949829174e5b1890b4783a480547de484cd35f3', 16),
                    gmp_init('0x37ac1034ffebe835fe528fe560401fb79b9c886b27f7c8c334e2f49a97dc8976', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6099e226ec2be03c9af02f55da1d7ff86c1acb06adea94019fd656ddf4d8594a', 16),
                    gmp_init('0x9125874f1d823acaf2a910006556fdccba781b8bf6da4a64b607ca9ff011e6f1', 16),
                    gmp_init('0x930705b485835fca801870fb842c17255fe5ea60ad7a042881f287b5093c77e1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6353a4a4e5f2df4d757c88023ab2e830b4881550a339addc551d7864af1d3f2', 16),
                    gmp_init('0xb58f329a294181e9601eeb144238950ead5e751d7ccc00715911b05943d4db5e', 16),
                    gmp_init('0xb2609d2f49bf07bd027cab87bee45a1fefd55a6088d12fa7aeb5e50139dca10b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2cf781f0081a9d915df7e1c6fb0b9da83b90cb4f2213a5cf527d489dd5efbc0', 16),
                    gmp_init('0x9f090488ca4cf0fd837244b3e3b9f091732ba94a1efc5dfbe130fd833bfefc22', 16),
                    gmp_init('0x4cc7707a211cb7886cc00d60f36b2e8eeffd4e1c302af9509c7e0b0f8eb225d0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x290120a28ba49f3f57b385a850a0727e4d834a9c20abb4df79709c594e039a61', 16),
                    gmp_init('0x4876c8db3c91c37b5fe5d5d1dfaf3a09bf29c7b72741ffcfd0f127bdf90c1f80', 16),
                    gmp_init('0x69c090da6891fdd504c1658af0fdd68564d64dd4f74310dacfdbde52a4a905f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x388339f3c31d687ec3975a944f02caae36432bb1f53226a72c0676df78a9ad71', 16),
                    gmp_init('0x85526ef9cb33595045041be9be7eadfcff182b52d6c82224cf09b973a98aec19', 16),
                    gmp_init('0x89b5c36191e2ff291fbb4bece336cff4e960bf35548eedc42d608ee634f44749', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff71339ff4433fe3ddfb4ab8a53cf0a0c1d1f0f372d149c146a32ad41d60399a', 16),
                    gmp_init('0xaf996735c692d468adc3f757da884007f35592e207cd3f47a5e680405e3701a7', 16),
                    gmp_init('0x9f6578e63036e8ef633a4a3245660515d968939f12383c36644d29fe7c608b59', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x446a22d8499fbc06711311553b268ad7cea48757b5c6078f36e9efbdd7aa3a94', 16),
                    gmp_init('0xe575690fbb913d853c1c34ca0cc0b04fa7350a79ed672fbc2a7bfe8f88f9361b', 16),
                    gmp_init('0x6b3a7d5b37530b1fd33da577e0de33c9d4d1fd9cc36ea2dc31be1a45f1b859cf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3512895ddc774bb560f60f16ce5c6b268ad6e01f851a58183a8a8053c4949966', 16),
                    gmp_init('0x8c5f28938a1b15c3f9f9e9d0f88a4724486eb12a5d0f18e8b8108f5df31af53', 16),
                    gmp_init('0xf556123fb9d97a848d23ba58785cbf36bbd08b722afe7dc02599c53588c3fbd3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c62c0fc8c075c352b186cb0e2597bf3e9bb453776c9db695d0951bf6f82bd07', 16),
                    gmp_init('0xa0cf112415335116a0efa400b65a7c3c3304fe2f049ad5d3828ba033d1c43b1b', 16),
                    gmp_init('0x7a71506da4c2f2429246cfd9f7183a4a4e01abe5af33d885dde5b25404bd9f4e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc86f7e862cd8eb7ecc59c342775050e000958ac320e5feb9586e29cfb28cb562', 16),
                    gmp_init('0x595b8a9e6e4db7d2f6eb5ce0796a38e4ee03987ad2857224a8e93220b711adf0', 16),
                    gmp_init('0x2b3e555a56c9cae119cb0f70f0f3b798b35cbdfabb301c9d52e7f71fe5b0ef4f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb69aeead32c27bd2cb266cd15936973fcb7c64640baf20d9009b6efe60b195e9', 16),
                    gmp_init('0xb46b13247550e63d15f59918a2c61e1edad602f51ba7996abac4c8282d7a4ed3', 16),
                    gmp_init('0x2c9750b2c88179cf63aaf4c4c0bd8a72796a0e5c490119d25cfdd521fc5e87f8', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7922a1ad7eff40514115efe1c650ab78efbb76d185ae3862c07f78d97072d04a', 16),
                    gmp_init('0x6ae7e2977fc9ac91b6fcad2072807653fe1054350a505c38b61e8e7852d3a83c', 16),
                    gmp_init('0xa0e242da24dddd13180eb11af464459a4bd6b2c575029379a21f052600775abe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1365519b2768dea5c51b17c82d08f52b263e36891f7b76b953e0d354ba4366e3', 16),
                    gmp_init('0xff0a707dca8e733f36e7c8a969bbc7126fc920ec6040b16ac44b1df172eb9ba4', 16),
                    gmp_init('0x55a107bf0fb1190bd875fef7a9e49f5ac5ae40b921b8b125671c60021d1e44e5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56acb469178fe18f93d91c8ec83a8d1fc849613c8a7e1e779eef58c18195e64e', 16),
                    gmp_init('0xd7399e14dc073b8fe24c3589843bc7ef2863504c3647d4b0b76cc450a597b255', 16),
                    gmp_init('0x1c7c407fc571bb5f0e8cc7cc0bb8c91db3233ad27bec34016cf88997fc222934', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa75884279eca9395826207fae92b2207ea4a5b596be2840b357d3984bab9b23', 16),
                    gmp_init('0xcb0b75e5a2975863e84ba0165889235242bfc50cb3336f3c7de2bcc3871e5b1', 16),
                    gmp_init('0xe526b7eb639a62c72ed3dd50021788dc8b7184961c04c8e62aed3eab232390f0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45ae73ab4f366e5900f060781e60456c6fd4b9060222882d88ed95a345721f75', 16),
                    gmp_init('0xd672cf97be6d7679f2eb0756bef022e32abe0509f216a9ce1dc3fa65bbe349ce', 16),
                    gmp_init('0x35e7e0d3b82c8caaa4a7ada861170831a5df213ae1bf85a8a4e09ffc1b95b8bd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bdc4fd2411388f3859f532387ce646e67399a284dce85d4d15a3eaa5f086f6f', 16),
                    gmp_init('0x202a61163e733e41ee91422add487cd09be3cec4c56c8eff360cb037f94c1912', 16),
                    gmp_init('0xe4ab356f62c9ea62a5cda1de460ba265b9a28035b342b00a0421db91827a529f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c29c7f4005f0320a1b721082bff35f19cdc7a2b89389b70e112ab48f6e54714', 16),
                    gmp_init('0x8fd9c876dee0717f9c4a84428f64bc87f1dd80373de9b417c04c3da035e8c15e', 16),
                    gmp_init('0xef05f9433b881b21ff1bb3a0819bac866b87c4887def43dfcaa75c53aefdf5fd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46e892e1bfd26469366089bce01a2840fe5e73d90269e2798a9e6d1b26ae0e2d', 16),
                    gmp_init('0x47e4b7081a993e0ba8a9531fb73161ef829313565d83db72be5a8da39f97af6a', 16),
                    gmp_init('0x577effba3365c881427f13ccb2012680950310531c44dc3e0ecd144e6ab77478', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d810cc4e93b7bc149f82b78891388a79e90fc66cd80d9e99a92797ce60d8560', 16),
                    gmp_init('0x25cd8f0dd0504dd01c13bfaeb040fef39607b56b5fce7b085e7dd0a5d7fa57a1', 16),
                    gmp_init('0xa0a2424010bd0c0fb7ed42d4e9761d4b14a1732648ede8d4711121137476d830', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1935ead9b0f387f59a6c86d54dd99acfa7a110eedca2c13251875c636f07049b', 16),
                    gmp_init('0x47c3e27109ac5426b4177b311b51caf027fd55c452679cff8fdd779953d71750', 16),
                    gmp_init('0x5ed8d9cee54595baf633de73585d8d348d588384b9784572583ebdbcc0babaec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcc33d6d9695caeddffe454592381ded190b7333662fb91d48e66a2b1ff8936f', 16),
                    gmp_init('0x1ada094711607c11915995e50df9f4a99cf6870b1a45d758681b3e7e0e794219', 16),
                    gmp_init('0x224bda437b301e05fc959361d6d3df1346a548b0d6a2eeae1c5315464c4079fa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf822a64badb0137549ae8886501357e87c2a6f7284070986ef2b7802ddb4a2b3', 16),
                    gmp_init('0x96786203e5fbc14fd27ba7112412b29d6d33718cd6e24e2d148474f66a96abab', 16),
                    gmp_init('0x40798bc48e55692e55e47e2339f3b1ae944e77c4add97920fec4e643acd59fb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x174ce09a43a3369fc7b9300a74c3c6dcdfe0c561acbb6a3e1c08bb56cc8630cf', 16),
                    gmp_init('0x6ba59208eff33cbfe472e483f543c26e52785742e5752dc2fbf945df058eeeff', 16),
                    gmp_init('0x441fcb66afb4f73bfa92f5ba6dcc7f1cc54d2617a886bc0fa2f04fd2ab5b1a9a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29edc70b44276f8bf105902bf1eed9376544224d94f1c21be4de80cc8d03a6de', 16),
                    gmp_init('0xe3f33e0212d3dda654e80b07a291d9302678038eb3abde2fb3b3f98216cf058b', 16),
                    gmp_init('0xb0a3b30db618810df778e5242903d0259538a8c5bc9de53653b34f3d61e8a4c4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b85e970ca1425d19a436625902fa86bf84bae9316a68d6f802a19b78e57dd6c', 16),
                    gmp_init('0x8756b4494c7f9479396b908c61c589c580434926bc30945eff73280ea2113534', 16),
                    gmp_init('0x751cab9f92191c984821e9ea35aa7a3e4c5d914b8af2ff867292531e721c6369', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x57fa95a0ca4c66cdbf920eb7505989bbdd46a4f172f5fa9987274107151e03f4', 16),
                    gmp_init('0x1fe4f0b3226992f8f9b4110d63675eebe8b7a72daa4f23347c20f5e73cb836b9', 16),
                    gmp_init('0xa27b578872f705dc670b1c1e4a18b4c78a42a029bd715944104e298b97baba68', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126a8ca0dd509b93759c5e97b4092574128ec04843451ac3ffae91fadff95a5f', 16),
                    gmp_init('0x4a2ca5735961a7e2631bda73f245259c77eb8f0c421b8f22d54115059dc7b07f', 16),
                    gmp_init('0xd3cadbfa0913a9b8603d6df0d7085996c0f182735ba06f17f8c224ec8c922cdb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f336c5683019e80b9b9bdc757872645e1ffcf3d0112a7a0122c7baf5cd59f6d', 16),
                    gmp_init('0x9e2d9806fc8e4523602320426ebad3398e1122e06682745080aea99df3b39151', 16),
                    gmp_init('0x875e78d0ae62a911fd1c3cb3a39665ed366c9f55b26e5ff05076adc124e8d55e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc47e502eccbd3af4ab6d62930cfb80955a59bb8aa3fd55fc4fa68e855b6ddea4', 16),
                    gmp_init('0xd1181c2946d3abf1613b56bca6c072f07cf810cc0befb5cfff0e61e26fc98ed9', 16),
                    gmp_init('0x48f2bf5e791ab3d96f8010c199869201b682a0dbc662668e4c3b70effe1f9c7e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfbb13cf8790c9adb356d2e28f49636c31cbf55dfd894a7c1fefcd949a202736', 16),
                    gmp_init('0x595ac2c61c677fc0ffaad8fa1aba49b76d91857f445ca90dac902e54f9462b5', 16),
                    gmp_init('0x343bd4095defe66a52c054b6ea8ce2f968cc634f2161bfa89f7b7a0b2f6d3f37', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77479e641a4b421ae2ddf31c134a614544bdee7e063cff716f42f43462779f54', 16),
                    gmp_init('0x4d9bf7bb8c10598d9567f3e59a12200df905a0455eb030f4a21163bf08e3cf7b', 16),
                    gmp_init('0xc57a9ebf2a54036865cd5493b5ccc9a3581f99d9d8b102c823e2b5e3eef9580c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x714ce1842f3ee667b8b316b7544794f3836505926e4641a7598408740d9e703c', 16),
                    gmp_init('0xa512f535647fab067c7851735ea74b832cace094ff91346647080e7312d38de3', 16),
                    gmp_init('0x2639ddf9e4aa8c42feb108a11eae4348ebddc9336525b4a37545d001f0b5bc08', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3266af40392245e09eaed280315873c9699628dd863484164550c1793daac1e', 16),
                    gmp_init('0x5b1496453b8998c87d197c3de28e4b257747d891085cc8ecca87ce81536c234b', 16),
                    gmp_init('0x1f3852f2655f43db5d91259007491a31558b5be97e61a7a60f751a9741bf0303', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd06bae49a19987e595e32e03313bee6b4bbc1951d7de5780ca214cfb095f14bc', 16),
                    gmp_init('0xc284aa023d74eadde4b08ed7b03e835d3f26569b5325c5c19a05a8697741eb29', 16),
                    gmp_init('0xc76c23e863fcd3cd833edb8208e13040a93633bb94ad605927296e0b7622668d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0952fedfe344c0fce5c5a81c53bc77e938ea3d80232708db9f7062876cfc2fe', 16),
                    gmp_init('0x80cfd826facae68ab9cb6b59d757de5a7bf744bb48d43a88978350d0a0b4bac8', 16),
                    gmp_init('0x4b18b024e859c3f8f02819152ce69dbcf5941bd90a339846a1af46663176e4d6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffcac366cabc55c4f9a23e6810990ba91e4a0236f857590ca082109011b47b55', 16),
                    gmp_init('0x47879267ca42c7b8681a1b4e321c1af58659a7970a9288184b8a4f88138558a0', 16),
                    gmp_init('0x983ed996b571eaabad4adc6e0d6184c49f85b1873b3843be55844beab6f10aaa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3c5bc2e93992c58a0fead534bc64397acc6be167e310022070bf59692dea1d3', 16),
                    gmp_init('0x1e872c98e76721c4ace9b73cfa1aac83d36dda9555853d3b9c524d9c08f85dd5', 16),
                    gmp_init('0x76f3aa2f1c69ef91690f9fb336d52482ab9e68189a623885cc62caeb8cfd1b8b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7f795081eae40ee4bbf73e89c49a9de34cf953be5cbd6ccec32690af1235f3', 16),
                    gmp_init('0x25dad78951b20f132de8e15aa97b153f78677a044c1a38cae9f23a0ddb0ad272', 16),
                    gmp_init('0xfa630d516604e99a645e60124c62a0fdddddb09e4739accd9f2e2ee2c6526b3e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1ad7d07d757fc0122adeb4df196071bf83c935e0a0f1dff64b1ca547a92931e', 16),
                    gmp_init('0x35594e3d2d377033d49d9f2da6a9de812b04dcbfb67a66e0623bb1b1965b3217', 16),
                    gmp_init('0xc3f12c36e2e0edb980daa69bccdcd7b2b765492356b71da0ecc2361f89a31c55', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf83a08f24ff85bb55fe76a83520364e8804f7998dd50fa279e14598733f793dc', 16),
                    gmp_init('0x81037de95a623e3b8d0d59ecdf595ca585ce3724a0f1d1602617200fa83d6fe5', 16),
                    gmp_init('0xce8c9e579ff7e62b8f34a8b6caed08b1203f5dcebe9b533bb3e9408a1e143654', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd1fedbbcf73b1e4af59f0f13d2c976d68c21b57424d0a6d5ad1209b94068041c', 16),
                    gmp_init('0xd3ed133f4283bf500a819cd983d1c201e3dc65ac7d1e49da212481f79fd9c2a6', 16),
                    gmp_init('0x78f1f586e6a1b132c6da40358505b096f332ec96d647ff084182b925a31e86d3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda8fa4a7573de6e79430f2b4ad43367fddbc191241a4fee80c2a14147cc9222f', 16),
                    gmp_init('0x6e9c5782594dfd70e3becfc66f9b935514c696730447e93f27a5164fc950c774', 16),
                    gmp_init('0x60bed1fd8c9d750765004772a686562d07deac236f69c26effb6366e240dbd7c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4524a8493b4c58d6ca999d5ecdb012a6ce209c6d5a3992315415ae426f9c1cd', 16),
                    gmp_init('0x2712bf26f8ed204f9f1aab7020dbe3cb374b38c20d765202ea323b939292b1a3', 16),
                    gmp_init('0x17373076d44b4b4a00d9e5f57cae3283192a1a153440441a283efdcf1ed23e38', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bc0b8a8707a81f6118e556d4ed3b7431c0419c808f9dcd0f715bf1a68dd4529', 16),
                    gmp_init('0xab9fc80928bc6edc3ed0da159f791578aa112efe0e7ce80bac8fc9d3c59e5d9', 16),
                    gmp_init('0x85d64f09ba78b0311f90c9d768c24fcb11e6fe82fc7aea4d0df45c11b895146c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x106a5e0b8b59a476491b8453871797dea49fc2d06f2f4b91ae87d5ca306933f9', 16),
                    gmp_init('0x1142cb6d98afa26cdf312e181e5dbe32fe1f66d434ee94d2ebc7196caf9f9ff0', 16),
                    gmp_init('0xd757fa6a29859ae8b7d0f03f23aaa42096c0e09031180d2356c0f2d2533120fd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfbaf5af982e1a25dc209dcd228965ca2c4b8c106038e87229a3bbd8f49712140', 16),
                    gmp_init('0xb1986459044601e28e0b6e85e51365f61e41655d1136bf2bf4cbf1b758617e4d', 16),
                    gmp_init('0x951e0f82199953b4d27d1b87bd36e41f353ae36e4738a05e45f2e641c3fc4e1c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54f75d6dae8817b6492f557d1e1c5783b1ae8c4ee2da35e49d5a7249d14664e0', 16),
                    gmp_init('0x8fd8e30f9c8038d992752ae5b7ccd82e3cd93ee2cbe04689148bcdd948eeafd0', 16),
                    gmp_init('0xddcc477bff393cbbde551e1a579e32e6d53ae542f209cac84d9168496ce1c0e8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x417b753e04f16d60340aec913d80a92679faf0b62ae00ac4c2f5ebc79c208213', 16),
                    gmp_init('0xda934bd580de8e7cdb1bc58a45d81ddba3a144b059f8c199422cd90de8ae7e58', 16),
                    gmp_init('0xf548ba91c947a13c5e07e2d2597abecd245a299a5ed42330f05a2dff18f8547', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x411375fa80144b87f15a45ee65827df99b2637156d932bc703ef67eb099676b7', 16),
                    gmp_init('0x7888fbd610d60f2d76b5d1908f84b9351f604afe136021a32d069efd9e575e0', 16),
                    gmp_init('0x4d88e62229ab313d29d3ee13553b89a5ad1a0eb30b17987f4faa044c64e2cb63', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31a2f37321b395f2d6125af7daad31a6644178efc179bb4682baed2b477cc59e', 16),
                    gmp_init('0xa0679a27a62d13f6b0c334482a3c606440dec5a79bcb7f926e60abccc22eca58', 16),
                    gmp_init('0x34ec04f0a8f5ee891a47567fc3ffc37cf5413a4cfd102e430a025e62ba706b32', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x432745ef2fe1d61b1e682feb5810dbdeac5478c60707c945a016de59cce9d974', 16),
                    gmp_init('0x78cc6ec179d8b7f42e00c87f0b17eb1d946e2e2c33c468dc1fd074f7c4cbef39', 16),
                    gmp_init('0xe8176b0c47b5ca8710b7a294e32cbc8ea1f9f7689f82f6b94794866c0654b622', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38ca233f28889b86170a4fc4a718565983ef552c9da0c5fd28b00149ede60ba8', 16),
                    gmp_init('0x98c1eb07dfe3ef10f4edf0984206fe1a8a280304529eaac41c9921f270c0acd6', 16),
                    gmp_init('0x5d2cf1806333fd0aa6df4ea3a871a5266110b79b143585fd2cbeab1627087698', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea0856629ccfabe680a9721d0d91d18fde6946111df84dc4d3e051b17c66ce5e', 16),
                    gmp_init('0x3f84497ea6aef069a25a822051a6f31901e53fe8c98181983e1e222b9cd827d1', 16),
                    gmp_init('0xb73d4952b4f6f0959f9e6850cd17d5ea985717d1f90fa0a0d635f90dff7b74e8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cb995172f78a8545e777bd71eb5117ac6976cd30b0e7914221c92467e7c71c1', 16),
                    gmp_init('0x41b1aef95dfd29bc2fac48b8413b4afebe64ccb17fa45b87cd588f26ca0814e6', 16),
                    gmp_init('0xa6bb6e051f081f7dc43a6ce18ff19937dc65c83448006a24174c672a9bfbc3fb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30906142a785b8acc17f420cf0bf14ef43f234dbcdbc2292663ce8bc10213b3e', 16),
                    gmp_init('0x3cb1edad85c2600be94a695430440a066a5e48aaeb4d14a507bb4747c1fb5a77', 16),
                    gmp_init('0xbc7efba34151242eef6a33ecf30e2cb6808822ff7c07e9d1b37dbd59322d79c2', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x63a9a5dbb038ce2565d510c8de8bc6d0317020689d2105496fe06ca02ba4abdb', 16),
                    gmp_init('0x2da96870535a65e4328a87a1b287648c6ccec45af35af8d653ddd02b8d188e34', 16),
                    gmp_init('0x52bb836a35b89b292dec67eae34761c2ed47fbe5236e057c1513b7a4759690fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b73cc20f06a6503b7fc8e274693ca39e581c07c245b5b1d2a7854c52407047c', 16),
                    gmp_init('0xfce6215aaeada2eca0af4c1d18da507e8d21e4149ec1261e8112ae227a2b7a8e', 16),
                    gmp_init('0x289a22996fb54d55de6dbd33e14cbbd1b9b6cae46e2fdf1a8cc6f390a2dc13b4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d47c3b9c43e2dde088dc35f082e9cde6d649a459dc4e23f9aef71f8173cd34b', 16),
                    gmp_init('0x3ce0ed7f27ee3b86bccaccbe777c10149e9edd6c41029fc49be3ff361241c4b5', 16),
                    gmp_init('0xdee1f2154c266900bfcee555074e30650105170603fe6d772861017434876133', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cb56ed64b4f7059e77c845766d336f1cd1cd51f5dd949a1e8509968ff6933e9', 16),
                    gmp_init('0xc5ad3ac8c4ac941e19e041d00ca2229dd265691006caeddf2d134ef3d3b6cb06', 16),
                    gmp_init('0xb529c53e309ab8cfa4b41ba64d5e5fd033b4d14f5e4f5343a63ed6623a748cd3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15cabead113cca2ff55eb02ea1b0b2dc4b8f386f21e2d8d2e44465fded188e97', 16),
                    gmp_init('0x9002d8fbe6c4bd0e64cc0be1b7bbdca231698dc76aa03a9cbf58d1d707ff8f43', 16),
                    gmp_init('0xb18fbabac22e305a64271a760afce4a23d2b27910bba486de80a5047bb08927d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fcba9577d06dd713250e5541cc7e48e5060e8b7afaf1ca51fcc2519d85a08ae', 16),
                    gmp_init('0x95d6ec2896ca92b5984794ee6b83c00143b7fcdb4eb9c258f773c2635fb946e6', 16),
                    gmp_init('0x7675202e98272d93b7cdfde9b19c91312795c48f0edf50716c01afc9b6165429', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbdcd7548b32abfa8c28b2654c4a44c5c281f71cdaa1a9b63c4718e7b953c6ac', 16),
                    gmp_init('0x1dae49722f7eab216146d9de9fc0def2aec9f96c1a0774d7582bf0866857affc', 16),
                    gmp_init('0x1557ce5512200fd52fd78866b47382960ae8b9c0a024e682274c7322073e95b5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5fbb2259037f0bfb675233a68b4647360116e2f2e21c0979571a41ffd7d36da', 16),
                    gmp_init('0x7aa3783182a9fa0dc71f5aba26a86f473403e807a6be70cbfa069a9de5eec9f4', 16),
                    gmp_init('0x217655eb0f428543a6aefe2ea6abcd827e437017d3d7d6f6dcbaf34b7a13c6fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bed4333802224ac7d60889eff862ba00833d196ac0a2cad24b6a5043a3527c6', 16),
                    gmp_init('0x3b030aab199a58cad9b3a0eb0862b7bb56f5963fd96c0ac74e54319187bbcd49', 16),
                    gmp_init('0x38ff04bb4098769c2bd9dcb97ed255e0a1bfe1ce83fa09ebd31408297c0d0344', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc619e1c5b5f5f8bc7b2a14e3df90e0db8a94f16e2508a60909988be1c7d95517', 16),
                    gmp_init('0xa29e9f3576270ac9725fcb159e5b33cb6763b9d737e6a5344cbf4c394d7e7514', 16),
                    gmp_init('0x61454bad68a47105bb9c05e2304fb7603c20e09971c349ca728d965e0811aec6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d19530d9459e021c6781fa9c9c6a39e1a20043ae51443910b9e99142069e275', 16),
                    gmp_init('0xaf3e722603780bfc4fa7ad4a6f6ca5ef61a5f43df52c64efa84070c34daf22b', 16),
                    gmp_init('0xf52597ccfaf9583219c8b1df6c6e2f342584f2ca095437af12a9ac3d3a70d30d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda1f42d923df668ab12d4f3fb2e399e1c38489c36fabdc27b56d06a1e4bfc5ae', 16),
                    gmp_init('0xf255ec5834b720a37aecde01c04b7162bb11f109b3d3380b94ab82862e5742af', 16),
                    gmp_init('0x9f9698124e2518c940fedb84ee42253da25452582d2ef31d5f93866b0e8ea8ab', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x785fb622ff4576b409d8961ba3838d7cba206e1a5a394790a608acebf3b0e3dc', 16),
                    gmp_init('0xa353260db0f9e86ae2882ea8b2d072fb4f90541633b8b2f8d12d2ea018df3b45', 16),
                    gmp_init('0xbe08016dc0a6cc56f98074545c3437b7c6019981c2d070d564f8fed4fcf46ee8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x371f33c3221b34f8280b35d03d85a58d5c4ca0811382878818de2f21f3f9134a', 16),
                    gmp_init('0xa6a606c1b416e1ef6e3032ca57b24b6a106eb4c0766058ec8458bec6622c626a', 16),
                    gmp_init('0x76db57a3316c700fc5a57176252813fd1fe4cce20c2ae9d3099685eb931898fe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x391323355f38bbe37b3222dd9b21c945304f1132f74211c88b5d257d1ec3056e', 16),
                    gmp_init('0xa68b29e21c3db7aff467b6ed239c240226b3d549048da989144a21e8f8e6184c', 16),
                    gmp_init('0x19ba06ea95868f2372c54ec4944b9a8a9725759f3fd90185ab470731284a43e3', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd33c5187a6f68081f02cb454aa2baa548bf182df6fdfc0985a7177e5e70c3e0b', 16),
                    gmp_init('0x98637fc41a4c41275ef9048973d90f1e10de0117fd21b53aa1ca5b5feccce39e', 16),
                    gmp_init('0x136ef08515b03c69b10c9bc246b23ea1ce07daec3179d48c013f33f699ce7201', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae57addba2bcc47aca49a5a83bb4eb3d3998a58a09e63bc16ec668175d97059', 16),
                    gmp_init('0x7be1c6791db1cc3cfb10e745d09580e78b226e59bef58a7d57c7cdb0c7ae2cb5', 16),
                    gmp_init('0xd927e19a72edd91eb1082f9e9c7381e3e949f3cd59e74dc203b2b7b7e35ef57c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d44baffba8c722b4916b1d168a0e3fbd2c474bb267f49d0ff7c52f2d5fb6359', 16),
                    gmp_init('0x6787732f6483dd4e67a0ea15f67be49ca6d5f3e4cc61d97e03ccbd96f2e2ef9', 16),
                    gmp_init('0x56f9be113668ce9dcfa4a9d276b139d1c7187c027890a8f9d01e739fcabf0d9e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x916e77cc5396ca44d203919a57490bb9bd97d61da207aa2249bd677d7a6f1459', 16),
                    gmp_init('0x5d23f7b199e911161f3702bba293c0faa2db40551f120798cf36097974123835', 16),
                    gmp_init('0xfa466ceab3641d587849f31cef33fe5f15836467a140931bad8194574bfeb83', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33ecfbefc1ec783db1d67ea6f46fe74ce8fc89b3ca6ba68233c529dbea97d7c0', 16),
                    gmp_init('0xa35f8d4f6adabd45e92b825c4562bb4aa044a80b047bc377db5272089794eb52', 16),
                    gmp_init('0xfa29a69893ca61ad611cfd362769cb4d4adeba4cbf5317660baa382fc24c54c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ac1e47cc3f7809b6d58b40b4abc66d0e6e4886d40b461dff39eb5dcaf855043', 16),
                    gmp_init('0x1e324fcb08d0859c482fc969522d11aedce22f0b4403689bec11f4cc0ca11ea5', 16),
                    gmp_init('0xb58abaf143b98b05cf550af298a320bed5b5427c2f743598474cc06957b39cfe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63839a8d5fa30b79470208e31d430ee3b27379138771e7bdd5db034382356580', 16),
                    gmp_init('0xd9229623dcb48c2d72abd1d35653af4e926c337f0e8538eca3ce3792abab6166', 16),
                    gmp_init('0x22fa3b250a110bb5786b20158e91ec3e5f69c349bc51ebbfc87abd020825d42d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c75cd805fcdb93f2f79c28281f91c5dcde28627e533f533630005370dbc54df', 16),
                    gmp_init('0xfb80494c90c43c90e280db29131b2ff2a5aacdd4378d87a32345624e5c09c192', 16),
                    gmp_init('0x2dc11d48bcff039d9815196495d2b27b67f247c0e6b4a0751e356768af967d70', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62b8d7f2c6acf888b4d66c6c86c2337a979e4180efe8c9e4f12eef2e2e06f6d1', 16),
                    gmp_init('0x3d01cfa5f28b64bde6c0e0b3b0b222b2ca2f7cf124c5973ccc318996b709a619', 16),
                    gmp_init('0xc0a65cc40013eca19ee4b6a41a4a2e26c73ba5675a6ba19de250fb48b7163ac0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32f9b5a31ffd2cd916bee0f39e013e905d9de23aafbfabb367e9894f4b9b969', 16),
                    gmp_init('0xa4104720a186a77adc0a996526a1fdd1c95db263ab37aaf951f58afe42462702', 16),
                    gmp_init('0xc992a594732408ab05cd258fbc7014fa822f0267cc688151edc334ab99c94e52', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee869295046a335a11cf6e1e211a1b4eaf6d8f3ca23eeb5c944407519829ca25', 16),
                    gmp_init('0xcabd218e55f0704bc12c2299600f3c54a076d0559e71f5c94aafcdf728478e41', 16),
                    gmp_init('0xb81450af466a4b09c3145455007fc51d3dc1e375f0f8b98f45f14f9c2e9e8ad1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9833eb48d611d149c06ce555f094d047388702d895719e6bb14961a2a2eecc6c', 16),
                    gmp_init('0x25c63883f7dc769f22be57fe1c2572d1308206ccba54fded90bcefdf89385dba', 16),
                    gmp_init('0x1832a92ea7d26e0178de4900cdbaa7cece771aad04565d2c0d31252b68de2850', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26db4eaefc934a90ab361b9ac66f09887e91887be0d2437b30e7dede23f2bb15', 16),
                    gmp_init('0x9a5a0ccdfa0a5de674a10d612200098ac9281c438ab433df51e92f0d49218f21', 16),
                    gmp_init('0x89ab0d529a21c80797e1c93efd78288c79bf8dba1ef14b501bad29c4bbb28266', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcdeb53b095681e257604960a141fde9ef6de6425aaf5b70306ab54660d0427c0', 16),
                    gmp_init('0xcbbf85e9b489be3d29cd77c091c4d96c8e7e1fecb6da0c5710be9baeb48c8446', 16),
                    gmp_init('0xf70af95eebb30d8aa4e4eaff8afe95ba08faa11760f914a3662c618de63ab498', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1bb0564c2f03907c966ab06e3e29365b9e88611aa4c19cf3bdb8ebac4b2e27d', 16),
                    gmp_init('0xdfb0af2bf464f61d4b993057348ca0279d36982b3979470141330c0a876679ad', 16),
                    gmp_init('0x727c3554337375080b4b8019cf820eca80e9b65d1521ca9f093fdbd5b70bd101', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x59b011e0b4bcba0d5a8ca7952eb5326b7f6e262b5724ce1e0574b3f6f751ae11', 16),
                    gmp_init('0xe89679c7d58d1c42a461c25000f4bce1d470a121bb0218631bad65f0d8c189c5', 16),
                    gmp_init('0x80c4c6ffaea60aa00dd90879ee867d659a0a21d5e9d8f6784362819b81755293', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24965723196e0e1300e51eb9ede6d723a8a00655f34cfd9b1d502d2ff3108621', 16),
                    gmp_init('0x49b270757e645ae054ec5cc5500b59984a32f7f131d05bbe3411ec78e8df0d6e', 16),
                    gmp_init('0x724213a4ee490c9a9bda721f6e1a2f8fb9579ab5ef9624d97a94f5b909a60bfd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2030cfaf82228803a48ece27f3a9d483afa6e410314e473b1bc06c9f711fb6f4', 16),
                    gmp_init('0x2757aaaf4c32128580b94f1e0faf0aec1fcf100a38ef19b8adbf5ab7909fb538', 16),
                    gmp_init('0x9fe685d5aa70d258b4638da4b6f6b9bafc0770b2a2651f16340199acc460f872', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe73391d4911c4f6d2cb7eaa1e8614bf704c90e3675e4aeccb04a507656579502', 16),
                    gmp_init('0x710bb14e86a59e80ac9515b6d839f3337f27e162dab7c2d5fc287eb26d202778', 16),
                    gmp_init('0xb519b66d3d41ca16e779ff6c312d35b278e1bc04611c58941586e1fb2e905937', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x591f3ec31fe9a2a9ea82e2b86597c6819dcedb197e8ad56f407c999e66f3df68', 16),
                    gmp_init('0xc11f5ccac1ea789b983c902763c3533bb0bb06436908a531cb3c12285ad3f782', 16),
                    gmp_init('0x466c44d0f1df05071b3013bb2af0201ef3f2fe90fd2acbb9118b4f7ae6c3c03e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x535bc80cd021ff3b83fbc292b35538a2cf7411525bd97ef87eab25809beca2f7', 16),
                    gmp_init('0x22e6051c9ea1ef2e48ca93787bbe7d50edff71d4ddfd82ef24b135e355ab13f2', 16),
                    gmp_init('0xec7921bde2858fc6e259062057f8831385ef7148d6378dde1c6f69ecc7a0c8d9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x994b9dcd4000f367ea89c3f6e070b35565f90706d2fd71b4397967e3756406d8', 16),
                    gmp_init('0x64ed26542826e104c24594f9dd8ffada7837c427623bd4a394dd2c3f4849a5cd', 16),
                    gmp_init('0x2b59077c5f6fd2b92fe1165b8ec901583b6eba4e65181fe302e6e72f09d6f55f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8ed73e0e6e87d5b00ee08e4c08844b5410975751f9927837754271783b76100', 16),
                    gmp_init('0xe21d90f88cb4174a5b4814ba5b8b2392272dc3500dc53416fdec565d9c9f7c56', 16),
                    gmp_init('0x7f6af7fd772f85fb8233989bdae1a39e932ee472cbfa07a4fc2d8039ff6e040e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7dfc15918d7f3278494ae7d41c01068a1d09b8abead62acc3bab0642d3fc611c', 16),
                    gmp_init('0xe3781ccd2afcb8fd894c3e92ff715113df0261bad33c179aec8bd6a3efa4db3', 16),
                    gmp_init('0xfd9e247e356b46354684fb3384150ec42b42e8adda977c5bf504582816e0e000', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c282c9124fa5b5d8ca803ecff66c6bbd65f54914b9475250610737bfaeda2a1', 16),
                    gmp_init('0x62bba44efb8b50bdf0fea14fff3d3ff385d6ca790afd57be05fc9d5747c0c368', 16),
                    gmp_init('0xc46e71139aee2d3990b393c5b41d87e10f0b2098c771815cb48fa20211171d3f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x684b99b19cc1d1f2ef6cc88e26f59fcb1eb2b600e071f427ed481aad512bfdc6', 16),
                    gmp_init('0xc90c25428ee89a6d9ecf185c0d1caf3a766514ccb04b6b45fa7a9424504c8c3', 16),
                    gmp_init('0x792ff4f50024ad2a5a5550a9fe00f12bf78b436899f4ca738253854cc716f466', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36edf45dca13dc3b281690d7a21a0bb6409f1882c9f0995cfdbde11bd18d968b', 16),
                    gmp_init('0xf1aa8b25f991238404502c450697c807da4e20f24b10d0e6ef9533d1145dbd4b', 16),
                    gmp_init('0xc1625314ff918f30df5fec8ee6159f5b15668558ac9de9a43c50c1f09cc724bd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4396a9d54d5df64f4eec39f84274c27dd612220f759c8139ca38334533bd1cf2', 16),
                    gmp_init('0xc5e34f520b81f35eea33c1f4cbef9bf8c6e5921ff4f3b9351362e466fbfe00c1', 16),
                    gmp_init('0x608570d6ab88a2ba9cc058184a56ffa00868df13e42081ae45c35291b8269fe0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc000a6adf7c15a8e5899c20831a959d7537e2450b4f05fc962444c39cd31baf2', 16),
                    gmp_init('0x521dcab525eb3ce0d51bb9dcb51886284da1e54b59d3b20423003f1e28377add', 16),
                    gmp_init('0x1f55a9ae4917f52e7577fccfc2d9f6ef73236fd370f07fbec0957aaebfee0c6b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf34d61d517da8dba3acd2fc0aeeafc3cee2579a88e64c20ba313b0078aa18fde', 16),
                    gmp_init('0x31546c7cb43433d331f28c35a514d941926f1b94e8c565295abd3a4fb37249e6', 16),
                    gmp_init('0x74f0dcbbfb4f0cac1b0f74f19efff791090ad4b6cd50239b498682400ae3779c', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xee7129d1a8add19fee2e8d6fc7746c6a728f334def1feb5d664de5d5938964eb', 16),
                    gmp_init('0x1000368b04dc120252d86c9dcafd341d473b80f5258664eaae7b59101a6f84a1', 16),
                    gmp_init('0xf41629171c6a97901a95c9a0ac07fc08e72d2ac289822bbc5311104f7770d828', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0f2e7c9a21bdf9d858d6c3d72710545b85e9af5960ca9ee09e8efd3561b9958', 16),
                    gmp_init('0xc42b620cf736d96f1ea5b2dfd81749affd9388c887db84e153b4211b44647043', 16),
                    gmp_init('0x7239ad0897f84a6408455f258d5a0be7655a655e517bc2aac3e764e291f82f16', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2466bd488c91edb0fade287a3ea1bfa01d42aa7203619f59de28fb22a2e01f15', 16),
                    gmp_init('0x2429f6ea512c6c04322f47d2aa806fcb2bfa6e3082984016aa24aa9195bf2c69', 16),
                    gmp_init('0x91e5e985b2e3450ff322da136eb970e0756e11efdfba981f2426df1c388925c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb155f1698f9b936b7edf61493698409190c104689241150608566bb5792a2d8', 16),
                    gmp_init('0xfa44fb38adfbbef8e34ac3d16ae3e5a56070704e2463384313e751be4c5a9bf9', 16),
                    gmp_init('0x2b6c31efb6640d149064961f345ce0efeea287c4f3da67a8f1955b72645f5771', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fa37957844ee487a3a6650229c76c3d9d5c3cbbbb25cfbce82e707116a68b36', 16),
                    gmp_init('0x4c73ec14bfcc913a6c1bdc283a426861026c41b43452961204c4ddef59a26f9a', 16),
                    gmp_init('0xead637b7fc3c9f728874bbaf5510a52a4cdea84aa9d69ec9ab703340cb25969b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78befa97dee92866146a05540a03d5fa365afc0151b0f318506dcc5f3583eda8', 16),
                    gmp_init('0xee9bff01b7e11da16941415487018d8ed2ffbb445378c756a796bfab802378af', 16),
                    gmp_init('0x84248e08e7bb8abbf0fd379c280f58c105ecd2174bb4b70642449f38e5d4f2ad', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd28c8c561777ab7f19a426a428993efa7acd87a7e6ab71d30834b6ebd4a5b503', 16),
                    gmp_init('0x51af2f8c72c0dfb24ac22c85031ce1c71c31a996fdf043eb743eab3b68e177ce', 16),
                    gmp_init('0x76e52433307bf175fa3f3e7072f89d30342ccd19ee480624cc0b7d534def23a9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d84bbf2e14045e800a0f9c98ad20d46b5bab70bf373bef434f9b40ebce52889', 16),
                    gmp_init('0xf9aa0fac4f50aec3e58982f65af29750eebbbb623194b7f8d1e23ccb23448569', 16),
                    gmp_init('0x949c6ad3b48025a332577eb20f71d832b8daa29a46f14bef3dfd2796fe68dcd4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe24c21bef26b51d87dbe7588355b33b88f9ce682965261122855202272c26b65', 16),
                    gmp_init('0x18248c85b6d14547cd16ccde5cd68dfd9a235b3a14e78128c9bad629fb9a122b', 16),
                    gmp_init('0x9d3734bec8a25c64bf9e3176e83bf6e2de38f2a6e232759152bb560e43a08fe7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x628a690a9ffbdc0fc66f479c0c4cac2e6ea7c8a0e755e54b2ed0f00b2e07491b', 16),
                    gmp_init('0x50d1645a88089ecc6652fa0b38f920b8a92d96c0bb705ee8febfb84eb826c9d4', 16),
                    gmp_init('0x55755376a59e6c4e777b867e7550565c0e08f10e88af950ded043b4a04850bc3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ccda391db63fc66a71ef0ef0e8fe3b0f8ab9894ea722d112e998d31262fb985', 16),
                    gmp_init('0xffc0a8a0238fbed5fdf33800852c97fe9ef9c2413d03c784accec723e1e8bf8', 16),
                    gmp_init('0x44b6427f0cbfc622c9be3f168b9b7784294b5350309d9c2c6ba7ab2485e0c28b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68e98a9395b7e8d79d07fa690ade64a86787c74cbbd8828f16f4ca68c4ac3ddd', 16),
                    gmp_init('0x677d89ee8c5bdac035024e549595b366c4f3c608e9b80b958f1faa28988f6046', 16),
                    gmp_init('0x7041bbb84d45120d2f814cf8ee019755fb6828641f07749ab6d12a54682cae9e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f9e8ad05e6504851757985e863729074af43e5f6329c5a38795e4fc2a614d32', 16),
                    gmp_init('0x8e8ca165b84705353e80bae4d12606b407f3cfcd76a7b47d084ccd215f8a8ccb', 16),
                    gmp_init('0xc91a4e91cf1e0b17956f7e1fc6e315603cc70d4b414cdcbe4840ad11f95e23fd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x873ec7e1f848ccbfa4196cc6951dfcc5e0854f759031bc4e55a895edc2618bcb', 16),
                    gmp_init('0x1a8ae96aec83286208ada406127d911058beda9b4d8ccb6cc07e7778a08d2c78', 16),
                    gmp_init('0xd9a2ef51c2ec76c112a728ae03245c647e1f335f5f804c9e8cebdfb3eb33cb3d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ff748ee87ec5c8948b25b9f9960133a0508fd22f9a7831be7e37466bea1f332', 16),
                    gmp_init('0x9342fa7cfd09b43508ae4cc06efcedaa5a1460d8a7ab3edda20df9411cd092d3', 16),
                    gmp_init('0x4fc4acbfece375d291b377c6b6a50e3d2d972fd7b35c1d7fe74a4a449a95c042', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3456b83f97743f803af6c72e54955d5b89a3b2b03f09667d800a1add4c07ec23', 16),
                    gmp_init('0x91f99dc0291389968c2abccbcf2cb33096790703eea70475ff66a9b9cd994ed9', 16),
                    gmp_init('0xeb6c58a8814c2b2f655cc16259500fa0afdcae659bbe2658ce8414b54c12c0cf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda049041be701191ec16fae16aceb53295fb4f6414a15685b1ed368d297b2c3a', 16),
                    gmp_init('0xd2039a57ea5b1f8660a05f666756d30f5c1a6ded125d1eeb3345bba94c9e4c31', 16),
                    gmp_init('0x26d90345635b4d594e0807188666d4ada844e20499da7db3e1c89e1537008be5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f684f0fea0531aa9dc08763c1d385517f82fe7a7d5ac669fb8467a8adc49ba3', 16),
                    gmp_init('0x63eac045574d3c88c75c76c8ec694ad098da660bd50b9924c8a4783dfdbc985c', 16),
                    gmp_init('0xb12629a30b34f5cfc30aa41e064b8e78d4adb84070dfa238b54d062216e6f892', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaa177f5dd57441eb70fa2ce8afcf8ae5c7e4d6df7bc418b6a99531b5b60d7b1', 16),
                    gmp_init('0xd3cc0810f3289d5dcaacd1e078b351f46c3705d57722191f633bfb0c28425cc3', 16),
                    gmp_init('0xf98b0fb0af74d4c06d091c7ce08eb54933be7baff5d1d66e74516b19e3786b12', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46a517887f6226a60386006dfab6f57c1736a1afce7c1cd78d4f9bbbcede2900', 16),
                    gmp_init('0xe54c6f8032ba3e19634e773059f9beeabbc28088ca3fb381d36697b9d893e029', 16),
                    gmp_init('0xbc32ea7c0f38597bbb138d99374c8a20aefbc8782073f3c31712be2fc0afc3e7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffe02e5bdf2d376b7bf501a2ff961553dc363ce0524901b1ec691a91a3064f18', 16),
                    gmp_init('0x50596014b094ca2884b917d4f362d22be78a154eff8aa47b2ab35092d6979cc3', 16),
                    gmp_init('0x151d4d45553b37e955d31ba3cb0d5c6cd6b91d1aa0d0bbedf1048274ff874f3f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc9e8352390fc8827ec3766f33f2616bfe49b9ad1e71496fe7368a5833d523c6', 16),
                    gmp_init('0x754276588390e09415a7c7ec216b52e76215d2f6e7f90d3620c2ed532a1e03af', 16),
                    gmp_init('0xff8c85bfd33afd2ddb211ce67e06e160f6d7af964b7715a0baed7710cd30715b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb095156f54809acdebb79e07dd90a9730147a5b38a3c6a8cd05944e6ef06faf3', 16),
                    gmp_init('0x3a2cae2ed7a7dee010f60a27644cba4794a3c932c412d191baeebdc3987acf1d', 16),
                    gmp_init('0x508cfb3d16ab71a221983c0962d9727b6dcd4c177cf535c830409e69212c333d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bf1f034eeb9f6ef6f2eb9071b3f8be98075d78fd81e34b0c986dd3ad6fe454b', 16),
                    gmp_init('0x56f852f6ebfee869b2a146e0c1a52776b1764a2cecb14a61a07131397060c856', 16),
                    gmp_init('0x2550a2107eb2de43125f8f603b49b70a0d98d49c375a9a9a1ceaf3b606789db4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd120a8b155129256418f588e99b2e635cda8d32e8fa60d5c3ac647ba8aebc562', 16),
                    gmp_init('0xc77989a640a58243d836902a13f61b3dc4245cf1b8ed781c7d085777fef25e11', 16),
                    gmp_init('0xe3530705f6ec7bdc6b7e131c689b7cc222a082ece554832e5885f41bb305e166', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a9fd36d856bb9aa01b7712622566e5513f21b0107c9480441c62a690221529b', 16),
                    gmp_init('0x4bbf7bf574d79232de78051be127ac262e1ac95c33416a692c567604719461e6', 16),
                    gmp_init('0x824cacebeb651ec42906e482d9e3f3e602ebaf4feab2542fcc7154188a555a6e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe813694fbe9176efbd8dcb0db02f3228e26a91a046b60c7a8fdc1d56f798c103', 16),
                    gmp_init('0xb4ac3547f190b12fbb1b1a2992c6aabf5298085b47eec521d6146c8d8e8f73a7', 16),
                    gmp_init('0x27e0a644978ca3564e3e5c36f98aa04ccc015658e8860187a271cc46985fe10e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1979de7b632bb31e1e977dbd1194a7ad626265cfb1a76a8f66984fd3861faba', 16),
                    gmp_init('0x538fb4e90aece67feb716efc19b97aa051efb6eaa1602c596905ced9900e8c98', 16),
                    gmp_init('0x533469f08ef5072dc2f3c42112a49a02cb296eafd8a29db74f4c0a2ea8aa1ec6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87f85e2b96219886ba05fb8a55eb84ac37329152681f289f1a6f96606f4829a0', 16),
                    gmp_init('0x9699ba1283974e6d963d23eeab0c6422ce39f6e564d4ffbdd7b23a57b6024f02', 16),
                    gmp_init('0xb9b7c11370be2ea1ae8ef0502847a8aaa32011558975c2e579b4d355b252350f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8d24b8bd9a6cb7f51b919066818689c8b148ca03fccfc805745ee36585aae15', 16),
                    gmp_init('0x6b17112da1ffe0fac7c3a0af52e340011c1e083c9f350c04605315f64c593635', 16),
                    gmp_init('0x42b464f5699250e2df58e6193b6fda97a2b97264e7cb7a41f797c960cec12b6b', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbc2839d8ad52b03d45ce18e5ff22626176650bbda9c85e5c4c8797590f98304f', 16),
                    gmp_init('0xeba3a207516feabb229d6b74227eca8d9bed1cf4d26fa0d9f2dcb7c4650baccd', 16),
                    gmp_init('0x3330b5fdb715d08fbc343450eed3403ca79e80bd25fca20a0a5c14a7b623c42f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76c97bd783429ca8d5cb589cde45e9d758419be5e58aa82c2eaf7370d8a62fd0', 16),
                    gmp_init('0x57643f4b125fd414995714bd999692c59cbe3532b7a3cf3dd5509def95f424', 16),
                    gmp_init('0xc2115fc4f9ee28bd80d68ff86f0c1397cc167d10085f5e90b33629ff399611cc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x211ac81f2453a2940c92c39972da7943119de6c04e6a8bc2a6fbaf0048d91448', 16),
                    gmp_init('0x2a1304aa6c93fde7a3728d2fe28fb68247bd07ca2abd33c27dbb91db8129bd4', 16),
                    gmp_init('0xaf9f197f411d511f482860458ed1932588c53320ada3662156bfb911b3faa536', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cebd5e1b00f1ed8ab54782d434928d1c7393fd1727dde626407bce63433343d', 16),
                    gmp_init('0x6b8d64985053270131d6095b05653d011e658ec13ebcd7df09522616fdb8523f', 16),
                    gmp_init('0xa889df2c784a36fd7f2fa73780b7db520d4caafdbd27431eeb65aef859357616', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cffa73fdf45156fb467ad48b7efba3d5689dda34c490eff6893a0370bae110f', 16),
                    gmp_init('0x504c9ac8c7bf41d3f3cbbbac097d8200cc6fa1ae3a99f8c1db40b8c390affba9', 16),
                    gmp_init('0x8426625fea217ffd50a3bdb8edcceb0633a64e253b8c3dd18c0f6a46f0732679', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa754e6fde702cf0bd680c11d5190e8bf74f030af376b1ccce6a2fa8b9f39dc2', 16),
                    gmp_init('0x15aae4b1eef760086841d4a727d9ae6953950e69f4e9532726832940eb89f7d2', 16),
                    gmp_init('0xe0c9eb1f66e052925bf9e619de7059dd35be45844ba10dccd892f3375f09b780', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5fac3d1ddad0f543bde33556923b24af6226d8676a6cb46995b2827a2b619b', 16),
                    gmp_init('0xf9b743b264c7c76527135c1c805df7d70eff6f24e324f0d8de5a790ecacb947c', 16),
                    gmp_init('0xbd72d70488cb6203b610b3d8583453a3ea71267d74faa8274d5d62d2148187bb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b205ae65ef155b0575a27789d079873ac695b66c6dee522a1a3bd57cee19991', 16),
                    gmp_init('0xcfb308601ca03cc93e8e4e44c806035978e1040bf7f4006a0cb1bdf43c3f9e8e', 16),
                    gmp_init('0x8061252e582cd32535e5f0e726f44437b561a6b15ddce76ae5ac6ec575e10f04', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeac54eff9a1ca130ede18ef6f80c6041a0a1807c62425d425a463634027da944', 16),
                    gmp_init('0xd6b94fc3ab7357d03414030652b6f28395bd6f70dae9629e731ac89947db93e8', 16),
                    gmp_init('0xa83a813c27ae7c3602ac417aab4c6c157a99a51e2d924f11f00b9ade524a5cec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfe126f37e17086a6204c6e9e71f57d106db16622f329a0daad5d603b77094f7', 16),
                    gmp_init('0x9c34313fa43f75e7d5a27c1645401d61b711d3f125d05e21a872ec83a749763', 16),
                    gmp_init('0x7a9b622fe369fa55ddc53b012011cc01ffde45fd51ad3544b5cb33eacafa0bb8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc73e90cbcb268955114a56e45d89de2f354c0c0ce350a0212dd3b57dea2d19', 16),
                    gmp_init('0xb6b8aaa045f834235e2cdd95251ce1e2267472caab1726a6ab89b5e5290fecaa', 16),
                    gmp_init('0x65520a1815d3059e4459ab75a027ecf7fcd5e850580cc3591bd8ec040cfffab8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45e171e60db0771f8cb49107a9a2379675c9185efa888923d8c7d52ff3790b5', 16),
                    gmp_init('0x6b5b3caa8b0ad7df19429e7e9ec47bdd1bdcb5c3ac45b734c12057f72c38d19b', 16),
                    gmp_init('0x5bb1207a0f9e34b588d94b631ae1ce9b50deef9cc9349d5a2e8cb364f9368bae', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34e673533675b314e48b2532bd96a2687217efa8cc84911c7530af7b944008fb', 16),
                    gmp_init('0xef757a75ee134b33a552366cd2b4ec4ded5518fe4c7a12c1ec6fc28406ecf136', 16),
                    gmp_init('0xb7f89cdf42c4356cb1b994cc268746682baf817b2ea56eaf8fcd9df599d31a59', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71a92fefd0664a1884ffe3273265644fd0aa6add4061c32db6c4e53bdaf155b1', 16),
                    gmp_init('0x783e68891172ec92f869fb562a46dfc00054ce094f10019f9f60f85cb600f212', 16),
                    gmp_init('0xfaea664bbb446ede306eb86e58c9570fadf5c802b0472be1b110b421e378ec6f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d55038756efa4d8a716dcdf851146e70bc28b440421ce37a59a3f0a0f51f58', 16),
                    gmp_init('0xdae29295a74dc8e33ed2ea335152630a91de31050c50ea4976409361ac5395c2', 16),
                    gmp_init('0xd0ef259eccae91cc8cc1c305eae2409f929f3084deaed0f74d941c208e465e29', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf348889bacaa13d4bc7a185508f1a881f8c0999f74f70b5ada1cc31dad599fb6', 16),
                    gmp_init('0x3fe318b5d17f31aee2a8e31ddb6634d4be9d3b0e16e00e305c8531ab54c335a7', 16),
                    gmp_init('0x5f4c8d8a84af5e346148b399120e37c4cce4beac00d70cb51fe32087b8470ddb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x449d95c52bf497548104ceba5cbf9db7454ffc4ff9a465d85d4436c843d926bc', 16),
                    gmp_init('0xd4da82701279c28b6a77dda8e7859491068e761fcfc84bec59d158df8b715eb6', 16),
                    gmp_init('0xee7c53709ef0a102c0718998bf689492d7b384d881b35b3d890dd682687d4022', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48b3727c0fd9c34a1f66804679bcade0139df3c644f180e632ac28a6dde35084', 16),
                    gmp_init('0xaeef50f3a43ce2247e0f77d5cd7ef34c124aa15ffed019d8783af5b3fd3e8c55', 16),
                    gmp_init('0x15d7eac0b969d2cf0dbadfb4c8505a2048541bb5dad6629f45ae015c505eef40', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf18a55819e991b8def43313dd9a250cedb9fe398554408ba74b005d1c39cb23f', 16),
                    gmp_init('0x59f54b9753bde1b6de2147afd193c33aa746cd40c9d9ee1eec55e3d17d426a8', 16),
                    gmp_init('0xc1648fb60ba2f711a8a7f943ff71d513642796a1843f0ae18ed9a2eccafb23d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60e894e50a940147231f400a54cc41e796acfd7c7b82905d4a0682a215cd0c88', 16),
                    gmp_init('0xe1d36473f9993c7e0b1bc70bb9ac1965ad8f47cd89ae8e00eb4efeb566357fe6', 16),
                    gmp_init('0x64bdd2c0eab0e3e1e155188efeb9136ac5566a9f6d99d064dc6915df5886b7d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd75a36b0152bb4c441688c2a78e23a6b8a43200dcac70755e775fbf4448112b6', 16),
                    gmp_init('0xef84702fafff8cdeeb581471e2cf0b4279b512077af447bd61ac9059354ba450', 16),
                    gmp_init('0x4deef165e598a0baed0eb9aeb2aa836d096c0471d8a3b9f50b8ea3cc671944a2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf73b1dec5733710415289ee0d21b8b069a29cdb37a84a835031b094fefb74874', 16),
                    gmp_init('0xf6bf082e3332fa7124cad0ee2c5e3f19ad2245864069aaa88f6012f464d0e05d', 16),
                    gmp_init('0x84f8cf6dc4b4f097dffdcaded7921a158ce6af75ae840d01b805b5accaded95d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfafa365fe2115cafb79d1b01103a815709a4e85f37c98957b9b963b9c74203dd', 16),
                    gmp_init('0x323720b8595fda984f89624f2c00664d6c6ef8328eded225a15da6fb1c046cc2', 16),
                    gmp_init('0xdbb93a43d3c3bef4b5d6051e5d65d179fee9c86b805c1f7774c79b7eed364832', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa287a6593741eab39d8857cdb217af8e6d19a8d8e8c08872749047af14449f89', 16),
                    gmp_init('0x888ef74e9f4a8f061e83f1687a7602a1c0a5eb6466fbe34bd6e32a546f66ab2f', 16),
                    gmp_init('0x44cafe3d81599b5aab30b324dcdb42515338d445503d03d86e24b2b3a3f0be33', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e4b03c1b1d299fe4e1da1880a63d8908e4e6a8a59d2e2b9b534ad5769f903b8', 16),
                    gmp_init('0xd09906dcacfc375c0111022dc2b4288e735a9dc3034e8a4abe6a6a09a5663081', 16),
                    gmp_init('0x83fd77b551cdf4385837de4cd2ed9e24bcb1994d8f6f43301470e66fd9a00076', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x966272ff2079834c95c0b21bfbcf873ff7a762370d3ce84f2f4c95797a0b4b5d', 16),
                    gmp_init('0xf03fd3afa08a7712132dac86e8839df97019a5cc9d905e9d12d7907743980954', 16),
                    gmp_init('0x88b4d697b72b5b39caf7ee6d3cae441a51a0fa00809ac0485fa8e7932ef74615', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ccf8d4ad0f3bddba4c1e8f66deef91d4262f25bf1a3ca91f1f4de85dec5696a', 16),
                    gmp_init('0xdbae2acee317cfc9bf57e928b9d07bcb4472da53b64080dfb21493daa91f2c91', 16),
                    gmp_init('0xcc8fdd64b1975fe7a700b3e0907b1bff77f92ba6644408fc8895e4ce7651d761', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x438d2b7184c48e06bb06de9fba8107aae32e73127fd1b47fa7b718bb8311aff8', 16),
                    gmp_init('0xe27d443ee13ecdfcfa39552a0eae10d16822b604261950657275f24afc38a7d9', 16),
                    gmp_init('0x64a07130814f7d4493e7d765f04cfe3b6033fd58146c403cc14df8acfe754e1a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x921b00136165056e3f0bd87e9a71f6b7de4cb6c58ecb973d59939e7e473f8abc', 16),
                    gmp_init('0x86164c42d6353134a603ba563da3dfb60e863bd30db7561fc0c29811690514ca', 16),
                    gmp_init('0xe6b3c1d1b2bda4e307f5bcab3a5de1bda6060dc938c1f651ee832da5527e2b1b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9695a355e73b22732f2a7eef1da3e8f2ebfabf2dd7c28f3e0a27d358591cd27', 16),
                    gmp_init('0xc99202a85c15a37674ef5f759488b3c4b37a8788dde71628efbb76a60367b654', 16),
                    gmp_init('0x4c2a27f8cb7586a7518d5c953dc3cb52c10ca24c2756d3dd11ceb08efb8209b9', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x769a098e71cec60bcae3a254fe2e8701a915a0bf74f9e063958c0ada23182700', 16),
                    gmp_init('0x816f0b67d9cc10a4474b5ee7b8226feb52e7db6a24600eca4c7f1362af00324a', 16),
                    gmp_init('0x75373c5bab729a11c9eee8e08c617e09700f65f03df1c9880337b63cc39b3747', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd32db6e252e7d12102fb2baebc7e48be2fcf89b1835f70420e3d798282f64aa', 16),
                    gmp_init('0x4253741a73cd12b434198201d5a6d9ca5d29dbd85401953f781cfc19ac3c90f8', 16),
                    gmp_init('0xfb3e771d5b90d7070619f8ef04999bce12c9aa6e1f107f671bbc174ca23a1623', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2cb5370fa40d3d14bc7917c8286c4d89dcb89a186bcb4ec029bc9a86b289037', 16),
                    gmp_init('0x3532088b1b6c7e387b44e0bce5e1ad9197ac5c54f679b7f74bfc527bf7acbc15', 16),
                    gmp_init('0x17f974dc85515e6a017c76b682a97120a895b13ef64283df1f212b19ca4533c2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5aa87d6220a355423630a8071d3ce6c464c5c26ec80922e2bc576e7d8281b082', 16),
                    gmp_init('0x3bbaafb819c4378ccdb88569182b7b9822b07c896790e0920b4af70255b20f6', 16),
                    gmp_init('0x705b2bd388b87e0fc8e194a89a4c63ab69aa0e50306beae38259ecc7307ff931', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba8f5abc9d0354ca562171348c0e0b1b18b931afe565f2ef91271064efce8674', 16),
                    gmp_init('0x6d0b219a1bb54aa4171c0122a9cdbb52d9fed4849a0f991690e9a81fe523c700', 16),
                    gmp_init('0x7a50f93a41d0c853f4104598cb5558d4f97460e8b8f93e5aa2a816b5c98f3aec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x826d3187f9eb8c4b4eaca13d8f566495ced260486b8cb10a68de9bd49ff01273', 16),
                    gmp_init('0xe3273804ba399635c040ed3d348fc9ecd631f17b6ebe5d222f3b16b141a76726', 16),
                    gmp_init('0x82f9c29a58bfea3dc4bff2f8b74baa4df9463db0d1e2577f397b3bcbf94421c8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf8d145180fd2768bdc2e83d8223d1264438cfdb9b17f942725e581d2c4aad37', 16),
                    gmp_init('0x66c1d94f73bf547a1bf6f625e9349ce1d3b3144665a075306748461e1371de61', 16),
                    gmp_init('0x7cb3d5fb74edf7c81d8f45676a0eb65bb07a5824d4b40886572bf0090704b282', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae2a33cb4dec6abf864c8bda9806bb7830d924f0516763c36bd237e3deb91358', 16),
                    gmp_init('0x2c5647a81c43866547f2317d5aaf0e5dc784cdf03eb81e0d0ed8874fb6c044ae', 16),
                    gmp_init('0x6dc3536bc7de931506ab5b08cbf3a67fdfefa2ce5cd117ea54a6a1e90fde8a30', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd37f945cef3b92f5a3233793d6f740043eefa612efdab3a83083e29fa5dd70cd', 16),
                    gmp_init('0x5f3096dd04de858b4ac1530df393b63baa7b2ed0b8dc227397e5337c6784c5c0', 16),
                    gmp_init('0x647432616563f3bd78e03c880f8017ff5229266598dc02c1b283c39d351399bd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x945d3d369184711d6c0c485e0ffdb6645dd8057e7855d4cc1682e6fc8430c938', 16),
                    gmp_init('0xbd50c68bda446600455e3a5c13f9020011722e34078558a07ed5a4b6d7987a63', 16),
                    gmp_init('0x49f1b331edd1f8c29f788770fb8471212298c4e3fc2be4d63a714f7b516b746d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1870a1f5d375c0a38506104c73fc71c4991f0cac8bc84e987b8c94d9f68e60bc', 16),
                    gmp_init('0x785307487750d39854ad3a44f1a95fb0d44e1b6939beee810a176231aa6ed36c', 16),
                    gmp_init('0xa825dc346d87dddc52909f8a13e667cd3b0a211f29704ce415d2da5f3e9716af', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f44631b8f69c4eed746725112d09ab2f91afb9a3a5176ebf07d9d96d402a633', 16),
                    gmp_init('0x5cd4318a308d4ea3302dd7ca0f37f590dc888c39283609ea87ffa3f369af459b', 16),
                    gmp_init('0x33000aa40a944f8fdd9cea160d8ba1d72a84cd82d4888c0681f9e2e58a870dc2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x813ac6d24d2592d0620bf8a831f2294741ef7a4a1ca1d879d389d6938e8b412f', 16),
                    gmp_init('0x282b3717b4e2c0ed76dbbbe7c2a142574509ba51f5f880de23f7c90b61795728', 16),
                    gmp_init('0x579390ea21b79ab9172a5196ea347ada87db68c4a2f35feebd31c49973085630', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x898e5d55ae8e7beb1615596f1b6258beb775af600ee6f2e8f928c36488c36620', 16),
                    gmp_init('0x1b51fd2c96037d73cf20a23648b7ce99b9244da212d18b0c4d16cfad05ac8907', 16),
                    gmp_init('0x27f784a784e7227e182bd8dadc84ed118b35d829a44e4be7d5e3135e5c121ea1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd634a37c8c96693b2b74728c3cb11141aa2e5a691a6cb895015f6782e50afea6', 16),
                    gmp_init('0x97d5456c3369e40fe9fa62e6cf5e604edda8c1083f063e5463f9cd858efde98b', 16),
                    gmp_init('0x9797319a13e1662ca3af4d1526407ee1100712747633a6804bac31305593e67c', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x280c62577b82a3025bb98431916b9da494a7b3cf6ddae31fc1affd92ec1894b0', 16),
                    gmp_init('0x1bc85ee1ea9fae518123d39ed602c6ff59cea14be992653ef5b96831104216f8', 16),
                    gmp_init('0x231bcb9b9e3e21f2d5dc8956fadc9e9e4d4cb6dc24a68005a5ac5799acb3cbdb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x440ac4dd5b7788000cf61a98d038c550be6e060ad09a66c613a83871ea3cfa57', 16),
                    gmp_init('0xc614737a131fe9885f324abb15d821b40282a46cd4fd136447c6bfc7c921fc57', 16),
                    gmp_init('0x43dfedf4a220456f31c3edd97bd4228465ef072d7aae8286a03f6be3073b7e54', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c57a3f8366a30c0d581909a3ae53fd1e29b4f17d06f1c976715146a341ea955', 16),
                    gmp_init('0x76cdcccf7b4804347d7df34cc396b9e5bbef16896eca8f015de8ddf05794ccfc', 16),
                    gmp_init('0x4ad916f22a936dcf29d59cd566c66ef908753a67dc1eb065856eb9c9beaba04c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa69e91d5e8df4f46ae01d903e3b4cd4a35870479944fececcac3b1e2a962f1dd', 16),
                    gmp_init('0xb26558f345a3eac74b97ff72c869c3151076a28365e26f41cd298bbcad43959f', 16),
                    gmp_init('0x835bc791c9fa20318c24c04b797fe7db9eab881095701f03cd4d614f143f4833', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x737c31784e95f9a78655d0df794a7403ed13a68dc1baa23d0aa5ed55b9ef90f2', 16),
                    gmp_init('0xa537b1ff0fee81fd25339cef31319c2285573ad4e6b1827db3c3579017a651d', 16),
                    gmp_init('0x8b3faf0151fcfeadebda2b303a104565380e6fe419313a22649c5c4af2f405fb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ba58920b71e0970932953078593619c205303ca6d6eac5ba165cff101f72f87', 16),
                    gmp_init('0xd980cafb5ed803dba993c52faeff1ef22ade54305d69c5519c5ddbc5417fd4a9', 16),
                    gmp_init('0x7707076f5be7e76eb8a4709f3e3cf96b159e173b0f0bb11857d1aa5893c8c13b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e40135004be1f5368405a32ca580df4eca038aa6c48e64bb8a63eb74b163f03', 16),
                    gmp_init('0x1566d0766d72561a2b6e35a413f55fc8898da1038f16487b172f2a4368acd09e', 16),
                    gmp_init('0x8a6a6feef08484508db4fbaff20cb8ab5bff8e91f91b1fdd440f94be084c8763', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac8a5cb5507ab5b9070ea44a68b40f9bfc50d23f0fa6b5d8282531e73e830bbf', 16),
                    gmp_init('0x79c87bf1050c3f08c2b917fa4af7117e44907a0528b72e8bab8ed1346ae25ec', 16),
                    gmp_init('0x7ae88c97dbe58bb0b7bc9438c84a9cfc8938cbba09ca5a10e52114da2ba90c9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa881d7cd42e5681a510b1c02f74d9fcd4999333b733c0fc13025434dc64a5d26', 16),
                    gmp_init('0xc95ba6c5cb8a029671818b05224ded18e1e162cf7d55156e2ee6de0b8bb256ce', 16),
                    gmp_init('0x87b80513e0fca771b72e942fa8355c5fd47ef5f310840cbda62cf712c2cc4bb6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcaeaa6453a754344c503f1eced2048e826b4be2e72a3629748d254254806e2c2', 16),
                    gmp_init('0x6fd75a8fbbb4e90c144cf8622af2816133214e963040ea95c99bc6909e434687', 16),
                    gmp_init('0xf0005722b70e6c38bb79e5a99e4333eb5fa50e4cdafe00da16d6349567aa2a73', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd96f229d1e3ec6b4bbfa6134943b9247042f9464e95683e857dee62389520ecb', 16),
                    gmp_init('0xf67ce2fa91fb007f399ddf24b25c20d43a3be3338af1ffee1df1289b7bc1793', 16),
                    gmp_init('0xd0099e869434f934532328c7e9147a6e4a4c6df17aff988900cdefdb6593b19c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b8aab8fa3076059467b4f23f4a28f3aa5ad4b52e8a02711bf27f46e9e5a4859', 16),
                    gmp_init('0xa3caf5c3aa59f73c45458b9a8c77d23d257116da2dbcf89fd2c2beba4be9479a', 16),
                    gmp_init('0xdb3173b370c1241d6a7c6224bc4314a90c3d42ceb53c28e09e3d3f418e87ab00', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6820e599438de76b5dc1e883c2cbd1340aa42ffe698306bf607ff510005b2016', 16),
                    gmp_init('0x34d3f35f70ed31c44f4f75200b4738626c6eb679c0b1fc388fc4fde43bff628d', 16),
                    gmp_init('0xc33b8c1c13a82ddac6ee7be9120f52b8d7023984f83e0e541f41f565f7c3a69e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2afe9192c378e6cc25b8d0c7a0ac96a43a17b1e25daaf65994a0a975c3b6f518', 16),
                    gmp_init('0xe2472897cabfa21c1b7894697eb6ce487bbb9d41890d0ad57e16320b58d8917c', 16),
                    gmp_init('0x37bc538765d887d371bd90f5e122b041606d521a90233c0ca32b9f0a6676665f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadd20ff5fbbe1fe696947ec4cae0242693ee4bd3ff92dfa5f15d4af2d68979a2', 16),
                    gmp_init('0xadd1c034eda063d9de8c9a36237cbb6918eaadcbb7d51511207198c09c49971b', 16),
                    gmp_init('0x59844246324778b6afe5b1ce374e3fe724dd85a1a379da094e7b9dde0eddb21e', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa907e4ed39e60f4f7dc8e472d3bab748361f9b99da1b60c092011f7e1f1dda1a', 16),
                    gmp_init('0x9b9e3f870293b3df10cca5695477e3f3ac83ab4e117f7ba06518529a432891c7', 16),
                    gmp_init('0xde874f3bae1c8e2ffcbf82a644735f66ff9f3e34f6a90050b2a0b0b6f17bd0bd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9572615c4fe30c49c140ca6834e0744d72d21fb15dbe2db626a4cd6b4fc83a4a', 16),
                    gmp_init('0xe855847aef3bd161da590a7719c4d796bb76064e19e8310d2e99c9449d24473f', 16),
                    gmp_init('0xf084476df3c931cd177da88a9176e81e5dc42c618a184e23282e21a5ab092cdf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73575a8cdb77deff3289d6b8ed1f6e8e680bba3d99c3a46cc79b48cf686777b9', 16),
                    gmp_init('0x43ef012fb3bed747857b4793113403a41cdbe351920f83ed2c6879ee7d659a6d', 16),
                    gmp_init('0x1072e6fad5dab6aa5f135252b18377784f73a5faeb33919dd80bd3d1b013fe0c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f6a77a91db3eff0c0e9fde8952fc1c7328fe2dde42f8445546a7031b870462b', 16),
                    gmp_init('0x4229c64beacb18f9bcad620fc73947774c5664bc289549b4b754b1ae0c60100f', 16),
                    gmp_init('0x33455788bed71bfac19e74e9cbc86025fee86ff1f49e0e9f0c1374c2432e75ca', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0931563e955997fdc929f1e8bb84d2ddc13599ad0d8a5cafc295ae1f850d9a8', 16),
                    gmp_init('0x9d560735a41af2386f038eff994fa29720feccea89e72b078a4d2c337aae7502', 16),
                    gmp_init('0xbdf6dd7e6e6f62ce99386edb3b76b66bfd2b93a428ee4a93ad5a2198cb5f1b26', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89b4d4c566c655d404856cb052b03e957b2a88ddd1ea123bb34c17f98c9cadae', 16),
                    gmp_init('0x1fbb474bb6717bf1312cd5e03eacea2502ac60a784bb3bc4e72af92fc2260378', 16),
                    gmp_init('0xc82bd9cd57ab66460e8597169a5c4141bd444ebe61ca4f466e2ecd5246b2298e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d1760420ae150a22364a44330e690153dd93753bb684f98701c0accd0c1de7', 16),
                    gmp_init('0x62593b6d63daf1aabdd716f2d77887320f5657a39b236d94383aa69d44413028', 16),
                    gmp_init('0x9323cacd889c113383572944c5ccd657a60657242f5d45cce7a384622bbf1c38', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1b0d308ca494389d8e9b5eb86770f6663160b8e38c758d6a9c387cb70afd3e8', 16),
                    gmp_init('0x5f91482fac03b70715eca1038c6e82eaf36aa5cb6dd3c93f78e5617e5b446cf0', 16),
                    gmp_init('0xbb7ca11ca1e26bbcc8fc40c9edeba3fd8d93a74eff344df7199e2e1fbfc8b850', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c5484646234fbe40db0380adfb8c6f47e0605b733c5bee20a8b8fde755b771', 16),
                    gmp_init('0xe246c0231cd92e4eed3eac4c3580c8f193f6d077f09cfe135b537dfc732d44e5', 16),
                    gmp_init('0x7bf291f1b541e50f7a5b4c5ce70cad6382f7d774b3ba79455598c69bc8d6a1c2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ff7a48551d54f79c9fae963862a50b1cb8506c39b548cecb26b5dd3252b7f74', 16),
                    gmp_init('0xc35d2b6a43fce6960294cdfd1cac19524d3d4094193e6fca685500f324db904f', 16),
                    gmp_init('0xda7ddef46dcf74de6652b89c16fa590a60126a5164b54c150720da3ff5d2631b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e8a0ddb250dfe1f98f83ec18909befe31d8f46032539608e8b98e78c8762042', 16),
                    gmp_init('0xe37a75c6dc71b8262d630b50f23b0566cb00999b204800efcbdedc58d8799c9d', 16),
                    gmp_init('0x1ebc798eec99e6ec48f595a0ed8389a00bb35a053cf47be004f91651ca1354c8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x242e47353b1ce760ca45a3829d4252634e87f6e4e9ec401b9cbb840e6475b814', 16),
                    gmp_init('0x14a04d485712a43e830f8821151c8dec3e5728b30cd863a7610009d6b1522a53', 16),
                    gmp_init('0x4e7f1c69889a47c17fc420bc9e118c203a791aee3fa316e708942732c6693d73', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd924482c0e02a90e06c185c40d455a62b0c41e58206df9012fe8e8b2f3784a', 16),
                    gmp_init('0xd463f82962ddaea6e73d1be0a79306ade4d0bcb25c55d86a1066665fb379df0e', 16),
                    gmp_init('0x973c69b65ed2877099a7e9229d1702872a734bec1ef9e9ae3427a0524ff2a63c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa72406f11027f9b2140637b6e81a6763236c9f3d3ae683027d0aa95c9cc402b3', 16),
                    gmp_init('0x4667f354a35e7d194732ce63bb621cc88d10ebf74a0f6d2e76458d41d531a5e6', 16),
                    gmp_init('0xb959942360031e4ed66f9c658f67ca486159806a40a22964a22603eceeaa4306', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0387f20b9795635ed372cb3208a6db7c687cfb426aef77ed3cdbfe4c953597e', 16),
                    gmp_init('0x855af2238dd8d41b931fe35728ab534270a7a887b5a59c765c48af0aa4123831', 16),
                    gmp_init('0x8eb66e0545f543342280b622610321f1bc7a0406295a1e0699975be731075ea', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x493ab4829f51458bec3659f4d3f450fa57e1696e05bd194740e4bb8da42b6171', 16),
                    gmp_init('0xde9cbf01155ec28ffea69e55f8a9eae753852429a17d75bdc47f8df74e4a980a', 16),
                    gmp_init('0x8a22b1756730677f37ef7e678da1b8834ce71f8a5e5188dd800c918368406150', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc754fb97ee413b10a95ab25182e1596f33f920df260171195e169a20be5da5', 16),
                    gmp_init('0x392991d6c85206feeedaa9964850410fcd71c5c3f020c4dd88a04af0573a0592', 16),
                    gmp_init('0x9b1d2c32ab7482cb56262045996feea668bef628a4145dd90a4014b15b26f5bf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74d6c9c896c37104952250170496ec76f18a7319319bf62cf38a650cd71d2946', 16),
                    gmp_init('0x34f25bfe7f37fcd40c4d3901c9dc59a99dafd43492d2ec135ab00d53db0a04e3', 16),
                    gmp_init('0x38d3c9f6e06c860064c4e57230d0ce6bf8f8e3b6e9472d274418e53dc35f69e5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4708ac0d8b42a772972b0a7db87130077f3a15de25900365be30a0c64287487', 16),
                    gmp_init('0xfa8cd11448cc23cedb8b0184175c2b0377cbf2001c65891f0a71c65e5c5eaaeb', 16),
                    gmp_init('0xf02a43d2b3decb12ccb22b7c3fadd0792f3ada04344dc254c2d26d2d15103bd6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5573a30dfd72998a6ca67d41bc8146e887ab2f6ebe03022a94f3c63eafd6bdb4', 16),
                    gmp_init('0xc60167d86fa518f75a3c0db740d82e2210b3fb297846945b6e3b0c67340702e0', 16),
                    gmp_init('0xc95a3e6609844646ac7c4cc3e78575d65768bf49a31b1f40c03c69c8748c614c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26a786049c341bc038fcefcbd5f16d26e8b9ba43225be3290da69e6c1cf3f4a1', 16),
                    gmp_init('0xd0a96b5beb4303c9ea8dbead4ad83b3da7c221314c14b2a26824edb0e25b5930', 16),
                    gmp_init('0x7910f340e0ba9773e1f045605a095a6cea3bc1d9c961078dce6c2803bbdc0b2d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57a3c4b3f9cd658eb1a7cca94f028b7914db4f8ac04461959750b720a8962b94', 16),
                    gmp_init('0x104ecf8a2cafcc5fefbfb5e95025083a27c4cc64d988c1c295f7cd457b74116b', 16),
                    gmp_init('0xd5725de955bc66ee9737d07ebe946cde0892482d3d4d2062689b0645d5268cde', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72bcb109d147dbbcd27de5eae0a68a33b97753af37252577cf905d5ffac9fb60', 16),
                    gmp_init('0xeb2b06332a3b4cd7713fb5e9d37d832de1f400f29ef3e49919ca5abeb0f68fb7', 16),
                    gmp_init('0x4de58e5ddea199d1ea7887a16720614a1dbfb6d8d3d02906349610c051edc177', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dd8cb54373b5ebba8fa51dc16674e867672d83096f1f1b339ecb056d3baede2', 16),
                    gmp_init('0x8efca57ed37fa37c9f9661f5ab2b1a1a68f4d7fed1bd8afdaafb5cc830bd2787', 16),
                    gmp_init('0x8025ae613be9a3d6f5b1c3f44eb5daefbc21aa036b63b5714db5d80c4693c4b2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1b761085695e9c3bc5762553dcde201414a5b52836ed9c3bc3d589e5e6f6e0b', 16),
                    gmp_init('0x7de6a8087369384b78f5291b254c2e2d2abba2df51445fe5a7b29e433cce0af9', 16),
                    gmp_init('0xd6d84a124bd8cc402610575672c45e25d30824568ce21b4f029f09d1617d1be6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x454883c53a2879c4bb2e7519cbb3383df98844d5f24e733569b170fbb2c6838c', 16),
                    gmp_init('0xae9de91b7adb47c185a5ff3e12eeb776e1ea77ade07c9676bb5135933cc995cd', 16),
                    gmp_init('0x3e73960a876fe12b7c4056700fc0a4bda104f3d4083a8fbd2ee7ab73446eca48', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedc0f25e6c2178bc23bd217611da573dc5e0e5decc21df881d2872d1234dc7b4', 16),
                    gmp_init('0x3cfa4def49a3a484aeede1bd6fc042d8505a91c089ec1dd5bd3fb0ae26ce0622', 16),
                    gmp_init('0x93aad9eabbd518e345b7f51209e203e027e5e3a43361a1ca57f99057bbadc15e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72ae39ba93cf4430819c9932df4f8a6258ac4b5523d6495ad0180fad480b423f', 16),
                    gmp_init('0xbf64133c0204b408da1fef674211041afb0d726e429f70acf46ecae073fa25dd', 16),
                    gmp_init('0xeb3369c607ea01ba5bc19081a4eb69067122dab9e8d97c3a5bf7d56755d0dd07', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7df64d1afbee6730aec1e90f920c8e615ef0b86fb4fb02eb4a9acec1ba0accf5', 16),
                    gmp_init('0x63eb1149641d3928713c626bea67b13639f5e1eee3c033463686310e93a1a749', 16),
                    gmp_init('0x6418926f7ff4506fcb563415b0e767fc3eabafa816a5bf76face609e68081fb6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21f0e57bdfc611280f8a946013babec17ecb22f9ad29cdf7a2862718f9d4e8d0', 16),
                    gmp_init('0x18655462bc4d352fe287506d7a216589be52a3d2f59bc0842837b806b3c839a1', 16),
                    gmp_init('0x511c5d9a6de62890239c28d55ca4cb4bbf191dac6be1aefd2d4beb1c54268e92', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x618eb9cbd74611b9ab3a6772799032bba154931901bfd1e2cb88b48ed5a645c0', 16),
                    gmp_init('0x798326d87133a9cc4d2d8ac7b983d5cc5b13ef3edca740cd91058b07f07dcbf0', 16),
                    gmp_init('0x833de5068fb90221b8bd829143ae0092b06eb96edba3f2685363eaaa22b1c6a7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa42cc1207a22bc1e3bb927f4c81b7c90978cbcc881408b73557b4276b4637d', 16),
                    gmp_init('0xab4ef30044efb15b1d9ca5c1637cec992822e301b4868d5b6547789a5451972', 16),
                    gmp_init('0xe23b813ac1ec3491baba367a230bed0440b2256c8881b840044c2da1a30ea813', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf88083fa4d583b830d9aa02cf529865307053e41fe4f9b40331b182ce1ccae8', 16),
                    gmp_init('0x61b01a79f21327fa5a3695ccf1625d08d5e0d5560d60ca59c7fb3c91eda344e8', 16),
                    gmp_init('0xe6ad6fe8c60296a92ebbf446bdcaaa247bf4c9e641076394a5ec5aa08dc76d0a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ba10ecd80b52c859d62c8c5e9cb4eb398075cbfef5471428ebe5734fd3bb071', 16),
                    gmp_init('0x817f0b31c596fd9ba6b0a030dea22924d58c2ac267306fb73ae1dafb0140e6d5', 16),
                    gmp_init('0x5ce04844837ba1a49ad204e379c8e57a672e1567b82b75dc1713d2136def6df9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe16e4ac6a73c0e6a477d0fe530ce5ae3ebe8a735c461281187315c73e0ee6c1d', 16),
                    gmp_init('0x374d5389584cb796a6219bb4b94b39ca6163fd1e43732dfb704fc64a870dfa6', 16),
                    gmp_init('0x24861299d87fa24546a2d1f9075005fbe291736d4635d133956405deead9e423', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe055070594267ee9f63c5920690df80c5aeb2597268411cbe1e674756661997', 16),
                    gmp_init('0x4c6feeef843fb2d07355e80271d0b2b8b8e24792a2d3984134f0bc98afa278ab', 16),
                    gmp_init('0xfc684b056b59d2adc93a642e5ddbe93cbaf8f431c2d9f46ba659f1a7efcde5a6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b16567e030c460fb3d9cf7b59d7da5cd7d854e7ec1d85c93b162088d40bde99', 16),
                    gmp_init('0xd5844a7aafeb0b881d3dc49b104adfb8bf339bda3c832ef3e3a8290e3f6fc673', 16),
                    gmp_init('0x7120e507925023a508bd4da82f01d41af86f2f7f4a416552eca274b29a0f6905', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1181c9963112a7763defc71b3a465d77aea33e67d57f618b5ede6d0e8cc0b9ce', 16),
                    gmp_init('0x6a40208094b8552776070d721ce0e530bf51d93e334ad2380c73f899aa56f279', 16),
                    gmp_init('0x8c926fa396719ac5122b95273c0a40c1dabc7dfde25173535ecef57b83464eec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1c1422f1a115f67bdec74bf30748400ab24398aa1322563c6bf2ac8673ec7', 16),
                    gmp_init('0xd5304616612ecfa3d8d8e550d8c3220919f84295f5dc4da5a18b25e824d1705b', 16),
                    gmp_init('0x42421ea537a107af70a4379489617c80aa13992ed12ed5421ab9c9c21c22b4ed', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3002a4a65e72bf149ab0285148d58d9756be5b262b2b5730a23dc7fff3542e4e', 16),
                    gmp_init('0xac4051bfd4480c3eb1fa495e71760624598b34808690c6de4e18020691b1dae8', 16),
                    gmp_init('0x2655edfbf34457d02a74924369c91d5d197d551a98f75a9b18886277d5aab2a1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76374bfbd38a73e115dcf2b2fa53f15bc48fbd29c78bb2b6902f13efd992cdb4', 16),
                    gmp_init('0xea7f2b2364658f36bff5d56bd26757e335a80a6b1528033363c86e804c25e149', 16),
                    gmp_init('0x89e78751d193482e58810e9d54e36a85a92188950cba784fe51d9dcce06df39c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a9929834321c5e1f2d847f05f4abec4514603f2f9a830b3a45361456e0d3750', 16),
                    gmp_init('0xf90a6de5d90bbff9f26d4392c16f34cb9e1562e58bdd0e71ba7897366b4cd067', 16),
                    gmp_init('0x7bb8fccf5c5188e6136d31754f1ec4796147088c44a4dbbef3ede6ffc3c49955', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80a73500f04ff93579fe967bef7cbd6903649c9e2d21919af89cb62a17480b5d', 16),
                    gmp_init('0xdc31729bdfdf3e98b4266978cd0ee46b4929a02f3fa109e7330c485f035529fa', 16),
                    gmp_init('0x9bcbf2693521e1e324d95c2c0682586c756bb9cdfb6a1efc9f474943c5f175e3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60c157350a27db75b8d43cacc4aff49a2fe2597eef75a35ccf2bfd3f32500438', 16),
                    gmp_init('0x810bb4feb9e49250ef69c005134c8648702fc17bb355814aeb8987a74fc86d7d', 16),
                    gmp_init('0xb5a4226414f7dbda13b2a3d8802d28276e020caa69e16b1b68993af4e21f386f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1c592ca90adeed578b39d385e06df17e7d65f4630a2a81707d8f6693178dfc8', 16),
                    gmp_init('0xbf1f9fd1d6ae6142404b942b0ad8ef68ff25242cd5c7fd5e8d38cd618a648a25', 16),
                    gmp_init('0x94addfc837b457942eb656037140155becf67ca94ee41f73847d1413fdfc0a1f', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc762a9c8ae1b2f7434ff8da70fe105e0d4f188594989f193de0dbdbf5f60cb9a', 16),
                    gmp_init('0x1eddaf51836859e1369f1ae8d9ab02e4123b6f151d9b796e297a38fa5613d9bc', 16),
                    gmp_init('0xcb433ab3f67815707e398dc7910cc4ec6ea115360060fc73c35b53dce02e2c72', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49db3dd17a3284fd06b1197890890600f6a6d7d219bd4969b603f9214a285d1c', 16),
                    gmp_init('0x458dfe87d0f838f311b652a8737db8ae930dfc27d97af888882951fce505dc3b', 16),
                    gmp_init('0x2175549f32eddba86d2a062507602c65b504468b4fb006aeba713e698806dd6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95f112d0039b81f37acbebe38a2f97b3a7543ee3c561918d36984da4dc88eb00', 16),
                    gmp_init('0x889c4999af4b37b85aab55822cc57915e59c3a8e7c518360da394f6677f78168', 16),
                    gmp_init('0x9f3c00119f778d48370f5bfd85b3eca7813439fa3913d93b8c7a343dfb0bc021', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f27b546ad438bd772de55e5e79b4c5ac0f1076a8f6b21664bb919f19a366deb', 16),
                    gmp_init('0x20a1f7919532c25e9f9e7168d3bafdb2a461c1754b21f6f078dca80bdc250c59', 16),
                    gmp_init('0xc7c8c32355f904c74a9e864e30312529e6a83377bc1c779347bb06071245c871', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28bf861e54cdb18b395350cbd334c46471663d8782e92e0000804eefd50af596', 16),
                    gmp_init('0xdad52e2b0d83bc392033b693253438368487d46a0be870232c98dc22b4a99128', 16),
                    gmp_init('0xf54d429dfc4d327e075e575380b3e8752d369e51daec2b980db2145bd678b9f9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8788433e25011d497b97fe3fb076a31cb0f9e4cc3164c92314d6cc17edd274b', 16),
                    gmp_init('0xfeaaf54b4d05625d64e45f12efcb0d8536562d042cee4e225e2fca38c2aa56b8', 16),
                    gmp_init('0x2b2036f4e43d50d186397aad8c7bfda1e68a8490dfcc8bf5024fb88619643b8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaa9658311ca46a1eb2bb7f3f32bcf19b3dca39d727139ce30309c75cc209f2f', 16),
                    gmp_init('0x5f2b453cc3ee59604e7561b2ec565a4eff9376c21f1ac2b891e5d357413def76', 16),
                    gmp_init('0x82c241089c8c44473e2e69bd42eb01e95c128c5aa106f52c9705e3416ce5d98a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb11e1cd45b6b882bbe2a2479861ee23f0163ba50ecd589ad47718117bd7c8234', 16),
                    gmp_init('0x8ae9ebf0e5578ee218e13124a22400a99304b68f3c1edd9a9188b1fe842012', 16),
                    gmp_init('0xe44396ada41dbd0b3f63fc44d1c99d5ce61125a0a1343d5cf8edef8a56829f0a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80e818955cae16bc7d3f1b41e95edd9c79fb7f68139eef4232a1199ee8364d42', 16),
                    gmp_init('0x3d652e07e6d1f44b010ec82f6f3cfcd506190ba8d30bed8aa0a42a36b903b7c', 16),
                    gmp_init('0x77feda3d3644d44132321b5f866f161338b9c7ab32b98811bc0fdd065969a51e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d4a5d4d617e8518b6974d7248b7f6ae670e730874687990aa1e431bf8860329', 16),
                    gmp_init('0xb46a587bf65a37e9252fc1d7d7cbab717132c828e5e638687a3ec350d4b33614', 16),
                    gmp_init('0xa721910fa35949ae6d39a79db73a16f098b46879c9de65e1554e31e04f341fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x807d94ab61fb3832c1de362e555bf04407e6f8fccfdbb2bae564f5e58d12b461', 16),
                    gmp_init('0xcfa0834d9619a7a52745891bd049cca13522a8646e2ff8b71ee03fc234132b20', 16),
                    gmp_init('0x25079b7a9b4e2068e9de97fbc29f5b65333b42c39fd1999b208a6748c1b9f0db', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82b0d308d9bc86db044b5388d78ba631d18d40f05ef6e26b8a4312d3aaa5e0b0', 16),
                    gmp_init('0x2526289ed17e71b1f46e066a927a70ea74d4ab38983650a2e2f30c8969fcb093', 16),
                    gmp_init('0xd5b089bc47c1e627bbafa336a2116b3077483fa7f97b57a2e197b55b7efdf333', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafec46ba2650d6e64aec42015bed46e335cc4e454e3e52a37ff56b2124fe2eba', 16),
                    gmp_init('0x66a5242e73afd1735031aa372881facc946eb038cf278a94319e80610d8a772c', 16),
                    gmp_init('0xc7bbd9e10acc511aa103dfc10c44106bffbd7195c692f8ba41b01fd782136565', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27f7339e394b00c63db2ec289c847a812e7c11d6f873e3e4b8174d6e0cdb626e', 16),
                    gmp_init('0x10aca52aa5bbf48935f16a0cde741aad6fb2120831aaeec1a4bf3fa5ed8fbf07', 16),
                    gmp_init('0x6d9a9bbb5f4f9b9c947bd6dee4b53e990b40fba497a5709f0bd4d1bceb233a47', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9068f1730f3eb6e378a273a489726e4da1ef27789bf46f792e12827fb3392df', 16),
                    gmp_init('0xfd4b758e9faf77126dd679a658269f2487d2005bd59b00740966a1ccf2cd40a4', 16),
                    gmp_init('0x964d56182b715d0475b9911597182ed4dfc3b9a454c09928959a5be752b62232', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa0a9130ada4284055578c0997c2bd278cf7431be9c463640afa2195db08b50fb', 16),
                    gmp_init('0x82e0e5f755ec8f43fdb24bcd0a6b0d42b4efa51fe360db1b692d02b26e04199e', 16),
                    gmp_init('0x9fd33972ffadea022a4c4ed6f72f8c9737884242e943286b43c454ad4ebf5d34', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78d8ac7fe5b0ecce505dbc2dd9fa6248d7960ac880f9cdbc6c42fb3e03eb0fdd', 16),
                    gmp_init('0x76b15f530a978d37f1cb204e8f124ebafeffeebb1082567a09ace7568229b541', 16),
                    gmp_init('0xe60851a31b1e4e75786a0df722a59dfcd3c856938532ed9d1f3037f736300ed3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa056d822819ed1666bb047e71d22e3c21b2c86e8c91c0b4b2014d1112120dc5d', 16),
                    gmp_init('0x7f030e34d924c841dc32afaa01aa24997286460ff1b99c0db89d51fc4a7b7f3b', 16),
                    gmp_init('0x1e4b8f7528787c4f7eccb2b5564ad748b7d437787e62d98d3026c71911f45854', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b00d4a5d99da39a606a81c866b46fed9de19bb05a93a68bd803f366d8097759', 16),
                    gmp_init('0x267c4c1120997cdc9d458e6d5072da4831ac6c59862a7db12f30f44fac07b670', 16),
                    gmp_init('0xffa6958b07e8b9921a2dd1af166e178ce41eb1e86ec377c43b34fe9645b0ab0d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0722efb92f9d9cf15ae75264af6aeefb712aba0587a6bfacadf572549b3dbe8', 16),
                    gmp_init('0x74c75b5b5452044b15851f97c5381a0a39a053f4ed3f3d336afac757bf700c2e', 16),
                    gmp_init('0x4188c58994d2bae890d142f2260fdf28e5e74d77030f49c015010e88fe8dcf9c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5632f1100a0be522e3b6c4d355f3559d3bd4acc1b4120ea6260f2579a7aa55e3', 16),
                    gmp_init('0x69e399e825a1580deed121242ed3bfb50b10d0e8771f327155b48d7750102c1a', 16),
                    gmp_init('0xd0bef617b370ec44a8ab720b10e94ac7167be806873a06505fe9346aedc84211', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c0005af146aedbb0865799e9d1664e5557205aa68d6ff3f1d19e4fd19aa4c78', 16),
                    gmp_init('0x282ee4f0d8df8d7c2acd2fa9aef908a534f021a68e3178bc477dbb4ed2b66c73', 16),
                    gmp_init('0x7e09db1caf30205bfbd01965f719fe3ff6a9d9678149956d420c07c44e180608', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65dc3247a8720ca0b9a16f74a00529b707cca22b841eb3d1a327715bbef5be28', 16),
                    gmp_init('0xd09134253ee2b56943af5d2b4fc53eb6ba13de473e3ab9f0063ad79fc10d77c4', 16),
                    gmp_init('0x914b0313d86f07c8927757a01009eaf5a9f4d1b95bcce864084b924f63d27275', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9806285c2c97edd9e29e5c195a52ee01424f3a6e076bbe340590b495af26d4aa', 16),
                    gmp_init('0xe2759ee2c4e946657a42659791d910a3d2bb1b1357672edd5094e15159f8a8a', 16),
                    gmp_init('0x65b9f4ca64e3fb0ac7d05855ecafd296d582ddf4fe6e4c85b104245f213700e7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48268a93985eb3acb83bc7215c187857f7194fff1981ee8a65babb3bbbb7e5f0', 16),
                    gmp_init('0xe3b68971c4e9e5198dadefd49195907953fa2c3754fda81927965eb32f8a1d65', 16),
                    gmp_init('0x70d28dfda227278dfe8e3d2df489a4404d4c7290ff0563cc8dd5e9d5ed0c08c8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d163464fda5b40851765ac6b7f2d50dead3af1e89cb8e04f2d66a853f6caffc', 16),
                    gmp_init('0xd94008d7c979b84451382ebb0a376430d3cbf47f727518c13aed4fa7f2fef8e3', 16),
                    gmp_init('0x5aab3070367e1d03c019ce03dca654c98ced247a550bd9f102db097c411ab65', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdca2e347282152d7ca03c4d724f2160db349c1d7e9f3f48baeae21e8aeba424d', 16),
                    gmp_init('0xd97f0cc5fe10d9c155015588335e85c69673669a61eccf092b00caeab0be1b1e', 16),
                    gmp_init('0x2628262b42679592af45901c9f888b6747bd2132ff314e6c94f84083c10df1a1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1429777a5f34c2fba432c3b4850056ec223cee8af46350e80c9879e3d230d56f', 16),
                    gmp_init('0xc60b6022089a8c26bcccedb3504ee91699714a886232234d12367290f75783af', 16),
                    gmp_init('0x15640b8f00f929eb6c136755063dfd88e85b98f7abccb952d62c2a19815afa76', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf52f8908f53e65724c877802f86d7f2f877e05e517d75abaf68388868d00a1e4', 16),
                    gmp_init('0x6410a59c9329b46d70409f8e95c370eb637f4d791f7c4725df70fd2d06204c2a', 16),
                    gmp_init('0x8ff17179c43afc76f9b667e7850bd426a0c3e932358d0db8f67bfeb3e4436cc1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cf8926505ff4a1b1602db976445837bef649fd02ebf4426cabdb3051ba45608', 16),
                    gmp_init('0xcfa08e507ac8674e8535d745c88e398e702b86169b5c598824df61e1b6055046', 16),
                    gmp_init('0x7434482f53a80440c3e2031c354a796c406d6ae5410ca44a2353f3eac982f873', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xad553488fe76937a9f30173d675e590607f43f3e67706040bbf060998b069c85', 16),
                    gmp_init('0x533d887a348d252f08690e2d16f543aa6a3891da4d6ef59488a4d85edef9c7b7', 16),
                    gmp_init('0xf16e598a0b294823909cd24a147a18cb71ceafad3d8c330c937186f1d574fce1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52e616759ab3bfab3181fe63130097dac676dd1b149b7ae681f584f776dc008d', 16),
                    gmp_init('0x3e164e477ff1c32f5e4a8707471c28048262160fedeb4aae313922948014636f', 16),
                    gmp_init('0x6fbd403206c750d10ff2898523e3e83df6a7713517b713f8344d236d7505c1db', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7031bc3ad7a369ec58997b4e01936c0675b73e7cf606f0c127f566c3b8153f4d', 16),
                    gmp_init('0x66d30852b1c152fd0c378e577cff9ec87866411830149176afab96accea54621', 16),
                    gmp_init('0xa73b5a1769060094dbf579c21c48dcd104d7c14ccfb544386fb623dfbb05e5b8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4c78b85e4a88d25801c4b59eae1c84b24badc1a7d61fc39f4cddb9fc2d2ee8b', 16),
                    gmp_init('0x1c1be835570086e9f91deaad7824a8492f42c1bbc6aa2ecec1c01200f484a99e', 16),
                    gmp_init('0xc0cc682fbdf857c78880f7f240d8c27f90814c5af2a162a0d8e488be232a03c1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf90963ebdd914ddde6874182123a73cd0f37e4c0d5b39a7cd85ea0afeaa0d53', 16),
                    gmp_init('0xbf1109ce29f7441f894b5211847c7da85cf12b5c7506dac6db305e50a93ea3ac', 16),
                    gmp_init('0x88b935d00e2d2a516a939ef8ea1954914f8233e2ca4fd5ce9f813bdab28efd66', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56268bd4848332b96139c8828c2bf2b394afe1ea2a75d7feca07014afdbd9745', 16),
                    gmp_init('0xac593d6f6c53b8fdfa4c61ad0ba0664d02bc7a9732e76b934d1c19ddd5256582', 16),
                    gmp_init('0xa9b91e12af9bb2cefb666ce1f0a16d0279b7e647b4a1cb0a01499a2657c978c5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x857ff9f134d68bc6fe8879590ea39834389bbdaebd6a32181af9b8a6fff12c1f', 16),
                    gmp_init('0xe533a2253d5f66e4112103b924c77f24156170d8dacf9dcfcd522f99d1df589', 16),
                    gmp_init('0xf4aa8425223eaf34b2af16053ef60244de856c4cd1a3b3b01051375d8d152d91', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfde48868d6e76e956be138a40a9ed135e9adba96d81b937611c3e138d2b5a74d', 16),
                    gmp_init('0x55c3b6a5bd8c93655c2c1a35e34c668d92203bc9bd83fbb10068f957a4dcfd21', 16),
                    gmp_init('0x1b215fca5edcc75b8f61bcf87a7d4d2e10e85842ef890cb16dbc6971679690f8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x742f597208f53ebd500b8d933c23e14955045a78e1410a3aefcc07689e8eeeb5', 16),
                    gmp_init('0xfdf8ed4f8d196ab843f2a3259c0349dc4e5e4ebd1c2117aab20806b6d0e98a2c', 16),
                    gmp_init('0xe41fa673d1c4439178fa1c47e57ca48b528b084dd0352172618db8fdca1c3409', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b3e50fd635dd95aabc68d928fe761c92347ca61e8fa2a23f5f30c57982feef6', 16),
                    gmp_init('0xa1bba75ecfa811025767a320434c720d3a305a1f3c209cc2d73986d86f058ceb', 16),
                    gmp_init('0xb831d6a8b429f1b772a1cb669da526fd13a30e34fac3749fcd5c29937251e8dd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b2f126d9fc1f59143657203866eae00942b46bdc492dac1f4ee6206f752ce09', 16),
                    gmp_init('0xb145ece101504c66bcac1cdf0d879f29801a4be95e51cf36cc19610ec749ba3f', 16),
                    gmp_init('0xd903a7dbe727b555765107d8c56dff592e92872c6fe874790f5403ddd205694e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf81211eaa399ce3132aa03db897a4ee668c1c3c1fae4e785264e408452a5a7e8', 16),
                    gmp_init('0xecb0879d54725ec7406b1b4078a4450d2c74cfdd31b0e100d9a8792494fcb0ae', 16),
                    gmp_init('0xb7abb68dddb38c95ea06ef61e776f61a04bbaac7db1af3c994baeaa3750c7efd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb33680bbbba41a5b51f2d568edf4a3dcaa060d1e3760defd11457d3b629f6e25', 16),
                    gmp_init('0x2a4f2a125719501c960942099ea8486aff7a115e3007013e104403a577a62394', 16),
                    gmp_init('0xb5b18c54bb72156be9b1fd5db49ec13d90b634933ee86b175e755493c259ce22', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedbea9194ecad4aea24f69cd9c0e00c20b64a558a23841f03674dde37c5eaebf', 16),
                    gmp_init('0xf8cd69f27181cef6bffd2f88c33cb515491d1dec74d9ca829e76aa009d8910c6', 16),
                    gmp_init('0xb7dcd59107cb929c599d410eb0de3df963f802e9f5e163af1f12e576c44487b7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3be280e7fb38ce56a566442f2f4b175402327666acbd8724a3c1f9a9e94d0', 16),
                    gmp_init('0x7d1bcff69162df4c7df729ecbb3a516eb930bc8e0f4d74987924e66e39a61bed', 16),
                    gmp_init('0xc70d71ecdbcc76ff7c392d7590f413e58ba6cd58e0c56b9e558506ad581096fb', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb1bf00bec2f89c6077987661de0b4c0a8d247e4bf17edc922dedfb6af2ca3dc6', 16),
                    gmp_init('0xaaef31ec793517b9ac23298f67bccd1d42729396f9b981da099623463f196539', 16),
                    gmp_init('0x86feb92b6480ca333698dbc13355473c725cbcfdc29e410d083abd65dd434613', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0b1247aa554c9ac52d19fdf565cb8a7018f3d364bb453af20753de9d8d1436b', 16),
                    gmp_init('0x7ad271f671022598e6613309ccc2cfed3197f71bee41e7556bfe1d1fa64e02d6', 16),
                    gmp_init('0x89ed04204acc9ba6ffda64f419a209b83ba3b27a6f30cf465b4cd771fdb09bd9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1945c0ea17c845d278cea2ccd5eef3ee1e78ef291db051809e09fb91d97276f7', 16),
                    gmp_init('0x4be90643c65416d83acefffa964bc6330d670f46647a55ff8ccf75587468f20e', 16),
                    gmp_init('0xf3c78f21af0a5637bb86d8094a82fb771c0d0e5827bc5c8c3a8b1cb7b73d56d6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa951e03bf97756c4f36ac2de5767526baf6961b911f711ad8e6c6a8f22765d1e', 16),
                    gmp_init('0x8eeb173b6b075335b126a1e0d352e3b6c7bf658b6197f282cc7be785d124910b', 16),
                    gmp_init('0xc6d6b1e767c1ae75cad8804621be5c680bb0f638b6c94ceff0e90ffc00e78b13', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7647bd9739150e1615f45247cd95f3772ee6a630f54afa3ee9ae4f39be1961', 16),
                    gmp_init('0x7648ecb12e64b6822a06e5c02c21208ff46bcdd9047a1a668a7bdda2343d3441', 16),
                    gmp_init('0x4d82514ee262eabde062d696224e177d184fa7d040c66240a0a6f0d95aeb791e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x116072f9fba56d946932fcead240c35271d73d2c283f7a88bacc93f9de27cc99', 16),
                    gmp_init('0xc2d5d9ba29dbd4f6f2029f9dea4a6f0fc9e58def85cd7eacdb3b451ad578c822', 16),
                    gmp_init('0xd6926dc5e14b8bfc7eaf9307a2ee977a7dad3275ecf8375bfe46a86e2213a5d9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36eaaac27a740bd2fd9689f21097a15fb519ac887f16ef24201d6a3d33f27e74', 16),
                    gmp_init('0x9a3d01c5196776f29da4c95711e5de59368f3a7ee53ac8b0673d998625aeaff4', 16),
                    gmp_init('0xd659a496af30a51dd06dd2165fc49b009cb9c1471ec9fc300b82a569c5d594e4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87b2062d2f96c1c1d494aeb031d5e5b18e2751cd9fe16bf68dfe8e0922c425c2', 16),
                    gmp_init('0xc315f54a0a7981caec944660448923920d5fcfede1c998b0ad4e86d21fee30b8', 16),
                    gmp_init('0xa2961734a2326ed070a91d0266c86e853ebb5daadc7207764713755cd21f1132', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x255e2f5c94e63d165dcce0b5df24a3abbbea1a127de7b843daeec1256c0487b5', 16),
                    gmp_init('0x64aacc769a0041381dcbc3732a4813a8122f6e1c8f4c9748f1ce469e9b2c7ec9', 16),
                    gmp_init('0x4a29894cdbee70e75adc991e0f35697b8ae5b31c760c51323cdd44e972725015', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3699da7106289f5fe8da3bd4d59e17fd42056cf568a08925a21706b8bfe56b', 16),
                    gmp_init('0x937186b28a239e5a15ef8cf85e1a6314ffeda1bbc480f097e9942bba279191b', 16),
                    gmp_init('0x979daeb65bab67572d62c5343c94916759938cda281d1a327862c5990154c289', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b2ebc75f5e2340964416724fe1c3e6d908e6611a9e15ebe903d2940ac2e1360', 16),
                    gmp_init('0xd59be4614c00047de0f11a5a0e77b504f9ae5fd6cde268a97d1d1ab703e877a7', 16),
                    gmp_init('0x3cab50f318d5715a4cc41042cd8c575132ed3f3acec23ce1ad379d36e217d7dc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x325146ade6e77860bb9bf56c44a13d2c0464f786810c32a9d44ca718b902d1a8', 16),
                    gmp_init('0x3d02e79f5999b57c9345b1428edcda5072e03cff63615102fa2ab40be5911d31', 16),
                    gmp_init('0xecd6c921b2b24aca1dd669690f59b2bdacdd86989b7880b4c84e865b65930a5e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe57ac73e43d8ca11a8a4d31799fc211b2908b03a829cf05c56b502b9cd54576', 16),
                    gmp_init('0x91cc363b8bbb15a49fa4432aa3010fa77b87a165fe9ac4216025fc6f7e55f135', 16),
                    gmp_init('0x759af6b0392ac088a12f7ce4c50c28d23240474bc1d98292ab74b0484f652710', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce380e4706400a1a236ffcc011625bd9def25c51e65e879c27e3b6db2c66f2a5', 16),
                    gmp_init('0x7c6ff7ca4c1c9e3cd2dc39e6a3367cf3d5fc966818a6e8687311a2c7f07d055b', 16),
                    gmp_init('0x4e9c6b820078ef1929029060a68048330dd32ff87837ba4a5a38f1d3bd7a925', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc81b92841f7fb8837fc169ec9c8d143c33b7df5927a27f66fef05a8cced12fdd', 16),
                    gmp_init('0xcb93a0a84f3e8ca329c46ce4787bc903964d4ff330914a045299d620f8861d5b', 16),
                    gmp_init('0xfa05aea426b42de8e444b0537d43edd9a2155062da366008208b233222d162ee', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x12dbeb96c6dd91b897cf5651c4a9f69f2f8fdb9a34b327ebc3f338edfbffecbf', 16),
                    gmp_init('0xf66f3bbeedaa8213c4e8dcc3afc3ab11ed7c9638cfe6222ae2274365b59c79fb', 16),
                    gmp_init('0xc3ec2291bb0e123b0e94daedfaccd0a2b197b6a433b372738821f0439e217a0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c7a77dd2cc63cbd49aaff170aa965758b9423a64c191829d59e063fcc26a887', 16),
                    gmp_init('0xddcc36b839633f523694bc06ec1ab232f3bc952580f3c9d9373d511bd89b83ec', 16),
                    gmp_init('0xfc8b5179b330a02d896f3437c85398655fe139713af429332bfc6da3b50a11c2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb109379999dc1c8afb2e23b84cbc83701357391a77150368bceebc5702011ef', 16),
                    gmp_init('0x2e21c81a7d409fa8de5903bbe720dbad8f69b45b8fa484f650813d730ae5ba1f', 16),
                    gmp_init('0x2778e174ca928d4884decda86a891e594ebf6cc3f8aeb68ae13fae26b2b944ab', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35dd8774c4cc02736dcd3d76988f53c3be577a402c4b43f59132a2440dda408f', 16),
                    gmp_init('0x952d69887fc71bae778297af90fb6495f19d5f1d75a20699ff3e319d3a40d3b0', 16),
                    gmp_init('0xf7f77b4a327b177619e7d8f271d625cd12596e273c02fb7dfbd6bf01df3d4730', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98ce3a78b17d2c24b0b4fdbf7fc41c0b246903f472dccd61c49343d5ddc81e11', 16),
                    gmp_init('0x700d9ebb551a75ecd3ad0553262f97217379e33c389b809f0d9c3671c8d7b4ba', 16),
                    gmp_init('0xd69703e447537750124b65dceb4fc9d86f5e2596c2202a3ff00e90c1bd4a2bd9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b538e23a529bf2a666a2435bf3c4758b4e786e27d53779fe167f803279e3e72', 16),
                    gmp_init('0xfa00b4b06e5ffad5a56f3375bec60eccdd0843f09ac641f7ba69aba95577e281', 16),
                    gmp_init('0x21330a3167c34960d8ea39e240eab20a55daca237fb9df212d1f14e7c7171192', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5ccf14acc05dadd1a48afb82fb2f8e1eaea85ad88a22d3dfc5aa7fd624cee30', 16),
                    gmp_init('0x6d4b2119377e0f55a29542f755b44aafe009e16a9541a924896c9eea18b3e263', 16),
                    gmp_init('0xa876cc8d3c47aa816aa5796b19c0ec98a6e263d2cfe6cba8443ff29918ecf5b5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x776e70c15130cf35c9e096607b80f8be50ebb75bb9ad2c96f79b65ebd080644d', 16),
                    gmp_init('0x62abf71993778c7c0dd50afc1c48e466497817de3e8e12f7166ba8e5712f4672', 16),
                    gmp_init('0x5e380f4b922d433310392bcef6450ca822041ddd94a601ccedbb9f30f99fdf5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x995687391f70d80808361d72e4819fbd966b6776839edaf9a127f0d958ba274c', 16),
                    gmp_init('0x62c8896a11599b98379758fb1749475630ccdba977b8200b6096b00fb1bb00db', 16),
                    gmp_init('0xacf8c3546e77074cd0e9aa1c77e3c3d4ec0fe44562cca85c92848718dea761fd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1a1dc6a8d5dd011da4f59dec15cca5e93e75fa976920deb304b8cfa46bd558b', 16),
                    gmp_init('0x8d6277146f7432102f5b5a4af989390e5a49c25a52d9862f3c999f8024cdd0c4', 16),
                    gmp_init('0xa5d9b54a9bc1758436e8bfda9b010f76af35fcf51d6b8fdb49ff97678e5d5b52', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2e821c7bebd7fab63a2dd2d11896fcd397cca27608875f5869037ebe5c9545b', 16),
                    gmp_init('0xffaad4f316426a30a720ea7c58b465eb452159c10cea6f87db2f06b3d4b49dc1', 16),
                    gmp_init('0x7441d6540088b1baa6bb2d1cc44495068c34ff369efc748176062bdc2aeffa87', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3886343e96e967b7cd6c754ef68247b6cb0aba25f1b6ed5375aeba1cfa2e5be', 16),
                    gmp_init('0xa17ffe1e4fc471e99b4bb999fc47f034d68bdb56d8219e9bb2c09f1fa3676dd0', 16),
                    gmp_init('0xd1330bcfc8a0e245f98ead3e3816ce4ab7f76eb604040cca8633c59a51f25654', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdaa84b62a66854fbc1cbbb462d0c6fb22c200235deac6e71c472440e77423897', 16),
                    gmp_init('0x87260d5b3d93b0f9c18f81df3eafe5c46b9109e23ff5628eb940d9305ac89645', 16),
                    gmp_init('0x9fbfb7f56d759c745bde82c6010e79f4a35805b09c781f205c9407752e5d0219', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x943b491b06df31cac16116336119084dc6cc7a7ba579c175c768c7eb05c85a31', 16),
                    gmp_init('0x140517a33ba50b6f00ddcdbd182b0e275f441c3a87dd97cd7321b67d7405d3b0', 16),
                    gmp_init('0x97f70aa867bf438ed3a5bdf25bf4c5705af673bae691e020bec240c451f8647e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x275a3c725cdf8e14c6225c884eb633a2ffe64baf12c55bb0066a0bbc6d5f855d', 16),
                    gmp_init('0x5b09938d032ef6b1eb3400a9a59a6b74881e9d9e9b46b4ceb443c6cc97b61875', 16),
                    gmp_init('0xd97858baf32f5702620efc4449e7ed34426b978223a3e3ebfe81326d3a0bad47', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a6ca92fe5c5a42b97019a499678e531e1ca5e2a4ce39d88127e6bd82c4082e1', 16),
                    gmp_init('0xe9c47132bec756a7518052d761a857c1c16defa6d5102ae0bd84ae068f01cb87', 16),
                    gmp_init('0xf4903ba3bb4b56ec795250c07873b5a23ea007f0ba26c8f6c56091a01c237f3f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1037701e902140d2b51c0ce34966ef62cf97b2f246c5202ddc5b04312325fba3', 16),
                    gmp_init('0xa84554bfb44ac0a5433dd199963181707210e53dd7508c702a0d4bdfa3e580bd', 16),
                    gmp_init('0x544f5616f97109fbde5a116aa7f37dad9c32527c8fdd7f7d57cb449571b8c67d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3c7072e87920c66d95065baf657d1aeab4712467a32eb4403b64e45606507a9', 16),
                    gmp_init('0x9d4f2b0c82d0913d71aaf156607ae13a2e4808355b37667d59bb7303274ff382', 16),
                    gmp_init('0x5a2b2f1767bdd82656b584ff1c6997c7fbf8ceb0ad23142d5f933616f852e490', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf47eb9989a95996a64ab631931658d5ccaf1f31297d086431eed03d52f4ea889', 16),
                    gmp_init('0x8b85c810ca1cfe72951e10f1e008b55db75e292ffce0e4aa428fecf914f2590', 16),
                    gmp_init('0x36bff827fe9873106b4d3715f61437a0f8ddcc8577e6710ab4c5125ccdeff2ea', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdeb42489c812b43168c445fef3a1303810c9fec63cdbea29330691e9d58c8d1f', 16),
                    gmp_init('0xca4840a5028f919ed35123cb5803366b55abed9d78338f458a8eece1f883cb16', 16),
                    gmp_init('0x30ea6265f982a55ab167bed86af8edd44ca6c36f6a48bb861c98f4800403bbf', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35ac9ea1a50c5470003e8b1d5cc1745fc21de3f749fc9d8c98c06044edeec4e1', 16),
                    gmp_init('0x1daa8ca9d4b74b129115aa8762af47f69ac734a617b46d58c2d5b8a7f5c995c3', 16),
                    gmp_init('0xd43dc6918f76a93ec82654d03eb81eb1aee164ad9dae6d5010d0eaf0bacd2cd4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd247b66305dfd5c979c56b9e0b81d09a73f78da3371479cce70a8073e503fb05', 16),
                    gmp_init('0xdd04d40130468de396513828edb55653d3acec3e18f39946ad04d07524df7c95', 16),
                    gmp_init('0x57e216d0d314f3e497b47e281a47a426e12c273076e24a7af1a8293c2955bb70', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b9c4975e4ce5a283814b17998a2d970393ea365daaaf18c5ba2b592a8025855', 16),
                    gmp_init('0xea0551148f5472156988af2ed46d90a1c43f120a04f9c6eff78039f2df9dc45e', 16),
                    gmp_init('0xe0e19e05ebdbb1ec96a42a95410fec35f9cfce17ddc95e46c3ba85d2a7fff24c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf44625cd49a9769cb550dd36fb6038f4d2d2d10929b18a920ff16da19dff721e', 16),
                    gmp_init('0x56d786a5f5166f0ca0f4214c6d9402f80483164d67da2f8fc5330649a1781d51', 16),
                    gmp_init('0xfdef8506771d9b42169f096e7486dc1960858b168a0c41ab6adc26729a0e3c23', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4c485b6f404ef8b7b122fe6bdb582eef3d00ffbec08d042562c962d645ceadb', 16),
                    gmp_init('0x41ee147e5592f88d6b42da27c1b0eaa36098a49272e3e6e0c724d0485115f86b', 16),
                    gmp_init('0x43a0fff6a5f7b0f08dcab2e03df1696111018bc0f9b6632297ec8e63fb435566', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c6c2f69910848704fca41c21e433f75550fff11925de206cd7dc103535887f5', 16),
                    gmp_init('0xd948753c2abcb30077ca0cf001a1acedfccc997e01d43e7292986c588626ef61', 16),
                    gmp_init('0x8d65e5a6c16bb80380fe6539fa2b0399ad30ecc3d2054cfcac1fe320adef04b9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e52ab902eccf9bdfc5c0cfc31b98e1033d8e79fbb958f0540137730394b36fa', 16),
                    gmp_init('0xa3a5b73bfe75f56684901f3df3bc763591f668a110438c64a1b8ed2c03714bc4', 16),
                    gmp_init('0xdef960b94634ea2ca8b2293482b3c5fe890df6484b662b9413a958b48a7601c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b7f26348c59df7a71a7f5daef1ed93c912f3273ec95d6d5cdd9da31724d2789', 16),
                    gmp_init('0x79b036875a4c35b28dafcc9a73aae864f9765fa10d9b19b25a18c8d6713a1f8e', 16),
                    gmp_init('0x13b44922ebf6103a1823b3bef50e4c6822ab2ef64075d790a7cf0c8568741feb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44a588e251f5559eda15fcef8c650ba5a09060fe4181014f4854a6ed75ff7197', 16),
                    gmp_init('0x5595e32aaa5624467f358ae2d941ee6ec78da15352034729ac6019bb9ea04b3b', 16),
                    gmp_init('0x66cdaa8d65cbae802ecc4e329747b837eca6dfc0fea15a1a81e52088c5ab8268', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6a74981402572c48250df371ea51bad7af409613de1156be177d2c8d85cc69', 16),
                    gmp_init('0x75d3dcc84d30656c0aa240114310b4f353bbb1f1084bccf25a3a2a5968a678ff', 16),
                    gmp_init('0xb44eb8047e5d0bc527c140081c603fa7f4705ee83a4ec8488f2bc90b9386c970', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x58a9a2cb627ae6af182ae08d105be0686ffc6b3e75852b5d891836a012958859', 16),
                    gmp_init('0xaa8e76096e143b01ef57dda284ce3880c439af886a2f96c269a2721f14098c4e', 16),
                    gmp_init('0x74e5b2ac04328532a263260409caf51d0e3b81b95cf1cc8a2b45daa41498ec0b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49dc6d0cbeb1007f3d6c72f0dd325176e41c5db3147d39903d77ab3b10b4a9b0', 16),
                    gmp_init('0x12faf753e782d561f1d5909747c4926205ab0a38afc1ea96bf35607954947d50', 16),
                    gmp_init('0xf1460b6a26fb52697466a5dd7d59b1579d5c2f967a91fda6cc7279ea3f652654', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb36203cea39df0528597d52506e01477c8b99ce91024a585907933ee3a15518', 16),
                    gmp_init('0x75ad39e6a6225113856dd928fe19a30e592b7e18cf51b1617d36ec7a1ed2f978', 16),
                    gmp_init('0x6628db234af3903c60fc22b52cc3aea2657692d9e14ea4c5825f4b8f1bcbb56f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ba7da75ee03947652c9781f9f742e41c9be42462a69ce0439841c42e3fb2d5', 16),
                    gmp_init('0xad223fdbd9f680d2bd839b6f901d39c917b08c5090143e98adede2b7fd34a1d7', 16),
                    gmp_init('0x6bfc7d4018f4531533935d73411689cff154f02a5a37a79f0787af2b414bf05d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad2877ff9a1de454a4ddfafe744917401aa5215fc39a4f6d5611ea08ec4e8b16', 16),
                    gmp_init('0xe3cf4ba2292e3f4ea0f83dc4784662da3e2a02abefd690a9cc86105937d501e1', 16),
                    gmp_init('0x66ece2387fc5b61a06565d0a9d815711caf8ee62f5084332056bb62bf001a574', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x700aae1ca6586a4b3c642cda12d4dc2d547ad408dd7181aa769befc205b096cf', 16),
                    gmp_init('0x1143f29bd9736ff082703da2bbf5f357bda9c549c8d201965e407400082b1177', 16),
                    gmp_init('0xd5aa7b6d68905416a993278f0d77cc24af638a6d43411f5df118c5e76f159e88', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x873380348d4d8241ef2b04946fa2f74da9955852bff201e802a1c2fa3b96893c', 16),
                    gmp_init('0xcf8778e8e8b6bc3395ae306cb1ff672ddde9cad48169532d91b5fcf81cb92567', 16),
                    gmp_init('0xf4015a2c8e3438fafd90f33d97d4aa74563dd3495229ebe672fad2bfb8314788', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde940e77466272339cc83295893768a59e6f2cd9424f7e27ec62eb6c7ce01d03', 16),
                    gmp_init('0x2a97d1bb63313040069b3ecadd374e5d21000cbc50f48a91f1572b9cacd19574', 16),
                    gmp_init('0x92b6f52573ef7c0d7d3f29ebe716fee31523c7e8a1ee61efe21d4db2f9ae95ca', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x951ca6331046adc896851a76660d32535ce5439e1cf3df3ef71e16a98a349475', 16),
                    gmp_init('0xdba09e19107140af618dbd0b6a70b15bed8dee7be860b09a631a0ed8ce5165b6', 16),
                    gmp_init('0xbfe1a9deb25940145c680fd1561690566c3524e29f50cc17e24c115aae3124e1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f0493f52de6777794a5982e5d88ae7e5551fe690fabc2f48cffb6c047eec6aa', 16),
                    gmp_init('0x8facc8212c93a28b3f5acb0885a4d296da48dc16129efb59c47cb87a66ab478d', 16),
                    gmp_init('0xf0c887054177aca5138cc5b3e4e66e550a1abb0304d3fb3899ef4921a407c633', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d4265cfc390e8afd5e29760b638c23db2e703d552a7314c02a8c291436b8dd', 16),
                    gmp_init('0xa88a238678d0c8aa106a8fe027ba111aa20e3f12d0619772ca28b77dae4d710f', 16),
                    gmp_init('0x2add3ed536c4a85b4c3c72dc15fc890e4c555fd627264c0fac66499d3fb2fd0b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd233bdd42dc6465f264505a6bed10b4d57c9cd2c7e7e83a2339c0422535efd4', 16),
                    gmp_init('0x38fd5fbc86a67d4c93a8b8cf3e1512d9b9c3fd7e76cd76786c4dfcb425546dde', 16),
                    gmp_init('0x2f28be0fd05231bac5a3e306a492e602b8c95fee8454281704d939a8a9adc95d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeef2632ba4ed21d5b9ae97dec5ad1923dfee3abb0434ab0255365725da1593d6', 16),
                    gmp_init('0xcc2850aec972243c3bb6d7cf4d0dfcc6fc7e97b4a65ee79136289bd15770eb59', 16),
                    gmp_init('0xecb26b54eea94859efec18a83f30c78900a6dc6b4b5d8ec35b130117503664f7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7918e7a21e6ab928a789513ed015f1c7402651f2ac81e0bedc4a3e4856997020', 16),
                    gmp_init('0xb921a6c409951ee26bfa28f9a9169d7bb66629b1cb9eb2b53eb6b4e89f0f225f', 16),
                    gmp_init('0x26f8f1722761cc14a6fdcb2ca4260a7f616fb159296a0c69a440300f04b6de06', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6533e3c01a3b66d2fd110c43eca4dca7829258e72fea8212d8d4ca08d4222e0a', 16),
                    gmp_init('0x8119eb24cb4b1eb24426056a561dcb408204c6ba4b8d4127efde4f18eb7283fe', 16),
                    gmp_init('0xa39b3f319219852fe9684f22e42f98f49fc73474d1d7489873bebc50d629c608', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xae3d63904e54ad260bcececda385ee6620c35bb507c99178c07a734098268e64', 16),
                    gmp_init('0xbde712062a80f1e2f17c9054540af57cd2fda4ab97a4cfe846cb8e73e7d463c8', 16),
                    gmp_init('0xb9631a681d76729dbe207fb88ed270f07b7f28bab28fb56e23a04af0d21c4186', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x367df2310271aff98c1ea4d59c9d007c7f38d4ed6cab66e01fc7577fac1de897', 16),
                    gmp_init('0x7fc990bb061160733f948d9a3ca2f86925fdf2ac3d50332f7802116be6f485f5', 16),
                    gmp_init('0x5cd4c29769659cdc6ffc34a5b78dce8f11abd6e797b21ccef538edfe64b98078', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x924c1f2a0c6772ee9ea35cd5daae9c572bb59aafd250933664bcf6ce18cd1910', 16),
                    gmp_init('0x60b502b97ad681af7d8f964f954fa91982a1333fd02293be9589ae82f81b0164', 16),
                    gmp_init('0x2c33b9d09c3fa8ae73de4da9602fd118fde3eea4c91050b6b3029e129cfbc7ad', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f2a6d056435117740148448c8dfa248b7432a5bf7d726aacfa09f420dc23434', 16),
                    gmp_init('0xe63bf94c82ef533b00174162d8061f7aed89767f85810bcaea3b0b347bc37532', 16),
                    gmp_init('0x1df2d2936ba8eb6c4a053a73970d61610816456a03443c9cc4c5fb0ec3225b2c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fc49a5fa1c5e6cee6cabd7c92768a159c10e8f2cde9067b1ce92a2e8415e065', 16),
                    gmp_init('0xe695239b7d93af052dba1ad1f8bc069537bb225394fc243d7d7b42a032ca2eef', 16),
                    gmp_init('0x35e37f06397742a9cb5f431972387e760125b088d87569297063472b01471dbd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb11f3d2aaca12240551b103a5f52843bdf9a0f3227cfb957ed8805794631cf73', 16),
                    gmp_init('0x98eb555c23e1e2306cbf4947a9b8e23599622bb2255c7f93612ac822f628a05a', 16),
                    gmp_init('0xe07260612a3729eb8644bda8da5a255e205a7895fd3570a440de62b0f8bbaad1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9da8f09aa1f444c442677b54e9f23d436c744a3f6b63432df6f382e4b55221ab', 16),
                    gmp_init('0x58cb7b857d0824b92e73292e73ce534e9e56dff8ac2063e8b0b843ef75085ad9', 16),
                    gmp_init('0x492377f3c7b6294ee136f5a162bdeb1a0e0118b23770015a8000848b1b867c5a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x106bffc32c945eede4843e17897eeb672f5e7334bb3c29c3242f07872b5be271', 16),
                    gmp_init('0x6faf7d04d8bf1ff86d0f61917baad22c97aea561b2ca64047afdb0840b991431', 16),
                    gmp_init('0x7056feacabac0bcd5cb01f4dd8da4e200211bfa534086c5d8887a9053c108eb2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea600166c595907de513f2abc5a37cf6a4a5d0af86ecb0e511c259fe8d816eb1', 16),
                    gmp_init('0xd477357871ccb0684db9a77cc742ab97604ffb7935aa384424d31133934787fd', 16),
                    gmp_init('0xc21dafe3cc3b5f1b468d2fee75044110085859497846a71341087bca65ffe19e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc8fcab830f0dd792a579ae6f8f3852e5d5dc62c2d2a776d278a3a9a66459050', 16),
                    gmp_init('0x98bea0a56139b05391f872919170f85364501ae5dd051e5216b15472cdda6621', 16),
                    gmp_init('0xc3c5f842340f15a2bb2408120a5db3c8ec319b98ff274345cd0b2a5c526476f0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf358ff87fcaaf353b62daa0907ea142db26677fe8ede3dae50dc67376d81d12c', 16),
                    gmp_init('0xec3d5d95d0ef80e131886bddbe6a814e4a8de2c7b846d9c3e904edaa92e2941a', 16),
                    gmp_init('0xe7edef74ca7fcfe256b663f2d5e900f0c5b9981fed910b268e11ab34c3d54efe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3167deedcd3a51ec61ed68316f80e477e8055ba4e6748231fe3e00fb4f22644', 16),
                    gmp_init('0xa8c400f3c39eb7941582802718b4dca5bc980c7d8ec8af7a1fab81aa76240bcd', 16),
                    gmp_init('0x6ee396116468d0359d9e5d38383b92ccb51cee575037df7efa681f99548efaae', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa46b53addca4d640accf703604961a2453c4d54ccaed0ba6fd8730f31c9c0bb9', 16),
                    gmp_init('0x61c55a20baf66649ad049adc84c1526925f83b338fbf5d6e789a79afae94c245', 16),
                    gmp_init('0x429220324af920b81e592f31dd0d782b850233acae3da4680c46d901d58c7a73', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5643f3d130674f26e4a56dba4ecb6b53a96092b1e850bbd6a98f31c32521992', 16),
                    gmp_init('0xeaa5ef83475a878872d7c4ffcc93ab73c7c1e8b130572e391856bdeeb3cf317b', 16),
                    gmp_init('0xfd063e559801e02b154b3b7a44747165b872ec8922c5830fd7ec617a451b28ad', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55ab3f82064b9ad811f6ea7443365112ebfd5a00dbaadae05439c4b7cc05a5e2', 16),
                    gmp_init('0x35db6bea2e0bc81adea0cc1f462b736f5b3a74060380fa7823070daad44e15d', 16),
                    gmp_init('0x5cdf254fa2f23f7065448e638c0e2f4ea6e368e0c5735b5efa05d8c4a78ef3f3', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xaa88ddd8a356ad175a03b5e09b23ce235a60f0b1f543f447a8721a383e6a55d9', 16),
                    gmp_init('0x1b082694ea928049a4aeb742eb01f9b6584e5f7d027fd88fe3998ff06805287', 16),
                    gmp_init('0x17ce0894fa733a444538116b8fdc9dc1b0b8167b1dff6ba8739cb1612f46034f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fea1067de0e541ab6eb587ad36ea86e936e04999ad46f9f9b0c0a6c56afbf', 16),
                    gmp_init('0x11092bdd01dc5ceb2ad6ffe233338e5ece10a3843bda6c72f121ea5d9fc498fb', 16),
                    gmp_init('0xc3c43b38bb33b70a22238b03dfc1d196b521f437101f3bec32fe7e79ed498689', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85a5fec90bb9e7ecff808a27b44f30a1b539c934c6e347972ca69e76ffe42403', 16),
                    gmp_init('0xf7a6602c879b513115b9ccb96625290efdc1d1eec0d82eb12e3ae73902d0d7b3', 16),
                    gmp_init('0xf23ea37bf999814e200a64e371226434f719aa97bf1943fd3a1bb152380ca3e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe48a94019ffbf1f1e4ea0188b09b003a6b4ba056840df7af755197ad4af6356d', 16),
                    gmp_init('0x88b71ca53cb6e945d3ca87b6c9aeeaa0a0043194630397ba42c30be71b36c7a', 16),
                    gmp_init('0x8edb921e2f38f321c107e9d628227b0bc6cd506effcdb0ca18c23676843b81d4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68df19db343abbc057f3da239f757f8f17fd0d4d814e63922d918fd737c7420a', 16),
                    gmp_init('0x35e6b7684f47d18eac2473f09ff92aae13e23ca2eaca9c26dd2591ec23b406dc', 16),
                    gmp_init('0x343cdaa82021417bdaa73a56905c863714d6b278aba9ac2f5cb1509a685231d4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33ca2be5f07be710d3a83bb29171c5c7c7ae6cbdffa9f63ac5d8008f3b600a7', 16),
                    gmp_init('0x3af242fd8ca08bca1ba9dfa23cdf5b1fed2338d7392a014db38484589defaf2', 16),
                    gmp_init('0x36136d144a658822f6b83d5bf78a81fc87797a76139c7e669e3444d1d73c7460', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ec10a3c36137f5de2d5aafa5533bc093e2e11d68a0da83c0488999de678da05', 16),
                    gmp_init('0xe2c599b0a058fcfaa946ba8a32bb5656bb91f82acc48a1167ecfcfa9b908147c', 16),
                    gmp_init('0xe4c494ee5147f7e389dcc1b8e5bfad4fc0e382e718d79c902b3466b40b7c9e6e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68b50732ff021bbd87e1ca57527c74516b4debe5f85ff02cefb35a9af5142d11', 16),
                    gmp_init('0x11c5d541e02c6235a71945cefc32b8c9048a6db491301b04eb4ad291e4bedba8', 16),
                    gmp_init('0xda5fcf51dffe1c152820aa110e16350e4cc22456b696158d65fb76ed389a65b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126e34470ebdf9687320ce3276afb26a46504a18e66cbad09ae667d62afacb80', 16),
                    gmp_init('0xff8b4d1ea10e43a6351060a96521f31b364e93990352952a24dcdb6632421914', 16),
                    gmp_init('0x4671957210c79200de50bd5caac5a89b9c49edecd75d02672360d71e8f9677d8', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x733cbb9d63712171934f7182c9c58eff4ae5a1933614db94ea34fca611faced7', 16),
                    gmp_init('0x1475e2f0b03f8fe6b5803761b0f48674f4f8745f4fdaf529b98c0a70e8944bfc', 16),
                    gmp_init('0x71cf505ee71977beb6145c390fa03cbe4536c9f20a1be0a89c9430192c923106', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cbe46111eabfe0c13654f1fab696fc749f1b2a52dc43f417743158d42216c1b', 16),
                    gmp_init('0x7f54c1f311c85c2d4343717aa0641d928f39c960f9acb985c5fe9a1f100d86fc', 16),
                    gmp_init('0x79615b0c37676bfa66da7e42ab32c489144e006db6dd3f8026853d746df41bc9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbf351feaa609f4d4467d9aaf41ed9d3ea33b294642c7c62400c7f05f644f579', 16),
                    gmp_init('0xcbc58a39a7e57dd658a1eb4a47058e6e27ebfed94b3140eaa265a95ae40cbcb5', 16),
                    gmp_init('0xb8982c956b73c29d735b1ecfd5e5b57ca7b44a8436ecac6b2d0bd02b21b9b395', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf16692b89e23a22e3c9b10161e19ae46673f7e6055f70138e38f09ed76705518', 16),
                    gmp_init('0xb5203ee79895b5406f239f9de739b1b58e410c3de8bb2b5f8a6cbf17d97bd274', 16),
                    gmp_init('0x5d8c9db05e86bd74557233d4c4e790a7eaf03ca04325b49e17e3ab187eec0c29', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58e4fa148e0cc6a1d3b3b0e6f342b2452d0886494aaeb3bef44cc9f62d35dd2d', 16),
                    gmp_init('0x7143836e1326e2488bf628e329d13ad170af1c05774f411235197e2a5139f29b', 16),
                    gmp_init('0xce173f7e906f3553ff4d996052213e26105b8aff34ff129d29a36b3b5748cea1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed2e7684d2fba4ad7d7bc954b87aed79555c3aec93c420d9aca146ec07c2ed86', 16),
                    gmp_init('0x3d45e83abf7899632fb65289b3d768e86c423226d3967435a08a13dc27b5ad14', 16),
                    gmp_init('0x98e3c6922e7a8033b4790585f61fdf36d4c237ec3810dbc2b2fa1d4bfa188272', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17eb6c27cee1b70d499eb2cc41191972a1e87383660a59cc2aaa705698fb54a1', 16),
                    gmp_init('0x48453d390b60894433884248d09b8490afbf7adf91ec763de1faa4eb4a74035b', 16),
                    gmp_init('0xd873a69efb44a54dd5a9ea8ee66eca46616ac57abeae7a5c718cfa9ba03d9009', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bd4b9e7fb08dfc2ac0564368bf0d995b81fb5fa6bf034c3f2e166e691f3839e', 16),
                    gmp_init('0x824a3cd8e6ae73c9eba0ca030425a9a78332e729cd10bad37c5a863b741b0e1a', 16),
                    gmp_init('0x149a717a79b5372bb181e944f6a52ed57e7006ebce610123485440dfdf06f578', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf97e6ffd3e2551ffc9b03b7c34b406cbc28b18084ce0a0760280f2f88c719b5', 16),
                    gmp_init('0x458d11edf2b2e603bffe643e244709e0cddcb7af4e85ed39eb70d8bc20dd9a7c', 16),
                    gmp_init('0xc567018891fafaa26314a4ab46881989a1a98249d26c5115dc47734d7eece6dd', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb714dd85f24c98f193bd298648007f0270e5e3264a2d5894f2787925b626e4dd', 16),
                    gmp_init('0xadd2dc472d844cedb573838bd0271a378c99c3f15b61792fd899b5b14127bccd', 16),
                    gmp_init('0x3d433078c867fba8b288ee4f724da594fba5ee86b3ec57889e029c464af59d77', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd43ff466d74abd82c71e9c510cff2f4c580db291d3f8c893ec46fc135652f0bc', 16),
                    gmp_init('0x55839f8c5693f06352afa574b7b5ba04add9f1f0df1610aa695aaad4d9f8c5c4', 16),
                    gmp_init('0x459d31b61a7ce9d07fb2ebeac25c732ebd0ebdd51b867289a54f19cecd4708fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xace2c4ac6e95462f79385ec169aee04a2e5c729d298244b6d19836a0e73f645b', 16),
                    gmp_init('0x767f7951b60185ce28b5b6f16cae306cf7c621cf9fcc70c36cda3af66cc79e5', 16),
                    gmp_init('0x6b47a6a82657ea30fe3e54434a47976c15658ba55789d8a14cade652561e6258', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97fbcfacba7af9a0755f2442fac0c6adb517aa3abc165fc8412ce28aea6d1a39', 16),
                    gmp_init('0x3b9d8285d227bfb20b0e2fa4c12b52649577532a182a54bd239345be2a05ffd2', 16),
                    gmp_init('0x513c6740d9897132b36af7ca06e1b3144211d8f96dff27f6956ec62c4b0d5a3e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27edc619171983d84b22a4f9f0c4e14a397463ca39d1c838ba73cd67884b3f83', 16),
                    gmp_init('0x9ab9fc2b48997a80d467031072ca701d9472ba32bd338a3aefbddbc224a5c775', 16),
                    gmp_init('0x1946b046a040a272eb8160167b12d66dc91fba7b0e4a41397260bf8c782b661f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9826a3a5c315a9e311899a42b0fcc61ae00ecfcea5afad3da5b2b00b40a3205', 16),
                    gmp_init('0xf053f1bd02cc9316082dcba655cd7dabf4f3549b71b845935d39696ed2b3e5d5', 16),
                    gmp_init('0xb61bc4c5beda1c7c8ce5981735a117e2a64a074b38cb69af1bfb9b9e5bf99945', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d493c1faca854301c89d0e4dce80c2d243d245ce9a3767fa80d66183c64f427', 16),
                    gmp_init('0xdac193208d1fb4f4e655e257452bfccab906d3c86b53557600cc83b918364cb6', 16),
                    gmp_init('0xab3b9f9fad72608a10c19f6c77eb211c9910f0e1b0f08d522f39289687f6f9c0', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0a8daff1be88cc34341fa7f86559ba7a44bab099ce8bdcba804e89d6a8abb99', 16),
                    gmp_init('0xf9a31df187fed567de8aa1277889378249690d804a0e232683774bf4f4ba5dc0', 16),
                    gmp_init('0x9cc23436f667f40a6f611bdf0c4745f91543b7ac7becf41b4eb2eda737a4a4c4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafaef01d7451a990cbf4a580ba3c635a1b6899b4bce134c688a54ba834133729', 16),
                    gmp_init('0xe56e3fbe7c2bd9d506693c9ff564aacd6f2ca0fc9b447b719d6e9ad82289aaad', 16),
                    gmp_init('0xa3c04d39597f9ce5a1484c4749e23205a1f4b59cd1a4cd7a9c3e55316e8ea156', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a875a9f66a6c9344a16efd7058bcf53bd2435d8a306ff5210ef71b064764ddb', 16),
                    gmp_init('0x65833f066cddf33c5bb11d194877a8aa7fc1765d1dd6602e450e2191d1ee79b7', 16),
                    gmp_init('0xc46ebb02776b1ad2861d9c6fbe7b9491c3a31f9e4885392c9a4bcd1b45b83e47', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8d757eb82fe837272828b1c8aef9ec13236a7c898adf8d3319e447a137317c3', 16),
                    gmp_init('0xb5d1bce74561e9a940912d7e96ea84c37297e0cf79c1737de51ddbc99f86b3e4', 16),
                    gmp_init('0xd22a9f32a9d8feefea176ee6e2c6ca0032c3213a04555001b2fc9ed7b9fc737b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6136214914616dbca796a29eea315462e1d172d8111c8385a521c717478ddd3a', 16),
                    gmp_init('0xe5031bc85d64938e580498e03b0798724acf0e2da662ecd672ca787458868c17', 16),
                    gmp_init('0x27ff3fd9abbffa90c60d4fe65981a2624670e38753bcd7c7540034336a50fb2a', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a39968a5cab3d9670752fac141a1ad8cf501da2e5a44aa064ed0b8b9a92725e', 16),
                    gmp_init('0xa384e51c8e178beee477ed9ab1cbc3abf7bb5c54ac4ddc29ade6193a93f9fddf', 16),
                    gmp_init('0x4021c3611aa914b12b3ee75ba76877465d91b9f00e0dea10de0aaed38842c410', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa0eca54e7cba8770a167c5ab7df895afa1dfd4962221ebda71256889922f89b', 16),
                    gmp_init('0xa692c2936e49b7896dfdd4185c01d615aa9a2bed1e79559de6ef27039f8c43c3', 16),
                    gmp_init('0xa1952dcedf89d74ec5abf34be4a4656835979459e3f7fb7029aa87ef54c6dcc7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bd07cbff240146193e2dbd5658b1a74d61d8416d293bb63c1b0707a30a309d5', 16),
                    gmp_init('0x6f3808234352b773dd0b0b539b41bd8bdb7dc4e1391d3efc6dcbc607a175be17', 16),
                    gmp_init('0xb4d006d425b7be0a7fce642a66ab9992854b974163f6b8249d0bfc55fd055b04', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe10080428e1d372444c7e733dcbdcb2582d99fdd60d084950eee9437a0f4d28', 16),
                    gmp_init('0xd0c716e01c008ca7fab2828a18cae574eb33396d2a09f747fd22a5c27c485981', 16),
                    gmp_init('0xfec668bf2ace3be389970ce6a23c1ad17d7d20a77416211f07299b5118e71677', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe240d73644a3b101f7a1f8ffb7a2012745d9dff26fa4e88a75b7023fde742bdd', 16),
                    gmp_init('0x764f7edee657c21142b0a841b82953ffae9efb05780c5324edc58240733cfff9', 16),
                    gmp_init('0xbe758d80e80418df32d92412435d4f670962860dd12719e2fa136322b98ebfd5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x486705a6eb4c62d2634129f5e22c1351fdca9abc3f0f171d2f9fea9068df41e2', 16),
                    gmp_init('0x41c463a9931ecd437b46343e5eac5612d5de5294700b4eca6857bd7894133214', 16),
                    gmp_init('0x27498e2904c7a243d165bcb4c121f62c0aaab3ee9ad3b8f612e7ce8ee8848548', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51c39b1abbf8539fe01caac8cd3f9f4e5f4643fab68ba727de8c5edf2623b67e', 16),
                    gmp_init('0xc0e8aa097f7ba1c78a0a474e6c203060405b9cb7eee4544a06e72d490cd09687', 16),
                    gmp_init('0xa4a73ba07fa900544c6ce03d51df2da07b9fd8c9171cec2f95235849e69bdd14', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe46bf4854da55c7519445c5b2c6cde3ec4b37cad805fa35fa28d2505cf2e4f3a', 16),
                    gmp_init('0x3ae87e59dea46df8ea267c62e6e84a56f374ea13df5bc0eb1cf2895647df5c6d', 16),
                    gmp_init('0xf8cd9503c6de41f168d9045d3e14ed6c4ff83e2b0593a51a5f5022d8a4bdbcec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91ac781dd6d22d52738ba9a5ce553fceecacf53b0a7c3c52c7458be8186522c9', 16),
                    gmp_init('0x85976bd052c56a04112b5b044ec7fb29d8eafaf5a959423b528c4d282a3c200f', 16),
                    gmp_init('0xefbd4d9fc785bdb87673064270533673f161f975189408653d233fa00c7f27fa', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c79c1b75d9ccb2d897184a7cd2d7c8b73d40c42932d80c642ddde5278eb268f', 16),
                    gmp_init('0xd16840b679a06de0e489afd92d48d779688591464a1c373f7e053a7fe0946424', 16),
                    gmp_init('0x223465e989bf8fd9f6bba72c3edb7ac9e204dbfa413696ab37a3068cebf4dcd6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39fb15f5bb0636ff9338b0dc31f85528d4f20ff00e73295fc348599d68b5e934', 16),
                    gmp_init('0x6ea9c137aea0f868b77073a346d80b18c35dc25cf168c63355d46d56fa094bef', 16),
                    gmp_init('0x24501041e5f3b42283091ca6f5c1161eb83d108e71716448feb46cd1b7f886de', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3d598f5241f678b8a613fdcba5f7e1e1cdd68770f7cb0e0e3cbf408e69dcaef', 16),
                    gmp_init('0x6f630868522d353fe8d78da766e4594b8fb826a4a6b6aa8ece003c47b1b4c9fb', 16),
                    gmp_init('0x5fdf933ba344999863c6b5bc3c888faee542e69b3faaea3a298944327eb47b02', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42843f98b76de0a7779c0521b7a0c6f57d4096dfaa7724ec2080998e0575a861', 16),
                    gmp_init('0xfd2a5ec7dab8598aa176835ccb8fd3a4ebdf9d42dfeb839364a31b59289c90', 16),
                    gmp_init('0x9861dbeaa75b50b528193cf12c0574b7832c85ad50a4069268bf4394a83b39fe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b9ff8c5fbc6e2de170da67e1a93f58ee145e64b1427e095737ff0442c139219', 16),
                    gmp_init('0xd9a6441906e5d8bde6017904d121b3f0c3e498220f97420a633b456c3b600414', 16),
                    gmp_init('0x1ec14e545ea9b68eafb545216b844ac5d57dc63037b3363510c834f632e632bb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf623de556ecf8391cbe3cb97673c1013cd1d5bc9fc2ca3506c8a631b0f0ab8f', 16),
                    gmp_init('0x5c76bb32d237965d2d160ba8967a5f4d839975eb45ef716292442b047dc86f70', 16),
                    gmp_init('0x409185a91f1bbfef02554e1e4d6858c58a0c1f0e8e4ae3bce4b208aaf09046cb', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d3aacff4ac09e29655404d1bb620fca5166ea726242613f6362b945205d17e1', 16),
                    gmp_init('0x29ea9d02860c6e311d4cd188bcf43c3b81c27bc927ef7e506efa2407b4c9d821', 16),
                    gmp_init('0xb5b4860c9e3737f2657140deddb0a61e56f6ab6193a3efe659a4301e0f0e9aef', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2abb0a9853534d2838c3cbd6e4d0bbbd6c3249306e4c94c3f1ffe20a1b28515b', 16),
                    gmp_init('0xf13895c60cd41fe46b4fce11d3697c672c1c388934c530dd01cdb1653116917e', 16),
                    gmp_init('0x746628c1cc313bfed7087e54c08aeb532436525da4183ec39761f145a0cf77ec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x995932634b7f179d03c54a3e6e1dd49bb3db5e4f62f55c34ce26ccebff70ef87', 16),
                    gmp_init('0x5abd3f6ac11561da803930f997cf4af6666742c9782eae3d45e6987aa50812ca', 16),
                    gmp_init('0x5c35ac7a82d2707a4dfe351f2e75ff9e07c74daad76b909365621e263e836790', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x681f6d3611654448d08f77b976019870ef0e3de5c2fecf2d66d2209db69f23f0', 16),
                    gmp_init('0x49fa510f49b19811336a967cc2f82f84b896e7594f27ddf71e1105f08056e96c', 16),
                    gmp_init('0xb3ec2bab40dbe7d840e17308f403d6e26105eabc485b7bf3d8b2ca6108d006ec', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68375290d14410ce36f4963e0bfd0aa368f4080642169030b1a136ba74b73348', 16),
                    gmp_init('0xbb76fea47f09af78391d6b3cc43469aa7daac0663939f8fa36f2a715548251bd', 16),
                    gmp_init('0x5b8dfd8469e012ceeec1a16e7dcbe8182d45e519022375d1f278884715cbc70e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e50b2435712492290ef962e965f824e95110f43f0ea81853fba66c41a2fe903', 16),
                    gmp_init('0xaaef09b90688aad3edcbbf8ffa4e8050b4341624eabc5070d7022c4d946c7e09', 16),
                    gmp_init('0x58936bb9df6023b2af56aa3f319ef73d4d8d1b3bce62323810c6af1fd8fc3456', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6202ea50eec1a9443777f6f95915a51eb0383d72925a99f0843ef0e6e7575b0a', 16),
                    gmp_init('0xe7011342daa1ba7f93f6673268d170374dc5415363cea435ea6c4f9e99a70d9', 16),
                    gmp_init('0x75e08aabaf4770c5da5d6e218e07d225c6977866be4e14ebcf4aee6639a7d271', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c30196df4c780a5d5c14c221ab5f47f44b87d5611f0e126c7d16e9548d9287b', 16),
                    gmp_init('0x65630d0708e6f78b0d73392f2de3c67d6d611b37809801ec887dad190d94f78d', 16),
                    gmp_init('0xfeb8371906c62472d949404698d4ed1572acc62b5359cff37450c2f55d6b4100', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2934898f32dd151fdcb07e943c262aaacc281e3a9ee65216b9d74e96939352be', 16),
                    gmp_init('0x856478e47cf79aa9c6d5b1700f5587878bf885b7d7c40d367637b8fef28373f1', 16),
                    gmp_init('0xd493fdac09dd76139ae385c51a58606875c61606dd0b86aabc1103dbe1519823', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd296e5b43b056341b8a4208c91db53064d7f79b17dbcf3d8351a06f9cfacb80a', 16),
                    gmp_init('0x16e86f5ba501e3b770ea6789d8434e851b54d55edeb3fa9cffb222bf42ae2374', 16),
                    gmp_init('0xbd41ac199641a8810595d981f60ebf741fa5eeeee7796a4a318460d0386b3c00', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdadedfd567eb9025727874b4d05a54480ddf70b115cd8dba9cf099a807508633', 16),
                    gmp_init('0xb5d3ec31ad24a03e0c729ffcef38b363415c066583c942e4a93a836dd4040644', 16),
                    gmp_init('0x8dd2dd48200f523c0f1151b6909cae69d8469ff3b2b913d614bd0641a579e8c7', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21b639afd6c2b6137c89be26a681ce0b9f2d07b423eb42818818ff4f7a81513c', 16),
                    gmp_init('0x895a8fffc6ab1aeea408daaacb47c9b444822546024db92aae6fcb803d76cf0c', 16),
                    gmp_init('0xb36a4c22207c16a9eed186e4bc518e39efa32e18491695aaff11879b7ef0a900', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bfe89864d57cd971a1c2cd1f1725fbf149f3469c4373104b2d7ceb0c61a52a8', 16),
                    gmp_init('0x70180d85271a4095d7fef610c8a36fee7d792f882e6bbcaf7ff42018813192aa', 16),
                    gmp_init('0xeacc09a7240c10bb91b48a4207add33b7e5716792d3cd6b37c566328c1ebd70b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36265fcaa8e67a92125e1471355b479cc9a0e8b8071c1f980f6206e3809f3f94', 16),
                    gmp_init('0xffda6d95f5e4ca80d1255f4d038f0ac34ded5a447723c896b3c69d27447dbe9d', 16),
                    gmp_init('0x1ff199abd2226006e9de8767e90bd1c26759caf8c9a21fe2d1ebc37775a998f3', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9577bc4194165f36f76feb10ac6d65e55d87e8de6adc4a18318d78ec4655c3d5', 16),
                    gmp_init('0x1c061a86e652b5e003a186c9ba8e510c48c3c94d81edf63f34af2f0b984c27d7', 16),
                    gmp_init('0x9212474eba14bfefa541495a7fc2339b0b63740fc55cbf225f35e87f3598453a', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc519b33f84ee52a5dad3a917a8f0d97ca58a0cea04ab860f4ac223aaff05c20c', 16),
                    gmp_init('0x6ce7ff2466abab56ec20b054a6f96d8fa11dda4b5b50be320fd045d0fb0e0f8c', 16),
                    gmp_init('0xdfd1809eda09f7d03694836a3406c2bde1ced49a198746a1b67119adacc8f5db', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a0dcf06d525c1fec669f4d40f1ff8cd857ca5e1b57b831f3fa1b6c2e50da819', 16),
                    gmp_init('0xd24d5e836a8b789fab4517fee0627e66aa7af2d94f7809bb7e28e82ec2e660a', 16),
                    gmp_init('0x9f8d9ee03a2d3b5a87a46f84ebfd16e17e649d5c7da15bc5717c73082da875f9', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e9fd888ba4749128e337b7aedbbdb4935909351a9acac4241b58e7a916a03e0', 16),
                    gmp_init('0x672b24357e83ed19e3cd4772153ee4ca5125dbe2e15dc4b8d1a284d85df3acb', 16),
                    gmp_init('0xada94f204d504c33a1ccca6a5bfbde69f6015f1758244a453b73fe04a26773f1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5060e55a21d5e1f4ef17a10f98672012ae5dbdb2b8b923a8e558936679928655', 16),
                    gmp_init('0xbd3dc79b022a182af30518881cf2ccf047f16f701d85e41e5851bdc86fe558ea', 16),
                    gmp_init('0xfa2ee109faf5d32cadada8110eeaff8c3539f227c9a93b78eb1a9c294d0892c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb63624e51ccc9fe55ddef2ff295d0fa3c875fd7bbc79fe8a08a03b6811d3bb20', 16),
                    gmp_init('0x93da91f16db6b26f6a7e41e8ebfa7594ea97ef4cc6c4f060f1942ed0afb4292a', 16),
                    gmp_init('0x236a3e0c46355c51e0ec14acb2cc6a41087c911962f4897d6dce4b93b0c41851', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0b1f96d6a95824fba70b1dada58cf077883d6a9004a1f06a284a52d2694f14c', 16),
                    gmp_init('0x4b98ba271062b3e8ddbcc9007f69701e5be9fbef6c554d3df4c3cb42a00f7b19', 16),
                    gmp_init('0x9fbb71bbc695b08a80e2d4ed0a6dbbd2cb4287f379850e21eb08eae99fe24d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11a8e019e296199f420af4d2e4ca51cf623ea74713c6e8f8263362eda2d7021', 16),
                    gmp_init('0x7ad2b544fd43411d88b88cd70b6caee94d26b9eab9794bbfe356e019d322c37b', 16),
                    gmp_init('0xecc85524ee0da6e79cc82515adc4f5b517b718f749c2f875b937beb5d2bea400', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cc9ac925f6360b7ad1ba4a46de1bc865283e2b4fcb1d73598fd7b31471a390', 16),
                    gmp_init('0x52fa8da62e8e32cfccec4158c665d5dec66556a78587f17e73f0718d0a50a950', 16),
                    gmp_init('0x5fda4d17ca9d1bbe6265ff2034fccabf2fcfefab0eb46dbcba9dbab3a403d416', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dedb5c79731db32f5ef3f691922d86256cc093665e6c45d5dfb8c4faebfcefc', 16),
                    gmp_init('0x62f0ab8ef52c1159c25460fa59283cfa4d04f577eacb55556466b2c446256ea8', 16),
                    gmp_init('0xe847bfe1ba9fbc8eae65ee8b359a7ca6ce5eccf2fec60d4f0d830659396fe0fc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9849e4edecd90cd8dfd053b42cc5fbe1e55ef2726d0c7fd615fdd5239c435ea3', 16),
                    gmp_init('0x30ce7d0bb569607d32404f7e008a1ceb29ad72ed6bc95669e672027f0be4d050', 16),
                    gmp_init('0xd42335285a499651f53227fac1971d5c26deebb9b4d6e14c5440d1388498f900', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x635c5e1320f38e7fc071c43d481d624438e455af89f2b97ee8082bff0a2f8633', 16),
                    gmp_init('0x280174d8119ba3007fe0f9ac9a837084dfcc7e6afb7e53eda781fdf9fb0b3f6b', 16),
                    gmp_init('0x52e0eafea7a6e4f4da756850544d1de4e813dfc83406b55e8ce7be27eac27957', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x949de70bd473f5787ec367609c8f0a3d311f10e37d410de5d1bcbd16a475b092', 16),
                    gmp_init('0xdd9a7f356e21eb99efb4ca55e3c82985a5445e7fc597b280b97283ff90f32357', 16),
                    gmp_init('0xe1cae78846ea63312fc04f7e6b4ef8da96e861ffe2b68e883897e31b3d00858b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce5c9e0d8c5c8e0112d14c62482d8c34c68ad5072b84ab99bb62b879f8afc57c', 16),
                    gmp_init('0x7a7fb6605838c86fca18408cc827fcad64354569e0452c34b342d38ceb78c36f', 16),
                    gmp_init('0xf34ff126650f5dcba2966edd46a2e9ed9ad88072a464b4dcf91d6785148ed5d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9006158fb1bfa5a3ce1edcc0a6138df391a9aaa134fb0b7c1d5c06198d6a1fb0', 16),
                    gmp_init('0x67de01266b69980a0c76c1c7e22249bf935cfd1703955df8b85d3e5c842c4a55', 16),
                    gmp_init('0x931719de0431e3c34c4db4708820eabf3108c975ec52af940b2c8b28bc6dd762', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20fd55bbc2e3cc478171f4800f8024cba642f55a6470b293dd5f3a7260661725', 16),
                    gmp_init('0x38a60ce469dd6bb3909310aa3fbac5b1506825e64e9e289ed2b2e49798a745e1', 16),
                    gmp_init('0x7b9c4ce3e15763ea92025db568230d95446e278bf8fbef311b01146e5fd7d081', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8a7def1026fc843cdf910a4f05bbeb20972ffa6bc1926abca1796eac25b4d328', 16),
                    gmp_init('0x7353136983420bebe5c419b8deb8c0023e2979a2d8c712ed6f5ad9ef41690f2f', 16),
                    gmp_init('0x3f71a6f8f0cf645e6c84731b5520ea07edf47ebe6042581d064238e2c0f87c3a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9599cd32585810b246c5cd81331bb90eb9f2917e204c1e2e2e6739f075c4888', 16),
                    gmp_init('0xd2f993d9002426f54b029657c6a956d9a083667eac937e3ff32fc42d1c95c082', 16),
                    gmp_init('0x8f496e9ad55f1f4035440b3e668552b997c5f8685d4255cd729f4f005798b97a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b7c4884e483db87568711ed6301d8503efd21e5523830683e2ca724ed1bc042', 16),
                    gmp_init('0xa9eb6f0f01dc93845c3d6782677c7d31eea18e1df66f5483cfde41c1548581da', 16),
                    gmp_init('0x939e5a8af9f9291d54c138fb5ae77593d421ce5c571cac64711db668b5cc587d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0e2d0cae66a66af2d5762859e1bcaaf9b8d74c9b736029c9f0bff52376636c2', 16),
                    gmp_init('0xd3c5868e2a4a939c4f6c6c364f720fd77b2fb939056d5f771aeefbc293d49f6', 16),
                    gmp_init('0x7001db3435e658cb20d9e865d401e1e11e02662f99fdd6c8d13d724dac5d1790', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15bbdb3ca580181d1438ffc2b87e82a32db0b7fd4c4bc2695dc314a6a43752bf', 16),
                    gmp_init('0x9072b7814e1b4350cd7ea294a6827dd136a9abf73b3dcd14cdacfe0fe31bd4b6', 16),
                    gmp_init('0xec1c1739bc7bade39796bac93c5a75b94118f88eca417ba5ce769562b045248e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe27d29868eda75e47e296fd5db5457c059700f910553ad6316854acd6109c02e', 16),
                    gmp_init('0x2bfc2df5ea054c9d84bb38b5527c3964fb51a907f2d963f393bf2ee149b45b5', 16),
                    gmp_init('0x405a16ade26ef7186396a8a40ff763fd3d506f9ace2b6a1faa05cfff80454f07', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee426e3a1686894a1c8526970838a7e41b7a72dd858e404ac6302c1982e6f910', 16),
                    gmp_init('0x8753aafce3cce85cc726b248780ff7f7a1575ff7eded821fd47cb00c81c936f1', 16),
                    gmp_init('0x5c38e0483c477238ba88a7c9788379100b598754381a795e8a1ba5dbfa558ebe', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32116533e5b1ba7fdeebc135c7c24befc9394f65d85058c0eaff3a1788e1fbcd', 16),
                    gmp_init('0x9ef7aebdbb7df5c9144ab866d4fea8a70ddefc203bac6194e549346905254795', 16),
                    gmp_init('0x22e3e1c7e217adbe24da80fef0f03cb6098acbd36da12636badde359c5025f45', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71f2949cc7fa710e015c74dda474d892e3b87259a1b08f00e77c0f61394a013a', 16),
                    gmp_init('0xea22c4755b9e36762a599bfabb7442c1af5e90336b199b8dac86cbd746d477eb', 16),
                    gmp_init('0x66dd5c6ed25e51c2ecfb98315ced558e908e9cb45f5d5f90113323da65d23124', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7a06fcc367b51c4532798259f8de94dbecaae58a1faaaf11cb14347ed9108cd', 16),
                    gmp_init('0x76b52c12aef138b1ba52d1114b69a5517c8ee6bd12a0f4027a3b60644871700c', 16),
                    gmp_init('0x8573255df37eeb5a92683cf8574b1d59dac67d4c0a64b2e60ae036e1a4c13649', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe200c47ef8787fc0918d03ce7247f1ad8c662ad681eeb3f5ca31e1d906cc1303', 16),
                    gmp_init('0xff2333cd971f0e6e4912b7e05d7c96ce8d86f6d4a57304bf8da7e95eea09a0d', 16),
                    gmp_init('0x5dc066619fa6bdbbee7c9ce7bbc8776895b93a99945bdb901b9471519f97c6b2', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b8b3c3cb387e529c36b6738a4d5b7ebd5b848e58dd5456133256974f37f5c89', 16),
                    gmp_init('0x9da9f9146149b8059ea5c2a188525439581318a9fde4e693f7ba5f22caf25b06', 16),
                    gmp_init('0xcae6bf6ce62b3728af5c5e06f292a93e18ba0cdff45975087c441252e750b3d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37d9213e2172b296d114e941818cc7d978d4e460635b16d40e3e43df6670de86', 16),
                    gmp_init('0xb25a6662a5962ea8413385b95ffa293c703ee8058587e03576acddbdd229d080', 16),
                    gmp_init('0x680de006ff4ba17b2da12223313147ff2c3e9b5e95e076ac6d97d5d963a78a9f', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2dc09f72bb6862214ba229e9928525c917b13405aace2a1d7f83f5a19c7817ef', 16),
                    gmp_init('0xcf9df8cad1013ae595beff7ebac1682b15b3b22d213e53074939a9c7688ce89f', 16),
                    gmp_init('0x8278c0532e94114e52e88aafedcebce9632d9bb1e45eedf93b22138943678296', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8c0769661b806088677a98783503122ba45e98f6b6d3009b85d077840c56208', 16),
                    gmp_init('0x3cfaad80634de830a7b3e87f6c15e6b249586ad275ed7d5ae7433af2331244db', 16),
                    gmp_init('0x9d5bdf758dd113733bcee8064758608bdad5953347fe738bd8b660b6d25f45e7', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9d3742cbc13021f841cfd81d20f68bdf47b78ac74eb742ba6620c494c692589a', 16),
                    gmp_init('0xc096e369327bd3d1f006ce09bbdbfe31a052189e8269c4783d2151872bf84dbc', 16),
                    gmp_init('0xcbba0daaea3c34e6b63fbccafe965bee3adf1b82316b581e1d739aec915b23b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc85a5da13c4cb8ddb3afe3719b5781ac05ce1a33118a6025fedfd99a98edcd79', 16),
                    gmp_init('0x4b33b89966ea849c6e2855dd0158f44240a924b7bc0b0fc6327efee96beb558c', 16),
                    gmp_init('0xda2ccd59a537fdcb4a18b0f119dee49406378a44a3048b9980b26ca304f2ca3a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7505826c05be28dd97a8a56517f6fe5075114b39e7fe570db78afe33f9046eda', 16),
                    gmp_init('0xcf8c8fd54620c9d53357128f595e30f6a6f1a4d74e1c05ff2639b0026c28435', 16),
                    gmp_init('0x62824083b620f09b7fab260d2d489b956556f15927fedce0e7009d83492a34d6', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3188c80f04a340945e7ed1903fbd3a5be2f972236b827b2df342b9c9488c399', 16),
                    gmp_init('0xc68733b9e44f4d4381e61becc3d3117308b947285885876da4d41364349b48c0', 16),
                    gmp_init('0x66a9735663ff8526f93a0b6b347a6212bcaf02ab1994d6eae4f3d777b1e2c95e', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4c0ed898a069236de5169f7ea76f7e2290b289f2234b6d07052ff4777d2ec', 16),
                    gmp_init('0x6fd050c5af474270b5ff688149d7c284f657fbefaea409b5bac5e6ee2cecd27f', 16),
                    gmp_init('0x919053207ed6fe8ebaf540b130d00af09fb0464e803a834d9a31b18af78e737a', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca569dca69d3e922ae9443fb746a5ef10b35887c42ff343f7db960dcff5092b0', 16),
                    gmp_init('0x9b4c35d289c6187aca8ecf45ea512b1df5aa1c4ac14e195c95c8f8e7f7aed94d', 16),
                    gmp_init('0xba64d0c6c19faed55b7888ce1c252bb47edd97370275146b2b11373ae46e6b08', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e83ea14af0410bf68a5e3229f7e7db678da0f395cd57a889bbc8f4ded4341f3', 16),
                    gmp_init('0xc383038c3cdc90dc56e58ad482b566bc732b9622c64d947f84954a3f653eea77', 16),
                    gmp_init('0xda316d4090f6c91c90f7b1176f328be7b727d9032ce094b68c868694b3d80d48', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfe754065e98ea986faaef1c862eb029bde319bac7a4017089a4ef7fa3397ac7', 16),
                    gmp_init('0xfaf8137f7fd7c8d8b2158fb3d5a86223a0190862b6bd52334137413cf869c46a', 16),
                    gmp_init('0x81463f8c6e223de5e75e41a6e849d2b693a0aa942c121c6fc5bccb58110bccb5', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed1a9c7ca8f97819cf0875ddd4f09dab65bc067a18ab2d8bedad632b42d5a687', 16),
                    gmp_init('0x8f6643c6b15d54d9b6442a0163b968c8fb2bc264923d79e24bba1b588ea67e1', 16),
                    gmp_init('0x15f051e70783818d33fa5063908fc328638872ae8ca10f09ef1663d663c6b090', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55e19955bf58a49f42ff5635fd14d77ef1349cb13cc476376f0933aebe7ff4d2', 16),
                    gmp_init('0x8cda3dbd6370f0a6b784ffc65dcc5d32304ce93f2a1b457d92922d6b4157e688', 16),
                    gmp_init('0xe6226b1abfca694ec43d9a64e5b774589aa07518bafce23dd9c4bbaa7b386c55', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9660ee10270f2b7f9472ee83f02d7b6c1cf87f3b22fb51a298fa85f37eddefc7', 16),
                    gmp_init('0xcf28fe75f907168260e9c70b5c0a6a5be1bd72aad3044f044888b6d977e34de8', 16),
                    gmp_init('0x4f15664f898c82220509edcd80dbfbd03f7ffff0890cb6fdcba8ae938eba681b', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47e1829b36024c85a8ad1289b2f5d3966c526fd9a2fe1556c1a3bab99cda48cc', 16),
                    gmp_init('0x98dc04a247d9d622ba4187c7e61d4b09b5ec1e99084c951089893b8ce085fd48', 16),
                    gmp_init('0x2bb6cb4f8acbeadcf68778d8b5c34ab59c029c786dbe93e89f364fa7789a820c', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a300ec1813f4a2a67dbfa32f892a434ea0760b6d28f071ea6fdd33f84fa38d', 16),
                    gmp_init('0x359225eaac310874827dbbf1d0920213b831664cc05241f16fff18b7f66046fb', 16),
                    gmp_init('0xe23bdb220d21b36596d5e0e05b78f4e80f913e38734ce7f55b4f533b903ef70', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cd6e43409e6d0bb4bccd58dbb83e97382351347c54a63a5e1c840dc1b891ba7', 16),
                    gmp_init('0x10195dfc9fe3f3035f2b554f3e580568a02fe20115bc5d8a810904c5dba653ff', 16),
                    gmp_init('0xaec37614b0c2290a4596ab9412293ddf0ce221c3677a31b44fe85d3b40486672', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea9c12638ecf981ea3def022fd997b11f2af164b7f3de08ad7cbfa1b04a11231', 16),
                    gmp_init('0x1d1a8185b12e131ed1c12242cd53eb27cba22450efbbcc7b616f2de0573a216b', 16),
                    gmp_init('0x88557af8fcda0236a997592e8163b041aec15a2f84a7fb85b0b7f863b254d0f8', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa6ad3522291ed5c912181e94d0bb67b1027b733a8490670222bc370cd97db5ff', 16),
                    gmp_init('0xb1838583459d2f3e2177b92a10480011a58d404ee85357fee0156c56dfb6cce', 16),
                    gmp_init('0xf237ccbcaa497935113c566104e8e6a82fdedd6afddcd770d7132731613ad63d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x493e0864407344d0dc2329f61fa916784e3ecec73c044ce58cc3773cbc229730', 16),
                    gmp_init('0x28f953119b34ae7bdd46905b7cfb6e5b78faf81916ef241c65805b673e307296', 16),
                    gmp_init('0xea13e0e05c07850bd2590d42f815b8a92b7320b9f63c74539c1f0f004a4c2f15', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8a83a989f8118c1a4478fb63249313e56e6611334807a6e598a4efae1aad032', 16),
                    gmp_init('0x4957224a6a29620195336e6f319ca1fc61c363ccc53afef2ad945c3ad729b1ec', 16),
                    gmp_init('0x39a7ed35ff435cb9f2255be781ab87e76053f9a25df3e791cca220cf372ba6d4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d7525af7e3b76088268e8e63a91465ea23a3eee68333ee54ec1b6458a0e1b71', 16),
                    gmp_init('0x5bcca2275464087f53d93535078dd6768bd93c9861a0ab479f22d43024cd0485', 16),
                    gmp_init('0xa280894518507c180bc0bcd0c5463eca7b4f42f31eebd27a9742ba9531e07721', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb09116c47b916009c509f5e2162397ac32201854b700c401c31c14973e1cc401', 16),
                    gmp_init('0xbe27c70983f417912fbf14026034f8767166adc3eb0a476b26fdaf83a1ef63c4', 16),
                    gmp_init('0x2f219c72912f0abc7e0769ca20900469537dfab4ed4daed6333dabd720db9f05', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75cc379c0e2b6250376c27978cdb0f9334d9c2ed1763f69d2056783d9c8fa099', 16),
                    gmp_init('0xecdec5f2c460f427a0e9960a57de6e1415f105e2573adb54ec830ed3e4bbd49', 16),
                    gmp_init('0x1b314b22282e061585e7125b09c8be6cfb3276dce7dbaff120a9126239a2a1eb', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6959ddf1619810366d976194049c8172294b0c6889f703264f3c642269b07602', 16),
                    gmp_init('0xaa6674a539de7e0d0223ed41262ddafd8893ff59904234d67f7adc0757942441', 16),
                    gmp_init('0x81ec371a7315f17b67168b03a4e4cc35d66f651fdf3c039fccb7955410337837', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x273a5e229e38f023c47bb9df5376498e4d550259ee75822cb4f5f70e673c78b9', 16),
                    gmp_init('0xfce6745ff85ff6c0dad16bd062a0f9d221ddcb60686c4f2bcb12675b0a999e92', 16),
                    gmp_init('0x63045c9a836c70df4497b26e58ef80babc9b126cb917b19307c5ac1f4b4c39e4', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x957fd0406f40f21986447b42feb10c26c1d0a662ad00445deb0fb4f18a058f52', 16),
                    gmp_init('0xb862bc6cb4066662d0accb06c66527720a7e784ac75827531462ad17edea56fd', 16),
                    gmp_init('0x8968f23593655023d8cab178aa0418f52755137357248e212872176d3ebce635', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5376d781047cd31b6999c9be24741ef4309211cb9d0f6ff6cab0d26cba2a732', 16),
                    gmp_init('0x5b60ddae29596421126590c05ffaf42f8fb2f2e5b353dbe37c2b8b201f4a3cc1', 16),
                    gmp_init('0x173c69066bc03f9c498817632cea8512d85ef5e40d0d6aebf04ff721e782d483', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a995da29819f0fd270fc4862e3c8832a80ff1716d028598af7ac5469e0a9407', 16),
                    gmp_init('0x4ccae07f80dc6b876e9fda8062e4640e9f022e84a59d4348ede7013b15d121e3', 16),
                    gmp_init('0x9bf12757de2ea88c2101cd7ed36b70a980ae39dd9a94574c2372e0fcbb474578', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe928fc00db9abaf43f867675164ae7db0cd470bcc0cab7cb4b79a2e2766b5152', 16),
                    gmp_init('0xd943c33b4199d90100657d385339322be47134f314ad52e844688ac5bf2b3ec7', 16),
                    gmp_init('0x607e0067bd1db1a0513d0ed7a69ce3d7f20adfd51ac335dc8e8aaf7e6e02e4dc', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bd0a19ff0b1ff05f6816183ad1474fbf11b1a97c30124354195ad54ac430d1d', 16),
                    gmp_init('0xedcaf461e53ccbd0db4cfaac00ac5599d11f360d867a5f5cd11a975739b9dede', 16),
                    gmp_init('0xd8779cd4039c5671b083457b2d2ec37af4b716381a77c3488f381df659877c14', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad8045b6070bc11bbedb63d391be489c6766629a459f4aef2bd64599ae9346bc', 16),
                    gmp_init('0xe1cdbe5db6039b888da698f9c84edc7bfaf0d86cb33ac01fad9f127cbfd6a8b3', 16),
                    gmp_init('0xe66bf9120d23aff49ce43bff310bdf05590f890920cedea207d63357993aea8d', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb965e046765947990f728ab2f103f781378904a0d0e5d862a30de7df38db573', 16),
                    gmp_init('0xa848108d14689e9c45739f281d9e992335d2f8c33836edaa33d395507995c810', 16),
                    gmp_init('0x88d76c8daec8e42bea61c67812dc4a042ac9887f432b67a689fe814c4b5bd5ab', 16)
                ),
            ],
        ];
    }
}
