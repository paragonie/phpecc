<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\P521;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait GeneratorTableTrait
{
    /**
     * @return JacobiPoint[][]
     */
    public function generatorTable(): array
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0xc6858e06b70404e9cd9e3ecb662395b4429c648139053fb521f828af606b4d3dbaa14b5e77efe75928fe1dc127a2ffa8de3348b3c1856a429bf97e7e31c2e5bd66', 16),
                    gmp_init('0x11839296a789a3bc0045c8a5fb42c7d1bd998f54449579b446817afbd17273e662c97ee72995ef42640c550b9013fad0761353c7086a272c24088be94769fd16650', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x433c219024277e7e682fcb288148c282747403279b1ccc06352c6e5505d769be97b3b204da6ef55507aa104a3a35c5af41cf2fa364d60fd967f43e3933ba6d783d', 16),
                    gmp_init('0xf4bb8cc7f86db26700a7f3eceeeed3f0b5c6b5107c4da97740ab21a29906c42dbbb3e377de9f251f6b93937fa99a3248f4eafcbe95edc0f4f71be356d661f41b02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a73d352443de29195dd91d6a64b5959479b52a6e5b123d9ab9e5ad7a112d7a8dd1ad3f164a3a4832051da6bd16b59fe21baeb490862c32ea05a5919d2ede37ad7d', 16),
                    gmp_init('0x13e9b03b97dfa62ddd9979f86c6cab814f2f1557fa82a9d0317d2f8ab1fa355ceec2e2dd4cf8dc575b02d5aced1dec3c70cf105c9bc93a590425f588ca1ee86c0e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35b5df64ae2ac204c354b483487c9070cdc61c891c5ff39afc06c5d55541d3ceac8659e24afe3d0750e8b88e9f078af066a1d5025b08e5a5e2fbc87412871902f3', 16),
                    gmp_init('0x82096f84261279d2b673e0178eb0b4abb65521aef6e6e32e1b5ae63fe2f19907f279f283e54ba385405224f750a95b85eebb7faef04699d1d9e21f47fc346e4d0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x652bf3c52927a432c73dbc3391c04eb0bf7a596efdb53f0d24cf03dab8f177ace4383c0c6d5e3014237112feaf137e79a329d7e1e6d8931738d5ab5096ec8f3078', 16),
                    gmp_init('0x15be6ef1bdd6601d6ec8a2b73114a8112911cd8fe8e872e0051edd817c9a0347087bb6897c9072cf374311540211cf5ff79d1f007257354f7f8173cc3e8deb090cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee4569d6cdb59219532eff34f94480d195623d30977fd71cf3981506ade4ab01525fbcca16153f7394e0727a239531be8c2f66e95657f380ae23731bedf79206b9', 16),
                    gmp_init('0x1de0255ad0cc64f586ae2dd270546e3b1112aabbb73da5a808e7240a926201a8a96cab72d0e56648c9df96c984de274f2203dc7b8b55ca0dade1eaccd7858d44f17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56d5d1d99d5b7f6346eeb65fda0b073a0c5f22e0e8f5483228f018d2c2f7114c5d8c308d0abfc698d8c9a6df30dce3bbc46f953f50fdc2619a01cead882816ecd4', 16),
                    gmp_init('0x3d2d1b7d9baaa2a110d1d8317a39d68478b5c582d02824f0dd71dbd98a26cbde556bd0f293cdec9e2b9523a34591ce1a5f9e76712a5ddefc7b5c6b8bc90525251b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x822c40fb6301f7262a8348396b010e25bd4e29d8a9b003e0a8b8a3b05f826298f5bfea5b8579f49f08b598c1bc8d79e1ab56289b5a6f4040586f9ea54aa78ce68', 16),
                    gmp_init('0x16331911d5542fc482048fdab6e78853b9a44f8ede9e2c0715b5083de610677a8f189e9c0aa5911b4bff0ba0df065c578699f3ba940094713538ad642f11f17801c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1585389e359e1e21826a2f5bf157156d488ed34541b988746992c4ab145b8c6b6657429e1396134da35f3c556df725a318f4f50babd85cd28661f45627967cbe207', 16),
                    gmp_init('0x2a2e618c9a8aedf39f0b55557a27ae938e3088a654ee1cebb6c825ba263ddb446e0d69e5756057ac840ff56ecf4abfd87d736c2ae928880f343aa0ea86b9ad2a4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x190eb8f22bda61f281dfcfe7bb6721ec4cd901d879ac09ac7c34a9246b11ada8910a2c7c178fcc263299daa4da9842093f37c2e411f1a8e819a87ff09a04f2f3320', 16),
                    gmp_init('0x1eb5d96b8491614ba9dbaeab3b0ca2ba760c2eeb2144251b20ba97fd78a62ef62d2bf5349d44d9864bb536f6163dc57ebeff3689639739faa172954bc98135ec759', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a75841259fdedff546f1a39573b4315cfed5dc7ed7c17849543ef2c54f2991652f3dbc5332663da1bd19b1aebe3191085015c024fa4c9a902ecc0e02dda0cdb9a', 16),
                    gmp_init('0x96fb303fcbba2129849d0ca877054fb2293add566210bd0493ed2e95d4e0b9b82b1bc8a90e8b42a4ab3892331914a95336dcac80e3f4819b5d58874f92ce48c808', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c0d9dcec93f8221c5de4fae9749c7fde1e81874157958457b6107cf7a5967713a644e90b7c3fb81b31477fee9a60e938013774c75c530928b17be69571bf842d8c', 16),
                    gmp_init('0x14048b5946a4927c0fe3ce1d103a682ca4763fe65ab71494da45e404abf6a17c097d6d18843d86fcdb6cc10a6f951b9b630884ba72224f5ae6c79e7b1a3281b17f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3e98f984c396ad9cd7865d2b4924861a93f736cde1b4c2384eedd2beaf5b866132c45908e03c996a3550a5e79ab88ee94bec3b00ab38eff81887848d32fbcda7', 16),
                    gmp_init('0x108ee58eb6d781feda91a1926daa3ed5a08ced50a386d5421c69c7a67ae5c1e212ac1bd5d5838bc763f26dfdd351cbfbbc36199eaaf9117e9f7291a01fb022a71c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1875bc7dc551b1b65a9e1b8ccfaaf84ded1958b401494116a2fd4fb0babe0b3199974fc06c8b897222d79df3e4b7bc744aa6767f6b812efbf5d2c9e682dd3432d74', 16),
                    gmp_init('0x5ca4923575dacb5bd2d66290bbabb4bdfb8470122b8e51826a0847ce9b86d7ed62d07781b1b4f3584c11e89bf1d133dc0d5b690f53a87c84be41669f852700d54a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b6ad89abcb92465f041558fc546d4300fb8fbcc30b40a0852d697b532df128e11b91cce27dbd00ffe7875bd1c8fc0331d9b8d96981e3f92bde9afe337bcb8db55', 16),
                    gmp_init('0x1b468da271571391d6a7ce64d2333edbf63df0496a9bad20cba4b62106997485ed57e9062c899470a802148e2232c96c99246fd90cc446abdd956343480a1475465', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d17d10d8a89c8ad05dda97da26ac743b0b2a87f66192fd3f3dd632f8d20b188a52943ff18861ca00a0e5965da7985630df0dbf5c8007dcdc533a6c508f81a8402f', 16),
                    gmp_init('0x7a37343c582d77001fc714b18d3d3e69721335e4c3b800d50ec7ca30c94b6b82c1c182e1398db547aa0b3075ac9d9988529e3004d28d18633352e272f89bc73abe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x166ba3596d20a3a469443707af94ba15b343e3e16654e068038dba7ecefb9e5ebd6ea04a35dc73596ec67d69bd6ba5d1f949cf7475cd6c5c78247915ab876e56a9e', 16),
                    gmp_init('0x477b0ff4d1940ab8111635e75ff3e08268ff7bd8bf5ff01967c1df01c65c2dd77de204cdb818cdd6b9b74de1c7ea0f36dfcd98c965ab96163695ca9a9914a156aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb35de3b21557462ac8158e5caec62c8ccae7d6d6672102c334b3cc8a5803e72f42da0980f3f6fbfacdedc21b10ff08ee6641752bd214aea2c87027d612ad879ad', 16),
                    gmp_init('0x18d34a5ac1587992deda855b9ec4bb3f5c176f27fc94d09e2cc871294f66cc2e1bae6214d64a1d97e37b7c142e0fb0e3c28596f24804841cae7b1958193d256d46b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ab9aa17dce1112ecd14f3d7c0392fec2a67ebdbba81860bbacb614b9ccf8872d271bebd3c5efda3773a7c02c1603e7001df5aab8029a04fd41b53dc38ce320f742', 16),
                    gmp_init('0x748d70eb848e920573aa10217c57b9586d9bb1cc8b2fb1dc1d0c63ba369e87ab8bac165ba1508d4b10f4a7b9e3af958043c1c1a5dba0653dd45af17058a5f8df5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfc57327bef68d676e47749b5dd3f4d69954eced792db6458a31293a9daf8b0de1cdf7d2a0b83fc6bfe8c0b16e935976307fc53ae24007851ee19a15bd437e2bc8', 16),
                    gmp_init('0x152876ec0738c0595322444864e81ac01c223d4e7636a44b0ab8aff486ab293a9e31d9971d0fdb747c6cd66d0fea49882e888f136d2b737af357d44e666e7a2b137', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x732a9de556c4d6397b514395c15d2c26b62d462fdb7aa06cbf6a18ae708bfefe8ee186a6bde691a29c06eeb9d09e703eceaec73c0bede0567f363301988a0cdcae', 16),
                    gmp_init('0x1ed6be2b1b7af01255282666fc7aa7ffa7f959253aa8424a686d86a7ffd33d9eac914415f7b7296e01ec5ec420f133ffd1f8edf1bf0bf3469bd4bb9959c933c845d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1319ce6f0880d028c25551db00f8d0116e72c8dfcd8a39c61f7edd4115a3b9c4734a5b816f119b3dc8ed388a2233041c9dc65b390e9ba3231e42b05a8d8af1479f7', 16),
                    gmp_init('0x13d5f38e18259b440e05f26f5e1178c743933ec3a9705aa4184875fa4a30e731fb18f69214f5c81e679afa419e7541d91463fa7edad9eec2d677e037b1ba67433b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cd41259f27e381f83631c070153023fa83c9698bbc2d6dd2cd3124af75ce07d974e49496876271d7d51df70816a5f814f2e27e720e23413b576b026e5736fa9e0', 16),
                    gmp_init('0x6f6e5df506a8283dce5330ffdefbc7a682dce01ed3e7df79661b4fabc3b1af9ca9a49ff4b0dc99ac8c4e69c32464ace6130e3434093472a8e4bc309412c9dfb131', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1da530f0ed17d88dd30b5d90ddf4edb19066088c74862afd5e459ad57343168c958f12e8d4db5d540b2df38640528f68ced2b862ece4dada7cbb6c6114b496390ae', 16),
                    gmp_init('0x6205b831e4fb779983ee2bafa01682ba2a6baec7cfd463617832ab7c83202f7cd722e833756af8baa91b5711c73470e11d44d19cf4619810261f253ed79d45cd21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x952f5d3e7a53c7e33efe90028fd17be54cc010c40d9a35889bad5215fc8fbf6ca056249fcf6ef58695d6c3c85ff4fee481ac4ea1adf90a5e8ad80e4665ffc13411', 16),
                    gmp_init('0x17a186c166b4963c098e2ab3f272fc53700d113919bce185eb80e1461ad708a0e9c511f9487c76355985f08ecd3095db6e567cc88472e197b29fec1958e90f8641f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc54819e25997e476dbf79f47ea42e0d4d5787539aca3f42981bf5ad3546f6dd49b619ca79fe9f3995e90941ec8b79ef786d416c7ef4a51311a6387421863653202', 16),
                    gmp_init('0xd9c565143c7adb8aaae2c6e22825d18a2a2be0f0754af1d33e82e37858f561e31e11ded9fb57d34d72e8822cb57b7de98a79dedacd70614be66761edd85127f218', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c1ed12c04f787bea38ee503b8aecbc52abda04809f17a70c3fccf812578ffe3ceca33f7eaa2e3eaf3c441ca2e5470e394cd9be38c92d6c6bbe1bf1f9f54428c10a', 16),
                    gmp_init('0x1e3d70e14087d3a550dcf49031675e79a0ace61e182d08878162c57cb9d355bc07f337e5261a9fb247096012eddd643e12ad4819b4499cefad42970ae71aaeb0d3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b95a2faca98ab7fd6933a6ee2a7b51d11cb4126a8b7ac39bae46334ea460932b83b8b64b634053ea242c266d75e49b2dbe7a6e6c8f3cc55cb97878f47688870bce', 16),
                    gmp_init('0xfe3d157c2c9a023c02b4307f0f9719e502fdf0c8e6a08fb8893b62bb50842f8d7db927d66dcc88ffce013480365d77381e329ff0ea52317bac900220d2ecfc45f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf96b9721095a8bda1e3c50a974876a42d95a71011f0d7a82f701e11a6090a77aea508ea32073e164b5d4d5f5ec6b610b3c6f68816c9024b8235314da4524329b3', 16),
                    gmp_init('0x67dab93898ab9548eb0e1ef161299acb73dc981f3bf3f8218e789ba7aa10631033021f8c3f0c2b852bbfbf7d90638f365c812916bda846a70118cb5a1c833a18ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e960ac63e5f186b50d789b84e9c4b4d8b72d0fa6495d297f8cb56f97187866f75cf876dc752343e59073fd658280f3ee45e8fd2df217cde8f18fc53966c3fbb5d', 16),
                    gmp_init('0x113673349ff3e93edeb4d0662e88926276c7f4c055f97053020d1d2c014e8596ce8e417d73826f732c93166de4582e684257a7e35da56cae5616363f9268ebc68f6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d5f40a0f02b5ac20c9458afc780f312e9903c7389ecb5b47a9b85fa9e8f269cb337b8f4f6e8c2a465a9c9152c41f5d4723e46b33cb95e50b81b38e8b9069be00ac', 16),
                    gmp_init('0x8e3503aa73413c42fc981bba93103b69c540ed2a81e5b45635062dc3aa57354f17965cf65738e3bceb58d2b99dbd29a67b1430cd504d4a77848fac1245486bde7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5a81286a6d64d3185e82c7e7d429af87007c068dd0db7f48b03311c98360fdf80b9047fc044463c8d8264f7ff0ea4f3c4e1485e3636c0850a48e3c3a9bd47f93', 16),
                    gmp_init('0x137dcfc7192ced85f267999170f1b15ad2227764de20a51c0ac96db5ced9fc99e2c2aeac3b0e2dec0b50d8eee9a08c607d57c54b93f58a5e905e1d75c7eef97408e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58f348d2f7aafc22ced587c6bebdd61fe2924a6105db23f1b4c7e358bd2bbea6972ef972f4eac95679bb040159643c12a4ec8734325b00b2bf49eb72c3f62a4087', 16),
                    gmp_init('0x7332ee281e0b189b69436bffd61fd522dbe139b7ab2f547b59a6e9c773f85c84d45ef5a81cb2c7b10fac7eced36d94e0bffd3224c43cec939a7bf1deec930f49aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18c4bfffdbead5fad3bfd6eee9fc57a09d0617a16b820ae9103fe5a47af97fbdb12ba941fa43663525b3e45f2e50f48c2d6ff67c35d3f0247b18a4d6b672986daf8', 16),
                    gmp_init('0xc90ff3da3c08edcc091d972c0a531d35dd4f9d0131be7db90166306dadbf29705f6ea30adb68064245ceed18245f0b8f0bee10cab9236013447c2cd6fce8839b07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b42e02c14f101c24aed5a53c7fd8dccadc4ff9951acdeadfce63993ca857557a9ff98b90e94761e60488d7b916f1d7401f20c58359adecc2eb491062b1c6cac89', 16),
                    gmp_init('0x1c8452b5a94022193a613bd5e82fd694e1197b284d7436117a0202ac3c8245c479cdb50a0d7ebcc6b992e831b196c25ed1972f26ffcc1393d0bbb9fe6f6bd3fe0ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ee9d97ea6f3caa508d67a5cbd5bd2d7703ed30a65944af798efb60dd033bf2644897241b712350397197f4c3659b0a1037ff69a4b6aa22fb765c7757b84367fec', 16),
                    gmp_init('0x1312596b2ef14872ddf2f96a81f43e5022c85dfca1cd01629814dd3b695b7b8167f7bd70fcc00b533fb88f2b4777bf9924d6d68a34729a5137e94633f8662fc83a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cfbc29ef47c10e63f4c8cf19c2bc295334451f2e57dd8ac89b53acb366ea5a8ed336d78456e01b0149e62e8b175869627ce8a83752a7fdc21d59595d1d131f694', 16),
                    gmp_init('0x1dbe7b89297fd25180940a71ea33c079ab6f628697fcd89b94bace1af3a14655a0fd7699690af6deb0db3521cda230520b7de489a133b8a04af9bc2ec347a9357fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11bf0529d16130418ea306f6f22c6ceca92f801104f2d8b8d094254627ed4a785a81d1c9b70a881d7703d143282404673dae3362d2a01d9a152d00804524043c91d', 16),
                    gmp_init('0x1d0225ee26a4cd4f8890ba63111fe7f302f156a5ea63bb333a0126b0ebab8b1481979908f8f76387f9bcb08d922ae11ae49b402cacceaa0860bfa1e73fd6d8f9fa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1171447fbea51c0f10fe986a7cb7c9700dd935ce8bf6d3cd064169a43dbdeba875bf064f99ee993fe8da682548d7fef586c0143c544441bc9614300169a60b57216', 16),
                    gmp_init('0xc826f27fe0b4e9c7333c03cc124bb924509fb12a1a97588187b12376d0f3392f5063c24a4dc17258754944b8842395ce48fd750660bf433d46f10cf577e3adf2d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x169f063b1fd5e005f6e1e0c926fb273e3a1d0154d7d0bca108ebd21276482b879e63a66cba43a7bd12b55d1c68c30e7c0575b92cc18d2a99f54dcf42b383b9e35b6', 16),
                    gmp_init('0x15132fc27c706e46a11fa53012f4eea7d9257a100127c01dd7311244608875383f936066f725afadb07fc634d80c3b592f64ed21f67fb0542117eea86aa702dd8e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x178a1450a3a05dc81440c4fcca5a34c7b12cddb4006f56df114be4eacb39ea4d3e57077ab520fa3993dbac5a7827d904335416547e5c932a7d3fe87dde0d9e02e98', 16),
                    gmp_init('0xdabe464555e606857afb825d847023137455fdf3a16dfbd572ab497cfaa7f067f5e9c9e6e3200047466269b2a1e2d97d82c1e8f726dd0ac080b5d6b79945594505', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x148eda12faf640918e8de973c30bfd63e5d66f1ca152a30cd8001eb740244dfac1d4eb5d82bda1733ecf5108bc2b08cbf3add86e8cadf33a5caa0242d2359b58cfe', 16),
                    gmp_init('0x21efc2282ffc887b1a10b6759de684beb93e4a88e11b7dfaa1d487de769e834d9388926b3283f6fe3e4845788f4ee84ceeb2d0389b15f9705b250a8d93bd70515d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd96be78274e938cbf60fd6e1e4e776b1a0070496cf73ab04d113f14aecf620989d89bb570a1176d554fa08edb0e3ab7e7c2da4c0b855cba8ea34cdf57179fba304', 16),
                    gmp_init('0x810389467e83b7bd43da9dc1deaaeb6908ccb42770f04f3232d79a87dabf60ab9017789f54496e9107f6d7371707b43460841a245a8f61cc838c93bc922cea82b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x395a931572b98e62dc3fbe7b253ec9ee4eb13931e86c30cbbfa5d29b60beea0f14ca4e46fbc0a3df2be295ba7db665aa6c4caa4f436009a81536183888cc1b1d8', 16),
                    gmp_init('0x18228c3f527bb549db348d4a31bb4c9aa92de36d5089a09eb684819373f635bba1e181527820f321c675d00661fb635ecec87ad8c3b79fe61f1f8ef16326477ddd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc971ce95f6f911712c4f3776fa6132f3298110e2597726025272869485b848cbb7d1506e255f4424b5a231a534482b6a660e4a2f79ddd1a12616a72eb79e6dbb64', 16),
                    gmp_init('0xed4b9eda73f820ee6d38698fd77fd14593a1bd3d5672c1f8b9e2255e1f662c470ce042ea5196c2e272cb1f8ab41d0da94626e85989703b3b4185e3de361c4417d8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf024bf88d53a2655993c260b9914bb8c4dd91efb7bb9cef2bc5935e6e2ad11681e04e130893220ff7ca2d6cf897010805ff8295455aa280fffe070a145e4ffac9b', 16),
                    gmp_init('0x529655b8c3b43029e1ae0aa78eed5f94c61e59bac0a7cb0f839624ac18672be103c91b8f40cdb22a56fa08a7bac3acbfdadfcd0b6e90bab4cf1ff2439ccc9c279a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8670da1ac7de1a0f566f6049267101b13253240d523c5227e1c67b9ec8e12467bc16442a63917e57262525d8caf37d121197ca8dfdabf93bbd2172a8aa81a7b4c3', 16),
                    gmp_init('0xc7561c207037c7469fe539f2aa7a1abed1482022cd5efbb12d42922ebcf7ff687fa36f240277288d74d4cbc52a585ca3c4ca55c626eabc48de8d0c56be53e7dcdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe797cb97789e482df2f399d347e45a9e7936e5053845117baea41a23c9867e8cfb27ba0e3f20376abd74cd96b0c2dddbf74c72ab8a21107b4c662d7d3c98aafdd1', 16),
                    gmp_init('0x1e47e99acd0232261eb2d0c1a447aa7fa0e4ec184a2af77422c85fb2222dd1a08e2f8e18280efb627d0296735e20504b40811445c3c2ff3d33e5672082f015672d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17777d747971932418fc1c1982d60428399c6701879591e52f03b11ead69801a39333c80c2c53d2590e53e343871d900fa3999560bf8bd025896db672c63a46caef', 16),
                    gmp_init('0x8d1603620e0ae71c5a3ec0a913e15b6c6f119f316acae65c550422ac16ab6d27bd3cc654abf4f69ae01260ba581142b875b5afe599059eb5c5a4f615a05b4fa0ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8cd8460c721f360c34af454bba65ec3426a87784bcf9dc530b9855402a250a6f13e0295787e2e8a34d7d7ecbbbef0274f34a643830e7a7c0f6ac59c2c7904dcc', 16),
                    gmp_init('0xdcd39482b8f113644fdd84132d541d8a7ef047fdf47462ec31194eebddd2e6f0585d46aef87e949f3db1a9a67189580cdeb8823064365f3b531a082a89fc08a52a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12ad218496edaf21b3f0b39d9e79f6d3a97956d0b7201ee3cd233c1624d7478d103b40677552b59a1876dc34b4cfb8f9d92778f80bcc4befa387019c040506f1fe1', 16),
                    gmp_init('0xc0c1f1fe241b393130565a6bfd75ca4503ec2f0e542e30d794c9ce878a7e64a3c22938b354d9386b2e5bc2a444263f9ba72d528a03a191ce1af86d7e3e295f5c04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaeab68cefd7af1bccbe86b26bf48d1e0abd5693fa266006613785d0aab0f95699517b1e2b1e78749f523328026c34623360b94aaa07243df5f0f666997d28ea0e9', 16),
                    gmp_init('0x1691e7b58b28de19508f6bf29aba6c3d45a9eba39b17de8ed1523d39d56e6e4ae24e897f4e05fb3b96a84de5691fd0d9b38c0d6dd8cab17d13b5468df6d8046e012', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11a9ed96c86f7974f3aab5d9fec1a96fcd26b6c9c506a9d82d0f4665c460e84d1364da6f4677315c7d8e69f4711816427f037c788724c8787387d5f8e474538e761', 16),
                    gmp_init('0x1ccd8a442be862c8ffe395787ded5e54a0618459af75b3e40eb1e2278e10970dfccae69a50294aed520f7ce5bec02e60ac67d08b6d8f4f08b6becff7179a66d7ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa52e97071841b7ad14def17aacd0caedfd78bc5552c0c4ce64b71fdd824e1798b9fcce3a3a12b75341dcfe4b72c6b9e643e3618ba3f1619654f724ff71133985c', 16),
                    gmp_init('0x13ad9d1f547766ace171ea4ee6a50eb5b5b5567a8401fec861480f9df514eee996ae46fdc6f35f4a19a6ea8820bbb89a006f09cdddc28fce58ecec7d692dd09461a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b01a9114cac1acea22c3bb533b19e429f26518212cc3143275994b8b183af493b3fb120f1b2438b751b72c4b7f729c82a339d1a041bc45dac4876924241824475a', 16),
                    gmp_init('0x16d5597867fdbe97ab4d4c327286f38f05bae34f1a27e3aa243ff2276f9917919f5538938c7334f4257b8b3a5f8d20fac0cf413874f05a5a643db5d0930fe7035e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9a3cbdf3aba86b55ccbbc0581907ee4aa9ffdf76a41a1bc70190b5c6792e0541b50b68857f015c0805c7f91ca6d2abb26edde67b9f93547ac3e0d676b96e17ce4', 16),
                    gmp_init('0x16db0b232c03f9d74dabe99e13a2122619fdea9b40825638d31df4616db12c9e0c930e21df1b6defbd69ea5b9425bce8b7fa3014c48e6c980ebdcd74caebf7c2d0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14ce202cb7e3c7a95bbdb9c20ff3b377e8cb458964157d8e7078d2e0b274f64c1b03e337074f3570cc61ca9754cc159f2e83d8fadef6fd18a7d501c5422910040b2', 16),
                    gmp_init('0x17b663b8a7974c5544228eaefd23999b0609d9403b272eb01227668dee27654c9a348e7031adb916475768497c3aa70513bc803d7d24d94ae93443b521528898156', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1179cc62b1f2f098d556d147f35f686797b8520d72f29e7776ae379bc2641fd5c2059118968880f06dbddbea09734cfea611fcd5c80142fcdbfb2bcc0203dacaf48', 16),
                    gmp_init('0x1d04c401780e8c44767ed31a9b6e5d7e6439ea2754103303148bdd0d24a23664c04868ac657dbb155dcbb7baa73fa537b7361d5c9ee147631785cd20f47384e730f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14a4d503f0cbc8723fbc347dbaf9202eaaf71e86b49596b6ab788d1cc95459a4cd7b3cb84deb876925b370cf6bd60d5357d580c55353ed0a7dc6a4d0775c14112c0', 16),
                    gmp_init('0xbb2a0fb22634fc585a6e83c2fe471481e7125e3fff951cb04feaf6c10266c5906ff9bddff34c05a58e88f4dc0bf014dd5dd7440433dedfdd7cb2a44b8d31e9a01a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f5a313ad5e32b83bcb1dd2251c8498977d7adb5fe9f2d685e34ac7422d1c18f145cb892790726a9ce4cf71a2b94850db19eb55534d64c043e7e7193ffba2e2480', 16),
                    gmp_init('0x1b7d56430dfff0b62311d98268de82293d349a785d5f48713a1492941eca06dd84e6081fd1db29c8c81c968813975eb0def8112526a6ca241094f55f07346daa5cd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1333a7acdc9a7928e04f93da968d44893b9d4c41cbf504fec3615043ead7be6499e2913a55d39cb2ae3f4d7b6c6f7ba4ca389489935989e4a0a3480d58caa4bec3', 16),
                    gmp_init('0x57c71435351414083b96f43a65a6dae43f3af6ed35741b88ab77d2934d2940d262ddd6cba0c2dc16fc7386a0a6284ae0e6a6d0b17937426bdcc865844f48219a09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc34cc3f05794732ec92d5894f2bb30ed5abd651f19ba2c39ccfb26d52f8d1dad9c6a2f900f2a351a0365a54b87f6ecbd5eb4265c4f825fa293394d510624891f36', 16),
                    gmp_init('0x1644949379f03a9a91672065b99f34e1c5fcab52531123cb82fbd74ecefce16a6a644d28a5d7518ba0c0a92cdf03995d1094ce76352d52329c88c03ccdc9bfec4ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77269cbd3fd42907b7a93c168b54d161d49fdad17ecc6a85c32d515a919ef889a08fff6ee3bf16a7b1609f5808f58627923b54996ff8ce59aad49bea9d0d67ee97', 16),
                    gmp_init('0x1f580f8e27972c38e1d8706df4e85b417c592a1f94db23aa4a1b6a1bd3a1fa1e9b7fe6f5ffe55cb85eb567a46bc78b7f191562163329f2d0abdefbdc466cc9bc5ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c88a94f055e3e844a5c8ab2d255550c91e285da4285203855a0fb51a9e14c0321260ee1d529a83fa6bbd917775abbf64cf39bdb10fed827feb3ee676376229445', 16),
                    gmp_init('0x13ccd791d4e5425099bc19ae28d5856207eaf4ace63e4302fc23786be8fff4a93f9a189aa9bc1a0b0758ec0a26aeec26e5893632bfb5132eb84e2c20af1885e1b36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeca8ef2e81410f7c71d5b269003498dfa5dc87a87233b45f8b5678c82a70d00fcb336dd153987995c6aa0a2499067155757fb395dc9ae4f831782a46b3a45742d3', 16),
                    gmp_init('0x319ad592a5f535952d962735a61e2b34907674bfd1fd778f5fd84e18094d2c9b8919d1cc8ad7a07f7c5e3e68a98e2a3b24dfd638d21de60ee900e42ef069a89d17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x103a5d8f62804f928774f434c1a70cff1af238885ae7a9ee0f4ddc1e848b0ec3a99cb615b612611559833767545b184b25ca4f718c114970f9180d754cbaf63a6ff', 16),
                    gmp_init('0x1fff28f946c1d8fd86bc086ddd4d3dcdf09766be192f948436e2c19c4f8078ff997dfabd44eb8502cabc825355fea99c1c942c6b1284f73f4c1889a468cf5e7b21c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcee32650c10855dc1f4a5c274f32cd4694a320f80a0087b164e38b1745e5dbab181fb16f7b883c6d420b53d6db2dbfb6a4ac04c42905c5947f9ddc754cae4622fa', 16),
                    gmp_init('0x10b5c19b57f245b59f88616da8731fd0538f4ce04dbb2d91ff30ada1e57c128c71072ae4a192c407bfdbaaccce236a4bc593a20ff072e051a16f1c1a8c55997c5b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaea2eb8fc012254f0978508fa279f2187cd9f8869586b85bc4e6a19633eb3be7d179c2e1982121a50483e65cfaab7d5b23e5df9129588059d044edf8be84357b3f', 16),
                    gmp_init('0xfe1fdd53c6a8ce296fdba0dcde44bc4ea3b8fe1a6187d1a0137ca017c24159e5ef7246b0614085bad55294a8e42997c68d95b4c2682c78669fb1a6704e2797d3fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1868bf9489dd85e7ce8d6d61debed573377dbb476a579a360bf2c583a94a9e8df0fc53f686eaf91501ef88673fabe32f323f93443a53d138b697dbc777cc8eda3e4', 16),
                    gmp_init('0x1e3c7d3008e40ec32734c7c443401dd7df8465aae52b64cd7994f4d4575b4af3144a386793e82ec727b434f440ba5ea596b3a5df265fbc275d34ea12cf58c06659e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x141d598487a4c8a18432761bcbf39c922db325e846f5982df34f473e129b6b6ea45e87856427b745cc29a509298fbdbf1495a7495784a83da15d06fcbb8cbdd8953', 16),
                    gmp_init('0x32d05f35e66ace50f855aa92bb16574df20ebabf7ce3832a6ee3be49554c1f5e734797193fbf7a683b947755b894297a3bb990df3e75a0e0fa4d4ce00e255dbee0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18dab282b67ae8e6e069cb165730c609c2c93f2886cff82a4fd039493381ddff9b3a635e9b13b0493ef13328d8ec459c3fb898baec98ec7fd8228e8d7cdab4f88e3', 16),
                    gmp_init('0xf0db6b5e544188b82eac366f9f3364f9b0185add8554d2bfa6cd26cbe3f33752b166cd4cd3747b8361c85534c4315f21d9c42bbe74adf64db7c16fbd160792dcfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b11979cf02f3b45d708289d86b87679e054cf945e66f9378639733135a0d5a0720295556e631779d599852718497c12a703ed100fab66ad53d5e597d089b0a6b1c', 16),
                    gmp_init('0x143ebbc1d0d4c99791a945a1a0345b9dbd3a92320f70fe355e795bbc0e1b8237581cf9c54dd5113e21174486ff281b929ca4cde87b963ec3ebbeca4684be1874574', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e9861204f03123ba0f2a3db3956af4d7540b66dab6a4850f91c7d3fe9899520380f571b2aa9fde68cc28ba25b48c5291a46e6a1dedc911cec74ff5c5188e250d1', 16),
                    gmp_init('0x1cf820b7e33afba9f7e6c3b3d2067e76a087dffc5b363c7079418e795c5aaebcaf2e78c257f7e123652ff94c6a2327586b9e7349a910000be6f1ecdbbd45ac22cd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc37da5fa90e294ebd9db23d3975656dcab053676048b836e18373248e8530bdea7d4c3d65d66c4b41948ee3bec714208a21c7eba2e8300b13932645e87ada2a97', 16),
                    gmp_init('0x6b1700b51341521ea814fbdc847fecf8ecd83513421999f713fd9770aebb0b5cd2de6d697564174912477877be167325c29f0eb8f4ca81ae228715df66bb355ca4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0f34b69073533fe764c5cc139fc72dc81a6d8c4796eac19ae576fe3429a7c06de49e97a9627cd93b099e063dcdf9c7b04601fca7fa6e737c0330f31b6c916e988', 16),
                    gmp_init('0x10cb451731fe001273d572bd64292981c5182dfc6359fd393e08544a707e7433605798cb3d8b2fe435a1794d4c0c1bcb88a650af8bbe2e49bd68d444d34983c41e6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x10495bf91f44f1a6ea0adf74074775f38c527f02177823b5d8dfbc5b18338aed2a5e3b5a94158d1c97c01720a0ad622c7d44d50d98948d262b54f0e025fa2302041', 16),
                    gmp_init('0x1cfc22eff26bdcdf45a4663139381057b1a25fbca4bd50e44d144fa528275e54993dc99e546ebd66975077000491e00bac9a75b296b6c27631df9cd82998e2d6ab2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6fbcb06c48eeee4e4a2479b22a6b3f2c451503afabb66cd7eb53b8858f9ed8925c6c025915b3c7eeecb70fe5c64bf111a76e8c23501aed4223519394e7f6b9b0b', 16),
                    gmp_init('0x1b1e838b3f2e9793ae0994ea31c47d7c8d022ef41af1fa7183a88f9176e1e0ef24cb19efc72a773262710a1e7541e2b80ee1895fb6877671ddc29f2ff47198bb516', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e9f9149ea74f83f24676c49921723a436cbf66636587f6b23856ca78098532b78ca3572cc3973ae335308da63be261eca402ea68090abe8669289b69d3fb4e975', 16),
                    gmp_init('0x1ab0420187e7ae3aacfda186a9c507b21ecc73e0c6b2aea7bd8a4f6e566c9ec57477c901b83c69c641a4447ede5880cea6136fa701c5d91f299ba145d0db398b5f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19f8b8f51e0c91fa6d8cfecc6f94ce28d029ba195fc3cacda0dcd989df35e548e220e6d1cee02a16cc216e09f8b554f85dbe15b72b9938fa0e239f73a5667d26eac', 16),
                    gmp_init('0xdd12ccf29a91ba87c811da7502781a80766e94a20beabf2c9d472fb203c1e2d62a2d1e47946ea54f2a3f5ec772f2ef952676514d33fe83b78179f455b2c1a33bd9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d61b142957e18931497047abffe0eb0a8b4e43c6f04bfdf4a546ea7133fa5f029878309a880f06dd1acfb75a58d30ed220833ecf391e3d5ec20c44cb078461a126', 16),
                    gmp_init('0x18ddbaf53b49611d88615dfbd60f6e2353dd2d6ff46bb0cbb8998a7f09a4f9a374c28a08f5f2be41d0fda40e7f651fcd6a8b5f84d6d3d86a0beeca09ad447f7c92d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd52e85a451abf3f8667c53ff823a10c83e4d3a313f17e41faab30511cc9a8d7c09bfb139fa9a3e2fa57da464ac62025afe74d3a13f0bc5dfb8c9518f3fb711958e', 16),
                    gmp_init('0x11f6ac6e0c81664fcdd625b6bf1bed4caef623e3416b97bac689f380474e3f47c8c038b43eb1b6571d047b7e6138c8f6176c3a4ccfe21fdaeb8e2844777df1d2939', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe53a7cb1930a9b347926e80cd1016248b66b750c30b0b16c27a2ad3d6b7e1f5c2d2a1cbe590080c25742e25ec9b94ed8f5c4de30673c0780c8d73bff3899868c1b', 16),
                    gmp_init('0x17c7113872591a8fcd0b05c9c75828e35c430ade30b9038a60cc43f0e7ae2e4f780cbad39f75b200f04aa2d506494f10eb9f64c29cd22edfc21248c212df06089dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x138719eda3c1f02406f66e9c51167673f8d24bd8f9ffb45acfc480102231420d76a20b22a2f64e2a2495e0ecae945f8df55baa56999adb64049e7bbf4a8d2249935', 16),
                    gmp_init('0x1646e05507b14613e5c05fe6ea4e85bd28920d682e4daea8f313e3505c0396f9c18f97a730e5897ed7e0d4ae93896c3b0092b82612a54c1db4e56f88274d07c2fdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x152d9b7bb75b68f61309ff511120c1248be7a9b6ee4ffe8945fad23c663937d8ce49f202f50d09cdb387a9a12f7af71c832a8d18c26076ee36dc73762e6481f611b', 16),
                    gmp_init('0x6ff7af3e663a227fd600e7af499e67db297ac6ef5da6ded519e7cc969340e4931f4a1538154e3475edd2b8318f40c417c3f5e39d99998c64961978b2db0befd018', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10d852eb71d4b5f821f1ec10e309715b466817d2723ba53a71a59c64b2fdf07da1af437b69e3a63c8662b8ebd094b8160b825bc4d1d49de2354f0307ea7a3abdf0f', 16),
                    gmp_init('0x1a7732e7eb6471411c715222a47d2565b67f8b414cf85c0c9f78f31def309c66cf1d5411a7f4fd0acffe2746511030858a10279fb691e3accc83a53ed2dab617319', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46cad2d96ff745b3477f43ab79d0f38fe6ea36fc1d37bb7bd718f5200e9ffa78ac916f842920d05ac59bbab64f0774d2941ec73d43ac39feb9e7e4133642b5dc6d', 16),
                    gmp_init('0x8c2bae3414434fab5ab41efa4942b055bc19eab58ac9cc525d67180536f3958029e90364575ec42a382adec93a60fda64d98f3cb4253628a693140d9c852456c41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3330e7aa62174efd73e3be816ac2b1118b170a523b9245c6f6865a0148381f41866ae5bdd9e41114333b719b5b5cb22fdcfcdedaaa7cce180bbc36eed32f7bf34d', 16),
                    gmp_init('0x6012922d525a82041b41cf2d8753b1fb51f265ed1075222c2cfb3e4436e03e590a3a55f831d862dc8f82690e31a1d38bd660485268733b1f6a1abfe12c4ca2f7c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7342af4669a6b7a7f4f10c4e721183e1a380c141be3b0d2dd56a858828378420cd5c8e4b006c608fa7a580333f4f287157bc1151cfd980656a4f14f6bb1320e005', 16),
                    gmp_init('0x1f4e1f4c7ffbf846f1e480fa468d77d3aff360ceb5916011c233526e3258efbeec330564ab32d541c3f17af73ca233eea412fb88c745304060bef81b0edf6a8ecce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e115da2f59c93e2781084122dac4454a32135b7da68c82d60cb84611f506fbdb6097775cf736ebbe889eb8747c07b52b0c47b9c0f55c1a1785b6a6ca5ef7dc356', 16),
                    gmp_init('0xbd78678a328a130e6d0a49f46da9adc76e1ca931aa74d2845b25f8d92f0af82b82f41a1bfb0c600b7078b344de3aa24943d051798061337a71743591776721fbbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50fcf6c742bb89e63fe95fa29006a6137a4a4af7795bc5f6a7a9dc83248e9f983c806653a38fa3f6fc777ff6491059923bdd0f6ebe1dae38697a8f819b4a18638a', 16),
                    gmp_init('0x1ad9194d78ee281aba19a3825cc62ecb0f4ec99d94a3ba47093324e7de76af2b5d90976becb99f67f8a105b05c7d7e610f7754540ed2e06d0d862ede8a9ecec69ee', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x21cbc72e9e60f7c4366f478d9b2a604fb866a7f2a156925281efd505fe9cfec7b78f49dbdcf4694014cfdd909ef3825b8258a99a0f9cc76debb5f5385146d39a88', 16),
                    gmp_init('0x17dd62addf5b9ddacb3b77f5ba9485890e0780c73e416bbcf57c667f078688df0ccb01480c73a66b233778bd5f1c700e94a74d5cd73c8bce1435bf75682d9c31e98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96d2731f41d1091a6dfe41bd4563355fa68cab6b445a741d25a7b344939505580c2648a59a2ad78517f67c3f7164fc4c706ac5ae1344f0e094173ab94cd4820fa0', 16),
                    gmp_init('0x1dacc0960d696f0aeab1fd62dbcbc5b7dc3f648cc7c9050ddad675a8e31f88e60478e9207bcf84fa4bcf3ac57b5e3b526a565fa978b80070b032550a62286e4f90d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d5ba5a950ef0e8d394c13e55921367160732d6cea0f14f1c2941fbdc675a1dfd55d2fc9f1cb58e955a0e475a1ed81c85fb6fb9463733c2346f7ba638d767335cf', 16),
                    gmp_init('0x119b731404cad3fd7c90a4b8ba4a06b0ca3dc69d67872f6efd88392b272f4424f37080824b6fd4be88b01976a0482f0d0ba0adaf151b3505972355dbbb2bbeb43f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeaa65fdfcdebcceea3705484e5e67fd032551f4a8e3e2852516e7e797ae1668e1cdc038772b996b1796f6037646798ba3c6d74b1e2a4689d58ddd7a0733f0741e6', 16),
                    gmp_init('0x1a87e00686f88caade23f61acbd3a1fb8eebb594d0eb9ea28ed99630ac3521ce597063f818bade7d232d9d6af7100d3d90c25030e6abbe1fd2433a1c053acfc4123', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d56a65055451abab2ea9e12e67d249b4ff15bd68f9e4b9f7dddd4b9e6ac6f52abbec25192c88bce0c1da21329659e0b2ff2c2a1bb5531ee331730b2a5c9b816e5', 16),
                    gmp_init('0x1de514da5d28cc931c654749d3a0c5cb4d8f63172fa57933b4f31f72f413b62ce95258a4647a158568543e429e2b8287af65fd335922ddff22ec4d7dc72c4b6910e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bc14a31aa677a05ff7710bd5ca7e472ba991a5a10f36e2c2a88abe4e3db303a2ceb62f01e45d1c24f4e3b7185059d1e70ba8af434c261b4fac0febef06cb4a809e', 16),
                    gmp_init('0x13a29a660c2053f0e60e99b34851ff0a98fde1c75464988a08deb64a07175faedaae26c6162b5507e77b87b0b724a6e06a354c92ec41e3087a2badec183453e07ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9705957c32597025f9fbb91ea5ce860f912caa1a4e184f5a9bd8492e459f777ac35108e0cdbf6bd68fd1950cf8db3b0c92834a505a76f4fb91d495b0ec16eba181', 16),
                    gmp_init('0x77d4364902c62c4deb544e97c3574e10b1aad437092f1ade3e8dcec31f3bdbc6533d0cacf6f5af5b3ea19276a102ad819bcb4eda89cbcc928e1774a862b07d29ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0543b69a862685a03555077aaa6c0a8b959039f352a95ac2cdb1b7f432f0b3d5901d2a8f0bad34df36013f2ba7aae1124882a2421d189500587daa931dbbc43b6', 16),
                    gmp_init('0x280d0b0d8ae90e675d25ce40cef290a27e126d517b1f5105381117a9fc130e01ecd1e56d52068741ab8c434c7637d9fd85691c1f18930fa171bb104059ec48d2af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11bed947dff446b4a9dfef4282a80ecef0dcd03b67d0a32c8e836840614dd99ea216f243ec4ce9042541f16fb4b1e50b446a1c9de0c44480b5fab52651d8cc61218', 16),
                    gmp_init('0x8945c4a4dcbcc657d6dde25c5b71ecb96c2895cf346f28a222bff735eacfab9f397146c6a0d4303c7148ba42be2f9bbf7bd343eb08d7f5283ff6a412972dcb7b3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17efcbe5ac7e3e42faf810b13cf83c17d285d5ed2d69e0ae10b64af293e232db85630960aab251c169aac16a45a0eddba6a1fd7d3f2836dc473a782a879a1e0d48b', 16),
                    gmp_init('0x11592cb8ea6243075512cc54041f9df00703bac76dc8126161f450307d20f4959eb9b2713cfb089d0361beee61155cc194f651a91dfe7a80f1b2a02547b7bd184f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12bc9eeabea8d7fa87be8162a49f9c503532f03dcc36ccb057e237a23b4724e855253814a3fa34fd53c7e0bae2c314377b59799c62d1ea3f1af993099fa1e762027', 16),
                    gmp_init('0x1f997913a396708adc15b14973836cb9aed1e09e8b49bb08f1c654e7bc4cedda7621e14b65824f0d289157b118e552037e474016aa93b43119def0d51489aa51cb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9eb26f522d6420f8f4b8d0aa2ac137bf611a754d1613fbd2c83b1adf326ec49b840db425480e03db3292a7da1bb299cdff4f31d05bca5cbe0272193ee004cb467', 16),
                    gmp_init('0x1047abe06a163fcc2bd78b96ba60025a1dc9da9db6dfcd97c6d5185254bde822c89064b9c45fbe6f229ea3f9562d4bf3f2e4d04e5f72368647d26397200ff338c69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ddada8b9a4d6adb239af52bee85ea384ef09ee5b227f3dcd60b5109a709f9f2f0d75616e46061074e8ee3f13e24d1e58d001f843d1c8914646e93a3e402b6baa3', 16),
                    gmp_init('0xf49e6fdcbecd5a072233e01b501c76952be33a98c082c51a22b512a26902d6965d9cda8fba4f5818da157dd6ca8b76e3fe8f91ac51f0e6097eb19cb8c3573476a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cfca9251d8d6f5130bc3d5845575bd321949d2192850aa48a1145d7654323dda4b9e1a113f9f8bde10aeebc00d12b911a63e0531015d49a0040068d8d1d644cdd', 16),
                    gmp_init('0x19739be437d7db0651cd24bbff4c09eb3ffb2f1ecdfc61be39530fe24a2b279333100919d72b0fce88e905b9e0d46354ff4a3c705dd309bc3b623a4a12ce0a46a63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6becee05641f05a6344025549a14b9fb67298f97a9f70cd4261eee6cdc045fa6945c6b1abc005319cb083be97ebc068b7193e437d5fbd8f49b8981f0975d5b4047', 16),
                    gmp_init('0x16f2882f4ba731919c4a51ee590144fc44fae04b8b7feeadc53a15c8d7d4ee5aed72d523c4d7c8a2adc821464a97bd27064dd1962eb8bbd71bc2fbea3e1e70c5e4f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1e145e9325b97b8c9b57ca940d8a918f320b0b6f7d1757b001016ab4838922f8fa9e74d6892f859df2aee3d2c3151d5b1d604c4f43d907aa44a93d61c073ca98249', 16),
                    gmp_init('0x9a6eb25e34e0a1bf9242947eb68a5706839377f4464dca0ffec7ce019a9b05f5382ccbf668b1e674033929db79060e2db1c34532048fc0eb89db18d7bf37316056', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4427ebcd24437e9e6621af8de713ad271dc168a8fda2075162944a76da0bff84c797cd528272e431ed0862c67e5ea7dec58ed41be47b6448fb8b60dc2df6130e66', 16),
                    gmp_init('0xb97a97987c3f882833e4ef55c263b6aa2447ad42e6f804242147320eacb450efed923571173410d116b7e7cff44db4a4b45128a9febafa8850399007d74c7b3dc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad06826324a9df9d4b8047ed5da71656ee1ae458ac4e4c8f98aa9a37f8e68933fb707a9c2eed2a502e9e001396d1c689262c78870a3e07fb1fc76e5f4d022667cd', 16),
                    gmp_init('0x154b7d5f97294ad125c8b36eac316fd165cb3e6e7fd06b23b094096e01235253255ec35b47c0129e1a00c349ee87a074bff8dac64428092be6e2c4cbd9319c176ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x178a341dd2178b2c871634a724e4359328958b761e2bb316fa8960efc2bd69f903fa88fb367418524a2ef105aade1b517a4ad00daccf36bb0cc58241d2f43416440', 16),
                    gmp_init('0x57b236cc58708be977015a5da5d0a2a3c5644134585b456a100f387e9d7e48f2718c6987a70f7b3b9a7f5a005b2ebc04f253767dbc0ee348c029de72f83261324c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1612995df47623a481d945bd82fb249853906320295457aaf0df030712c9c64e7e323a651151997f0360ffaefe0883cb2ca1c51e2fb84a62b5613c413632bb30ebf', 16),
                    gmp_init('0x12533d401882a2a6f9e4daf613731f353c8d7f8aadb27ccdb571b641d50c256c87f41661bc87db8acbf59fdaabc89f6ddcd244d8a3a872dff16f962f403feb7f8b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaceeeb3cc4bb59d612364f38117051ff13a7495b1808e6f72dc7a315d6069e22172e1eedc6cc819d2e0392e931c066dcc88693a9d97c6c1c3fbd4062286eed0f95', 16),
                    gmp_init('0xa0c98cb02de4cc81d76229a732621c84bd56c8348e63291795682040cd0fcb4d0b38fe6557f67ffa2d08d9021c3143504585de5ada8d4af09fd9e0c1078616d6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d640e71ea745ff2c20fcafba316121deec3583bce4d4c88e4f250a81b64d88eddfdf20520f6181666190207916cff39e259fa45d83e59b107cbfb85a9ba8f70eb0', 16),
                    gmp_init('0x11942bbfd03c675e619c72ebf12dd7f97851647039db5f00ad5f232419e97039a3f829ccef87bb3a7cd6ac750dc0fcc66da4c7be74a00fca85df91f204550452ed6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x432570f42e71c3f3dab6e0f2a2ea78e6bbc10a18f0e26f080597492fe68fe11b61b611a35d43da55be5cc3d26a97a5ed6931c3c54e8cef282fb2308971ed0d691f', 16),
                    gmp_init('0x14117917e066dc5143ec759b7a24a0406d953132cf36ff2c160b1f089e45cd18501cbe43361c723d4561e6e383a8ce0e80b3756d05e0f635ba830048b23d0630da9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c4da614274029082fbbafd1317ed388a880846b9736ca9e6d6662870a2cbe011522ef369da4d3daf344c184b4e26fe77fc66d10fc0a42e49bf8c5b2eb11628dfc', 16),
                    gmp_init('0x10c619db4eb77dd8ad3fd1147c999071de9a53ed5cd8f7a941d441830cdff30d00db7627d8dc3cf8b54a0a17ce3bec1857746005f812ffb8bb668db20a0c06f365d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95428e78d88246676a6428aa7c92185a3a1196969c76fb9d42a99523bc5095c5ea37e1b845668154d88249f141e7b6cfbce82397841238d2317fc5ba6013564f62', 16),
                    gmp_init('0x1fd2ca63c9ebdebc35b50ed6bc6cf9cc92cca4d0290e22109940b101edce65b8e6042b09d00fd5605ac066367719dfacf7ed9665e7e0d228ca1e44cef632b1e5685', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd17ed00ca316d691c4d93ea401f5cb1c8c375dd05662f91bc6466f97979aa71a089035b7385a77bb338aca0a12ef75e239b08333a5a4fae26ca32a9d65fd85284b', 16),
                    gmp_init('0x2e1348fabd7c862797faa21f70fb684270342394e5f5f52aa62e103eaa260729e8d6fbfc0f80290be18654df26586a94d4948625d070b071d98ccbd8fae0a3542d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a7952338d711c1de59be294e7c15afc263f4ceb5766a0ad1de7a2e20bee8eab2afea36aefaa8fba837481845f2a4c1493e0a50e6e4db2795ef5e5237b52fecade', 16),
                    gmp_init('0x1393011046b48418a2d60c9a1480678810fd12dc298137d937a5df31a262f59604b4a408b8d7c3f199846eb31f2d3f7e99e6e72057d8eb8e0ac8a9806bba64d25ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1db539a125e066a68e2f825502d5affa9ff2603ccbeb25fceacef1a3d6fe28e91737ef3414deaff0d9fc147ab01f1193acc18fd83202c21b6e9317b098c5ca5f978', 16),
                    gmp_init('0x1e1b00845a86c572d39737d9cd0d7d6ddd0e08eb57aca57f26b4d38cb033b10b512ec631a327bf45b93b203e68707286721e0d81048ff63d1faaf4b16bfa90a3b2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aef02d313b071bfdc95cd6e6cb007bf13dcd3d42cb5772318e1db45c2364b13567f68b581f08c4d123c6ba273ed1eead3fa4edad38e7c7bee46f24af3eec231c64', 16),
                    gmp_init('0x509f2b12b9a7a564391f847ebd2fb2cf2c4bb00b447ae76a018712c19ed47c5385bd4bdaeceefec679014232bc63b04675bcdf9ce75b29280e09083eda4ed3782a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x688521f39d9d8f64594eeb7787a9f1b8bde382a5134e870f3e77fe478185ec11ba08a3a510646fe81095c35ce8c0abc07e3b7ef054921dd5956ee9325abf53583d', 16),
                    gmp_init('0x2980183105cab1b3041b9feff62ce5c0f2eb88461b991afd1bf73fa600cf79eb81bb41bcf30ae841eeb90f50ee1ab36081f0578f9fd66092f910aae6d8428a37fb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8ed95a6b2dd6f2dbb28f3dc658f05f9b27e42f100dbcbd5d3e8f47615cab136cae8ef4af44f0d9f9f1bfba65b83786b033ade7917a7b12def4abf17feb008c7a44', 16),
                    gmp_init('0xa50d72fbaf174df6c5679e614e536d132bec4f548264e90133668267b0fe8ec420767fee42d7f644a08f1639c4b4ed9e1015718699d0135eb623bb06a546bbc412', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x499f50f4422d0093049ccb278d4937e0dabfcc5ab679ea21b778c5a0b685eca1746f6d822b4ebcd973736ff52a138783fb286fc763cbefe110d256b6072de9b28f', 16),
                    gmp_init('0x1fdc3cdac7ed4e0074a2dfd10897a97cd35c9f71df41e6250a8a70593d29f5a7634a0b5c181fc7da6f573da631e851115d49793a90581cc1ed4566947d729f8a798', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17a02216476308d2300245371e321b3372fdca8d731ea264c2296e4988af1f7cb0768a9c33a6b81f0f07e4a708e9aabc7cfb2ab052d1fa6e13c8fd8dc497694f566', 16),
                    gmp_init('0x192828aaa19d9710f9b48cab8f38294b72e58708101174f417c7f99d26d9b4959d55c8eee646d4e5baf4c6a119c38fa84d5a10c5784419623a9ebf5411633696cfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1de1aa8e425b50553a1295d868d4eb95e03555f15c4cd2f93f7f36a43c81ecd98f158ab8fb04d8873bde49a60d8004d0abd021a2f24d635c04caed480e002f799d8', 16),
                    gmp_init('0x8587d306d9edd78e48df6c25ab3c9bb158ed21398e62729b3d84235958f7813802ed0d0a9b9fc9da8c0f5220ad0c6e6fadc499e9fdf4e937112efce59878fcbf33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1570ab65c3aa205b0cb054bf32b358627a2ebc0bef2530baaefabd851df5ac3b5a2b9d070ffaf58e367521e96d86961d564324380e1aa69c353c661d6fb7845697d', 16),
                    gmp_init('0x963de5fc2bd4e0f79c9192138c4ec28c0313ee043729ff01ca64edda2df33bbd74a667a7b081fc784e0a6953928003e8202808851d2ecc3900586c331ea74cec0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x638590210eb03cca7b63bed10d3a680d61e347369d0a9f96602e4e6e573e291040a5f8c81ed18bb44b5d0f792fe462090ec26f7caf9d7a71038eba86b822e41e28', 16),
                    gmp_init('0x1105bf942879e8c2f7814f06dd7b67643b9b3fcf0166c1f10862aac427cb25fb5267770da72474896c7c7181a3fcc60612426e2d5acc179fc5cf8d8536f5322914b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7358f1f2778fc446a6eb4424eaeb2f9cca9db568ed5169f74ed7f02be70d39632ae1b2ccedd93715e388c5aa3292cd05cc4b33367c6ef7fbaa09523ff95051804', 16),
                    gmp_init('0x1a494ab7fbae6d621c25d39ba1c1ceb1ccc4e38060bc6d4acdf270ed37aa79f4c15778a4c6bc6237d11ca01350c9bef1f78f50a6d562b1f54ee3a4e0f6467694ca1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bce00c72768d87702686d2a6e0d65e4af18ae6c6a883ce4e9e4118aec7d51821bd4e05998a98b212227f83d5a8c4e95c5a32364531fc48289a0bede1baa9a08ab', 16),
                    gmp_init('0xb69192a173f35d713fcb0b361fd6fb0524f08e85bc03d4fd950bb59f1a5f5da2907314df12c4f0cf331999f20642100b9409c31a00977e63aa8c8c0c984c0b4b11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a479edb44d98b8563d211a6f9736868df89e74058ca6cb75b8c5708e206b4a931e126143bb5dcd244d935ea015839065037491e2396caf9f40c7883273451ebc0f', 16),
                    gmp_init('0x7af80cd1a0e5a37809e6a4f82a333e01eb9e4d8fc92814a67f9affc03edbe73ef3e1423c696f59b94ef7b63241267640109a1feef01a174e8b1ef7eef4a769e019', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5c156c2b183b9ae61e5d6d8fc91299a52de4489bbd5a709d08edaea1b292dbfecc0c255bbd3302ae44c10cd34b181e07f6921fbb0e705039b3c68234f72595a5a', 16),
                    gmp_init('0x16a890d1a78624b560195553e9cf9d0f3f012af05bbc00774a96618c6b0d2fddf338b307cc13d3efce23d80707cc31d1cfeb875af3169249e58c13ec4ca524efd00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x909bd458d052d3d882661474dabaf5eb040b6f890bbe1f1934504a6ccfc9d1896b55644c40ceab1f5a234ca6ae06d343989cc224b18a80d81bc9d6530b0e600b0', 16),
                    gmp_init('0x14bc8ee63dbe85034d91e7ee902aa972aecf239c804ea0afa835dabba8eec49f16e7860fede708d9a250865593dd95af03869e5a9efecd13a353054a4e5aacc4c5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x159ec39a8c6f8e2e56d961e8810c506e392e42404951c679b1602c8b3daddc51957ed43046b81f5b65723e59c528f1452283ce081c64dbc07afbf880a38721c263c', 16),
                    gmp_init('0x15d92aab4e6887ea34c4e0700bf3333aed172fd45e5475331f6a2717cd58f923a2fcda1626da9a358d911e2bae6c1a7a983cde3ab97111fbbe70ad9e8dfa0eadc38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1797ba669d9672ec1eefe2fec4dc92106d2182aa08fee6351a3ead5d56becf5803f00b2f8cb5395809e5563746425a86a1f4d851c8777114739eb126e3cde1400d3', 16),
                    gmp_init('0x169cde113df63fa3b24d16651793f7b4d5073493286cd9545941bde308173290bf174da2c2105d5ecdb1e479f6b47f5b8d3a20da1fd0755e7da52217a7b6fe471eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1684f3f5018313677d8e5cac4e40ab3a9b51e509584cd7349640d444b230aec14896dbcdd56b67fa20946f72d5ff8dd7739a318e940976eb263167689768ff5a42f', 16),
                    gmp_init('0x19cb033fc76c55aa02c34590552c6603076d92b44dae8d6946b8adb8ca10642a69167b11fbbde56332be05ade4cf9ce1a173954cb6d39e5d6903be026b02e9fa42e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18971baf2cfb4fd68655c896cca22e4c213d4f26e26f3f280ec900b269a123595bbbadc451f11b01c26735d8472ae7e6963faa004b49e73c187db2c322c23b48c92', 16),
                    gmp_init('0xfc8351f81d2d97256bb1c1ecbb1074a3c96d0e4afde30148d19737192486219b0a1da06071a9650846e84890c19bd1a89520cbc871a2148a5bf7c8c83274214c43', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9ceabd7c06aa745047b6e6116024a32dcd36f3262f3b9deed099fe0b86d26d22673203600f78489416b57a0fad122b12b670de0d3fb179a631d23357cbc11b2a0b', 16),
                    gmp_init('0x3a0d85b43418d4111afc332b6e55f9ac1c21fc350feb3a7834da88796995f2970d7eca837503b6a6183f82d6dabb804212cad81ada6eb7045f3f277e18cdc4cff1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e36a94145f9f2506d7da8e738e52770fa61fbb803c2f8fff65add8684088555cdef166de45299267972a07d22f1c3f8361ebd382dcf4fcf1b9b7b7da8ccec2c14', 16),
                    gmp_init('0x1d650f8baff41244129aa95304ebe17a78a0ada986235c19059b603c320754fdadf4d2a84617c7dfe4cf927547a616159c2541acac8bd54055650af6f099e6f7092', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70198293caef6701f1f448e37efad2b5dbc10bfdf66771037af832b673e8c79ce37b574f5dd0a5e4b0023bb57a57ee86f989107b456dbae123a8187a5fc0c3e8aa', 16),
                    gmp_init('0x1bbaae60d552d02dd4f1d642848a861f59944cf0c3c6dda0f8b8b6aac03ead33215e512d6895dd085e78fe35f6e0fa38e485af53d653e2a9e0fee3e2714deb4db92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaaaaf9a3881e4bc6f070f848d42c890f387ea1779cbcf54541d91dcc714b1eaaa64111cb9bf497e75e349e9457255c5a0377777eb824cf4dc6a7316dd5dc62efb', 16),
                    gmp_init('0x1a7ba2213a238615d831bc83e716ed4dd28a00f4a022aed7af75b0d38e22adc38220d30feb7c5999722d960927b3f30cfcea44cca3f3c8f7ac5fd521f1d853096ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f1665271bd9eb155f9a2fdba97e8139cfb38af43fc31ce0e18a8f149fc6bd724b5809daa6181e502b52208de2b8f29c6101d2e76231c7cf1154a7912f4453a46d0', 16),
                    gmp_init('0xa143fa05d155e8bd7798631057f0e9c57395574ca7ac6b1de17802038e4ce7407fde7cf223acf265952c97c546d7ba83e68cf2558a51d8fa588b86fc468d28ea7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42ea9414e1380323ca0e39db0b1a2ffc3208ee6a41316e906145832ab2cf58ae21a8ee1cd8736ce4d1a36f91bb5e8dfd589f159db2908c995c6f3326291afb08a9', 16),
                    gmp_init('0xd3c00ed59547ce0d1efa53329789525cb3bc3c59580f8ac57a03b4dafd826e8cd4cca082d2dba634978ac0dc4a62b52f22ee1f4824c59214ecff010e54fc832689', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c9a62c16a6fd94255ff1c0206e0c549ef37f07fdb48ef02f40c9d34d48bb2aef0270e2d671f23be5a72dca0e13989fc6eda11769b5afc557150c0ae1bbc78973a', 16),
                    gmp_init('0x1d215def43a8ed23f9b284ca9e1671bba9d12d90798e7b4926ba0edf615ada12aded58342fff6b46f5ce8f15f69e6b2113abab00ef3f92d17b7368d1944785a3c92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x141afe23a51ec6a6e318ed94290bc2b3e6684d00de8d01e57079c5c4f6c694c18e9e5e6a47504828300d1046cb83324ca57a4b29d685128d8d9d714194e2f415999', 16),
                    gmp_init('0x18f7b13832775ed825966a57bc58f3cd35921f13320f9a7ac9eee200258189376f07f460647985651adceb07fa6de8aab8eba0cc494be1288df2b996fae976e9c3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ef602078f8e0dafcc4c70ba312ba6fd0a7ddbd1aa5fbf5100a5769f13078ffdc8f4545f76fb516efd8bc9d594cb2e88b7618829b2368aad868d62207babd7e5d', 16),
                    gmp_init('0x1fb302a86fc4cb4ddf56cf9c035b2f83a15cf050f810155581f65aeb2d8ced7c56357fd71d8b71b36eec12442d3ec7355cd945017d70d3be5906035217344f95785', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x114c44122dacb32a63324731f8fc8af6c591ac8aeff459f99eef1255b23788fcc704f48057b446b177a564ad7678fc26d4092a3bacfeea01ebb0e5eb14161f457e7', 16),
                    gmp_init('0x16b95c7374121b9407a268c54c4acbf737131d7bc5e4908516dd24b7461c6690793e385bce0bcc90bbc211e641d0cc0c9aa59d803bd73ad309dce32416d6fad3db7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b21b3dbc6dd673666961c3dc36de5b94b28c238510097bacbd104ac878a383d81594f2c7ff30ec59c57790d50253a2dec3f701e41a37cddbf5ee4bcbf9aa0a8c1', 16),
                    gmp_init('0xecec218d66033b148c4c171a9b4e87cf609f3acc42635e8d98c959fc6a737dc9e936b20625e3dfdd863ce877773b960bf78109ed96d88c2017223f6e40bde60673', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aba90e4438f3b78c5ac22a8b330f00463221e9b73d912bbaaf4a4aba09d420e95adb92edd51b56152cd21db87bae1f9e19246423c4e0c6879c4b52f6fc34afd3ff', 16),
                    gmp_init('0x6f54beff28842e2ae78f2118290fda3b1f5b91d439245b9f6fb2ae71400efe8332981e8258ee6c6852d7386c4d4adc7123b0658b924a91742b7bb69d03a21ab7cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82d65785326adca13d3d838d13e5d0dbd5b02855205f4d07aae075d04ca3c2fa6411e13473f303a32199aada434b1d66a730b15cbf85d3eae0b7715ceaf14e77a5', 16),
                    gmp_init('0x17dd800fdc824d7367a38e9675b283be3d50333cfc26fa3debc97e059ae1a5367db5966c3debe4319fb9d0a4e294f749d9cfaba0633c4098f4d3785f4d05fa73d0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1975b583311992d98002c0a373da91c70a169a9d410ebc5408d57016828e993b6a7fd08f7188e7b5816aeaa4744b51e888caa8b0d323e2ce07e7532ad64b77714ea', 16),
                    gmp_init('0x178b483bddb581e3bc5e4f69dc4367c9a044ac9eaec07bcf04c70568fa7fe1a202ab410e5842d8a08a099557a399c28c31ceefa9c5481b765f893f02d300402323a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6fd647a47cb409c01a95efc93702d19c9b7067ebbe741cfa66c744071b5f63c2b49de76759cd9f36148b57c94382fa85d5b76dabb0e9b30861a52836470b32e66', 16),
                    gmp_init('0xe45518665cf90f2aa2561807476cefc9dc0612fb94d8926ee11267496cc2fe6b3169c0f805da1881a5fb6cbb0fe7656e7d775b1698a075c7484c31f670f9f06368', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf0a9ff816ae02f1fd1219749fd4105fd6565d44c08f139b8892fc788d7bda98d71455d35de15982d3bcd0bcea6e23f2fa6158fd9220e5b6f981683448de93ef527', 16),
                    gmp_init('0x1b6f17141da090a8cb247f3d38968622361917881207d394e96af21e0fc6a9296e4a8bf589aad87bb4526f77e71618398362d952f500cc0a0b5a2a53148e55948cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d4afedcffd395d1d1384543c64c388edb697d5cef82322b00142644cc66f3bbe03d44ea3eb32b2e16436d0d6a696e3e7efae0515c63176a50a6149ac821a91383', 16),
                    gmp_init('0x185a5969ec77e8fae93de73e95b6af2e2693e6f6876de680d87b1f54568f00346be8dca1315d98790d2c7c5f3d3dfc8263d003daaa65d827e5ca7b35fac84cec5f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x172b3ac49b29617256eab2509080bcd593551895481a0a871f441ee5411d55b44316085222b14fbebc0e990770824d26bcfcc50621c1ff661b10f28d8b4e7bd87f3', 16),
                    gmp_init('0x4c9b1d3a436b12ea64ad05ed8199774cbe49b41f4e59bacbc789ce02536d3387c98a0e45fb072767900752bfd9ffacb317a7b0d310fc520275659b7e3406f50f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3608c7486e62f85cadbec856136e9b47a4bd7fabc2f132c1999698bef3b7f715d3f7c95492aecac13c14f41c93b2d52777a50f058afb9178a5747e8dddbc0ffee5', 16),
                    gmp_init('0x1c15e8afa0e8c390221cc4c5b5c6b95d6f42a4fcf509d9afcdaa01e7f53aa68d44285d435bfdd1201aefe4985bbb93dc56e22b4c6aee89de1573a44d74eb39c9ba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x115e626ba9f0f977b2458d77f7d1c32e6c9d530c7f4bf314b67c872fb1418a7bb51317c48889c4fd91d400367544b081b9fb08fd2deed8597bb0b942d7ac32d4d9a', 16),
                    gmp_init('0x192df6d42138de5501e2e2993b324e1247313f7c3db429940664e5ef9d692939f75b58cd08d2e533d85992cd0c017b5e0a5699204e6e3acb5320ad192a8e6b4320c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a7eb74b4b8d58fe75448e6900d300d01994aef954e8fca70fca94b2c532ef8ba467b886baaf49ac09eff66340a8b806a1c2d548f0f16384d3737d7c73b380dc01', 16),
                    gmp_init('0x1bb3dcbfc5df0722a2aa0a788fa60dea0eb218f7fd214ced765057c0390b1d4e4699f3a4a66fc1ba91695a94590cf276f8537be53f1c7b75ab6bc7d410fb08731e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc46d0aee5c3346aaa237d5fd76dc887b1ee80db754fa41670e1dfbbc0a5466f3ae172f2c33462fb19383bedbd2900f860f9c347cc50b65eec13f8adf411cce4ff4', 16),
                    gmp_init('0xba0b2418d37589cf6abce8086663f6028c7714cc71b91915fe236a4d0a77cfbf6e1953b249e6bd2aa20680015712f58fb322c5b2c2b953b1332b44493aa3c933ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x353c4e80d216a75ce75f1738fb65e3b28ce6c0a829b40261e498d59716f6778b61cb63d972c4d7d0244dc49402f4a94bc17e193db1562eede4aa498bba799e30a1', 16),
                    gmp_init('0x692ebe0180969ae58decc9927e27f6973323891b32438f759bc6b8b05a2f643611b7556ca035756aaa013ef7caf98ba94b9400e36e0a93203d376d19ef733ded62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c3ef58fc8a7927489a7848d87b9caa004e5f7571a9a8b304ae84680e0ee82dac0e58b2bf5e75873bd8a750fde9ae70c7520f4f74703dbcca26c6f6e7fffb2e55f', 16),
                    gmp_init('0x1175fde57a77682feff99f3ed12b4fe74bb8885b10ab555571443df47598c5e1e94778cc8c5c31cc5ef054d370fe16b97a33cf3786396e25144bb8647eb313c0114', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86529db2148d2dd03e00780be25581c0da38169c6b350c0dac32d53db01a00cd11d9ba2fec648f9f001760b2b2d543ba3cda9e7fc8cb530b1a10359c42c7080fed', 16),
                    gmp_init('0x478e4bf402db5069a62ca73a7214b8de1d92974d07f86fd6c4ddb363d9c837bad5cdabbb45ebcf8fa911cc7075b4a1813a5fad58568269c013f0752710712c93cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e07c90a09ebc5dc83f0b24f1a1fcf68442fc66e8082e76c53fc7d14b9b91cb0094a1b0d53e220dc56e2dd6e938e327495ed6d1d2aec6f939ccf414bba078e03f1', 16),
                    gmp_init('0xcca61b25eaef40a4f49f340c2d6afb61ad5784a66e7dbdb32d88affa272c0fbb546288a18e360dbfb087824a96a4ed3914a571f80f14203dda6de36f3044479e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x151b68c6f8129717e9e863018a69d05c5e5bf89af89b317ca420df9e9546a284db12767e7c46cf0ff8940cb51ddc374556fac479ed35fe901099417c585174bac49', 16),
                    gmp_init('0x4bf9f42989a44f21249fc3060247e9d309e4448b345b0d811738823f8a9a840138039589dfaea4c334ab4d585f2bfaaeadc85780bf4a05717369a97e79a12e3bd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17f10c56755c13b08addfb294b5d86fc9d461b059badf3c15211559de229cd0279a50a13caaf5e8caee6502b233c1088aa6963027675a95a434f0a611da5fa23cb5', 16),
                    gmp_init('0x2307e732cc8b2b08c9bf8aa0afdc16098e17de8f2d1f394289ee813b3ffc4d2c0e95e8bbcdb8862375cb0db4436b15517d13cf25c42d4c801cca4a3042ba32535', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c355509556f5d108190a2f1522c6085fa9fe67a4d4522342fd073ca6af5ac1376726ce9b005ab52e7c431d876cc63d3a443c779870a351bef416d537879f8a7b5', 16),
                    gmp_init('0xec373b49b94bc91707de48aea5cedadf128f509d89245e9b3ba805b2be66feb3838ff84403c4aee7462bc70faefe6a0e3569ccb95ac0b173896271dac51a2d0bd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17514cf5e9551fec71295fddc4d57b4d4bde08876cb3630e99fdaa1d0ecbdc0ce68bf158418be294cfee8b8d418251163689a74d29f8880841ff5266ddb2a7c68cf', 16),
                    gmp_init('0x18bb539bcd15db408eb2ea6b3d4e27c8a2592825003e90cd79ccf0d6da18b89af62fc48b55d95448df36d8f437961ce062751631cc80a622832c4e5c08db9d5b157', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3827057cf9724bebf30335d77db08b256cd24503eb1c5a27d63e5eff052a6a3622e2d2f08474c141b42cbd8d71a40965795f979fe940210f06f7f2fe8b6813f72', 16),
                    gmp_init('0x1fa81df59a09e3b4cf5c166ed4b7c9354cafa53f5dad8c833a672ac24ff2b8ded012c93e9846f10352b4b10d90b4a42090f7557c331d06696b66b372ca7dc5feef6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eccaeb2ef79cdb1896d5e46fc6ab702098fab8ee1674cb728500cdb864d8cca5ad4589d84cdc20088ef5fffd5b5fa745094ee9f8b0804168b88ce9e114e43c6a8b', 16),
                    gmp_init('0x2e5edf2873ff5262b06b34db2f7ff1c5ea1f6288a8b8414aefdc22071c54df47655861944d53b41996749eb5d8ca99b91e61613d0ed9567198f5886bbc26b04438', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3e9ef720e136ad78737e6279f4d09f7fcb3e0d7c626c649d9d8c2218add9f415f7cfc68acb660e0ead3104fa3600d4b620b656fda60399388cb9e50b3cc6dce31', 16),
                    gmp_init('0x150fa253a28590b3cf5aa771bafe8866d73095f1bec9f15b3c38f49d542c62908bd8666e9fb80b521ac1132ad8b8dd5471553ef23f815592e00bada672d03870d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x122ea733e27491b2e8d1d70995daf8403882387470841aa63ed0c0a1ac3063372e373372e761824cba037b691a0517b3aac650f8e4e523ffafe49d0e9bbf1a37365', 16),
                    gmp_init('0x1acbf016fd8268af54265876bea9963114042f0cdf3586e1ab8dbf9b1b20c349030b767ce92b1d5fdba19a56fe0af100aa9a645f29308f87584eb6e7c3b573b43ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x820b60cda369b0445e31511e52ff475990e323781f4175d1545270a02f324d645cfed9c23bee491931dfbe83625b9451f149551e31c6cdf6943133809747525f3b', 16),
                    gmp_init('0x776800dc32357e1be45db334162e0ded5e777e06327e71d4991d83f2968be593baf6ef60ddb6baa0ba6f09c296265e1b54e78f939b6b4d67b8822e418092fa5405', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e0976782caef426bdfd5d250ad4310fabd23e934f9cab55b07c862f540715a11d1c0cfae7199d3419b1a09585208ebd95ac4677b05fcc64977992da26804ed5e3', 16),
                    gmp_init('0x1e82da80d6c216a59c5c9701ce42a7666dc71f8a5b63c810d168a91bf0c5a72502ee9cfa2f23040cca6b2b9e3f157f76616f31c5594fedf69def78b0a7a2a7d5b37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1b24620c7ab358b89f9874df8d788809c76b98970b45f0b6fa2539d86ad523f98c6262621d12cea22ab1b684ca3f42111c023eb8af2c43f6446fbcf70aad63226', 16),
                    gmp_init('0x1262c78150416dd9bfc3930dea2cad192d951ba6ed9b9890ec65c65a823084f25bab76ce9e40572240e746bb5d67f40b693b6a2fed9ecdf1dc5dd50316f92e3b976', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x165410f708c8cca4c68202efbf582fe1841f7d17456c8424fab2e037e7718ceab4c5e74360ea8482d3b1e50e071ac9c1eb80576e1edc566c8372631b3c36ea5e7ea', 16),
                    gmp_init('0x2331583197bef2dd76ec1cee4e3d4ef19683e9d3de67ef401b46b7c068dfd50725c0f5d00087b6f996749e3276cf2c6e53495170f43d1301ca659dece0d00ea056', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x181bc93a3519b13ccdca2b5b201889a0bc5b1fe6bef965a1803c4d98c41bcd03139814e23ebba1284a8449da5f7998c47039318b87f5188a0b61eb52d8c8961c678', 16),
                    gmp_init('0xe642a8b57f15de9318d9c7bb569e1699da8f0d9ad920321e0959f846cbc3d62325d588b1b854f7416ddd6481a71296397e26c730852a842e3517c9763ff4e51116', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x396b23a204befd9c3a4f51b73ba508d541e497546f7a7bffedca27a7659555237a9b2ec3f65856531f295c447073fd20f177ac682616726da8b6f28395a29d2024', 16),
                    gmp_init('0x18b36ad8a91de12f4f4c8a744137e5a46c8b126c191d895153ce87d6e18cddb9a15f7fcfb537e0ca450aeca4b1d851d4cdfda92059c3ccf01dc264295052ddd93a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed21c81809274a0ab505b0180087b4ccaedae56aefd8e7b1de7b0f28e7b97054dc5d0c517699a52be4da50395f0ab44f59d276f7d0d347b7d432c6a931b227157c', 16),
                    gmp_init('0x5b30afb4de2622f5ede0c0ea85589961019b59c0bdf8597cf8f8097255c16955835686716434a9f65d2c239fd7702a4f903bd3309fc2a78191c1c7e06b9f9761c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x112f49a4704c9ad93abd6ba047a0e1d820488381a2fba2b1baf475d94d6ee33e82a7108876fcf2ef2c0c00ee4b63f49bf19be4f1a7e9faa4bf4882e70bcf935169a', 16),
                    gmp_init('0xe2632e1094a98c1c6f6688f6c0470a32096ffb7c2a648b3f43026fff77e116256b3dfbe7fd91ca373144777fb5d7dc217835c840ded006e9dc64a6ca0222fcc815', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1adaf43c4b6b9b68e10ebf2d04742c9aa971d9dcbaf4d7182783cb8d5f8a354632dde805c83adcd128369dd9b95eddf11e9124a99bf819551e9c3120df78ea50ac8', 16),
                    gmp_init('0x1fe602db173ecaa7cd283d1b8d21579db093b445adbe946eb4df9e09f1df6a8aa863fe0082e3e1e38e78471e8c311e3e8b7cc9acf06a48336f321edfcb3d2451b29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14ea0a8b0c5768b22e9bd7819ec59225d2934adb68f2de96e6b645c4442bdd3fd9a8fb4c8ed2a623d2affb140dd9e71fec0ab1888ebeeda06b4b48fa75a590e92d6', 16),
                    gmp_init('0x1637e315762aad0e5b0c6ab7b666ad2706123e7c2723c846197731751bd77a8529e6c1116415318b15e6dcf7e22656a1f21f75bde0788b7fcc6fc0ab8407662f537', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64988421026823d193c307666acff5f20fb2f48c34c7b51fa6ffbabe3ce3c883c61a27268d6d35a68236d68942208bdbd86b8f11b6552f4b668b2c940f98c0aa63', 16),
                    gmp_init('0xf86d74a464cb81bb60b6709cefe5f6d0e422131bc390fe0290bd34618dac7d5a894e1488e6c680da9c235a76d5075c193389c67ae8b63d595aa307127da730707e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6e996307e5183b3cee542e2dd9b25994b11a840763500f8a6c9da540693bae9f8066f8f60fd3b01424f6f1466b235a4c77dab254bf8074207d62b631691c3be7ef', 16),
                    gmp_init('0x1f077cfd9bca57b4387a8d8c58fe6d6e8c1a802a55316906c7b74d062f5912f39c36eeece3a4f30038e7f102d1983fc8f4b0640d46de1fb611245e2ae85a4b301ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ec11b9feaca84920156889642a39ff2165ba4660d03fa2b7756e27dfd088bae584c03d266f40188f9abd3a2d551f7146df9fef1976dd3709f3b61c3204268e7ac', 16),
                    gmp_init('0x17a6a2032a0a270cd54f09f263976e4580e7994e3ab37600864dddc43e5ad004aa832cadcb3b2ca4aa66ad3b6a626ca2d6e23c449c26d3c6441357c77971dbca40d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1498aecf2a368e9cbf23c1dafabe341e2cdaac72c21df7cf5cb3113c468852a7529ac90b7d8adcc62200db617ad69cb28aeb58fe9a218b28a2f2fa8a5118eac672f', 16),
                    gmp_init('0xb2a575474e0fde7b0660ddde88b364c6519b3e7cb790f159a36030727ccf12eec3abf7ab383cb0b266bc89cd30d20fcd4a53ee5e370cf6c4e71461a475c3acfc2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c4d64ec749011bc47165340e9b856f72d51372018edd37225a3f72298a130f8bc93e6071f387d4d841f5e87ce4f099a45fc1534f1d485cc29598766ce569614a3', 16),
                    gmp_init('0x1a3a8ddc0c7dca1396b1c71e193b65b8eca3824dc401b6dcf4e4993f33d7500f71e61f90228a333154c1326f9d742ee849a845d25cb1bbd10bd975d2c0d5b62d194', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb768dad953325e6c47192fb797635e858ec0a4905821cbfaf7cf4a33adcd23e4df1f7edc9ae82d628ab2bce4119fe4e683f3167e2c9cf878de0dd159bf9d906490', 16),
                    gmp_init('0x8ee397a29c946811e07cb9e459066a09117073c6afd509df415fdf36647b42e487ef38eb320b949f461afe2549c80cfb85601a649fc83fc419662df57814e26cc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1985a6460d600416b3d58c5a7311e15e027f1a5450d0ea832e9ed36867f12918ea98f9f201269599ba9f5a5c2c95f6ee6e122821a636097710d35a51eeba9c350af', 16),
                    gmp_init('0x308ec9740d38749037f1f5880d9a4887257e7d62251fb47f5a26d793380c9547f5c24efb7d7d32b64d7c8d20aabf132ab2dd6966eb2d40bca9a0afb24fcf8c23f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x163db07a6a90c563d0fe03feb69aa7f5f1e23749d1dbf25561652d6e1f596f258d45f8b4f4e89ed4019e7f93c6544de8a145043c6c723c3051840bc7a65b7c2cf3b', 16),
                    gmp_init('0x19bf7cc38a4ce3a2dd39aa4741c1b6aba38bf99de26e6eeaedc0cbc6a79876f22f1e6588cf4e05c3e73c4f119f0b7c6d7dd18b71b89c125a069d40290819df56623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a21c2e077ee31c06d56d67db8c1b6e16419c679e26117ba62ae5c617983dfec21fc26e3a3cf5eb83377eba714bbb5ee0ce7b7bed87d66cc1447bad211d4ca94ce3', 16),
                    gmp_init('0xd5ee1b53c8a99d30934e21e900b4a549909697f32941ec300903c466b8c8bfe2879a701873be25dad5ba1f3359dc2ceb6c0b15b14709371b29c0d71279cdc2d75c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f041472e9cbcdec8eebe4d535b05f9edbe9ec1aa96c3fffcfa50b861eee496851cab3bd50749040aa488c420c6e7e027ca5c38305cf75dfb50a3a1d68dc95db9d', 16),
                    gmp_init('0x1ac80b601af815c2853b857be3b67ed0e1f6c41f158a5703e5576edd7bb9546b27e965a25175aa5e0cc11c864c6224f7773ad09d3ee0bc53c52b0e8fe769850831d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12fa1f66938027614bc0f1f4aa8744238361839d1e3fa9cdb1431b2e485340e8fb1571434694ca275c9edfb4ca69923509b1a523c29f67d6ed6cacf7227489ba5d2', 16),
                    gmp_init('0xb9e2e43b93763d052b6d9b9daf56133721d47f1c6dc1caf971ee375c35e43d5225beecd2de0f10ecffdc827eb809ce7304f078bbfbac909f3bddd453d05635bbd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62ab084dc69956591715e7c1d23d2c9c88670f05c3f7f2325c0583d3979c5cd65484e266b7cc584ac4299f7124f55b80a648c80804f42a814bade5960be228e043', 16),
                    gmp_init('0x65de99a5c6f7b944c6ce912c92524a795a465896ecc50e946e0b5619e60018fce92019cb0e6287c78c1379a43316114c50a7a22f47f18d172837456df063a823e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15cda615df411c9e58fce2fc89bfbaad5b1f0b828d5f5819fed3b7984d7741c8e35db73aab1dde5bfc4e490b9caf398d09245d1ad8c4bca4aff9a842cd1d7d39f33', 16),
                    gmp_init('0x13a520f9416e84299967093a3ab2d23552068f639eb3f27552851dc45b6d73dbbd5826399dbe4e4c2f098da481c5d9b1206221381dccedf3b144b01920ad96156fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x120ab0e5eaebb8944e1ef6a7b7db6b2fbb1dd7d579c2408698877842bf6ebba4c7b05a3bb5e473af962d1f3145e8884c202882663c4b4a56f2a37e172f3e2c08623', 16),
                    gmp_init('0x7d726c89ec9ce1bc10416e5ed7bdb078a092e5112acf09516a2967d06b9272d5467b7e23a15b53cb19078e4fd98760f6b970a7fef19ba34c854d374271d14aa9bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191658d58a74cc18585952f12dda5ca32452caf85d422724ee70232781e01adb58dc782f1073cfbd4a7a09f7697de04e4f20526971177f15306b3638db98048a2d6', 16),
                    gmp_init('0x4a3ec45db4dfcde9c15e70ec1c5f814c5ef59066292ac955534c3680ea5c5737763c6d9c6620861f44dce25662da9b5fadc6acb7e2d56fc84735ad5dc0145a3b22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe91e0124e6bd5fb334d647027aa8ca31935cfde7d3efe25b9b15e3f49f3a94e2663e437e9561f00aa2934ab97f021b43e3328a9af3e16a72f874af4d4126a0c8c', 16),
                    gmp_init('0xe12c29b9683e29b170ad177be33195121e5d9b6dd917cf9fb6b891f6958abca134e46e2b3b4355cb2fcecbf081d0474238d8479b773bd662156cfa73310b4ddca6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xba8a65bee8de2da58ebbec7a919d1631175f518cfcf0bb0c5170b01fb4becac30b4ef341b061bdf2244826e015a4c6d860ac37b36876f373a1bb59f2675c346588', 16),
                    gmp_init('0x42bf4b5f806de8fcedc867f1fa8e1bee408a6a0228557b66dec88fa56101a49a6ff5169f5c367e215577f4e27d7299fbc1e8ba0e81afbd8436965caf8e566098b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2072f5a0b76453439d012d2802dd1a82a23b21feefdf6cd770c49490de0c6c274225914c8c3fcf0490511949b1c6dce05b40729f28c83a4911b19a5828676a875a', 16),
                    gmp_init('0x1fb3b647f0e4d56f29b84b8b888f7c162a28ad449abcccd4bba2b22d6e96b31bc52f5b0335865e97a30564b56587df377d056527bdd1c50af243e85d07d9b58e26d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f0ddf08f16a892358d5e6feebad0ab724714213f3e673af6b12a66e90d160f8cc522aad840d0b6f878dd4fdcabf3fad381c30a04a25a1287d59fa6794628233ed', 16),
                    gmp_init('0xd756cbd2604b3e7161356377f6cc8be47b7608184df124cbf1794e6f1b856456749710ed6d5d57a6abbea885d1eb815b8336e6411ee7610feeaa50abcec077fedd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4728363f309167ae22ee14680d51a5bb78ea6484375ce7cd0a95eea80462086edb8680000dee500ebe43014e69652cad7faada5377f98557670b91d5244cfc2928', 16),
                    gmp_init('0x11d9652e358d96015dbe7298f7361c8215c2b531d69f3216d95bbdfef3cbe7fb4f35b87c196c5b0545cb9f87b1462c8518930c79590c6495ad75335dbd719692e28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x877866138b995ad46f1e5495e03c4be889a87ea5295475aeea5b71973925c7620124e9d4ae0e89fb39afe5f5580de9bbbcfbafa50fcea6aa25f42c064a910fda3a', 16),
                    gmp_init('0x1ca524045e73fb18576c6a84e52e07088950fbdae220f815ea8dc61935fe38cf7d0858baab8d43bb0d63f1050a89b71552f8c0f078ca875a755f9f803e46afb538', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1be43cc8e9ca4f7ab3b82d096f30eec82bf347cd72d1ad9a04f38734d5dc78e0088b466cefc852cbb5347a20e1e3a60425c6f41c80ad573ab60f9052c7b597ec4b', 16),
                    gmp_init('0x172bf07ee0cea0100db7dd87dac5e431e1f1b1f4c0950d301ab672fee6b101fb01a4522d8f78329caaebe1c2194d5983cf9d686695eb1617e2478d630caf659615a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb059a70c6e5220a862cd0b477911f59faaa5f7f8f0be111cdeb960ed85f953ced0c76a2135e91a1690a6ffafb812767127de72be5f0d579a632966f76bd667641', 16),
                    gmp_init('0xdabd7465c91e63fa6e2ba236eb981423852cee2121248e6fc9b0a459e867467a1c2162edb414f0c0e013cb7d19f1ef7ff2011745b65671025116f99e8ba61c4277', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10e470bca4e2c4e618183d7f5f023c47893e7535c591b7966d091ec05c46727939bdadcda955be24d99002aa47e2d4af6ffd62d42d762febdd5deed672da38be841', 16),
                    gmp_init('0x6e23375769586f4854c077936f3ccc700a51923c30e0a5514d3aafb169a7c01f88cff3e30bfa64335061089282db726b76240e6b2c49adab54fe45f9698440535e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f735fc4083dff536f98186b8fb547a8c5ea3c536e041372541a4f838d6a0c20cfe558cbc681c11c68d9383a37776c283d282c3d6ab0a057ce32a46c0a786b50c9c', 16),
                    gmp_init('0x181e4655868859795cc8ec094a280360ed24299f505176a703502390009001eb2850342621ecac07f117db337b17b134eb6bb0280f79484f2950050ec2a19563d8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0ce0284232cb84c7aac3cb02414130295833c0394df6bba7bf291d500135c94eb86fb810c172c2ff4dd6f45f8f96125948e855aa95e883d3340e4767b3a33f4e5', 16),
                    gmp_init('0xeac0fb7900bb4cda8deeaaddc62600673a3a7836f6589a42f30c2da840a4c1280a610c73332ad794637f8be627d5e7bebf7e3e1f80695182f4c9df103571f01f41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11d5b6ff8878b53b422c28f8686bbeb6e6f8f682259f8b3ba775cace87183c8fc2d403b7f19fe63047ac32b350c45c6c251f1a83d3f2a79e33963c19ea5212101c1', 16),
                    gmp_init('0x23a208d1fcf47a571f36dac227314a8ca14690b7b95836e6c37a017a94813f98116334f835959d138d4851547c156939834af0a26cdf24eb15a2346206a7084bb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4be32fa3ec323419437d9f34f8f4821d5598b0611b33d79a361a0769311c14b3011338609b7d5c117db7c96b415516c840b17949a009de468d300aea06cdc7f195', 16),
                    gmp_init('0x15f15d391fa5db7badb4236a8703ee3c6d38de1ce5f8b25dec0156bef9a1b18682de24794b3350cb107518262fba6923e2857a74903814c52e54020db19f59cdfe7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae1b65de60db34a758a976dfbbabc13577fc626088cc5c14fb8e175cb4f2775aaf84c14bb7310c7ea816933e342d5ed03f8ac1d4ced5df9d234b302e0449bbdcc5', 16),
                    gmp_init('0x3c421261e9f858e3a23d10065ab244b20ded29aab9bd10d6b071bc7cb433f10d29cb4247fe98a7765ae88c40ad281faff8fe2343a865c21075b8ec8c8f404a16a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfddc8be520df4fb819d26411c2a04aefe07c59e87377c8d3fccd94783f8de7208bf8b5b0abeebfda9ce605c3bcc052a9a4362bfabf6912ea9cfd4d1a9dc4f5cfc3', 16),
                    gmp_init('0x1b0bc2233732190cbebebb5a4689fd7ab25942aa5dbf68afec99ecb4f986293cc44768bf06d2257c966332d4dc5f4acc90b899849e74a06009a70f230cf399adbee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x197f11cece87a9b58c80fc5d9175f92473f5aed637c44720e3bd7771a93c3ddf1ae7a92252dac222e323f70393f4dd94afe3f07b422bb29a18346d98f975bf61d77', 16),
                    gmp_init('0x18bce44acb9623a390b3da2399716f4767b7df0e535e8eab681d99ad646ffaae759f8c140a6a76034e4e84f3d372513be74b93b27ee3134af3e4bd350da7c355bf5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9bbf851d3f825244faf3c42bd0ee549d794d0f8bba9a193f28ff767379fb6b5ad487f519f4dbe42b0f5bd2c24f908f592901163dd86957d5eb9aa53b475a714194', 16),
                    gmp_init('0x49b872072c0cbabbd4ed749903433451dc295684c1d427d3a1c771e34cc85272e8a2347499aacae46cf42a5b035468f89dd1913668e0f74b73825ffb609f78b57f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c786cff8bc68eb751e401c22a42957db014f763f7313a4a243889639b07e65ea9fecac256b57b8d488200adf1e996ef096eb51c34660bd7b77f98db50e8435735f', 16),
                    gmp_init('0x1ee149758e81fff90b469875f98d458fa6e693983dd08609c4ddcbb94f97f36ebd663fb8a8c432af69069a29cf4db5c068b57716280b223b3551c0549ebe47805e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13beb231629764cabec61c992b7e31e6fdb0217a94a93b38db4764bb175641f1fe49edd5fa24f0a3584f5f3079b5294c956299e1cb30bbaddd08452736310a0d011', 16),
                    gmp_init('0x61653946b5db41831a002feb9b89a625d79bc4926d25a0a0abb52330ba584e11818a7b86c7f9817befb931fbc7527472528eef9b5d8accc1f1bd3b12a4d2e8c15c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe1b97e125bc0500e41a732b0caaad051334b997f2fd96082906eceb8806e055f04677143cd97ebd7cb7c357901e9dd62dd872fb0aa3323e3f1efe65befd91d43', 16),
                    gmp_init('0xc48153709ebe4f02f6c4ecaf126d91b457000359bdd799749e2db254c665f9a215596bb714b0b8dd96cfb9c52eee6cad4e2b887e327d63c5f0fc4e9baaa1bee510', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5b421380f5640d4476caa4459a24a7af4aefe583a82851b43b65381c97e8d39b6166d671a178d242e61e365211ed2b98e563769927f4fe3c02218489b09d9e2f2', 16),
                    gmp_init('0xe97ef5faf8c7bfa045917cdb42fc0b16d81c77425b15dbd4740fa90ef683d30793a782e2fc71c05ddea7c3b7b8b76492584214be92e3064f4a706a413011d91549', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2ae62bac48f43edf22e5f02b6c1de307adccc32e05c03494cf8b305a27c198a50c2d64bd01c141459be262d3cddd44010d707cc2a1e69f425b408946a60059eb', 16),
                    gmp_init('0xad5dd98e191da91a1607fb0e16a298776859d3d3b6a37c89a2d1190722f861d8f0e03d4f2c8b3a8a62159e5919321323530e6041748456480ab02341cd598a8ef6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb6f590326ed9fffe2d07f1054b2bf2a3dbf806ee5a90dcf6b343a5d1a3b5e5fd8ecbc75de9780450437ee7affbd0d2ead14fce2b1444b8b6109238de907ae5402', 16),
                    gmp_init('0x1f14e05313304fad4c84faaf12e771c3b1ca3a21d6f7b8f6f81fad8af9cb36a88354b35d1e7891bffc8715b6aa8937ffe673eacd0ed475ec98d9c42832de6198aab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1546499322cd4b02fb4f3874d22debe3f74fc5461729212b0f1819373249e5ea36a9ca796dbd2638c18d38cd0c1de22f717b0dd2285aa8b8687eecdfe4e541183a', 16),
                    gmp_init('0x1ab5aeaf55665e5df8350bccc4ee312939b9fb1d00b6fc482770aca0d09b1a8c71bf8025a0b43c704376b8471c793c7bf98954aa6d88ba986767977cdaaa3bc23c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80acf4c76c48dca66abec902bb47cccd6ced7a7c288e6c979a32e6873f1bba9f2a2bc5e75b36cd51bb9fda0a36f67582118f760836d47c56bd296c4e5e4114124c', 16),
                    gmp_init('0xc587f09af9e19ae815a3c651667a980260ddcf6123f93fe188b25e204fc26beab6cd50cbb36b81bd2e6b49014ca612f865bbd44a35bd1b166644a892f6355a975a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6418cd1b4506efccf3a572db88876e6006aba3103143c1a6351959c042a3e0fb62a4bc2c85323df280281a7fa945ab6b9af44b924868ff31b36fafde5fbbd4e98', 16),
                    gmp_init('0x1d20401f4521c3311e8a24b34bcc6acd252765b0f46bc36697ee0fd470b473b6ef3072af1c6702d26b074063608addb71d469c65d11d76943abf121c2f9beeeb151', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dc34cb84596dc4ced722027038344bcd0ba591ef2e54492401240ca6a0a2db1ea9ca543ecfc08a48c9189023ac496d5522b6ee6874dec1f22c3f298d941c6a01ea', 16),
                    gmp_init('0x1319b4c2abe08588f489f86243cd7528fa3f482041842d13f8349803f05af045bc3754163a977fe2ff1a788ab9679ac753b8bddf24ba14739f7b5a949080414ed02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13d2bfbaf44b9589b4b9e899c7dfbd40e05297a0e48b09f9c96a686fa787cfd885baa5d83f0310fd8721dc6e841d3da67b0edf100f6b15b5d6c34853c5d35da05aa', 16),
                    gmp_init('0x1ec8679f2d7c350f65464fc091f665c4152c400cf569a7ac400ffd60181336518285a09da1f80a1fade7fc611358a3c3666aba39ee088f316f8937376913784f654', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2059313aafc2664276f9a597f80fecfa86c9b99ae4476865fd3c9aec97f913f656594ee800b10d63165115486ac8d049ce7c31843080e364923af9dcd14473f37c', 16),
                    gmp_init('0x9415ff1a86cf681628c2f2ce32745885e99bc4322c7965da39032c342434f82c65f1dd612dcccc654c023f4698d681f4cb406a1eb58838d43431f1976e5a1239a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x810a0cbe3dfd2278ec514e37d7dff21f90db8c2885ea2f1d230b923612e71c4d3555fb97a8f584e160df0314f4842d3bdcf49e33b7045c8800b10ff95e0e9132f1', 16),
                    gmp_init('0x167b94b40df2520b74ea8cdd03a570abcac7016943c64c94259fc401e51706e036a5bb7fc177a0b4d738ffffeb0981514899885850d6978f46820daf0c8e84e328a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15780e01f63a10cc8e4df408882734e71a8a03de4e8dbde055490422ca7c1a092e0975e212788825ee555f5138c26c9b5448baeaeffb07d565d41ec06596dd7d8c6', 16),
                    gmp_init('0x3c46c3dba13e61916c0002358abf211bc29a727ebd4281b5ce38e09d674312f8b08d32d35f1253f42e1b12fdb3dd71b3f81f3e7faec1e49a1a7b4e0e130a65cb93', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1daa6f4276396303678add766eed2b258c4f0650ac806a8b133141de69d4c5da98407c8dbf6c5387e9a8c775677193b17b0fa0673b3cda66dfcbf2097b9414d9815', 16),
                    gmp_init('0x685eaae5b321c1e8260067fe1eacd5cf3b110d0d4a8ff6b4b6ac72d8e3fb5f843ee4b63ef8c1331e1fd966c8e9b6d33286f8f2cd8c5638cb0ccdbf1daa39c8824b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b1cfd0693f446bf7078ec0e91e163aa77f541c0065901e5ffcaaa02c343e3b41c30453775ce2573f162017450d3c9fa85e627d938dff7a5fc9917e8cc2c863225', 16),
                    gmp_init('0x1b4ccd4f3de87ea68840dc48630afd7fcb4365972b3cfc25f57db6dc76e23578ef892a5f71127335516ccfbc9f3f28b51f4c442f8a7861c678282aeb71678063f41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17e7168c0779f4a85c3d621be3476dfd6973a88f2e4ebd64633a2baf3892758b81083bfa334f2d62d9aa064fdcde739e7beb4b208962825905dc1d7001b26e22b52', 16),
                    gmp_init('0x146eb15b45fce26365c22abadf981ba512e7c826a925a606a2d30d71497d6774463316468c44a04adc2e20192bd787844b595e44505cfacfc465b8f06f520f8f0ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x535ef137da607f9d21025ecfc40d097f4b70b3fea29ef62e7627ce59bf042b3497fb481c75da6615c2527c4a5caad938497cca9272c8287e7a72f88bd2a3b42a3e', 16),
                    gmp_init('0xa6afdfa6830961d56a07c5d4334aa80397fedd124cb0866e1887a6b88b99c4b4d3ac402f2d8028f30fe15f333776f4fe2feaac9e23a4e120e43295047616741f79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12aaf12d73544be79e62828fc7086a04627188f6b28d7f0008294b303885eede054c1752ba2835a7f27f73d4880ab23124a0d1c3672ba48093ffbe699bd99bca15d', 16),
                    gmp_init('0x2f731a6b8678fbb10ae80016196ebb83c8a22574d03298256566252c90bced7a88f2f7629eb711fa2046d5d067dcddbc4e3187d186a66f1012cd758e79d7b22fc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf4c57ba892f369b4941e955530cd909d9e7bcea9e4f8cd4199e5e6962d0e7294ab8d73e543a58f44b67162b0fd7a668de0d5ccbbc4f2c446ee622c1eef4cb671e', 16),
                    gmp_init('0x19b762e37ffae1a8bfb66ce21542942a61a07cd2dc651b398daf329399d8c38d7b60f23a45de00f8c47bfbe8e314b6d4987fda5f55016b877fd2822437fd5dfe006', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b73e986a34f34290f5cbe10924ee187ff7f33ce1a5ec37ea0ef4f9d63e46153daf1c0f5f798cd4f091a58bbe5e770dac2e417ae2113dc958d5e93ff2efc4c926e6', 16),
                    gmp_init('0x1b91311930a6587f68890059acb4fa39a464ee221b7d66bba7279e991fc2fa7db33e27e2023ccb5cbc05ccc3eab6b90e61de88f6c8a6ee84e95597b1f321e9e074d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6a10bd887f5d389aeda5872dfb9ab0f6ff394d50e9296f310485c40141e6adb21892be0152c193388f702c613845ea55b9351c3c2d13901f91f70b2980af43bd4', 16),
                    gmp_init('0xd65c375bb3c56357197513085102578b0f4990733bf651b425d9444be5c080228c0caadde13b65594878c2a8e39bf7d8ceaa7e595bfa72991be268935dc8f44c3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1552ac5241068e236e65eef8572dba3c6e8e39e338c8a44f1bd74fe98736cd17e71fc512e1f1b28142db6cafbe67f3de1f2bf4b365566b34c43020508688d069d96', 16),
                    gmp_init('0x170fc6fe9043ed1087105535b75be065addefcc2df3ea30ca892eb86ef1c9bcd43434040c96c516a0a16f01971ed836f10422e67f89c4291117abde27794f05f2e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b5d5b9342a9697b7da46e0bf5df8329e050b5fe3a041394d2d1c2bb0d0a6ddaca636e648a44936fe99177610e107d99ba996375f6095bdaca8b08f5e5ef9d57d0', 16),
                    gmp_init('0x91f3919226d49fd9be7141e7e2696c2ada6542e9358b6f6675cd970a353bc9f334035c95b4cf21c064f8e87d5d74b7578deed1d5b8c6ebdc54db0eaed26e986a7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x348c95f67067378f56e7b6d1f10907796bca4609f8d3a2619f9fc488cd5b65b5a69e07516a59a356131dbd05f4f1d1718f003894ec9f2a94a6b3fe48f3b6d90ad1', 16),
                    gmp_init('0x1f406bc8a3c4ce022f65cd129937b7658d2c0c46d3dcb20f8e25543e65e7b18dd5b5580386b80b5c20d6d06ac3451c68e6f49d97796c541ab157e5af4fd73f60e0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15082c831732e77fcf4470c137b1b9de2eff37bd402f6ff28f3606e2513af564df7d1d3af28ef68572bb8aee8b3f53cecf30d5829b167dd2f475afa559993277813', 16),
                    gmp_init('0x1800ad86e7ff3278069d90cd1b0e8f7cd44f0e2bda2d50bebac334ebb9287a3faddc2d4ec7838d73e408000c20b304c8d8db8b7ab5a55797846c81d8b9bf824f95d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126f96f6bc9c2e6a4ec17b0c4c2b4a0fefe313fa62f071b8e0280486ccc2351db7dda34d7a03799e81bf14f11c3cebaf84f7b4dfa32444763fac47018debc2dd99d', 16),
                    gmp_init('0x76b1b4243c04d55c18343b56ad83587563b8b1624f8d48620aa6c8601b1f18d3ddb4abf99e0c80c0cc4bb6c7bceb6d3e3515e751d9c1ef3008af70b2576b54caf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cf879063a1052f4c5fae0984d6486bd49f736eb1a05753c56168e20b2cefb41ef6edf83a00c96e02360b0096038113604f2fc98f9481a09ad2efe6aa1f2e7837f6', 16),
                    gmp_init('0x6650bc95e38c7d9258c569e2809d61e6f6c15900a4ff81a6d58741e044fd6ec79606352a6d5b4d20999cf22103d23aef6704fe60d73d26be6cded0b68e69d091b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13dac1be97b410cae0f4aa28f226f9582e3f26517e4cf2df7ca3f89584f726431cb3c2a717c159cf1c7584e18a8d4ba39afc89dc32089719d7bdee6d4d3fa9e3b2b', 16),
                    gmp_init('0x1854cb3b6ee66874f9b1614c168d73e2d195ca5298b5a2e9b36b9dfb3f472f671e8842a7c25d41ed28042a1ba53fa4492aa28df0ec5ec65cc581cb73c6fab393139', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1851a5509da86f5baf0a19beccfc96bfcfa2ad4b9ec13275075b50d34b08f58f3af244db1200a7fcf2d4d0cb259e62942912d8ee1660261025694a182e2689dbe3c', 16),
                    gmp_init('0x16f2ecd7ecf7a93516353ca86ccb3490ff512db51d0d038b1828a38f30fa6b0d99933a3324e21800fcb2324af0c2606809ac86b77217d273130efe1469c5ac043e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa54cc9cfcf77179455ae58965ead605e32bd883b1277769a23e230ea493153d4af815b6549a4b4e41e57484ac45dfa717d3aaded48125fd529f192b0164b374ff4', 16),
                    gmp_init('0x9004fc6adc182ac606d9f2bba9ad53e05225075d36d75fda301ea80148166a36786b2593277fca076d9a4075adaea005bd79c512a52565e3d75cfe2ea43f30741f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1be8f91d296dd500e47e2aa9fcc42bb371ca897d633525ea4b765e0d06d583ad60d4d2b46fe6bce4a502f675f378d4d1678b3284a114637a686bb3cb4daaa283027', 16),
                    gmp_init('0x19c27984274a035f2ef8cc56dcfcc584a15db660935f3fe712ad47bc0102bef1ff9a1f87abecc9582d380c1361be5a3f8a7116c957ca63638dfc43c6cffaf7965f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e96a576dda0043adba4a18c14758a3ef4dd8bf44c96761627f13b35d0e9d08ffb06c0e9aaa3add3377f58cf21b2b29ed9b87e1d013654974a803986670f0ccb51', 16),
                    gmp_init('0x1852aea9dd1ef78ceac0ed46510e8ffd32c9fa5a19d061c235cc598a2de14258d98dde053f4a962b707aadd863e9bdaba1979f15ef14c5248292bde24f8632d95a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe69a6cccd5931e5346455c3790b31def2f3b22a38a9cc9532f2963cd698f7b2113f4206737ef32791665fdae9309b7bca07e561b23569eba9b2bb9d8b5b329f7d3', 16),
                    gmp_init('0x10948308dff3d3b1e4ae1ce6a188e97c4b875fc677e0b2260d2072d38f9fee0577d6a53c5d43e512f79f28ca98c7dcbbfa6c6bbffefdac58cfbe9860742981c49a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4f64a3e270dd1056a8c2c3d6ee01e25f600f6cfc7001509b43eecc9b5057ce5337896e7ac15d39a80698b397ebf6e877e9868052fdc520fb4d389b38cd19f496e', 16),
                    gmp_init('0x18542ef43d9ae520746f3eb185fcecd5cdca802f2bfcd02116593542a5630ad91a493c36f752569de67849cb6e449d24c74b68aa03741e87acc192245f8ba1bde97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60054f8abb44630f00b88d5837f1b051bc699005e7b05e1375a576029d38cec7a9e7b00e11daa4c46db2cf5c3bd20c2507d237b4077ebe4792cc39400a70a75215', 16),
                    gmp_init('0x1a8323f67fac0c57e87f5f7283836f2217dfd99567f76b5e7363056e13e161a1181a11ac221fc5b3d0d9551cebdb11c9b9cfdd266cae7bdb56e53a8d17da2bb0c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d07c8cbcc9e338ce68472b1ae2f87cfdf4f4514da5ad5605e4540775caf5eda1fcf831e691e5cd6d62d5b0ff8c512faf225c826c4e1505d762838cdbfeb5a169a', 16),
                    gmp_init('0x13c3cb3927b578955080453dc44fd74231eecc903afb8ef62b337392a301b77f4e23216d6af86abe6f4ced8fb110586ebbce966635fe37cff51096ab718d9243216', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3eee31edf8b59cee8e6570af356b5dcc8b8808519a01a2a08a0f922e78d12b0758f1f047ef209d0e2d97636d0124c350e74eecaeca8044f021a1b0bbc3e372d394', 16),
                    gmp_init('0x1488d4b7142ed8bf5fc6f1625cc9841059ad6217d62abf8e3ef934cf55f75fa8b04be2d94786c1516283b8f9b17271e5025a6feffa02d58b7e4d467ff1c9bcdfe17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7ce029be81cd71fb51374c3a28fd164c9735c5b6dd533b32179dd3128317bbe5e247c8a49f08b8b6cbe339e28d50ff2503d9c29e352dc57c56bab39543f106aba', 16),
                    gmp_init('0x124e03cdac46558c1bbd825f5ceca6d0545160276ee1aff3c3ac37d11213fa3b10cd7e7ca02a90dec0d210fbd7bb2f9d0b20dfd84e22f233cfb0657b663c6aac6a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9338d5aacdc3b458014b8121edfbf2093498ce242c87d4707f6425c28ca0859599c8ef51649ebcc4a15eb91427e77916b0bad1bd28a0e4552d238e451a7c101bf', 16),
                    gmp_init('0xe28d912da6c1cc7f632db08f6444678f76e261eedf83288f6b9aa5f7ec6088b030cf1cb5a7891bdf876ec3be3475e8baea6d305ab15a7d1548886a911f6177b4ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64e0cdecc5964e0aeb06bd510c8ab4da2c1abbecd8f6b2c5c8ea1dd7e6303341047de1837e5f0181867754c4c88519d1d2ed296112aefad3f0644bc15b320de71', 16),
                    gmp_init('0x1093218bf48aa7e7d380c3941313a25984860b4541686a4c6030f2789b0b4001e20391b96215e272577af7deb99a718a3da28ff66790e9911a37c3b12481ffdb678', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9d5d124ba63826b8e93361f0867d11d3ebc1559f4cb650c44a2674710505a1be5d56358e1c698706f53f7d377b3078789b5e0e27873b8d05db03563923e5a6e61', 16),
                    gmp_init('0x1c4844cf275c3ab4b91b8b782b3c6b52616a4b1dc8074121d804f728e6f8004beaa5eb0490498a1fae7b1365ff2d8bab8cb80d125b3cf992a03943eb3571403f021', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a5643bc3ac7b6d3dd9b693e3ca6c73e1561433976a8a2c05d6b06e6039604ee9c80c30a82bbc0455f3f2fb997c331343c6167be166fbe8832255d6d1bf8682934', 16),
                    gmp_init('0x174949b363a2b03d91d8d4de910b3422e424494e0177763f7b49f4598920db303d4f0ccc6594e884acd14382bdc7e8044fb95f7e68981452d4cf362db1d072fc054', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67d4a6af3342541b83f22c6930511855afdd29de25b8128778345d3cc5564a208423ff83b852f21415f46a12c4bd0b060753d19d1790c5ee5bd5f2127b4413c3c8', 16),
                    gmp_init('0xa484a30cec1062509a83ebfc9324bd0efb0b6a333ea29d48ca7b5378f61b92954cd458b57146a21bf4cc57395df6333e800d042fa8c59741e73ff378abc334139f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x141ed2cf79bf8216f89b4f0da3aa136c5a42b9bbca1fb2c207f56dc0d086168f13d6d44c225b35268c23936ce2dcbd31552a646ecedd54e0f6ad8720c8ae96a67e2', 16),
                    gmp_init('0xa82be1b92f829e8d3c7b8a498329746a506fc12bd10fead808e688ed5ee481cdd0dcd5faebde463e0999c3c50c37333b3e341b0f22ebe7eed01eb0707d7ec6bcea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c9b9f52a609948da76f734c2f480d8c0e32b0301e0fc73761c240963ea07a9f9b2d9ec427a39f3c3d3c49e75cc5fde2724cef22b18f18eab4a27b472fa3d0e9678', 16),
                    gmp_init('0xd0ea30d6b2721a6d98f6ff17f5544deba88ecffb683144c8a8643e77418ac141ceb1c8cdfb650fc5bdfed0cb7aa1c670104faf1315c936d7da6ef525e6fe70af9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83e1f16bacbb524ee752b6170a31fd92a2fc86297f9ec985925bb641792d6a8c9b28ac1ca9cc1b1c85e33dc6b11a9b0535c833c94fe1271e7f306ad278aa3c1ae', 16),
                    gmp_init('0x10566d7986c94275c0fcc0425357264d61018c54cefbdc674e2697073f906f1e0a1ddc3f6d124c19d99576f222b7fb13310cd6bfba06e589ba385ae18ca70a320c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37780bc5a93effe23bf7743da0b0b6c914dc376c92833e336a615677f03d2b97565fe40adc63e55fb7453bc7931b067a8748a88079918b33d5476395029a2936b0', 16),
                    gmp_init('0x11cd1a5af1833eac3e97285c2d418e0d6b14d3855d3465a7151b1ac3d7b0ec8959a491f250816039d4f022757865ed17864da9c55a8eb2eb173e9c333804a1a9456', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf9f881da52239a2818e7bad2e84af19c5450cb1d42c6eff70cf54c688320bf3872eac2ed8b142fe92299d8e423d2d872371073e65468b3892df54380d170f4332', 16),
                    gmp_init('0x1d3bdeac1668529eb5a495a7346a5ded43a97219410a4375c0f39517320c10d2e84a267039fa753ee2f0ad0c42a6ddeae2342b40dfd4cfc216886063c1efa1ec6d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10b4a28e8c39f2cf304fe8c28795cddf33b46807784287e9914c4f7e5a3c44fe251588831e2833cd551256a00f31c56aae7b2fab9a3e54bdaa4ff52672938d280d3', 16),
                    gmp_init('0xa32e9249a24d7965c213c36a190a9481b29f747922c6a746ed0a0f63321574f9828baf3ccbdbf40e6001a7d640cebd69244be628c3be1589264307199dcb19d3bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3098ddc7da7042c7d078673c50b54fd0a0c37a4f4752d7163f618b9693d4e89ac5368ca8349bbe4382014ee9182b0cd791872cb5de5c7b14ac309a2b2aa87a6b1e', 16),
                    gmp_init('0x40ab1a48e99c9558afdf5551bc7cda8ae15a6fff84969c2dd2a77a590e51b35f483ea175591a7675e1d63406235eb13b454d92b068e779b5f270882a787c37ab34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31ff32c2a16fe7d8821f016633a4144a345a6e49f06e0344d795ff7eafc76f7c7ee7e4ca9750064a5019f93da02ae5d424b708de53dd15f09d80877bfe331dd8a7', 16),
                    gmp_init('0x58465f703946520913f565899fbc584078cd7200850d2e4994fb7ba091da20f0270e2bef03fde67f9f7685641c109f091b33049c001751ad84c8c7b1826df27677', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c746cd756eb3e29b077ebc6f182511b2375a6ba6035dfa96f0bfb0db685d0ccedbe0ad407729a047ea5638b2a7cf47bf22d5d3bb8e01ca76f40cb012ce7c632e11', 16),
                    gmp_init('0x1bdd662db4291c2cdafe27ae171134a3bce8255990897445158d372686b722b95ab905afff1715d8d75161ea7e8f2f0af2fb17a95b5a3d4a3bdc71d93c6d7d6f75d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a80fbba3153387cee173b9e5148bc86e5b45e0d0bfe9c8c5f3ee6d50e587f47c14eddb3c31a7a3d44cef1ca1fb39317524babaa4dfc994caf4b8a962a19989359', 16),
                    gmp_init('0x128ec1973b20f26f232331b1424b13676210d31931d414cec87bd94193e794c10a582ade6239ceb2aaf048df3caeaf7f954e097c938e65c11010131a1c4b031978a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea61ccfe567cc23dd5f3c449385d72a89f8dc2e442f5a6c58c15dc87dfaf55e444ea2415f20030322d0c61c4badf9143cb44359c0b969fc79fbdd62240186ca485', 16),
                    gmp_init('0x18858e2225c822aeb7384345986c296423355bdd6d850875fa8e583c03da208ad24ce456b1b1157cffe678f0740d1b714a148083469c0eed8b286597a8ddc2a9048', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1300403df2b1a81558ba87f0ecc047ebd57f26b2b9c97d88113f7fb6f4c20aed7383460a7df29a07e234811f186986b62bd273e0e12d6fabfa0b439f594f839375e', 16),
                    gmp_init('0x104f84bcb955174ffbe2f328371d13ba6257e6830e9bf34ee1d33dd2db3c2f0eaa972cc87937553260e7924b9994488565d14095a79440f830e8071597f66ce34b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0d8906ed73ff6f74ac97d8a86f78df67a2160d5316dbf92360e873417d800a1016fe68652a3279f48caa4268f52311ecda550ebee33832c64cfe610fea5fc15e2', 16),
                    gmp_init('0x951d056e10162cc76ddb80f81ea72f5903d3e6c66582e048970a4cc51565ff4490ec0c26ff07b13a400fd83e66eec8781874272450579f2fb1f9188f3d1fc70059', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b909f19f30aac1add129f8dffccece91e770e4a0ade1d7a72e46f3889557915d2c0360956988d078e87a26e47abd351de850080e86d56428402d2a5e43e7660fd', 16),
                    gmp_init('0xc539593cd917c3aef2967798cb55daa761f12a4276790aaa5d92d463ef26e491a2e750f23e5087dd8306e93c200ccdceeb2071aecf4db3959190916401e8d62ba5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x964254fae7e4a99b7c197320d1ecda3c0e051ffa1045314f922af5ed1f50efe0722c00c5d0d0848d3e90c6070ce4ee9954a22752f603e43cad6a43422011ba52b7', 16),
                    gmp_init('0x1b2a29e868e07cdce9b864f8c488583dcfa8d43450f0d1ca607c5a3b3bc73a6a66585a96dd061d4ea028af87d21f6493da8cb74eecfdc0482b6c5c0a4a871b0eecc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe2ec31ea91b285289a0dbfd177b76f6b2b86dfc2d5a4c15ddceb102dd9fe02d86e1427eb18cb9d6301c993a489609641a9e39552a9a675acb4519a595a5c6f42b0', 16),
                    gmp_init('0x10c9759e0e64866c9d828d3e23b7978077c52d79f51793f00e539f9b1abbd0d72ef605b28069e56e4551b7e446d675589f1d272162cc8124af346ed4b2ab85445eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1238bf2aa0fd601d59baa64507dbeae03e4ef4280ba021ca55828a61b4ff5514a5d8bf2f700d1ffb0684ee85c60884a20643a3411a680e7f858bb292bf5f98c20be', 16),
                    gmp_init('0x1d59b2ec5cb6bcb8393f6e71432e684e7c1fa544159a0dc17b888237da980d564cf21a4a04654338e37858dd91faa4b01039e9dcccd55fddd4f61ca18a2ee308bf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbbc8aae5b9a45ddb2a8830d23e6f4ed2048570b7ff7e50193d01e2d4b4908838195595e429077db96bd895a1c5ee72269048abcac740f788223c4d719a31b8bb9', 16),
                    gmp_init('0x19b5b8c50a11e6ba9ef5f0b4e9f77664d4746f6172c3bbf67576a0bbba69520d99af332ed105bf085b7255e637c69aefa63d3f0cf5026c1d870527e8ff8970f294e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b460ed2c6ff0f2b9f8fc19d87c18a077870b5eb472530c0c9d5df54e420f52a951b3010e67fe8a9df4931dcab50671f5a48e2314e439f3a110ee02879ba3ea1a16', 16),
                    gmp_init('0x1db044cfa9425c261e04cf3580afeb346d2195f5a81b8d8e3618f51283ccdb11750328688dd25c03d48cb4a9876f30f92b1d6903d7610fd38916bed0b7e2c3d7f45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x116d2e4ec67a36e4207710081a899486cd40c081ef2d4d60dab7a0f8df8504b47b38f043e35c1319e2ee4543a36e39801a0daa51ea937b9c3434143662dbe2d233d', 16),
                    gmp_init('0xe2dba8099b3b1f3412c24e564e28a8e768ac978aca2db3b8750e086c9385868504e511cb4ebff6490d6c4b2bad496b19bae01c071f037f606755c7a9fe07d56e26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ab6216ba84ea9a43f25b78daea71ddae3ac0da1dbebec656ff88d79bc1c5ce4148077cb0a94a2082f1f1ef1477999719c7304f1a22bf61435406845f761c46e0a4', 16),
                    gmp_init('0x18c7fdf363de32d7d9349e5030ac70e9ef9149df0698880b33a8feb7e2e009cb72a81f3fbd4612b71f0a80d0eeedf4f49dc857aa6bd5f4f2d7adead308ebea49092', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x104a80a5ef4e427ea44f36d16c245cb06a019f1d9ba5aec5994ace383ab0ab83b29a03fbcbc0c97380610db29c4c631bea3bd5f89c0fe56a51adc8418b0430aee87', 16),
                    gmp_init('0xd5ca0dc963ad81e019d108d7f75c27949b4b36e529237657ced0bdf26d3cc536ff0564c86be85ab91fb4d58d35e1a157debc0d9d752edce1058c77115e67c4bd41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e6565a0b57174e7765c6e5794fdf5217448193fe379c704e789f72316ac10a73196374f4b9a4a75f59adbaf13ca3a78e89ff0d8f1843299aa8aece33c6467674', 16),
                    gmp_init('0xe8452cd4f4e63ebf74896b102acd71001445222e3bb52edcd2d8a4f3af708e35b7f29fe9740cd3bd2dfd549cc3ff94ffc75ec7dfd35b281d20509a5be95b7a3aac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bb2a4aecbbe3849238c1e50449abd904d1829610f4f4c663ab911a8c8941f351a337ce2e5b5cd27da351db3bf11cc09b63a242406ac7df59eb89c242a654f4e39', 16),
                    gmp_init('0x8ef209613aeaf6e53bf21a0cf6dbad059aa19b5f862d627aa029dcb8a9752ffbd4d8926ff9ae4c9f697ee2ae32c4080be3946f7c9f03d1b89920f4b1d2485a76b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1df057949157ad06ac573d37b2b1e537f73b0467ec242fece7df7dbf5ad2d0681017b9d1badf34336a0c97e6b3ef7a49e474d660aa326a7685c3c4abf3fd97e4127', 16),
                    gmp_init('0x1a4a2193c9c5a0daa17e1c5975e5e6428ebfbe877fa7d5d27b394cc6cabbc5ffc23ed5da14457db8ac9c01f32aa931a36ec972197753cf6cfdde8ecdcf643f6a0ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c209fbd320b2969ee878a61f5c43d60779fd2dc29c9583135459a7419071c8569859026d57e1c9bf0d8c985426d2166c0c67b6c09795cb3d1bdb55c6c2986f7001', 16),
                    gmp_init('0x1bb1be3d45ba37cb8f52f36082f35fd0670d0c857cd21b851194f4495125fc232c0e91692386e887ebfd2cc5546092dcfa676252a2b15de5fd1ba4292559295996c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x131dd46b8bbaf0baa094f6d8307a22d64d977375b0ae1c3bb003191467eb36cc72efb7dbe480c8f7a123a7d9941430adf54292afafd4e0178cdcb0dbd8c81e4d356', 16),
                    gmp_init('0x13a5af00bf1a29753448cc36b9430fc0e21b3d315cfaf0b90f9f84f6c1a3048cdaff113fd5e9044d50ec6bc5ecc762c8082ab944686094e6e2a07b578c9007dcc0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x186ac5c8a0b0c2f309a79022d566b48a2ee8f337130884e4863dbe2ba7e5bd2404750017de528a32d2cfe3a57e0acdc7d5bb3e0a69fd00c292064900ab5e105ffc2', 16),
                    gmp_init('0x14b394174bf023bb65456f3f8f0d04fbc4175b5620ad56fd7bba76f2afccce637ebe88ee61e438c52a3de69bb18384d547150877d98c9fe9744aab8b2cf84bfc6c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a426ab853b89eddc0b8ecdc4d8411fad2a29c83e84c243d7d2a34ef023c0cd980fae856df59b2a85358d72ed49cd8e1509c08d0ff9984aa5b53a67b300e334c8ab', 16),
                    gmp_init('0x1e87da5b6c70ec91aeb9c80233ffa5e25d1729a63cc470a84c01834b3ee7d5b25694ec4a15c4e7bf3a3953850e464c7dc2f62adcbe78ddeacd43a060b7bbb5b50a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3d136e09e5bf5f95fb10aae1e4f850b1629a93e2bd01afeac7265e0a25894ffdd5063c292425bc484de92a1c90881ff558e15166ba819de2a2edc22f9503dc30c', 16),
                    gmp_init('0x119f9c71c781eb4063abf3d962eed2593a5d7d107b972b153a9cbc9a13169ff06f9de53daa4755f2616bba8b2a4e3b091d0e3a653c6c8872fbeb339031cb292040a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe25ad4c5cc472023e14fea6f39bb6b47774897091de1ef3fa75308793c02073e7f2b04984e433c527b98c6ac3d0bf0435c5383b379b3f0b8c1c6999604bdf87653', 16),
                    gmp_init('0x2f8c565f7b74f01418b158e06317ab479e8d47a70cad6f4e8d8517c72e51fc9949b8e644b58538bd2132f61c5ccfac5e4c5504d5218c0bac0e0db5541ae6cd3ba8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c38ad3a5b346d5e8c90093f58bd91f67b5f65d174caf39b2384bf5f19b02bc574e4daf6b4ee63c78404ecb999de6c5537caaf743f3153208164dc47d473ad158a6', 16),
                    gmp_init('0x12d894514811bb02b47ce2fd53b7cb324722a23f5009ec3a0285f6a4f56da00dc5b831def3aa5ff856b7a73a7371776161e4da02aaa3f1193a3bb99652c22171340', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7ab77154cccc216e566b59ff49fd870f953bccb4bda96c8c4a6309219bf231a459515ec4c0a8a6321454750932b4c7a52f9e2a13b4634c73706642448d62d841e', 16),
                    gmp_init('0x1b54e6c8f5e3b2e94982916c12afec8b33d68816f470556fd68fa3974530492a75c839c1880d39bfb5dffe294f57ac5e18811521f6d7f075e4ade7496443c6c8df2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1685832172a9c4acec860e617587ccbafcb5b5318ee1b57f5b07fa6a69cc4d8b1cfb1ea537be7ad90be1e303d715472bf172af884ee092e1835c75e1cf3dbfed7cc', 16),
                    gmp_init('0x1411db5cff3b26bd16bea9771e091b667f361f01f2fdc243178405a03bb6c86e89888d40dff0860d712f74c13fe52ff8f2c9181194ad464a55736bae29b9f2f8613', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x146ff3eee03469af867ba76bd74c449f6f3c1cc0ad3adc784c2807ac99c1f0f3046f8a3a52966ded77fef69b99b2a97ba6e543970f9aacbb7fc13056a38800efd3', 16),
                    gmp_init('0x1c152b56a73e85fc5712ec230998d61e3a96fd9982a9ed1ccd019841095fa5e01fc004f2f0261140902fa3ccf636a04bb53e96e451544c1542c1777dcbf27b59d55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fefbfcae7a9a12dc71568b05b9b88d323de0057ed6c87c35fec6f45f75c7cf836d1a44a0e218d1d16eae61b15e9040c6eaa626f80c44eface52366b92a98d9df56', 16),
                    gmp_init('0xfa83603cdd637c60ada55122ea67d610db23190ead8ed269b92d3b3fd042846e4f9028eb89a867f628eddd4102c5ea1e5dc75d539ba54f349aec63ad133dcc4d25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bc37a525bed54cb3df31ff282e438f4b806fe5a8d6ad529bf85312c7054a0b90869bf0e8930e549d6f01df19d8341a7c8f9fed60ee1795ede44deed00df4ec58a1', 16),
                    gmp_init('0x724d4a241cb8af57d51692f2a0d84eba3097feeaaee61ea5a37c007a9762afd74135716c25205289bb8c226e6e7f689ef016d1637c04756ee21e94453c80219c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11263eb6a9216a12d1d6448e76a3a0976dc2f39ee9915b9b111739701c3af5f625d72f548d4459499ae7257f0600116166ca94151e8c8b15473f3a17d4787129c', 16),
                    gmp_init('0x1e5b40f60c5d58762de4b190e93904704952c9ad563891128df59bbe81bcf1dd575bb6a11b8482ad6bc3772c8f553b7bff8e4ee3dd9bb9a9ff5bc6e933bd3c200a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9130c5400cec466750c3cfed16bb8dd5c6d8116f717eab947fddc8383ce9831e400d246449c9aea0c7457755803e288f03a71a562090d955ff443fe2367f94f4b', 16),
                    gmp_init('0x120528fe73fd9587749adb7d61addcd5b86d7c9da685f9b206a272257e3c0e979d286afcef61322950097e61f4fcb09dd72ca058d9eff83797a9342d0e03dd0af80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f88b5a0a9e51e7105de0db4fe2db1a8e364bab62eee154d68e8d407fcfb71944fd57477d25fae6014dc868143978ca65257b6a7bf4e73955658c814a121edc8a1c', 16),
                    gmp_init('0x8fd1a09b04920c26c195cd0cbe63dc0bc7b348535c499f8f5eb32061c81a285d168fa02f243f4bc342bc73dcf2580249c3d7100fde6fa16f5c3c6ba57aeb49cea8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1201b1562e5e03620bd071f716a612667ad3ac9d6b500a3469e34467c4e6a8c7a68ffebc44762957195192695f9f3a0d906e609d01d1a033488373562d90f164d7d', 16),
                    gmp_init('0x1bda7571ba1508beb29499ff35a1ed5d09ad9c758f57823b99ae4174ba93ced8d89eb01543a5254d3626f97a60352856821563cca92b8835adc23913e9bc4f699a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7526506027e30d5f5d2145dc0f6604bcbc200f60a17976e4e57e5255d83ff38cd6ff00eda9ed6199dea3f98027ab4214ba9a8d50e85a3c3b57ab913473c18c21fc', 16),
                    gmp_init('0x1953b98d8d9c8b5752d016b2c4e09af347ff32c52daa91a9c2b0f15f2a1fc02474ba2e53c56b77790505fae19411ab021b90636d007d332125a74c1c25830bf2169', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d882307737ee29731d2c495037fddecf8699acd64d298e891279181b28bde23046a9aa5c122dbe9ff1db395d967c37e71473e1a5fd0a6950621f00686182d44a5', 16),
                    gmp_init('0x1c668b9acbe4f4b60276b78529e166ac32d7f2792cff8b43041375676ba3dc7658c9d4a85072624436027f6d5c275b3e30d44fd195a08df0779e9a9d713e4594ca6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eb1725267a8b7e4431043c868d1216b55b727adb3f179a01cb1cd56f642fef4d802f007c815033544510ef9c293f39346cfca53d1fdf7201d6bfd693ce14dca7e0', 16),
                    gmp_init('0x104f2df873dc1eba9cc66575d7d57fe33b504a254658cea469d6dd0eaa7719b6e5eec1262b6c613918d9d4413db0cd006c846184e5ad56540e608f27860c03b7717', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1169cda9c5345b33ed310c9b54aff85222c8c3a88940b8552c9cfd7cc54e973be5e7e78becea37782f75b2066519311a567c24a6c3ed6ff2b002f122f94e9abc410', 16),
                    gmp_init('0x17eafa164f37af52e24be868e647d9d537cf8e411bb75fd7a9147fbc77906d4d2d9ec4d6238bb9c14797fd8e40bbc68e72a935294a0380f2a0df0e67bafe7434083', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13142354fe984755f2c0cf86a23c5c070c314dd6665c4b165cff4b12ec9249cef0a413edd73dd0687ca2206277add4810efa463ffe7d6a9d2c1620aff9a81128a65', 16),
                    gmp_init('0x8855805723fd073355e8799eabfc3bda3f59265673aad4911b07f2f8fe16721332ceb1ca37f3900776ebae8ae41c82e8e52656911d43f263436f4741df2e9c881e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ede0d13dcddd3e430d9cc06266fa6743399e5ec39e4497814204c9ddc8ff0eb748692b3ff064b5e637aa6220de207e59731d88d30ee3c6f5a62b14935a7ce70edf', 16),
                    gmp_init('0x1ba47ca1a5dcc02d455e100468a7474dc1e2c330233f7a0ead674176564c1a6866df89a5050a7521de1228875507d72efc473e4d3549da70f374604722f38bd4ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x616f47f324a9a360a64bd2ba9c89113bd4e4cc285cd9822ec3052ce65c8458c050049c2a54cac6211dba911d53a81eeb99957461a7cbe47d79b40005d7c3e500', 16),
                    gmp_init('0x9c28b9018e1c0e00d7363fc08115c998cd7c59c56f4b6dd8472176630e5a29fe140d7c5382da981f49c9eb3a68ffef855af7808da5eeb3af75b309b38536bb95e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1133b94b3ebf41158f16147d39bfe11c289860263daeead8f82af97df129ed107a2f34cdc49b9513257576c89c847e189340bb42c882f02748ec9d22d532c51ab39', 16),
                    gmp_init('0x16af5d4e58ee9b3c11d863fc87abb498d81f0c76bb60eac5025567a1293f695397933dd5df87893855db4a79290daf5817f9a54f1a2f71f1726c4c84d7cf747d887', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3402c3d160975a5f81364da0aa7e8593e8f79051b18470a43555cdfe89dcdf7815d5c7882ea417af587bbdde57934ef9f02aba2dfc62f9f1e9f02ebe9596f52213', 16),
                    gmp_init('0xcab1f1a25fb5a9d0396ed5fd3592ae7f9bfb29c00bb5457b074abade40ba683f5696cf84cf7b4079be2d54d2668c4b4a86085a8cd2e645e99159493183ccd37734', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d3f3b79464c3f2b46edf44215499058585736c2cd809c31ad559e84fee16844fe7cfb04aabc2ccd4765bc1660c792232f4d185af25a89347886503932f0c7723e0', 16),
                    gmp_init('0x1783d28e8a7d570bcef2879c7855c340a298f9f32d2f1fc8480f114efb4fa4412cb76465104d4e606b97934aed1fcf3e876be9d0bfa17d8eee1282464c7089e2e4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x346d1652bf21528a266a707650837638c3f2364e614bcb66452b83e30c73cc7f48fb695c26b78ebf7fb056d998600d299a4a1091a39e7310298acd524bd326ffb6', 16),
                    gmp_init('0x17c9f8fcb728cbe95562ca719dd29cac6aa5d2268fb4fe07645dfcd6cbd16f35cbc69856301af46d5355f7c25651179264cfd3003918627a2e4353dc81f6d2b8fc3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b6d0ba7943eb76c9be08c0bb007beace14d99606376b9ec1b895c92e1a77c59c03280a43a009b895b3dbce851a5b79d11c01afa6ae12780ded20084293eea8d666', 16),
                    gmp_init('0x17c3ec31f629df3548d1892f1b7d310f9ae9a3fff34b0a1e5cf25d3413fe1708393dc5b6591aa5301e5020efe82cbeedfacfd25ffcb7211ba73a14d2a3f15a51540', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13fa16c6f238bd9c8a3fce48fd49b0fac303a866f58bd24735eb47bc05506cb61016737374d87c876af04ff66a7a0e6a5aeee6879fd01db212c8a5910c8b4a6d22f', 16),
                    gmp_init('0x1ed6833f30af96826581e648cd4f15ae27240310c193c68c927c7d2b3926add3db83c72fee9bc5c6e1ec738bb8a43a1ffbe8882ccb92974b82a850462f4fcebf61b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc7b906e4d282fc133c47fe7a581fe38553044ab0516ae64f6e2f6e1c1dfca35c903691ba14541b6a4fc156e3c2afe31be9de3410b8632998bd843386b1725f24', 16),
                    gmp_init('0xa5d48df1c8a4595173c99b41d886ad3b4a66a2e87b24aec4da7c74cc557eaf7007c4eeb27e6f65614076abb98e001b441190f2502c44536cbf78ded023b640b3f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f7f90302fc32b5f9ac48b9250455be02507132084a29c6cfdaf19609fc9122303f63f2bba3470b849ffc73749805495967901ae504f57340c85f7ee8db4c31532', 16),
                    gmp_init('0x8c9bd30b6ec97eafae9877ac66757728dc36ed3535f3fe2ec9be80a73ccb8ddfaad96cf843e6c074315416c35e34b4d9d86994050329a9b14ce29725d5bd5630d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5702f8d3638956f46647673d31711f4bdc57eab339665bb4551120005d64225c0c73959af67402a61a53b98f81912453a9d0b1cfdfb9b36908648cf6b70f6a4d6', 16),
                    gmp_init('0x10229254799ba1e6902b418566127b80786b6f6c068b639482303091ba5899f72448957d45e5501be59ab9165237feb95f5587964c4413587f195101259e05149cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x182811368244fc0153f9a573890a372456f57ca395fff27537bc854839051aa4dab82d67cc7d29a424ee0a41d797186b84b8ac3f18155f51f125d663928816f67e', 16),
                    gmp_init('0x1912bd15cc1cffb752273486e8525953c8fef6a357f4c5a7303a3db194fc466c099c36542fd00c1e1020dc79ff3fe0ce2ed8862edbdd0ba814d2b7ed9d7b5034049', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1764447eafde2cfcb35677654c5e4b9d735e9a8b69d59abce9be04e3e552c3cc6b8c9293ef107d8768ac1f40a25faec4bd9421b1aea51bdec8442a21569c8f0a14c', 16),
                    gmp_init('0x13743a8663777861c7e390c596f3139341e1ccf24db2cad79144f321c1251abc8653fd6b73d8c5f2a006099b1c2717a1199b3fcb38d2005c55ca36b5ad0c1a8e925', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99821a7009e7a9abc35dea15f80ddb3d5046a412260375237e085b97508cce071064407857c38a24552072232019af1b4d0e4d8677d5e8caf99f3783ec4583594b', 16),
                    gmp_init('0x82e1f3c54ea0b9919959652dbf7b02e29e58b46c5a475c5e6333558f6d8141c4b8881162ee706b414401fdfea6c88ac5d1aa95b0dde92c8d304cc63aab40071a8f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x116f0e55a366d0b967df1fa56ac48ceb12e1f9dfe514a9a1ce9b4b4a66527abff8842c9778702adc827360263f1a7f6af6e2753b15c2656702d541bdd795338e99e', 16),
                    gmp_init('0x196621ace506f1503e13b73f059a1f0ae7d4152fd13dae27044427ff5f44209f1e3db193bafbf4b87e2528466231911836f69c8bc4622ee33547ed35bc349642f41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1df550ac763217c0ea7a32fff27aeade02952172155525f00541aa4c9fd9129c3b2ad4cc87be0591e3f8475ee47391b67b2aaddd75d326df942ceb3d6d8ecc914fa', 16),
                    gmp_init('0x17202dfd8b537f9ed903c573681c1697cc015e78db4b7d8216d75948e7725833548b22b3beb0f9c9ad67b059d1e1e38ba3882d0b17e8d5ad5ba3d4bbc04df12e80d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x119f057cae66960bcd875f43fb9685a3923872c5b20813a17facfefb1b130e7b55173e03488d491416e52de6bdddcd8527bb04221efd0b73c7772c5cf1e83625a05', 16),
                    gmp_init('0x181e9446200452d1a5e8f8fcd5a53a88830a9895f88b330078607fc2e0e986271e7b2d7daee4c2984a8f0b5d59b04476ed947d5e5da3afdb96c84e8d67954becb7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f6b7d9a50b6580d760ecfe7e631ac78ebc19a373a83ba587a2784efed9819a2d915b02839ddcab3be22d5dcb190129a2a3dc96e495694769feb05b269a9e110fa', 16),
                    gmp_init('0xfcfcda7bdada7ef5ff4f5eb8c6298d033bf857d1a55e1c74a92aeb7d0c6e7c15faee6224fd8c68507ea4956ecdb968b2e92bcd70c671dec68920cf011e22e1f23e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24b1c49334cfad65d8d1df9d2e320323a065cee9a96a3099b8a7098d962b3fe1c0c516d0131a37df285da336e0d39d6149d48233b602995c9bf21724305ce20879', 16),
                    gmp_init('0xd0d88db243481da37296c039266695b74aa9839154913458824655fd6414a185ddef96a255ddc4a4ca0f0497f50f7c4ab613861a7c0e9ce9093bbc258e902dd9f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71d4ba253e0ecf00fe8c6dc95f16286e1842cfd6220859b18fbb3b294bc501e0aa3e88e23dc76bb8d38c58ea01f1cf4a46773afddfa062a50eabe2205b68e52960', 16),
                    gmp_init('0x1661a47520a05cb48a44b38a590ecca13dd92bd21e5cf2b764ba164c4cb1c947619b774f894604dbb78ffb5ea24c80bc4de4f981608b3ad699ec3970825eb3340ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17db70b148ef5e87710b84b6e0b46d43496e51e2f3a90c409cdf1daecf88d0a8b1df7d22a394d4e71e153d13f277e4ab1878b43c7defdcaffd885e007a105e31f06', 16),
                    gmp_init('0x1aaf0ad4b5191900ce73a3a685138449d3404ef216b207c79acf8c4fc0f56827ba3aada82e4f49d2088d2fa00bb7bac30ee6c5fa06295da5ef1fdcd92b7e45e1097', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x104259cec2fb2f1c60918526b28ff975e3d0946f9d45d095b7cfa16b295feb5416d4afd876806222b9089d3382eaafb10a4ec47cb5cbbf67a41b4c52f11f3d7286a', 16),
                    gmp_init('0x1d62fb789d77977fa95c17af6df73b3feb44acdccdf2578e2fb7104aee9cf390b9c8a7a6fb6483ba43d1d0e02c41bf9d6c4c3e4c6f71c38e6f5545642a062e36127', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fe3fc3791936e1f8a8bc71163ba4dc5972fe4c45edb6b91b060be827f32d048d9edc457471f70551f88217b170156582fe5b79eec037dc92fa14396d3e9cd61e9', 16),
                    gmp_init('0x140c98d8fe73195f8dd434f50e97e427cc2e244da8483db80d5e83d95d3ad202228a9d400ab7c157a99b8d510da10066dcc93f22717334f2678dfc5ec30139f399', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48a23e3c857b478bc7da1c6f26ce561b4a61f5810a32803c8ef0ae9654119fed8998cf3891d6d682ed81240625273439636b8fb94f57f9d8b0bf53d7cafcc691da', 16),
                    gmp_init('0x27869751f81de1b6da1040ea015837cafe13cdb1b5f2f2478776496e196b09aa3ecccf4fd96ecaae0b289f06c4764bfcb538d3928e003d010b455e708f3530d96f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1485ab2ed5483dbb9fe58d84ae60722de06a7759b8e5cee0611e399dfb43b760ac1850e4b736f9affb66f4a9a0bb735cb79baf2ec126ca614d7573811f6ad9570b9', 16),
                    gmp_init('0x1816e6aa60cd9f50bea83b4d25b7b0cd708776bcd3284897d4b5f191a312deed12616a18d954f6934d7ee55b08dc3c91b77bbd0130f0ad7bd9098c24006df14f9e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdbbea1116a332e64fafb2db59c206822e3d2d16af93bcba153e78de9d32bcfee65c6c07b24903c2d8a0fae432057eb68fc14c123a43be84df34383bb055bef397', 16),
                    gmp_init('0xee32650569f539662a9248e09861f37219c09a32e36777d69d609432c3bcc6dc6ae1675545a4b86668f3bf3ba82c5370c42b1d0a044e4f3d3320075ed100c6ea12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196bfd67f2971c94884cce35f170c44bb8b55c049ac212e51d1ef96b040030e41496ed0097ad24a796ed842c960d69237a8c69d44ec0e8b47dae82b6739d225d7c4', 16),
                    gmp_init('0x1444d319121639f0a7cc709bc5da36c5100e7565e2ce11870a17597fd7decc0ca46d5d31cf295c66174b4d9365aa39fb2b93330ff77a8144225f02b65df4755c1c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84bdbe0818e2b351c39f9bb723106b9a4d55eec88c3e07ead92d6e1617702dce8c83c90f107c7c5033974bdb02569d801301ceafba48e50c58aeb813e3c79e8798', 16),
                    gmp_init('0x5c4780b6a3d59aee6d205cf0c2a9ce4de14a21412e7342f010637ae9543eb57ca5ff656d2de24f8ee10ceed00ca713504ab288f28904c001daaa512a7ee5058362', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c59a1045d76e7134525d11327b9718a86185cf12a6768e83a8470f8623581344f9cd828df25b3fc85788a9a5679f196624887856631c37f01e83994e557fcc0c7e', 16),
                    gmp_init('0x187e3a40682f094f14416349308601e0405361a0e53b5da32161825bd254f183e74cf51cd7e8cd6171b845897e431aa874fdc41b91e12fd1e23d4c452e4711f46b1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1343e7bdea7be83bc78eab81774c3249f4bc413db107cb4b321a35c4cc108e8f10cf3616dd8ccf39be7e1028d76d3cca3e73b6e62332d470147f762eaf77b602085', 16),
                    gmp_init('0x1f07e0baeba4bfcc116a13731b3341d166713d99e2a803202101a33f6ab309acf222cb6590d46ae31ec27c4421dcb616f5b0c9a990afb204d4286999f159d38d508', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x949b3d81319890d917e2ce41b01e1a91964ca7becca5f96675d80e2ecfc3d2321f8ef992e408eb5b24f882dc2fcfff1ea2dea5203bad0b5824b6675f53da1ef419', 16),
                    gmp_init('0x10131101643f35ccb2395acc92792a11210ebe2c36f96b0614bb60eb76484bebf7e9a60f2140f91258f2b90cdb5e4835d8766fc21bdf644e53885c66efe87c9c810', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7a32470c791efa7ab3e5604dafa66294b71f0be42385847bbd452c3c1c30b42e4cd51695bde517ca322a05fc392954e8f35446be7bc6034168f345bc8d78fd6f6', 16),
                    gmp_init('0xcac7f53c566ffa81f2fce493c999a767d55e33dedfb9f1896371224071c1682e5f495048b6187556ccf16522fa81328c41a464ee494fa716e2be46e43f247c00dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e5d565f776b34f0f19148b45e157e353b26d8170467642df2c28d517522ff653b3a939a76b9be255d71d88c5073857cdb6102900b33ea89845bf73b24cded2eb86', 16),
                    gmp_init('0x17759280d580a6a7f28c80d32b5e8d9b938479ba949d264f983c9b07fc9d6960578e252209ad2f97a05652b994b86479736527acebfeadf8e0aca5185a2c4b5de1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14790e8785a8dab116257c483c78d785cc3720b2f886a13199e63cfba602d003f895a3c9e3ed6b2d5997301a2890147f1eb29a0b9e704fa5eab6faa299ab7cf116d', 16),
                    gmp_init('0x2e38b995206cfa1bd68e43ddf0bdaf6b7d08bc1827f34aa0d8b3ec2e828dec97fe9587d5bfe287406af8dead3c7fa94a27f542838f45c464432c15de82026bf788', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a37f78a3528b6d5275ad0a9384b86dbff8cdb8702861c2138bbfc45c63c3434729672679c83b0753d99d837ced36b1a137d775fc0b6dfebd76a822ec345aa41145', 16),
                    gmp_init('0x4d756865fd853c9af234fb12a76e28af034384cbb13dde48f39d79975b89f151521e92432242fffaa399c7e05fb667222a162fc46e8e6fec1e427697d690ebeab0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a8f4e2e01afbbe29009ad6ad2987f238ce0b44f9dfaf245249866aeb63f084f95eebe94e4b81ee80e2f9006bede736feae3803be92096232549965ff978ff76030', 16),
                    gmp_init('0x159a230e1d88fd34058156020cd9fc2dcd55567491361121bc71b6874230bbd1d01b8714b6aae72cc2998be32d0f3f515b6f9aa8ed52d8c32a4c22a67a3656e4935', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11d053f2778413fcc520107e9039627dc6cdfa6cf793e844a6228b7f0c9203fde3af1bacbd41a7c7ff28addcea5b95e94760fce34c5fe2d537a2db7055db286bac2', 16),
                    gmp_init('0xc82239b9dfaf90038160b90d7aba1b801a6c67563fc513415efb574bb4918e22796149b3969c518e5bfd5e65d19130e9c37dbcf1e00bc29398f67e718bd10f90a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d5a937f671eef03c6cbe03db39d84da6392ee6c6d62b2e8791a8b49539d6d19b3e5314682a24aac36e94f4fc8f2a6eb4db3c1245ef4acd257d39866913cd2d894', 16),
                    gmp_init('0x247be14866b662adf1327c1f37ca31da20115b2fc402959c1ead2a529bfa67fe127451d9d590447afa2834640235555c2239afcc5b5ba321c701476022a8afcc43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18ab37067164eabbb7d580c2f6dc1a68c65530a1cd1adf84fa9b5c4a270a9595f658c45f6e49583201c9fc78d3251c4d47c88d4d527901269e0494f7f61e0ca4bf7', 16),
                    gmp_init('0xfb44ecd257eb83b0e7f2f6d165263d33bdd7b1f41919e3b6bdc94fe1b4bd896b18c03b631635bff14866feb4810ea3ba9a8ce31b82d7c4f9bf1a2c207f4eb1b235', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53f8ddc6b168c129d138caf3bc8048752285ac417cbab848967127fcea2a0835ea312282566cd4a2ff30d217772031aa73f11b39f80259b31990b6c5ef74a2534', 16),
                    gmp_init('0xb7f5941afde11c94a6e741a7b0fa569aeb838452cbf235d2ee6a5e3bd77415fbd8cb1c84f5ff06b53039a064aecbfc1540a8bd293ad9f20d9ab3d9ac2837d70dda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1268735793a71952a777e9247395c8c591b4ce3cc44efabcab11d6bcaec9c614514cb60c16b5243ae9597817e107d86ca76814dd5f3157c1c3d6346ae90c2ca70b', 16),
                    gmp_init('0xea805018d6e1999a380f9afaad442a4819301bacb9f7c5209323dc955e62d34e340fc2c3976ab08953174f27df055755518f46a5b7c646d063c47f97b31426994d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x952f70aa142ebee7c76d14b1f799a6efbc44861f552ee477f97bcee1b894965ab2d4271b4a90047e41f816ae02793d76b3ee8659e4a30d703bdca9ad5d19c2c216', 16),
                    gmp_init('0x1d2621951db783a781384562b5acca042370b59fe5e95ab33c4568985e2567a78dfbf798cdbfcb4eb86deb3355735fd2a053fe828f21a61d626b610b9eef7a0cab7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d87bb30320894be27d33212bc8ef852e12aea8baa7cdd281f1b3092bb7e97155893fabbea47d62685a332a7472587a83c4993f6fa07ae8ee6ac51b8a260c318f49', 16),
                    gmp_init('0x1ba9e37238117d41b22a4e8ac6f07a34c83ed11222833f36b2274be4a0dd52de443e164703cacc7c44ad094119834b3438579c811bd0aec4f840d45f1f1792ff9ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ed2edc5e570f52989de98e4b9bda97b127df00af7a5dc4f0bb447933d3cd85dd485baa82e5fb39a7d69df15e968c54252c2d36366d39b26e77b7cc207ed4564e4', 16),
                    gmp_init('0x7754a9a68011fc7c2be393377bc4cf248115d8894e676ad51904d5846af3f47a0cf070c6a1b2c9399ae275b397beaa04db6312b53d8a9db145f9a3fda55afe72d8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x159e9e81b78020c58567baf95b27b1604fb247ea702f44de1a6bfeb2a9190617e187470a3cfe0898e4852e2e9bab85201974c8c679d17648c6a2d2f9e08a2abb00e', 16),
                    gmp_init('0x532fda492fe7db0c276dfbefde8ca48da9c481a752b01696d57974bd472a7f5d61a4554acb2bccad836a8b7630d33f04b5dc4de9f13996b5bedeb81330da533799', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x299335c96bd4486f801a1178f85b0785c6962988829eb070d9125b2e6c87ee0ede9dfc0092d5895af20d85b1ab422bc0bf63eac83e81afa390a2dadbb4cd046713', 16),
                    gmp_init('0x1114595afaf9c6e9cef852f2205bd400d1fdf8110a904d7c5a7bedf6330d2dd61e3d9f4dc3244245ab14bf3bcc02fc59de350803223044fd597e747e4433c5cb794', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123ac81696c8aa5366ddd4fde651872ef0f9a269e568f91b601148c7cc4be4d76eca6c3e3b32c38f3f3e5c86b07adec0e982233fb1ca1797bbc1f6fad01e435a290', 16),
                    gmp_init('0x1991c88e25338a7d99cd366e4abfdda7ba505e776b30c92e736258048297ac6fdeab81b500dd4f7515a67533defb63366e5e02f88cfb5e3d640dd10f5bfc06df67a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x197e06b04dc24a6b7f6eb211eacdbbbb595f8584769108c5fa4564564fc65e1bac86a3d54748dd4d7c0e8aa7d3fe3e8af4057e0e72e400294fe9b40a31f03d3477b', 16),
                    gmp_init('0x61cccad6e68461478dccefc3e7e5d385cc49e47cea97373f3d44629a5fb6d3923bb8d3f65f6cfbbfab007255d96efe861b7aee57f372378c9ec7689ffd29bfb3d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18dea4c30ef15f7dbf73900d1cca660056e9553bb7b31410debe549c8eaeffaee6cb6c3996eb65bc109e8e6e54efa3d46b89116ddbe7fee846f8980df2d3699e35f', 16),
                    gmp_init('0xdebb00b6a08ef84307a06cec281ea3e4a9d320c6fe76eb46300e98341ce1ff15123412562269e4e8e5d9c860a1a7478ff3bfa9c68017e1cbe90bf375e11b976fc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e7037603dbfacc373afbcd88077b2ccb6c77516d1cb7840cc08719f9364d83e77d6f6e60dd3778a2cf8988f286f45042530d431dc7949b183475427960f5bfa4b', 16),
                    gmp_init('0x1279b9f0c8a7aab88818ba19c451f97669be95c6512ab35c8eeb0237b53de78fbb385e9129b83ac9251117dc1334fa7bc3ec9c7aa48535c241f7d1f72796e42ce5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f07f48ddf88c71713a5a8d2895890718a9655302032a22f1048981f399afd708fbfc9ef8fe33dd0f0ada6cc6c8a4fa486aae516351e0904d25c184af99246bc98d', 16),
                    gmp_init('0x180a86874a9c37435669f6ff887fcb4c8bf728716190f62a886b53036685ba34302312a01982b2ef3e88f332c083aee60841ef4ff56c3abf5352e16fac769a4fbff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d0e3d2c4005821ae080941d89d65b65761fd319607d0da74f26a05848ca27549062cfc162946c8f13d6e3a67f061570e7ba5c577aaaf2dd971c8be45a27fe18629', 16),
                    gmp_init('0x10e13171ad82f307a9acb2d7e9229277a979c371626452e7305a1d9cb9ad614ce9ed3debfa9ff52fa6c091454539975872421285e386768d1833664ae19a334b91e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3b240748691ff64f6d8c2e07a3d1ee37a1055599c4db1dccc85243b1645a2aec82914e67ce47aeec9e8543511a915472101fcda5624662210a810227e65dad623', 16),
                    gmp_init('0x854f9912cfdb1ccc8c3ca3a7c8a188513c95f753c3e85597390b5ceb7cdc2be798deaa3eedb7c7af4d9ec6e14c252a6eff887493ed21d95cc689d53742c47ad646', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54baf046b5bd40b22b877475e699e8428e2d78a2f0600ab71268bd1eb8365562208d84c890d8065a6fb44ab980f789112ed97001688956c6d666b11de35097807f', 16),
                    gmp_init('0x1e7b91be67d8676f168f30cab6007eba51f1edd1ff8e49231a507f551ad21777379f021a66e20d198d8b443270cb90ec32cfdd3ad4600c8b76406ca5189164af2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x121119f0291913c1a722f452eb60957c4ac89bbaec758fbaae1c5816a9f5725df01a384b2f0de86dc5226807c023ee93e42c6d86d8c64dafb802bfa1554b203d524', 16),
                    gmp_init('0xf45a627fec5514fd3c0f6571eafb1ed94643c728798f6a23af241e36fff3d293e37c88c285287406c383698ba3965c47e2f7491b475c934cd7f173df1d2ef523f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14cdb590aa6c2d95a2b667c4acfadd3ed924e9c4655155143b8e82f82d4be756bba28004a30377c556ae91a96c89ec9a28a923ac4fcda7c9902ec04ae998e006e2d', 16),
                    gmp_init('0xa3b1d3b84416699f51c93fa9eb9b9c2e285967c22300cb192a10cc7f2281f0bbbdcadc7250f1a9b32eba69f4b935676e46a06ff9854e110073cb7f053132237847', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x566fe1779e5285b4bc53183b466f0c0ec3ce3785b20e22fe7bda4629f589209ee233789a12153679c1e84f0eda5c33000fa9e1f2f50c96eebffba33000f6b1ab74', 16),
                    gmp_init('0x1f6aadf01b78f1ddc04678d2e9f1ac83c79d49b6f4ff5223cbcf4096cb4d862bfefcdca25634af7c25c519298e8fc7af9f7224ee37310c1561a1eaf8ecca5d768d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8c583a3ff56ce630ee5df4d2ef6744a9e36f86cbda9c0a19387f408b6b104364c723b197a824df32dd70a4e6959d2560a07fc4e8b33cdd8327690556b119ec98', 16),
                    gmp_init('0x1ca0c75daef3d1a30fa8b168ec927d5122d4c6746ca235dafc3bc4ec77ed137a2d786e25cca10ce2530c3eacb751453a17ba698c83930e77387a32cfc657cb1662a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b4e6e4f6e1fc70939af7a25606905c052740f1ce1478326b1b5b902f731d5ce6581f50428def2d3744a07c01a25cf28640ea2ee348a65bed63bb43beb00ef2a72', 16),
                    gmp_init('0x1b141dbc82576f073d9263a19265344d33a40702b17b6cae9605fd87d8be1c4709efd9f5c13a326baf954900d5708aceb7f0ab55ac28e6d983c32ef5c1b1edaa65', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x36d7a04eb2b83241ff0efd24927135c5f534e4fe2abea7a5eb32efc7aecd7d9f17a1f96c94495525a1e12f058f1f2119d04658ae220c0b391c336b06222feda8ac', 16),
                    gmp_init('0x1754434b5116207775ee0db0b5734eef50d4e4ea52255ea8ca5483a2bcbf16f9c2e6ebbbe33d67d0cd0e9124f629f139141951cd54d06857c8f11b8e769ca40933', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f4e550a9ecd63163a21c2061120feb5458e5611a6502918253858f56b652a2e24ae7a2f64d86f654942669bdc0ecaca8e424dfe8947deb6b6e67ad2a7a597628a', 16),
                    gmp_init('0x565998552d5f462a7804f1401ba32160eecfb67fae64108a0b0646d53de8707cf056a1b7b8dbf7865dde88d2d633789748ebe74805036de2904fabbb26b3b110bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea417d5158946c785604bc1ae18a3b02427d969be18391c070493b908041379c4361fbe70f20e737566d9dff01e065e61288af97d4541488c544d1dcb67b1a7381', 16),
                    gmp_init('0xeeccb12e267e0eba38605cf158657d4c7498a4e8af4e8743da7202efb9a1be983832a4d45898e078580f89bab97cb6cf84b2904e510704efec45f996f317f7e492', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f1400e0a3fc2e9f129a3b1085a3048210bc8478bb25555ae35f3b79e6a91ca08f966ad16a097f5f7ce98965bebd250ddf84c143f8de6bf14c480e86d53083e8647', 16),
                    gmp_init('0x1d6ca8fca6dd75f692acdb5baffa43e5d3e29ffbb214f4541d466b8e1d9a3536e11f835da5068c9b6cb44b84c9436f784464aa4c7256634821273dd8aabef069132', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e95d5d514ddbd4f518fe084798062755e8229fb76c49f83707bea2c42bd0c98f92fdae6c4a8271da551e9892e4e5c00fa17d2e0b150a8a8a3e3875c2c997faabff', 16),
                    gmp_init('0x1b5daaf2349db64a83e2b43168136d24a42c60c07b4ea2d121ba3ae497798259b5d90dec4b5f5ece30d37bebc0d4b46b33c80d2ac4ba3f25b167037fc7ce9eb3349', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1871398cb97584a03d938d56b081d55fb65e959e73c4172e7f483cec1a02fab1d3a20ac62618df1734c1d09e4db36ab4b55d60de27efe671bc5e54530f5acb36fab', 16),
                    gmp_init('0x1d1526e9698c0ab1c976371a053de1c4bd65a1ccfcb2b11403935d59e53a66229e1ea81c6d176b88d74e28f7a315e6363222f77cc7c13244b84a215316281712e45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15e4572d5102d7f8e00fd41710b7e3b98939f58d55eedb7ca7d5ac59a10991d1f102a09ac7884a1ec2bb378183f5d563b12267573da258ce1c119911d1347c3d608', 16),
                    gmp_init('0x11c8d4bf141454e8cf9c7f1ac86f53b133824d73b7b85c22a24864506843777f7b4c0ba5c65b52ef320cb55f785d9940106f38550cf75653d00d25f4424706b8e8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x325fd287b9c1769838a6294594361f89d600c40e3c5422ad5434d99a148f5e818d82f3d75f18006c308943aedca457b4054478dfabf9ac0b2bda14abf4d9b67c0', 16),
                    gmp_init('0x10120dd9c0ac5a84a92af9a39433a87dae119fd60739c9f12b4b2efd35d62e255571689cdce23280fccbda65f854778759961fd5b4facf068485465deb69d02479b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1030920dfa310b468da7a15a5d8c124e4a0880c443de0ad22f773387bb700149bc95e405a9f77a45ca7422c64287aaac94f6c19514ee4938e694ba7eecef33078d3', 16),
                    gmp_init('0xc16f2546ee9a02af7fde82d31ba120b6c0c2480b6df5e37117326de33af9ecd035d56a3ca355c6d2ed3d58eb2cd3e3380069dbf269df578f840140a29d5960a977', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dc098961a4a03471ea282bfe4a09706557fb34c59bfad8981dfec34ee6364dd97bd937c0875cb933bb03c3907fb679f68c44c1d0c7fabe11787f0bfffa897b85a3', 16),
                    gmp_init('0xbf32b320929e57695511f4e3c957ba92a913669f94382fbe8b14938e364d8367b0a80fae2faebd3be728fed34b59ffde79a3c7416bce37feca41759cce8eb320d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b2303534fdb629f3cb1c7314d68f8dec89091a93d8272830f6893f29dfd265c9879bb98c6f695346747615ab1113f410282b84b2e2dbd4df1fa8f50846fca44ec', 16),
                    gmp_init('0x152589a00d5f3392828cc2f2e9a1274dc4075540953434d4f8ed4bf3d681fdf1e3aa7062ca005ea2481d37d1697f89f075f84947b7f84c48ebe5cafc9f5e76e6fc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b89694476452c697a18f5f3c154180317ee690674d9dd13ddaf8dadf979b47f97e16f0ad3d410299086607661ba03bb43a6a3f2257baf7618cd8764ed5adab4cf4', 16),
                    gmp_init('0x3a7c758a0eea13b43999c89fa79b77e99a169f4e00bc5c632cd0f816ad15787104e2f6454ce10ef4bb31b78c2547ad4de443c263b702f78d2d9e9715e5f7894511', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14090c19709be47e84cf305637f4de7219163fe962a891dd29095b9aaa10038a2a497f4bd35d8f73d7ae191069d974b40f13160421089182fc4777fc8aa25d36425', 16),
                    gmp_init('0x1c6fdb364ede1c201a034e22797f7c4ae62905e18f97cd9025f9b1e02eecfcd81e3b873153b7b3c4604d95bef5372e7127fd4bbbfb6d98337dd0f5b6b27847f0ea6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9074e501e69e7442134c771baac9cd16469559632b4c0dc4801cbde33384d94d3cce606bd95a4b07ff52b239ff6210ec8d643e94a8e6af4865c0c5d93ba445997b', 16),
                    gmp_init('0x28545d4d47e03d47ed4e3f818433345fb99f06ba1a6fa258231e0e0dcd8a2fe0ab65211c2b5563945ef6ee3e6b641e0f4e7fb47dcc91d9efc587bbe7ede205aebb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ad650c77404b555b16e97da1c2ac22ef5b5f1bbe73c98968bb1288267bdae067f763312050666a658390f663256dfdd426330d122f8094ff61e3ecc6294ac5d687', 16),
                    gmp_init('0x1a6b5436654ea5130d14fdf3b5bee67f4cea220bb04a27eaa020ccfb765004ed2d212a8782681e8601fd7aaef3ba2bd841baa4fdd8300b29ce15bee242b74cc55c5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x68fed8bc0fa4689189ad36da315dc202bf8caf2f61f62fede028e3d84aa91814aca4498e7387d71897a269c44672d9af69787c7f18b4a51794067f879fc7734385', 16),
                    gmp_init('0x1d2f9c23d803e468601d1811b8c9a22611d8b75228287175b19be420b636cfc52a219b350695c86a30200954202e9d3027e871885f1cd72b4a484a0854296aa1400', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18974445203093718ef8e44a20532ad6596594a5d7cba52281865c264d6d76816d4a69508493d669257a14ca004e08821303d1f9b860d0e9732c52699b9e6a0bf64', 16),
                    gmp_init('0xad381df171377ad2a258943b3455741ffe694cdc1ca0eb93a824a85f05e8bbb4a45b8a5f7b449e0cc882b2cad4b5267f9a7ddd44ccc31cf28863b108c628885dfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1716e527daa95500baa01a6df580ff424ddf3cd28581c736ceabf81b788d43b5a3e602112c7ad867499a41699b795d7ebc02524a83bebc31a5113996f30e402d747', 16),
                    gmp_init('0x2d79ef46797ed670def4ee3079353165bcb4fa4d6c8a790b126052b0183c0a4d36a1b81f99430369d020a275a635732ba62980d1c923985bd71d966ecbd1b77ff2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16187f1508da2a503bd1663c40aad24a12a410c974c96ac3f48c411b7b79775774cd47361170fcb316ccb768aa65ea29d0ba94ca2294dc772b884b4e6f6783099af', 16),
                    gmp_init('0x6eda9d11cf084658f4d097534de7d7dd7982ce3a7181354397d319640942d659d65484ed8427440d051e9c19223ed1a18a8d77018ddcc67981ecd265ced518bbba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d18e62735d880bed179073998fc1086d429c61bfddd95500dea4180801022bf508c3171ad3db4d163468d4c3a61fef10e0e0236afe5aa41c79886a22962c16459', 16),
                    gmp_init('0xb9638f2663cfd710f24c7b5a07752c53234b45af6448a0b43d9c3ce822061382ed60cf6bbd3d7a410fdefd15693fa10eaa59aeaa70c4a82be53772a3a6bab5ed67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6df80627f369a5a57645f10074b461331f0a529bcb7d2404dc09a472c9a055e4b078ef831ef59ec71b0f581a2183364ea6ed352173060b7322b6d0eeb7510be54e', 16),
                    gmp_init('0x36ab8261dba4d71c9fa1ed1aaddce1792fa38c5e981ae02a1934dd11819b453f154403d4fb21e7ef6c2b0c5312b9f399d87cb89bc91d6278a012cf73e37362082a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb6ee1135b229fdc50f68c29705705e0ddaf88ba91255fdcc6c700ca719265e2bb2da874dc271e42cf7479dc8b6ab6d04ef1ade4e4a4f4f82ac9eed4f2599a7682', 16),
                    gmp_init('0x54fd3f06ee7538d3adc1028dd33724a066d32de819e69ea2902c9d9c7376b4c919f6930e3ad8c211948c0cd85d17f740e34e67eccfc4785c20f4bd32a2a1a31961', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23945e4869d4b0f305d97dee85a4190a48f1285a13c7728dc706b0ec262e4a72b4c2fffe8af3ae339481bd93b7ae94d18cdb625d88b2f60f8bad3570f4d827a280', 16),
                    gmp_init('0x162621b68580adece0c0ec9b4d25ea0d400cf10076029866124ce1f2f0fa25bae4c6b2b5f3ace0f447136e73dff0eab2bc4256b56424ddd2f1744587f935c577abe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16bb8f9bea70f010ff89adfb6202c8431d8090df178d68e225faa5f28367542e922f81cdedb8caad4a297e72c53bdf0b228191fe11b261fb47d1ff09f33cae6514f', 16),
                    gmp_init('0xf3988483f1bea837ff193c9fa9e5209d668911601d673928b48d3b71356fe124bae580f18ca79f3220b1f0911a565c8f4a8496b0b5d149e76c78fc8973f422e828', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c7ee133ff8bc561a9ed718f65057512d9f937f17cbc8537a928e961edbf77c7f93c97ae7d2a9946dfb0712a3510d652546410756336a6c19af9bfe015460032b6', 16),
                    gmp_init('0x8e7505685e5d4d980928620c5a256176002de2e74e702b40e801c63657267d9dcda6f28b21793079e40ce788421a10b4ccf8abe77c9eeb9df0675476a99e3441e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e39a389625d71c4392bd25ebab33bc5437d44d9c7ca687f07d393dcc3ba5cdeafffb80c94e2922c70d39dc991e82d11ba7dc6e6043f33ba9775cfc2f27690b6bf1', 16),
                    gmp_init('0x333c1b38a58a80a7f43991c34977387f7a9d2cd63a814717cc0ef03f6167abced9157669c6f65e7b0d22cd3ce604c04d14abb96a60cde860b70ac41a2f228f0787', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12d6d30bf0bc232aaaad436cda505f5b417add50957575465fdb98e1de8941ef5ec6827807b5a4294777a0277d38777c80c42901717d151bb6895f7fb41da8576c3', 16),
                    gmp_init('0xe6905d18a31cb0da024aa1fb064c4bc117bb0de5c0f50bddc148db563f5720cce16c8aa91f09fed40cb784a12b75c91d8f2200c6d4d60dc1d3d4b799a488873a5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b4be7e5caba971c6b3b6ec1c3f4bedf73d960e78ef567899fb0d6caf4ba23f330bb6644d14ac17dda17be9e55c9036f3d45ab98b4cd12cafc285a59a49b81f2d5f', 16),
                    gmp_init('0x1c3411491b34f2278a1be23da1602685093a58d769226814c741349ac1b9fd5a2e072adc39ac442dc91c6eea4c1d0f467cd1fc8c49d71dd785320cb3a6a66a01413', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2678bd1b524e9d5a0aa4422d12df2a60f8794ab4165ea6b2548efb2a6d02bf830c73bf68542dcdb1ce25ec52d5dd9b920f545b0b693248cab2414530555ab463b0', 16),
                    gmp_init('0x2e55b107493c254baff2d6c6ef401334f30626dd7aa58bc7ce283a30954a2883edc9184fe2940dd578596cfd672d29b6ee4a73e42a6991d6383f341acbb43f9e41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x672923f9382340afae1e4db699885bf0423fcd3227ddb9340a58881343fed5ae1f1a75460c0b7979d2eef03c09e074525d89c1654de8003763dcdfedb147c91a15', 16),
                    gmp_init('0x96009a7ab97bb336bfbdf434f3183096a8be73f64fcd307b382d0cdbabfb20d84894929564d3fa0c49d78192d6c8df90088db3f34bbfb68efe934ef610cce2e800', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd94422e43e7436e4389a98521ab31e9501d6176cdf9ee793b29d9a6870b8278b74a1cfa523b27c7f2d27cf9990849ad2f5280fc963671a28355d3f00ecbecff63c', 16),
                    gmp_init('0x3ee68eefacf1e575079807d998936e411c42d9d64e57432b3a9b57597b7d5a103895def32463724cde00d3948d81c82c13a5b83150919e1298da4f7464daa8dc76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1302662d4943634f6fa9d1c19e7a2ae38dd11d02e708073044ee5787176b2113b571b1ef0402ec09be2d5d181f549d916b3e53e1a993ed58f0b45d90cf8876b33ac', 16),
                    gmp_init('0x1ef15cba83e46497cc955f8653315114adab2ac3ee1b7777b32fac066e1bbe7fe62e7f564839b615bfc56ac592e69b8c5aed2447cefae37911a454c8a736bd6208e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1174c2803609fc7e64721f460610709fa2e5b5bdee15068a7012376df67307a7dfb3f78ccf5ff715a3a5df661785f9c5b6f8b58df9d5a1dc2c87d6d77c412abd32e', 16),
                    gmp_init('0x8aab94f4800317e1e41ad05e58aa5ff718bb7d6d42d953ee9465979f16da1fb312c9a076b8ca6f61d0d1b750b5a04c2b7dd9b69a94d50f18e255195e04e7755b08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6993237ae7d2e0c67e7115ef98cc0292d8977277bf73fa87219f6d1b650ae6a31183c64076da8f19edea27a922770d2eb2b8dc2603d11fcd02c06a64ce981fd289', 16),
                    gmp_init('0x14963ec8c5d48dcf0ee79347e4604f98f9927e7b1e503fe728f876124dbb9dfce3fe09fde3816492d9548f33272f178d4f2ba00bd740ac1576e83481b595c151734', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x718332179c95f9e69a6a04f887d94afecf2f6759f213809a8596f38840a7bd172710047a368e0a688a3e93f7ef49127780ff73a65e701d91fc83623f4a5e85eed0', 16),
                    gmp_init('0x18020d45d8ffd7304745dc1b6f39238a7dca8186ac38c13136e82432d2d1bdc7409c9af67f4da76ac93aab2f1b7df643483f769f322e0fb9665d3f3c220660084f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1da85580747e35674b73e01e4311612fa73a5a659a902c125649a11b37a0330eea5f6c125294319ca89df3cec50f069fa761a102766d91555ef82a80d88b23b9243', 16),
                    gmp_init('0x16a75bc25e7a76b83b5b61a7c61262f5f935988797252c7840f095fec7e3ec387d12144206ce0a9712f76aa969e7ae2ac1eb539909dcc336ec6fa500e83b5a20999', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137af1ebe5425b3f63fa9f2406279f774433efc69f342abd2ec8abbcaed73e990345829936c8dde388d6a673e7682e3034c5d15960e17a3887c28c57f1784dcf978', 16),
                    gmp_init('0xf3c45125da764cf455b04e0cb1932eb702222eb174d4af53a921b019ac01b83cb3f568df52fea2eeff660eb78507459f3872d8bed7b6ca6427e87d4b598f9732db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1799ee354aae0c9c30f2d6a4cfc2ed4a7f431eb5a3dc4824bd97513f7c0a917a2aa9ebb5a8e256c4edf8b9eebbf7383f8f4c5750f6adc39da33327d64092ccbb0da', 16),
                    gmp_init('0x83c685ea7ad14001ca8869704eb163a66f9aa6fa0aaf5715e13ac58dc7aea4de851d35b8874edc05c476543e3dd38e79ad4574d31c2547c11220eb09c9cbf2d15b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf4842e43d66e208324ac5350fc2da2f0695761e3281eebbe1757af32aea52c655c8c373a6603f8e5673d2354136d988bdc2f3e32f7330a15da867bced80ab8ed1', 16),
                    gmp_init('0x2b1c3595b36ea320f39150e5837f12e08d89c0d42e9cc0c75df20d78a2e7ff059e9a501d56e9290bf2c9404482dbb5f8f039e3d11acb19a542f78b92418f8d5435', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x229acbf58fac9b5ecfffbeb0963b06525be6d3bf58928103e363dc2628d5582a557b6d6bc88b7c74a3a59883e14432cfa3b32ee5adbb104da5b6711a5052b505a', 16),
                    gmp_init('0x29f460d41630a1544a8d15c4049d123bf388131f8db1f0d9972f1baccdbec8ed8f5de9cd9132a7be5a288fe1958aafa892a9732060c78337ea78696df41ce15975', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ef5ac75da36ff62043ee325092b593642c4121f5815b631507458ad906592da5055f85c3b54deeec2830ce0bced0c288e6aed894e07232d1e92b2eefdc678377d', 16),
                    gmp_init('0xe58b2e579d4439f96b61e46fec0192d3aef6e3a1f250e3b0ed22851e415c7b6656bc6682068599e896488040a8120640ca7e15e9c9b49ba347d5da2102080763f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e51f33e7359ecb13597d83573f2282b48f93ebc99804b9c293ccf191b5ca80ad08e2dec3eeaa3999d342e0ce86a03fbe12ddf9b2f0e413b8895524dcea3342331', 16),
                    gmp_init('0x13ce126dbe9b6a2ba251fd8897381ab299b9d9424520f5134b0b660d065e2642327850cd0aa799b205909af30bd80dcd35b5ff3ae9a209b881c789b5cfc7d53f035', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1748c250328bfe90f90ed53322395261f9a9eb510fc85bc19d0dd90a0f3b52b93a93a2ace8ba3d0c0356241845d556ec106e5c1b10f86f4bba501ca7bd3376f6ffb', 16),
                    gmp_init('0x125e237f5b506a09196b137fd6b41c8ad4de8c3f90c276d2c703ffd342c8560d39c12c3649929580a1b76cea1ed7392ab52300f1fd1577e18aed5bb6b8014ab9890', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63fc49d649d1f333ef4e5db49dd06a57e59a103a95220382268313b6c0554879adc9cd45238b5a04c3da4d2475fb6161409a76a8e180565c69cc6292a08a547e2d', 16),
                    gmp_init('0xe8738ecfb9881f46c4a44528e4b4000757776b12bd9d1b22cd93f66c9743c153d226f9f8409d575d04534c9f6ef6dcca0b06692dc9416e0148529f97e82f30ea09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb31c1f163a4ce42fad9b4df7d8bf15b3ef391a34fe2b0e23d7183170ae36ec374047c5a743f2f4b25af9e8bb746e8e42f852b875a46f0d43fdc4eec39761604e9b', 16),
                    gmp_init('0xb651b40cd43b5405b279d309c1cbea56ae08c86060a7b7cebcf6bba8e66a37085b17a8b262fad15732d032be7b70f6ca5d1442fa6567d316e698ba447f9608641d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xdb0e9aaf1c1090b6c7cf7f7d1afd852641aa759216ff23e10a7da022be579c61b03e74aa6f13c42b6a13273068fbe89a7a75176a16998af9a2bee094232a7f01fc', 16),
                    gmp_init('0x13736008cb1b69015da190281bb2ab23f7eb9d65432035fdd1e6e90c4f990070d7567aefd6a14f250ee83a7bd03f70950d025f3aadc987b2c42483b1f8c6d9ebcad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf3741fbf0e3301a57f372e7c8605c7eb33bea41715157464bd75e5cd7ef66bec135962ff9b28f625a400bb7948b895a513315375ed6dc2acd80d935b163b7a2cc', 16),
                    gmp_init('0xbaf444a8f03048cd5960f0dd9c45bac3045852497b5ee68672a27efd8b3b9cda73ea60089b0dd9b47f4e170981fa93c1eacaf6355ef89ed74aa5388110d0c6184b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeacf585a3f24237d1089c0d82562f5496f785c994775a3938ad1fe4929cf48052ebe1fd8612769572689b7ba5142c606098d99f439e599602ecacf976d657d30af', 16),
                    gmp_init('0x1d23cd67d47be83c4521bd91fcaaadfe3cd5fa016412c2993aa573734f5ddfc690b41a7454849d454085603dd5c4c825b6356732dbcf094b87e3d2d602df48c877e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b6c9fc83a312cf1b22303a74aa9f860510f6b7e135d34945f93e7ba310bb0014b07c606090fdc6abf113aff43e3efadc21957a0f1199b1007d15ea6b41f8670ab', 16),
                    gmp_init('0xc51b5b37298c5aec392e9968feca09bde30972ac415c249069a4e70ee39ed93d5ff83b4cb8c36eaf74bffcd55147339a1aef0d3bc16e7ac7bf5588cca5e501aaa7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4a0928cb3e85fabbee61bc59edd07816de1e4d5bb77f5a42dcf8d70c9fc31845b1eba7a2ae10e448e613e5157b8935ffcc3c6b459e8f5564f8ff38aa4093edcb7', 16),
                    gmp_init('0x157b526a9b5c83a3b7cc2049ea7ba09ef6d132d27fef989d479bd17895136b8d833dd2e7ff9234b425d4f59050e36dcf32fca036b26540be4cb12e7717eacc0393d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7232fa03eef3ef6e446366031f423ff9195318a888cb85cb9a4597975c33f9ee19d619358709f49baf579edeff83af8af80a44434506fa486468a3040e09eb3233', 16),
                    gmp_init('0x1545bd940000b8d34db04146106114f6b0cee69ee6af868426ecb56e8f255ef3926aaf0bf088d27b9f8bd96981bed7a1ca8a4b86022245354c6adc2b71b8fe0bdc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce8d2c2960fa3fc1cb68de3b3f31df983256e69b5a3ff351aeae4af79ba5ae6125fb5c9ffde2b9cbe1b06dce427861d61f16613cada30b9044fe88213a38540b67', 16),
                    gmp_init('0x1b0c15f02c49a1ca27a26bf5c119366213d6aadb11005f32f3de02bbb2f5fd556ccbf40ee0e17f1cc25855dd28e836ea10cca979b58b5640389979c3dd49fd40f91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e6d4f07bead159399ab02366c6c45e7a913c8f57c561527159240526b0a84396f3dc6f7cb60fb46a7845ad5524e6e393a22eb6b422ba58ff0671757a6e2adfecb', 16),
                    gmp_init('0x12d53c3d41ab0f7ee725ba2e46a2816dfc17d693bb1f6e0fe71363b41d10c20eb5722764fab21d28bc8c3390ff156806eda946b2efb3f45aaa4f69fdd7f07f6e883', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137d0a688d5b696672174d0538a1dc6941f07d0c9aa09ba3acd1c79fa0780108b8faf80a43662673fb48abad53749737d2fecfdd0fef72ee37781f4cc04a0326352', 16),
                    gmp_init('0x12653c730f4e5f39da2cf2736e90c1b14aebbed179c252524c5f26e9529230c20cad4c069476e300f4caa3df336381104d6107a9fa4f53624436bbd2e0353f803c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aaaeb1cb903b907e1195562953136918fef53646d95bddb98a1f9833510f3f56df365d5e4e760e56de5d7df0effdad63e53ad4b78b48ac32e62341f58b4fefc586', 16),
                    gmp_init('0x11a3bf9e132bf315b911274f0d396839da36aea18ad7a1f38f6d86f3c6f2882f2a21a53d1142664c2084a49c5ba90e0369f7dab1d9a46942ebd33688314e1fa79e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x510c95c29e15ac040a18806333a72b77e56a8a6375c89d013ab29cf88bae8fd422f1dab123e6dc8cc880780aa03cdc17be9f4116d3537e7969de9e51cf9336fd14', 16),
                    gmp_init('0xe595919951b321f9c32c23ff580153455d5523fecebb86443246d3d820356159eb705c9ce50d614e1d495304345fe33357a01c9ca98862f4461799fa1f24528a1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105db439efb71fd4421f1adc69628b6486398f7c04e61c86b33047ae4f0a077957b365955ad3faaf961d000edf7c59eb21970428783a8a2e402417e47fc2a0cfd7e', 16),
                    gmp_init('0x111f6aeb57e347959ef6fc0b798251194afd641f49108bfdc0b1214ca7adaf71b073de17cbe34b0a3bec020bf3227a586306f26deaa616978ac9cb08cf4e592369f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c9c282a497ed5d335fb3864b36c6f0facb3afbfd2a77392d75b315883d8db052917a6c8430af400556498750ac757ab75b82382deb8b24c5a4dfcd9b1c897a646d', 16),
                    gmp_init('0x18045b7837e493432c02cf1140dcc0a3f213230ad431b4ec838f592806d0c04f99447ac0b41cbf5e3b748f111efe0cf2e38b3c4462d17bde630726a53bbe68ae630', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7c8e1e145af6a55173726e286d7658622f5960ef1ad9ce1bc0d96ac4f7c3f6b9a36d155360c4cee23070d2a9a705940297b70a379e466128d46c2f25188d34538', 16),
                    gmp_init('0xaff73f6266a0f40374bafbb841c326edf5553c51898c3c729bf21d6c62ac95187c39720c7f43d687efeaff8addb6b09bcec7ec1d218f7303b35d4e632797305a15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183be497e2eb1c05b170cfec2f11765e5f3555d9533c98ecd0bcf660d89186991dd36f66362243444ef01247b789114ad8b435a138a78dab943c54c480d6f4c3a2e', 16),
                    gmp_init('0x151163cc738eee82216eec53331feca69301d51ac3ab2c5281ff6f415924dc04c2c6b5cd7fbd3f603aa8d050ac04ed0866c8384708cd3e1b4787a675da528e30114', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa80737c4915fa47594b61112afdce85031e0b251e91dbd92645eab172754fb8d2bcc6a8090f946ebe8d1a1d85337ea884d7b35c4f9faf6322c2d7eaa1c6884ce1', 16),
                    gmp_init('0x625c82140239171e0540cba346808848757c20e7c66689dd2188a1ebb5e139dc10f57bde1f7b4de5d34815d67fb199e3eb83078cb7e48dca691973c88b40260e22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9b50605148db71e6a6db21156f30b4a34f871b4be31d0c279bd809261053d38c23dfcbf3265052d62b7c218f8c854c83d5edc9b962faa9f8a922f12dd4e187fff', 16),
                    gmp_init('0x13942d11fe6279c3eb91aebd73874a2379ce176d6c30d1a66e58a5c34867150a93dd5e9631fda672398c035a514aa3f520fdf89cac0a0bae827a08ce4a86bedc91d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15a34a8f9f8177cf537ca67351bec92f5385e4eeac1208c0836473a67acef4b39176f07c48eb1a328e425a8cbca5c45eae71e8dda6d1b68f3aef2937edecb4c6645', 16),
                    gmp_init('0x135e0211d40c879f46ce16cd6a03dfbd7300e0a0c3f46258d00f031c076c25f08bd275213a2950840d58507f3d4b646cda4ad0bab0ed36d7f7d7f6d7ab9a3216b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5bcc326fb5794804865464d9af321417752a9d3e6a9f7938bde43e882042e0a581c69ed050e7ea14583b450378a19ca74f94f82b681092c0a033349762383e65', 16),
                    gmp_init('0x19b77765db5db4d13e7e6536f3a04ec7d73c9c221be810f94125b57aa066e80a43fed13fdfdbe7e139e9ef1925c7fd9a9d83b927db46e7259147714afcab958f657', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14248dbe53a605e477f3e4e733da772f80995f9d633b3f3af6179db54b83a48da6cdec38f45f5948795e1699e81ed6c71972c5d06120ab300cb21fe770f84924113', 16),
                    gmp_init('0xcaa013acc5a24cfb0ff315b38ced4d4dfa57968830968c773eed41324416c3b69fba3cfaaddd96a283b980fbc096d16ff087d83de7939b32185ab3454e86f2714f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95cd8a1bfd25c4e8af723abd9a043e4c5d01b01ec62bc7f7312933b6be47a9533b045d7e95d143be9b407b393219f6f56ca90109303b9aec0ed064803e24e3c650', 16),
                    gmp_init('0x1e83b64366081582bd454637a4a7512ef372cae43c7a6f7fee3c3aeed933deb94d91c020ce0155cbce9027c6cb7c01df5df08b7c6af8b5c2378d719eded6d8a2f90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24a566503b7a415bfa8ead6ee974cb79fe3b8e6d2009be3488dfbbedef9f8d976de4446ae656119bde1972059c7fcac6bb1ab83ac08aab860c6d7698f7e59dde8', 16),
                    gmp_init('0xbfaaa77f7ea27e4c969ee15f5354a4469017dc53e804f3dbd416abf9062add49aef4396987a00f1d085016ba3237f3769b6a3200d111c338cbd661701b24c0d839', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x150e0b405b2366d78c2b23e4bf34332001bd68e806e86eedc55f7e62f98266b665e404e04a59814155ed50b855643275c4542cd01b9cc9e506586dd8f04def62f7a', 16),
                    gmp_init('0x13bafca001ca78c763de13f4517899d5d65e0897a3e947e953b053a8be5693cdc677d8dc831523a4f90c0ba5325475d05d10c209647ce72d176e4c1160d49d6c3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf22ce53aa1d9a8fb57f81f95156335bb03aaa34d531f7386a719b93ef11901e4b6bcb37d5a775d18fe67a3b7a4126a867bc4a769fef7a02a1668d132f5602a1b0', 16),
                    gmp_init('0x517fc613f51e97c0fadab2de3b083b5b688835a85f23c4f0cc43f66981301f60905d79160110e321e9f7af2dee4e5b689d9ae57d49a4d6e345b901f8b5580d76d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1585c1e47e9da5da8064169da7ced307fcc4b30c0d40b0e523a943096d75c1037322d38334326e468ff6f375ec27c15d50ef55e56d996e352099655cac34d110319', 16),
                    gmp_init('0x143dfdb05a969f94a1e5e0149cedbfb4a7779ffae0e4b377ba6c1a3271e109ff65ab568253751b3f9653b2dc12594068bd405d34fdbb2f6bfc8af9ea9b5700e6489', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b39de49c4ba846911242d3b998ac7863bc1115cf1e702e2efc29ec8e3824f249ec08fffe7f94b86a5a2ffe758f7718e6ac990dcdef990f6ae598cffe72a8e16494', 16),
                    gmp_init('0x1301c6ba4df46c016e1e79b849e876f0425fe65e8a389920cf0b8ef755e8fa1e70e930fc09d8fbe7d8a671dac9b98084ef2d622ebb51a75ea5123c141d47f0f461a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x982879d201fe9d73f3037847dd761bfeb821f07a4520c07c1f883cbb604489813bafff68201a7dfd4de40e87fdf139548a1225fe8e1be3a442e8f06c2f869db704', 16),
                    gmp_init('0xb8fe977f078747ba4b4f7c42ecf9d15d6434b47f9f18abf899fef444c177e831ae51d688edaf3423556f8e0ca8f2e653369e3888796f0c1179cc3e104798fd5063', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x279e5e784e4f1cbce5065359ac149ef0f7f8226502a9bec07caf421cd07b32d227eabb12c80ffed2feaf6d2fc5ebbf39ff305e549d55f212211d7948e7e31a2875', 16),
                    gmp_init('0x192ae531c980b6bdaa5dcaa2f3b8ee0b68cdae016d744709cc0f765f2240dfd1e8d6de249642c3fe47604ac0dec6b51176b4f00ac4c4e803ed5e64bdf95e8995641', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195e8e7eeb7fe735c4a4202ba3b7bed4199ea81a1f7a64fc54e795c06ee841818e51bacffb7566e654f2131279186184b44c58ca225de489ac4586d8be345624df6', 16),
                    gmp_init('0x1d257048edffb834c3d999d8539ce356fba8ddef6d7edd9890580b6b9f4ceafc8a2cde93cdbd88f1ad22bf7a3196e707d92d321218c31dda1953c3260519c58b094', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fda7fd3621bc8ff53950f226739fb26d56eb8eeaa4b27725478b38992a73c905db390e90f9b1fbe61e42acf9813af10b6275cb6585b4bb79eeb4c8a95f54f6c3c2', 16),
                    gmp_init('0x3bd99027b78ef102a364d8e221d5ec1b836bef44fb120ea438c32e952e4f8047b7f2602f0c42407354ffdcce979720279a57efde78a4eea6f59f5f71c047cb14e9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9a115847e5f88dab879ff44366cb4916acdd952c85824e60fa321822dc0b7dc6188388dbe9596636bca655b42720a124ad31714c1163b81248002b6d63dca9409', 16),
                    gmp_init('0xe20dae5d50626fb1fdf351df8b9613a79ec23548f5243e639596dac31fd5710224856126d0e88d93fc43123414977819487a7196f7ea2a20a41eaf3d400aed0c43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10b206bd41d26e6f2c099847f1b327c510fa466fa2bb4584d2030468f94689baa9101eb99642e847be3d0e8f1cf682ad865b52279ac0e5cf6e90fd02a81c0326cda', 16),
                    gmp_init('0x1de35030bb2702bb900c83c5fb3208fbf53eb5a269ece6efd3235ad7383d4a03368edf33e226185a74f4987100779ecbe3314c757b9af6c7e868a04fd93ba3011f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1783677e9ebdd7cdf90bc3f0e491707f4180ef5dc4884041aa3fe2133c1eeb5863da0f3cad9c6138633c004c36b0df0437146d0adbaa86a468ca59d74fd4ae20507', 16),
                    gmp_init('0x1cade611174429698945903dec3e7b2872b7a9f6ce5b5b137b5230272bb543c76be0e94a6d9182d301abd64eec2ae07a9f4985e0a08192fa59454656623a62115f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4939e15bfe11a2d00adf0fb213831177f261fbd11cfeda1c18b7640965ab9c03986d80a56d687f88a6fc78790eaa1b4ed6005bcab58cf9605c809dc9ec3ecc9997', 16),
                    gmp_init('0x441ad9a2f4e806abf29c1158d8cd2760d03a2196f39f2bcbc8205a0236cd1dda49445c8adda59468e20267252d7efa3c260fa7f405ffe6220305d1b9cec407557a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8c90ae504e9411471b3d22d3236cae0ec7f28befe9d645453ed86b43a056680b85a2f69c42672749b0a7ab101d983900ebd11629a63cd2c15f59b124b6af9b798', 16),
                    gmp_init('0x7898aa3ebdd2dc77b0395d0f51847094f960abea42cbce30a519bbdc857a71156eda895823e3fe9e5ca68161b2e151a5c635bd878506c5c4f6799b139b6e0fa123', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183bca419fb16d380b44a4cfd497b542f3fec46447d268ee9ae06671a2e5179ca552b8184a62652099d4faaaf762bd78d7225b4a127a67a483905b67df62eb24d1d', 16),
                    gmp_init('0xcfc6fd2432fddf05f7557fad895808dc841e3fbce1aa32fa79eef45cb65ffada84a5a9b13f354c9d437efd951ef187c1e6b3a7222acf8e6143181d80939e43a49b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f60cefe06ca196f6ee6ba3ac8e105a7421dde0221c04113a869aac7762c5f3773c8ba4c91ea901acf7d5464c65f941be63fa3563c47b4583505a0c8f0f2c1a41e', 16),
                    gmp_init('0x1656e25c079bb3dcd75953e1e7333cccbe1bd92a83a86c21c2dce4234ea9ec4f2a222816501304e8fb06605957ac254b5af1be97838fab69cd169a777cc3a53b281', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195c95ecb64949930d515d98f56dfd71053cdf3981d7b2c78cf8d432e48a7e4d4a30f1f8cd585b059a3253c72a37ef07316550f2515bf8056ba97f22a4110c355dc', 16),
                    gmp_init('0xc18db637dd3c5535443e0d62a390755f2b901506c4e0ab51a6b7f17d307f8c1bd4d35bba9b2e9e7eaee2cfaef127a245408603f848f66ecebed5e23bcd4b7d613e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1371a8c3ff54538a2fb60d09f180434e1454dbec931de2c12d3c8792b3d8f237ac6b1d1419bb2f2740a5c4953477028f353bdcd754b974681ae05cd83fd20b99af6', 16),
                    gmp_init('0x98abbd695a6618db3ce5fad5fde93ae5844b3a10e2198b71035ebc7465728c212c66ee1b1d47b0d99ab8937efec4065634fb0f179ead5876cc8663671129bbebcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20e5931b47f8b6df89f00e818e1da338aec37239019a9088174f39e76d56f4b6e4890cd448426ff2485d914b138ab0bb84d34ce0cd04700cab625c34c2f07eb2a6', 16),
                    gmp_init('0x16a43b1f08650eacde431fc033fdc6871cc08453524e2ba01ab640c98c3400da096ae5249474088edb90c634fb857e9517e6404f173b88a04eeb4db6fbf1b058397', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13f6e1aabb441f34e038a17df7b3516efe0e717dbf00a48261cd5d68d4ed4d607c41ff01e0b6994f23c87973e98535224a017b1a92ac3376170c7bc11872c112fed', 16),
                    gmp_init('0xc6b6764697e61621d99ce0c654d4a16c92674f8f5c20d6928ab2a516b705959bd011ad2e576c781394f0fa5cfc084802ea649f17d42266f5510d4f0e076c8649b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17d9e3f9060be269c47feaa6d577a83076a97d72937e02eabaf02ef70cfb59cb843a40b3354218c2de779980140aeedeccff18b0c623d21493eaff87698adb6ef02', 16),
                    gmp_init('0x10fad2ea6866cdaa453f6a371df0821ae0cf525dca3b3adf0e0a6ff5f69a2f238cbea3b9fce507add0c72eef8831ed93044db1f4abad1268d8c71025502dd27a0c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd900871dfe44eee79695b93824bcb0a5ace1e98e0f9fda3b607c32325f98b5f37754ec53c6f0b3bf39815fa20ed05109c04c08d7ac81f0b3043bf37e7ecad34cc', 16),
                    gmp_init('0x6fdc0d2db302fc18efc475d4d222870f6b97178c7460dfd05457a6484c3ce94ab758c572d8a0424801f615049e57b57c9251520dafe9baf9c366e8ecaf96580e55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x780a7ea6fa76432711e955528e6479a81f0a90a8280e2a47ab332dd39176823cf9061975461fb581e6795574c04c2bc344afaca3ebbd37ce99771d2a80b55b6439', 16),
                    gmp_init('0x1c02b221bd84313d1685491d1550d40870988ebc2031ce62b8a119833547a5753e4b9597442092209dd7620b599651bf88493e1c37df56900826bd504bedebba00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118c2cda6938b06345cadff5ae51fe85cb49d6c2c0070838563b35cfc1bb5aea595c83aac4d00435d2ac5383ef921dc6bf058b89edab68d257b793d5f809c3c1fb1', 16),
                    gmp_init('0x53603d556e4cdcdefb4093262df788b6921f0dc935cf58e474ddd7bf98ea9a6346cfbe537160995040e217463d3c4419f18f4f82249e86bc511989e565b46ab052', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x10784d999349f26170eace6716e7d105c2959b7c4e2a7b458e7065bf2f94c37cde0cd82a50a3825dcb4254ff069fe1c7d978890ceb33f3120389ebd0a79e09d583b', 16),
                    gmp_init('0x1fa0523796c02b816ad0f1014d65cb8447650d31ad60d6c3787b93e533eb59c54902b97216d594552ea0ec1c4d2b9ef7822203303d30d4fb693dca7480bfaada7a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d54b0397567350001a33c474c9dff1687ec49c1b77d8c7ff3cd04ae2693d8c8e861d98dae9e778d2dd06c2f1f39775eeefe67d27e0e3d2342c186535555b9bbe35', 16),
                    gmp_init('0x18354d2132d53e3859ff467f9e0828ce8b572905d530194561fd2804385895c898b9c1f15cf370d149042f9b07d713a5bf0e8bb7a25ec01b5d13a01b07dfe70659c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dbf547f666fe79aa1be92b5b0719d0a2d283b6412b23b6bf714d130d75a62d7fb86c160b9d52b038e70e64a63411be4195300e74342f0eb97d7e4fc745603f4f62', 16),
                    gmp_init('0x151ac9296ca4cdfcc120ea28f9c643c84f9847186d0ddffd474c38889537d5f24405b24ecc17132b77c24e0c338051a1989c196a1c69de725e5609495e1a1364f6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a77459318ad4fb7104a5aa5a26df8943fa2e6143261d598a8f83f0033e00c25b902b6aa7d5dfa5d292a1e5e2dda59b4649de4d2e1042123a0a62e30f146b33442d', 16),
                    gmp_init('0x1dd48a9b12fb9a3c2f432d26729b42f317f7612f0c7a818de0f02e51486ca5387c63e87b5ab993051e2593a7030f886327047a2d5950d232f5d53ed625bd67084d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8818ce083e2db1770f8c2df32e6394de22f22825452a1b3f00695f7cce52df0599ceaec7a028e4255762aea2ee1f018f3e51cf7973d358853160b11099cc0ae72b', 16),
                    gmp_init('0x1c9f720012f577eefc9ef4cea6327df6ace47e078b14d81782d98113db2d2d50a4dd7aa3e7e6dbf9f7df4eefa600a383c7322fc813fb69bd72b7989f8bf4ba02f8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb6fd8f343eba4396b1f172e431102cde78fce165c3826372c08ba7b4d5dccbbe135e2594634d7ec6979b1475933bb48a7b9b4eed54a79e2a45ff6cffe1a83401', 16),
                    gmp_init('0x1cf80c87737e474ea109236e11764fff7709f270d1556a7acb676c30e858eeb6e114e05f75f9f80960b967f5f190e0e3c7380215fc752af1195f7d351a9b4f622a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80ca352c57746505b83f27d5c95c4f2c32bbff60c5242a031742cfc07c0055293f4c4d23aa233d26754a75aeb64dd512c0962ef31f65450ba4d3c4e96b03d54c5e', 16),
                    gmp_init('0x25df187ddd0fcb57205b5bf3e55216a4293035c3f8c7ef1fcad3aa7ba68af2a11295ad825bcc0d1e165eec2ed72e0ac56fb83a993e1f9eee845751eeca92a1ef30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf21b5d1d2a79f133433dd2d7c57c66fb1d202d44a6b461ae18d4fc46a291bffe1b97c831168af442a930bd6a8c208b86b542445a99bb8ab7a549238eb310bea8', 16),
                    gmp_init('0x1706181d1c0c3f593726cbbd15fb9c12355f4d713a358e5f39859ccfea158910f9af8111ac33af62c904e1b01fa9711ab88904b8dcd7eff1bd499343aa32ee37543', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18920aedd0f45f1cfd3a79ec707c46bb0b7c04b5048cdaee971c81c6079ffa11af25e76561a698113ac7cc416b15fee99bac97a5fe1d006d59864f8ec4c94dbcef0', 16),
                    gmp_init('0x832cac5262b38ed9437c8c2f6d67e5c46c68ea3c278a61df15f745612dabbb2e680440a43f8be307b9420aa4b9f89e63ef6794950809be2eb678e01fdf1aa0926', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8552c9513adfad31d050624ace261414e73ad25c5191ee1072a2ba8e42707dec53ff7a1af20becb4e391b446abcf3b6345bae59c15cbec8583c2ab59e873ada2cc', 16),
                    gmp_init('0x189e5ee3ae28e21902bdaa06e5fcaafa3fc66bd58533d305512d782f2bf2a993c96a5d3a5292f764f0bdf8d631e0d1e77c088ef090ae39784afe08f4efe933887cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8be3b0ef20f1f13c2e0bfe37f5e93f0a2a73b9708f88e8979edc652327fdde9d520fb75155b03819f8a482274cff511f32a1f2ba91ad2a396b191bfc95379208a', 16),
                    gmp_init('0x482483a44a16942c44f48ee3dfccedda5fb3bb1a7478610e7c1e23bd77b282d30cdd4667eb9d109fcdfa45bea70164564d6dc435d7872f25e952cd7f260e0288fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ff310a7a2889325fafe5e74c9266c8655970b8829caa1f54c100090dd1fd8b558736f0290ca718586a5d94a8cc1ceeed128f942b47cf0bc8eb1706ffe55d9dc3', 16),
                    gmp_init('0x1e13134ad6fd5ff9687a675123925161f67c4f9d4e8662005415a7a31a215c6321dbf69cda925fd95f56c209d40190f495781e086f41a8d0a304b0a8d9bae5ed924', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc85cfd2bdac466fec6504b1b8f7af368028edae6940031cab0994570fadc6d3f9963129c87d47409670e36b35e239110a63195cd4ad2685b0460ce32b9138490fe', 16),
                    gmp_init('0x1ebe653f0674ede44e98c821e2a7b1de46348f90dd91e5455a9b7b7b3b63dda41f9a100eda82824e162c5bf943c240569cee7e0f651df8244d0d5dd304e703de0c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9cb4cdc9adedd993d04c57920afcc0e297cfd8e3cb4c57c3f3042dcb9c65e154555fe9e7e641840f1f54ff9bd2fbafa90a4bf12ce42b48c455bc008f6f12853216', 16),
                    gmp_init('0xd204610d106f53c1d44cfd01f2e6b1bd3183e69e90e13257a35c13f1540f4d1d9da86c1f52c23154e448517aa5b5db9ea817f4b2c3b8821acf6b6ee23c382e05c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1757801f6aa97f09b103ee40e94717cabcc3617a82941bd5a4c290dda83eca548f750b0208b41823038a5e120b141cf01895142e4d31d808796d498bb74e6cf516e', 16),
                    gmp_init('0x1e33d751bf09a968951393b00f9871477e41d060a7799abd4802086426183d235d9951fb17eb8189d05423dcd56b69350993ee1b2a1790abe3900bc1f19e1e5636c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x126210062c6f562966f4563149ac91e387483b4bfdc11b9bc843fac6dda40232da36f409f1ab5785cc1dd379bc14e44b8194f83dbe481d469420bc2fc66a6a08edb', 16),
                    gmp_init('0x15d328f44c85ab9dd685e47618fc4abe2b711b368fbfcb7c955eae07417006a2a90af6dcdf5ac5716273a8c05a315dd9859800f66bcd97162856a00191e9548d9c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9efd040d70efbd1643e56b681221c9fe02c0471119d1d9cb6c2d31fb344abae1767ba1ab90144aaaaa96b382333ed8d9dbadb09d590905b6a77ac007ad8451ad30', 16),
                    gmp_init('0x6f9ba4e55bc486fbdacc1072285c271f62302ca446735bc119c340fe70c7e0205d982a2eef0ea035607dfd1527c6e955307a77c8f2834de3ad91c517c02975af75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf914255743d25ed3309b4c373e55b73112c81932552633a2056e187e84b306c24e5131968d4877e10268c05f76723a17800b13d3160b8d26fa1ea6a1b66c2569c9', 16),
                    gmp_init('0x496d04f86b8fb166bed93315f8585bf2d48e2df580943b63654f7836b0988a5592f846864f68a7cdef81659e91435465124d70fe3d1d2bf0a92b48db011aaa611d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1091b7950b1017f537be75fa17db760bafd025696a8f15340dde72e39c509d704df4f6122d91a42e212a059ed07d5fddaa18a138da8dbd9bd8f6a00d57da5e6776f', 16),
                    gmp_init('0x1039299466aad414479df376cfca4f572de331cef2678e129b2b4e902c3d1b40c405b890eecf3ddf2c66f3e98aec4b96ea10b95f25a8df112a21e1af3bd3f72ec2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95312fbd5e8c44c5e097f159f92a987a53f38d1fdf4b1919a9a9118e964cc4096aa3cb2aab2349fd6f09b1d8c0325e13f2e893e206da32023b561f1fc0bd779498', 16),
                    gmp_init('0x179727667e41adc0f2e21f3aeccd212b2a6e65d4ad68006fcfda32eb7987196530f88fa2a350a878ed01cd24613eb621752f40af5e24fddcd69ab2bd7d1e5dcab70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fbd558610ed4184bdbad7b1884a632235d68eaf3a92aaae84d0ee2493189ccf318a886b2111e33137330fa7d1d481ad453108152446aa973cdb6ee4b5b6962fcb0', 16),
                    gmp_init('0x168af8e13ba42f416667462977b557e597a5fcce7065099442f096f4643b12957b7888661dd8500c885829796153b27fa8018a6164dd8fcc9e6a0dda2af08a5de2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b32d3303f34d572b66e18c2d97799bf38fd27f0d4eeba640a9ec902c9481832e38daae2e8d6d07b9f3aadf31abe076bc9a0a84c4488feeeaf89e56bade1b0fc29', 16),
                    gmp_init('0xb48be6f81064d8f03b85aa47af8eda94093677b3c98591eb3279298a06df7561bd38b3f6c3dec92cbc01b7c33ce62dc71526f25e8d0648bb5253c93cd19d4ebc77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x432ea000e98acdd480aadaabc9d63d4d3828cfd8ba871586ad6e4b2ca633ae77e04858d6576e5a7464690f3b49b249829ee218a649cae5dc4c36252c7bd5a6eac2', 16),
                    gmp_init('0xeec33efef71af6493aac364502001a15ec4e64c9930aa813f9d96b7452c4dd6260bf7d435a49793faca0abe10eadbb3a6dd6ad676ea045363fbb0525eeaa905e22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e4bfad58cb2abf5b47241a2f1a40936c9e0865c310f553f1ee7714e6fac2399f950198cb73ff150b8e115baeac21c0008e0c3fff77c0aa23ccf5c8731b7339c17', 16),
                    gmp_init('0x1df8041b039e6fddcbfdbc273e138ccb8a2f65d5d6ce43d7f4471502c8c1500ff88e9f0a8ae1c307dbfd2f0391305461b0696ba35e4ca96dc74a21f9ad2aacb8c68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6f42dc53d4fdd557d118c8a1591bdf356222e0e1959eb8f15510fe4625bb5d7ca929b4a633e25e43f1d06dbe331c07d0cfa2c1ca4ff1c7c3d079b543e67fb89aa', 16),
                    gmp_init('0x1a68d7597d6742f98745bdb3c8bef00c1281bb2549a7d9ff858d2ea4c228e723c18a43c3e74c40096550fa25c3c8b61e4d0d59851764dd9889414525dd959d74b55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a353e9fdf5c87dfd374784fa993aa006af66aaec7c095ca4027aa898db1557986df83dc5ae968b102eda1cd04852730a8fb00d8421b35bb282159490461411af9', 16),
                    gmp_init('0xc65950415cba58206146c1c2b4582a7294ccf48970f9727719cc21a43688648ce15d00db3b652d58cb71fc595008b3e89c5676c16b910bc3dd0b61d1940e9aa922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3afd0ce8fa77373f091de351665116670b39bff863dbb481747607b94f488c23b82f29f7e79346ba14ed67c2a560e7ac469c12fe2732cf0c44ac52cc0248119ee', 16),
                    gmp_init('0x760bc45e0c82a9a0a6303d457410d18924078f1a9bb61432613ad0dd8b998d0f46581897d09fe988eef16276e883e13d93a43a089a213826839d96404bc2a1911e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a7108b516f8a1c089f44b95f088ce39abaf5b3dabe090ebac390a2c23dfd04809ff20673623dcab0e9e392618b748ccfebe7fb7b97d43a5c2160ed3d65aa10ad7', 16),
                    gmp_init('0x1c62c275b242c771cad153f41df76adfcb1c7ba921187cf690e9314d3033c901bd957998bfc439a7138d6bbd487076cd3b66a40dc29b24dc6a497c63e023de0eafb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fca96197edfd189e65dde8292f762f2d5ca6b8224656da7861737f7e4ccb3d103da9f958e8e857b00c6faf2bc5b703c6bf98d85ecf65b234544d5a30632e7633c7', 16),
                    gmp_init('0x3908c0d5b8cfae90bb1928a9cfe26d0b48bc2ce6be074d62d4d82da059cf96dd42e150fd8a6fa93c61c53a5b974c4d7639e40eab455c947718b17985934e6bc295', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1840e426f80c38329afa23cbe41451bfa8dd643ef152b78bb80c9d77b7a62734e68a50202a2e04c569ca37a76a2426c7e232d91f1a1266558798ca2b7beff99a56', 16),
                    gmp_init('0x1bd86bd48d72d3b87f3d6b08ef4962e9853220932efb0c79a562ece090eecababf682929f04bea4d8b07df37f246bedc1410a90975ac387d891e50ac47a0788adb9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5fe30b69d5b0c7bf4ff17524eda2c5499d3970525c605bafbeccc6f2d82bd9dc24683618323876fe584aad945457cc7e25d9d0b49a9c9593769aecae2d6a3cf15f', 16),
                    gmp_init('0x100e5cd61ea95515dba65a3d815c03a1d45a57a7f289dece9a913cfab6bbc02777655ac89ee9e08a89c15b655b27a1fff6d37159fb3b4fb97b3a71532adb5d073b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0dd0e9acefe0231ae1a4037a85924fde924c67ff96bea8f5a19d2becf5a1469b5eb5fb1860b2f8b7a348b163455939fefdfe2b3ed599694f364107659d44e9b1c', 16),
                    gmp_init('0x949c74537f5f10a7c1b63e677ac4db540a9824b4980193d5b11dac8246b3a773f0a51323391f4373f1e8729cc405b38a1c3ccc49c67e4a80a65b3f06a237cee8e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb404c89f2fb90ec0fc1b07529402b936a065b52767d80498e39bb39be48ff6daff295bad1c6f96a397bc887f720de2380e7f157a4845073c3921cbb2c74ce9abd3', 16),
                    gmp_init('0x150a1f2420ec44de629520c3e208fe270e1cee40b04fe0b055862dae8ae846ce4b08169e02567f3936ce1555bf8a14a6183f79921250e3e0bd447f62ce6f3bf4b3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef9199963d85e5a5027fbf9d741f53ee3c3647f3a92ef2fff0aefdcd39fc6d9e13f9c47b69a4c8d8fe23a9cf666fd3dbde5ad3cc9408dc8719c773faacbc875bae', 16),
                    gmp_init('0x160074d3c36ddb76ffa3e0b7a845f2f8052e5eb2de9568801daf8a2e9b101e1de48a9c1a33e62711d4ba828f5beaeabb8b1a5892671f086fdf5191173743ad5b178', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c99484de380bf5318a17e000c226cc7ab2faf593c7d457614153e54c207ddbf5b2776994bc94a498373c92b2521e90c6dd39648cec7f0214443ca5ae614d0a48d1', 16),
                    gmp_init('0x142c668fbe42f185b226992979931e6c453a7bb1b542c27de76a3c917af34e29cc440fd8d610e3de8abce10bdf08447917d06b60ee9f1e5fd327aa1d4d397546078', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142867d4d0b152552e620d4c8e79bef1085469af7948222107e6ad85c7ef75f17f1547f5fb516cbfbb1427652e12864dca94b5eced77e21e713953b8ca7af0603f0', 16),
                    gmp_init('0x557c17d3b223c1ef71b0aa90a8290d165feb2edc8340ca32231e9cc21e6d879e9ef7eb7b0e20d33c1776c5dbf176f8e575047c1bc015cd38c0bb5ffb0cf3f26574', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf975409d50a4c9ca6e22b799be34dba1cafaba504ae9e18aecf98e4cdc53ccd5f006b089a460b2e4de9d51e3a3477178b7f2230946e63e847b80fd3dd3c1e4a87c', 16),
                    gmp_init('0x7df386fed9ca01bf377d656933aeb4bec0b6c9bea0b517e55bf7c13ea9e0fed7622c8f71158be269bd083e94e46d1c30e8ed26be734c58c299ec619962617902e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc21ccfbf17e32a93cbd0ac2f8d6daf7c23b6f992cc8ceb431338b4cfe4a4005eea889980bf73d92d11512e973ed3e0c2706ca52cc16b7fb4901036eb9b66fd07ca', 16),
                    gmp_init('0x14db813b03625350cfe1fda62beccb07fe9f3b73e7d4d98b5d25e6b77f9a1237f4efc1de8b8cf39fbc25d0297697512873e82d7171595a72af7bd9d6f12f508cca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0e542877b58db90bfadfdefb4f549b4dcd7b51c19f12c7088bd684a329fcdec803a966f3c07e1c9cbdc1b161fcc3993df5b635d5de3f70bc62b675aad33c1333a', 16),
                    gmp_init('0x8d3de5f48ac997717fc6b51a1f2173b3b985d9d2b5d878396dceb00cd5c31552eb178d3f6fd7d2f42fc40968038ab3ec650898feacb303eaa2d7a8f7cbf2b37e98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ae0535999b6373459bbf3951812790b7c49caa9ab72a4a4a9fd4c40096bdf1f8a687c5279c608ef1dab3c8de1a054a0c45013f5ad50b747fafbefb8c9644f809d', 16),
                    gmp_init('0x143fa837cde26207a6e490dd67bf92b2ef0dba409b2969f77f76da7ac98e860842e68ff6f12ba3ede8bb5a76e592be108efc2aa9ad018b31f0aa2dcab70fe2fb036', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x114ce60da46dc105e9ef41b1b39764b38c8f0248235114992a31a311a6d0e41375b6c4b6ccd067309921019fc69abf32138a9c546214a4fe60cea856cb6b878c367', 16),
                    gmp_init('0xd069c37cc885406e8b81bc4e8876ac98924f6c0db09ab5d88cde4d4610ac5d2a89ca37bb0da39e9c5f0741f2c4ee61849071512ea2c86972bb6aa1e85bb3994b60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ddd321624427effe1ac9b864cdbfd6e3cae34fa50b55b600a9ebf02ce3403bb07b918011cd8e03b1bd7a99581d1a8164712ed4baeacba535042d8061ae51e200c8', 16),
                    gmp_init('0x1d95a3b6cf15070e85bfcf0b4b31a3a896ad2e6ac95fb5ffdec1f87d2e3d6fedaac42d55ff0b518922f7d2b8b8ebce49719c0f031bf48a0e903cfade4e193849908', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1363e550c0a0a72c4d4ccf372836e1a3ea08eb89180de352f4036a19e7c9d1b8764251833480db8508d1a7cb9bff4836cc0236eae2654fc372284b08fd1b927faf4', 16),
                    gmp_init('0x1452903a20d5f44b62617bed410774a6ab8390b596112af8392f56337627176ddcf9eb603d4ed515f9c229423fef042d8e03c78b22395bdbdc8e83af37f7b2ea82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17f88aac34883a0009667647a2edba0d5a0ff0dd2dd17e95ccbf06ac93932993c75e9273e1028ef0df32540e2cbcd90027e6b02e6822c778abaa5dba4e1352ecab9', 16),
                    gmp_init('0x2cb30988e26365ab823f220aba0a79bd8801c6eb8996cb7b14e9dd74b179d85e446e091b612c98fea0fbbc558fb0ac4790a3b6b42ad77e1a615b0503a0a1edd5c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26d74611bad1642ff75c27d38b9fc3b08133725766683f310cd2b77b3a3a1f736bd8dfb50b546daf8413d9fd10c3b75ad43571d10bb1d206b7aa272aaad19d50a1', 16),
                    gmp_init('0xda1e8323864a901cb8969e2682b1e77c796ee0ea0ac34e9a293fe1359af71f5257a45ffdbb7bf7c656312f0d734cde6546819fdb72ca6da656db5eee71f30e1c09', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x121f4c192733b78b68630d237734773f03e5f120b9b395007e72d5b3996199d74a880f1c283ec7fe6d279231083582efb03daae850de7a00aac904f2d4bdf9314e0', 16),
                    gmp_init('0x1db8c25790694a0a7f13609b0aaa56238218f52196aac8070691057771e4f3a8c01e83501b8cda10d951130380e83254171ae7afb5140e2bdf0f103ff6dfa8b51f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb87a3621e4b70e8cb28bb1876d90e34ca9c75f44e793ba8d141d21ea95dd708c8e68d77e3537fee05aa6f7fb639c0cd13a7266ed21f0d3b65ce2445c75cb0284f6', 16),
                    gmp_init('0x39dc2bd296583f0f135ab784f60a295ae2d7569d95a6fa426fa73dd94cb908c753a8e3236ac19f70a91800038b6a67f72c34b8bcf2fadb22390fb7c958e1d0f420', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16f160da4efcc23a672abd52586e8063ea06d93e2130a4bc8742538d1a8e7638892e7d7e2f9fe750171daec319218a399c746a52d2b120e0da6361df1a496cecd8d', 16),
                    gmp_init('0x1bc70c5338e8dc08c3b71d8f9fd114a29c00ee8342055a268fb88c4548511066348dd52dc069eb3abe2852f59f1280a60bd458abce1b6a4ad3c3fb480c9bbe499e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e11f633c1c61dd54a0e9480cce3e2cbb0b248675461520fa513340a26930d81ca20a0d4e63f9c7982178120864c799cc9f6bf54496310788d4624399658603a1e', 16),
                    gmp_init('0xc76327cecda7afdc593a79c26ee9fe597a62df74261446fc2b4b85dbbeb8113e6a52c0a70bf54a35341a146ea20ead5b7a242ea6950e00a9db34510e9e07ef7a73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76f71a3cca034c8d8e806787438122b50577019c95689307b27ffe87bbbfc0dea89a34a7c6f08a6ff918ec18bbe6f4b4ba153358498c843303ce0cafc12184bb7d', 16),
                    gmp_init('0x12d7571f38845dfaf642b97d48c21d15d268c6cdb31b30e4b29135ddbaa43f362dd582caba4068c336f437f0666dbe5a7b046829d4c9a22d4207426e5726774bbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1740c238449fd6cfbd4cce86c65323d4b3a0706364a8ae638216a6fb93716bc32550a31124e281f2e273a8ee73bcec86e4a219a3154046f9eca8bf9e0791c403388', 16),
                    gmp_init('0x131a19b3e630e6f9d2e0c5a98bdbcbefd15bf8972a2da093bf5e4ec80d2b1c5576ae93b56fdcc936d965cf4413ea5e0d98697b770b2579d75fb031202de7faa8a49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f684877c1a672534ade208fed59d705fc7c639e919ee0a4feb4eb83c1b076e1d790ec3e665e1c1ba700672cf27c05b4e3925bc9a303a427aa55255a6b2f52bbd0e', 16),
                    gmp_init('0xb9c854c7adfcefcd95b19fa90223e444f3af0247c572a552a93ac468e70c76baf3304194b0be7c22b22766d2ccad83b5d86a6747a68b6b1a537618e18f22d3e4cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10e12d843e6580b25510de9a8f2085495f90be6c831966229440fba696cd6a81ed893f8a34bba0f3b828df7699641d84048ef502f8a4c9caee30f73c85a8201c48b', 16),
                    gmp_init('0x18ad6567590afbbec44d402693f4e25340a51ac6e1fb4a19bdadccd32f0bab8b58befa01a64cdda697f4818c9d1721196c2e404cd9317831a13507820fbe51de678', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86bab1ed0834c8c1f34af2c82a763bb19450aaa5d989bc93898e9eec5f12c197ededab374df75f2edbb466b841f87cf9769d00325b8b587cffa03774256df2d004', 16),
                    gmp_init('0x17a1f3f06c8ffa9ffcebd2e29e45dee2588f4b45924f658852f367ff98651d80e666ce1c58db12b3058a447d3e65a84a9caf1c02e0110eb9fdf772c2059cc18e166', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c588da8f633a5f10daccceb672df41c3126b2825349a9f9aca786b09c6a3f8c7b995d455c4a564449a6bc714cbfe586ba6d1dcaf5fe29ad51d07cf170343ea64ef', 16),
                    gmp_init('0x1cf32594fcd676f65f908b9a493e3f0b5df5fef2fb86e2dcdcff54d983fc51e3b6b86ad242d2e4ce53a232c80aa699ea6c58eeaa9fb92362410f41c956600a865df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1885a7ed2de8172aa34b1462685c210bed2b83da9ac945f565ebd84c6666335b1f03bb76b95ebab304011da409876aa986480243fe9153fcfd9b04f199feb3b9f8b', 16),
                    gmp_init('0x6422e6b21814dffafb23c7e41b5ec69ee0608193246646d78e93a3be5b7cd3a6b7b961c8d738b21fdd2e6a2db3a228705900587991c6d4096bb53df9a4757115e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14452239a4b8f4e85efccdb0184404f2b6c4364f321b301dc8b7b48d4acff594c0eb8c83005284111f37a83f701fb3fccfeb69d65afa7ffda3c79541ad2f0258929', 16),
                    gmp_init('0x1a58fae6ec023e3413af5e8865df32a6e48926f083c4f4e0a76eb240aa88d0085cb511abc0b7fc0144c491fb295fd90d0f798b50e840aad2d931dd594a2f650828d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c1763e3f3a31abe3de8e0c6ff9ad815592da0c5d883b6ced78a2eb726fdb6afb3ddf9a86d4f3de64af53fbe970cce6e65ed12d5cfd634a761ca163994dc4103ba9', 16),
                    gmp_init('0x9b35beb4a2c3f9784c98178a7b5ee4580f98b2b3d86504a9ab9515ca81add2af63b509477e6b339c7ca6f869c9c94edc447d06e7879c970e02ba83eb37d486d571', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16cf4bf2786ca8dba24e859dac381092b9fa745f4a6f144b1b77099e416d4ef9b8a396d60549e0670bd2acfc7a2465cab131545b82e6b122bc8e038336eae697aa9', 16),
                    gmp_init('0xfed703da9b9cea45853d35806e815d063908b04d2778667d75c6b9837b9476a135d810594a0ee6598788559fc88b5c1e947848e02298994d0cd43fa47a1d8e919d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11556c2988876ef6cb35e47aa9d2cbd3506f258516f0c653081ddcd7c3378d574f95318bef1721478e7d866fe868b0f97f20c8a435c4db749fa4ca2de78aa026e77', 16),
                    gmp_init('0x1d60ab2850fdab316346cee7ca7fca72eb30661a249fc5bd37f3bd9249186c31afdc58fe1de836efb610cd62d0893b4394b26ed27b984791356696b6a6aa2b162c3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x12a0ed4082dad73df88dba377bb4188590028c343062434d0585d0f7b3a94dcfc6c4e392a4c0706c352f3f33305efc60f489e8621eb98bbdd05714c9d4d6e4a010a', 16),
                    gmp_init('0x1fe754f22b73a1cc818c6e2c8a0949389d138c843a264de0a0675c6667b2860701a41093ffe3a0e36a71831028ec8ae469c1638c31454319374c0899758fcdadfeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f1995f831453cc03f632405b8a3c311987e92884d50102ac6e83e4fc380affd1ac23f5ac39c5ec49444f5f5bcea20c664b7707006307795f258821c974a0c0913', 16),
                    gmp_init('0x1d712e8d7b35ba9db09fee5fe79efb9a49b296fd944f9c2fa5c40a105154c5cb3bcbd298eb0d04a14c3e9d69357a95c778c794b63d991f3efd58019071721e50847', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16b88904ffa7529c9fd3964bf4a6589216aa51d1804962eb33336888ad0a1e9a984c82ef455b781bc4c27e0aa5fc9a20e927d88866ed6d1e3881711039279d6593d', 16),
                    gmp_init('0x900779f6af77f5a9be77af93de72024396e1db4aebe59c5ebb7534cba2ed8b25e4a86cd85c3c75783551d18e8b44dafb2e8b9066c009c4315c9e0aca53e59081d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14bd018ce08a2f751cf40c0f48e189ce8cd4d3737455c718337748d70127165a2342bd1dd818537bb6247465db046e3e5cffa7c2a74e0c3a66c0d200089e0b8b7c6', 16),
                    gmp_init('0x189438d3544f09a0c6ca0d4dc89dee75e9d226693f7789bb1433fdee4cf5a15b193bfd8a1cc532b1d536e1eba1ebd4031d0f559e050a1cd35335513201a7ac22c09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14cfcae83ac5289829266f75278b8344ed2071b6eb12fbdc5abbf26d5286355457c3f4f25905c5e679a9de063dcda7c7652ae4874b31138e3e6f9573f8d640e6a08', 16),
                    gmp_init('0x1fc1df25657e8a56798253f58ce07278b896e4e5af7b91b73bf6d4d0fbc9562b680c7eafd4f089a1e10e8f88c7564985f28072f96e6120253a913b69d24c652cbb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1614d4a61be1ac0290e3b86ed771781977b3d1fc3f227851d6986d65eeee2ee05ab59710087fc283d827649e04403d5d78b0d232f2ddace98096df6776bc353a269', 16),
                    gmp_init('0xc608e4a467489d7de66e5b0cbe82136cfd06c039941115f60ab1c2f84c223ab61a547f0e86928b72c5d373ba709cd429a7026949097381541b2deac320c5400967', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11680d5ac5eb1ff9d7dbdb10aa62f3d57a7b4b5767ea8867af37adb74e4c33c337ac7d01cd0f8b7c551b60894fd6cf0c0c2f077afee002863a606fec2df700cd193', 16),
                    gmp_init('0x455b13488d8123fb585c661c2e5e096c3aa4eddfaccfc14923567e2bcf767e554df4768566352746c5006dcee9c15465bde3cbb1ae1912bed50e0df41c91867318', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d8348c70da08068bb375b7e2f1e5d9ba9036569b8d3352c5e858d144a9681d54bb807aca835aee3272b7a358faa30ee9094a1095a88a3ae45fae917a54a084d91a', 16),
                    gmp_init('0x432500d5a13f81c2beb23c781375a16c9fa9e9c6825a0022538a053df3c8bd817e0646dea871e898bd7dccf53dacf94fc787ca2cb0457d23d0c2bca2f5309376d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1630850a1bcf4db35c77744f891f648d6d2804d66c490ba81457c9fd678cc76b62b2fb14e247b0038ff8138fb07dd2b96b148af47286320e41b9861603e036dcd2c', 16),
                    gmp_init('0x1770503c0cfc7d17ee7cdde35a36a9587e247210a32fa8126f2e3c058cf187bc7fab13743374d2b208cdca513a22e664c764dabba6ccaa489918ea9969f03b00e31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fdaa0fec6dd668f313d1323f5567d841fb77321c34705a510061c9a1f525d2e75c44a47c81b73ca7ff4e8dac2ed65640eea8c4fc23d37b4c47c453eb71508e90a3', 16),
                    gmp_init('0x10e6e4a73fe1279c00ed893fc204d84636e538d6922fd836f0d5174360333ad9d1e639875a14b6d96d5cbf190f06e434887c0f70e0d2d602722043fc9301ceab0a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10bfa9caeda9925847911329b15af92178bd2d8c0f5ff0c374fd8461d477c06d65cc90bf5cd34a32d88fcc357f6959ce9e5af349bd214da10b6199b34ef3bbb2752', 16),
                    gmp_init('0x15130c5d150aa4ddb5656cb7f8807e68533edbde6f5800741af98ed72b8bc10fa2a5e1daa66c3c3aa065bd9197eed4b0c25811b5645c0896e572e9a0493134b0e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3965300c629ee5dbbfc34b918d1f92821202bc3c8381fad9ef7e43bda26b8c2a41d7544975ccaeaef83b8a8db4550d45f9c781f0ed556c4574e83e42a70e82b3d', 16),
                    gmp_init('0x153ecebd250e6922e42e0b6d4746660b8ff2c502d802381b0f3ffe12ed4d7886162186caed87e42bcfa10a0a8b4a824a72f57c4d7df5e2fdb5bf3b047ebff634772', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e5e94d85963095533b2a8876b276845761f1d78801389032197a42601180ec117310de71a7bb19f92584ab54edf46ea354071164ca9f18e66d92bede9e42a75da3', 16),
                    gmp_init('0x1ee6c013a91d1c62e2233d4062a05da2aecf36fbbb9df5933d33b00a095579d7f19fe08898d710f5a7a4a5522960c3b7b4084a21e43338291a3e36d22a0f232ecf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b9767bc18e12fb1a438743ae58378eff0756c6f968d0f38f02c9909d76a833be2535a921d4feac680124bcbcf9e8a1d583ccc24cae9e68d1bd824a2877c316389', 16),
                    gmp_init('0xd51f505cbe753f4a550b30d2badb44ec2d464d7d2173324ca1d65f8505fecf98854cb48c2bb248435c958c115029f86686c6586a588485b4acf7bf7dab3aaf331b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10abf430cf8fd7fa9bb3157fd2d999d7db5133807b7cf5a6fbe2d3bc7fbfb68a787419a374e5f3dc2704c7f0d4e3e1375007c4486c965a1bcac3a546d510307136c', 16),
                    gmp_init('0x38a6b3a03634b19c2a998b74fc1dbb1ff5fdec05fffbe93df79f3249b7614badb025b857c8c3b81f6e4584439fef6f2e8f67c224ea45cc0fda640f385a138ef50b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x19f298b766bf502baff71dfbe61ff32d69d860036dec00ea37fe2bc81dc3a2e50cf67044e551d6d311d7356696f6ebec576d8e059afad92d4557facf165d19906d0', 16),
                    gmp_init('0x18b5da8a689d1b5758f0f6fd3ad7291dd9dd71cf71f9cace4a785bfb398869c9d1772dd554f75e5b6e35025f960b49f6a95d36c35835304ba945e5e123901bb03f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x159b4821ea3dfbd3ba7f27b31a04548c2a8fbfe7ef011792afd225b339b2de6ae78f09422294e65795aa3483f68b56ec127f47d5cd15a14bd4aabdf1b02db567888', 16),
                    gmp_init('0x1d5e4acefb48372fcf30fd1b2463343a72d3dc587a50f09347dffa7e30da9370da9243b17ab43e33d8d345900c3596ec79cfc6eef566b243e38ba06333ca1c887b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19acd5528fcf1097b9bab7f4127c26ec42b5b52a279c14896744ced96c54e1647a590430fc6c52d4964b6e681492477aa782be2648633764c9299d91691af8c8ccd', 16),
                    gmp_init('0x1bc15df0d2948aab5a7b74a3e63e2ded22436288135a3145d6b6af43e953a3e11a7a42230c8ccb91b16adcb0de0ced832459c82fae9635cb4ac7785add63a47e5c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82643db0530d27351cf74f853bedbecea9445b182dd66c948d1103bd6053851649f9f6a27533e0bd85eadb13ea914ae0c9d497ab4fd302851425455c2ae3e97a29', 16),
                    gmp_init('0x1616e1021d7e76deed0cdb9e777abad4a1ae87e464d1d1e7bbea64f74fccb7e4c42e0407f28d3e4f471865b3f9ab2d1a036421562c371495df1e5ccd1170fd56cda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d73ace7b901bdb3cbfb8b110f04eee13ec8c24eda75953ab03b3bb20850c6f4b4b90ce47dd94597f7d40a3fa3c98080868b3562a0b547a1efa089fbb85b7f279fc', 16),
                    gmp_init('0x17f7ab7b9f169ef398c745c687eff822e705b1f59d02c588c8a08d081b563f405ae15419020a9dd98a33b56649d36ded65543efeebc6b2b599233b6b36f335c7820', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d1590f29972f6be510ca1fa245d5ba46af0888ca79d250ef1c67032a107626e2df6ceabfced9cdbe2e70422fa0123e901812b35cd301788f64568e60bc840e5c81', 16),
                    gmp_init('0xcb53e59adfa71241b2eb7e2084a30c0fb99481b843e7e83b8ee7632d9b07011f7a662be2ef896bdb34d2b300f46c08e4873ae5f4ac20d42c5ebd6dd880f2a02370', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f429282dfc9948690432b645fc178ed78417ba195e0feaa260445ed8e7cbd094d6083b099c2e4cbc5867b77a3f2322411586554f1a810c99349d93794c2911aec', 16),
                    gmp_init('0x1c1321d171a8498816e34efeaa3ef1843f8241e63a0abc48f80bae3dc772a7c0ea46b0a12a618c34d71ab804fd7dca96fe210f36372863fa4c03045657baddc286f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12859577407f1031f193e55fe53a3ca3ac12b7a6b60d440836a4b025cb738704c658a062d759a62e3d2a0d66a21d525e891f8e49cdfc03b5ade26e479f9b9b07fb9', 16),
                    gmp_init('0x1a110367dac7150206b1367ce5c88b50de2e6c88fe2b1dae53072d7ce9a7f9333c24481152269f7c258582146cfa19f4f45aee5a2174dcfd68ca5bb1eb02b4edfeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe76e286b36ec5deb30bdae235886e6b29e0914bcf0c75efd736f82bce1749bf03ecb190c6f8a100ae5bf3805805488768ea2cc4be40b01fa7ed210619a37f4b554', 16),
                    gmp_init('0x17ad9eb893d309e2a542a51fee0dc0cb4faaf63727b5597771b74bee7cdc025f4abdc5bef4b7afd88701ee5c4e556edfb3c0702453df93ba24ef4eb4fefff080663', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118275ab1ad91f11a8984ae1f5856dd48e0a283eb52533f6f749aaabb26cb20ade14021306519e7773614d27d7c441cb94ab8571f56009d1d74991ebfca6cd7b62b', 16),
                    gmp_init('0x1679fc32ccc1158dc83f878375da40c5fd023c35a185f066ef3571ba872fcde5b45610f8313f1cd4bc6f6c5a1f94bb28f39036d46e444f0a7a161f3c5b415960882', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1682f36ec8b2d0d3135c010a0daf75b0402307d234bb0541c49f90993ec5b5d30e95fa4dfad28f6b922e606ada6f74f9589e5f57d64c29b374486d444cdd1d81ec5', 16),
                    gmp_init('0x1397aa44454c5c0e9e305ce1210fcb67a221ecac9bc6f918ceb21d6dddc30b6b53b3f7ff15d4041ef68aef4c9a7d74ec2157f7f6c94411faa6e1ebdfad4b51917f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cd959b9f8289e64275325d4796e2e981d7742e3f1cc16c90453f237cca81c8d033a1eff07ccd5750947047407eaab0d6334aee96bbfd0baafac513c23102cc86b', 16),
                    gmp_init('0xc42450d9f2a7427ce0bded219b40b61e5b8a2a198693beb85201d7f210003758e27c1f1f6e176f2f705adf2f3f002a7993d17e0d5337c5de443114735e26f5e6cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d74318724ee35919fa589dce4ea0969d25b6115a026241e88ef296988cd91221f21420872d295d8438661764327517d749a1379684d227c76efef846878597ca44', 16),
                    gmp_init('0xfabcbb41c51a3fd6a8aeb05c6bdc6443dfc76e87f6a9dfe8eb62b1149354c5868821a520ca7686967b4318c9929e433778f577c2156900887f3ea462a41fa8073', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbebee71f220ded25f9a52cba20db27d29be3d584f0133b540910ac9bf8e1dbd9d26f1a78a3d65751b050a99333f0d69619bfb489e37fcdce7c06bc23ab58dd91bf', 16),
                    gmp_init('0x1cf0cbdeb4f3498ee1217f9acd4c0a3d7f5c6e0722d551bf7fb2d0ac7ff26dc8f0bf5d56504b292eaddc6cd12c9915cdb88ea7e04c2752b7a25cdbfa2cb8d49e1d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4e35d70c5320f1858a977818717e5fe3a851d87174295fbec920fe521ba7f7c5deb1abbeca846c244feebefe53097a6e6f048760b1294d568d2b73570149c225', 16),
                    gmp_init('0xdf1cecdf34e23f8dd3a8afbb755b08a4413f2873916dc8aac17b2e3503d419bbff29b91cc4f96a64c45574b72696ef1cdfc526e5170414bb4cc43de63bfb2d00f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbbd5992943a64c87c12ecd392e213043aafceb6b06145dc06e3d9e7c4cd5131fccb572e666d728f9ed0cad8ce8d9588013adb57773b8990b869cad3ccc4d6ab08', 16),
                    gmp_init('0x18ab5dffb2061ded0b89df50cfe73c2ea59836330d2b348c3fa12d188e8dec51bd13d25a64830b40833d3d853fcbeb271593aad9495547aa6508623bdbbf6ea9cf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15e25074f6a9bb3cfde62a7de67b5a09597a7658c0afeafdc24b37b952a226742b6002631cbce2557ab3fa4154e90be6fd2eb792fc5d8920cd4e843d0350c62942a', 16),
                    gmp_init('0x14df54231898f55b804013371b1a07f0747f31abcb1c6d80c86395ddee3b6a5cadeac0ca35322313708dea411166e4ce6051187c8b40347dff1e6db0f49d03cf65d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142dedaa28cc815c6b24edab84ed86b2664dae04ed366edab88100306bd9f168610921b4635945b6410afb9250d8ded65a4c3c560011b132b2c6b8f830418a82ccd', 16),
                    gmp_init('0x14ae557332a7e7082155402906b30343153871cb407c9d3be58289c33f24aa372c7419abd8ad90be7eb8859f1fcf5fe6eff022683f8f11558cdb8265f17b7161c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac6de75cfe2e3338c4759238ae33a0735715c1f4fd97f946a498ebd5d42b374cbc266c2a626ebc6b8ef96ea2034400b1e396f15f13560cc12b42458cfc40817aa5', 16),
                    gmp_init('0x50c289274db7fb508c856bb7987e6a19cb77bf520edef7feae8c8dcec4ade968ffad4c4a562c1673c2ea587fed0497dd5332228f5f72566188f73dfd08a1d6bad6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d67c0d108f7d0b065402018a3b013f2b8a29bf8b275d34d1877d1f3fab033574b71e6585542f2744ddc901285bf583bf441fa840a3ed60926dbaa18e98ca0544a7', 16),
                    gmp_init('0x137e4742e75ee4c065b59516a7714307848aa441386f1fda9859d59d169c56804b5073cbc982e7a7e9519b0979a9cf1059b0faa53c0ca2bfd056e335f2dbb51651', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x875d2dfc545d0fe6c5da1c858bde28c9a556a9874c876ebd608e263a070226b719b076a14b0875802e0663934c40a47e3850f1640191774519fcb62e6ee32413f4', 16),
                    gmp_init('0xec83eeb455853b23608f61429213b63e387946939ac8a9bc08a3278cc6efbe83ac4dc5983619bc1ccaf350e279c96a994550c49512befc1af00b8814f1f0c26523', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x185230d81f0c266e0c9bcfcb1c04d59454f639811741c8e0b0d73e763435d55893387759c0c97e84b983e13bf095772025470731e9d45cdaa3e956e5bab8d439a2a', 16),
                    gmp_init('0x1dc3da19301c6ca6f095454799442f1fa0e0a88db639f6e2fed8276397c21e42c9eca611ebf50ef338c248513ec23e6c8d7f2fec285b24d193a21f9d779bd01132f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcae4fadafc3e2a9160b534845b48a2dc2a8d2a56eeb93891f0722f1be3290d231c1fb69ca81a5b21ef1623b9df31b2d1fe8aa13ac5ee9eb4c22491a894de6bafe8', 16),
                    gmp_init('0x39950b9c149003a47233000d288ba3a593984cb5bd31b97b4f529817cdac64fb7e21767275bb5e0dc6ecae100844caa3d9febda319e8703f937f9d50b8810034b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x149ddc14c9cc56499e3177f4d20f759d03b9f2703d48f75cad22623a8d5e2b2c93fd7188da743891ea1b123ea8b67de6bb5a5fd9a8e4f86c85bee00454fcf158384', 16),
                    gmp_init('0x17b23762115908dd76e352924849661d65b6c211926b4d2c9d3d600b21c46c20dbaeb9e25bb09d6b9fd8d30b461afce87f5d235918c0126a5ad8ab6448ea0ff38ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x154ef2e1e17c4a2cea2e0119e3bcb7f158febffe06ecf51f691231ed6c674470f3158c8331b16d83bc53985b7f669a2c0f8ae1b101fa8621712424072237100e0df', 16),
                    gmp_init('0xa00b70692a6037a39b6e8bfc0aeb1b31a6e3b30cb84b84bc38831d7d3b625a66d51692cd4a435636f033ccbff30fd8de03378b472abb77547e8ba3486353540b91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa23c24173a6a2a98d3c440931cf923a04bf4f5a56418a4c4f5af3a8db1de712b34c048c66f05d7f4ebc4fb08ea040ddb860f1d0417e5ef8c80465266254cceb5a9', 16),
                    gmp_init('0xbe12aa4c74c61e39f491b0d6c93cc69bf95f8c832696408a7f51530a59dc9037fa8aa93f11b77432830170849e857670b3389c0b812c19359964e32f8288bd9558', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1769e8893a5885daa21f7f493eaa8cdbdf0d3b86d669dd56696916dd5e026d371eac3fa06e198af1bef4304fc4ad65b82ee440571a1f4033850b4896b196e4e5f05', 16),
                    gmp_init('0x6cd72278c55a3cd5cae885b08bcdad35ebd44f6bce9baae9a861b02cc7fd61299fccdf17995b24ba4e664de6960a04ad7c78f9fcde9a96de912848b2e4487fad4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14da3d690d7629505e9e94a570e590a2b757c478e0d237488e4769f7d895aef03ba591f9d425050d37af804ee4bd0fa8be4b9efd19caaa2f43c08b49a24b2fe8b27', 16),
                    gmp_init('0x193d3b67b8bd73a3a66c5d1ef6abbb2a1e99e421984aa7380d6c79c06477f12e1e5b828e0d08816361da3e086125a38a19de5d0239b4c36aeca9a12fb5af168cb7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86372a219fdf837e67c7c99aafa58ba34487f967b98702b67c2f2520d81de2820686b02fc1b926cefef1e89ca2d4888eed6f696b113f90e4c9992f28a5f62b5b23', 16),
                    gmp_init('0xf4f6e22978abde7ff5b38949a3330aaa68d259238f1b0302127d3a07cbb7627facc29db220c2060336c8ef6efb8982e2627b4205c59ba55b49db9ba4acea65fc6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x117a26631e300dfa79f6480186c227789ef71fdf6ad0308746589234d4b4277e0cd815da575907dbe27b30dc5f608afcc16a9991aef60b83ffadc9ab8d676ee601c', 16),
                    gmp_init('0x530c9a681bf4b48f54ee2964c198e1343c51630bf3e5e8591e78dabb642ad93327e4f286c680acddf7681dec04cb682c5c8bcc73856661d17ade0c4cb3df8d677b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4db4eb7df03606713d5fc9d992c6ed3e7ee9e935450cf6ed2fd2d24df91e689f42e82a41fa50c2d855b29b791e74871eb190d950916c05a3e25e94c2a2a1da3c44', 16),
                    gmp_init('0xc9c6ae2030131549b3dedbfea1cdc8214f4983c6faad95aeb2edd44ae051eed55770e5de8cecdd8e37ab47b9eb171bfd3b908d539e1d16d66c248fd9d72099171a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc8681a2c6641391fb7060550e297aafe99a8154c3d8d64e3f031eba68a6bc77906d768642e42af7ad3073c4caca8162a14421108c849ea0b1ff25170724db06fc', 16),
                    gmp_init('0x1ac8bc954e8e8d1a73f25b1c5c8b43e90862d1212a00a6dd3ba42b47bcf0b32198999a891aba47c7580d3e75ff52869a3ae3c4e3c42740f9bb7e9e76b16e0675e14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1918edd6edba94ef000f98a36d50dc84f3c5278eb6c4b8ef144dff68f3fb81e3ec3e462faec5da54ecba8ce92fef6ef3e64898c25ba65dd482a5c9da1422f134a93', 16),
                    gmp_init('0x34432728e840d3c3ebff600116ea42174202b03dc6c9ee09fb5b2b77633df6d9a60136f3eb1dccbbdce7f1bf3328f73251102f1b3a1a20b349738606c4ce8f5403', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1876efc35ab5951222ad439739f8faabc587f1020a8daf165e6dc47a3a63e931aaea6bd194efcff08c2f58ddb470c3c51e19ded182eddbf94464bc6f28624374dec', 16),
                    gmp_init('0x1339dafe302d1884045c476e3a69c7b3d530284a75f3dff94ea64abbdc796cde8650283243a6b8d13ee7b5853ee397280ba9e85afc9acbf1f82f15ee7129498152e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142dfa66d197583c05a60863068b6144f4ede0c7d81bdd416b90359242c699656b316cde99b78c47fff3d2bb2de05a01ce547eb33fb690c571a1d7b9b778d4fec63', 16),
                    gmp_init('0x1262a8726b1e84044c35baa01d5872dea1949d9db4c8480de3c7f8147a128f4caddd4737bc3a8747ec7a07608425df33b07085cf7f6cceaac0f892f8b4e8ccad1d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eb3302374938f26dcedd79411447319eb787c81269c3ad917544febe5e4f7f5443343bbb0bccbeac47fad573e89bd9a894df16baf601c2186e19a54eb6407386d7', 16),
                    gmp_init('0xdcb30f7bec6fdf48dd63f9067ae3b3b8ac7622b705faebb982fa56e665828575b010518e7f397d8d98179a5227852022552ae0e96a1450357ff94f891c1f1401df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4ebc865b6dd1f4bcb6ee4570e2599d9566189a415c2fbf1e69b53a9e63ab29b90e5a6f518a1a6ee3a1a42769cd42f4897438195568ed22f87e5b551ea2dbff4f0', 16),
                    gmp_init('0x19b92c77d2a403e594c0bfb71e4352b94351308f3d83501d709d09a8f34b7bfb4d5bb945d44caffda4f3f4e2d197b5a2f8c3bb5c48e7a8cdc8466abacd8843e4791', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f694587a5a1295f3f172d0f20b9e21078c01d952cb461d14e5451bdf5047ea02c7b4255bce490c0301f93cc126e55dee989377c3c73f5d13a9e4ab8c58b327354', 16),
                    gmp_init('0xbf5f5f64da9e8ca8b27685e59c5cce9dd78126c060a9e2c73f0fe2e1ca08468c102490f12bdf3ce36f5c17104e2ba06bddbc0b846fa3bb7f30d54076270219fa4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a956c6fa5c0e2cb3afcf3c90a384a189da6311da25050a2a88427e3b7aa39d6e64612b5b20f6233c36723d65f591afda15feb9a3a51af464f90276bd80eed122f', 16),
                    gmp_init('0xd2240b1df4cc582bd201ef726f8cb06e29376b1f96e540d2b43e7ab8c3b979486b712f91a9956eb88f8b3cdfeac1bc2f1acb8cfee137c71ea8665bf31000b63fac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1763f793f136599dd0a35114c8ae1aee1b5afa90094b60a780bcc669c51715b9e239651650629f3c1274fe924dfce10f4d277bfe297670bd3e2d145eb32b6f1416c', 16),
                    gmp_init('0x4932e88f1499a3fa93eb0a15c7275b0b94b001eb51446ff102cf717312b29a531c453838bc27db09c00be935b6eb948d5cc018fb4737635fb9f098fa02bab41133', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc19921ec7010409988f6de27c4b102e1d0c0a69d7fc37ce4cfa11db26cf8766d4e9e2e23d5074b981cd925c3a6049c89badfc4c696230f2dde5add1d5f23342e9d', 16),
                    gmp_init('0x9f7ebb9fd48146381dd8611580758300c0b3e71cdb10d83cf88644a3328e96ea2fbd91b082ad080bde29f760a353bb697d2bd9a65778871bfba66b32657b6f0de2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe047b048ec173d8d3311d6af26e8db7b2d7d291bb65738ebed8f83b1ee249a6ebb4397647f18dfd382330e1c4c707f25abe2d68ecef726d3d68c9f5cc170b1bcce', 16),
                    gmp_init('0x1a3d173669eeec3c0e4a203c883d47cc84809c2381a7bda2ffd90e3017bb5adef070f9dcb4d5900125b2bccd7f2e15251689bddc58230ca273616819a7b1843c807', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11a8848081a56ffcedbdc0f04db0e66af1d56378ac296c41801062857c2a8e816fce338837799bc8bd48a43a25aad2ce3adf4d31ea30c863f7af1321a601f9d09a9', 16),
                    gmp_init('0xf1fc0884fe9c1d2b15527c167f49239950b53c487337aab2949c4f4aaf715983bcbbead00b43243370e10dc94cd3e820fe85720082f6ffb469ea2a3e6060b59a1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c87a147d79d3ab942413e8d54e5260f9550a74bb730c8107e2d0e4058b608882b8278a9e9c2b0ed8b6f1133cb0efc81f528d40f1e22ed5e708247f9f991415b5a5', 16),
                    gmp_init('0x19cbe9062432116830e972a148006b1efd54f1fa055014f5fc66e9d00da68c5590bad8fb8dd27d8ba5f542720cc8cebfcefe7a018e054ae1fa0dc0b55a16f9ebf4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x140b9c77024ecd64766705fdb3fb1e1d2be062c03973ec5049f0224cc9f03fe3388db9d587e463e4d69d921c77aecfe34196ee257dc65396af712a5b6b9d51ea4ed', 16),
                    gmp_init('0x1aca39b6d8775b26d922d3628d4193ace4cce410db03bb3c32085137b727a1313a2d5285b3641b37630bd54081797ce9a6b2eb3bc1cc0b49c599591f031cc7fc0fa', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8bce872f0a0b276b4c0e9b59ac4cc73cae744594a9d20c8c896e924a6c9126a2000bc82320c91a620a9dddb8ee79df75d18c37c58a8c518c3016bc33413fdd638d', 16),
                    gmp_init('0xb87ca32d0e631ada96acf01355718df73d43df03574120905cdf7da33d61b597ef89c0fa370304d219e7891b5b6c14d96e95238355e025609e651f74222c35933c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b79d5ee3ba7775dbed0305b1595ba3f0aba8d7b35bdd3562a93cb8c87b66d8dbf880f4cf1b7b847cea0a535c1f01020499bbf778ca1027f3cb5249e953d6ae5716', 16),
                    gmp_init('0x18bed9bbbcfc4be835718067e79b9e5d5b82b2d3317fd2c047e1a188a83746abbc36a1d5df0f8c4116f6aa6ba5f0b21f5c7176602a16790efcebe2096494e5050cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fefa0d5d8eddf2a9ca63c714fdbb94d060ce91cacfda87d6a489e0254c1055a3fd301f31a60747dfddc46bcac1b75fa86e7b399a0018a42b10b3b410e6ce8b232', 16),
                    gmp_init('0x406d197b9de1319ee941b3e026a2a864eaaf7fdb472df19f35e16710aa19facf24993393664ce1442f6f612742a562804319adf796d8c0af563bf1e9d2b2ac620', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1364cd77a80641ba885f3e29bccbc7779ee77d364c9e1f5b52f6978c653dae05c8fe74b7349a1903dd7776a1eb0cb8b966e9f8da4f011f2c6a5f6a2bf97f0ab06d5', 16),
                    gmp_init('0xa736f359053d7da7aaa64963a56d95deeb6398cff0528e16ff83aa1612fb69971b1eea500edc8380937b7302bfa65c96d51b52d0b7d06dbbe6c79b648f9cb2168e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb52c221bbf7b67eb42d9b7eb20d890f2870a11e94abda4f60db928c5560ad0f79283ca85d258d116897de2e4ab7e3f9a88e6c1d433f8109887f45cd242dee1954', 16),
                    gmp_init('0x4368c23ccd6eee54537c2241bad465a045ea62fd3f1df87dbfb557081af4cc492a7a94f4d4b366cb9c31b1ba68a334e1c3b3d7dd5870f18409eba58c5eeac0e2ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6ff7b8f1de49442511162327079b086b8444d8a7cdd1b7d688b3d9d63b32319b7965b2d13baa2648bdb2d54f646250f606e2f20dfac9c0656f5d6e8ed094fc6f9', 16),
                    gmp_init('0x408115f3a62f919376c048fff3ba1facd432316a1e231c9d35d624de0c2633ec9a58da5e1b2f8be6d9ac9a8f7bf042b0963bc785c70bfef41a0133f7d01bb66aaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1914a9a6d03bdd85edc31d82197bd89c8d116f789946b98135a6eaeaa3036190b65a17b862fec8821c0ea11e2bf06451f82e3d6e9126a3fca83114b122c809b1a6', 16),
                    gmp_init('0x2e47fdc42710d55cc9c2d16b2772b4e576999dce130fbbcc167ec53daa5ee1a1eab12c7fd1545f434fa1adea20871a7e831daa78db672f6d82fd626a66ae211b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fd43f2d1ec330dddf839a61f18ca809a08af6a3b362e764c3e2fb655e044610fa6cc3a161513e1c0e66f8e450afece34d936a8a382497ce05708003f83c48aded', 16),
                    gmp_init('0x1ebecd3eece5cad05421feb20ee42f9cbe5df3d33119c8cb9c885662743c504d91616f8b677fd22441c393c9f0876ac04685d19501bcb302bf8f4fb698b7acee1ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca9cc740da43706d3c2446dc63e6a83cd1d3a7d5c612d2c16df5da4d3327ef408cd58b7469696baa2e59f7c3d8b59a29e79c5877f69ccef8f0df70a7cf9dbf1ea7', 16),
                    gmp_init('0x385107c4d60cbcf282051fed46722ae42961b64849d7fc502d5d961533ef62c509bf35f20ced20367c5ac06c624054cae0e3d9678635d7eebfa86fd40f72e67db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a54b511aedcdea87a238db7dcc50f27d9b8c40e284bee479ac757bf75f65ca08ae50ecc25e233ed98505378df30e9001b506904f7fc8ab7a7ea3e826699b3f6f1', 16),
                    gmp_init('0x17ff3e400ad0abc2a44395c300ac9e6a55fa18f05305ec37afa33d817036477d84cbcab7e548a1018a58782a8e18e34fc8fae17d13b07cff35d7b5e770f9747deed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130d5429750eaece2933d1ad35e9fe214df3fa25da9d02098e3ed77e998e829db467973e3fbdac4383764dd465d10069156ecb2faa969af2f787d918578c2fefc5f', 16),
                    gmp_init('0x915bc62269dc7bb3db084bc24ba5550b52a9b39a3f46a22332b9820b8a32932e4a5f6ff22439fdc0f5bd2ce00577db45a4383ade7f311085a24301e9ae8b7372a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d99b9c1edbf209981089cbd694c96ea2bac95ca130e45adb776440afad56e273a5d3637e69764f4b5130e24459ee38eff9862c2e5ac0e79387a9c120098d6d74c4', 16),
                    gmp_init('0xa234c52e7caa4e82a8e7d794691af3b3ed41cbda9e88bf12f78f16dd03e7e9928e360e5c32ca366bd54d92c48f12de8a115612463b7b90322248770298e474a5ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea8b49a66d6bb58d8056a19385bd347e8ba4aa674b8c93908ba25b53907fb404a09fff616fbff788ba74e80e36f1efb9a6d6b988f5d9940374076f242b18475312', 16),
                    gmp_init('0x1d08a7d7ab68318655e0cef971397ddeec4f4de3a9587a8af106117c1c570674604bc0041a43cdaa6fa7cc07783a00f4bb4951072d762068a10959c25a42119189d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29de4292b573e41af1b7b403f9daf7c1b7ab730d86cb80e1a3d25369290434a0eddda8ddc96e0938658f666c3e75bc28504456def4d5add895b60582377dc9bb04', 16),
                    gmp_init('0x19c978c8b6b2b0e8587b5457407305659d8da1a25bc55bd1f9d4cb39b4f23a9d203f4280fddea8e86dc513f498a0847dc0068f0bcf3ea51cabae44966f5e5ab887f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5840df84868d5c1b8af61d1369d003412a5370abca1dbd96c4771c8360a29c04bf93447ae4f4f7c1d551e6d5525969ab23ecd2eba43e4067b617b965fea5afd6aa', 16),
                    gmp_init('0x1f7b094ce1254ce945fdfec76cb952b34a366d45c7c337e31892cfbf019c10cdf62330921cc31560bf1459795f0925f1650f7f4b520de16b2a9e683caabb7d66561', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x104e430cd86dbb7a64fac80124a0b55a4531fe7836cdcc2ce9a5ef3efa8c4510c8bc5dc6015f66297369e6c6a22cca5491520374136e9c2b2e28756b00a9f004528', 16),
                    gmp_init('0xc837550fc24f714086850d8439fecadde6ee0dca498c0171e8a80cd923e911d8d9ccc73ff172958d918df754d6e4c02621a80c7d7e3a6c90e9939b5896a385741d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1df8a12c7f513e61ba96d59a24739975957b7ee978fff87b2b71a8255f86a5d661ffd49e8fee35c62e59eabc22555450a6b18eeb2d3e169bf948323b86fec088bb0', 16),
                    gmp_init('0x1c358c9be06751a909445442ce577e7ef69559db4a5fdaa76a82a797d7f79ede4810b11b88cce7e39dba41fc20d861375121fa89924be16d8d61a3f3a2b30ea34d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x158cff1ac948fdf6c51b23528c820cfe9224a0ff701380e0baa44cbb50840a31067beb75310eb3feee026aeeddce38ffa506ec954be4a9a5780a22790ae7d5e235d', 16),
                    gmp_init('0x19b8ab0cf8eab3aac421b1bc5e960fc5f73401010b56b0db694b37c10521cd6c51af091d3057967a5dc30ff9020146506d92181a99daf2d7b4d80acb80001d7f58b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b1e8bf414963d233f5372b805997cabff0b55da4025a1142995067a8b6a5e6f060c7ae217a47c770ba99bcd91c9aad4983f2a465db6891510686698e89cafe97e', 16),
                    gmp_init('0x666dd991b89554f30c866c31efcf4a5cebc6dace8ba0f4606888a7d43f557111dad276e441b236cad6243758af112c0b657aab5a01ac96cd261343ebe6ab613409', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9213f3bc56d80ebb132c1eb7e2a6f8571eccb379b76223fd65d3205108b2059c918adbbb43e00a7e7bddbd3b0b0bd90a8442f96bafd3f08076b7c90bf85b923896', 16),
                    gmp_init('0xa7a16e5e67a2476ee5c1540070cdb03f14af741f8ad2a17f6fd8b64c225b5048f0942328161d0c98c44cd660823e764e18aab73a1f4aabdcd35e23bc738d30df11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c43d5777e784e7205caea7d3bd2d56e9b5ba05233bb6c34257dd1a5dda98f42d231b29e5f077776b5b217420afa13ff567368c5ac029036cfdece31ecffe1d1b82', 16),
                    gmp_init('0x49b735f780d372a66872dd487ad2e5cc676937ccce0ef78eab9e8156abda0675ecdc603246dfb5a934fa1d38a48117a210c479b9d64a1b9d04f4dd56b5e7c6eb47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19c703080027947b60f98de02c4780253d64162f0e9045c32861891fe5d114fa3cae5e69faa0df7fd9456e497fe9d7f4b0c154f4d7951fb8606c3b2adb729fffdee', 16),
                    gmp_init('0x913d76982d2419e4bc3ee00ea9209b55e88446925cae1e52e9567474f26366bbf5b2c191d0bb01302d6538a301b9274d4fc663fbe72d32a857e77f7b12a9510bd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15b86deba3b84e35e2fc7f58410febe47373a0afe4bc53efd4f96d6c877bc852dbd6557006ba7f3f38abecdade76e9ed11da1c389cbc1b25a0508136cbf025189d4', 16),
                    gmp_init('0x18f2ecc8f1f4854701348e990d5de2f2cfe683c748e7d876e79cb8f9ba5425ca27614870fe89ee7b82e2e0b263e8fcc1274379735573dccf20296256db24dfa7da8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9dea919df3bdc3b1f2eb81e9dd5fbc51a5a1bd25ce1517a23830502b92cc7922fe404b6424783bb97d6f59000813588c316a1671e23145554f15dba0d81dbeec0a', 16),
                    gmp_init('0x18a8d1dfea98f87d2d08472dbd5774c6ad4d7b8cc98162b61aab2f7177f3065ed39e4f88a184c6ebd7db47ddc1ad971a142b908e35d23fbdf3470802002a4aa5953', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fa2864c5acfb879db8589f94624b12a182d10d0aa06e9fb79f5fca4f0e37f267f6c3910eabf7e8596a878fcb459e5a24481fdacdebb7fed1f1adcd31054115d224', 16),
                    gmp_init('0xb94620fe57455e40183eaa8166e3913cd453f3c9b98bc61d4a38540bc223c8ff24338a9c59b976f5654cdcc98e29c06b7f49581cb82de2a43d6c024c2c07e34963', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf2bb6fef51da03624f08bfe1c72f33193d89205fd08b23047366e9943d4d42b515c10195a9661cffcd0262424cb3120195d85f0e97572e8b22d05a079995b39f', 16),
                    gmp_init('0x70825e5e4545d1497c61ffa81c22cda20a5b43ff2c96deb5926faf882b16a0a01ab59a6f209e380e0010e3c8bc6cf15c5d1342f413c80ebe3261689ed6daa8789c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c5e07458b5c4ca1be8f153c867a3604f8b8ff14a074d3ca73aee796ad900baa1dd1a0cafe8158e68176005728065e7c149bda15c151e5327170724e185fe85076b', 16),
                    gmp_init('0x972d3d003454bbb99cacf3cfc0c388141aaf0fb28be310d65c91ff7124ed5dcb7b448fbc787d69625bda77b9018c10e7a598ff4d7f6c38d10db8c4f3ad8f7dc861', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d7b1a75a82b1fed01aaa24379f764e727210be4e3b8a45231ba76236063dc6801d9dd43d69ad4dc60a4a76289dd4ba2a1d9d9270c3fdb1b929429698b23371e14', 16),
                    gmp_init('0x1e2749f7a1c83b003766f7fe733c7562c48f3cd31dc62f92c332b755a3d8518c06b0cc0eae6735ebceea88ce1890faffebd70c38498a2f303d589e40d215f621487', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a5887a0882069e1dcee02c9456a4e86ae15449a0254d58701684d2d75ba1b61ec9ccb0b83f8f373c74a9e4e41d59efb52ea912dfb28f3fc97cf04e87527a5499f', 16),
                    gmp_init('0x13838975ba3b3f6b89b41b734bc7bea70ec54e973e1b2ae3ee27191c6fe18507cbc97ae80928e0b0afe262bf90df6d0066eb4fff12e522a5024cf7bfc8c922649ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118279680f3d1ab5f410314cbc5ebf8c27ddc752a59850dedb013efde0ad58183ffc9668e73dfb9fb62a45b5ce29c26a86ea4a222b252d7ca1e704d466059d5d8e0', 16),
                    gmp_init('0xd961198c7e7e9627231a8bd0002058c97105018340e8d029f8f3a66f73282febace04d31daac34a4af5118b9093f7010268cc52f17cd1fa6c13b8a1d583184e940', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17260207c2d4135ecb15ead064b532c1e6e517a48719579fdaf5d4844a7a693b1a9c0f00735d5cbb1355e51466164c19baf4c3c68cfbc48bf6d11446efe378cab85', 16),
                    gmp_init('0x1b94aac5f5902d841cf5f65aca8fdee6f84cc3459371f5f634950084ba410dd96f8ac7789a6ae02b757f4ebdc3518280e54b2d3664cc27a98634b033a37843dc902', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c9bcca60e29781b22fc39e645c415be4db2e92d83dbae3ac5d963357a5775cabe3871d2df2a90a4d2e1bf992e78de81577f054ac944d701f467c44096f532856ca', 16),
                    gmp_init('0xabd12b0e644590e20de4a04cb19b639f3202186c1c25b582eb4cb8237b59d220a688444fdebab7b568de577d69e7668bc6ffbfbc7a24278420638cf76cfc5374ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11062092692586aba4060a4ca10bb683c2a845cab528c41d00423fa5ffd62ad7d214a1ce1d01ea773ff678d544296eb6af6599852c1016e39f1febd71bd638c39dc', 16),
                    gmp_init('0x7864cf9864c1d1df6109f109d2a625d96120b5f165df4704426881c9baf4e746e69ca850c7740171c0d781654887ef2a6d410cd76daab1312edd30d6a108262627', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cb17b1b9bcc92239d3b812a15220fc04df27ae452962f401924176f925c1efe94617ff446eb8f0bbd8b8b1a9cbb62c5eefacbdef0be55c9d6dd0f09b1bb55f47e', 16),
                    gmp_init('0x10719d9bc7d263040490ab34c1765c93002ed88b0bcca15d271d3a496952263f4987bc97b0e11b68965410ef875a8ff2aac8ca2a1cfbb699609200f2e48a465257', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13bdc726a4a06c8c546d90474fa3b099e11c34393632f30c85c3c309734d0f729d48e3b7186a541c5e580dff98618ed98cc0638ef62b49d08a622af165c7c4c1251', 16),
                    gmp_init('0xddd5547fb7ed2bde9dbe2980b1108d6eb6e50a641cbf01a90408c3e30c353255d8085e6288e4c02691fef97b7edcde99cbcb5c860e3c2633cf067924361a531c8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x145823249dd0dbf179003cacab47bf522c5e61893a5a84fdf5d2ea0ef68f4060336957954dde3a1bea6cf34ac0834a0c6dd6da8b24c7cf6ea2b6366cc838d9e9c1e', 16),
                    gmp_init('0x809e0eb0d1f82ee3716c00d9b8bbf36f70f779391edd6b34bb462b3dc27b09ff443983cb1bbe50d3a55eec27550063e8405c70cc712bcccc9c2ea0344dab3e90d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa96ee1ba8a7cf95b17521b10b4f1cba383034175a6ac1191d2f5961bf5c89a0a2bafdecbb86a8d5f60b4066840b09612395060f3c861089dc7881c53cf443807c', 16),
                    gmp_init('0x72e9409b9fce32b8e12da2f33fc248cd024bcb9331c9f5c1cf14e0797f30bad05e9acdb7ea363f89b382c4a1cef1026f39a3597d711068323051b2b27b13dff296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1099f6fa43de6be684e45a84216a1ed7860c09da7a94d82d15d9f2e7e1be41eca93d934f10f2210cf60b529cc0108d808b5ce20b1f846e78faf41b4d05bd15e752d', 16),
                    gmp_init('0x26eb720d23ff69861ac5f4191dcb3c2b37f94ea4495c3060ef4788cda816dc469829c3d4aaf9f4fa5a79bbe62284339a7d9dac1bb8349754ed592bd464ecf53a79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1057a1b65a2e3c6abac4c51e1e9a17b5a6817297732bff806fa07262573dbff8e77bd851dd886802db2702b739543e2e8c23749d27e292ba627fc1863b7b7a1c131', 16),
                    gmp_init('0x12ee4fb9626e060fa27dc07bebb40ff8fb0e7408352eb31a7f0c0907c77e482628b6f9b982d7219dd92e7e598be0978ef4e8dcfee4e200afb7340339da702489d0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e179852d0b79663aab7a80f6087638d824c97af02cacc873842cdf861c7a27b983f261c688541e9cc3361fcadec889c9b8b871463efbc2278ed2285ad12caa3808', 16),
                    gmp_init('0x278176ad853eabdff5d2131e993fdbbcefa1b74c66b0b44f4826c3dd781950b281d339471d270be5ed230aba2129eedbd31a7d784d1e245979a2b626f98893ca3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c69526aaf9a42595780329a85512a8e5c7fdfb4f8a3016fa2f4338cd4b8e424f58407e6a9e9236b9506d139e517ee2ed74ea52d39ec46bf1908d703be27d6e0745', 16),
                    gmp_init('0x132a91c8f581f0e7dfe02942b0509b586c1baa528b722fbd86e543abca7d2cd9360eba345bd076dbdb1d27e120721324027b0047278fb7066f9587d6b0459bfc10a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdaf0325227718f824c53298c54a61636f750cca4a64e6b8e4409c054687bb9dc77d0b58abf051746182bb5b1a7a850b73ba1554957c7c2a42052df1de37f4c74e7', 16),
                    gmp_init('0x69aca786dae42b065e318ec476f6bd86907f88102cae0627b19853a7df0a098af69902c984eac3d5359c171b49425abf637153f47caccd5cd710f1de0bbf549e72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b2fd96a71d39324fd7edfbcfcc162085062d3b84a7cec4b4dd1b5f74c5a8b2aa3c50e8d4ff61863205b94c8f1f5f4c0eac13f5b2b3c4d032bd1ebc2d022dc5f96d', 16),
                    gmp_init('0xb62f7a007c32817f786ef2bba49c875832418a843a5d89699ecb4de872a7f8b36c12de3db33561f699416b02fea06770acdd6dfb9baa4e3c3cd7a1e4ab254368f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130ab4d7910c97fd28b0ad7d2be7e9ae93d9a765c8a7d4421ffb514ec984da42a1effb9e309d0642731d8caaf4b9d8ad82ffdd82d5f0d8bcb5075eb8d356bc9662a', 16),
                    gmp_init('0xdc6e58d205fcae886d760058f5f0823630b313e360052c2354be3e8e3b1fed7ec5cee4c934a11e8faea3c3bc8c30af31a259737dca73051d04f08b836fb2b614d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc40e2631660393e7de0c3517cc9e1b62401cd6495aa5a9ba098f15954832295d53175e620084c21f4d3c8511001f351ab02570ffb7c07d92d8b38962a90fc51d07', 16),
                    gmp_init('0x19293524ccc81c795aa72967cb0ca3070d5fa72e84bbb77eda3722e390fff230243acc8fb7dab5d343b64e4ecb543191f7da15fdb2b51af63b61c206be0b76f7b20', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb3bcff66acd4a20677417619c6173c7f4f001c2c965b608fa35bf7b3a784298947aa71c57f06aa6c21213f80e023f375fe32f47dd21bc66a3f7b9409bb42df612f', 16),
                    gmp_init('0x12c954bc056a10dc7881e1af5cbda76d272265226c5ff10fa6de40163d89e4c1eb37eace6f96b0dac71f6a508fddfd32c0d8f39155ef875e59181b9b5640603bc79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2945b959236b7d98b1ab770cd77f034fdcbf1f09cd90bb890d8f09dbf6c2bad8b350623c475b31b91735881eec4441a2ff73071fd967dbfebfdba8e40547f7153b', 16),
                    gmp_init('0x1507bc5dbf3e8d8ab751865f02a68e4b123680f08622bab045369bd1b6e70bf36294ad57b343696269ced8e7886f4e366871289bdb17024d641d2ef1e00f599c343', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x381464e68edf65f291dcc18ac94083d6a7dab1da42807ae8f2f8dca5a62ae7179c17ba844b6eb26374cda8a158ca1ec8adb6ce013934d0c12202e206c37471a905', 16),
                    gmp_init('0x539023473580457e5b317421962821af059878091a8855d42f213feb71c142d1481b38f348805b2e09403663c930756f73fd36f482477abe8a6599fd7bd22a48c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50e06346be162238b60d15167af6c72694d24dd41d3c016bedfb13992ceed3b0dbbafc83c622e849cd33bcff3f3a074347db3908d14bf2273a4f6ba84d09ed0733', 16),
                    gmp_init('0x1f4873ea1aa905054df62e24b184f17b16639b7ec8ed79b3203763ceb6796e8455463e3b7fcb66f217db8af77e1775a77a546aee84a3f0cef9e28fea53455d96852', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x766e22f51204452a001729f8d0443bb821b699f6cb52bc041328a61d2e57a5d8016aa83ca8d5681412fe51c6c9a6f4b6a7966e71d6031cff85e410d8f75fd30bbd', 16),
                    gmp_init('0x1ab3978bb58002ea4e2d2d81ae3b6df8fb382b07f2804ffd31cf04bdebd20d3d51ac3ead5c57c808c30e32a66e2f574b07c370f9a54495e770a7b51ffac0cc2608e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c49cd30fb24b7607517bfd28110f51f78e62d28311d7c9924ea34766d014105be46f461c6be2595a8a3843d6c37f7e4d30b73136937ba4dfed35a5767a91f7da33', 16),
                    gmp_init('0x1be27d3835620e575686fb68582f73076b3f75fc3fcfaeb5530ef2a3d6f54bb2d09520fdd3458345718f3ec542dea71f1f282721aef5fde4fd5739b01bc3391726a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd44b4d8ebae152c753d4a61630354ad23e9e5aa4b8ad2c86cadf4c06637c2312152e33f39605c943d81f96771cdac541bda36fa1c2203eea7f85c1b6a18db2823', 16),
                    gmp_init('0x262e23f60fc0478c59c276f0a7d8841e4fd67e787b7af2ea27f4af6cd956cce57b98f430aab5c6da083a1eee79a7e69b8355b6f8ed382b2fb7d5d3d35dab2d2652', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15fdfb15df3abf81b196f9fbad452533ca324ef8956a2c133cf5f03bbea00e7e1b8a465075d1623e85b31862f75ab64d63c4749379c2a6efc260db2b099cad6b074', 16),
                    gmp_init('0xa6a17d2872088e500c5f4eba3aba8c76fc5ec032e2d045538cbdd5677a9277e9bb63bde9adf15aa16faa0fd8ee347283f14a9a066c9cbc946e0616fd242796855a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1466be99994b4ab6ddc67695f340018f3af722dbf93506d2b29cc9d8c864570d4a79c5ee058335d67c076a4654da80bb133c7eead04b4ea860c7fcbdfed7d699a94', 16),
                    gmp_init('0x13feee54fbdebc3eda512fa72593077130b5c0ee0f9f6c34e25fb7f6ec4f6a6af415bd1a8950fe6a2fd3882eace4475bea9a6b8cc37350bb94d9b73cbeb15233c45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1abad8d7c2064e1a2a92dbbf7cb0146916ae62aa0140e6de6279a093d243591c0784a171685c3d354ca6a52aed923a534fcce9178f4d15efc4d3f64eabec21add', 16),
                    gmp_init('0xca1bce8d44cf2652a8a707e8659c2efae77d332c0970f9557beb8ea429d6a26e0621b723c20b920d1196403d2819efb1d1ca7892b751ba95f5a7198484a6ee25c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae36c8b1dafac2bdebe81bb7b641ef47460d4bead8c54c1cff3208fb5f42cb9cb2c2249005df9fb241ba74fcdb11f34d7ac1ee5b794c26bb58fe16530a64991075', 16),
                    gmp_init('0x10b0f2ab312d5dec6cd3d1f2753661ded77b5a94bb00da9403bef03903dbd23b2678f4d1d0633986a37f9bb4d5d7287369d47d5b10696bd08cf2cccf150d9673e05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e89bd0f66e797ce64b7038f7240d299f2e15eb8341008b40f2d63192a2815e5b776c0656a65bf23f8edfb3c59ba5098063bee0ea01c8ec71f29a51dd23bf56830', 16),
                    gmp_init('0xa332d6f9b53f1c5253fff2c5986c599a6a061bfd9b416f251add6779373960c8887f8f50e35436141d6e06be87584108ed3d3cc1737bee9e5c75af78d1101bc0c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbcd462bc6c75a6e9d1ffba50f0adce304eac9330b29edcb5031af4da31ff1fe56b953ceb6ed35f74893dcf5aef142ad7f69488b1dac7144b0ff5730cf9e291354b', 16),
                    gmp_init('0x456264a9f7be6489aad735fc4c5592d62cddefd8f61d24612dddbda1ec84d10faa0a95d69e3203ec87e62c6ece49e987f22fa533f06eafbbc1d47cd878af5b261e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d018052d29a041de86e0c06fd14ea98c0c09039f138307c5aea0c3c4bb003da505aa12994aa9beb1d0efeec6f77f60a3c32f68e40858dbcd327f2896f19fade403', 16),
                    gmp_init('0x10b39f57c3a80ed833e656af2c7cc577167b3fcc67e311bc55ddc9766d719d462a8de9f212bb17986f522e5545aa33fda46a5f199aad532b4187852bc3d9d4f7390', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc8f302ef2a8fa88e1c58f74d3284ca3f9f85e5d93a4b5c714c1d485ab0bfbf176b2170481030a2563ffd783c246584d6582646f87aadaa0b0e57ae340f975b450', 16),
                    gmp_init('0x1dc57fcec1844526b8c3391f528337074e1db5a3bb8cb57e824c69f26443084bdf132baef2cefd1395a8a17424ce2bff3e8512643cd325b5a89bce7f7b0cac239b7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbb8852b438f5a3b0cdd93b1d93fac908d2d4f4d06f31d769cc8fbb0ed8728a40eaa52dfab22947d11f1e951bd5581abba5ddc437839d2888d8d8faa3bcd4cd8948', 16),
                    gmp_init('0x128d38481257e61408af7b254eab44784ae05c307b2a6b8db305354ec9efdfce95cfd01ee09c4cd0dca332c292ecd6ec216621a808863cdb21f84ea0e03c8c88de9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73c2140930bc68242dc98361355042343b10d031280281e10bb5f118aa5e465baf49863dac4e8635338898d789ab10a910e1f5199a3ecce0e2f9b815fe2f1993f7', 16),
                    gmp_init('0x1b2b1679b0c56449cf6dc0856fbb6927e8349757c532a065d8b9375296868d8b7a8e4458198be6204bce5347265c7699f09d4167f1323db4590f1417466e84f3896', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbf15e274fb69d5821f0d5fdb985d590d056a0c5b0efb6f66f68105e12546ace60ded9e969d068de9816f2e7bd7b7f92c4210b6f4b8d73860a1a80e022f6b5e497', 16),
                    gmp_init('0xb2bd946e2c292a452ed76bf119f8f8e5f6f57495388bca2c50ecfb54fa49d2589af0a9044b024b4ce325c135cbdb9fe3cc9e0ab44c04b71011d8d0621dde543268', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48703e609e62fd2244a1d47a38cf49a617bf5b8a162bc6b1a09e68f293277b5084d35e5d8cd4fa3e4c14a960425c895eefa97797d41faa5c821d43440f28eb6ffd', 16),
                    gmp_init('0xf793f9efafea9393b13085abc579dc86e588aaf0bcaa35305bc5235ebf99fabb3d753559f5b5750bb30f8a308104002971428b8357c1975ab5909fbf6c6af3c4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x205d9e34020980acc1c9fa2fe993a1ba5a7cf91923741a95baadd4e8fb34553fdcffa1490469b799b0f64e8839f6549f3c171027f57c49fa90d1e60e5f8256720c', 16),
                    gmp_init('0xa413e2306f86e8c59a93782286a19e4b306ba2aeb6c106499dfa41813b2e0c61aabda3583a3757184df76232cb81e067a4448896bf6c3294e92a5cb99c98d2c9ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd188e755378dac1a4cbe1f16dfac18456bfbd5ab3fddd91be6d477f32a9424ce592c60875ecf10d7292eef15036a5161eb64ad3b76db3e63436f8275e50e37edbf', 16),
                    gmp_init('0x14342d94d2c7a8abf0c513ff05d28ba193a24ead049473e8a031d954ed2771b6d9e35fb71ddd74120448b825c99420b54d104f48ba57a6bc5094f8e076e3c10f2f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c91a04e978bce7de75b9fe5bda528c449839279193e55184f5c28f1bd14c0dc22b3753c8f7a5b5169452123a0860f5270da94f38ae866a52b15169a5ba3792d0e1', 16),
                    gmp_init('0x14402de551920d6fd9740c47f4d5b003e94523fbd101032dad88cdb211f4553924279759d955be69e84a630a8dc3f0b031ad02b7fc965d82f4a95b584d1ed890690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec3ce4223bce402aa24ee930e51c13af9d1a7d75f3c33bfca1f33c4701a30bfdaa8a9b11b1cc7803220450b6c79210d1ca109221f7b9b5e762f63486b5ce9c07a2', 16),
                    gmp_init('0x1ff686c0c7bd2cad2ad6acaf7b21882660ab194e11aa13ead38c549cecef366fc8798d1a18d54193ab1bd80684a5d3a2e52ca5f04d003c1edeb2ffbfae311fdd6ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x813937bc09b94463aa6d7f8f8212ca94553314afc85037da6b5403b7b7119151e086cae8e64d7dd6e9e843d42796a94272195bee8f6336c0551a90defed7b4fded', 16),
                    gmp_init('0x113901d2a938b835c1342f846286244c6c335c85984849df5ec90d9c5cf0501336c20f33375ab4f3d13c869679ef93cae12126473043c8b52f2306e5a03cb8e9b37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d19db8db4c5ec5762b5171c588093520b9e7841355e24b3863412b28ad7dda08e1403367f33f0e5d182ac829a60bb4cada68aad973af36cdd6b584b65394932b53', 16),
                    gmp_init('0x1e9c08babf4f80b2fac4a3b7f13dcc95928d5e01e0324773e808fdb5c08c81f15907adfdca3164923528455da87fa4d8c25586350aec23dc89a8d3b541ec6238d25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5770c9d3b76d5362eb17bbbd06af54e74386619a4a5ca7abeadadcbf144aea3eccb71cf4b72bef5fa2c64ba0aa4f51f9969abf76030be4639137d8ad51452f6968', 16),
                    gmp_init('0x1048c3e81e6e534f9e6aa07352130f14ce4b481729fc4d1faae61177e70b097e1ee95ad3cb860dd9d75ca1694b587557348bf16873cb87c38acf2486bbdfbf53393', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81c84223fa732778a4ce049e5276667fcf41ec28d8b2e792791122ea06081909262801e275ebdbc2c0fb4298ff2650904ebd4f796363adadc022d3054c1ab5373d', 16),
                    gmp_init('0x1d46a240d331b25403fce873be8b5b796ddb90a2abb08752f5e8c0d230527134efd3d42cd0932305dbb1b469e0e153f80be0b396d37bcee958356be4933666ff503', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed2b6009fca2b9447c4f12848942876fc8b8cea58f1b8c9771c34ab941e536c3ebc70632bd3086755214340252a16df7d932b7cc316ee3ee5786aad63f60740f5c', 16),
                    gmp_init('0xa7840ff28c56d9185fe5d0b6a671bd58b7f5907c48e3f2d4791c6101e36123b596c59c69516a75f72c22dd8fd9bf6fa7e329958d78ac7dee6fc93452d882b5e6eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17785a16f0afcccac3c176d3095167f3a3e1c9b4cd05716d8657f277714866a3ec9e0914b2f6ec1025db8200ef38ed739f273a9c39780ef0efbd89e1fe8330465de', 16),
                    gmp_init('0xc39452396f37f9cacb0b53da7a9107a69235d3c2f030858f66dd053c40411302fd79f801348eed411e26cbcb752a17701d88b991b861f15fdc767e84814f1e3019', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f56ede14320ee56371903c781805ee388d3f34165bade77f32690d0192bc9c91e1748b47ec03bdba209749744d07cccf5e6edfee1e4524c6b961404136bc539e8', 16),
                    gmp_init('0x2bb0d0e5b7f260defce972a6d14649a9b30aaf9ce7d1798cc8a3979d7b91ce3ad0c1d8ec4f26e3394dc54a8abe376288f0dd3a022f1b6ae86e4300285a7b5b9f4a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4022955a4df09c0c811210aa5e853e2029f68c7538d72b31fcb47ff7877346265f0dd6de71359590d690e15a5012fe91f120bae09cfd9e0124327eec483e206f1d', 16),
                    gmp_init('0x3252b9040937b0125157b5e52de3cd1c8e809b7fe436360bbf7af29b71b7d9fde1626eaeefaf9e2095fac563c59016930a9d6532fb4bde2f58e194dba07335f4a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58da262fd344760c21b0a372de83b65b62db164bf4f293c92580dcb967a3b1db5e3265461a619f159d48d139d16b3956a178cfc774963e7cb17eff6eb56037ff54', 16),
                    gmp_init('0x1528acd999da44f75fa020788417187709560bf22144f2c75ebcf2312a4190531955b32314bb42c77d256b4b751df24c7e30c7b74ecdc54c213a8f9432da6dfc562', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f917e35cda0f4b6559739962d3a2d4446201400fdbe4b3724f91295233fe85c4f37020b118ae30a21c8f75ddcc41906ac58aed61e4e9dca11fbdd71d76da23955', 16),
                    gmp_init('0x1a1056a45e741b4de2de244c394573a894a8e8647da496af53bddc80cc991ddcd373df10d8508fb818c5db5ca11cf116e1198a9369f6dc1cb9599496b29ae9e0ffd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1525af10b9b9449695171c9c23ab2a9c6a03e47772fd99abbe0dbcb15185d5b039ef7dde8c5419687d1b69d285227cce600e97c179e8057a7100cfa67a640b0a066', 16),
                    gmp_init('0x1663078097686d07325023afa76ff929c1ef1b4212712e344ee27c3b4959eefee4d895a3be3cfeea9b0d43b3ec0ccb4c1b11f743fa449f15b330f96137f2c91f83a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12731b752964537080e8a80c84b946457033cb83f5eb9b6b1892597e88c5ae7958f56edd1a0055891b3caa027ed63d4a941a593f0118f4493fa1ef0c5b017d2c887', 16),
                    gmp_init('0x17dce6852502d25a31b0a932e8b8f72cb1751c86c14673dac7cbee1560f2085c160fa5d5ddd6b7db395cec5e8ff3ef53a520974f66b560986834a72fa41dc5510d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0078e04dcdff222e12fd846e06c7ba280bf94f747a3a9ca34fdd0b5e9559390657f8620c5b6d2519f8e19553f9b4103fc132ae72136cb975a391fec22319e0473', 16),
                    gmp_init('0x1971e3b7d3cdd88905595450d43103c25e8a51a8149155b6f21a2dd9bfdc029f242c4692e425920aaeb1e585e3023150beb6b5410650610b78e3dde6c64368bb5da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142efade50289796b5e22d90da5646e6ca5af7d07b9b45dcd62dcecfde0daaa8a32a0a6c58bd207328f999651c04a37ddf2239053ee28dba1f4859d6c561bd83a5c', 16),
                    gmp_init('0x14dae1d2d9127a320ec0b942f479e534bf827dfb98d626f620112f6b07613d7b9343b11b67905a96b121b84276e06ebfa19c24f65bd0c12453cafa5af772c783bdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19978aeff6c1281fa561ce2974905c2eff8a6a39ed89195ee81d4984b136b5617ad80176ef0763ab5c4a7a9b0144f404eb3039af24c465ebf3448a2fc84658b96b8', 16),
                    gmp_init('0x14ad6b5ab1cf767068478e165ad732cc46e8f78ccf876e23a8c62881658502e66701ae1cb659e551710e7599b2027b97cba89212e99958219f640cf462310374f0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc664025d6a99de1e14c798e1d5660719402529829e9315f879c558b52d970b3870fada12468d03c4aa2e3d4ae1a3b9d0462bdb00a820a89e95edaacd35aebb5527', 16),
                    gmp_init('0x1a33c88ada4256afff75f74e77099ef925f6f2f37ad38b2d846d61ba6d92470a4734aa902cd603dc3ccefe1f39a25847cbc03955e49daa7ede9e9012d5ea868682d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x192144c8e73f63eb65dc60271384a00e2a4039dcf93bd6b8d1aad1f8c0da6cd752ea7dcd756923a07c1e79af446bd60a797a41821ea5393fe41063b9c2951496d2b', 16),
                    gmp_init('0xdcb16037f44ccc6d5cbc1bd43df1bd5b07e7e1957fa866b34b80cb292f3a1788f57741b931cf55a9e6921095ce0c5a633c2bab4dddc3d38ecadfa51d21967358b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd200b48e38dd6e95b62c69afa308c4b1f31d17ceb9d9b8a354864cd4a24866664bedaeb5cc567f0ee805ff5cd93e70fdb385c88b0d2b839134fcbe80e2041391e9', 16),
                    gmp_init('0x98798faf6d5e48f8e2721ed663803b2b1be933b195f5e76c250b6b2f70b6f4c95d7895da9a91f24031f2ef6eeed0481211995e2841cd510e45e7d05859f24ed4ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1569852938cb1da86d2cc2fa435928affcc74463f07099dc660a508f45dfb26265712bff0c504bc20b0a61675f6205e90f06261c2d7f245952e5c8c9c4f2fe85ba6', 16),
                    gmp_init('0x2aa9bd86a576bb9ed4acd8abd29a1fae19ed1fb606b47c1739cd92c86539c8e6b913618e9d792ab39d7c5fc895e8dba4df18fb95a0cfb4552c9c85772ac5b6b703', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e155af61f5b705f9cb5247b89bc7a9ebf6c4feba18e76aeccc3940a3f7a282a41d881490746b013257b1354ce61069d901ce662a59fdf846a977469fb11dce4c9', 16),
                    gmp_init('0xe1b700b22cd15d80d0defbef022c5f135df9fc32d6682d9d44707481d70e341de60079ee0fde6e7931fd8e631a5f84089190172cb5ad1a6243f4b9494b371e3cf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfab70daf19b801d119af02d92708bf90d531e33d28292528408932812a5a4375197479bede35741ffc275a46b39ff66398ce75916fe1aa26c7ffef9e0540fe4e4c', 16),
                    gmp_init('0x1f28f6aed2b0e9a44d0fc86ccaf6a85bfafe110bd51947c368d7335965da15ddf6902c4b40b0fbedd93ab3773ea5307b3a1db5967af040cf16a46d4212977bc7494', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11de56eced73064290e0a718077a77f1acd45a5b3b826a71dbfdcf49f282bec68a4cd1e71a9175f071c5547b38444c48a9740452b144b21047fa9f959760f9853ea', 16),
                    gmp_init('0xaf3a802eb853a4b7456ac0fb18ccb2f59d67c204d798972dcd396f4ce90ed1b6efbcfb551154af6de6f8e13a376e1b2dc5cd3255658077f9b9b75324c78c0f4f52', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc4745e27721a521e4dd4dfe534ed1ac001f11a4319c75945ef8ebad3d9c24d7d1ccebe6a9691f37dcb3da8e8ceb0ac99c254ba0522d08596ffb342d85dda44ff51', 16),
                    gmp_init('0x5bbd339a789c246e440f117bdcb7db19b42fa1ad6d8430adb9490bc265ce5730fcfd4f1d36ce9c76721a54bc479c0684eaf8887b533b84ed58745e5b41df65e0bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d9265b289699e5b7e480bd27f42fc02fa943d9adb64e05b06d2266522555ef4d8930d835ada7972c5442b97782810e499355105b08cf8a2c35f8fd91ae19a881c', 16),
                    gmp_init('0x19045a0243178df85c95c868541b5b49cc4a6646098f39218cc3785f3608a5963dbf8c55d1817db72ee6983794672942b762131e73270e2672b60df9c855c7cd14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f5ff055894ada65adf52059d24ba471936f81f168fa3d34befeea9ed9a061a5435d22436fd0372bbdbcd5e56d384c0ad4e786f358ba04b5c3ccc1bb64b666ff60', 16),
                    gmp_init('0x16b3908f6506118c4967c3cbecf613b605967625faad3f6209501d49595d3acbb178a2f32bad16d7d561521718b07eba73a65e4b11f4f1a8ee1346aded56d4cabf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f2f29b7282d812ed59f0127b25076c2ff9782e6f9366cada308abb38a14e3b8256151d2b3a82ae7e38ef6e0a6fce7b5f7c52ad2d86afd784006494428cab2443d', 16),
                    gmp_init('0x2d5cdc56d1cd383eac02cf381831286fe1986e7bc45ecc3f545442d6f2d1d10b06a7bff79911aacd17f7e4837b72a901779338a870d7f99e767142e7e004e049f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1a59c60b140485de2f5796982f02bda384e4dba336c6f1071aba571fafefe26dc3cb50f3ddeae887c96c08ea0f3ada2850f2c64390c9ff7f47303ec69c80291f9', 16),
                    gmp_init('0xe696666256c97679ac4b9bfb1f9e82781462c0da97cc37e34ab5cb8c3a22a5a502b150b4fbde221cc15b42d919ba014b10a5eb04fe515d247a28d7c281cab044f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcbe33338809f67393ebe6ef7f5b5d73eabb5740e624d09cb491d3473db8c5318aa333e872eb96cf1f0abfdbf50f4b9444b189914d64822449415fab9a8b894ac8', 16),
                    gmp_init('0xf825a0e0a9f3b7d44a0ee77417a218d2feceacb67d3dbfe159295f8a66e51b58704352125173fc040d0d1ef824820f7bfd00d1fb74003e55f99970d38e1ffa22b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d68b23e45003676eb84bd9f6157bc72f238daa51bc401078bec3248ef0cc4bf063687104bc09e4020fef2c810e52836c2c4d18389fb276974c1f7698483ef0448', 16),
                    gmp_init('0x3827d1ee7630c4e5590bc271f3f6ab354f6bc281f6bdc888b1febf1e1e512ec8a60cc00136931bd51b7dd12d941c646b9dc4ccdc71c4f2836622526e98d78b9d6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c31864e416978e919a54117ba2c6c9454f9a662d4befc0d7fce7d0251dd2d701ac506637b91bf22b507e01cac61a58e243194664ffb77f86912427d324acccf77', 16),
                    gmp_init('0x7643e9474e002065093d32e10f7e2c14294817f90b470dd35359b2f9342e7968ca9fc1b8e2827714296d0065933e4a40ec68742001f8f24116bbe419029d971044', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11086e25aad76816a06ef343445359ae969b5f12134519aa8e478faaf7ebf953d688a271e4bbb3f772ca7b54f134cfae9cdafb482236b6470092ac928fa4ffa68bf', 16),
                    gmp_init('0x1218b09a45a5418d15ed7c3f96a06f31f72a4529c72689bb1c7611969b964757542c13d5aa9fc7fe6a948670dad845e01bedd48d1f21f9a1284a0b1814536a88707', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1686e03fe3227864348d206d341db22c77fe8223f7a2a4a396a3c9275359d2cff8aea1217ac91da182a2dd08c383d1c15958205ac09c669b90b58170eb934fcd20d', 16),
                    gmp_init('0x2f930747e71f67fd22c05dfba284b88f57e260f8a1936a36257961f9c3055610e7d745267181008744389290045a27a3b0234158eb1431d7af3a717c4665d9bb06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2aa3144a05c71cfa5d904f313961bd2db83ac9b40376eb5c59428e86f000c98e08114250884e813bb2d6c7b858e64666b2d581f2bc4eb5bba0886c7f2258ef1600', 16),
                    gmp_init('0x1dd20dae8096f375a8b67aef9e2f5527030ad04c7e39687901c058d9bc3d814096bb64362dcb8cd4a96d7df65abbe333836a1f5050c87240a19002ee77cb69fa450', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb961dec7f3a46fd945ca75486404f204c851ef29493167cf6a582ca8509705fd58c04e44ec977316f6f12b476586f1f7002452fe1db6a321112124d45c3f9900d0', 16),
                    gmp_init('0x196e932418e8f75a4fcd6756d82f58e9017ccd8aa573c27925665fe0fec0565f6176b8204b7d9b9f82c26f5416ba41c631e1ec56f601a4b6d278114ed6af6e04d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bd80f13b9df452e98b42f06201685ce7cc15e2549ba5a885a8bc178722b15e0ec30f28f4a9b0e20e21e88244e42a245a7ac6ac5329515632d11113aff28dbbef1', 16),
                    gmp_init('0x1a2d6f1c04fde4968ad66ce46bfc205d20ed9f6c90124a0ef8350bde213f88485b4175127da8c0ee83e6e09c92bb43a5cd4c734b0bb28dcf06d39df7724f9a80bba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126fd421f03ef8af4b3cc4afb0b419b7e929fd02f2898e66be9c7fae004d9051a61e64390071decf2e2d424e9e24cbbfa67b45cf442498a580d920e0cf981414e26', 16),
                    gmp_init('0x11ba6c6d2caab9d6f10e56aad1a32ccfb2ff4ff673cfd3dfdf290e98c4a25ef6fdb9325ce353f58628d27888ac85849c30904a9b25f202041ae7b45c797e0e5eacc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb630396f906d8350ab9116747564ab476f7f348c27d610f24171d770cbc95c6c4fb5ec924941ee3189bc9a11d052186f58fcafee83705cbec813f45d45ed942a64', 16),
                    gmp_init('0x11d434682b0dd83ded255d85824d0f0c2a4a01cf05289799b044d4211cedb995516c873fde088facf27d4ea56a365cae75a26aeabdb3d3df97bb866ca72a9c8b74b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe12c370bfeec8c2a2b47affdc033486c596f1a3e9126cf35f7e96e02cf8b18fa5c037c7d47d974de7f9cf0c767e333ace3bb94a33d57c919f2c03c182d851368ee', 16),
                    gmp_init('0x1ca103dd1b9c8878531f44a8fc6f1004bcba72ee3e81ff4631dde8edba2189b0ff8b6ca46ca2809ac7eb6581d7edd0731b2c4bb672e2ad42ca2dce5de2c18a3f84b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x148fa059629894e9a614751cb2de5c125fd23254f4e26b6c05fff7a316c39cf5ab2e0b9d7e8df82fdff2ae2d2833735ce566d0479606efaa084cb35df1c0a0eb364', 16),
                    gmp_init('0x1f2257ab659d4498d118aeb7ea43b424e3468c8b34bd27181b2346d7a407e2ad36f34660962bba001e4ad1c8c7274bdc4b6f4f9f08cf5fd0dd6e64ca47b49112ecc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118a9ad8cefc12e0a989b13bb3da848ff64625c088996b9fc60531ad67228fa8ea85700178a57c8dee78ad7e98088919924a4e752b1ae6a813198a781d5de024391', 16),
                    gmp_init('0x3b75aa5ea458f7da4fe84349c8233547d14c90381b8f13cfb7c8ee5181bb4ac96e14a59165af077b4d1f377147df5f527c318dbb7394c261240d4b05da9e9ab68c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b84cd0142062ec300b3010cf7931b97c8c48f8371ee821e250ed7916ef22337411b53155d02e15c25308cb8e61c86340f102ff10066e97a7ad57280abb5be7e6', 16),
                    gmp_init('0x7799f6ad72b88ca34c646554b91e873fbf5b386ead22fa3bad2a567784a7909cb6f363dac905915b412b9ec6c5f9eb3538f8364d18b5a7402d05a7a5a024b6e1eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe81549d787c4c8344b8a15a48bab92d89ea3ae1c99714608bbe33ee677f3b3593fc9ddbb4cc43683b38528f2f4c70fcae21c474eecb93f989026779cc419496a3e', 16),
                    gmp_init('0xb3619a1e813da3113faa93e9dba101cc1fd4a622d5a89d1623cfc9058bbf834c1997385e818480fcaa99266faa1ed2840eb092967f0b45613efa337896d4b88b67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8a717bd7376767abd1d1263b58a298c8b664d9ae47964f2283cfc990539f2d01d51b4f25dcde428b94894360ce4df5caddd54608e04629e7cd788d6565cab16fc', 16),
                    gmp_init('0x197b4218af523f1ae8e9599e1f1356b11f54f0d4e8506fe1d7bbde8a12025dac8d473deeb54ec971c0c5dce307cbe8a003ecb8ad7c3a9530906c892809469ce9cc3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cc6a9eb749b83994bbc8f930c3138327c5a8ccef85bcb84afdffebc6d11ea313a85e0e0192234c59b653c8011edc7657e64f0c084321d6bebda676bee0d076683d', 16),
                    gmp_init('0x1776b040e0f32ab0eee26d97947c3713b98aabf5ea946986d912ae521aa5a0a5a67de00974ea8d81cf9f76a4760524f18bf5f27ce0ef1be2f9eaab00795bb99594f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x182d7bdb083a0969dd395ae93cc7641888cb97f4e73df58647b3d990b98b84c99d438ac8ba60d96a933212e32a992f81574d09d8e74901ce1a28f37e861fc3d5a8e', 16),
                    gmp_init('0x90a4d202209f9ff142df04cbef428884f37f662a0625bc5c0c17939ab22775f0fc19b198f08b4be2a79452ca0f0d87eca39db488f48a57b6836531530c17830426', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ff1568f6be74ebb9aa4698999df97c1f03cdfbcd8a4acfe8d8d337bc90be3489ecf31f88569b1b389e538fdb83ecc5d3d99a85511ebc45fd9b1721ba5b2662a6a', 16),
                    gmp_init('0xfe410e086acd4005a11cf4df75139f7f09edeff8bfa150ea5fe7933088ca54b0d55b6ce8978687bcf0aaa9461ddcae3a68494b70e8c101617bd5995519cd76a58e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee2982b34fb97c5124f549a1965104e964b757920aff10c5e42d74d36313358ee6f432c0cc476e2af10c8e830e93bb6f6a6d27a28edb3cedb40a8bca7c5ac5a4a6', 16),
                    gmp_init('0x9bd460003e35d2007c4e3a0c2c86b3b87769be223ca237614ab901b3c7e3399a195b6c77748a6475398afd002b45e3159d72ea159b95544bfdf40c4ff4e1939fb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b2c98b4036bf1d3b32a4c3c0c09e7e68ab3619da17bb95edf85f916475a04969eeaca1c92cf3f4f180fa2efc9ac1832567f4742aea11315fcad46af7630da09d54', 16),
                    gmp_init('0xb98cd56f7ab2cd8f8442f8b116ce26b74a3e2b11effbdda3b5965d090b3a80bf740d669305f6f7750fab505688db89f24d07af3389e46830205477c78b045007f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1675c6efc5a9f068a58ab46bec5219735a2de0b994dfcbef3eab2467afb2a41a80ed7201c9c8085753b90de7dc34e5322d2042b6b721475a01dd36d95e98d20af1d', 16),
                    gmp_init('0x1ef3d76868940af9134b7fe12752d9b039f6262f717cdf5cb42d33ca82162456735b6feeb53d872561e5a90b3d5f7467e300e49b878b58b1af1ad80498ffbe3e605', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16318e131f696427204c5ec15b0526084c42be01418333d2e20065ef0a4fd5dfb5083fed918ade06cd135387b1c6783b97bd45d144d61ee2ad55783e5a50fb0d3ed', 16),
                    gmp_init('0x1712ac45ab3ec9e0d6dfc7e9685f6294b1cb2912b73c204bbac2f224297e17ebcca7fa721ddd2cce257074180907d9facf5b0c4aea93a45054799b4b41240fa002', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cae49cccb78c43892afb2ec5c2f3fb6b7f4cb584e5e44cae2a4b8c19e4f5ff3676917c25b56d9854aacf1d79cb312dc19852906d435a4c74b2b661c3fc73807505', 16),
                    gmp_init('0xee3776f8201d5f4f218db74a76ae78dcc11d805f2f8c5ab7b2e66e24f8d93cf63255b153f493e59328467004fd9cb6be757374af9a1575fdf849d7025cacf40955', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa49ab3d5669f644a63ae9405c831ab53e1ea3b77733a41b4080f61b9ba4051d5ce463a6df67a1bb9d636664a86019255dd155348b2bf9c42d4bc6603d4f696ba83', 16),
                    gmp_init('0x1f50e25ae34114e40895744bae94d4fe809311da7f3bf9e72250c9710da84232123da5f9f6f02ba3e65a7c9e588dbf2a1259eeb3fe2cfbb47d1b0c3477f5e8c01ef', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xcef322493ad549eaa97f0b55f7798e80aa1fea5391d65d265f0f2d350b51bdb67fc4131279435db0f0983e0c6af9f783348521ac35c19ae65b4585d3aa31ff6e80', 16),
                    gmp_init('0xf18dcb5fe10e0551ce48b0001bff5c3588a74511124a00e5b9a719329a14920ff923ce8aed3a39ef40b70fa9abbbb5764c5585f93a1861e785df7b80aafe9e5dab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1645dfef1da97265eae22a2f6a5bfb1acc6e1015721d258c98ece39466d725f4f615a8fce8c89191df98f21fd78a69b50195ee6de5e13bde073daa72ebc797ee80d', 16),
                    gmp_init('0x8095ffd2856063ce6f6aec1313466ec4183fce67f4b1246df8d300b7c6f2380828d1f51a60f0ad7fbe95cbc0199163a1365a62de6c92e3daee4697804882470cad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x186642b8b112f75464e9169460f6634235d43624a7ffe4a7f11cdf3f2d6e9c5ae62f83e1efa445f3ea95d8ae4b9a26ebd5e3897a60ba3f6b312d3107dc42eb6d453', 16),
                    gmp_init('0x1ec1d31ed187055125a295b4127e56624bc63a68c19118fabd6e146cdead328ed4e0824856f2a5f22714068d49492cd04a0a5eb42c5f8f5f307924b1cdc84496a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79a8869ed0cab81248882ab15c54bf05f569d9efdf938b503fc54759af8944204a55ecaeac4a051c2d32e27facb3a51e7dfcd9db5cf96f106241872e36910d714', 16),
                    gmp_init('0x12577524d58f256c82e159b9f4c3b85ab219a24ac8a4d456d2eeeca6379a807c4814d8e405d38486de8735bfcd6cb664a03da53a556b51ee1761f5995bf361ce52a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2ed780eb123f655492d6dc22444468a4a988ac822a1b303f3cd7950fb17c1fdd1f98d8a694ed21f8a8a64129ab0069b9cf3da2540b9bdabcdd83376b06e0604e7', 16),
                    gmp_init('0x14b23796edf96c93fa400ca038fa26039a1dc5e9f07c62172a2e1396e9f7cacbe45bc96afa12141ebbaea357f378032b066030f563663776af638e4f1e17c4f29cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a3620ef3be7e0cb9804b81cf5badbf552e1693fe7916b8b4981b16bf59abb4f3eb0b6b644a936c827ac2a1139ed592def01c7d940f8cbc7d2a20f7c6ee1bcf9917', 16),
                    gmp_init('0xf19374d05536957eec7632703cdca67562621d8a4b2de20d0a5874172095869dde6bd45dc798a8de3f18c605cf7f7e7e2715c2303e6cf027786106878f2f6f9a16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1669cf893221f0aa525f51723b291ad5d2f690259dcf16aa2404018ae3921fda504f3788c67bacd030ce5ac02d67e8056d8a4febeba75aaa59d2d0e0e8c3a12be03', 16),
                    gmp_init('0x11822e3055df315d1341ee26556bec8d5ef8b234c8708114d2c94bc0b4708789bc2b67a79e8165aaa952462458061a66221b8308ceff40b87630f4b0c2a09388e2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7918b7555ad8e24b498a44993ded253717b6635cb873d06353d6df218960e906d3baf65546edfe5ece3d90dee555bd31fbf8f9681875c0190f43e7556bd385e53', 16),
                    gmp_init('0x2ae423442e356e7bbf7102ceb5658327404348eb04ee7f9386162a249612a7f5a789a19867993f6687bc1d77c11d5513d7075a0a36fa9fa1db776f9146553287b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1da9faa02a845905049b73a2681eca0d3d9ae2df3568658871b3617bbf9413523aa6a447e47adf5f260abc8b7f17aef2cfc141993bb19b144a55d07a2964e588df1', 16),
                    gmp_init('0x1da58127f1635ac31881d5be9f6f7a02326fd455e149fc57ecd7497f2d3137eac72707319a7dd23ecd81731a9b6b430427ad6030dd792b80377cea9672c9249e1f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f67bccd2a3f735c1f8d704153bf178d27f53c199c78402e2840731d2fee9c56562928a849ddb4d9276d0b6ec9851d3077fa8afde1e5a60500a62acac89702711b', 16),
                    gmp_init('0xfe30e0f151c304c3df64f2c14ba2d9fba5224ce4ac6574a6a3e5105e178d05b8747b571e77f50b1a7330aa4bd3c31a7abc1fa6b65f794daaa01fb2240d935c8aa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18cc279c9b9d8367846a4e0ea97f2c1bd00d00255d7d546b8b306f7a495ecc52cbdf2a63516e1c82e20fa8ccff1163124ab1c0630464384bb963e157f2273ee88f7', 16),
                    gmp_init('0x1cfcd6117edb40db96ee915be3be856975eae2233738bbdda8e6705565959e1757ae7a4d6cb33ca16549a2131507c4f5f62f2f65176836101bb493ca0d2f4846640', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd696eadd8a999e9c94decf568567233c8b3dae022d7e8dbe9222c0b777990beeff47ca9a1b483341387b0d0576bd865783d0c9629b158071bab77b2273b687e9e4', 16),
                    gmp_init('0x7d12be251d40cb144a315a9be295c84fd7c8c4c6a5e4a0c2bad392cb00c0e079475025831148df5301a2c3bc994e34479dbfd2bc88789362fd8aefeaf1b8755eec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cca25477d329706f7d882a2e7f0a2ea17b9ddf7422e777936d5b139364003ad9b3365c06cb8e888ce512cab0f5f1d946fdf659955ac77dd429649b0c126bd0385', 16),
                    gmp_init('0x1162ae9b20e7443a903fb551a699ec741271fbbf2e0593add60b7dcdb418f391fa4adee9242ffc82ecc43da81611a6b62b88c6727485f7bcafb109144281f14b985', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76d2cf3964beb0c4c35f7d5a7ee578d6bb9f9118e6ec7a8f47bb5161f9df1dc5ea7dadb94ac08ac0ca508d87efb39d959bceac05a40b4636e72698187d69d2a365', 16),
                    gmp_init('0x1b0bfbe2cee43c3cfcddfc288d25f2cd2df18e19734057e44e8dd22d90155eec990062cfeefc2aafa524215bd31f0927edb84bf3b4bf1b3cf22312ccd712dd174e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd65109f7df4874fb3524b51adf58eb0b7becf47236fefba037652317e76ddb3ae5293146e6e1b614fb8335fe4212830002d042ac052eb93fb93069b9d66e77aef9', 16),
                    gmp_init('0x14cc8177ecba35d5e23c1b102e35b2a77a396710a9c632927712208220bc95aae6b934a2f9445f411a8c63139c93ba41f738a993daf530607feff02ac885f1d5485', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1c052b4a72992596244e9a8fb3c391809c5847e3a43153fb3b2e7716c3cd5b5bf5730556ff9c806b492ff2282dbed24edf7d208fe085bb4d523dbeeb421cfd387ad', 16),
                    gmp_init('0x3b0f78e5ee62bcaf82fb373fe835fa7fddbf46b97612da300d6ef46dcd5cf032964ae4fe0cf15fb6d7e81d38d1f054a1c65a5e32a1c925b6dae49b344e59d9ae12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e395eac1715267267ac07399315cb9a3bcc0b66594f0600d2728338efb56b8bdf5a837641c0a2a5f1f21c78cd331db3e3dbbfa0fd9603079479f3034247a56433e', 16),
                    gmp_init('0x2b96c16ecadd33d50b0bbf9ea379802339532af80c351c09159e9d0b911fc603e2be6c1a98670f740ccbb7be483c3b494cb6002a034cde7dfbe9ee22d1897f04b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a921a7e329a216a4b78b6e5f8b4fdae7ed6cf9430d8d87e7aea27de5b9100972c7620f5e1e8ba8813d7a389bf3f466a657b4bcc898cc39cc37e8ae915ec95bfbb', 16),
                    gmp_init('0x23e83e4d0c2e1b00f1d7fc0e2cb3663660a4b12dd530ec10269b27a5b5c6caef37cb034559b4d40d536ecd2885411be2d3e77c3945db16f282bdb7e79bec6c2d84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8393ea967c1a73a39e3f97565d9b5a5216c1b865c669336a7cd962eac71689858fb3f630142c69bc9e77cf1258e190bc9fa2ad0453e4c65e75d7ba67b2dca5c86f', 16),
                    gmp_init('0x61533bec76a7fbfc742f143cd6c15f7644735958e06fadce988ebaa43d02968a4b5d52213e1be61adb28a4e2bd3f3d34ac3ff8e52dbe248173a8e4af6b6ea73eba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17eb1eab174921120838c08f8e00ad301a2f1055909a4d1688d8e646fb01c4c5c5844bb7f2e754a4f547cb75fe485de5115284e40354cb70bd921cddf9b02de9bd', 16),
                    gmp_init('0x1d6cd841aba4b7cb8f2e2a5f7eee17694b703eec44529e78f9a43f45cfaafd7100304bf0da8666d7a0729921fcd665f5cb9dcce426cea940f24ef36cb1b055725cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x151582e311bb82cd5f3c3dea31ea455538a56b7ee84dc6c4d3202545d80395d736510fc93529a7d88f4e6a2e157a4d9ffa31751996b26cc272ffbd6e794814311ef', 16),
                    gmp_init('0x15d0abe8c27f819e8256c318ebc0f35b6f10b2c0c4925936137131ead3cab13f56168adfdc3e1e59a9e6785be85eadb4c7a3406d4109ce738601eadf021b3bec16d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19835ba7ebacbfe4f3349faec7b449f53ab64dbf3a675a969172c9e91557442aed844b7a967f455d169e685d205ea5b5a093824081f33a01ab23345300a8ef092b9', 16),
                    gmp_init('0x5d942959898f51ea5a5482e55156aa72253148600755447586fb5ea371bbc329a6704c37554bd4174cb51c467dd486c15afcda0aec6c46cc5c811c4bdd19fc3126', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d83a21efba413b06bf03437c286ffc588bebd3d4bafd21e802ccea99d32bb88a8a3713bcd6840458e2e36ec60985eab4f31dc89875e3a66ecc44b3f23919fec274', 16),
                    gmp_init('0x10129f6bef363b0d362a014eab6bb296d4b45b0acd9b9cfbc6e0729dac2badbe83d4657efa14eaa0320ef1999b91711da7de9b28f5b2502acc5d9afa45c16355e69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf0faee9400472b14eab51127c47d8ef842996a03a06f201cf3addf5e79773dfa50571c708c00a1fb4a47d2598f75df4072f7fff6d61286bee0181f2cd7342c5cf', 16),
                    gmp_init('0x496c7b0ffa2c8842413b44d4181c080b55f53d2c1a0191d4dcb5a2870f384225aad0e78781c86cf3859835f2f370437e2bd0f88da1c0aedab260d0629671f8b12a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12c17d2a5bacd5b3b7e2da2bd107007e4f7221af66abbea4a57d7d0c5f4d3e9e9247614a523370e3b92cbdbef831e26173a70de4bbf114bfedc30016ee322b152c0', 16),
                    gmp_init('0x11f398484de2ab50390e1d60e1401c4ba6fe91cdecc6884437f7ef71f65545a7c7107089df4ce8f69090bb3fb64dd0b4efb9eeab903ee4d09896e8482436639e4ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15fc6ab1b3c6f3d713eaed1eec69bac333a2461cf62ceeba7dd4d9a4f58ecaa75f6a09310ad189784643ded22447ba79c205eae5d8314abbce5ba77cd4943ef45fd', 16),
                    gmp_init('0x12fb9d4a7c061102a5b10aeeb268a76fae4ab30961553916dd240631b3287eaf4a90970d2595e0f88b4a5c2dc3ce3bd3bcccf878f407b611efef39fac2345fff29a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c7524f6f1a36161ae4ef08d0ee3a4fce4e18c932268e302a26c5aeb18a6de7e4ed6915dc097f9e7d2ed3beff1626717d8fe887cc974e91ac0ebce4a115a224092', 16),
                    gmp_init('0x357eeaf993a14377de755fb6481251c43e09a4057360507871af378b29ddc6c9f1dbd61ad0c260874751d809421d3cde0a54cecafd13216b13096e3563fe82f5f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1356186280be5b61d26615452de11b98003ba37eb11c6ac2ac1f4badd33d1f04936fb61349befa78e781046ef63639e55e8027026926ee1accd1ec43a8707cd9e9e', 16),
                    gmp_init('0xa39a989e719339c4690b34b167854bc5013f8778be521d50326d244519f00f2aad83f4e3fb494137276ecab24fc248f000b67be6f1ff81d9b75c4ada158a9606a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9995a4ff57d91fc162c94190b2ee78d1372361de291c17b6987c983b43117c66180244f291dd7a63ce8cb2497dbd934d9d5880e0184c3f4a5354d6470cff89fc1', 16),
                    gmp_init('0x37e1a75d8e90a76270cb2063dc862bd28e39c3a0e711fd50623dd5f6adef36c51401310b2ab9189ec230f4915af7f4c45b3f2403b05b281b5a98b17d2525c080a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb42c7c1debd1d9c112c79445b2487712446a9a86cd267f1479b26ad9152175a3b9fc44c2de56b5494a292ca6cdad19722ef8729b6342b97a9761e47833dd537f88', 16),
                    gmp_init('0x10acf74fffd7a538d2fd538decb7e8cca5266d91ff0636d930b71d392b9d1ce7afe8bf3258836a5d11707b40137e457aa373efe20df2cf039e0105668ebe8b487c9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x155b57f2c328fa4c10b1be3c9ba102522916d469252af1641eb3d3bc6deca68ec32f9d8c43d8d8b7b4f181fb048bb30b75be21aef25600ea3c3fdf7681d6debbcf6', 16),
                    gmp_init('0xb7dee00502edb69f81a023c978e5aa96e603b914210c8fc47953fe15e4219cd0d4d3ad8e54c03f5cc5948d92862d48d29f4426deb740593ce0599e10e59ea96c94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10b249c84e7b2dbafadeac6e04ab902a7c95c2b736fa292489e8db772c1f588fbb66d0e654fdbd8e9b01bf6e6b517ad4aba6fb2b6633505c98b28904911200ad609', 16),
                    gmp_init('0x8c1df0dfd67eab7ad39a0c55567fa11b87dce0b2e435885013f172bad607b4e9762e1e095a3e92c99a89f1a059bacd8b95ac01d1a5bfc36a572cbc039029de2306', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe20f611682b82806baded24e68bec74ee3fc75e1afd84f7268c55d2d8cd34b1e010fc45bd94926901e188207a366f5c7121ea37a8e7a15bd6c3555f75c6a7e545f', 16),
                    gmp_init('0x11f3a0ad818e8eaac9516bdc203a6b62e0793df4593bd9111876ddb3ae9adce5e8088f29ce08a74cbe86eaca283c6ae250288291bffd01b257e5454065af1943440', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x102303bd08332c5a9a8d6456267c352a3a0c168b5970f593d363ef406cb0e8c80a89ea9fbdaf78fcdc38ad321fadeb86a3aeff556d0c63062fa1206ea28cd7bbb6a', 16),
                    gmp_init('0xcc218e787e776cbd3bfff742beba373b244cbf0d6d96e667c2b135dfc275b332279d17b8b7f66ae119b8264577ef8024f6b12fcca8bc1a1b47bf911f73e680d0f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17f22e64291f3b7ce53a9e0832827b6b8fbb1aadf0f6078a673f3c38ea27390eea0b6df83c58628ac7556433008a520d556f3add5d08a2f74d91f8215f9efb91de7', 16),
                    gmp_init('0xf28a5a6926914e8bf4f6ebeb0bed9b4fd9668475b979720c850f4a62aab247217722490a59862f34963d04d6dcf503d4a0740b9752c441e02cb3e7ae4c6e69500a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83e61c315949e36ec657c05a20e6527be5fc2cc015080f051342daf59a5d4109717229d1dbbaa66cb3718643736aeeaee5d4c0487452626144231da59e97ea880', 16),
                    gmp_init('0xb983003f1077e9a1266ccc828bbaff6fd2dbf493bf5c8eaabd5a9b120594004a0fe35ad211ccc10400901d28564726604c5b8f4db874708cd1961bdc35d8a5319f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x147aa9e5851591917988f8504e41d36f98ca2d7b9d7396fbc50d1a25d23d23e67f03923fa077948b4ec9a725723538c37d78de8f69c3de838ad3d91ea604c2a4cef', 16),
                    gmp_init('0x1d4e6bb9a0e8cda9eb0ecdcf4d8ad040b8706c0b8a572fcb8599d4724e83ed421174f5a9a6903113b4e05e27b8db727e6aa677a299681fc8f308edbf0c2e3db7296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14f6480d486bbf588daa1e05703d20a16689152cf1690d7e00d62531449ac806cb8d4ee71c7da5fe623253193ef15fcd3c6c16eabd8608e6b5c6287bbca1236bec1', 16),
                    gmp_init('0xc739a28761a6760430a535529dac5901927d338b4bdb8e13cd80d654962c8c3421387422a7ab4b1dfb97358d7d89caf63a562f4a46023ebdf837f70ab3fe2753e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27000249d5d23d024dc9cfea7d792515812c8d2c45611f7050b066808fbf845f04b5addd60ef7a946941953a21b706637a480c9befa7920f0a10d99b8dd76b6346', 16),
                    gmp_init('0xabe1976e9573cc366dfa9eeeafca3fb6fa73c465a374bd9a263d609e17245931185725f810bcb1ca2ca6e3c1b0d79c4d23f09a7b4b4c9b27149ca6f04f42e026e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa068f47e2c1feafc1b9489a816181cc9462d41e1d2446c655a2f0d0b4b5daa19e9b2209fa69490b3e0a2775a7ce090b0457c3389a197bf06e483ac18ad11514e3', 16),
                    gmp_init('0x1b0de7e55332a94ef1dfd8fd6058f2d179d87df7926121c08b71722e3f9ba4e90e02f9c0f2639bc97d1b23efda4a2a9071f40d2608a3123615184a92c5187a0b889', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3ac9b12799316b303b587375d9ac7a136b02bae45e96eef3e13dbc6bebd99e730bad29de6dc5125bb8467d0e91a632c4c1a923984874f2f9cc1776ad5315a71ea', 16),
                    gmp_init('0x12f5fc75ef86a8ad12003919ba47e06e687508d9de43ef9028d4c10109b9df3e52c14e0f3565b2ac1fb4c1400b089b273badea49d7aaa7f75ba824a435cc9e89959', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x348eec2154b3c56b9a4bd0ba48920175497e0e99953be6efb1c6ee5a916c763fd243f74a7390d894de2365b9a7f4751a0409f880d2839a9d7691154399a1225bd5', 16),
                    gmp_init('0x1dfb8119f9a6c174f3c23f115aa3cb13aab55efc910bb9359faa17aeddf392a42ca198ce5e8addc84eb03c3da3fb48f0691e36e5da5bea1aa9723596183e6dae2d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f84c833a0dbcb7c973248c673d5b3b05587488e73996bb7ba0aa6279b8ef953c4b175dd749018bf390160b12342a609bd40ac5d407df96ab0c66acf9e0e2b42c89', 16),
                    gmp_init('0xc2c180fbdca0fb9bb441d7ac36e49c7ae6ab7c0f94c05f82071b1e107a09a8855eea4ef14d35cdef99bb76ff2473698ddcdf69707befe3fea47bc20f684d2cf409', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bd48e4897b20daafe63d74b7271bf5d6a968132f09076e3bd713ac9d74c7c35ba0019f5fccdaa3864ac953a7041a0943e42aa673bba055a5e690ac444b379bbb5d', 16),
                    gmp_init('0x1aa77fb062eef059ed64aa64fc4c3363b150f20b9b5a16b4f5496a02dcc0cd714ca4bff9fc979b0f5f081b58e6dc334eacf36c6aa7b9f12bf8c505e833aa8416dc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e340c08564436899c0701b1d3c60d4b0b7cdbf046f23afc0e30c775322a6457550a66468c309daf66fbaca555fa183f45cf5a2e570a8d459d2b4cb74403a726e03', 16),
                    gmp_init('0xcc082d870e95c3d3d9297f5efe083f4af2f7279a54407a9d72ef4486acc9764b1571a7955457ff8d6d91635ff0ee1665f51e4fa6b5c3e8c717ea712788f0179fdb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x19f3195776e7ce980e1fffc98c71a7fac87538c9f700e9cd47a9815987deb759db45e53f86d49724f86a7e39d7d1ca4c4e28aeebec9138fedd21e226a938f1ef579', 16),
                    gmp_init('0x1ef4b37d5e09bc42bebeb6d831fd1964b92ef0bd8d48eadf9369b30214cfd748c721413193b571c3c5e56aa5963818f21d0561d18f2855619d0ccab7b37e33cdcbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafc1b1ac19fe54bd699e613c3226b2fd87f88b1cecd47dd4916b23eed8a74bfd772c4167f8813abd6b3e343aca603fe8e0f97b8cab3f3f499db854567b979551ee', 16),
                    gmp_init('0xc9058ab973a246d66502cbce1c921ecca25407a9a02ad9609f7d4e90e630d68179f44ac91276cae6cb9d1e0eb35a197805bd0829247266cd9b12bcafbb43b4df17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x158f6f79e60ae6934cefc2ea6e46ba83339bd45dd2509f0f9488f65c0f7ef18d468aeab0cd88cca35fa0f685bb932a3d4ac3fd889550e6e4613f31853c99a73eba3', 16),
                    gmp_init('0x8a7fe54043d7edc198936b8e23414d688742e1538749e61bdb9e2811fe0827c781c2d9b19ee6fdb32bf21ec8f085ac780ac2ca4234f0c3cf4f3d279791e60d9028', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0c231d360d31186563c500addac54b512095c33e1fada1ce997c67b87390db0771c0bffa7930644f08379e46ca0ebc3bd0e1f6a1f7692de6961b51bb04bee80d7', 16),
                    gmp_init('0x14a899c6d9f1e4bff57f3a3fd63db2c0e26e55c8d2d6a5de0fd69be8f2d52e46eb988e9da731938c3e3062f6084763dc2a0c0c0678064dd220a0628929839bcab2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x116e38a3c64167210c0143517aaa6141ea64e222f778f96805d6cf775a6fa33eeb0cb8f069f99d3a6eeb81d4c7d73ea21ae8f635025bb9943c6ef850c0a886b7b20', 16),
                    gmp_init('0xaef978084cb1868bcc1b4373897184af7738c173bab87ddbf09e079cae33eefb84537f6ea3830f25cea72ea35af1549e382c6410236cab326b0fb62f621fc78dbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19f5024d5de7a8e112bf88f8cd69012b0afb6d7f827615f6ca52b720e01a80f7b13e6e9ba231d31cbae66d075726a03d9a8ca872026e651ca9937456b07d454e1cd', 16),
                    gmp_init('0xdf7cc109cdd89fc00c9323e3e13cd0549c89ce3192055a07d0dd57f915dd64fd57addfbf4f77a5f77564cfb996e2edb77e1143855e290612b824ea6d08a8749354', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb5dfd36385450471e0fad007d4ff8175c32f948104dcae40b581099c95f6f8c82680cc1a0e6afa6e0aa15ecbaaf69f2f4241333a9fd65cf3809dac9edf4222533', 16),
                    gmp_init('0x115280b2cd4e8bfb1f6ea5da47bf4089497ed4482700a435b57d1221e1d2130fbab8d67305e0875cc7b66ab56bbd66ab437b187ede77713916657a1bd6b9bedad5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f746f9c2d24988fe683df8d236d5311f544e55494935d8be40da5ca04ff6d1589d94faee53a6679dceb4a43aadbeced5e01edd5d969d2a24378f33504dedb74cb1', 16),
                    gmp_init('0x17c3c1e105518739dcc02d8d55b20961bf1fde0440e539322f353276d708bb411bd2c452f05bda955493e3f4a98661e3c78552291cef0b8faf04d0d9475fb2327cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c0eda33411fc50c8fcee198f0637d647cfdb0716ea49537051e8214f8bd67d9acffd709d2d08cfc8f524d9f422c02da6b86c63161f5058946c03f25c3c4aa5646', 16),
                    gmp_init('0x14da08798275c3a8fdb9747f31b40f2693d510a0f753eb0c3f8e9d067997b694bd4a98f84aa11d6c1d8458ecda5cc9f8790f495ac4f7ee1f2e63771081ba26d80ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16612c058c36722406a30176abaaa08dc307fd5df1593b30b2b6189df6fd7f8b20cc9e2c5e1d12b30bbfa8ac412627e6964643c5bcd70a170492588c869678be8ec', 16),
                    gmp_init('0xd9256fac53af76d59eab245ee01ef3a74b4210b25ee59cc085128980af18fd9ad68bc4c61bd1f3c45bae2e884680035a3e839d94196b6ddfb8f11e3160e2a9cc34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40d18e5104051a7e12920ffca4004965e5e036d3987fe039f419928ac5ea9234bb7ce9ace9ba35f50abc35c5699341d9ce147406dd5010591c31509afca5f6ceda', 16),
                    gmp_init('0xd688f060b35a709eab92ebfe5fefcd06f6ca92d084a3cc2e387e4f3c04e03a5dbc8e7f4a1b08b986a198b95576053a65e452e3ff045ca6ab82f5630cf3a22366a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7b72b8ee5075fa1ab602efda3db9d7cfee5ddb632b105ffabca296c88937b667fe7c3d762a1a8701e9c8d1d01e872357e6a6a4317986c613bab2a1492a5cba744', 16),
                    gmp_init('0x98dc9910a51e63aa2d5a45ff976d4d1b4c4fa1f222a7289c6b889200f98c9d97692a44d697d96cd553475de3990ec6827fe6cdd604ce02895b420f01bf09297d3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x122da0d1835b838b9f72dc53c002e2bb161427f9ac30f7fb178e294353581f948f261e1a5ac67c18dcb25c9835ce781207fa422307cd48af4a7b6a85b1106456038', 16),
                    gmp_init('0x44ff8997ead43da7c4ba7786af35a3f7098a7c07d8ef3e2228e9d03f79eecf2e380f3f3d6a84643a02ae5a0dd7f0d1ed6e66910d0655d865052e4d3e46df6800cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec7fdaab78e13f2a4e6fb4692d1d24d7869294f745892350660aa57c9655fe0afaa6a1df669878e3c8d296291fdba395e34625db146786490e78fbe6ecff0fdb4d', 16),
                    gmp_init('0x895b95c590457daa362a42349809bc76ee387fa7dd245804d9c8f5c7e0211123fa17b12bf552c52dd1efed2811b9c45d4f5b935678813a87cbced57ecbeec9bdbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11ffaca3712cf8b5d7ab646a148a3d68d324b2736352866ed7e5d970194332cb313a53efead7a84cfc0774048a4ea281ecbae1a509ab872540bd2006fad8a90d8c0', 16),
                    gmp_init('0x165fa7eba1954b0dba05038af212638469fcb72c6d6bc2cd75e5dccab399f06edac83523e7de5e844845c9b593f8791335aabf5095893f6d7f4c726fbc2c789acf1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x308be032fef92da0ea627036d3b960ebba293401d28ce5ad859219cee630277200e263fe27088d7c56ea0453e480218c94789e8dc4ee755906fd0261287468e327', 16),
                    gmp_init('0xce31efa39b78235b3f001cf3e81b6d0b43c2e67c9452c589810f60a2db9c21342587b7f183d7db7ad5c3b7560ebfc9a31ed6d75d4c3f789f6c7ab52e739daf8d6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffba9e2ee7fc3a693a3fa10b38a2a97512ab6457928a39806b48e75c318161e951af72b4a169e1c843e5ec0719654112664652847e88086fba04e8dc9fbcb97ccc', 16),
                    gmp_init('0x1c1194b06a2f3fa781751e2c83261282e7ee32aa363cab770f32367141f6c2b4160541d8b6d07c90736a256e7e864ecc9f187c3f3dd4ae9e52c3b96e7c33b70d15f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b43f2d8c91ef72cf1ef41a8abdb94f9b6160b0713b979cd33c19911c0008a31d2230b2b6b91e9519b4bd634a2e2939f855cb6055158ed2c14b22d8c3c4d2a1f241', 16),
                    gmp_init('0xf8c203514b1d22e8f46d83a77f5a4aca122cdfeee4e2d168eebca73ad02bffb5da279a4db82e652107a18c93adc1d7025f12112d24e915a265f0acf9b3d78b56ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19ba4da95649633a6005d1d91db6e9be88663892b7d900b74b6ca6583377f67341c8e736c0e7539de5f710a08a7d68864ca81cf16fdd1eaa52dad8f0fe4c4e24c8d', 16),
                    gmp_init('0x15ee9b121a16ce4ad4912f07c5534017e000f98acd90707b5181934b7ed7a6616904f0b5ae2ae9109c57ac186845c213ab4873b4f53d0316874cdae7a975c319d97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a3901e8b3364ed115deef9ea1d77c09b28a7bf63c0e4409957a18f0b92379514cb37d31608d18b4c1b61c49f2d0c86229f96b7ffbbb43d3a8d5b0d5a443f7453a', 16),
                    gmp_init('0xd8b8d26d09b14c4291bc5cafffd8e1044b2477a6b3589074e5131baad0ed044b107c31e97ad925d4fb19f7388464822f55a1e4c1bb7a9c388666888cf0e5a32971', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1341fde1e5b4e27d52c3930473535d38d664aa821ad9d8dead0e829f9d8ff94790ffe55d2d35e92d2dfeeb25d771f21b607998de1129145489a8694060f467a85ec', 16),
                    gmp_init('0x12efe47df93a64fe5d078cf183f1443257f095ce2f8a0c6ba44b9181a3067ef9101a6cefb80fa20e5f649571cc2c2868d9aaa559ac794b4d0dd513588e5a046e85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1faa5970346f8f667e69c4c029297b4d76d37801aa6b8dbe8d0428e6e53f05abcc590dd4ffedb848843d54fdbf525f8e4c58a9b51ac154f22fc007bffc0ec5ba37e', 16),
                    gmp_init('0x5bb3b0d58f6eb463b504443f3f5f552d4512b1cd4012920ccb427d7d5b6913e414d2cfc47b01c8f5ee1edf762a02996989f2ab0c5f28b20798bb69fa25b42d2421', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd77f63d331c4ecd52a7cbd7f3a027d18ee711ddfe3f79a86a3ff6fe73c50c67fe11f14dedb8783d25aba7334ad66782f6c63161619365983c7f4d3bcb3e588a775', 16),
                    gmp_init('0xff4bd0668e1e6846bfb491b05f6d4ee55c79bb33dc994649cfc6f9bcdc7c79261d3bcfa6722d307ee91d175313116e0d6b66e4ce3de7c35c02f463a32bcb49037b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c401ac6cdbba4ac0de83644fd8ac1b173a6b7eb6afcf6160c1855bfe48bf3a344ae0573a9689841285b2ddae308b1e0a0f0d8f978e4826dd932a2aa64203d3b51', 16),
                    gmp_init('0x3cce14cc1142eb89f238d6d3d1bb1431c479ff983edb34389be406000d38991f573620d337c1c134c1ff22db9fe98a6c48f2f329eb9010f35ee55e7b7679efa1ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1efa25b434bd56e385fd09b99bad68f1e37a43a0e11cb5c34106feb10fe697c3fb1367d5c118fdf476a51ac8ea416868e6ff5d8451101f9fab98c2eceeffddce52b', 16),
                    gmp_init('0x1289204e7f4adeea3a5598f7a133f438b15d245fa4ff7afc213a89349ba5dc304353ec3276a21b4711ca1dba9103964e19209cb0adc611bfe48201239ca0bef6906', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82a1655365c9164c213be1084ffeab4bf7e62a0e41820bf67544b8829c80314109a74b089104d9ba2e326bec51e7a785554498562900f1ceb13a5f2c022d02dc14', 16),
                    gmp_init('0xe7486fafce7e78322339010e8ed9e0f7c37627ad6b3531ed21fb1ed16d307fdce2df8ac059b2c1fe79d65fbaaa2ece51564b23bc7a4fd40f59e699e9a56e327eee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2b156f6c990036ffc366485cdf9ee629a1994a5e58f7c779726ccec2fc5178dadfe01d54baef39b2e6a999526ca292011f146e31d4df7dbe6705e71993efde213', 16),
                    gmp_init('0x1e4370654e66c9d259368a5780d03b26983ca83d0f7e0dbc1cabb38a9282f92b568d6492a28864d627b80ac31829c42c1e71e2d88f0f7ddcc2d569f8274c82a533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d95d3d400fda98f9fe066c8724d2939d5ae85150355bea310120b9403fa4fb662d2b82bd3980e002a1e63b8739486b4b7bf8d5f56a780b31cc68d61a80dc2a3114', 16),
                    gmp_init('0x17b01d09209cac20c0182b14a1a642f03824649cbc9b241de493d850293adaa12244f67d0331e07512be8803fc9da57faade8289e7213b49fc02e766a468b5c9489', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18cd54d8b4fe97b7e3acbcc0f83a9e4f8d2a2ef532561040efe949e285727ea6853b733105ed61e893d74b1db593321fe2cdbbf0f38e532494f606f0a6cefd683c0', 16),
                    gmp_init('0xb38d1fc906d90ddd0e3ab048ff5650f1ea3f84a883ae065af057a7ff8c11a2ea3da2d785c6248bbb10cbca54ebfe2029a73d6ef6ec7a58b3391659184c4af2a32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12cd92b59bf13e03a8cfee8f682c0b33d077df651a08be0557e47a8956d9a7fec081b5a2de5975e356346e016b843062a7f82b0c66b3cfe61a8402f7df76ca433d8', 16),
                    gmp_init('0x2d862f9f78d33489bdebebc4cabf75c49036ee290b3bf246670ebc9c1109cc9ba2ebfd06da60aff68eed2ee49b8c8290bd9c6052aed7507ec9a3a81fee86483788', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1395b8471dd97c654cc7278c60b1fdeb6f0f8e2bb92ae6d50a475b5618b30eaa4445a778c67ec9b442023f041ff594c614e2bd3d26b67326c7be7bfc99fbdec6efb', 16),
                    gmp_init('0xd3b3e25fdbd227a86f6a18640aa382a806defe063fda33b39f09573381294349a0519293a499a5d5cc02340f86ef94c5fd13dc4aa38bed7eee115a81123e959ca8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdaa82fd7fbd31a6f2fa131ea2135ae7bebc2fd66e44db635786300a32fc5d6363d6be70c098cecec62b469884dd7e7b5d55568005c7ba3a1a6e3169760d3a4d912', 16),
                    gmp_init('0xb3c220ab3a81354f606d1a845b3059f588e9436e30d958521139e88760ffc8eb05733cc11a70dd871c87881678934a09b72865157a4ea0abe1280d69100deb4b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bc4a1f9803068380c0080c3fd0d3453348a2e65af9483037cc4029492d91ad1858e7c6c272ef310a73f6c696dd743f2ccd98f7925a3940ff6f1499ff98ac49d960', 16),
                    gmp_init('0xa792cc2090b41f0b931fc6a1492f3e23233f763adb81a245cab90e371391f871e525ddcc92e3fc6c5f0144d74f29219e28e0f733ecb2a91d48a39427ddd9dc2514', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b2d83946cc6a58eaa5d6f9d2a9e553f3164942b53fcf9d919e18ffee0265bb2ef954b471b7cc8596fcc4af9e6a90f76d96cdf619f0dc09fb31293385edb0596774', 16),
                    gmp_init('0xbb27a10be2b9685de69167e33e388daa83c47b05fda30e7ac3b1d83a9eaa8e4f5ce1a60a44541186517c08bc5735b5b29262cd7b320caed19da1d2daecdf8aa88f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x133e5d8ddf467cde67ab80a0b7836f2f29e15a29bac6e0ddd06c33fa3d103850ac795f55d56a1174f31eb9a084a0f1180e9e17a6fb3164e9741f5fe39ed1fe5f835', 16),
                    gmp_init('0x242d4184aa78ce98323d3510a2da5acae749a1e298d490df3b30fcdb047800ec4ae8a63c4a0037fb90f4d89a2ffa74fb111d61299bd7e4bddb1767c74cc5ee0dd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x156088120b9be7886d1387c8a7e677a5bbc7ad4081bafe653e78c86900c62d5a1504d8eb8395094f3570542a394d5cecacf8e4e597421098f557af8ee911d17b705', 16),
                    gmp_init('0x186f9bba62bcdcab435170a625fc3cab7f6f88b491a277d4eb8ff4c7aa9f464b480f42a7ff4137f926f443abe7820a8fa987c9c49714f6c44c4986523706c398918', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x252ed577ffb1869190f3b41ea36955bba196ae7cb3666ebfb7b440bef6dad1f7a52bc8a0c6a7a05347726ffdb0926a9817c2b6b3cc6a62e31dda963dc90741634e', 16),
                    gmp_init('0xbf419ba8841b8398d38a5a5cdbf491affe83a5552b87a0cacf7c78f0e5c5f56c832a0544efdfb44926463b9aa822daf81fa3fa5778ce6e943ecd5dc527b188b5e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b497282c4bb5abd9e191b90b534ae3d018d3df414faf419fd270a5d8fc902355cab15feb705e6ae2a2ffd2583ebe4e27b7b4459a48deb80194ac7cf5e23e6c204', 16),
                    gmp_init('0x18a780d8ba986cd2952f9da00393cb37b9293763ddbb22228d1bf24d2f13a80efd7eb843186291285581c6a586eb1a2d82ce1fec69b17b6532fd2232ae08c7267f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f081e365a2a368c6d73696a6fa0dd34c310c47914ac3c662890f34076588c87533b1c398f40180ecaf4a39b2c1b5c102bf0da01f6bee05eca411da16733b2b4777', 16),
                    gmp_init('0x4b1f453d9aa5cac15e22cb75c12b975cee351cefe853142995fbcff5f594f704ca4cae7603b1ac31a40257c9f3da41fb830261282fece17e0840b207fbd408342', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4aaf5aaccd20253b96740f6075a0e8edfbb311eb1d1eed9d891f0c1c1426bfefe50cf96dce79b1c827a2bf4a99f469bfb74c5e98ac3192f6b3178d85d0416d2153', 16),
                    gmp_init('0x18c2ab65d5b805804c4c90c1c96590157c93198e00505d05d05da4dd333cdf6dfd34262c3d7081745f03f7fded26470a5ad2bd6968fddf8bed4383c53e0e2c5bcb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb26615d532a0013a39de5f54f81acd85a9e1309a4a0b8923304616e315433defabe92e4ae6e6738a5d9aa6b001571e9d32e5072714c3ff9b2a127344e29f66bf23', 16),
                    gmp_init('0x7605102377fac91f14c301f1334490bb8bf59d5a7ad07e966ca2dbac68aa7d5990e9794e6c8c0c8afe622344602eebeedfaba4b1f25fc94eefae7fe9461948c112', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7082f25d4708dee348a647ce852fc474b131fbff694d33bce2a3a36c2aa5718185c23425d20c67ba83b4c39d9d79176ef9a92f844cfb096a3ff3620b84bdbf53e', 16),
                    gmp_init('0xb9460f3c084eb7474bc34726fb98e0e612416b2a4900efb0221eb29ef86eeaed65858772ff0ac52d85569503fdb5578a1639efdd88955374120b83c1f0799941fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13561b4f0ac79817a3c75614dcd6bb7db2015ac51ce847620a8076583ec0562afa49487288dfd9c133a4e902a63e4334d8c5b5928f55d45821e5d942f48eea1b609', 16),
                    gmp_init('0x182d8a8c02c2eb78f7a680383de6177267ea86f0eced381c0bfa08a64424c41da8d6bbd6e145845d60446a0324db21aa65334c874f1303a98a8afa3db2917e1ade5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf632f96e37446dbb1c5907bfdfa12b55e6ffe413ff946486c54fb2678cb1d9580f36f15bc6fbb5c3ac6c479b3ea02471ad6da11ad55fd4843ba29eabe4613c2400', 16),
                    gmp_init('0x29b8902120ed8a464a6d20b61da5d76131e66728521ed3e5d9ddbf8e7ade871b1ef6ce8b258e757bba059d9308e5fd27ec4381c3cd2296b634d371325a5f34ecbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e1f08748ca2974528042ce73691962a9e08e66176982f659d0efbe8c154934b450716f49bd08fb385bf891ce36387044ce4ae50e7c00edcd4b22b6df53fe8f109', 16),
                    gmp_init('0x62940aef1c69d2e843e65207819a111236ffcc680d566c56d722be2a1b08aa96f6406b670e150cad9c4ea61bae7f3136b7aa2fbf79978b04cc8fa7abdd6b9af5d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x39963d8d94ea9058bff60ed3b8464f0731a745abbb06d26bb70d93055c2bc15e9d484a9fad3f1f26a3ad88ee68d1bb0b5bc43915e34e5eb96f0fc6c549c4c762bc', 16),
                    gmp_init('0xab9bb349dde746bf4b7b425421909a162148d241a0126e11a7fcb39f45d3c41e2d581493507ce48459b30aec550d25bedf3baf2ae6c85cf8124608ac087b67b298', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6493b7ee6baacdd14f84da47a9f07573bdb9d124fd4f9b32e8040de443fb2ab91b91b33ccb469e61fb112ca311c8f15492e89923fd09daf5228f45148da52d1421', 16),
                    gmp_init('0x1ca3860b232e2f1fddc1bfddff0f7fe1fbb7f41a742f20a94c05206ea559580edcb4fc571b7327e7a8ddc04fcd0256a1ecb5946d2ec149c5475b3af161f4be64122', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18799899abcb7e1a1ff026934b2fea2895a0d06fa5b8bd06035ff58d1a3e827166078f2aabb466a352ba367f217c559fd2ef58b3c587912dae29de5c6d810392db1', 16),
                    gmp_init('0xfaeb42bd232bf4379cedebcc5be1d6e0e64e7887fb3ec1cfeb4d946b4ee4132c27145bbef604504a8b0d5626e3d939d606ac96a04d7f5d72d8fd0bcbb355bb32ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98298ef458659df2ef805ed3aa0e3c747bb2bef5076c6da5e9776b7a928edd91236bcca278a1b63a6a90c26c69654dbbeb357f27cec71865967eaefe12155c337b', 16),
                    gmp_init('0x180de654c760f0622c9f2becff5032efe6929d56d57a75360e1f55a4c0b61d9811de07527fd206de77ad41cbae07953a4d672b109ca1972c6be3dd893935a79f8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155db04a6ee867c13bc5c7efec0faba72712ecd2bc5bf3bc3af2f53804cf0595c767574c5de635e62c0323c3e295aee53134052ae98e4b06088971b8f03632b1ecf', 16),
                    gmp_init('0xbd643648c3db54091ba6ef214ca25d711d78399e61a2c44d89766544ebb3fa98d406a4bc6c3c9ebbeaa1df4abb4b6ee70815d128cb7f56172fd971cb39ce3ff1e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1720b9f20bf82e33686d82148c75b1b777ec726f0528ea7768a04ee0b067c1be9095a4bbb58f10cbfad9c1082c869bacbae661e32f395a519c65836d62a7e90d114', 16),
                    gmp_init('0x16dd45a8c135011acd4a13dec95b6260aff577098df9027bb0bdc1026099cefb90c9f4b2cc1fe045a448df9d1d01dafdda6baefed9f8382c7492cb030b0cbe4b02c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba16ecf07a4398a2c4d56db4a780fc7aa4e085e6427fc0470914fd9893f0c7d07c37eb09ea9a5ec60c9b3be97f0e985d76ed3dd53caebd31254dc3246f0f694063', 16),
                    gmp_init('0x1e0e8ddfd6b09a1973f6b003576fdbadce851d3a59d590246f50e3bc9011fb4dd56a9dbc3e31bbe92e4e9b616acfd5885c4116743eec56e157f672219f5f48054e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8176059dad24f35b0202d1c6eaf0feca0ee29ae3a6399431ac5865161d3c14b1c2845ee3947375e952c95f46e90ced75abc68d8b0f5fd16c8850e39fd1ea8dc4ae', 16),
                    gmp_init('0xc3de2a85103235e86022ec92aafe9605e0666eae1c5b63890d32555cfda9406e88ab1a91c9f9404b6d63fa36033ef9812f260a7f7d5d01c1d829fefca13ac6a96e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9dd17e4da5cbb743fce2bb30c8c5dfe3c7727a94676598b94edd61bba2a3a8d3bdef702a2387bb7a66dc4ed5bf481c4a96e39e6b9f63c1df85a24d834b256556d', 16),
                    gmp_init('0x19e4e1d6368bab6ede9be82536422377313d167f6e5fb55c4b41003a6d130a617f53897004ce092c972d7ede2cd4466a86894d666906f67d8afd333e98d7a2c22f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10b732bb871d149f7a9af630e177990c87ceb61d86ad0b1f1b52050c248378742846a7c4c8c0856b5f1abef3a89c72a7a119e0e69039756a89a3170aea2fee75a15', 16),
                    gmp_init('0x19abef62db90b1e25ed83df81427d9b480f6eaef627ce74f463faa32dc1f3122b80fa16d711e922c8ad76ff73d5c7e0d4f5addfbd666907905ba206b1cb90b0fdb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2dd124dc8e35d1b360ed54a1264c4e86eb68d725ce6ed070fe34572dc364648de5ba00726be8866040c998b6e623e31563ab5206b00d7552a1d6a82c9765841d0a', 16),
                    gmp_init('0x8035af3228d762b952443ea51736e20e6d11bcf8295eff5e12c81f6ccf86fab7b8830767900be67f558ca6197d165c0dfe9c7c68fa5813d0ad35ec7cc165dd26dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1837e34653033232d06eb180b78bb62dfa03ac627d494648a93d1aeccc782b271df42e9494a2f607af3c3a2b88e277351e8f06dc068ccf0762e6587c0b191979247', 16),
                    gmp_init('0x9c6de1de5d0033008764c97fc5aecf40afd55dbdc01850fb56b58ced0b436a641d2610a9b247393c4a772e24a0015742f3a380334756c91ac0084e8c75e5c2357e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a830572b917cb49b198db80b124f61f6e4fc9352276b2cd06f0125978e06d316dd8a5b415b54180f6c92a77a257c7e4c198ab62235d41ef4f8117f853b1216ce4', 16),
                    gmp_init('0x17d403259961dc278919c52d485b3b787eb96918899689c9fd07a9ecac3c35a7a0d766b6119dc79026ef3de22d7da9e24552262398c365d33d04ad48b1b07419f5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2aeaba30c84708764167e2e8108ad99c3a3f5baaf97b193176c8f46fdba6d421891f39c7034cfc677ed0d48ca4f0a0d8b75e0b3f6b0fca48decda0c8e17b306c5b', 16),
                    gmp_init('0xba00edec23de8cba2bf5a54afd96faa0dae870f486a2ae9d4c309c147e87c326cf9fce34ddd647d0256c8bc2c5c3746fadf52e20ed09efdcbaee23258c1ffe6e05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40501825d395fc6b3c27e7cd9ba9488268f57d5af2c252768458ab134bd80610114d866b56ad562c4041383ef175c25c6cbd719855cb93625128cd57903b27c2e1', 16),
                    gmp_init('0x16f13ae4507ea475e6d3b0629aa6fb98a0de1631ce0052752ca1dfe94a3f4d489b5551c189dd09f668211f38e084fdb1e0e0f240bf5d201ef8689926079eb68a11a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x578de8b50e31dc2b1efeed69dd33fb0b08fabbcebba7a99eb142abb37d2c50f3803b47038986f0eb481d1eeb94dad19cb18dcd64f0464b230c2bad7686d90119ae', 16),
                    gmp_init('0x127d9a933b0636e78c685cf17eae768123b54ed0b21e981e51747a0d6b0a6e3e5ab8786eaa339974124487789a8258485277094fc36cf39bec8e10dc8a6054ed7a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x172dfea7f28f0e4a66b3f4d85bae9d97733774bf584d4b738b8455759080a3e21440bbd1313d0ef31abc3e51b059504c41bd09b7877c6d36700d388e288cf34553b', 16),
                    gmp_init('0xab026a0b0842ac45bdf4b5eca1e8d4c9272ab9e8f773eebea5397ba89f0ab2b85f54d8c8934c5c741496193c31f2b2cd4f7a387b8b8e41c0e2a6b684558118ae5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7ccd7a2b340553cfcd52dd4bc495b60a02ed82e6ee3c8ec5fe595f2646749eed0947169dc23756ffc552baa3e4dde494266237d17d14bed774b736d32df234e4e', 16),
                    gmp_init('0x1503efb3b85504f582e3a4322bb3e1ae4912c9924b339e49b523bf95cb33cd6cbd5329f6b4ee2af686fc433363b1510c24beb68c0d9c02a698b9de7e73e889fbda2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1292e25577782e527cd4b89a84a7daf139096ad6f33e1d69baa27ff3748434d667124a748c0fbe510aebd7c413ddf12a57046ad91732ae5ad96a01f0a1936b984a3', 16),
                    gmp_init('0x1fc85f03c614c3ea88c0f1d88179ae70e2c04e82314346279b32af1ee2faeb8b26d5f5b07e21f56cace67b99de5fea12b29f5a9b025fa3cef1578b130d2615c0331', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd21c4596c101fb83b18e4e16ed5d1e038243b3a57b7b83b19a4c1698920b0607614361a0966cc70fea22d8a8e5a6d3c2712929fbf993d1298f63c835437badaa12', 16),
                    gmp_init('0x1648bc381adf2c8b56b5f0823b621475e4162ba191b129e0870999676ed0f2796765f67c5799b6b85b6c49eadd53f53ec1028efbf803ba6448b571e0f7a2d0878bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae7b6164392979902c54edcf4a3f70a45c707034f3d45cf3dabd51af94fdd6867fdd3ad5a22e3df8f73d605ee53599039b06f9f838ecd178c986b14b1452e9a506', 16),
                    gmp_init('0x119d50f26293a858d009db04ddae93db974ba728133fe4fd2efa15ac327aff2ed81af6074ac14a97baffe5a3aaaa6e99d388b39bb03b8eba7147d63ee2728389bcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8ef4ca473454331349bf29f3f4fb1c4f705f65db613ffc12033fa8470a4762cdc3f7169f242a087c6ede2b16c796c212c6f50243de8b02105ea0d44c4e34e4c6a', 16),
                    gmp_init('0x1043fac01f29d08bdadbe8b410c5daca40a26f861228e5195c9956fef511d44cbf6d0423e4f260bb4a9ec6ab1d7f82ef2af3fbf6bc46946b696e59da628331968bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73edc72c8efe2a4f42a524e6d1e0fe8dfc4eb51b723af99df40eee17b6ada473cdf443c158eb342a9c8c1ecbec5b44cf88a9fa4a5e9179b6f0bfecf64a8f358002', 16),
                    gmp_init('0x5a6835d3592850dbc708b8491ac622836061a5bc9e5a9b263ce85c5856867909e70f6ccbfb6b51480675ac76b751883b25387c3874cc80c3b034eb386de0cd65af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd102ad7f6ba5888ffa84b25af45c60a585394b964b7befd9be8ae86fcd1b6697583e5343aaf4f6ce311ec53bad24a21f6cdb161f18fa7c7c3dfbfa18bfa4b8ecdc', 16),
                    gmp_init('0x1581d8af88339ec64d806fe7f0744260b3aae3b935bc94d54919249e8d0b3e18ad78d0d9ad20ceb648029425fb60333faf06e16e6e6d2b8e1390b86e101c83fb0ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1063244778e33be7fad03c27db727b8c8d4d9575c7c3b16f0d10f62b5c1ed8502d84a30af61043b9728fc2aac10d0c634239b1fed27813d91e097330958b61d5315', 16),
                    gmp_init('0x519851d1e84275e8f91cfddf2bf851b23900dad493913111f5ed42f1f0959d0f5ab5da061ce246982620172430409d603d81bf82ddb3c40dc88537bd35641d5339', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdba9f91561f525403906b84c1788917fc63bab6755f69118217c88b0312a6fb20068a86f6134fdf8e93f73018d8e853ce0c4f99685476bc9297f7941d9888f4bfa', 16),
                    gmp_init('0x5c7dd617af2026cf1cf762fbe0d91afe68db1d86048176f169203bba75ed2b085baf289ebefc43ddfcc66e8c823a33b42b6571dd2beb1cb34076c522936dd119d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ef1c8a857b06d720e95a4b9e599e2f5d64855cfdd97f771ce56315e5d7792054be5a64757938c494565c5e69621ed64a1309c8a5e30cad85f147f1a2e7e50e60', 16),
                    gmp_init('0x63fa7d60258b5ec46710d64e59d8ed6127f773d72c153cccbd965adc12c0be6be56131a11ffe98e8e0b47cfc2976020919e155a823f37e82a72331c4282a92c2f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4aaf8d591ca3c0ca968b71cb731bd2bdc96fde628029a7a46d7a2a77d530ccb948d9ea6d92822e8a021bf2bb513037e209679fadc6dab47f91fe4cd502f1b7c167', 16),
                    gmp_init('0x17e97bd03a875cae95789434ac1b9773a5c4eea0c37ebc5e005098bd53a148a56a4325d3921440980cca7e6e11ee7dc1581ca7202764f07d6f063fcc569d852c164', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d370510bcaf6550a52c21e290a402e75f2aedcb84bf9b525615dcd8adc9044306aeb71194671a4ae9d29813a938589fa9d91e285345c5e6114442afc6dddf45a12', 16),
                    gmp_init('0x1f1e8c56a66710567a7de2a17658d7b427d149996604f3396366c5dedcd4676cd538ac9b2825fb4a6caf6906268bb1868bfa14af3a6f79d325fde9843e884f2532a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13f8096c5e332716027053aef6fe2d6e01e252b0b021d27223a36ced50a1a715c73457d656c376141d47d51bfd5d061da1289d874e605ad6cbea10cda065dc2aa4a', 16),
                    gmp_init('0x1d5202201c752f90b3bf7c4c29e5bd5c30a38025e0009bd3eb9f94d8299758b7979ebdb7f1717c277ff8af63026ff2bcdd95aa25da659cc57011864a030cd3635de', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x300e740830774958be1b6595bc4d99cd14f68e024920b48bde05bf63132096ae62be8c6286455d3ce1a55ae258e583c40aeda0a24d684e0169ec9a8956f6d20eca', 16),
                    gmp_init('0x10b34815491de00641ce172cec16f196e555af7c4027c25d1d2b859ea32f5cee12be2925f33cc58a62a2d4dd56e38412a8d7b6532398fe5a5dd3241b0df9fd73274', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47eb8a5e147a1e6db10fc7a16f14d9f7ce0e2c9da9ea3beaffbe209b3c80a6fcd4a1550183f7a56f83611101b13e6c3d97cbc7bd56645f44850869ed35fa226aea', 16),
                    gmp_init('0xd979fe69660ee012aa42b20c9716fbcdf589303bc5193d67e314afc01cf8d65a07e895d858329af78d1383a88a412509f0449a7852a430d4c955a78c253b0fb32c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51ca1717c7a1064d23fe9f3c6577e9157e0bc05b6cf1818b4479ff5c18cbdbc904340a8462dfe25a99122c33da8ee369ba0a0bd3d8cd7a9ae380ca977c4e7e98f2', 16),
                    gmp_init('0x13b161bd257ce7504c444afb84456f1b54128d7846beb7476191c00866452e59382223392239f9d80bcc774ab6f015365fc6208e87273819001ce8eccb86a365b28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c51ecec8b0ef8c948eed3d08357501ccc779792bbee62d3449200714b6de9a9fe79a66979f4548e12b925aadbfbc957f9f2251da23a1ea21f7480912f507ce79e', 16),
                    gmp_init('0x10d9698b133dbf27b26c473203105c09ef79ca2be8c072d9506ee05fce35655c14cec60426b20506a4849fc7dd0c24a7ee70e28c86643cdb88734a634b05271e42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1705f7a12a33b290dd7873f9a6067f050f040cfb825ac397c8341f2166e90d44c03b74d5092525a6863af5ff28048d88066f61eb17ad4b641c68a8100586e98d8d9', 16),
                    gmp_init('0x1a0636a4f2da2a8e97b1acb604f2ea578e10d480b128542062e04128d8af10410682f9eb2ce1180cab8049a706f61c3e3b1d9ede081d20da7e5c4e73de84ce77c04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ef33084debffab914ccfb484b617daf6e18aec5ffd05d488f3f75a31f8760c3d89a5fd235bd9ea013045f48f34280e30097e07c04354faf6215079b9d3a7de86e', 16),
                    gmp_init('0xdb08ad5d1d42e7077acd059751d98b108957af134d962c6ed07214914319f83ea88540d05dc57b651c6789f307a61afc248e2bedaf882c69a51c034f37dd5bc9b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10da5128890ce6d2457973293970c5abfa3a40b0d69407f53141fc9c16cec3e54ea7580495054d20a3e49a9abf1859419f83e30d952664607114aa444350d46ad1f', 16),
                    gmp_init('0x155d3d43691f3358df2af8321177829d01dafff8dc6076a4de942de3e8ac3e4bdd29a693012364c81e3e4cdf085ed5c47e9fd7a4486de3a847d6bf196232452b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x268e63481b6a0fa8949f47acf6b54f368de5d09a7637763d66a78e42968f17428796a78639e9ba4592ce6b5dab9e9ec8460cfe9416cb029390163cd52464d8c387', 16),
                    gmp_init('0x14c7c1f3dc478b4e4fff4795bd7d24e356d8f11d0a4937cfa73bfa1dc7399d8601905ac75b011bdcc7dfb1c0c7faa1d7c4299bf02aaca0af033e1663ca805c8bab5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x172736f0e04493e7d8b402a49a776d03825dfac850702f3862a0957320fd0d86be7b74345e7fc3ab5973bc86e99279b4f8d47862d4e1db48d74e31d208e0043e22a', 16),
                    gmp_init('0x1aff41ea7df8f222fb97e0dd84c262cb38ef80d6fc3c3fca40004ec7b58686ebf6575f91bc3931f0f65d6694888a16d4660bc31087346a27eed1f6862a84680d6de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8b394a9c29a59e4c7a72fae2ecb132a1779f4bb203337466e92cebd97aab4420fbc7dd28b040d20e49f08c453d26de5385940add47d758bd33dfeef486fd25746', 16),
                    gmp_init('0x13b922daa8467ea4ce306f0ea1f949db3448f8c1d8229b17828c357bac87206739f3be40e190e539ed07e3917a871967c5624b453db99a310e36146396eb48c979c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15dad329cca5edc79eef5303955af394c931f5ae4004e5e4fdb5b087a3397ceae5911b90fb8ad2a8b835fea4e6e456688c1ec88269b7156cbe4ac180dc44a46138b', 16),
                    gmp_init('0xa9e816f4a4ccb90ffc22873d0cdb265acbc30f1bc2a83848b13307d11ccecdb32e729ea6cee99e651645114bec49d8b17332dc201f90f39767b8ceef2d257ae3fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1845bae9fdf71dcfa1a258484271930216605d5c8b5ba555b7bf1dfe4475da1c32b647d568ca5eb4e66a35005ef71f1311bdf01581ba1940ffce2473fe401d47863', 16),
                    gmp_init('0xf0eb75ac8af21fe811f34842d1254d5d7e016aea1fe8481e8952ae5759714bc9211dd0012bb1d24a8f1cdac297fca4fbfc3db39e0ce55a5757531661b422bc00ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ba27d20f06fed120fb1ec245c07ef47fbbaf1b4d6efac80570a6d9557518f1e8ca751d08adbd76a8da81ee8c3529c1f187581464ad9c78fee21bcccc5fb176719c', 16),
                    gmp_init('0x18ecdc157740c259dd8cfa27845af773928913e414eb29cd7f0e51fab0befc6cc7aee08dc49594535540f1873b7afa245b4d3b7e492d4e31fac6a34e57eba257f4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31784f1a8de0c6dd62ab478eb54514704b5bfb025e3b09f9e1991f01bd361c98d0c987efb7b9d48025aa53c8461a3166bd9942ada0c51b39c727a66dd1e4c74b72', 16),
                    gmp_init('0x17b207da69ed45302c9fee57f088ea10a4b0e3cf40f99e2b833bf9be668356c2595e35a9d2fab681466e8128bbe1a1c8b83ead6fb443f3e672342757f2cc630dfe5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36f00275a819984ee4b4af81f82249779b221fce35f0dc00a094f2c39f80366d0cb49d6851def871ef35fef624f0637183855b7b3541cdf564232851324150918f', 16),
                    gmp_init('0x12b6cbcf9cc72ded64265cc96cc318f122392cdd75f5f29b8efd2a386a5fbcbb9d92e7442bf9e2353669a209d66ad686984b86cf9725b364993cf7b1a790c8d67b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x184d86f8fba5ee724db9e5811897c362011aab877852335ff44924427f4b4234a240a1518363d12b7f3766c2fcd373c8e18f593d32d6c6d43ad36cdc3e624acb1fa', 16),
                    gmp_init('0x1ed5ff6a4fbf1a93ae348ec2d9d9efa3a6fba4d369148bb144ac1714c93641d646bb2429dd48811560865a02a289ccefb920a315324ef9562c525f04ed9c9558569', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd361b46241cae4336a32cb71643a892981c394a6b7afbf60dd27b590ede0375bc806a54d7f989fb866c839860915be119d954bb8753a25e2648661728eb584af4e', 16),
                    gmp_init('0x1e43a6f9fda663dc2ea56b2b8b50a897789b1efdf09b6502fa8aa2b21a31b5430b1933a2568f9fc296782956a6eee080071087c2e6320f95e36a2e80eed970af48d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c63270ce0a1dbe7c3dcc3274454139c8dbf48de9f41631080df1e8b23e116da23e3a8496f853666cd5cc07eafedd220e0f5fa4a38e0b3dd67a8b2f31a02c825d50', 16),
                    gmp_init('0x1bcdeab3f658a0c471ec3bbaadc4f1a6d6d89ca6db1ff86b9ced15fe663df0d7747a95eb4de357020e91922bdba854941f48295ec2dd94bf609210895785054f6b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x813b07fa653dd53708bd873d347064396efa1d7d28c4496eb0a69a27b0ddc1a2b16647507c0c8f6a533b15c686ca96e4ae16e4f43f7ccdc141874803fd759f021', 16),
                    gmp_init('0x84c9f3341ecf810455273f3f4d4e5e6112ba6c1f6a8c2bdda526130628d1a46e3396a0d7020867bc4ef3bc5022172e6d9c0f48a5dfdcd3701897373827dbf8a088', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd84e82eb4b1e10d24e4f078dd2585b63658c7ef452fee7427c5195e47d0237d6bca380c9855e392278047931dbb8bad3afabf1e75d0a7bfcc9677450828f3756c2', 16),
                    gmp_init('0x78cf9f0ac3a2e1f4f5a74f09b1ea362ecbaf2b7da0c316df835505265acc521553ffea4d06987f9fc3d2a58f332c50aa4696746e43904633f2da54dc52610b349b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe67b14d15817bf3be66e7937f5a861e714111a06db71e2e120e5f8b83bdcca4f00f71dbf4f77ae64fe795b32d17b2f292f24daa3aa29be05bece7ae0b6075676df', 16),
                    gmp_init('0xa4cac9948fdeb0bca343d3c57f5e8e705b5f1d2dfca075f969a21e8abb9fed4b2fcbce8c3320f8d0234384ac259e26fc1c28e3fdac9325722ba8748d319d04daac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12267b54b1fafd5a3ca9ef2272419b3ffc776e7ab703dc4ad549d671ee13f21f78a8d53eff1e7258f8d585d17b6eab320c37ccb5bf3d80ac20017100a613bb93eaf', 16),
                    gmp_init('0x190cbabb3fad3f6ff9f5e2636c78da3786b90ab63eba9e332dcfebbd9dad2ec4ad3768d5901b6e2e180e1d102344ca49a1a237e33d97e4ae084629dfafb33a86edf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1febe277fd79b643a853cb05aa78f8e8224627c632e0173942645841b1c608c74885a2b2ec87f16350a8fd47e85371620a22090118438287af8cf8e03c512a09898', 16),
                    gmp_init('0x17c5d370978c823b95458ae40a665e2bbaf3884016974b71400ce09f24034b950ff78c211321e5361b46b90ac85d2e1d225e88383994f7ae0e6950843e61538cb4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15fea7c3d1cbcc253888af89b816d10fa0a27d37bd6a453592ccc91de9cb279ff95aaf0a5d2fa2379bf15eff9a996d20f3daf81240a631aec1649c6886cda03cb43', 16),
                    gmp_init('0x1b8f1286846f9b356f417deea876fa1319420c4ff83cdf11caaa7141ae6b6dfa602a1351c984778834df63490c086b3d4b192dc7756c61e7cd6dd9b3067213887ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5338c0265c2bc04c2746b4341ad0ecded718c86854bbc19fa6b921b17dd0e5ed90c95cd41b6f47c4d92ec4be9ba51890335b6d8b51fd3a073e40afdaaff53ee70', 16),
                    gmp_init('0x74b5337b8633627e586ba2dfc32f0205a8d01b6c435132fd9e8cb45f3b1d0fdea72a313ebdd86b988505de29d13086bbe26c7a2526c81496600d52fd6a2b520e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e1866feea1c8a4d039101179c5909a3a7a4f32ac1aba733cc0eaf6752bb0f8d83f27c392185d874147a884b6f76e789299378773a8ab9749fd468652edfa2506b', 16),
                    gmp_init('0xdc247bb309c9d576c8d00c30259c1c64231087a41c10a81fad9f20af9d522c5d9ea850eaceef45d2c12ca88431b392dbafbe407a0e975953c405a92eec6c3c0a65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1930c2d36ea7563c8fe364239cb22516d836a3c22bdc5e052532179a25512d422b04a3d3bf1caba28beccab739c348312d082a252cf493d1dc39a5b562c81e5767b', 16),
                    gmp_init('0x130c9c3b76878515c4785bf45ee4dc0fd2f4fe4e52084199883b8f53841561f94db51112b40296890cc34e5eac6a75965bbd0a3ffc4df6d0e1fe08e1eeb5cf7941c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61fa0e5a5fe999678ed6c961741cf08785122660ac6ac78002908c54a0f7eeed39ccf8aaa71a37553a6ee92747a70c1a3c28bb830d77515969ade6f5897d504a33', 16),
                    gmp_init('0x22794eb14c7e1b9aaebfb25f7087a539bb76876c8caef1e1a3fbe294cc1cd20cd53381a0d2900ae9eb18c6c398d7b40d6e24dd05d57d17e7cfc7a7fcc65a59cb95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x153f608c476ded1f6eadf15604d34ffc0f2caa422c6c320d7999960a6558c90568201758f2a3c63b2f7aefd847c8257160cf99a6a9a748aaea58e352c1d34e78e59', 16),
                    gmp_init('0x1998c2eb67c43e78bc6fbc8be29c975d591e0988ae958c5dbf328a70ca100a867514852eee79ede40b54d52965cd80e748fd3740fef745a7694534f6f97d9581919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ddf5fa182ef13ca06d52cefdf72df6354ad0769ee782096967b28f21cbbc91aa6e17e40aca28c295768196ab2d02058b0526231065172b52b086000cdff2c104e7', 16),
                    gmp_init('0xff60dc319fb3285905a98419eef2ec89a461a89c45198db3c3f4ac71cece052d7fa771bd3bcbbfc5f527f8e1de95d9dd90d763cf37c7c7827f6b09768b29ef4065', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7e23a3bd0b6bfda0cb388fc8aa5119f83e08a84131b4c0b7b271cc925004b07913a97d4ab6b26d5c694d86f57c29ad09a67c7878a3f4a25d857ddf47051733b3c3', 16),
                    gmp_init('0x176ba9411a9a3b387b7fa4668078765145eed0dbb7fceff508679f9ec9033ddc16c9283c3318793d5629e157e18fb9de6dc439dc785b52ad215dfc7c8448e549373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc41f148beef4787b699634588aa6ed29a77a3bfc07a0136e3a5ad1a9ad7e3fb92a3a338a61a97d9dcfe907fe389b08ef52da8979a609853a4319885d110e10587', 16),
                    gmp_init('0x1bc38fe857ccc6b33384ef6315bf6ce02c0afad4f4d2d6829bd857a525eecff9a6840b396eba4bc1ed1411c67084c20702323b6965e2974ee2b8671195ebf698bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e9cf87d1d7829107feee011ebe04af15288cc0f7121ceafefc024410ad4d6bcd45b7d3a81642a2378a869ee262fa2cdc946ef4ce6eb6923622d9ba7e36f07eef9', 16),
                    gmp_init('0x8f898ca884ade69b503f4f5bb0a26b6b2f355e5d1ae07a08f1cbf17fcdd1921fa5418b618681a45861f1cda5ae6602e056632583460ca0c30349260571e07147b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c5ac41cce182b76cf962a209f64de9be52e3635bb83abbe5fb880b10b8a8d8615eb6a634789ec0fa14b3a5499232c0e5a98816dd0b3fba73661a00fc111c417fad', 16),
                    gmp_init('0x1dd191b45fbb247a36ed5f5bf2dae9c82f1f0f831ae6d2875da5858c3df5761ae9c787b94845e2a7e13399011fb3af5565c072bb2ac1f8c7d2c287c7bc77dd1e73f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x560fbaa44bf84e033ddb6931a6b886d407cbc0c737b681873c0bcf4c31379a4d0cf68a09f76aa63e89db480d2e5705d868d6e75054041053d51d2d4ab0fe772021', 16),
                    gmp_init('0x198b8fdddd93c9940688071d1aa40353dcf32f7c06d6bf4ed15de65f7188125ebfbf339c91aa5b1053a37567e5bf7db27152743f6818ebc0b285339b4f34f90a0fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b85f1b13be0edb983996217fbee51fb7160b2be1c4a319dad80fbde7e48db2fa66bd85d94dcddefa2f72fdba4874007ee7a01b38990c7a0f01c081356b6965640', 16),
                    gmp_init('0x7c04b740bd4123f812c3beb73bfeb86870c6bb892ca4ef5f4850c215ba1f907ea8d0f042ebaca3e106659bf31e99b56fbddd77fc37760a217cdf53aa14ecfb1d0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a6f4fbc7eaf66635a71cf55a48364ee9cf87e0ca4fd417e4971bbe7f01f62a49d6e48a1bce89e659ef2e13fd2b08e0e13c27f12c32b8c12f9ad50c9fcf6016e8f8', 16),
                    gmp_init('0xde1307d12271de39cf17654a579602fc6b6acd3a8e7af882b29e2a51594fc084ebdb1fe0f2404a92fef6f097ace8f4d182affcad4b462ebdcdbe3e55113eb12a0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4155badb2cb7437bee274649f2241895138fdfb3595d80545caca4a05f200d2fbce56d15025ba43e0d8f4b30d2f886637c2c849a1057592ec470bfdd42540e5c8', 16),
                    gmp_init('0x19c8838409e8d35c9de12559573853b51daf158b0b4c4ffad5383197e1e6a6946fa02f8077df2d2afbd3982e19643850a1d3ceaf45353f5933609195792c828a666', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10702a2654c2fe56ff96579f0aee1ad51858d052d22aff1e407f6e6de667cba09944ccd40a51df7356bb092031359508b562db10df96f401d40a844a48f37315ba1', 16),
                    gmp_init('0x7b526cafb534a20e653564207844f0c1dde93040f86c2d5d8dfbc0f239e105d3c26fe2e272218c2d74d1bc98865cfa064b5cf1f315767802eafbe7245fc52e3a9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7b0f49eea4a8d4e72225a7216a5a165ff6e36e89079f26a8eeef79000a056ccf73bdc37f4acaef9c45808812d9341e1131f331cd769ae1607a403b2cd3e0bf039', 16),
                    gmp_init('0x1116bb9ba45d30f7aac0af15713b84b3fa1f0f06e6808be24bba8e06dea1227fc18af079521906c3961b4578857fd3bfa434e96fcfc7a3ef5e37df03cd678eaf6eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a61622621fa6c45b25e623ff8d6e6f489453beaa128c9194033017088af09b15181401c4fe3d025035de7f735ad048c6f7dbbb0d7f2015daff7055735e2734bc7c', 16),
                    gmp_init('0x7ba7c0bb935f6056cbbfe7989e08775f1f800a81e46c1993a7feccb403a1c387935ca6538ab632a340b521f29dda79f98821963a49f0c52d673aacbd8120e1fd32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14874c375ed8ef449dd7ee7debebc20857a3c48963b8f3cb46ae1604051a097e0c1c05f48389399a9b8120231908196da4683285cb7a2f5d3afba1f3d04e155a234', 16),
                    gmp_init('0xbf88a9ca118f7d8eb1858bc67c143e34c58910a818006cd4a8e2385ab1df20e4c085cdc7708664d9ae5f24ae161c6db58cf65faa71ff513f76086f7e549a22d3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x354162baf5b4aa23638486050d66dfef5c00b1952db3c22e3f092fcdc0ecb5bb0906bf1c0ad420a1b914e574efe27242761517db0f7f0ce3c9ac6ed780d8dc7694', 16),
                    gmp_init('0x191a33a21d96dce1f27d299ea6c8637f1411ae7e00046198910da7edb5aefd29098632d3b1d9363d0246a38a6a0f311d595357224c0a78fc4265f188ef1ccd62e93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e0d7d26af06b23588733aee4fb0484d0cbbc9f71d997f67e96a79f1d38801282507ab56329dc0f10d3f006dce258e5a7e8d42c77f4fb31e9533b557a9edcbf5e2', 16),
                    gmp_init('0x7aa80f0c62159002ba8f2afe546ec1f56138c539278def3d2767efb3732e9062b0c5e21596f735188919dc9a0946a66debe3c380900abe0533ae584763447d2b4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123d1ca92f827fb18b44e67338fed5303f8b30d7ace4cf73cd7f061a2f945e43f1e72f64fde21e6dc7a040cf7e88ad913ea564bc4eb99fc34700574b1c11fe4b65f', 16),
                    gmp_init('0x9bbb68361cacee51118e4c78ee7a1efa115343239fbf735e40222fca782f6f9062bb01e20dcde12819eab1a0b3ffc4a720a1196425dd3bd645ec92ff11b2ff61b9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x183b7c46ecdd3de028594a5bcf3676814519858c801c72d6d0afa87d5876dcda98a6ed3c53b2a1846d7429f6b9f52aaa9eb51ac63d71965464dbce0f1074175e7e0', 16),
                    gmp_init('0x14db50dd13656b8b217fcf035f9c08d98c5bded80949b2fa5474ebfc5ba9ee659a999db13dceb9024c5cf9d3acf2da8e6d4ac9c2b0d0f38e6c1fd301b76d2dfd89c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78e768f54dca7796c942bbd30e3799384379dd8d7bf5877e13106648be2cc726d41d7b7be1be67e98e77078e91251deca82244536251340438a198d04b1b9ed16a', 16),
                    gmp_init('0x1ecbc9f2e800b15d8050e58b518076438719c7070b0dd73510244c2aef6f6f9abc1186ab6e8df08373c6a84e609ce41ac1a0a2eff89e93c20d491c5e19d1acdf2fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb9cdb00cab17b440a3d06b8d0db55f57eb8e35a40c76030864a020165d5c0cd185771946f37733cf51b88ad50f4176bdc311372dfe03b29b7e83dfbfb6987a9bc', 16),
                    gmp_init('0x1aab2ae0eb3de2ef959b9c0834eede62895e80c3d14fec8a0525b8e637420a53cdf22e8d92e10d63734f478205885c69c9f40b0c10700ab86c3840ec34134bd8619', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12d9c8dfc0caf781f08b923f2471d9484f2a108e52a1d62fcebe3928456988a4366f73d53d11cbb7ea0786b00f8c238ebb00a9fdb8e32ae28f34b67fb4118d0a514', 16),
                    gmp_init('0x107a03aa304040ed223d707e9ea43d3b8a7429c4d4dd744a2cb6015a068fe0747cf91a22920d86c69682dca15d289c87f68f7ef7e581a01f2296485c32f15c72d41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee56b717bddd80a8c79a7b080cdd7bd5e7cbf590a9ee805f64746f70005052d78030609081be02c6e2b544609488474c74bbff71495722bf660691b415718be467', 16),
                    gmp_init('0x1251a3e920514e39cdd72db99b73136780b8388b323e58af7305e76792ac02ea242adf456a85ec8a509ce5420f1121ae0f19b309a8f804be8d164274157ac340691', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1031db2468f618812fa7d41ddc11599c1b62ec9495bd66a8be4009c479c127b3064f871aa25faa1c258e8dbebb2a7f03a6f7bb434ea5d939fef2d803479571d6bfb', 16),
                    gmp_init('0x15f22b3437d8bc92ec0ba5786073a83bd9a955b0e324a8969fb8c0e5198f6e94e3c9089563b4eccd522d8087ede106280bdc35b7886a8f41dddd31446b47efc6a9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105894e253b58feeb240298be5d028495dd4f08a43e0f7da3d060c45ace3e133b0be558c1acfd55af75a85d2c29e13ef1a0a92eb8825307ef75dd0e59a1ed446a1b', 16),
                    gmp_init('0x18674feed35e990a692f74312bc76f06573ecdf193b997116d1457fb0dea01712be9547f86171ff66390d5e4ee60d22adf88158b85c9de4fbd7fa9524d3a37ddd3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c2aca74ef790d720b8ecc1d6dfce312345a7c3d52851694a89d3c5a11c2112daf5ad99388870edd752b8ea989ba7ea91ee9173c96c409be61a9338e3d41b1cb9e', 16),
                    gmp_init('0x19b990504945e42bc66c8c44e85a88f3b08849b5229dc3eadb451910b8e7226e29dacd3c1651a119f910e28d55e569d94c6e8785c5b3b05ea8566dc50ee20df1f66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179258b0feefcb514c571561f60e982c9c329251295e4b2e2977fb6a771adcb06d5c19d6353457a77c55f1e2520d687b477ecb551c2852895d1078d1ad67f9e71d9', 16),
                    gmp_init('0x1d833293382e86db3bfbcaedc457f6dbbe2908646c1c904508a7ff10ac826bb6ee57064a8fa3771c38ee22bf810af4de8ead5eead5a8ca78841dc337f17d4de7f3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cda0cd4ee687c36682fdff1376562ab56ad8f5b2b028d630356f2520795dad68f84b54f9e1f1d3694eb314bb66e60b1afd2179d8dd816c408355fdc7c38aea0d52', 16),
                    gmp_init('0x1c9aadd9e548bf72fa76646500ba676e6c56c4d4465a8c1f7a633fee6fd04dc57414752340fd7b971275528b829bea0c89bac26523cac97e8700373b45c1eb10660', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x427d5c4bb7c0f3a3b2668c11d6c8c7038a73937ba67bd889b1072ef5a88e347a2954eb8b69a416175d9e9ddf8bf6e38fa067e6bf5862dc4ef5110349462cdc9b50', 16),
                    gmp_init('0x197a0fbe1750ebeca18ab04ebebf60baa9af7e0dacddebe2e4da86e51316cf3be04ca37c13f3c9ef0c7b8992111389570f2268cc5f782eb9ee4b414d8ae26696c3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a249948e66222734b04729abc788fa6d9ec7176b44283746f35ced142b40ed541516a374ba41e8f8a1a7252ac9a89eb21e0839e8b6e05285976fcb043dd68fb025', 16),
                    gmp_init('0x1bdc8bc78e5066431835128862215096a9e019cc6d211de7f2a2b13ebb94b2ee4fa19d112538e52859ad0ad4c2f1c25138b1e24f8fdb77c678a888ad6f7973f55bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa62fac77e0737295d3ed3e64c1ef058f8206b0d172451b0c0ebb4f95af4b24b77e5ce241455ab76ffb3bb25b18c2baf43305ab8e8cc6ce68a22d5303228fc86ddb', 16),
                    gmp_init('0xd737813da4f6c6055b578892d7e4f0353f56c2eba1557b384031427a5cfaadde8d55cb7acb22c2d6a75d02b6489442bb65c116b648d42c427eafeb533abb21dda8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c60f41618a8a54a6cad8624a1980adf82988926f8c574c0c78b3b851256c913e23896d128be7fb3e44a419b6701546c16a2a7ea1c4cc00d1b8faedc26b0b4b6535', 16),
                    gmp_init('0x912a37860d335fec73e06365c2d05912c66ab21464995787845d1fe3ab81481696fc1cda5ec6b4824d840b7ec640b0f1862c71c8bb775828497b26c1a242562882', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cb48b5ae24819b5a385f1c624aa29cdd597179acc3a4184802c80b5472633c3b6db39ef4f16d59f0fa00e09e430fea281233a0ca99554fcad0748d64b709eaccc', 16),
                    gmp_init('0x33b2c7c2bd4e494a9541c992cf5034739be98fdf086adca012a0d0eb0c33ad5eee5a151d1c21001931ad5788e936bdf13173169a2c7f1bbcae4242f52aa654ea3d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf496d7b7a9a4186d8d270d4fdc02e5b53967863a1d4e24fb32272ac14e611c51e38ebc86e561b8f695e9d9c75b58dac5e4506446f1423a534627068f87578b7a3f', 16),
                    gmp_init('0xef8a8b2b82d598a671bec16c5a887d3c1e61b6b478b881b9cf5235087249e706809c3a88484ecf736752a055ada112be8231682a839bdc0f5f1a60ef0526627252', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16209901c2ce69238cb40c78cb818ba4889c118eae521ad303d957977f9bf66a47bde2c253a4d22b49a69032db2e994001bb027bce2e0c7deee3dac1eb44cb7b72b', 16),
                    gmp_init('0x65074326df34dd40ec6976124e6f3e93cd03a86c736a4c5223e6c4ce99ee7401cb973a21ac29446072899412a6d9d15fe23e74578a381399218099814b08bc1cea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba8ed1dd020549f4cfd3e9699d39e3e96255cfce64e8221d39c4228d8987ecea8e9a5319b1d8721711ab0a889dbee1ac11a3889cfc075fbcdd943dbc45cedc41c5', 16),
                    gmp_init('0xbbe4c62fde5233aeb43ef2ec73d2fba17bb696381ed6cb8cd4973f128b9733568768c575bb273b404910904e4b5f5af89716246ab37a6208f51729967dfb5fec20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b02b2a743e511df2561f7b571bf98ee6b48b92a43d782c8bc6d7694e81625f9a7906408358d01ffdc83e55dd1ee74108b78d327cb5a08f7cab685f627dd308ae0', 16),
                    gmp_init('0x17b5391783aca17510fa12b386ebb7fbdd45049f2897946c75be8c4da3fdd93bd2c0eb0720a0581e5d7861a73ec1e3d92c648d06d989114d9020b09053aea9b6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f3a0a984e1b1fa07da809b5a1236cc164eff77903d28a48607dd6c6674bffc99813e617d855abd6d11c6764a7f3683ed31cd4a4460057252f61f56901631f481', 16),
                    gmp_init('0x177567eabd6fa699305a602e5b52b82ae83a8e0a6a1a6b85ed3bfef06d968a1db303ecb3b1e8005fcbcaadde80bbb30fe9622f1b155490ace41c1557c02fdbaa820', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e1533e83c6e7007baf69ed1f4d08c5117b48129fe5c8fd91f52ab9fec1900fd50d9512101aa087ee0e0b5b3e99352cbf4a6d235a5f994991df9d86d84feae13cfb', 16),
                    gmp_init('0x1254fc3182dea83099695a5bd04094529289be0a9b8ecbfd6b25486f6b961b9aad80f5835b0d3acde30447a8e905f5e78a535a77d2af3e1daa410a0c08d2f0fac2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf454c00258377dcf42888ca81b2598cc21d51d49a83bf0b92f672749488c6106b834f77fb655344b7b8791d9e9fb2cd17f35c6c1367b260589e71f0bb8bff6d2c', 16),
                    gmp_init('0x1f9c24aacc1f35e5f7c7cd516d5dbaf10e39c9ffcf525bf301ba2369d15a10a69ef08601954aa276034af4fd362632372be3594e53e40d5f30e622ab6ebe9046dc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e2c2b8cd9b7ad5e3baf5258a6e84db1ebfbbb723e40ea88b42438607c6beecb331dd85b5b4935a211ebfa4307803cf1846fdd0a0f42fa43cbb5b80c0e82a8845f', 16),
                    gmp_init('0x10c768bd9624da4a91cae3c0d2eafc73d42590ef005711962319e71f61938c08b52ebd50bb3fbef27f1004929dc197593c09fc84cec8d0efda6313ce4450a092935', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123157cf7e3c3a7ed7b4c72b94fd25c7d5b51459c14c00261925fd3394471d6849de8dfb49488b10f5e42fd6468b140d288631d6acf882637e0716cad1e90c8a719', 16),
                    gmp_init('0x961fe23347c1a472c5c5156c404fd3e972a8af3addf94bab5da4dba25c4ebd5b40830a7200bf7071f027f5a81aac98ab3a4be7f1c837eee4d3046419ab6bd8dbe9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3930d6969b489d30b3a2bccd0b708b357de0c1989639ce735ee3d44aeb367c5ede7c10ac42e6ac3a94260b2652348c399ddc83ae086b84d4f496618bec30be228c', 16),
                    gmp_init('0xc88dd59588edf7d7d3f5ba4cb58d9f6e448a66c28c8ecf7a8f44fb14e9a03ed92a48f39402c0c645f2d5b60a504c54afbee6ab2b4427ea16dc3e9d894367d235db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11ecb5310cde349054866b1a36860c334362fc2ad6f9a30b1b3b3f56019411d224f5899ed3fe8c3ab51b0a90e0afe2332109556f1ee4f05a10b0d8a75e7972b1d30', 16),
                    gmp_init('0x1fb3eb4e1447d0debb16c05aac04b1eebaa456d3fb2cf35e684b5ff4b0426ac1c58aac1cf335d4dbcaa3b4f3cbd58a8e0722c5403554e4c5f55520fb4e711647bab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15bffc4c25b753ab994b18a364ac7c793f19ec1cfb401c71a7680ef23be8ef0f8e71779ee6ed6b62ce98ab1587033aa18a6f63383eb52d5233bbb5261dba4cc0ff1', 16),
                    gmp_init('0x75797335e56b68a586a0803997f3166db15f6c04ef5837e54a7784383794c167709a087f09fb4356b95e0d810510b5a95d7e8594c5f895f3af80645523d4ca91f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ba001afb4789ad9e8e45db020d9be6508e4aeb21abbbeb75ee4c4116245b21189d960cde64a9d14a8a931fc6be3b6d1fa8cfb578447a49e3486bb6a2fcf51acf8', 16),
                    gmp_init('0x41d43467c38f229a3964fd97f7f1dd26b56de2cc2872f6a072b1c6000b0ee40ae42a77d4547b3addfc3157188ab3123bbe4926b87f0543b4355f754551c271c0d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17d14f8a1d9a57e7e4ae9ffe3e1987f449fb3c2f12c9dfb7d730f577b1f0bf8942539e669f95c1d28c5ebe83d77a05e6d66968337919a8236775717fd84a98f0156', 16),
                    gmp_init('0xe44ebbc331bb04398f65b4c876e04902b5d3112b6a3e7adfa39324d1d0ca1bf4b47f002e1707e1500cf6df35fbfb0d13d1a5561e4e202cd41b4e980189dfe5b34c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15aafb7992265e13f7f651f1be1877d5d9e5c08b0bf128df5f1104ae5cff054f41fa2240db40abc7c17d8a3adc1b1670c20a4ab4559f2c42e697b5e2027b631ab3c', 16),
                    gmp_init('0x176a7264a96e30226a7efe7361fdeace5bf9f06b28f3e0168064418721c35936a28a6f15613fd21c0421a228d9f6eac7d07cc393058a188e1e140370ee632ac61a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7e27bb664ce112dd076a3ca2e0a81ba831797a1ad6cfa52a9deb3ab21fe30c3a3425efddede316ba1f253d5f4964d2c6e0b5bc33d344930c59e1f0c1aefcfefdb2', 16),
                    gmp_init('0x299f79bccfbd52faa74629c6488ed71fb2b142b6eca8929a72f79f40598ec6e9e14cc1915fbc31c1cdbae8635144db8a51381b2d7167dd751391fa1e121961aa16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x174b644e4e35f67508dbc8ccd9fcfb09d4c7b6df96f8c87a2777249dcfb5a83e39db4296467910f3354d81f6f6417217cb32e6954315117b9cd5a6db3a8e35ab524', 16),
                    gmp_init('0x1984a3a07a3116d1beedbccc9df881439f7407dcfd2782b061f1cf3d77e3a9321be863012f56bd7f19b7c240e63f5a7d167d9b7805b669d44f01a228c95246be9d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99fbad16293aedea6c21a38cba62ee0e85b8c8d4141be23cbf46eabc893bbcae3b79802c83f2d629c0191946a86e673d2571e5478edee535e2381c925424f3e2fe', 16),
                    gmp_init('0x196e02154f10e0f3fa36a50e2e30680fe1acfab8b1a3d2eef58975ff1eddb2688264a1de5d86f9c66325fbafd98cfbd71a98434c033dde340c3eea933933fd062ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75854ae7242cf9661072e3bc8e68e4d43e4b2fdc3fbb02e25ba46b867147df3e878f43702a3af87eceea30361a335ab6fc181be214428dcc9d9ab5fe51e870201b', 16),
                    gmp_init('0x1010480366fbd63268f49e1041a439f0c524d658970d8fd6a6733c3dd8fee751f85bd4a0672b5126460faea840084cbcf0875d38316e555d52a56ecf90bfeb21bf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13dece1335ca5ec80c158d8ade8d176ded67df33f4f593b7c41c170d6b241622e72c198a75507cdcf9ed99446c037ce7f533a7ef54ab20e73d40d3598348f0fc596', 16),
                    gmp_init('0x189b0627e5fbad92b8beab5bbdf866362617e5204c7931d0353b3e5054fb5c8b5040eb9fa4eb2a380990907a203496482e0b97e6e285f084a011f125d6fbb0543b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb26870db8f090b00e078ca140a1a34641c52c459939f279bf591e2f2cf38b325fb3ed8af947b9810fd2a7e09ebb315b1f4dd0708f7944a36557a11c13f68c39a09', 16),
                    gmp_init('0x6239634e5ff70754345e832f3501d09fb129cbdda27332f50f09f90fdf0620f6cd7103bdc5febd6f14f3d6350c9f0e8e623223a77d347e84dae52430c142c16b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5c1d582f54f250643a714105653eb56b7d1133acb5f0ef063bbb32091a1194b51d4c5cb6215e8cec414638ca768cbccef60474421c619da00c0f92a02e25f8b1c', 16),
                    gmp_init('0x1aed08de31b8e01d2ae5a5f799fe22ebdd468db2eae11b5c9493a32d2f9d2cb563cd84501e5664f45105b34a35d3683ef8629045949de5c96516f5f71749789abaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f52eb660e491ccc0f9bd93abe740c20e532dbd4d59ee9161c569113ac763017e47edfa2851e9070c9730e2489d9014ffc43874a79a3c09615bcc24e895e1756b7a', 16),
                    gmp_init('0xa6163890bf029bb7a059c26ad852510ad2db46c96df7592075b444f393a27240c4af1fc78775aebc2635933e9a0b75d1eb32dfb30ea43cd38e1363f45a719c9f85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x907006b69abb84215702aa16363d7a48df798544c1d68e0b88b3fc38bf807ebeb9a5cb6b67155c966c4898e16e580b43633c07f9957648d40cb2534b51b9e83a3f', 16),
                    gmp_init('0x1d496e3bce80b826c49233f9668ac09b64ea60a9c8b9f2e7ec3daae123e4e0fc90ddd22ff425edb0580e30598540ab1e7d34c04795914f2dd227cfa15b7673b972d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1455b2d2a045a38eb38514507fb0b294ba9a1b2e9a0de473abb3550a733199385bf0296972668e8e3e99f3f62988308922bf3764fed23c733ca16f90ab573788e7c', 16),
                    gmp_init('0x1126a59d4af86b12db3da4ebfbc49677bc3f07be61224081d37218e45211b549b6188b783160a66f615a666576a510f68583032dfaafd0681d6a48b1d0ffad2f8d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff77fca5de8b366836ca39f8cb22dc4557a30cd88dae48a52706fd8fc457bee942d42f357182ec98bbfb2553a32cc82d38fb9355f62aba5ea7cfb013c6c8ec13ca', 16),
                    gmp_init('0x16eab313984d622cc83dac4f87f08e170493dff6ea665c4667a141da13b7a59fc194c183d3d3e28fb76112174f171a64327df5f90caa68e88566a78299e78d119fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f6303b86411f9c3bab6e96b40ba93085c323cc2419d684d87b8a8aebfa4d4cd65ab2e8f656cc7dd6cd1a928e413e13910bdabce92b476fd93835e461c73f298075', 16),
                    gmp_init('0x6d46568571d30d5f6c9611f83a43dd1ff0d8596b94a69929b8c93512456e517e337e6d67dfadf9520e103c38d48f88fdb7ab397f7d3be53831e66619d05a55180b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1716f3b6da2bd51e6cabd1d38c1d2e1e3d7b6800f068a741583f00570cce25843da7a4a872c7516b2e6a72bd10e8c383c8bc0dd34fb3f7a61c9c04052a06a7908eb', 16),
                    gmp_init('0x23c1cef8f543758f0e6329ad19b416010394ec863b3b7843a3f0a0e72a9c20d2d8ff90ee855f2e1fac586bdcc9ab7ec42d3c8016a38fec9378d598a4ad4da67565', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10bb4ff8105df27f7bc0e6ad1ef9bb9337a05966b6f9cf32e5690b4f6ea2fb1cedc6bfc92cca7e3b224526b90b2dd8d18d54887cf10945733af29609fb984951cf0', 16),
                    gmp_init('0x1a86d1fb9325300a6217ae93925f793e30361e6e7f59ea02ab317454ef09d0734af8a68bd26d3acd372b8c46c99a26539c0a1fdcf5f0aa1556a447a04a32940fba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10ff2d9d3907181f0c6b140fd9a2c480fa8e7638d95fd212481cc5e556b57dfc134a7f5f27d8f2b9f5d354289b66003f4d7e7206e434185728e042404e29b46276e', 16),
                    gmp_init('0x1f96306591f47c624f40237a52ef872e73217bf47b10912f34e8a54dd5f29b0127233dac2eb17c10bccbc695160e71fe4ab8036e7c8b3a8c31efe512d05f53f6873', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x41d383b86d30a5b16de393b2641fde162ca071965189cdf20ded4a28e5dc50fd78277ef823f059d2918e2ad8e9ad0114bc5c106f8eea93e5c10f8341fe21dd6e7a', 16),
                    gmp_init('0x14c4338b3d686753f281f91a0fd521304537311da687a5aeea31637909b145543211750b97d77a6a3e3ab54d4c89c397c917d7f0bb9a996519b04b8115bad6dbeaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5baf05ce9762eae4e0e69418a412cb2ffcadefac0da42b197313fdc9556370791c9f88c296e6c13e9fcbe6c7bc1576e51bb08a7bdecf01353099a1daa94cf92b1f', 16),
                    gmp_init('0x13bd40e8637336a3d5f4512fbb6f3d5db21fc1fc1d28a097cda11d2e02b6109bc5babf94bc3929470617335c5cbabffa9c1de7fee5853131bd7adb36e6565e89a12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1751c33b90957271ab1a68bcf7585e8eea2aa1b543a3c3413e37aef92fdacfe3a5fd09f955e38b363078c2d939f3f298a36e56d2622af747caa3671d520e411c88b', 16),
                    gmp_init('0x1656d7e1534fe0ce1f4e1c67b4c4702e14e661cc6df332d57246f020d2f07d56bfca0be54cd7b9aca58378932adfb48d30393ace6b43758fa53e829b5480993374b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a1a960e1b3c7878181b810bf456fc66ac38f20fac7cbef00ad12025c313b0d8680fb5bd6fa772826c5f684ce2cbeb8a529690c65c6becc7c6570eae5e2b7c097fd', 16),
                    gmp_init('0x12f93cad3da45bae98426c1b1773410d895e1d008ad719258dee20381490453d341410eaf63fe82447c68985b1f977a8c64cc4cf223fc14a4b585a5e619f6103b53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x339c5934c32bd90616e00860084db7699f366f0d450c52b71a3be4365601535d15728e8aac7ab11feade8932fb8f8f374c46f81000c41f158b83fdb669de748b4', 16),
                    gmp_init('0xa5fe63de4b6c43352810f0abbb5110d219128be588a6ce37da7be1bdb0298947d8957efd09f2104682e4f4e7721699b55b30ee02c369a70ba74c5f3ab49c964a3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x197ca39fec1d49f93025c707992ddba50ad2561b47ee5310f8c52a8c48f333e69a29726acfcf7f77f825d306ffdbd99b8e6a3965127952a5a75ee8b94e0bcbcf019', 16),
                    gmp_init('0x6f25075cbc4415b2a62a92f9cb257238d4acd3fc805dce5454891a741524af7e0db0387d01ec8cb87f7c50d77c2a07fe4f3c186e5a12186692773374e03330c1de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce5f2702cfd795bf2b27e857b0a259420c7549c2a8e5a07b0614593dba22f5652311bfdd3c4bde2ff6cb52d65cc17226f5eb7fee1cccfe2f4664f0ae6630ae5727', 16),
                    gmp_init('0x10ef91d6e9e5bbb0779b1dfb820ed98520a4f5dbd88a71e69ffc963d568a3fc2a935916df473b105ea7c2898fd0848ee90ac5d4d501a949628150247b7799ef6f42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31716f36bbd5f89c318cc7cc5f49688782edd17f04c0d112c6811b100860ca9a5bb0adfba4723c0ef235f077201cd61540e109980c03fe67ef6bce4008db3002ce', 16),
                    gmp_init('0x162b8110696634370984be93a40090bbdf3e2615c6e12e9ab536569353497696deed74ee37682c919da834cd1fdd9ad0c74b99918262daa7a23700cb92a1d19d891', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ff8a464b3a93bfca7448f4b7c0b17164d34cecb7ef8e8e4dbd942b168d67a536e8084581b1e3f7ea6ae3fbb37ba4756b746b303097f0a906822640b0474717da49', 16),
                    gmp_init('0xff2f89389b576846a01f8fb94d5daf789dd6afdfe9fddea6a216b2c6b30212c1fdbaae1526a02f45c5de475d32d6fa2261d61c24432acbde6121f4906f7268ec93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8843e74f08f25ae706f986de1075c8a7e3a86f75d4925bfaa9b4006a0b7bbc180b1ea7f5d7a973929c07b475a96db1ed0e99585b2f434a426dff9f5e5ed7c958a0', 16),
                    gmp_init('0xc5ae4594ce0ea125ba715d2b87caaa5064e5dfdb1b67a035458a581525a24b15289451a0150a3df7bee899d17938343cb56ffd7eb6063d53cc4ffd5c105068acf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e4a2083698c494a635b3cc2177d33ae387c34176c27352c7b52861b3c38c7bc1d7a7b572756cf3c64dcb895e26bb49ebfdfbb159afba094abaa0898403516e4d9', 16),
                    gmp_init('0x6aa0334020ccc6c5196d17c67ce1efbe586da3e12ecaa82af6564287bd236681dafdc0ee6551e60c428aff8c84fdae84865dee99706020b420d32926625f514fad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1742ad69df862350ffa7254f8d49b9efd0fa7df7924e06e5573fd1d708b7697977a6083dc2002e8ff4ecd26c3986c40f75b9678b1d40689e90609a97b58033238', 16),
                    gmp_init('0x75261f67f6149d20de2b9fa205f66cca320cdfec5b291b40180e7d617e72fd006e6ee4483aec0c854afb13a82507fd4b1bd0ecaebdaa48701278e2366a314a07f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0d34cc5a2ae17a1b96b331914baa46788c59c14192347d225184dc138be872a975ea9ab9571828a565dfea3d613b00c03164f6a8305e161146d6266d92756c0e', 16),
                    gmp_init('0x2becf0a8f5128d8ad991be8847eadd159356c40d49c28d61dbfc646b5145883bb0ffff97f94822fa85016811b2a8067b2bb36a7efb677d6ea3c05c3c516fcb342d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ca2ad35266d83c58fae5e562a9dd8e72c0bca040b55a79e74504fcd8cf3a16f6dcadf80d09d174b7a17e048dfd571849fdb32e56791d00413436121db4291d3c6', 16),
                    gmp_init('0x606f0d28c3e7a7befeb2ab5a3fa3a1fb588a59c2fd1ad8acb92043ba4b964685a9d45347c5ce9222ed7ee580a6720e8f3aa4cf89f3a957cc1868cc0e2f8be48c08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x612aff5a1117a4a8445c31c7a65a062e7461be8fc17a355c88e9d79978d11b927b5d11d992b5c523ba8db73d5bee9cdb6fe481ea75d2b4cba533ccf08de10db8f5', 16),
                    gmp_init('0x72a9f04f62733f1f9a72df5ed3c779ec953afad154d8e57a31d6650a1d46cf54381842ce5a3df8b3321d759dd9cb41b7467f7681c7766dfcb09f5386773c9f31b4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d0ef0b7ed0133b2709a5a99b24432314ccfc853cb8fd7bb155e391948364c83e37c2cd0f784f66ebbcce03fac9b6de788199029e9b39c02ceedd9166282d3d7641', 16),
                    gmp_init('0x599ce62f22cd44843b5a2a6fdd829736c318c2b1b3c77f6ac1a54874b7d5da75ef6d0e05fb3b79619a17a4e60d68eb11a2e2f88ac25f8cb5cee4c4d8a054de3ecb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79e226fe2dbab1761c512060172f3d629dcb71caafcf7a3e813e3712a75e124ba8f9546fe48f93eb956cf55e765d48ead5c11fd457ae2b9475c3e525d2afd7c4f7', 16),
                    gmp_init('0x1e35adc7aa519ead5c448f25eda54b6fae35a2146e0dc1143577770ba4af706b78840f5ff09135b715625be6c8a20dfe9242fd9211cd55e0ab2bb618c7bf963a03a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa36b29d94d5abda947c02d8386c023a9153f04fcad86894ed7d275b8ce8b7015f9f15fe9d91fe4719c472ea46918ccad87d566fc0bea3f2b6de521dce8d006477e', 16),
                    gmp_init('0x5b88b1ea03ec16cfbb026fa069ed7baf4a34237eed20db8b041ec8bc56337e6deb0dcb1880f36b5b720ea664c3164eba39ae00dc93eda8c2d4707122c496135659', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56e2d943f5c7ca562dcdf7237b0200ddb12214296a41a8ec10f6e99141ad41ce70cd83121b93217c7f07228775f6753eec7cdf9c24e192a20d21e292cb67355505', 16),
                    gmp_init('0x15dd5a98fdcd51b962f1c54fe695ba3f7a9ea9c160b84162e6bb131c000970be1e59cbc405a6136b3f73c9e84d12a07248a33ff2e7e31099d8a9f743d7c9627a12e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3b21c7c70b829e025993858754f05cabecd59060ab85658619f2d412dac485527180fd76bf6daadb9f0afb403e182de3995e848106fea6c201c676bbc44eac0b1', 16),
                    gmp_init('0x1418d4b66f18d5b22541f47fdcbc78032f62ccd27d2fd5f8cdac66ad7e674d28cc4586fb932cf199e8434113e1d442cfea6e70bae12a30d86a2e9b60d5d554ad734', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94b224b543cab5894658482184fbf6c7cfefe049868fc8f377a0b91c2af227b93ea220f50707a66e1e6f5c76f9d43c24f1acf22e961375d0d4d01bfb1f891d513f', 16),
                    gmp_init('0x11660f49d6d1e980837f3101c296f7b534067c0cc0512cd1f4fb0477cf188891340ec6ce43102dac8a44083d236b9736e0f68881fb60a675863e07e7d7914855341', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17d21f8eb11bc51e05ca02efc05f48f36bb87f5811d64de4d77c6c6c6478afccdab43d48a67a6138cce457ad4e2551082669f65abf22700418e8be4ded5db4265e1', 16),
                    gmp_init('0x124ad598d6a896e23b9b56ef344668f12346339ea702a22e3dee6705a2ef5df63a35f1ea1945e169dfb2cebfa6449e9661d44d6ae20209caacde1efe9ac215b4477', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac0936e34f5e3e7c966ddc94e1be24741998de920a73495d2b08af41c8a3908ede7cf96927b4e83ce55272d16b3ecc6b4473a8c09947855c603cd54b988ffa8932', 16),
                    gmp_init('0xfd6592bb0089bbc18d93f7ee9dc0b2a786427a8cccb2ad0ee7f04a8e7c7f773a12221c12cbf450a9ee9a43c7a4632098aeb20aff071103e749f3b1a1aa9d269d4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b99da74827d956f6a11344fe703d6eee50025fd4ea5e5d08e745143bf470291732ccb0c4812d25cd38e2470a34db885bbc2ffec0e6b95005167ae2b8c6422383a', 16),
                    gmp_init('0x1fe57d17dc859034a0842b2cb68cbf26f4c1400578204d32b624ebfc15b3168112209928e327e8d04b4d949b09a01dbee6d37bcdbd39ab62ea47afaf9b1e8a56d7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c5da25e28b620fd65f698f86cd10ce9944daad9cad2016bd3d5c2c0039061a6feaf8c03c38acd28658428a885dbee1bc1eb057a9562fd57998f1c77f7a9e8cde3', 16),
                    gmp_init('0x11860b8da55e7feeacfbaa4d0b80bf62ea4b661bb0b597a14a9d6d98db85f2a1653adde221a29f6e28a64ecff3c74ccc32d60b05d1f9084af55e3162c8fff2198a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a5aa66df2aeda7d7044d77c4308fbb9e7bbc42dceb468d8cff8aeb63b1e54d54d2bf8771cd56913d3d8d39accaa37264760cc9782e3160ebe0a57bd311983f79e', 16),
                    gmp_init('0x12bbb18a005d7124d48dd31e4f067c976abc8eb9dd6398681f04e9de14d6d550d43c0479ee0c1a101fd808b959cb03003b2f364063e234a1aaeb5ea1dfdb4e930d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6c2c99b092013b7b52d1614b0616ba6a25b07d2a0a22ce561da4ed76759a7c1a76d16106459a570bfdd69a7832620bb25d9e13bb2143c38d6f760f828ebf01d55', 16),
                    gmp_init('0xbb5b3c4c81c02ecdf612a1f99f39a28cfcf0377e4414e175c4e49cf58535da243e293651b7eeebaabb3d12bcb83abd1c3b11e4eb8cd0fca568532f835b6606eb53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe31224e4bde0f5f359ddc5873ca658fcdcc7670e2c725aa6606befccd47efae90b9773396f7888e6347dd66926d8d6fd7e5dc4e1a451743c374bd78a0a745853fc', 16),
                    gmp_init('0x1fc71492809ea06f5ab659afbf6615262e03dd58b6121ae15215243756202f6298542024e5f4571c790ebe52fe1d78efb2f46e351c7082412edcdfb21fdc6a2932a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x124a92209d7493eae1131437bff0f2bc13add0b12e9bb2e6910c4fb20c0fb68c280a40c09e53265b4a2cbdafc5ecfa2eafaeff7977950cec5706670d91e241fce4c', 16),
                    gmp_init('0x1066fa28f425f117d64ac9c34b6911b0e3b12fbda2fe51b686ab79ed2773b014d606ddda0871f9973e22dd62ed73002e4c1ed7f8f9c103e6b810dfa947c893d23e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16bec8d2ebe84d0ff1cb289e9e086bffaabd07d0308df339d3459523dfa8b7274bbc4b782e4c480bdd4b7e633e7de3ade416d3c553e5047d29a1b4eaaff932bbbbf', 16),
                    gmp_init('0x3f162d027ebe77c93fc7bf6f4f5ee439b1352f58a22cb330ab8ee3028fb54440c1f1c1b0ce4321a13710d79d4e4e1a3bf215ea30cc82f1cc7b88faa957758fc7c5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8f752a08fab22a653b792fa255a773bbc52f1ea65a678fc163208fdc754faba5b7963fd369de1f966cbdb1bce470839c1429ca5ba73a92ba161ebc5309b6bf5ec4', 16),
                    gmp_init('0x1459555b002b0a28ac5d049a1586d9773e7be46a6f1665347f54e2757c8efdffc67fa503f215678f26965792cb3d33b5b5aee92b17dd6658910096aff662e58f405', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e3796bac65988338bb19f3f05b122324c6c43e50b2bee0adf4d0841818c5f1fdc4b12c94da28b4ee00ecf1838a99cbfcbe8ed9ac0627db36b6b09a3e8b160e37a4', 16),
                    gmp_init('0x90f4b9b2de9f1d23d7a23d83a581523758906a06e05fba7ee3eebd6890629dd5d73f60e835e5fb261cbba6b74e1ecbba1decf7989ca2f6779f211af1ab50f7626', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x583dd87573684c060b9696f1bd6345cf6d61c0191e6be11242327e3fb873f46109e591b96a2d9ff47314d0564c7b9b7aaabaab19af013f3158353ae6fd77b9aba6', 16),
                    gmp_init('0x1770e010897bd4533fc711dfab66235304e14153f7a3341d88b17154d6dd30475e55e64c366ae730c53721973502d8ce1f97d66e2c3075ea1c1dab49ba0285a6dde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc137e015dcd2e9bcff8877b29f5aeaa27502c0e789ed425d74368ac975e2237e635b20ffdffa60eeb1c5dbfff1f499e7ba5568027c4b6dc1875b620639659f9e9', 16),
                    gmp_init('0x1513bb964e042e7aee4de4174e74143ab1a4ef08127efdaf8093b7ef87493916a8ad1359e0570fd238b94672002643a1eb85739d6c9e33b4ca669be3c6d3fffeb71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b0d9b3fa2e37379157d8f99efc3de8797f3ddce9077a810e5b6b73048c9297b55e564a1c8f3f0c1f0beeb0a8940fe14c27f08f1f5d4c8a2a83aa4a212a2177c1c1', 16),
                    gmp_init('0x17086deff3cc30ac697a77f0bdefc3cce3c0b1309cf50cb90c7a1b86ab3cfdcf2314fbcf1465a22f1efc783df8863f437eabe8b93fb6960a69065a7dc22fe9275e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1605a470aad23d28bbe83f623522c9afa82feeb53672451332198a59e372505132cb3c08003c5b71c77584a18241068eee24c2c21b4f234ff0f9584a837980c0f9b', 16),
                    gmp_init('0x701c40f1aba12a56383fb8d74765c6b8bcd334f3ee68d87d1612830261ff0de285ee3bfbfa2a47a293e0711b5e21c1a7afc0fb45706c14573a2aa901fdce4e21a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd16b70ed4b47a7a2c27dad374645c364df22f323e6294e8650a89c3e330e72308220b4993b1b480e694066a7c2e9454e0cee647c220834fcc1a4d19d6b580e3a2', 16),
                    gmp_init('0x1150f3c03b57eca93b3d432604b206df951083544dda1bfc7c38f976b252c1a594712a4140bb92086336f19c1c07ee9fc8bb844ed7d1991087e208a7f56cc79e99a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x165752d5ff9b9d02b8ab5da215e5c289f82b421a505f2c65a048a924b48df7c5708ee83430ce158deaf7b5edc9bee7ed0fd68dc29bb81972f1fc3246fc8bddb33c7', 16),
                    gmp_init('0x13738196726eb1de0df2b95a432674df1b04177105e84bc3dfe38e9d3dd2bb6d3841e88044d9abc41a6f53bc9869009152670c744916cab360755564b4a0d9d7788', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32db8fddd444134708d4b42fb6fdf488378c996cfb4a7e8325e6ed8e99e856c30d5f83412fc81b56f4335614119667ae09fab2ee4442f2c7404ceb99810bddb29', 16),
                    gmp_init('0x1c4d1b931aaeecf1105d44bf8744f1fd46739dda5a2ee2c8214228f6af4946a8711abc6ab2dff49c7d4f0744604f3b826d58e613f6f7188ed35924933623b6db1cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58b9c5eafbf77eafaba4fda396f4c47e49b58b0677666d20ad9f0e654b102018d18573554d35341bd718e2b134ab8685477e472fdb31c4a39d81afd9dc25a94603', 16),
                    gmp_init('0xcc465c50425af625841b02578939f34cea0a8f8ebbf009f098ccc542577d4cf37f5043e2bb30e3df887d1bf1e6fa1dcdaa4bd7d8ffc77e40ef1ec9f439a5c5153a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d64cd324d76d94cc264d61a73065b46a84d403a60faefb33e24437989c8c3c3f8d74d1ddee4cd28f0851743e4be29e68c1213bda7c6bb648e91c0d7cbb986d7822', 16),
                    gmp_init('0x1d4685419dd7ffecd3b0f9a767be4c843894aad39d3c873d6fc4af7f75cc2d88f6fbab1069299facacdedc5573592afd27f5457f5512028a779693319f036cf7c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x100de6a42752ccb718197238c9c96556785e61f7b9d8869018ae299feedb0db432b68e30624aad526b95e0d581af1062b1901be4898bfdaa07c3db9010fb61816da', 16),
                    gmp_init('0x1046fc048b7e8fb1b5c5b0e9617b96cf87deca43bd4e1b2f6ec63241013231a9c44469c3b68b41199471fa6e4d480f2b9084a7a76a02a6f6f0f91b9c6eb64a5ed97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17083cef63564ef0f8da30b47f89dc7794fe39e37e252668222b858952ea4f91f37c3fc3b7c01b67fa407c566892f5f45a772df660f0fc84af10f70c5e0c5521c2d', 16),
                    gmp_init('0x1062b0d81d083ecfc293bfa6d84726f4ab3391b0ca659c34b657887cd2c9e6f911a22bcc030964e4aef93157ce5408a15eff3e683f2b218b26628bc223e51f3288a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa08822bdd7bab9d3016316658c2319dabdd704fba7e24609ac45ff2204b76c41dfb04e1a14e79d801293799412b7fdad0d71907cd683a07f301dc6ee0cce1be45', 16),
                    gmp_init('0xd7d89797c6ca8581dd504bc76ff93b5f2d72d25e8d7e95e65fa4d9a408230fa1aaf56ed11851cabe7177c15f0e8a7de1adce9b903f1060e53d4aa4c2b1ef3a3b88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105f3945d8cedff69b982469ab65798b89eddbfd7bb564bd80a1c276a353eb6554f09a27c8ddd84263b92c258665df58be044bca9a6d24471a057e31f163c9a7ff9', 16),
                    gmp_init('0x1ea03d5f231e83b79ace77c6a38e8811c2de3f4853ba05de67dd82ea4e119d6d0e4aa701ee7cf448875c1790b921f36eaedc2389a90e5892d2e0c7a93852f2ff79d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1939715875425f2b8c2d7309c761affdb67aed18677e106d5be4a0c3e00d01b3c097da97845ae356e2946b9786578fab381f0d3b95744f06181a6d6b095dbbd171f', 16),
                    gmp_init('0x3175705acd964a838392f2524e4c1931718f9f6243324d2de166cedf43bd934998b39c4db1284e4fa60736bfda2b7b61e1b1d2b5f75e06433465d3657b24785079', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe087714a153e3221fd141ff976886e453e99c048166f7f599d9ad2edce2e66f2db594cca3e8eae413f3db4c750bdedd890af573f2a4161596fce13e03d0739036', 16),
                    gmp_init('0x1e065c0ab7393ad0dbce8000000c2c7704ab00a8de2e3690f954c9ca396fb3f4229853da6b0ca631c4bfaaa200b142ae67c3f9ddea494fb01f291eab39e5daebd46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5437bfdca1856e0c8f33d4a2b395a765b9d5cac3ab4adc2fea510303f6c0370ab3708f4f4c754dff6dace7f0e969acde42ee468445fe4215aedec6d350f810445', 16),
                    gmp_init('0x1c5ddd9e3efe58a4e975baae52f078e655685a875d47daa5950d5276af593d9f303bb3da3a5cc404f6580343b51008ec68b30cb0cd905dc3fcd287dc7f70812a78c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183e1b0d18f0dbddd990f9438478e27270be45c0758d9ae4bb5fd23bd887cb6c645cfa713de97a9a899dda3a45d05be01ffe771fd391359daea3ff48a37252eba7', 16),
                    gmp_init('0x14560088783f20650faa968fb1c765802b5efc8079a4ae00660eaacb20b619b5ee8339540f51f2e8dc097418d9cee81f08c232e9cd13593d0e46e5283f7f2fb7fac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21d94f065c78edd742e00f1ae889c59658570c2db410e90a6479ba895fec83b2f1d89fd04968066e44cc7c9d91812b26a2af425a7db2f85051322efe142a7cbe50', 16),
                    gmp_init('0xd6e0cc0ef1d1b0e59cefe2455e4bb98cac92cde9b1ba93f4b838498320a6fa7f3c28c15142cf0f9464528925da2e8294cf432599d6a5121de73fa27bd8c5b5b0bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e41f2d50feace4aa07a59df69b0155ffafcf40e6177bd0991ff00a49d00c38f0642aa3594319cbf05522041b531867f8894776ad9697bc3ac7c538d35074a00efd', 16),
                    gmp_init('0x1522702735d01b0c0d0d9a0599f9c938c2df7aa9df732c93fa53a0731a53d39d147a9f4b3a3370af1d6c0d3b78058a6aff6fb8a0ab09c7ad9aaf1a777ee5cce1b0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4a02fce30048cad5dcaf81404465e7c2c4ee54ff7fbd2d9a9a9d68c870f7cf548c9b93539ef275259b6699e3f534bf835134da7c1f5776ef964f62dcba1d24f4b', 16),
                    gmp_init('0x93e237815e0e3f9421ceabfa1cc699db7ebe79df8b98bdc65d58f2e1b68dfcbaca74cf2bbe508e92c9e7f5bfbb43a019d08353d7c941ec4c759ce2e24c6e76c091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbae113839691fe54b09a4dd12ee1530c0a1fbdee591ae59f7177214ebf41b680c99a7a9339063e59793b6baa2683fbf6823af87a7df2b51e5ecfe4f02e36e4a40d', 16),
                    gmp_init('0xd5edb363317dcb45540da86ea2a6b9f40d24272840331f3a962abc096b6e1bbf6fd0db646d087d7194e662b9c06f9743c5fcc47954452da1c3f84d66ebfc229914', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6ebfe81c529d222252174ceea344d3fc5af1392df0a25165f065e9cb5cf8acdbbef43fc92921f123d1298c7034c3c37f1a9bf19f0003e19c835ca7b714da6061a', 16),
                    gmp_init('0x19d3c9a7005f2c7864d2cf56fdce0df23fdda8f1b453df084201997b349536285964dac761544e0ec8dc5d731b8725359857789d27d28498d5c0fd8fdf2bff99ba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cbb9d7707958da0a67cf498e0d550f497b22380d73c2f367dbefec44e1735d06be943929d2fe1004b8eb11585ec5b43635d70ec472b1c707805c1c16872c1e8de6', 16),
                    gmp_init('0x12066c2c35cf1aa2ccc128544479166802e8a99b06f696c2a02cb8ab1e8b9da62336e5c95fb421c7b72117ea761d5b978b959828182eba6ee4c4a86da6a6139e58a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ce3fa313d74fd83498b2d261eb6a3f48cca2bf9c9863979e3375ac4137edd4aa0f1ed775571b65f2dbe1680cbd6a8d82e835a529183c47104d558d1c2d75dd2d2', 16),
                    gmp_init('0xc6151a645afdd5d515b9e7ba00c6df8a5f74643f68687d2a6df93ce978f35ca817b879a0e6848f981283a0fe8cf8871f0c6a5fb43b15cef5dc0b8664383e70dd66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe960527201a1e7a9624559c328f4f0e0b985dff6bdb14f2031ff2e621c84d4f92bf9ab97716f4f3d16d3a29b22661d6e6538d81c5b1e2e5c2af39cf7917f8115e', 16),
                    gmp_init('0x14fa17d7b55de52f2ba94972ab444022236e84af56c3182e4635ff5a5feb808d2b8aa78b521ffe060a9295b412ed23322be009bc173b2b9653f398cc66a79786d47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1993581deedc29077072792ebb0451ce474b0445ef2d4344caeaa71620cd1229447d8353ef02ca80e90eea87dfd829fa44e449b10eaf71c53598c90e71abe54c3a6', 16),
                    gmp_init('0x14298f6f7e6e19b03eb3d8c230321f7392ec239e7166911a4fcb31db16ce85b7ce020aed69b471dbf3c4df141e2c456c3cac44fb92c3ac01ca739ebef0294adefa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x151fc117f8df22b64f11af93da8bdabe8330fdf8d8d3c43e8d7832c7a2a81ea68975402b4365386b1d1bc1a1a2e0a508d0034277222083bc29f3d8f02c9371d8cc', 16),
                    gmp_init('0x1c8f6b08ac8cff9e2502040ed772700d67b5615191444c3432b0366164aab2ff463689653954bdded3a60b72b71577519e7a3b4bacfb8eb0f62266747ceaaca36f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x165a434e2e64303b216a386e77fee35a78c8d66059f8912bd54e9c567914ac68eab862f559972bc3e5f69d84b2bb0e758a389f9c08f3947b43ab8e81a2dddb4eb9e', 16),
                    gmp_init('0x77dfb5fce95e5782095ff003efa6ff9ef960c4a2e598fd979a55c10ecddf952e71c26c34dd38c0f16b45e63824bb344485745c910055bbcb3f545f743413593d90', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1311598ef27d6e769570eca4f9b5d1ef4804accf5e8cad053d0b8b2ef57091634eb2284f96fb3981cc91e94accdb4bcac17ec781c97a797ad44a87650d1eaffd713', 16),
                    gmp_init('0x13b606103fef370bd5f1bafbe749d3d6acfb5e171465c99b95cf5d97f5d0c0b18f8db092f52a68a0466e02e9ca8e066d292e611924d86a5ba367cbc9061b72d8840', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17ab8939d44691b6141de8dbd0cc640959931dd3c9878a6654ed001ced01b8cd947e1191599011d80ca8731070bd806f931348d7acd79b09a47272ec59646e69daf', 16),
                    gmp_init('0xd29389fffca261241325fa595f6ddd2f638562b91a040fb497f01ec218e8a93ded926ee0abe626a5eab99e7e66c9e2a86beb9a13d3a6283d26146fdd629c45660b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10fc94974baed3f3117ba44893aa9d0ff4f5d8c5ac1ced29b1c4288030314fff349ba7a4c67088c5b7bdf04eb7f325db6ded5f259932de4f201c65023db6599420c', 16),
                    gmp_init('0x18f27ef9399dd4b2b7c41745249c94e6d743cc5ed866d5334f5fab4f9f892099d0bf33c74961fa96ebad6b499096b9307c11701e38d67c31efdd804dafcffe235f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x324bc043f1e04269d1824b28a71101d18edf6360dc10b2b221cdc478d6fa21c3ebc8d1b679f058192c7265ebb75ab3e95dfefb60be253c6bb5d1a48c6847edd0e3', 16),
                    gmp_init('0x141992761ed9c406f54b9116ed9a8252d72f3719c92615219473818c351bae2cd87b97b3ba50671c724489ede322c45f14d981ac5544e80cd3ba342984e5d49e112', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14745bcc736556aec9309cb00c71d3ec9c24612849238d91211ddc0df1fb12746cd95307cf6d7685714a3b727ff36e50adee9f906d8c5c859d59b27fae41ffebca8', 16),
                    gmp_init('0xb66aea5e7cd1f043ed0b8f64e76def5c6952e5cbe06fbedea76158ae6f79e9064e30be2e46f8be5c1f6ae38711f9d1878d7664bb136f0ef30908caaaf73b06b817', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1955d6f03752b5e1ea50c2023b1eea3e4e78814eb23b579382e19d61215d2f4034bb1269a13c823801d9f04790aab6247d53fb5fea90c397adb8a651d57ecc0a759', 16),
                    gmp_init('0xaf268cc1d73620b670ba2e014cf129cc78b899d0ce78f683eb54fa1a12f4ca8bc09d7fdd8353b93fe090f1a752bc52007888af6c5d636333e026176ef3bc9fbc6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b5fbf2f7ab80642305a2fdf30f63766842b36baef3cb97c42864e6a6f66c50b565cfb4d5b422bb0109bee02f03de8deff6b45fe45e29539fa30ff765e6939f7cc', 16),
                    gmp_init('0x5d2e4e575706f4fdafa345d34af4742027fe264cefdc027be7d66f7167f042c02d914f6669ace2daf5635dc6aa602cffdb0fbe4793f4a37c9e6394407d208cce19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcff400a01919a026cc9c8f59c629b6cd623909e659ea4b4aa178441b9a6e4b4290b8965b5bc6d4dc7807958fdc42ce28b7683df70ba5e17023dfbfa8c0b9f59031', 16),
                    gmp_init('0x9221639f519304343e423805cd95ec312cdd1a8f417d87f2064c9a0f296c4f318ec39505e29c0584e15bb762074d52835b9da8cdc495b4acfa09844edef77fa34f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x472059b0d0ce8cfd5ffddc91cc67b9d20526652ca7d81d78993615405626725e258e1d8586f998f8a2b8b3bc4c42eee4db9f343a94869f7099bccb3642e63f4e7f', 16),
                    gmp_init('0x264f67841b9f4d092a80511053d00a652f804f3baa1c3a4646306da7f0e0656f056ab675eb4d45608973ca91ae470a1059378189e064d7607f107bae471440b4f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x165fe5baf32fddf897c8edf00006b75c40d5cbd86972c87ef25358c7f9b5803d2fb137fec7b5ab20ab2622c4d269bd3a106aa8132cca742b57ba90279b48ff8817f', 16),
                    gmp_init('0xbf48d363cd1dab24a574b788727775a186f20593d090116194485f1a4a12406df02090074ee9028157ba588c9835c2eaaa51b4d70f298a96c728ca46e7474414c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26cb2031cbf74e0364da420113ae9a0ddffaa4d061ec28f5d44eb69079291d987a41ad7d60f7d432ec060cc0045f62acacce5d984ae41302bb5dbbfc3f28ce39c2', 16),
                    gmp_init('0xc025be36e04edfb55437f4a02e83c0b5c8984f0d31419bc5dffbe401e47630b55a6368b04b3c25399a7d2c268e37ffc8b92b9ac46440e046319b26f39adb64b474', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d9b2647e888370dc80c3746a4ebcf8a9378baf2e0bed20bf034df242d0bfdedbde5daed4d333ed5a0f23de1d53195fc9647551875314fcd1ea4fc2340e25a5ab18', 16),
                    gmp_init('0xdf41b9a39c26c25a6b0fdf18a6290f42854d3f305a1ae2c13786e66075fba0408ace810b668666613227fce4ded2dae43ea49d4165175f9e61eaf2b26c2befd1fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea85ad08d64bf3e0079a07f792660cd920366e65b5611c982e4465b0d8e404d18a26197d1403f464586f6ae02933234887724bddc498a4376d539620b3e5df1ee8', 16),
                    gmp_init('0x1b1168ae283cd156e0793a4ec07ef32b9aec8ac343a6510e13e97500e8974d28c0a454401c78d22fbde94009c614260beb6c37e48165879c25ceacdd6bd8b2d1974', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e3bdf830e4c891e5465ef05e7fd8ae2c2d1765190b506667e056b375754199d00e261a01bf3a8329f4a93dc3bafd4513600247549fbbfd9de9ccb4dc598aef4a5', 16),
                    gmp_init('0x12d0d80168a8fb77759d3ae583f356fcedc4abc71fa54bbb81bafbe7617ed639112f92d07a1dbfe5910192ddfb5d9082920aeca18158587aa6a1cf81a240f6fc911', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5aad5cf8e526aa85a0161425d741880cc3f9f74c128a8fe4b7bb1d231ae8fa5f22e3212a1383a2a990369b860b037e25d4f4d237652fa7d08d4cd4406559e7d8e5', 16),
                    gmp_init('0x1c67b20050f2192ac32f25c6c8773012f982b76e2de64649600cdade3905864c30036582001e0d2560876878d143a0549beea7e6a9c4359b98b7c5d9354dd38b2e7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1091022d6d2f065f07cc2ebc613f57f37009806a369cfe05f47b1a3158671c00932606b9133f7651aed47836ee3cbe030a2ad21890e8df2765f6d9b0c3c9185544d', 16),
                    gmp_init('0xc1a012168152416cd24a6fff2c26bc9de9634868ce59426e6d1e90c7ac0ed8274943d7ba57da4020a633c4300af507c1489ac5bf2947e68a1b292c583514c45ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6de97823f8c38d842f7aad59e87da6b820a19c319330820abb03eceb67c9c8ee6ea2500f121dbf5ab67294b1f1c30037d970840e5c142c3e23c2453d609102b570', 16),
                    gmp_init('0x35b23168780155070d6f2efe425ce12ff4355ed9ecdf4f9f7e8feb364c3ffceb86b2b5ac1cf81c82b8a8b5ec369cd0c0659090358d569c9eddce5bb75ea7b6bb9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa69d86791bea88cb5d3eda3894ae907b6070f210bd010cf1a8fe70ae9e9a13869def337b574a104ba7c5462ec6b55bf072c2673c8be7763dd8be53eb86660e96', 16),
                    gmp_init('0xbedd3f2baf12fe8a0a67e9a8816cc704d6f6ad3cc1900ceeb3efe4aac270b2ca5aebb49ed4eb40e91e33be213e5ea340f7562332d1d8950c30d1dde97203c8dd6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3999c13124479115ce7fde007761f54643554a9d1cdb699aeec305e12b71c3c5204a92d9bf09919ef9d0ac68b58a5b7c7f6cdd6bb564fd36f55f56b5a41bc0fa77', 16),
                    gmp_init('0x1590ff53eb11534ea4d07190a204ab3b12b1945580a305505f9a8489b5c06c4e3cd9ccd7687be378127c7b5adf6744d40111353ccd394b370ac25f890e1c271ac2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12e55330bce0d847cbd7ef476ba517b358541449e3fe977e973ee19c812304bae0995a4926aeb8bef70381d17897a8a10decde86e1932845b9e774eed9b1167003', 16),
                    gmp_init('0x9c39faf7e705547eaa2637ec813ee709d314929f1adc9638fe31833913651fd5438b7b271563f8e7782606ebdb6bed112d714b3502ac578bfa1620a1d6f06a91d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89e48f64cc77307092ca3a8e27f38384ce5114c6e07bdc78a44e16727ea5ba72fb353441feebada914ad964c6e0d36fb23d00a50fe53e3c393785e09ff6c6a364b', 16),
                    gmp_init('0x155b214f0b74b874dc2e61a3e2b083f7b1a3539ffd07368486a82d6078b59ef9e701622d6db779c99e6ae03de8312cfdc8d0bbc970e6a2e6c8cb3152778351aa439', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f6faa66562e591d19aaec1861bd88085bdcaba29bf2bd110018daeda0655cafa30fd1d902e710e95fd318e5b24fa1ea3ffb0b4de18cef15beae77c03eed7ecb581', 16),
                    gmp_init('0x1ab04213043c0096e5d6c106caa0a4c93577862e9bb6b953e5c407a1f0ff746cc934f7cb6dca84de772cb587df8c6806fa90a876aec502c0797eee386f7b68c7429', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f13d850e0a528ebe445321e42b7278eee3adfb05af7f1e1aa00fe1dd8b7a78e76b89bbfa0d06c972c28bb9436f2cf992781f704baf84c2e38c68052c94876bab8', 16),
                    gmp_init('0x9b806d1c88d9ddbbb619d675189a99207200b8a86fde74aefc7af221f7f9df33279285ece1be66e56838e501dfaba2fa082f944afdb657d8096b724c681934143a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe02a79d89a8a2fd483fae167e70f0412ce6cee1fb190bf076fb9daf028a09342dd890e23621f36c56fd7f80264d6dc5572f2a64bd7ae020e8f2aaea367bd35d8cb', 16),
                    gmp_init('0x116f183174d65e3ba7ae34dd021da643502c47fbfce741ff1b3135d407dc287296a34240b3ebb3eb85d11f78e31df0dc525ed4033dd0082dedac222a2450849a624', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1daf5eba0c09a238dca1c51eb23e3edd8bb00a83136b62b4fefa445212e855c819a69bba3f21edd1449ee4a352851db1a32c2325238e3c06d5583c6b9ded09b1b31', 16),
                    gmp_init('0x1836123679d698e3bb5f3d9bc4913bba594b369219cfe239c8868b167ad39035117f7d3d93f5b407cbaa7ae6434584dfe78b6e3ad9f699217e31223b0b5b2448058', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1491535d73cc30f94c21acf5585cfc02477855a8b672b794f71de77dd771b4baeaeea2a71018c98a08ec5068acfef8cc1dfa8ed9bd86065deccfa37c4d089b3a5a0', 16),
                    gmp_init('0x10ac7bc8602f240460a2976daac122a83b2f83bb0d588e7879d186ab5d6c46760cb8d652ed79c239254d7f9318bf60c47c088d22c712cd0a69dc7f723eba566c87b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfc52e520389aa16064be95945c12419882b4152d3c43e1ced200cc67501dca3a675ffbc695977aa7ecb9c748eb5705b0e56e7b54b4a15f134a7aca2f4dde4b24', 16),
                    gmp_init('0x10f987a87d51bc77288ebacde3fec6e7394558091cc19e81bdd6d8879b8bb67721d8b6764909a9fd8e88df77ef0d4bce1c6e98a64c03b179b49157e8281f875201e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17f1144874144a2b97e15bce4d84cd41c48d90d82dc00d1367fc1ccd5d59b8ed6b59376778b0595d9295715d9e014a8829cfb58377c88d2ec52866ff3c908ea3335', 16),
                    gmp_init('0x19629cf9fb20984377b1ca50525867d760e80c00f6fdf85d7f8d93e5a1a2ca244e623c0996d7345d47d51ec590f402ead1baa1456964891e5930e3e35fe60aa94e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57463f67093d268ae849f2777ff412ebc88f5ee2c89ffb2a031e0313e0153d0062307538caf2390466aba4da83211f91e9a8a0fe24c10de158b95253361ea445c9', 16),
                    gmp_init('0x1a52693e9a568601ecadb60e7fc4316cb534ef5a19a5d25e9468a3c9a0960681a98e35d68cf7aa435f7277c70d8a9c71d35d240074b30514b6f3856bef0a32a201a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9f3c0c3882fa0ab6539f94c596c5fd1a3b47d6eb25033de8df8987798e3ccc877b42e2bb900653fbb79d919d7890b4d7526c96d9fee2e6d05d8bf062c1e073747', 16),
                    gmp_init('0x950559bf67c9eba6853cfabcb5394fe7feb83a50a3d8c771f251a9f77a8377e5d81d90fb3224d885c858de883bcf37a26fa045ecc4b5c3d09661d7f82b18b119', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8e818d28f381d8b205edff69613b962e0c77d223ef25cc1c99d9a62e4f2572c1617ad0f5e9a86b7104e89700d4da713cb408f3de4465f86ac4ee31e71a286492ad', 16),
                    gmp_init('0x13efdbc856e8f68bf44d4e19fc7c326fe48a16f7855c80866237196bf8f72ea0dcb422285dc0370689fbe726f8ce045a4038b640f2b6717760f721231cf8cdf1f60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f710e5afe94e5ba9613ac649985de0ae9bd6f5e492b68fd0d2194b6e92e07f29c42e13fd39e29e7606bd3d4548414a71abbdcf3433a6a843b7225256fdb79711e5', 16),
                    gmp_init('0x1df7cee7f9b82d6f6bc41991d660d180f5010b696f690eca082d8d9f6b199033177a666763c69c992471ca89222f045afdedb2913722a7b0a2b27df3c4b8ec9ccff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbda91a45096a37386c719a9526a19b76cc202d12deaa18b8e62b4876369b0497aa51fbdd41912c0aaaebea88d66d50eea410247d0b4e0042a3615d6f52b1773dfd', 16),
                    gmp_init('0xe6ffb6343b0c025d84417038f17dc27e489c99663c06c88bdd2d8f1b5cc999f2a9185c46f821c58dac3ae904fd34c152fa1a547496796fed3bbb846181967c2e8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e0df52fbda1c70e3ba20d339e101140e4a8bb2dc4dfa1844cc07276099b151a4f403427f45ec71ec0962087ffd2a6992b43478b915fbd38c5853233c2b24565f3', 16),
                    gmp_init('0x1f7f8e93a95adc5e7fe3ab19e3f4e1007056437af41dcab0c194b0cda7ea75816109462fbda970fe140cb6a6bc7c4ecddc5080b5dd16cd90fa6dc4129870447de06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d828341de99d0c2bf44d22350e6345b7f127983b3a08cd287fd6985bff5177e69229df0e10694db6902069c962bc4568e6c6488350dcc7cec8c9e4ada3d6057266', 16),
                    gmp_init('0xbddb44c847e1a9e48bc9865101d68ff203bd6cbbc11b43a2be91bbde9d2e9820a827b7657b1c912bd78a98566466cfbc6aabadeb7b1c7edb4970f6a7cbf30e2472', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16cb24e8e69a3eb201b56fa754f3f023b63d8136f52f1caa4957a275ebbaa3c8be189338c0ec3615980e090415a9dda8a8c22ba274bd5ec1da69fe25bde27936d20', 16),
                    gmp_init('0x17c8799241207a009d0e14a82c5a62ed510e0d18b92cb841fd3c26a086f972a25d51f8f7c0f06450667c5b98168992792bc3ad694d1bebdbe06c95381d47a76334e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x170ec84651ee3cc23abd4e24e398bbb88d5e944e56731eab5fc465549dec3016f3830fdfee80b374176b33de80eaf7c7fdd400d90654d544f48b24ffb53004860a', 16),
                    gmp_init('0x16607695213126010b8ef14cb4024d81406dd42c2e744e78bfbd2f4b6bf0be823035a07118d6cabce4198e7cee613b2a84689a004bd1f650591ec4cc3f41f46949', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x174e99f0a612968c0db0f0ec2d74915174070acc4a830d1770f0fd5b7237f983d56c64defa717bff13c02e97c63a120348df285797e18d38b6738ee58f048e075e3', 16),
                    gmp_init('0x18a43d757e3a20c5d550b900a1130b9dd79eece0912c7d4304ca28eb4926ab73b96e80d7527c840b37ca392130edf8a093bfa3a36cc56c69e374a5d683a67aa8ad3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15bd291040dd121e06997fde509896e267b409e4e39d97d3dd5e61a1ad41ebf3c19a972ddcf3a1e3dbcb52b53a7cdc36585b3e91d228be6f437205ef08eb8f1a369', 16),
                    gmp_init('0x191d73f0fcf2c535c2b5846e4fae569cf5c5890fc745614dd5967bf5942bdb2220cdf1bd864cd6903125abb99acf8ec32342f1f738c8d9d25b1c2ef5fc558e89c28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x985aecb1c314317752afb6712ad0aee61840f3683a74224c51855fb10264f512eaf7ff11505fe4413f6580e4ff321831b40d121379a87e5c03c7155bd663561cd8', 16),
                    gmp_init('0x1d71ca929f36c2618c9c510a7420791ea077e888578f3af15664651b848552b027a96830bfc591979555e2f8ac03a67da9464a3817c4412da859c6a7ca7fcce068b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa4ae7493dd3e29b1ea8ca749b88bea055615c4e044c34698b151386ec9cd89717f96768f76cf805fd46d5cfeea8f497204d3351fe82dc8db9ef66ede3d6078a87', 16),
                    gmp_init('0x18ece4f31df319b3d097a88f4589981d22ff8fc91c95d20e200025702fa91b8a7388b4d3be60c70852264104c36ce01f1939175af31f2a5e72399534b360fef8e10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11ea7dc4d1bb6ef26b0f4cc3bbbc793af2de9be1e0238912e7142e76886d8e18229451958953e6dacb88e394ec4e8af7801b1789b8f8aa24063dbc8e45f29056168', 16),
                    gmp_init('0xc08f39c45c8f1291d2a7f0f61b420c1eafee94e87b95bd71ad6d45ae094a85c2b6b9acb85cbf9b34ec5b827c408ecbf87dad007fd57f4098d00255437c02adbc28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10744754972eeb4f704d1ae7709da6b6eb22f04ae2828c121a470346f06cda644950714166c8218b455007f523ac9697e6a669672060df0ebfff047e88725735327', 16),
                    gmp_init('0x170d4bedb84568fbf88a28a3a259b4ba05c4bf3c652672e59d28d15c8329586171d1d171fafac4a044b95805aa0fe9cc8eec530e8ba8f7258cdea066b58116ff4b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b0151bec774fc489669269e3976c9555520b318844a55ffc7f761e4b524c0b993262ce11fd54e30d23fe2c0d90d10e09e9289df473e8c8666bd73d58c7d1f0a864', 16),
                    gmp_init('0xe457b5629f9bf2fee5a9ac4df617de12988df1e8ef1b5825f79b111fc2f7b75a847b22162ea67c5f6c69e50763e1ef44c7f8e75ed30cdefbcd2fcae190296d60ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x112edd8b086c50328a5634ae7771aa96f9972f75e5adc2bad98867ff76281a3b7671a23910f683e5310da74da23f32fced7d170fe6826a1b4382627c91b05ae955', 16),
                    gmp_init('0x1f0b6999c22eafee78301721dfd59fc2d69b9031b05631f8b1bc4d05fdc9a3afd1fd1216436a6a5a474bacdffa057b17928666acbf56bb6af004df0dcea85353d21', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd592387ac8a45c05847b4d53b5e57d382248a9d1e92cc8dd973e4c3aaeec83c547beabbb8f41e33fa761f8bcfdd51647d7afe2ef0a6a73164056f74e6985edc827', 16),
                    gmp_init('0x74d714bfb59e7f439290e7f479f854424f8b0a8aa6bed2bd92390fe9808c419fa453f55d464c6c0247d10acc25386a56109e4f5d209e537236802ece3dfacdb1cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12c0a2e3d13315c3a894c07f5bac1ac93f9d8a69114c507e7d7792104e1b3b3a7b1fff489fb38b2c08c20641c7c755be1d689fd5c8d5ef038d09abf4318e7c8e1a2', 16),
                    gmp_init('0x1d02b8cc08f7cc49d324df71bc8c112d075ddc6f44086e8ff0c081a516dd3bed1acc07c67f8533afede07627a1ca8e8f5cfd4e3d86f00ee5640016026bed523d79c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b27c5406150bb2b1b6469b4832dc631a7a05a4e29768484f67d759efb4e03b9601166f9099f7095358060db15a02536f8a6b0830b11356f82774af3f63edfcbede', 16),
                    gmp_init('0xc6a7cb9b475a3582e5e3d038fe349a607f57af4a82082c527cc60e026a93d8406c60dbf72600c378b0d134b543303674dd8d4ef6c7d7180a84590174e012481c04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6b4e5c2e7863e739e5cde0727ac019cf345bf6f6414134de4de7fd5799080b37dc2f0da4b931e307be14dd980e57ac2978ad717eb3aabcca469017ed5f1c86157', 16),
                    gmp_init('0x1ca8e7cd41f2e0320d8194d6fb1b9eec6810ea41a2b6075e71d802c6f95b6c417ebcedcd4f2de53957d9219998521cb21ccf92c44fb46276090094e085628e15f36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb32ad1cf22d4fc970fb5b36f882c78f1bc94de920a4bcd130aecc3392d9fec11cb5ae0d9469e02df009a9f84acb7bd46a59f6a48ba57e78755466a9901fe423c0', 16),
                    gmp_init('0xd692338c7878fbc82abdb308571b2b16406503badcbcad20d580c9608fdd6410d32f3b64a72775c9d4cbd9157635169f6fcb83665c9735fc048cd894d5df0a2534', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66f05d31b6623cacb041b28b529339513fca3146f236bae498250f4e801ce3e75d232d446e86846634fefe300a1ef8a5c132cc71107fa0e6863f99e9b3ee05cae4', 16),
                    gmp_init('0xd6df2e7eb0039343fc6d14e879ea0c0083ba629db6834331f966e397bbb7194380e4aa53b7c0ac64aa7d41ffbc55f68dbbc865fa0ef72ed17812b4c656682f53c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1646579b78b4fc8018255acddc8e8f70a56ab477aafb0589057c1e54497d42bb4af05eba936d5c88dd2b8c03cb0077b303b65e529c7e0cd86173ee61d53e8a300ec', 16),
                    gmp_init('0x41bf26ac8af8089e32b895205d3504aa3578459a4b748ee6f220104ab16df1638d804874f9877d38ad49edc4b8cd182ee365e954c9809dc093535e7ff0bc97c72e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf95eb0d18c351721c4ef1fb91fa78398b3516243081719f708faeb0188d2e4d91efe16518102c41237a52da3956ab4275a33aef70955100c93dff858061e5aa9e', 16),
                    gmp_init('0x1b307d0be62403cef8123ae97b660b511c800a7180d1e9a804f35050fd319bcb6aaadb1fc8e3b26ba838efd42750ef8e8fbe108471abf176e9f90c4d877e5f04c88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbcd60de6495742a00d9def19853ddf49acc87592446314f2a26e39709ca264f8d45c833fe8773bddeb11bc0dfadd26aa490f4424143959c60d877404a6fc3e4d4', 16),
                    gmp_init('0xe6f9a8115844fc190cdeba26f2a345fe932d73ccba13c171848540de4bfdec936b575d21810b4b57b869765ba5a54ece2c41ddaa31655afe455cb1207487d742a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x535c068d13c609602474557a4f87d678a7fa43027bfe2668e2a60677641815fcf40aa99441abaf23816f120a8d5e6d1f7eb0e2795c8f0752e0dd8026ea8d40a41f', 16),
                    gmp_init('0x10670388217eff3b64524cf4df2d08f6f87ca75d16c5fdb9483b96c33825132ff6dc418d77f4e4ea4bb467ae9f11667b2b7ce62d3a67e476a2a0ce11532bfd0f624', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1050f3aa0f43a17dd3a5b9cf6cc980904b0908934dcfa01669274df281ee613f21de39a7aa158880c150d3f495380fe63b562b84488e939f5a9f04691638d0bc669', 16),
                    gmp_init('0x9058640103a3233c39cd97cd8959d9033c56807dd77b4a869f9cfc79fc15aabd29a657da60ff003294c634d031f0640f1851024297c71b37bf346bd219651d59e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b202739c50ff59e392475fc9d5318b9d6c425986f2f64309d0014d53ff563bcab01e0b5d0e12c6b29e31d1d9712c990b590e53555266aab70379ba87baf1c9c2ec', 16),
                    gmp_init('0xd4f08a7e5a3118ce628b2b69f3f3b9962831bd8b37b99454125def2733713d0fefc9f67bd47de6632579b5e0399fe184301c93ba4e6b08ce068bf58dfc16f1cacc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b83244f6181feff09194fce3f2785d7d61dfb408aa10af3583ea46dfc9c11c1ce34e246013619d399c3666bfd2f8b5c4f40fa181b503d94a84fea0d82ec8a4656d', 16),
                    gmp_init('0x47d83e2f5146ed682455ceb5984faa4902e7213b46a9536d003b9958cf4b327604966bf770959783608529c57c5d1729d4c2e3d15e9d04356939d98f4add4f84a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130bd6bb9b4f29f7c84803860ff417e95fa199a1ef30ed869f9f6c218e468ae6f05a36bcd437030f0a59c4259d1909fba26f2bba82c09f08a26984d21e6b92a02be', 16),
                    gmp_init('0x1e3f1432d70f9d058f7c6b2171f73f5deae8499105d9c00fbc3ffd986e2a83ed877e24a5cfe9a8320a88e4696653e9b1aec388d2e0a9b2814d55fd4e3b2d4e924d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8356e403d5870a453eddab08dbb228248b74e500ef17a82fcbcda6f2d782850e4b06ebd6efdb164003370d973042cc94e35f83c650dc15323d8626cba3cd27ff10', 16),
                    gmp_init('0xd9bc78ce9a7c94ce27ce2acbc0d54b6544ead25256a0838914f1ef010cdd93abf9b0a88de8f9ebdeb692386ed3fc3349ee25ee735db3d2ba34507272fc79dcfe50', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6429bc4b3e190fae23ee085713e80c35ce527f7f90130f44979adc56363854b528ee67f380ce44ae8bbe3c0fc80af8d3a8acd530b6eeb9aa6c0e13c1ddcecdf0dc', 16),
                    gmp_init('0xf06c0d079e472ee36c319cba952363ac4357591774ff60ec49bacc18b89bee144f8d75b3f5daa4b4cc5fd3bfcf85a94659192eca92b425af8917ea6fb5dbb3838a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x124540c29e8e6658aacd1eb58dfec9737e74cd9bd0de64c4745e22ec70382e3fcf3a704b004172167c2f18179d957ed4bf8601ab611845655fc28cd16ce7333eea3', 16),
                    gmp_init('0x604945b9cd7656234dfd119574309553a1808eb84331e62cc066014006165af89b556347ef8f07eb0d9d3d69a1052b60fd3ee2a66ad4be21bc4f35d47d4b18bb58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe97234064ec7cb313d23f73dc24cca8cb4f05d43bb71e242edd2b9b7f67668cb0e4d825dc6f59c2c84102192b6017452080e28a4109b2e3634580ec898a5d3a5d9', 16),
                    gmp_init('0x305b554917e6c4a9b39d910eb8b6a13b4fb69bd932c02c9434c0aa375c2e742b43c8c7b6932eb170339c4d252a3e418320fec87a30d9802d9bf4b4b5603a3635bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd138470c8f418bd6169fd56374d63f192de7615ab1c43b436b4ceb9902f50356e77a304fdcf52d44f0448f630b4a448ffa163a01129ca0d9f205bfabadb30c227f', 16),
                    gmp_init('0x1879c3c9c86dd5ab14e755fdf2e1d91f20c57642f92b580d617f71e0fcffc076bf8c00748ee637dcaabe28b6f8994eb909c5556cf8b2bfe7bc94b42c1459554d529', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48f19c250c7804f13a2e6971efd10059e23547e13d90ec819af4c791a4057da3e5b1771ba6aa33f31cd4a5bd4fef794a32c5d2e709651a256036e215cdc9c4f27a', 16),
                    gmp_init('0x56a28fa36167ba52aeac5f1b7bdffff0643c32a9e1fcd4a5c52ed5ef74c7fe5d927b14d09c556b5a9f272f50feabdc4582b904a5b50cc6ee85968a695d113453aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f9c1a790b8380c97e327e8db4f8e60ced36b6b1748702e3c8318e1a69ce022106e780d40da336a4f3eb909e673379771dd032940ae8d5c1aa8dfa447387950112', 16),
                    gmp_init('0x15512c0ce90b48f96189736e7543b73b0a7133c9f01be57c16eb399ec98ef983104320fac25a60e6872fe45e2ce58c3798c650fa0d556cfdcf48eec3caac6534a9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fe7cdb0cd27509002e9a404c2ef44640912c43b3ac37c638b30bb7145853ee54c8a42b14363c1696bff2636ca0878bf63a811425b32106bdc532187b6a6f0c982d', 16),
                    gmp_init('0xa53065452220138359acd5c1c5ba520a9084ae67ec0f429c8551dcd48b174e2689186a055117e64a4b91744924522fcb80ac1f2fe8d5914e15d333db10ea37a696', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7b9c038ae684d25fc7a454c1c2cdca6c3a56f49a5ef35e196ddba493e34b92d9149bb08e812cb30135cd96c7d171573a29b3cbeeea6a86c6b2ff940bfa7c8fc21', 16),
                    gmp_init('0xbe9be26568ca69b66296aff0213d976493cbb33580531a836d991737bf3f8e37e85bd9d862e26d8171115517e153a32b0a21450db25eaf989115adc72daf46c7ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x926df70b5da7dab4fa9807a5e270f5dabfab651bb7c5179d99f250d1b4e2c46522c7a5afe26a7334648bbb5093d36668b6ae5023a577eb6a6129920bf927a6345f', 16),
                    gmp_init('0x7ea978d347f5b8dc29363280fdba259322d91de87b5ec3d940a59fd0a5abac1cdb5251232fe4ef883ad11626603785af26b0b2a36b413b0347d8ee9b9116cf86fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9ae63aea3ccbaa5ad3785c17e6d6b2b3237f6c9ac32442dc09d1aebb4295a4931a111bd63cc9b8764f1798cd9af6bf9ae9bf82c96b9f080c232d089edecfa97e6', 16),
                    gmp_init('0x1e9402ee68e10ec3795a8278e1a05348650838f24ecf46357d80026164672a30c08351eca4df3f7172307e98d521a4b7f1b5aaede6c9004a15fc2207aa55718e310', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15611d5000d031d95b545e620fbe3cd9c54da5c2563869398e95343409cde8f7e18e9df66af3bb8831356b11286a92ae9b32426a7074205929427cb3882a1c55fe', 16),
                    gmp_init('0x766b8fd85da7fbd189595da6bfe6bc349c447030fdea24b1e1f4a49ccf1cfe8d8cc001e37cc09eb8a44ab9f2f279e1d45f97d25fa19f6628067476a724d0db8a71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x194829799ebd3fb064326a254a435de4d643550f6ba963236afff0e938e46217be6ad706c14147b405159b7959a3ef3d3dd83dc2cea4212671b91955973e33296fc', 16),
                    gmp_init('0x1f59f483a0505c8bf392100b4b2000501c51bcdbca5715c563a6f60e024d88235fec2c4310a530725fa9d8500d9383698a31211c003aaa258ac30dcbccb348f4e93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45a660c17bf6a0519d6e4e43b061488b290d340bcd83f9cb7b000a74d1f3c78c968ef3aded399335126ee038b78d2127ab5d1b8c067c3f0e3694a38eac728923f7', 16),
                    gmp_init('0x7a56b110db03134ebe71f2c85efd8d351c4d561a204c925ea39e095b3017821662296d0b2d92c04da4766950d1f8668846e07a43148256cd6785f9e1ab7775da65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfa779b68d66dde1ee8ef9c3b4b0b7229e3568d9e165664a6b18a046bbe3f15e9b9c876050cd2e2661d5f0e7b20aed80f2c5cbefa8a94e8a9c618d04f0001b7109', 16),
                    gmp_init('0xe58de74638753b0b83c559483f40e4879b7daffa0f8368ecb81ac49e4ae569efa2208f1ad1acb7cf35ea06c8b89ace2e5b28192afa90f611249997a707b3465741', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde9dc7a2feacb8f7414149416a9a506100b72a31731ce505af39bcac7995422d85dc6358362a3d429b1fbeeed71a518e3f46c28a5c3ad0d0535237a07c19703702', 16),
                    gmp_init('0x98f969c68e609d7b372d76829ff2da291f35b6bc9a41a1d0bcf9a7bfc20b18ffaf94e2fc37ef6d534c751ca1ee92fb109fc5c16ad7fa04a7b723c01a9855977bba', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x15c2319a2dcd5cc866e885ff9bafae7580e2c9292c035a0404952bc9f389719ecfd5c3964e204ffc588a47fadda4e278b0ec7d56a41c3d4c59c51db2d9d07207165', 16),
                    gmp_init('0x1e146c8fb212fe103640aef36fd3ababc3586103bf0a2a4342c97778a681d42c97e6f3f0785a624ad4f35d968ecdc8b9c190e21b050dd7fd36c8b77ddb70ae9af6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf92d5b1227ff914c06f3b3590354ab69bcbb6cd66467a1bc8afe91aaab59bcd54f9f0086014c7fbbe44af069a05960b9c7a86db08f35ca4ece2fe08a10462e6862', 16),
                    gmp_init('0x1a41c5c19c163da27500e144257bb44f664324345620a80ae0d9cba07b4539d45bac5deff764351441ca0a5c850c384f1725bf4d921d14893e422226588f7d5ac27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x148f3d5711649a9ac4eb4b28424a3c972bbd85f2669475cd2bfc3492e151398e328652dc2c1f46e3f97246e5c1ab711e872336e362e0b4b9191604b730ef1ebe533', 16),
                    gmp_init('0x11f8237616704703ab1984b4a459fe0ee9a75eb96c9d10654140d39cf240377ce8fced1dcd9b7bcc7d1314e872acb24f45a9202ddff6abd415a2a5e5f5425e365fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fc386d1bf401f225d7e424afda789af68cd89da561c2e03f6be99c357f432d1b4dac97aec1cc86c0620ccb854efa62cb975563e7858ea9f892347e38373435eb6', 16),
                    gmp_init('0x1db9134bbd1ea48e2819ecb8a741085c481bd5b56203db247cca26931a072b3c209a7fe1c85c9fde75994ad85a73974bf6e489bdf59a646991946f9bdbba1a12ca1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x108379e8f32a4bddfa866f1635747c21e931bc5070e25a1e8cbde295e5458cd6c25b89884f27e519019fb839dafaca25641d45f9a0cd380ca18ad4f18816bb2c3b8', 16),
                    gmp_init('0x608ce6bcb7889d3e337deb06b31f70bf7b0886e8d5b2eb9e8a763866c2726065cbd49d035f223c885927898f4df492be77285cbaf972cff2eb9141ea4e87cc4a52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72280e9d60dccb7f1fa6893cfbf6d36ba4b8002fac84962539c3c86b639b2e6536a122f10b8dfcce340b8ec4a4cd2d934d0235d91a50eabf360a65feba78bb30f6', 16),
                    gmp_init('0xeced1d16a83f0d60c4e9d08175cabfdf742b87c10eb2229d1f73d8cef29ecd77ce1799ea3e4146ea10df62f063744dc7e2c6e893884b03a718cbb4609e279551b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e4aa17bb996f8fe36ccd93d2a3160b749b115fdd26579990d8c20329d469dcd1e9af1c21f24cb5771d4b0ae397f3083fcc0c9a0af8e1fd662c466fd7b7514e752', 16),
                    gmp_init('0xff127967a3f46c92d99d1464077540a223a1e4d6dc1ff6c988285ddaa44f9408c6da581b52d6d5b4c954167eb7152ee4f3267ce3a6e78b533bea95c80a4118ebf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11100d0ebbe54ba8e61885de1d49cf69b1b67bad971bb95ce678bd08c189175512efe4b5f5f5ff8d7aad972d1a737133c3c808d2e981942f8f7cca33db42a22b97f', 16),
                    gmp_init('0x17b50cdb83a65a7ea81b6663d297a052d8bbc3d7a4f05c2f2b9a8c20b65e61597935f843adf7e55f0d33865a7395d423382c765c4753df368c150aeec386c90b677', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4371f63064f3ff3d1fd57bf13d24cfc222a0aab59ff0e7a51c623eb68608ddef7f48f897d3ba11ff51087cdf110ea2b802478ba48fa3b4b0a2eff85d2135fa7474', 16),
                    gmp_init('0x1b0cae69edd8e597dc44809fedf64b5fc237b9b95b9244274afe0e394014287624bb2f3a649f13b9971bda1a7df93a1d16c723d7dd69dd9f504ff76d75b29660cf3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e2d7e4ce9c3aed7a7e699a9203a83f9dcacd82e3e5c9f699b21e53a01d845c6d090cfee876adbe8c68f24a7755f5836d9f6f53794f30e23d08f67a19468a4d89', 16),
                    gmp_init('0xaaf3a923806e4ca7fe7da066c08064808d530e02c3fe4274cbebb32c23a299bde45efad63b4d91e1dc0005b83c1c93385706e176bcfc07c1eb500c17fed93595e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x148fe282472395657a0e79a4360cdadace59ef5398e8b441c52368de13a23cc673cd6de926647fc4475e3163d990ab570aec121e0f5ce9e977eb1c5eb86db07a31c', 16),
                    gmp_init('0xfa82df65044a6a6842e6dc1f67df0da1880a916f4e4bb1d85c6dd083a767859fc6c1559b60df81b1710a223411c466d322a7e28d4d3b72f8e52db98b556111ba3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ecfb5b56b7d2e8e4fee434743147056e940e58f4748abbbb20687fab3bcd03b255ca83670236290af409d765846bdde94524b3552adda67d50c8d1dcc05f21c201', 16),
                    gmp_init('0x1e22f99552ef37c59893c300f29f663dcc198f4122ccf3f7ed2e63154796881c12683fb4bfcc6cbd216111dd347da0f4ac4801a6716cf22974d7133a86b1e2c5ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11edb4358afaaa644417bad66f71b1b82167411c37dabb34a2a997dce7b8f9eb1e84a3a88b9f952eca691dc0fd97203d0e5c83400e56835cbd1c4a5c4d01c878a90', 16),
                    gmp_init('0xb9e89702334bf1f6d17979335f258f346172db65c7bf5a5df339b2fc3f17688cc7454eca231fc6592b2a6593be761daaf0d21d07545ca0bd3cbb9c34f9536bcb88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe710b8f08292a3e590cc8520196bc368308180ca5f31ca736e618ce82ffd09694d3599c184c5bceeeb274bd612ba1bdf30c6f1b7488c622a8292364760a7514596', 16),
                    gmp_init('0x261350bf7b10425bc9007c299c10ea9b9b63a9353225722662e54631bd6b8639b0f86f0624cab333dc10450642793ac2a77dd928e555cb729a53c731f6e14b235f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142f980c34e15c2a46e006b87633387d75b40e91fcfa2fc8ec69a2c7e8e8f63992b8084e8de38618354b1ca63452a0328b7cd0d0e046503fd07a6cbf9d21798ad85', 16),
                    gmp_init('0x95f371aea597cd9cf2df4efa6fcf19c3f50464afc31424b6f48c8113be9bc6a8b7d7003ab86242e93d16664f7ba8d43b5d7c8447bd1609954c09be979b07343464', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x159b1375d706d15b5ed00ae5b505030b76b0d1f2ad8128683f6702473f87fd83c9ffdb6599b8838dbc9328b65af2569dac8c8a66d9759c635ff4c740ae10ac4cb66', 16),
                    gmp_init('0x181616a8b61da988b396fd2983c3a8253c0399c929cb5b14581f87c96eac329d8a73bd91c29116ad6cedad905aec5e4f185a790dcb7c669aa617a772a901f1e1f7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x185cbdc4c5315c8cfb43e1382391fcf5e8ee8b749efffb71dc9a4b446f5ebeeb9149261cb14de82abc1575626142aeeb5885c37e80f26f687990d6e6eedae0e245d', 16),
                    gmp_init('0xae0ceae429ae34b70b4a181a650b0c9870756bc3de494fd10d932e528dc3be779f1463768de7abe06b46da631fdb069e014aa2d80f6ffc9ae9e8acd37da80326b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1596d9b609a231007df404eca037a3d29caf177ce20230cf9f5829df4fdb1e2937291aabc494cb2bf4688456d787456714486404f01fbd0358f3a070e58524bc705', 16),
                    gmp_init('0x1dce27e23b400e7751ab2d9c64d974c19770b293380761ae1bb70a46357b7549633f4bac202131b06f05b7ef74134194bc194ff624f5e4049a77ff3369eb1bf4593', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b01088460c3f4dd18efba6c762c8024ee0507c1214ac386095ec7026d9f76d425f1e8ff8c4a98613a8252539dbcefdeda30f2927a1babe010be15ef16cfaadef15', 16),
                    gmp_init('0x5cc08c5a27069dd1c91c8764778ec21437c8f7e47d77e357fb9e5d3b88601b9f4362a8045e207e1dfeebd4d772c0fd54b233b934d5b645d8e06ccf1452202080cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd988881e7fc81cb6fdc322f39adf1f6747c572485a6b55d39a9bb1033189b5e1e8c17e62d3a69bdfaa0e985e1ab3660a2b8052b3cbecbd5f9e8b7bad84aa505f62', 16),
                    gmp_init('0x570322f749ad204b1971744332c59f4c515ac4c93d83e6e3f82ebd3d7a69879c4f508fae9c8e45487189a0af2c3c61b203dd188984fdc9db3631d3f8493310a660', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1053bbd85d1be1d414a13d0e8aa5141de2dcec42d1088bc5e3acd5e353435cac47e91630953a384d37483adfbbf4e0169736904dd238a6d208cd445e8962dac6a90', 16),
                    gmp_init('0x5b13afe747cc393e4bf9542bba3303c185d0d866606bc58ad1a58265b03afb03e3f8a34ce78950ff7b68e2718368edeb240c681a4332bd45962b200480b911ac9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca9272977ee049697b2fe2023bb9cf34cb967a2fb2797f546deb9afe9adeeb21b9fdab879429c16938fe1eebb1a9ac21a4b935913e9d7e27306871a6e155b6f895', 16),
                    gmp_init('0x481c21f75b36c3f8b831b7288d3e4f0d64060a8c7b8a278196e785131e862030b7464d70472b943b76d858be4e3a235ff115e58ece32c9a4f348928ef50b4a316', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b718d8187068e710789ffbcd8dd41a024efd6c2f386cdccc7a93c39af36dc54c1f67ea463635acdd0a0a64544b2e41b976c2615a09c3bd56640c489c80744c7b', 16),
                    gmp_init('0x10059ff294843754051828c42db1f6707b245c1e7c61a56a93ce606d611cc394e16c275c5432a4ec1faf3cd1bbd8e9bf495ef348838c77bcb34463b2b5d8e3ed0fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfe399b69f59d49343cfb3b87d2c027b98a12c6e2f5c02eecf785209566b06ebe287880be04349bee283d1979f5931a184011f6752130abb3623ac84cd9e107222', 16),
                    gmp_init('0x1e442dbbf3363fec348fdd83464bec2efd6c0c0a4abdf491d11d3bf0c58f8650b05d2ebdd95c029543364fda2740b7eb763d0630d7aa32c8e0273f60492f763472a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e1e61a90c5f1aa2ab33a6e9c82c9e2cdb0ce90359f5116096cbf018ad83c0faa0b972d84029ea65fcc0c1396d45928311660015223de4536aeaefe760e7307475', 16),
                    gmp_init('0x787a624ac415d77b4c3b42585df7bd34f39cb4a809daf6b61d341fa0c03789a7e2409f0a90cc853277de53f951b1b7d4a2ae43057240f72033cddf71f961709e18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb3d1914b61e3ef5ea1194e3a12741cd24d883b21f87a757b9ac954bc5fcb86a52ec188af9f09b541f289b25be0121a620cfc01de1b037432402e9c325f196b6a1', 16),
                    gmp_init('0x10acd9877673664cf9750ead06cc7d1c9ba7b54ef23579943f81005bcc9eb30419358625751914d9c51cf5fba257f7af4fe6e20b8d504a5dcd1b13ea4836bfd085d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fe1ba661c44c413fb3b2b26a9296f11b8093d6c6e9e2a419d24b9c89e3931e2555ff6e50d5dbfb330463a5d6fb3d35eaf61958503c388b0164e78a2eefd978be2c', 16),
                    gmp_init('0x10b4a9b0c5eccb757a98ce6e88e86ce3a3640c6bfde5a2fbee75212a79fa7b4f33e661640c0996c6b75b614483695d2aac883000d9ae1823a76ea30821624fc3599', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1098d684b374a984c9e891991a88593f600ec3582403d924e3841dca681f36a08c010b731c47d71b2950c47e4492fbaf7c6dd419459041d243fc8b31578e40e993d', 16),
                    gmp_init('0x10fe69208051bed53a0c2d7da86fba650e5174f1c27536e526696703f51aa828a3fb1b79db12e025195ea0ad37576a3276e307e57cb53caa9ba44787399a8a706dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc2f154ceb3cf3089a242021d3aed1274b5301cfc04112e5e84175769d29ce601525681dffaeb001e683c59a00761fbff2dc200db4826039b6076eba5d73f6d54', 16),
                    gmp_init('0xc5ddb136202bb7743bd23a1be79258b0e34138d8974a7a5bc2e63f08c7df01b0442512fb5391c10e49aa3bc7933f06cc52186ec103d6251a86c754a9e65799204c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc36c07c4fb96851d945b34f069a474ff014c1e16512ece129e6e263f173e0ea6222c8dcaec72c64916d0b5d57f06739113593e4f9c460d38b409beff853938400', 16),
                    gmp_init('0x12c44c0ee4daa121e6b3ceaa8c944fcf6786ce068c4abbf20c8f8f10b30f1d6bcdc6381018504537faa1d0fb6d935566f47fb6826a6866e22fe250b8e258259bf92', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x24388a421578d61e62e6291c610f7b5de5afadd452abf43a4dfa70b9ade311aa6d99be58c2d0ea21b90a7664c380400fa062f4f54a6fffef9f3878c70adf5ee186', 16),
                    gmp_init('0x1326895085bb792de6382bdbe69ff9d482a5e60328c0190a2ae03a9a1f40e88d5059ce56b9da9f5bdb6f733d1221ec6f5d9ccc1a6bc991f497f188f980ee1bcdaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16c71e0c6f732123b04b87b1a57dbad002574e5bd6406709592390076ae282412ec02b4bc288240ae75e4f3a4a6af4ea679b9c44aa1833dfb7cba3a04f75f8fa47e', 16),
                    gmp_init('0x8d54e8e7e0e17b9ad3dfdd91c4aa972a0dc14623abf31b69151035134c5b941ba74552d43b97712a14bca068cd75b93ff4b061cb88a73f6fdf266b71d5e4ffc2c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe32f92e5ff1b1fdd4c3688fb242d7f2f00dd44418f96c8257e988f9f78a8e51d04f9128ef72c8b9a0a9391bdea39c312eeb51bca884c726bea521cb4e322b7448b', 16),
                    gmp_init('0x8febfb81b4287687c43192e6dd82fef180b16a5bd61ee6d123b753463592a11c1239bc813a9b39a2a8eb3ef7ffce823a853545cf759dfe9dd3ba865459e98c49f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d3c8e0d4a516b0e433518246ea8466de178623276b30ff597d815e361185f1ae03d69da3e9d0fffa4ebe75466811f0bcc5f6b7eaa28835bbaa99e0fa88b404760', 16),
                    gmp_init('0x14bc136b9c92f2ee22ccc7ffb96172789e1cc04bc19c25a36a5d159dd269ac43994727ea9198a92c516878c93290fc7e5b449d062b7bfedf3abf4bc4434d1614aba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4fdc5e912558ceb2d7ccbaa927c03e2cf785a7271ad4638aa2ee0543b9947ba35cdb2138c1556450749c4664b79ad10f4c3f3875ce1a5b46c7d858cbfdcedc377', 16),
                    gmp_init('0x1e5e29384cb2c36ff1585cded05d073cd0d838121e8ca64408d967aed2dcc9842a531267a2690a905c6076d93be6d27c70ccad3f06c9efc0a64982bbe215be2e05c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19c589edc218a4a996881b8f4c4b3c221e6f5c66d47fd1830b9398989ea0b5018ee79aa4677fdf1ecff4ded40b534765998d6a912f769568f160ae257ea870bb0bb', 16),
                    gmp_init('0x143262f1ec387b18608e87450274fe63e7e6c6eb5c01766fab75085e76d0ae84496b7c75d712343faa404fdc393392bb59201be02771a620695154b40966f26663c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f80edea9916a968c87081375f2fe5ee8add06cad7c1dec26a0eb25c772179440e0ac89eeb2cf966ed98438804b3e7242d8885c332bafa887ad1d23efc734512ef', 16),
                    gmp_init('0x168877e17871b1701cba35e06c0b485a6fa89020bb9be584d0e66507b6816451772148056fdddf0b39bafce0d3aacb41a35493b2898b22568ed8db61568a8a00726', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10532d4dfa067275e49244d471a4eee58a73335377b329a995ed0286777ee9404233e1ad9a070544b4a8a66701d724bded85aab37984ea30f41758be5677ed6ead3', 16),
                    gmp_init('0x1a91ad6d24c49ec18e60f1f7a194328f21ca5110c6f5531a41dbef9d961da5bd561d9d7cefcd353231a45c515d48523334151c22e8bba0c7d577ef7dd10f91eeef2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16671bb8ed5bfdc10201ee047152b75b008b96e98a40b2855e1e60d8902c5209a99224606c72c3c1cbf8acfb60c6062d159bd3f385679c31c9ad6a82ad3d28bb908', 16),
                    gmp_init('0x16dde728d20be6c543c8fa4d9d617e4a8e2627fa8aa23483d71b92fe7f4ad4efd57836f763924660ceabcad31ffbb3874aeb3fe6f6844899cd31b30dd9610eff42b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2725972a7f5c0b2773ba7a3e4a0abfc539cef8bcd57529929789ef8a83be7a1716d8468edede8ae79f21f5a40e681d9222c5b975d5d52ac0b80c57c29978c5c030', 16),
                    gmp_init('0x10c0483b730b2909e7d5a9f29bdcf733e5f59656708decc4f59ed9cd166ebb6ea42827aab86022432a2a2e1da7af48eb228a386aa9d42966663de5390634b7f36dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9480e13b626d9e7c90ca2166dd3bd78b3bd3b1510b54092738b36233d5f2359b539cd0fe212e8df2105cba913905c4bbdf88a6addca5922350f498f852a8815d90', 16),
                    gmp_init('0x1bf04b4d8fc52361369018fecb4d696c4f94cb7980e97c87abcbdc19089bcdae71aae735de42e32bd18b1f1193e52fb10f5da5218cf506f51330ba73a6320404151', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45ebb32577e83049e8ebb1c1560e56fdf3883d9546fe12a60f34c31bbdc0998db4a8a04dd65534ebbd3a4d0e1c5d0eeb165a5cd5ab9cdf5c6848293a45e30289e', 16),
                    gmp_init('0x69ee5ec2541433f4db39e15ec672691c7486c7bc3ed5bf25b335ab61f4b7204ff6b68fcb54cb480d7b8ab7608eafdf581fd24a7b90fc543aac8e824e905ca52c27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2e158fbfe9d5fc2c885a3184f37bdeff99ddf701c7df477c5149b815d3e4ab51a10bcea85f1ceeee735087e8accd958af17781107cb7684666e5ce6bd43d18546', 16),
                    gmp_init('0x1859550adfee07d547cd14fdbab7d570b3bb5748fff6e0df697c39437c0c5cffda939ee5876c069053c3ba6ffcc243bfbb7b805679db26a23e7f2670d58545f88ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b02294e841bae073fc7b0e319e40b2f57e99a2c1a77731afde21fa0a6ad071fe536abe39f0437994ea9c0b064cfa81a96f81f1b49dbc86de0003050ab17c08f924', 16),
                    gmp_init('0x69506b543c82899572d8ee9046caa3013823d21b2f7aad1dddb7c8b820c8d1087c810d997ec35ac748c1edcfd0c08f8dbc22f50e642f5873067bce7c5564635b7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1903d51fdc902da2cb9bf10646258bec9c0ac6c2861a7cda7772a4b7c21c6829adf33357401c85f129b2df9eadc55c70e55cc2dd4698707bcbff81678d0e223b20b', 16),
                    gmp_init('0x121ad41b7cef28c73c951c7fabddb14917942be43a5e5a48c800155c02c6e5656c40a8bb69f7b356a59fcc6749df96574ff8f67382363a4fc83589cc19b7b69c39e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6bce46a1a5fb69da00eb63a675442a075d6c95780c18e08fc8d9ee341b455c0d279890f999058a676a55bb30015f36f2e763479501a0b5a07ebf2ffcb76e640a8d', 16),
                    gmp_init('0x8afb644a615456556e662f9fe7b7b7b8c6a972786dc6ec395a125fe61f763a7f6311699804d9df4747989b99214260b2c5e00342446e9433b48c618934f3ed6253', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcd9958d793a46ce66fee1473b00e36e2da4b97934b94a66c20a816ac667898dea6e1952691aab9179398e8a2065a4a5e0874c2a5fa00ddabed29c2ffb0bb44d8', 16),
                    gmp_init('0x16dbf14e1f046c331407474244818d40f49cf9ded31789bc9ed8fcd5b2fd8b8f87ce025b3c8ff6208c0e3e3f13d3c70201987cc55b095457fb6eab9fa64a362872f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee1c4c48fb092d64d418ada73481166c12c127af82b7f9fc83b359c34b977a9b41a9ce2061cb3319d0e1c64158673e221a7b1e2f91dcfc59390aa08334a3a5a2a2', 16),
                    gmp_init('0xd6b24604c5fd47a69d03b8bfef9788bdc1836b7b1780952ccf699bb035c30ccc07c0774cce910661ec0ac4f64075bbdc91efd54478526e1897fed1a8da4c5015c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18ec587777652dc527c4c31016e85251d471cbe5c250e01d57fc9f134d90a4ef58891991d8a1a9911c89c8c65cc625b09722937b845ad58220e35e7af927e198aec', 16),
                    gmp_init('0x1440a33044eda26236278770266ee464c4549590033374ab02bd4b45b2c3042cd431bd49ea0bfc8532df5f84846794cc5c260454705bfabb412a9232336d429c5f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19ceb7d074810077e65799678a9543861af477636d6e7a978c330e8c045b3f69924beb00685b3bf8dd9ee50ba136de9f22eaa1a7b97089e6bfc17c5414720aebb3', 16),
                    gmp_init('0x1e0f9cf5ba414aaf997e4c4cc96f8f6c926f4e2e52f0abcaa6271b53dc3e1aa127cda4bbe8c88265202eb6628684630ee0eb1c02cba35fa4e9f0d20db6dcafef71c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16415bbae8c2d55531d69735a5a97698a60694de81c4adec57aadaa2ff6fcd2f1fc302d5f8fbc8e359c30d30a3c98758f69e98c6e73ffd8bc23f946ab5188098f73', 16),
                    gmp_init('0x1f4a42598aac749c86886bddede74d3efaeebdbf063989dda101a30f94862d2f5713e3adc8cd1495ad280aca75ca9bf887e258bdc0e9ec5ee962398abf08c6b2d9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8500e147ae4ea6a9246b7c8574577d38bc70cbea8110c3411daf0e791e4f5052c3238ef5341ccd70880491c733594e53b7de94d724d4a248ab6af0b935c936a7e5', 16),
                    gmp_init('0x91bef8ccd00839333c5d92dddc50b672ebcbb4637445a0625d698fd276d23677b9eba64255a76e1221a276326d2eb66b983f642966edf47059cab57e2a497b793d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16fc57d1af95d680f19bd11556497d32f2d49543e058bb2a5b6aa92420245a7eda65bbbe4d450a20372b99a43ae99d999b090a38d5c5bcf13cb225420c396139042', 16),
                    gmp_init('0x15d4ee02157e7e1e8ed47490261dfae7d956b15aa2e1cd9033e25767d030839c5318b7bb52adfbf961585526ff5a91987b589c88bef9b9cc39893af05115ff37259', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e92e228d8aeae8310292d19b98919841e990ee123f438e3d994c555df34f610d8c32ef709c66c624bd9294fa3ed5f99ba02f28b538b5195f93fce66781065c3b1c', 16),
                    gmp_init('0x156dede341e67045b89b1bf27ce7f0b478abc182470a5c1b0588462daa4737b4ec83208ad03b5fde8ee9a4fa08aa8da65be60b0ca8338105c3ab4566d09009cf7c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f54cd8526e9f8b6d934d600c7b3db161a1e5fa35ff581b0d7f343c4602c320a0919b1de94b541ad34bf4896fc2340f68d306b08f63f15b8488cc3adc33883bee0', 16),
                    gmp_init('0x6a06f0b4f3565f914e5e7a162ea1cdbb31306db5ce7edad2f1eb04236972e7ad06a7f862c881596a68531ec78678791b132c2c5e7e7497bc174aa6ccd6ceb32ada', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74080d13f5354fdc23212e9948ad2663c3447ecca83496c2cdc3c067f23c3deab84b83b5dc811ff9d499c6a790ad45c838dcfd5dc1261063cf5f16528ba968accd', 16),
                    gmp_init('0x159f907ad9a8614521d7dca34ac0de9e917fd795432b376e1ee65ab3ff9422dbe9913228b5095bdf85fdf48fe7d66a3e28612ee692f0b704ea54e4a2ffaf202bae2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70b1845ee448f182afa2e4076b92025915e33033bb6f47662067a49a30db4a4bb1267e606a6f19334f773be48b463d8fc10b51a27a1b6f4d021bcb1d73c96d566c', 16),
                    gmp_init('0xf336939e9d7f5aef38ee68daf32048a54bdb39f169221f799c9cbbdae94d2a9beb2f47f8379b0121347fda258ac5d9943f753f7f717caff6b8daf44e82d2f77d9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ceb81173106ffdc4b4a09e240431259f623ea15ddeeb9df300016debd78d68d97f67097fb65ae3521c1d3de232c5128db90237370b62fc9daabf61a9ea3b3f8c3', 16),
                    gmp_init('0x1276ea161f8e2a15fa9a0842190e01260ee9644f9e9f1c8c3f9b927e00a2b6adb42636675f6a260c3b386c9232cc8344819d695948645d624333c709776a20611b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c387121a0b815b7af0bae7d1fa163406c3ef3b94359ed9f530ec3771fba83ee44ae9dd13e6535495f18a4e99f487df3dc1ca1912da211fa6d84450f4a2d3a1514', 16),
                    gmp_init('0xaee782930581026dd0602169e07ef8dbc901dbf41d381933f7ae4e927ee939bf4fc03803d715d406f8cc653cca28c6975321680d0e3d3b53e62dec1270f94fd988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa64518316761ae300815beecde16558d91c294314c492bcbb122c05e5f109b2ce03666479347494f15544e229fcd8ef672fc3c0b55821f76a0ccfc7051875e2133', 16),
                    gmp_init('0x9db2e81e3681ffe1ea789cb0a1eb01452c8b1df932ca71dcf8186fcc2be5cd06270b1e80a966f723b40fcb9de4abffeb4c941f0224510b008680bc2b2c26c28852', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13cccb719e8f15d8be13eb15aeffb6f9b103424ad0182515193113aec98c96eb133ba1fe985d38f83d00207d510c99465940b59fa1f80c426ad5ec6427b05487074', 16),
                    gmp_init('0x1b353e736a1b587b3d690c2b8cebca5ca409f7941a03f36ae2922daa81af4b33c744fbc5476bddedc4d1ea1c74faf652b25b5ca3508f85eb1d963f898834c67518d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x167aaa19d08312e131f1708b24d5a391a777d9c69ebf3247ab46574f1cb011dd592b8f1515665c54db394d3014ca2b2d411f696af86207181bb8645efeb9545bb61', 16),
                    gmp_init('0x10d916fbbde1f081ddd2600229333f7aae77bfe65265aa7914ec461656eced1f38a0256b3c665bb59881c0b0afcaaadd5f2186c9c26c118b521d3f4510ebaea62d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d88d8fda4069b36b00256ccaf0063f45e5d486038b36dcc8faa17b13e10bf71ce26eb7b7dbec7c688a4b4f0e3e5f7673f6a8048beb88f81b66df7ccce9088c2ce', 16),
                    gmp_init('0xc057f523b2a3730b8d3034c4ffbd1013f58ae4a99b6b87921f9b3be42eb76bb256ccc83c7dd247ea27bf35a4094092efa9d8765fc9b211932c2dd059fbc42a3a8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x683644961904677879c23e3f1a9732d4dd831a5956a215b7332bf7eed4dd75fed1f16e3e884df1182db4539c3cd4965ae523cfcf76af64efbcb64361a93f7cae04', 16),
                    gmp_init('0x1310144c87cf2b278b17e4726763df969744265da4a5cbeb7613b584a11ce7f93b3490b5218016a6aeab1b388e6fe1396282c3d1baabcd16d614675e68e07af31c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14485f2ea71b634a837012b098c6eadbced144c2f6eb7c261acb2a01e7dceef6c2053ffac7069acda2b3d019bdc180bc759b06f3c09f41a1d41c470f96f4ac5ef8f', 16),
                    gmp_init('0xbd5299c8125ca3a809293b0207f678af53ea8cf87c4bbf4d911963d2ae3024ee004e11faa2e321a7a46306369bd783103c052b772a944ae8c06d50b0af6a8fa909', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d3eb47aaeefce5f35d1ca23eca80a04ef2db8774ef799b23df43cfaab1bbf688cd44b9ca9efb2f20d74557874ebd8fd8a4e4f3facf59fd9e208fbce3f4f5b0421', 16),
                    gmp_init('0x1faa933f30a9e4d4a5cc53ae7f7b94eeb5ffea4176f5ffb3aae6103b1cb7b348c2d6fb0991cd714aa064ac5195eb4f9c43e9c19c7582c654e43165ac19ee9370a9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dae0a5fe89bb969b9596b4bdb5770f79de46fb88a2584a9d4b31d78b7e7935f7adc91162c4f878c4063e8abdf0c4100340edbe79c46be7455961aede70d593359', 16),
                    gmp_init('0x39dc63bc6279f274513866c6eb7e5d2a0c1460f538bc95244d1d17d867594b5fc29c3a76a8304a8a8813472c59bad376f933a36bd34cd021fae8e840f9ee19802b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e06a12ae8db484c49d6fb91096fb86656b331bf1820c1b238c719e3bdaa124dbc2c25dc24e31c1949ae7a2ea2d3c055e41d32a993258144cdd4e75aeb08523aab6', 16),
                    gmp_init('0x3ab886ab7d2f2807177a0e87a0cceda981f159ea8b7b898adeba4c7da4473972a270b21c8a3e8d27749001ace6d49bc96b6a2b1f0d8e98d66e4e4b8553e97e59af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3887fe86540a341bccb8e0385633546212609c6647142d4979af16a1af89ed1bf117ec8b43ac7211e84bec5128d59363359979cd32c1dfa97c68c02728ab9a39e', 16),
                    gmp_init('0x1f338e71f4837eead8e5bfd0da0291a94862fec80849ee3d8ceb835095d5c585185b6578ebca1b280ca2f744b76192c9328d4b003f71131bfa53f3f3789f349587e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16607803a0009a4a4e8732b68901e4e82d2161692570d4105eb60c1358bc8389049a80e133ac85b93b3518aa0145dcef21959771953b2b23cb5c265e6c0bf676a07', 16),
                    gmp_init('0x10f96a7632680a45026a49150d06c296df9b22cecd54c6898c8e7819dcb353e66439a9f50e29ad45d801d4e994f731882161be89aee50d2e17c7dcf13716c29c896', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11cbd2a0fdfba32490b0f6db6309147666f48b4340f8d25fd5e72c5139e879c58ef2681b7f506e27ecea784ff0c8eaab831600ca15d5b20e3b3e281e3f3a80d888f', 16),
                    gmp_init('0x14ac3685d4b0529faf1bb49ec321bf0e9cd7ede71ac82f651d126902caba822d57cf83e8febee9c9ce25398d7125482836ad03afa763c6399d0c8a7331b4c4e1a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d4f2cddd43b9b8eccf0ec77121930345dbca9f001e9a2053adea19aefea3cf3d1c8ddbb1bbb639a6431c58c6f602b6077bc0632201b0c039adda29d3be583a2c5', 16),
                    gmp_init('0x14adc7e94d10080ee452064a36707a223ffd3629e5fce3b1dac0b489a405e8ddd2a1b9301bcb8efb6a9252365a4ebb5f97512d75a839dc39602eb7851a8abf98eaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd51b45a27f76365a16d7f71b810c1aa638ba70efb5683194109b534b11a9309198f790c1c7b605eb7ce529aa0c7fb9c73b394ab620ee84d3ced40081094cf43305', 16),
                    gmp_init('0xa567cea449f2b6d23a8467bc4e70d42a58355ee50733cd0d4e599148b8440fc5cf94fccc895bf8c65ae277619231479b5bcda952c38ebe551b7d3cc8f088129b90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137256e0a57c4dd8a04295fd92013d44599a6017fc16c4fdcfb9cc7a2388421d012431a4bbedd53f9ec509a15e5efc3d8af3e3c8b18d82f35c402375c08d590e3fc', 16),
                    gmp_init('0x16d19298b0c053fbbd734b7631552bf239e0a36584ad85f0e59a01102bfe215454db714c901eba522eca81ef589d3fca56fa5f97f3aad742607b80abbe42ea9a8c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2db25473326ef380fc5694ab176bf4caf235ddbb368e238e67ecd7b598795535631cefba22c01a451b8312a2785475710c3ce5fa4535110d600842e1353711f6ec', 16),
                    gmp_init('0x6df55a42910dc11d099a417cc3496889629848dcf4a55b1d77b6de6f5752ca18a305f64d14d3f13b0c02cdd68b93d0ec384210fc3aa5c75331ed1861c5246bebb2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13fa0341305a762bb9ee3894e41ba76b7e8b0470e7dd75440d50b1cc320dcaf88a7766bde384ce7241c223b4f87ab10e109dd3f4d9b516e440de0828a5b448996e2', 16),
                    gmp_init('0x1817376078a557a8dc04ee1959a78fa90690a3280df63191881c0642e4c3b5f480e41f1964326a263b5c14bb14802f033686e4e31e050d8999b4f5581d30eadf722', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5baf959dbc325cc56043001c39ae92020c710492699cda00a59fac5c2d7c55f70d224bf5d6538cf6528638635cff1adc7499866e3902e03cd5c6dcfe8fcb68ca5', 16),
                    gmp_init('0x8e78d48ea77964ab3912eac3e98df54daf49a16a19ac7da2363e2230dab14e1019db1adc9a6e8e47a4e4a288833647325c0885dbb386d6955476aec243e69664a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195f6019194c959f74a5bff5f529f7ddfa782363b8efc39257a946c3d6c4a66e7140ce5155cadbf3b017779fd8d1f481a109ad631ce173c0506cb52bfa5386c4e0c', 16),
                    gmp_init('0x6b2c7c0291fd3f6160a30663031cc82fc070e8a3c89295bfad4527c1a564d51f793a742bce668bb4b6aa1ae913eed6d2fe20b70812ba5aba4797e049ccd1a7e5e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4da17fb8fc59e27db661f99dd580b782b5b80863e54328d05fd2582c31bbc94809035b7ab3f93c9b5cb6cb2db4fa58cacf6660a1e5175cc2ddeb4b23274247e72e', 16),
                    gmp_init('0x11f5e8a4031babc6bd80e13905295e6d8c806298f05eb3e3c84ce83ae394efecb1a1ee8b021a417f7de590b0c459295119b586b3ce9210c0d884bdd2a99e6b71bdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1171ce7c2530612e16582f47118d01df2a13f3b84a1a482e07e994ac9a2d4918f31ad627841b15d1ecd3cfdb7175df347a93199f6e349a08f81b9b6ebf9b1351aab', 16),
                    gmp_init('0x1de202250a1878e03c734844c10af79cf0c2f5d78d1f5a7e9d271238a8d5b80bab09f79550a43833acaf759acc56224b03d0ed36337a5f6313ba4d357d1b1a67846', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15e7d893e3ac6a0096a5b89adb53ccefa36936d24f5b4ae360556d9b66fdd4a1a39ec5f6683810f6a28a7856481269323708c5e7ae36cb4b052aa91d38ba207739f', 16),
                    gmp_init('0x10bc5c6e0e756a505948e77c13ceeb9ef932523d52bc45e608db0197722f05ac1b178d6b56821503e699dfafbca881d1c5c66db3e132c1113b798cecb6d99db465c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda80ee8f87b19617b0f9112c8171d23283342593894a6a7112d17c1313336df7b82c7656f08ce72dfe9074d5d14ebbd57e920b807525ecd014f7ed6ffdf50a3d85', 16),
                    gmp_init('0x1da78da06e791f15069f17dce35c84ed8e742f10b4520d0847326fbc96e1b3d49913282a3de3b874068e2b16d4e55dd2c1fe0352d7ac03b68a7d411f8b2e36790d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x164d9adc282e2cf92b2b38f08a5f2f9b64cdcb7602d980b6daa08d6d9b2a5e559f216d0f9b110b85d29b1bca839d987e3307ef27b0f95eb72eb709ac1575b6e48ae', 16),
                    gmp_init('0x79c383bf47d8d3310c2ad51f46077f8bbbb7563c4386b730691374f63a3509d23a4269ee3929c119f00b3991794c8babe29e4ccf8488821c6ccc6a51913137f926', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd324a3fef10b0342d8e735dc01390efe5df7f87711c0d2c76bebb1d976d62aaf2c7aaee27d4577568eb0cb5ba84bc3f73d79181d83d2855d97bfeb9af12391b95', 16),
                    gmp_init('0x6f819fd53796d5a95f68d2f7d4ce0e4a1070507e45a43bfa71f9fe9c995603998db1f0116afed0a21e55f70e37666b03e42af56abee6c99cfb0f074d4be5ef45e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196dea6279ec3fc6e18e86bc686b5ad87266ee24bea512b62bec505d03fec354e60c4c666e9b704f1f624d4ba609b81ccc696c05bad1c7b6ae2f2f55e6187055f7c', 16),
                    gmp_init('0x687158dfe5d247b6297deaf1b1d3730d354856eb7e41d7455ba42fa640487d6afb0341567f73099e69f067c8c665362eff4cdf258aa481affc2bb0ed8b4f92584b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddff134805e912c300603908be648bd6352f1ee8e1ffc71daae3d6e195ad8e11202d6b8ac86e8dc32ebe07424b0e23ffa6a48c421e9dc0f25323095fdf14c98670', 16),
                    gmp_init('0x1e17dab07bfd1faab39d588d588c945f2d0d907ad9a51e6b2b3f3d650a11d946eb45c07dc01c51cb0c1c1114010ef2508a2c809f5ed8f09f42a0ffcc425d4322e89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18d9a77021a72eb97a3b922928b77e51a0498204e95aae7650dcef252a068c1423c40512dd7c6dbbcda0a01b08dfe9368cacdde285818e4e95e29d8faf43544cc95', 16),
                    gmp_init('0x50b78b168cd6d2a061d73224f17c87855f0f5b59a79aa0e1a1c098d30234faf6eaa214b4098765ee4842df0e2e73c0ee756a17e12a870ba81b5647c6f296c7c29c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a87343da72b35e9e9d42513e2c62336ada2598bc00d0f2cc628830cb3e752ac9cde23be64f266e78a8719def2c4d22d2de94e833382d648a40d185cfc3f5823bca', 16),
                    gmp_init('0x493894f51466eaf1aaf2b064f88cce580a3a150184d43248faf6078b4c9cf8ff02744779e0dea5393a03f06fa6a850f355d7e2949e94a2e805a38d5d2219b56641', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb03c9d920f8426c21549e8ae5ea164044d8de0d8520171bacd743f813b822b97dd964ac2001ae58ecb4698e9a92ca76e87db5b97d383c724e095c54694caddfa0', 16),
                    gmp_init('0xa5342fd8b9681d37927c9d0680ecc8bf66fef0daf5adb707c4624910c94bcba8199a7afb80bf979b729a5eae5c84e132d7d3c037943abe9f98794be56d907e69ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1863e1425909cc794dd9810075e19d48e5c046c5c214eff5930c345965d32d1ee47520583ea11c229e7443c6bbe79dce016d16475ce1384a82d8cdf5496ea2d6f47', 16),
                    gmp_init('0xb0e49bc8d8aec9cb630cab1eb283a9939dcfb6b336091507fc28297856237ba9602e7c1bf26fa2a909bc16fd945516fbdf87a8c5ed0d5a2f06254d003679cf471e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xff5e5ac69cae9ddc65d5b53cee8692b1b2becceafa13dde72fe97818b9dbfeb5459b5aa12f823d2fc5efcceda56fc9caa7ff2643e780ed8a2cdb8a92c817221d9', 16),
                    gmp_init('0x107e16cfc1a0da1a29d87689d46c9eba60ec1fb14d21c21be14651a68382af83dfbb8e1b22a517030b18858ba5de2924e75d97eb6f262a91d4d6ee75741c692d9cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc0455caedb20ffd81a5fa6c7b232c66d7ef5d8e0d6e85650b2369781715e87bc170d30313d2c0449b005e27e145743c1f7cbd01a0b896f6c4021a24de3c91b63', 16),
                    gmp_init('0x2c2db39c5e6c7ff60d5be9a205e6f56badc0b03aead6a327e1312134317987ad099b20f4c777aef48d8d5f90958fa692fdbf769bb0294df5b33acf9bd305c7c488', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105793d2c738a1558c9823c8fdaca58401719de97155d8724a59eb397f26dc425e28026887b9b5ba7c184d1c3d1b354803225e0a7cec01ad8cc9a5e2d7b0a899d2', 16),
                    gmp_init('0x10238b9e8b7f829e95bcd432917fd9ba4e87d24ee7a5b68a23bf5ebddc4d21bcb969f78bc5492d80167879fadc67d3336de087a1b8f8b51e15fd14908b22ed1274f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe58272b7c845bc78f6979a4f21ec4cd5120682a7b7b0f48eccc3fc6d371578d7dee53f7eff19988a8811847ea7350889a2df4c01c7328b43c06e672911fbe4b1a', 16),
                    gmp_init('0x1b8817b26a91eedcab0b915c3290866381b63ac380c6c4c976b20cef3ff972dea837c4df170f4272055b99b83ef9262e87a01333eff9ec8ae5ceec799c35e8ef48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16266cddf305706086bd0e1f1d9075946fcaa0b0df4eca2b6d59cc390954f840bd3d626c5c9e51e7e40be69c42f45c99f94347d0f519eb33d69489e62bfff25c5d0', 16),
                    gmp_init('0x880fb444f79e8f7fa649b0492307659ad4a7bcf346088822bc6cde727031d0495e5428476b769d7942485913a5295b6f9a3a5e2bb207208009b2caa63064fa85c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b865b6cb3ca70200146f76ea4cc81f68708206f72b870dda8feddc9766632ab56f4358cefb881888b1c26df9860dae8cc0bc9cd595e70d5ca7ace3143a092069a', 16),
                    gmp_init('0x33156e3c6f36d0f01946427f9c870504a2386ed5ce56c4eb40b019195fadf9025146c8c36077f8ed84507be25af7b18ac988beb2371d625dcfc064a2e3b099af17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb03dbcd4f2b6ef478c2643caab2c56b27599ffa8b4eb3be4b33dfc3602875eadecced04ea898ef60e52a67b042e376bcc79a3f515e281b6010202ad82e2f39703c', 16),
                    gmp_init('0x19629aa94d6371c9cf55550ca7a42b68f992b37ca082a606f501a11b5d8deccb196b918c9e9d39b844a7c1f3cd009f66e0c41de8dcdde6ec1c19fae73769a85aacd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf08cc598e079399e78742d427886e0d59c5e243dd82d474a261d105f4819d4d787ef09cfc6a24db5d4d9a6db110b9b5a05c58e86403bbbe5506e0332e000535ea', 16),
                    gmp_init('0x19208fe79e9b09427e0719bb29728289fe04282184ed0d37ad7be13602fab4c74c082c78c0d7c4073d22f7f11d8d49cf79f74857a7fca9dbfddb1af75d1c8e53592', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29b493c269f66e84e6d7e6b1c5618f41cc5811bb5735127b0e0c02ba4cf085f10612fbceae809b4fbc318412b83fb999f95f00f30a1e8564a8bfe87ee49b6375d7', 16),
                    gmp_init('0x17ddd98953061989306381cf34a395f854d05c0993643f3a48192244cd25c3bbb45e15e32b3df942cbf58d3bc79b05bf01cf7848b812a487c215318648ef3ba9aa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191e6398407a8fb758c700571f6d431385164ea7336eaf83f1b86d22c634c902f9e7156b33510b368ed133710955d6afc1ebec9a530e84da535fb9970015eaa1129', 16),
                    gmp_init('0x17ccf9265ea638d1620b14eceddf56efccf295b4ece65a3432837a8337cba7fc09780c4897508a9f27c86969ed559aa896fa0ad23ff6c5d7b10004bcb3ad7673444', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35aab1f507aab7342ad9f8d75738cd390e993cbdbbbbf13f6012dd16dad61d8922be08b1fb1d94056748e92cca2c77b64a440bffdbed2d717356213ebee86173cb', 16),
                    gmp_init('0x19d4ba603484d515d97b54060a13d66935b5784cc61b3826f9e1df13ca0591be9fe886db824d7919acd20583b4423819fcb2f9e1aca7f62c2032cca1f8207007518', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19f9d603b978585859a3cf84d469451d2703a6d0137c897a92dce8f943d9be3a6157b6fb913191344249f08c886ff68e9c18e9f8c089ac1f6691a6ba108d64773a', 16),
                    gmp_init('0x1a56b948711fa3eaa159e736612d8b9fcd931d33abeb624663de7788f4a97f05123c32b5aa6f8bd17f1c4b2ffb73e53e02b6595951edf2194119b651ee0bbe619d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x127aa7b9f81834956df192d0206fe73d1b80bbeac6ade2ed8c8f557c82bf3fadf0df3c7329ee8cadd3e956256f5bfc97da387ce476d63116228c54b9f04f1a4f8bc', 16),
                    gmp_init('0x1619595feaed8c05cdfc571823948e0a5482ce8cc418e0b04120dc41b95914d3f585bf1d8f8e089985aebc3cf6d5e0657629a8a380fa2ccb9340fbd989f36c5bbfa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fcf67088b2d55fb929681674885d4493f4af237b992b8e681b98edf137b9eaf4da76746da7281653d9beac14648c8914fe2407c9a57ea64737f209595588ba3f7', 16),
                    gmp_init('0x1cf9f62fef62b897266574c346fb4a775a30fc173dcd28e10d439f0e602bedf1036c384a2e9e7ffadd5d9395c418dff283a62bf8d1b54cbddc2fc9967792f89cd08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a4ad112eb47a35998789356f480dc112175b4f5ac48f7835c380a08e0379f2535871531a334d41daef9b004a8dd7588dbed7b05d635fd0846c0d55e4f50aebe81', 16),
                    gmp_init('0x13df9106a167daa28a8b59758dce6f6d05914e8e7522a7530e9edcaa64fa6d23947aabc0c37774648bc2a74bb2522d8ac6b47cd1a1dc63a9c56ce9a32bee6a57ebb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbe2f45d06a504a9d0b51bcc93c1dce0d78aed73637e95d3c7fb71b17085b6e3d219067028e8d868aaddde7d941a25d4934d11432c1459162d8163a9e62eec6e312', 16),
                    gmp_init('0xc9e66e7c67b7f2d8f53b07af1c671bd673adcaab29aadb5873219d64f948c8f0255b2669cb79d5f4cefbdc1bba7a7631ad91ac6eedf2a48388ec12ea4b300b2478', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ed24052c851da8c99eba8f6007e38ea963cdeb74fb288736a3faf18590269bf70b26d17d4349aca893c27538756217f5f0b130b09bf196674f03e26842bc15ca5', 16),
                    gmp_init('0x10a1900f36ceeaf6fb3e62f5305e3eb09a45d8403c8002cf3c2d8fd426937962ce71abd17b6cddc78ec065a27f009931317a325b5cbd0a7f7c7a5582bacb2f51cdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65b618a5071fc0f7b705ba3e754c9f2c714ae66c3a14f1c33b4946dbabdd42eb475c77d10dbcfd641f7cefec6e8724475b0b59d01447539e92d142bfa992701a9a', 16),
                    gmp_init('0x1ff9d3af9248053aa79a474dfbe8b67b2240f40f077f89626ff46abf80d5b672e86b91e66f71a17810a30e106eb9ad816b6a29e26195a337e5edd94ee057c169a16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x299fc24bf809aeead97e3989f851491c479b2d422f5faf9c7c9712bb0b72adcd0a65046369a36bd06df991086e1ed73cd0263289988674686ecfdc285df79421d8', 16),
                    gmp_init('0x1116ee634377baadfbef2b7a1ab692baae30dd72d15c233db59bbcf8703abd0eb6f752c5fa691d35c5f6443587557b4cb9aed56c569ea40417d8584ee840370acb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf296ad6776d045bc36771750d919648cce253f8c461331557e78549b01d30f07e6a82aab40ff39914c7df8d2b58b42ddbbe2458feafd0bec6997defe3d7938d98e', 16),
                    gmp_init('0x18abb02bd59a4b310f9b2d5c68461cc7be72595a90f4d006edd7c51d84adfd27d4a3cf83551d23cd36a913eae4b9936bab03e9c4cb72e3086de4a2ee334e08b83f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1908d9ea75c97d29ca99eaa88c266a118fd0f6bedac675580614a39e66655f07cb4760b066000a48205ff58c6a1aa4fd5e2713a7f37f08f035ccaa727068efb0157', 16),
                    gmp_init('0x1cd4baf77e986eede9ba5373212432644485d983c0e298823db1b91555424de5ac2414f4c0ee8d688ca514fdeca4e559f9a105120ce68f17d9150a4bc7abc6094f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10641436000ef499bba2fe12e92fb20857b95dab974ff78dee6559f3fb42838480744844eb4dc66a1c65c31add7777a302f351356ca7dab31da47212cd83110ef21', 16),
                    gmp_init('0x171252fb6386a926fe5e7742741461fc9a361ab6eb06e36452f5be278cfca079f546246da5476676d2f3258db7411cf41192c96f308dc819d595e0e5f369df7b969', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78f9e4bd53d7be096f50b7210edd7d9fc69e0c42f59c0298efb9f7420e6145f8d15926857c28bfe7b116e053f22960ceee9edee68238f054f970c5acdc38693d3a', 16),
                    gmp_init('0x19174e76676929a8748a36d664eb2aeb4b1c8811438a2e12d0a00d6ad369e4c2a5b5f927d79eae0f53e4caeba30a671d9919e8f777d56aa75db428c2455ed19fc57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16413a0e69155bbc4fdf229e1d98ea3cc17b372ffc80afe7fc2e52f1845d29f78455852ecd3e06d72a88fa8ed40c0edb213f7c42274af7cdbc33e7f4206369bfe8b', 16),
                    gmp_init('0x18a48ba264982a536309c4a4cb0b5db0c4d7b68a1c0ba79cf7d06669f01c9e244b225fb13c97a2313df5259aeef50dff2f71c2011411bd0d8686815798f090f7e0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2045a00c1de9e3b5a60190a36b6ff80bc6a7d5722ff6e235dc9877e6750d36fad35269b5863feacc785339e19f1c75537a038a7785d8c04f3c5cd1733f942e64c8', 16),
                    gmp_init('0x9b1e0ad999fe34371243a74ef8295d3f089adf2c0e30ec0a261d9b2e1249bde0ebc853b5367b3ea0ea09def006ab43701a1633f7397d9064ec2dd303f0d1c960e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x143de5986c143e6eeaf34db307bc89a5cc8c319564ab906e7b47a93b7e86eff41167de82d802647ce6a7d9186d993ab23ac9365f99d547752730c0b5a850717e973', 16),
                    gmp_init('0xfc718a5671f92bc101a24a8c3fb3a993709a10897becbad76fd2f4b36c6c54ea71d231d637244efb9114b1f00f757aa1140eab815d298346da0629ec0a101e9d25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x578331bbd082b87f9ee9040eda832c62911402eb410a6d4f21b740c99fdd8285c285eb6e5e4cb47357840261db84c7b28d88ee0f5a4c35f2f7c02755ba642cc528', 16),
                    gmp_init('0x1bd427d670a8bb525ac509eb6119bc17c73cc5e7b97274ec5c947cf9e2001a40f67210b43278772dec91b91cc248c9ed077ef97661378e8d295e6199ef9ccee98db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe93f45e4da04aab5090c3b58bcc9846129c75913f5db1c2c346f1baf76b3bfaeeb241a037185b015d23b788b07071052067949f29c0d2afe0942341de665dc789d', 16),
                    gmp_init('0xe97413ec0a5e307c4947a595838a3d3846cbb75e264d11df3209c67e93f3a41a0a616513da21301cec5baa319092d60d465964e109f019ab2cc93fe1ffa98d5406', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x167ec7f3bd46e0bafae2f4ffa77a703199f1c3f372cacb5a15dac862c5141645600b5f5c969aa56363e68f0c2a43444f59fcf0d66b8a241ac9523688c14909ff69f', 16),
                    gmp_init('0x4cb60fc14c4ebf66a200ead18839a681713cd01a0fb7fcabe5b9dc3d219a139b2597f2c498391f26465d255797376ebf23f26fcf75f328f7f3791eaa9aebc5522e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x540f7ec492403e8242dafab1014dee24e19605d42c0560d2b1c2941cf8ce1a2949473c09bad8cb9eb75fd84ec130328982b9166fe7b50fe6e5dac5583b18f65bab', 16),
                    gmp_init('0x16f7b88fa7c5d387f2cd3301cdd70376164029c48dbeb80663a54e3f5a9973b383148827e5726fb0c659013dded8755a950e40be8a63e88a9389a718b2c3dae982', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc7baa194aa9df4da5e72327899f2c3d2dc53b87ca249f6f05ad62a44643bfe7e51dff7278c0411dc5d4593c950cb571fcaaed3f999685fa5ba358eb53667db4570', 16),
                    gmp_init('0x1798edf8c5d1e42a1bac85090f6f6c102aff91e1ab7872e35c97955296319d71e5dc4a4eee0c08bb2db3cd0ae954b3f3fd10d8ebee30754f2fd3e73accfb50a3e06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd16e26a9ddd95c07b5023bbec06fa7b8ff80e28024e6be199717a939e9cec9497a8467561edf3ff42ed234e38700002951c5624ec829a3c2256923e55f33c5a4a', 16),
                    gmp_init('0x12a3ee5834c8a327765deb47aa2b2799c7e58992a09807610b889cc11f991956d4065376516f71b1fdd6d9c6df416f7b3ab0377260fd40b6b4788091d673c3485e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17bb928a6e78013dc5936fa0077789af5346ad2be2371d9d306ddbe9d9959fb65d31121a2d8eaf59ef3421a23843b79f36097c7f1d394b48cbc421b840e80905a7a', 16),
                    gmp_init('0x18b749bfc4c80e2c3c59df2157e06ba6ad8cd7c9aa43d2e2a0c401d32f2d29d70711b242f854133277db74dd46112a2023b8884dd394cf38545b4c26798a38d78e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa975e8bf950929dece6f975e2189bc52739d3ebbeb2f9fb277b12ca29a0ad5df2d7a3d74d843663f25cab6a69f6c90206182ea22f5d0108b23ccf8b57aeffb980a', 16),
                    gmp_init('0x1b33c5fd6d2a9baa451b66deb9a73427ac328efb2896e283271ded3378b085a67b718b7131cff1fcfe236651bb7e31f4ffd9ce3ae66109961df14493740e1af64e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1d1fd083752cd0833c49fc5c5044ed33f2108032a327299a85ecb52d9e45fefb76e8ae542a3b0e6d001f8ba60af47e2b41d80b5e87b95536cec1f6a5762efd94d', 16),
                    gmp_init('0x955e0d8e49fb6eb3663e1f497457f6d08663f2c6e466144036172beb76df90d5f42fd37492a73196cf812626816ff056e1ad3f0fa813bb828b3f6ae9b6cdad11ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a5a1b943aa68b00a0210bff82030fff11bbbd718f120fa4d4a2fdea4f5eb455b22ce41dc740a74fc72e358cf506e8a15d966e843cceebb0a9611f4a795e2d7653', 16),
                    gmp_init('0xf55318c6d7bdeb2001e41f8328ac1dae25f8c8bb32bf93fd352afcbe04caaf314be7e85cc436f89aed3f72143e74ff32243b08220469f52c59eb814a67ff037be3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a2bfcc26c4002d915d4d8685740c3a9893d0860a21051bd601ff6ece7699eda49dbac25445ac2e1585d88d99b5df8e753e041da504e659dd2630190bb95989889', 16),
                    gmp_init('0x1fea8a2e1f9e6f066ba7c0f62fb288c113346b049c177fa74c6c805d7411dedf0256dbc95ad81560a01c699be8765dc40e854963f2fe3753d320c43772c2f4acc7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x169c78e5748e7b0a665ec5bad8abf394947b079853f76a132b64418fbfd8623db109293167b814c4fc842ba739e523fc1e57fa4289beab74b64ce24d42c1b72e95c', 16),
                    gmp_init('0xc9e36da7b123c894d8ce30bcdd7da13b86350815c93a7f6d6780280ec9d57795e82c4b7b77a48fd001c6b7effc60bc3cfc421ecdc9572f36716038ad95d7eba9ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13241fc6b32026eaac27cf6e8f29b1d9704dd6c193bdf5682b470d2aeeb235bf7e93e026b0ed4c954f034a79931a04b75a5513faf09396e75e931105c7864ea99c5', 16),
                    gmp_init('0x8c56d48d0616da21b0cd55d261bf88e98428c3944b4a751fe8c4f0d0792a507c1f7d2a5b46b27e50ab8c6f8bcb74809cc3db06523a393fc9e6d09919ef5413aa96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5efc8ae58b5ea0263a3319662497538059f0715fbed02caf9741f4bb986c3593298d12557569c43762c5c77927689db327b24bbea98e5118a92cf7fa7761bfa954', 16),
                    gmp_init('0x1ded021d8673e41c6a7761c08b6a446a8435398149c006b213a72555b2c636e1cbbed1a35049589c41f25f9be9ac36a41e459c5721ee23ba9f7245131ce020630f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2aa7fa912d84dd47306f60808b0b60c7961074ee6888ee51911c7d943eb586d23bd8158f88653b68e8bb3aa86000986563e73699d31e25f25ef8d97141473e6d47', 16),
                    gmp_init('0x18413fe7f04213d591efe1910a2e1233793968892ece5a8b409b6fd9b30087717676febda2d555ff37d9145309822db1367902c7b946abbb0e2589bccf26b6fe852', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8eed771157ddb633ff405c35c2928e5cf919d9af358a4ccbb06eeb63913d92e7f8e89caa890e9dca747d6653749901f06435d9e63a3fa2a87059975b4fdfc4e7dd', 16),
                    gmp_init('0x18ef1bc43165412b23ed1a20e9ea3814586af3f098398c7c140fb2f50d0fbf16aa63607decab94c54fc27a023b6e72992c3479ab5746efb4e616ad1dcbc685b9a90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e3f19a069d27172ca703fec4e2ed0dc5f574f1ca6bb762bdf4803ee28d95e743a340074458c103e1e90ef0bb734146de22fb2a1b74cd0215da047b2e89a705668', 16),
                    gmp_init('0x165fd008507e28a3a07041ab2e7d111b4d34c8c791afd1076966258447d07523eb7b3fadb9619d14499c065ba2bf26384b8a32f84ac517a8afb3dd8f275c44bcf81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1876581ec138cefa86151ecf5362c3519fc106c5c5d3cedff218a747ddaf3ee68bedf61ce6939ea5515ee4fbe0aa4a1a1238c2e5ff75d7aa83475d00875fbdd51ca', 16),
                    gmp_init('0x1bd962fa034cc395512265c2724173af27c12e03a970fb08c2a20e1dcc8d8fa03337a39f0ab91d488ac5aff8cdd339f6f894dc8fbe96bdd6803a8668f9d0eecd8dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe56a29f216df8f77c96516e711b064d2c4df6353c23982757ab77391b0c6e466a65959dbcadf690b8cea5d81e7e4c20234e0dcef924846cfa55fa1aa9d9283f38a', 16),
                    gmp_init('0x1dcc01564c169f2a2c697df3c8932540ad94784c2ed93afc24b6ce115f70f27262faaef9aa431732b87f18db82a493dbb22dc2a2e1d49291bcfb5fd98187a2702b1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5d86173b6de3a397222481449d9857d796543b50170b716d5b6656fbab04183b30ad0c7d092e05d05d7d54dd653f9fbd6f957d2ca6eddea02092401ab5853572e7', 16),
                    gmp_init('0x4ce75991c7d0a0caf926eda9a621ba6bf52f552046a881056f59f21032cd0ea152af63ee57d4f7a44a63a9936eadbf816f168ef9d9356635927130d0cae71e511d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14e4e9f84b268417d62b98af5013f28555ef40cecce1305bd78c9492ed2f916fb11ea5aa6e7ea384db0dfb8ac078cb4fc2d160214bb5a919213ed90e62b5e3ced2b', 16),
                    gmp_init('0x1ca0e5ff515a92113ec64c89ead87b02aec75620ea82b314076640506295ad002210a67cdce9b6e6a44b02c1705198a2d5015c9429ce745ba60be791feaac7df2e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a54d483b824bb9d117f01a08492ec7e73a4c297531bdd31703c730457e398bf19e2bc1326d2f2894e785545cadd97b88a00e1ab1441bf683552a60da401ecea43', 16),
                    gmp_init('0x42f9250653cf5b31e6ab6c5fdd5430bf2ec01253b8176cce73799b97b28f47fc1e1853dbccddbbc9b68b7de1ba5bcd72ccbcecc285125ec53aedc13dd6beea4dd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5745e363f236c6c42f5a9c331f6b179bf4f2e969281144142b3195f7f358f1fa26a8741ca0af8116b432cfef4101e95528422583136ec01830c071157213cc2875', 16),
                    gmp_init('0x4e316f580f2daa3259a89e274a9b4464ee103b7ad681717f92dfa21ea65aee8e9e58f5c76e8e151736eae2b2c42904630ca522f7d53af16430be2e55f12c04c8ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x842c06080d2471f05708f4630f01cac26573b1113cbbe686e03ae797b580db03303ed58b4332a63515a23a4c71da2db001bbe77a6933d651857bd03efeada6fde2', 16),
                    gmp_init('0xb8bed68ede0bc11412efb21a914b5355179c7551974ffa1d03057d4fd9b8093f350b7b82dce923374601fa38e5255b8eac67e84670056ff098575bfd8cd72ecd49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9441cb5c79500e486e6c842667e87737ae7f67ac05bc5362eb98b75b428a57165ad513642f73dbb0e86b981c015d22c6bcdb1e152e0f7f823de9d3c54d19537df', 16),
                    gmp_init('0xb0f70100c400b560d81c3d56a76dc155f6950ab55fac47eea177e4ddc0b11b3d7a1b8b92c6f3d6891f12ef1f675cc3d689ff234d09fcfa8df40318e774a90102c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a4a64f0fc3277134c4a7b56443513e8efd472424c272b0ecc50dea9bbd2115d1651b2c138dda81c06d2cdf316084971f1a5e9ba059ada24b4d4f24879d1c08efe', 16),
                    gmp_init('0x1ddb36a78a418f5f5558a23140ce95aa0642f17cd2b64a452fc00b858b47769d562a6d84ad9f87aa0d0209a4e995f53e5a1aea2a4996d381067ae9baa3507427fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7e1d110502a7c7101ae8a944af6770bd13e722f576d19fbb5834c77f98b5ee5c0ac1703ae092e0ca065945086fc1b1f4e0c7f980a4805b18ed1ce126eec3d1383', 16),
                    gmp_init('0x7532faf27329791ab303890027d1203660094d0a8f77e95add3434d10dd1a80d5295c235bf5d1b984dcf89c1aacc8dd8a2366c72c9acb52ecd62029fd2ca303000', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x582915b7e3855df2dbf805c396ce3065394029be6951ac7e3192b7dc8f920151b5f3da92d24df0eb863486a36cf29eb485a721043cf82bf9fdefb02e38dac5a843', 16),
                    gmp_init('0x3a22269cfbf55254b3dfaa74add661e696b5b02a47afe205f9b777a6a0026506f7a66164fe47686d8289ebf17e6eaecd6a29e58b6e8093234144e4ad7105da111', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16eb5a656fb310bc6752bcfea6b9a73af8a2f4128c7bd2a58ac82ea059d40dc6dcac7ef1ad6dcb8d8d2166e3181eadf10e47170f862f84039d2dccdc00a0fcad662', 16),
                    gmp_init('0x1c61e251c0912ad3e76fe550d74420b0e9f9f244a0f131825488ff01ca013af38a52b62d87905e20fef38b52fe4fa32b98237c0b4d092e433d2c50f488976695637', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f8a251e605ebe77df6e684a6cfed0b440cbcd0b959051af05f1ca1d7c4d44868de049cafb6f5cf696450689665ea381399764cd9c6c95a6efa32000d2a34b6386', 16),
                    gmp_init('0x4eb3868e7661d50d46c62e232756997ed5783c0d07524746463dae698bbf45050e282d3e85106e0e633c3e5f2a2aae75879e6d1c53fe3cee864b0b108609c53d0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x710224c37ffc5babc882ce235e7a5f4630aa8e3c8a4ecb3442838abf9f887109ee2929f83a69e910e67a1adc110fb60128f6abb3b96912d2e0414dca048d7f283c', 16),
                    gmp_init('0x1d48dbc1328242304b67736762ee4934788d01aa14a768c2f73dce6e19182903d3d50e192f0412d7cd404c67d5564414c0175a51cb3442323a660e149a3b75a5e24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12459a4cdfaa5bae5e90260bf61b0be68dcd6f625d38dfa11ac84852032088b26318d5f7be8ef99892dfe4c043da24be9f96c3aa4e932d853df5cf90261d27d4c2e', 16),
                    gmp_init('0x2deeb7559a72cd8575f0af009ae51fbd1311c766f174bbe6f876f10a46954c766dc1ae52cedf279b8988ed975e1c8a385bd46a5a0db9f0d4ddf9f239e53fba397a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1168ece2f93832527d2c2cdbc55bda06a8d9280c482edaf345c77dc5fc2e99aab682a411476e3d41b16cb430a206a82a4ecc2a2f1b0549b53e4b1e9117c3cd7a02d', 16),
                    gmp_init('0xb3a48a881fc67d2b703938f1bbf4be48c46ef4e3728b9d9f46b9233f5e55da2fdd05071fefc54afd69b91852cde1d44865a3d246fb4acffc922a893c3282ddeb86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c5b0d10e8c79ea93ab95076ad84340b83be8af9d5a63fac866ce973254d55d69edb74db709789b1d901e3cd455596d23b9de4c31321b6b603b43b14cfc42b580', 16),
                    gmp_init('0x18d4f1ba579ab140da9b89c089794e7433f9b4a2f468c152cdfb89ebfca760d8e5641e5ae94f0a3b41e145900cf90b3c4f50a7f7d10d425a250f8e10327d81928e3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc88ffedfc00d33a4266a54f17037b6c6410518eff8d7c2fd257d1c3bc99987725181642aa1d2f26d6d571d86bed1fd3f919d59bb52aeb3a76218cadddda03efd8c', 16),
                    gmp_init('0x6cf07b3ea784c5a79cc298be1b6cf79126357326aa5c2362e6c8b86b1f47623783c11948bcc6d67a9d32f2b11a1f7f6b47a293a8d7f2b54b28acf67416bb54847b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b5c52113cd512c1795618eeac54da88e65051a4e151f9d2ff57841a48993e124232db1fdb8914082e833058f96c68a6aa78e95ab32d58004c64379897720210875', 16),
                    gmp_init('0x18768e50e5a74afe0cf2bc60cb7f542a8d86258a5ab33658d41194e3acd9a3375d905451d6f7adb5cfb4352509fa0b861d84ea1073bedb5c3f6b6dace96e93af674', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ffe4622a9f6301e4ca134fe65dcd8c7e6e9b2d6a6c05c00dbf822da09bea1d0b7a6f3a84a4bac0abfa539a78133f5a169b7bcef0e229572d135ebbd7015a0c9415', 16),
                    gmp_init('0x8b05daaa5e409747ad9938c1174c2503abf361aa293a60c7bf321c0c78afe8351f2d7697062989b5e5cc97e773d15c1d4cca648b0e595aad85fbeb1f8073963dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17529db69240150e4a70a628f172bf3efe64f72ff0c287cae73db3851be0880c1b1c71a882d5c40a787ef919bdbf6d0542e80c92ac5563094e8c43876449d2224b8', 16),
                    gmp_init('0xe6391a05540405f33aa2d0fa2e355a6a6cb8e3b75b7591fb4e5ee164c79753872593fdd59beb58ac1e41b0e222ae89f8c9fe2c8f3dc46331837983f80acc367287', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb353b24c0ab3c1286589292ad342e7487f97678d46136e098ceb83f7b319591fdca3a1446d387d0f811806776f26106991dc6868c5f24357a8fde8d0ed0254d2d3', 16),
                    gmp_init('0x179e07cbbcdb79cea201ca067c8beb5a28cacaf5cf0a795b907421e81604616eaf95ddd0fba52c97523713509d967092c4510354bae9d0dd6d106fc68f37a74e056', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1913ce445947919705812be04c35f7100f24643b4bade17e05e9d0bb0844cd173794c139046b509c2901705dcce8756548b4290a6e5f0a1b7e2cc511efe456925a5', 16),
                    gmp_init('0xf0bd5c973aa73e0e21a56016eef88e9af12a4653be0dd5e19af61ca6f773498d40fcd1382288ee5054d2a40ecac01552a35ae023cc11390895065c3e87f32703cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f2382baeba4abf51ae7e74e51aca26121296f805422f64d40b7ff18f9b1b07c3b7db23e2c684fdd3d2ac2b9e7eac8451571ba20a6a7ae270972e348491df30301', 16),
                    gmp_init('0x1173d3cff1b0a6daf4b456314ca6cc37a8998278850d6d1e062a907800787403dc51ba3e99c797cf9d57b5fd617d74dd1bb42bcc9c76484f153076d34bba03677f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d3cb4be166a0c1a955a478fb012212b50613ea7e4d6dab8b7b432872735ecb02168bfa8dc0f622f5bfc281af16a221b96a5a641cf1b905708e088b099e8cdfe07d', 16),
                    gmp_init('0x1760af2a79f285870591e6d961600fb49e36730a0fcc093e75ac0132c268b563a918939f904ba78e53c54532cd7e3a04c52cd70ea8a7f8eed0738a2aa3dcf16c121', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9b94c47abe2761752a98675bc24c86f2e3ee5c3e7161094f559a16f766e41826e1bfc6c723e8a148eb1ba3c3398b6e2800d577d51bbd68faabd742bb58c8601dc', 16),
                    gmp_init('0xd84d6ed1fac7b175499edb17beed0a7d9e0efcce77513057a228d1619711f0d73340cc51aa14fb382823c95268450afb9a846838c94ff82f9f1824673056dc8149', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x322815c3bf5c037641726ba86dcbb17e788de4cb47e0e7b60c51c722cb9d0122de79e71beaed69b7d6a9bddf95f39fb4333ec8a34ef7755d5515396e6b8c4141d3', 16),
                    gmp_init('0x188755b7ed954cb917e3ea8358d3e97465d92850350ee755fac09f5eeb8971e2a24ac1e0b80db61f7500b1b2dc88b657ce8cf665be239de8ff83366bd3547050a39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d2bce8e3c8cd0302110cfa5b5831d5062c803c49ddd8a471e466925014f5fab3a2598c4885883c3c37478744ebbb884066d7a0454c719cf5b930cad152d7a2680', 16),
                    gmp_init('0x185dce0d5c3ad0f9a9ea4652fb41b5e85552612307c41fc9420f330edc02b188306d759aea116a7518f49eefdc9b9d4ac144598d59b03cff308a75f6cd09a2cca3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10062a72bfeb76ae40094faf039b3f5779819d3d312f4b350026848b7f36f47818fb760715ae3a33b1ba97d2673c4f3d98d9b95d7cca97925f287cd5f5b43522030', 16),
                    gmp_init('0xec1827cac1e1dd6bab852087916060f8d6864aca06e3d8c9a1ef61b6ab33b523001d5249e0e8ea38c6d5b6b7c1a457a77ea68c50a2945b79f0dbbbafdc31877679', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e452570d4828dfbfa4557430370582d5478e358f275f60549798134d64cb1ffe57cf7b7aac2065720e4240b863e0325190b34084b76402697f8f4c244d0a59fe9', 16),
                    gmp_init('0x1093798a2aff8b83271ad692f7c4565777ce7fae775749c8307ad777da27bd2d03e08db1ff71be7d63d108b4f099609cfa8bcb0d804f5a6a6c1b0bcbc468d79237', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e4ad434761b66c07d4559918efc40a25124ffcfa6756b6e4cbb75fb2ab47bb66c7a5914f55e2a461f694b10231bd9319be159e94dbb6e96210c50efa15dacda34c', 16),
                    gmp_init('0x68c59496c27fb627110577b8792ecad05bc69646bad24160cd381a92bbb5dffe570da8fdf6472f2c17bea75f26c373e684bd84a8ee4302a9a79885be1bebae3f4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d67686192e0cad308a4d4b863b1b0de9893713303df68231c8532bff00047227e08980204a3ad15ab76fd915e0cef5563bde190d41b77411604cc8a0b9c2de291', 16),
                    gmp_init('0x49b073f80c79e8f7928a6db564dd965c3786600259d9185da87129a3a4ce05f6fc116bf2246a70d2d80466141c5021d422a342c5d7eb3215236748cd2672cf3e2f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8a131a4191b77a526d736652c4a4d9b2818e8d240ea85ce8a5956deca451457fac266c909c31d65c6b0214e93f647424b0839865d48e3fac525f47ddb9ab9923d7', 16),
                    gmp_init('0x15cf93c18fbca9da156f0431dbb4bb313a763a52154aadf0ae9b33aff1ff203102dd26469e10a6a1118162ac248d6797f2e1f7a8e67c3f38387a848319532d8542e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cf5955c1df594795a10b1639c221fb8724b5fece7220ec7ba43983f305b49d9f2cf39fde59242b4d195a2b7a2b60b6fabe4c4fcd2c7ccbb628a9e56659d53ff0e', 16),
                    gmp_init('0x3146ff6ded599ca348ad59beeedc7860a09ca4b47e5b37ae4dfbbbe67a19693d8216bc03cf1380814f11c87d1589586cb5f027dae274f9e73c73dd1711eb1eea2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c1f5f699267528177a8c1bd0099382277022a18f6b8c031b8212d37cd27d83920b76b5ac522c89ba816cb09d0d362b93071ec79296907bae46e5d80096db0b7846', 16),
                    gmp_init('0x1556286e05d5f6ff261e5d3c87e6c7687e8e0379485a5980f303fa1a3f160581c89d8487ff97e8a3e33d87f107359aa9ddbd3bc1fe127d539f11c08db46acb136b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ac1dcb67d6117d06e91734531da243ac9f2a01040d7221bc31a620bba204af766358bb53f9cbde299511eca7b4a1e86582f49ebf83b2d6463747fe51518f87ae00', 16),
                    gmp_init('0x17251582b4f92b58b6ab64a8ac4dacdd7b721460360b35e5127fa863bafef02b56dbbbbbae321ee35af805d08b0dae583474b141be73bfea0615bb6699b43275ffd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c0c9d568b316c9811f691b79bbcbb7f2ca11f9daa5725527a6c34908677f0cd9a873be2fe2a5220cc6d44914e9a7f97d7f4ba830a741916e01c30f6c02e769805', 16),
                    gmp_init('0x19b5c1d5f581f73ef3b1e0afa55ba4136363d8cfdcc35c820653771ea16aa2a0300767cfdab061cc50292110dbdd4dbd664904e5959507b1783a03335450f75ae83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4902b12bbad3dcf9ae88a4e72eddade44db01f7b95cb8c4c60267b1285854d537e11e8d4503ab93c7135414f123eb73f51b01d4c3c4061ab7c93d3bce039741a2b', 16),
                    gmp_init('0x19044bbaf968580705194db2d9653481b0ffc6d96512a8d7e73b30da04a8d500bc81a11c61631cc2fdb27d85636c671400a38e4380edbc73078e2aaac37421e0a96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x222aabc22d86e78ca86b5a2225a616219c2fd71bc14a902962479f1597114181f7c3120d863db62a02a83b403a6109122aefb11e278639c0a0964975d713714771', 16),
                    gmp_init('0xf0c2075b82cbb4a44b64eace1d6d2d355813c190a6ea7dbc33866d10cc0066ea08b1b7b69364cb5c4842aba69b92ab35149c676f3fdfec04309037a233197adcf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1300c384f6e441664b4227b57a4558302c69667801b58ffe8e132cb2f3a5ff59f77d66862f496fd8bc3072b8b0afc13253775c64449aae6788b74f71c976305b1fa', 16),
                    gmp_init('0x1db42d128611456b53b7caddfdcfd2b8fc08192bff3b42d2c33fe3bdc069843f1692648cdd111d7443b7a398e333637d199e8f67af8d846d4c00cfd7a96c16bc635', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x907cc7c8f823e76eb4912ebad71ba20748b9e6792390fa51bfdf1860240cb2f289c1aa33753bde989e68ed65223b09d4122a50ce6dc6fc4bbd1eda11712b2dac67', 16),
                    gmp_init('0xe2169cc506ee3c7247c4b6481a9a0f309dc8a42aa1e63ef73d6cace44c637133a722f0bdd397aa09f6829477245617cacf760f5172ff19f1b8e639ea6db4a1d3ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e2eb1493c4b7b5629f9809c85588c0f3e6072a3e64bb7d63563935f9c06eda4ef94a3e926c794ce3c72147af1c8cb59db400c444a07aaf8b7f4732ab3d57878ac2', 16),
                    gmp_init('0x7c49ae816e41acd87c9c217363f19be3a08aa0cdfa30ab6400118751e0f223d083c9eac7e26b789416a1a67783ffea34729cad6493f6a2ec173cc9f8f43e29e03c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a21dcc0fff6303f7a270cc10c2fbeee48a1d530ae5863a0acd185585f95e59abb33125d1c509be48784feadb3c02ef5a7fea65acd44357c102268872ebde03108e', 16),
                    gmp_init('0x6ef6269fea832a0ab039faed37ccd79aa784851cae62cffcbbcce3b4e12141099e79ec34eb958e33f378d6ee2528296c9181de189cf32520ca8bc9af6f9681cf50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c70326449202d45cb1e47fff55961812ddbb8ef7087f79adbc4f00c4c11104b8284176c345bea6125784cde21534bda5177abd2e8e1f595064c7066df84e9430d', 16),
                    gmp_init('0x13fab48997cc321ca7dae45e69a924d4c5270d761509ba7036566480bb59471514590acca5e218caca8de2caf4d9bdcf29d972348061a19979b84ecf48df169b460', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x163185d9ccad389974bf6569c11ea91e8a2e519b68ae6051480e5c893a573c57ea58d437ecb12e825f17a3e5e40f6caa907542196076cf87a3d252e60e1857bbd62', 16),
                    gmp_init('0x2bc6e1fa0614348e086f2e321faf348188c07a2174d9e0e0a1a04402fc187db7441a0a5f3d938b3cf491ea17e6eb0f2f2f6805ebcd48995123f580afec9a0a8986', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1417032a9e6af40a4e7427c40db805085cde458e0505b46679c8eca3b91211246562e47048bf19b8aa19256c706337ed23720b23e7e341c1451aa9b95e9ccc84467', 16),
                    gmp_init('0xe047289c279e95d6c8730fdf4f61da7f3e412496acbeccafe038916a31eb18cbcc0500626e9022448f0c7f266a026ea0303439d91e2719a7fe041a985544f96937', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d21949699c06c0114a8e119c5bb6c3e364bf0aaabb77370e1dac69679d5be1a4b5f4a465c1f36b542cb472bf1d31fc2289c15440aa64be1e617b8a03685892e2a', 16),
                    gmp_init('0x11ff2b5ed5419d91fc4c96ad8682e8d4900a794aeac5ce2ac125a2c984db9ebca3e6ecffd8ca309dc77facf9a5d7d3f5fca3cd8bce9bb49f2488ae2df23ba74ee9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3c2058521ac8947bc9ff2af28ec6294b24bc9206ba30bd8162ed883a7d8e6e5507eda479febdb45b2b09115a1f731087b60d1cf091b2c138025637ceab569dfcd1', 16),
                    gmp_init('0xa7325306d0ea93f245f30e5ec4ae956132acd9a3230efd5f7945571ccf76f480d1a3d0879f05446b48e65849f65d3d6aa5988a9a6c1569f45bfcfa87a55a82fbaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17e0822ef93f88e818845d7d74b292c4f53cffd5151de366f644b0d87abfc71aab1b402928377f7e909e66a5e9d97d6f42afe6dbcad0ccfce05f7d9850fb6f765b', 16),
                    gmp_init('0x10bb03f98dc9303c7d027235476bcb7b25687d324787a97d20cfde6dd5e2cb3def43f2341d0b47765f6f07a43395646b614e53e122dec0fdb18fff7c1d7104d2069', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x136ac1b03d25e90c5b40061eb2c2e62e741ebbca0b998424f07246c373023871113ab7248f092823f62d3ada4ce0d890cd36ea132c49b102d52c1d74d05ac5fab15', 16),
                    gmp_init('0x160140ed6f46985a97e79afcc9435596890d607efe780b9700f523f0584807217e6cbf57e0257b6b33b31a64097398363e182525b3581f8a2ce0748c14a7eefae68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13d3ed9a40a967424fc6ab169a96b83a163975ac10634b19d068675c82a277eeb94eae3abd5e834391bda037586eb7a1238a49d8f1b730ac8c2116ca45b2e19e0b1', 16),
                    gmp_init('0x116f2a8908d5df615dc59b18fee260aff65b98726458c5b21201b3a760f1fde40f617da556d29c6670304c7ce962879d8ee853ae3f39a7d0a3fa23d2b9b2082d8bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a0df3c6bcdce1864cc0e7b1461e86f69b0df1a032c1982fd6afa2e57571d1f6d270c05654e731b08316050cda21e28c4732686ebf7b117380afc75c178ec70a8d', 16),
                    gmp_init('0xd299378e8c5c30cbccbabd20c019cd70574026f9c3ecf32b7b721ca290cf17f795a2cc987973a0ab49f5a6e4e8ac8c11891f0a42b21691a59046fa0fa600b0d0b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8da5ed8b89d29013a82defb0a1bf0392cf56cc61c8e9a59a2a72051f272a50f74f6023fcf46cf499fc361ffa4fda34a88cad78008c2bbc14ee2229e06cccd6d98d', 16),
                    gmp_init('0x13fc05c548904582119e0c8579aa0f4cfd4dca71fac36ae5a213cc2909978310e2d2f7f7dfce1147d4b164b69e0a000d10f0d21b9dfca0262d19d396c29d3d7339a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cdc4b4a3c40dd8029d7654e648eaa1a95a7e673638f36c6f21a17c61d12d520342ddfa30033ec544576a94116c710d499242ad385a84f67076161b9770b7dc0f64', 16),
                    gmp_init('0x3ae02dcd8191914c963c720b4f06e23e58559b0f3fad337694e376a376863801c856fe8164d90b82ec02022ded596a8678cf0d9c3551acd2cdd748525500c9033c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13ca05d1313cc58f64a9340583753b13e9d7caf0d3279abe6fe1b061123e048084d76e84fae02088e1a7eb43d78995db3e6d1c4bc45dc721bca699f72e9e084ea4a', 16),
                    gmp_init('0x1549f4bbcf0580494e0080e704652a61944075455aef9a93c2b036502f2367319308082803eb868c9d3e7b98e209b7daa1bee551c40086b46c481d54e675fa5b0ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x164649054e25a562614fc96dd6d27f2db5aa8f5732c36785d2f30983f46e7b8f7b632137cec9d335d4b53693de2e485313ca7091bdde1730e930e4b463a886b2e59', 16),
                    gmp_init('0x569cc0e1ea9ea7d1b4e126d99241cade423780d328a24da60c1ff369c761838a92b0f3e655eae264ad436fdf6a69bb579993af1a132001eceaa4b1b99714766d09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56ca4930b25dd88dc11bd02e5440061f87d843bc6cc0430de7fb0f0d2097073d826a52615c430981d00f1d97a8dbf1f0f9bf9959209512c00cb3e7eabf951c2d0e', 16),
                    gmp_init('0x1932cbcdaed889ab1175d508a243f2215ced16f70a3764af2484d3a058405f1e850c50bb3a4e8a71d91298751f3039592d21597c507b2ca76b592c1350259a249af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce8da68ece15a2a7fb7a0ecaa2123003b4ef7883ccecdfb62c4f73e3254fb4c8c2149adebfb65d3aabbdb1570568382359d3f46e41314b01418ed9e22a9439311e', 16),
                    gmp_init('0x9e3a0b5f66415daf6df19de2648f813fc8b8d9c97e4ae8efddd10d8530011d193cbc1fd16e533061b7755475a75f3c8e7b5e1020b2e43c22e1aac484e542250748', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa06c7904a018c6ac9dee82efee20b60c6360ac030fa8d72746ec2a632c3b1697ff1b8ee1134d8a74ea97a30e9c1be3d8882c9485511067b65477b4759ecdc28bed', 16),
                    gmp_init('0x4c6ad971caad23f5897ec76492d34b8f40ddb0d933600c7c58cfefaa5cd7b6d0768bbcb95ce092e4e6c58e496f0b58310e0c8e7905d29960d2efabd68d11a97778', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d96e5a1b25922229162a086159a49687e8d8c739a71066397f9c0940abd7e54543a201774e05b85e95e61d8161a3b5a78c6bcd13b0e3c3bef742c6902d17001ab9', 16),
                    gmp_init('0x96a1b669d8bc2e1714581d1c013d1f2799377cdce9b5297c10a0584968665f08cf83eef5e6c3e8974fd91e07f157f8eb8cd337ff0cda37306ac2fe70be069126ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dc3ca460784b9fff68f528b063bd6749f96f41901c704f16d6798fa552070097cc1fa6611f0126d5383127e9a54745395ab3afb61fb9084579b42ef882816f7665', 16),
                    gmp_init('0x295074b63ed1077be4e57995440d5893e9334c9d4ad2d90e251696fcc0e0ad27608f4fbd44a91242eb1582b22ac6df403a9de669afe24facde0096eb977d54eb8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32f495b445e7b13526ebee2760d048d6c5223c1474f127aa057769322ab7bf8a3610dfa360934aa1f12b6792e9fb241842a9463d66dd8f64285f4ba23b78e658c5', 16),
                    gmp_init('0x1f47aca6b8c0817ea86b080e82cdcf32d6142d131b2f20fe52043f03f70563c6c2bbd9deb854e888c4c12359173edd0293a349709051681a7b27baa637e8bb79c71', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x12e25b7a0fdec93e088dacf31b8c8d571f1304ad2366301b3a46b30bfb9e8b9556c1ad4b5ce2c1fcbd90e4a58d5783e3c39cf34a1a87b2caa8f4d1ba365c000e4f4', 16),
                    gmp_init('0x1b1c66e0e1d61aa5039b1d85da78c971e9f11242d2726892bd1a84ca0cf291636aec1f58398161a045f46cce87b7586cdde70760671e9430f992863bcbf3b6cc6dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e7607f70e28c7a31a8e9f89711a1ee9ab0081001147f3f6e90e189904d6d06ea138ed011c8ef7e38142d5364a1da166e88b64d2e59d9dc08bd52d5127c1a3915', 16),
                    gmp_init('0x850fec85e3b3663a4e12e924a1a90c09c1ef9125d279239e3c7bc0f1ef4eeb886463427f912ca0d266590ca0877aefc5b1b3c023c02fa7966da73dc4e4db957a5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf28bc93698970847b8eba99f05c9e9ad6177fe5bc19e5429cdbb8c786292abbdafc787c61a534eaf17357ba73ae650e544d2ff6417f9b32611e55bd598a6ac4b8', 16),
                    gmp_init('0x171958c21aaf53654281de3c3cb8d60f9f2e975ff91ae5ded18647143b5fd49509b32dae3f986dfdc2fb6d7981f5511db76d1b5dd53120a832eea2fe5c6012a3b19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x180d1c4e8f90afd95f541f35ab7482929c1fa5ac4f7ec117de09728938cfa5d25bb60adde1eddb22c7c4c8aac605742ff2a924e5fec2ec6944a6c6119f6a1c88f3c', 16),
                    gmp_init('0xe52a42280dd01f8459c1e33f0a60d4e646cae01ef61b597b90babff8b79c262cde37e24662b6a78e2f6f2f130ad94d28839361a57f2a1c9202fc4e73da7cd8358', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b9abc26e3ab8f7635faf924fe45cdda919d859dbc88fd6fd9177c6db6feb94c6226c714decb9b660ff47a3f33df68a10b01d146684a4e0a000806876878a26ad1', 16),
                    gmp_init('0x1047e68cd3f71f860fa13a18b8ec19be405cfba662c598dabc839574e32cc9c99d413cc6f4e8794c868cda7ad210bd7c5b2568be9749f8fdc2a5b24d5d0023d360d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd887f3ab032653d84cc7183625e0e8dd2d2d9d22a460ca41f1b2d24a392f964eabaa30e5ace8a2fc4f0505b3dd5bde07e8a2231248d5e33b729f19b3e18c730727', 16),
                    gmp_init('0x1beeca35b6cc60dc53466a4aa43bd817d90fbf550dfe60b9a18158cd908e2a2205e1c9abde6f542ce97c0df346f8e8397aded5fcc2c7154e8b752e505e3c7fb02d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a50a51d9345d35024d7f031abc809ca2075ed17faf3645c09cd398643323f0ec1dcd905fd26192c761a155410aea5190a8bea714229e3894e584410b672dcbda3', 16),
                    gmp_init('0x1bc6315ae491716e36f7928166bdd6ffba588ec063e86cf55f14f717ccb81e1906942ceb50e650b703a48d8485e6e6e1059358cf7a0a68f24c0f5f7d19e5ae92eb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191d2ca6f6a199f1eadb73746e7e8fe9c4ae491ec63cd67fcfcfe78e91d3e4e9032d933aaa327696aa1ac041332abbece849756c443f23b526d09bc56744c81da95', 16),
                    gmp_init('0xf0d5faf13744bd6838bb15d2fd134f7f2dfa855ff10489d6b15c5238e3bcdf955bb92d8e5d2a394366f5478e3b7c6a0add4817dd6e42499ff486a7466aad125891', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a4cac6348c27f52d9a10d66c2200a8dfc6ffbcecff0fa173ec88b8ee0f8511a2144f33e90472f23f69cbdda8f5038fa53951c43ef0e5b9de00f90cd67b3c284ef', 16),
                    gmp_init('0xec1f34eff6f10398a5b1744545acd564ba1c1e9119d5469935ee4bef73cc0039536b9993e95ce883a41063f74f3c8fba5ccbda158c143d8bc76370a9482d67d1d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8157e3c0b9d4800b7da362fd51bc8f956772a095b9c14e99a92d5807e1eb96a280b699c9f09f7e1e43996925dc6eb93ca435c27d47d244a140fc11e4c84b0f4ea', 16),
                    gmp_init('0x158661650aae80385c3e264f59d5ba120e4868464e967e0b7b5341ab0e5a50af73b37102fb19651d7831ee212252668d00f8cc8c25ffa2e29485efb3b8f90d9ec28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2e5253108fe6cbd00211e00009db385af144761521b0b2d2d682c00ff684714deb20199f2f8f0214188287f0e6aeb61187108762975c678eabc580ce209a6cc56', 16),
                    gmp_init('0x3f390d3cf1a4ccdcf2c2f5f3fb8afd305b0aa977b52f4e63888ac76fbaee8e0c4da090d0cd1e7175adbf165ea2b76c964c30265a171ad609bcd3e3667ed34d3d44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53f8e098f02594311a2ebfcfb42840138a5f4be468bebaa588be0136fa0e0bdcb003df77a9ab5eaf13384d6a18a027372971af5a9992007e36fab2f74c3ef1eeb1', 16),
                    gmp_init('0x16450b6fea8e68f20c011c9b3c738c3deafdc08b8f8318826474b556882860ce9b495357b956a57baf67c523b4806be976492dcdd0e729b0b1d84055186c73f0476', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b8a329a0598b10609571321e68812e098b9a5244b6539b685a67cbba24c794c80ce842aceb9b9318ff5f74804636f94b633a02504a118ba3f90d6932fd4502c57', 16),
                    gmp_init('0x16df3d44f870e1d10766afee11b92d13977e8c69640bcea200529bb4a70dfcaf995f642692ff47929aa5ce6f68f02b46abb7082b10cd9efbfaf33ecc643b8942609', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb67c993d229887590dce4795b714eb4895fd182ac7b5167fe8a37774b00371c0800925dc3fa60a97383db3924db448f29691a0d41bd0f62e2376b2671fa4c28ca5', 16),
                    gmp_init('0x13a6df91b71bc20a51c2648af04284b461156d1caab0dbd215bcf90cf14ab143ecf81205285efad601529ffff34a237d15c032de9c217e4f78f6090f452a0feb93a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66090d034a6c70d16e99dd7d6041e10d2d645307d5f5f79306af0daf82480f8dfa9bd449e80dd53ed2aaf6d2181a004adf63eb042a2d09f53327f69a0e8adbd3eb', 16),
                    gmp_init('0x1785306419dcd944ffb171e50e4be8aa863a0b375572af08fa159725120c8227e9e6be51b4e6f558f888949bbca8d66b38cd359274ed74292c67cd684485fb42f7e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2b1d447f048d43bb4cbb83316b9378f1324695e52155ef9647cee2512a4761d3e9ff56913688bb4ea882ca5536cab6a319c49513813ac7cad4bf0b5ea3d34b138f', 16),
                    gmp_init('0x1bab32af569bdf2d850d783e104fbaba8d0532ca9bd5ebae1f093e74192bc8d65ce33f4de62c616138fbb48a0cf872777ea635d968f4c6f0545777ab201ce5889f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b560e329abc5852d2e10e72130bf6a9e7db49f397966a34f93d62ff1951cc488ddf3caff7f6dc03bead5e955a313b47c2a6d83a480ef56558d552c9d248351408', 16),
                    gmp_init('0x15b634cb97f74561d5b37a5ec08ec7fb5c9413d6838f064fd0cc5b20c87ef955e4e75d9044b911a4d3bf984fa8679d7d7d36ca51acbb78d4d1afdad029af3017c8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d0aa30a6f5bfee0f15787400625f2a77cb9e63a77307659132d642a82b2af81fcdc8ab2796f87f9880230adcf69a8a55e4d3822aab9fc57bb9fa30f39e43b6c21', 16),
                    gmp_init('0xb035ace6e02ae8e0905c226b0e411fcbe7bb8f840688fba94617170a2be5e80fc620a0f8c0e6d43b4d21ccfc555838145bb586299fbf907285796f6508fce49daa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15da0bad54e34edfb018e229326e159855987cd05685f32e59a2ce9fae12bb7ae7a0785d5a20cde74d86c76c3ce5ff86aadb3b0dcebf9bd8da6446b17b0e695916f', 16),
                    gmp_init('0x12702562708d7df0b4479838d96be248c98b39d102ecc95d9dfce03d9321658337db032bd2ba68e8e4a68cac3a5109b4740e7c719cab795dba1a54529c20e1290b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed23356e77617f5f5cc5d9d516f390907b1696655818e884f1c8f26682f7f779bd0f49df77d131a2c8dfe57f997c4460285704769322e67a01a39d4ac8162dd91d', 16),
                    gmp_init('0x18f51f019400ed8d53574a390b75fb4dc36e3b844b5f502ea1fc179376a671378ea2e6cd938c610763cfa84e8627222589218bcc37f9fd1a70e5e6830b9679deaba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x381c2bd5ec7044ea99346af7407946bb10d97de7d5e3c4857e78e8101ac186f1f0af2f470816de63333d9fd5ccea11e10a368fd8ac7d5acc8c9a88248ca91f6f4', 16),
                    gmp_init('0x60b42aaba7dd4c7b77bda02ce0c6b3224f61a46ebc3112b6afaa679a3144f2ad2f376972a2c83396c7e839587792f22674c3f988f301efa84304c2eda3696d947b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0ab605fcd871bdefa295e09141fd0a6c00399cac8af65ff38b45473981b97dac54c9b8c6468db6690cc895e1ff07f009e053c278f72f410878879637b3d70360c', 16),
                    gmp_init('0x1b10456187bbc7dd8d93351f4ff989f532563a624f5149d6f5df351279faf7489299322ab082937e8c87f14436765672d9e28fda2bbdc7d3a403f2d42975ad63582', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa36617deae68090e9a66b9445312e6f22ff26f51c225e299180e97063de37740b4c7e3107e7986fb14a978adbd72ba04e7ec85b9edf15957d4fab6fa734e185ee5', 16),
                    gmp_init('0xdd3ddc2bc47d9af89ff4d427aa53d6b64c2592739a01bef504fdcc1dc367bbbeebe089df8fc689536d24847edaac709cccca6cd7ff3c234fa86595b1dd2dafd33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25d176ac8e1d5c0b95ea46c2648d4d40dd658e8addf6e2dd0798fda748c431a2bff3464f03eefee7971afc70a9d2326baad6496dc488cf1cec1777c43a52b7210d', 16),
                    gmp_init('0x19326b90de1daec6fba8a24c559c24e4659f975ad39a96daba35c15948c746d53781852a88948cb7e86ea69b563a1b42dc9441ce56c10f248bf5982aad3d6068679', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19b37bb9f6cbd0c657e78e88f8334e4648740d3d1b14574f3a2f021df6b5184a85ef1238756f8865fda3b41980601a4a96816553ac3f1ca2e321f3304739a4557c3', 16),
                    gmp_init('0x1399b212bdf6216e8b651051b6d9c2b9b33c6cdda7b1970b865a7b29a7c53cc3dc148cb8e4b8340ddf9fffc28cb246775f5759d79aae966682001dacebde26de30e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9222b1b385c90f8965507a88dbb4fbdaad7e3c625f1d13fbfaf26ee62bff0b87f8068eef144470d08bb74f8cddcd8dd11227cd2a8dc716c2f3c447f12e1a64d88', 16),
                    gmp_init('0x6b847ea13d205c733bab7bdd94e104e052f1708f4eb67368398c96d0bb774a7b33154026f147b1f321c41670e85935f39f78f774a9cc7176aeaed21d70fcbffedd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15e309fc896fe3d30e4060336d0b2900c308490243038622c1c9ec1fe163fdbe80c7253f64667c3c544dca1f3387862c68d6c6d706f0535ea486692c09686e42ab7', 16),
                    gmp_init('0xd3309ca6934718c36472decb140943bba334a74daf6c1c4d67a1d4c055e3e75ff89c6d13a9395bc4348a0864e0515ca9cf562a6b6c33e31671d7849f5e7a119170', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ff8600fdba95b8ea09404a4a17755fc2db49bd09147c03bf6849cf9348b1186745152f4cd509c915857685b1c2182c9075c325ee2ef760c39cb69395738e43b1f', 16),
                    gmp_init('0x1c258a8b76aff5b4448808a306ff14d5bb263dd034e2295df4c80bd6faa5197e72752d346081d42eb219dfe50154e156fd895a8487bd85d30ada88e6ca5c919662e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7a423da3025ad9c8dcd34dcee9da96db058ffb9f94b63f3dda319b77aea6994ac698327ad1bf537c3d8ff4e31a40b3251815e0f36aea5e49e3c4adea091760c95', 16),
                    gmp_init('0x27e0a618d90cdecd678bebc9f4946c392c64d603c70872ea7adadd5ec7ee6c51f6c515c1393e58c86f2a544996295f15884da77fce17ca4f112ef956089d31f21f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x121ffa23b56cfe8df9e6958138c69841816b4bc02ef1de1b35da9823806abafce5699ea9656d7be4f1df13839a242c6625490e45b1c7ddd6fa9f44c856344020170', 16),
                    gmp_init('0x9b12fe8d03e7946c63af01525473f304a9ded8ebf0518e0ee9d8567eefd0e1e7404ec3c71a822b620070ac0e9faf10538ab074a81399bc27bf309b979dc1b4c6cd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x10599c699dd3c56080a27a4c70bdfa4f77c9f2b6950f602a362a33e9d7ff0d87f74d692cd207713f3ad5bf0d9eb835f8e22cb46aca98bf180e6adf5e06ea79cb073', 16),
                    gmp_init('0x188a98fe976434ab9fa963bbc8094aeb02e98f463c0aa325fc825ddb684f81ea5a234cfb5b2e07a21b62338452b436e70fcabadba3ad59e754ddfb1b25595338fa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34467dffa614c180de5c908486ac09937b81ddd1f4daa40ca5d35d1340f4b8fe58574b06528ea44e8b0643609730415e737c1c59150d9680ec9a7fc933204a966e', 16),
                    gmp_init('0x528c28afea0703c0efdeed257a52050b0bd3441285197f6bdbf80e76c00ecb60fc67f7102e69f5cafd3af58dd97c3923e62650e9570f527147e6f97acc8000602e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13cd2835bdbff97c4f9093bd1907838040112d2924cd6da83e965e4263eff83d7b1db7bf61311e5dd4e8cc0208db01114cc566ccdd0f44d63fb2ea6e18456500523', 16),
                    gmp_init('0xf368dfce9653928c27fc039fd22fe76745e7edf96a6e4923643aca950d2bbe77d50e526187ec6155f7478e934b8c96057de2c92a4c42dc5bbbd3ae4c901d8e9521', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24ded1ece4243dc5e58fa3d30032a4c54abc0d225f79e133cdddbe587d16adb540a163377524cebce818813777ccb2f003d561f4cdd3c33a7dab482b76e225fbd9', 16),
                    gmp_init('0x104e13004f94f3254ebe8625d4663944868faaa1ab4a8795d3bc8681e80beca770a19172f460d2861010c842c3fa9dc648aeac8e7a15a8efbd594ce92a3ffd4b7dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12058b1d1bbdbe12667f26b5d2b7042c5a78bea9d0975a39999c678dcc72fc808a852deebf25cf0bb71207d9b0f01658a578b6168aa47b042fbb0fece2bb7f3d4b1', 16),
                    gmp_init('0x13fc70cf89a8b993b9afa4797269e11ee36cbce03baddc4abe5cbc11caf35b36fe07859852ab40c5f7d2245c17f56babdcb045a9342c684e98510cf0b69d821c3ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49e0676170e24955dbb0ab1008558b8babaf2ba06878e349100bb0cd7085f08816f3854bc2d236028a23780725f43c710c50503fd6dd7bbb562e911bb30d9ea003', 16),
                    gmp_init('0x25819e1d7c442a278b2b70f9333a489db5e8edfeec8f3386a7587ef7c464747111bd0e364487d6f082402122ece2f863081676b3346209d9ade2b0161a87b571f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20cb9bf6df061c3cf45fe3fec0d5dc37707194dac1b300f91ebbf048c56920557820a2d72ef120849e4a2bbecf73d698e96884c4b97efd86731be59d6ee24007', 16),
                    gmp_init('0x3f3a6e33a14fd6f657e4716fae6ec33bd037ef4405f1443ae5db33fc361d07b5f9f0d3ac04ceeb60e6135d2ca7c5eab79f7e963d5c5673eee7ef76e09349841247', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32a77550a628630d59b16b14ca5f2e5924b7a29e92035e1ed7735836b48afb5102bfc6200bec1562e8f9cd2dd6c8e361630d9bf057c7ff2e866f01c26104e188ff', 16),
                    gmp_init('0x3cd54dc8613193dd6b4324da1706fd5ba347f49e50f09b81cbe806ab7b98eb3239806f95491abd92f8168d61e3ea3713c8df5c38b623b67adb7b4bc3ef7418d27c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13310fd313deabd284e3105f965c5de8f832a277e200d0e4d152704ef59a06a95f5fbcf4fa1161d138a6c4d5c7af9dcb985e4284139fce247f89f88ff35a3d49d3d', 16),
                    gmp_init('0x2035d44ed5217a52ce13144322bf6798e3456790c6e26fc087110b8e4ce1f84317bbae99a3c0007797843c53d8f83929273e273e4200f231be308bbdee0774ab51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x655f872492fc689aeb48c62a902808760f852beaa10567103d7d95f3b17a24cbdd2265e0edd3446c5595e65524dcdfb2db4fb757644b5442a4d7c148b3841f5e75', 16),
                    gmp_init('0x8ab7c566faf0341a625a411714b745b0de4c515b788ef8ebc9a178ac3072cf8732bad738bbb779b3902a75276c3b2a21bc0b028e97621f47f711fa99ecd6740dfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x188788ea08a0986a53a86e766a1302bee4313bcad45d1bbd515f7fd688854dd047a3915c8eb837de2f692d4a44ce70f8e390ae7e57b8dccc508ad24d78c5774fc6e', 16),
                    gmp_init('0x19798ad5a3f899925820f46aad3bbc8466811995ae97e584997e7333e2338d741c729d49766adf90b6fb30a2a3cf6368671f2ff910991cbdb03e0117403716f966c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721fb6edcc8a718cf5abba0aba2c40bc6713d3bc840b6cb7df29c0813b1f856f5b3a3fde2e6e513dc51d08a1226ada1db1de569bc8b27c568e42814ac122ff19a0', 16),
                    gmp_init('0x8108bad7dc2dfefcca372a693d50bded2d333d61b31ec7abdc8d12edf88944a622f79016c3d9e3f68d0c90364b0a157f24bb056c4891380b70806a0ca2b312563a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4748fea9063238c2d5b3bef31417356877d63bb039c30e4469099ad520bcc1300b8a7d8cbe8838d94f81882ab6a84c69dfdd32cd749ae10bd195aecad65c1c6ddc', 16),
                    gmp_init('0x10614a813f01929409108009bd907e95944e4e19fe46afd2a5e32a3b125b72c700a18c0ba0e5ba624e3f1355ee5a907e9d5e852c8f15845a5ff772aa8f68e8fbfba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c90c5ec66ed09077dc1314481e4c19372fb7b78301d72725cebb4ba2d9ddbe513626c7d71a38aeb0f9998064f29c4664f62df6a373c73b904fd9946a699102917', 16),
                    gmp_init('0x15d37b6a2f2137354e1cbb30c53786c10d3e6ebce13ed6c45f0d70ff9614d7924b3185eb955a96247b1e4913c2eb5edf4e2ffb71e3f55d4157c05bccd2f92b2ca1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7dfc5ff12edbef772bf972d6fefe1ac5421739dffd1c2f9ea363ddb1df084fba3c015240fefbbe7b62b2c480b942bd41260562a5910e880614d82915996367153', 16),
                    gmp_init('0x98d0727c3b091f3a2f11fa8448f0393356cc97e0caaf2c27ac7f8a45d7faa5d679ef2421d0f81d74c485909ebfc15252c3ca4b3f9711cb4bdd2f0a919a39250f37', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x11ff0e5f89b7407d5e14cef332f30c35cfa84e71c550326c7be21afb51637f5917270a6bdc4191b5f1973eab2f63ce74ee8247a0c7cdfc711dd17bc05981fe2fbd', 16),
                    gmp_init('0x18445077803229951c1c01a4b8d8e030e6959c25c1bf1e8c52d4bf2b1174448059f5082037d545baf12ad82144a897fde1abc660c66c679c5367b23a55df8b6b176', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x109b668a33699889cf7c236b2601ec38412d7d7ad1de8c572adf1e1b15d430b461b45b396bf3b330ddd00ec6edcf2598660b78abb45c7912bbb6a55868f11c50119', 16),
                    gmp_init('0x1a962ec57f744ce2e25ed117dd7b47e882eed08303dd72a05258766407ed49842fecd813e028fbed8dfc9a9009ddd04f4b583496baeb87b2f04e39ab64b0bf6ef3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1161b7a009f237792d10b5c1e89bf51ca1c4fcd2c1ce21a233c73d8d03503d4984a3c499205ae3ade6df0a8087980648b08cdcf289366df99e48ee76fb84b60e7d4', 16),
                    gmp_init('0x1cb31fb8f953828bbddd98a21782af67257320308818a8817c37a591af11f7ee8a42421c548bca536b65e6da5975a4f98c9d5a6fbcba97a7b6ad2dca97044961ef0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cd110650707a71c22bb5b1ae6acc10cb2f63e5dfc2a872fafcc768683ff269a0aa120ee797230161c14eecc17280081dd1ed09705ff6f7ae7ee2f0d5e485da448', 16),
                    gmp_init('0xc809e7a5fbb5d82a8bfa71344852fbacc950a99d62a6a1e281e6808f48a9223942a1dd8419806b67624f1bd019e62fac2ec8802d2a8d805b2ba17256895a78b340', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1531b50bd377ad8bd69c860de4aa82598ee3066d308aef2d574ec8adc9d4dd93e8d2d00efc16d28920b1b6165c5be6a4b3c7c3fed1d72fba79292e34ba8c8856636', 16),
                    gmp_init('0x1d2a46fc8183703452add427fdeda4a173c928d18a0405eaa14c0a4a77ffccec23dccd683f57ea41f0ae476bc935653a45d1fc682a3ead5bd7269bd34afb5b8679d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37025fa8ad491b67c7ca1dc27ad1987d369d1c319d59d797df41de530bd2422f6f06e5ac058ffa66fd3ad2b42578bad22f8d256c105a678a7ba938bd6a646481c6', 16),
                    gmp_init('0x602fb034bd78dbc6ed39c342448fe12057b050fe1fc2c5fca971a269f6af0beaff37451bf2bf1b5ba525a53dc94c0aa69e3f005107dc76a207db5d55360c5eb0bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b8f54e30cb2445fd976a2e96cfc5e72a764a490725b4967514003a5b9820ba8d8dc84edbaa8e449abc7738cfa79049b9fee8446d3cd644b74569dd6ee8683ce282', 16),
                    gmp_init('0x235c8142209addb3f76f0ea7b08edb1cce54191f4b397e156baddc927f129fa7c313583919be8b197fa64ae48beda559629cd08237ed622d2ac5b7369c5d00e246', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe4cd307365e231527cf8b121d3e9da413a9a5fd6c91529288d14d11e1b1a4681550c5f5ac8eda188ade8d35dc7b59afa4b619fddf45fedc58c56b1560ac1c7ce9c', 16),
                    gmp_init('0x13741f8fd81c84e41202e2e4aec18c61d23363078eb2727c718c1ad06091bbbce0f68bad0af749befe4a5011ab86b74d50a800ea7d4306b0d1ada248cc0f086ec25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16444ef893aaf5ee34c4eef80935fa4d16092b2ec60dd557cc4a077d4a426ea8c9f96c0b179c09754a89a7138785f76241828ef46e8f266d0364d2513bfcae13d8d', 16),
                    gmp_init('0xb08c07636ff35344aa2487ee09ed20d7f9107dd9c4c91fc0e4c72be7d6e1ed28fe750d55f6d30fa3f8c79f950a147798169eac02d046be48476cfe0a245daa76b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa763647a9ece5216b67e3456c7c00b2eaf1ccb668f6fe2b643304ea6fdf67ec27d8d75ec5621bcda851b31d91f28df3154cb1f2915adfebdc40d9852136a70bc26', 16),
                    gmp_init('0x18913ef21ff8944bfd87ea611dc3913ea8679a97b55c94e0630988263f68108eb31c7db4a8e32269b71b2b67622f64bd0b703294d813ddd477effea1562068a95d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f22d805525f90392ddee3dccd02244ca17aede54a14b5eb81e332029e0a3b50d4df8d3672f32d3a12e3cf7f06efd42ee4315616ee6ce85246bbe86985587cb7c14', 16),
                    gmp_init('0x4b474ada846a73e8f235aae325b6ffe468d73597a461ef72cbed65a8a021023415e0970c3903a150c7435294237f5720fac6273ddf8e01911782a7f544e316e059', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea5bf9cc7ec38cac02346cfa694059d3ea96ff5cab43c588497059b0ab71d84017b3542f515ea71e9f5156a4e9c8ee3a9779ff9c69e1654bc30d771a96433ff017', 16),
                    gmp_init('0x106088d276474af389cc1dc0238d5779bd720a0e6e27bd43cfde3dd641811af98002adc73d274da200af861974d7120647eca234d5c1d4e8c900c5107eb664b9968', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd23d34094fc9b6c92d7b8f88c0fc766699ed0650ced0b8f665530b6935e0d96590ba5523251adad7ec963035dae56e9357b657fbbc9813e4797935f2473c21843b', 16),
                    gmp_init('0x6ccb491f20beea6af0e120753135da9e0df7be37ffa2d27261cc0a8d3cd835f530c6c1d55563ced6dddb5d2a862c806685f6c639a7d3ddcdf3e7cce7a676e5a786', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196e6580bb05bc97df483df8afbeca3ba0884795774ee9c5b7021e7558a238b7f859e6ffa2132b14af33785c98702c5f9ce9f3ad291446adf252d1ec8c5d9d52020', 16),
                    gmp_init('0xefcfa71821a731baa2384bbdd844c35423da92584c3d4035eb4ed8e4b533bee41d52cd213224d35530997eec33d7b86ff6ef524a464bb8d60e003551945bbdf708', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15dbb388821ccfc7076982709a6d5297aed6cbee6ba5a69a68ae1572f134a7cb9366282362d87ab765cda56447c0eaa0f05db014c24035805bb2f97d9be64cbdef3', 16),
                    gmp_init('0x105f529e4e64c6c746ed15cb3fc935f83ea180e5c7b208ad7b856dd26504946efaef4ad07e927d1abdee94ac8a2edcfc5896352c151d67c82b6eb7c190a14c61123', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x183ab542e06217bd3c7b1dd4f51fe15ed8a7127691f585ce610bc0bcb3a8099f308d8d685b5e53147148e2e0d6d6c5663376f780aa7f6fd67c59a579dee796de182', 16),
                    gmp_init('0xd11c2b356c156b3b92fec097778c6e65ada38d86f05c205ca3f766db9a8c76c26a798604f27f5be1b13faa747c847dc935f0092c9f74d6711367e189835f29dbd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16cc52129f85dcc55229f8db873adaa64f729b8a792ff667cb15fcb7a8e79dd89c2af09f900f60984c2372e13db8a8dac8763a78984cbd2bd7b40e2e814378740bf', 16),
                    gmp_init('0x12f3dcf620376da59f20c30dcd7e0c5141f4cfeb68e0c875ff4bf731493b6aa180e42752a2262ae7550aa4e794a7d8f5dfb236a5b2399f2b4cfa7c053bf00c4f4cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe73fc1ea7d6f09f3c58358671e3bcc3b72adc6692c4a735404c0f2108c78b9f00a01d57ca3739197ee34dcb6e34999e14331f9a91b41cce8d3dfb64f02974d9b78', 16),
                    gmp_init('0x17cdf70203694f69baca65f47eff69010db39df449cfd6315ec839723cc894608a58b4eb830e0f2963cff192db6d49c136c4d51aa04ae44b27e9c983854e86d270c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f819f8f8bcdfb40d1a8996e7829e98932a2ded46025ed26e033335bb4a980051858d5a7ec411037238c76159758fb2b1be8fac6485f1bd90cb3eee6fe2a5a58fe', 16),
                    gmp_init('0x827b16346d053affacc2ad03b0eccf8c45b9a166ecfe915661c77d33dbf0ca87e529b7b6999ad55911ea10dcb49eebe49c29fd31264620cea3b8b1d0edb98e803a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3114eb042f960ba63f3d44ac191dd5bb6b49da1d0958f27ab1ca46a51d24d864cd13e05a849f7f32d88ba213793cf5ab939dc3d78928978a085e6daeb491bf9e59', 16),
                    gmp_init('0x1ee85c69baf0d60d28a841cf2826ea38e9568c63f32ca0c7cc04270a9babfc9d3c03b702f11b835afc36b6cd67b1aff692d61a5f60d29e1992e8c9a73c4857451b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16c442edb73273f26025c661465415e76752dda407d7d94bcf38426dd8e389a3a1d77fe410ee5230a764b810c4cb68dfc8866ade8b0b0a2b341085d3a3cd827cc1a', 16),
                    gmp_init('0x5fb59f6b352d870ba7fd045d4660ad7b4a8b3275a0face4dc800f11e7bc8707b4c6ec373632e99dad2e1d49019f8828607a72d9c62d08169cae079d5bcb074acfa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1716089459beced0d7134f16b31f8ec5c61abb62ef74f223ad52795fb1b3839de30736d959528585330b58f9adb780cdc0ab120bdf7bbea20360e5a48a3d933ec', 16),
                    gmp_init('0x17fd155e8cae4e79e41b09e9978ab677ccfb89e54e64709427d07e19bb51040e1bb7685efdcd71960e8dea1e40d130796ee56aa6ef5ae6c4aa1e346fc2d8d5e323d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cd2001390302c441d279a225bec0f1790f47b8329e319793859c566b1ddd346f96f2753d62cc9d658de8e7a4f0c96f04ef9407f855915d764c08891ef1f60c05e', 16),
                    gmp_init('0x147b5765b5b4bc5e9039009c835bcc4a5d04a23db6dd0436b3dc1a39c8458226d89688bbe01c99e4db131bfeee7563adb3612786ba3c8eccc1871f6e57c20ea5e7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef57fda89278c94b54b00046d54c7585466ac7e4f7a6b8ea591ff7f1f4fac08052565b5a69ae414647d972ce7e2a4828906d47ae698dbd1bcb70f293f78d7a1a55', 16),
                    gmp_init('0x259a4be9c4cb7ebf4b28a91fb9620af1850a21d194d18d7ec96d388adadef2648ff02ff62e6277e2f9acf8ab74178a657d120412c01939d37fc89c53d4ab9b1fd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aef3eb640ffe71bb9423cf7c3d7f716c575b7ea7f56e259af43d99e23ec900287c09157f665444d6a233d09001749d90e675ec91dea1828b88b6cc18ebda4a348f', 16),
                    gmp_init('0x6b9f8680d37983f15764c41ec1651fc983e81912249671a8dc1c57658749d3eb5179b6aab4e3ccf8aa5caff71941a87d50595beb65e002db4c8244fc846e9cdcf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x317986e2379b546817a1a2e8d98ded0a311cbb11a2395566f9699342b754d70552a97a225ba74bc515a5e2a8913fe27ab1866dbbff82c3492185cb8e721e2e26e', 16),
                    gmp_init('0x987b87fe01d6c790e1a1b0ef3a3f2341a6ae04ca918a745c0dd946c20da7131ae55b427f68db3935bd09dbb26b7a3b8625b738986d451eeaea646f4099da8c44d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b32801531df2261bc471e01afcacdb7c705677f9b970f1692873076403c0347bd47a05131eb0ef7585a9f60018df76fab677707acad710f87478a6a00515ccb3f5', 16),
                    gmp_init('0x68c064c4b74bafecce308d1a9c791c614adbb1a8660488e2f7bf13bd74d9ab63e2b259e58446581fb3e9378ca2ecb5108fcef683ae5692f07f2e0884c087ab879e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x939d1fa18c9fa2b6607088dd8d149e63c77056885b92733e9367d48150235fbe70d8717302a15611ed24d81683d3d1a346494b7bd0a09ffd392368670204035fbc', 16),
                    gmp_init('0x791c5aa7073f1779f22eb12cb1c441fdc5b11b149a4b68351f01e9fba9cc612f036bf408efe7d83fa7ecbabdff710e5d05f8ddae598d84b66305ccc95bab42e341', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x562e06e2ac0a5a912e1a2ff3650ffe8c76bd90006363d0d0d1c27ccfba354d698d021bd377d89f261ee9f248615bd8e99e32fb2f72acb94fd037097c79f3582e38', 16),
                    gmp_init('0xd225d53885dde3045cf10fc0e132a6e92368698ee6cb72bec26a8e756e4aa7466749889f71ac4b7cce7b26cfe7f3d02f886071df7f1ce5765932d5f87321ac73f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ecd6e8bf65535b1fb212c2960a82059ec86921a03c5362a6f6f8c280e85f7a6586ba2949dcf083d432156e7b7410ca8f180e1e5b92166a7fc6261f11a490fcb56', 16),
                    gmp_init('0xbb017a9763b8c7c29900c9e36a7c1ae8a1addcebb8240f68441a2fd89697f3d7d055ae8ab4a441ea5e4f2e882b1d3cf2f73891ee50bb251008de0debf94fa231d9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x15e626bcad13b7e7fe6eaacc101976890066551487d681f042888ed7fc1e1a9f78256fe9ec99cac0076dd8152c9ee401323387b5c569aace5661e2df23635210df1', 16),
                    gmp_init('0x632bcd7975c492d329021f708ae1665d06ccecf4e0800fb6d91f40cc1403e4694b38ee4df41ba0511bfc998cf89f3d947cadda7c9e3636a1c2e1b3574a7acb23ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a8625ed302d6e43dcfcd8a4fbff22df779254695bb560c0f6950affbb5b83d767573a4b367da8bba595b64338a430a77404264d4a20b8ff3f2fb204ffc6ac25bf', 16),
                    gmp_init('0xe876af1bd6563a87e7461b848fd38e3b492b21d42a7a94d7e1b17c4be898a1aa82f7067a1069a78479af48aeed051d94780612e17392c7ba4fed8010f61cac9547', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f561695f007812cb04cce7e0801dd0f976bd2ccc2b7362adad9ff12021bbbc573b67945a0a9a1c11a009f85d7b46505f395eab6d82d964b17c7ddd089ae0f18f7', 16),
                    gmp_init('0x1725cf163938bebac88887db11718026771b337c069ceea5a67bc3d327ca915d9ff4134ce42522a4cf3a41a906fc74fcc406af16d30500d446ba077fda2f3215e8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17425e562459a7549262a07fcbe2dee30e11dae2e732601b686d3c3f84f43f91e62d12be047169994bffe64565db34a8c5508205f9bf4f4cf755a4ab9c18d71ef32', 16),
                    gmp_init('0x1036a787fc31acbcda4f76898ac460a4c5e41efe4f001ca803d27166c68e9ebef5e1682b04d98c7ed019a36bac390039106a1f4e6b0e321170d288455f32ce4d340', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16adc536f282fa127e7e030daeb3fab73e40d3aa61c78e1c6b38bee0599c3025cad51fcca0b36d128ccd266d61d5dedca85b3329ba5005885e75f68a1ac6978f0db', 16),
                    gmp_init('0x1b4438ad02162ce2ec0d1bf7aeb740e330f26784958d3b85b449b758008252f28f559e41e2ac99b1275a16f16f85a8346350d6ec627741bd062803482fc4549f784', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x122d3ad18041925037ccf2d8dd5731ab1e1980a851e851a0675c466c261fe4e83e7f277bb5db598bb409afd2f9ed63cdfdf8437feb79eb1c84b7f5335323e2dc0a7', 16),
                    gmp_init('0x158b4f34986f18706b18093f327ad4d1bc828a5be6cb1ea2eb3bcbefb9f57face6d303bf40463d1a56491d105eb960f1b39426ee8ff09f80de558589cca50637c5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e8da847d1a2ccd0eb9e38c06786a2adcce0e0e15b0ebef7690086135dadfeb8210ca1acb181e92abebc35d66e5c7b12cb1d28780808974650687bbdfd968b2d8f', 16),
                    gmp_init('0xf3aca25c4dc152008c8fe94c968d2345b3690cdf9e98e98452e2e86fe8bc78c67d8c3510e7315dca1f71e668c1f6c3d6d77338419580a5d232f195153407f500c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13cf3e9f9539cd08a3ed76953aea1c8873e2236c40dd7c7eec286914896ac039548259b748bf9e22704d4793142866e3436fdfd21688d7ba967dcaed4e0eb86608e', 16),
                    gmp_init('0x103566d7cb522e5f10a8c19973bd007f3643ea91a1d3e0781e33706c38749f487439cd60fbf7fc08e6da2abfb2acf0ad848cb8b6a753478f1c42d653796535c50c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ad5732b6b9a2108bd3e33df99ebcab74350ea76a39dc1bb50d16b0c86f62585726de32a619eeffc0d41b183079bc2071d8f2841d74d132953b3bc60520009bcb3', 16),
                    gmp_init('0x19af69634e069f09e52c66e24efd6809bdc0aff97f08de7170cb4fc5c69df72f0088f1a0ae4e5a76f6269f4c82235f8a8f96f6a54e5be97cb6da81c904f0c863d23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b5a21179ed7c8d2e66b9d4e64661cfbdab88a125e7649501038c8d9d2a6d0bd3dcc007c3511a349eb28066631386a7bd93ff2bc766af312b6f0e73575012ca66b5', 16),
                    gmp_init('0xa99a09457ee43cc2defddecd64a621d280b402771a886ea9bde5baa790b6cd78b2ecd201e9ce332f257578fce6f134a4dfcf06452a0aaeb4de9540c959f25071d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eb4d321f5077c72e22832be35ec4e2982833ab1aec3826f0397e431f2c65b5cb442992f1de29f6e41a9259436de1c8334f68072157dc5e0162a28a131bfdc59ee', 16),
                    gmp_init('0x16eb09d150538697b0e9942a3cfc3d3a4f6dbfcfca68c178781582afddfe82deb0a576ac520f772a965876378fe5d66ac9657809e772cda00f5fee0a81c35fad0e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x170f6784d62c8bd1eadcfab195da5e238670d581a28cad497334671faf3d2d92ac4481fb2fce3aa1e70e4028c4a7d53a624efc95341172c6ce0ff04036328faa051', 16),
                    gmp_init('0x1f6a29a83971e795369e8fe5417a5db355e99b04584fca2cb0407b92ce38cfcf82f337d36ad8b9d55875748fb2fe24a2182baf16d6d47d613b72ba73d671694ffae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7361545a1b7eb6f4ef0ac9994cd632f848e36659cdb48a62c6e806c66da6ea2ed600c81da9a9a67752b302b4a36bc491d4cfcd5229f975caa0f327ce243e6b433f', 16),
                    gmp_init('0xb12a014407a041eb75d5760047458429a715c0243d244930d5a7ab014661bf991abdb71bfbc8d574bf41e098cf88944ad6a304cf86303987f5edaf476c978961f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e279fed63a51dc4793ed19a1ee69bae1bc70420c94c314d32da75cda71519ee2e8f5ee037fcd8551ec1c79bed4f1f29f7747099bebeb77736e1894c786429c5e5', 16),
                    gmp_init('0x3ce1b81b10dfa847afb104de2e82e1a2112722337c019c7e19e94b590b5cd7ee131eeb68ac622bd831ca0bfcdc0cfcb88bc347db02068b6483a973c255b4fe6dcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a6a2ea1512a9debf8c5a6c6ba93cbe7785cdc2650ea32adee94e5710bd36e14d0fe0e7fc778faf2bebef11f1dba0193f954ce09707ec201b42ed2e611f357c5f82', 16),
                    gmp_init('0x144b93ac4503534a87693ea1dac6db52622717a241814f6483a3c0f9214ac28e60f8fdd604234ca55d9ae725c6b4d04bfb2a977fb58338354151867b652298ca459', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1aca1f2fb59c7c21ea894f7c5708fc8357a37883da84a8c86da7fbce1f23b909ce5a88ad2e45c57af63281ad6a5c9e8bf695af762f55bb103a8674e392f0261ada4', 16),
                    gmp_init('0x1a09514c960629a5ff9f79606cc8653ce49177871582a7a7b082fea10874ffd6a0abb0f27e7cd862b128fb70b03e2b9c131f71d84be6062fa3930c79e7b1cba57c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe47a221cb200af7f4e5b81ea91eb042c2d0e4e513d083c37765fb00e76081f7230e1f5f92a691180e2e4e83c0d3a143f8e467328664123d0bc1fb30b26534de721', 16),
                    gmp_init('0x10bd0111a57549d5fa9c233afee4800a8fb704e75d0b98fc92c6f7e3e3ee802ffc8186952a541eb1f2f01c295b9f986ad9f8545adada2c68d127bfd3f9131e75c9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94d56bf8228b95fddfac58d6f1d3aa02df11e5520e2556c5a200e80b35ab50c2cba36f6c4a8649c9d5a3a372a662216556b576c6ca60b1447c238d0f45e5375e53', 16),
                    gmp_init('0x14b50b38345cee91ed9da0244e8968c2eb6be978e8aecab7ddaf266346cdac73d4c07ec621e1eb680584f02b17fb0acdc9535eee6975ef6a6bad172331a2a513cc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc83bf6dc1b435034fcf7fda81edcf3b746a4c09186bfebacff947a8bdc722fc703d7ec42894d5ece84cd4bd4c229a7c0d264e1c614db3855d801188022f8816103', 16),
                    gmp_init('0x1bae371a48e02204ab2702e8192259d6745c606862ead1f5f7022f767c50a27865c82c5e12c5cd581d5abcf8fc912b3c2bd600347ccfa14a68319fc666878b4418', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cdcb1dfc411ce4198e5723339d2226ec11e330708aeb0467dac91d292e6b8bbdc7f82b4e2e6fefe9b6b82b1fecafa5d8a02b012d3585515622af67b2b1d6f6e88', 16),
                    gmp_init('0xc1414a32c01b69ef659ab2badcf9fe3f2ac476679e34bcb90b78636279ad990758c39590032f3e7badbb7f6b234d9052cedeadb9343e55add64c55853aa74e39fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a67f22cf6adef683bae58f3c47b6794229dfe57fff51b3a6fd6807f0b5bf80fbdc7a359e11bd48c221481cfc650714f2ec7199960246edb75a114453e727f2f67e', 16),
                    gmp_init('0x8beef8eb4ebf4ce6111c2019c9cfe886b666437b2287cc361d65f990b840be62e8d60b730715b2507eeedd6009e0d386a5057c3a7b1e075db551bbae28c39f9af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14b84cada1a60b6778ef38636a040b6270d5bcc7e5d9e5665b29c804025e8ce4aee15bee2ddc54a182444d41dfbc9fb427f3c1c8bdb69ff8b37422833d5e2cce69e', 16),
                    gmp_init('0x12ef6f821d7d1e42d9b6bacd3ad187bbdddfdd934ed56872b5c2e9613dffb81c20fc60d562888c55430c0f36e6b2562c900e4bc1e916c36819728b4411b9b47ccbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c3db52cbfbdcf7da2a0d643df05e1bf66d58ca541e2a800b9d98680509485c5fbee45e5edb5007bf9000ca03681fdaea7861dbef21e66898715581925de0d59fd', 16),
                    gmp_init('0x15dade16418185ab722492503d60cc6abdbd024363e1d04ff18a7873cd2c73e39d42e8eb645d22ccc692bdff118fc19982a33754c60fd35138c0a1db94387af7109', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x178b83c8b3e25f2cbba644b40bfd92ff3417ea1b2ca8560a630403fa93cd0a8565a3795ab5851c77dffec7c11468050c592bb1abff22bb334b69c427efd472a1c76', 16),
                    gmp_init('0x1b125e1f0a1995c0111561b16a93433e78cb05f3b1d245df6e6b0b7dd7bb334041b3849de53bd2def817d04573304f187a40c8aab17077d71cce46c901a355d1a67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b9ef9b311f081191408949223a91d8cf72c2e52376c85a59c2aeac69beaee6608c2c19e31aebf4ac9c3fedca6dc823e29092d781e5fcdc7d494dcb7602d3724f7', 16),
                    gmp_init('0x456297f7cdcffe238eaee9ae018ab8534b5761de36532a8b13e1c9849c7685856cd9d846800763d7b6614bde569d2ef9b9482bc9fd3b427aacbc09e4ad786d0a50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed1c31bdc54c3460f6e890d4e8f989647af663a8d2ea1de01a86a1f3be19d74cd10914b68cc532810f8e79f8ba0bf66ea7d61a6c33687273dc354d7d39ff3579ce', 16),
                    gmp_init('0x995406f57a544704b3829ae2daa98c91251e4ad7b17d237ad6bf19a5ab05790e30a1ebb5b9a5655d5d3a28a202b0b0b6ed10f0830687586519c48f0b654d05c7c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99c6ade9b6912fc59afa1c8fa122b8606cab2b9ae6917101b66ad16816771adb9a7cfec62980e719e577a155e23a4c70c4744e603fb1d8ef856af20098edcc581f', 16),
                    gmp_init('0x8a38c984cb78c2c637a959a86b0dbbc81c7070302afcc877bd379dab5022df76d84cf82e79e7ca69188af901af76669dddf7ccacc0937825ee5842a39a8bbc4442', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad1b66890a8bb37875fb9db0d67d84e525cac11cada26b33f21e796ce5ff9530059af18043509cb3ca78d1ca1933a6eea27b5dc16001e4f0b6e05ad50282808e09', 16),
                    gmp_init('0x1f98c390dba914dc624adb4195861c19d2340a2c54bb065e75afafd8948c5de97e0ed2542214bc7ae3b56371f7cf42aee60af21a0bd16d78587bdca42375d780ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17943cf907ee9416bdad3a2d1371ddd840491f3292361c8c4935d5c959dbcde79902af0bd867d62b094ed03423d6e12c1ef7a4d661b5885cfc8e8077e42ed76067a', 16),
                    gmp_init('0x3b44b16d28b114c958e32e53c3ba02b960b13926bdcc1fc913e2024f8a65f1e95248584461499d981e0eabdf60f0ec716826abefd97b3c1b2cadd9d450f88ab3d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dce4822e802531be3048843ae51e8c89ee25ebe20f39d2d763556ac15432cf4a22d2c7e68b0e5b1199c15a1fc86e54afe49b1d2c3e9856974e769d8f767a1352d', 16),
                    gmp_init('0x252ff7bccda2831727f12c9f16c66123f8d7457e3e3dead6f24884419d4d1089c032b9fcc2a4511d0ad4f2215be33b7f1f7eb5fe67eb717c004992a988c947b6d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13333cd68dc8a48941293369d84b08760443cbd076660a81ea57be665b6f0996ac46bf3dac6169efeb314de3b6e7ae7ad075307ba37f271d54558e8ca2cea2e4075', 16),
                    gmp_init('0x3ecf2ac286c0ab0ab05fe76ac9050828ad8873d0bbc6e3b099fbbe023c3a028772c1e20a6b2697a600d59e92904d2b7d5c3c30f445808db8c144912d16dca5b802', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a52b1befc5fecd2e54ed0cc1fea02d058ed791f738a859b7be1b83692d3877184074d28f51ed0be6ef5def4f28ebc87b3485e6f65cf31e63d15fc885130076c379', 16),
                    gmp_init('0x1e76bb17cc026ee48a6b37d17000497e0f5d46215b24fec28093d08b4f2743f8e65b6d23959417331b48dc688bcc799aae438195d612933591363864b8948cca591', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36c565b327a00b1e13802a7cc921d4394a92a83fcd2393cd71da53dfa8c34b6a3e590a90148548a60b49aa8a6ceeaf58fd536f9fe3a933ad7b38f34463a1e93e26', 16),
                    gmp_init('0x1497d64fe683b7fc6565a15a831ab1e23514f0b09ed6f20b170dae468e17f45f2a29b27a18bb2d9f71974b165a8af4ab2ea17cb85eb7de2cd53155db7828143ecfe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bdb468350b286f88c551e0b60b0f80dbf54a5881d28b659066062b2d6babea7ac9db84a914f45a31ee6dc932bf852f5ae9dcd662c60ced87b59614f8580c55f68', 16),
                    gmp_init('0x1358dad3c361c388e750a6ed42974543616622f5869d6709295904a9a525119d939c26d80922a72a1abe619256657f2578fe38f65a46668e10c905656106bbb805f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9858a6d9d4dd97bc4f4beb557ce959a1ff32d7426a87d975d41e7c2fcf8f37f58321e2f08d9477c8e9ab3cd5ea9b516657a0a28975885e55e457db9fde4da7574', 16),
                    gmp_init('0x1331cfffb33fc0bca7db315b2d312ed95388c05ed23c9ece8d163e54af67b47c2113e39aa166e6cd71e32951764aa08b49c112b7d6336e2fac55f10563ce8c2f351', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1de6fd48fb37652ab6d14911ef55945db5e9ff0e1fa962cdfa1ab18f36ae0be9869d24c988bf522e753627b27a810d1a8c46b675c1fc9028f7e8bf2fd7e6dae890d', 16),
                    gmp_init('0x1cf82c66547ec9a3758f2970b1f83d6478916bbcc713e9b4baa64e4ed26136a9cd4cf22e0fec51193092e11264024abee1102056b25b09791edf8184ce8fbb2e5eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18b637f4b56a1e9bdc79bb3d26e1a571619522ac82a48839faa3a34e753c04a98eade4097add816e9240b69955d5fd38f46d2b971373f601e3b7d1cb4e119230651', 16),
                    gmp_init('0xac4dd537b051a2cd35d28a0e83f6aed8c4e3eb3cac373a68e11ac3d44277a2b40ddc47a5d29c736939aae7e5aba19c4f4572ff3815b7f8aaf17156baa645af1d3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6998ddb153cded611d4ddde60f9752ffd2302e33b31d27e7998fa954484bd30a7d4bce55110fbe9f17dda5b7624763c7b110f27886161df55d9bf40d7110205c46', 16),
                    gmp_init('0x66c5c7d470d113b6e0e16aec58c87e6ef9969074cff859b34e9ddaaa58af0fab10376f4071edb287bd3209e7b3e28c3dfc3c6b3ffd52c627c2dd9abcbb3e817cae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b85a8c2ae27a44964190fb4dac6cb1a69c35b2a6b0875175f7172ac18c83711440791db3e95bb43d949974c5b57129fc719e8b7e6a2a9ecbb71e9df2bb54e4a4', 16),
                    gmp_init('0xfeaf1c84af005695e0d2d004233780a22c21c0db99fab5aaf64697ee1c48e5d315342543f2564d8104ddb9fb323982dd27b4ea53fbc91b7b0c0bf52a2a3ee3f76c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1deb61e57ff65e726f1ea7db297dedcc55292ae9decbb27faf9608ed9749a7ad74a49a1e3218ca81d3a35daadb9b2f821261b8570d6f910a2a2f0007020c199ebcc', 16),
                    gmp_init('0x1b5d2c21b1430d7b6648a2ee7850bc64d285c5df563771562ed45520f75912e1f45c594354756a7d61da1e51c660b5f72fb9dcfebdd75d5772c8b30b706d4b6b7e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x727e272ec4a51263e53f24a3d2f81ea7bb8df6e16bf0893cf614999f284f2cd7b15bb0ae387747997e6fad97b5e5b7d077b30a4e549a0db1f376a8e54b9b162679', 16),
                    gmp_init('0xf875d050d49dbd6eb8e1215f81940eec2c652e2d7c22bb03b56115763f99c485ef5f8bee077f2143f98a52d834dfc02ef1b96e86c6188a2baf80259f3b7d62c5f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x106ddc0e7323f92e2a51fe0c30dab8d94f2535df726e889b7be7904f9fd2a8fceb04ab963a525bae929060bd03952e5334b0e694ca269b50e21845cd18adeaefda9', 16),
                    gmp_init('0x1afbd83f66c36f23bb7e537003a3e4426a729ed522b1cb7c6ac5b9323e8b1d9733c994253bcb771fc98f7eff6a4a13a955853c01a4d301aa56dcc4c26e5404844ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57fefe9f2b69e4f9b6cb137eb249256d3c24d117e5e8206045c159d74ea9454d5a93eeda4af33c76608615568da61f7f5e82e070b5b0e733cb12b4ab41ed7f60a6', 16),
                    gmp_init('0x1fb3316eafd801b656be296e0ecc52981b64475849f830dcdce975fd22bfa3cd180f78e58c677a4e8db17d720c8c281122d6298ff43d7036956d68d066e2002f86d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71c77d724f2e481a07d26b944a9b9b5fb4f969894d47d8ce4c27f597530b81a6e5908bdeab166dd4b04dc6911b2620d5401e0819a4f8e43af732634970e7e5ee4', 16),
                    gmp_init('0x137ced50d7a89fe1dc272d7a1dc41d47e555735714a2d93e0babde8016f9a5f544ce8470c347893a641d9868f02b3fd8794afeab30d35dfc4ce99eafe7b9fefc298', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94c3173caa8955942d48817e3f4b96e4b9f56ed8ec19acae0ab3136ff0974ce68a1181bc3ef97db089f87040eb877de67fe154691ce84e4678a628642648e2b9c0', 16),
                    gmp_init('0x19e03a68fd0f543ddc7d71aacf87046341cc3739d0a5e9b7ccdc4f9b8d79c9e4769f13cc9aa3783c7221dfa9ec38575609aac084d4fef168c6147b82bfde1002024', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x62155ad4e50ac6e65eaa3e6811a11c78a5f9ea3dea9be65aa40d68a7b6bb7416407b8b1668311f5e2e9d97efc7e73749707ad12f48cce0b0419dae6d7af8ece594', 16),
                    gmp_init('0x4deb7a4980ecbade82145d06f61ecea7078f3484441f91e40faaff243819dbdad1684ffdbf85a4e8836013faf4b2081a7dc94f1262a30ed6c65936d4fefebbfad7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee2de4bfe703c0e7d4c25c87c09d4a0f44eb5423b4eed37ac26003ad11e40ec83bffa20a3320cd3b55d485d76b4844ab639e4b5b739be3b3fb600c5b055bb88603', 16),
                    gmp_init('0x1c62d2c90e1beee67b4437d3592f4d76655b8e7a34070dc1e30bf5de69f6651c1f8aede13e5b46a336f8f9bc8b6b7405ee29fc3875a24c86d4eaa9ee44d14bc1043', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f5503550ae00847a092e85885d582e0e88a51bb32e61616417ec379cd518fd432879fdc34c30ecbf43b180c19e4ff76a915d52dcd413f4ff0eaa998a0008164d4', 16),
                    gmp_init('0xaee98db68d16a6e4476a12dcc7d068f694b092ba1ccf927dc696ef11c896dbf1b7347d87b988920f8e213ca9b502075f020c8d3f93c4814d97ddf4c5cc039b003c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105f80d6e5c2d6b5969ed2e587ba2f59a1b78c0ac9216052b8b54d1150fbf567988a58f3ffe205e0f43c733ef31aa2ff650a4feb9d508fea5bb46f9436c06c9837e', 16),
                    gmp_init('0x1e8d55641098d521bd5a7a024993d4ffa1ef4bc574a003e7a86098d2fe729023bd6a008ae416e8e97945c3b90e4cf78d639d8842988dedc6a4c5029c675207ff447', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191f08f46778030b6ba970840ab372bd012e8019e481b74982f12ac8f7d7a111fe36ea0a1ca392ac9a28a81e3dc13ebb873632a1e3598c921fe8b335fa8eb78796f', 16),
                    gmp_init('0x61a9db41befedcd04aaa8a0026f0d6d405a3f97d5cef91d51064fb5a0e5adb2237ea42a852ffc5fc43b3d1402f4b44f09083a30831c4c98b48f1daff85ff6ca70b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179cc7e7d2282bda6ed27d342ed48cbe4c9522c8be8315bc3702c291216aa4b288ab6fde2a2d53b908da8d82818e0909a51ae7420e6caa8072e56f46aeea79fec2f', 16),
                    gmp_init('0x1970eff72f28bd40482f00cd1a64aec98d54fb2a94706b90869da495d9aff006875fb2563cb96c50f3f6bb0026317c8d0ab0ee9307a736b8f9528c243b826b789cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1024a33c8a0307327b7a1c14b17960a0ea2be409ea4a47395c59c4970f071889f594820299b54373909866d96d7a3d17b63a4d590d75c5452e94ade586f26762e69', 16),
                    gmp_init('0x5046f70e49b3b45d091a8168497d3647c4823c77404112a75f9bc268f6f0cf556bd9f5d6078eac240091f19a290051c927b4a1ab5bc8f7ed0ce590fe7c2b54a6c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x160fb02352b4a281f4e0f83e17117ac09ea434d28d7f523b49b97e83ef261c6f5400a419045556961cdf6c74d22e59559c1c967f6567e169c57768ed0f6f74fb22c', 16),
                    gmp_init('0x1482e20348e54be5f5931a2c34e13249fa7837b65b088a85d15b68edc5e8c8449bdc1d18b79fd8f841dabf814bbde68d2022aa75f54d401794d78577044666031b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x152c11dc57771951a0c6b2fab448f0944e2e081d949174c3750edf962a42ed6053cd443276da0306a1a59c8132518c89e210381da7a66ae79b2cd68f14947f5fea0', 16),
                    gmp_init('0x1525bfcb1ce27f13ffc8029e0a95f412ff3babc982cbdde6d0fbf9fe386754857375e5f4a479405c043eaadfd3c7a48fa494be6ebdc0de01fe118241773802e1a49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c814948d232a30aeff7a0fab4f25150ef1055c638784aa0eee68fbf40bca28a3532ad2c32ee9d8b63ccc389f2e12a7b874234def649ae646a13f80306dc0dc4d2', 16),
                    gmp_init('0x18b503027f5f6742cd462f1d1d25c86c8c402b0a5064e8e434222d837cd1a0a740272187440b4bbe859083d2dbd8b46ef6f6fe1fff52ff6e053b84b602c6d0a8a83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c5bfa6129c1e942370867e18bb7227bc06449c49acbf61e7c0eec960b5e2910f69599605eb4d1152a645e0f42009ac81d0d79a26cf5fa3b64a07e552ea093a81e5', 16),
                    gmp_init('0x21144c6b142c613a672454c35460ec122ee12c67ca130fe388f35134ff20d8f515a684e89e7b8c9e0c29ed0c626eaa883505e6051d4893015bda6a51d1748353e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ef9eefdd7f4923aba2d1b54ef141f4c460f7c3c59159dd9eba629e5f6790de4a31aea28b796b5cc002030b26e600192408ebaca6836171fac13df75a0096188f7', 16),
                    gmp_init('0x102e68f5ecd731f119a63c4aac6d4ddf9c021f2238ca3490f2875af2d79c4d53c34f0f869462f785ec7013b931c52b0862f7c1053dedf8acd48f46dbb4e174e0148', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17387d78b16b104b33823a1a86baa42c9848ea865c9f14c50f2489df3ae74078260a570d70cc171f35521c498659bd1ef489e2ea85427a91d1e011d351ad93c77da', 16),
                    gmp_init('0xad0290f60cd7d0f84c156190d5384795b99c8c7c949ed4e9113d2a8a56063682a176bd498675fc4690f1a4eab312423d0089e6092549b92139504aa27ad541016d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c884ef80ae23b50739208c1197f497e040937468898a9f80cbe97d08f3d6f46d5cbaecb8926be596e4c4d6ef2293976c5b7f19ed968ed287b55b1bd3095681d846', 16),
                    gmp_init('0x14a6bb0f6f169913c090e765b5e9066ec18e44f9bae10ed512784546d7bff343d656501c448638d314fec97ee495ba3df2e6fc5319b827f43beae7edc60210a774b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7e276190dafe0eae0706c5c88074386c50a42c0a1a1644bb1f0c11b7cac661a50344950b55982d8f0ad44ca58e861b88a48573500b75b65e3192d2a436d526dd9', 16),
                    gmp_init('0x100ba5cb675b5c3d0e0c1444e09e28a7681837da7123aa2db697f4b01830c33e87e4697d9cd6b192c6c1b4d47713dea66609acdb18a8a3ba394a6c2ef02ce4f4efb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1269954d9d01f2fe4ff4afe90c10d6d5d50bf727a3da83a1154174689f7105a9bf0faa34c0a49adeb2089dd66358b14a62e9adf4e086890616d1d40359e91609a61', 16),
                    gmp_init('0x1bdbe9edffaf5e65a3aaa2a1b5014d7c98ed86047aff338db580d5256efabc195787cd9f911cef7c4416f5d2cd40237c9bda61a555783078809027df2555d2ac4b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34dfc0c033d0ad9b0cf153ae0a4589a24620fd87a59014edf5c9462e6b6b2c160172b9d2770e83b62949f0cee8309e568cefaf0979c99e0960fd4ac9a343d7f5d4', 16),
                    gmp_init('0x12d6372bb04f64081948c25ead699c6cceaae86870521911e42351d31d09bd311145b470fd4582fc6f28b4f7381e7b44c51de9d0bf08e491e8bea4cfb1187abe460', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a1cb16125d343324a53b03b69e0cab65732c503647c78db5b2b315b9d4d930a40729f4f50c03e31c3a8b8b52c6d3b41cc65cd1ed8841945b5f76d94ea2648a187', 16),
                    gmp_init('0x2d9897853a31a337dfeeed4dcc89edbbe6ad36012751e42a6b1c66d4684a6cdae9ed34cf1580464da304904e6ae6bb04921e13a15066281e50d0cc220cbba148c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e9cef5e5d6dcd99a7f1f117e6b5633716cfd87c28a5825e5654ad7dbd9d035a5053b06a6c914e3dda792ba9b369da8c48eb36af506b0e3c0209f89743c7de96ad8', 16),
                    gmp_init('0x18b83571fc2d9ba878dbe05a703946ff0766b09ab9b5bafb4fcf21d2c0fecbf8f89119f2e5b3b42940f032353e857c3815ba25c337132c54cc839ba6957fed2cec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe32961e64a49838da04ef830c287c76977810822846f4b48fb8bc2ce0890cdbd66ac60d814ed06bf215d1a317721bc870f48d1de82611619df62c03a397de0e00', 16),
                    gmp_init('0x120621ef049513f74f4a4a58e25bfd433f12e945f5855edc412ef3a4ba402683ffbcefdd29f981fa6c1e3013cfcccf9a8f268053374b2b1fd0597cd5e96d8551d19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x798d9f7b524160ab0297ffc63f7f084d25e78c36baa418ff4aaecee4237b5e91a739b3d9cd38141aa4faf91c0fcc11fb66601a0218e2fde79b9e1fadfb16822e74', 16),
                    gmp_init('0x125140a8383d27b4ffdce4f2dd602496d3d366d49030189b8346559cd67a1ff287d62af7b73b7c21ef1576f7498cf894432ca164baf7bb4b5634460a50327772a7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c36f7770447b6ee89b7bdaec4bf5122a8c14bbfc9f840e2cc4f20eebe5c54e53f65342a6503c638d1798f9e628d0b4dffb70042545f9a991216a826340847c82e', 16),
                    gmp_init('0x160cc37b64e8fbf4a9f62ce77826b1fe05769d91f5999bc82570b31a6b7f197ab702b0d1441f05c5661fa8318c8ffc61cedec912e63a43570061a055b39452878a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb4231ef4ec3271dfc753f974ac9bd577b4b47c892eea079b58e14f73d38ad9ffe1fe4f4bdcc1f4322594400907e5d5d659914d5863827df7973c9ca8c32bf47db', 16),
                    gmp_init('0x8444de13badd5ca97dad8a1ef677441850dc1730e4c7dcb49884df6cc145aa180e90a821ca8c892f6d38496396b934706b1b24d5c97355e9d871424ac14bcaefd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e40a7eccdc3a72c66f7458d464cd8d096f88496f3e3ea941b19cf167328c71d7ad5a9b6123d548a1aea4d914d06cd5f800f68b9af3860e485fa51638c3342c8cf', 16),
                    gmp_init('0x13cf6144dd4598746732a930c3a68e9e8753c2f581a1d1b46a0723b0a50c13a605358c0a84449bf2eed0c2437f2b2bc67650e89bb59ae8610fe017e43b0f067b7eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e19707d68e5ebead757e935c0222d29c5cb5d6568d61f0a9df4dc94f8c54fd3c2d379c77c98d951672c8e71896128092c114cd1394d26e7e7501c908869c2c724', 16),
                    gmp_init('0x26bca6ee115912179019b6dace885fe0ef450622cc0dd624bcfe64b185e29c1ab45e2ee6fc7a3cfa2d94accaf17b93a0df3a11092f9e7fbd890ca3d650df704c4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1120674936fcf331bb5167a448cf55bedace8163eed27bb75e8ddec1e04fd9db302f05419ff19500a0dd02a219cfabb2bc79668544884e9a9fac3561d8aba77ae3d', 16),
                    gmp_init('0xbb84d22c1a8105c1614143d97f96ad240cb1b88fe09dd066fa5435cabfabbb4e9a1a677d3e25d490f33d08b2be6495b1ded10aba566bc230bc6fdd6a8f05915d9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x131a2940274a1068079b4e6d426fe637c9e9f31cb93c6ea8f39ed05f8e2ab56ec07c156a390336a683730d743c79fc8812cc4ec2d0e45e6423150c7c1f5570b56de', 16),
                    gmp_init('0x15a1a31dc8d2569c1f03de2803eea35e3925af43676371babcc4926a680d4d8b337316c567a8c25f61654d8e21335eff2d86a732029e7aa66e1e90e065d0de0a523', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bfe5797d8772b53b385f8991d4d0cdeba1123fbde28ef21ff6ba525640cf52c0e48fd498a9b83fce149ca0257d89fe85bcc2a89c9166bb8fde37816de9b725c0b', 16),
                    gmp_init('0x170af4e8d575d6e5d84772611564802f1c5251ac714e76daec29fcd2c9c75cc99b6e9a482386f8935bb69ce5c11dfb203b25321b885e2dcd4843fdf5c44dd6b4d3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x744418ddc33c921bd037f686a5fc46501332da477959194a90ffc0b9cecf5112f7f511104bf8e0b2a566bd74dadc7c93a317a87451dc30034f7fc39bb869546059', 16),
                    gmp_init('0x7ceeac3f724fc63a283a3bb584a7da0587bf5c66a0dd1e6fd2d2f96beca087029b39ffb99931b565cf63575d9e03f81752924e88461d0c45a860e891417cca9624', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1faaee419b5ae3c475afd346ecbfc158650cad1cd04a4bbda56e57889af120f76fa74f50aedf516ed28605c3d6c1493be3c617f37aae6cd02bdc06eb52d95408d0a', 16),
                    gmp_init('0x1eaed7828e6032db72750f6e46723401680b303fdc69fa107f838742418192bfb7ec31b6ae005ce398276714c0a0e1dfcd789baeaa36650124453ab6494eba5c579', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x189063afa3cbb8d6c67bb74f6a88f1bd64fb8665fbfce9738dd524440fb0c4fe03d75540d94d231a6b0cfa0a757d8fafb1c0b41f6118d50bdc62a7e8ac175804da9', 16),
                    gmp_init('0x1acee136a2b910f4ab2af23a7f139b3ed849c7929c6b318e74775d51a03c456e1c7e51182c0f8455b59de890acb56bf5d23dbafc55c17c2597b259b9da4a864385f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1341274ea409bbecdf173b115dc77693d9f1721155e418e415a6c8e152a31fe6bff8d140cae9690fa0578f7434a453b8906cad975b354d72c656e1b7d0b35e16743', 16),
                    gmp_init('0x12ba4aab2907ff6cfef6126ed3581ec227d819082883743f2a4e489a644832801850bd949bfce4dfd531e20c5c571ebe5d61e60a291bcda146a5953c5fef3354b80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4305945b934f260709bfad4cccddcb08ab5abb516cc2b13688272dfa3362036bcf9bf92efc3cfad9615109e098bc00fc8e2a29d680ce7bae335d8c23c4ef873f3e', 16),
                    gmp_init('0x173b9f302686550871444fb054b1a7f57130f010d4ae896b58b7002bd70429cd6c612e1b68790f7e972f54f710ba3b887a25f8e248a6c6fe1b167fe093b08a5f87f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5639b79f1c3bf7b4668c13bed5602ed9298c2de2ea682b3053d733bb4459da20d15992eb4ca553cbd33d8e6c3064cc8874ee5c7a8dff5fbcad414309fa567339c', 16),
                    gmp_init('0x1961baeb18063a5538f44845e16f888e761991313330c14980b320db20df2dabbb99a5d02e2f1b97f949d07927a9f5a6be0a8f2b4e1b05a27be93de5e06289407e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac2550bc946f1aadab81ff0f46debbbc9c6cbfce0ed3d4f7ac3fe4f4d4dbaf8ad4980b046acb15d14ddf7bb55cd512246efa2c2b942c1aa285f41d38d49510d278', 16),
                    gmp_init('0x13ab8b801d35462c80510b3783a5be49ec61f39b461cde3d2820aaa321e0151c7d3ff3689c4896219fbb433b8ed37790af278dd9fb3c1dd88682cc181037488849f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4762c8a561acdd98c57fb43e8bd61a6bd69facdd088588d18d57b6a954d997d9bcff4f8d03ebc991ab8ff28519b10d500cd41c63489b9f05bd46ec5a842553a1af', 16),
                    gmp_init('0x10feed38b2d7d25b91e031e745961afa5ff13fdcd5b2ee84682f1a1d2ca288b8e8785530601a5f058adee6d0874999f3e7ef9270c1e8b0bde067cf6f1e152c911aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82c790bec75d608c483e202ec25d708240c6207e3e53c6c99efe346cf494dc4570c29299ee18420b0843f46ae2b935189b5308c32ca55beb39976b0eb751d8c679', 16),
                    gmp_init('0xd4a57f444f7f80ac002f47dab7ba49d06d956da50c84add69c959bf843039aefcbd079042d3daa7ec7d03a60972d325dca7b4f22136c090bc26f30f944db07b8ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3503a9f6f48615d783ddaf460496eb034430840ca982772f1a60a0c51b95f9d2bbc3de691cef54c597431a0ae12795ea6a1ff40e1678067dfc55417ffa525abf32', 16),
                    gmp_init('0x119f0f3fdde1f26e0db501648595684a105e2bd81f71937371f8785a002c80eb5b93eddd388fee306a70c4831162a673bb2bb866bc9de9dccde74598cb233edcfa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x534f554e6e8aedcd0240b7fe005b57fac7ac209e88cbe53c169241ba5277dcdcb52631f2f2b68044d44fbcb840a4d28fdd94a261004e61e48e70476444ed9ff0cc', 16),
                    gmp_init('0x9d713c17be28c50c66b2e819603fe6504fde76d87817e56c7156471d16215be73910bb0209e810fd9f9386a1f76cae425fcace916ca6eaaf50f188f96baca8433e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a6ae07264659f72fb6f4a3849a457622339eb335d907afefb138699bcc136358a824de4e0dfbd4ac0ad5cce80c39cbdfc03a2e654c127794af27a28db74b5096c', 16),
                    gmp_init('0x1bdddd5b6a9cfb653734df64c67fc91a432f09ede8bbec8c86a7f8f8d030cfbdeffbd0c6d2e67de04c12794e72dfceda0d817a85b8deeda35e443de6ff7cc227c74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x157f9f95028f34031ca7b68cb30aacd57dfad75e46f80036c344265dd167849c2723f6a26ab7ba7d3951bb29f7111cb9ad2df3396739cdc5700b34c3b27fe8df000', 16),
                    gmp_init('0x12ad32c0eac15e4e8f1292666a99981e9987c8eeffa88105d3eea0293a22d916544d75feb1a5207bc4f6fd004776c091584d2a8c67f390cd0352483a208a535ba39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e6404d1c2d15cd0e7f5fda3b3f65b1db6d193dc11ef0fe06a09d3c8f3ef596c68484fbde61629d66ecc762ab1a4b5d0f0e66b7a8e92032f3b81d1dfb3cbcef559c', 16),
                    gmp_init('0x120dff77b5cee8d89afdbc6069023d706d02ad05b98237c535015125250140a5c8aa407c3dc05681de34a7e9015f40ecb74d52d6d42f1f1506c35adfe360bea4d09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e4539c83831a12ff2d1a6ad7e4eb7cf5108fc163264faac5552ad93ffe0564aa24c0280fe51c36aede6c41946e11bf60fcc753f944733c58c06d2f3e9add64b652', 16),
                    gmp_init('0xdad3bd821798d5f264d6f1d69edc2faa6665eb00a34827d95a051c13345fafb702060a3a79b8a1284e6c34460da6c0634d7062d0c039ba170102a35b2fa63bfefe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd84737f5bfbbd1abb3668c7e46c37728c65a468e004612d855cbdcf5eb377b064007b46e6f181f0ffe787516da7a45e3c298a7d4836c0baa8528930785153cfab', 16),
                    gmp_init('0x19c856b2e317bb602da2a64e59a7cc4ba1ea3b21d747b5134b95264c8b5ec221d64d8df657ec50699fa2fc11201ec2a9440af35f8a095d7fba27583cb9e5b38488e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a40c10cf4f3c1c78ad8103cf128c9cfc3f257c3034011ad6a6fcb70b968bf741cf487359433a8de3313636b7434ef804ea003b96336fa5b5a4f0b54e933f75b15', 16),
                    gmp_init('0xaf39ba7c05f2a7648b418f8c8621aa60b0fd9412a975f7f1e8f7f7ce1652243e2ed1dd3121ee74a952cde65c1e09e07a8f6f1f33b145230209e595eaa875e483c8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x607152abd536b53bdb4703bb56e11ac4fe4d29d2b119c758fc4cebfcd197692826f15b0d54272622b9bb8302f303603f0995f78ca896362c64a8c68b9d76bcd267', 16),
                    gmp_init('0x157d5bf8f0083ea6a2ce3e9f24976e3f5914e576eb060d55105d9f185058d2b6016e36ca2ff47c7edb73d763e32231e8eb0d5c6c405e54a999b68ac983427bede63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc60d41a46831755afd924d7a369570fe35408a355ff6d701d1babc5a1956bead45ba9289871b5cf8579ad8714635e0c5a2a3fd379490d948f43164d3a02079397', 16),
                    gmp_init('0x5265882c90850f81e41d9c4df7856f9258ad4b6b316c35cea01ab4332cb30ddee60e8dfc66d421604ee183ff35d46e8b7b549a32be85ebc29b7ccfe1a4ec2f26c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f9a75cb7b56f972cf06f48d3e057a9cc41402478db0281eea8beaed91d648cdae3f6fbf17e78a7acbc94c47e5595788eb77b62eb2aaf5077414b97da09278f093', 16),
                    gmp_init('0x1c7e485b3f10ef96b4c29f93f613daad1155d8e7bdc75ab457e64ae23802c8ed96c2a5680ff26b4deec8a4dd7fa7daefb7ee6187df275efa9674749b84a7049117', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14a60fad5fec0498cfa33073b25d3bd99f7a24b99c558d736413921e6a2e5109b06e637b6b235233aaa62bc6ad520c6250ca3a2d0ab9b1da86627cdf0121f91a935', 16),
                    gmp_init('0x1e0d7ec205d26b269b7bf05a641f335ef51979e1fd4a0c2427977c74d8dd75af1c02cf6e741ca843432770b113c7b3cd6738270739112d3fcf0b187185263080bda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1765f3b945a5de7f156a6833ac98a63d1c7b1e26bb892bc705465288f5ba16adbb80a012c7f97117fe27f3310ce3e68cf93d89749666e3bc06f12df8924cdf52775', 16),
                    gmp_init('0x16666c1b806f3b12febdd08c66fa945e42306e372b6aa16add4fbb413be9efe0c6a871fec8b0f53bdd98ef1df5f1dabec19ef27b635958aa6f3eb8958990dd3a366', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19cf21dbab53e3c8169e7619f937874c664292a43535c0d17a2274fed3cd9a716c346ab743bb70f915ec793c92ead1898f2e02a24d1d3a22751a200e9eefc3de00d', 16),
                    gmp_init('0x170d5cfd2ed793d4da415f04d3357701dd18edfa100fa74a13ec53a3301624532d322bd9cf6d4a9191fac7886e640a77aefc8d263ffddffa70c6d19c5de10f6e0d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f31c286dd91be7739d61f7707c90e2df7bed29d6dd8178f45236174697a3e2d67890e15c3bd5a76a58f222ec0ea76b32c1c31d4a36dec3a4e627f65fd51ed20ec', 16),
                    gmp_init('0x1d37c543051a0a208b008f7eb82ae2b773bf2247b2b629af703e831781e364d03e966e91f63dc1fa1dcc231022efd1ef741cc26143e9dda23c57ea9ae7ce3d9f5a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f00de2f103b5e600c9dbb6a3d81bf798e415a6a8be4488f96ca975707bed50a41c68afe121d293b9ee43cb43277063035c447c6e084bfab40855a64b0a30239552', 16),
                    gmp_init('0x1f8b52293afde2b01db8ac51f26fbcf9d2221afacd8c7ea78b49e48f870b31dbd72e8dc87e7a0aedd41679fd21d37bfade9d590d895afdac74cc070dab445bb5352', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f8fe2ad3091c7c2fc6660197a9c5610cbfab16224bb04c171040683908032ca6b7cb4b3b7a8527c4b3da177d5c4d98be0bf977f5fc255949f7f428dac77331596', 16),
                    gmp_init('0xbd9fcb7d2d97a7417dc7f5670ee44ccacbd4200454211f8358603843318c6fec2ccddd3b72972a7ea20c6cd18f85b8d02b9901a26b6aeeb5ecc8df54981bc9c007', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7ae65b063ca469a57bbabcd82d133935ffa32c6f82e7c6507a05cc896415f44213d9bcb438e3019c0825b8006a74edfab582351a85e31f83900c31d64181f278b', 16),
                    gmp_init('0x13dfa619e7a4af69b61957fa0bce34c2924c563fc954e4d215b8b4cf2b2be39c3f09de7f89b7aa6af539cd262192d4210d12905a70571855ccf6c872de99ba01391', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x182927fba7b58e758ca3dca271b85ddd19088d1cb4c30d86216732bcb46ab04bb981043b6b3c14159d241236f2e3918ec650167369276bbf53fe86339bafd804ef7', 16),
                    gmp_init('0x1927704d7c7bfbbc6111989a692938c99df041ef627622584e8975c8aa816509efc028132b544a3ec1f8fd233c6794d425d915c93fc92b64674ca047c60f46e0e28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe07581309290a5eabdd90ed9ad55d93c71de9fe55b9a23b31fabfd28a1897913b599a9fb58dbd293e6d3a471ac9682ac6463a9c46e6ba78ba8013eb783899c832', 16),
                    gmp_init('0x440accf6dd5eb91f717b4f0985507ba23b0ff4c94c9d487ffc1107f9bb5ebb7853c5416eec0b97ffd9af9b5009f7b984bbc2c254c99f6c65c654443bb9978f36b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb0092a86b0b6fd187eb6d28c4b94725935cd2407fdcb4d1f695c76291a75014075758e60628dff5e7d677815bc1f3a574dbdad1e77cde114d1a07bb1c0ac926c8', 16),
                    gmp_init('0xc82018a9da4543f219924c1e0546a38ba89477fb71d0292d0c100e37fe05192627748ab16f531e8336cfc28c0775f8fc5777e3a3129a8cd9d7961f53cb791dec5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142b67bbdbf2e578cdcfc2f18ff40cd4d2b673d2cac0ddb3e233bae4ddc4954da341087ab025d99574c766d5e214e144f6518c95116f62a3beedca43ef744ad140d', 16),
                    gmp_init('0x1a647440675a6bc1fd0f3f142659cbcb5df38b987a8bde44aab8ba67584e8f293e24b8db952ce7f66aca79a37a6eb6b7eb24523f454fcf86eaa3352aac08191be9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e22b9deae2a4f7adf354b375423e6acbd2ac17670212aaa797272b2e03b6c0450cc26f6378ed5aaf38657a9c458b1e12fe1356b6104351a31d9d203c4598d6047', 16),
                    gmp_init('0x79c2569fe5faef9b941685220588930daee4c11c4d99f5d096a904ab8f3b6d7c995489564edbc245ecb93c24e0308d525d62f72a9f20ed411620421426b405d02b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13add68e4903da7e79c384f5eeea4f64f15000daef6891ae57e09f865b2820bdb1ce089c346684b97377d2759600148a5596dfdf102da8db63a0079a845a2fda60f', 16),
                    gmp_init('0x188681013fa905fffdf9c9305fbd3f6db896c5067d665832ca9630e01566b327dc828f92697ad74495a6f20d5185c77cb17a03028fb954721fd20b7457d514ac5db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3773a2764668251f9d7f4d2d7a2b6b445c9fb5df367ab0cd855919a777951ecc81231c716117a9a6d9a7098ca409f8d0315ea564a217c45d929d590ca72a708597', 16),
                    gmp_init('0x1afb3fd76fbfc098f1e7323ae9190eb107c451348f812351af40549f0bb0001866af6534b5da5d565f865abbe91efa69ec4747084f030af56b7bc56153e9e14113', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a4a6f5c318e5179d2a600dd27918aa5676d2435c13fd0d7d5e121e6d15228558d5a52fba9fe8d30d6de31c434370d88770a09ab497ce4128307a10be40318448e6', 16),
                    gmp_init('0x1cab1b80018c26e014885754d632e1b79e1ea6c2263fcbe0073d3153b60c3198d4dc92199821696c1eaf9f942fd83d74abd30e19389858beff4e822af012ad8d75e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb210a607ac8c575eb165e4194f3fb787a6d3d84005f6dbdbd53282114c4a6dff0522c34f2d057844cba7645c1260fc821225317b7184de5d67ef1f62ccf0f33ca', 16),
                    gmp_init('0x15b67fa9a61d5dc604006285716ecaddb29aa8fdbe82d099800972d770b8f28ecd568f201750c079647dcfa537d456ed4bbcc4ff8611602f93268c834c2832c8dee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1737c088a9a6f18f00f139d03df2c3e495b3f03fdd189351d2eb28b1d89448f5d7a3ea6a0df18a0d6877910b88bcae49eed43c56bc0ec53bc56128bc3c68df57790', 16),
                    gmp_init('0xb0e9694db22b32266acae30526a98265aef14d02bf12a26448052382d038dd070d37858c68f9cfef0bea96d5527a4fca8e1f0ce6534539225e719fc61a241d777b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e39c68f492b3536cb7d0d1c15fc6e277574d4cda914e026405fc6d212cd2b9b9c45b1b6008f36363711c416c448288b675118f9094acbd6713f3fbcff199548073', 16),
                    gmp_init('0x61c6298dd75c79abd629b3fa8ae2f6f03406c8af6cd8ed0ce9da5ebb985db1c3f3433ababab3163bd9a1bbcebea34e7517565b59dc2da77a014c27fc7c71718d8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6931028cfc0334867a42e16757f6d6beda23336fb2cc4fed90517c887b2e2444e8fa46408703f666f4941a596a8ec7dc07d0a69124442b5caf8d1a5a77de58c7c3', 16),
                    gmp_init('0x74cd9a5c6eda7dc1455f9a9454ddb24298c0204462fc1183c6b8a01f53729e6fe53ada0b48bfbdfb05049c2152c8fa6ceb32fbdf653f62074223af471928d45d76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca47c0b398bfdea4493a700e40cc31937daae624a018ade985a91bea02c02de7589844c8d9f5a325e13920a7371ab44645b1e036a7cb699185e12b714e622ed5c2', 16),
                    gmp_init('0x14aec8592e4f18669b840988791c4db25cbafe1f1b99889ea3be23e1e1fabf04630a837e675953ca2b9f8c7fdcc259dc673a1d25057b3f7ff5b04213750a9e1b74e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1a2e89dfd81e94d1c1e711346b896a19170cbb68f732e5788440c287d9d6273d6dd62cc37e6a685e0e51d3bcc1fa7fb90cc34baaed036a39593c72785ce65e46c', 16),
                    gmp_init('0x1c52a126d105e0a07251020aca40fd20f5a4c0f3fd45db6710b172b09fdda0668d9cf8a5ae39d95d373ec2d929d9cf67b2766935f9041cc59536f5dcdf46cccef65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e6fc59233f65378137e7d8aaef446bf49305382a2ebaabd8be64467346c4a13774ac01116535afdc2463412100df567b9be8e0a99c370457a80d7a535bd9f379a', 16),
                    gmp_init('0x15c68ef76cdb47a2c6868dac2f0d529cb2144ab3b8fec581787111258193610cc9128e28900ba1a2f6455f36fc479f46a65ede03223fa0d68c3a6bf62f6c86d8997', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fa3af687863cf2fa95998c84f80e48b4ef8dc91dbdb485401b285302153be8026337140dd66df235ceab0accea243c976c2735e2e72ae978fb6021eb67f323796b', 16),
                    gmp_init('0x1a22a9e761996521007398e3201b715495834a30de03225c405d45f59905e2db1653390291ab614c597593d85348bfbb9efe044c6434b2f643658a0eed23b99884b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1db3ba0fb51b46bc080e8b8f95431d66e47e9445f23f167a3ea871c04531c3aeb4afd8effbeea7922b775a974ff2600255f7a048586b37c96d21fcf2222c7504de2', 16),
                    gmp_init('0x16b6674f106c6d6a5c636695f2f7ad753169190e7bf0f6885451c66ace9fab8f8f931b55db4caadb7038428e8ea5fe155d8feee4e89a25ec3e5fa565b995ec9920d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7559049a1a19e6a85a3f92664a28b1f784b6a4c60a3e3fd96c19a54512311a0a439e8cebca1a3f419594d284f309bf2ec62d3811697440445c7164e8ff304c1bc', 16),
                    gmp_init('0xec6394c0e2a8f314b9b62437cb9cb7d2c7415251c4b30e7bc73123e4a8340d85a3dbabeda7d88aaef9f881f7887f0da2dbbba9055c1f727b22a97411ae2cdbe432', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e92ba3f9580885457133cbe0c62052cf7ebe34a012484af8ecd61da6552e4da4a1c28b605b097c6a70a7ab01cfdc194a7767d589969f5425df95537492d9c5c3b', 16),
                    gmp_init('0x299864d6852d51364f32a02c881abd23513b72f881c3a4626a6099dd313480c1de440673c1ff2d74cabbcb1b301574e1e961840f8abc3e519bcc2cc87c3f83d1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a7d9f309acf8baa44ff04939350b5ec7022132318f07d8033a5a17627d67f4cc4f620012a07feb18985858153252e2ef0d951e43f2e31dfa1cde37a92e6b34f3dd', 16),
                    gmp_init('0x50038048ae7415af20983e3ca1c0cc19bbe2c67b7b3b1a48a872ed381f29d778f502c07ab8ac0f8f9e075752d8f40b3255e9af21272262808945585a808526c18f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17ddd6933a9a638d6f5a4a9e3fb81a0cb5739fe8ad517ec9c2852b0bca6dc306c5704d795b29747ceab2cd8a43f296c458b0eeb65ec51f2ba1d18caff50efbf6b21', 16),
                    gmp_init('0xf88904f9a093ccfd37bb565fadf7a755ad70fbb8bf0b6f0503cf2175ae17ae5f6d96be97e7a67ad18fa10440a7792dec053bf7087339bd296b9893eb50d39ac021', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c258fd96154782966dbf1c55591d6602b4929b3d35d1d4c7cb7f2b567baaa8bee0cccf6730b5020d9e74773e4f858b335c9aedfa4ed89718f9c7c5d4242b72359f', 16),
                    gmp_init('0x781817e5bad0cfa2cccda58468a6d93005f75936efadb03c27008a4aa0a10e4d9ed5be204572f16afc1541a34b5808379c145af97f67c5dc33f87aa9d87095c048', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d65930c729603967adfeb77d6922e04e8a030d85a9c08b765b4e066608f1e5a1302b8d5cacf89f9f24ca064d770be227a558296d0cb12d0f3f669c4582cff741f', 16),
                    gmp_init('0x1abb97b588c35953c9b2fc0aa7a5c500937823a54e1dfa7f4403f0a6abd47bc37eb5b68b878605c5ecce573d5b4798836fdbaa81ba88b6332a970cdeaff4ff2e952', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16aaa0f82dc64e12c47cc2c78869ce824abec7dea0ce6e827904c301c4b3c2fe5687adcb047bb8175eac2f91c87d16e4f4b9a84d6145b7139e2d89de8041ba719b6', 16),
                    gmp_init('0x5796b831932211ae06bcb0a143b1aa99b6b61329e9d0c0973fb8c940b78968ac6eace5d0b634209806fda8729063029487b161c4e9d82dc4dc3c6dca8ea0b4332d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18d632b0787765dbfe1912428adb246befa89a828cc5b0029301b7630f0ec0a5f939abdf9168277e2bbed31162e5151441b667ff12d2637e7f139a64d5d2fd93ad6', 16),
                    gmp_init('0x954f51a9af6d9dc6dbeca08d0b2d159763caed56197dbbd680fcc3f910ea70a61bccdcbc009ac44290c0e12abb5d02d2fd3ad447318a12bb84ebf44ba86693bafa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ddad37ca0d371b482062a8eb9cb8a3c3421ea3bed1caa0e61809f13b4011be15349a9bb7e18386499322820a88efb71ad4c6743967c6401e96372245924ff803a', 16),
                    gmp_init('0x11dac0c56044dcf0ca9ef390898ec4ffa9d6e3982ca191b7f2ac01d4483732246dd889c952faccd907146e5f98b493390ddf0d5129c74652ea7517e7e99425737bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x139c8970e3f281437b1c6db288e40c76bbcfbe161cfb265f51899b6f882dfa4df497f32d19753b914d61ca4ec570611df8fb06079398c4d1ceef0b9ede34dd2d2d3', 16),
                    gmp_init('0xbc46e7623e5179029a210a547ecf8cd8e99f2130aab958b23d3fe48d48ba28d02a3692a8a8338904d4a0f52e646a48deae59e76809238445c69d76d4a51a18db0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1359254426ab970a87df3afd9fb557798c9f1fd2e3b2fa3b8095f7df7cd0501f0f7b88d53b7c706f2c75825b2836d0ef83372000a862dd620a9be58970d503cfe9a', 16),
                    gmp_init('0x15baec866638c84185d97876d0626881c14fa9de7ddf3d26bbeba2cb72612db61afeaa5fa385f48ada581d18bef9829431bc60b998cb0f49a8c577560bee8947e84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1020356185cf7584734fc240795801e5fa56b5d406a2e458d2d9f44ea6bf4038971504418a30e2b2960da5f50ec0c10a85767d21418af218601c988f588852cd09d', 16),
                    gmp_init('0x75a570c1c1819c3cdac917551994105039f9c3a26cea623a4ba91850575466ebd5b97083b5563f5c741ae44706bcffc6745de3afba2fbb87827a948fd177a57d4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dc99e3adbb87d24f68b5642b78b47bd0711462ce03c049d1367ca592c953b0cfe1081dabdced48623f4a61f848814f38e2f59c64fb4dcb9e90297e708e61fbdc72', 16),
                    gmp_init('0x627c43fc38829dc4cc11c32fa6554fec823e015cfce842cac577d0ec7574be91e4db7910a63380420845de7844b07adfc5c1910e8c3aa42510643879618e44f3b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb501ba0a9619de345f88a1a08150192641e5998d5206612248249a372c95fe784c8127847badd4e7a95ccdca1554edbd942cea8683ac121c93c3814b8a3acdb65', 16),
                    gmp_init('0x33989110bf3584fe3f67d91ddae90bb15cbe03cf169c08640c4b1ca3ab70cbd2397ee6077edac7d399949d92fd302c2f1fbdbf47ad4114496227bce70edabd6ecc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9853273184e34592494ad13ccfa3dd49daf9facf257c860a97cec08752db1051de4ac1d9648d8ec5a06edc878203c989941639a4746101b2677d57155881b7b9a', 16),
                    gmp_init('0x191f5ad9309083565890785d58b72ebaddc7a104900464eebec56386035884b2cb16d3d4df518418197aa60bb0ed8ccd0a53d494579bfb208a29956ad2c84311ec6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b5a234bae599d4d453b74b05fe75eb0bc4378badce425564d0edc4e6fb02b3e34f68499f37bc182b570121c821c520880af23bf92dc6f7aeca58e52d8f7a4d317', 16),
                    gmp_init('0x1599682c9ebd3f4a832de62a8fca492bb4105ff006b7c1724f339044bc61029591d5e1d62655bf3bbd6c741ef37beb6af1ec370662f6f5092333094e3c091572efb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff33cb916bbf19057b4769dc2e72f55358c0e0325ce0ee1e672ada20d3b898320adaa248af483f96f7f552fe3f3d1bab8cc292c8960fead8feb32047f1686b8e76', 16),
                    gmp_init('0x33be2fc03744d3686c78f50f595c052e0a57d873d551849daa77624c0292b4690e2da8d5eeac1c7f91f2b0f7fee1a7e139484339b3d830bbc1673b3e8a2a8023', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3901d3f3d188eee18a724358006bb4f8d37b94098d95fd48e27c7ec13b051508c9753d64d2c98d92719469cef28c2dc6f36a06f96d86c216d1bc3f4c479d702e02', 16),
                    gmp_init('0x5e05699be5f534f5fb515d51bbdcb5b37310025e4549a4f7573f7e265cd790bbf67e09836a6eef57de37c2394043d2615b7d880282f7326213764baacf1a6a057d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xeb1490fb61ad52d8a94f9d9bd7d7d2d2c60cf8d5c75c490a63335f464b78287d19dbf49444c9d74020632a1056c50960c24b863857dc5bfd2b442ebf300bcf3b88', 16),
                    gmp_init('0x18e948a50d38d8cf3d936b304e210ec0574a604379cdf4c738cf450c5ad9559a1b081bc0bcfbaee44737d624d6e55a87edb871248c89e5b69ee42aabe7434a088db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b536ae69fa7f1ffdd8a5af63cd5520b7a992295a5cea0eef454d5949f9ad0b934fbf40aab47dd43ac459e260432c5461605e894602b260a3dc6ecf2f55565eb6e', 16),
                    gmp_init('0x548128fdbe87828fad89013fce3114f728d01fed060933ca89a2b9188a07f25b60f2a35ce29802f566878d8aa048953ce8b33a39d1bb82dc6dddd868a73f0bc9f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19bfc96ae5ebc4bb2521621a6d5b6605428e2e5ff3362347736a9dac62aba7d83dc5f9a6f424fbd010696af717b21d9535d9d2b24c0f524807d005d8ea958feaf6b', 16),
                    gmp_init('0x1bb98227c5b8698ff98c3d390e30b9565ec62391df0664ab781e079fd96018c83ce8c07f237ca226599334b26fa183f779d403954492c46177f878ee5e421d079d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c51c6268951af41e96a88173a174b208cf77a37823dc4303ec5e2dd96811c7666656c64eccbd3f369b5bcdc63187f0c3420f66494807db1380f20e17f13f9fa837', 16),
                    gmp_init('0xc6a9eb7a19983fcfc1069adf5f844a417c5a50b83c3043678ed22b087a3b2689f603dd02d494c63a07a1cb4a2cc98eee0ca97a3735ce45abdb72da351465467b39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c3605a214b6dbbdafbcc276347334cdc3adddde29367b694abb69e56ec47ec05519623a3351d77f500430ba5adc46a3ef577dcc1cac34637407af0a7a0cc43fa1', 16),
                    gmp_init('0x1a53692bb42184812f2e0394b527cca9c3d44411cebf398eadee8781517ad2f0f9c4e0e41ce836b04e9b26958aa5948f69cb40840439dfd1c2eb9e26813333a23d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x144bd3495a99e60315d4714385079848b059fe564607ddcf3b953ec3d90b4b44d9b93e5d62e41078c4b3f65131865638f5afb0db238cf33e5ae4abf6de480e0c811', 16),
                    gmp_init('0x1fb9452b0d11ede88c3e42d1379579211fdf7706ca403eddc819f49ab65c399ddd3391b2125ebc6a449ed3ccb5ccc4ad55ff0b1baf0b61f101490409b61670bedef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae8128ec86196c5b7ef9c197ba1353d1d9ea8288dcdb220f6040f1bebc437c8987ee75c7107c7bcec975a4e5c0437f36aef994bf477d8bc95a96d64af49b5e849c', 16),
                    gmp_init('0x1b49a2a4f761d8c7c29e215a5e88e9fcb26eadef54dc02e5ede34f1a7119be7c986e2f432b4972580e971a2710a846039d6b061d94249dbd8b9608268bdf41cce83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15b63bd460f4cdd1b0e113d8242d36b4f4df3971b004a05f17371074c7c40b410c4138655f25ea90ed502fd64a784cc8b687769cffa3ab813ba984da95de0ea0bae', 16),
                    gmp_init('0x10a607570fde2dbb6519ff457e9b19e9649622bf2cb49eabd50a7b60597e6899fbf8bf97f30f50d775c258eccec8adf321f001943c40a3c3a7226bfaf816db9fe99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf98667f01862710c83b3b1c011c49d12e7f5902ca6d7f05281a2dda1db9fab4deb55ef3346b848586d636ec72597add67b7c1a7b2bfdc8080d8dadd3b9b1a91a30', 16),
                    gmp_init('0x2a76a2c09c34072adca325b26b8e9682cf41de8fb6a1f2a5ff5ca31f3ae9e7c0a48f505ceda3df7b437cd284418065526c728c1c984adc729d793cb015febb932b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63d4021463b488ad6287de2193c2bec7a0e163cfb4087e18fa612ca701aec98ff1218d6d25056bd4cae72832d029c2b56db1b035621b3a6b46f878768dc39ebd2d', 16),
                    gmp_init('0x1f66da71b8a218963636f2c362f681eeb77e7e5a7b6ba39760c8a9be0b60125bc6705e012671c86cefc35148b571e59f460f1ffbbca573797930edd28a4b8a8a68f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31d9662699e01262aa9ac90bfc05f8ed907606513714b46ccd7b545bcaf944922b190c361f0b0f5d2e05eccab3f4a522a0d720ddc2ed752b10208a4d40e3309dca', 16),
                    gmp_init('0xd4f7868a00bdc35e7acfa5e9e5ee06af093a0e756b15159b5634432d63aac0489bfa7cbe2f4d4149710700b1ce3f63ba6d9608ec0ac785889c2b52f35e5971b0fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa74794f0ec5f12ff0395d3152ab12989857b2f19eb43b0c30b9acae3b306c31ab5d9c9a0c8e2b01d57c6883fe52008ae5e8bbffbbfb5cd52d2eef26ae3c25300f5', 16),
                    gmp_init('0x1d966312db4d1399b20d4ba1ab2e48a868b621784f7aba990f9fc41bc29a2761ee0732ad6b3bae1a0fb573f6bb2555fba4f3b32556422a575923bdefa96ef21ba62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfcb1e542b6240ab7395f75c804c5b6d3b4d6edd515b533c7d20f5705025d05b9803514926d2163fd3bbe209299d94d7ee7c7a2bd01aec855be1bdba76e7577c4f', 16),
                    gmp_init('0x1da61416ea7730723f7ad38a634768889ca5d8a38b50d1796ca889e306307c699d415edb6aaf83654a7ad3e15121024230b128f86a385c3cc06c325da076e47c22c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe48d7c824f1bbfbeb27436d5981f6c515cc95822eca1d045e809e6abf36992abb5bd1f8e76113933cc59efd46ca8be15931478179a056130168049507015ff7901', 16),
                    gmp_init('0x7c64d908c6893fa1b5d9f7b8f98be81d5d5fed94ad4cff3b034c0885bc205fea9cbf8c71836b06d84bea9b5934fbf1bcd7830bfca50bd883d57d026a123aa9274a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e87b397406718805e60be70d641919f55d1e15cfc3efd2216a36c37468ac85517282aa07e4e05f928d5a50950996eb47d2692662f45fcc5336090af094dd5fa13', 16),
                    gmp_init('0x5eb82d04906f078dc95deade8f86223552cb5f02e2918852e320b0d2626f3549e75925a29096ad7e493c540e54f1564d790c5ec9f1b94e5442f82842b22e5de3d8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1327c6c06ef2c547c38ba754c0178d50ef52e83c6b8f06e02a6e8e3bc24b893449d1e0c8fd665c7b9f4a7872bf002ac441e23723b6da68b584c51318ac974ba879a', 16),
                    gmp_init('0x1ab8c7572fcbedaeeabbede788e4113977b28f07cf6b55723cfe1a4297da8cd1c5085c550e59ee42180c6f215251c83591e2d51aac612fd88eaabbfe4266dee6431', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1116fa03173bfe6860d3b330694e9c29c0df0550587d5d3ad9b2892d449c7cd9543750cd95b680383c6ec0532fbcf5e6f43b14241ed090a7b6f72916be74e6df03b', 16),
                    gmp_init('0x182ebd4978f97182fe6b478c05ee462c6774074f320b3c5c3b058102be5d89ba2924ba2d6cb9a3c272d72e2093bfa48732a156f9a4002f049f76d55b870ab75c854', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1734e4a24b1cad4495c4b2d3a4671ef137b03d30de55fcfb278f2b79deb9f2307babfbb7226cd5ec48b6b25daf57c9fd47b881d8c7cc2086aa932c0cf8f2b1148cc', 16),
                    gmp_init('0x577d8a2ffca2cefbf625beecea370efc6ae0d34a98ee85249bdb25d3cd867196216ab15369b741c7cc6fd1abefca6f61038a4ac3bd75c27aad363160471ecfc10c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ab0436a9bf01b5ae4df90e484852d73bb0e9ce92e469150184060f2ede99c1a33437eaec76d11ab074f6ee8026e7beaad34ce48c61b7c6cc7f70148a3a1b27f40b', 16),
                    gmp_init('0x189a8ceb3299242e43f810768ae1085ace749e52f74252bb5dff448ea0fbd0585fda430b37b965ac8018835b602122bcc3f318236b2fc39fccc3f83381640d46948', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1243967a1c506f0bdcc1058b15380aec9d82bf2af91c37379bd632bd6040b98af465187f0e761913cb4bd5cda0b83db33e706657cb887ef71e929b729504f8b28', 16),
                    gmp_init('0x1bbf17df48aa5931fd7a5d5332742d53e674695dff2320b6862e21603b0d26b66c68ea5436889b68f695814a34f20ddb2555ffa94ea46cbe44ab298442687d73c34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5096f4ef892c57a8b125acdb8c12374808a86a385740274de2b2b47a2f497add2414ef2887488f9ba10ac6397fa7c902487a81ce08e65327efa63bbec0976e030d', 16),
                    gmp_init('0x104f8095622b1bd9e0b85b05da73eaca155c0abe6d250dc68c15decd86d13992438b8ea47b6b2becda08f1db78b5bd8876b78bf5c36fbf354933a8d6bfb85199966', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7130cd5656d51bd579df9a0087012d5632ce0ae53420316ce7ab38c79dc892656653848c30c4eaf7dc33c9f7f6c10194698c7ac500a0590bc1b50fa628d00da24', 16),
                    gmp_init('0x35c0b1176ca712a8ce0d7a5242a8fe1cc9c95a638058f332f12e75a55f2247b28470a29d1080c0f67ac5151e1b2d4a375bbc330a097b991b3821a2c95078ffe5ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11d31e4fd39898b7fd03199e1c5f10104ea649c7c1abbef5c8fcf88a830cebf1156150c3141e82b945ab979fdca8eeccc270bddac80c37e79377b0373e4fd998a0a', 16),
                    gmp_init('0x163d14ab2fef68c64fa7dde830655c42fb958a0729c367f428dd036cb3135f5045ad39c21b41f4a449bfa391388b2f631b2b0cc16e1b96fef39c24063de449bcd85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73f9ca4dd99b15fbc435f15b557c3ebab6a4bd46bf85e8869201940a3f4cdca642d94ef0e0194a77af1bd3b522f24f8538dbb2843c2a51d8eb679bdf48c9bbd131', 16),
                    gmp_init('0x139ea7bbbae4a64f28ac24efeb1ae461678384aa6d14fec8836e30fdd56e80b58cd3728b80e33e64621208968c34e12c979365d712b01cc640905aafd4187b3fb49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a54a5021361155db8105c7262c897d470bd947969faee2d709824268ac177dec5cf32c83137185b2abda3d32e031de2890ee2dbd7f3a30520b41f27f175d8f1b7c', 16),
                    gmp_init('0xd5e2ab9307415c7b1f4a197bc4f8764f1e6161969f7ad25ab6105ccdf48287f3a3d104444cfdb666a05f2afd4683d272647f196496ffe559e4198f8c76fa90bc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x139de02d7057136202d25fc59dae563bd93f84d8daafa90d977d6d647dcbd75245e06dee82ee603febbceac98c2b6d81198b3af06f6a61477dd1809b1b274443123', 16),
                    gmp_init('0x17b1fd620562139abd19037f90e96f68b39d5d14dc24a48b704aebcd566fb44ceac77198bf28b151834c4422c0cc128c5c282cc084f869c65cf563a9de3e3f1c7ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa86e2656835314dfc7cbe338c2e3ac8e29d3f919ec4b724cd0806685cbee42845472d5fd2113cf29d6aa01c4d263ca874120d17eb6fc658b31e4c458a85305cebb', 16),
                    gmp_init('0x1fa87ece546be2518032764f0f33a3585d75338f8f79b0c92032be11b509495daf82512d616dc06b0774f75c9c3828f99811c477b69250908143ac3eb5e827b113b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6017d81b37f1ff01b91a1ff74ba8323fd4e0281148f4e9664fcb26d9f5e614f642a97924c914e0c42e5d19fd458ec3e7b2e86c1869cbb9adce11c68d32fc270282', 16),
                    gmp_init('0x1bab8624f5249fb63c0734dc417fdbb0c2345842f5e017444fd875902d2bc1a8c20efabafe93d96fe1ae01e29e09a9a30c0ebd73076cf6cbdf17a7aa7196d49ad5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130d88cbc10ade0529ecbcf6fe33673f55a8879d257216db9c20d8307a8b1b8b6495f8e88eab2fe01aa7db094592b25b51df0d3dc9c4fadb34f5fd30221ca693c02', 16),
                    gmp_init('0xc6a2e7e2e27cc1436ac94ba90704e8b3aec41273dc663a778b8b34a4458c8b5611b813ac6cd273376f0de4d4089e013bb1721262dd0cdbeabf977927142d5bb89d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f4990e475fede66b85e1fc2faaea61dd311cd544c9aa6a7a6d87c7c86c4b42b112180420dea4197f777c1c2dad615b37d29dabd85a017a52e53b8065e5fa285859', 16),
                    gmp_init('0x806c61f4c91da21d7871c8d0c22ca71cab5a2a4d29d529708275952d93801db0f877fcdd5acfe5c9f68c9c60a85160d3385746da2c5b2ef315157ec25667c5db8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d09387671921e11f6e32964930390531b6a315d96ed675cc09864b491dd314da50d8694963b839a520222f7f93c054408a91a48983157c22905663f565a308e123', 16),
                    gmp_init('0x15765da97328703a2a00de2bd0b9c6c5f7aa60f39988ca8e7599f812c7f1b18fa814ab1b501b290e7d0c83f642051b875e14c758b4ccf7f11420f4598e0c3477fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8850730ca1ff01f6a9882e9886e70ce5c4806c7003509ed794a519395fd5ed6b044c892ea6105a5effe0b239d40ce7c62d647089fb989edd8c05a704cc2934ed82', 16),
                    gmp_init('0x17cd02ae3d561553f86bdc8428777b2bceb47f6b9536bb770a16b10da1a67bf59cdd663f53e19b2ed76f488252cb09e525c1ab078cfd454b5090a78a16dbcc5484', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x120a5b7e51be090e6a789a6a55285dba94c979d99bec2cd9ade3b7a95d8d5148b86ea322ad8bfe99020c1b8ed8fa659075eec34093fd403d1e706ba35c1ee2f1290', 16),
                    gmp_init('0x1f174403eb19d0056bf4f781b5dfc1326fc4193e5cfd061128a05937e24bfb8e3e16eab8277ed1ad360177a92e5533addf78c98e0b55ca604c1033b73ceaf82552a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcf928ed94eda4fb5beffec6209853d1f080b6101f0aae0c2164357011d49a22145db71c7ad31cfbc29acd94ff724eb3fd7ba9673c18d4c45536da34d11edc1498', 16),
                    gmp_init('0x15f0bd4bdd076eef2897420a4edea50d639048dec907a08492d031fcbe4e9828d03e5b812ab3d94b4fcc0432c4f3b2d50c52663b3aa5110eb670031c5cce3db108e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196bfaafdcec46a4425d3c839e03cafeabf7928ed5b20054d6ecd1e697ac393f54bc7c600c5f645c923c78694add97879852acd4c45d1d77e5ee7718e9bdf3566ec', 16),
                    gmp_init('0x2257de93bfddbac3627e9c591df8d76ecfee86177f32df0dea5654cbdd50889c2a3966f9a10433583224e11983b9577c2e6996db6c70aa5e486baeeca1e1804d34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1573327540903459b120c420e2819fc5026f5a9d4c668e17240d526f78563afd3224b5e964a14edaab5f980cebc0af2078a36b5d1f10880bc8e78709a5ca92d6561', 16),
                    gmp_init('0x1dc54da03b0f1f67c7bc92a03cc229c0f16b025e87f249869965b64576b6e89abea74c0ed7012567f2eb7729af7aaf08e15e39057b13ea6565ae433226c4d6bb5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa14da417578d2984c966d593a59c841f1bc700e4e4650b81ebe778f1e1125ebaf8a2f1ec4c75bc3cd4b2ea802d742e1fcb4cd96634c965143eeb525fbb07d2778e', 16),
                    gmp_init('0xcd3edcc184e4c10d57f237b433d583ed203ab33268fdcbac8a786158d1a7b8579c8fc9352de1d5de1ff2961d2c8acbc2a6efb8f94c1c1696ae6e9ed77d57d4a16e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15105983dfa26fd26d974a3429a64595d067cb2239454040fabc2eb62e4dc28fd424e4dd4100ad06b3f8a77bef7c506a04dc95ec1ef7e63cb248ec9a4151e96a885', 16),
                    gmp_init('0x87594d39ee4dfe2d5f2ea28b7ef78b31a2e7f29c805d9fe1f93d7281e846f042100fe8db6b39d78fb1fc8eeb0bb23cd9299967485f11c5599456acb9c1291ba5b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe1deff5d59e41105f6614ae6eb05bc3414cf9220aa0317faf087bf9e82e14ad7db8bfbdd3b564700ea250d8de064e4738985a78336230b56767f5679c7c9beac4', 16),
                    gmp_init('0x16168ff6cd44e72ea368bfd7f5533c1350a3e5aa52b6aa4487f16e999e2d3fb006b669e715664b09f94dfc37d1510b7676272d5b26cbff941098b47d53a03966619', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1736986ab02b7ed8e89f8f5e1805aef36c317bd88275830bba402466d20439af230f9db1d32e6c86b87373e6b4f40c25b44df3b7da8b44af149450eccbf95b7cf7a', 16),
                    gmp_init('0xfa408521c03a8e1267f4d032c295439524752b95bdda4ab1a84fa94021a856141fc608e4c367fa6561be14d2f8e1751932824fbd0f5576ccb65c05151d51fe4224', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29f99ca1a803b5ec473a7e3ba3b9159596e3e1d4675f740f971fc2937114822df1f46d7b22c6aede9d00d61c73d3415ae87a8f0b0f5ccb978b9b7d1f3bfc0f4a8b', 16),
                    gmp_init('0x1069c4991a170bae7d83748d45e0e22856698055b32c4ef764492ae69d13e523a23a70666ecda558bdc51f2d40a306ea61e055a49f78802bd7504243bdfbb5ccd4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1482350730d0b830942606a3a5498aa47a7164e869178e5d42e8eed0e03e426684ec02768187c1e4e5f7a2aba0d6e2b1eb185d920e3bfbe83636502b92cbb5c5c05', 16),
                    gmp_init('0xa7b945866bd5a89bfa0e6a5e9d9785d24c2fb0bf1e5a58f3df016538a1ae057a938c2d1096e00217be77b7c36fac533cce7e28dadd373e0f145e1965a01d104b08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b4de668fdaaccfca3f92e1aaaf619a0059c2b32c8b26368ae2c66a7eb825a3dd775fa89a10feca61339c13279e8bf1a9eb0fd9824bbf845f0143510e9fe207454', 16),
                    gmp_init('0x11ab9b11bc50e9906da5d9815e62a173ebea2f0ece2c71b8b4ae48cb9bbc7b899dfffba0b1f6b4dae221e47198c6340644dfbd77f9cf74d70dda92801b445cfcf06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0ea5822f35164ec9332b48a444a6b058be03dc8bb2772ffa8187f4315806e0b6f878d1fc50515a43d469519bd10936c6de94f2031e30ff59955ac3726fe2a7478', 16),
                    gmp_init('0x99e03bfb13c7ec16525e14e523f71edde9f7a2094923a1c0c70f222393795537c599422e75de99481afbaeb50175437eb9c9c64cd423c701ea5c617856737160e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b315f2345e2d02a9297687a84e48f5cdc9f64cd37e764a4f62caeaaf5d6acdc7a3da442d16381bf7a25e1b62404f726832b7ca4dcabde573592528bcb0d0888a', 16),
                    gmp_init('0x14123d16e102ebd62707e0601f0f4c91376dda0dfb2e0de0ef038d087a027af0007f8d7d3ca6451608022a4efd555ee34ce61ce683cdb8cbfe44f91c00520acaebc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x50a931d7a7f9e4732b34b77cc5917508fab913b8a8fb70206336afb6eb15c34237a9888b1ea38c790fc44ca4e248acb39478733fcd7cab446a1bd8ce7b5a53c22b', 16),
                    gmp_init('0xf5243ce1dbc093cd5c1d3f5a92a68d1db683ff7d05adf7b7094fb2f85a127702a38a1ade63828cf75cb4684a8b894a6b058266630755b410a1a90a429056d21d18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x181dcfdb088e9ccbd7d84588e41b236dcf3877334fefad776d0a995a64cfc30467ff6f73585349ec6a0b3713c0060c73a7e9ccbf6ce4a8f62b08b3dc3d04aae7354', 16),
                    gmp_init('0xbeec3dafa01c60732a415012b4e2f0138f462aa9497e664bd5f4aa648f34df0623d4c3509d7a7031af110245ac5ca6f9f7e7a0df8df45ea4ff188db860fb36e7ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe01e263cab99c2381529c1f2fd40c224cc0fd404cfcd6cbaa5b2138d58a983b39cb41570ca816dea76a9aa7d55eeb66cb6010af17a5d958392f77afc9ec1f9124f', 16),
                    gmp_init('0x1754b1c1deb191fca358d957aacd5d9e3c5a767faa5ee41b919134d0c94f859fd4a1beb030be02c0478ef3261855ca5e1b97c79d3cc02038ff9371cd0937649d2ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd1cd07d05eea9da0ec0ddc6356b341cb39174bee06e7b9ee522ca05f7cd9b7f9128d4e288d4a76f0c3f3050ef1134ffd2aa0c2dc8b7fdb1321379b176e80649c8', 16),
                    gmp_init('0xfc8de9f3df9c5807b2a35ff85d392592b5bf1fe841e8453f402cbe86b991bec4bad8bfc7e58fa121cb598d466249b5cd0633ccc8ade74c741e423ec36bbbaa1df4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a15bc698c8dc428b77ca8dd6a2dfaee90d8e503a8006be63ebe6702b5819c8bba706ca7dd8baf648fa4b86387cacbdc0e1932a9536d91de5491b8719f690c9c13', 16),
                    gmp_init('0x1e2803e54d7d6272724c7d33c53b799b1ae2092780ff57d091dadc93a6e22cf062d89b8bfdddc3edda0274cd07a88dce3ff20f26b4456bda0e81fecf27e865e5e1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x448f42df2bca94a9790e9c23ba93a2d8b05c58741fe736da3d9f3e8326e69ee6d4b1dc88d258eccd6264a37425955f6a87488bdf629d9b1a2e1882193027c0b1d7', 16),
                    gmp_init('0x1b0508bc77af9410b6568ee5439b219d9c57feaec2a6c1ee12431b83b779a386002ef3ff3df09fb826abba168e4fa0552e872563298233255b70b7cd7c2c37db33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb23ff26c72ee4bc5bfc6cebfde195e68f3119056e1b6e018b79410987b8403839d26de66494c010c238c36854cc6ef43ea14f546576e89ae1edc83f7d638f4bf3', 16),
                    gmp_init('0x1fb909fa7e5092139da3156339cba0f3663fe783e6f07cb01ef568ece4d99a9d166da145fdf8d9b6aa8eba992e8bb6301bfdc6b99b83f7c3d26fe4d342cbb1a38ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x201a83fe8460e478bf2bcfcf647bf835df197528a4b76196c5698749ffa80066e2a64ca69b686c1b2ee408365366ad9de7fd654e8a64400d7840f66d1915b26e6a', 16),
                    gmp_init('0x7c357eabf9e9dc3b6baddc9096a6a6766b51900d4ade3eb61e2a24f5706daba1592b7a9a5521e3f86411b825b26414eb043ccd3dc1e5c05fcf948f3e0ac46d1075', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d4538a0c2f00213ec222e36dd836427a6a3b3c2acd6f7ae9b9e4985c7799a48ff0fbcb10c16bd41dd585fb0e28fa498ccf61c187474a253c132bbc26a6b7273a', 16),
                    gmp_init('0xbe2bf3042ee763a843b5fa8be81e71a5dfbda20a576991508984a0b409aa941ef00187c2be0e90bdad0d0d81d252e7491f444401b096a7a73c60616f1f0c9471c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74b8cb445571bd7c133984234cf2ba059bdd3f310410e7621cfc2e6859657b3bdc523e38ddde4fe26deac0e45b31404a59f114e05e531498ad3fcda9812ab0e1d3', 16),
                    gmp_init('0x14e9e3e6b932a595d993032cbc6e4370fc780df3732b4e2aa096aca33c0c8ad848cc1452607a2a8950b773691079a144bf5d2dff14a71de972c143efcff241eb056', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5005981898a9a2c34e64b59d3e907c7ac9f147eccab63e4d9ebaacc71d1c7602f6ad09e2c32befef71eb0cdeb41ce006ac6cbeb971a4d427db7af8e1f434ebf7ad', 16),
                    gmp_init('0x17cfa0c3f47f22707a7763ad6c07e8c60c68ebadaebeb3575604d49d328e15b70e994bd710c3463cf730880dde95184213fd2ae8c4f970341d0980beace7467e7c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x362416f8674f0522c66490735b2f5ac654c9beca4c521d0f23d878492e7f1ae8f03cd92d99a49c086e369392004931b82ad50ad5a49fa79aa6a8a711367034f904', 16),
                    gmp_init('0x1b2ecda27697dce61de8ca87e63db43e5363fa98d756cf835a7fd5e59200a0c8949f9a41bffdd8a05612aa3f5f458c3e7fa59fa637c7f1cd2164fa3a79c581bea68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2d803a8098dbf333e05edcdacf8a8525348ceb8d5f5f255d339107905e8578bb6301dd16a77c5862e63f6b7431eab1c79654b930488bc7b2e3151003bca85bd53', 16),
                    gmp_init('0x6de85c801416e658610224f0e8f848d39ff9b28c13bbbf0566cbd726132749d9a4a1e70bc9733a0e5c8f001571348739df0811521c7496d04223036ebb08035533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11a9188cdf3dc3430b5db33226242ccb61f4e11f3e9f2319fbb7da7691a6692c191866a252c037ffd06f26394de2973c9375a94b455230fea57504af3470dd5c74c', 16),
                    gmp_init('0x19344db7fa547571321967c7a6c149eab96b515dbdb0f2636ba587179d90d5e2660b0eb4667a4301e862cd9ebe78905af381eed5f24e7328c163868ebbf98fe7114', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd754508fa681ddb91afd8995f9c43b4fa8f79dd8a4ca51866ffe921f70b44a5e7e3f37fe8bb7bc8531afdab1b70600dfcbd8c35a3fb0ce40acda48f1c4dc90d667', 16),
                    gmp_init('0x128b36a97f0bdfce3763f8fc88c73a800d8e90758341215dacc5229ddfd8d49cb3425df19f0a496b9d9dea2bb5f069b8d34c9103eb2bfd8e94d99621e3be0acb157', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xca46bcc8731218548545d593004e1f12f4c46faf10a6c2027bf4fe6bfebf5fcfb11e7167c636f1d8c5a7b46e0ce913a1b215f58fd920c04ed5f5c1a4c690185363', 16),
                    gmp_init('0xd949f1a466340c35286ddaa06c17d0fe85e69d4894aecb6fad90e2504596872af84d8c7b8aa18b3802df847160d8532693b7e004ad90ae75567c5180716432c12b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b03cf24801041f4f43728ab35e8ad26937a6b9a3f1532eed3da787948b346d2069ae9ea08748a19f6e437a49f6501c3a88b89e0b654a496e0264782a476da18f9e', 16),
                    gmp_init('0x11e7a7f694361a08d84ebb80e34882a69ab03c7e40611764c8acc566431d87192fc1bd46ff5f26d033f2edc1c8eedd26ee4e4a3c5f9f8705ffb5e272327cbbab58e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12d65a3883b4b21aa89e138e5e8806301de767db401602a0c4898e9f61a545b7d4144495373498328bd1781240f1e0619c2d8a34e67f12f5bbf68f4a4e058b77137', 16),
                    gmp_init('0x1fc0a270986dfa23a3f988cf192af48c727998dc9bb667a30c87ae0c5019de267fe47162acbffa52c17aca222fbd6a06303424f483ffd276310647b00780423fe94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12c6019fadb273e3f5b5c1f73c570f76aec11b4696e059828cf21d464f1be40c8d918fff2c1e95d2a27a5f5225829e415b4ceb6698586c5d6bd5c9209c1c4646439', 16),
                    gmp_init('0x1aa10ec329ea13780398d4ac80f1ab42ac3ff2aca188b9f749f66401173d47330a6f9e7ab52061df2a296fc0b7a290dcf2af913524cba2986b46d1ff5913eefab44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ed4baa6b1fb3ce6ccf1f9daa647fe811dc70a30741742dddd02bfb1ac50a4a12a392440db050626ce96c73c2521d124ed66a9b8980b3faad3a5fc51ef9c1d86cc', 16),
                    gmp_init('0xa2ca36e99f49003f862bffd3630ba397bef0a098f7c908481d53d205dca008ab387c0ffbacd18ec9804992b1f9a9c0d9f64c92ce693315f77a09042d7509d96ce7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd9f9b5551813f21ee2dcaf3d866a2c69beb0324bb97479a2ae6d4ae36568e4a3aafc5e0132971faa15a3f64e4eac3a8b197b054950df5f046a074fdb7be4badb6', 16),
                    gmp_init('0x571d07f45798bf4e0c7191cd287ede3f2f34ca7ed9013b972d02ccb301dbc193a15e959c016cbd964fb2e5fd405c65b0f4f27edb763bdbd1deea8f05c8a13d686c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a55cd5a6a0be56b6a89c72e9c583cc9173a139d563e6189a464b17bcaec7158280b2f7c229d94786af5fc7a2c42782914d3112bf24749ea8d5284e98f320f12986', 16),
                    gmp_init('0x917ce4b4a5ae12b9b3a787d95e51156724de66c9617f4bd2940d04f60cccbec99b717390089bdf5c1fb549e9c79868a706153dc987c4c5fb7c51f0e802235a8051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc607cbc8419c3a42b6f55fca164c84bb0028d94486fff151cecc12958585b88b2a176ffa9183459746accabb44cd0bfd8a6abb67e1732ef576e7f35808fb6618bd', 16),
                    gmp_init('0x2952ddc983912efd7e267d275228609228652e7e0b3aaacab37ea3f8ec5ae6701e3bfda4a75d56a2cf58decae3bdc05f7215ebb100d8eb1fdc488400d078788c39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ac23a4d576700782d911658ce90fda8ae50fcbdd568721aeca0d6efb23e42b275820b75973aeb71292d0720e9bd237fd55d8cdf51e37f24a9a0ce0f89f0356ef50', 16),
                    gmp_init('0x101c6e3433b33b346055865b6c38fabdba8a9bd12b5c925e26f67e240784bf6c59f0c0509e14c95dee04ea518d1d55a12f436710ba75b2a023777fc6f2f903bb623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1712bc0ebe9ff79885c15d99113a2f1b6f294d5548847f87368e13e55593a592211076334f7af367139bc2ed6c73285903879cfe5b529ce1a058287592e80c0e648', 16),
                    gmp_init('0x1cb3dcf58bb1469bbd02c594c77bf2d8b70de32666e1c728ee6111958025626c5cd46cf4b8f3e7a23c402e40ba8d1f6dc0cadf3485597ae5d0b68eedbb2ae127d70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2799590caac5011f757b68e00472676f34db529bd239755a22df219bc75f9f7c6f7aac6ea7962fbeae8103a260117d9fb1dc058555d0ce4b03548235d6da309336', 16),
                    gmp_init('0x15c8b85cd46f78ece91b8aa2298df77ebfacf3ca559d119730a2a73244068cd39516934a20ef175b862a6f4c61f41cfdbd2510daa29259b40468b591dde80e9bfe7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcb98381f79cb8bb861e99987d211142b41d00cbe5aaffe3d91ada3d8f00c320b4365e43f40db438879670af86ac4c2649b454c6fb8e703ea55419ed9ae06fb3cf', 16),
                    gmp_init('0x48507d7779fdc197c096bd1a89bd8a4303a33056613865f77f5a70aa65b7ef4b51973207121b07525020a55f673b041a83a8cb957e532daa33dd2388378b1718b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x107d98ecaccc6ed085bdc48a34858230b7176546625a099bb252298efad3932267ab92fdda9c9a6fd41e351cd2da881cd6d8cda09d440bb988b16aad8d873f397e2', 16),
                    gmp_init('0x1fadc9e3c696ecdbdc470eb714ace01ea7684cc68aa0af9a4a10c8e11f7d87ee6f9fc1f77bf00356c627c6226a1c4f26cc0b890da1f2e2c2366e3bd2de5dc95f5d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc05ab3cb065fce9c53abe9cf16d5ee67b357baf49237f94e07ebd1be26b90a996bfa1d44bd4627a0a085139323078581447629d62516380451c7f26a2fd5434124', 16),
                    gmp_init('0x44ca554d782bd1a58186a1eb1826467b862fd26bc2e8622aeb8204c993414da94b73acbb7da63e615b9320556353001436fc98c0dfa1142d0c38a153713faee0a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa538af4c702c2263411ab7ec0e78d9efe952246e9f8b1403cb33eef7dd77c1c8938b790bcdef7dbd129442573707ace9e5fb11462724ad84401fd929d48d5f1fb', 16),
                    gmp_init('0xd16d48b57c13c7f613f26c1df341ff380bc28cc184944a4a449e04ec45fa60662d03b9fb533c21145e57fa76f246ece58b62a02de83cd9597b3827660d04c6eb59', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbfc899108d0fec5d802dffec4650a555ba29df153a8bb49ddaf4a27aeeebd595053b138d2ccc89c862da83b96a31bc82be34ff6f2aeb3230b2fed9b067e2eca03c', 16),
                    gmp_init('0x47e571ec8c3759c37cda8aa16ccb10a6ab0a59e11e43ac64eb72477dd583dc5f4effc7cb5d8decf4e4f59d33937b3a2b73b9bfba08eebe47a8c834e65988da1a0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b8c8494718771d3f2c48a246ab65840cd3b74a7ed3c85d002b8e90308ae76fb3f03aa34de82a5d32cab28b5f0a5791e3783d9c1b48baab1296b4c4ac143ffe4858', 16),
                    gmp_init('0x125806554ee19b9cfb7dafd1ef5c5d9dd012e725571eb3c58554fcdd3e0618486cf4908adc3fc60df70fa5f5a7aba67f27fdbc8b8d91d078f91b3f57d14a28da023', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61a703acc19af4a9055286fa97cf0922afb7fa2135d3b36cd652e78abb589f8b4debe5d8e7abc086a29c5d587bb66bc99e9cf760a0ef2d04482b6c0ef31fd309b5', 16),
                    gmp_init('0x113a50eba5544b5cb48049256c1ec2ed026ae33bf3ef625ad330b975484f253ef2f3dacb4e4ce6fddb8aaf59c1e4ad3d59f706abbadd825ae14e82d9eca44a79b6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fabcb478e24b06f5886ab9c6709bea958400be68013d586d9a307a9a329f9f852b49ef4e55042113672fbfa499d85c69fccb31387972b373e7c5f56d18fdb2dd1d', 16),
                    gmp_init('0x63c5694a20008b52d389ba853be83c99688bf49e56abe307edce8cd219583ef0db9139a8376cfec34bafcf8ae678ca9e442af8b9233a783993b6d095562b1e18c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cf7d92002dbce946532e139cf749b035506068da6e95a748a5a78e264462e10b423fc031607ab4bf6ba585ba05b706fc75de9bed6c0084acc1aafae9016e626779', 16),
                    gmp_init('0x59ddbb61c06f8d260923e8b6f59149e5f57f629506117ad6ec2f8d699dd49664fc198ef7973182b2e86e3953c3c9ff5513b8e759dcaf33c5a173334d5e14423e00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x166f72f3de51c633b7c7ecf6a9fc49ddca9c78aa1909a0cf438995b35ac67eb2ab8c5c6e41559b74f1099417d38d705e07cd01ab035efb1aa260d8e9a7ba994a7b1', 16),
                    gmp_init('0x66e0e7009ae7b55da795c8c6131f316813ddf4a21f3a1f62d6684f52019295fa163012502dca3e943325a385cd62ad9bf553e814bcd695514a4eb78faeb96f6d73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18357a65b7046f07714043dd2c810ea1e0c6d21c3d52a2ea820b6611865d6f24232b2dc63993d760c1b452b0895fa051f03fbf4d8dde6def561d96c3210508b6ade', 16),
                    gmp_init('0x1604f90faf07cfdd13dc07d39c4ebd06c497ed15ba8ae78d9f478171bba4ef4ea24eaa90355eae0b601a90cd1966cfa6133aeb0efb1d6a54985ab35ef1d994f580d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b70c745ff997713f251152a2657474591ba22a605df72938a4c2ef54b7285eb6e1e89c2bd5c4a2ebf2b1ba75db1619e9eb6e1836c07bb3d19c3974b7675276d10', 16),
                    gmp_init('0x165cbafb78836d009456b0ee7bfa78ab4a8c6ff25e35a31e2dadedaa43bd7c0fb090b56220a911f4047157e790a4b2e4edc2a6d5526753370f0a7ab63790835db88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25d16e877ad817c05bf44a9ef6005a0c82efd18442830cfdf3589cf79d8f093d09c1bd23ae0355a4985cc84357cf0c6ff2d6053cb98e997743cb94fb66f3cac96d', 16),
                    gmp_init('0x8fcf0675c2156943f6589252ed3e04ac6262d689f326dfef85698208c3f7b185a0d48cc0062e9cbfd54d55443b37d83db03e564aabbea9ea626c5120014afbc78c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1661593b4702f1d61a73bc5caa475a6c55c785488093a6652b56b3a5eb3b812f8d1f26b87b068e353d00e966c67e761cb635370f4000104b3347e1f2ee46cde12cd', 16),
                    gmp_init('0x88a6a556f6ef14b1ae5bad4e63d0637acf913367d384cfd65f729855d8525f145382f270bbb0391ba5ad09ec636cfb825ab8b72314fb327bb9ed97935a2366b021', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17d33e8b27ceaee7ec850c864fe3c48d89c29b75256cbc962b72382298f97a90d94c10d47166b135b8e10ca35995616fc714a807ee856703be7e4db891cdb4fb3a', 16),
                    gmp_init('0x19b8b29591cfde01b8855db476ddde567f2fc20399fa7ca99d767d91a2642b22ba3d6cded0ee766f21ff605493ee9ff6ee0de0405b56763052af9ddd1739bf282ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa67768c4358367e668224f35e15f0d2472652cc382eb9c38f2dbbfc95da650c7388e7aa4907ae36aacaa0921a6b9156758f204223120f5b371537b5f578e6ee46f', 16),
                    gmp_init('0x606e88215523f32f0534db8325c7996505dab869207bca6f89822b00bff598fd98fd91b89a3e763d1f24b2fca0e93607104dad6270a0c5684ae0d7b3cfdaef3c5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1275086e57d8c63910e90c9fd1586af29a14464293b9b8df8f5a2bc2827f5acc58b4881044223966ca1ea05642b95625dbe58e415542eb5aadbf905820662e57a3b', 16),
                    gmp_init('0x1f6d8d00c0435b75df54099752b34d78e9ad16b226f580ee2ffe975ada9ab023201637d37955be97bf537a321cf613fb2436228a9e707fbede11cf9468103df3d73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c70f08acb68e071fdd3e2995b29911bb32715f1bb6a76adc06758c56767320bd61533a625f3d1bc405cf2191ab191dca07155edb7d733d37dbae1c8dccd34315', 16),
                    gmp_init('0x631fdfa318d2bcdbc1a9e74440463a4e6e26f5aac1dcc6e4ab2dd317293b29e08b1af8f4fa8d59777fe09bf50bedb0f71d649555a5c29f57bbd872a1ed9356a25a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d248ebbb94c42f92b9161a1362a3a25fd5a33521ae0dc81838a65f82e67cff6bd81cf741e770ecfd2fada3c5720ff0d9e4109b9606834d710219957452bb4c6d80', 16),
                    gmp_init('0x8e215a53a1206820af17e9f0ff56d6d88c671255cefb755123a487ca0bc8caf19f2fadb94431f0a5b75e641fd111aa46375a389fab8b002cfd600996e5dc225e60', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x14509e56c3f276bf739259425f82a3c3755f337e380c33624b47f244e7da3ec391db10e381587f47a6f4383ad0048bdf6fcd94fc24ba4f85ecbca656eb512e743f', 16),
                    gmp_init('0x1517c4c0b0a00188d5eeafd758584ade38b8e6dfa7c8647613ec842ceace628e1afa1e7e0b5ff3fffb6a36bb7bde102adb5cac386303b28185e2d65148dd94cb899', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e674e973c2196723363ad9b320ec90c8fa03d6d8f93d92bdd5019813bc0ea0962e135b25b774da98d63e8db0d853d75eba821692c272ac52de5d4defb5b3e313b', 16),
                    gmp_init('0x17e7cd3986e9fa4f44b1d5fe418a94e35b2f73996c8fa47fcd0f7bc31e7b3964d8581dfaa1b3c413325b30273db8a4cde4eb9f9c0ce4f03d4bc6cfdfea798494014', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ce77f2e3b52ef341a59f417bea5595e976b664d88cc74749eb2abe9dd96314ae67ce916a85d02baceab7235362acd0af4c889374508defdb572b023245e3f9a6f', 16),
                    gmp_init('0x82e2783284c7e359a77b27d095b5531159498748f3f82857a8c3a756ad009b62742d8fc69331e15a34926ce7d957cf5e3a870522a68901cd971f57cebbe3aa5b6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12eb63e67a8e506a31c9821f978981fdf5cef4b6aa274b7cbc6ce7bb287ab70f0f54b39bdd5844f837ff77b63b8dd245666841c793e7430d61e78d9e7f446045461', 16),
                    gmp_init('0x91415ca08a6a1b85d70ed2d96a88aaa71297099e7580b9d20b534ebf9461462a538db0f3859fbc54b7eb72b87bf59127b7a5b7e873d0c4b6bd1d2296041fc1da54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10799227938fff66c7fa2dd99c937b34fb126f27b7aa193a0152085119b20eff4cb06a583c5ecd54633080ba34a5c367a46beaed737d507075b039c81f5b6501dc3', 16),
                    gmp_init('0x83ab14a5cdc0a202e7fffebc7ec214629c831bc3059f39cd9f79d826abaafd71e2f61114948cc9be5178d00f69be9ed489760e880d65532da1ee87c18e1cec40f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5941474e1b878ff79a3b1a8a31741d03aed722d2ff8573567cd7d30e20042002256f1367d3054b2f077724c0c2337106bd4b9e69438570da46c1b7a8f704de7536', 16),
                    gmp_init('0x479ddb1566ce3918a5cb1f9e26fe7d47e5fecc62573b0e7f5d618fc81d48cc16f9a187aa1d08d0762a7347af8b434df786e3c71ed67940d19e3ce983c9fcf8a2fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18347039ec29bab970c4cb86e098e14240e28ee1a59fb7bfbb00f5a31c9667f8683e7fe7b929c189a01bb3beeb39bd2ba8d99471c5a0e2c1a83810305ab4f244783', 16),
                    gmp_init('0xb82579d623a4db698228be1db7b0d840752e787d34811b80fef5b5cc60591f5cae6b25737881a3b4aee40aa435edd588d75b109e93637f19c309b761f8f4ea7190', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4d3f5af0f1c43907f4d91d55c39eaada53e71b542cce36f63e5c58915c9e4a63430563642183c46da1dea9fac3946d4db196c42f99f9c164648a6060b5244adf3', 16),
                    gmp_init('0x8637d9ce5b92662c8e8f3e313911d578dffcdbfefff072eda7fe8281302b137acdaf4aa1f30d01895a0df9c2bcd0f0daf03d5031a2b4bda7ab1152f1413080db73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc80040c6d99a41b8066c7ed92d23f584933c30033a4cf148747609475678cc3ad9c33e1fc1659c12ae389846410a22ea317d9325bc4a4ced37164a9e29d07b0d60', 16),
                    gmp_init('0x1b80257bcf5b8f179d8415a035f3083991ddd333c3d923de5499af48930f243cf7f2f2338b3fc159585a1650f15b8b7604597aca7ae1e56daa6e9652d66a4f89d26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1886fe788858f5a91f09b6b4ba38a23513f6b5f2c375d2031a6781093ded7d9bb1a3fdc1cc24be414dad66bc457a45d0b9c35543d282dcab16bfe306ca855a073eb', 16),
                    gmp_init('0x9a0d27b149d9544e7a4f4e22ffdaeb10c8edf4adf826128fd8c371ba5fa0d105e99d53e1f9fe29f16ff0f1878aa611333c860ad393381382b90f952fdeaa340993', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1af7b23ee53f709192793f0cadbd1d97acae3c7ea75429f42c31e3dc6b3c5a1550a6b82414232492fa1a713ccd34efaa6ad1fa3e9d57ac01e8bc0135e27beb6745b', 16),
                    gmp_init('0x1f577f5ca09368736bab26008227a0c3b40ac6ea5fd4dd624e20e5d950a1b52623814ec38b1101afaa02abcd3cc66d3a68802e69b38f9edcaa708dc83aecb37a50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e0c951c65d71aaf653d48bc6c28cff9a05d7254305405c2f753200928faf05be700ceaa311b9b58b5ff3e88554769ff3b41702ccf50165999857b087c3722f09b6', 16),
                    gmp_init('0xdfcac9c143c0641fdcae2e0d639ff0933b0244c5595e8d4a5281982eb5a7742d30e5baf8f2f27ab83316b88a5dd0a2ec1b95d42294d121d094b1c60c62e06a762b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b29b62059c2ca7f6b580a117c8e03a5ce632aad7d9e372c92250a823a8e408b25e52ecee54602c522419e8fb8714951a8781ae6d75fc21f5f666cb0db47c4f8f4e', 16),
                    gmp_init('0x17b0b9f7679a6eb6d1e711b1b17ada3810ba5a05d3e09004fdd77f3201dba7d3c590c0aac5b6048cafd7b73318a43d30b326959c6b5becfc0f0c50397739d676975', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1390f7257df41dcb044c816b042aa9a7f5ab415ce2c20c85e4e29c6d976170ffe51bdb9e60388393838d6713024aa1ab0a391ec9bdd6470fbe03f28171bd3179895', 16),
                    gmp_init('0x14a8e8636d754ee354cf7b71bf6e62c02a3ebd056bbf0e17332539e249d175c2a6a77b372d1d1bf053b7c9403766849e580c36a41e8dca02de316044c1463dbe97c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76abf74787d519c9cdad08443a19a9d357610cdcf53fd4f3c3c50371ae6ccbb39daabba057bba613a7894b9ca07953c4b445cc53a2b32b27c9c543163d23d30fa4', 16),
                    gmp_init('0x6f980f3176d89bf9523165b9a35bc0ed8bcd33464758bd112c95fb92af2a14e2c077479bae25c914e3d6736eabfcfe642b7ab2462d8b39a71d4ee3a817e5502ae4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x35f8cde3ed41d531def79f8f91a4382f2942d0e2ab2c8b34ad266049fd904e9676e812cf7be420aff35910ad526e9567b2ce5054bb86e546caf7593760e63885d6', 16),
                    gmp_init('0xbdee6ac2a27c217ea5cfb5bb894d4982a5a02d7e92c4eddb5483236c11ee3d45e6cf7eb72e5fe3fd7a76fa5148a1fa2bdcbc044f39627db2f6e514497fb16cc1f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b45db7131e06ac600241018d31c93f7738478313d4816ebaf02c4a14d369f5d17258f3ecacb25a2700ba80fbfe93d885a39920316787214e3b1e5e42932f3cdb19', 16),
                    gmp_init('0xa5fb0bcf49fbca3d03fda4521440022d064788372dda6c12251492e5349b3b994d5ed84f08f491bc9bea5b3ffea82c5f4947931810945b9473a5d3687295b8edbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f3babdbf6979240540c8e0a70517ef32489787bdcfd6915951b970df2130f352387d6a136c62e30615bc5baa393a502c00d3b2cb10f0ec44838ff6ea35751a4f4', 16),
                    gmp_init('0x57dff0a10f7e63917da3253aa2d193c1336a141ab9bfa1e6e767cc0214e589a38f87369e1d17bed5d9f74a9b15dbb654889c214d2b5c253856d425ea77491f0b40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10b119a0ee96d7f6e5fad967b15b5158afc6a40474a5b8c61f68bd48a1d70933beac15a056935f18f1e3ab6cb7fe013fba2d89467b7ec2150268a4af8ae25144121', 16),
                    gmp_init('0x1b5de0e7440808c1315dec591d7a3be419595a2636fb7e27667e7aad6f7fb270f115cda388ebf58e02eafa1800f3582920bfcfe2882eb65fa7e895e3e94a548551e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x893009dda825bff257418d3da1161342d47d3c4ebefbbe6dc1d2617a1842796670f9b38bd41f861153390aa2b5b3e7bd1771973104890d5388641fbe08517a4cd0', 16),
                    gmp_init('0x1762e36b35e1ebdc1325a8e92d0643339ae66eb174e062345e44af400c90b97fcd4978021e9defa1dbefd1bda697415d98b10975f89f9bc50e504888a4d6369da47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x153712ca7479fa838591557d30b3be7a95b4222697aa3f46a45b4b429207ea0dcade522b9569064dfbb60d32de6843aacabde6ee702ab21fe5857b9da073a771403', 16),
                    gmp_init('0x1c22e03ee8680940f7345b36262312e4c9629154b098e5ca8bc78e8539ef71faac1ce8f13f957331615ce8815eb3d9d86b144b19cb0ee7be87a162516d415fb1ac0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b73a7284a1bb6c83074ca11f49a37d4e7b4bc1fb50bf0abb4eed23080b4a3fee0e274df41f5350a84183c0c66646e11ab952b184a6b93afa57081fe748d6ff5a2d', 16),
                    gmp_init('0xf53c8f29cc2fa4cceb37376c99c46ad2623007ea9db6865a1f89307651f5481ca81f3a13851d24551140f467694f67ddc6a0f970001a36da4340e4aa02a535e97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f40f8a83114005244642f686f33746474a0bf3624cf18c8dec0b10550bf8efe529109f7d511e9ca8ac67c10bc739402b0a29ec067ffd5cc417e95ab9e7ef05ef2d', 16),
                    gmp_init('0xba1d13d05c2fc87ae88e8673245d6229da260a2bdf7f19c583ffda94addd164da07d4ad71e0cd5fe42f41fe1729f61f3ec1d80c752654f22d956303452329ed806', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x139b23fe7b5c12bfbfe27488e7ef59b61b2334045c9b9e5665adaf93983921a02cae8e0fb6fcee1a12b984966968479bb86c8c5369836f57cdb9fbe3028b6d103', 16),
                    gmp_init('0x12edbed081b4ae0eec55b3fc2bc086605bb76bbf46b2b8c88f23fcdb43d4c57dc30f131563c2e085b3f41c735e76ed3aba898c35151b96c7834404d09a2de3dcbab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6293d801a61a0b0de093cd32faee636cf7edaf7fca9de6cc11e980b908750b50abe893e5aed528e0344c6f69714e0f6a70146bc94d4a130195750d281b1734753', 16),
                    gmp_init('0x991df389c48d8310115413ec8faa6e0b8f93d5a4cf47a7a58f8d0ca0e734bc3bc8c6c5afbc6229b256b2fe0d041d2e4d9a8a0e70ea4a976afa154f8d1810a54f0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a11ac87e430b9cc6501001883b0e083f7411db3ff41e49d5b160472c715d8e92eafde40491d118489de885b668ed95a207b15fe9f807979054877fe63e7f0e20b', 16),
                    gmp_init('0x2cf490cadf0c6351b55551b49b2fcdd5c4d9eacbdb6b20f13cfbc233155c706fd2ba2ee5e3d36b3a341ddf83fcfdb4f637c94cd8a6e7493e70cacf26480a716a17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a0a884b8f7d21271331afdbf526012a7266698156608377738be78c6a4e17b98680c8c4fc84ee7800067084813d49a6201345c1385d5dba9c9e4f52ec5ba7dcf59', 16),
                    gmp_init('0x2444334c2baca898f2e83db350d54bd1b9be5cb223fbe09f61fc6a28c6e61a32070ac197d796a0e6013f1f7e49967c860f32398ff9823ee7cda4aa47b66590bde1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe88be1cabdf51702d84d35edf56a0eba111d5d88ae177459c0238ca02840ebd2e67c389cde5bab10f8fc60d268b9d7b998a729d48ab39166fc80c63ff253bef9be', 16),
                    gmp_init('0x65f2d3501ae95b512841a1ebdb493f7d2774520ff46b144b542ecdc59a1a32f6f1a80ec106ac421e3a721166a07b06b4f15cbf5b85877334832e38fc9eab511547', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62ecd19a437a67b4426a8379c0ee544e59608ec3d486c4c0157c839101311c713a2f41756aa44ae9b481fba2d377629ec2c73de9d40e9acb64dc7ed009b224af29', 16),
                    gmp_init('0x5c60a15b35e64ec8dd38dc2b86701a21e22f9216bbabf80ae087dcf03cdb24a32b9359564016ab7f968744e98ae7e2d4079b97a7f150c4e5d005112f63cad5be69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2e13b1519cc4aaabd9fca4dbfd7b2d1fb1b9eeaa7d7d39d84fa4cbed921e9882b33e600a630d58ed701bef8fbf6570b803c1fcd5600d794353f285d1dc5f4dde7', 16),
                    gmp_init('0x172e7473034681c705e6ec0d474885429cd39e22bea069b22e85c0baa8b6b502185421380489be78c6e28cc71cddd625328e3c882420e8c174f66a754aee193d7d2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbfed43460dd8d1da2166e689a76ce31145ca9b778b0bfaa46cce19b22c31144649a527b9baf0d0d68e71da9fd5023253068e9ff343ee745e2e141838bf8fe6f511', 16),
                    gmp_init('0x1522c218cd800f5c7a52de774065efdd859c9f534eaff09db314a00648e678be3edbe3ebe21e4a49eacd332c1a2d9f9a4069934b3de79b94b5a241323f7c1669168', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a4e0acc801f2e11dc9fcdf60a2ab20e1d735769df74f0c200a646c35bfb2138f50883a38be7cc98d96b30e2e0887a27a1c7fbca26c0945b5afe1b039aefd5cf86', 16),
                    gmp_init('0x1e4803293db322ab77525d65811fac277d4d6f04a09a1c8126922d4fc0ebddde27b4620d2c916ca5bb6a9186f93be14ff19e5f47384cb2e6e9200caf22515abd8ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ad36929041f468074109edfea898bbbfdfd5955f2f4894626b1b6e75bbbfcd72c96bfba24a1198acc5e5d719041599b9c8f4e9152673254f7323e1b7f0a823516', 16),
                    gmp_init('0xb501bfb0850a28fdef43d74f8bf4234bd5ac41065fbe0636ec0dbfe58272a078829291e1eeb4e1d91d6ed72c609097ff49893ebf254ffc33d9089d12a99bb7d749', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ce8f6af6cd4d18cfd32b90af90f063283163cc89baebae35895f333d4751bcaa0c1f53fd502c2724ccf7a6b09464dec6e93f6c4af337e67e7e9d0dbabb1ec238d2', 16),
                    gmp_init('0x11ebe954bad506cc6d47b193e240fe8e9b86b2bb33c02d74e8c574fa7156e921883240a12d6f7e738b8d433303f4120afc2264a0d8fc1c34c118b34e44576940e65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x163623cd7c9074b4aa7731c2f76e881f7ff5efa9e691061e61008f81600c9a565da639fb26abe2aad01c6c3b41bf63d17afa395e2aa04b2f594054b365d1a4a65e', 16),
                    gmp_init('0x3dbab2d8dd5c21d62a5e66163282442dcd8fb54869fb5bf00908f3a1d3641260806dcc3342f08fd2fab492ebb905e134067b7107acabcfd34e20ba924b1037873e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8b32a38b6c9e496a6fbfbadd217ea733e46f2c2ca005f7c35853154235262789b8d00e588c935a3dee3705e1183e168cf971547c5aa4f7132c296b1f684c1985a', 16),
                    gmp_init('0x1db20c2b78ad4d62dd50e31b44f8a8b161e0586bd3834b1ebe35781be8966ef6c48514dc754fb9c056a6e114d078080d8748a1efca3e378be9da82e95e5cec8d3f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d34df0171672b0f90147c74fee7ac60bf2d88fb427418bb315e6255dd9ce2f64be608db63a805d16a9be99873515cdbf89fa030d9eb5ee813ea6e467aaeb0d0f0', 16),
                    gmp_init('0x9f568945bd741ebe49656ffc3a9f510299d9adc1101017b5fbad6142d579060e68354bb5f3bdbdb46555ab5ddd4c0097caf64d4242138fa1886c1f267177f1f4fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130675b5d1252bc3c6fedb9e9e5d4bc5b6acdde32a166a1555b129e0bffce8bf73176c4c49c99f1aaf053be7d04f8f3558e5977687dba87605e61d252da63d7540b', 16),
                    gmp_init('0xd080bb9fcf167d09af117a4ee3c3da3c9f802b2690562716587e3dc82606d661696dd017fce2ffb7b5b68a0e75e6370d8eef1967c39ea0b6d1fb3dabae91b491f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f097fd2d3b10f9c3a75418c1fb91f4186446d6dee3a030e39a37ea5b01d93a3086c6ec87e24b5420892c9227dd8273c85d9d8fd1dfe8bbf04dbecfafe5d08376ed', 16),
                    gmp_init('0x5d16a16c9863b4593cbf834d7e3ceb0c071eb616adbe62809a71f8a1492a8e1f587e8d41da2569f191c835763b1101a44b60d66908b7efc74bc4a32d07bf623c8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x776776acbdbe3e93bd58f2c604ce188efc7635359762de5809ff7a9cf51b27a448aa4176479fabfe2eb9e79bad6d7b67bac6780a54f5b3937457f6d51a3f9dfbbb', 16),
                    gmp_init('0x17096c1705a8ea1ed831738b5b2bbddf55af5445d38d17a5a92d23b320e95b9326cf4da45819478b14e52618bc126be0c74ed72b64304cfde9dd80f5d880f48aef4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15076ad939e45e756fb68fb4ed906306d91989a63bcaade8ed5e7cd0b952743c148696b71533873a14fda2754f8d9c477d72728cbb51493a3536be30296596537b3', 16),
                    gmp_init('0xd22499c3570b4e132368148e18602f86b0e86607cb34fb1968bbf80215105c48b3e20eb4dd3ad0fb2c39ae1aeb7e051e1565908602c850a05ef1b67d3ec9179f79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a3d464c0c860ea431856f0bf4eaeaa532321a2f1b9b5b49f9d45f2661c3687c3d4d88f985225396025873e0ca9aeadf696a7324d2b077fd47a588f38078840393', 16),
                    gmp_init('0x117573b8999a40acfa9ada819a4cc653afa444694162a7877ac81f957de85529d6d0ed2ba5afdff57a345c3cf11ee2fac20d1d4c7e03f592e9bd7e7d05a8915a01f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b5787347dabd5ce1544f2924687a90b7a6320f5116b44b76ff634ed2bdb869f7fce395c472c75fb43cfed6ef9b148f71a8cde1470cf3ed59ea28865b78cf6f524f', 16),
                    gmp_init('0x1745888bb178b89cedf2f3bf773d108408865f739f9d67c1a15d380cc9ccdbc956588f0e933f66ad010d62209fbd77fd99ce87f3e4c99873adfcb578e4029750f3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b72f3bfc9d79629f340d96d16e9f463db41a6c939914d019059cb8afde0acb1cbf1a4e5359b0c9b88d83b0357115ea4e25702030bea5a8de4a56ca044fd1e8a048', 16),
                    gmp_init('0xc9dcdc58730a06725653d5e84a246f5a00507cf609c1d3d85e11d8283cd36c4660fc37042f4e46276088cbab968c4bc336dd7bd8f41be8c22d69197055a4e9fb59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc778292c5bf007687d46c2d605a8ae089c7d94ac6eaa0103d349ae42dc08daf52da27e467ba7594f8a64006d1cf3bda7b6897a00e0195de0ea7c98ef52d68b61a', 16),
                    gmp_init('0x19f21084dfa8f8b3c4d1c0f119dc9e27ee72dc839cd964d0137fb65ecd934bba02fc09ff7bd6d7b82232de40f86a436ce5ee489a8eb852672f1c7e7abf9d8db722d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6bedce0db38b355413541781a482074dca3d1e96fe464d017db9050a22b9cf7691edc0dbefafd442f17ca58012b59e98715153d959ecc93e5d73a6ba3810a8c4fb', 16),
                    gmp_init('0x712f14e7d0ac4e1d17fc33e4d2886f0cf95c379bfe1e2e2f0d14d7c1e92ec7aed5cf2559bb9005a3045cbc14c1ae68b7c6c431081d3c2181791a13e3eeae2b39c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e2652c08c9ad1d94afa30e9de41606a8d660118578dca703c296074b2b8e54b083c529b91813cb246d0a7f3c88a17be05035527b8104b9d4427e639c92c82d5c0', 16),
                    gmp_init('0x146987396522becbc27c8bfd79bb380f10f97d76335cc7b26274f3045f9da55516d24e80b604503354eb004174845e7fb83c0a02c2e25eecab709724ba6d42d26b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3c7df9266108ad5867c5b04c779c968a724bd3ad8abf6246ffad07009a715d6fc120a558dfd80644c7b81fcf5a904c24eff7760d2547fc3e19394910f0093fd88', 16),
                    gmp_init('0x9d93171b4dcc3795a897f9f99d0fef238d657b0f1f6d10bfa642caca2fcb6bd60f54bd7b9b3d4f38470bd0526f428a6b690a029277568c6373e37db2e0b655b6e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f06ef6a6540900cef3243b95255a684677fc52dace53b1502fdd85cce2ce4fc6b075580601244c56cb67814112244290b71f5b43dbaddbdee83fa275b0ddd2ba9', 16),
                    gmp_init('0xdcfc2c2f0df0c5783fba3119b23685376c2cb9bcc6427f8a5c1e9c0aa3d605883d940bf3f4a218ec300d218265496d93499dbd63519a9e8e58562d06ac65457f82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18a7dd9635666f368c9a5eabcc591f63ff2dd8f8d154e1428a8cab8bd2c3c3e2b07d9a44ef1aa210afc19a61405ff9e47d6fadba5955532ec0fb7b63d0fa73a1aa4', 16),
                    gmp_init('0x1a413482b1e5059c65c9d5d5fbfadf37f8afca5a25f4f4f2b959f9d978d5803338bc7aee7feb4bfb648855c10a92c0d10660f27cd01eddff5deb35c9e17d84c056d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bbb32ee8a9f5f43dfd169110f6ffca7e1a5647580021840212d2b45d301b4836df2ea08a71de90b2f6915719f862b64816c4014ebcea5aed3b6e95a3aefda1ffdf', 16),
                    gmp_init('0x1ee54ba37408711afcbdba77c6793ee96fb0f26f80b7c45060aa625455b63f79f1eaa2e0fb009d93b9f48913d37cfc7b6c2539fabac5fddda2d7ba4dcd71962c792', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12cbd151aa3df9779a1e3ed1e66c2092c76035d525a21960c7f94027576e7fa5c4d949ec82aac954b3058f4555c30dc96606935ca2aa6b14d2a95da54447500f10a', 16),
                    gmp_init('0x1a6bb6fd0fc6894a597ee9f06953329b2fd30e5b7574a4e876299e1add207f447f6e0889804700d30fd05360bf847eb7a34b4c240648ddce4fcda7d7c3de59368fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fa8c903fae332e627cabe4d7dd7251b1c7032c8d2651f95444128971bb889e3be275c7a550fb475daad92706fe872419780fcff02402831c27b70f255cee12880e', 16),
                    gmp_init('0x1b13d146f6002202a72c7312b00e6e6e81d403528f6e04d9e2d4718b1736cce225dfd0d2136a0ec189c0cb224fd42b2445733ebf5c256e1cd16d00f7bfc32b6fc85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12f6f01599295d25e690e7cbef612c667f3cbf933bcc8c2af963f763629e240f768f3923fbec1304ee3e95f091286ac317dd717d9172be51df51a20556e1034bea2', 16),
                    gmp_init('0x3de5bde5985c3a563291d5fa7af8ded8f52f9752c14e4444a4f59e2884a6245127f5304c7c8652dbcdb2c0882e4d951b0006ee3b59eec4ed47f941627f4b56bdaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ad6bd518ebe70853d09cf707235ba17f40df53d51ea54ed35a7bc810f085dc2acd67631c3e2b2f07eb0d8ba7d2e8bdca54c3bfaf24c1c1b10d9e55a11a0d1be9c', 16),
                    gmp_init('0x199df0e571b16aa5eef20c8e2695b805b7cff7eb86e0c55f71f80ebafa1c1ec683644fff573472b1abcc40944c61c45432e9ba0f564e9be7ca5a7cd3940b78c4776', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6980a29cc867bdeb7f7b3dd65c1a52bdce5507eb0bbb6e514d98002c9a11a0096e7fa33ce51ee6fa6cf2b88c2cf47f322a958178050b487cdeb765a24b2af340d9', 16),
                    gmp_init('0x1e72450c347b2c1a0683e0f51b5b3bc972be9cedbfd87d5376f2c12d6706662fd913317ba71027f00fe14ecf2f7ee18c2bfb1506bfc039a455f0cdc241d6d7c8921', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10cdd0a602353b075887c3380d37b459b990d99d6d62195790367cd58b460a2da3c7b3824d9ba31351cbb9a52bc07807f9746168826199e1b61484732401f8815a7', 16),
                    gmp_init('0x159ef7985a21ea39c70ffafef87c7f37e31c6ec44b959f64e2b03d39214d0de645daed30c80ffe085b5e873ee56d8bc64cf540f6fc558615ccaebc49bc0ab2213b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54adf8465854126fe9c01bf29c3c05546dcf119448ddd0c47235207de63c0095097aa294e0e6c06007111919ceb1470aca6e26c45f5d85b33ecddb65c37f55b79a', 16),
                    gmp_init('0xe94291b0454b708b58b5e3e2036f69e8a937ae51127cfaaf1bdab7f7d6531b61548020d224523d7f91be374a8297ccc699e539c2da0960af282c13d69dfef83427', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1adc9b9d5ec9b4f13325764f1cec825ae430fd2eacad138a2f39f4796ae350bde155c936cacaf78431295c122b69f81ff39cf80206180d906344c085162a78092be', 16),
                    gmp_init('0x1e3146447f8d1749292cf13c1ef7b7543286a2fb427e6c5b9d5c37f8e51a427b9e5875184b1c05ee74c2132d9b2376e573b61c0dd81e3fcab363049e55456c15c19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0f15add9a34c2d2e497ffc56d61582a3cad5a170ad1589131d3d07af8f690552463b075e8b65f515eccdb0bd335ec2dfd68f55b32506ed21ceb3388479418ced8', 16),
                    gmp_init('0x4982ed485f53de8f6a55756be84f2058359572cd16aa1db8fd85863c2eb4ad41bd425084336b3355591b5ea4a8067e7599f3e8f69ce46eb58079d0330ef5d91b62', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x151b1fdc2f2cbe27815d356f2bf604e93f7f735656ac3179807287d94dec3335717c0185404bdf853f2e74ec6033d594e285cf6c427e1adb0787d6e42404e1080a4', 16),
                    gmp_init('0x1ca56e4f0f5c4b9258ee1c9dfc20dbae800d6f79d237b3ac4a3453d5a4a7f0850fac8f722b85f82b4a34a6ac3e53ae89c0e0ed57d7ea7af96107b17e356da1d3ea1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c0eb9357204bf46d8d82cae54871ae97642ad7295ba97bb360a54f7fa07cca3e89a8aadac957ef7de08c89d9ec1f6e2a13488244e32c3a3d6c3c84fd2b5f54682', 16),
                    gmp_init('0xb85be5af8a4446ebb1792cdc63294ccde6e1940d5a4ca429015e43efad96e215b96823b0fb7070319566c66f0921f912649b2168b79034b4892a3aa55f45ae741d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaea9f58bb4547289c10c94e72d7203e0caee8c00c025c14234c4771d5c7fdcce39a38e6d89345da73073a404e0e2b859b034cb6d1523d74d6c7d454186a52747d', 16),
                    gmp_init('0x2791a2741362844292fac13445d73c446a75c7751945db80a19b818c5d829af1e81ed75c871399560f9e2222b0de6f3c0e8177a6e11d47e37e030c1df531b952a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1705743b43318cb68b4c66e8710b604ff42a345ac44c552693e9c57ddd8c7d656ce3d5ae04cebef15333d2af909abd2cae8bf4d092e7bcf552f3d239c6b6a81c377', 16),
                    gmp_init('0xb7a7f72ff8486992eb9a4264daa60c57c2b23433b84e09e6974239074473ee7e4c4f5155d63b71f27d1d1a183473f44043c3c529d4dcaed6472ae332c9427e80c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae3ec9799052e8924fe2630cda5c5cbec8752979da1034cba88f665648ce6eea34c6002b7ee8b35b3bb7a8d71248983574a5a125f9e860a4318cc7e786a421ded8', 16),
                    gmp_init('0x1191405294d649e245347b5db0312fd66efb148440cff83e32bbf3cfddb6fd2dfe5bcd415de02f14020171849e582b3ebeab909bf2049b36ae65273dc9cacc3a394', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14a1f3cbd6586c05a6f37f84b24fa3eb3f6b9052f7c525f3204a81e07731b30b78528b68334531e84a422c50890ba73bf57b12d3f4fd5db8ea403f9df37d6df08c2', 16),
                    gmp_init('0x45e6bc949c847d97a27b14401509e0b0f6e38138dafb4bfb1bca24b672037d1a50dad04da01d8123a9aef4f8f7be309839c88389240e33d2938ffe4e482512657a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0962222cc2775213e81edd301b7a5dc1bdaf6805e2522e4446ca7bc83cfd6ad33940147b288139da77a3ccb047ad35fdebbe623dd983c07a70adb4ae01be22fd8', 16),
                    gmp_init('0xb6571db8bce8978c5b2f7c543aa6c35288adc026852772afcddbbfb9e765cdf241fa58241a1bc0755216fe23a8e0112531ceca8043dd69cfcb66da30ef3f1f2e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11da477f86b0ca25c70c69535a1474360394c2e12a10d24e1fc3d7e69c9bc4c2fa21349ee8b6679516fbd02c6879d6ae08d61a50d9716058b221352b764a2839e80', 16),
                    gmp_init('0x1c1e4427ef87a3afbc1a4c8b35a11578dd8bdbc3d7d03014fdfd422a9b114a2e09353865d1e8c240617d8a9b302cd8f5abb4d0b08b35943df83756e379c2a4c1871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dd59402ed3cba76512062b83458c1d432418c0f23cbeaa26abf5249f590d8c03e186bd7c5f1711118ae443cd5b1512b6824967a34362a14425bb07fc7b5e359c52', 16),
                    gmp_init('0x122b7b46789d87e05ca346b16994bc528f915ae7ae8b7c074aaa0ec09b1c5171d063d9acaee98d530ec6da2ff897bd44d5245fe89d9f18348dd230dd9f853bd6b5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d6bc1037ebe48246f13d98beeaa518138b7018fad03b906fbb4fbcca21956ab5c26a91be43318c23b17253e5dbae6420d629ed7c0a07b58f157e5998daac138eb', 16),
                    gmp_init('0x25b653e507447b28cc9ccfa9805f95202348de2352b19e12bfb78a7ab7cb01c4c903dd005dedba71fabe07c2d508c120cc585426d621e44b8211cf86875411292c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5deef1f49f0704c7ab55b172dbb863cb6b06e366f31f618a58fe8d0380c97a643e73dd43d94ef7fdc6896757a25dc2fa9f9245c34756c67d14103a4eb1e093788', 16),
                    gmp_init('0x8f3d002a021d938d4bae46666a0fffe6f7aec3c39d38d5a2e83b442bf54c71b9e36706f75b3552ab44c3a5233a93eba327d53c7590d9c57c48d0b0aff181a45b89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1410a4a6b8f25136cff8120b0fb87d86d0b679ebd2c2f56baaca285135ad6c798797bcce8970490018a6dcae911e063d116b8d09bd46894361f4fac31a61bdfb45c', 16),
                    gmp_init('0x18023755577bb69e508a6be02a11e5064c77032021f8755333dc04bc77e90470120e00296f8155faa25b7b70a5aebdc582104beb9b0503ab53cfe1d08d131f5d108', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bd71da7965952b75ee8e5b24d8dd26e7586ff1e4fae4b333fecbd53a8fbf8569e63f2b248e6635bdd1afe145c7e08453aee1503766ae3291c8f858317f6f744de5', 16),
                    gmp_init('0xb4e51c8e6d1661502e16727b77a9e20a0f2bd2abb7bbb68a03eabf82ff8bbb5ff41e7601a6254d7e7f9fab139178a7becad77451245b3f399806dc8fa110ed54b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2c6c300433ccdfdeb490ac179e36d5be1b15565a95ae83839ef7db91197f2a082f9f94ef6a0588d73cbee1f9ec9de6b654bfec3568922e188e911838118666736', 16),
                    gmp_init('0xafae13e6da2bb1bca7a6acbca25c12d842a4e610f23263b1aebf31ffdf4eec66e4b64f18b82e6ce82005b279a856e50c253eb480129b4d5eb09bb484598d9b96a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12320745cab49218465ffdf4749b42988f18392c5f32f005ed3e401da5968dd806d85f5eaaa486a4f54a244f34787a5448568dafd79569940f206aa71b76402e540', 16),
                    gmp_init('0xebf31fa174f701def92554b9748da4d85867a7d31f83c27d2305bdc5d00d39a55dbe4e9dfc4418f279f62b14e7a492d445912c8e40f72831c58b88856a364b1f8d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x64e505024cb3871299fa2e31b9f648523f87f74b4688d06925d1415d0c93d25420f7625ebed9a7dcfdb40081079565740d9e98cb571098f458af346c57d874400', 16),
                    gmp_init('0x1d46c6c747cc3c360a8ffce9039aac68be3c86d4165e72bbd208cc663b1c62f7c5ec8a263673cd51256da3658622020bbf260f69447b48bb585e2087f9c446e7206', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e3d2dc210c97e687a2e20032629145140a7719fb105d0d86e5996602dd29aa0eb842c64660030dd1901c0da98e084d19d4020d9e3d66d6f7eb290e4ff1781f48a0', 16),
                    gmp_init('0x100a1d992b800ef132ebff4ed559323c9c4f42c5b9580263b3aa5e23683969af81f4033c8c03df882a5aec3cf4b372cf9a830a4377044131380e704ecdb18c76449', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb736bd9300067c336fb093b6d8026ee753326f8a6379b5f778497778287968e85800fc48b0be2d138fde2d5fdd964bf52852d44a39fd913403ad854bde1842eb75', 16),
                    gmp_init('0x1a0d05d843bb1a35c03cc86c4617be4ec458d0428915303ae29eb245c9a10593ea92b855524d1e4f38afeb8a5abf0c007547fd4555e8901ce7af63d269d3d3b0373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d808480d1eb4dfe2e63a2e16179974c9bc5db86555a1df0eac23470f5958d5e66d3d6b2ec617a6c2af8500a36b08955eb2afabc45f138ed8a44a3ba7d35a80eea6', 16),
                    gmp_init('0x155fd997c8655d12af0c2df893146948ff63223c7e53ce0759840b5c77e3965ce2b54ae1a697b0b1b12427cea3ca57e58c96c06d419f2aac2be89ec8a91c3dca584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1720a3e1894b9287b5e0f2c7539c1111751e71d8ade22200715e9f79f235e69238f7331c9b97e465f365622df0d2f1ab618ad0c56a0ee125e48615a13d91bf64aab', 16),
                    gmp_init('0x36a496802121d5012461f20b69f79d8be4a65ed115dff9f69b5a610f7ab185efc3468983b4a32ce5554f188539344e1b732d2ea9d91cc824f020e9e6d2311c0623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d28376e37eac2ffc9f46c49940f0221ecfc02cb4798c0250a53b88eb810832b05da6493819224b37317cb86bb5b85085b7c7be529356e8b65f393bdb41c4e903a', 16),
                    gmp_init('0x1aaf4affafdc75003b59b3e2f884356038e7387c7a3eeee0b8f5d4a355c3bdf893dad3764b0f8910f17ac1aa2d22455917d12ff0f5917ef87232f6c2ff9afc8827c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa44a59f2ecf8c85ac1c27360085904d79cd0a1086f6441a775ece6a196e2d25cdcc966d0d5f2f3aa505a4ff641c7149bc0a52e40fc9dde6a1d7de8cd0fc9be442', 16),
                    gmp_init('0x13ad0fab4f3471d4f3cf5f738d8a35b964250a5045a4b6d9aa99edbb13e691c417f3fc59bd33f93fde70d19162214a079d4f68d7a368bf6394f266fa397db6bfcde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f04b9f294155f4eb5e73da9a9f86871673ebee98741104a8f7dc0513338b4a26767f2c9217b2b3b1a368399f11991539d9a21b0b0f41a63b885c4bd23ad5b7e60', 16),
                    gmp_init('0xad5307e6b67675cc336d2d6bd4c69b3fb90a442adfe3c66da08a90d3083829a477ca3ff9b48b46608004fbf8fa1f9c5cdfbc526ae08b7789e1adb7a1453dcbf7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5907443377ff33500caa3c0854ebdff9eb2e0f3d21c6f21fa9b9caa6900a7b958641b25aad42c16b671342c9d2a770fb298d9a11bbd6c48bd38d50ae2b1340c26', 16),
                    gmp_init('0xaa4f63adbe2135d3281ae3359ddecbf40a83200bc03adbce88c134efd566109f84abbdfd216980d877fe7dee3bcb911f56cd4c1cc25be8f97d680bfb3c9295497e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18fd40adabed58650461804c3f488e3b5732f23aeb634208c28fa465ba5426ad999c858771ef63f67b43f11086716ac2730193d19235b283364d35b9e3138ccdc36', 16),
                    gmp_init('0x55788d6492836236521c8b46c36422eed830a97302e43c1e1234e2636ab2f4027645a21a1a1a5ba2b971b54f79564bdc47854d92b7b1bdaae043f3fab933b8a100', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d06be957dbce563b486b528a68ed9f435ca0ea19a6e0c69ec89a403cc146747973aec5c4956487374eaaeecd6b9e1c72bc99aa3ed2632ece513cc8a3798a740fa', 16),
                    gmp_init('0xe1296c578268da2b8ad38636ebe3af9074ab2f96c0ed13b66b5f8781c95b447b8e0f11909337223e93aac57a0356dfecfd0dd8cb6d4f813c5e35d9c838ca34abfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b924faa0b536990d845369cf13e1aee8179454ce5ecdc048ef315020b848d1cd1a10e785e3a33da22db54733954f2170707183f61ace42fedfd43ebda9f23142', 16),
                    gmp_init('0x1a0efc327471e59fd7e6c45f60203d2c783c59746eba8363616ebc3ca6c48537ba131063e42b67924ef2db31a2ff194a767c8dc42e20e95f354ecf9a0ef7d22a7b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd17c5c24994300eacdad2c02867107eb19c317104741c88522915bd679f3b1e81128e5df243801f53dbc3a5f8cf3eefee8a3a2240a23c9656393a7dcbd3c3aa79', 16),
                    gmp_init('0x2da37c952239724e7b7cc056e800825ec217277a7f0dbda08b376968721370dd63e16f86d626ac5091b6395d04a0b8fc273b477580533f2a2c8e33383090087c9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1564aeb854a82509b35bd69c04713f6bf904a09ffff7fb41dcaeea132c0be96a3b57da768acaf16171155a0e10fe16bb4e8e7493496c4ee60d0a8d55ba1f6f83320', 16),
                    gmp_init('0xfb9541a18baa2a1f858c126be50b55df140216d0acc864ea0601bb7d4b56ad078492f23fa3266b3438d2fac4c89dbcd80691fab0dbf52f971dcb9c060d70f0c260', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba5a5cd3fa88d6e4e63d1ad490e68a505ef29ffbb490a7f25a65facc3706e7ad1f6fa4cd8fcaccb2c31a964eb3c669901c8f7ddf8a9a9b479b3f8344d51426b278', 16),
                    gmp_init('0x196ee6b622341a31a9dde65dc553dd656a846c7096a7fba05717b8b0f6ee7298bf4bfc000d25ed5928fe9c8fb4af178c33994938bf8ad8685f39ca4b1fbb503a9c8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x67cbf1afadffc21ddfeb122dbda94d44353158994600f11fcddaae8bb5ae380b36d711dfb2a4c467766775af22d021fa71ea4e9214ae2fa5ca66cccc8d6e1bd72', 16),
                    gmp_init('0x1694ba00e99f3e4fbf22bda6d769d0ead766ded06331da2ea2fc02145108e3b98fb96fd2614335c9ddd90cf9b5949db4d964e016085630b803203cfa731834bf891', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7656b8af445a09a31f0615b576ab81af4930d7d644ef6114b1c33c7ee6d96e70f76c06d49cd6edda9dd7e9ccdf80bf503e29a81e4f67793cf95fbf73adee70e781', 16),
                    gmp_init('0x17967e608d5af37aede6887f532cd333782c26794a07ee3715f4ae95e5add1d2b8c93165a21961098ed67d72e7ad11b58ea0b123da0dc2d7e3132e0b33475cac764', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x731687f7cc035a202b0bd86ee30760287ec90d6eb80fe5de22b63dca396d04d079248f675286246cce79d73800f769fd0a4731f4a66854fa6520e1dbcb54203519', 16),
                    gmp_init('0x369536133b732b9050f051a388bb31048de5c5e2cb6898eaf22d732ee82f509dbe786ec7c62c5cae85a3199e55483836f8e27d9d29808e5c834fcad345d18000d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e70057f6c701a6047e0abc757261f314fbb0c4319c8b7d6a051e3159bf37694ea3ddf44417070c46f2f2eed835ea97fb6a9d08f6ef8a6d6e93ac333e4aecfa8831', 16),
                    gmp_init('0x1cc86dcb1fda88c3bce8cbee62fb903094c6ec0a739e22da004e293fd274800f5e5aac8f0c7d29dcc8a79f1569993b7d9e54eedfa1644ab9ea7204cb3dd6af8283b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ba1420dc6ac54af6bf90f39caac22e17cc8dd69939514b2ae46b010acb8e768d2c663bb29513f5eb8e2b50dd2bd2194bdba04ca2e0b9ec7b32373eaeb39e84ce3', 16),
                    gmp_init('0x1502b6d110dd3213e58e76a758037f9c6a022b423d8f71cccbf5354e9f772327be43935a798af58b7c53b8a3c233cea7b7e43a57cf75e891060f5772f8af82dbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d12ae56dc460c4c232f611098459d35e150ac098de140575e61319ee91365bd0a3ffa8504603fa5b60bbd2284420d45baab4fada66621f7759ae8b54d902acd87a', 16),
                    gmp_init('0x18b18369f7ae26bd5d8b1ff6c739bc7332e408529218eb05cd1531b98d70e3abc645397b19777a5d9b2d1e5d6e84bc1d2a71332685cbbdcebaaf0b1a965e5ca8913', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2ad6552485afc00fb00f0cd08055bb2d8aa94c33281dfbb0ce205f3cf8a1ed4efeb5e976da939480321660d3ed99e871da595b33f4cf3f9f92600bac3b04b2d70', 16),
                    gmp_init('0xb43ed53bc28dceb82a0b8308601db10908aa5680f63fe855dbbe86dc5787ca21a3ada571e816799f110abd9b8de884658e2196d7704a8a5d199b28d5eba2bf8afb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x957dcd3a305b9a41afed6e0e279e6bf40bd8f6fcdaa6cf2e0366f394472c3a313ab2dc0f228106ca3e82d1ce827597d0d0c543bb64983091563a44dde085f45edd', 16),
                    gmp_init('0x61e16d31c1ec62a76629e0c3ce2489fd0125bd760b84f3cbf29fce45ea13b2f0699edbae8ab9e21e28977417fdd5e13ca1912c21c51406e1400a870cec12be5b78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f05ad37f257f5e69d2f10271edaa13c20380277d49dd69e261f3d564a027df6dae13ead719886893c852b55ad1bd0239defd4e17458ef9132abe58a0b3256a2a9', 16),
                    gmp_init('0x165981c83fe712e58629354fab13d32abd98300cc9994e0ec3de7d9174f9ae85add58a0b214f9ab61249f9fc484e0eaa4409c2ac4a9f27579105202ceb084cf133', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14f67ad58cfebb65c8d4e528177ba5984dc5345160d74cc038ac9cacd72ffd5cde3250c588f3bf9ab03cf4b88085f55557462e99c7b4249bcd10a2f28034778fa9d', 16),
                    gmp_init('0x760109b32f292c57e5cc2a9370a62401add28085e56acd027d4aa6e046c698b0fa60fa641f70833e7f5f9dfa5fbc85ce22a953f8c4377ad3d6fbf9a933e072163e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb81e67649362b2eabb3dd3f68868d3c41204fdef49cd2e67aaa88165db854fda1b2e7fec9ae6b83640b369d8311ae1efc587ae224fb43aa5875a7577fe6a8a53aa', 16),
                    gmp_init('0x16f5975516e13d9e1fc97d26ba8da1754131f2e77034acef2132f51668f01439a26366299d4849438c0a67f6aed057171b38ee7b890c657cfa44d7b8a0b498e4198', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e1b31c3a69bb7b65b2c2794c713f166ad2c3e4a54a8f58884b2da1de355213dd8c663fbe74feeef3c36c30111539ab291867b5f5e6f45ec559badc953ab98f2bf', 16),
                    gmp_init('0x13e917e6547b69ba831bf18214c7c7afc51bd5f420952c37c74a2145adf91f21d16899421eebba549b183073920151f64fbbbe067a17a609c0d1a866f47b06e4f37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x150e763d6e716035f2ddb2356d286d0f9d72916a3ea35ed0f0927b7cec09586dd2d69a5f49d9d421345cd71c1c0a0500353ea93be785f15e09aeb20640ace891c09', 16),
                    gmp_init('0x79501c1989333621e12b8025ceed260ddfd0dc7d0a47c71921cb83fb3ff3c37155b7948829ca883d1b49105b7ae99cb20fa88a218a4de0844bed0a70045626f5f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d3b5b06741640c6b1f878eeb2c2dccef7e3ada51cc2503aa1816a66abe41b726fa22dff14f77e94df304d1a1e1310441da377243480dd95ff47bf6662b2c5274bd', 16),
                    gmp_init('0x3a64eefeb25155005806f7f85884d89d4a5261b4922f90a2d2e7e170fc78715c86142c0e3af9a6fd13d4887304b6f921f864ddfbd5e16d0037bb536c084aa90eee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b3281d130177ad6b108447d950ca46dc04f0b9d874a43ff4c713acf5364c772c48e41580486ce445d1913352f38843b4e8155cf927ab85f265c90859343d9eefc', 16),
                    gmp_init('0x14c2dd58329a0ec8e993c08554a3934fa98c713d3b37149593a5e3af075e3a9d734cb7b0c0171dd6aa4ebd813aef87d01cd33d4b7b70525b317a59598c0504173ff', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe1a2febfa530090717664e93f2fa7a8552e38b65fe3665f969eae2594f693caba3d7ecde93d96532b1abb4ae0ede3c1be69f0f223c35a00b6985bbd6ee32e2ff', 16),
                    gmp_init('0xb9e421e27ad9472daf3eb1b9b2221df814aed93900c468815fb526bb1929dd0a3b697754439484732457e02d060a801edbac9aa3ce2b28e6fbbb35ef0ca538774a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce333277e57df593fde491a5192130c99c791efd97ac907250713a6450cb96db0a0d3f6e52154b38e96483b8acdd03694948e4f42c8667bd82823a3093dcc0c55d', 16),
                    gmp_init('0x18750d449896770441f68f023ab7819af5be35b95dde9e55ec16db6b1a213ba5c45470cef35a710bd282308cd8a7bb791687f39203ea13778c54deb4d72d7d90a84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6d366cae7560188b9b5d91d3d8dfe63fdd51684effcfeb7ba26b65582568a5789668c6f54acb5fb8c6cde095efc3368586287baae255a51a6fd2c6ba8c03c8a93', 16),
                    gmp_init('0x1e04c5e0d9abc55f498ab46f398e693da369b06ce845936a74450b8b14dd6328d963499e8073a56ca59d581ad9f4f88ccdb527a075f589d9aca587d06cc9844367e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b85ceb1004394f6d3d918c8a0547bb9604c31e9eb08ca0bf752ade5768f6a37b3436d8dea957e58fc0291e5e3a8331004a27becaee14602836cdf7285e8cf496b', 16),
                    gmp_init('0x12da54ceaa48c6a1235d0dea99a736a6b7106b82e3ac68ab6d48ae88a5692cd8c709346c7c57235cf42bd4bb865e621e53e875fa000c20f8b1ef796100862db1e32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1787b218536a9677cf4d9b29e011ba3bb66e9dbc336d27d9f956110f1cd6e71efcbddb9f1159d5f773319344093b7c462b0fa202a91453ed74e14de106989b694f7', 16),
                    gmp_init('0xf44c305a8bc48e9216f1fc7f3480286b225e0e5d3a0f34078df07f20935cde08e153f2c20236b0801d11b4b98a208d5237de335a451c0d642f7fe687840eafdb07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f7ffd0917f235a885a5600b1681236a93c4bb5242b5589f7be522af71fd10eae29aa181881c661ccee2b10e6d554c17c6aca02ec9a9a5709db8a02d18294cc29', 16),
                    gmp_init('0x1b9aa4716104e0f3d8689147837441b4a0a567bbb021f1021920feecaad85a5a3b9d98937de18d1b857a6edc26433608d96c8964821ba2b0a60fdfb09268ad17511', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x210d9bd36b73cf14811eb76fb7ea75a2922b308229ba0f2644a83252a83e11a1c5ce9f3cb52949ffb0134e4ea847e5ce93aa7ef7427387fcfde030feb9814abc1c', 16),
                    gmp_init('0xdd2b7b7793593d3e2d5819856a2a953ea19ad0a578d099bcda2deaa3b2796c8efe7ad38095e8fd27fbaa61ea3fc0e1f910c6a83635a6c0be7645bdd68dc50e223b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18642f33c2422636d074233a3569a256b1352451d98cb04c0f351e89ca1d36fc20521e570dfb704f4248e84ce7e027a4477f091232ae079762f88fbc549470d7e36', 16),
                    gmp_init('0x96543e4f318dd710f6c1204af558436e2fb35dfc4371d9a1ae3eb7beb99c8fcf2267c7eba1b9beb6d6a45ab219c3baf6d78b03b9f60c2faa7188d6f4d60445345a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cc1fe0b7538c5540d0cb53655dccc703ceced7fb1dc4c1c28f4b480cb57ea3cade119f4ff585c795f0bca333e86044b4d4cc051818aa53a2af8c0fbbd4799716a6', 16),
                    gmp_init('0x147bf3d689068bd440ae207ffd25e625bde2faa11ac7d65704a8377d5884913c2c0796ac0b0e4565f1e3a5bc8d0fe7c0533b6756328ad67f0a0d937f3957c5bc459', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23cd613cde55b71eb24c0862b5dea7eac0275739870fe92d67b0fc5c52ea960842153548a37a4601d10160d72e07be03b4e42f3e95c499d10a2f7b339b2b037a05', 16),
                    gmp_init('0x373b5029b5481132155011a102a225271a25ac746c3d750f33508a88e61a151e50a9b60f768c0d127edf816addeea21f0985a1af53cb34922628530abf98a98d28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x177f06c1fb5335d2dcfcc86b5ac35b00e9cb38b860861be6975c48559b078702918736b98d4910ef79140d2a97d6b4e84a9ad26e06e9fc27f5032269c1bdc9fc49b', 16),
                    gmp_init('0xfccabd2939cee3a355bf8864fac0afabe443665885c4fab94c9e981ed52f427c3055fb213b917c836055e6b2e160abc5b8bcf3af27ab32678a24bfe015658a4588', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x172bdc82de6e03641b70aff87140392ef4ce2231745695b061f12be94ba99c5c5b2606db8a30d999a0bee45d2e03e2433eda76b3ac1b39476f383fe2ac97051ea31', 16),
                    gmp_init('0x1f09ac71cb2dd05403b675b2d4e4460ca71486c08b8861e56946173e4ef0cfe16532ff93349603dd10956c25e66498a09a8924466e6c5fe49e1c9a067a61e4ddb23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19ac116f1c94447f110a10cf8fc302cb07b967698fecf659983ae65dd137b25a6b9b987896d504c5e8bd74559f39b53d25e610a0bf5b5e8a4b1eefc28baa0c707cb', 16),
                    gmp_init('0x1e9cc1e4fee4c62d68fb496ed2c80be240cd3ef40d06276c206220f8e3cb6376b638e611a9ffd61f58b1b05eb478dc0a0946099ad10a90703dbca833c3f74b590ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74a83e18ea7bcaca5d6c42985d2fc82799e4aafabff2ce2fd5659c9e0588a736a2e58208bda33ea0c442ca9e1c3e762919f3c270f736721328bae333cec37cc3ee', 16),
                    gmp_init('0x5f70f63a074ff616ff09c33229db76e132bd5248e2b32e562ca8a2a2dcdfb545c5642756577b1061cddf79c84dd9fd0a302d730134babc4dd1a94f77548e8fd835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c796c17cf1462a77e63e5cb193d3215990f3d42ce2c898732860d74d8dc109412ae78b804732d40d5d298f3b0a5f68f1a4a5c3db2c97104336a2d32b0f3338f86', 16),
                    gmp_init('0x11386e37d902c35fa002bb7f22a6de37b7c4ac6b88a29db023becfc1ba5b4f1bd816f07fdd1d7e8e866df6c0a2ab1fd56b79711dff889cf36debb71e1b917837e4b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7f2e88d76287b187eb049b33ed49d32fb65ced8104e097208f12a235d1a21b04126690030aaebd922b98f876d1831a9cb2122b97ec004b810da0f946b34c7f31f1', 16),
                    gmp_init('0x14d8a363ccb727eb837de13d7bff1bdec37402e4a9eff07397bc90c53926dedd4f35a24478a06f38abb4e02318f6fef40c13b052b0a6fc2830a08801d4eaeaaa0d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbbb717f8fd072a684be6d1874cda02530e54df2b48eacfcabcdcc3cc1561beb89187bbe7100c5540ff3a52fdf3d25e73c8ee12c7ebcc9460ea749f2661accb5d0', 16),
                    gmp_init('0xdf31efd9bfe91fd3066f92ec1d357d9e37557f228caaaf568bd252441e9e6caea2004e73b2b81c02a2358cf798695de295d8ae0921ccea6b7479de2d6504bd7407', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95d474acc96b9672b8e0219467e3615f8a459885f7fe428f9caa2de7f4fc9ffa68a375ea960f834a4682f569b46920e8e464a00b7508c44509339bcd402073b42', 16),
                    gmp_init('0x17b57d56bd4719b1ccaa140ca978ed35507f54624ec02579d4a1e950d1aa7334a681b8d9d653a2f7d9e504929fdd7609d106946f74b436617ab2c82b7301cad08cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19be83bd36f051286e973c011bcbc117070854dca361c25b1c81364e843ca8715d22de3d70cf0838edb4ef3232e9367e3060e18083dc739b54f650e3a2694a7efd8', 16),
                    gmp_init('0x932e9d8e98d016e05dd5a224c8077377aa96f5fa25dce794f51530c726ce9a67a79d56f34d1a0bc553a408790bffcdbb02b910f5b64287520cf1226611c0f59bfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e61fd5fe0355005399d395b7602a0f3155be4d5d967b4036f6b0ac27a1d575767d8b5e352f4e26d021e2585f5a1f3f1d19538a468871cf3faabba86cf80c28bf4', 16),
                    gmp_init('0x169cb950e0e581a900d3ed74ecd22b0385955c1e41e0f0a976e983bb01f733cee954bbdb0c1851f19b5cc7da00a70c8f092abd2e4b659228721c7bbd9a04bd2a24c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c4d60d849991f70b82d52236235c253aec9d481fa0f73e6e645e6cc4ca4ceccd3c135e623363401611c65277b4709db235c43114f0d8e683d23e884116e71bedeb', 16),
                    gmp_init('0x86bb256b462f0f204fc1017fb62f7eea0ce54451e07f9a8bd00c79f337da2ec593958cd3f21487ff3143ae7567fef1ac0c4695bbfa948669b5db01dd6632f8eb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a991f3f3e388c34065bfbd80134296a5e6d6ddc0f44dd18ea084ca3c31388f1e0dda61252820b341b10bc29ea3f28af01ea91e278642569a60103ae8bb5fc08e46', 16),
                    gmp_init('0x3299cde7ad60b6c0a077d164a13727d19c70cfe2347179a2e81bc6fc5b4d2fc00dade8b73242ab408f9201233213730ff8ffa3fb5b574edc98d7d6dea4fe14a17d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105b29c6ae7788752ef6d3a6221158a2cb509a31956ceee94fcb082ae04117515666fc69cd1076833b37282de355f56eec8a928fca6f0b88aa33e9a969a777a2dd1', 16),
                    gmp_init('0x196f3f594a50ff4755bc13d695eb8cce34c13eee334bebcb461a851306b1207191f3c6037179a8bf1789deee7c4d77237408297eaa04e8990b544ee879abd125523', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15217b0a13ae129ed085b91281ad5ff0d1f8f29308d4ddbd5493ba66fea9d766c5856d220a7a3295a3f76546027650994c00d9f6df58eeb374cdd33c7f04df980ee', 16),
                    gmp_init('0x484916552b68473deb2263bacd94ede84bc1396933298e80013a946d9b86176cfc9e48cdf4e8bcebce90be2c9fe70c32ef471cbd5f1887635f6ebd07699fa0a068', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a9275ddcf09ad3f74c3718575129fbaf7f782d7099c6ba76ffa357ce2798e03ac99064624c90f6194c2c0a54fbb7413e0dca296e58f40e4ecd370ca154611d4dd', 16),
                    gmp_init('0x15d11e09e8f326d98598f3c1815d1dd4835157420d05f2133d111f97bd08c68c3ad2584dfcffbfd128ebd8f2eb86a83f5bcb09eec783947c6c56ee77b4cc4919031', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dcbfcbb6bfaeaaba52127bdb148dbbe5dbd864867cfd950ddefb4708aa8b7f6adebf0959bc953588fd80f5894f579a2d3f8ad0b6f44fd689036e646da00093320', 16),
                    gmp_init('0xeeb14a537a60c432dfd5f60470c94d20d1234e79ae7f55d4657a1c86a21a987915ca836ff3b02ca3c15d4f3e3a71e12e2eb35f2215e91274c6fe12cd7dd992462c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105a8d7ab3e576954414de26646068807706f242df76886082ce6a841a8fdc29253853840556be5e224f3a754972111b39fc3e663659074c082be0ae36cd038af41', 16),
                    gmp_init('0xa5394308e642e75708ed40a0482981de06c6c529725d06ce9f5db4b1df093db021910ff5bfca2c8838f6439594c6aa1fcacd54e43102d65857452fa47042fb45c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x104920ff5bda2c06c33175c5437144fe24cd5941509da81f16f77b69cd980cc56863abe2832c2020b38345d842c03d0d6d93a154bc61f52fc88077b993ea7b24726', 16),
                    gmp_init('0xbe9792554279883a2e2b4d266cf403496002a32d347fdc8cf409c5821d29267594be8d9e41133889587f3355eb9d75bb0797576406d5b5410a475f74047db14c67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16546bed0a6cb9e04565aac4c2037209003177f13dff1d926ea1388e29d1f9958dff4140adaa83cd3eef01590081347e2eee5d9542e558f5a891140d1b13f7e1b85', 16),
                    gmp_init('0xce04d12ec729aa2854de503b26a1fb4b127e11b9d98d1ed5a63dc39dbfbe9011a6a059d555cf24fb7db23c59dd4348ab81662149bfa396a95d635535b494312d7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1408b72d3e0cd7fe2519116ad80d36ba72f490e7ccd4a4da61594c7e1c1510ab002e1671f6ffef175de452525fd1545ba4904050554ec608fc955e93adcca9b65ab', 16),
                    gmp_init('0x1788df6ce1cc813b08a2b2383a0861391dd513a0609012178700b4e93d3c3c6b47bbf4d15999d63e28e30c427f1fce3edf090bb6ab2ec42e041c4f0896ae30fa947', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3e858b836fd824e9ac45764812bdae3c531dfa2392a08d539ee634dee76f3a75607e3314e96264b6c0d98ae4f77e5446a176d513b29f39a562bf07e90d8114885d', 16),
                    gmp_init('0x10e0eced67ab84a07fa075c3bf780be8263e224dd3b0d31132a573debc818a5648661b79486125826f0491ea6427f6c259c9625d01b1117cdc29bdd0365e324ea11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2e2ef7f478c49eeb8db1cffce6f8e385f0fcaaf23e6d4bca17252331576f783d521ac7bb7863c459fb38315da76fc3c52ceed6f8f7e8160b486d3c489c4cd8dd', 16),
                    gmp_init('0x1327adf565ab5f34fd8b46886878b971591fd7c30a974d2aad467bf3709daf3e5f979352516c38aafe22c7e4bcba2c02f22c14cffb041e05923a3c3c341f690d5aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87cb57643738a53a34cd2b6ee670f42d7aa1c39ed452aeaf9b8ef10af154bf74aac37ab3b3be7753988d38894050383d27ab6fea0bc7ac319982e9010daffbd971', 16),
                    gmp_init('0xd01dc2f304f6543e195b5ce8055429a4034e2fbe8a1c15c8c4c68f43737fa9620125e82c9032a3319333db44d87d279aa80d7a7ab1408678e35a1416996f80e03f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96a3b3bcdbc57ad8288e61db8af16144b5c0124a0a18b6d228752f051586723e536348e93a1b6530ec384ec468c8582d0f4efd0358226849ec074092b0518c2b4e', 16),
                    gmp_init('0xfe8e113990df13705defef96e49dddf3396aab90483326b6d2824e4c576fb32f64287eb11866c7047406f1269583835c84c6a4fd2fc826acdc7b5eaac0d5d72677', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c018b7eb2712204fa89c4d58100538315f20c0c8a49151cb558ad2cf6570a03015b0e691668e84f79cde488a31d43f9b89887fdfbb9e4740e275605b034319c263', 16),
                    gmp_init('0x12d1edf5be80713fb4c03dd506202069bed1d42b0b1cdd488c61f8e83f33c9260ca277ca623ac3eb9271934bd385986c5a4b6302374684db0fb2701f40ccd3d6255', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cd72918f251d92e66089032b0d56597daaab22b6bc30b548af663f8158f766bd900776735e23c0cff4779b883705b8214e8679478929e1f333fe0adaca4c2a3f0', 16),
                    gmp_init('0x101ecec84484234d819bfe90229e34a6f6849e6d42cab8403f8a14ed1a1f2f109c9bc9c468b1d80629b5d6f7b8664244b059e12b11ddc3e849e152af75d026ccd7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8b2bdaf4a6b23d9db984bc63c209c630995ebde8c622f0b009504dbc067d0b3e8ffd8ba41dfbb530a3ffe008e7b5ca188935ac8e6e57d93388c466ec6afa6274e', 16),
                    gmp_init('0x191f02fbb1b6827d006f3d91182dd570c6e1e3116e3dfff70d36e51fc2960c000d70d6ccbc38de8d6264c71c80816bbf8ddcef90f5c65cc3116248363240e2bb6e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e32c93ced8ded40b1cfbbccee845144aa0a8021a6026a1246129b4ad9527581115e1dc108356aec1900510a7b7bf7b7fe0ac6c9d02b99ffe18560ed5e263840645', 16),
                    gmp_init('0x145daa97144b0f6f23ac92cb9c7399c9d0e98a8b0211569c5fcfb47210f948aeae7ece8dc33c1c6a093bd4c9a2219e26083e8b8b8ecb1f67b7c2c841a6ef3fb0d14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1699c8978745cf277cab1fed34868374e1030cb6c33054598dc03f86bff5bd3807083ccc00cdaf1aae84f93f2d6ce5584aa8dfd070f97c41e1498e1b7cd45c1ec84', 16),
                    gmp_init('0xa43bae1822bc4070b1bd9ea3d12216b8d3e7bcfc86e06102f878dd4b8e3cf22212cf81dd11eafbe0644e60a072a72bfb769bf6bb8c5efe5e0a93e3292bba7202b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1db2c06dc26723bb22918a916fb7af0ed7a65c5fd06a7f884de862417f4f35b163747b51181cd75dae47318942a16702b4c9391ffe9fa07d470ac1afd008cbd05f4', 16),
                    gmp_init('0x13cd46fa9527096ca0a7e4708c11d5d4ad91aa56dda76bfb0f8d3c50f5f66fb6e1d2c66e399c7ab2f768243b185b82bddbfb70b882c48173d0090be27394fb65431', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f1ce2aab78e542b39ccf30de3f8a1a62e34f961e974e492cc3c7bd08cf4d36dd88b8751ddd37e055546155660c3781055f80c68cffaef537c877929f8fa3bc4e4', 16),
                    gmp_init('0x169771600a6825a7bad195079d0ad0cca97809dc4453f75c5339302425b8cb0bb4213f4085df3dbe01827b0e110df87c951cc644992b6f8f8c5a5fea9fce9045828', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d8b11d897f8313cdbfd8422c5508bc05bc45613fc095719b2da72069514673910c14e29de35a32a1d28e6d300a9960e2d05eacc69c8ba60223d950023d58a87777', 16),
                    gmp_init('0x129ed26ab4ccf63b5c1ac0ea13624eeb67541dd680d9b633103b7043a6870c0d5dcfd074faad4c495c30872ef2a530c77883fb5df95167c5f61f95d347cf9251dd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x174a164b1dd5f998e14e220c7f0fbbb351587fa0c9879b208a7001ebf89da5b2fb4f399ba615d88d031143ee04435d4bc1057ff2025f91928bf4acffb1214008e42', 16),
                    gmp_init('0x1623c49eb25db599df04862b361fb7ff390600df0e66960d0dafa448783537f1089bdde88f766015b324cc8c5ac47900ce530689eaa016986b8a7e6b624c6f7b10e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x387786c7d2dc3ae28d2c3e1eb5e9281aa6020aeac5607f278bffc08c99ad17ec8d3dfcb2260de5ff001f9832e051f39d65eb4426efb27b41868bf9bb3614f3b17d', 16),
                    gmp_init('0x1a54accd52ea221efef6f152edf04634d00bd6851513b43e06a916e3dce0c1eae0ab80406872cb326da2eeb4edbbddfb41a23445842fd7afa87e821b9208b6ea35a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f033a5a980f86edbf1acc1b35d3284800d2f1d6e5e41574e43fcfa39310972a65f17dc2a5b50ea66fc9c581932e4dda5dcdc01c122b8f579335f5321e7e13a4b52', 16),
                    gmp_init('0x12e1790c78d9754ce730fb741183382ba8670dcf9ea585028f5941b9afa1271df67702de766e6f37bd0ad77beec4b000cd48ed903e54d8650221e4b09ced6b8e0bf', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7df1caccda1540adb8357fd20b23986cda797f3df0d1374a41af997d5ea94af9b2c255eb2c234c1925df751116cb76b181f02e8e404f03b92f6d7eedc48f69079e', 16),
                    gmp_init('0x812fb3354e2500c647f4773322aaf9cd03b6c836b187027d7bd1b5b8a33a6eb09a725d12a9bb4ec5e80515eb70a0f9fd2b0d7cc0d87d7d1e542a04363cc01605a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9c82685f847597f4bd39393ba7b797492b8ed4a312b1aadbc35f384caf0e10c32951e2cede7c469bc225e2eb97fde24919e431a5c76e28bf583da529b41750b74', 16),
                    gmp_init('0x1f3aebfe7c7a54f3311d4e3f322358398f3cd645c46aac06ca834904b0b6246965edfb5378945f15efba32102bdee3dbbf4dc3e83052de3e4e7b04e1261436e2563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa703c2a2204017c122b302fcd178603de349939f0837c5959f0ee2b60d44b4a4eebffb9f017dc0a64c73dd56a446cb76eea2c86068f9f2b257ff2fa49cf2afae47', 16),
                    gmp_init('0xb81de803c631896429c7a70d094f4594137826e5cd9023bc0515c4baf974401fedcc3884836d29bf3e38f448a71ac29755bd8f584d4c01caf848acda9757413107', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3176361bbe92c1e50b0456b2ee2c19f3658fefa212914a3a4447819187bb923ceb3416e9e6d5b04ebe279ef5638e4c5fabc5903fa42b2a8bbabb0d91dcef34144', 16),
                    gmp_init('0x7a588e4a1470cd91e7d73b946d26a50f4369eb257aa36740d1b96b8abd77865b2ff1e104b908e4dfa26e720f55ab9cfa7333bfbfb3098a50fcbc56a1af824fde34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x188391499b22005a71f6bfa06099643a1a843d3593229bbe61ecbbd49a1f3d6383aae07317d8c204a2ff3431ccedef9c5c3f4886d248a639b8dd1da41a113dc8b45', 16),
                    gmp_init('0x16d1b342d41eaed0f737b2ec7ea30be88ea71378e21d3d79ea0660c36ced2d0ce9926c03269c3751769ff6df557c48b506331987151595038a140774a7e79d0771b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa545111fc778f12d737d8440d7d59d4ffe7c387d90860acbcda83f1a2f0e083797058232d599552fdf3e49142104574825c110227519fbfff60f1b2a0ee2c08642', 16),
                    gmp_init('0x142251ad413a29f6fdec2b556135b964bac27d002549d440b524d486fd4855585e0c2fb1108dec361721abaa0f98d1f0ef30823b735a8129a6e77acf98e28e9b450', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49ebf60be098168aa82f4440ffa2cd61993d1823e16942e1307dc7c04819e24a689df47c63e8829fcd9c00813e0a48af717387f3693e7e1c8747de9d47e138d37e', 16),
                    gmp_init('0x3f548b37c59f6a0015d633d0eec296c03d2b752ca371e12239e1dbda549c4bc7cdd536d3717998c8361b6f0ddbf8fb676f00a0ecf9b79ae683989690073b5f346c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10314755be59ef63732697600593b8f405a804ff00948fc6659199b07a2836591b0f1cb448feefdce6c7200d473bf3cdbdb4921306bb788bef76ed1bbb76ed0892b', 16),
                    gmp_init('0x1ddea0e3bf8010887de4ceea6a6e038e19e9e4ad9aec7df9fc06a0b495ef771782548640d21fe7baf1e564b46552563bd1250c7e33bae42ca1ed0a6d1b323383b1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c590e661f3f0a8a7990ee319d6708782dd067e1167de28fbb913958864001ac4a3f80504e644bf8c6ecb64f9e9f093c7da75176aa6ec7c655c4da845a0a4851434', 16),
                    gmp_init('0x1aeeafd847e634c3d7eeb2b76ad8c310f5ca7108d022fd729fe454827e228898a249989c8fe71a3bc285e2bd35abcc582c02adaf4e05350825aa161caa15db20757', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa97203a8f76fc7bc4f08ac260a1849e45b440aefb22e64eef478529226908afe39ee7c7b5b6e7035e7f3faf3b354e24a42f17ab7f6344965a046e47ecff0136b5c', 16),
                    gmp_init('0x1d75e14abe756165147e8823a72d019f4a95bca0410150ba9fb808d8d2957715f359e33161eb9cc24f3a7387fbbf8f317604a2e2716e65bea70f36d34eb171f3c98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x692375e13c3fe29c8ab692e3bb679eaa2a3a62fcf658119ebfb30e811f211c2f4bd9a28d29915a575d72a83575094e8bd2b68b3c61a10cb23fd7f60f17d77089e3', 16),
                    gmp_init('0x15a590426c042a30fbb35d7a7b70f7e555cd2a15a1d560539cf8fc9208359eaa8ea6b37519e76a6f0d425163969b1d6fb5b6ad8d6eeaefe8d7cd613b9ea2b8b53c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc65eabd8a0d47408ff1cd6d595497fa0b1709d86ba11cd0445c05cb3d07fcf66fc293d27fa71f684c1f70938531fde9e82663c5481fab729badc6fd0b27ff5fdd9', 16),
                    gmp_init('0x1ea96470f229677b2d0586ac6c8e11191b137dd5c14d29f29c160d70881a6d874acaca11586e205cc9c00106f97efce2ec6148f2b5049fa00dc001ea477b6b64713', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd3a102b6a75225100d105f907e8d33e403f016202a66711e2c4f38d5062ae054f464cd498aec45adf323d2d7334d7c1a1172de35e26f0fc61179058303a7f3608', 16),
                    gmp_init('0x13f160703b36bd7bc541c9e65a6aac4dca842e6fb9b288a3a37a8e5b613969c79ceefe41b2c12cf1ec03d64cba45fcc954de4a5ea1f4bcc6cefc754a811dd02719a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44370dc630b622bf616da68920b8b77752fce8188dcc7c56f362124a0fc19a0df84d2c6af83c30e52c0162233c6638686f548a0a8f8ade35314888c71de2f66bca', 16),
                    gmp_init('0xef24d36df97d78f93f83d30a082bf11803fb7797ed6cc50b4f9b43d6dd897746d01052bbee887d8d76e374dd3e991c7eb1a06bd9c232cc673be3072dc65b51fb0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1723c52993bd84b4b551f3ff6b96d0e87efacafc1fd79b0b7afcdae675da59ea3aee203943e82b139b5ecd16d810cea9177e3f31aa9c78038390158728662e9c602', 16),
                    gmp_init('0x148eeea2e6f37bd4d5ae263f119ecc81fb09c197b15d8322e6535215495a50739c86c936445ebeec08ea0fb3f66f80c4a7df25cc44fcc223afcc8fcf451415e906c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1820033508815df54ab5df4cc8c1c0e91d99d69d32a5758870f0dd73c326cf50ce339ff07e05879bc51021b1721d43150e295f69e09fb01c2b3d7c0efa36ea09a93', 16),
                    gmp_init('0xa8c56c7c988f92304bb97d3f449eab8de39a435e2019fc86cc3da87fa776e515834b1d509a1f7eaad2f324462c70e7a1526c4a32bb5c46fcf4bb656a89f2dc12f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f1e52961635d737c3ebfda45241aee3ca816d0b1585e5c94f2c6849deaf28b14d2a7b87cce1b301763b15ecb0a1690a79e7767e8a105d9c9eb30b495ff9b09ac83', 16),
                    gmp_init('0x6f888f12192bc3f1a4edf2e3dda1c311970031db26a3e3906be0cfdace80b79bf7890c3c2c87596275f11e77f7980481aca133954ae02ea428339f76cc589b8ae6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa79125887cf6ad9a4a9c9f2a85f1577466c8ac5f21b8bb845b97a48a53ff98345a8c359fc491d988a11d490d3adee7925cf0fe6fcbd41cfa5ba0a5d23dc831ac0', 16),
                    gmp_init('0x2a80db0098be99035f3b6839b4d47dd376818cdc6134f936dabcdfe863aad0a6545ad5e58f60ef0fbe5806f730828bababa9610220639df36b3dc5db89e8469532', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dbc19e865322bbb31eec17a551a8c4097d16e997a89dbdb529712d15881912568655f01524caf97c00ecd401f3e8e1495892cb4839f0656a6394cdaf5af579e74', 16),
                    gmp_init('0x1fd193c91e76c409761aea096cdd89db3c384b46c0e31a9f55939f7171e1832e1e3eba73d693ebeaf7e19d26af4614532783afdca352d6512016b181fb67cfb9654', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12786cbfa6c7d572c731b6cfaed357a9627d26e97d6aeb37723f14e547320fb8e29af7ce54667064358e70c8b50e11832233c7862854b132b1ce0d1a68443fd6ea9', 16),
                    gmp_init('0x25169d74de6758e6de6d82fca256f418ff7d174a6da154ae3e0e29095f73ff51928631171324f30ed991f9506a1848e283a1e46018c0b8c8b541863baa615a655a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18629eeca78392b223c766af205795f431e4598e545a8775d3eba8e3561f9e57f19cb2eb8dc1f240b9ebb8b7a9672cb61c57375d6f03b7cafe7327813857fe215da', 16),
                    gmp_init('0x15f7c802a7f8eab9bfd39f59383df56dd84d4b714fbeada6f884df50d526d1a38704adbebd20b7bdc9ea2fcfe9e136800f8705580fe4237e6c310f6a1b2ad908bfa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x880be6609b30b7b2de101d55eedcf3b9b635d5914d26d2bb52dbe97addecbaf8ce381c120cac864bcb9a7ccff0f6bb510170442e3eb89c5039f890cfd9421ba81', 16),
                    gmp_init('0x9031b9a79692740e84b03cefdb5d85d5824ea70fc5fbe47f1d5e12751a3f970409f8a273c7df6267433208eb5054afa2fdc1a8bc5efcabd0f089d0182711095c14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179812e76db6349eebfe80e4e37554519f9f1ede134ebc1170446de798d26b6384f3cdb0634b5ace9e5225a79370cf6ff1d3855473b71a1a7f6fb24c5b4c56caae5', 16),
                    gmp_init('0x91c1b0482a4305eac55d42ca18db708de377b1b7b434c9e5172e4886170ca3bf38ae8e58262c887ac22bb2ebefa0dff80f27c782ecfc0d2a5db0b69f323b354956', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64600f7e216f6273820c0e75af13998074e560cea3a2639dd5e13a4f368a94d77fe7a8208913c017dd8c9e931b1a3e51663fee89c1d4b22a6d7d41a45c2bc72ac0', 16),
                    gmp_init('0x2417c1874d0192b6bbc0ab7289242d900440a3debf45ce09204700d58714b56b703929d722c0a27f20f9bc832fa0876b4e99b6ca381d59c76471563e4620b92051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b24877a419def7d1d6663cda05098c25a6beab3b9ea85a07e41de8364d08b21c5530e9b2fa572d14685fc522e2a505bd0f2b8d470b82cdb48df3f021045dfa176', 16),
                    gmp_init('0x197d58105d5fb4202a7724603515bb13ab34c4e37568cfc9acd7406ae753e97212454a3285df5ecaa4218da4423a329fb628f01dad2f37bbc2331ebd06578a5b2f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0639da5cf9def05846ed0adb6da50f90627646c213d5cc38405c4c48c17c2f5f1be74a8739979280fa3c4a0444a134cab9853e1fbae5f9b86daee97086c538825', 16),
                    gmp_init('0x1aeea400c7df546ffb010beaf5929e6661b6923634d2da541190dd4435c8ab476e16a9c02edc677d4014ece38075c8c0af7ec5ee4ad52880ed66598023e73b5196e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafb27b26b3cb3350095229a753ba2f15e5d72d42b19198c02e26338d27e2060c35c6370fa3db7b5aca3e723ef870a8e62744d1d8c64c6a4e27d74be7c9d52aa426', 16),
                    gmp_init('0x136284fcf951f5770acd061c988ee994490e816fa525e6e646fff4a6b257b9a6118b37e82a8e6bcb79b1190a874ab9a12d938a1d7e6c80555d4a0be1723e68fb52b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bb523e3456d9cf17d3b499263ba5d967feae0847bcfd42824de023e37f819c44254b1216dd9b3c5ed3ceed49babfda0bc589ec15c83f9caec97695a838ed5578f4', 16),
                    gmp_init('0xa88123773dbc726ddd2bb733268d35c057a61a9f5fceeb56b0d65a57086e7adcc074d5dbcfd962b3b294400a1320d69b6c4660a76efb0921951088b82c6f4b631b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14e96e8a2f211e7fa3dc64927648e1c50545409627f04aa556b6b45ba8cb9f89171def580f430f5e0596382316a4d1662a9f9ea919f2df4afd09310e7e5bc9e551', 16),
                    gmp_init('0xaccf30e68da424876760020ba3f4bec3a8e1f61dedc90eb63932df9b6846ede4797f9e24bac3c88429e936ef62391e9644bf6efaabc2b283a4f1ca16e5def006fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x186bd487969ae4467b1eeafd273e9c8754446076ca007bff0ae7d27117e93a43d50255ef5c99eda4c200ad30f5f8d94b3f710c1e9b4faa5cc547b6dc760cda7e4f5', 16),
                    gmp_init('0x14d5542dd5838124fdc225b614b112520147219ae7962f9b2115e3c7dc7465a39a5a205366bf6eda84f3b770f88b9a0dc98827b5822e97ef62cc987f3d47a4e46d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1604321baae4de5208b7319e868b22907306148fb60ecd3e84d4a35540bee1e838bcc12e59a1c7ae6ddaeffcbdb4fc7238967b8913785c741c84331cdcdd6a37bab', 16),
                    gmp_init('0x76715da4c949092985e15b5f1e58bca3321997c69bb425810a1f189de81941b5187446023b5474e52d0983c1f7d7bde47cd9e1f5a8cfb9252a10c813e987717bb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ecda8e401979e84c695e1b6c9b0b638ed176767d6410801f2876e0150c43df9215821515780477c90a83d3cdea21c03b3115da68ae4653aca3e5927537600c9f1', 16),
                    gmp_init('0x1828428942d2f854a91c8f529c21cbd540facc3386f12efbb9e53e64ccdb8ec522b4d3d02ae4e3b1b94cd545d2aa005b4de5f2d975bde004d595500c69c85cb274f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1354426171bab7fe63159b8b719da91cec2f35bc1ee49d52cfa32545b1e51450f5445c2e09311be3df5e458e275d87658957f0593f8ee487eb92cda398733430edb', 16),
                    gmp_init('0x18c65ab22b5a170e75ef1d09702ac85d50bd9deb71557fa7188b0d5d0d106ce62fb9f45087980cfdf9872e91c8c2c90c5d37a6ff5b1fe8be94117c4e11ce00a5618', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd8ff5288eccdfbe621fda019fdcd39411961bd5fc431462e9ba5f437e4996b1515b57f9939d4c9f2afb32ffd0b02f7e0b364fa15ab67ff46392c099d20bec2201', 16),
                    gmp_init('0x1b84c7ac000580855ceb2044d4bab1bb6c2215793cd3db84e5ddaff64743f15435d8ef66b51857c09be945e6a62d2681847e4f5a626301bae8f43f49a318ef349ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cf322ba0629deeec3d7c8549e874e1b9cd6f0560d6b55b001826a4857d606a308e1213c72b155affb417168d7a4d565a2e7844cd85e0d786e252bea9dbc2a1b7ed', 16),
                    gmp_init('0x1ba1fd01e4a1df8262a546e63f5957d25e34c0f860d7f93878ca636fd48bf10697a3fe8a38d703519073ac89a8a0f7e145aa81ce2f8aeebdf960a7016b8f59fd1d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb47fe014d87e7f316279e4492dd49751df2669d80270ced72f1cdf807a1fd25709f784a55291e24f0f31a2b1e27bbe708e6cf5e0b616c4ce5a37e766a6c64f9c9b', 16),
                    gmp_init('0xb17189f5a4ff4b7293729dfe2a39edf59d43f0925b0d8313a1c427e30bf6d1dd12d1118266e3f9b61fb3d2248ec5873251bc88356945f6e16ce0a2be33ada43f51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa1542324c357ad5616e1c5d2b073b2ae5bbfcd761c1851e4430102cb926f12837882f5313ade3133962bda5e80a8fe01afed60231de50a1e9e4ea02cf8f3110b8', 16),
                    gmp_init('0x4b0c6d69d57f2f666abb44bd5db4865d1e9ed8dab7ab851c47e0dfde89e4102b12d88a2cf6b4badb287f7b68f5fdaf72578e5b465daeedd902a8eac464c37d1a01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1db22ae30d26827554f65f427ade3d07577ce6436d11fb27511c285ed1c3c5b7c098c7c0024ad2dfd78e70f39ef1ec1ea9289c9dfa314d3224a9fb0a0d27a2ae93e', 16),
                    gmp_init('0x12a8a4ea765f15c664a85c30516952db9e877e568a7f1c98c0ca670cb04ed1fc69ab481a8f865d2662b0a55e68e6c9da0fcb26d3f9db6b1276735ab2a33fe772f97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89d92bb7dc625355721a525509f70ba665a04cb2836b6f39922d6dbb25d959495996ddf769d69ccfafcd7267d26d5dc885f9e603778f785ca13346c5da3b8d5865', 16),
                    gmp_init('0x1eac32fc472bf33f0dcd30bc50e4ba83be20e5855b52419b535c1d49b3ab92611151f96d41972f44be4c5a85f2dffdb96cb7722335f67a9780011ced4d3d325263c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13fbb67a667f73c64a070071b01de4127fdb6e321bd9a42fff2de7d84ec8006e4348d6d08d350fb9167a4bc44dbebae55622820c97e11919f9a5c720be258ab3605', 16),
                    gmp_init('0x1de6ebaeb9d5eb59b5e1d9405604113ad0e94eba1441ca7059678ee0fef73060a42709924fbf8b95916f28de5cf258b750870c787fbe10132d0fb25e553f31d98b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x101134b2949ab05eb580f9fa673a31c89b4c4aa10c63e74ddb2adb82a35b80d865d0406799baf3c73f6e1574305f391a2ccad0d50f0b772c881d55a28a7dc10eb96', 16),
                    gmp_init('0x10b32ad0ce945d70a62cf13344198b233733df9ca3b8527e2ad2578e281ba8918f69f1f4be4a886435925e7432b8ae54a23a01c7f4c5581cdc6d3718bcacd00f753', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea0c211ef043c4667affb76cdc93f4eb3677840108a3b354aeb4890478fee034de03bd2d507529c812a88664eb38a5e224c57ec74f3702a3064fb8b429f594dbfe', 16),
                    gmp_init('0x16649cdd45f2be203b1dace8fffcc6f191622f9e5d9bad912174e623a41007c34a923e4f98c8899a8b590c93312fe8d9430c13f4a278b47f0bdc3e39ee2336294af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x134dd2b3048d9de7d1c3be208dfff5ba2d84ed64770e346b78ac97d73eabc55ac05c95b99a8e26fc56a4a0bcbe1987742cff4c3f2df66e6036da8228eb3494ec6d4', 16),
                    gmp_init('0xb00526e4aa06b13c50730a871ae6255730563cb5467b5a6d85e12941486fe75a3df37978ebfca5dcd16714b1767a37c017ec2a0e1b7a3f7f2dba1c047088c3bbb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb62e1a7bcadb6ca03aa940f16e94bad8e8790f26d549783b982707f1b2e07c53ff612a6ca365e06d5d6dbd491639614d0caf1da3442e086ab271eb9485fb8547b3', 16),
                    gmp_init('0x9ef5a8c9f71a7f896860badb4c73607baf31419704616938f0e7e7d90319aaa4c2a8f658b4e40923ff27bf1e92de8a95b763272d70e14ce7d33546c7ffccafca6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x249845881cc5fbddfde0f10851c30471fc04c09109a1856828f9dd442a2197e27e89403f2546c71095d1e7e8ffedf296d7d0dca4087982a66ed958953f38053cfe', 16),
                    gmp_init('0x3705db3034acd03e7b4ae17e8562a0a94620d5b58c0edcd7dfec4a609c3284a3d7e296b9124dd7b2f27eacd4191e72311331700b8125baf333296b2075de6d1a79', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x469eab8ffb03e6765e65aba1062d720dc5fda5b20e47e0dc0d841dc1d29492569a5f76d6bfb5be20d02e3c1e7f863ba5d98227fb5d7ca089236ad03106c4dd900c', 16),
                    gmp_init('0x1cc710fc9f9a16ac6bdb71b393f40ab7cb851f51ddd17a3b1f02c60236c5c1e7d9ead902eb5da06607fede29968f01c7409a2d4c8b1beb7b1f132d92252497da0c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ad30ba75a8db40f58cfdbc547d6c04ea3ba2d95ca7db4f8a0b3a776ff06ec13968d27a65cb2995c3b4209d0404296214412c5acc0b14e8f9648a3e381ccdcd741b', 16),
                    gmp_init('0xe080b3126c514afdca85880f457fe092aa7287dbd5e978749d9e16e91db5f5b798eaa84d813ecf05fb1e17672b9029a8ab7d2e26ac0f228b65f6406a6b84115d90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16064cddb9df2d41d20565d12c2656bde81d84afb467bdfd6f62c8d057fcee4f44fcb7ebf5e5ec57e2a31ecc1e59bac743778da1f78a987513bb87ce5817748701a', 16),
                    gmp_init('0xad1a0e1d4938ec25555a013b22caaa6091ca501829c2a4663adb96e435ee0fb5a8c75968155d7d27c763eea672e2434e6e6ec3c08a8a8f3d0533049cd35104e3c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ace7e5938a3fd61c667c498876bc67855ab15945020392cd4110ae5ea0cf5b28df9833321626ef6bc0957bdb5a39e81aece1d19e4f380fd8aadbf4f9faf2ed12f', 16),
                    gmp_init('0x1c0d8691d6b226f96da16cf4d17fb1ba052fe243ed0617ca88903730b7fb5dea95a213b0b0894dd6896034dc2578202769cd02f95ba0a6a718459c5b9ef28c7dea9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe997b788ecce174f12468a156c88a26d8270f6f21bc16bed6f8eddf8b42cd77f48d8bda07e3bb896e3cdce5a6bc125d4c72d169e141639bbbb07c4d08bb979b88b', 16),
                    gmp_init('0xa1406500179d1f8e00636d1764df7586f027f6cc87a2804de42b5b4e688d61db4479008348126c2418797c11dd23901aa381b5d1cbc2f6c63c95f380195c89d533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d6ae405982d0249c5d8e3d40c9e28d7e062f881a5a010cd49a724e943a940102f83c7e6e0b747e4d4baa1ab12c10092dd37a25626f60d46e733e43cc8bdcfc1dc4', 16),
                    gmp_init('0xf0667d71fd58c1ca9fa4406b65452e34a67b26e83d4e6107c4dbc4164f2788f2eaa7dbffb14d8378b131f3b4be810044a4b2cab943295a547f626c5c9ef1e2d126', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7537a689d61465132ca57bfc18bb828e841ff7a4769beae5d4aa0d6882f94190b1993806133e55dafae2b98aaf17a07c0047ecdaa4dd813c62ac801bd76b30ff1', 16),
                    gmp_init('0xc661f3e3a4523bd9a30f5ce1a9b05875f4873ed05487bc7d59659953b5608b4f872099e39edc29d37cc5227210e61c567a54513990b3494fcd77564b28c35afa1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed125e021605bba0e44d5a94d8d52f4e5ca68612323436b584ab3b76110385c75cbedd33b87ce8d52297b6764d4cd271aa437f499c920d8df15a257c527a668ab', 16),
                    gmp_init('0xe789248d120ecd9b0ed0aab751b1aeae857a902e83c3253275ef781790c48b1013466c1c29d8d62231158ae785154fc334898f4684244ea58e578cd28335e40c74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x917f956e6902150fd380df2e35394506d318d1a20673ccba25a502b3fda3c24f4430b9948ac88d98ea773bbbf129756598bb599f461e4fdf5d7c373b2ab22c49c7', 16),
                    gmp_init('0xf0efc6dc99b32e141d630ac28b9d5a48c16069ab1ba60944aecc10f8e9a32fb87b959758076f0d8d20d16522d40d164fd78cd27fb7d02e063e6f94fe0ae94a09f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f7c3cdb89de06af94948e80b7c7f23910dbbaae7806f32a24b9059c66886be8a2129ec3a878725749b581177ffb5d31892e3a8a75b1c37e5c0177f6aa6f2483c48', 16),
                    gmp_init('0x100c27c59d1a5996169a098f99d8436d353754eabdb39dfdfabb1f348ff542ffe13a1b3108296bd0ea90db03963a7d8667fde5553e2125d836b8dfa10fabffa57a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x176e27111b42be4d6c9a3defabbf380982a0225a73c72790df6efeb37c094c4d3ec5df3f8da28e9e6b8fd77cd44e1917c22c0399afc8f7407591bd81509ed7fb4e0', 16),
                    gmp_init('0x11ca850c2feb3e43c6b5874bc0b246c64386d562ea6c7876a7c3443df08e72c7a6d569b317158675fc9fcb6c96083be23d13853c55b32ec283941457f5fcb3b499', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x793ee90cb4441e1f088e0ac88900c49d4fb3d0c7919ec37b3d3439d9cdbd88796ad0513d5868bfd00c158462923104e97d0eda1a20215e6b5f92e5bc5c8c7671dc', 16),
                    gmp_init('0xc21d2c2bae12ead07a17b6d9984948d333ff74e3e91b7ddd34d1d45e1cd86c1272ecaa1b05c7ed7c0e78308e0d041b19c4ff0aae245f990abb24c36d60fe7e66ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x182eb2e4429bab847b5fd6dcd14d741009a486daa0332d275caec45c8710bfd13672011b47c83c7da5e789a7a4ab92390294fb91985ea16d5bd0c3175f5ed359803', 16),
                    gmp_init('0x3a5cd7c6e0e82bef9494ad2f046d77533e2a664494c1dbd42ebb80bb16fee4d71baa0f461839f6a4b8ee2d428acdd9921f92df616cfade552400e170a33a84e4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1e73d2406e7bd7b878e552f4b77ad19e62fdec51b903a61a52dc1e1054fcdb1bb21a9d5fec9474aff251266ff22c5c31d9cae659a532bebaf38ab25bb09235a3c', 16),
                    gmp_init('0x196565d0ea74288e5f2f991b6d66e38bcb6f71ddd03d362254c9afa24872bf5b1b4a637d131f834e645cbbf5160714a3077c21fcf5ca86a6dc8d6b98b75b1c6211b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17e7bb6b17fbde741302f33d608fefae4bf49ae06d01afbeb0ab5c56e3c4e71daaa73f547e16e189a545ade5c952b5c3bc59fc6ff6070cae47f5fb4555891bb5bdb', 16),
                    gmp_init('0xccb53b27ca8b7161e188978a53d2eed1735714a4f9f175f081686b09ca15d946e8605ec0f927b381c21dec3749116656ac5314ac55e089200011bcec29c26c99df', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1aebae499bf2cc145f9e07da694739c4393647354b9e720668a87284905ab68dde42b96f342782dbda1cc5a3a14c744eb3dec7c176349f73f1be12d8922cd5f918f', 16),
                    gmp_init('0x119aa2b7d45fc3123b5829423dba638894174d95dec96b4cd1c3c7fb6dacc40c2116ff31fa0fa4dc50c9d3944bc45098c91297624e8eb22ce9274eeeaa477c16db0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f801716cbe017ad9d18ac8857116963cf07553e0a66fead00b34efba77460b69643e449cb65a0ab76db0cabf29117e27aa7979ab027b42813f404216db33849ba6', 16),
                    gmp_init('0x1f82b2dc7c8ec4d71a50e74a9825207d2c2704a1d76d39818c83b152ec3885b124fde2e20394e54630fca38fd1cc8ea2c29c7a0e466df1fe3b430cfe5c1d21fbd36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee5edada0557f1882fd5b48e2210b988f7b7e34e67b76ed5c4b03030143aff625fd2151223b915b370cc35c1e346a12c50bccc51c3eeb7a33d01ef33cf16e0f612', 16),
                    gmp_init('0x19261c5703c62d3bc75ac1c8568546e9de23203783c87561036605d48085b35ad5a88e52a03c85fef39895470b5541b2e392729baf111491a7470919a6126a93c88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fd1fc1905784ca960736ad27ff479c30422fdfe83f80fe3f9c1207ac1602ab092afd3f48218c2ddc1f09125a7e6112ece27d1657b1511e823493d8a3fce43380a', 16),
                    gmp_init('0x1dc03567035a213129b83747d7168bfaa1f95dcfd1080dc28588221774cb298a118ef9e933e033f10c912d991f96305830386b0257161cffd40e87798d27fb35409', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d222e8ff88d9ffe64c08f8259265f15588314d1580e24003045d3ec901de3746ded7602ed459e7a8f601f1180d2651dee66e11bf30178c5a7715aea420d5ac5d48', 16),
                    gmp_init('0xe6efcf323631661404f9b74adb20d8bcf6cd321299dd2912967987761592baa214e2e237b080b7054a616e957ff6e34ca1ef5d94840f1ae78cf3f23abc99e0f136', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1111b11fbbc3236121791d14a75521171ebee377f78c6014e09c47e84efb05c41ef1a9fc7951ef7e9ed6b6772051d8ec6849491f70e458ab9e4eaa89410f084380f', 16),
                    gmp_init('0x172b59527f2369f304aa500ce0b7df9b61fc96c62e52aefa8c193a28632c546878073800410a844508cb43ff6170bb024a4bbd74f359393b5cbf789cc6ba63bc7a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10591c2bfbbe82cb4f8c82cefe8c0d072a22499d793487ebf569a89cc017be523e7f6b1c867d70fd9d0cd41f773a3258647eadfb53105294d6e68b81be9052d2ea5', 16),
                    gmp_init('0x139243e2ec13a93a8dec5b628c6c8050c8c0868d9ab1783308ab6cfca287032c5f8e13da562e765991f5e198bc3430d627ffcbe204e4462a67cd705cf5a6705dce5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eed81fa25b0a23ab8d5c3046713bec9a941d5311e782c49ae7157d4ac7f740c331592ba13f81bb2dbbda9297d2607ce3c58ca7f0dd63d2ec28461c1512910f4978', 16),
                    gmp_init('0x1bbae40115145bdce69cd9db7a2b93d4fee7381e45aa0c3735a6ca3e71afa9469256bbd8ded8d1900d79b9dba152201aac220cfd353868b4fbc6d8c6efaf51614ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1990de81b3d2b93308b6bad595e7552aff2956a88124b5b475893964e8a30ff0ceae3e23e4722350c6437677f41aaedbfb39f9a104047aa41c0b20d7fef01dd7411', 16),
                    gmp_init('0x6e061cca5779acde0d674deca6b630a10a1abf46121bf8117b6f2d05b12b87e0c5eeeba2d4cdf048f38cfc9ddac434793a41616275f396976264899c662f0bd592', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e6ad07316cceacb2b26bd6d31f7924ebf9c460e7cfd599c9ffb74f543cd93d3e98e237994c6d8256bed729fff2b428ae749a19ab6e5291fe7719f565b51420debd', 16),
                    gmp_init('0x164c6b803539621e4c9d1cdb9b170e6d68d0b5949a121c1d3849dbc2d4457bba02ed777496c81e38ca4b18c48fc100cdb542e13910896a8983f1436f3231735fe0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e6dea3d8cd8b1b1bc73eafd532bdd61a19498701a98da59d131477d83222398fc68c6a8a4da6d66b5938876146493b3fdfb02da2e28cb3ea18aa2fd3a0324bbaa', 16),
                    gmp_init('0x121ed2a00caa434d7d41f01d81b1f96136c74ae932a3060efd3dc2ba2ae01146955c0702450c42cd33b36e2dd8f21383e3affd69ca5c2c1881e30d3c83a929e403e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11daaeb6757c5cea0774d8254a91e016254b8ef1f7f79aa0e9962831aa947aad9d8c7c9ef492fc20da6a86cc889db34c6be4a9e61312213edb290d2dcf1251fe06a', 16),
                    gmp_init('0xc50e07bad24e74d1a71588a828a6436d33ae9c4071255c1b61d5a61658a4d13408aa16805edc2fdc586d384ee1bbabbcdb3cc2096d28f8fd0ca8f5e18502f4709b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x124cca5ed851d8cefe6b5cd31b2047c8ebfd4247574a47c5a6e6d3850ea6312d55adb4de6841aede158a934580777363609884c3347812fbee33ac08717b8501555', 16),
                    gmp_init('0xad4562419478dff0f3997b76d0adee582f9901f74bb3cc0e2a7f03c6419259bc0fddecd8024d330ddd1ac5ade85d1c1d2bd28b0d5de510ba3b4afe51372a51a7cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52cc4ffec23165e6112c53a18777cea047dfc3e9e98494b383056a9113a1d5fbf67ee96544281090dd6b8c7293330a40286e5b425f4254d3d0261a6571304c934', 16),
                    gmp_init('0x1f56159daa1c26961f79c832da019ae083a2907b4fb630008c10c9a5e489a9bb57362b499a9f192e1fe1a5a066b158cfe00c4954310ab46ca93f16c1e271d3c8db7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde793f1038091eeef49b3fec8aee0ea637567da8151177e922996532aca6726027781ea3f25bc4d22621938240829175ee627e64871aceaf57bf9c09d3e9b072d5', 16),
                    gmp_init('0x1a041b66d3827ed78a70477e8834709e45c7bd7c768fa169b4b53518e4026661908be524c93084420d6da3e78685c1a136b41f22a0c973e9ba330a23a7581d2a890', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1ac1404f2d6aace0f43aa343cbe5827ef917dd167c4606db1dc8a403e1ff0e558eec8e30a9c4370e51db913947aa0195f98dcbda33878e3fb0d2bf35f94ab7a841f', 16),
                    gmp_init('0x8ac046fda14c9eb1ba9d400e52de14d6ec41cf3794f68f54bb7f81313f2726f67e8f2d56855648f85238ab939eb9a5ec76dd04717148ef4a56dfe19ea53db1c500', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e1eab273a875181d06643f19b88d9705723a569d745d51e500c8a85c10b68725967b2111a9098ed36bf323b07ce7b4b70d8f2f1476562ce2c563f57ff87744684', 16),
                    gmp_init('0x5d806a74c509ac46a4ef6eda5b185457879f36c13414676e8bcaffafa2faf790ebd31a9aab1a59a97c3757dbeb618391453edd0df89700ac60bd33de9418a1bffb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb67ace57781700d1c6ad186b4c0dad4105fe15ca3e1e51dcd5d483ca521fb55f3e6c12e907b86d5bdae9489571eb7ffc7842ebab1a91f114a1caea17bbff4ea449', 16),
                    gmp_init('0x14ac4dc5d395bc8a5f56daf4c155af19397837d0a0c02536eb9d6722ea97058e005279646f918cb2f2144c093f5afe8a4624dc4219dce2799e741b4485011878a42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18539e98ad1e7ddbba8231d61fb5446a61a8708327611a5f49e5a09908a101039e2ad163f8ecb6a04f5e5786eda68d1e76864d219926e52ba0ee6b236300de2a07c', 16),
                    gmp_init('0x57645a9d2fdf809af6f4fcf268fc0cfd1c7167271a35298521fee0c03dee1061e2c8852aedc488ec9fcf229fd613d9adae0e0f1667d20d86e654ca5f0f3861f6e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b762cf1ba1f4cc628fe87cd37c5e4cc3be63914bd57709e8b830eb782fe101f88fb1c74352d4455c7eed3d2e9455c9f950050762d65239d5726ad8924eb2a9463', 16),
                    gmp_init('0x9c595c7048591bb7d9323363ccbaef9ef40065cbd7d183d49ac6ad81d822b6a3fae23b2139daf8d9c8d58daaeac33a6ae57a53fb7dbe0ad8a34dd6ab0161622ea8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90dea5cbcb1e36ad17cb4e3f7aeacfd2e4a3a157eb1cad068759d9ba60059f6b0c7466180355b0f95a79d4428f5dce0826715f2bf72d1c900f38c2b6bca021ca92', 16),
                    gmp_init('0xe60bb0291f91e1a0c357d83d0076201868bf66d16d235e890a4bdd06fff18da95b09956859856bdc09b17f1aa48b5ab35fd354d658cadc11bb49b0c5be4040f60e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1273111de80e4c12cf6ceeed59fb527c311d0d2fd4e320628a4daec433789ae3e700369de7f270816218334420a353a9ba002c33715008897a9f6c5e153d962cb5f', 16),
                    gmp_init('0x1aac9c5fd50b15638544c2cf9ea01f3be0a6c0509e69892d5e9780c6af3bae89e786e2e65bb98c92efc1dcc194aabb9ed8e2a752cc835e6a046eef5d0484d578154', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x187f702c7f04d06b2731264069e02f7c119aa97355dfaf7201f47fa4e4956106ed094181fff7a1438c84a79c880f3f03bf305f6d0a3063ced317a6b3fcb3b407efc', 16),
                    gmp_init('0x2ffb55c6cd637586953b810a6f49e0992c229deec9342badbb4803c4005e326891c00c8e627d099f3a98bbcf2b6f13bcce5f8a64eae8e4597b368dcb7ae7e258bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa3c3f10c2e8970438805c30a50af14e5573ccfe56381fae7425668f5e130ac3236f9335943003b07ef35b838773e3fa24dc4b92c480b2104618b17af20d879eef', 16),
                    gmp_init('0x3ad25e38ba2fa670bca2549debaf31051c895b2ad2203c3255695f2186a280cf2a66e9618241ce28b333ba1770b52fd7bf5683d23c70d7a80c73e329e9818dfe39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14aadc2fcf91c6f83b524060de6d9a5a16b70e67e3a92960599d765d3336d608c4b14fec271567ceec8e687783fb79d420bb7f9c5dbde14c8a607da16efbb07562b', 16),
                    gmp_init('0x1bf64e21d55adbeb1b658064b407bc9e04d80124d89f64d3a4f6308aa76b8c58b3cfb533f263a0aea2c0bd480509394336b8e984114bcdeedc1b78d9ad205aaecb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155feb79dd4ba0183e01fc3392b2ad757e3eae5a7a75ef5858d33ce758b6c9be77f3ad3f6aff0e76c666bb925f535695b5bd80af0017840b7e1f2d5cff6390ac5ac', 16),
                    gmp_init('0x186c641dc205a049593e3f1d8cc7dc75771238c05815d723df6692ea94842660c5b3b009b7c37fae5852754cd5d064cd12daddd3402863482c5ab1b92949c3d6752', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a0b03c85c8394c30e54545d59b691c578e7911b696bd758e9583a57461600275bf44d39cbb7abd830b38f45accbc9c99c05c2327096228ce9e0096d0f5c98771e', 16),
                    gmp_init('0x113019215c361758097775cbdf5da1bdc5cd9a935a575e0cddd104bd64ccfee6e76fdcaee21cf51cea78ea363bae0cd6d15de56a00b7832fc78988ac22042c8fe20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbab1d535e88d9fe20690ff4496c8b9af28aee5bb74c0f2ebd0878f2c139e18ad91a8a1aeab64b29a3f6159a181f8f379264577bc41b4db8651dcd82d6f60999369', 16),
                    gmp_init('0x7d25f82852782de3b4a8c7263904e2aba612a18f6c7a47d8fd9fcbb7be45ae6f7257463916a6f0f9c6ae8ddb3c29c5c38cd0fa412ef9742336f4348881a8e16ff2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x117dc2d072aeac4c085369c2092ff3912cdce2060f002858a6852f76e9add95612bdb6068b8fed6d301a2c81fe86f55f99365d59abea783eacd26ad960425b64fa7', 16),
                    gmp_init('0xf4614458d7512f10cf2ced26b921e699605afe946f3b9f95ca63a12765a9375cd008c7046124188d1d13331f5dbec8999f74ffa58005e07abef6142267de8e4075', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d3b437c5cfccdcca61e3d1334e04b9807fff7b4a04a321d9e75a05e9168c9d3c7fe7615fde6ce67e6888b0eecc39958d34d4308439e29c71c9ea3a8cacacec3d8', 16),
                    gmp_init('0x1eaf8e93001acbd2399e4638173284e202999b924bb7025091ddbffc3a5188ae92ba4f11bfc0f9e5453dda402f1fe4d7aa74b71b816b692a742ab2788a29314cdbd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1797b53a9cbe2377aba259728d4503174543735839b2d3b2f29c3c78a2c1ec86ed8ac2439f9478c558a0d9b2d417c972adda238ad04e991e44502fb84fd5f7abaea', 16),
                    gmp_init('0x1949a60e3e07e3aa82bb90d1175f215c70a6276d7f131de0d4e2a0a4ab602ba91c9d8b3475102deeaacbf0abd8091a664685d2a8e87211225e95f44add5e4846ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45521b7dbcae8708b558c84da46bcae07a712aa1a2262f936653aeb97400a7c0b01d138a47d0b3caf922871d7b7cc1d69e01d2684604886b27cb30076118e71dd8', 16),
                    gmp_init('0xd24417e81ae5275a73b418e7085068d6dcd085796e4488ede77c5521189a84e971b76783dd3baa91fd37e1775f904f5c5320a737ee1d62a33503bd36438d3cd884', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa68d0be801ec54d3af2e7cf021120592858760f0f7bd8f5a29d734f6b845f09837ed67f94305f36bd27ef78330d43e178e404c95b98d54184cee2ca82b76f521d5', 16),
                    gmp_init('0x8c3fd119d980afa598be486c05934928086da152ba3827678969b0be25fc7e723b3d31ac431170157d006bbca51d410f81ea9c35ae614a451251ba60c971042440', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1121389c23586a5e6a569db07e102f9b217199340715ee54408bde73625f760a06e13521b322ff27ae3133c35ca74939411e35ce1381ffe8a3b099c2888d6c5b0b9', 16),
                    gmp_init('0x9c7522b808fbe7f5c98a595df3f2798180e35cda3ec05c07939df8ce9704c424b5483e0ff9d204e24904be199c65c3286f0cfa76325d844ccfcf5b0e89ca1aa74f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1440ae962d48065c9d8b45f0d32034709b8d26639c2b3624b6c2907f0fb9dd39852a8f39a0a5d5593700946eecd6a004131e3caa4f1309bcc8614596043e92e85b5', 16),
                    gmp_init('0x127fff1a0789bd74f00c3db0b3bbda53a97cb3961d6372d1840801ff33b9748eb947cc9e9ff5b47a6c22170357d527f6be65ce0990022e88bed3de036a5d521ed0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12525d5716580e6508955ad71f0e90cdfb205053c3fcacbca10f63e404e9025de52071723868960ac4a8ff26bbde472d9fed4f7af5088ba1557b758f2cd23509208', 16),
                    gmp_init('0x4ba49474168359a44b028e4edfca6902251876a9cc69fc4047679f837fd92c494a9963d33ca4d21f9cc97a237737d947529aa2dbc01bf9c9995de6508419a94651', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a6b635e0e1969b169bfe830c11f89ad228102adf661cbd8b5bfe4bcb522f3ac7dbd686f86dd0d609374e0019affb5e8de955c2dfc46dac9c77cc51cb4b1aa88055', 16),
                    gmp_init('0x113bb51e48673bc3a3ba7f2f3024312336981b5b9c8ea9d3206b88e99336a2696e9c3b9a9e5d6e115446208f3dd838c6d6e1d2912be9ee262ca6b51c9abd5b1c229', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130630d61dcee69d948ec159bb14ccef5a817eb082e77ecec04c7f5bf951884db683c673364d41deb7186ec4211661279b071239514184975195ea6d7ec70be25d7', 16),
                    gmp_init('0x110ae2d081fe842291e7b3544c70114f9bbddc1900069e6d09c871126092ab281496069874da376813a5137b85bb19d5a7d28590b46cfc11acf0d0db8b4c1a69df7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc18efa75fd6b09e47a02d035bcdf885e1e8e1df27432e089079fa9cffbe6a0555b61d9b210353a23b913ae59907fa5676de76999412663eca5ad58de78c2d5d1c9', 16),
                    gmp_init('0xa6017dee66a21fc0bf26798865175282bd787d9608360f613661370d1431834ead5d73f502142d6c0b7a70df37fcde98f382ba2f66c93abdf52746583eef652e49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0dcac44003db21eb97de3424f073b2f7ec6f1e5d2f95f09e3b124ea2a4c55437286dc65d50e7528b4dd01e1780a59e07c75cd2c6789784cb87afa2c3a9e92a5f6', 16),
                    gmp_init('0x1a6f649f29fa3b19618c0d6f3e7a4a796d36578052fe2e7e82a1a23aef83c86feedcb939f25716fcaa2ddfc5f173bc30b66351d5a263ca12c84cd11a8dae8c024a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea82a33f2eac5053e331d02e4f9becc1431f603db286e7208b8016a81d9d7b635fca74873dd29086ecf68bb1e268c64d485961bc166e181ec8c00c140e0dc53ab1', 16),
                    gmp_init('0x7f6ee1c6026b57d9be7b81ebe7b7aae8af0d5f5b15e180f598d8dc8455759d7e71a9b74520b6505fabdb2b1c23502b8cc5d083a3046f766d5c52526ac75cecea10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1369685a90699911d7ac5bb0cf8f48daf4063a4c14ebc9dafea2c8d4f255028650e02e7100e1fe96c0cd57a86273384bb8d6781c1731c5afeaebce71629b3927594', 16),
                    gmp_init('0xe2ba0449e58e1d2ee7b29972ab11ee8709088b18bef3679ffb47c7e1974ab91fd755dd9ee63b18459d5af5ec7bf20b54cc24ae8c50a57fdca8a675e8b74d859439', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x129696d72ee9c8d028b20338783ab89bc3036553c5759770258996bd8275862b90ab7218f28ab592008c2205626022d39bad5b6ed5ff24acacbb77efcb9e07c115f', 16),
                    gmp_init('0x1026b1984f2190760201f7dcf8cc106e25539ebae49f2661cac7de03234750216354f4762e252bb03fd6cbc217a9cfd993a08efe02355e3fc006f57f9a7cfc61b7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d8718aa7a56f22b5f3ebb8b1c2b9fcd79065957b322286ace3b734512a27f22611f023f7b739718071080037a6fdce692870b5ac354a428f4e4eed8bce3efbdc', 16),
                    gmp_init('0x1df16409d224c7501e331097a2e20adf54a3e250e7d96ea0d2361efe8138c3f0d30047c1b4e160dfb6272cee9c1cc296ebf05537a28883ef83e6202b39d61d7722a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e123f51bdecd72450f394762525b60a15a8b5c31c54429c368800b08e5d154a1768c490086ce665ba9015209c7ed8c1eac5a30dea2c63280fa12853033f9534ed', 16),
                    gmp_init('0x11aeca0bee8e11f492239a5653630afd37e10459eaca573aa567e32161a5a13a5311ed6c2b56950ced51064fc7081995ff4d04ef5f1b25ac6d88d601c76b187b6a1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17d28ff4f86eaede87b21381fb6f1157180334cc1f147780ddccee13c2f45ff2419c3d4bcae21c0984d47c7953fda349c90e166a9afd5eae02fc7cc50fb09b5947b', 16),
                    gmp_init('0x103187baf6970eb3d185d5e0f6d491f9b8b87cb11044fa6c1ce6cbe5c7e296da50cb9e0d51f46f82c8db3f60666fecc17ecc73306ec5ff796ba10c72b8260e096a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x738ad7cb71434536b841109c62d1f8ab937c9e5a3a2653d1939fb03775f0b9b8f6143c0bf14b2981884700e3eb3a2af597e08428f1a68509e82fafc73f189a0360', 16),
                    gmp_init('0x7f504272d1c9dca239bb0b8141bc11cb2ca912cdea4b073b39e62332e93390e9682a11dc4131c113aa8dd99c5b4a5b4b0cad5be7ac3cafb62d82c43b2daa844edd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16c4d84313664dda00f0c77cd5627b58e1333629507fd645c90cda28545c1a4c3090e579aadaba48f51bea63186c84bfe394584fd9714fd0202de0324030689ca3f', 16),
                    gmp_init('0x8eeef58ad19f73b2e45b950ba633dca68d296626d025df33804f9f4730b5a27bdf9fe82ea18a01f1ff2f22343f35ea657aedc15d538bf386b281cddf1e91a439c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x103496eb13248cce468c8afda4270e4b63e5bed8acab616d5df301805e5433c90102899bd376af7feb5b2b82853a2a36153b69c2dbb85de7ce9d92a04c26573f504', 16),
                    gmp_init('0xc1dfff84af4601bd5b67737e06e27f2225158448263af78646cee2076c170c2fbaf7cf4fce0aeaf5047d0a936b0f6dea196377d971474e651b6ebcd0500973771c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1bba96393db3f5cbbfb234b48d11a96213a417dc06f338b8326d1fb01cf3ebed552fb2c650e0fbe5b04957358c9319662fcfb77c6c2f36a07035d0a019df3894b', 16),
                    gmp_init('0x192aa1926aa86d008a60512a28dbad3acb723e32bf4544284b5faed11686eb2143b20c04ab4ea00ac99e8c7250d3f4dde1410504de14d5f0abe78b95f1495129ff9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a1cabb3f025060de5f8903f4f63921ee618e9c74dc8b7bf46d21b7e9c453a4189f3f61d046c5b296714d88451c9a96fcf89de5dd7cd6a017d81f919bc75e0a1f7', 16),
                    gmp_init('0x1925b12e21e8dbd5c6784f62f976a0a82ac4125bc9b4256930a8614127c0c567514b037cbdd812fd5051e5d93b9d9e366c126c8a484d0311e2df15cd5c8c291f1cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb53feb41a1327c8746046d9f36d2e977a704f0b2a7d0f8758532d5c4242e4793606cd7ce627bd57386a6f20784268cdfb16cc873d6d606b04be5764c9caf7fff7', 16),
                    gmp_init('0xec9c1fff7a9ffda8982dcf10aeed49a2a0cb224d4bf8b5efbc6757daeb883b4dcc39c40ce4c2de575cbf181a2b9df3426598b50c6e98a451949425b4d1013ef2be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd26006394d28216463728ebeec0bbd7452d56fb7297832d23ab84130bd0a544f33ed7ea515f12bddc2f20cf648561dd429ee3ed571275db80f7d2636053e0c991e', 16),
                    gmp_init('0x111758fe34ef1450cae5141db56b4a97b7c4ca74d0815cecbeb98a9470773a70bb723b080f75ee9175aca1ac49ea2533ac290eba77819b1776743b5561b228b41f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27b7a43c99f6b0a0223245ce6ef16a1f199991211e43cad2294349c726a5ae3bc1d2bdefc98317fe9fde19af86841b5f4679352df94a3175e0d2b17efdc9bf0c9b', 16),
                    gmp_init('0x54908282721717cee85cfa3185a6320001526e46c6739fe3b6d1db0f0f7526ee70c2a5b17fb2d25b2ae36fedb3eb1646b9b9fdb126a56aef59a0d43e88bfdd7fa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9e3442888a9fb63593a5e1ff600f96cd2347f0c9f375c2872ca40f95c8c90f19d2dc7dfafcb542d12ea5fc9d8f9e17ed00456d4c464e89e5a61ed6a7f6e9e6e88', 16),
                    gmp_init('0x13acbb079a05536759f8fad7e57c8266064aa17ea655155b2219b778fde097be036facb1cf51531c516298ff6dfe42d5813c9e24ada478dfe6f16e56ae6a6743465', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c80612931c7f6b9cbe6b064df122b4e62a4d6a996b36d6fb583db4b0bd81da7dac64713b62031f0138bc43ff0ee67940865a63b2379b184c0cbc23aeb2d1fc50f7', 16),
                    gmp_init('0x1fe99bde8f96423023b94646bd3697a47b48d92b4aaee45a4fa7a2923223b30afe38cf163af070882c793b5b3d709872c805651ec3a244999cc55503228462bbc5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b30f687b831cec30228f0e11851cb56481a94e585ee27341f640f10e096d3907eb5e110744f6c6a3c9bd959f5d49faa954a527c2db7c3ecc6eb627fdfbc0062d02', 16),
                    gmp_init('0xc13259d6086a363f830bea781ff86f10c843e72573c600759b30cf14bcf51dc15be4bdac1d6bfe61bd2b259ccee9690a5400b41edad2445d5f5f8c166d962a12d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc6f29e33195e8305f4469bcf7c662adf9cb19979d38d65bb70af81bdfb862bec6f02bef5b58b44ec11ff94a3023f725aca8fa52b3d8b19859c288ee74cdf30f6c', 16),
                    gmp_init('0xf337da2de58afa297cf0811d15ac014d42d61c59c2378d80029c9c449643d0381e5b5562779b40b375c635439ee45d50c3590c16a0ec9d989772244e292093d379', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d5e8d10e728adb59dd9c6af8d8640cabed383d6245f5c17b5858305c8bf19d2f9e6c9d5588b36f9ecd79036f1f242d9d57415306bf6643193fdd15b8890006da10', 16),
                    gmp_init('0x28d95ea9cfc707cd920b118e05090cf1b825bc3b9a85713ed33ddb97148ca95fb359d82f758ea6e9dcade0363389e6bff25373965efdd3f7545490f2f98e99708c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13921014269b921e7e8917bab5133f87aeb2b426b0d02f20792ecc8b09f9c20123368613d279f71510f3a4938ff7734de0d6d91832d76c9105a73bbc51cec9886f0', 16),
                    gmp_init('0x9d252aac413a6ce0a080a04c0e85e292c7517d6a51770daa8d3e298e35de7bf2e67bf47db912c92e6f98143ae944329e33bf63ed9910bba815366b3a8b91a3cef2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x19064191ccb4cfed0cf532831b8f833a6f76e1dbb78e46816d90dcd66fed7d716f7162f5183b31c3fb3711d7f6376f3bde7eabf4b68b1ba2d3562a1f73e3fbadc57', 16),
                    gmp_init('0x92827c8b03ece2596294786e3a6fe288ac635187a64d644bbd3bfed1da9e857a259b5c22ee16a57de22d174fd64ae9013e6b948aefb16a391bdb3763396d7824ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2e57c180fc0cecb8750ecff533640dfc63fae05eec75a400d02ee7fb3c4c5263f0548945fa9de5ee3a99aa6e2544c2a440e0fec359eee8caf027f4ff2d35b5acd', 16),
                    gmp_init('0x9fe33a115a7946ddc3dfb751246e213c07a7b0f1f33ddee6527adc35cca4f5d193cf9e5050e95faea62ec15d3d19f3260d6c47f5d21c65219922b3504387ba8e83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1464a3b41d33a568fd4cdb0c4d6ffbbd2bfaa3075b75529bb673a2d4bc51a489ace9f88f0c83c8edcc4c6cacadb19bb0ba03f63b6bd8ba97bf66e965255ef4b1b98', 16),
                    gmp_init('0x13275258aac0a95e02c04ca704aaaf946f44ef5d48397876156650cd6de5f82931ea92e885943322ecc9480d79c7434d565941858d847acc06246442711effa56ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16dd588aa37f08a5e50026a3722af5af17c76683273834faced130f276c6453da694f9d97291c3ef389783ebbe7ef285a538f3b48a91a73d8537aaa8f37d3cb8e9f', 16),
                    gmp_init('0x12fab9bfb3a224744a7d6bb91b6314d776a3f0c62b7184b373c48ebb570654f906a08d6c84753b16d0ae0755f6ced775283406785dd563a690281b6610bbbdc76b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1328dea172beec9d772a83d33a42425ea3a107c800cd8d426174288c4b4a05aea8319f5e45954f41b79f6f20c86c66feea417226ef0fd8f2789a5566cafe4dc6c47', 16),
                    gmp_init('0x4e13d38aac8a9691e5800540ecdc178326e15af19e2070f2095b17b282ae53a7d24733a40de843bdf66a0b32f04c4dd036107d2b54bf360b7bf75fee0f9ef2a747', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2ee1762b6cfb7e1cf8915edb10c02bcbf0bf3e245b736ea2a2c6287f9fa5bec75201eacbcf3574feb6d946df3996231f09c65b1f8a37c1f2f3b8cf734285f37ad', 16),
                    gmp_init('0x12f119b437b1fe83dcf2c668ad29709618d8c674f9b020d8ceb388b553ba0bb9f1c08311caf6bcbdfe96f396d2acfa5d8c1212082c27585600875df9f827e9b5ebb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b487da2d28fcfd3fa3c31d93af5eb1daab0b2c6caccdbeb097af66243410b8e51d3f812f6e7069acaf1f386984c2138248b5a5fde066cc9bf28b3c1e7373055fd', 16),
                    gmp_init('0x5f7ca6bdaf05b9d7973a5e3983a9c0a1afcb4af0174df9848040e9f3e8baa6a384f514be2e577fed17737049ce100340a212fd3bae8f9a76f9111b77e8d1091bce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe643f8ee75dcdd628d9d86318f33b17e66602dc43cfb816436de336adffce9c6b9bd22d699b5d0cb9bba2a179499fa63455ae72dd6b01cca765abd70212d7e7be5', 16),
                    gmp_init('0xc2b36eacdb546545b3ab882ee7a6e4e735a423c6f5cbe6faa1b4494eb79d411c2895e5f221aab61589a4ea21c4be34bac8d77bbb123b6b00341bf13bba3d223930', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1751458af64d857994f1740f8e02faa107f64e8ab2542d0716d7dfa95c2bfea0853a8c83d315dabf797bc8b9ea2e9ebb7f8ca0498df027926b97c87f3a4022e78f0', 16),
                    gmp_init('0x68d7c0ebbd32aea0eeeb9151f7861772a90d686243bb059dcd915cf4867420f3d3b61a9d35e5650f5d1da407174ca307b32521b0ebae518b7fc125a62dc8faf75b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d661988d62713d4c0468aab7dc551adc4c420dc23abcd0190189b8662eb2dc3531d01091648be49356de4d40c02ad629786343e7bfb05a334e9f4e555d2a38d24', 16),
                    gmp_init('0xadb3643b4630567b01aa53cb831fd6f4de2a5cbbdb7f6dc83422bf8edab98c4da4a33d8403a5610e9c3ca70fcb39ddd51083cfb4b09d0d364305287501aa0b317', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf3d7b348473524dcee9e1c9fde81c539ab3a9430a608beb6e808ec536449715ca0cafa8b450c9cef975c0a31c0edead71d19c466ab0258d942d861d23ca78a6d', 16),
                    gmp_init('0x19bf500ce393e76c56879aac5166ac4a403f41400517d49c00dac31501af32a0e92cbdc1793e74a7c81cca7368acffce061308b8f73ab0495a96a80d50fc738461e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x280b5760bc2f40c719d34fd7b9a88b5d62b137cc79984df6c6ab6eab18f808f305107db5b7aca58cf2db681640997de531d67580d263acb751379fff9ef1bc7433', 16),
                    gmp_init('0x16bbbc4fb445df7dfc8e6efd3e52ad9bde6d8de2e65bbd9df8eb08b134834f455e0b086e60fa4d56c32a67e7542d4f67af5f3fd984a5f321467c9ab6d25cfd7ac69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec4287052a467bae5df8bc2ee40552e863a4241b76e809223edf9b00c697ccd1e739feb40ab3aabd26a1ae187af719530cbb2bda47e45964379c34b7c5c3b7eed1', 16),
                    gmp_init('0x1cd86bdff87f52a251f7e86c32674795b96a7ba4bd451cb3a73619fc32324bc1ee3711fd058ad60867d7b1e56d43960c11a729b372db712464ddff0e77b0510a2df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19257e8210cf48a0d4f130f5f3d112bd9b235bdb47ada3c2c6a7c2d5469fb92a4abf30b1aba5c4c151ffdb26affa3331ee0af9881a70b4308a3262a28ed304cde27', 16),
                    gmp_init('0x190040ddffe5d320f45517030f89da01a6028bb9f92ee19095c03ab26501d4c2039364e714fbbd95c302673249f2fd8381e7c6930eef76d8393bb96410d34b946c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c016d26a90634885f9c24a7a18b25436c794631018dacb26c623f712e3a260860fd3e621df04664c7800f3e87e320ef44705d083140b4e27e0b9951cadd59eeba9', 16),
                    gmp_init('0x27a4d4dbf8565f1f8ade1b5e3c8fd7d2a2450e63240a8794a44b6ee54f0d9cf4b364861cb50bcc706be18867585d74e1228027f0c870e559b88ab63b329c65ab21', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x139d1d8d98014b9f46b3b30fa1861adf4d73f1e3c7fc8c9b83499d631d181a2db2dabddb357e3baf787dcf60ca386a71ac0e705441316bee2b6651b47c813b42e63', 16),
                    gmp_init('0x11f42604200fb5824c93c83d9dc01dcefb9e9c35419e55ce735d1af82fe70b14e44bdcaabe6e68b6fba1b2c0cc5a81fd6410fc583984ff8a00bae6f6b72f6af1252', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3799cb5866d8447de86643389b0dc658da6c36da5cf4687f7ffa4d7aec3468335b3b142866906e6f00d5d6895961f152c7c7c62e341083602ac4c1d5064d245501', 16),
                    gmp_init('0x95883c8b53c97978c69776abebba99b392f9630aed9cbbb1aebf5a0c1ee6b70d27c0fbd62f14025692375589c920d8bdd0eca0bd01ee68c8750fecfbab807a703e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5ccdc43a3807a50d14d3cccb74d76757223a061093207219732135e10e128316645f210f7ab4dcffc90d8c9c5dace4bdcae29377f15f959ee753ce74ae22f1171', 16),
                    gmp_init('0x179d26ce0bdb4964926210046e55b83cc7a847aaf905e9f7915d2a1b177b7d68560d3166fafd0787305f3538ba2dcc9d35d92b60f04dd80c4cb6a5534206880d712', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c0cd8529b5777baa6123e435a33e2e3a4f26163d810e2a44e38fdfe02f2d8260f96b733e3b36cd821c452c254d09536e4431fbd1c02954969bdcbfbb8be5f5826e', 16),
                    gmp_init('0x1321cf905cbd5003ef7223e342b3bbab1b854602bf7591ed51e0d69a760308ddff11f52f42826a0f8e74668e97a8752bec5dfed13a7d443a978634dd97aa246d14e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9a04162f342c66d323e0da58153655d737601d278f7b8048f0440a0c53d119f823ab3dff83515edc30eae02d5b65c48e6409a230cdfdb9955debd96ecded7931a', 16),
                    gmp_init('0x55a25554c5d13c767087a2e7067d36e5a87eadf7a28839861a7d5b0f691e0972bf3a40c4d454ade939f845455f91973a30b812c6a1af7d339edc305022e0d030b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a1cec17ddfa5e85e1d8f7ddc3b952ccab56142002a0392f749fa914a53c372e0ec3b0f7be135fbcdd5f07f164cb0f319848b60a8b7394f9865fc6e3abd7e791a5f', 16),
                    gmp_init('0xa5ae0b1ea4a248a978d7ff8e0ffa44b971d98f0714be92b949690901d1be783d99d5359a5f17024a3fc6c3bbc436fd4d5b34275e3b5874742e376e182e3bfb6450', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbccd04bc49a1fb8e26a817bfedf257daf30bf959d35018896d43e23429d484f51041eaccac33456629a0d4d5090846b9f3ec5c692cffb8b4d48ec2bc822c79e1e7', 16),
                    gmp_init('0x19609b032d479acdc69453951c6c866b03883ac55150141e32949d2f5f1d52bc9bcf68caa504533e0418b6f0231396b753d278c04c95d4ef4f0da060441d92bced4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13bcdaae01ed8e36a780ba927b230bc9a8a4dc5d87a552941626b63d0a2f4accf5f658128186734b942e0cd42ac756981f5df8bdb84232a74bf1ae0819be9933309', 16),
                    gmp_init('0x1173b4d9dbe10d505ea05cc4dc38b8ad8398940d375f4bee6393b33128740e0c47b9f82830c637c795f1f98a0d3e10d165b29ebfdda53e94443bb632bfe8e1f565f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e27d2cfbb74b5a5cd1ab34e2d15cc06dcd1a7ee6f8d5c5321cf943b1b2e7b48a1c7cbcaf37d684cbc7f5770d7e6faa6e282b32a43d90c938d5753bbb8a848cf13', 16),
                    gmp_init('0x355780cc59f9bd480cf5e804c0aa2cec882efad6cd487c3a9b8c9156a9ace784b58df70a0b5e50e51f5cfb32d674b6a2ce3026a8b4f744d697022c5255ad3c3bf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b037efaca1003dc72a5063ff425b7bce8fde12e1cd6c32e96d14a5cbd878b4f4de3d3af6220ec1bca5b7456194130fdfbc7acb5bf0593c4a6ff240d36be4ab3d55', 16),
                    gmp_init('0x130da5464f9459a3df6226e14d2e18bab6ef6aaeaece25d09ffec371b1543208ba097b4200b3e732b5eca33121d4c9071d9ff66c962086c6d204274de57ccda7e54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x153f4efad3de059fcece792c9ccad4af521cd97de762a3c7176e86f9bebbc9855dff5899b4a72cdfe16b2541cf8f47b37ceb30646eb53081e929e96ebde76178c94', 16),
                    gmp_init('0x2ecb232def76ed9aff0ff0a6dc959d77d0ad1e5af49211cd939f53ef31eec7d069fa09f56ff3d2d674a4a04dac7daa33c6817ceac1fb7c79b5ad541c6a53a88fbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d152811cacca4fd54355e8542182831df66a027da5ca1b3e759b0869337ba88547b22a5d860d8aded5a06f7191d2a4fae0b53909cb72bfde579134dac8966dd7c6', 16),
                    gmp_init('0x727fab4d8838f30a008e77b921f7010305381f263ff5af85ae1485632621396b039476a1609a4e8cad75f0132452052638046f70f2d4ae87f39184b34252d1a260', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18246671df0823803acb31bab71e3a99420a102438734acf11f91ec943993a91394ddb8880029ef7c768ca665031bb30e354181e8bf433b9969586a5a4f92f845ff', 16),
                    gmp_init('0x10587a1cd2dcf6b4579323b55da74fb04a25a7f3bf92920e7ae138fd0eb0df86632c204e7395fc7aacf5cb65ce01b4d7ea310bcc7e1d83add784311612323967817', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87f08bb1ef17f57cb1f13a348574802ebdf2e14b2be8e228d62dd36def5c80fe3e2050bc2701193010733880b50aabcc343b30e0f2ea0077fc7df95a3c1b3f5cf1', 16),
                    gmp_init('0xb03fb024216dcdac67de5e1fa9bb74e3139c54f1a27a04264a2dfb62dec339d2aa214d1956d7530999a39acf0e19503f7a8c645bb185f5b3884f81dad0a662456a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e3b9f0d75934c7c9b71be825122138d1e540065b9ed930f74134957d5e0de851edcdb23f5f227932d10956696b883faf9f2dbd79460dc11ba428702dc496ab1d1b', 16),
                    gmp_init('0x15d3ba8834d7f96def1bba101782069c1156c63ee2ddae219e272024c42376f6b0ba3e50ae814b8aa9f4095892ccb122a8b5eef3357fb9cc866baf4143b567ead92', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b7ca0b4067b3746e31c3452038efd0a446ddebb71f94d5f228617c80d0d9d6273316d85f968acfd38da13c485e03a1ee580a074959d19c1c08dd33d1c66bc31a5', 16),
                    gmp_init('0x16b90c2ad09f66ae95fe257401a2956af045dc55f3d6a81fb380e311b4fca1a99007e7d8b9b5ae1f9d4047b37f6f73971b007cf1192a01f6c04bec7b15087436d56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0836f8254a8ffc4987e6d15d34261fdbdb84f242f2db78ffe7e7dc551bed1f5206808bf4c0ce4cac9d18a53b17fcdfd96d4fb4288e691a213a949016c027effaa', 16),
                    gmp_init('0xa587ae7bb59b509913628756447cdf14ef7c003ad00852dc5da37edb8d4e765028f9170a9969512dc4444fdc65de62e8899617f000d0327536029233daabe4e4f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35e47cb5008556adcb241b875dd586a10e944ccce29d08dd80db3156f489e42e60d6f9e25dfe856ec73f5e1ecf0e0f2550ac263e6f62d6794615c0760ba3faa4b9', 16),
                    gmp_init('0x15c0f8d214f47a1864834afdc0e2440ccdf6e75f3f8358b75ab0b98516291a3d63ebc7ee9c59541bd1f53b45886ce9d96177419828217fe9e729c259aa74f99ce2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a64863a87c7eb2500f97571a599d4743f3e26abba0368bf534f130e04b74d62e5db0e728aa3534e0acc8bba8aec9f00dfa9c970190e6c619751199e42088a01d8', 16),
                    gmp_init('0x1b25ba3893846612de44caef200c03c9c3ec4e0ad472707cb8ef0d7a7f00470fb3811215434ce2dbe0af8555f578806b9513c37545572eb32ae0cbb2434a3d02698', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74ed41dbb99ae3bf3d382125313d1ccb65f9ac02be4c13c6e5357e6b9a9dcf77033aa9cc05e09e3be1043b323d611da8840745f4c7f17ebb245940d1d32d86220c', 16),
                    gmp_init('0x163ab97b70c10911066f39d6482329513cf0bd186d00dc155e1ea9df76d1ccec832059deb0ccb7414a9281ac30f07be1eb946d5b8dea50a76adfb7fc6374139b92e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6867decd07b8d262755d403c207453aca02c2bae6078a6341622e6f7e8f4bb7c96d2115ba4b164590466962687da57ed02863080300d490a50db80edc1ca6a97a2', 16),
                    gmp_init('0x1ec8ae41a9c972eef5459358763420a4c80594a77ca222db3b1bd90443f8f336f93415b3726701d4e57dd61f1fb1f4739a71bcd937e484c73a51f8495a99c022066', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69c8d156e368aacaa47c8fcec4a4f3ddcfede1b31efb704f9b66047479cc8594719e34c73e1088c6f44dbb9bef41deb9c12e5273f68399362c8943a18f8eeef2d6', 16),
                    gmp_init('0x1f46c0d20a35287281e5a5f9b06caa1f3857f10bee9d02396496604cbb6d1580df02f64df961de6ca4bcde0dfdd27745b694cdf7439d2be9d815c60e434c3d5f95f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a255746c426c878b89956efef67acf01bbd1f2103c5220ee9306bc173cc5f9592aa8f98d584c37a7b255da5480fe4727cd134edac80f4d9e8b4f3c3bc3a1e703a9', 16),
                    gmp_init('0x1814b4fcf720b3698886dac815fbe6a29d846059e3637e92347dc06ce6a381743ae655ec86d31b04f92508f2cb818236f94b81ef6482a61252b1927395435dd9b7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf960d701bb29c3fbe16a0d12ae87ef179801c19dc2ec6355a132587d380a259eae8c8999141c7bee325baf3eb802c23ebfddfcce47c9393d38e5163a2131df70bb', 16),
                    gmp_init('0x498d1127d742de9ec4a1335c10b56339ac8dcd58bc9230d91f93c68191a5ea467abd18bea86db4278c70836e6071d74a7e7f3cc59a1c300c74fb3b62bf0db4c852', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x142d34782d110886e9be1b215a655766a4bd8f35e390611398ab2de8b32004489c1c8157ee236719253b5dc1b89c449e28d9249dae49577d149a415042a95962309', 16),
                    gmp_init('0x7bb28d42e385fe1977e85cf9b076b9dde6a4bc946d6d3e21498ca37cae36d465d7df3e67e15e858c27ea6f6ee6ccfe85d3381dc0739797bb36374b49a0217b0165', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec1aa1d1f0a950d4c8da28ea45bf714c8bf79daff3395256c8a72b376c9e95a176a031785143b978cddfd1e63c6d6d7b03bb87abd49da9d4cd07c7d1cf85a4d17a', 16),
                    gmp_init('0x3f35b65cb43d103446bbb490b92a76e98a86890bdc2e840be89fbe64feeda2c1a0a007f3d8a4a1b24163a401e2de550efc79e473a69cdc6c6d45c61e6c1414cadc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cf68c7a487baaa1d8c209ab2533522612fd1e301827f9210fe51ec351f98254fcb7e260eded1ad38f30be609761e65036c55816668a3b992ff8106d6fdb1a83c1', 16),
                    gmp_init('0x1bd222ea56cd31bcdce1b1ea4352d853d74647a5daa640f434ca0f2cb83185d053161b4174f60b020aff520b6157618c694e57b02bb6a95a7296677dc5814fc9ff1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe50fdc895e5ba3ea479457a7c8a937cf445f98897b7f4dd845d8ba2016f19e917b0fa3fe28e25fd1ffb54fe965e8755850410be5b39bea95355b4fdee36db327a0', 16),
                    gmp_init('0x1aa0ce924f988c77e7f9dbb9da6ca9892837e0db6d885f9c15a89fea32c5a17ee7ee72bac7a0b59ff89a4304a35f0f44149030f499d4915e45ffe6dd2d94316c9f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x702002e78bd198a663f887d3778429295cd697b4d99baa4dcaa6994828373363aa3a5abb39ab927f1651dfafb0d13c103bdf1bdb18989ce1f3befae1c603a2babf', 16),
                    gmp_init('0x1cd9e77a21fe86f4239ceb643361b0c09bf055b82156b27210abf7a4d88ff766947f411c77fea584ba21b765fae2efe125839a4b2c9c9484ad36011b0a6050d7ba0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb491746c6153eeea6b3858eeb96d90546bc1781b622829f34e9ef0149660b3500acc32b60f7c0c3e5c19e140a4b3ab3e11929f9c35748e0e5bd9f6083a6d69d68b', 16),
                    gmp_init('0x14ce80f0b914fb854eab269eadc2fb5e5396b7b1656247cdd43a5076f2d389c98bf76c384c87ab959d1ee71286b8bdc797fc01591a90fe2bfd61bdcb9a6488fb2c0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x10996f5c5e7620400f2fb8a5406ece3c365f94b3e0f51496ee8acacd91104d90803ba8688071f0d2282d50f77717632ad67facd33fa7b5fbfc16106402972e2518a', 16),
                    gmp_init('0x1e10eefa35fdc1623859ffd764662c59a0917771cb7f8c464d0b5821b1a3a3d24f42ffa0db5158a4c799b96cf82b5cf89894ab5c460762ca5f47389f3dd36988cba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2c80bb0f05e020e6f82cd065659df9eac47bbf1ff92b51d79e2764f071da9263e8a67615dea3b77d33e95a7eb2f5142182a14076e36ee92fbfa050bbd035b25a2', 16),
                    gmp_init('0x19d036368bfdf9075deeffe0e7d60b892838cca51f343eb77de13094b5c513ba92072087198be9302ce3ffcf645ff7cacec7238fa6ec82b9da07dac49e7a7560919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1812a6f1a402d8969e0967b1bc10c157f208eec22690a0327b064541aa30d2cec737cb9e1be4a87567a1dfbdedfdeb42713a756a96ec7f3195b2ff0f1cbea39d3be', 16),
                    gmp_init('0x195f11295462504091b1fc70fcdb41854f5b0c191da2cd48a07f0ba1354e9cf1e5afb7e649b104ac38f672398cbfbc29aabb990b1a2815ef0f142547f4cc471c0cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1417771c58aa3936ff0af49aac9cc89cbbd9c45d10c7f2df1dbf7fa65eccf12510bec30d12dac0b947e304cd218dc92bf6d3b8f16bd2e598d13b8a3f6bda1bd56cc', 16),
                    gmp_init('0x1a4776fbaff177af6a3fd85773d62647bf0929eb2207cad3258005fda65297ad13664f83481559569cbdc299e6110dcc4f2d4ce59c3e9cc0cff486b202acd4e00aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c6e45905d268427be1bbc08f0e8f6671e45bac2bbf3fd22da64ba471f5087cce769744e76c17d97e8016c6c61abf36de8090ad58da7508ba449082b82f794bfed', 16),
                    gmp_init('0x8d707fa3a48f497ecbe78419056e1496ee47825b77d81edc14df86cb933dbae5595db78df162c23c7f506ef8b178148ab2d68f73cf9546668fdc632d4d810ab70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12fc530693580ff9f3a1d3b1a480e1dd67d44f5033a7e52c62f2c23922de166e23449affce87e0189c5e36d0b4775e8fd043c8c6f50b12e7da5c2ec5aee77528da4', 16),
                    gmp_init('0xa78331b5b782907cae5fcfed6a5ac6c79977cd1796a2c10fcaa78643a0094093bc10bee839046bd445f8a29d06b18c310ada2ea3903a8c9298facfb18bf94695a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1882ea5bebd716b7a4d8aedb3dd9058858fae27218037661116b92c59a171983bbdb2a77ef928e6b551a8adb29478d8695e09272b36b8b274689a9d1b1914198957', 16),
                    gmp_init('0x1b8bcd939e4513a5d60aa08f169a883b3f84651ccf2e3ec4a2c962c45437d1d2fdca0b446922a7bed533e6a0674dcaa5ea00a3a64298d025a8043bcd03eb534ac3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1da71ceba8f02072f7c0676b0ef8b270ab3b658edeedd0f961743d8ae3686c0702ca01a26456e3392b743854e69b9d9444400a9569d042fe760af9bf352b2648196', 16),
                    gmp_init('0xda9dffac1d7299786b1e7c0fa3000fcd1330f886eb9a42d432ba5a637e0bd4bea34dca8a1f31065bb938919b421c8d3fd5e6f033c930e4a71eaf1b398d4d9bc7bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc941f5a0c43156a4179383b41e2514f43a38f4c7007ef8ad1034af851dd2729afccc002ceded3e9556346e2e7d1f2ec957d46ab57ecacb20d035900c17f31f03e4', 16),
                    gmp_init('0x7b76d3383791c4b3da5d9b9f3ae985409923a3fb14644485acaa87196d9ce7d613202894d4bf1a5bc9a0306601a0c813bd75cc52b227b7f3d00430eb170573cf6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e24397a27ff9a2c2d37e18cecdd5eab00944c963cc55c306db93f7aee14396112e2cc845f2c69254d1a6e07d0f044087138eb4b6ab3c37e07a295b183393dc69c5', 16),
                    gmp_init('0x1054237243e33c44033947252cfed43148eef275cb1b3b2264aae24daeeb2373a39348d729e460e4aaf3c97406a8cf07d6ce273ade87aa7656badb5af020031c31d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18244152b2dad89a636ac9bb9d5f14f2246938e1d2f1d011ee4bfec2077211548bc9d9943b37ce8e3f32172d22004be1c8ac90ba7cc3c278c5c3aedec9f37932307', 16),
                    gmp_init('0xe08b7ba480d01f5fa5b218490db9b624ad203343ca89a9ef88b16028e58aad6006f71e888e9bfad08dbf8daaec74a9c52f3c6d8dbf61fd9a43ee7da6c1c7e6c8a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86562666c7da2461903ca9f2f68a6275de025ff4771481f1162448012320869233362b88524b57f87ee1f701b4a25cdee95ed9d1d57dfa971b7078a5f8c793fc62', 16),
                    gmp_init('0x1a19e8f17833037fe720bc1f2a0a728979a79b46f90606e1371b4f46c5ec2a80ef6e03e1ae202c1d0a9a68f07320c847ab3c869f7b3748d3d45b5cb110004d25daf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x139e7e97a4abde1caa77b97b58f7883ff7a1c1f3c112b2c915940a83460eab8cb1fecc7856a4b5470a1add55a9689bb1507b02e9060d1e9972931da39dbb68cf907', 16),
                    gmp_init('0x8fbddfaf004d176cc92b6595bfed9eb5b03c5089b2776dd2cbdb35a05fc28442485b7ead1609d6a861828c55c6ebb36f6ae6212df16e7641b3fa1da9d4b8ecc0d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1389414829ccd03602163047f7cd73af554b851ccfa954455247d561558fbe9379b1cf1f5433456c4a8252e80da411d3459e16197210a895f343e39683dcd351b10', 16),
                    gmp_init('0x1e1c165169bb25480431964d38cb34aeafdc46b86b7d63a462b0bb0e281c3bae5dbeabab7ce0d230b206c342632bdb60991a663014f7031c0611a267c2a72c27112', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97fd9b407646c929af92f4e6dbbbe3c415ab21e96b9e98af3a1e0e979705f91cac8ce32c00a2e1cf9d1aced00f606706adbcb3f6e27a3ac35dd8a907f1495af650', 16),
                    gmp_init('0x1f2658a17b50c51efc3148e2ef20776d3ec7471c5d7e4943d03832c5aeb311d0269e06cda5b9680b5ac5e379be216e722bea22af5cf098eeb145da0209deee8423f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1a9cfdbc9dc310eda46eadbc7f79c2c453d53a24ca8eb510e61ae8fba2cc02bf85b24477f7fefbf0132f36eafd58752d6301d1e6504fdf94d410ce1f2d1945039ac', 16),
                    gmp_init('0x1b54defb89f1ba7c9c3443ae75ec839248a75a6a4a79dac585a8f82229dd0a92b49ebf82d6c3dc6ed961dc411b715242666b7ca60967f0ecadafbf287c8d8f82b51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x120ffcb277840ab56b7e4152695a72924a6c24661b5ea0118c0f8232956da04790f0e088af52a8045d9183d90c3eb8f4eb74815ae3332ce783220e2fe1972925756', 16),
                    gmp_init('0x3b4cc06c589def7175dfb47d67600d426d09bd9ff9fc942b50b6725ad332913e2a930e993fcf83a0679dc2194a235ecf5621769dda239689e71c766208aae9af57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a0b2ff9cc1aa0280f51cfed493274c7ad7d1ef1626c7a39e18c819a8bf91cb9dae13d65191980ed709055d11e374dd0efe15f79567039168c368205ca5065d6929', 16),
                    gmp_init('0x1f5c0f0222fd904bb5c5532b5658d2b5113e5c927d10abc535b13a4bdbff87d2ca5c350309b787e892ecf8d694e47da6a80f54d3bf05dd65916afee116682bbe037', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c0358f6b3c88eda99d30f4ada27d37ca6ea70f1079239f187e4b0e8c1bdbd2b6ed8d70f1b02bb958a3e91285d7d7d5b4c6bf1089ee3d0f5309c3f082939926493', 16),
                    gmp_init('0x1ec805459d7d0b88a94fa3000b6ce52336bf687400f4d7cf67dd856f4c9a478b479d086353b13aae7db4a6d4dc840a361cf707e7445b4ff3d178957ea97e385ac45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d2128a7a5e802eb9e727759a2a3c6809a2740bc187433253c721f15a2b5af617ccdd681d76344cddfddadbe444d9f4791bb14742df826b4e5532bd21548237525', 16),
                    gmp_init('0x1b36fad36260525f8aacfd5713cdc034a35d3986e20491a61d2ab969c93cd61b98528caca3567067a1050f1dc72aca51897a0cb726271a2643441b7109ed9c2052a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11648601cbd528091901f89d54df62d86dd71b0793c9cbb4069e231979265ea6edf76af8029017ad9e72a49ff1956556bf738280dbd57aaa85396632b75abe029fd', 16),
                    gmp_init('0x19a2a847873f9a49cb1db87c25e9b04ae84ae221d81686599f1409e58c017b5587ba87fcc849cbe4ca20a74e92670c961729af044995b568f34825a9ec295f5317c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15458f0bca6114759d3da69e9a5d6638f808183594731dd59be7b4defe2962ba072770f059d1e0d4b4dd2a2e82ca2908065021a434f3a0aaf8b8104e3710adfee2f', 16),
                    gmp_init('0x1aeb0b313fd425ef440fc632848d9ccb9c23550ed5f76ebef0663bd232ddf42a066cdb3460e2c5c42b0670492cad0d02aab2450bd816f4abf30db1aa529ef7a0c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1584a7df43e953c2d9553dd04cf8aed6f6c9f776dac88e486a67ca21b049ef7da4156157709da8beb6101ef66253377f6785e701369310c4b65e862a17bbeb4f9f1', 16),
                    gmp_init('0x14e89a7a82c1ff7597ef3471d5a5345141ca34af9d656fa0bad0cf409592e141810e64c8529467bfc5502208b42dabf0d9eb337eb4eef6d0e8ae5bc0ded1fcc4484', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9696ea4ab4e047a86a5f0b888d6c69af9986a398d316d404b927d953e01e5ce0207f36ec2268008bcdfef43aca9d3f22b6001ca9f09bbf4b40d68d12f60bc6bde', 16),
                    gmp_init('0x17cd3fa4c14d19e739f54cb6ed3a31b4af2a3afc5ab549637abc535c638908096e2b65fdea3ea3dbea85845a066875ad0ac9178f2829ff495e01d936b15aec8177', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50d62b692f360c2ac8d20cfb52eb1ea953aa3f179932b686a5e3d8006921aa008a8e3baf6fcef0b5eb73c190915a9d7ff689a284bba3626a8b3fe4077368245bb9', 16),
                    gmp_init('0x13f37d95026d1f7a638955642770665c8735c7e2413f71a8d3a837582475f4788245b38d8eba00bf5f88e4854d2ad9d74e0090d3bdd5af935bcb1b8bf37f4c933e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c664361603e9f78e1df972ff1b24592416d04715b0795739170fc0bb72f3ec9ca77cddd7b93fdb66427d4a43e2e426f508346895b815c16d0f32d5faef51788c3', 16),
                    gmp_init('0x4ee84269b2b3f1e6c7a229fead9fdcf582aea123078863c75fb44f9c3ce26df556f7bbe29c542fdc34c09f9ea3b3024805044d454a673fc68a73ec8f9040dcb28a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbcaf6477724e16c914be336067077fcc9830c331ff08db169e08eb29c40a8985f3e6b71390b90143c28d379015bed58a7eb9c6d71d622dae7710459adc9fae827d', 16),
                    gmp_init('0x1864e1d732d710cc0a6436f20b0c743b8c7140f9efd361665e31b4cf10a639f79484651388d461a4d3bc4c114f6a6fe142f8365f5c7a58ceda31836d521e134601f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x779798ee3be3d7fd78fd09387cd8b56e136302fb126824087b10f8f684ed85f2159c333dc5332001ec6ab8f2b6e4dfd38193abd4773a95bbd7262448cdf88e473b', 16),
                    gmp_init('0x3731baa323ea1d1cc8bdd5715e6508e84bc9e270af7319900a5e80dbaae95a3952690fe02d8e1e7e8e7c61148e077ccba2e8a34850021a2c0da0c6da08b27a72d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9910ff0480339fb2260eecab4fdb91ceb8a68b68850e4622985d09323ec1d161db14205aef40b2923d3dbaa519b16e9914987c70fddacb2b06bd6db523c85a0848', 16),
                    gmp_init('0xa373e65cc62c870984f5eb2e3e5da84c0283846a6623f7a20425e93bef7a84e6af2c9b665184b52fbf2396ba6610b510ca21b3cd30ae7c0cee4bfe6f364def0c94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1257be792217fce085d0c56efb425e64deade9b933a4396bbe9947c916f50d9bfa853a0fe9a980eb98848c282f5932ee52d8fd49641858fd0d25d5e9512ce383299', 16),
                    gmp_init('0x2d1a2fe5f1a455620a931db2696be94dbc6cafb28c1653a5bd2c271d08f4a1afa9f46916f1389b5c3477513baf6984c1d7d5dc4679bf8dfecf281323014193d3a0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfbfa19b70bd89cc1dc844e818faea06270d1df350dbe0a5d49ca90fead5696ac8b86d4b43d8237619efc7d04b5c31eea36e1455e1cd8e3db554270a7973c80f820', 16),
                    gmp_init('0x1b994af51fb7577cc4f4d5aafffbf6e92d92504271680c1a715afc49e4ceb30bd8f18dec239330ba6497a7eadcca689a68a7b5d9e529a5a3747bae72ff552fe816f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f9a9f96859a9f5b92d00ac6d5ce09288b1df029a4ff6459cf289b7557af5d779fce8ece9b60ea70d4cd3dde9265d8b6a44a25bee092c5b308513a0c6260637ab1', 16),
                    gmp_init('0x16d831446cffe3b33ef4854eb2195f2505faf4a647436c75e454ba767da3e60655c7fe4f3ac24de88c3a4d1f3571080dac9d4753ff126fd1c2118cb0922b5b63cd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17ec0140529af25ed50fcb78f771558e9d6e69b08f14bab3970e84cbe8f9468e30092437b5613170a30efc99827613f0c37b715403e14018b238e1a6c2f3e0bef3f', 16),
                    gmp_init('0x177556420bb13d09def44187117000a86ba0f3e1043ad14c18775bb85ec1fc7e40a6b7d6159f204dd32bbebb21c86bfbf0646e8edc72bcc2e99ff3fa668168134c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73a589240b2168bdf6ba8ba3f38a012627fe4b62a8cd43b0e713d85cc4b86c08af701b04850637729e7a0de3d199d4d1f8b32f9f1d305107ccedbb59dca9aff80c', 16),
                    gmp_init('0x138cb1bc918c044cc80737cdf4377fe2f2d15b65b2b560d8196828fa4baa5eca5aa492513b8221f17f2677b98ab29bbd5abff6f2aa753816648028c8c11d8f16b56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b05677b99149f78e1f2ff37ff558adc510b3beb1eeb8d64baa0536353fd0484f762f69d817ae07fcd14105a4e148038a64dd15885ffd95910ff0fa90d83b50a230', 16),
                    gmp_init('0x1cee4cb938f88594aefa1e3329f4994207a5ad4e4c4594376247f1e4ca35c884f2d49db793f9587e525cb53d3e0f01fa6205ec18f04b7bc2931e22bf1ce43b8275e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195debc4384c0ac77743bd63d36de1ed3742d2d704a19e27e1948e49f03243281330ad6ab5468875a746173f2e7a3d3adc7a8290d94f9741f3000a2ad7eaafd5467', 16),
                    gmp_init('0xdf2d99cbe50d69225acf08acaee1dd8f229cdc41ff8aeca79e240a470c4c9d6c1475bc698685564dd7407c6d243c98d287ef8c38af22938df5eabafce86fd61140', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf0f81cb86f43867b7d9c4292a8f82a71c1b816d4000154bea648b51121f33614a3e5a37a3ebf0e2ed1789e1f65545779086508dd52fcd5a2cd2cdd2e734c5662', 16),
                    gmp_init('0xd5b785ee5f1448c529c1ebcf8df5dc4e242ec825718f106b9659cce9c315ca76012c548507bbd1244e79dc60e2dcfa901b5c77e78006a54f1c1fe1f9962b51c7d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15a5d84b61535b8865996beae611484b98f55b910714f3180094ce902bdeeef76a692be4754965ef8251008722a0905589d177ee402b55297cfbf2b204cdb0e34f0', 16),
                    gmp_init('0x1abe15903ca2047bcf411e5009e030372e8437617ef678c74a834de4aaa61cbb2431f38805e9af49514e430af6dc789aac131fbc58a17753ba43c74ce31d78d96a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa270a9847106d1b18023c12af21e010c5972feca7639a54f77df48a816cbd2ede0b92ea6938c37d985b66fde22c085ab0269f628b2ae5f90e02d097eb37ee7bd6f', 16),
                    gmp_init('0x3ae85df3ed248297707ed8c1687f82c9f243a5fc47d51910f54eceb1e84123e9f6df6ef3ee776095ea663d1f115c945b4e84a3b9cd2449ecc13d3d798dd1a5c22e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cccb6aba2560f8494872ddb089c6bb2e163e0e3f0ad4b086cea285063331f3d91fa2be3abeb35f49436da0c6a4cf3cc79928e49a510067007f824e5a246a6a1965', 16),
                    gmp_init('0x7544a07e8607d3217ccb1ac56d1e2f49b3a8db3162f1387704e9bc32dccf66a399cf519d193395321aaefd9c4abd01724844abb4d20773987ae3e05a6daeeaf241', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1444e12d6ec285e3e4255f913214c749c0861a9c4805bb8b35ac7ef53a3b2ce5f90cd4c100092d0d9fcfe006ad9036f96cfe0a87ec933f30c31d43c6d81c860a565', 16),
                    gmp_init('0x93c01352df8376df1adcd23f0842bd3159af4fb843bcdf7332114c21e7f05b693ce5fd0c4dfc47842777b6b6db81bf1ba8d6880d3b79da65c780db0b68cd23314b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9a3e96ec32d4f4d577dce10c123c52d5126af897b632577829ae45c066b6f908e8d1636fb6cf0b3eb552160ec88468fec4916dd27cad36812f86cee348a111ed4', 16),
                    gmp_init('0x7570d4975d6bf99475771e8357f29f98fa3b9fe4252e010b87dc4ce9b414670e9e4a66e8d1ae16237060b42a90fd1d0cde874ac939315a117183b225f503617b6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9bd59e4624329f30f19515706bb1f7e74a2a6cce9614c09de921c2e580539271df2cf905c854b52d8dc49aca9e5a6a8a1ad5bec2e2ffec17f7b2e5a5d9fd49e87', 16),
                    gmp_init('0x7d798c96dc10e74ab32fa73256243a14a3b3efddfd1876a15e6ff5562503116d629fd4e513685962b1c959d9afc732e727a5527d427c12c1ce6875e814ff093b63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2365503184368267378fd1e19d66db283affdba8df9c52ccb5f5d94ef35b42aba44d3cc520c52d9fc7ca473faefcad3a951507b283f6ad258d6df1e15c00680e1', 16),
                    gmp_init('0xfb61e0e16d005624da124d0f07cd58e45a7805d358c0a234d7a80e3068f01736f151652eb1934b577bcfd0aeb2dd2579a6dff4fc0c3a577167c186700970e7a2bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cba6ee8ce9970f4de01ccaf39a7ade265cda51efa9762943e313b8f36c37da26affdf1f1151b3f90a6ef6255130dc94f5684f08f1b9227facffea5c732f0626bfa', 16),
                    gmp_init('0x1bf905fd0b4113811d64b9dac829fddb5701741917bbe5b29eaed864144e45b966797da68dabec2c892d1c32a881fa41ef0f620472a240beb5776336d3f6d955e29', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x187aeb67b8b091db41ecbb9337802f9e04e5feecffd3d1db8ca41c7bc1716ee6505e17b93692d1711b031a34412a40ad3fc29f3e817a7c7fbcbfc5ba8d59da7bb54', 16),
                    gmp_init('0x6d42c0f700d3e5a701f8fea0e3f22c44052582b21924b4a3eae7e9d273cccd6f6a98ab5c925a8bcdb4f7bd51bbd53bcfdc087334f6323b6dcc611fe09d4c695615', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e6a4ae0f46471443bd0e7f981d99c9f74c71778fb136394be8b7f513d68d0ffbc85a1af6b75cedbf5f3cce189c652a95df570101a4c1c8628e9f67439cf6368a6', 16),
                    gmp_init('0x1270ad24597f56838b4a73566de57b93da1d49c4a620fbd8a4cbea2bbf7dc103dc3338b3334f3c423c5a8ea4a8398c674eac1233cdecedad859702bf6631f3f2c6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2779fb2cab15be777b32c4b1e5a30a08aff249fae4449ddae6951732fe341b20f7826c78e86884d059990e59de6ef8cd4aeab47690c79fa86d38e5b06f76f468b8', 16),
                    gmp_init('0x1254dc50e44d40e673ae66bb7825bea60c35f4403d0344cf71234c9e12e0f364d3b878f8d01e9d5aa4b025dd9caa41c5f894a8ec1376194fa7e1c65411bc3f609d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e84708b55c05e691893d1ee371c3f184326805abd3682c739f5b9945c916fca9b18bbf6e9e662e69cbf963fc250a5aa9d6ba344bc4b934f03f104e0c37f8cb0cdf', 16),
                    gmp_init('0xcf290e50fd434c6cc166eab0524b5512441dbb1b1a1ffc620d3a2a488ed637793d6c4d61eed19fd1d87fb197f1fa9d63c6519a8b7ab2b5914f9682d9d3143ec89c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9e0646afa4536e2fda5e5ad3eb7143ec8111892141c4191ef58656b31222cbbe43e327c1357152ef19174ad19c7a869a1bf5fd8e5bd34caf64515da106221c6f8', 16),
                    gmp_init('0xb121268e682ada1c3008f20f6b76579886ca0a5c09b660bc2b4de1813d55270a505f794cd6e5b0937fcafe41015e097fd642431b34af57b380b13d24486d16bae5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf040c7d3dde30657be4b23c930452ecbdb7f66a3891d23923f47823a1e9eba6471541063da596b5b59c1520a86146d0c4f79788f592af8ce869793778b98c439d0', 16),
                    gmp_init('0x391555caf3f43c9c868b4d75beb4a7ae315cdbd70da3267f5e34bbac9042c0ac31c895a61fcee5478d68da3cd12b8664b12e16ac32ca31932fb63d974a77d535c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c565405c00d3fe74b1faa467045da4e9cc8fbdee3171227ac7948c181b45794d12081039729e730fa7f1798269d15e2f1071bfa5b8c05061850714fb3c0d037f7', 16),
                    gmp_init('0xa543fd20db6b578b37904fd55c1e8c8ce2eebcdeb53567d0ea6cadb9ba82386f7b7b24ecccd4058f7f182ca3af52826e75684a11c27bc40d6c353fc94a3f42236a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1abf395fef240ff5ee7d8d52d11fad0a22a70360695ef9256c6091f5101d2aa2c79009cfa294fac713b1c8179b837f9f02f9cd6a5ac815531f2842e5742310be81b', 16),
                    gmp_init('0x1e1746bce122c80ee3736385f59b1b2c7d3a203f382c28324d42baf9fa493d4d0fe917ba75ac70e96e563bb8ce1c0766bf28e8a81f7f8d82fe8fbd0e2d746cccde9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a4e3e589a670224f936c64f52f4108d8736004fbbf1e657ef9a36c9d84d76bb2ab990f6a868f4122aa08ca437cf26939569856c5b352530de1ec99f07e8b313476', 16),
                    gmp_init('0xb68a178214c039cd95b05a13d56e79807de8916e3d6ef59cb626d1c416c319a26eb093aae02605fd89cdd0bc5f15177196b26711505bb911e5ae219487d6132691', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5129ecc29f2264d674497cdbab7311f8c41aaff4d2a2de5651944cfc86da1ca94665eb3b16defa8e55a7bbfc458b387f5bc1aaf596565472f7282c91615fead87', 16),
                    gmp_init('0x11f6940385ed02cce0bccc2582b438b0f34d7daa585f24cf84cccf21ec330689b70221d8cb684fd2c4fe96f0ab07c0177fc7c4e6966bf174745a0e20df230229efb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b114fb0a2e0bc2f083f48dc50f580178269b4001a9e56e9bc61a184da09f210a77df2f5c0d22871d2bfe83f9d751da127bf44ae0526699adf6e985fdcf7286539', 16),
                    gmp_init('0x1233604c2396ebbad8bb8bc2afe7211a9def12e1b9298782cd5260d1694b8f143736b50c1e31cbc91e6494b83e071b8153a3e0fe24320df812444eb8f92011d6de8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1718d6e8e0df628bb0936bb84d6d5d61144d77e773207b47628fc9c56401a56d029c8858f6c2ecf134dc7984a9a309c362dff089398a0479fee5f9a4772e44f4ddb', 16),
                    gmp_init('0x1bbd65e2e2d651df3777b3a49fa90bbc984c85c1d51848bd710b6fef7db69a7b3903bea9b49b368b24a9365c43c978729f72fe3fc195bfe6558fd69c84a1b585b76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b1d9d998ebdaeebbb6f5596b430650b8e4370af4a2eb3d473bd54a08c9114d07d0b68566cccdfa90370faaf847f0113f0ab51392f1bd7b754e8eaa2b093ee1688', 16),
                    gmp_init('0x5a664e0d14f6249cac8defa4ec7df14edaa7ee45fb79fe5510f2fbba8b4560970b4a8db7258593acf15c13b03927e07ba16cc5717883d78d651e07aab3eb570ca0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1882649054dc984b85ac04189aa63be779e3e228959a5590d96ec69e42ad2f757c87b33cccc1d45cea871d72789c6a981fd5356a7c0e8d667f3fe6bc737ba913d04', 16),
                    gmp_init('0xb7fefeea3e5150ca3d7c24a1c114be4804cc4d0074e497dd32f618633502723c25ffd28eaa31d76d0f881f78f7363bb9f8e8de53e45031c4cf332af6f228fb3abd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a17c135acbae32d64831f4d68d01d00d5f495236787d2f7b9aaca7f02e29cde0cae87581b69c4000fc50192796bbe7209c09391f078b306eb93d8a6cc1cba39ae', 16),
                    gmp_init('0xac56f74c30bd08106dd534b5ce6025ec509a5be91841b9053142fb407eb29908b384c84815c39a8a47b2915bb0b7726a22aa3d68978ed040dae83e6bbefa7a973e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1af33197cc1184aee4a368e21ca002db2885c897a61cf7353025437f62509337d549272b9e8b7bcc4ddb1c5379dbf0993be9e77c0c361da109b312dc896a3a2be76', 16),
                    gmp_init('0x1163aa3ea97e3912921267417a049240b3e7327a90f345a9b89fc77e1c007678cf3f88aa2c897b47c38398dab5ac121e8c96832a65ac07874d476ec7312e5c35f69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4e6e886afa239b5a7a85c138b84e3dbebc85bde7d3526ef07e3c71a99529c131332485ec4026b378f1b3cb720081b98d1f5bd487f65c65a3411771bfc92e6cd70', 16),
                    gmp_init('0x532bc6df9225d016e6243b36230fee06e0adfe3fb3ad2b6d6e04031bb33731c3bf81a30feb9c3fdf7a20b38d3eb90b3a9c1596f10816af1685f65240a56e2040fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e359d33a6e8a0e50a1d7b4c5575731d66fb76d24e42b8c2b6d0bc2f50b8e56e5f0d21b5a3f37e577886859be59aa8889de3ddec6f458f319d029d30ccfdba3263a', 16),
                    gmp_init('0xd50f7120b4762687133a192d90f8932bc0dd3dca9f0b24bb4468a1e644fb625ffa15026720a9d2255dbc70d10b17f26c32e1fd10aed8e339784decdb8e57dc5e0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x188aff5e9b98eff9ff5c417d3d1de584e286e171bd7cda05ab24b4612ee81a8260cfe15c6e2d556fa0ba277e9808287e9a5208af690f57dc595fa5944257d7d3912', 16),
                    gmp_init('0x2771c9fab02e3d8dd9c821766f1d9fea8f378d416f74b749fdf470d97e7fa4474d9c2c964b0a4546a97c6e61ab443d10a0ccd55dc01f049293b0700568c6c3151a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec3f4ac0f3baf0f20beb743da76d92a25bf30c2d5e2d666e4583d1ec6b9fdc95cec6960dfea44a8bbbc8b5d84e82987ca1caedaaff63b5011f24b869a68ce85b23', 16),
                    gmp_init('0x1a127913f5cc202be11db1876d47fee26faf12bff21ccd72a88d62d4c6409a85c7f9a9e842b372d2ade020ac2dad5f9dbc6fb9c06ad1dd9d1705dd9518310321910', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20321df371547f4d84b280a035b5a306d44b5e7fe61be4a6ba5162b567651796c44e195ea0959b558eed0b434adfc2755fa957a60d34a729f444cc7fb102e1c728', 16),
                    gmp_init('0x1cb83d77f410c530d3fa656a2a7b01c493c8c0b3bdf8f7dd9232ef6737aa575a44a7ada14dda159e1b8054bd171cb4b84844261b77d04bc36bfc86d01547641d9b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155222a70567a837aa918e1f37bd5a20d8a8545eb47e7c3f1fd10d9338fe5b854acdf47be5c12959e245a25bd9b9eb0b0f86f01a8a41c80acac5438f933e6c5b553', 16),
                    gmp_init('0x97a78e64169b41d8c0bc7cc14e12eb78857505c265d8d5e8df1f2584096bde422bd310888eed814aa0b262abb10e3c7bad67a67cfa668758c8213b368ca2862a80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1af6b925ff0c50a941719c908921569445ec9a387c88d2d7d5633ccc948f3217ca34cce24b45214deb0ba40ad2e5b3154374b15325d14edf415bba0d1f988468571', 16),
                    gmp_init('0x13e694e2254515f0dcb0f224474f4b0cc16bdd3a76a501fa6a28117e367f315947eefdebace1a252b65b765a15b602d08602b7b66383e2b25b555fcfc767fa33215', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3dba3e51a6e4290b44d53a0350ac184724f84de617a4e9f87f74a075f55ddeb9430d1af19102f12751dce11601e27c7c368362b9a9687c2d62804cb227aa42326', 16),
                    gmp_init('0x427a0734d17bfaf1fde50a70e3897d049ae84af54bb5b3c5c2b35f55a315029ecad12849a7ca4c764ffeecb0fd778e7c9f5f20fa5e5baf3f63bcfc6cd332cff069', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf2a90f94c81e28182a16488863cc36d072da6f47ac36576f762f4a712189758bfbd6820008780a7f042af8e362d5ad6d838f444a3234976283cb00d984c682037', 16),
                    gmp_init('0x1d806ec3954a23c15ca57b06aaa01bfb1454b01cbaf2fc4fdf9f822612d87675ef9a1929310c8e3a11f81c148eee25aae97319e703c20cb141edced00ac414628ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123ccb01fe1fbc62a8b9fd414d5bf0e4fe10ee6bd51cfa957fec46bef4131a8d8d7cd2642e686772ce52634fb6d2ada657b2491d8a0284d94b66a34dd81af2ea01e', 16),
                    gmp_init('0x4c89aab96c011e73bc4754e3efdb2e0eaddde0c67d1e554a007b1cf9b506f7a62c23ca5a417814b24e459596a7949c728000f585f2b0325f374b0e4f700f4b612f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93ae2d0f35aca152c97b4d75df02ac12f0570e5905d6708066ae6452d7043ee81a035e042d365616f0e2607ad23906f9a96219bfb16eac2655ccef10e33fb18c55', 16),
                    gmp_init('0x13e8df936c944b5d96a1938899dfd87f7e307018ab716278714718776aa4c7e0c0eba1cf80298e30710db8020b0ddedb29d58b633c6f48a62ec3e15452ccb51b6ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a08e821224f233f7b832377eae5cda651c739900317f98fbb6164f6eb41be8d09212fa45ea696866a0d0ffaead61e07d4957dbbe43568e84f9c5fb9b7d9e35701', 16),
                    gmp_init('0x2489bfc442440bd4ab28e10e5c154a678edef081fe6b7e37212a16f670bafc291f4cf55255c8dfc745a291e2a84f692c3d4e6fa2789eee9abc2b50f00f23da8433', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14dd13e6dd71ef8a0d8f2b82f5d29b50aeb0df36d9444822835997b22a0c51a79109f6e49f8585596aa2754f641a7bd66ab5df560eca8f60b07b7a582083ce06942', 16),
                    gmp_init('0x189b725a6b6276b5df3944a1340f517260c83ccd5ca6edc4c3f0b91158b2b60e2c942acd0ac3b662d59679fb6b1ce4c5103494af652f5201bf33d0c210c87801431', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b81b7905312e929423c38d9028b7f9df9077c460bd42d0c1a92d6b55c5e6b60f88f724bcb5a544f8288e703df5d20db42f7bdd45a912dec6dd0cccb6f02df43d8', 16),
                    gmp_init('0x6e474de1ae8dab1e80b97649e78735e81a8cc0ba285434294b5b714be03c31ff8c530b5e0385ec30858ccd18bed3664ca839865d45ca2315aa7b57d763b8afd25f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc7147d6d66c0ec357b4dfe656a4cf37eac1732f01663297a2a73047afd285cb70e85408cecbb2e0f143eefc772d64a7d080a47d70e736ea9aa22b8eccb56b092a2', 16),
                    gmp_init('0x83a4f99b6b60e55936632c3e0001d5cca7bf21caee9ab4c41cc5ca3701a05c0498d0d9368806ff8ed5d6aa860ba4b009d0d2d18fcbfb072411f3e59103c115125', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e35e18245ed3dad965d2dc67bc6ee030891117841314205f4616c6f80e80d3868156194675f38c5243b99a5dc81c1e38b1a1fc0332be96140baed7666ae6b2853f', 16),
                    gmp_init('0x1c3541aa5b4640c2c60b43e4fd77008a356b9027ce47cf6889615ac31456e811313f3a1a08207640ceaec15d27a260b32b0f341d649259e4dcb389e59cafda7741e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd202d81a03d18233a926fc2fd5fe87183ecdbb66b5e6d860d2d466a1b34defd3eb1c8f63975f3ab5dca4cea13b28515d660db56646c1241e0c3c32f4e34cb99695', 16),
                    gmp_init('0x77d879e086f9849084de85e36ec0bbd6c4bfc2e06f2b8b43697689c46eada1d72cd7ad702cc8a745783c0dc132272a10687791cc35cf763c20dc570644caa08959', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aed26e2db636092ec870ff7c3fa65755262708e5427c4b6b4aa211b1107e4c635f96e1ff06c55b9aa332551c61bdca8d0dff1342112e8db0fdef192aeddba16581', 16),
                    gmp_init('0x1948dcf43cbf355d9160f9d754e161b4257b78c7b7f34d0a37803c1cc4bbfc1318aa27197f3be839c9ac057595a1cc5af271602462d8a9a439d1fafd3c2533251d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a94acd5ae8f820af709f2b7996f72c2153489f1d988b432676c47b64dc6b4afe00f97c968da6c7086ed87a7ed31de95e736d8a70e97e28be3e51df490ddc3577ec', 16),
                    gmp_init('0xf6b2d22e6edac3e8d0f279d7336c2ad31526ec4ea6f8c729e79e8484f28ae51b325f0766b5042d47b5b3def0ff9460c5d47bd94b2f864febf7a5cc854bd7263fcf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85f1958bba850a17604b31c1d6791d2740a157be88928838ea6831fde1cad2a4e0fcd766eb259432a9696d9140a27fde01c660c6c1f35923d2b2b4d4085967b43c', 16),
                    gmp_init('0x111a0f655abc61dd36eff7bfc81da563993face3a31d9199814b1d9dd8f0a9037d4cff1a453e2237b7f691076f7d7a8f68884d2780d71cb04d223a6800ed777e0d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfca121495dc9f83a592069e577d14ca069cfac1748d0c281a629f45b307329130adf7ccc082241ba7625cb8c43947ea97e3766738e71c6e7f43c5bdf15d73ed9a', 16),
                    gmp_init('0xb8380b2eb1779669adc311bd82b0f0bb8e4e159cdacdef4a8ffbc3ccb9366ef539f434f29932f184f2bf2ebfe8389e12ead3a271b7025d39dff4e6da377de97fcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x944742778bab26e65e9a3f5313c3a003a90251109d1dba7f8fddec1e75d45765473fa94ade7386b10fb226e6cf370a02f6c130a85d2d4e99969a0062d31c2df559', 16),
                    gmp_init('0x18a709e156dedadf5b8d637639834e527b23a26a665e944f4a4b5cbfde924f2dfb553e96d2831a1b7e753fb9cd3cfec55a53826b0be65001ed7828ca5adfb997e14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb607b47d281835550a30ee2a8a19845c6821dfb5519efc3cada213aa3a1f3d3ff28ec67ea3b084b9200da403aee6918918ed91e11c20b658eb412eb9d00d3825ae', 16),
                    gmp_init('0x1d5fad8a85ec5b5a9b75f1e6fe10cef77c1f32a98b3a0d7ea595c56cd075c83c1f7c07b3da980c25cf2a86d31edc07db93e607d10122cc2c528b3ef46192657bec2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a13482d1d9855830589ae0be245c5276346bcbd1b57cf84d425a609f58a7c8c6069e9c7e1cfde18572bbae80c1988e88df767df8ffe603917ab146802bc0d4745', 16),
                    gmp_init('0x18e84b2a63bae3aa9985338d6ca9fcc46dead1fb55b99adbfe70aab532d63fa5deb7d5157bcdc481d3b8c5f2551938d17926822ce1171ec895f66ac9ee936a3d944', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa881ea559b7c43b5963a53145084084b62ab695c69c2bd23b5e274ce99e32907e49cb3fb54873bbe580da07d1339afaa160df1294574584f3220024890128270f', 16),
                    gmp_init('0x651fcba995114da460ffe8b8591863d312743dfc12f0d0b1c24da0ae8fc30458b55a16083f94bf2ff02b6f33785d3fce2b1b40e323c53223bd3d9de6ffec7f7938', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15cb1856652168bca7a39b106f093e4a57390fb5c1b2d340073889ddd42516f0428cc959d96c93b9a3b001aa0f2e3c9f328980cddeff77f891119638ae44d87d78', 16),
                    gmp_init('0xc541c1ea1c63d30563d091b141db79827f0d0879a3042222823e84edee6eb8db2c24b50dda14c7e9f7320813886ff4fb1268b6c5946ed3932c85adb26d33e39fbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b527fc65f42269b084afebef08428be9aa2a21e650cf5637c1b7e633b9ed8dfb489291edd995801b497914b633832c7ec27c93a87a4efc0b7394547b643684ad6', 16),
                    gmp_init('0x5f7ff5f88e2e491f15a695a6941a44fa380ff0aa026ba54b82a611247f7bc91657c0dbbe3f6425657e6b6ad14ea4bb52880b15cc9a6b1ade3830099375278302ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x184ec2b153748dc34d54248bc42d37631b5756897b8af09517c7d8b8bab2ecc0c8c1d3ff5ca508990745b4e1e5c14a3782ea6c1bcaf3e421946994d68d7acdb128', 16),
                    gmp_init('0x421d91fe459e0de97e5134413e744a9e46ecb2cfab22e3eea031371c44349ada8d603fd1ba99d221de3a82d42614de6312f59b6d2fae1fbc730be76102bcd4b8f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc14d7c55a5f3e1f4530c9a2e943fd3d90e0f2c08382dd238cdb7ceefc0da0fb1f6b80571db36c201181690a0070596055406d95b89a810adca2a69328e4c1bb9', 16),
                    gmp_init('0x6703504959e2b8790a615abd199a37b224ca2c7c5f7134a0b65d80c9765901c338150f940c89391daacb96d5873af9bf699f2e2d25f0d0c1b838c5afdfccf6ebc7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1dbfa792d042aabee9ee9cc06ae1c77c1f9a0eabfdd7d3a7a09be260bc6db5552a64b9496ff60ccfb3c44ca5fa5c9e0fc05ce141a50bbd9c3921d45c5c8dd04afce', 16),
                    gmp_init('0x9ffccfc561c516a10c49a72d31f0f0d74d3e75da6fc0d63f3208e851aa2f69af1ad9b61817621f1f7e1e07c6eb138f1a433f9ea54811b89e04f2224e6f72765171', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5399bfab4d01892d15b1554abe819e310de786d182c22cd4cec96c9c25e69011813f89335138e0ebfb214e9cbf2b93ad371e8430c5036848441b3eb86bc1bd2ee', 16),
                    gmp_init('0x7d2fb0d9e42f25a98d50b91634687d1ac835dec8af0e83d425ad49b05739a0dd543bff1940568251200b0d1b565ceb35c29cb43e2eb39471d02efaee912005a9f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f0cd8e682cfc6fd78fbef8a59b239aefa5434aa5b02a7ce24117bccc4558c48be7ba0c42b0c106bd9d48521aa09f26cf745a76d8d37316f0b06dc021ef237051f4', 16),
                    gmp_init('0x1f93849a2b213b480d3c54cf34ad3d5315062e6394a1c55f4e2c3f1456a2da9f712ed3a369e5e7e3e8b59eafab03fde74fa1d0ebcf19384dbd354da0bfbec41e617', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ced6ada6cdee22453e0c48d6d3e1d629ce375d1f56dd9630921c19a128743874b606e8133cd7d66c718e2132d8fd07282213c8896d5d37a5d58333c8c9c13146e', 16),
                    gmp_init('0x1b8b6196e3ea3286e2cf6e1518fa500327427f4063d5201d0a408d4629ec43f0a4317b59edb427ad8d30e225368407cb796dd549898850241e9ea1c974547b194a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191f506a80a744f68ce15edce42d572b956a985b167046751831a54e6db67c77ed0cb2c0893eb4fc9edc62bd196501c68195548f7033a2217ed247078383c9d1905', 16),
                    gmp_init('0x73634577cbc87097d5890f8e55cf13684c6c1738b145d1a7f85b300487f3c22ce64fdb86ae9e299096cee768c70604d46a5919d9a95c4b37128dd93d2bf0e799ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94135e84a3c663afb1c97b3036d14415acf9af6b2e4a498c4603bce6957fcccc262065d3d9fda0477f412eb09864eaa79ad5486f1a7e893c1ae2f7d8e0c2c3a0ef', 16),
                    gmp_init('0x1750475d7215820b4f2a99798ef0419daa96aa9aa8752e4959d4b79a6d31d2e85cde03926a69fd98cc4b985816282ee026822f40fd380ded50a43441426d7a1f341', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1829ebb46a2beca361c3950c7e1e68e0972c6b81a7755588a9c8802e3e2db5b0e12ed501e47f5249f37313d57a2351ecbe298877beea466bd015606f4ca4d4f6808', 16),
                    gmp_init('0x1f301d91f255ead892d97e5b00ec4ddc5a84d830021737f47fc052ad0509cc68884782f4890e249304ff11bdd641b65fc3e3130d39d908fc6499eafd084149cbe81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9238405b3095ecc14f253fe0d4f8dedde46fc3cae6eb2796f52b8cdbac00ef816fa93a2e815bd94e4868519ca7a37a388e3ae7db6e925c9d91593cf4108e41277f', 16),
                    gmp_init('0x12f30b9b0f6967f2b7bb3d5202f0b18c14f175c04f6d78b5623f2bd03e3a37d72546861e53c2aa1cc1ab8d8c3e6eda1049814b326424633254927a7d0f67882df12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe43d67b30044d46e11eb07d1237c39b47c1055ad0388dbfeb934ad41e68753be7e937729f3e3039571d91347592a6f98b7c90ce48b6fb25b4ee492eda438e192d', 16),
                    gmp_init('0xef6eb73fab386c5721ccc2e6dc2bdcc5066d1fae53d231cde95e0bee697ef46528794b7080037b574e4a4f2b013c83e1b583d18cfe0ab5ff5c99bd8d9fc100bbab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12ca55f9a3a604c26506d4f4900a8812dceea93a7981fedd37e968ddd07f43d59de274e6b70de3ccda447efdcbf86b18c9e6d436828a22d5a4544fb1a0d16ebc9f6', 16),
                    gmp_init('0x3f16c189dda36b6f3d2230aaa8d74aecc6f412a302ccaae183ab8f1f7644236613256f92bf208cd62d2788ad11c98bbdf8c1a9267911b0efaa21b7ec64e633cfd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18c70687823dad6de109385fb8294d498ba18d0ae6ea7d706f6811884e47069b6214f535568a9f2f046a609d69bf3c2d9bba06e49df791d957d591991bf0bf28a44', 16),
                    gmp_init('0x4df34d7b164495318d73da679d5a1407198c0952a3b4e357e3c0dc49bfe86185bc8e0a354e6dcec707ac62159eb4f9c177ba47f73ee117dc849357efc6d67ffd7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcac9f1d5bddcd3a9a48cf506f04a647aff1753bdbc02af5d448333ac2d845b648563cad012b7968b3d6fe928343da91b3d8c7870c7ee974f83b770280731e2b92', 16),
                    gmp_init('0x18c4cd3b987782c2ca219b6666948aa0ac1de81de053e387e0432d3441623f351ffd5182186ff5602fbeee9291114c56558c39a85654cb0ab5bf9b4124bcb40d52d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf9200da5a70538e448b6de4ad5ea1e019747b08ea34bb906d26fa6aec03656d3e18882ba32b0f1d221c29e867ba161bea7142a556dd9ae750018d01f0a0c123cd', 16),
                    gmp_init('0x13b1667e2ea93c96d645c5852fb55daf8501c51ef6f75183afe853d0ff9e0af48f11ab1f0758b630f4b4b0d2e193a21f0674b3de5ff481b5edf7621ee5f0d81c672', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcc40216017bd19096c9ffba67ac80aa23b2ebdd8e48cfd981ad51bfe47410d98c2b6f3a5442c24ecae06a8e36ec1d25deb82a6ad62b9178a14c5ef880278b149a', 16),
                    gmp_init('0x569be8f6e3660c1ac7abefb310e8fa80e60a2dd5a632af71c9cd1d317a5b972cf581433f595e93cc48991ed1b7994725a4df3eb36555df1de679ea0be9b75f864b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cc27e0453c6d5a6c1b3d462ea2b5d105804f1dd2ae3a9e7a101b3b9c1d73518f695a59234a9e69ac283e4323b5954c2490d722e82999af6fc314fd09fe0448854c', 16),
                    gmp_init('0x10b298138f4a0f4ea63016c4cc3ed7a467700033c700e032094c5eb495e4b93f32fe4caa06f50f6966d57786465682a4a9371d352d9f00c2de3d179d903a7e19e26', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2da7db02840f023a36e1fffeaee16d3c47bb435bec6a231d4aab1ec5412f56fb90fcc4eaab9fd8571084cb9da252466c052d21913ce0fda47e61829972ce8f9a17', 16),
                    gmp_init('0x981af3a61455db8ae93161a2c05aaec208c1ac30542b23bf871365e44a4eb09c8a6265f9cb96a2b632cf7fdf77bf6dfc59cd2278b1a36611997259e71938d77a9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33ffb964e05d5f6799c7865c906e2a0bd0c9b131eef6bf6453c960bca9bf06dea4650bd0df069416992b17027d972d1c60830492593fc3431582e051426b4c3f67', 16),
                    gmp_init('0x83978f3a2f3633d8a2ea115fb805a4a146918cea68c089cd968deae33afcf305adade1bb0e862032cc848456bd704e30bd3f0deb0eb554403132db85f6e9fa9189', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5145029ea197efebb1855eca8c0cfa916cb79d87416598620e290f2d4065dce413b2e3e5fddd353c6d0fccc9418fbd807069b59c81be56337493012bbdb3f18230', 16),
                    gmp_init('0x57215ac25219348ceceb0fedeacc75e379e8f21860456b1253353e5bfae83d85f01588728726ae644c89f1331330d90670898440c59ec6217d7c09eef390438bae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137e8199fe24a65acb397c1fd0b332028a9ed3655479b91c6a34e771ccb50e1dc6c63f0093e11c3b0b2e3f7a82fae7ea9872d3399bb2708b32ffd4abdb4f6f04de3', 16),
                    gmp_init('0x16febae71de1e4be8eefbaa1890c404245d79fe67260f18b724a4766859accb68dd5baa5d12bd61beba7c79a798d4bbff64e2ec543cbed8c3c0ff2f102fed4f5410', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff36f55efea43a2bbc6dcaf5eda4426bc1989fcecd01852f42f4f87e1303adbdf03f6e8a895eaaa7233b0b3bc1ae8418da3ff4b814a499d99f895a36231bdd31fc', 16),
                    gmp_init('0x2b80ff5e2c286ddbdbee24c9f315db81085e0d5c8613d73c3c475c9919cdad70af4e7a0ae6621c57b6e54eca936eb5288a47d76d9329c58f84c7180d5818832a17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f18bdfe06eef4e9b1bb13186bc4212f129db07c32aa3178b4dc5216150601bb8806dbc3149d528c5bcb9252c242a3b0fa0af63210b4a580922e6ad1a9871f197c', 16),
                    gmp_init('0x1bb8b8a691d9db40ab5780790487785c36ecb11421279d5abfea2642af20de790f74b266d272f30f1cb3316dd2ae7ca294a26344818b932b514f7e64b81713bbfa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x127482041d2df7be32a68d62a528ce9a9d83c9c8d2480cc3dce56e42c97642614f1f3de3d61e93a3a6a8c3e30d1167c4c8d3523058dfcfa2ea4971696469a44620f', 16),
                    gmp_init('0x535334afab825890f66c815494dbc0ca1bcd7c2088ca05b118732caa319bb269215dbf9fcc72cacc4619f9a3382046f5d4350117320a384db6eb4439ea67c7fd4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc57cb13cec80827ae17d1f29a41e6e64ca811a3695c983ac57396ebf25643f3ca77202652d1c9bdd43244cef5d8d76055e2d11032081f91ec5dcd089e5c0f8abec', 16),
                    gmp_init('0x1002656cb46b17328c0a54dafdc8789b618a7a149b4d223cca59c768ea01c4cdc7ef6ab6c7485ea8193b7fc826bb6bc0c3f18b069a09dd105e416b59e9c2d5c560b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c09177f7351f66d95f3b0b6882a1a367bf55e27b8ef30be373b00958815bae05127f462c580162aa611357672fb8845894c36e2120effab7a57ea34b836dd01bef', 16),
                    gmp_init('0x162751c932b40e305ab55c1d466cfe83774041babdc566d1be1ecebf42adb2582cf29042ea6a78a045dae531a884d9267fc0cf73ed68025aa0deef0eba1bfbe7524', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45feefce53333c63e90a630f121df8f0cf19c33f2c0923c25f6588f4fb48b7bd27dbab5d8129e36b0d4cd629607caa8694ad1e697d62485f0ead32e836a56a26eb', 16),
                    gmp_init('0x18dd0bdda660229c0c952059822c4cd6e7f3419806b09e682106f9cb6cd2cc960f3db2b516730eaa43667ceab2fba945fa65d11a892c355d430241237a74ae15886', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183a685a31e3d6cf04ce2052b8c4915d988572a3a7f7206c662d7d7c79e30ff71246b2cb8059f9e8bf5fcf81c9d1a050f05730d73839529b4b808a92760d317c60c', 16),
                    gmp_init('0x13c2559753627e8137426c885dbba67938c7755ed4b280b7d598ddc0fd6087730a5f2d8ea1803f06c8d1ec3ad1995f62f3c8f24d1341599807314408f423e71c584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeded91b88c4e15d0feb30413db74902555f706d3c77e729ef586137b7ba28e14b38261be993b1c53bb5e63875b2be5d611055ac074f5dd2077a779463d63ea6586', 16),
                    gmp_init('0x15417662fa8a3201327a819787c51d901c980db63809c6e0d8a014f499fa5642b7ea42293e28c05ff89ffa46c283d0cf2fcb210122bb6bab7f40cbbfb03cee5f36b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31c16edb3e5ca5237e3b0b5acdda984124c9c01fdb2d1541cc2336b614cf922a9c712babdd5c0de950b3c9fc909708778bfb65650b703a31d0525c70348e080aa6', 16),
                    gmp_init('0xa760da306180e162fc1ae709a382204582282778c5ad79da65368bf1ac2cba9fc8195ebf452f7a4eccff7ca75c3f468379aeb795135b2d839e16d195dcba96a3b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e14790895dff9a40870c0a462f5761c43174b731e8969d354db70c295ccff1aa91b072b94ad7f9bc5834317210e447719ab8125d2c64bb9ebcab77140311cc347', 16),
                    gmp_init('0xcb85389f05106af2accb2129e21e7a406c82b6d9da8f0759499610d5214bd6f04140babac2b4c9929afe6927ca0b71973b2775b7a810896ca6efc566d58f909123', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ac1176368211f2d2276d53379ad94c4907c3f231d78c93dc3cee333f92c75a348725a09082c8de90313f882662bbacc56ba18f01cf9cd2a53028b801584810ce1d', 16),
                    gmp_init('0x22bd52a1cf3b0d2c342c73bd13194fdb1e018464655095371918cbebe30158b96c9a717ff1cf6a09508a42aeb8fc12b03cbc00a7c1e4ee4c73137ae216ab84de42', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x11bc84d7c5c93b1e75baec2531339c7ecfefdb20c7432a80f6fac8f7a1c892fb84d7585f7cbd5cd2b79a6752672c41b64b7884e5e75a2840752cd6151c20e6a4ece', 16),
                    gmp_init('0xfadf2f5e8af7542020e8fab02c903eaee951abf774a7f0df39753eafa0e548b99b1adffb54a57574cd13697c6aab047490d9a0ab44d371d11c30ab00a3bc363066', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9735c5cad538d9dee9418a0582ddba0affc89d922b57ed357930688082d487ef31296e0529f0a446118cd7fe450031648e9bcb6b9967793f136b3791d9274b259d', 16),
                    gmp_init('0x1d39b2d4cacc28d87a049ec291744cf56b9ea68e39daaa9fc99642c59c36884033cac5667e164ee0319a62795d26ddfc48022b937bb212e111a605689b7373216ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc3ddb12e107a0f7bbcd7de0393d85e7640ed784cd354e5826ca8d87fe351b6291af95ee96d44740464fddbf76edcb04019d21c828f4f42a286b93974bf66fe7f7', 16),
                    gmp_init('0x20a51c2686657e230eb1aceb4512d3cbbe86daa2cde7c6f99199941be90e3b092388a4b2a36a6e5c32159372c53a671cd2299a3c0577dc7762b4fb91a39a4d7b71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d195fa82cc690bf2736e19f5acf35a06ab33bdad4fe1dfabf4a7eb4c34ad141bcb52cbce82015581687129aa9cd827b48eb273f45d5a304411b2b6f3fe5ff7160', 16),
                    gmp_init('0xbe7d5c388f5b8c32dfc1bd9922a8aabb975c6e655b24913c6ade6b5ed1fe18efef584e2420c41acab6d7293693411ce8e2d758a46376ab7244cad4d8f11e513e19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaedad0149637afa64e486f82d45b036471c80bfadbe4d41dd02e3a665ed92cf81545b1b854bd959a73de2fb541785d5484e4c266a786441c315ecef6c2b79ce38', 16),
                    gmp_init('0x1f11a3fd0e7a6a7472e8c1d9879fd42dc1c1e6441dbf1bd017977c12dcd5474f0b09676ee74ecb50537606fcc872e85d20a282d9f6fc37647b4284ad6c61db8f779', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1db821d9dfd4a3ca3414132fba7f89188caf60b84cb3984f29c8db536acb4041da5e63bfaeb43e4375a6b652faa21413cff7a183846b3a91c0915910ea4896a053e', 16),
                    gmp_init('0x1dfc18f670a03fbca64713eba1386a2d7889196e4fc5469fc3f305ce96317677c2e64f7a99a4e773ec68297af0f4febbf8fd2d41fb444c3f002d27dbec7a6c79f40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19d64d81e1db45e7cad5df9b619af71cc16eb8dd6ab5fba2da5206a950ce358c132afdfe086bd8a30751d35778839a727934398589309187e55163a97b656cc3879', 16),
                    gmp_init('0x95c6c58c2ea55dfeb95bd69ab0b402a8cbc849e51aa047e4bf2f1f8026228b81f0da59c89241609e590e7453c518d5db3ea5af9a3e7013fdbd494af2e5a6960787', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b371429419d967f9c68dbeca3caf1e53881d9ca4881e136198ab56eb76bcd91638a84f9f4a352ae35a46ec2c095d7a53dc7d8d7393b3ac67fa6c6b63eef4eb952', 16),
                    gmp_init('0x6a98b4d38911f9bce73dd08d255b02ac8a42a44b5849de1ceb39b72870fcc042da5ea7b23221d4364113df3b4886b054cccd2961050d7ffd0b53c7403188bdb189', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4a2674c6896e10db59fe2f2fe81cd27a7b0c945972fffced1398f24b61e6a320aed4f8bf6929715bdcb36212aadd12ba16875f997d0b2892872e379964fa3f2f', 16),
                    gmp_init('0x1604936e30ef21193d1624c1d42653ad35f4415d9f82126c8214eb107cc8db834a311d1028346734349b05ab7810bd93059faae4e9dee06d87170f407339af7f409', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1783f02bdf5f049a16c9f2f78f992b945b8a924fc280f1c9cb205b0e7829a34497aa1c51cf8b81a92e0001b749671144df00ce3be9c83882ecf5260552f5fa6ab83', 16),
                    gmp_init('0x63076466017273cb87e77f6c5fecb280aa8f536376eb577bfe941757fc960146c13fba5d72d84f3b86f8718da9bb6a733f2ad4e008b2f203a617de0640c2a59b96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18ac429bd293cdff2f70bcd15c8bf967a91aabcaf682836268f4a19efdf57687aaa176ad082213f253f2d285e681313d19e73b020fa1987d73ff7824e996f7ca250', 16),
                    gmp_init('0x4f41346e2b5440c3d40f99d7786b8d2957eb36942a039bb9de5b9cc781d3db864c2b87605e7efe10cd946420d3074288f7a78b35660b7a1d59a2b752f6dc23423f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc97536c1933217317a416cae87225db5356e58af5879dde59853088184f9ab832d2ed501995e4dae863df1dc241c2795de5841bc60d952302056b72dbeb9dcee41', 16),
                    gmp_init('0x1a71c8040baaa7ce723e7dfda91cd2e13db12d797e132f6a904b928f76d6716a0105dfa8e585f3be8f02de41f1bce6b5cf862f6ee43d06c1b275fc981306b110f18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16c8742fe0db89187ca345d77125296f601e29011120d1de2bc472078ecf9d3614cc9dbf2873c354463b0eda765f9c0e6767fdc38816378d4154189e99516486f6f', 16),
                    gmp_init('0x1add793661281e9daaa1d97eb0afc439348bc0239275851935961e614a316d825928583166ef5f71da04c6703cb45171d6e04c633fbadf5659f9f1fe037fdf97f98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11929c1aa7ca2cef12904aaf46d2bdf84f30772a8a688326430918237c702c28401cbbb08db943a5f7b697bc4fca8af00dce6dd600d1fe2d862d28e3b440a6ddc04', 16),
                    gmp_init('0xc53a91b245844ab1865bfb4d6502f5cc0dbcdca7d4199d755742a1e5f06b35ab4bf215f36dd98bd9bd0f16dd67cb38487f9bb9f9255f7f860f3e8ed1b0ad8449f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f457db4b5a31e8293f227cbdee525b29bc04a06a638901d77e7ee4f75c071bba509b698f6e6d38e2104c222a3c72e021bf03c01ccbc902f843e3f68e422f09992', 16),
                    gmp_init('0x12df1203010b174af38feca00aafdf951260f4df3ee9993d08a777429061da5129b2a306fb8b3c79e09f22a51c772c6337b606f02454b853f3f4b83b383212b209a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
