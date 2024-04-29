<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\K256;

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
                    gmp_init('0x79be667ef9dcbbac55a06295ce870b07029bfcdb2dce28d959f2815b16f81798', 16),
                    gmp_init('0x483ada7726a3c4655da4fbfc0e1108a8fd17b448a68554199c47d08ffb10d4b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6047f9441ed7d6d3045406e95c07cd85c778e4b8cef3ca7abac09b95c709ee5', 16),
                    gmp_init('0x1ae168fea63dc339a3c58419466ceaeef7f632653266d0e1236431a950cfe52a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9308a019258c31049344f85f89d5229b531c845836f99b08601f113bce036f9', 16),
                    gmp_init('0x388f7b0f632de8140fe337e62a37f3566500a99934c2231b6cb9fd7584b8e672', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe493dbf1c10d80f3581e4904930b1404cc6c13900ee0758474fa94abe8c4cd13', 16),
                    gmp_init('0x51ed993ea0d455b75642e2098ea51448d967ae33bfbdfe40cfe97bdc47739922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f8bde4d1a07209355b4a7250a5c5128e88b84bddc619ab7cba8d569b240efe4', 16),
                    gmp_init('0xd8ac222636e5e3d6d4dba9dda6c9c426f788271bab0d6840dca87d3aa6ac62d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfff97bd5755eeea420453a14355235d382f6472f8568a18b2f057a1460297556', 16),
                    gmp_init('0xae12777aacfbb620f3be96017f45c560de80f0f6518fe4a03c870c36b075f297', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cbdf0646e5db4eaa398f365f2ea7a0e3d419b7e0330e39ce92bddedcac4f9bc', 16),
                    gmp_init('0x6aebca40ba255960a3178d6d861a54dba813d0b813fde7b5a5082628087264da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f01e5e15cca351daff3843fb70f3c2f0a1bdd05e5af888a67784ef3e10a2a01', 16),
                    gmp_init('0x5c4da8a741539949293d082a132d13b4c2e213d6ba5b7617b5da2cb76cbde904', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xacd484e2f0c7f65309ad178a9f559abde09796974c57e714c35f110dfc27ccbe', 16),
                    gmp_init('0xcc338921b0a7d9fd64380971763b61e9add888a4375f8e0f05cc262ac64f9c37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0434d9e47f3c86235477c7b1ae6ae5d3442d49b1943c2b752a68e2a47e247c7', 16),
                    gmp_init('0x893aba425419bc27a3b6c7e693a24c696f794c2ed877a1593cbee53b037368d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x774ae7f858a9411e5ef4246b70c65aac5649980be5c17891bbec17895da008cb', 16),
                    gmp_init('0xd984a032eb6b5e190243dd56d7b7b365372db1e2dff9d6a8301d74c9c953c61b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd01115d548e7561b15c38f004d734633687cf4419620095bc5b0f47070afe85a', 16),
                    gmp_init('0xa9f34ffdc815e0d7a8b64537e17bd81579238c5dd9a86d526b051b13f4062327', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf28773c2d975288bc7d1d205c3748651b075fbc6610e58cddeeddf8f19405aa8', 16),
                    gmp_init('0xab0902e8d880a89758212eb65cdaf473a1a06da521fa91f29b5cb52db03ed81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x499fdf9e895e719cfd64e67f07d38e3226aa7b63678949e6e49b241a60e823e4', 16),
                    gmp_init('0xcac2f6c4b54e855190f044e4a7b3d464464279c27a3f95bcc65f40d403a13f5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7924d4f7d43ea965a465ae3095ff41131e5946f3c85f79e44adbcf8e27e080e', 16),
                    gmp_init('0x581e2872a86c72a683842ec228cc6defea40af2bd896d3a5c504dc9ff6a26b58', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe60fce93b59e9ec53011aabc21c23e97b2a31369b87a5ae9c44ee89e2a6dec0a', 16),
                    gmp_init('0xf7e3507399e595929db99f34f57937101296891e44d23f0be1f32cce69616821', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd30199d74fb5a22d47b6e054e2f378cedacffcb89904a61d75d0dbd407143e65', 16),
                    gmp_init('0x95038d9d0ae3d5c3b3d6dec9e98380651f760cc364ed819605b3ff1f24106ab9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eca335d9645307db441656ef4e65b4bfc579b27452bebc19bd870aa1118e5c3', 16),
                    gmp_init('0xd50123b57a7a0710592f579074b875a03a496a3a3bf8ec34498a2f7805a08668', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf23c1542d16eab70b1051eaf832823cfc4c6f1dcdbafd81e37918e6f874ef8b', 16),
                    gmp_init('0x5cb3866fc33003737ad928a0ba5392e4c522fc54811e2f784dc37efe66831d9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9623bbef1bf90ec0d7c744ed34659f010e6e638637161270ecd31e14f87f62e', 16),
                    gmp_init('0x38a9743b4bc299e9e0fe953a8edaa929fe6043c9dd68844e53013eafa44ee737', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f0e80e574456d8f8fa64e044b2eb72ea22eb53fe1efe3a443933aca7f8cb0e3', 16),
                    gmp_init('0xcb66d7d7296cbc91e90b9c08485d01b39501253aa65b53a4cb0289e2ea5f404f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc82dd73e5161dba0884a36f2080d682ffc274bf62fca8f9eb0aadf82a8d733c', 16),
                    gmp_init('0xe5f28c3a044b1cac54a9b4bf719f02dfae93a0bae73897301e786104f47797f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34ff3be4033f7a06696c3d09f7d1671cbcf55cd700535655647077456769a24e', 16),
                    gmp_init('0x5d9d11623a236c553f6619d89832098c55df16c3e8f8b6818491067a73cc2f1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e3d1248c7657211d20291ce1798f490743f1bc852858e32d7efe2315fbc7671', 16),
                    gmp_init('0x99a48e10ecfcb81f64480e19393e90eb9352baaa63e144a7ef1dc6418717dec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x308913a27a52d9222bc776838f73f576a4d047122a9b184b05ec32ad51b03f6c', 16),
                    gmp_init('0xf4a5b09543febe5f91e3531f66c0375da8333fea82bd1f1260ab5efce8fe4c67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78a891aa2234a498896a193ed088a2b68fcae82788f506a0f3287432beb31db2', 16),
                    gmp_init('0x6912a35beb5035cbfcf5f25527302df654379bcdd800b82d3069d623b9fa4343', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7a0da58d01dc635812ddf64d99c9aeae783c797d7cd204ec7b750f733ce1752', 16),
                    gmp_init('0x912770e068008032f6f2928340e284650be040a8c062b742bbc027380762cef4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d86781855db1b17d7ce3765816076eba7163cb9fba082bb65348f778db0e595', 16),
                    gmp_init('0xe2b99adfec86f8772e562e2bed4f88382937844e0e25d53299951e3abc733de8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bc89c2f919ed158885c35600844d49890905c79b357322609c45706ce6b514', 16),
                    gmp_init('0xd313f3cdd7cdcc16de776fec3b5892c1172d3056112776f06f63f4cea8c95157', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddc5310f00582ac848494b9dc41ab08676545f84205e6a2a008fef8516060dfc', 16),
                    gmp_init('0xba0d2f3af20d96920191ab6dcc8f0e9041dbafc6abd04730fb5f8ab6e7820ca8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8282263212c609d9ea2a6e3e172de238d8c39cabd5ac1ca10646e23fd5f51508', 16),
                    gmp_init('0x11f8a8098557dfe45e8256e830b60ace62d613ac2f7b17bed31b6eaff6e26caf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x465370b287a79ff3905a857a9cf918d50adbc968d9e159d0926e2c00ef34a24d', 16),
                    gmp_init('0x35e531b38368c082a4af8bdafdeec2c1588e09b215d37a10a2f8fb20b33887f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8262cf2ff0799c4c0d9a30f8aca98ca009809191a3c7e184fcfc0cb9e57e8dfa', 16),
                    gmp_init('0x83fd95e209109e4e66fee22ec5b34f3457b6ed332b14c47835cff8d8fbac376a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x241febb8e23cbd77d664a18f66ad6240aaec6ecdc813b088d5b901b2e285131f', 16),
                    gmp_init('0x513378d9ff94f8d3d6c420bd13981df8cd50fd0fbd0cb5afabb3e66f2750026d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19825c8b1da0ddd5168105b24ce99c877ca41bd47b734b949052e48b026bdb6f', 16),
                    gmp_init('0x6294310f0d4c878f320261cc94f59f6cebe9eecc8cf6d3a6b5df7084c49cfc9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1653a8a48d2c236dc60dd31a2b6717804998c4beabc288d9d17cc1f27c70620c', 16),
                    gmp_init('0x338290935af7f7aeafa99474efa701c012af748dfd3dc526ca2e81d315b32cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f12d86c1160191443c5f56ec6c2999edfa58e345e1534e650ed09523d82824c', 16),
                    gmp_init('0x5c4ff7f44ab3bfa0875994f3fd623769391c92410854bc5b8579c34806eb34d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d1bdb4ea172fa79fce4cc2983d8f8d9fc318b85f423de0dedcb63069b920471', 16),
                    gmp_init('0x2843826779379e2e794bb99438a2265679eb1e9996c56e7b70330666f7b83103', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x203a8c6f9a0aaa5d14262716a23abef645cfdcdc0f59e603076ddc02db453629', 16),
                    gmp_init('0x3b0f0b53de5dd9b936cc76d15f410612686deb25c5285ed45971c7853ff89f84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x474a4732c294b1e119e6a36324655103553199217ab8cb45b9446557b147f3d6', 16),
                    gmp_init('0x94625e231206f04eed2cc30cc3a48aa311fa7f17010e1300dcee852828628ba4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e2acaeb3d034181c81ef7334866e1ec9d3aed3fe5bb4ce9783130dde46c7ecb', 16),
                    gmp_init('0x9e61a46797efee149d80c4daf0fb643afac706b91b67512c8449201eeebc8720', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd49ee4fb6b63f43c6098ae3260b5373f54d3fe4989e5cb4f47d42ba6e71dabcd', 16),
                    gmp_init('0x531e39209a5490dd7c87ea7a61bf356129c509312ff7031e66a90cf016603c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5a70492e9e9156baf61717e8a490a582747dd8bf775f201eb7018f3f0a4147e', 16),
                    gmp_init('0x9db526f5dbab89c6fc490990765e0532f4c4d9847967f57f8e4b3cb833fb65ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cc1109e03df089949bb6b52dcebf4c212aa3cc0d343efbd63da8f68b43841c6', 16),
                    gmp_init('0xaf561afe9c094b760ffd3d6b0a29ffecd79b433e2d906cf5b9733a46b954e94d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38c5119aabe18ba80523efc6302cdac6a1061cc2d3634f454eddb46bd8edcec6', 16),
                    gmp_init('0xe649dd2285d9732a668cb2da275f282f28a16c822b5530a6456e0bfb1933db08', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x175e159f728b865a72f99cc6c6fc846de0b93833fd2222ed73fce5b551e5b739', 16),
                    gmp_init('0xd3506e0d9e3c79eba4ef97a51ff71f5eacb5955add24345c6efa6ffee9fed695', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x423a013f03ff32d7a5ffbcc8e139c62130fdfeb5c6da121bce78049e46bc47d6', 16),
                    gmp_init('0xb91ae00fe1e1d970a1179f7bbaf6b3c7720d8ec3524f009ed1236e6d8b548a34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda75317b21f7acf4128b59efdc2fed523f7335f6842b836a65b7f8f1c5041216', 16),
                    gmp_init('0x73f8a046bf72d5f0df19e21b342d7fc6e9aac07ae77acedadaed32986e708572', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x111d6a45ac1fb90508907a7abcd6877649df662f3b3e2741302df6f78416824a', 16),
                    gmp_init('0x696911c478eaffbb90d48dbff065952f070008996daca4ca9a111d42108e9d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c71c5b48e9749d70573c58c4a82eb1e2587f1c16b1352fdb0143e71e465a930', 16),
                    gmp_init('0x4a91c334e8f5fa0c2713f1f2824bb68c79345e3fb7174d471d873f6cc34638b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9530f0f9023f469c1364b7d2c3e8b70e19150ddf51f0ab069505324f3c62bac0', 16),
                    gmp_init('0x8f3c305a8f9f21e234dd2f7f59b333e0e25b32852f1fdc68478abda97618e309', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd84e4afc1f31a566936e837a909b4c9c7850dd432744a077e318dae5badb6ee7', 16),
                    gmp_init('0xe525809a7c7b79ce12a38d58f565de4dfdd8ac974aa3e64982d556e6d42ebed2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a4a6dc97ac7c8b8ad795dbebcb9dcff7290b68a5ef74e56ab5edde01bced775', 16),
                    gmp_init('0x529911b016631e72943ef9f739c0f4571de90cdb424742acb2bf8f68a78dd66d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3d4444bde66814d41b22b9285ff6ed3f60adff3aeac99d2394e9ecfa49e6d10', 16),
                    gmp_init('0xa4324dfa6f0163d4bab95ac198a4b5bfc1ada50ce9d6c630a038cc05347da3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf006c42f1d8e4f751df82efee099522c356929d1fd665411f5e91b77a547b4b3', 16),
                    gmp_init('0xf68154d4a666520a5c47848a4e4f7d1675c933eed6be7ae1b5ef449fa86aa74b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae30652c9d9c1d89f9085520cdbdf4044e72ee08aa39bcab48cb3406e9d33a07', 16),
                    gmp_init('0x6cb9d9c38d63fe57efcce7d33db8d5cf1c9c37f5dfd7e95c74870c0f60a0b2a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67be02dcbe4298fd6f09ff43aaa332b0f2816fee3e4367b206704385dc3c9c8f', 16),
                    gmp_init('0x7a9b55a73e4def84a2c945b608291693cd993bf60b88c2be55384998593652d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8dc1b2a5bd5e1c815e17e7583388c9a1869c7bbcc8281da759654b90c28caca', 16),
                    gmp_init('0x8cec0ad927cec7d58c6d8da420247d947d315d2cec8128f6cdb676ea23b3ec7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe69b346403de885c1a50c45352405b1ddccc88b8710badac5c2f974518b01b5', 16),
                    gmp_init('0xb4efac5fcd7e45261ded70ab7d7dd37cedf595f3d00683e418ee36878d965c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2749e292c5f84eccd59425a8d032f31da7aefd23f30b04028921fb663bc4416f', 16),
                    gmp_init('0x50cc2d4e37672bc4403d94990fcadb3ef59e9fb65ee961057e98bde2fc6bbd8e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x363d90d447b00c9c99ceac05b6262ee053441c7e55552ffe526bad8f83ff4640', 16),
                    gmp_init('0x4e273adfc732221953b445397f3363145b9a89008199ecb62003c7f3bee9de9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c1b9866ed9a7e9b553973c6c93b02bf0b62fb012edfb59dd2712a5caf92c541', 16),
                    gmp_init('0xc1f792d320be8a0f7fbcb753ce56e69cc652ead7e43eb1ad72c4f3fdc68fe020', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4431404790c5ffb2ba84a440c05094426ff95ab6eaca04394b891216f6e55dc8', 16),
                    gmp_init('0x96b0c142e65366f8fe99837f5642fed7a66a29b79eaa2e5031d944aedbe323b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4083877ba83b12b529a2f3c0780b54e3233edbc1a28f135e0c8f28cbeaaf3d1', 16),
                    gmp_init('0x40e9f612feefbc79b8bf83d69361b3e22001e7576ed1ef90b12b534df0b254b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e22fe8d866ca87c126243d5b921089dab7b7d470a87ee0adfe9485d701b23a8', 16),
                    gmp_init('0xfd2ff0e9ca122d10177f3f02099c1533c0f7c949fb511cecf7a413c50884edae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5380fe8575f26adb7924ae0d58138d268112776b11bd34b3eb5e19633f0e9aa', 16),
                    gmp_init('0xb97fd8739087b41d5b691363924c8e016fb94e5df468318ec4ba41364082720f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x508df6d503ce2a8d2edd69e64705306dcd5ee51f5f5cf475dd7408bf071a70e4', 16),
                    gmp_init('0x154c439b933bc42d777304aa733e49c54ec03228ee8aadfedf2e5bf729950984', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa804c641d28cc0b53a4e3e1a2f56c86f6e0d880a454203b98cd3db5a7940d33a', 16),
                    gmp_init('0x95be83252b2fa6d03dec2842c16047e81af18ca89cf736a943ce95fa6d46967a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3dbff8455109763338df581930125b2dab921c259cb220f6eafda76ce1abe11', 16),
                    gmp_init('0x6f2f9099a3414216438fa75db8a8ef3d3c97d903c6b5c414b49ad549fa8de63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7a4be3dfc6579fb43c5a9600890893af4026165ed9e3ab2e6929378b63968b6', 16),
                    gmp_init('0xd6ddef6ce823c61521d2903038ca52d299702fb8d110105e494dda32d0c34882', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19ace064c7de940d878d9c13a07d014af61b7c12e42a46ffdcf1b23603593449', 16),
                    gmp_init('0xe37992035268a333bfebd739d9402c46ac710b9f4084068a3a414b93adf83631', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x939ff3e4a3ed9af0c395f0d15d6b1f518a8fd3a7d9ff42de1aed361beebc61d6', 16),
                    gmp_init('0xdeab3bcf08b7a90e9d46fc4eef016c04980bf26eb78c7f82e75ea466a3f5cb70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8740cec20f87daa108c33228ea88e310a0fe674fd0b3bb5ee3e9892ccba6b63', 16),
                    gmp_init('0x6472c133c6b932bf378a6ee9903ac37d40104f5cc381694abeea36c06934c5f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19a9e5f1c4cae30797a98dba24051a438ea755c7b062094a34ed6e88a8ff2cf', 16),
                    gmp_init('0x1e661c67ea85af5efa9062925012b7300ce7ebee88486d353a77e766db0e4352', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58ac33391b50608364883e762f290a50d9fd516ae60c6b276194ff2c1b3ec038', 16),
                    gmp_init('0x9163d706d55c92d978779249e991fe970219043c0b4fbbca16eaa3f110246279', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8b4b5f165df3c2be8c6244b5b745638843e4a781a15bcd1b69f79a55dffdf80c', 16),
                    gmp_init('0x4aad0a6f68d308b4b3fbd7813ab0da04f9e336546162ee56b3eff0c65fd4fd36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed0c5ce4e13291718ce17c7ec83c611071af64ee417c997abb3f26714755e4be', 16),
                    gmp_init('0x221a9fc7bc2345bdbf3dad7f5a7ea68049d93925763ddab163f9fa6ea07bf42f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7029bd7a92ff352f0b6abed6c058f78e3d446723552d30e2a0a2a582f55812dd', 16),
                    gmp_init('0xb0eefadafde8b3d27dd6544ae30683ac47dae84243b2c73c721cc66b1a2d2927', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaecb013c44ce694b3b15c3f83f1fae8e53254566e0552ced4b6e6c807cec8ab', 16),
                    gmp_init('0xcc09b5e90e9ecb57fc2e02c6ec2fb13d9c32b286b85e2e2e8981dfd9ab155070', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ccfedcaeae65c99009d4109d8cf75605745beba49565b6a49ce5683bd486ed1', 16),
                    gmp_init('0x7c2f4d713d6a32cfb6122481200b34112421675969592aa24f6d59ed75e95d8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf42c102af47e6e474aa264b818a34e7edd2f62bb5cc62364dcdabff9b181fdc2', 16),
                    gmp_init('0x57503ab46cfe806c78fad05cb86fe22a4c15502d9a2acf2681f00093a485d7fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd9a4b876341414335a8fde33ca4df19d0c74576ba2d4ab7a206b1a75bd0eaca', 16),
                    gmp_init('0xf0455879a1e8f23e815488ae933ea08b0127b38eed6f634f6e6fafb5abff4acc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bb8a132dcad2f2c8731a0b37cbcafdb3b2dd824f23cd3e07f64eae9ad1b1f7', 16),
                    gmp_init('0x945bb2b2afeee3b9b6f9dd284f863e850f54a840f4752d5364130627c3811c80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad09882f88ed9bea884f2d2e93d630944903d7a23eb276cbf20953a3c7bc57c6', 16),
                    gmp_init('0x7243c08c42fba52ba28186c729dabe5f7b311d373590e2d3ca32c0edae4a0ab8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe260a0cc082ba6bbe669ed95366a142337a7a40d63d418a49e2dab644f927dc7', 16),
                    gmp_init('0x37ee6744b0da9d67f073cb3d725bf440edbcc0b4462cb82da45f36f446aef35d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9d1290aeb3ca41f1eada2d2a9fad2e0f506a937af0f1862ea830c72aba56302', 16),
                    gmp_init('0x7eb53113ec2d3eed029715c6726386e41739aecd9fa74f2aeaaddafa88291c29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32cfcf6a24c7524bca5a7840ee7cfdec49376fe265e1968c3866d47deedd7dd6', 16),
                    gmp_init('0x21846a34976a77486208096a409f561e7a0d8cd20349a08b25fd44aefe08e330', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc5079de539d6cef91cd21ac063f558402b126023f54a5fdbacd3704f4d1243a', 16),
                    gmp_init('0x65062a3b3a705cbb8eec72b94dffc8d75f7ee4f5b1f47169f5c95168855db68a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x235caadde85ac49f3ecbe68f10d22c02b8f94058fb2d0596696d03fdf6abf83d', 16),
                    gmp_init('0xdc12f9c745fd47ebee4232a5bc93ad893f0518d6323610ae7f4ec9e90d33e191', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d31a77e505fc7e8913deaae7db2625ac287a665dc09816908d244e6b74a3f9f', 16),
                    gmp_init('0x22241ec96098575b06b18f38c7802753cbf6fb51b6e00a754fcb0241301e0ba7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x723cbaa6e5db996d6bf771c00bd548c7b700dbffa6c0e77bcb6115925232fcda', 16),
                    gmp_init('0x96e867b5595cc498a921137488824d6e2660a0653779494801dc069d9eb39f5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57efa786437b744d343d7dc45773a3c62d240a43079849071fd383d60ca030d5', 16),
                    gmp_init('0xd712db0bd1b48518893627c928de03ec689b6d2ae5e9974ab07ab44274b02f9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dde9cf317aacad400c6273212181fcb575a224b69d021132567e09e80633cb1', 16),
                    gmp_init('0x9188fbe7a707e41d5c99ef86a1ba66a880b27fdacf859ef357dd49aa67ce6b34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264bbd436a28bc42a2df7e9cd5226cb91080577e327b012a7fafc7770c584dd5', 16),
                    gmp_init('0xd87c6fa94ee093b4d4f75ce24c33be226a118243717b8d8de61227937704ab11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x486fa72cd5b5cde813c4bb7f8e47b850085a0f7115f12522419a518d2933f3c5', 16),
                    gmp_init('0x62e12319f56bdd43e48c48baecc8f19f62d9b783cf0f23b79ad4a71acafb0f53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97d064f0fc69a1222c21f62e0ec970e940908ab819bbface4d0bd76a44e5467d', 16),
                    gmp_init('0x89974f2ed33402cc03f7c66fa850861fda5fb3b854f17ccd797300fd1e9cb3fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24796974a894af4fb664ff27b76a5303677375fbe6f12204ebd594225e99f728', 16),
                    gmp_init('0xe3d78d44688f3001ec52e87e7d8d664a5adbf3c09575a2d837a00516ebaaebff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa94c6524bd40d2bbdac85c056236a79da78bc61fd5bdec9d2bf26bd84b2438e8', 16),
                    gmp_init('0xb5201fd992f96280fd79219505019e3a7e5d3c60a0e39b2bc2e2c8dbf18661f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f39cbdaa3d55ff0631a59ee76b38324916f9ef723926049c9e0c6d42fb0079a', 16),
                    gmp_init('0xabeadbde138639834da936d0278da58b9bfb3fbc882a0230fe2297302c5690ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e842e5baa802bdd289263b70aa8e6fc40c10e34b62663ff5f46f289b98086c8', 16),
                    gmp_init('0x89f24ff5fc92e72e1b93704631b077c037b8e576b75e7d4ef994b5138ee939a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5a31d6c327d61ba56a39e86c534aed262e3d4ea9d4443a7793300b2e4f7ab73', 16),
                    gmp_init('0x37788c3d8d1e9d7a0c118a977a4ece5dbf8c4449a80cba213913a3fc70561f42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2dcfcab8c93937bdedf1b33dc74f972a8bb5fc9d101cfe67cca81cb913613bec', 16),
                    gmp_init('0x46dbc4dd9474a41265f088b7d6f6c6f43732cfbad33f5f383e7309249a039215', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc389d4a0d153447df50dd982051dcf11fc5d42096bf71b588f929a3c14dcd86', 16),
                    gmp_init('0x93ae4fd660f6bbed9b568bdbbea910ca05c57e18fe7e787468eb6dd9c8f0a873', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2ae53d1ae7582288ec4bb0428f0e8b6b567d5ff4fa3eb648443d764dfb4f6be', 16),
                    gmp_init('0x6933594d44b3a0987c95679c7c1b547c4c0efa67c3d40436c04225674aeeb9a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f9291c89d71e9023750a17e0cf5ed1f0b3e1ee21087714724f9c6eb78819311', 16),
                    gmp_init('0x9da00d1063ec3ef0f5d0de8c452415b6120aaa409c86a174aa9f9b57ac2eb125', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xeebfa4d493bebf98ba5feec812c2d3b50947961237a919839a533eca0e7dd7fa', 16),
                    gmp_init('0x5d9a8ca3970ef0f269ee7edaf178089d9ae4cdc3a711f712ddfd4fdae1de8999', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x381c4ad7a7a97bfda61c6031c118495fc4ea4bc08f6766d676bee90847d297fd', 16),
                    gmp_init('0x936af53b238eeee48f3e5fa709915eccf0451032db939c0093ace3187d493fc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x437a86204276d45036ffb8126f6e681473a59f938897faf0f3f678ffbb7ceceb', 16),
                    gmp_init('0xb916ba13eeac32f69b8feb699d297ff87220fcfdc8f97827363bcc356c181e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1efb9cd05adc63bcce10831d9538c479cf1d05fefdd08b2448d70422ede454c', 16),
                    gmp_init('0xecb4530d8af9be7b0154c1ffe477123464e3244a7a2d4c6ad9fd233a8913797', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9ef9f13e2a489bc83cb7e3b9a3cc27335823529d2c8735cd58d729e097f96f2', 16),
                    gmp_init('0xe814cce594559d7cd956ee160ebb613db74f89af5a9b4702c03d55b056c04be4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb89070ae96ead4dc49be16f6a1a30bc241b4e98bc18d02274c9d9d87dcbf00eb', 16),
                    gmp_init('0x6f24c8c2c8a2d88f472294e4c1c4a766cb0d8b06b6b96a671b7f1bcd1b0e664e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66d80541ee1d35be553827d69faa064207dbf57454a8ab0dbc0ab5a1350cf77e', 16),
                    gmp_init('0x51cfdfe732fffb42c3f1d420535613f69444b43ab7b1b76d2a5f97afa0eaa3a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5318f9b1a2697010c5ac235e9af475a8c7e5419f33d47b18d33feeb329eb99a4', 16),
                    gmp_init('0xf44ccfeb4beda4195772d93aebb405e8a41f2b40d1e3ec652c726eeefe91f92d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62ac05e136503fa2bf3508a1c64cc3c80b73204a785fa62b9354862887213a5a', 16),
                    gmp_init('0x236fbdf3a0d1a6e4d395e79e07a92579e5590901817994efc10d21c0f46a9e45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x188ef3bfab10378437e1859a7d53e8996124c395ca422c05d6b21b3cefc76ac1', 16),
                    gmp_init('0xe6fc997a052fba99d005fb18cf398e38e4d66de83c7638753516032a528f00bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca13c44972448f5b5bf613af5c6f2db385d5ea00eaf66e1ec30fd49867bad12b', 16),
                    gmp_init('0x83aa098361c287c8ac15fa64eaada3d66370ab7111a5756689699f469723b0f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264887669cb441f8f336bbb1b2a884605eadedc1458d65a3b9d6ff9ab6fbe7b2', 16),
                    gmp_init('0x9e15dab4b20144988f2f2dcad02ddf185638d9816a0eb603932a78bc21bc2a34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cecb101a7052ae85ac11c4f44609e4914ef8a862d66cf7fddaee5f95c80414e', 16),
                    gmp_init('0xf343606696097cfb4e5aa32835edad16907557e5447231d0dcae9492d2169a3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf98b5dbc3e54c227b002f45894850ff43b15b2d61607851c50d1e4d18b20907d', 16),
                    gmp_init('0xe2d508bd4f4a13fa42939b706ba9cc9e41fcd9e025a90e358351319b5cc926af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a69907504d78f9cc950daf5f1df23924f889d3f3c700155c4f5bc8c4ed810a9', 16),
                    gmp_init('0x54f9039b6c3dffdac3ec586954fb04fc667d47e97ec145c7cf86b388fa9b4728', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x100f44da696e71672791d0a09b7bde459f1215a29b3c03bfefd7835b39a48db0', 16),
                    gmp_init('0xcdd9e13192a00b772ec8f3300c090666b7ff4a18ff5195ac0fbd5cd62bc65a09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c0989f2ceb5c771a8415dff2b4c4199d8d9c8f9237d08084b05284f1e4df706', 16),
                    gmp_init('0xfb4dbd044f432034ffd2172cb9dc966c60de6bf5156511aa736ac5a35d72fa98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10e90e2e51eeadc9ed858ee9ced7ca8d9275028e465a2ee69cb9a13495bc15b4', 16),
                    gmp_init('0xc68a370380d5e0424d57a8c616ad1f754ca5896302bb6a8834ebe60958aa258d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb8f153c5e266704c4a481743262c0259c528539bc95bc1bb1e63c33dc47bffd', 16),
                    gmp_init('0x6ca27a9dc5e0621816fa11d9b4bccd531dde1389ac542613090a45ddd949b095', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7422f42da5416384575b90b714b7dcda377a3cc053d33182dd3fc303fe75269', 16),
                    gmp_init('0x406c2f1a3313093fd18ce7dcb9f635977fb3a237f4a398e018980e8717e49bd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6b15a68a614cca5b17c9be7002ff9c34d625158c65a9c740f62abc87a1c0a80', 16),
                    gmp_init('0xfae62e14d6cdb61ea54e223eef6536d49c9a12b3082e16eeb6cd011041ce0a03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d8cad0417d43cff72879a5582d5debbedb8e771d31cf42a653b6696f5a7175f', 16),
                    gmp_init('0xc73f3b83318ca94a7bb232fa612c9d377a846bfd9cb5e5e0cf37bb91bb9d592a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe747333fd75d51755a0cc9f0a728708465a02c587737a7b8b8fa1b8b4bb2629a', 16),
                    gmp_init('0xf2affe0145070c114cc43603804c2581c88376aa6e1a969a9f8d961a6946f6d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ecbfd1db98a6ea58ae73d4eb1e8cf73bbc6c896f31c25b3e34c9bc394b51045', 16),
                    gmp_init('0x1cf6e2308b99c3a6447d0bb1849a9b38b1900646b436422d53a6710102c70026', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99741bb8b477e296af8b1bfeb7edb64af92f69efddd5ef674a35b56c6413e439', 16),
                    gmp_init('0xde47e9b07bd9c9a5e735aa56258e3e7ab17c15c9697466e43e657d826832cd5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a0894c5fe57752883e955a291d32a8c10a933f9d4fb4b9df7acd766e9358533', 16),
                    gmp_init('0xa79883c4201b8fc31f917d5f954fc32165a6e5bdbb80ddadfb3e1c5dc360ba08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35963ea43256eaca06fb171283ea227a7a5ce7e59bb6a141a7caa50a92b062d4', 16),
                    gmp_init('0xf65be1454951e5c9bfcce196f9c08a96d04082b964de59b1a10aa4d1bbb25302', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x664dd849db4fd2e35bd9c85273b8aea65923f3f77a078f9f694405d6198ef7f6', 16),
                    gmp_init('0xad51201717f27932a1448ce5dd0458cffc3d3ab31b8e6ecee7496ff35d1eac94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcebb7b7b02cfc321c6a0e82485c29e4174728efb3a0ad1b60d0b66f3119334f0', 16),
                    gmp_init('0xfe3df243633b4a32ba1ec0f74dd2e3704765a29db9e036cb16750bd251e45191', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82113a9377d0b8638231d9669811a7022b31f5805b0ae2c4e0c0a6b7c3c934b3', 16),
                    gmp_init('0x8da1b8dac9ae366608466cf2b5a0c628aa1f7c269a44680377e5e62ac42c6a0f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe1031be262c7ed1b1dc9227a4a04c017a77f8d4464f3b3852c8acde6e534fd2d', 16),
                    gmp_init('0x9d7061928940405e6bb6a4176597535af292dd419e1ced79a44f18f29456a00d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4b93f224c8089eab9f95dcd0f29b2c9028a6ac5de94d85784e27e36a95c8356', 16),
                    gmp_init('0xa67a92ec062962dfb0e5f6a7a40eee90c37ef1344915609abd5861b9be001fd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7ebf7c4e3c785ec6a5abe5a15de69db6195926dba743961579623aeef028d83', 16),
                    gmp_init('0x6205152fbfe362d5cfd9c7377044804b47a389274b0539199640392b99d0bed1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d1aca1fce55236b19622ea025b08b0d51e8512f97e696c20d62fe17b160e8a', 16),
                    gmp_init('0x1153188f5101f0c63e56692ce0d8c27e6fe9e0ee9212b5e534e050c57ca04c44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b5ca08dcb024f4c1cdc6a53426346336a89c5137f09d4b5bae0e40227dd5cfa', 16),
                    gmp_init('0x3eccb6f70aa15825e991f0cea8869094bfd067ccaf3269d3e664a6f99e48e98c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4933230cc8721b8662638cd8974ae6eda4f04e2fb1f0c13f28844137bb61ee5', 16),
                    gmp_init('0x21c09abf51a9d23edcc5e9d1ecafb5e1ad12c8c5a438ddc662da4d0e5d694a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46f26acc1114bb5ccef3e7489c22c29ff51326bb10c2c9f2b9528e323531f82', 16),
                    gmp_init('0x6b804b31635b82eace2370ac2fc32579d025945cdab55c7fa505fc8b0bceda07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc66c59cc454c2b9e18a2ad793821cde7518b3a93bfc39562e97d7d0475ba7fc2', 16),
                    gmp_init('0xd9592fe2bfb30fcfbea4f3ceaac10cb2f00a60ddb15955977ec3c69cf75f5956', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc11926d931e0efb535f96f0f0899645acf140b2fdd916b9060b1543710432711', 16),
                    gmp_init('0x8be1f8cc7d25b68918494bf186ccc6cf83ab922ca0f34055e49261e2efe2610c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x559cd5aa4a0b37b32b17cef5b25ef5f16bf4043f278e7ad0f836c6cd22be316c', 16),
                    gmp_init('0xaad5449c08d44076f2dba929874c692f8a389a1d360780e71a6ab9c99fe04013', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x690846e9eb688f2e6cdbb54b538979c45b018d52c34aa861c179874fa1257963', 16),
                    gmp_init('0xe2485fcb7f3febc5b4017024f92fbb7f6cbc3ca821c92b253a576599466f9835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x896f37c89873d1a0474652c27a10a2ecaadcffbb4688cffe530ddcbcec04554a', 16),
                    gmp_init('0x380423e7224ac4acda622bb04e811bf1e6085b61acc417dcd68f9fe1929138df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb3df7fb8c9220babba7552df4a32915dec87c65b54dd2fd2d11394bdee23ace', 16),
                    gmp_init('0x510e29bc11c73c5652a251540dbab58a9e727142fed27f5ee09def4c9722e8de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x482b6f1769155239651d68b872900ee31e4754c6e700cb925f90f1305cd36f89', 16),
                    gmp_init('0xe8c3c11df9a5cc5acb18c23e6d7fe92e19ee073442d49a68467ca37270a4f423', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dd85ec24f5c518b3eb8a3eb3ab1cd4170734b3df99ff1098607cfef50272351', 16),
                    gmp_init('0x16ea67f4121f427e09d407f9af5c41b7877c6ff7c3e0817c9b07fa2b7fc7664b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfeea6cae46d55b530ac2839f143bd7ec5cf8b266a41d6af52d5e688d9094696d', 16),
                    gmp_init('0xe57c6b6c97dce1bab06e4e12bf3ecd5c981c8957cc41442d3155debf18090088', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d000b621adb87e1c53261af9db2e179141ecae0b331a1870aa4040aee752b08', 16),
                    gmp_init('0x6a0d5b8f18e0d255cb6d825582d972cccb7df5f119c7293a3e72851f48302cea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5084b41bacf4508b34867aaa2cf5a12d5ec4ba38c9b02656079361bb48dfd587', 16),
                    gmp_init('0x34a9631a1d980d31619aa6c8552927475db6f5606891f5606e79e97f91470e89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71f570ca203da05dd6aa262114717128d657a0403e1f1b77f89962fd475c58ef', 16),
                    gmp_init('0xeb42415b95dc880dd25557345bc95b8df2445d00c3363e7df8649a72d35d420e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f14c03e0642d5ea53fb3f1fd18d7128c80c29767cf30a12d08232617ab34cc6', 16),
                    gmp_init('0x7b53d0a8caa4e894c653a70f43a62540b9de3cce8e81dd0225ec252f987e681f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa49ed10eaaab93233a5f485d4bd18c0628ab2629f0b8c3db4d05956d6c953fa9', 16),
                    gmp_init('0xcc72b894660f5398e03476c0a0dfddfb5ae87534968e181b67b2bd2246fb4c72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa74db87e49c79ed1d41436095eddd363e81cf141db2444f8342771011241d90d', 16),
                    gmp_init('0xf78691cdaf23eef327fdd08a588171c8a9ee509344a0a313f32518b83f7adad4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2b7b3629f7bd253b7d282b5c21da01446b4821dc65e76516048b06043ff8359', 16),
                    gmp_init('0x693038941695122d57a937a3f71e29c910d10835046f3835a2397fecfe86fec2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6901fa5744baa2cf9acdcd44eba35658456e58c68acd40b2a5ecca2231c1ae1f', 16),
                    gmp_init('0x35de5c882273c212461b5380c29c900dd79f3ba5e5c77a930f833065d22838b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d134e5c5da47f7ba495f216b4994d904a79057a3d0076be34f0901399f1f366', 16),
                    gmp_init('0x3b1ef4d3e0845042dbe2a4ae3a82b73cf02d61620a88b39e2b0d3e9c4990f2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d3cd82d1d438127a244b643f1bba35d046a6d0435494cac4b031081b27a4bdb', 16),
                    gmp_init('0x9bd4256180ee41f470cfbf9d0076236ed4e3807d370ad296c3d34c7ce69a8a2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x650ef9acb6d59d0cbac6158a65dbb070315b0a395d1f1f3a3c096d3fe7a1d916', 16),
                    gmp_init('0x85d11f21162b11870e9c0b9279b82c558bb4608a76c26ba85849ca67068387b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeaf98363d6064739afe9d672967b691fd9099f5c6e7d8f45440cd3c6b4ec1d2d', 16),
                    gmp_init('0xe518183a7fe78d22775228a0e6b199aaa9f52d5457e84b53fcfe75604c838452', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d770ace0ceb2183fea7c924a8fba197579df37a908992bed42c8e808bd98ee1', 16),
                    gmp_init('0x278f8805f46ef5de78963038b6552a8637f61ca40e3d57ecf9fb81791d38ffca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb95bd163aedb63466f40e052c06e5d8c273a9cb9e89771cbcb35bf7045ae767', 16),
                    gmp_init('0x664c14d811a8ddbc52004d9d3682275bb816f4718a59f1341853ea0afbbf0e11', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xda67a91d91049cdcb367be4be6ffca3cfeed657d808583de33fa978bc1ec6cb1', 16),
                    gmp_init('0x9bacaa35481642bc41f463f7ec9780e5dec7adc508f740a17e9ea8e27a68be1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dbacd365fa1ef587c0c0cfaaf00d8718bbd9f35ccea5a835ee3cc821fe741c9', 16),
                    gmp_init('0x16c3540e8a51892e7fdcfd59e838299d0cc384a09fc0535f60be10f8338eb623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d0180583cfceda3d38565a4ba5a5fc768410177cbe151a19efdd06515bc8a44', 16),
                    gmp_init('0x3a33c6c18cb4f5d367e9ba8007d63813969420468582da362f1f94c91adbc09e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13d1ffc481509beee68f17d8ff41c2590f4c85f15268605087eda8bab4e218da', 16),
                    gmp_init('0x6008391fa991961dcecb9337b1b758bda4ad01206d5bd127e0db419ddb191c19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f661507df5cf957082cb6a273b6e9d15923eb24ce645f76bc1ab52865daeb00', 16),
                    gmp_init('0xfd5c12136f52b33f6ef9537a8200add06ecdee27195d308c12276789833992c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc11968e43adf2256f0ff54a3ccaf2dce07f557f1ab8b5a3cf52213e4935b4eb8', 16),
                    gmp_init('0xbff5e6937786458f8379d81fe6766f8242f8b49412a7149b7044996d6f911add', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf594117d05fe47d2254f174da1835a383662c8b647702dcf182a90a0916aa6d9', 16),
                    gmp_init('0xcaa761a56e971b12cf65dbdab094bceb7a9277883e6b5b86c7d0696ebf2e50cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x219b4f9cef6c60007659c79c45b0533b3cc9d916ce29dbff133b40caa2e96db8', 16),
                    gmp_init('0x24d9c605d959efeaf5a44180c0372a6e394f8ac53e90576527df01a78d3b6bc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2d4d7f1f4d9cdec4e1c38be696711dda4e8de8cc4bdc4ccaae03957ac6f4c0', 16),
                    gmp_init('0x3ec89f857e93de4d17fb27fdf381e71e8f6a10a790242656e7e7bbad72339b58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6840bdcd64b45cdd43ebdd806a3417ac4020b0383a6facc56d1f9af4284327', 16),
                    gmp_init('0xf304d37f100f1a77495e8bff4b6114afb68daba7712b9eb7400d275a45e2ab72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d5dcec2e2a14bbd1eb7a1815958d0f1233822fd66a22b55d855053fdf428cb2', 16),
                    gmp_init('0x6e5c4083b142c8c50d078782486f0b88bd3e912f876044a51e5ed100895b189b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x161c6cbee1483deaf6f9b395c817eb019228cda5afac5857295ba10959dffc96', 16),
                    gmp_init('0x8a26ca92a6b9ff985bd259391cb183059b9634c92eaf8621c93bcf611b492de4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89d9a2fd300967439fdea9b2cc4126ced84376960693dae5fb0ea88fa8381273', 16),
                    gmp_init('0xdfca25b451d66f50377aaf2076cf62f58f61d680ad127324a03eb3eed309773d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x783d0ecc3f64d4a0fe6c7285f189aa8c5248bd31bf6eb1be4cf6155f810a683f', 16),
                    gmp_init('0x200a6d029073f4a3016b745727f2d51eb5de928872395ee9dfd66ce2e0f54c4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83191b8783a50ae1c52a1c13115afece23945e2e2a894fd21cc32b2cb5c71d91', 16),
                    gmp_init('0xe0ac7f1573801b709e06de13d17cae8a17a11f51750445ee70b9ec08e2148a61', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x53904faa0b334cdda6e000935ef22151ec08d0f7bb11069f57545ccc1a37b7c0', 16),
                    gmp_init('0x5bc087d0bc80106d88c9eccac20d3c1c13999981e14434699dcb096b022771c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a575af9d4146753cf991196316995d2a6ee7aaad0f85ad57cd0f1f38a47ca9', 16),
                    gmp_init('0x3038f1cb8ab20dc3cc55fc52e1bb8698bdb93c5d9f4d7ea667c5df2e77ebcdb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x673724fd24bc731896b769cc6e479b89742ef557615f8a6771ac42fe48a2050e', 16),
                    gmp_init('0xe4cf8257896a4a20203482c09a886b6dbe6bacfd43349cc2b90c9a49061d3d70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5f0e0437621d439ca71f5c1b76155d6d3a61a83d3c20c6ee309d755e315565b', 16),
                    gmp_init('0x6b9f4e62be5a052bf62189160df7101aa5bf61bf3ed7e40a678430afdd2ecc82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4366efa472df4c309e598a631f6166a8e03af53287261c66cbf6e48382de63bf', 16),
                    gmp_init('0x2e7dd909bee2d7ce2ee2537e130268eaf33b0c525aaa6d6b02c6a408e17924cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x995ca7f37081b8dc905a47336209ed9f6b50e905260d6afe34cf601fa9a78179', 16),
                    gmp_init('0xd9a059e95553573ab5e34d880492863abbcc85569ab64e52931fbb4cafec1f47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bd753627991ab1f97be5569667aa75fd1f02de907c9525ef10527ff06f96190', 16),
                    gmp_init('0x8336f2b3dbba6309d5ed6474943827d6ce0fcc5c1e0ea695a3d17204abda00f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f506f0b6c0b6e9a57a7f36d970ca4e347cbc92146227642cbe781d9f5362d33', 16),
                    gmp_init('0x469f955d2afa61719530c5424f1c336848cf925d43bb8eaf30487d0c87fa243f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f7e927bddaad5c1afa3419e8918dc920308ac35f4f0352433b1531556ad41ed', 16),
                    gmp_init('0xdfe7745156a88b10552980df53a8f6a62e7314714eaf775bdf4357867e642d57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfbc2107338b97dbf87e017141e412463166d65f59d8ffcb4c1843a1a3e5e6618', 16),
                    gmp_init('0x9f9b0859185c9414b4960c1a6f39b11d7f3c4f3f1dcbccf20ed54da02230c860', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2355cb867d291ccc94b452b1edd33d007d57904dd8630b01cfa6051267748690', 16),
                    gmp_init('0x21c2f18a5a71e1f8f55b85ec15aa7c5858286858cd1c939147c475314c89582b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5940bc7ef82a85a65c134294130b16a74203cd012e431fc13d8d85d849135d3', 16),
                    gmp_init('0x90537985eb4fab612f75b0c7aab6687af1286328c9902391d02d7451962255d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb66825b9b3da56c013592ab6c275d24ae9cbae93cbe028c6daea2160ade7f16', 16),
                    gmp_init('0xa1fba0b818e09b3fef3a76ba8b57a97fb7243c0df3e7cd2bd944426848c56217', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ee8ed8b5e5c9d25da5a9f71b3ff6a4dcf38a9684cfeb2bc633070164d2374d', 16),
                    gmp_init('0xf500e7f0546ff1108a26b843e5b6ff620755130ee6d4ddd980e5bcb4fc865998', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf602043cf0bd022cb6109b2fd9f951cb904613b11c3a3a7c2906b02299060d5b', 16),
                    gmp_init('0xf036b706c1f0cf19881a8f64ac4f7bea37aa56d2b7dd1a3f76f6f50b1af88f13', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8e7bcd0bd35983a7719cca7764ca906779b53a043a9b8bcaeff959f43ad86047', 16),
                    gmp_init('0x10b7770b2a3da4b3940310420ca9514579e88e2e47fd68b3ea10047e8460372a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33b35baa195e729dc350f319996950df3bc15b8d3d0389e777d2808bf13f0351', 16),
                    gmp_init('0xa58a0185640abf87f9464036248d52bcaa6560efbc889b702bc503cccb8d7418', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfc90c0c8c8f337ec714734efafe76be3a75edfb691b03c1ffe8879a041ead4b', 16),
                    gmp_init('0x7a9481b1e09cded24dba718dd5042d36fb468eff32e0ae3e7452c6f086fedaed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x374deeae22c93f955cb83ad2071f7e2256f6e109cad7bca6d71dc7b24414bb36', 16),
                    gmp_init('0x171165b64fcd4f9916032c06f806f7293828d66300e543217875bea98daf734a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x732df11cbe3faaa4dca5993e8c2d3f5b50753617ef9f73cb26e7bd0775bb3b3e', 16),
                    gmp_init('0x7f41903ede8f9977cb7e255840253916e69dad6d64c58436cc577e1ed7366693', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a55690dabb5e00dc2d0d8a496d16c4476ee767ca9d0d1d3694c856ee5b7ad0d', 16),
                    gmp_init('0xc3e28e1975a0657bfb21fbac97ef99f301cacb8acac31218d6c98790b2e8c407', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ce094b9603947b428da8840cc97ef6019a66924e9774c99c5f5b3c1888dc3b9', 16),
                    gmp_init('0x5390fbabf1a9b3ed57b4d80ca76aca216205b20c9ea06502c14f7b6e5c0de52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2380c09c7f3aeae57c46e07395aeb0dc944dbaf2b62a9f0c5e8a64ad6ae7d616', 16),
                    gmp_init('0x6f8e86193464956af1598aefd509b09a93af92148f8467560099be48161bbc1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a968eb76fc667de96d8a6a95b023fd0e25470b3a509aedd4c375e0b0aaafe5a', 16),
                    gmp_init('0xabf6fb07a6d3ba2954fc66d03d861d0ee7b5880a65e70cc0ce6bfd424ed975c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x180a4eced74ceaabe0f7db3bb038034e5e659c613c66a5348d962d14efa32402', 16),
                    gmp_init('0x498a4d5747bad7e2adbbfc2f24febe85a602c5937fdcd18b3203780dc4894b4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3c6fbed017161954f0aef802536b22107dd3db50074cd093751cbf9f34c6397', 16),
                    gmp_init('0x4a0dd2c55e5e2af19458394d92eab6468a0c7708905e0e00b1fc8d0568cb3f9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x405a645c62bfb92ccc92d18ecce32c04ec5e7a1647104fb1927a47b099b2df82', 16),
                    gmp_init('0xbc3cb414f44d96e0f5caca61e237e7122ffa9db2cedc462b5da2834a09307dbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cbde398129243b8e02f06a76aab3953fe925b62a5af644619b825930ac3137e', 16),
                    gmp_init('0x6ce554608f13615950092a134b94c370d193a7ae588ead60c008f15ceec02fe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa6dc4d3ce531af3e68590fcacbe7816c8293af0d77914a3c7119e23e50ce56e', 16),
                    gmp_init('0xebc7998fa241e5296e1f6edc5e65e663c11984daf8f710a8b9df3a347dedd739', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b9d333c82b16247b8bd9c730c14cebb03c48fcbbc3f0b8a47a2306ce0fbf84b', 16),
                    gmp_init('0xfd7fc7fbe24cc15255313d982679b7eb6766d543e2f5b5e6239ee4b4a36c3c48', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x385eed34c1cdff21e6d0818689b81bde71a7f4f18397e6690a841e1599c43862', 16),
                    gmp_init('0x283bebc3e8ea23f56701de19e9ebf4576b304eec2086dc8cc0458fe5542e5453', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6f622083daf54800456be134d5f67d147c82642befc1ce2dc83a27078f2827c', 16),
                    gmp_init('0x1bcd4e817de73a0faf2c5715b367cee7e657ca7448321bf6d15b20b520aaa102', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19a314f397c705e75e12ea6139cf845641db92831b38d63514bd306ab6e2d9b3', 16),
                    gmp_init('0x6cacd8f5dac728dd234965f887f528b3a5021d1d2404be56d552ee25cbaaaf33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb26e5188f953de2bd70cb3c3d1fc255cd91c3ce7d8c6f369d893209715adcb6', 16),
                    gmp_init('0xf3e128811012a34d58e846a719d0176916d2cb31b8b7ab5449dbca3b58ba68f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5840ed4b95a8daa355dc986364f6721920358804a100dcee7d8587eb12f00480', 16),
                    gmp_init('0x670cda6b220bf14107968deaa15dd8daba75225452ae38721592d5e2be22cf9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85ffdc0de8187fe9a806e2a9aae51cffd0adfc0315400b3752e737d963a52264', 16),
                    gmp_init('0x3fee30187ae2948d0be568f50554706c678182c92b179d0498c7d29a82da2082', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f5701a5346918fb1dc58c1f4ece532545dc1a3c269a3dc8e484dee823f54c42', 16),
                    gmp_init('0xce7b8fb8801d9e57bfb95b6b5729bfdd89ee784ab219e527860e1c492feb6a21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8991225911b9132d28f5c6bc763ceab7d18c37060e8bd1d7ed44db7560788c1e', 16),
                    gmp_init('0xda8b4d987cc9ac9b27b8763559b136fa36969c84fdef9e11635c42228e8f0ef1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27f61169235a8cfc01bb8701067ef9a0bcb30a265bc718327e9413329522461a', 16),
                    gmp_init('0xe512f1a9900a6ad2ea48c56127428ee8e4981b20da8639446aa4caf9c7301a2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96ee53e6732a2e095852d90d6ce2d5a37bf8f633a2f006516dbd9895e6ddd3ac', 16),
                    gmp_init('0x39b9caeae4b629f2d8c4c9711ebf1e0eef0d07976c66dc06fbf25b36729b6fde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x640779856ceef941261bf2f435f4a9812598cabb63b9f390cce2c9b2d14f36b9', 16),
                    gmp_init('0xda61928f44e56efaef90d75fd85a7b6c8cda0870499ceeb2894b1ee9e4b4b50a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78659081e54791398b21d9ac972caa2aa37b68663149df069c1ff5a4b6a88c9c', 16),
                    gmp_init('0x59a2307792a30d2b69e8fa7225e8196112cf919b03ab6a155e05934575a7d19b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa23750e31c85669f452f708bc09dfeae7fe5a9fbb4c815dbcef63df994d6b76f', 16),
                    gmp_init('0xf7339b14a6e7de6dac32fa3e4d411113e7707c11fdb848d141d92ccc8dcca8da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e52b50b6e1f0ebb809fea76edaf30166f3e5a0154dd1688d4fcdb13d0c13079', 16),
                    gmp_init('0x199edee73a354b0c9b69878534a03eac4a3829d13d63ce1cc103c48e70e1296f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbf1ac07a3f2378d5ed3c021f3caff41ab6ac82840ed782b12ee9c64fceee475', 16),
                    gmp_init('0xb4bfb8deead460e610883cc836b15fe324eb9d89438b41d684622a0087fe5067', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6f9d9b803ecf191637c73a4413dfa180fddf84a5947fbc9c606ed86c3fac3a7', 16),
                    gmp_init('0x7c80c68e603059ba69b8e2a30e45c4d47ea4dd2f5c281002d86890603a842160', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae86eeea252b411c1cdc36c284482939da1745e5a7e4da175c9d22744b7fd72d', 16),
                    gmp_init('0x19e993c9707302f962ab0ace589ff0e98d9211551472f7282334cb7a4eee38bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43ca41d162b3c64fb8374d859ca6f72fb2a7258e426763d524ed75e8d21ce204', 16),
                    gmp_init('0xdcea5a82e37023fa1c650f9218dba31f9ab6c7b33ea4a468e525044e934a8f6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2248c9f90bbfff55e61d2f8c56dc2c488718be75cf36f2ee7a1474267c169290', 16),
                    gmp_init('0xfa0594692d21eed7a506bb55b435ba18e163750235da2be2369d8a12883ea257', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c3e06ef22892bf5b666f723785a506d922d4ff3f872805964fce92cebe6efda', 16),
                    gmp_init('0xa7b709e5e762923d8af0b2d44ce26fd5d43bc8687b36fdf7df140f32a7aefc7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30abf89b9cf231374978419990f92214cdd6e9aef061613f5b3a432014978583', 16),
                    gmp_init('0x4b035115477f7498cdf7b4f2d0e1ab8063120ea23bb584ac446180351dc75777', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d6f8aa313e20f033bb72759d830775bea2c7820d06ee5e279127ab5c6c88be2', 16),
                    gmp_init('0xadc4b18d8d56d4e8c71aaf33ab08bc20edab6f8ea6bf92c2892e553f0d7ad75d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe11a6e16e05c44074ac11b48d94085d0a99f0877dd1c6f76fd0dac4bb50964e3', 16),
                    gmp_init('0x87d6065b87a2d430e1ad5e2596f0af2417adc6e138318c6f767fbf8b0682bfc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf57d35c304a60d5fc86b15c3c1388bc5c69c0382c173e484f289351b92d1b844', 16),
                    gmp_init('0x707f3d9ea98ef4d97904d3f5a9e4634c7006972030915c6a464babbd61266837', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a73fb216726a955ce8d419b9da10ba811f80d462c39fdf873971647b21f51d3', 16),
                    gmp_init('0x4f3ceefca1edf3c27fea7d29497211322db482468b60b77401824dd9a5224b17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e7607a3a6594a5f596e1fee3d871463bc7eb68a1d1b435234d007f3cc7cb09', 16),
                    gmp_init('0x284dc88de8fbb8b1e325fdd85b34299d65eae2bb66b576411be75a8a08079160', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa014eaad936de6f681fac61a05b6aa64673f853eedc99cc39a37e63ec288015', 16),
                    gmp_init('0x3de913c04636be9ac3f2a7e43f7b0f63ef4b9b0743cecad9df814e6646c1006f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29bea322568182e62400250b1b06901da8761fb2172ec3b90060ce1258cdee05', 16),
                    gmp_init('0x7c40d9a2690e9a0ea9009b3fb8705ec7f9fc31b6c8c698e39e4a0359a62651c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36aee3d35337512b4ea2ef2c77db796eba4c1cde6c7966144cf85578f11d45f9', 16),
                    gmp_init('0xcaadda35cd69609c79cb954707c98f54004b35d0ac4736069d3bab3f7cfebad4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf521786d238288e7d9c36faff33d4a59d460bd93bbdbdbcc11b6c75612f18ada', 16),
                    gmp_init('0xe0686fbf6038db57ecc26102bcd1d1d6aa5ef4a36c5bf0981dd68afd23953516', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3322d401243c4e2582a2147c104d6ecbf774d163db0f5e5313b7e0e742d0e6bd', 16),
                    gmp_init('0x56e70797e9664ef5bfb019bc4ddaf9b72805f63ea2873af624f3a2e96c28b2a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d26200250cebdae120ef31b04c80cd50d4cddc8eadbcf29fc696d32c0ade462', 16),
                    gmp_init('0xebed3bb4715bf437d31f6f2dc3ee36ba1d4afb4e72678b3ad8e0a8b90f26470c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78baaff3015c05ba5d2196b3c67f01bc0b13299c6e73c330abd9d3f2059ab499', 16),
                    gmp_init('0xad4bdcdbdb06c0afafca84e0ed82082e91632eee8d125199681d2318fee097fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1238c0766eaebea9ce4068a1f594d03b8ed4930d072d9c8b9164643e1516e633', 16),
                    gmp_init('0x8a9db02dbb271359d6c979e2d1c3dc170946252dcc74022805cdb728c77b7805', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f70f211a14ae3d4c20b84984929ab1a23709b36f83a20ca4493e16cfd06ace6', 16),
                    gmp_init('0x791e8a3094027b736f95d8f347b99f5075329566be5ac5ee048bed34b602d5de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17c072d56bdd1382a782481b8aa4d2232db794385870bcadc3063330a5cd5379', 16),
                    gmp_init('0xd901bdf4283da064e77c1247af1d034f8959ac76265bad0df7cae051b108cd25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1599db29d6aa415f80949f19103ccd48ced485b71e96247dc8ee3ee60ee1b40', 16),
                    gmp_init('0x793362232a81d4a0efaf894aaa2fc7cfa6363a74bc32999de1d6265ed78f93a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x271d5b0770cb9c15e7b2ea758a6a11b9cddcd7282b0ec21619b01552788e7a66', 16),
                    gmp_init('0x5d3aa45834e7f491e457d09949ac877fe2a065e3508a824e7a8d7258e03c9727', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb0b049704406956436562d33d451859f00e8f03c91208e2f81dfa2849c00c3e', 16),
                    gmp_init('0x4067e45853af9f63655d2fa17ab1b052fe67044e905dc90a799a982d11955a35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac2acb9b21999a70540708ab68338266aef650eed81c5b30da1e87d8a8a923b7', 16),
                    gmp_init('0x7684428511c1724d1c9afa0df13d9eb360b0d0bf12d27a4fa2dc124ad7cd20a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc5a41554195789e9b649dbe075a5fbfc663b551b53e5ee7e0e75b9c05dd32e6', 16),
                    gmp_init('0x4af3a8a63f9f67a76dcea5e201bf59442ff2ee9076e49bcf80e7db7a754a99b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88271c02621192f9ba6b25ef9cb2256eac32a5f91fd25ea95793c018ca2d8dae', 16),
                    gmp_init('0xd719dd53507176aa401c8b3ae5abf5acc300876dc717d099fb426c0f3e1e77d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x156e197039873b9dbe3354a571014e99a1064225b52960359ed45bac4544e7cb', 16),
                    gmp_init('0x6bc08d9f8f31907da939572a63834be89496d58d5eb439cd6d5392c0ad250a37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15b8390d652d7338e18ee09197e0e17674f8c4bafa2e7b858f5badc99c89240f', 16),
                    gmp_init('0x786cf20c8efe8d083abdd7ccc7a59f99b30367ab5c1a33352e2f9ef8e326f04a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4269bccecb6843826bca76a228e7161348e9626b9f19bf54dbfbc29cc59853ca', 16),
                    gmp_init('0xed2b1c1a82c016b723c84ca9c431a409fd3940a5f9e5a8a3da958ef535b8d367', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x85672c7d2de0b7da2bd1770d89665868741b3f9af7643397721d74d28134ab83', 16),
                    gmp_init('0x7c481b9b5b43b2eb6374049bfa62c2e5e77f17fcc5298f44c8e3094f790313a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x534ccf6b740f9ec036c1861215c8a61f3b89ea46df2e6d96998b90bc1f17fc25', 16),
                    gmp_init('0xd5715cb09c8b2ddb462ae3dd32d543550ae3d277bfdd28ddd71c7f6ecfe86e76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac3874f9fff1d8c1684876075840143dc4872f9c6825e8b6fdf0723a83ba9000', 16),
                    gmp_init('0xaa65e92308a1c069b862dde894117f93085e350d7f66e9fa4da3c7d96f10cf0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa91d1f5cee87b7f3081e142018f8aaed79020d47ecfbc8d2c7170923e8bee8b6', 16),
                    gmp_init('0x748a324ee2df8ee15a7189c8dddad3b2f800569f628cb225003d16aa410644c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x570d5ce7aa6870139ad14075e9a3e729ec0e3f8578a20d081a606f66ed06dbd4', 16),
                    gmp_init('0xa6ae5349420e02f605b66e6711d01bbbb683a36dc6460bed5a65becebd1ed495', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e891b5cd18fa02a58bead0c4848e3c3c3b81a5c2d042989ae5d630b17ba402e', 16),
                    gmp_init('0xe5d30e0e6a9ec6680b38d0e404f2a306af650c242157a7ee8e1b6279c4fad9e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75b5f87028268bb6f87c229ee0366ef5daee32a0d2933928434c1f92092d230e', 16),
                    gmp_init('0x527cce21e3a7852363d7874554ddfa8e0267a4b00511f8fb037cbdfbd51570b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc15c8c23d90c8e35c1a214dde2d4383c0735ae45bef61f10aa1a1c255984cf74', 16),
                    gmp_init('0x2ba954d828522235c8dc6f45e25fd7ba47bf772d50b015a2c4a48cd839ccb000', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44fc8efae1eddec2b0a5b80e27d259c8927f10a42be3884c47b6bf6ac34fcc0e', 16),
                    gmp_init('0xd2c7de94ba9b1367e49267e78833d3d7720e94a4bcd0489d9cff031e719c420a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1566861334285db67946ad8ba60a87feab35a98cb8b7f13058413f0e8942dea9', 16),
                    gmp_init('0x4f3597aa0e82f05104e894effb20fd22de4828688b23edcbf92546f0367be3df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdea2ba47bace7bc6866a16620e02f535fffb3fa2c3307175d5a481fc8bb69991', 16),
                    gmp_init('0xae28bfd6d90c28e4ac5cbfec84f7b9e7229dcdb3621ed9bc706742a9f16fe2df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1332f8bc1cc6999b472ca8f2306b319a0e0c179ed69b7bb3e61ed61e536bcfe8', 16),
                    gmp_init('0xc39dc7ee29602ed713f67c4535dc0681ba93b424d5a8c21451b0dd2cdae78402', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3968fc98a6e168d6efc1cf6cc4b8a83626d00abc29a461658c240d02514fc9cc', 16),
                    gmp_init('0x789cbbd0db4b59281237982d1aad32c91a146576ff88f334019394895fad37dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5dd69364e540816830e37159c2a495380bf1d6deeba1f27c023af3e14cc84bf', 16),
                    gmp_init('0x4b36ec5853c7cb6b6bd18733c58d4145353110dedd6b1a90c785217ce374750c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6896910698e06a2926b25df0957945d5a6a52e53603a3a250aec2191ae0c85f1', 16),
                    gmp_init('0xaefd3fb4b38c979256f305c1d845d72d1f40c19da0d503922c7482332dc1de21', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x948bf809b1988a46b06c9f1919413b10f9226c60f668832ffd959af60c82a0a', 16),
                    gmp_init('0x53a562856dcb6646dc6b74c5d1c3418c6d4dff08c97cd2bed4cb7f88d8c8e589', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26952c7f372e59360d5ce4c66291f0b6ef16c1331e825e51396eb0457e8b000a', 16),
                    gmp_init('0xf513ea4c5800a68862bc893d2d688422debe398f653d67318c3d401f05ef705a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9945b2fbe3822bbcb5c3396d2056f849641242ee65e2aa527282fe5fb8c8ac7f', 16),
                    gmp_init('0x3eefed824b0f282d607db44ffb28eff5282f7a23eedacdfa96d943a169aea3b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc62e58e6fc23c5bdbef2be8b131ff243f521196572d6b0e9f102588976134f96', 16),
                    gmp_init('0x4397827d45b1a1678c3d676753141fc5bcfb853563731c3e82277ed4d14cf97e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a314c6b205870e6235f82227107d5fe10a0440852bbe1f6ed1d79e3969e353a', 16),
                    gmp_init('0x15a4ac0bf35a27ac1a463e476baa1ba0138a54aadb2658bfc25926e1e5746067', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7d115c0eb4637db068772c77c95dbf3bd278de2581318e3baa499892fccf64', 16),
                    gmp_init('0x4aa8747b1925b0447aa424b8478af14548785d83959ae68d53f6d3b32878fee0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5959a500b703fc2d498b6faf3a6b6c911b4f4106dd7f3ff989e2f49ee9b84966', 16),
                    gmp_init('0x370e6741f5ca897f94312820dc82a709100dcc08cfe242640a6632187473a6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x107460520eec5c741683329a716622b0b81c03200807de973686f8800b188cbb', 16),
                    gmp_init('0xabe5d4c09a21598c35326b9b9cf54a11242e0d748dce3da601d7b6361f272124', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9eeb313937222fe8e1160c46305b5f9d7dd8623c7eed3feb3b0c9b922bc6b173', 16),
                    gmp_init('0xe121f1e0110ed58d952aabfdbbba1ae30ea71abed0e70c4b9539620d9723a71d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x520d9a9bf3daa9cb18d1e80ba27b3c2f7ba49b4dbc927a94457e9bc92ad2cf25', 16),
                    gmp_init('0xe526f49b10271eae48f0ae71b4ba97062bab0b6511bf70c7610b6c83a285181f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39cc4fe4c7f718f516ebb238806e97887de40f7509d995915772443f7ec805f3', 16),
                    gmp_init('0xecb1472c5a46f8f3151e6693cf42de7dbbb957373fc912e4d191a0c13a3c48d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc6c11e61689535a39586a81bf3381be1db07ef7a51bd2e8b5aebac548d5622', 16),
                    gmp_init('0x10e80e549aa1d9db9c19ba2db0367acb0e05ad08e6c7bf300d0d840101ac1683', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf94c807466ecdc696892ffde64dbd4d2c7132896d2d6f88793d62fb5ce22580e', 16),
                    gmp_init('0x5e9c7fdc6785225a9194bff6ab5a81f69887ec4532371d4e81e523f67127db82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5aa433e5d872d6e93431274a33ed09ad26d77d684573ef99123ab607c0a3d8a5', 16),
                    gmp_init('0xddcea1fc682ae79a19a394aec728a56116475cf52d9d6ef4fb5f7ef76d3c2ba7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cccb86c6ad5d162fcc02068db1999d25024a9594d03da7a6be40bad10c4f21f', 16),
                    gmp_init('0x57f8965862751c43699bef549c8758a54b92dcac8264be28f7f126ea729dfea0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6260ce7f461801c34f067ce0f02873a8f1b0e44dfc69752accecd819f38fd8e8', 16),
                    gmp_init('0xbc2da82b6fa5b571a7f09049776a1ef7ecd292238051c198c1a84e95b2b4ae17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85d8da4748ad1a73dec8409be84f1a1316e65c5196aad27e0766746f3d477c2d', 16),
                    gmp_init('0x58948b53665c6690586b536531efc7bc94b0a02033c4d5a62079816fc7d1dd70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87d127280482dfc33d058937f2333b3d38c46f480d9e3a5bbb0ba46541136602', 16),
                    gmp_init('0x71ce24870a5a03de926a276cff67745387a884746fd3bf7c4f683c41d8af6aac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e2a7166e7ec4b968c0892e9cc3ee3ee4d1e7e100fdc47f04850312d6c0b80d9', 16),
                    gmp_init('0xeadb0ba9ae2cbe592cedd29b716a9d485297b688d706349a49c61f2ad6b29f50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd5d7d3fe261e9746b0acc63dab54aa13f5c440d535610f25b205d7348c5a916', 16),
                    gmp_init('0xdd83ed0eeb55b07d2b43ca679c7b52fe5d73814bdcf6faab14b37b07adb8bda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28df781d4ec05680590f4658713c8a91fef2376387ddb6dd674a35c8b0e74459', 16),
                    gmp_init('0xf1499ea66a130f17cb0db17890f22794a3795ba501ae6f0a8de07cc0ef5e656f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde0dd410981c26122ba453c32d34438138765b98b5bd51dd45d9909635f7529c', 16),
                    gmp_init('0xd70a6e9d10a2145f9b2109822d7a3570178924c6889b774063c20c02e4cd88fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x769bc75842bff58edc8366ecd78f8950ee4ab2e81359d90f9921fa3d2c4561be', 16),
                    gmp_init('0x4bf817362fe783bac8dce4cef73f5d4741a177767b7873add5920bffb0d9685f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb26c208ada4cf44e69c5befc39c292a21511000fbf8515573c82f48d38f76d11', 16),
                    gmp_init('0x1f1cf8820949d33cf0c4e87d90cd6433050030659d82624bdc1c00b1e3b7356b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66e3fcefb7b24cf7af0f8de28e53c2df2bd1dfb2c0289b1031239da0948e129e', 16),
                    gmp_init('0x20bf8b4fb770c0f6598b5bf34cdf80cb5fd7d99ed1a53b5172bbc3602ee7bbea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfceb14b8fc7ff523a7e3bd29018c294eac993ff59f9c8933f94e3b06669e22db', 16),
                    gmp_init('0x64aa6b3a40d6b8d1fcd8a5a7525f0924ad550e793a4ebe4cbf572db25c2260a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb45f9622bbea103ca7ccf90023fa352e7eadac44f057ea346d9dc529c71143', 16),
                    gmp_init('0x52c42f585838bd0f573601f5901e2857d65969ea6a2b1bf4c8a8cda20b70b136', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e909a623ccd5cac55c175774b507faa53721a716549c5506f084179a38a2755', 16),
                    gmp_init('0xae56da878cce35aecef246dd507559dbb6cd5394d229800caf7a49f623cca3de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cf9208ab230b73d68470411bf3d4899e0f19675f829e32f00cd148d3c07d7c8', 16),
                    gmp_init('0xde03c64c15af865d51ece6ca65c167209d4684c8d5b8c59c0c4a91dada4cee08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc367455c22e04c03bfb0a145eb8e40e2bde60f7788c595a3a8258959983ba64d', 16),
                    gmp_init('0x3a520ad069cb6033080e0e6e84d964c742626aaca1778f14614cc8f96a2181fd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe5037de0afc1d8d43d8348414bbf4103043ec8f575bfdc432953cc8d2037fa2d', 16),
                    gmp_init('0x4571534baa94d3b5f9f98d09fb990bddbd5f5b03ec481f10e0e5dc841d755bda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5e00da467fd5494f40b6cf7d2d61b3ec3ab217c792a2ddb8c63c8c79e3d34ef', 16),
                    gmp_init('0x98fe5f5e5608555421726fe99bf43d25b60dcfe790900acb855c5ce2f7adb4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d896a3aff9633cee58543bacf5291aeb5e1559388ed95f6388a8a6e177e7775', 16),
                    gmp_init('0xdd91a9e43f49bf0b94e964ed7250927de899cd7ee299253befcf6d3aba056691', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa99415f5ef3a2b403519f4bb1c9bfbc46d4afd2e4477572ae6737160d7b91252', 16),
                    gmp_init('0x82d0e64cae81f84bb9e2f10f24f6f6b6899a16ad590f4ddd73a377ac4bedc264', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8327b8ee71163792d0eb0a573282f4cd5688b86ee903476c5fde04de3c2a3293', 16),
                    gmp_init('0x4997e266ee0a98e18bb3ea66279708496afdab4ee326a416bc854e18e0df9bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf8c2d2db818dff97f8e6431272384df2a74589058578415957f1e8c904ed3', 16),
                    gmp_init('0xaaad000ea781d44119dd5c1bd51bd81122991d79d32f6827b009963b796f77c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ae42aaa2a6db16897d6661d8f9a8ed6092d23234b8dfb1a2421b26c4562c042', 16),
                    gmp_init('0x99d93a7c05ff051eab5c1ddc60389d4a94e0db95107cd8dbf905ccdf8f79269c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb56f4e9f9e4fd1fc7d8edde098f935f84c750d705f0c132bd8c465b66a540f17', 16),
                    gmp_init('0x32e8e53429cca856d3dc11adf0582d1d21d42963cbcca85446a2fcae0200102d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92c23ae426a1c8eb59aeb68ff6c21b0f4e8ed722dd4ae766b34881285e85af61', 16),
                    gmp_init('0x414cf88f01551bb409f217d5c738d5792d23ad82b6286fed4e723669c36a2b09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3aba5151caf6483bd1e7e4c6f0fcdb3048c9b789fd6caa3e280aa48259e5d1b3', 16),
                    gmp_init('0x8c1e7223bff251d09064ec8047d72cc9e1846359d2de6ee6a85b678d42f30087', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfee5608c76afdf1088d0f4176af8df422dabedc7f918ea36ce2af1b2c7b5eba8', 16),
                    gmp_init('0x3807599134fe58afb11402f99287c14ee380ff42bf9054793f515d368d0b9b5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x809b7f1fe78c1bd45afb88f79bdd89432e6b15b7a45ae61b2b59888cf8cffd', 16),
                    gmp_init('0xf817e022bf41a8630288c836de52fdc912a340fad92b9f93d91d45a18db5f32f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42e544eb92e667e620a113b4c62a6afca28ff3ab28f53d5281e3ba4b3c63caf4', 16),
                    gmp_init('0x9ff854e0f91cc671f71f220c17415e7873a50e7b6befc5f1187aec09969c29c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32dde6ddd352d4a741df784947fc192aad2ba5a00ef0c63d6c61905ef7ed9ef9', 16),
                    gmp_init('0x41d17bdc342067bce236a4f94d58c1f459ec1b379c98f4b21abb8468031fb871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7aed83b665532ce383996ed2a4700efef0a109f1b940328380a2bd985e0f09a1', 16),
                    gmp_init('0xf5b8545f9a31ef7c7ddafd0ab1032d8ed88b2f300f3f4a54045d8cde85857d73', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe06372b0f4a207adf5ea905e8f1771b4e7e8dbd1c6a6c5b725866a0ae4fce725', 16),
                    gmp_init('0x7a908974bce18cfe12a27bb2ad5a488cd7484a7787104870b27034f94eee31dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeac134ca2046b8f9c8dbd304fad3f3c045ebfdb4ec6ed3cfe09aee43ed2ff3e', 16),
                    gmp_init('0x49630dbe79359b4245bf103bf2b11799ac19f696b7f21376e17206207d210988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc663c05ba6234e00a346899185b08fa7b24d773a95adc18bdbaa8188da328d6a', 16),
                    gmp_init('0x3331e98d5f721c38d39afdcf27571317dd8551ea512bf9cc23b0bb6abec9b8c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6788590731fea198392119d7adbb41ff5948a7804c85b17476706e4dfbfa4dc', 16),
                    gmp_init('0x28eaa8c89d5063c4940ef5c6d21c13aa6206f1c4ddc9a07cca7bcd6bbd3b5406', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3fc2682dfb86a459ceb30deea0fe4e977cedf2ee0b25114bc91c8483996de2f', 16),
                    gmp_init('0xc4f0df99a45f0a18f68b4754d4f781da4e59b498df7abf168c492241d4526f8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x292adc1c33af83790cfaff3394799597a9fb92830bc205dd6dc35a6562143fb0', 16),
                    gmp_init('0xa072661bcee0b647f3f1968a0cc4ecf6d83e662d735e9d4d8a9db63ce36ad01c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc17a4b43feb2c0237dca1fec9a3fabd19ce678fb985f83e85c6c48d103e697ea', 16),
                    gmp_init('0x39355c2d55ab5954cae178f719601fae96e1a1b57f9f02ab0ee3b87ddedc6c87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6930fccbd9a040974abf210f12b71d4bc7b1a6205599b01a7275fb40e48ff9b3', 16),
                    gmp_init('0x7f02ae94b94701eada30fcdb875f6d78090f9b13e4acc51acfddab5f8ee96a4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f618b7ca26790b468c9349d7fc11fde9a0edee60f93a31182d2c3023163da1b', 16),
                    gmp_init('0x78233f25f08beb6eb5fbda74d7ac5a426450c66a3249b6e7c7f3121103bdd76e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d952a9ca3321e69aeab0e61b2d3ce72ba25f0fcaaded6b084fb09b54d0cec10', 16),
                    gmp_init('0xb178184a66dd279e4542aec787b5cb4eba4aa2dfc84f54da8ee36b13bbd06932', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9798c0f15b7a1e6eb86d5b8dac83f1b8cfb26b92e8bbc5deee8590fe0ec8ae90', 16),
                    gmp_init('0xba40e2aa75a42ed3dd2ec9494f9c73bee2e4965bd03188e27a9ac2eae52844d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa43507f9ad5467d3fedc804a59c675b3d6ff1d39fb094a4589ec1e6c30b90e0b', 16),
                    gmp_init('0x7c8f2dc94c3fd71a142d07ccb40be8c0dc2a203653599b5a3f000b993a1fdc20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdfa6ee3fb5a2d6747cf1b90b89284757aa692505187dc8105a1978f11d66b7f', 16),
                    gmp_init('0x4d9cf31e224998db93c0c1c9a3da18c4d846f9dd13d78de9daa8f80678e5178b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72b04ecd4b7bfbbaefe11ca1a749e6711ddb64db7a2b493ab836b58659c0d7ad', 16),
                    gmp_init('0x6865b3ea0e64a358cedd452d6d934d0196265d681dc6f4fb2efe6ff46723cd97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd58ce38de229e43addea9a461cf220e69ce2b78411c7d30b80757849265bcf0', 16),
                    gmp_init('0xffe0a5e53763215bd5382ab9a485e4fb87261bfe28f1cd1df33e7a9ceb996292', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x213c7a715cd5d45358d0bbf9dc0ce02204b10bdde2a3f58540ad6908d0559754', 16),
                    gmp_init('0x4b6dad0b5ae462507013ad06245ba190bb4850f5f36a7eeddff2c27534b458f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c5e548132b49a7f66ae9fed8323480e0d1ab974622e7cf08993895e0ec87fac', 16),
                    gmp_init('0x4ffcf60f837f468f2bb959fa1d4c2ad3a3deaceb26fe324c555d7b3d5fc2d4ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8cef6e1753da0309546e096b953d172ae3fa3ed4c19a93e532d80119e05dccc', 16),
                    gmp_init('0x302b8a60a6cc9bbf6a4d4a74e4d2bd99df757fc36a6b68133014a0cfcc6d5750', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46276d0602c5668ddef6e94210bbc7ce1f901c19fed5c970e20fcba1d4531dbc', 16),
                    gmp_init('0xe0f7f24d44c75b84a292287570ded99498badfbffe1bc99af8730099686b8e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fb33e779b47385e02a0bde2ebb5f49701f7b6b5fdb97b485bdfee1373bb31a', 16),
                    gmp_init('0xf36ad952548efe281e0c161aabbb572bc65a7c76c47640d4e34cbe697d215c9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a571630935c1f02d6fd87442c082060cd5e792a1c6f92bd0c4eed01686df50d', 16),
                    gmp_init('0x85e13873b599f32f516f3ff2e570a0dde0aaf81ebb781a11d2158b28e859679b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b177cd109ec3e1161f16f7b4d0f7a36717c36c1855bb7c0a5b515ebdd9a4ab4', 16),
                    gmp_init('0x3ec966e9a5e2fa65fda8f67293626b486e37e255f1741f558aaddfe4635ab6f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xefea68eca7a6c24f4e65eb211c3191636850e0acdc78d8996114ef13522f001d', 16),
                    gmp_init('0xaab847869d583c14da150307a3719a17e413959fb3848771c128419f73bc4415', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e87035206a27a06c2a03829b9b9cd75c22a415847a49cf56f46fb29b01c23a4', 16),
                    gmp_init('0x5b96644efb9c9221e71755d1ae2c6e2da2171d874a4ccfda1217996b10d986f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf0bdf47a3f15b245c7136c23a3e38f2661fa8a94df29fbd8b41ef22c291dc6e', 16),
                    gmp_init('0x38c2e01c6e61f511a4c523b4e57918f6b4fc6cfd2bb5f2a99c73c144db7a8196', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe545c301930d680a4472244f60aceb7434a7fee4656c86fb1f3f35d2007b0c66', 16),
                    gmp_init('0xe06a340e8c62955e7e5c6fda3959bcbf97e5828e1b5a239dd87f57d271f2d470', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e6a863d4f205fcbbd8e12e5a45dc0beb3a03779ba7d92cde2aa2b67f88f7e09', 16),
                    gmp_init('0xc2571a078a388edfc444a8d1f6940234a68e503723b4cfe3bbd6286748dfca97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2a442157a54f580a133ee225f01b39882a0f0b069c3c7444a58190b83648bba', 16),
                    gmp_init('0xfe4f5fc2b69366619e9fbc978fbd7e31c0d855151c9c17bb246fab4a00fb6452', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a1ffea8fe5114b8a6383063b7811c325a40c1942451557679e75e2b304ab91', 16),
                    gmp_init('0xe10c0421b0fd7c546910437c4344a595287e5dea19009d9d35af463b6797e554', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b908e0f3d4538651ba9701918d97007f70b41fa2c45103fcf6dd22eebab27d0', 16),
                    gmp_init('0x9b6d625eec466b5e6f357c91817c4b9ab5bbca93587e51b571e8675e40d3d110', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4e7c272a7af4b34e8dbb9352a5419a87e2838c70adc62cddf0cc3a3b08fbd53c', 16),
                    gmp_init('0x17749c766c9d0b18e16fd09f6def681b530b9614bff7dd33e0b3941817dcaae6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x899017b02696888f268a269f4e385d9c9b11f25a1bef8790e2821e6e7c6e1b4d', 16),
                    gmp_init('0x43ae2cdab5b334f0bb45798336358bfae4e51bc0f932b212009aebdad814ab2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2484e3010c9455c75e44d2be9ae24a5233c0717e9aa750cee298464e521b3ff', 16),
                    gmp_init('0x9619d0a0aa23e30d07ec2b3c2b2d0eebad7006de923ac8bbcc1ae4b90269da7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67f644f76e905fd4a8f4728e63227f0e2831f5bf91b583a8af2635a17e5f712f', 16),
                    gmp_init('0xb833d68f66445d04f05adeb7b586cf785e0e1488f7d36198d68acb5e707160e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16c1c526cfb6ce57ef79b70d672c954e20d6a47030741751f96b79fa804ba7b9', 16),
                    gmp_init('0xdb157f7c34031439062627459c8a94deec755c01bdc9a9cc475be3a51c5bd741', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e53c8b49901ff800e0aadef4b1f190edcf43c6ccbd90dfe2b26096140692fd1', 16),
                    gmp_init('0xdd6e3e4f4d41a01e186cd709a7219da1a87a50da57fc9753934930e7328625e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3973cd753f931af87a89ce774527b6695821b5380ec0825e836487aa36683fa', 16),
                    gmp_init('0x38cf5a2cc30ca3a3643e12b632b5a26cd77884e18fe981dedf5fb2b77f4a577f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x327f876c93652555fa80a054968b4712930dc93012ee6b8dc10263ed3b89a762', 16),
                    gmp_init('0xb2d404eab3524026b09969255e1997b975535070febd7dfe9c9fd959b9203301', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba6a9bba72ecf1511c2c04f4b0205765713c133225043b57180b3999c0bf6f06', 16),
                    gmp_init('0x13771e38b34a11b032020bf2e558bd8e9e5d14f7ac697aafe32bef70781db551', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf3c5da6b99ac5cc3d5b9286c03016a6c52b9985ec75fa2799f119955637b39', 16),
                    gmp_init('0x2cfb52fd9f39b64134671adc18024a537acd30523c25c3cd247a3d7a2852a40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35c5bccc27cc4dd2d8aed95064de442f44d514d665ad43b9fd1ef9f071231a43', 16),
                    gmp_init('0xe3675723b9746ce734e5820b6fa589d4cf7a4cc063cf0ae7db72e451620c8f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce47d0f5e0d375f3a8212e06de2ce311fcc4f7f3e121bd6148ce357db549827b', 16),
                    gmp_init('0x15c698fb99630d49d589139fe5b9ad0f29e6592ff05769df43cc9a5fefaed097', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd479c245c5586bca122f12fc588356ac74190980d81cd76bf40bc56fdd40609', 16),
                    gmp_init('0x3069cfb52694afeff2cad7a43c9841fd9113aed7261ca4739de2f1366a64ca53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x931bf8bd4a8e42f34eb0e2207f9543c7f60682ea1698fe13b38fe7157d48be00', 16),
                    gmp_init('0xf1153bf0489c2083d1b388e61140ebee6a43ee6ab333ddf51586a9131f44f452', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c40002a3accd864bded8eb9af2c7d544f18b6cd53b8e8424db702f52b799a7f', 16),
                    gmp_init('0x95c2dc1530b635be690b836a0e1ddcbdc07abd4c820483f68b5cc82cd3c81e32', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfea74e3dbe778b1b10f238ad61686aa5c76e3db2be43057632427e2840fb27b6', 16),
                    gmp_init('0x6e0568db9b0b13297cf674deccb6af93126b596b973f7b77701d3db7f23cb96f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed9441c8304280ff180e03d850e8cd0ebb570ee5de3730488fd97c961f9756e4', 16),
                    gmp_init('0x3dbe9e9efe8bfa19afa176128b13911e09f23774fe4de98bff0e09f93f3abfae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x762e8bc33211fea8226cd97b271899f3f27b64997b004bb25dd81ae9be889756', 16),
                    gmp_init('0xc02894260af3e97c3c7cc4f14982e3471972db314884fa5e25e259e07ca6b774', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29d9698ee67a7c3fc9fed3f624b487515b10bdd84fab4d3015bad033d51cf119', 16),
                    gmp_init('0x7fd02c517dc82b45277a125404f1c96fb89c940e93a7c2963c88740575056339', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf077d47df6095348e19bdbb2308f4a91e52acfa1014e8ea26f75e970975d2ea', 16),
                    gmp_init('0xf8617a8800ef7f4424c8425c98a2527c8a1ec5b84fbdd277aa3c2d9e31936f95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38b82a75579ad36b9d47ef64f1a5a85c247f21027e56c6c2875580a5a6714560', 16),
                    gmp_init('0xf9d8a6976f261ef428bf5634616434597d94f23bef716284ada87334a774299e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f3e7d758bd3da032e17dea8334b142935db4d6ee54391b45b8491fbbc4c92d7', 16),
                    gmp_init('0xecd2841ea77d466b58862b21cbab1502452a2303d694e1186cbbbfcfb14906dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126b57d05013936d6f3fb7bd33580a31fd453e4a86060cff467c44537f422491', 16),
                    gmp_init('0xc1a7dc13061662c2e3c4a3eba2bf3fb0e148bac30bf39347afa31f199da3ef84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0cc795d7b5ccf9edc38c3d22ef95281174b0c88c5040ac35ae0d732b2a8c483', 16),
                    gmp_init('0xabc30122f8b3873ee2374fc97231df786b348f1bdf6936055096745592cc6ba9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a241179b9e81f5670cfaffac8a0b5bf38a0aefb97ad75760515623a3afaf403', 16),
                    gmp_init('0x8e1ca0c0a86740c2c4bf27493905b76c2c8177f4178df60d590b6e40e4d79a16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d1c50a51553c7cce0e22a9ac6a976ca13153a8a8f96d2f2170f1b6bc5dd3aee', 16),
                    gmp_init('0xafff148e06abdfdc977272002287d474851e310aa8ed53adfee354e4fdf597f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e10c5ae9ac968ee1f46bbed4139062026f2835f98ccfcd07622eb049b720b26', 16),
                    gmp_init('0xc735c6cffe4288915a8665b287215e28e2ff79a4dbe09e43346e98c7add92db5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e5f1d618b97f9f3f311a6d8a8a6418f659d3122f5a1afdc678ca9b7e4a6d0bb', 16),
                    gmp_init('0xd7b1502b06a7e6f7358f6bcd04e721da72555f2e506f653a168384791033eaf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73f87bae9734854a8ab684d0580ea8a03c4529b6c22d0299e0083a7d65543cb4', 16),
                    gmp_init('0x37c66cf03a87f86feebfbfc11a1402899d5c42f5357f2d7a3d2dd872c4856cdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8138a6b3c16427fffd3cb9ace01a1495af68e31bec39bd2dda9b5e44f005e3f', 16),
                    gmp_init('0xca758f3befb4ebd9f9d015e57aa5cb51f4ec41bd554be21342d7e0202f357eb7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x76e64113f677cf0e10a2570d599968d31544e179b760432952c02a4417bdde39', 16),
                    gmp_init('0xc90ddf8dee4e95cf577066d70681f0d35e2a33d2b56d2032b4b1752d1901ac01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x708a530e9e52c73bee87c9d88161c810005d57622c29ae691cf999a83a1187a5', 16),
                    gmp_init('0x9b884811e1f9a897fa9656dcbb6d38283ecda73c6d353e8a58a4f19b473db9c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd08e57ad859da9be25ff7263aa9b4ff64ebf20ce506919442f05091cc078ee8d', 16),
                    gmp_init('0x852e97984ab488d72d6172ee757e6df4123ef7cf9422ed9de997f4dc2da63e86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19cf034fc48b3be219bd648395e462cf9f374b6d86b2b59e2e1b16c6cde4f5be', 16),
                    gmp_init('0x28e32b06a15ab466c3b4be68ab181947ef91d1c93f0f1c0c0a91532b6f321af2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7da6c085e4d44d275f58be80ecd31d080cae3acf1e48254815914670429129ec', 16),
                    gmp_init('0xf498146bb9f41857511d0207491627bf0448c08654ca586aeb50aee2acd9ff0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5335cea5e99eeb23765b3444d9bc7be601da67d691bcc42fd43ae5430e9c22bc', 16),
                    gmp_init('0x3bf8d020769c5224a067f080f0ceb86ac8c30c236ca1f19b3c2c2672cbdacb60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90d090cff5c1be6e21be9001be69d94fb2f7f394231aaee94f83d49551654f22', 16),
                    gmp_init('0xcd569a1d2bacf61a953f021e06bf70336dd635653da3f8740f5de057601a43e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf6c44a078cb5f0d7c719c2f8397f576ee93bd034bea2219e3abc209d17cf3e8', 16),
                    gmp_init('0x784096fe85d4b30af9e73153cb246dfec362aea7ca0d435b8add0601751baea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda4798587cf1d1ecc7322c310821292ed9d6e06d068819d71b6ef651c76b19fa', 16),
                    gmp_init('0xebb1d7789bccaf01d17369077e16569ea67bd13e9553fc206aa26eeb326f5af7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa21c60d6f7d62539d42bafe95c58f3033c0396cfa0ceef96d2f91edd6569044', 16),
                    gmp_init('0xb2ae6886fc4e6aea6d1d26add41adf4eee5abac113928334c1924c41c2f37766', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3e47504a8ddee6ad817aaf582e9897cf0c087af39d8631ecd92fb65b9135dbd', 16),
                    gmp_init('0x930a5bf809cbc6c40b98c81952b83ffea5a202ff5ec95da96906af3e4748045d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5716dc355df202a2c3b4031cf14a2858a5cabd91e9d3c2be5bc1e6214ff4de54', 16),
                    gmp_init('0x985f6c400a5b83f391eaa661a99324c5ebf3feccd047e417d3ea4fd550100fa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e8c656fe870a9b0a4745338f80bdb4aff67ffe6e8ce4075cbf0b9e5cdee455f', 16),
                    gmp_init('0xbdddc632ca30740f2a3f760f4803a53b4aa2d16746f46627173de998171b9cba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30651cb592d282b5348f1925be3f04dda5033bc39e2fc7b1e61500d9769b57c', 16),
                    gmp_init('0x25208833bb7ac098ac4e2423e85682c3192a4d18739f78057ff3a505f33236e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3df841f891a95eb15beb035ab3e3c7260a335925893447a437796b9b6698b59e', 16),
                    gmp_init('0xb38fe6df98b090c1da02bae8f11cf3867bfc867b214949f8bcf8e6796b92baf5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc738c56b03b2abe1e8281baa743f8f9a8f7cc643df26cbee3ab150242bcbb891', 16),
                    gmp_init('0x893fb578951ad2537f718f2eacbfbbbb82314eef7880cfe917e735d9699a84c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5578845ecd7c037435b32a6992e7aa94647197ea49b8c9e4ddaab0784662ab1b', 16),
                    gmp_init('0xe61d07978b6de2c3cea6d0a51d2a4053f653a7746a5d64de316d18f3056f3511', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8c46127823f614610a240a35720df7aca4c9be408d60e2f34baaf338761d58d', 16),
                    gmp_init('0x8f9ed96c5170e37d14a458f697f3c5053f7504785e107c5b638ea0ba9d1051a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47f3383888a364cc4abfa3bc1d0ceccd22f12354fce3996094f869b8948b6c29', 16),
                    gmp_init('0x48ca9a8d0f032937190e48675b416c7118bb499588f994a81edee1120e537ef9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d56e9f710271f7a350c993fe9a3671f3f47db9f0134adc2db0b304050b0040', 16),
                    gmp_init('0xa12185aebd0a9aa21ffd150a8d79b285f6d7c4720e1782beb58e267a5b3fd0a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b00403318818d2b7c78125d8e480a2ecaeebf4a41fff36da14dea1a1166ff40', 16),
                    gmp_init('0x41cd1b3ae8aafac9968943a0590bf2f0076883f6e7f3ede9eb74130e9d71b847', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc13f232d42fce6341e20f977be65a37889a1c5ed30b6270f56563df13573b7f', 16),
                    gmp_init('0xc909ba80429e340c3c7410da84a90a767045547017404b1c42acd2284c1f2ba6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0c01f34ae41b8cfe466b4c9c6a5d5f614f570d6fcbef768a81a6c8f05ff4adb', 16),
                    gmp_init('0xb84f5bee4357f5c7c937a0b4075b8cecdbc43d170d15b85fc4eff73ac351065', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25c02de601df7f073af19565db2119a8226c21ea70ef2d14b02f590b87ae9ceb', 16),
                    gmp_init('0x8a9fead2c812383c0c884e0dcfad11d537c641df0a65872647090d134bc6e275', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a932fbc468ecbdb3d229ea400b63b93a2f32b1a022bdd6e365019d7932c1a1c', 16),
                    gmp_init('0xad3d80540f3457a801c9547d4dc81d0ac0417e15749a28b684aa92697d343540', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfedd9d1b2cf8e49ce8ab9f4ca7ae3e58aece82c0295949fe1f8098f6ec5a3c34', 16),
                    gmp_init('0xa52e24c31853b8e0b0be85312c8f4b00adaeb54699bf829762b54bf4e13d7714', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc3337343451cb83ca3521e9276b346b946bd033e9824fcbb0452106b80d6bf1f', 16),
                    gmp_init('0x2eefe9391b812cda13dff31af72c315598ba36420e266162f95e58423cb01f48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e0e3286bc6ea48c2dee2d7f5e8488b373021b91a11360769b4e54d1aab6a396', 16),
                    gmp_init('0xca448172fa3b37964f31fe1deb453fc66ab01041f3468f6a2eb31e48d980e27e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a62873d3ea83e253c3c7cd537ed6d17d7ca75dbee54677e27bf4c48daf027e9', 16),
                    gmp_init('0xf6d94479a5bf6afda76409cfeec57a43988af4309ca675fb3199d905844c68b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x344ab93080c32d284982e0200982b9af5645d8f76fecf570aaf35862341023ec', 16),
                    gmp_init('0x6e1c2b042b24462a73f8f2d1ea514c5ffc4e976afc3995d704f898291e1eeb87', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd895626548b65b81e264c7637c972877d1d72e5f3a925014372e9f6588f6c14b', 16),
                    gmp_init('0xfebfaa38f2bc7eae728ec60818c340eb03428d632bb067e179363ed75d7d991f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd136eef8971044e8a3a43622003a26703ecaf7a0ec40c3fba5b594b77078424', 16),
                    gmp_init('0x218da834f3c652cc67a1d191b5c5efa57cf2b1f78a2adfa8cd61eeefc671ddf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d8c782f716df12672d362da5060b41603428be4aba0970480ba87ff6127b756', 16),
                    gmp_init('0x99aedf0896fdb9111459a82d36d34daf4e3aa6da2d7cdcca6551f74abf172571', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd99e8e9dd9638d140e9cca5367519f861b7003a0d43f024a5f1d84ec8db1cb3c', 16),
                    gmp_init('0x36dc19ad1cc0a3a7a945bb321bceba6e6286fef8ffc8765cd88a29e36b8637a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebcabedd95bf7aca8d059aef1b4097f8f1f85dcba58823524dee1a73758cf17a', 16),
                    gmp_init('0x47d3ce0f8f22b9cb02c00a1b67c32e6b10fad212d0ace95c446cdc5f5caa0ccd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56c9da9467cacd5b48cc1f2b4aae67140df701ca8ecee258e4c4b2c551a3c43c', 16),
                    gmp_init('0x38d46acb42c79ec2f33c7964ddcb685241d40ff932edcaa1824d8b7d20d7c9ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8df4d2e4bd4ce2445331a369e17fc281185621a017c8afbbceee515ac855c5b', 16),
                    gmp_init('0x6c57fd70c47f9b264444db4f59ef32c59663b55f1e1e4d7d59d5e72c2e465650', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fdf1619a198317a1bd8a54e5b09191d203351e0440e636fd46f68d3c385172', 16),
                    gmp_init('0x408d02c06e5c12c3fe470c7d3c8573755b9b929e90e7232b79ac67f0fccb9794', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4068d3d718eca832912486023a981662fe32efef0f0e6150d08f5bda52e7e454', 16),
                    gmp_init('0x8cd853b7254a47aab9ec14597d9d38d1988d21ed13c37332779acde5d8ef191e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33eac9bba2c355ce56e101f9afa0b7a0cd4780c2511691eb400c1ff535d8247e', 16),
                    gmp_init('0x35973173e4e17c41d4461f2afd15ef2d84f8cf37b7ea407f37216ab0af3da9bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12550ecdb1d825e0b55bf32e60ca027ea475a2877ba933de0857adf846c5d939', 16),
                    gmp_init('0x7b8f8334f872d7a75448e43c17724a72838b741fecd8d43192a74fc559e757c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb71e546d922dc9029d32c2b3c01f8750335a5211ee094c87b9e249d02df771c8', 16),
                    gmp_init('0xe7ccefa8cec9f90078912a4ccce288f426bd522b55bba2862453a26f93f48c51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x944d671ac3b585d4c69bb7b53afad08f85093c5434f3742138d0aac656c8a56f', 16),
                    gmp_init('0xa71065977b501fff4c143936133ac61967d4c174dd06517eb9f4dc65da7be289', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfacf5d96ba1526b8612239666d87a19e850fea94baa7fea268f73092d3194444', 16),
                    gmp_init('0x7ceb907bb8ad44f6935b7756392ddac6be72b245b947d00b552bf48844bad676', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86a54e91cd099a0cfe6b03655ad3c305fd69e56dc812900baeeb8a18ae08f15a', 16),
                    gmp_init('0xcfee614837a784603a72a8d06d75686777129d125b35254d3524d1e7c1388308', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb8da94032a957518eb0f6433571e8761ceffc73693e84edd49150a564f676e03', 16),
                    gmp_init('0x2804dfa44805a1e4d7c99cc9762808b092cc584d95ff3b511488e4e74efdf6e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d36d105ed8cc5ce53f2cb698ab620f9469a3e5cb25bf6e6d413f414c5af726a', 16),
                    gmp_init('0xe4ba5c34e377669e72d8c66c95c50029dcc59936b4108a35c570491a13f9fc7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69068ff0982d10be54c761f14d152c05abe7b10385af1c5ea19849dc6e1346b', 16),
                    gmp_init('0xb863e3e090bfde26da85db2bd086442aa4f6893994c6026e7bb58a54d7226c13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ab6bde10cd3ac0cd06883fa66f0b0e3eb1309c0534b812286e2a30ca540db99', 16),
                    gmp_init('0xbaca62079be871d7fc3117a96a13e99c38d137b0e369c043e6873fe31bda78a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x898c3493cb2597615286dc5cb1e86ce1068cbd14348cff1a30e691fcdca1f6a1', 16),
                    gmp_init('0x75f75986ab56a5549d84542452ac6e93b2a7cf979f2bd79ca4adc20f164f647c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63c462435ef974b393b05b37d1c89d70b0d8958ebd541d7584e2bbc7235c795', 16),
                    gmp_init('0xe27f9bb913038404431f660d931c85b69e4acbacfa49a9bd3f32dc095b110258', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb213e2fed2918bf01a5299d7022a274e5e56c8b917a04328aa69e03c3d1e3998', 16),
                    gmp_init('0x229f8ec20f2d3c12c3d61ebf83a43bc3d534165bebded175ec2cbdc6325fb81e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x796634e3f1ad56f0fdba069d9d07bce2ba2fd4f373ddd3ba7777bf279f1048da', 16),
                    gmp_init('0x4d8ee2b6cfb20b8956de74735a7927f2532576d8cfd74862e8f9be24a106cf01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b3b3ad816c7f93e5d1d0ba691606e060e83e3e70ddf350700be1feca25be234', 16),
                    gmp_init('0x5eec023b85dabc9c7875e96dfd8cc04c41e7fd92cf211b84063b7e03920e8362', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc299c6b06e6c78ae852bd55cdea35f99d264cb5ae836b77dab209ac9c05201e1', 16),
                    gmp_init('0x5aa739923611805b38884f24fd774cd7bd74dcf583ac2ae9add3313a50f51ba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f7b88b6ddb04f96020251b0278965be2976b0f0e2c76707b96634a7e289f55e', 16),
                    gmp_init('0x32f9f784c70410f7be3146b4298fc71fc0e536e0eb10a2b1b3cd3b65fe1e4bde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd031ae98fb356071598ab6c18a70635c1acab879033d564cfd37a7f16c1cbaab', 16),
                    gmp_init('0x415196b4e954584e8e6e4c06adcb4dcf6dfb4a4fdbd65fdc4c39047f85116b26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd58a43e9cb7448e3e76ccadfd3fb73a4c493f509e56878e516549c8c1dfe1d2b', 16),
                    gmp_init('0xfc17866ba05883cf10a729132828276b54d9ba215cbd6fbffcf2795b8cd50922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e85ad86a95356439b979577bedd0e96e2eed7276ba269a626fbd58447996c0', 16),
                    gmp_init('0x7408b0aeb424493efb217e5ce00ed55a21b642ad9c569d544888bc64b8151d48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21d2713971118310cd6d969c3c27ea4eed4406aa99ce805e124151be249c795e', 16),
                    gmp_init('0x94c5f9b4b075acea17735b85522bb4c3d671944a4adfb761b0012ec399208ece', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe80fea14441fb33a7d8adab9475d7fab2019effb5156a792f1a11778e3c0df5d', 16),
                    gmp_init('0xeed1de7f638e00771e89768ca3ca94472d155e80af322ea9fcb4291b6ac9ec78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x440ca1f08ea41265981ac4ed1efe7a37122dcc3877d2f9162db0e78b0f83cd58', 16),
                    gmp_init('0xa6c8b0d2cd5ee122af8954dc9d4e2f02a21e4d4269c0a260b07bc069b88a3f4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d2ec6dbc4a1052608afef69633ce3b106d5b94740e350192c0359ecd7592d55', 16),
                    gmp_init('0xa92cdf89c6e45eb58f710fa268cd6950e2a7bcdad115174266e5d0eaf5183a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf694cbaf2b966c1cc5f7f829d3a907819bc70ebcc1b229d9e81bda2712998b10', 16),
                    gmp_init('0x40a63eba61bef03d633c5ffacc46d82aeb6c64c3183c2a47f6788b1700f05e51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac371dc3b11bf742fe2cae34215f404d7361f1e159880a51991f4b49fe8f9f5c', 16),
                    gmp_init('0xc51616c18709a477ff2101e73254e73522953458ee751e1d17a83ff3325a503c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62782899ceb96cc8e5dd3c25223cae4fd964c6ed570d9027a744b8f8e55bf84c', 16),
                    gmp_init('0xd670aca40911a28901c54972297267839a020de7ddd176ed6f51cfab5f15fa2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8942003a14f1840c9348c0bd0222a17a40893bc452af385df4a1c8d519e33446', 16),
                    gmp_init('0xa9fd039595a5077a4d8b2d6d0efde4e06bfd773679e74f9840d38a00e6387689', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b6e862a3556684850b6d4f439a2595047abf695c08b6414f95a13358dd553fd', 16),
                    gmp_init('0xea5e08910ed11cb40d10bc2df4eb9fa124ac3c5a183383d0d803dad33e9be5ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2770266b30a342a8a2cda44ff5505c9899eb419c013bd6d03d728c95b913cb26', 16),
                    gmp_init('0xf649bc5e79b0db1a5552d24d07f2b324e940c91bcc815bebbfe71733f348a7a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3adf06e24844c0932d9e10056aaecf628d49f4df64464ce23f4244acf0c58bd', 16),
                    gmp_init('0x57e99db4fc2a6077bdfb2febcff638baaee3869fa4b98c9ce52e4ab937c89387', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75e4d0d383cbed2178e5e6e01cf8ba9097bfdc455686cd1af0aaa021595e8247', 16),
                    gmp_init('0x1fce42a175410990741f970ec7b726d47ddab5b6ea9ad893ca23fd9d59982d22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f189e88f19a3d85b411f78cea33fedd69006521f98a529a399471d0f39715c2', 16),
                    gmp_init('0xc91a39f8f3c5d7cfdf708475ed10f9f7eb3333e2c36854f066a635844171dfea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ed1b6383361bbf03f020d605984da849cbbbc1c68f4abf47479f44da6333323', 16),
                    gmp_init('0xd84f2da48b5b4ee75d97c989688f929ea9b728a10b78f7294b13fc48b5d61ba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2cdc8bb0a1b6bb777e46b40888a6f7e77ee68944d90e39887562edcfa3eb3fc', 16),
                    gmp_init('0xc5538af9e5c561046dde95362cf926eec1f217b9310b492744287db3ded37564', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70fdd2f06a758181b846fd772348dd4368a3702e50dd00baf25057d4b33980bf', 16),
                    gmp_init('0x5edfcac0d0d58696957a410d11ee596b0a10358385d74a5612eea8cea0b75785', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa301697bdfcd704313ba48e51d567543f2a182031efd6915ddc07bbcc4e16070', 16),
                    gmp_init('0x7370f91cfb67e4f5081809fa25d40f9b1735dbf7c0a11a130c0d1a041e177ea1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27e1e59cff79f049f3e8d2419e0bff74b43965004c34b5d811420316f24ba5ae', 16),
                    gmp_init('0x310b26a6c804e209ee1b5e3cfc79df05df48a1a69afa63f784a5bfee883a45b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e8313a30815eb11156b133082200a4d83596a67ad72856267012700138011fc', 16),
                    gmp_init('0xc147818bdc24f204c1a12db201dac30426af915ae9c51f9a6acb69fa3f15ab7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc712e7a5f6864aee16588ec3892d7e4f5a39adde84fbfb4f9969175c9caed7ae', 16),
                    gmp_init('0x49644107516363b365ed4b82311dd9e5380d8e544b0ce63784d148aa46156294', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf952a9099784851f2bd1e038a4d9e1b43d36ec5b44916f7f53a749b8d00e6ba7', 16),
                    gmp_init('0xd8a93a5b08abcebf861376a2e27fa0f65557167b4c62a2b98dbaeee50175e4c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5ac7d1d04cda30c83a053aad09876cdbeb32b53d38b2021f9549f5c595b6f7e', 16),
                    gmp_init('0xdf0b8a0ab540f55b36cc3c9247d9ee1b99e39160f5818a4848dbb7308ab19c84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94016d5e31d3fee7504031a19d9e893a8f2e3943aefb1f62690065a283aa0e93', 16),
                    gmp_init('0x675032ee5c454d9640355d354eee6fd7f484373baa57b07a38eed26887addac2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfc0504a4b3235d065c0d426b8675fcb2c85d6f58275d791b43e1fe44a6db03', 16),
                    gmp_init('0x1955467a6c34f3453fb8ec7f94a6c99237427197345d4f0558ac8d1a464b8542', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef22d174d59fb2891bb978846a9f09c2023568a20262bb32b0f4862e0266b17b', 16),
                    gmp_init('0xbc5784c97ab24c7568f9ccc3ae34a1073ee7276f71c341b732a6e04379dac83e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9885f5fbe1948d0f55788a38df2057ee72ed5c812f5b845657f2c542eb4318b5', 16),
                    gmp_init('0x135fd6f69ef198f996d2c467768ceb8e7c82aded676904af2fe542541599175c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5f7efce4ceb892d39cacc780b2df927f28dcbbce2ecd9ae2313015a92d382a0', 16),
                    gmp_init('0x6843545b51c3f2353c0957c6e0cbddd371fb096d29acf8c5ba2f0abba5b4b532', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3360f05465c04635ad815b8d68ce767d25365e58abb5b33b93a4ae4ce81c1bc', 16),
                    gmp_init('0x7e48b5f90c5750014ff69c4251306753231728eb5c81150176dd2896566cbedd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cddc3d2b2e71076408754d8fbd4624389ed4208668cc5c47e692464412cffa5', 16),
                    gmp_init('0x1e476a0cb2f1f8a63fdb126bf942b08ac41c98426b36b528ade6d89cd521954e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x875346a56a385116334fbe1bc8bae4296255223f8273ce11509f734048993f7', 16),
                    gmp_init('0x64e6ca8a2ef8b0310e994e6e75fa287c9f4d4f1b126018e601c2c8172b9dcc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2accb359f25ce939f21f8b8b948835b0cc0819c5217a8e2ad35fe43934a9f22f', 16),
                    gmp_init('0xd518a4e9588ad2e519213a37edf0edf1154bd7bec5ba550b7b75dcb3b75c4927', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x90ad85b389d6b936463f9d0512678de208cc330b11307fffab7ac63e3fb04ed4', 16),
                    gmp_init('0xe507a3620a38261affdcbd9427222b839aefabe1582894d991d4d48cb6ef150', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e2cd40ef8c94077f44b1d1548425e3d7e125be646707bad2818b0eda7dc0151', 16),
                    gmp_init('0x905b75082adcfab382a61a8b321ef95d889bee40aeee082c9a3bc53920721ec7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x186e497334e4231ba1986bca426b6c76f13c4311bcf638166275db33b0b7b678', 16),
                    gmp_init('0xc0d460e49807bd84aa7fc825c0b7e67e11077225449535dca7a076f2f8d91fc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa146f52195bedace21c975bbd1ef52a79c636bf9db853cf90e103ae41345e597', 16),
                    gmp_init('0xa5a99b0ab053feb09ae95dd2dbb31b40ea67a5b221f094b07675676af45a770a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61c8d834f6dbf62e7e06b34c3b72412984971f2ef5a55d0cf06e5cbb3421fb8', 16),
                    gmp_init('0x6dfc6ad99003b4b7ba9392590e05eb5c8067134b3a6fcdd2995ef6684e3ccd80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd9941cee1c26864248f7035352787d1aba9e93ef5edd333d08c89b84bb9dc8f', 16),
                    gmp_init('0x7a41ec75bd40e6f46de97e05788859e67872b2fdeefe938d743eae53e59780d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6a6b63a208ee513b7363240733a68ad889f37a6ab27fb487124be18af6b35a4', 16),
                    gmp_init('0x3df7c8a8002d138b1cad3704f560186f19d5756e75ee1862caeb6fec81f422a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd24c75a1cf1993b9bcfbf9dab25a8114dbde421efeccc4e20cbb53fc4ce45444', 16),
                    gmp_init('0x58fe1d2de84dc1d1cfcb7d1810e5a78abf7593f499f1e524cb93246987dd4a57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87a2fc28c286c376220d1b0f150778ff7fa8a43c1560d018b96823e8a6954c11', 16),
                    gmp_init('0x33ad518b45aaecef97b1948da0d27532cc48933f2a78124b756e332e272a8b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8b08b864946ac6da101eb85ee7bdf5524282ca1a9956e4aeeb1afe987a43ddc', 16),
                    gmp_init('0x7f00fe8bc8a36a01f31591ffdf0e8edca325b4452b1076c387001c82dfa2a6b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1472e046e7881a684556efcbc384cfe3c0b341dd2e53c0dae47472ae2706ab6', 16),
                    gmp_init('0x82cd92aa47c58fc683f691978c8621f8aa589d55453cd27536e86a169d58de05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5f0954fb1b8a63e6e74781a2e3132fb2dcdb2807e71f1f8e3e9432c3b963645', 16),
                    gmp_init('0xd552d31021b0b6fb18a3cb440260d7e6a330502b0047be4edbf8874f008be2dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1caf92c804f8aef5de8b4d601e48b9ebc42368750fa15021ebfae54207a84fb6', 16),
                    gmp_init('0xbc24b85ac976e53a481a64f8ff101622ec1cc1696a2ce67616b1819027149109', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf3acf55bc6d97ce34ebeb4634fe10100ed3d6d6383c11a753a93123e9c8381f', 16),
                    gmp_init('0x6b3dd8ca51907a75a6099c1dedacd1ebb101957e67e389e61affd6962347de3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x705bfd69af09650d2589efe9b3d78397107e16a260ded52db768cfe14a955911', 16),
                    gmp_init('0xe14aa4130b73f990a7e63d81f54051fa297f3b522a42e72d8bb7c693ffd200e4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8f68b9d2f63b5f339239c1ad981f162ee88c5678723ea3351b7b444c9ec4c0da', 16),
                    gmp_init('0x662a9f2dba063986de1d90c2b6be215dbbea2cfe95510bfdf23cbf79501fff82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d49aefd784e8158fcafebe77fd9af59d89858ade7627eaee6847df84cf27076', 16),
                    gmp_init('0xcd32fc59a10dd135e723f210359ca6f06e0f2d1a7df4d8466b90b66203aa781e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38381dbe2e509f228ba93363f2451f08fd845cb351d954be18e2b8edd23809fa', 16),
                    gmp_init('0xe4a32d0a0fb917dcb09405a5520eb1cc3681fccb32d8f24dbd707518331fed52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7564539e85d56f8537d6619e1f5c5aa78d2a3de0889d1d4ee8dbcb5729b62026', 16),
                    gmp_init('0xc1d685413749b3c65231df524a722925684aacd954b79f334172c8fadace0cf3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49262724e4372ae6f6921b82aa4699a1f186aea5401226303ea4264897c2a310', 16),
                    gmp_init('0x1337e773bca7abf95a2cfa569714303b6d163612a75ff8ce0c41b6815e27ded0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a664a356aa5705e6808a6ed7c44aa2ba5a362919f5d0b81f8166c1903663da4', 16),
                    gmp_init('0x449a125954fde98b29f86ec196bf0cd5089916127e6c04c9c28313fb33fc22c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe306568c1a240c90d5e253b3e477e2f84dcc1a56ff06db8d1384b079cebd2d31', 16),
                    gmp_init('0xeac6fe378934260888f2b107f7d0db6ffbc8042be373826692b408392546e44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x210a917ad9df27796746ff301ad9ccc878f61a5f1ff4082b5364dacd57b4a278', 16),
                    gmp_init('0x670e1b5450b5e57b7a39be81f8d6737d3789e61aaff20bfc7f2713fd0c7b2231', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b9e100e2428cefc271b0e7623fbd63374ebf8d9aab41dd9c530c39e363136b0', 16),
                    gmp_init('0xfafb98152d16bb71df1533eb8f475b26a2ae28a33ad31f81953ec16f6cdbbc8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7aeaca93c06c554177e9a1946db38156c1e802685281c85dea98eb53dd90124e', 16),
                    gmp_init('0xdfb29b190c1390f04facaff046c1d95159bc1bf9b90a904b3f50781022021e31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb0aad49712ac9a92b76ca80f5dedef717ca07688107beee9608f0472f485d3f', 16),
                    gmp_init('0xea699c53c58354798ecd201f7297da34895a5afa31670bffe79392503ca2f975', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5568dac679f74a32ebb5fad219547ad166f440abc1c017b470f702d505ed815e', 16),
                    gmp_init('0x7a85f8742788ba64580d6fe01d073f2beb05f7eee2582151d9bbf64c00602df0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79090ac8e4eefcc0d4e8eb197afe0113e1e58b4db01123de4aeed33a36718dc9', 16),
                    gmp_init('0xeaab722b91905b8f13d816cbcd9aaa56dd36afb70ba9008b963322b11cfae7c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x601e9e884807943cbc9bae600c7436c32c9be7402ee29932abec1bdc2e44a0c8', 16),
                    gmp_init('0x5a7a22aa6fdc8ecc714b8cfa9ffabbb1424e0c5a6b46e65954793412ba00e557', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe77c81ade9f97b551c03dbbce549ba668dd71de7cd775ad2a269694c7f60c7d1', 16),
                    gmp_init('0x3acf1478eef81321c5fc3b323ea81543631470f71c2986d34ec581f282d72449', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe4f3fb0176af85d65ff99ff9198c36091f48e86503681e3e6686fd5053231e11', 16),
                    gmp_init('0x1e63633ad0ef4f1c1661a6d0ea02b7286cc7e74ec951d1c9822c38576feb73bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b30cbb7686773e01ec64110abdb362f88531a825ba172953bfee2233bcdaf2f', 16),
                    gmp_init('0x74c6350265bb629b6f9e2c5777c3c4a91fdf3c81e434857568033d463d26b5b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x900c3241bee44fe90832f51feb470deca2f56e03212a99465399f04e6bf05bd6', 16),
                    gmp_init('0x6c31f9e8e8b1f0f5f95c7204570b2439d69853583c4efb15de52ad3bf00d358b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbb434aa7ae1700dcd15b20b17464817ec11715050e0fa192ffe9c29a673059f', 16),
                    gmp_init('0x4a1a200ab4dabd17562d492338b5dfad41d45e4f0ad5f845b7da9642227c070c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a8d0362ab0590aad628cc3403c233cd82e0deef7b1385257a7c28cc9f105c50', 16),
                    gmp_init('0xc059eab113d4e536936a6b724143ff74a605f68a66d013c35c9b201838a4cde9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29dfe4805cd534b91a6289eaedf7edc6f158eba3f00d0dd5be6fb2f7a72e294d', 16),
                    gmp_init('0xbf66d826d00672e19b434e7588a05e4dd1f1961c3929ee6944137260ec469b52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd93f4d031232f60a48ef3a5776cba4e83772f8a59292292c647e18b9b2d64feb', 16),
                    gmp_init('0x7925555d45cb2733a237311c54dc8c4d93e0430beec90da37b0fbd5934698359', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf478056d9c102c1cd06d7b1e7557244c6d9cdac5874610e94d4786e106de12c0', 16),
                    gmp_init('0x7f09e610f33e3946e68095e01068694c26c17ef609ab92d769a76ce6ca5361fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f0769c6e36f28441b14e2bc662ac65b7e7062916057a016722204cd439fbc84', 16),
                    gmp_init('0xb434f3724d73bdddfa5df007990e2149cca79b6a4c4dd5d73fb902de1c201bec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ddcfa48d561bbfbd71a1e26d9a6dd6187c84c452c59c5d8928b2fd2d026dea2', 16),
                    gmp_init('0xc6fa401fa9923a7d41fea34d6402c020666fd68c51c0673406f4873d183de522', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe7e6780559e03099586895a15416e3991188318927f19c4d537eacc86a758ea', 16),
                    gmp_init('0x38aa6967a281dcb988c08e169849251f3b801707443120d1e4f22d95db7ab649', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x355b3226f5dd236d3e1410c009e372a150d44fd345b599953c7f0046c33773f7', 16),
                    gmp_init('0x8eca480704703ad49f10eeddd21fcb81e25df78cce251090053c3ff1887c182', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91baf5ca75383127d6df6f9150c3af851018044f70651afade7156268cfffefa', 16),
                    gmp_init('0x4e5cf119347bcebe5d969f127dd3d92f4bef310e6fd303dc7d36f34df7f6faf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92b1e0f17f260bae5619f43cb2f866b75291de5e4aeaa5d1dd3df40690785491', 16),
                    gmp_init('0x81ec44028d8d9e63e167c1d1034e5ad03985fb77e2288d7b9c98d36058be555b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44584121cb3f78a7cb2c5373e0f5ddd782575fb3285edaf32fc0917e8d33c546', 16),
                    gmp_init('0x308d9377f3f8753a77225eae391ada20852f0a3cfb2ca73660a6d187000b4fd4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8c00fa9b18ebf331eb961537a45a4266c7034f2f0d4e1d0716fb6eae20eae29e', 16),
                    gmp_init('0xefa47267fea521a1a9dc343a3736c974c2fadafa81e36c54e7d2a4c66702414b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24cfc0176da2b46fa8bb5bf9636be1effd7e297f29122fb3e84c9ab0c18ada5f', 16),
                    gmp_init('0xebff8fbb079c61a69868714d5deda927ed959ca1a4f814f268fa6139978a586b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36362aa7e907ddf874d07a084c2a8d2050a680e6ee54c9eac3f95603ebfd913d', 16),
                    gmp_init('0x48f278676cb8afd53416244370da2a82d830bb10d6b2faafc44f9aeac52e243d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a7d58d4b9bc82ea2ded72a1292ec616ddd67fc7f057edf103189594679da2', 16),
                    gmp_init('0xb98ac5b76702cb75e6b1d8147ec71b3b71c3b494963fa28a4877f484779ffe26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4487976df32a1e02f295ad962dd9200dfcb1e3bab7bc6c967cababf9ad132896', 16),
                    gmp_init('0x27bd5860d115afe1efc9a90774561a3306b40d5a6276aa7a48c01b12af685248', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f3ccf31f8b74b9b624a5d1b7cb1096e202fe5e7233777aa859864d3775732c0', 16),
                    gmp_init('0x67f1cd3e2d39e53189ef46d997ce53d8a90e687754858825e73bde5e65b9415b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a4d3ac28bcb83788b6a9caa833503247400f82ba06273e6e08156f6bfa2670c', 16),
                    gmp_init('0x70abb91c01845a4f17e7711ddef02b9d4930594cbf29beed808b9ffdd6c1764d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee7d69c4cbd001c7fc76c5e2c066ce4996f8808a1e07b2a9ccf34eadc87c4b65', 16),
                    gmp_init('0xecc8626ec1a413821a192abf030f2ee2c33e8999bae942e523e8f44ed136a95a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f7b2d190ae91802c3ae6fd89ff8fe18903108c639345c530d96afe24cb24aa7', 16),
                    gmp_init('0x7703600c4fdf2b330a3f80a3ce67c47ce8deb7093c81d0c6d7807434a693d7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50d775b5f72d186b266a14e5254cb5aa49fd863381c36b09842632d7ff004130', 16),
                    gmp_init('0x3401ee3b0f4ea557c51724346010063f2975d945eef6a4c3456b8c64df6e406d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51397451339d90d02aec24e6d94886d87bc464a15fe4090a4191bc5f2f7fb8bd', 16),
                    gmp_init('0xfcd7143e47643bf34b88fefdae815c47fafc32d3e3f98d5a8094ac2d83908c0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87991026f1b2119621ea3469b169b0ebc4feb28b45095da7f2a1f83934889f3f', 16),
                    gmp_init('0xddeab94ca5a91d962132f2cb717f279de932f61bf286037b49e2df9bc3bb792b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf8316d62bfbdfb8aa429112bf014887eac864d36bbbf3ede2b74915ee36ca73', 16),
                    gmp_init('0x9feb58deb5d9d73e384450890dcca681c961598d88d710f5b4921942ec25534', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e2114ed297ba44fc3926603bc03a87caf3e9f2c8bd84e64afcd9846bd9c8f0a', 16),
                    gmp_init('0x5591a0cc26f06e27da6d50f80c5d91d090bec75d0f9595ebd79148dd16a2c9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8610de9a4c4bb49de539d28668cfa6165a2efbc75f3476613c8937d6b752f97d', 16),
                    gmp_init('0xd31997a02b630bbc937cd99b2533f99e57ab4d9f545543e08057dcd41f1b1af2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe7a26ce69dd4829f3e10cec0a9e98ed3143d084f308b92c0997fddfc60cb3e41', 16),
                    gmp_init('0x2a758e300fa7984b471b006a1aafbb18d0a6b2c0420e83e20e8a9421cf2cfd51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5cafaba036bf8d00d38bfb6772089f5203c35e4d6e32fa9d97e5b917b4ae861', 16),
                    gmp_init('0x19e83b8a022a6d817bff9904640839159b3b2a9c552f05f3cc9c239c0d82239c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc3427e7d9b59150fc7b6edb91ecbfc1d9bbbc5b4730714a70f9fd2bfaee42db', 16),
                    gmp_init('0xea249841a521c6a1885e3fd3fb21520010e5cbad8e72422dc6229c0115d87bdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9389024ceb63f1f12df5156d7e805428f9e509c494c982084fd4cd7bd2a9651', 16),
                    gmp_init('0x8648688723726595f9287abaf671aaf18d7110cec6770bfefefde2b75e786824', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x948f05bacd98445dec83c585fbcb5cf4b1d75c158e9c410eff4366c67ed4a086', 16),
                    gmp_init('0x864ca89ffb5a2a3382f450a6601139411c2328a71c3fa2d1a2a1800f9e2bca4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56bb148f0198197e20177708335efccaff5f01600ae80030cb0a71652e96e4f1', 16),
                    gmp_init('0xa09584a561300a33beb03ed8be30ea9f7313d1d2004af0eb5889f019eeb0582e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2584196292919ac90656fc45451d6d43ae19f4d28ea64c15c0cbea6cb7542c21', 16),
                    gmp_init('0xfcb35b1f1cdb244801e5daa4cc7513d5f3e3a186e4c2ad7b3bebe319672bfabf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264559d87829256bed116900d82d0c379f0e4d1253c68e6fcf2d41ae7cddab8b', 16),
                    gmp_init('0x79e5bd1926d3512cef7bc637034072d77a8631af39caf1e6c9f64b45001de473', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e12cdc41373c52522a9754cc1e8421f6489f0de9aeed7ca43c461f40c1ecbf8', 16),
                    gmp_init('0x71284f88888dc837143f94dabe4d1259c969f61d8fe1d9f59d45b8cdb0bed615', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6a0c8fd373b52bb6ea351579c26e1c59a954fa17393b04ae2da28fb898a26c1', 16),
                    gmp_init('0x5ef193bfda0374949a901e3febda7facfc94a5e858ab5a06f5550eda8a78217c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b8ec2ff2a3742a6772b91ca7a05a6cf1cfeec478e667ff417e6651c14557d86', 16),
                    gmp_init('0xfde6c3ff04c157ab14a4072de527ac5f28d5f2ef0fc3f692bdd9b191b5167eb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb398e8153d670bbbbd3d489e1fd8a0a6b6b25fd720c036d8a4c57f5981f23d1f', 16),
                    gmp_init('0x69f59c22572df47f07f7feb2fb00ba52ea791d8ad26156cd1583ebff832ff3fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcd5c10733963a42532436dc697ac07e5f8a6d5e9265691d52b82d3b4780763c', 16),
                    gmp_init('0x18ddabe2e5522c463b720db35f72e38cb119b22e716463a4b54e742038e851cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x634a0dc1bb425dffa6cd0b2054631a7348b84809824f28ad2b1c47a633e9fc8d', 16),
                    gmp_init('0xd75be21fe75a4b6cafe05a657de4a9cf519ad5a18ed5c6169587f30b273f87b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x900f2cee5843cbe52238a5daf8266e53f68e48f402272e66bce3be305d8ef686', 16),
                    gmp_init('0x732ac155ec60425ad61c551b1349d110596cdff43c9156d5073a4967e121a8cf', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb6459e0ee3662ec8d23540c223bcbdc571cbcb967d79424f3cf29eb3de6b80ef', 16),
                    gmp_init('0x67c876d06f3e06de1dadf16e5661db3c4b3ae6d48e35b2ff30bf0b61a71ba45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5d8e8f0d9823c88e4d36f7301f41593b6890576be79c211253ef375033eb51f', 16),
                    gmp_init('0x4dc1e9b7861e3e04abb16a57d8feeef0e509dc46d9f0f54979d5bd965a62a2d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f90ea773ac3a6e2dde60d30296681673d12ba6bf2448a8b439cf279319888e9', 16),
                    gmp_init('0x89be367c15daa10e958153d271eb96a8213751fee59522e656fdfc97ef113b79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9ca27f77dbc8c3dc56b0f7321bae0ddab66be4fa8a3011737a676480f155e64', 16),
                    gmp_init('0xf4bb335678fb14d4d197d2246c02d004875d41821bcaf0ae1f3f333c561b3297', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a4e54dedffe0ad6e702bad334b52bade03447991e6f2c6085efb6f3562222c', 16),
                    gmp_init('0xc9d67d4e5816e813b2cac2f81d609a52d4f9c577adc904c08cb1668ca8200145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd02e1b3cd6c105c7ee74654816cee74ef7793d9b1198875393eab3ddc1bf6c42', 16),
                    gmp_init('0x9a0b74f3ca8e225812732270d0d24526bca5879b931b6aac1336328f87bc54cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61991ebf233caadd1d407c05d8455dbd12ed3a63fac92525437e4dc0f43b46bb', 16),
                    gmp_init('0x1c5e308f3fde492952f387166fbadf11ca8729ca52ecd8ef48f5901cc20a848', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68fb71800686d7f25eba105611cfe7591f478e847f51cee06d4bc629d6ee247c', 16),
                    gmp_init('0xcd12d23462dd963673735427501b0c079a8d580b04c73c9dae1f822d1a01865d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea27aea4b787d38749039cdb0d1626118b9a944f45727d8f7e5be3ddd21add3b', 16),
                    gmp_init('0xc70ff1e6e42a17de5723ceb2325c2f6278b212d68e4e1be71b5e291db68ce7dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7137f7b23df260eb987550ab193451161b2b52c2231425df9345abdbe2da1f54', 16),
                    gmp_init('0x5fe78ad804358074e5cdacb17f2600a7ebf081d546cfdbb84af8d436cdc3edbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x594651356b7ffd54ba9010f8b6e2b6da9b4ce9741c4c226e6e8af8bb611ff757', 16),
                    gmp_init('0x3611360ce5df2750042038d015c406f9961bbc7b7fbffe3b28a66eca894d031a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8456a852bca1757fea17398139d143483de76414c8f38f1ca1ef47f18f6c15c2', 16),
                    gmp_init('0xe1b9da46d4842cdefd349ec371079e7f4cc90f09856fb671ff1efc328b174134', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16b26e3915f73290e843af7970091ec0ccc53f2470e7ebc0676258a3636160b5', 16),
                    gmp_init('0x60f565a6302ef8bb6364352463654d4e1363aac70ba3ef814625fbf58a1dc0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f15157c98351ce65c02eccf2cfaae4dd36aeea2b0d2e5183d61de938e1b793e', 16),
                    gmp_init('0xc094e366079db939fc9da9db9cd4a0cec0daff4b354a47aab4fcc1fdc3ba9889', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24b5295c4559f931bea143c842cea85c91ed749f647791f3964d28937b32db8', 16),
                    gmp_init('0x609fef8f5bff309c7b6e2821cc5e5be862ab6811205b81a959454faaaa64f760', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd68a80c8280bb840793234aa118f06231d6f1fc67e73c5a5deda0f5b496943e8', 16),
                    gmp_init('0xdb8ba9fff4b586d00c4b1f9177b0e28b5b0e7b8f7845295a294c84266b133120', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf16a409c677a40be402f8efb3752373caced053c6f702b828bda222ca412b6fd', 16),
                    gmp_init('0x2a41311714532799d7a6a75a74e30e4e16540659249ebca4268dae77eca052da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7815f78f22bd728c4c40b83da61f16f44f4efe34cab7e28235b42aa18ca1c4f9', 16),
                    gmp_init('0xc1c601e8cd39af6a7dd93cf31458c35d5cb42de61577d1e19ab1ea36b778bc15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4154b506ab766f42fbe37f699976f84db89f4f2f6bed98325c1a0b6e326dd4e4', 16),
                    gmp_init('0x23ad075043c5988894c6e44d61025ff6414ea9d9d1e22dd46c859295075ded1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc39273cda0ec40176e377c64016a6c6d512df681ef8f4d8e6d26e1c3ee8c8530', 16),
                    gmp_init('0x8c41be4257433c8e9d01d39441c3199850edfcbda2eed715c4030f0f798446c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a46b7e9fe99a4ea492fbc903281b9246831fe599360af53bde4ce8b43ed5996', 16),
                    gmp_init('0x683ce81ea3f1dc570e3ee084a063ebf5508794a9ef52745c2ee4ed11e8c85cae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda317447f58411b027522431c1d03b25166c6e58c0dbf6a531f240bb237a26c1', 16),
                    gmp_init('0x753b97b87f5d8c69d2384167c259d8b7d36836c5d7a81525f51836ececf74d6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb73c652769cc95c1080a8d4d0b5956ea93e86e49fc727ddf4c51a7a63f7f0246', 16),
                    gmp_init('0x9a67db107174ca9d4b535893c5b6c1ea1a0d72e4c6e554e5597e5164ea2a407b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a4be6cb02af0e6c1064ac508bff231a239392da66f55603d2b628a93739dc49', 16),
                    gmp_init('0xf15d8faa2a8907597dc166e360fa8058ab7e2b4cb14a4a4d3e6a2b9df2edd5cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3659ba7060d8200c9512facb5c7301114cdc2b9baa5bde148ad9bf9dd8f8fb8c', 16),
                    gmp_init('0x4ee7a9e806e01a17139725f8ec74987f1e142ed4e44bb13575e46b8c7cc8a3d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f7c69f13ae7f1344e982603ec98a3c8bc90f8640a86f6798be8a0c46987fac', 16),
                    gmp_init('0x9d4ecc3f36fda22de5b1036e329ab6f9cb7f5de219f6bc263f91e73819174c68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7733f67fd31772c20d111f5657fdd2b88aa1eec6c0f36aa1f4d359cee2e607b', 16),
                    gmp_init('0xfd9fe8fbac178285eae63a8c5bb156f489e3bde05be017d26a2f311dcc614763', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x557e9401761fd381cb7062edd8fa2bcb9c65fb0e203196261d33a1bd76daba4d', 16),
                    gmp_init('0x7a7e8f3a601fa7e046d35cfa15ccbc86c5e9b8f5fa43590a51374a1bb7a52316', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3e4750a00310c4838920654b6afa03279589d5274e481396e22d9cd3c05fbdd', 16),
                    gmp_init('0xfa79701abad259005235049961a1204b46587bfc5cfaffbcba2231d1535b883', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3adada82199885a93b29d40ea7b101419cc7a32c669636b8038f52ff29f5341a', 16),
                    gmp_init('0xbfea1e228999369f552e35bf36ab1017e9d6d2e5b45e8fbcb51580936586c6cc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x324aed7df65c804252dc0270907a30b09612aeb973449cea4095980fc28d3d5d', 16),
                    gmp_init('0x648a365774b61f2ff130c0c35aec1f4f19213b0c7e332843967224af96ab7c84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32c9331ea26f490228d32681880d7203f72b3e4a8de0db1fa8f38381b2919749', 16),
                    gmp_init('0xd7cd272b34209cb5695a2f02b6f3dbb8268a4abdae39ab09631e97b0f290b5e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20840bd5996772ad5b8f60b931df7c49163f74fb9da56ccef5c917582fd53ed3', 16),
                    gmp_init('0xf2993497cec18243487bd476a6bafac25487c47394e7089987143fe51a7a7132', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb292f3b3b9837854a02f6a70fec6b1c69c161b6e1846b8e1e1c22527b9795e4', 16),
                    gmp_init('0x8c43c25a96eebe801696634af145835b57131d7509111c6f5b7e9d2fae53a0fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6b6bff60eb339bbbd13d029e588ebfd1ab5d88a5c0a121edbd2cbb588a35b35', 16),
                    gmp_init('0x1a5ff2bd3300d2f3266f43e3835961ddfe3b6c9d3be999c7c57293db9c1007bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25aac6bd9a6b2640ed2374cb31ff8f63ce566f50fa1fc6ccc48b8e292032f9a2', 16),
                    gmp_init('0xf5a6c63ba644546c16f32f54f4f190f6559883bbc419f3d9e76230a12b51d4f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe05317745be499b288b0b8086e0ce3bb47a8a836d850e2090d4ef8d2c0360dd3', 16),
                    gmp_init('0xdc1c3b71a5d92f39cd809582b5b6a01461b987de98103dc2b2aecd913c24f87b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa65a3a01df3b5ef2e620d4310049fbe14d71457f19d1ed35aea39d5789303fdd', 16),
                    gmp_init('0x798ea0940cff5c6fb8f43d8d90ed2c7686861d024faed3cadad44a8d02e68703', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8153b3a77886c59e018e5d2a83a5e57fadcb3c92ea678797c146662d098dfea', 16),
                    gmp_init('0x2a47396461d060fc53d8db9c57853e03b1b5e0f742daf4158a49a9df6e6d892f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6281bb15d9d567c29a27887ff6e9d528c0aef4e6e14e4a9861630d52d24c9489', 16),
                    gmp_init('0x2fd3c5a0908da865922738f456e9bbf545fd964dd321b3ad9187f26b9df42bc6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f05c3b30fecaddadeb4695c638eda3b2a0d62da1b16bb020a7e77a48bcecfa5', 16),
                    gmp_init('0x53a499ea603d426fadd63236159534b9447ee431f01b48cd2ecd024a95d37b53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf82fefbc9f06c6bfb12f11b6c601c8d5df9535f081cf1ec590131cba94445a7a', 16),
                    gmp_init('0x94bb37bdc6fb6b675503942c1940b4a4b51c83b64640d1e5963ace18642a7a98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9309ab99f67a91be26405e1aa3b980ed0298635522abcce461e7659084b96aa', 16),
                    gmp_init('0x6ef99b2a9b4ec557d7e10f066274cb5fd3b6c9fbafcfe978f26c4f37c2b28a86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa285abaa97834203c830f3d322ef502e2637b84d1d56ea66f6fdd42b16b7d2d5', 16),
                    gmp_init('0xe56e9692cd1b7ac692b952dfe10b2e2ad8657321b6b753e9c405d52f9001f99c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d587ca138562d35ba9c3446deaa3411d65b6ffde7c4a6facf7b8d059f8fcf0e', 16),
                    gmp_init('0xa7295c0388304c612723400b6cfd6ad0c463900ad323780a501c1a09d8bc9459', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4df9c14919cde61f6d51dfdbe5fee5dceec4143ba8d1ca888e8bd373fd054c96', 16),
                    gmp_init('0x35ec51092d8728050974c23a1d85d4b5d506cdc288490192ebac06cad10d5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed32cad8d2cc998cd25317d4e4b87088e9de4554e57a8d70c0c6b0fc1da49e04', 16),
                    gmp_init('0x129fef5f1d030204a541ca375859d20b52da9facb49fab7db63120d17c1db9e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa549a32db27e2caf20e0bd1c09e3b64b21f9bbd6989ba27ef4f225da5def001d', 16),
                    gmp_init('0x799b7a7906d966cbdf4cc30ed8a59456eb141e2a62c9705add5db1a7f0624783', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe821ab724d6360f18049e4111c70366e28c36dcb63c34016cb7418d4e883f855', 16),
                    gmp_init('0xadefcbf863f53ce367d0d4115416cf598b3b19c614ec23efed4e0c6a59852ddf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e798f30da07ecd123f08bd983532e6ec954defb3c09ec5a05aef1e5c52ed4cb', 16),
                    gmp_init('0xd23dccc4a24dac83041a9549def2f057b173571bff9f37a12571660794bb9462', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb526ab87f2868002cf4e83f46b5a274f4d8c18948c504731a24778ac4206e37a', 16),
                    gmp_init('0x641f35d778100d8ed5caaced60a6f18d28ce539b00fa392abf3678fff0c5ccab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x224fa20031514783ad5b9e96ba8c81088463f12863dac067fdf3a0fbd3630834', 16),
                    gmp_init('0xbbe54e32bb3eda5c3c4b70fa391d09f53d62924ec0a50f75cd3c4737c47a2272', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f0d8994e51ad212f455452fbc9693a72f14a547af3806e9fbff59eeb441742e', 16),
                    gmp_init('0xfbd76c23f28c3dc445e5cb0e847a6e0b1e205e2c3ad13d958c65363bcfecadbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2d4a0cc600a39e4129a25cce4228ef2bbbb5e45ac2cf57bb67649d1583c19d7', 16),
                    gmp_init('0x65ada0f9c0806294d4183b5f7f41260d26804a8317345c9772f28b82c507928d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1693799abb39d3be05072ce10e9484541cc9b100fc9e27bba04541e55d848116', 16),
                    gmp_init('0xc49c433b9cb2d8c54e6af60f16c60deec03193e5c4d992e483df66c2027198b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ec22a7ec305f3190e5585e2744ddc2113cf3ce13af4233084c80ad4bc940c9a', 16),
                    gmp_init('0x8b1da468de3379684c2e24f5029c7feb12405183d9a35bdacd194fd9851e7a4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x341b538f72aa6a6f2f95f8ecafbd1e9129fc791b1f88ba7d7e93831eb9d9123f', 16),
                    gmp_init('0x5858124719c1c59eba6f2f041124d9ac72dee6a7052a26ed19ea0aaf18bb9a40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafc669738f9a8cecab1af6525084b8f33e36eb38a08d3133aa70ee5fdd683eeb', 16),
                    gmp_init('0x2c21976dd22752bc359c7fca239c16570bab5525eddfdc91e29cab30cd4509', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f0eab3ec68eb8de3284afc3a76996706d4ebbdf0f5a7b7fa7d07b1cc7aad77f', 16),
                    gmp_init('0xb28ea27176ebb7575a08de3062ac2f28adaa078d025ac92ce6c3f11dcce6eea8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2557b5a9f343309121bc8cf370b282e10e978b5653c5139ea201f87b76f4293', 16),
                    gmp_init('0xa787b34355e427f012682f06eb4ad21fe34b6838de405a5f1db187a25282740a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9c3919a84a474870faed8a9c1cc66021523489054d7f0308cbfc99c8ac1f98cd', 16),
                    gmp_init('0xddb84f0f4a4ddd57584f044bf260e641905326f76c64c8e6be7e5e03d4fc599d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e3c05326255d80f0a42fc69d5c92aa40cd326a53e8535f0435efb7b694a09ec', 16),
                    gmp_init('0x1ff891656c6fb5bddae240b82fc1abe048a53c707b66512534868188c7327e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc114239229bdccb740bbb83fbe53b8d6a7ede4ca39dd538417b98d538fb64db3', 16),
                    gmp_init('0x1237f6dc5b486fc2a5cecde4fe978bd1a87580904d4567d1e230ce9ffc0259be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8e2a24ccfa41587ae15fb7e3e24dda433710316a1908934205f19a2ab9c7ce6', 16),
                    gmp_init('0x46c983ce0c6f5d1b4caf2b2b3bee20596e09e603b5c27a73b2c01eb68836267c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c5b4bf831a77224082d9c2c192634713a52218c554559ea1eded83403081e46', 16),
                    gmp_init('0xcb0513714926d42fb2347863ce2be47841d0cf826ac22a62ed1f9cb80bfbcd70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8058324c6b9c2e7e62147e9a41ad78d60e3ecf417524c0580832addf11349e2', 16),
                    gmp_init('0x95c60e5a0a8856cdcde81aa60ea11223509498b5626de88d5fac469e5b2025fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1e9a856670cade4b5670665cab10a450c30c7d59911c124dcae5aec464dcd4b', 16),
                    gmp_init('0x562b0a954455c531b7ac43599b2577927f44d19aaca16b292d0b625ebb041f2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7549aac5d8573c2b2f0a38b170032a212acaf92383d5b5f5b0d39668ac7b3c2', 16),
                    gmp_init('0xbd17d1b90d1c2415335a1d70c1947d2b5d6b5115537116dffa0c91719287eaef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51b21a57ad11b099778a74e42edc14208fd9cdd902a64b7d005876fe2badd73c', 16),
                    gmp_init('0x793010001fd3e5d54a07f01d2c1cfa6c20130f28c734ba6f7d4ae1eb36d8d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca07cbfbb24ad1a5edd9a12a8ac541576f3f2ba14b878d82ab7dc996bd7e2c95', 16),
                    gmp_init('0xaedc311032df0edf4a8a2267bc1066c93ac306f33b7e0cbf05e99bac8d50dfa2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9701f3a63b1cb79861ab6296f3f39d61e58873e608cc66ce6d75d0b73b09f34b', 16),
                    gmp_init('0x3dd44bbb8caf0ed15d7031b5315683377104bc397fdcc794acdc850cc0df5793', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e6db0c9e4817e292fb072b0537a341adce4887d8898392317371d11ae548418', 16),
                    gmp_init('0x74eb6a411d776fbfa213148978a911644b8e1d73e1c3f5f1e69792c010a2b918', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa036b41d2c9e66cc445592e040d63c575270f71e8727783015ce6223bf1e2f46', 16),
                    gmp_init('0xc3bf91a003e96b3d7df1f6aa479eb08d0680e282cff0b1f4f731e2695effb349', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb09dcc04d9c30c352bd638800a766da1f6314287dc201bbf0960551603db2a09', 16),
                    gmp_init('0x8a7f306481cf240df708d1635aead00e6a951bd4c16ad4e7aed7db3a80b1a093', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a85fadbaa4e8c506f4a611534004652654b58ba0e0ea21dbcd8b9038c4cea08', 16),
                    gmp_init('0xb64604bae4659d531933c148fe6230b4271a4b43d721b6a19dece59862f4f3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6057170b1dd12fdf8de05f281d8e06bb91e1493a8b91d4cc5a21382120a959e5', 16),
                    gmp_init('0x9a1af0b26a6a4807add9a2daf71df262465152bc3ee24c65e899be932385a2a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6773fd677c52e0640394110a46dc85df7c133f8dd4a28e661899ca5d82fd545c', 16),
                    gmp_init('0x444eb6d8cd97652f0f0f25c9dd2b246bead780f5a1c6cf98e8c7f034947eb1ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71eba8fcd6e002603dd11b5fdfc766c5ff6b668a17afdc980d4da162971c032b', 16),
                    gmp_init('0xd2ff12624b61d39def660516f54cbb7f71931ad1774b4755e7ab5a8e1668359f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0f86d94d17ce565237c79aace0c87c20374e43810468050373c616b0b86f021', 16),
                    gmp_init('0xc571c73730abcf47a91e832f1c89a2c9a80bcc0115fc45b3b6b79ccb5bf325a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x855ec305b3249d232ca17442baaa9dd0507868f469070574d06e47452a03a61c', 16),
                    gmp_init('0xdd85d2ec5f01c17f543cbff9b42fb4ed332f74ea17e44965dfc6eaac65dfc07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x417fe249d3c3ae287943ebc18c4671ff63efba0bef786cd66df0d9f73aaa138b', 16),
                    gmp_init('0x23589d7bcd23e38c20a5d29f0fa9e57c19dafdec05566afd1c91b334a1ae869', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ce4486abab3fbf1f150d29a3095bfa20618cca4746a0678b00c0a481f32d706', 16),
                    gmp_init('0xe775408daae3785288efd046b1094906edd15643cd61e89f40b73637fc7fd9e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42ca15ab9f245041ce991e193d696f4f4c277df908cad6038ad0772c02da6e03', 16),
                    gmp_init('0x68d2ef26c81c57c9647ce4d1fcb800eed66e85a68106bea7836889fa8c347793', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11ccc5143f4e37faf02e03218f8844eb4a2a33fd9729be686db40cbb791cd3fb', 16),
                    gmp_init('0x4aa56b2a902b11deb528e244938cc239fa0b1efd2cdd3472a93716ba55160d86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5889573f16d0f7e557275dbbed94871cb15205998b156808108baf0429583a3e', 16),
                    gmp_init('0x1afa2862c55856fe044f5df8a9a6b4e496fe294cd4cc69cf8f1598cb7e5b124f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x250bb17e5149c6f43b97774f82382ddbd41138b98054fac387b9119618f7552', 16),
                    gmp_init('0x731930fc9bbe8082342d7df75fe9d817da006f3c333d6f1e3f0849623510b14d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2219f160163876443ddbc29bda2112c8b4a77de7321611d97e158b410307e636', 16),
                    gmp_init('0x4a984ac5cb6a2f61b806d4f1b8230bd6dd7230d3f73af55e07a1b2d71f15109', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a749c88b3467fd3ab4a39ce0a022fbfd94642bbdcb5f47505d13e939f725d12', 16),
                    gmp_init('0x7e91d19573ec0e2cf458be75c2af3d8f607208698990daa70136514d23ac56e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa77aa907c92f2674a167f8a6e350782456044660ecde394f5d22d670b6c704c0', 16),
                    gmp_init('0xb8881ae5bf35cfe4f21e188e5c2bd5a94c921fc474159462af8bc7047edfea48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc750685be0f8218c109d156a5dfb7b328b0a5c42766ec97fd61048e529fae458', 16),
                    gmp_init('0xead795f8cf921e05fb52f414c672c7b40a5dca50335951a2b01684195757b598', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa576df8e23a08411421439a4518da31880cef0fba7d4df12b1a6973eecb94266', 16),
                    gmp_init('0x40a6bf20e76640b2c92b97afe58cd82c432e10a7f514d9f3ee8be11ae1b28ec8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e5dcc62ef3b5a3b546520867be71bae6f3ba063c9acfb8dcec5725bda704896', 16),
                    gmp_init('0x6fedd12ddb925f3ea5fd3a2154c7612279605d186030f51248f2769dca82c835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x328336dcb74f53e80bfc187705edd0ec24e745bc3d593d6b68aeb58cd9ed6c1', 16),
                    gmp_init('0x71a8983812fd9f28c46d5943a20d7c8c265bf4df25cb494adec6ebe6f8fafeee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7de08375b8745adf8d6e9f976f03b20e33625a05cef5833953ed58744bf7ea0', 16),
                    gmp_init('0xa63d96b057ada5e52104a0b334888e9a645a47c0febc5aa2e04c05539bbcabaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce4f4eae8b911c54dc63926d70fe1531e38a1037013bceb2919a9a8d3235983a', 16),
                    gmp_init('0xf3c9f973c390fbbb3eade0249e707543526c65228ebf740aecfd6b190d3cdecf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x690cdae3983918b9dbdea2a74631bc1e98c4996efdcdd9f86b75648a66da57e4', 16),
                    gmp_init('0x840adc79677b79a47a9fd91bf595894df863d8fbce95a3d42b6195b4933f33bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dbebfa54b98622278e28fb36df8bcbddb5ff9cf786e4c89a6daab6655b0e6c9', 16),
                    gmp_init('0x10fee7b03c913aedf45a626e6e2229f3589311b2bc504efae94a78555eb2cc25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc266658e689080c9c13c35ac01cff4cbe68065fde949e4a3a9f8fa104ad916fb', 16),
                    gmp_init('0xe7e8593854e7daab0f798170b24627ab6b8fecdfeb61138856aef52ba0887814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa42a240bfef45c218b2e118fca1ca12069c8e47f03433f0164e01a11a5857295', 16),
                    gmp_init('0x3aa0b3f261005d4567a6b22b24dda4c427a1c22cd151939556b377feca7eb9c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4b53cc8bf53cd14daded382e8ccc3df150b96879bb9fd1e269bcfd6005c5b40', 16),
                    gmp_init('0xceef08ce83005b804495ca003dfda587199cca9bf75259e3d1f5ed16d1c61bfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34e12b2f96fb22267a7f1f86c0c499c1550ae00f6ae468032220ff556fcdc098', 16),
                    gmp_init('0xa64ac2ddd7b5d322d974cbc8417972db04df5130f19883f664cb1ade6a7474e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcff62751fb1647b48ae117dd1fd67e833ad09a92c0da35085f9898aa5cfb8036', 16),
                    gmp_init('0xcdf4ed26bd542d1ac5fe34b5886143c678a589d8f6032825843f3b5a24f59de0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f4d240d9bb91f29be31a218f4d65683b7e72f4169fb7611cd6eb5e8f173b92', 16),
                    gmp_init('0x850e2d95091753ad211b25a5a33908ba90bb769d1486adb7c902006d633146c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdea1fc018a78f3b84317f893623573e3869dff2567749de1ee6660edd04393d7', 16),
                    gmp_init('0x4f6549cc942e5c50d3bf134ff6d66e03af6def9a2b79ccbdbf97d4ef95710ccd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe846e80b69b677e749f19b976d40cc866a11deb16cacc5caee6fd1d9a8d84958', 16),
                    gmp_init('0xa29cb8fc894c7e2541dbd9104798b76fad51a33671e0c1a640c4647b7882cf9f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7778a78c28dec3e30a05fe9629de8c38bb30d1f5cf9a3a208f763889be58ad71', 16),
                    gmp_init('0x34626d9ab5a5b22ff7098e12f2ff580087b38411ff24ac563b513fc1fd9f43ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7b9796b5ca006d1632f482d7f0fe3932cf16a5ae104eea7a7ea1c251073e879', 16),
                    gmp_init('0x12b8988c19169e2fdf42102a737cc1ca9cb5bf25eda98af338e71089baa89d98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3018045d98173fc8d01839022fccacdc18a9f95d761eb2702f7c6eae3319c869', 16),
                    gmp_init('0xac5fc5782503b7b6f86624320d622e3bca2a84ca4a3d9a7bfc0c76c9d2b856f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71bf01850876203c2c915a24be09a7365423daaf2aee919865d722bf2628f0f', 16),
                    gmp_init('0x527aa15d504dcf4ae33600bc1c084ce2098f9c6a231c80bbb57c5cbd45a1c334', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x322881b61ee57ef343ab67db9a63c885f5830b60712add1b4c66986fa5ed29b5', 16),
                    gmp_init('0x1677028417a0344eb110b19df41531e1ca83aeab94ee7604ef4f126e7cd15ad2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0b2b4fed0ddd238812806c0fccdfa97fb3b42a748721ae6477dc9b18953133', 16),
                    gmp_init('0xcda1182cfb5abf2f03c1c6ca86458c8d6fa384e8b0ed4ba94bc24a3734af0fc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f38473ac0fb1b9ffb43dd9b2df3dbcca163011aa6e9c8e63bfa840786c96100', 16),
                    gmp_init('0x70c69c55f5d403952534c4462f079ce566571c7c0b75f1bcf1e2ac1bf2624707', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x218343acb9be56833a32e594c03c39e5b1911c8501213786f6376dfa39620e1', 16),
                    gmp_init('0xbea81d48970a50beaf3f24fd602fbfc0443299a42f43c9ec5e0199f6506998b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x288113c5fd27a76dcb43c0e09785df2f10ddfe126dcaace0234c6ec6fd22d2ac', 16),
                    gmp_init('0xa1a7eb0158fbc5c8f20777260c976137ddc3d44a1548c8fd081eb55f8f42a268', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2bf9afee6eec1820ef5866ab4bdfe2e9d045323343aa4228c1a13aefee515dd', 16),
                    gmp_init('0x5a11bc71c55cab7b3a0a5e2abc05ea2800f2e3aa9a8e98745c3a96b006c30212', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf963a200c8463a2a553f4d95d7119fe5d17248e3964d2900d4ba80dd245f8ea8', 16),
                    gmp_init('0x9c8594268c7f83c0a3b722301ff427208bb8f2359d8b60824bc55fb059bc99eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f86518d07c3997c3a83945743a9b892d51dcab3f816611e7eaf0ec0df0a2a53', 16),
                    gmp_init('0xd50af616fd4582f29b776ea95a709968bf54f772eaa05f351139a574733bfeb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5d9224cff70d9a7f98d8b2a590e097e40726072f26963ad9e1a88312606a315', 16),
                    gmp_init('0x87328b003b20da5b343306abd7980de9ed4d0d347d11a7c9d35613359e3b68d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bc24bc9cbc58de346644de90b17ffa739a0f7d883eb9f52af19eaf4d8d52891', 16),
                    gmp_init('0xf08e30a48a783d8a7febed840bfb48f44da845280a4872d1386d1e284d05b79c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1fe982e1b73c3604eb4e41d00e5e6a496411a830ccc4d469cdb7b5406231493', 16),
                    gmp_init('0x2e2019eaed9a4ddc216d3c205f7d99d3f173fb346e5ff0d0196a99a6758848c1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x928955ee637a84463729fd30e7afd2ed5f96274e5ad7e5cb09eda9c06d903ac', 16),
                    gmp_init('0xc25621003d3f42a827b78a13093a95eeac3d26efa8a8d83fc5180e935bcd091f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f89bdee3771d350dad163b04cb18ad67ce5e9c55b58f0e7231047a60f59dd9e', 16),
                    gmp_init('0xca7952d5227a1f695c4baf4c043bb2471e4882506638df5c1016ae320156b049', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e03b81fc0e1e5a8053df0dfb230b6aebe4115b3953d2b41811128757874b839', 16),
                    gmp_init('0xd13ae163dff07f42c44f660757198f667de5c5f0fdab5b8da0c1ce567c0594ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb9e8304cae3c5a80c396baca2c3c4c994b668f079a245bf529c314cfff01197', 16),
                    gmp_init('0x62c7d2801eb80e6a127258cdff08891741b2d18c015e0a24c334e0763b989c1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe662c0b7a2f4492cd62fa283aa2922c5f151bd1345b3023f3a3f78e68357a513', 16),
                    gmp_init('0xab0b193ce612452305dae208a121a419d8035cd625538d89192a201ca017d07e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2c58a54280df6394778ffe0a22c234b5e83a8c188ea59459bae90d3b9a7d197', 16),
                    gmp_init('0x72ea3288366e0927573041ab62ed39a60a47ec4545ad82484e41ccbf89eeb5e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40bf80b1c94cf6cb843862c7cbe3587dc29feca6079c14b04995f7efdf37d242', 16),
                    gmp_init('0xb579dd35d856aaf04f53fe9b1b26fe1274321eba42bd35583d1d8279a6405088', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2f349b0f89c69bd3c8cf2a410730dc58e0beed47048c58c15f9ffc2508d2cc2', 16),
                    gmp_init('0x1feb2f280f82723781860aec760215ba42344be8e09cbdb37e347bd8e0d4c04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d14fe97601dca70806f978138db59f6ac071f85e234a7f2baf2b364595a3558', 16),
                    gmp_init('0x16c6bdd6e84681ef8f29a931dbf56e1482e0a2e147c1d727c6adb3ac6443df4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x470a872d1756368680453c6a77494cb782e0354e4c77cd510fc702414ea4178', 16),
                    gmp_init('0x899a7a9c1109acd676145e9fd39c0cb19b568706984daea079449f1b8098bd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd6fa540e82e65251cc1ac4d2c9248652528d81c7e3f7570ede9f5ad82b1fc24', 16),
                    gmp_init('0x67e62b7eb1d3186fe366f1ebf1657e77ec10de6bed7322304a431c460e9b74ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42dc50ffcba4d624a21a278f5404eacdca1c3969006611ead74de6d963369217', 16),
                    gmp_init('0xa5ba9a1f66385b1d7ed78f5f160ba853a7a139eca8e01e841c3097e23e2dbc57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13fa2da82de55d780f869499aa3d1e80108547b7fdadf02881ea91593dd08e02', 16),
                    gmp_init('0x136338b04555da72313356206bb432c7e644afbb19a42b97da5541dc3cb03410', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9582b79c4b0aef757d1f82bb9cca75dd5dcbb7a7d8ae7b0423f1ace91646a9e9', 16),
                    gmp_init('0x22067d800ed426eed4ec6aceeaf8e6a401cbb5c5f13b82ffbc4d7493aa56a698', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd06c4851d3c70a443f7c10b672c68282879b56dd3b7d69a6ac233ab9944ee41a', 16),
                    gmp_init('0x5815fd4c0584d0adbbb0acd4f4f630919b7b84346162ee252f1f84e98b295e6f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x85d0fef3ec6db109399064f3a0e3b2855645b4a907ad354527aae75163d82751', 16),
                    gmp_init('0x1f03648413a38c0be29d496e582cf5663e8751e96877331582c237a24eb1f962', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b790f4b19a4c4f4f607a6cfcd11df0468b482e009711ff756356d141d5fcade', 16),
                    gmp_init('0xd03a981b2ff9eb3ef296661f9cae09cba83fa5b47be26b0ab6fff86fc338d3ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x384dab4ac11422c3be7c2d26d15d9ae79340e535478a066ab9955061ecde4cf3', 16),
                    gmp_init('0xd6e3c5bcd1b9ca43bfb4ed6da2b4c6f01f430a339751ba73b7c796b2252d0566', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41149b2c2d7ebed3c162c367acc4f8fe3d2479de85978be0bb0ccdabe3a3e0cb', 16),
                    gmp_init('0xc90d5b92db7c30542b415c9b9902cf28b3ec7805ef490f2470e92e98339033a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14f0ec0eb7d415aa41b1610b4e82ed4840355f5c380ecb8b98af3e921e5238c2', 16),
                    gmp_init('0xab12d53dd4835d80921fc73e3842747fd25c00d80304939d6e86a34792f07922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a31870949bfe15c8198c1efcbc441a0e192160402521e1f8a4366a08a972627', 16),
                    gmp_init('0x64bb7c8768f7a64d09577ed28587baa41744365ac3efcbcce7b47b5646bb8af9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb42f3bb782c287ec41c34678a5a0ddadd1302a756f98e188f6352efd543e94d', 16),
                    gmp_init('0x234a6d074f25d92dc9a0dd572fcdfb774cd8468de60d6d4240559de445924d89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1fad4fa4e7c849dfaec3dfe2872a7ba664a9b8205c29cebf8dddd28e3f3d3fc', 16),
                    gmp_init('0x8fe19714a348fdfe5473f70e858b7818bad37131eff37326ed22343c50f3704d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cf138ca516820d9a9eec02f6e06a920459bacde8c6673270324e5b57e19aaed', 16),
                    gmp_init('0xd6ffdaf3171c63865f4372a66b6dde17479eef8fefc77ffbc136ea5d692f400e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cbeaabfe2b74127f266838c1dad312bca7c9438c7ead6537473ba2e0ba68dd', 16),
                    gmp_init('0x13ca23b6fa90156eae9386665506efa07f3d96705de533b594229f327dd03959', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb58686be5f40d412c875a096849990d937a6637b4a78fac55f6c0e9fb6a8aa39', 16),
                    gmp_init('0x5632d54324c78c2c149478d454c0a91dabbdaf98e6db347b8fc7935d2b493c1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebfc69ab340557412dd30976e1f8b751801da99f8effdf279a544c67ca3a1550', 16),
                    gmp_init('0xe2ffe8cdb99cb540a3df199db7f4fd077983c818e68c0b1951f42bf641362f6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc19db06b8bcc2b67b5bc4fe7f3a802572831ba5a1c77c2ee91ebe3b03b4cc5', 16),
                    gmp_init('0xec8e84c0ec98c7c66ee2138f9a3a5ef49276f503cc087ec4a3b39fb865b57c28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ce5c350ce93a8661050b65337aac980e66aa5616d4418e948bbf38e5e8d319f', 16),
                    gmp_init('0x950d0026e2503c85bed3e3e8cbbe23f12da8f2e00ec5378308ac6bd795cf513f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb88fb70d42ede289deba8a40fd3eea1be10b7fdf4d388948bb4b857d4cb38cb5', 16),
                    gmp_init('0xd6c736ad46ea32806034bb994b35a8e24d4f3e1227af8c7197bfa7565965f3d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xff2b0dce97eece97c1c9b6041798b85dfdfb6d8882da20308f5404824526087e', 16),
                    gmp_init('0x493d13fef524ba188af4c4dc54d07936c7b7ed6fb90e2ceb2c951e01f0c29907', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2982dbbc5f366c9f78e29ebbecb1bb223deb5c4ee638b4583bd3a9af3149f8ef', 16),
                    gmp_init('0xa61b5be9af66220ab9fa5339c7b5bc9d095db99412e3ed8456e726b016c7a248', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc745fdf2775f230888b7ff25e02c94b066ce0eefac8feb9fc59054fe79d681f9', 16),
                    gmp_init('0x590222f2f6b9e5e78a71394c70e818678cdbd335c67d45c7603173437bbb1247', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a28e5042af0c0f6b436eb590497db5860011f4580e1765885289f612380441b', 16),
                    gmp_init('0x55779a7996c59dab7c78329a8976f0ed04b3e75b46ee67aeb05f606a8452af25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabb279f3a975050b27a59e5eb672e7f2b34478e820cac4815e04ceed35cd0ea3', 16),
                    gmp_init('0x5dee103bbf17970d9fb4be0c03078ed47c9769059e02f3b6470931337c307bce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd73c052b194c6c6dd46aca9d640981aec79600917a565ebe77fd534649a2115', 16),
                    gmp_init('0x620768c1c8178844020abab026f7d6d904f601562e9d421f049cab7ba6ba6cda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f81150b59fc682827faeaa74267ed11ea9fa1a963e7382c5c2e2f3f1bc9ee3e', 16),
                    gmp_init('0x19c88a68fdbfa82d4671beb3c47956627623b2dcfcda81603ceadb0c599aae06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8b83e9535f30601d250cc0bd3f20142edd5eb7985d83242eef0e39621e30a7', 16),
                    gmp_init('0xdcc7077065fdac7b850e3f17efdc854aacad237b987134dbebf7beb9ff688de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cf8132dd0082de69594ba33aa56c7ec15eceecf08bb358b6171befaf8e4a007', 16),
                    gmp_init('0xb45aee5c0d61fa0df4ad4158848c3df6c8946f96c79c7fe8ce63f0909068b883', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3fa054583510d6b9122671104bac7f4ba4ae5fbbaad72303003efcc4c3c18e1', 16),
                    gmp_init('0xa85c24759340f56b7ba18298064fe6fdaa55a499f10ce542cb11fbee12aa2b4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6d5fe4d0d4ba494653e33973c404ed21bc36f933bcfffb10956fe7b26c2d4a7', 16),
                    gmp_init('0x47f373a13abbd6c14dfcf9209dfffd8e745b7e4e6f5e3cc8118dce7e3ae86371', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a4d46dd65951a676e8165fe126c5d5dee0cb7841228ee11fdb86c351b816b2f', 16),
                    gmp_init('0x77c92396ca0e60ab0283e27f8f3dfcd6b50e6cc5fb3eccebaf97aeb873e86c60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61c8bbc066cf588706bb1b150029b022ea8fbc8ff1dc76dc50933622fc66dd33', 16),
                    gmp_init('0x93599e239e54f70344669994b985d3fb6a5106eac2820c8ca3bba9f3b6f10bfa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fd699b12c720ccd7b977e5bdc62267118ac3028bd635b26fce648cf335cacbb', 16),
                    gmp_init('0xc6c90ef3f511a0aed9479dbfcdb61e2caa998eb2e8223e6133b2efa88e1ad839', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94e32ba57426785187c9f5373ec3bdf1876336c17286c8fa9805b7ccdd6b2ff8', 16),
                    gmp_init('0xd1b448b43da04e192f1e488662d9e8cb33af042526bfe13add485552ce1af3e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x827fbbe4b1e880ea9ed2b2e6301b212b57f1ee148cd6dd28780e5e2cf856e241', 16),
                    gmp_init('0xc60f9c923c727b0b71bef2c67d1d12687ff7a63186903166d605b68baec293ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb77f12a7dce56b973e2d7c8d576e6b3660470a9218b87461ef6e44b70cb1815d', 16),
                    gmp_init('0x4b6f85b14f86acc43f0cefb373cc2e654c42f0f91a44816d6ba3d2bc8e57dbc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x857e31f6308c2fbc0d1a06bd320819f3aa7da6bb7041388634485cb3bb80fa7', 16),
                    gmp_init('0xf64393423ae0172092d7cc9d1dcb7147172e37043cd7016abd98211f09366b2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48973b943018bf1247b308b2cb79f956d858d8df4977c5970fe5dad2c45565ec', 16),
                    gmp_init('0x761f75684f3cdc1b6437bb3a01445af1511b3596580477b83b879075faed07e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28aaccea56bd60043545c655764a672e9cbb8b78e753d496f5d02c3a09c70e63', 16),
                    gmp_init('0x2b69322ef81a0e1567a89667c768ebb7f5fc59ce444da1e8b9f03882f057da4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea1266167f2b818481a69b87056523973416611d0389378833a00abe7b6d6cd3', 16),
                    gmp_init('0x21a4e2e5078ee3fdaace112bf1145e25b1c9752debbe1a88aae62925f4f450be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2f3b625a055a66145ddb2c9bceb8a4f92d8f69ce7060aac601dc52f73e674b5', 16),
                    gmp_init('0x620ea159614c68ae80044a90f32a7c4b9222fa317c33fa53b0938c8e0e937941', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe931258e8eb5559c6d6972728a704c170b775a265b4527d4a4d4d742bbfd71fa', 16),
                    gmp_init('0xfb1e33364c3fdee0e85eb4169c954b40b3946ce1bb5e35f33d9bd0d3174d3307', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c4f83c9eaae59231d98b5c6a3f515f5a002efdb8ecfd386c7601631d91eb056', 16),
                    gmp_init('0x94479007514a8b6a33ad6573c3b278801982b54481cf6b877425893da05cecab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedf384387f7f42449c365f8de891817b00359b87a712df9de643d8cb548fadf1', 16),
                    gmp_init('0x72d3b5b0a1898500ded80235120aa6b70f4e8813dea37d2879c436cf6c415fb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaff8e1288a9967d4e29c1e03e8103baadc38b4a409b993a719061fdbbd86dfa9', 16),
                    gmp_init('0x8d8b4bb321377c3fd3d3ebaa1fcf53f4f9116da94419f9c707103c36c1d12681', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf36adfdfb25442ca6c12c1e782b4b635f4efd281a275ec977123d425cff55c5', 16),
                    gmp_init('0xd16a12166ae0768649c2f58b3bd9f207a7547ec25c0d2706aca2788521a0228e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3fb784528dc00b3e8458262aecee579e40f7ca5a09d338e28f2736b989ba9c1', 16),
                    gmp_init('0xf894d434efa6b4e7ca7ca05758b70fe6341cedd5c011ade0061b88dfeb51b267', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31c80ca26c63dfaee2df82e7c6a5ca26e045d8650ce4adb4fe8540cbc181f79b', 16),
                    gmp_init('0x92b59ec1202926df3094e4d368f30d91622ff9eaf51125f1f0b9e526d5225400', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ec9300e0ac9aa88ff47298839187d7f6391027c53598d999da96c1d0f2bb909', 16),
                    gmp_init('0x782ba106be1b04dc5c80dc45184c49bad52e16820dac3827b88a383fa4cf4071', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xeaa649f21f51bdbae7be4ae34ce6e5217a58fdce7f47f9aa7f3b58fa2120e2b3', 16),
                    gmp_init('0xbe3279ed5bbbb03ac69a80f89879aa5a01a6b965f13f7e59d47a5305ba5ad93d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3adb9db3beb997eec2623ea5002279ea9e337b5c705f3db453dbc1cc1fc9b0a8', 16),
                    gmp_init('0x374e2d6daee74e713c774de07c095ff6aad9c8f9870266cc61ae7975f05bbdda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b72a5e9042f4abff48731c3b85047e229aab71cc52a6a98f583fd3a3f2e070d', 16),
                    gmp_init('0x599e1d4e1d6ae1cf60277bb36d0f3c10b0b465ddd2948c3de44ba82ee96dd780', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x129e53ac428e9cbb7e10955e56c5fc69fefdff56963e7caf054e9e0c90ae86f9', 16),
                    gmp_init('0x415ecb958aee9a29b2da2115b712183fb2a232fd16b3e01b822efdcd1e89c85d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9fc93fc6539c8e285a6bfbeb5e1fd613ef54996585125a1e9ce7fd84a02591c', 16),
                    gmp_init('0x9c2ce739dc5387173e84c17a1a9165e5ca888c415fcf7253790addef69bec2dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa7121d4e3fb5b786ab499694aaf054327f9ca04e4609113428700a0f85912ec', 16),
                    gmp_init('0xc690f077dad09509c505266b96a2edebfee134a8ce056cbdb114cb264ae35978', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc940017c1a6f9f0a6a7d7ac1209b027709a28bae13cbbc2e11006e0e2d968b59', 16),
                    gmp_init('0x39d922500c9b862013b8a1bfa5b5742ce2842cb64390c9c8fefd76408de572fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60144494c8f694485b85ecb6aee10956c756267d12894711922243d5e855b8da', 16),
                    gmp_init('0x8bb5d669f681e6469e8be1fd9132e65b543955c27e3f2a4bad500590f34e4bbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f84bb9d7eed0024ec6793a5f70bf8e0310388d073ee5de6a2873335726b3332', 16),
                    gmp_init('0xee726d072bca9ecc2547c27f75b9edf0c2bcce2d436dc3a2554428a314e8d52e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3df2d057c8bb9f028f68e0213eda1776c2f22e3e241ecceb9dd95979b1972bcb', 16),
                    gmp_init('0xdc7eb1c640c86eead6e6b23b046a684b1b91449680194771b2822cd3d65d09df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf13e0890945fcd06ca8157b3991e9c77248446811ac27995cdaa54acdefa98e', 16),
                    gmp_init('0xadd521f1764e7c5035e3f8b0a7b362db287e705e16ceaccdc08a7769be286767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b9915533720f934ba48070d37bd79d9775e2680b17714ce1b806a24ffd292dc', 16),
                    gmp_init('0xe327754961103a226dfc0a74b5f01f57938323c45b376afd433a5ffe57095ca6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdde191a551ddec7db3728a1d2d5826d3e9b38c63c1888e2fa5e1c03be9f59b6b', 16),
                    gmp_init('0x5b2bfb78028275cbe0a757d61c52e14e8b5738bbe7154fecf6ad962926cb1410', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83c403979eb95e937ea4825fff359c5c181c9401bf81184feeed1b3423b43eeb', 16),
                    gmp_init('0x29575ff2437cee3d0bfc1e46d00d61b295b6bfcab553fb40aff34086d484fb51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fab012eed836f7a5a16d7bf97b41682a86f57356be46871b68c55fdc9c6b699', 16),
                    gmp_init('0x2d9bfa70a3c3d144e9ebb41130d62f7b90ab117fea883519b1732152c1c6c3aa', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe4a42d43c5cf169d9391df6decf42ee541b6d8f0c9a137401e23632dda34d24f', 16),
                    gmp_init('0x4d9f92e716d1c73526fc99ccfb8ad34ce886eedfa8d8e4f13a7f7131deba9414', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd6451fb84cfb18d3ef0acf856c4ef4d0553c562f7ae4d2a303f2ea33e8f62bb', 16),
                    gmp_init('0xe745ceb2b1871578b6fe7a5c1bc344ccfa2ab492d200e83fd0ad9086132c0911', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e419634e156a3a24949bc8e8d396faf09430123677b392b5c8410af3bea0c68', 16),
                    gmp_init('0x123c59d924b21f7f373cbfe370693062fa11946303cda1abcbb6ff71a45edb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eee207cb24086bc716e81a06f9edbbb0042e2d5dcf3c7a1fa1d1fb9d5fe696b', 16),
                    gmp_init('0x652cbd19aef6269cd2b196d12461c95f7a02062e0afd694ebb45670e7429337b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d9438f5455d7508eed4a3e62f7f0b576eb7b64c351c9897af75d23c939824d7', 16),
                    gmp_init('0x3261e0734fee6c2a2ca60bd31ab6ef6f8fb9e2b8326b063d8a004f489366489f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf13a99e58dc72fcb0c62a492d2850704621ddf48f1f433e69a9814c417d4b84a', 16),
                    gmp_init('0x33c2c8cd0f0be995aa6b91cd1e3fe06eb6e37d4710f2d96285990fc553fd1c81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb72524c558ee54420d4a912a2fe545439360c2fb7428e6208e48071a98d713de', 16),
                    gmp_init('0x4c51b39a8a283e451042d182e9d694150482d26fe44a5fcb76ffe5259b8350e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc0ea33ea8a9eb14d465ab2c346e2111e1c0fc017c57257908d40f19ef94c0d5', 16),
                    gmp_init('0xf9907a3b711c8a2fb23dd203b5fbe663f6074f266113f543deabe597af452fe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3de45f5a216d12519adc76e38121149e3049f35bf37210402cc6c293fe3b2cb4', 16),
                    gmp_init('0xba2a8598405eaddc50e08aa4a97c9106823e28e65a87044cf61e33ac307eb02f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e4ac64d9ca58a0446ca18bfc1700f2c16937ef9c82e8b559ccbd7512a0c0222', 16),
                    gmp_init('0xcea45d1d9fe4e74d3080e8df63b300d01c62030f3dab904e16cf7673a4fdc9bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8511f1c68959be87c1e3fce3748906ae9b67ca86a09005b17234766f6ce4e5bf', 16),
                    gmp_init('0xecdff5cf91bcd4874c1ddf7ec6aa00232da87889bc5365262fc92944c1789c08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x678ac7c0799b56cb46b8cddad61202fc4003e0966be61fa05f0c3b144e735a1e', 16),
                    gmp_init('0x8514e33d9a5285b7a70ff3d57105e8e597fffb33d371457a363a5f712f7c055', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c5a052e81cf60222cfa1c72ee14ab5957d242818abc14dc31b5668a3d3258ab', 16),
                    gmp_init('0x6811db4bb443bda1079a80c7904c08c246dae8f9c0d944ade57e0853022d0f8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64ba9514d8680f6cdd66895d9c5ad45f00006e2933506f8ed7be9770822aa9b8', 16),
                    gmp_init('0x81273f22a6431bdbb7e07728c19be49e5fef1b6f68307b35e93d1fb9b6163565', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcef7f816debd3560bdc63cec556bf137f5cf1d8f1e0c0d84158c2a0abf91bcee', 16),
                    gmp_init('0x67e74c83637487012463b339c01d245fa63e4b02a172f6ac6bb4da9f81966b33', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1ec80fef360cbdd954160fadab352b6b92b53576a88fea4947173b9d4300bf19', 16),
                    gmp_init('0xaeefe93756b5340d2f3a4958a7abbf5e0146e77f6295a07b671cdc1cc107cefd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5be7ea3519f04bc6cbeeaa0344fc90bb8e8462f6ebd890560dae805d414ff9e4', 16),
                    gmp_init('0x32f32ec3f638e605477f890f655ab7fe0e99c6302119a3094030b07847e0bdbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6dc880a55d1f2e83bcfddab67106531c4ff0b508c0452b94b17cbbc52fea1f9', 16),
                    gmp_init('0x7ef1a8547dc367c3038683a116acbc50057b89db7e68f7e63b1c14e47bc345e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58f099116eae4e650813fc8698df7f5cd50028649f853991e3fb545f4ddb7bb8', 16),
                    gmp_init('0x7e07002aaffe111a0d62ff7614638066507ee4062d174302bdec73582e5b2d6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe6ba93fea4245992bdc229c78a481ba8c6c4ce874865637c8d40c3f06d6c9b3', 16),
                    gmp_init('0x7ee918d740539872b6bb41b345413b56d980f1bf05c2e9b00c2c788fa948bdfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2320b5caf7b59b7ce542842802f74c34134bfc495b9e2b108b613e771c7985c4', 16),
                    gmp_init('0xc79f943dc88be94318c721b81f9bca93d96f10211cd9eb8d4ff4f1df4c2c6d44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d5e2f146fc98bfb020c8c2dc08ded1b964806e442c4b64422f10730cf95151', 16),
                    gmp_init('0xa5b72e31915fd4ec7f90e109789023f9bb204fb97dd8c0f9482a07cc2ff8ecf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0f9e4b9b29790b633bcc04fd860cb0f823d8d1a4cc1a1c1413c1606cc9a8e2c', 16),
                    gmp_init('0x49e82bf1843ade6d41cbb0b906fde3f03350cc02c171cee76c2066c4df3d0db4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84c0e8725688447ad8c7e00927ae29be3814b25241ef65643d7810b9296a5658', 16),
                    gmp_init('0x26598380c16022c4a087e3190653725ed3a61a981f4f1fd22d96729bd81b80d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56db6280670a91ec8fad04ce213d59f494b357cf1c9a124c5aa02f29d9d6fad4', 16),
                    gmp_init('0xda0d3b94db57272450f591016d6830c7f5b8b2a1a31e5cc867a9c0fd359e0836', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfed6b1c71a93731d565264e7a2c077c27443419142fe1575375bb5c894dc6a0f', 16),
                    gmp_init('0x8de2abe6b0ffff0a8479181ae4d3ae231374d5930a3fc409ccb8d72d976fc7e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x125e7ec83933df56bfbcf97e4254a89edab662f5d798346d79fe0b0bca3a809c', 16),
                    gmp_init('0xe0d3f6ede254cb38887747caf5721a371e4e3b2ef07fca3dda8c900a949e70d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a6a4dd992d3cbc70fcef8604023b9d82f1c8e9339720d86db3885f118e29355', 16),
                    gmp_init('0x8677dfba7c4a7e0c760fdc81e268f90dfe905a3a64c4c76c0053e00fb5cc2872', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1acb3f1185d20e1bf33ce97ddaf3d8f196e235eafcb9bb47f529511e7681028', 16),
                    gmp_init('0x55a883a61abbb29b6a047588288f0c5a66eecb271fa0d7881f1a463e14a11c9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe42d93026c927546d9764ec235fae735c1add2b9349d78eb1f9fa88fe148dabf', 16),
                    gmp_init('0x6413862c6e2d84b0d8b38cebfdf385303272757019e77eb9d772c756811e1361', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x146a778c04670c2f91b00af4680dfa8bce3490717d58ba889ddb5928366642be', 16),
                    gmp_init('0xb318e0ec3354028add669827f9d4b2870aaa971d2f7e5ed1d0b297483d83efd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x574ef0ce8a597e24e5670b5c0bcd14cfeefc983c7ecb261911b2365579de5cac', 16),
                    gmp_init('0x9b99930281f19c73bd6ada0569b78451a260a7bef10008cae59aea6c75a4805', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc696c040660935ff42c899820a142a13d79bbd54ae867299d93873827315443', 16),
                    gmp_init('0xe0ce27ebf83b5892bbf0e1cdd69677b5487ff486109bd1b17490d60b57d28960', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3d97e799d8bf9f85d909397b98c835d10a770c1aeff8645808c2d74260966d3', 16),
                    gmp_init('0x8ddbb46376bac95e6aaa89275d403ad3b5e48711be8dc4eebddeb850833c2e52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x974af221ff4ff2ad1ae56a3562beb0928fa3dd79c62e6a79d1bb2f5c16fdb4eb', 16),
                    gmp_init('0x5552387d535003ca64d1e43d02c090ed111c572a3bffc2348409c3dfa9f6f484', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0e8865700ef4338cdf587ed3bf200e54185c8aaed888b607f3615fd7c6b5b56', 16),
                    gmp_init('0xf5ba46839fa9ad50b99a6b89b853dead526b871d70858a51a16bde513a1d7518', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5baab59b49de398b09121b3a669270c5e8284bc36658c81373904adb5d5aeee3', 16),
                    gmp_init('0x8a577f617c0f7e856e5a008661ffdaf7215ddc9dabd31eed82d29afb70f69717', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1aa653288b318987b974e782cbbee0ab2be78cf8f494c120040fb93968c6d4b', 16),
                    gmp_init('0x7ed6071c60810d712684aa8e2d63a83b100a1d909d623cc383d9e62ae891ac51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb685fa7eb49c43d01032fcebf910a0ee59025feac837d15851b1e44f5726890', 16),
                    gmp_init('0xd750df22c98e5e2e869ca16d9864ba094fa6cb12e90e79b2606ea8f3b835783a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25116c4108c7105f358ab0b8392a597f24fdffee356cfe6ab7eedaec62c6e5bb', 16),
                    gmp_init('0x60d86913e77177e01eb7406dc815dd8f77c508df51cc272d4dc4732a0f7e1321', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5de58ff659e2995a0ab27b91c287f71d78b4d5f4e83df62f5464bf13a8bca48a', 16),
                    gmp_init('0x685a3b3d80359b55309a623c252d3c843fe5bd9c4e0f8aa958794e80d2fd41cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf8848372961ebb2611d8100f9639e2a3cc8b99dea5715541d765df750cedd26', 16),
                    gmp_init('0xdc57fbf97b167030d28cbb88ebed2f9654549e4867aa41708b6e7ad3b0e43f7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f1825cdead618bfaf1b7fda3b4fc1c85ab4d016731b182ebde38344e5ef63b6', 16),
                    gmp_init('0xff097e7dd591911b98f4204d783334553c895a64027f945412c846cf45c655f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5210d6605b8880365b256e3ea081add0b5a275ecf6ae4bdc39f9e5b1faa50e2d', 16),
                    gmp_init('0x35f6674a5decd30139c13c0e7ff6588b5a273dcdc642686eb029a8935afda8ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5ecb895f762a376b587115f5e76c76583203b019978f9727b5047edf4a63f3b', 16),
                    gmp_init('0x22252518197881f374ea4058ff9233ec8beb65ee5e30bee5b53f374685005024', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfa50c0f61d22e5f07e3acebb1aa07b128d0012209a28b9776d76a8793180eef9', 16),
                    gmp_init('0x6b84c6922397eba9b72cd2872281a68a5e683293a57a213b38cd8d7d3f4f2811', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63964eee619074e0780140fe02e90836e72328d2448386d459c5be23187f5048', 16),
                    gmp_init('0x3b6cfb3a6b89cf41a39ff9b1c34bfbc93d580b934dde6c84383a284d89309df8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7502e3c4379e31bcda329f93a1ca2b6a9c60a4015cacb2971ee0e3391da5e12', 16),
                    gmp_init('0x3c57f5edd67cfafd59970945c3d672047b86d32ef725cebc7a4b9c5e8385f4eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a3ce25b4d15b7e22d1469ddf0fc9f75afd7f12ad3cbda31f814ba1ebadb2a65', 16),
                    gmp_init('0x8b34125b92e05f63873a6dbfbf3f99af3ee28bc3d825fe8ed8b170cf1d327f1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12fe78f983ae5862a3a4f6624e3455b3f4ca5c4b94e57c9f2074933110b7d105', 16),
                    gmp_init('0x2062f1a338d6bcf7786b5aa199a7cb771dece265d6ee90b8458ac6fb9f794a60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd42011d6010613880fec6b7f3f332b2024ab318f2a9ba7ed237312073e32478e', 16),
                    gmp_init('0xbae5d4e9a37d4e0c1b2d5f5f44bf847b6fb24b2f35508cc31ce05681d04e88d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76aac31347df473d58c4bb1028084b1a480e6c50aa572daff621d8339e0c5d05', 16),
                    gmp_init('0xef5576ef0d5c70efabef32c83202625f4b1225cf015e6ee3556619b751ece63e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ce605af98f93eda6910be34f0de41ff85dbcb6e69a8fa0016a733754a9f44d0', 16),
                    gmp_init('0x4cddcf9bec226bfe7ba56bd031c76c58ab3cb1bfa32eccc6c0d05f3489d30105', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa663fe5bbe5c5ccc87e60c3145e88104c6b55c349c9a1aec9e26f485fc53c086', 16),
                    gmp_init('0xb541997f6b211fbf5d1b102c89823dc3991ecca573994fc0e69c5032a5016201', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0346d21121ff741fe4eaa23938a4347a71df4429e55359eaa20d691c9f40840', 16),
                    gmp_init('0x3ee683713c998956d756d4a97ee7ba2a269cd39a6ebd33edc39a1aaff3d7ce72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde95527a0206cd825b7ca1027ae2bdf3d8326689434f9c6e9ad801ed4b758574', 16),
                    gmp_init('0x4cd3e056ac93d14e4e21dc847f169ed7bae6a105155a2deb4b7df1fcfb67232a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae1ad36f64e99edf7b5beb6cb8761af044b110021ea003556a7237ba16ddcd3', 16),
                    gmp_init('0x7016054987a0922059c74f775210448959616addfcbb613c7cc4619d2e7eb2b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8da6bce066d32addbfedccbe44785aea894c4a2b89634668d779b8abfd85474f', 16),
                    gmp_init('0x13fc6c6af31ed4ff84fddf5d071dfff10b1cc59305dbdd7a5fdf9c7d3d7b4ef7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1138ad12333790f920e979f6a64712742a9bb56702356e3c80ffff890a9de533', 16),
                    gmp_init('0xb35525b758751d9486f0dc3e9f95a7dff679bd0b454a40006a8b7094fd332573', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7329acc7cfb3ba39b1bd6649e33c93beebfa26a6458eafd06b5d42567dd042ea', 16),
                    gmp_init('0x9272493541b76f1489284e794fab68ee184897731dfab4f0ada8cfec2f5c94a1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xda1d61d0ca721a11b1a5bf6b7d88e8421a288ab5d5bba5220e53d32b5f067ec2', 16),
                    gmp_init('0x8157f55a7c99306c79c0766161c91e2966a73899d279b48a655fba0f1ad836f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c7be00b4ef4c444df85d5f61dc1283a23605483e1f8e934b3c210d22cd3c369', 16),
                    gmp_init('0x9220c0de74b20d2052a26d455ce401483e31153a16769cbd29ee3feba2329515', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3e90da46303dd0419e96646991b1723b83ec0c4479d36f615d87732fa95a8db', 16),
                    gmp_init('0xfbe53bc0056c178bb00faa90c702e76afbb1ef97cc984d3d1016cf7f1b0d1cf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcd83f42825263bb55664b238ccc49174dd06a70541178e76bcd92d7bb8c9e3', 16),
                    gmp_init('0x6c0bc1cfeac5fbced1d8232de5fdb683adbeaecdf1627bf4e86d55fbdf4aa9ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f4ffec732e3d775a8b650dfd5c0c01c782a4e979593154017aafd64112ee214', 16),
                    gmp_init('0x639ce2e1318e2f2e60e96682fd75c69d9719b6930bc880283ef442225085f37a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14295a2937f1a9412ee14cce33a05fb2748992a2cf598d41f4fc3dcb541d0ce6', 16),
                    gmp_init('0xfea75363df1150711b031c44844083b1310895601b5d241a52a81a8ad738bb86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x431f622d41134ac1b171a0a41f440b2c4b1253e1b3c14e3ef8b681451f61a0a5', 16),
                    gmp_init('0xa298327fe7aa438f6d6de6519723aa7241baaa043556577246b7b7fe78cef899', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7175407f1b58f010d4cda4c62511e59db7edcf28f5476d995cf39944b26b64f1', 16),
                    gmp_init('0x43b4554344e3d550f36d3401134cc86eb01fe8b774471d2a426e7efab24234d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x993dbaddece78fb86cb62ef39f8a12ac0e6e0e47731328e7cac267d567748503', 16),
                    gmp_init('0xa521a9ee8569eeeb785f784787a1f51a17f87bf69b8adaa49ba736137eb0cee2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc20e86b84e51772ba8289212418cfac3aca86a23cefe2f4e464dba997421e21', 16),
                    gmp_init('0xf561e9bf76d0adac1a1237a11e19a5b786ee76f65bd09349dfc83d64a1aa6a45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75f17aba06ad5ea5a339431cb90962c0e10bd11f26474d478dea2275a6d23d80', 16),
                    gmp_init('0xa07a62fe15639a80c7fc7d0bf19b6292372ffbedbb4ea590986a85b0280dd57e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x354cc84bd972e0ae0e97e32cbd26d410ee8b89fd48ce60c4c718cf9c4b344f7f', 16),
                    gmp_init('0x9c04bf29291c6b5d6750b493f9ba88558e36c6018602e0ec7e4b11aea5db82d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6678555e11d9f4a0a6e95f485cb87b7a8db9c0040327d684ae2b9b6d61ad3413', 16),
                    gmp_init('0x510dda3de278f646925266d927cbdf9ea6ce2d153adc6660124810207ebca672', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xacef1418da0f942840486c0f262213a9c4af2554d6c08a447487b5f83502b4b1', 16),
                    gmp_init('0xc4d3559fd7e87a4de04017b53d8971cd2a3f6290adf1878c6f81fa7966e85bfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebdc4a362cda7748adac82bd819636889224df5bffe101eaac00af5b06cc8563', 16),
                    gmp_init('0x659a3144e856d35f9b1ee35e6cdd4f07bec4079249204f9249b17bcea394ccfa', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa8e282ff0c9706907215ff98e8fd416615311de0446f1e062a73b0610d064e13', 16),
                    gmp_init('0x7f97355b8db81c09abfb7f3c5b2515888b679a3e50dd6bd6cef7c73111f4cc0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcac6f2e7e27faecbcb876f805ea66e63efbe9eaa753d67c1c15eb9ea7f7653a1', 16),
                    gmp_init('0xf7d416e5e2aa6f194cdb65d9a42a345081e83ae5688103a068c10ad0fec5e556', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae2207c5cdade26327f37f0b1ee40e50ba288f8de67e829e22a199b0ba3979b5', 16),
                    gmp_init('0xea91fe510c079f71ad4c924523ad7060fca87b7d37d4f88968f3cd668450fa6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6dfde46ee37d206efbc5932e58e43254ab767294238cb11cc9f4ab08624003d', 16),
                    gmp_init('0x8727b3b7be9139498f2f48f7b88f92203b1ce5ea527fd7dd7548650e2216b93b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb8ded0cad72ace59cec541006585461e0be0c4fea2164fae41019100efca824', 16),
                    gmp_init('0x33a5008f740d88c85b316c487a2ccbc496ad1fdfc7931742f140bd058f227361', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49dbe4f7b2792b64bc9eca37e8d64c460a00e49ca3221cef559e11e1ece4dd6a', 16),
                    gmp_init('0xb8b57298470481c72c5fe33db692255a1c38552fca05bb69b13b72a42a9e3eae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0c53b298af1836708e94900d7e76ed6b04e085221e4aaee9411b4da3bcbd327', 16),
                    gmp_init('0xee2a97401fbd7ea1638f6a601b66b2afd82a220c74636a0f1616bc4a2d7be436', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c4e089cd9a6823d66a40cfc7ac96082e250e3149cf211d3b0e1103548dce109', 16),
                    gmp_init('0x43fbbe669fe191b480757bca15764d379579e142d97fe697e2bf65923a19aeea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f6ba73f329db920d4d8862ece77f526c806405ff7679ef7de6efb6397b836a1', 16),
                    gmp_init('0xdc778a17ff5fc18e3db0b8a405bee9c0d8990c5288e1ff934dbdf2fb06832b84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8cc1dada779674e534277d340b3ea8a563ed7ca920bd2f668056b7f825d5241', 16),
                    gmp_init('0x13de4e4410b170feb33e892fa5166f0452c2d76c61eb0bd4960af038f070e10a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d471a7dc7422af4bbcff467e102436031088032d70612d42aee34209eb39ede', 16),
                    gmp_init('0x4a7b19f3a6856507b82231effc86fa7795cf7d1c22a8fd0c9bcd94abf6607e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80c34fdd0289be33737dcfb33d7dfe3596565feb1e1606d54fe8b5bdf4e5f03a', 16),
                    gmp_init('0x247e0856a78c1ecd55edb57007dc9a03d30b2aef1f3245cb117f4546fe3ca504', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0025163f9b73fac7070fcc31982f0967fcd7567cdae5c5aa56d49e2565eb1c1', 16),
                    gmp_init('0x54ea9e8883d20df4c66b4a5da26afed8576ff5cd6cd11e57da7d7046dde2ae0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ced1ae897a9df3d4afe802214dbc7bcb383e4ed9e4c4deca610a061ca14f422', 16),
                    gmp_init('0x25888aeb1b0f8e7abb495a728be6b9b88ca102c879a9c932ae73da43d84fc091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac12140001ed23aa0f704e950f47715e0e36fe03ecae4bf84cf35093dac32c64', 16),
                    gmp_init('0xce8ebccbac338baf1870b695730499a3ed5a5d3a5a53f0898812adbadeb1a867', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x174a53b9c9a285872d39e56e6913cab15d59b1fa512508c022f382de8319497c', 16),
                    gmp_init('0xccc9dc37abfc9c1657b4155f2c47f9e6646b3a1d8cb9854383da13ac079afa73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20e6e2e796946bb630c7071ef1b92ea3d53d280e0e4501115f5da36f840dd273', 16),
                    gmp_init('0xd3ad7afe4f1559e44a0ba1ad97874655811ec9793da8693cc07cfd15bb46b593', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e5a094ae446526e40caa5d458436a5db775b77d67d506bfe948073d754b8367', 16),
                    gmp_init('0xae8af8c9a4795e05c2c901f1572a4b7a796aa9ef3de5ffa445329a9d91ce85ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e0ca824d7a351dba80280a07e71db7035ae68136cc24ca3e7b54f301a077674', 16),
                    gmp_init('0x4ec560759192d41dc569d24da62cf57cff60419d2f910290b84cbec12b7ed98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4e0adb9702e859deccb83310cb82de6a52f189d1f8fcaf198579397b10d9d', 16),
                    gmp_init('0x87b801981837640947d2f846432287f70b5898c978e2d923e82100487140dced', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ed76c1152ac36007aa17c85a5f902f17c845a05a4e0aaa07b05e8360cbcad59', 16),
                    gmp_init('0x639f4d4043b85f222cda6eaec81767ed5f72c60130a7f94114ac7a89c4ea66fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x366521368ef74c0f6f7a19aeec4a667632e2045b1a270bb20811a609c9caee8', 16),
                    gmp_init('0x1f18c32b2a93ded99949fc681ba6944501cba9893295ba7f0a9ec6a3b772b711', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7bb50da51c982d1c5fa63553e3d66c1afdb5821a321b4afe96afc5ea8192441', 16),
                    gmp_init('0x93cc3be30334a526311bc63bdde6485db1cfdc1fbbc4c74bbc640ea1d45165ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5891056fdb8f1faa0676c453f6c6eade37de08e601c06353ff97519446c85c', 16),
                    gmp_init('0xe39a485f11fa7bda0ec7418baf481898f490234e80cddadd5f6c77e72148972e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa34667155b6ea5982d3945fb743a1510c671b96fa3494a57e0349010055ae087', 16),
                    gmp_init('0x21ca5fa5e56bc5bd8defe9a1aa2a3051c53eab6f2394f0bccb3f366322887627', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa740126d26f1463f2b6cf5faa0077771931739a40681362aff18adf3c22e1259', 16),
                    gmp_init('0x5a9ffbaf194f1ff1b05f174a67c7ee517865e753b1d6dad5f771724334a5f43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fb1df0e7d45a4f541910f577d417f7091adf4c799e817ea830f4571e4b84b48', 16),
                    gmp_init('0x2152fbbcbc3c4d49fbcf4646fe6d25820629c390873f21ad77edea6a37be8eb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87e4b8216d9474e4a65405765d82d177d7ce7ee70ba087bfd88a17a3cb08f1fe', 16),
                    gmp_init('0xf74e3ac0766348cecd7d7f8ea2f8c2cc6e2f23dbd6786d9d75f74ac9aed5e2ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95bbd97478e1b8a41622e4608aa82fe9e77d43e7492a0d211146d987f9b8f255', 16),
                    gmp_init('0xbed43ad129e3c77fdef2c208f0f2d0d8f2ba72aefc777fc1010e3fe828361439', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35ea1b463fea79a5a92c22c0c1254a44105ea7bf07c0e74b9a8700e6a1c4d15c', 16),
                    gmp_init('0xad2191651b9ed2cd7888fa5fd74d3b185d633aa03065095edc939baf7f3fe1ea', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x959396981943785c3d3e57edf5018cdbe039e730e4918b3d884fdff09475b7ba', 16),
                    gmp_init('0x2e7e552888c331dd8ba0386a4b9cd6849c653f64c8709385e9b8abf87524f2fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbee1405ff0da7deafe32ca7dd73d95ed702226b391747c707275a940bc8f53b', 16),
                    gmp_init('0xf6211f4f4e75f902b51f3e689b8294cf0d9ff4f68126f7282922e6b278c87f45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae97675ceb72f7e788f690dfbcccf149f309ccb6ddf72aea09c5dd90fd69985', 16),
                    gmp_init('0x91219973f6e48d14e9b8dfee051a54c5d0b99d417aee1aff89c8eb411409a003', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadd5bad28faaf5acdd580bfa0ba252e03de3beaefbd71b9cf377c88b14b311dd', 16),
                    gmp_init('0xe9c43cf4da3dc3a5974e434f8359814f52d4e1e7669b9b8902f982f349d6c38d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b15862a5ac1612ec9b65f1778025d1fb723c4c1fe3cc29a9dc193dfd9262b90', 16),
                    gmp_init('0x2eb0053daa0a33faa7a30d52da8749066f534970f99489a4991996e6483d7557', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x209d6bcd766163b5248d4468c66d170714ff12c6c41261974e75ae796078afb0', 16),
                    gmp_init('0x1a2f13429e7b3280a0965baba9898a5b01edb79339f4e3e385d1b775a740b310', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6af9eaed1a96ee677ee95c1616e4769af2d2c89491040ee593f9714ca8e7be40', 16),
                    gmp_init('0xb3812a11690066496709ea428347dc8145e3f666a0f59569fa416e026e387e1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53f2432ba81717143fa9df3dff41ced24a29b314bc5a8c96f5f6400a0d7c0979', 16),
                    gmp_init('0xbd52effbc1f079b7ccd4e3e0911b07de4bd5a4f5c9e8b845f9f7e90c537b36a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x596668ee0444144eeb3aab424cb8d6f940794f8bc5bd4155d26b6fa0f482801e', 16),
                    gmp_init('0x949aa0a85bbaef5f1ec8f9608771304e8db6c1cb63d3535ad477148f04870c37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa762e69e047f9a6f61d50f83867e0fdb65bf6f8bfb130c4fef4040a588977063', 16),
                    gmp_init('0x6b98dd57cbed115781a1732d93372a89958b48a396dfce62a06369f8294f6ef1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe84d1881b5050762fdf4d17ab570b5b4acab8e9058028c3e4c9b2e7c32c19fd', 16),
                    gmp_init('0xeff960cb32dc50944d1e65f4830839947955a7f55e50dc3767694a5372f1281f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x726298eb9c6e3181810307f601d7c578f6b015ef29ea5bf8ebcb0298df55a9bf', 16),
                    gmp_init('0x38d48801a9de9bfda9835a2ef3d099e0be797bcbc00673b4e116f8b0bc3accae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9867a0314c0d7ee541f57274caf2bc88cbeab540132fa167bd1b75fd56c69482', 16),
                    gmp_init('0xd02e615a3b10834f9c792d55b1ba99639e6245cf515628a916f061146f792cd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb934130f1339e48a693af7555946de47a4c90e8c3efabd859957f2d841a7e7d2', 16),
                    gmp_init('0x95233f6b9b2d0576aa0929a5fbf78d1fffd381dbe70dcc41a4a991a898653d39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa866f24540d8815a5927f2ea0099d6abdf1d92fecd01fc2978a239d91d557aa1', 16),
                    gmp_init('0xb58739f6a8022b44d793d8fa5db0e13961eb69c67c611a4b7981bbb4c1430634', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd2a63a50ae401e56d645a1153b109a8fcca0a43d561fba2dbb51340c9d82b151', 16),
                    gmp_init('0xe82d86fb6443fcb7565aee58b2948220a70f750af484ca52d4142174dcf89405', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaf183a76100525e23bc7202033725f922b9cd6b36c413497c6c4bacca72da5f', 16),
                    gmp_init('0xdeac9fbe9ccb4d335688bd58dd69b1d18e2336c5ca739361377ce628a8f2a0cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41081105221ffb73befe170f31bf245f5c2abef5f18bf1f17859f635ee4b3ba0', 16),
                    gmp_init('0xdc37f36976ff5668f2ca65ae1d6b84981336498565a06455486961dc17525595', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7aef8a7e38440238f9332906e48f6fd5adbd02d56b76a5ffa5aca58c56c3943', 16),
                    gmp_init('0x4e3b0b44d5ffda797c442bbdc3ab3fcfeec30184a8dcd003431f627facf442f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63a2a210a16cc0c8c8cf22990531d65edbdf22833b8a02184629c9b893d98ded', 16),
                    gmp_init('0x882b42e2e7fec76fd065033254ed94461fabf6a009c7873a519197d4e0d1cfc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cd276d793a2bdff8e2c708627320f124513068bf5da5df02089e66a000e5485', 16),
                    gmp_init('0x6615bdd18b2eaf738d4b34d4552e977f99d0e270b209a4ecca5cf051885fbd7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc15815d449d67ca3df12e2e5d57bef080ff7371901e8d7eea861a50b8045445', 16),
                    gmp_init('0x2f30d60a3ae94115d0a93c3b6663cd28ba3054e43658cea3214f87d54054a206', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfb547cb10019036c5a2e29f0dddbb1f7af2fa25a3c7a78c1fac945711924459', 16),
                    gmp_init('0x9accd2a9ba0f47088b8389ce9dc864cc22af0930e5c031dcfa205e0dcc65fd9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc757eb6b89ae8a9c0d57ba8f4828ef7f882fcade1e9619701e91239cc3857faf', 16),
                    gmp_init('0xf03a59cfcd23ff36257369f208bec61b627d310d101894c101d9db0ca0584ca4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x712022f7ccc4db2495dbc8064a115e2577c2771a47171bac9a8bb3518ef8b517', 16),
                    gmp_init('0xbd578338de4de928ae7101f9b0947541a3603edf3bd79d7748b7df28249da1ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa8063aeadafa0d0f815d409919c02a244faf77e2d8858d10e4d184f5459225d', 16),
                    gmp_init('0xba71f9057c0c069160de220824c425c0a2b6c36d007c59c3a2b7e3b7ece1507', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ceed8ed2c82072e9e5a925f74450f8084b0f39351e015e33c753d59a90bc03e', 16),
                    gmp_init('0xa4276b80e9b9de3ecd850eb7afc7daeb4a1df9cf20d53cd01cb72b8b7ab82adc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x658ca3c59d0257a89e2f69cf862ee0a5aaba9fd4909e61a79679fe9416f0d044', 16),
                    gmp_init('0xae5cc1377aea25460f165d62713bd37655a16763c418ce89add1f32ef7cb872d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x379c749a4539e8ecdd1136e7c4ebbc827bdcddfe7dd10c9a50cd4e3142aa2494', 16),
                    gmp_init('0xa25463848bf9c0313c9c0ef1d6783f111364f6a7b7e856435befa9e8cec86c63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31c94b4aaf91f2bace4c19835d3f305c676af16056561417ab5ac9573696756d', 16),
                    gmp_init('0xf80f884b556e83a9bf4b8b59aaf4160683aedfcae6ad1070abc45e8dde08ae78', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x64587e2335471eb890ee7896d7cfdc866bacbdbd3839317b3436f9b45617e073', 16),
                    gmp_init('0xd99fcdd5bf6902e2ae96dd6447c299a185b90a39133aeab358299e5e9faf6589', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb866d6b142df940f2cf28b54c92f0c1294e0b6a22a91f2ef44bcd88c4384480d', 16),
                    gmp_init('0x1914b0b3426aeb7089a278d7ea9ad7ac24e522804b1d86d60e659b470c4cafa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc477bd55a4203f836a213cfc592a17ac34604c07c004859adf714720e103dd6', 16),
                    gmp_init('0xe31e1e2429a8dd526cbac552c6dea6395d293572c63b44ac639082d8d6f7c343', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec2bb89085de819ec4d9d1646102ba87e2d52ae4ed4fe455d229cda81db20d6c', 16),
                    gmp_init('0xccecc17661e013a1332f66f0650940c633a2364be87efa98a0e99c4d629cf4a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x589db4fe5a6bb8380303b423267bf8e80ac5af1404e634907d0dc3b0d44eab31', 16),
                    gmp_init('0x6255445c108aa2a4f607062024bd90f31f610e552148f8db941aebe751361f6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1d25d51b4558f5fd0ccb8683af9a9cf62a169c691627fa592d80b1836695f94', 16),
                    gmp_init('0x706dda72030e90b1f7bea0ac19aba81760f6f18dab863edca5b7eb9a5ee32736', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1339b337d16e2fa2ea8a1860ad6edb7c42831c1c560336c67bf961729a0c2c41', 16),
                    gmp_init('0x9f9b296362c7ae5ba7a3240fd113a3406b1227f87de923a4185f054ba9f1bc2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71c4a7e389e296ced39d75ef5e545905e50050640f50becf38a60ecb23b09d0f', 16),
                    gmp_init('0x1313fadb737af3ba0af3e0a292f810aa786f2b084a62ffc7637b1f01720ddb62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ff3bba11363cf17cc50329b5001b568a8ddfec832c0cdec3704b1f858fc47af', 16),
                    gmp_init('0x1f6ba7ae8018a629a0bc891b7473446b17a53b1ad18bac297f86164cf9ba43a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc395dc4a5114dc8bcb0f7f003a4d3e938a87a3d78d33864d1dc4cba9e41e20e', 16),
                    gmp_init('0x3866e09108d07d094ceb81a98bddb6d60221475a685e4e2b77ad8cc2e7cf42ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ec670463ceb60bb6141e9395fec7f6100b4293b23d42a990184d60095213775', 16),
                    gmp_init('0x8f58a66fa0da5be306e643415cedee0e71da98a0bccf51e90e010f3e7841ffff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x850f8cc53502ba26a8d1582765b3fdd0b7c30d8e760425e349971018b6f83231', 16),
                    gmp_init('0xbc4a9dbe02a79053d0bf7086b82cc7890a85bfa17722d77f4a031a9d5f2e8373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83de61b441e701bb89dbac3fed95d495ae6aa72fe2b95c2e3cb3ff8d3452abbb', 16),
                    gmp_init('0x32f0e334a34c609fa6bfb6af8c4e1563d79c5f36bbce42918a05176b054eb66e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53fe8af98f9419fb1445bb6a94750d4646be9f37b715576388b11064df2e6ffa', 16),
                    gmp_init('0x9328817e7b5154621640cf6c4464de5c5fb5f8e603bd70c22a1eb37264e92eb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d7663898f50c1db1a8bb5c00f7cd86833ae25b292a17b15e9688c26f59276f1', 16),
                    gmp_init('0xd37669737a187ddb60976e34dad8333ef321982019b1978601e4a65b859cbcb3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8481bde0e4e4d885b3a546d3e549de042f0aa6cea250e7fd358d6c86dd45e458', 16),
                    gmp_init('0x38ee7b8cba5404dd84a25bf39cecb2ca900a79c42b262e556d64b1b59779057e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9629a450bd383a8b9fd43c6cd1d492bf392ed605299561dde54433526ce9f114', 16),
                    gmp_init('0xbf439b280c5fb6d7576befd220cef64db925593e5c56af8dca3972c4a24aa391', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3beaed1e0f518c5f0894e6b05fe00bc811dc13db08d0646b160a0fa4152da17d', 16),
                    gmp_init('0xc3b0d7f55aff7acdfef4a8bebe80e1b554cde77b8dfec416ce704985ecc768d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb73b1c47ef1e4688eb1730da7cc893df1477d747e187e18383d38d9626ca6cc3', 16),
                    gmp_init('0x584315cb294922a90a57d64bbcc805097322a25209757f5afac35d76a54fdba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e73dba0cbdc9d618752dfc039275997e74e3221420311b7234fa17dba4edcc5', 16),
                    gmp_init('0xee0ac1fc49eecc48bea4550888828693278a77da700679037b31f7cdd59da0e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x131641d11d602b14722615253dbcf027a92429a2f7e39a75c1b9ad04d063e1be', 16),
                    gmp_init('0x4c3bda61796039f06a42e30fcdbd2bebbd0faec0f9745b77fdd1ff3e21fec890', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7706dd8937e5b5927627d97eaa47c3100490f5fa329abb31409c4c424a80b979', 16),
                    gmp_init('0x8a02a9827d5bb7147778dd7991ea9c7117fa0a34fd7efe3214cf48104126cfde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedfe16b2db40180311f9892007a2fef7d05b2a3bb676899f9c6e2192d38f93e0', 16),
                    gmp_init('0xee6902f1fca5db3694d74faa4b05d0d25b3d5100c46e227e3d01793de29405ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16d422c5929bc0f80d2f3c7a41f9e06aa45bac29413ef127dcdb9c4b726fe285', 16),
                    gmp_init('0xdf888fa51e22641a8ab7e69a63531b1e93f0c1137364d4233e0ffe6c155b441', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x972cb363f9f30c334927129b35f2e5c6b8b5f624c4c247f15d3132b869e306a5', 16),
                    gmp_init('0xae634704e2df92aa5f9e77fe5bc65079b85702edccad4f35d061fd40b6e86295', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fcc0e47eec76d63aa5a344750f56a9c4e24079f9a60e3aeae310bcabacfa513', 16),
                    gmp_init('0x165dc1a041e35478b48e38754339f9b44bededd16498391875075ba4107afc9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab86c2ad2acfac530fef75adb02ba374ab66930b85e9c78dd12a03527c46e079', 16),
                    gmp_init('0x1209c286019f29abcf5c46d4d73200c9ce7728e84850d7c0ec428bc17636ffe1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc12b9073ad6cb8a17306430435caa386a50a6089b26b771721a2707cfedc69b2', 16),
                    gmp_init('0x3173c43fe534cdf1d9772dc89f894976b8ee1dbe3d27b2a0032ae9b020dd41dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6701c110c2da3b01ba1bd2179a116687ae684eb76472760d3ec7bce9e341142', 16),
                    gmp_init('0x2a020eb38d6cdd9952f869bbde19f5a15d07fcba5bc9be578924c6159e0f4dad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd059bf85dc327a8fa3f3e931312ca73e8a14886f8b107197ab6f585df961fe4d', 16),
                    gmp_init('0x45107a60c08b525e3fe0765dc84955b4fd388ba1f4dab64cb9935b066ae823c2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13464a57a78102aa62b6979ae817f4637ffcfed3c4b1ce30bcd6303f6caf666b', 16),
                    gmp_init('0x69be159004614580ef7e433453ccb0ca48f300a81d0942e13f495a907f6ecc27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb3cf8f532245362ec05c88c85fe12d19182be7dceabe577c75849c6065084ae', 16),
                    gmp_init('0xc833c78222d9d70043fe63dcefdca4a1f52b45c5e7dbd2a66f67c1fff96b9480', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdde9d514dd9ee6962c6ed6b2bf05b5cfddea171b94fc9aebf216b2098eca5f51', 16),
                    gmp_init('0xb84e69133ce28111d891f34b0a7f8f0950feebe8de89571f9ad69a73d0c638f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbdf1a67d092d99974f7a60f2184519b2a576fcf984a201d9f8e5bcbcc2e9a5d0', 16),
                    gmp_init('0x4095902bab65a1aaa80be54a86bf7baaa6280b61e5626461cdb4f7018562ff7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd1a6210236993736e9f406eb1204b179aed513e20ad46ec2f906b05999c88e4', 16),
                    gmp_init('0x1ac97b54b9c8c20bfb13c06954977782dc6b71d495cc00f299c8c916595bc8df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd538cb1dbb0f4c8d5c454f68a28da59a345758924a4d6f01ccc6a55a09b0cca', 16),
                    gmp_init('0xc8196bac7a3ec110cb0a8d5c40eed7cf8534cd99d89134c9731b147e0c929e05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ee48531d8c296b9f13ffce4f2c86dc7cf2da5738d892d68bd515b5b5f8018ce', 16),
                    gmp_init('0xb68f9ed4810bf8b5fc7b4408d0c7c5e671074971b4e806013c35a61b1e48381f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68856a6eddc4ec29cd5be267b64483b48c3b4196477da62abde5fc173b27e771', 16),
                    gmp_init('0x77a33df14f79a1fb13b6fd49c19f7b4a331d22f293b0733a6118d62a07bbdab6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd76cc9c34c400dbff5e314c55b8c070cba05795094392f702852e91f1473678', 16),
                    gmp_init('0xf2046543787143dae0fee0a73d032cd660628eee1401c8437e164eea8d144f4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cd5d8cfb9e9c7b880e44d99bf1aded2e8b9c60fed7b8366b5f00532cee66b24', 16),
                    gmp_init('0x576eae82deb94b559fe4e8c39cd6d103ca61e45e12d2faed221efdbaf40932fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85a2aba33123b40219e6ce8274b4ea212c691e44f197546edf00b7148d7a2193', 16),
                    gmp_init('0x9c129857eb2b0516d82c6082d1cc029fe1c6dadf9c3b12427f0c83d4b0cdcf3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc352d50f8828f7b25ac6047270ea2107d3a0f2568536c4d56ae303ceedd7e577', 16),
                    gmp_init('0xbe772838ba76b9b96abd53145bce79fb00a8abb2b61217063ca4ff88f8d9b570', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd25ddbfc73cffe74440b6d6c5783650f35ae8dd019e03b0535b0305b377568b0', 16),
                    gmp_init('0x7a3aff7593f848938beaef74cde7d92b832273881e3c3f0060a13926df39929c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6914e86b0a43a9fe086de71ab635e9ea85051f56ff5fe71a33563e81e712536', 16),
                    gmp_init('0x2b7e792852d9bd0527d8aceae5ac28c0896c226b0af7a9da2a247713801128f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4581353143e94a7255f07e9a97aac805641ab5f7fa0ffa3855fe5118a71d7c13', 16),
                    gmp_init('0x9f5858ec14979ad8b57f50f177dd69c97020065542bd96b99638bc553aff63cf', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbc4a9df5b713fe2e9aef430bcc1dc97a0cd9ccede2f28588cada3a0d2d83f366', 16),
                    gmp_init('0xd3a81ca6e785c06383937adf4b798caa6e8a9fbfa547b16d758d666581f33c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda433d5e11ceccc0abc5c7626ce7bab42e89b221f785c409282de545f3fceb19', 16),
                    gmp_init('0xe498dbd321a810301debbdc4af95e5218e77fc2d9227b277684e7120a6f5cc64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39d7349d9331b378d3c725dbab0015347295f18eda146a66b06a2e32f712be3c', 16),
                    gmp_init('0x8f929b4f56ef3bf7fb127554c66812e8ef5ef7a5eca41644cc3019f41c6ff65c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31e8e1ee9e8c7ec1c1c116981c16efdbcc4838a72207e0654de275c5acf692a', 16),
                    gmp_init('0xad7e7f5b465b353dd9d0970290d6743b70649827c5bf73b09cc2a84eb16f667a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0cba617f7dc1dd09e51cd6c2995af26c699723994f82e035aae4fbcdf77f22b', 16),
                    gmp_init('0x1a25ab4313f9df989ef326c36516d04004f18c7e90a095661fc8e2c75909a03c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4319cc90f3e0d3b313626ae5385796bc49b300c88ba4553dec0aa4a77829372', 16),
                    gmp_init('0x4707d4499a6f502bffb7afe09c21c5a2707b1215ca3e11bb7729ccc00add5427', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x381d7ab9db2154d321d170e8d87268ed8d6bfe235bd1f47658acdcd4c6509c12', 16),
                    gmp_init('0xa47aab5b7fda3da9eb5d24573a6581e7205828586ce6eaf754642a8e2eb46102', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9878607a88d61155d3e00d862657f73e9c9bf363fc7a91592bbd7ff81f488b6', 16),
                    gmp_init('0xd181a1abd58895d61c063e7c82157c2239d0f01964ad5c6d495a7bbb031dab1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa703f05467ab87e64793b73e694c8a53f69956a5a063bce48db3b4d6384fe955', 16),
                    gmp_init('0xd500f935a2b047adc0ea792d6b19199b539e1629c597277fa26b2efbd61344bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x331924c750b3417e48e279ff6ed7f3dcba2e121e9f69f8fbe64093b6c38a8cc6', 16),
                    gmp_init('0xca8f79411b33f0182ba5b601be2ffb317fb99e9ace9e9b54c4e8e0fb46587810', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73c6b3c5aad550d746c6ad0d7053a03f1b7e4563a2f3211d3499656c06eace58', 16),
                    gmp_init('0x3a2fb4a4733a4f741ba90991366d91c6aa6a878dbbb8d2917170a9172af8654e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcdcb12d7119d337a9ecc32447fd43761d6fa5689dcd83c3df4bf1126cdcbcb9e', 16),
                    gmp_init('0xe699e2e17bb9f11fbfefbea096de9949a199af24358df340a08a585ac961cfd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc627f3e7506d47fda1d00d3a1c0eddb8de71b3a9b95aaf2054b388bf00181d5e', 16),
                    gmp_init('0xd78f9dd71e442a63b2d6960138a1f7d68ef6b00549cbe2c3927900a6369f886d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6ed5e6328ec31b13704110842d4ac23fbb883bb349d88db1d747cf7325fe9cc', 16),
                    gmp_init('0xde47405b49d7f8302932ee125c7f7b2a844f972b60f22cf10c0bce1c4a8fd94b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb88fabe0edfd233fa25f40a6f06de53a047958f28a4847f34e28d9fb7828b16', 16),
                    gmp_init('0xb73676b304f5e8dd345dc59601159163ec4a8174e3a1e969c51473a20aea5df7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8c28a97bf8298bc0d23d8c749452a32e694b65e30a9472a3954ab30fe5324caa', 16),
                    gmp_init('0x40a30463a3305193378fedf31f7cc0eb7ae784f0451cb9459e71dc73cbef9482', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab1ac1872a38a2f196bed5a6047f0da2c8130fe8de49fc4d5dfb201f7611d8e2', 16),
                    gmp_init('0x13f4a37a324d17a1e9aa5f39db6a42b6f7ef93d33e1e545f01a581f3c429d15b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9729247032c0dfcf45b4841fcd72f6e9a2422631fc3466cf863e87154754dd40', 16),
                    gmp_init('0x91d1a244265fea1dcd15c75dcbd4df3690dae85255acaf49384b492f2aa36143', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2564fe9b5beef82d3703a607253f31ef8ea1b365772df434226aee642651b3fa', 16),
                    gmp_init('0x8ad9f7a60678389095fa14ae1203925f14f37dab6b79816edb82e6a301e5122d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89637f97580a796e050791ad5a2f27af1803645d95df021a3c2d82eb8c2ca7ff', 16),
                    gmp_init('0x2d1fe1248c888424d57b9cf154357489f87bc6a38e42eab7bed415e170493e68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71efa4e26a4179e112860b88fc98658a4bdbc59c7ab6d4f8057c35330c7a89ee', 16),
                    gmp_init('0x145fa81f8bb624ae9efb2c32b17294a22aaafab88e5e9a0b4f489329c1366a2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x308138e71be25e092fdc9da03d5357421bc7280356a1381a6186d63a0ca8dd7f', 16),
                    gmp_init('0x28d1e2d28828fc925e39ec45d1408e18c8165646434ad915e415f2478a92c7f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff3d6136ffac5b0cbfc6c5c0c30dc01a7ea3d56c20bd3103b178e3d3ae180068', 16),
                    gmp_init('0x133239be84e4000e40d0372cdd96adc1547676f24001f5e670a6bb6e188c6077', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x575fc4e82a6deb65d1e5750c85b6862f6ec009281992e206c0dcc568866a3fb1', 16),
                    gmp_init('0x6f6edb9042a6fca2d671dbc2978e87daed33b573c6a3af2f09b8e90a902655ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fa915480bab8ad2531e342ba43555e7df45e17583998ad4954e7fdcbd21250a', 16),
                    gmp_init('0xbf9b66905499b030cf5bdf9603bb127c2e45e55a032b5fb791c86c02faa76731', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5ec9036b64eab7a227f26f81eea2a8fda253bbbce20102921b6a8a4790117df', 16),
                    gmp_init('0xb79dc6625ec140400c597983ad1fa0f71c8461f05614a363d8128133f86462fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52045bcc58e07124a375ea004b3508ac80e625da2106c74f5cb023498de0545f', 16),
                    gmp_init('0x1b3f31fcebe3123ad430ed9c20ce312b793b9d0f2a8fdaf236ea34c0506c3d91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa153dfe913310b0949de7976146349b95a398cb0de1047290b0f975c172ad712', 16),
                    gmp_init('0xfd94d8413fb05b2fc48318d5f1f1b89abd053f285af0b329c8a5f6538d48fdd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58b5436ebe472fdb80162c8d237603635de47b95e5e5b38a89f13d0c3220479f', 16),
                    gmp_init('0x85d7b6b055cd672c4e2913a252f6de8396af27c4829bb34144a7375e567db17a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a541ac6af794615935c34d088edc824c4433a83bdb5a781030c370111cf5b3a', 16),
                    gmp_init('0xb66148c1cb106ab7cafe1af3688f475f5548fee2521ea52d63f5575f36a44ae4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8ea9666139527a8c1dd94ce4f071fd23c8b350c5a4bb33748c4ba111faccae0', 16),
                    gmp_init('0x620efabbc8ee2782e24e7c0cfb95c5d735b783be9cf0f8e955af34a30e62b945', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc25f637176220cd9f3a66df315559d8263cf2a23a4ab5ab9a293131da190b632', 16),
                    gmp_init('0x53154fede94d2873989049903809d7980a9f04ff9e027a1d6eebf3d6fc9590cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x383b24fbea14253ac37b0d421263b716a34192516ea0837021a40b5966a06f5e', 16),
                    gmp_init('0x54cf706ac4edba2044cf566d54ea5a19e8f6ae74bb8c2b04089f4786d3c6e772', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a9e8dfe3cce6bab3e82d82a5688544c0c7b55dc31978b4de2ccb3b7d466d561', 16),
                    gmp_init('0x1dfeda5c16e651fbac7b5ad608b96cf5e01eaec17a02182f96ccf5252e76373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe68432d03e02ed6d789e59c6b60d790c2b0d1ce336838195c7975c1d4638a136', 16),
                    gmp_init('0xca5be41398e35a6624d2a7303a01e6472e09e3ebdb357336aafd18108c6c2584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95e62d4292e46218bd49e4c992ff998068114a105c1dc6c02139b408dbcf2dce', 16),
                    gmp_init('0x6b68184296c2875183a26e2b428d52e5e7b30603704d20e62bddfdf58c86594', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x395dd559e2fe5c2a0eefbdece7306e7fb472985f391bd6807ce87c4416e8c10c', 16),
                    gmp_init('0xfd62dcd4b4592ac5d0413e87affa4e274c909c04dc66922cbc3d6d9305fe638e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb23790a42be63e1b251ad6c94fdef07271ec0aada31db6c3e8bd32043f8be384', 16),
                    gmp_init('0xfc6b694919d55edbe8d50f88aa81f94517f004f4149ecb58d10a473deb19880e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a514adc35525dcb9f6eed5beee264800858fc7506f93c8f51664db20d6c14ef', 16),
                    gmp_init('0x56edd1fed152e4d8e897f0b94c8f5c3729beaef72aa6e24f7ad3e1870b3fbd13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2113bcb7b4aefed1ee215aa8ae6818127ed7091c8d59c2dff9f053d097ec94b', 16),
                    gmp_init('0x93be9e7399e8ee73105a0b53454cb4eb0943220b2357d0fdbd5fbffc687831ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee1fd584325d90d8ea8ef3bf4908f235a991077544021524a9463d04f6d65eb', 16),
                    gmp_init('0xbb692891bdd6c73c1cfab9fc4f42fcfaca32f4e9863582b11e036b925d22941c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71e935c8e1f54f25a6424274ab07e7891873c3b1a27a6c40b805264597a6257f', 16),
                    gmp_init('0x78d93e59f47c22513ded86ba47ae2a52ef2523540cf70f7a5b217461d1b1e582', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15515634d38faaa8bc058fd0d883357d617e8b6c8dca20191f1950ef0e36cb44', 16),
                    gmp_init('0xab4fffc755575215e370e3f0b463205da8c37175f020c1e5329af4651f495a68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabc451ca4ee795cac52f8be79ee2c46139e015762bb13bacbf08472479ca950e', 16),
                    gmp_init('0xae2718befe820a59db1dfb80c2c9145652684000cea553ec07ce7d8c9a9490d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bc6bc6446bf520136358eb0958dc4aa9e733164dd2d62e151f946107427bacc', 16),
                    gmp_init('0x8e305cc07176c305cdb62ee226d6c02bd71b75a5228beb4714c33fd5ead6fda6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
