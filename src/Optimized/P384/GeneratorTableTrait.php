<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\P384;

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
                    gmp_init('0xaa87ca22be8b05378eb1c71ef320ad746e1d3b628ba79b9859f741e082542a385502f25dbf55296c3a545e3872760ab7', 16),
                    gmp_init('0x3617de4a96262c6f5d9e98bf9292dc29f8f41dbd289a147ce9da3113b5f0b8c00a60b1ce1d7e819d7a431d7c90ea0e5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d999057ba3d2d969260045c55b97f089025959a6f434d651d207d19fb96e9e4fe0e86ebe0e64f85b96a9c75295df61', 16),
                    gmp_init('0x8e80f1fa5b1b3cedb7bfe8dffd6dba74b275d875bc6cc43e904e505f256ab4255ffd43e94d39e22d61501e700a940e80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77a41d4606ffa1464793c7e5fdc7d98cb9d3910202dcd06bea4f240d3566da6b408bbae5026580d02d7e5c70500c831', 16),
                    gmp_init('0xc995f7ca0b0c42837d0bbe9602a9fc998520b41c85115aa5f7684c0edc111eacc24abd6be4b5d298b65f28600a2f1df1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x138251cd52ac9298c1c8aad977321deb97e709bd0b4ca0aca55dc8ad51dcfc9d1589a1597e3a5120e1efd631c63e1835', 16),
                    gmp_init('0xcacae29869a62e1631e8a28181ab56616dc45d918abc09f3ab0e63cf792aa4dced7387be37bba569549f1c02b270ed67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11de24a2c251c777573cac5ea025e467f208e51dbff98fc54f6661cbe56583b037882f4a1ca297e60abcdbc3836d84bc', 16),
                    gmp_init('0x8fa696c77440f92d0f5837e90a00e7c5284b447754d5dee88c986533b6901aeb3177686d0ae8fb33184414abe6c1713a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x627be1acd064d2b2226fe0d26f2d15d3c33ebcbb7f0f5da51cbd41f26257383021317d7202ff30e50937f0854e35c5df', 16),
                    gmp_init('0x9766a4cb3f8b1c21be6dda6c14f1575b2c95352644f774c99864f613715441604c45b8d84e165311733a408d3f0f934', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x283c1d7365ce4788f29f8ebf234edffead6fe997fbea5ffa2d58cc9dfa7b1c508b05526f55b9ebb2040f05b48fb6d0e1', 16),
                    gmp_init('0x9475c99061e41b88ba52efdb8c1690471a61d867ed799729d9c92cd01dbd225630d84ede32a78f9e64664cdac512ef8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1692778ea596e0be75114297a6fa383445bf227fbe58190a900c3c73256f11fb5a3258d6f403d5ece6e9b269d822c87d', 16),
                    gmp_init('0xdcd2365700d4106a835388ba3db8fd0e22554adc6d521cd4bd1c30c2ec0eec196bade1e9cdd1708d6f6abfa4022b0ad2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f0a39a4049bcb3ef1bf29b8b025b78f2216f7291e6fd3bac6cb1ee285fb6e21c388528bfee2b9535c55e4461079118b', 16),
                    gmp_init('0x62c77e1438b601d6452c4a5322c3a9799a9b3d7ca3c400c6b7678854aed9b3029e743efedfd51b68262da4f9ac664af8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa669c5563bd67eec678d29d6ef4fde864f372d90b79b9e88931d5c29291238cced8e85ab507bf91aa9cb2d13186658fb', 16),
                    gmp_init('0xa988b72ae7c1279f22d9083db5f0ecddf70119550c183c31c502df78c3b705a8296d8195248288d997784f6ab73a21dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99056e27da7b998da1eeec2904816c57fe935ed5837c37456c9fd14892d3f8c4749b66e3afb81d626356f3b55b4ddd8', 16),
                    gmp_init('0x2e4c0c234e30ab96688505544ac5e0396fc4eed8dfc363fd43ff93f41b52a3255466d51263aaff357d5dba8138c5e0bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x952a7a349bd49289ab3ac421dcf683d08c2ed5e41f6d0e21648af2691a481406da4a5e22da817cb466da2ea77d2a7022', 16),
                    gmp_init('0xa0320faf84b5bc0563052deae6f66f2e09fb8036ce18a0ebb9028b096196b50d031aa64589743e229ef6bacce21bd16e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa567ba97b67aea5bafdaf5002ffcc6ab9632bff9f01f873f6267bcd1f0f11c139ee5f441abd99f1baaf1ca1e3b5cbce7', 16),
                    gmp_init('0xde1b38b3989f3318644e4147af164ecc5185595046932ec086329be057857d66776bcb8272218a7d6423a12736f429cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8c8f94d44fbc2396bbeac481b89d2b0877b1dffd23e7dc95de541eb651cca2c41aba24dbc02de6637209accf0f59ea0', 16),
                    gmp_init('0x891ae44356fc8ae0932bcbf6de52c8a933b86191e7728d79c8319413a09d0f48fc468ba05509de22d7ee5c9e1b67b888', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3d13fc8b32b01058cc15c11d813525522a94156fff01c205b21f9f7da7c4e9ca849557a10b6383b4b88701a9606860b', 16),
                    gmp_init('0x152919e7df9162a61b049b2536164b1beebac4a11d749af484d1114373dfbfd9838d24f8b284af50985d588d33f7bd62', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd5d89c3b5282369c5fbd88e2b231511a6b80dff0e5152cf6a464fa9428a8583bac8ebc773d157811a462b892401dafcf', 16),
                    gmp_init('0xd815229de12906d241816d5e9a9448f1d41d4fc40e2a3bdb9caba57e440a7abad1210cb8f49bf2236822b755ebab3673', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f7356c5e0fbc6678bab99df1fd9b2b49f81618d6d99af63612ccf2cc4acaf5c44819b88e217ecd3cce82fe55ff86ed6', 16),
                    gmp_init('0xe003b31de2050a4a43d1a5fb9b4ca6622bc55e5de0c3e6f2ea6b40995968c751c75d1513aa614bc253ee2ce86961877b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb967d99bfe2cdfec7d895a5b4edde398642eb77303050301fcabe3798c46ace66629c442ca537cc68701396222c0089', 16),
                    gmp_init('0xe93e5d26e4de442a3f23a7177d6419daa55a0fc9db0ff8a6ac1b2a2b31a411ef40d943c576799210792d6a2f8cb58f46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1e179aa178a780046e35841766073612ea5e5abd26608f259a599fc9a8425a3ea639d94cbe63fde1d69c70f9327605f', 16),
                    gmp_init('0xc3842f6e4dbca6d609ba6171650371b2adc07640a2420eabf7e8291eafa21b56eef31860c20ddeb88b45f0b4856f8ea5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf645a075a1ef7e47d8c2865d585ecabb71d07be36948be783752120d89354c00552c1cf03c61194d4ba1616d722e90b9', 16),
                    gmp_init('0x683505d428b95f4f15351855b01f01b6637013068f204cf9c52a5256dcf449dd0a99f07b45c59079bfa21a819faf6a32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfd801ad6a376d9a472531fcb6656c267feddc9296c17366a3c96affbd00f0adc0d8f0dce3e120b9480baf95df631f31', 16),
                    gmp_init('0x65d6edc632c2857da807195a5c1ac4e92328ce3aac5ffa46d69435774dd05492cf6188532493771e648acf513a27a7d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26e8f920f1394a13a6041f77e56a43d0998c7e697e32b4c945266cbc4725382f71bde88bad3b4a1cd0b9de6bd5517888', 16),
                    gmp_init('0x3fb983f5d26440139f36cbf88811cf3c8d5481259e500f9ae4a4df00e21fe6fc6308aaff3bf944eb25b7369e2e378f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79da1e5e28977552a26882916cf3ce49e82fa56f53e2d9d979df1c9778d6d1606c157d3bb68665089bdd08caecd5d092', 16),
                    gmp_init('0x57a8e52c2d2b9c5d7c6a5afb8b099d076e16e4dc839f861cb157aaccd72eb9eb96d0202bef0ac83965e76ee7f82499f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7038c76addbb15f63b74c7d5bfb7b05e2bd2665266f332adc80a4fa7fd5ab1c1c438f0e69b1394fadaa339252801be3', 16),
                    gmp_init('0x61aa2b57307ffee014c2762f367a5a8e5d0eb735f62c57f02029da025b31f08a48b2053d5f1c77337fc86c720aa9048a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc9893654d3ff009a330f281a9f3cb9eaedaeda2415fedf1ed85ff25982c132633068b3deea1d9ea9a413941bab189e3', 16),
                    gmp_init('0xcdcb2d488894c84f595a15e6eff71015c8e078f7add781a36a5a68fc2521f84de99506ea570abaabada2775f2febc9f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd03aa748f5f48eb3e0c54b683f25d2e2d7d7e3201282a95b57a59ffb8f94cf4c43b1107ca944b9211c351112de16ed18', 16),
                    gmp_init('0xa08c602dc5e0031dad088c19305f6b252a2bc3f245f7a5b80b484c7b99f6981c32374c714a7683255f5331f66bb06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3589f99e1a251357cc0812bd76fe41b9c1f2545586167246040a00be0e78dbdd430fea946375a1a29db4e413152f9349', 16),
                    gmp_init('0xb416706e879bba6f71be5081c5624078ed9b44a4a9c8e05f48e04d2d245d0de18971eefcec8bcd73497dca9ef939eb7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa25a03cce63ac0bc9632710b4486e8d99e72562ca0aa1adee66ac31f9f4c791364441bffa31d8c7439669b08314e8737', 16),
                    gmp_init('0xe66bb49c68436bb7f23f9dc3018d340e8c49d66e4fe23644c4983a80dd91de677711ea76708465006d6dfaabffd7a99a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xded56a5bd7b89914591611986873181237cca44b8b69265b0edc18f78c239705d5570aedacb721ae96705588dbb872d2', 16),
                    gmp_init('0xa60f11a6bbc91bed31bdcce8aeebeb4e30eb617210a273d7ea426c809b877d8c6a25b0f4896d3dc6dac9d71aee6d6138', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35638c340c71a01e25b803481459285cc5f7e3c36768f2da4676c6556ff1600d2bd69b3bbfb3126deb29170ecdc2c8fc', 16),
                    gmp_init('0xf9a36eae6e49f6fd5d4e044730ca0f407ad54c03542b170c4411835a8692f87f529276de4a8807dae11e6c0fee29bdd6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x21a4f5d369269255deda6f0636c5018ab3f2467a351bc35ea2193f92a7dffdedb8e0f03cead4d0dcbd5ea78776ead2e4', 16),
                    gmp_init('0x3884923650514591e9a595ae828d35e0d78d4d860372df0c6a6a72aa967f587edd574f9cbc926b834a0ab4d409ea07cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa42feaf75113b9b74de9e043a2b213ebd69fc19d718ecc0571533f55ab413cce8bfe43551349b6e4bbcf5bfd2b95e4b', 16),
                    gmp_init('0x798ad0576904030a40b275b835e76ab9175bf2d5e013e684f78601bf6d1cdfa1f0553fa5a80ce91dabe51296c4bc5137', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6df9f50fb783ff536076f98dec59b334175568f65e82eafd1f32503203fdfb69dee8d7087cd1351c37e0c245d2200e52', 16),
                    gmp_init('0x3e38931e0f49cb0566470233153d2350181daffd56523bf122ede35f2c43f33766836345f491048d7b33e8889bad7404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b5278c05f0dfce2ae476d29467c3bff7b4edf8a0a120b84400f88bf17678598a1d000f8db51c149ea4322e0d779e702', 16),
                    gmp_init('0x497e45e2747b108795cca3cfe2c7d9e377494933762390f609c720007625521fae41d7bd67cafaf09c2ce6b2d2715150', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a119bc8f901ef7b10579a7812f98fa2cd8f23cbd6ec8d0879e9e9610285a2d80306ce7d72b2d31d54f95f24f400e78a', 16),
                    gmp_init('0x52f10f4ef6244cdf9f8e48214dc91539ae579e88cc0ff39d1285274b9d8fb83d829756d8435f9ec24ef87cada4fff62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc17646121e6c5060efd3a818d61a754991719e0fb79e3d93cd8563fe5d538c0ed3c18fab32806f510f27e42228aebf62', 16),
                    gmp_init('0xe3240e9dc3c2e3b3061a76b76a7bcd1dfe530a9baf28cf0bf78c8a5b0407252ebdb8bc00266a899c73d89c9c15381675', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x533b2e620c5a9b83c953d265b486d71ca8d503472a493891d7bc200669cdb1a216c2938454a40bda6fc967c799f68d7a', 16),
                    gmp_init('0x2ffef6f4633d93c6eb818b8d01d259e48ab7ef8ea4ea2fed5af64fab951d12bf8e1cb5ddfcc63995a678328995aaa767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x298b8179063d9a714deb02729a066e64a5abad7dbdca717f07216ada61fca10951c48db0a44d9d6b8913a117388408ce', 16),
                    gmp_init('0xfcf63e77d4c85682e610d9f066810e1db554da340064532b7dca4c7c695890d23f609b9d648d5ce1f620effa9b92f017', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35758c50b737fb0b3229b8f7cfe6bb918ccccb04fa7c943dc64a144d349875be9684c34597624439564051f7203d6474', 16),
                    gmp_init('0xb4c31ec0ef82a76b4c61e5f95421ab6c4ab7e91ae986a17b6128a6bd78f77c22c232c7af341beecc50f443ec49df459e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3b7b1f5f5a8159c0732939a02104717ab56ee62875ef541db2fa1bfa23e0cda333d1bd2057df20d02d3b79f4201f17', 16),
                    gmp_init('0x7d0f40984cacc934be5d6a745cda90d4867db0177852cdf9a5cc5434e20d82e13317e918334b95477a9dea34210d584b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6129cde5b08acd0e6f80a32e9dfada9487d77e6fd9b636cb6c8d883e42eb3868920bcc93ba0160bd26cc551c30501e8c', 16),
                    gmp_init('0x987ef71374f984ef054a87a8dcd946dc6056176bef85f69349812554ed406a009575699474a46d4b138c9f2672f12cab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64dfeaa4ac962a71d47176219c5ea7fbf159698d7cf42c3c8a05d2173ecbff0d47d7530a2a9991ebc1add8aa8113d8f0', 16),
                    gmp_init('0xd2b186a9e7d2e6949409667082e2ad8cea06b053fc3ec059b0d56bd77a8359e792ca20ae710da0f5055e4e0ee0b5f811', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83c7ab3a1d9815d4c5a30f67dfa714df674320c5f83ec8c0bb891a5af93dba1203184459e7fc5f478455a179414a73c7', 16),
                    gmp_init('0xa7307eeb835c9165cb71572735a998b035499715abc9aef340f4b3ae43eb65bfb18e3fede889d3cbde96852900531f4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e10357bdae4844e059c6f5c3c22b818023c6adea8f8799cd563bbf8fbc71ec1a91adf797035c4e0945ce387416e1591', 16),
                    gmp_init('0x29f0ea91d7af79022d3d6da4088d4b2790bfb5328ce4474b68fc364db11269878e3052ee22797eb7ac3883224c914880', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6629b6b105580c8ee7eac5c9fa1aa527209f4bf1bfb415ab3e5f29c828363fa845791b0fe725a39e3bbb17ea1ecab0a0', 16),
                    gmp_init('0xcb01b8a94984dae1acc6b649eeb633e5601aa690ddf7e39ef77bfb79a11b0ec43a6ccfd398dda0e0b1da3305c949ce19', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb251813991dc62be679662c03461d3475cc7168a6c27f447a7a882f95d1f591a8d8e5a4c1873b2bb00e8105825adc9ec', 16),
                    gmp_init('0xa89fbdb7f910c2d5242dc35ab01bee251a479632abedb90eb0b25e1f4f79204a6e5f2be81708eedf7958b510e701e4d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa14bdd8290ee7049ee4863b8a834d276b1d53c2cdb0fe66f06d76d643ad10d716be4fcbf4c8a33b2a105913d56e39561', 16),
                    gmp_init('0x8c7c4cecbc5c1b3f258b28d91b37fd53c63eed04320d54529ee9be704bb128741ddeaf12234df738ad42b03621be6ba9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4648d7c7ef2dffda183fceb96c13ac654f5dc252a6b35c5092b08220742c59db8dfc019e426a10b826e27bd4d25c424', 16),
                    gmp_init('0x978a4cefb0e5ac72c96a5bfd3908604728c50b232498e2c28f88d8ad64faa491703f7dcf4a08e8e52259355a7f359e09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad8aaa7a7a3712afffe63565ec4d34147f6349d91161a482ae75918a2c0fac02311a08d3460708de327db3e3fbd684c3', 16),
                    gmp_init('0xc465c8b2be2e545f7b67b2f9d0b0e20b3ce66a2a812cbc1fd538d27970460778dda01f09c902c68ec63aae6b4c4e0fcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x730ce010e1f4c2949b23af4172b7da8618bfc6cf65656e7190ce2a50b19c17c73d5c84288190c68b84a1ec5e02036854', 16),
                    gmp_init('0x22d51f3c9e7a229e7adf96f3e5c1a5e95d09402a5c970a6301ad37b92312bf475765ac386c9b9142a200502731ca4716', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71f17f4b0cbdd698249416b10a26f3594ab82398ba20fd89ab5308058289719dda8340e9293dcea488bec014248e6f23', 16),
                    gmp_init('0x7cc3238346f77b5b4bb9b8f4170ee9df09e8cba44c3e6a9f592ee99973b3fe328da2b65c086ad99b7af4784a274d54ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa52822e30cbfd908467416ba6c0a8d3f91164ef88aa6b056350d1199935becca6e91de75e8eb972bab061418ee22164b', 16),
                    gmp_init('0x4ce39ab5f5e9ab3a9ec67c8e7804a96f73047fdaf61e479fe2373ea166436e52901192ea13f4afe598c18ec766c8e8d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a557a974d1fa3222045d0766f61f549efa237f7e6516f2c0f233093e7e26891e329cea21d4e8a322127dde075d5c4b0', 16),
                    gmp_init('0xfe8c04ae4d2e1e0c6c4bd55c18e98e4cbb8b410e296c9e9a7932eb342d4d210715342a079b08d99d1d7ecaed53c7cfbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cfcdf91799bbda32469fba415b424762b7268a3cd27b6672f649b004ece88ad3c127804cc1b97a72cfbcdd05419be5', 16),
                    gmp_init('0xb73a10802bbce595d49af0ebba02c4abe0cdb5e785449764d56b8310fb96c12b1b9602f5d9e8cc5c37f2d1ec46383a5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeea639c62fc1da7e30c2d84f02cf9ea50926808bc27f1c974d09807696dba80a1143abad31e33d4c26264d2424a41ad0', 16),
                    gmp_init('0x83d8b8725fdd109fa5da34ac75d7c212c740e2332581304914655936ccba50ce4cda8a126b34ae0bf503786c029f2c57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1e6d8b4f3465d26de55edcb30cb7fa539ec91b95d96013c04ce0c5d0afce29e663a09d31b9c21ec61aed0446cdb67a9', 16),
                    gmp_init('0xca2ff02a321e797972bd929d58dbe7ba6af0f7ff66e1806be427f1b5c7967cfbc6292f605d1f7fb6e37936837cbb6cdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa86b6130aca9f45085d1205ae384f91e2f1d666face0e8cd42ae4e75846f66145df21d5dbacaf5016a8320b0ab9dd5af', 16),
                    gmp_init('0x9b6ce88a47fc69bdf13070f263c0ac21158fce40131194ab9f0f184a6f43101068506d266a99e193cf7d000665fbc243', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c873339a0117b21e92f6df9d0d38f51e731c6fff1ece3b909976865f5381e3cb50c81d194a6764360cb3b13b6fc9676', 16),
                    gmp_init('0xd44986d42233edfd724aac6ca37af77b8d10bbb1e38d4be8eb587f6c5adc0885e3186df6efb6bcfe9712355069415daa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b100452c043a445ca9bd927dfe01959420f559e6b1c0944a79f7a8cc72c30e2ec3329e4adc33de652406cf87cdb6c4d', 16),
                    gmp_init('0xf5ffe18ccbf680d31770c32271752476303de473c28149791af401a71521a4bfede0dd7b06255131bc611e8a52769cd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a4804b0d85a12254830ad18c83af63d212ed54d4e8dcd5120207d26ac11ad6bc48daca80256fdb25f18fa39b2b2b84', 16),
                    gmp_init('0xe99fcc3ced1e052b3db749e4bba9213e18b5a95f6e1d239200e409215ec687747028a73ad37f047e3ee000fa3492834f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13ee2f3c97b96d3f517356192bf6a67980bf2bf960a1e9a4399186afe7e9f447991daeaf210005fb7b5f7103450dcda4', 16),
                    gmp_init('0x4c1548bc5c11ea0770f25a5e9cbedc045b0af9b4f55e10eec0a1437b4d1751ada1ce495fe6860a4b3cb0f721220244b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7537fb3f9fac412d6f59f0d7421ba6d5d26fdc9a8416a886c2ff9583f90fcdc09c2bdc4a6cb303f5d79f493c2458e73f', 16),
                    gmp_init('0x9843123578d24514038ae226f03a52456ca17052df5c24a993bf861ca846f902f61b69536a5d17be4362a6438e9aa5ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6218bbe22a1d71f3d0c55e3a8eb418715737b2f617ba4cbea1ee5c2d60b6f0eca183f07e74bf56b668417504b8b665a1', 16),
                    gmp_init('0x521772025c1221edc7123d766836a0b4fa9deab7d5ceb5dc8dfe5403977476ee8b7a2b887411fbd85dc961dd2e431b8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3081c294261632251242086943eede1604cd923f55f23a8fd92c7958b3d9673abbac8102999361286e37e0d269c85ecb', 16),
                    gmp_init('0xdc36448d686a279afaf751889959fbf34b21e0d3ae1da09d227569fc82773c061a27271a255c8d9331db5e857e414e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7d93ab64c2bc1c5cdbc35c1b5d7928e0041b5949e8281178abcf8262d29930b45b5967eab675612661aebec1e2017b7', 16),
                    gmp_init('0xbe24a58e7fe694b7ba70b2e036da27a83e85fc9e86be2a07f767bba69a90044b0340a4f50f75ef4d5855243d023f9a38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb80b971e16317a4140281cc6e6021821b467e3bed502fbb92cd825e18511ae335936f3fd44662973432fd701e0c26c4', 16),
                    gmp_init('0xa83651e91f2347c5f5d4e784534c86341167cbd1c75f8f5832217825a3e0bd526212c371f43a3842babdf5945834034', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9530cf6c29afa3a706f67c17ba489a17a98610b43f7f43ca5ae5330add2b17872e2a45fb5a689dcc6e2549a533d7f511', 16),
                    gmp_init('0x27d4a1127b5ab8ddd442e44cca39db5c544c3f8c474d66902cb980da7e50060fb239100cc1566a85695b73a884ec5b5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8a919a7ea65beed072eec3b2a2c2457175b8ad54250941e770d4f6f8b7c12a8418ff27fbd7b9285d5d607738454893d', 16),
                    gmp_init('0x1f46ec4ce583fda6a3ecae11c9d7ce0ad51a34c1a800cf7e3667d95d3a8fe0112bb16b50120fedc0527bacff2abf9f3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfc940aa4bd9e83c73e54828cb993623f6f32ccb9e45a17b84fa93b105dbd1d19ee6afea12b6b2f30da0c384bb18a2bc', 16),
                    gmp_init('0xafa776cff412d4aa09f20549011d06224ca57cec1c59676930eb22a7d40b4c0c9317c6dfc619a2bb850bc2c599b640c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2220ae3ef9a93e4631e999b53306aa99a093f04be6ea824074ceebf9900d23de2512a492b3a138ac69befd84541f375', 16),
                    gmp_init('0xd06b2312fdfe795e52ac908e7592a8e71a411c9f9b83ce174ffeae91c990294bddd4e2b555664d1f7d6854fa3b5eefdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x375a60c8a92930edec62ce77ee5280eac2c9f7d15942ef9f221b9cc52cf55d32d062ff160a20606aa025bf8022d85df2', 16),
                    gmp_init('0xc7b2f5de063ed72e3e68339c2807d3c83e28cd43bd34499e4cab48564a4fc5e143f708ecfa495f3640c2d6575bf57943', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c0b4a06adf2a4b1968fc609af0e6f013aef4acf2614c6a8e363e32e215af734ed5269edae196550137f2abf9e653d66', 16),
                    gmp_init('0xbb2369b03f2d77afd12784c147fbae28d258388fdb074943c618ba8da3c0389040af252973220df8a24892a953696aeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ef9f66fe5dd67cf313e03056d842ac5f5c313dd665645f9d76442a9b56d4e7def8154b68c63e31c06f70e73270453bf', 16),
                    gmp_init('0xd782ffc0a4dd5aea40bcb05ecd288cd03397204ffd6747b9d5e2b3f2d8065d3b5a9b19d7ea3ecfe1741ad5a7922eb9dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e0efb498438cb31079507fa0344c3e40c5c2dbfc3399539983addf28450c9b768fc306bead2e6707faacbf8f87dba3a', 16),
                    gmp_init('0x42a3a4a3fbc9586122643d7fe3bc41ea01936f1607eacfc3c28d1a51935cf90c731eca547ff28de472d5cc32620e0f81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20a12f708f9e60171125ce1081fb84d92078afa1b8022ff3720e9c191f2d44f05770cab1abfea08149aa40fffe6cc94e', 16),
                    gmp_init('0xe0c67dd2f95c8cacae72c7688edfdf156a82a9935b78fd30cc10f64dfd00338d0a4c8c087a0af906faafe0dd777e4aca', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf910ebfbb40893513fd704b7c1c26343ccd9fa5599cee80c69c951862fb21fd4b1fdf7de8d4a71ddb065876369feeee8', 16),
                    gmp_init('0xc62e2af747190a737648b908b5e6509710aff206568a25622a10ae0709f4a12ee5ee4625a14c33ef67787c6e78a34642', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf167656e54067d5129e474428b18e5519c842751cf28893122f2ea5266e0a101a6e456c4ebde570515eff3770a75674c', 16),
                    gmp_init('0xf422050f1fa8873ed25ebe80ee5fc17891152472d59d2e698553516f68e20e9ac9ad866fd35de55727174338bac64d61', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d2f846b60607554c82e105a6c76cf88eee614aa6e538ef8cc44a0862b9ad41bda750b6be159fef47cd5e1cf6a2d14c2', 16),
                    gmp_init('0x269975febb7be383d0b97c701dc99d735721fe31136514ebded521aef6234d7ff83ddc3dc83f40e213de417cf62402fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8d7badb4f176d776c2928d8ad044a11f4ee01154425b98f320329d79d4898d9b911b9a1d2c3763bcb474740e62d3d8', 16),
                    gmp_init('0x1b273c7cc8883c2ec479075fa26ab4f1e81d3037bb6257de00a0b834e36aed4131b1bb70055dba142d9a34e595a7f829', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x434ba50a70b5db23683a731a018d58f3694a192a9bfb09d1e397c087138028cdfdaceeff7734e1fded60e9524a726836', 16),
                    gmp_init('0x6d9727daf7c9d5fce45cd819b44b9bb559028fa568993a490dc950ae66342cdd56cf0549b3de864c8f8141e8b5b24e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab122caf2c23153a6a237ccb44be96537eb9c14a00b58de0b8af92624a568fa262567fe0718b62f3876bc75cfb474f38', 16),
                    gmp_init('0x45b0ccd7a7e25986c14af28f600ebadd272c5e5c6b75c1242b816a794d3fdf740d083c7dc920018113c23e7493cbabda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5658c342644da3da4f5870bdc669891ec5f200d72e9b5cfffdb26924ca63705972a741b5a82dca5087fdfbd805e9acba', 16),
                    gmp_init('0xff44484d2b313ae5d1e5964040a288269d1e25fd88400b5e1cac4f73e94bbaf892f4788b951d1bbb24b58e199c087a59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bae9f8314e50e8f89a3a942960dace44955f94941bce5c182219414845658284cba9aa252d3f512172b3701e06f50cd', 16),
                    gmp_init('0x89c34851a32448724b0f1e59136feaedb416422b5db67b793260c42970234bd059ff362119726bd1a4895667fe54475f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b0b5d5b078dbf7c032495f7716c6f542daf9e600d7f0c9cf5b8a99c9c57ec89014514c4f0245daa129e7e35a0439c38', 16),
                    gmp_init('0x8f416c5bc5fd3636dc32d8acde000bd9140df242096f355a7ee5c40ea7cd14f16488cb5910f5363e45709b2b04e05afa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84335e294da1794ecb3b2f794885faca77ba88a142d2438a08530ac8d5eae84dc9df4766126c811e8a87b3d34dbdc173', 16),
                    gmp_init('0xa119cd9a351f719fe3d17fb3af30e1d220e0eb483f4d668a55e6a7afe781a3e45a73046f02aa86aa69f7cc1a2faf5be9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5d5fa9650983638ca2349e519b87463fbd42ea3ecf2b5cf3d9345fcea70137cf2eab72db742916a47b63f51f60c87a3', 16),
                    gmp_init('0xbd5b8b76fe245e99f3ad16bef2f9798ba45723b26292dcf98f1c985aba3fe49e9de19a4dae1915e8447d3e4716ed0f20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16579f72b8612cef69beb328e1f1d77507d6292847c0159e4ef467a4dc39ff9b16c3f22127fe20bdcf4dc02e7516febf', 16),
                    gmp_init('0x386943e90194f4df0a196117c4b71a9ce6f2c951c39b0c8237cec7e28b4c9680ef636dfcae5d010efd14d513d6c25c21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdab88a82028e5ccded8c1f9725fba539e6438c89d97af82b50d31def4a66a1133dd117418259cb7c4ad68110fab432fc', 16),
                    gmp_init('0x5a07ad7612587bd6d8f9963e088276ab36bdfaad314fb7c7b06d82d3cf624431d97c42db0537991e27f51c072cc2f600', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b22c2f226a57521e0967165ba6dab1d6d4c94fa66293f6e7c846bc3e67166ec30ae157d7fcb96371a5a75b3370723f1', 16),
                    gmp_init('0xd7578cf0b55e2a54bfe039e1adb878b7d7455590c5da132d82c61dd716e880717101f8a967896579b868e9d834e8e67d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc26e128d1b26853a1a7daf3ed4b6321c93fff0dd1eef8eb6d60f99805f7a02ddf6b46b1967f7cf41d674cbbb92874e94', 16),
                    gmp_init('0x62cc960afc84c1d8f7191c4af42ad78c775d6ca565caee946bb14c802d6d044b8872bd20e47c2e6428379247274278ec', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3e9c2dd27f00128daaaa4f9faa19b09636a26654f776ee76c96307a560f5afd2e2193c62ccd4759025043ffbbb5ef8a6', 16),
                    gmp_init('0x8e3337f55d674f6bad380091b02de357bc00520987023f04685d8cc3aba26b122df33bfa205d7508b9b681bea912e417', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x145ebfb0196c4185325c084e0b4a5c2525c4cf4cc46b360775d7a25fb5a0c71086c1ac26174b97edeee3af9a82a0214b', 16),
                    gmp_init('0xd3129e29ed511cd1de0255464b2a15b0d32ff6e78ef190c65f228d817be18227f9f2af8984d53cab95f4f6f0198b3d09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb59ad436dc6985cd20e8943dff42dbca30e9d2c035cb49413047269735988ee8ec2c4c12ec487f05b8d2d1ed40f2f29', 16),
                    gmp_init('0x906d111f8f66b3b3d7d58537ec148df7bf0c8f949aa7dc1836fdbdb26d4b438cc93d0f32beed755c97625381435394af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61378049d80ca7aa49e244bf17574144d6ce03e9f97cb7737a1cb60e6efe6d576d479c332523fc8aedf8cc52c65daa14', 16),
                    gmp_init('0x451266c8e7acb855a2248bf7d20e624b91d1e2b0a034670cfa2c4eda29fb53b04c88bd2ca71e7669afccf72f3e7daec7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c7930a7d7af10658aa5d187d6b27ed16ee27cb30495836be3a08732190ed36b504482652b2e9d1f972727775199e77e', 16),
                    gmp_init('0x6ac82708fa0c5323acc560bdc577951487f97ee99dba115a2f78ee866e56c01eb08de3edecf61e5ff57f8e0c26d472b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd77d5578b799184ad9a7defc62f1d6d310acadecd96da3273541655fd6e2538d067fa10cc4885cc67f237e92ab97da8', 16),
                    gmp_init('0x80d61716412f5a71c7841da753bcdce5048362d466a896544841471049a50cd76a341e4964a8a0279c634eed8a06da5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x523d15be0b167759a4118caf7251f79965424587f36b109f28fd2855dc2eee04e18fdd7255936c8079e81eb11e4713a3', 16),
                    gmp_init('0xdcad4deb2c5a02c8dd383d76b053b04657c80833e0fb6e15db6342dcedb8ae8fb42621e8a075f9708eb1a8286077917b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a4bb4fd10a2a1d914ee54e47a99a7745b6aeec70595b342a76e302a447423ab7e33e89e7557fd5c639ba3487789af7f', 16),
                    gmp_init('0x4533347c139bceaafd0c500739e1d3ed99a741a54c82135571e192ad303b87cfe4517f69f8dc0dd01ff77ad5a1692068', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x415da5241a373c37abf3b858a30715fdc983a4b2c61ad627db5a487fe1a94b982a7b4f3c9f199a8ce447df3786d61f04', 16),
                    gmp_init('0x40b2ba610d6e09c2d59e057599e459f2a48430ce2703b6d11847ae6e2d5b6dc3dcef976d6fafe898162c8997d3d2b01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3687647fcdeade8d77ca019f4ab18fc9c5c783751690cc43ac7c4d0d03bcecb7af28d797453bdea04fa8b58d0d3c6b', 16),
                    gmp_init('0x4661a2d64e9cb02d38d46edb7525fa4f8d738bb5b7451f22629ce533667add1f1dba58c569d0e49937bfa4482b5ace41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3ba4eb69a19da3a5cec15e3e36070efd2d773dcdd445834738dd0320ba5efc5c3d18a1cf5285a97eafa76062a6a1425', 16),
                    gmp_init('0x78cdd7f05bd8017d15a67de19f28e95dac26d0c9d0ed75676f413f9152d084b754d468c926e2b71f1a8e53518aac4a2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c12d02b6fd21462a4bdd3a59b91ae8d3996d542df2774723babfd7a2c3b3ab86a7518be4a4ba0259b43e73fc24eea05', 16),
                    gmp_init('0xd2ce10ec87d1f335c5ece960bb8601f211335881d6950d8bac4f31da3b41f600e89794074a9de9e62453358a496190ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed0d30832578c5675f491ce2100b8796f15f82e1b453952c298df2c50bea51048255b2f6b952147473b160f258d43812', 16),
                    gmp_init('0xfd42c05d5cf5fd180384eaddcbad7ce935906d56eddb2efd507f6f936760f56f6977c0938d0709582a95a0af2666e979', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcba2cd4f86f13d0da98d336f65e47b7ed7c2a70d742ce2f50c9a06255d36a15154a4a76e77bd74e9d3454bac86eeb9f5', 16),
                    gmp_init('0x7c9266d2bc543066e5e38a3455075bd52c9d980cfb159f0bec3d7bef155f766eaad557f97fa2e9aa7d3f645f6a80d9a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40fc674d012a382e4677bcdbbd4e6e7cadeb68a805902370b2936bc64a887c2067ec0479fd6bf6d9f7d4384006264033', 16),
                    gmp_init('0x97690fdd055877fc3bf9d01686afca53d66ab5d08bc9208a0835d5d908f3c711ef82edc38df9a8b2b2b63563f0059d88', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x995b5b2a319c889898dc64ea82199d695f8dfd4a830a0d973048566f2bc686a7f6785debd6cff1e318a993cc5712ffa2', 16),
                    gmp_init('0x29e5ae4f35396542df966b7d2722305395b2911078f712f289f3b0639b8e1e809893a729518a9a551f67ebd36d293338', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe52b9b0d84576adb3dca9d222da5a102a84e06a3c94f7c33e0f05b71fd81259f6bb5232de392c171727413001580ee63', 16),
                    gmp_init('0xf757edbe7a3800a4fdfe562edf64684c234659f9d842f98b4db920dee10ed4b59d96932844b8df447f997dc7e4a704db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb17d1c77199dce6841598ca5ccf4268ef1ce9b4872baa3ebf9ade1b936eb492481244ae2c3d13621540e45d6be36499', 16),
                    gmp_init('0x7c3efca495d627e92e7fe408e5888ba81704cbba9f6ce430e5459ea96aacc749e8c7c8c7bfc88747ecda0da01d55ac7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa53063f55d4f4a496aa1a811d770420799457dc86e1cf66fa052ddad9183a9c70b6f2af68c57c7608bb00841cddc521e', 16),
                    gmp_init('0x150c10ee0eec4ce10b85cab2d331f284077315a3a8801995f0b663576adb3b812844efbb1b6411e9a45ff48042848025', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe763ad3e91cdab04548c5542f7f0b8aa084df7df2c52b126eee8830d83be3ecb9bad24199f50a9742e955528c52b0060', 16),
                    gmp_init('0x290398e69bac04ec5b2109d4df94842f2ed78fd41689d8cc3cf08e1cac1f13d22fa2f40d22af184453b34f024f2e1eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee0532e2c8865115144bfec561e1ac7fb8602e64b96dc1076856eef595ac05cab9f85ddd45148647a1bb2fc97953ead9', 16),
                    gmp_init('0xfca64c84b6404faad69e0c29770d6f4aa835dfe960ef33bea8c5178f35c17901c36d399d2f8e44f05dd84d6f367ec938', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c05a15d0830746201ab201a2e5764562dbd16ccc3cb7f31372ce1c7dcea9dcc40e7feb025318f56c6f57e733b825320', 16),
                    gmp_init('0x5cca9825f41f1140c4a4ec4690a2c28ca038207d5173be4afa8a4426fc1fbbaa819bf468d8a43457b8bc56526fe2499', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2209fb4095b6e9a2601dcf98b6280718d8d948aa1da201a37ed9175d466aa8c99b9c74566d210b5f5dbfd58a1a61c3c', 16),
                    gmp_init('0xc73d6ac92a93231ba20670c59e3af40b682f77ef537c70924941d11f59582b75bdc833cbec9083ba9e3719f4b163f359', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f98ab453f04432467b2782f4481620a4d74a1962ee46263711b9881c44e0a6d43a1730f409f62d32ad3a0e91c6244f8', 16),
                    gmp_init('0x119c751616123e3ae37d98dd8d66fe8d040d5b8686769c50519bbfe666ecad0779b2ac59dff2b166dee5f8364e76c550', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9033bff18742b65c69a3b58ab01767f9e587a30385798eb6050b59f3d5223952bb2249062d478295e482d42ab0530d3', 16),
                    gmp_init('0x30c93bb26ea92d38d055d8fbc6ac5f6a7ec28159b4e836f841e0d3f3b63ca9038a1ccea2e53ccbdf139c656c94cc9644', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebfa3403eeb3247bee5f1ba6576871c16db7f10562037a4392dafd0ce0e5d11bac02fc87c8447fb2a12b1c7eb2d4b14a', 16),
                    gmp_init('0x188cd76be9e44cada6949969171f70e2735c09c5d9aa5c7c53acaef9ed27cb6d730f4e11cb9b82de876678931d3f4f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9036d0791cb512b6d1dcc2d94ecfb06781f4ac1a47056f31854d2d9c1ce1af55d2e1d3695b4bfe81e0ab2223d8776498', 16),
                    gmp_init('0xb06a16d8eca9693541956510936517fd6732b521f2d2ce16dfbd04ea02b052d2ff9c9656f9d0d7678d6596c3d4c3b2b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc05600f15662cd9d8b4ae8beffd7f0d8803cbc5529f50f03575104e21b27b899ef65ba622259170a8ddba32a5905c9', 16),
                    gmp_init('0x5ab2c2c2ab82fc745f772bb25b57028752e1db380b3c6a5a2ee29444f2004f544ffe7a51c525126e678c64bef188101b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b8fd1319a165c471dcc032aaf9ecc9ba149c0d651b1d630e5c8477e685c4df6c385bb4121ed0b737d09972c7ef0ba83', 16),
                    gmp_init('0x4744afa214dc67f1248161303fa2cfa2a02695463dccf097657afa5618e9a725cbec02f4733ab5da8294d33765ac1e0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa8a06a7df716f92392b8f14fa4a92a27a7059284fbd7fe9b69c7d398f645d9c9729902049c6ef17f09f2538d2bd7cf6', 16),
                    gmp_init('0xfdd2277ff0d9b4d2ccca8b8236ca523288030075d1f43a02053f94fa87c6d7f5a0d2e7aa42c68114bdbc96f35e87c588', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xba2213c7ad62b8956272beeb51d258a2a5be804e0e29eed161a16216ee89fb8a45346c2d84439ac81ac3b9d675ef7ece', 16),
                    gmp_init('0xa8fdb93c446d869e1c7edccc1056b3829132448edf5f1ec14759e13826deab8ddab5a0c08e055df0022346250328049b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aeccc3245ae5d9352c59e322b81c70a39bbaf3a79969669337ef5aa4ef0651062e1b9c4ba2239ebacb8e103cba5648b', 16),
                    gmp_init('0xdd24a95db8743761b12e5af154992f9226930e51578d212b4560027f58553d2d44c97dc971234eced62f2e570abad918', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7248a3aa81c4301b47cb1991cb74183052e60d5fef388a139d97e6d72c679c020e33d28d804b19a40825663c031046bf', 16),
                    gmp_init('0x46b6c5f1fe24f7f5f0e1abcaa8e134c53f712ec19f1ce7a1dfb2d68439f1609a6d67883c2a0fd9bf5590122e6c71c09f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa489d11a239ba6632273b220158d2bb248cda1784a384f83e71f6924a7e89470000539a7cab0712591e5bf6004091d03', 16),
                    gmp_init('0xbe1290e410d3873350bfece27b4e2540ec1273c04921fd6c21c19c96d5656a523edf609a2169436001aec01248801bce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe15f1247f79c1f7428edd86933f465671d39055c8e758ba595e5f10e66b80a4364d263dbff3d1195d3d7eb89b3f918ad', 16),
                    gmp_init('0x5119891b2267a80903a8a840d134340bd9f1d198fdddc7a709d3c38f4117d2cb5b4f6c56e5adf233be7bb217ce5e5a60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc93fecec741c1feb53413c24de675f97d40525cc476d0b73d3501dce8313c41b833a36b4748192e6dd31b82656e1acca', 16),
                    gmp_init('0x4d488d878b07930fcd31d4315965dfee63f6eb602766da4a7bcd17972a79c5d4c4ade6a6c665019d9e4d5b9971dd7495', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe83d8bfca7ad1596eb085a7c5bb448187864e71ab2de70531b73b30fb1045c459bb17632058fd63fc65a1c97b8d1ef3', 16),
                    gmp_init('0xd47ac1c48b224bf48abb7e10564c994e24405c914fb2c36dd860659223193bb29c01e861f4d9b85df0b3debfa477589a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b43356e9d4acc031fa55ddf3f02cd0a9a0efb45d5bcc56e6711023def604f9014adc236663653f592f18c09aa3fb52c', 16),
                    gmp_init('0xbf9224587fbde625c9914c8e087a28b14f1dc95a6721b63b1f8fce5912a408b0098beb064745427c79d9f2169b02d0fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf8caf815d8b29314954578ca7cb7e09b0a8d529756555766a393a9b4c2b9d64647c386103ba301ebe716fc3ea3fcf2f', 16),
                    gmp_init('0xd28f56ba2be886bb07400292ea14732873a316664421b01cf6fe1826bc78ade528446373062d7ae61a791d53b1eb04f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ee04a9a51fd3fafe9ac4387deb1b8d78e28a269a91d0c0de5e3fc5dcf449cb0dfddfa08b9275a8b98bdd353a83ff053', 16),
                    gmp_init('0x289107daf8944b7dd75ae93774f1567288a1db8b35adcfd589aa1a58d5a9095a333215d13d0fb514856fa2ada6691a83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc486494afb46386699442616cd86ba667965be92e93167dc6e763f4c2a8760dc7a97dc37834c249dd74286f4b27d499', 16),
                    gmp_init('0x6024cec7b0f62d52be35abefc1edc1e745dfe6e0c7672f6d0402d19be5ae90fd3d25e2aafe4c8f0592250c5451d2e2ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5154f921e842c50465937c90ad076d3d2224918aacae34d4cb036eb6f2110b0c6ff1399fe9468b9c7e320ae355b0f7cb', 16),
                    gmp_init('0xa1b71b90d42450aa0f9fb78eff58948075c2fd55c43cc414f86b1016281887002e3cda95029c3e7d261507cc6a144b86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4861c350f92035ebbae6e5794cfcb7928b702ddfa229f4008084e0dfa6b7c841e8667c86c947caa2a4e945c249ba2911', 16),
                    gmp_init('0x6de636b1eca720cb9636ecfc200d717e7580023893e9a060b427354687a199f60f74325291d4f68525306d05e65c7d48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe390e778afad8d87ef2542592410f613afd7d89ab5cdb504877aa16998862e6bbd822f9f5859f462863b640332be1700', 16),
                    gmp_init('0x8deeab0d1d8df53fce452c1a742782ce03ea8af48603aa730703d7deb9d1a26bd8929941c9ea25a96b58865af228f55b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x655e10aee9b1866ae91f98f108c7b6a96693b1253808768e8f76d2bac6e0f0a4acfd55297e5299470ad6e7050f41048d', 16),
                    gmp_init('0x2cc9087487f667da3836a9f3e3693c459fa08980fa5e040f8b54abf4c7e36a7a6ea0fbf0c99ecdcd14d22a05b09ca5b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x81edb994ebba96c8de81c101b58df192ed0f17742ef0ef360b81f5fb2ae8f15ed92988f99bcf52783f4afca6e2d987d4', 16),
                    gmp_init('0xc4c6090f1b6e5b438bb04837cddbbbac54c0448214996f8c6e489e1b10e4fd21d29c151f366014c3445201c42fd6596f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa03e980804ce174354e527db5ff2b8aaf9c0a1417a4e86d714592a87a2df918143f8e5bed64388d1a7b6d93e8609cc8', 16),
                    gmp_init('0xd2dc77b07d0062e5c2d56ae4cf02599137bf8db95d04916810d6349fc74dbe90bcb26eb15d719cae1a8d4f9ae781eb7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbf460402797440be670a1dcf2188dffce3bb178acecca7acecfa4df24c308593c32ceb5c06373bbe0f49e68515c4a00', 16),
                    gmp_init('0x8e54e373340d0602d97533df28d52bd87dc3a1f8cbc582fc8de3b1ecfa3657db37993faa03619332513df39cb819ac40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf84a9a55523b5ab3eff91fdaf816cd4802c808d7057cfaf08b6587c6a441f61eb94779f0cc9b8e4af9ebc7ef2c6f6fe', 16),
                    gmp_init('0x707b147c0f5fd51feae4442f481dbc7337c3ac67e03861e334b95b8305faaaafa3f0f1018cf9af8ab4d7d33910b4db22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e5e7996a9a7dfa536cadcf7526666b75ee49e24e46fdb59b24582f7712f7d7664da084448108f90a9c711d361ebc815', 16),
                    gmp_init('0xa2f45f095becd838fc821c0036b987f9be8d43d907aeb867f0e1e3ef96fe69d66d2d7025fd368c718eb5b1370191bb2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86d0a707c7f670205df9b62575c568d8cf7a733bd16e4a21da8c89cbe8c3edfa6a7960b96c0609355394b6a9893e6202', 16),
                    gmp_init('0x7caa50ff7303aa19e068a2dc0196ebe6fdac9bf11addfd217db55842fd32cbeb0a31dac21d27efd7cb1d7a48581b6cf7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbebf9d8339c77a461535e77e51f7ff02176ddf5541530e21f45efc71286e41ef4f7a5f8223dd622bb0d00608b13a7398', 16),
                    gmp_init('0xf883e6f2093d3cb8fc005bdc484017aac3d8f9fda49fba6979ff29c22ec9ea41674987e29fe4e12ab813dbf33ebc699d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec28025ba330842d1c6bce564591d1598bb969c1b6fcf81e113574a03955391ceaa5177777bd97ccbd89c74ee69fc0f', 16),
                    gmp_init('0x7bbc02cdba9a279ce3c9e311a942b396d41ee6ec70ba0b4d391dee1c25ecf4741b0007d15b2aaddefd1e4b9e34829dc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeef0c54bccbcf32b3c9a45d759727784fe998e027b843feb5e17adf36c22045600986c27a7e90cf8f2005766d6870076', 16),
                    gmp_init('0xa367e420b7f33941e3f11b90709d20df10f805cc0203720e5ce72cf02717f48120c07d3365c55d98d0a7d92d74ba5344', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ebc77fc8e7878d63246f02154186f6e601d95f77f7d44cdd0a59011e135d45c5c37188ae8f426c19d001d38d322e9b8', 16),
                    gmp_init('0xe7fbbea970a3366622d95d1f35eaf225b4b342591f9fe44fb3dd78ea200a1cbd8b8fcb546816ae19b55294f8d2e316db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaebc37a0f0bacb2d858a54ead7cc8feeb6116e5d7f8fce9e57fa545cde08adab0e738184cdb6f33ea57d4dfa0c5fef90', 16),
                    gmp_init('0x65c7b92f173cc1f47e0eb2fc101eeb9fe2962abbdc18f7892c11e987cb5fae453ca8e05f1876c998d2a8863877fa928c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d9d79d7de3524f47a5c03c3581a72dda14b319eaf5bc2765912556d0e956450dc95ba638e5c5077ce75239c9c9f49c6', 16),
                    gmp_init('0x66038d591722f03b436112eb8e18fef0b7eb33bd86302d483c5a02f135fa3d9528729806d1a29f12a770e5c36a60156e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f3b632425d4ac704f746098abce4fa0345163b76a461496f8c38b1d2d6177564f56864a6fda1502492649a299440ba', 16),
                    gmp_init('0x432f6049e7d3af346f25d0e42009178d2613bd68c2234cffbcc5a2be043772d4bb03edee53862e0e5ec18b3390866a05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c2d35cda3ace277db0a2042813fae030085abcb1db762fcf73125d4eefb18c8196b525fc677dc314a0fbce580775752', 16),
                    gmp_init('0xbad8cc7b06c6c0964d42f54edffd5d5e816279e3b91d3d2794ba9d5947dcae90b6a6f3552b3906cc81867973867581f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e776ec470ae1d26f9c2e3fb6c779beb590604caa83d88ab580e39d964956ffc72b0eadd7c7c7676f252e02518c2df94', 16),
                    gmp_init('0x9c8cc758f718b0d220d7e6abdbf8e83a381517573cca0bd967cacdd11f8ce562cfc9a7cb475bcf21e764b467616e31f4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf94dfea620ad8c828d84f3be60aad0f1941d8442d2a5cf08c78f7b96ea7a5c797d3bd20f019aca87ee588514f72584e0', 16),
                    gmp_init('0x18bafdaea14b1c47301157448ca85c8cbe0387e0b65e4ead4f18508aeaddfd7f0c86f42702e421d6e8748e64ebf46b90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f44b85f8cea70bd24d1f005553a465c0b3ccf02d47a1044b6ad34d66ac75da695a624cd1072534d0f5dcfcc46fb3d63', 16),
                    gmp_init('0x98aa85b54c254ec3abe969010ac087d625cea93dd3971d8ec19b2b31d382eccc2ef7fe8715b257759ed48d41969ed02c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e212c08e61dee25f2738a40378386ca91734cb6bada0b0cf46434381b3ec947b3a29f9702e205b5fad6e579ce5bb23d', 16),
                    gmp_init('0x8062ab95f1f84c181151aba50e79c0be288b5e15e5f9a3c7ac9d40b663e92693167e0a78f901b566aab64f205879ffcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x392891c93affefdc36035df6ff5b3908868f43c3e14bf6a69f5b65b0e2bc84c91c010949b5427a45dbac48cfb197a532', 16),
                    gmp_init('0xa6980802fb968fdeb44d5162415b61f5a1e52b94fda86fe55c8e9f6843d830f3544779798025fca8838f0e95436f4606', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x253acb6a6015fc92e6650a8bbd6f26f33f4c480014a062fb17c14f2b27a8494ae48c654e98d75324f687860177695ba', 16),
                    gmp_init('0x7d3d78b3e1b9eaf6dd72d4e9500b7c757f3d115d3ce21087e65d769eae2dff7fb6ea9355c98dad56bf939727eca833b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x518da662de95f1c39bb4b332703e5c6d9a132e4c5d32d663f14be778f5bae06cf79bf01ee3630642153221c33a402c13', 16),
                    gmp_init('0x67c3228c1d06bbd2c8775538636f3383981a2685da4b231abc6d8950056e3c508f57b3c2e2b6e4b86d8f54ee1039efa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95dd8005dd7f43975046e8d74bde2b7a41eef4b309b26f1463d3b459f1486bbf801b279aafc41abdc47abf7b2e6d4f35', 16),
                    gmp_init('0xf2f231c2624ba8d8bf5ffb137795b9518362bcfda12b437b7a180e6c41f7bb74f06028199f6e18ecca39d2ae3c913e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e76b3efd469898b23eb9cf20a50644c6a67ca3f6f1e3bbed107ae90eaa795f02202ac6b174686a7ddc55ae2790df1b', 16),
                    gmp_init('0x53d24077d10efdaaba16e6c9a1bfac8d4ed47bc4a2c08dacc9e426d0193a47b4dc12779b41bbfec23c41388ee298cd81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bebab22b1b68dedc4d9955fefc598e917274efc6369b41672639ed0d80ba93de0dc3e00f904fc83e482ae1a29e8d10b', 16),
                    gmp_init('0x54be04c50e607cc1156a9c024ded6e997be09393a7e153769b504afcbc23fdc92eba8ac157aaed1bd9b267d4500f2aa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf58c8f8b479fa37c46cef58041a83b87e639ed7a63e3c10015dd0e11acd765ab2dca1c32f7510977b0b1e38a80affe06', 16),
                    gmp_init('0xdcfd5e5b94487c25f5d40a9f247988aaf387f769ed21484dc8c31120369842c72c7954bf481eed32c3ddd05089d31735', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaab27aad613e3a40f5ddd1aa94b0f8443693a42c1693b6acd2999853567bf3e99908a53122495e5dc67ae8e41b181733', 16),
                    gmp_init('0x848650f952dd02c9fd8d6f1ed2dc8fc0cd86ae09ba62eeb28a34d4447af48a17e79bec1c641e9df2ce7d5fb0f75b5b57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaae29ee5b9a5178945f14ca2e355448db4e6996c98959cbcc40336167306f357b8c40f39405514c699b4810636aeca1', 16),
                    gmp_init('0xff0a21d625173fcccc56a26959950498b1cefd9201b781e9d292bb342cf8c899c02ba11442662acedf7aa36b7261045', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x457db27541e35994821a716facabc72550d042857e7f8f59206ee5395ca94d00d496e036888859c00c2d085e9819d858', 16),
                    gmp_init('0x9e2e91113451ac8f325f4abe58270064399049a8a07dc9a86b88a8cb893ed69ab816ebb7c0cd55052c94736196f6f3bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a58d9bf2d870a81b3848c77aadafa797bdda5d4f8062719c1ee00aa09115059ce5e958658cb93e80d2b24b27e983395', 16),
                    gmp_init('0x73aa6417fea275a58fb358106cd9625cc24e34f2b93ec1949c7a4509af75e17499282c2263f6dbab0b382f52025a1b0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa920c72a52f804ac8bec7c271cf3ddfb3fe49dac64432b3825fd6563899ae9b7f83fbdad5b8067547f995fb4a3a8f329', 16),
                    gmp_init('0x688e1925fc6fed8e008da86a7cc00d466914e0b168a46ae475902e425bb49f056276a84d2344270c8ba6d3645651d4d1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x38bf01ef8e1e90a40964ab2a9209aad893c8008c19636f5aa513701f9b585bc3774d66a6cde423d14e2f3013c8769ed', 16),
                    gmp_init('0x8b23082270d98f8f92573f3da3e336274059981af2b6ac21028308452a957afbe56836a436f7626072b187e28fda1cec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ac7ca646ec805d3407b161207b825b305ff0f39f757571dcd5a046239417d0c57de5b49e4f7287e7054c7b3cd2a0fa1', 16),
                    gmp_init('0x4dff2dab40e7d6d8f733da2aad7bf01df9c9380ec3b52c06ad93068a7cad09b62feb018d9ffdb927cd71ac20a1f0c1e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a354c890244aaeb1bc2be95dd2a6fb43a3a9f52c6b764a181cef942a94b0c0419f7f530012d7fafef7c2e98ee3c0541', 16),
                    gmp_init('0xb5484beccdd6a6ba87267b1c1f03ea6d2c55f786c83d7be6ef2549ff50b8d928abb5f73a51e589be7ef4ad0b507b58c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe90d5235a25a0af62364e85d0d12323b6b172df4c5c2766c7b349b273b415f7a526335bff699284216efbe1c9ac7d6d5', 16),
                    gmp_init('0xc15cbae167efe92451f89c5dcead527f49551d658cb85c9a5b6ba0845b6770c4212d72e95b859e5136743211ed1a91e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bebdefeefb1b5d58b0ec69568cd1f8989f73be15f87030081162d086fba4a9a0c4451dedf2ec7a3b3fa1642fcb3c913', 16),
                    gmp_init('0x4095f2d5c30fcfc56321073ac977f6dd14d3687e0d7e315ab15df49556b5a69d3c0532399c8eaf16dd7de1089b630b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x654d385089a9c701727f5a2e0f74c05facd990958c4b05b07c879e4a2b9820976af4b7a243df476961b8aac23d0a3a3d', 16),
                    gmp_init('0x64d3dd86dad92f5178ffdae6748e322ff7ae521ee8b3d7ed205dc05854e3dc93dab0e85ed31cb592db173e7b1eeb1bc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x913c9c0d1a3b097b02780f8b58b1626cb56bd74c6cc7210f5baa8a0ed8bea391a926298afce9f71be3975ecb3d9d2e73', 16),
                    gmp_init('0xf91a38839a2644b7e5f7b1303f49ce4f3cf248abb852b409a8fabac8369c9bf5d34a5a455fa04d14363d808d6d6b7b10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8857eb032eb833ab3badd35e7e9c8b7a861a28eb380f69a509a8bcc677493c2690c3e465dda835c3a3a3180c63716fe5', 16),
                    gmp_init('0xd7e9bd7aff7d7f1324744980be56ff1bc80c36d0f1971f0f27f55f6b3274ee31eaf29677ee61210941f8988f5a80335', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74349f0779245e5c18584f7fbf9507181126ccc52bb7f324749a2cb39b186c7889ff46f041745dc8e23cbcc5dc5e99c2', 16),
                    gmp_init('0xe055b99752e5af9747a9685531a02d2175b37fd1e12fdb7ea1b56d2233c6d09bd9933a86878e43d54ab93a745151b470', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27e70207f8858a932b3553e1827afdeac7b9e73b560a1ae7dfce8a3746c2415b211d93f607d2a5ba83decf80de54ec0d', 16),
                    gmp_init('0xf1cf751ceae1767cb6f8f5d363d791fca0fadcff00095c61766991dc76f58775aa7b8502705a22e7e91715743065ee05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x694f9764fde3d3b8d48e2f4c23332b4ba8f97000f47707424e89a4300e915847a64544511cea834152fef02ab74edf79', 16),
                    gmp_init('0xe04297013697a55bb5825f5c48ef1267289d00e6865aabb937ced2a6fe5a574970b5e318b944a6caa9cf80ecbbed6bee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65b6ee19c6a0d2a9d54401aec43f17cc406a5d3a16c98ebf4e10984ca7ff4bb293bbaa73a616ca2d9cb2535d6333d033', 16),
                    gmp_init('0x73ca11b7baec41339ade81bd264e7457235d7c5093fe007e1a9a913d0855875e7e87fc25b57c989b7f82b607bc401df5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27181f8f108881662ac789fc70e3bc4e20498ed4e8d55e10b8cd68432dcca56472ad03307406ceefa7267f90c5b89aa0', 16),
                    gmp_init('0x8ce27359d90606e0234ca1f5d4c8ab4984895389c4aa80c91896923a69740c214ba5e04c8668615178c9574f0dc20817', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x367a9b5420a867ad35e424a8d46fa356c03b54e5c381339ba0a453fe3325af58559fc08f8ca0a22e2d66e0b94473655', 16),
                    gmp_init('0x669bb1c94a39fbfb7ef24f34fb31256ee2f2e6e3f37885631378235cd684e59f13872c77ae403f577fea5889ab4c080e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57230220583f85bc85eaf58975fdd7b18e53a5b062319fefb64858c1c7551265c570bba00c979537ffa3b84e7d38c44c', 16),
                    gmp_init('0xcbb902b300c5f0a7cb3dca668b2c51fd2a31376c211ea3c9bfdaf59a809abc905d4f21911dd84fdd00a6408ff8f5b5d2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf19c3f9b433eb6a3804100caa7f6297ecbd8aa258512e48ab6971da1cc7fdedf3917d3a0900807059112e340f47168ac', 16),
                    gmp_init('0xae61a171f610090c4a1e9b515d38904565d24d485a620149af40b68bee4928be1b7078cb39d2cf6c45e0b1762d8b523f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa46a47ddf46973057ef609d88a31bea401034bc577258ff1a45c8fc05d71483b5478864706825d81c112b0ef98ead16f', 16),
                    gmp_init('0x2fa72bd3d53e9d9185854e37319ae89999443876637265138c96ec6b69f6fb491c25e56ca459fa0ece20da3240448eeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf9368b925fae31cf2448b127d32cf1b3689c3d1e3b256a2542d3323db939ccaca6bc2cbe55c977d0f3e5c4bf4b400ed', 16),
                    gmp_init('0x4a189df6555cb586bb2c01775abc0eb0028c85b9d6c16ad06afc3aee5528ddce1233cf5bbed3e60a6b122aa0abf2364f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6ca49e150d457b329676ef73b33ff31bb7b6db56c89583a8814adbef906a056aa3255a6236442c537bc769c51032bf1', 16),
                    gmp_init('0xfba7e4ada13ddf5132e5722e34b245c5ab2683e72ced02576989525d56e9baec929083444782094e61801510f83d65d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea2df0a94afd9e5acd2b14fbee807afa76d384b1c9ead7c0529d1ac9c9f90773cf17f6c68dc45beb39ecbe963960af31', 16),
                    gmp_init('0x803ab56f5a8e9b939e7d6b8928f1932e20ea3211444eaa61ebbf2f585090ea6de47b0034fea706f3c6e8d771458beed4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89d29ed8d28af9f15af28972b3f0a1f992dd5546552d4036902804c2989bc730e47668836d8b36726df7a0363024dbf6', 16),
                    gmp_init('0x1c15a9f00ea652fe74cdeb995b4fb4e678020c4561c47643e9d0e3f6044148fbe3bae42352baf0f7b41ea6f70e6ecd80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7bbc44ee291c28c061d5661f1936d82a0e4a5d271e947244c0d818b18e6d24b3c6f5dba74f058f2f0a8ecfff28f921', 16),
                    gmp_init('0xa3cefe096d30e0c0a2f87b23dcba1b55b6df04e22be18c6e8e942912f5d2952a923760f3f4eb442a270a1a416a3faced', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa71b35dce05d1a617764fb2e242d62ba742c86b13923e885664b60e50f3e56a453e95f4e14360bc1c9002aab1d45a723', 16),
                    gmp_init('0x39661ecb0210eaac11ca9df186bef1ac969402b14789d1cbc9f5982352f40c442e706e9e070539817e448b99b6904e62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3bd4620ef0f6be64f6f80e48794f92ea3d22984648ce7338b4c8339b82a2970120b2bd7a7fd875c7961575bbbeac961', 16),
                    gmp_init('0xee1ec3fc6a6f1f92feb7d2b4b946a3a05ed99a660af4d7e5c2ad537bf75ba3582b36871ecef03a506e07cec59e348b14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31be679301b2819840b885682c90326e7db64c37a2d033c2470e5bfeeda804bd83d16c3d45c08aeac1c5d5148ea0a3fc', 16),
                    gmp_init('0x88dd0ed1b11f7ebdee29dee37dea1c879c7b0de94846bd40211a3d92019207ff81d13e8fa671a2a27bf8ea551c265b6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf99d67414b0dc7a9921013d4956a5d8a20f8185cde7ac461c78b59379e4966553dd5d457ac531057e9da84f3f5c9bb9b', 16),
                    gmp_init('0x931e142fd52b4f648fe8128052d58251e55504e6512ea7772a2ef8991d175eaab3e32d48702d6e107937c8cb1bf4d6a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x599a0b8fb55d0005e6f6c7ca6500ce362d959bf288e936ebc2d2699131ea37b515c0f9abb0662802e2038571420cebdd', 16),
                    gmp_init('0xcd03bf4b6dfdec48dd9d0d814ac3ee583ec22ba973e890d641be0684d7795f0477d3ef47caf29ea1b655fb8fb25d2777', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f0bf8af7371bec4936453e312a250ff887b9f309289dbf9ac39f5e7225f48e31251688344d473c204185909bba422d5', 16),
                    gmp_init('0x5067fb37f88e180e45c3de323dd7b5e5bc763b32ebdd52ec23d3b4a5bf4b7ff153ce50eef620bef2bbb11b179a135af8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e60a28fbfda1c90e442f0821dc4ff2fad19492e8ad358cb8823556153d22ee57e89b0d44a090709cc70f33b0d6efa66', 16),
                    gmp_init('0xff8ecfb6c30b5e5ca6f88ca2b76b7c0df5c1585d979d5567622d24aaeff2d220bb29305ea383c67a0700c5cb51fba2b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1d4a8fe06fc6fe1744d6156f7b67b48713ad735e24804da745022bc497a241c7643494f87dc6495ea0546bf702337fb', 16),
                    gmp_init('0x1d67ea906ef27014da53272286511c15bde7edf134237b66a099dba9af6fcbc5fb21a9e05fb7e58e9e6f01a9e976120f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xdae976e4bee33dfceb3468e9874cd0d472c8dab9ecb753834fa63884c733aa386073bb163706e5acb5004b5dced7e5ce', 16),
                    gmp_init('0x7453fe3054d9705bed5b9f08ff8a86b5a121a9365e9f0ecce8c517975da6e7e8f32b946ae323431bf61f4f0c28fd84dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef9793b48957ed086ddaac33401e64aec86d690a1ff1c027d767e4f2c7b417a1524a9160cfbb432be719dcd22c7c7546', 16),
                    gmp_init('0x9dca578f4f22bf4b96fdf9d948831c2d0762a1f05b16fba63b7a34386f80e8cb13a51461930f81586466d45884a55c90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4959c58c8cfc10dd6c84589f5c80a6ae8e55664e900be5a3a6ed5beb9df29e09405d0cd09514aa75fbc2935df1a900a', 16),
                    gmp_init('0x51c27d74909262bcccec2814588c2f09a8875122cbc303a52910d0403b9e0c943f24aa9cbaff37f90b9c6f4d9cf42f28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x612a8a5a5698c6833f02150e82d4cdd03b68a37d56339cae1461dd48983f800c35ae40c298b09beea5ca6c71bfbe84d9', 16),
                    gmp_init('0x4e1241f4f476e32edea522cd9996fbae3e755d1ac1dd52588c33418b15fd79160964403212dba706bd8a302430c12f57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bd7b5b03ae68fa1e5af4d840345972e7749232ad11c3a0e955444e464680e4b4d1bf10ca7cd75310f40968be5be8788', 16),
                    gmp_init('0x4ffe05ee6e1dd37f30c72db191ece48aea8f88baa4f201b260bd44b86197c4b52e7712a4669272435563da25f56c2632', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x955b30a76b2ab4a83180e7fb500457701508866c57e700b0852a0071820b924dc15256efa0bfb9412d1e7d2f8c22f75d', 16),
                    gmp_init('0xe3aa0211aa314947b18134c1524fafd01926279613f8d82ad880b78acbdfec225eb52d7d2f1e0266725c6978b6bf532e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc8f8b9822f5e1fb654b32e129a243b41642c6cbe68acc989a811e355e46af403560cfef8c8ba38f1c215baed04ee64f', 16),
                    gmp_init('0xd5475e045aa5df9b6b90634ab1a0561eb805a7d743b95e92890a5598d435fc583df5058819bd983b5b592c5815070813', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6e91f7bc788147dfec29bad206f718b089308abca72220c3ef7d2423f9174e821349f8764941e5674b2c9a3f521fba5', 16),
                    gmp_init('0xc1ee3a5cd2b8bf6f986a639d7aa91c42738c524dd5ae1ef21a835c46822311e1e4be4a2de07399c551c7be14dcacfd16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x664a8f0232da43b0b54f6ddb99740eaaba4407d674fd88fcd6d4bb4794a1776fa3f7b415b212f8706f4ae020d3c7534a', 16),
                    gmp_init('0x34f6a5bb715b582391d0a967996b3d1d51727b75df6c5a6248b26c394f68487d3c3150f67d9d5a0948f52a46c5f23f7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x276ce7a9f8d6ca6f9f7cc90a09a79ba90e7975ef7e88453c05f4dab2549f7d26aeae499b483754ff94de30f44320a540', 16),
                    gmp_init('0x660b8dec865cf8995c974d3ff13094c74fb96678f83c2b99f0c4b5aa8fcc3f2b1e53b21df7803e31425c2fabcbab95d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2afe6519a8a6328f06bbdfc0a581c5bee40fa0267c03dc0d16eb969345f27e9b21f5c3f292a3722e593cb1db57806f1', 16),
                    gmp_init('0x6249980bab3acfb93b7a41c0a75e12c65f4e5fe81f95d5b66896aba67666fe6970117460c4bf4f880495c5d60ccdb575', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5cb4922da70a96f3ef930c12535880b750d9e9cbba39e5d6ecf9a7a33960ee015795443db02f9cf9d9cbdf85c2319', 16),
                    gmp_init('0x63703781e121a66fb9430c0cbc5834d2cd01cb143c2c4add719e0096aa28b25addc46c02a50b74df73683e6a739b4cd9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebb6dafb21a56054ebed83db04c072e7ec918e390d105a20910253b7c17a05d7d5c4d0659f56b1f65e59e86715a83308', 16),
                    gmp_init('0x20a531656b4bb4c99575e66acacb1d4b42f5062d445d561e314004b3f9dcf9979c2d3be1f184153e91b2cafadb49ec51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc792433114ea6f74a14d40f001f9ee997c07ec4f8e065733698e216f5c0e65a759ad2523317afeb2474a768d0acecbdd', 16),
                    gmp_init('0xc10b1b3d3ebc5c7fad5ec6d5f21de87e013b8502614db0d810715cbcc8b142a6e20bf8ffda7ae3ac0da8c8643d6c8ac8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ab0b9a49ad566fc3a5d85422304a8f7b2c24ceb0506e2357f9681251d8cb56cee600ca8687517ff4b0bad1892eba319', 16),
                    gmp_init('0x3d32def15e3a6f18e1237b35446333352e6025d74e8055ed9016bcb88344591421c7a9c203e217aae759f2b9309a3732', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1c9680815fc581a05ff9b4a3587090cdf55bf77de67355a1a13dbaf47ffa25319e1f87fceb3b8adb788075a99c901612', 16),
                    gmp_init('0x779876a7a9b81ebb8aaf499bb608a6caedce030230bb885eed4ac3f72325c589d376123e4fd22a600c5bb6c2f06dca9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc233221c846caf98ef8efdb3b029a72b32935e9a3d9b940e0dc27201b6b8ff2dcd33dc92eb815fde3c6cd44835b8661', 16),
                    gmp_init('0x6e5f3c6924ddfed3f6d074fb4ce3177d06faa37f9b8e3a056c125da9d2ad4f49a7eaec8bc484e91b566508aef4a66823', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa29fa410031916cef7c73b144f175aaba5b829b3710469315a064f252899b80f05ee13cdc203ae0920070cc221c5a52', 16),
                    gmp_init('0xe4da82f4bb0e61438c90dff21ce2c4ef4876c8d72b00a0eb515d658c39beccb8cd7c4eeca63d371d51d4e6af14bebf3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x251dc53322b7a71e533f87a724c1815fddcd812e3dbaa1a3529dac7a2cbdcb9ac50dafe6ae81c7a00a0cd9e1070afd50', 16),
                    gmp_init('0x6d179b97dfacd72922136fc14619435dd1f0f100fa9dec7fa8a6164cfedc2cead58cf4841aa395faa49a2d5f4f43e59b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed7c84226885069944cb214149857a0151fd3727d2d86f0555050ccc7d32b25881807388e84bdd389d0c9be8e0eec0fe', 16),
                    gmp_init('0x40bd8ba3f39a71409133ca7b674e736ca1513fb2666c6473e26d2244baaf4f72c09bdbba0457cfce8e5ceb0722fec7e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6b9ac45b25e7affebbaf6f20c66fc4b636f7945288ad901e322a8353d78dc102fe786ee37eca54a3fb9ad0ff4905e43', 16),
                    gmp_init('0xacac7b93ba02f1c364a3b7b6205e8960e2f5e335146daad6f51beaad7cf2c7ddf2c882448856eaf693775e3de4b0d002', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51e183996e6587acc8269bf490a99e568da787aaf578ca8474f98ee9b9da2b037963b28f6e3d9c4c07b2ab97a2925092', 16),
                    gmp_init('0x7b51bcda781c2e7bfd26d75ed73e4eed53e43a5ce5b55d76d76dbb27a50d6e17b66b2a72deb07060c9633a6b5f1126c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd115e87e1bfe3489690bc09c8d68b5e4abe7bf81399adb267670e3cfd9c156447c61872eb0d7a7efe73c90eaa39e3ca6', 16),
                    gmp_init('0xc9810f88c4384d5e5bfd4cf2b106468c7ad07d7939d5587d4d2a4730a12bdced86982eceee09f482c42ba4ad935b6f0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd32efaa3ad0c39cdb48f27c752e007d8f93222b5344d18688397c5635fa143903387a87fb365366d087eb880d9441610', 16),
                    gmp_init('0x42802dedc8d074b01e49312727bf359a2cb93842f863cace83c382b124c6e8f6eb9acbb120c1f596a2207525026c352b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86e3e30b7ee652eec0e2705718fb04b6a6210a2f13cceebe1f2074f45fb62c0ba5003dd211819b49de702f3402cd2e08', 16),
                    gmp_init('0x1446aa1e382216ad188eeec110efa3e72c3ff78f6256a5869cea67fb09859b1ca2d705c035a937a9c3d8ee238eb81c07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8ebc60a3db598c0fb0421f8ce9a1a84223b363725888f5eb7d249edb34c086bfe50c12624532672e0bb3a0d01f7a5eb', 16),
                    gmp_init('0x21ab3d0d2320ee34c064af8290437bd2a3d8903ff70baf765f5ffad18e6d2c6f2617ba652a21663db65bdd4fe6cfbf14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4d9c8a01d98f1cf47f881efe0f0484d5df35a6f55f65b615cb514f05fb433ffe1ac15b8443e84a86e09c303fc6306bb', 16),
                    gmp_init('0xd1faf35400c9c1d2d9819dbd013e454828e189f9737b414bffb9041d423b2127d650132ff9c1737a52696a2cf51dddbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1377abf7799a8c0b6b804ad307578253e936e9ce846e48749c4b5df6e0877dfa6e823630917474eef5446956c7a4a3f6', 16),
                    gmp_init('0xfb5eeb9cbf469a90ec1e0e92b599f9843ad26b25fa1a4bd424cde6b577880d4a0d105b98ab5aedd1744c90afe8aca0c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca57aa1804a471270a165f5412b26c56b0124221ab859734f5f45851b9d4d654bd6f3856ffbd7e32f080d2e9073a0374', 16),
                    gmp_init('0x7e37edad1932a03e2cced238257688156334bff805e2321080511d57a45235a51dfd8ed3d0428a29359c198420f0ad45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7d322024d6911edb5f17e89c7b5212f5d76cc1465942c3ab4234be15b14945a38201dee5aaf87cfbcd9888f85a9c63b', 16),
                    gmp_init('0xfc300f4f9f4946242e11e00087f1f38d155bf88859fb560f72ec38daf98f8fd6b3ac1a1fb9d1d62db0051dca970d7bdb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x56a80dae6bac8b1fb697e0ffc0919df538c088ac2316a602881ed562b5c0a09f0af10bfae77ef3f977f32039cd485d1c', 16),
                    gmp_init('0x4fabc2bf1259802bbc65e264b1e4be6cff06b5d14384667e2801020aa9a07232c76909fdece4d5a417ec580cfac5bc04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x732d828e485842f84bff4f4fa18a0230c757ec66666930ad12b9fd5ca5726746a9fc71435ba694922c46d2723409b530', 16),
                    gmp_init('0x17a7b15838bcf4f78a8f5a2873589d0d4f64e38300c28756940ce0b4e90aee4286a3f51ed65a4e9cd6e474ac1fa405a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54d9a28ecf113a4ecdcbc47597f4d020c78f615a5219fd1c06df6fffde0e8a2caedb59140927dea6f30ab604b3433d4b', 16),
                    gmp_init('0x3328ae9a21bfdc1057f360e0a78e580077fbe3b641652a2e8be9812f08c2b562b4acd974a9e1f1078d64b95d61b480e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf27b81a7e5c65bdc61becffd004ffd928b6358955568081290414a6c7015377a5a2bdde95b5ca029ff2cec170defeaa', 16),
                    gmp_init('0x5f8a40c1778f4b6042062db6a4c081b6988bca567e4af01bb80179b89d7eb7f22030f0b4e322208209b21507b53274a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe212c96705fd0c994d3f7ac2505c2047ee5216e4b32aa10edff9a6ce013d33ad0c38f597bcef6e235941bae350f71b37', 16),
                    gmp_init('0xad0585178a970085b23a6a7be056653e1b1ed32addb0d30e7e47e080ee2ecf97896964e8d238618d29289c25e3f2d65a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb43b20736bccb0d0c767bfe05a08e139af2288f7711e0e4ad9e87f5b870e07e45754807d1b47937dc70eb40d89ab86e2', 16),
                    gmp_init('0x6ce209f0b84b6550f1b5b0fcb853d41a4000889af5bb5c183d254168b2184b478101df25c0a8728de1429fa6a4997923', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d3ba527a05320d5251c548a3e9265285d6e9a6842692ef264333a150eec86e6b6befe0f871d2d4e9d78cd91006de51e', 16),
                    gmp_init('0xb74748b6975b877b3ffe816d47e51486dd294231276f72b59025a54b5497c6acb87973600ad0dd860afbe064902faafa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabc9270edecbf1a73d35395c18cda6c0d1088a871ce29f5ab66f707ccd31bfaa5e0ba9255dba99568ca863ae5d6d42ea', 16),
                    gmp_init('0x747c0c310055a4076b22a03225e2202e60cd0de396231cf38ed8d12897f0628d7b58a89705691abe5e55999271ab778b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f930400248e5dbd9acfa90babf9e5e7449b90c2cebc1cbdd78cc27a94a7b024cb9fac3656e24cb5b2fb271609043946', 16),
                    gmp_init('0xfdee6c186139250e0cd475ff90f22de4e4db57f10f9d2c4a767d139be14b96df842b1178659170cb507093705d20f9d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb620e7285a3456aff438c16e5017bab0555f7b814f9205da46f8c68f460d052a907fdf34bc3ec7031574fa1db479feba', 16),
                    gmp_init('0x3d90f6acba7e877c5f8352c8a06bafffd368989471caf3ee7375b8bb77673386ff3aad893a70035ba474751a4efa3436', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf7a2ce4db446680c456642638cdb98c851aeeac87c9a14c388dbec7487f6fd950d01bcaf9ae02d438938e8c2fdb130', 16),
                    gmp_init('0xdcd6f9c1f34b457eca98c9bf22e7b6bc8592ce886acb0da47a4143a46f4c35813a5349d39563ecb4d0d95dee28a2b441', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf11daabdbcfe1da0c5a013ab0eaa24cdf2d909a480480d673b7971eb78fa26749dfcb5a419a613b063482bfc91699d72', 16),
                    gmp_init('0xa43d589daf2a145acbcf3639825b84fbf2fe7c1643e8d15e24c70b60dfa6aade7e9f1022e10b12fa84bdc3c1f75ec95a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee5c68fc82a8fec48b15fbf70a021331301d526791e4263bd0aba44e452ef41c732d7bdc84afcb927eb1cc596d3ceb1a', 16),
                    gmp_init('0x18d9cbfd257d7c81b18eeca79d1380851a0df664ff981503c7d6a0bdc5e01782f71dace7519aa101ff136d34f22c4040', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c7a7064a90e3df6936c2632808f2dd24fc876c26f629ae6b6dee51e12b4ced57e651de43c79435819b879e7b0c78cd', 16),
                    gmp_init('0x2cc49179960ba319a1518ea9b98a4fb1055a9b8c0154f4b53066153f7c2830ab0548943c570d514ac4a31ce8318ca85b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34fbdd7bc9122a49566c9340645329c1827f255e0ce6fb163c31504c4f6f73be470b2432d936de4326361d29e707a28d', 16),
                    gmp_init('0xc09091aa1f56667a81098c8b1b87bee24cc250c86738fbb635bbff4c7a802f2a9d8cc44e3dc83cfbdcbfdc4e4b087320', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x79dc566510cc718ff348797e2cfe67c2fce93bf5f6f39bf74c1ac3d8cbae3ef92dd9cdedfa0f56d06ba5918d74d9642', 16),
                    gmp_init('0xa64da09a5d9087bc89a8437e5c806f88626377708484b5f136275538892459a929f49d50cc51c42fa0ecd5d0c16bb523', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4d678b7b8b51437a59b02054ba46991e97122d20c7c94185c489f26d8a3726790e25f4375774c695fe82b526c694c8f', 16),
                    gmp_init('0xd2cbf566d4f03d61cbd5e2b84e23a3b2c4d69c5a59bd3eccbacce7d2f9d685715e057d7dc8794d87ee5b973ca0083b43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf5c57a193b2c623769f7bcad12a07aa3e29c9bf15e87f40f40da447efea1fb3d1ef5a4573890790815fb712b60d0ac6', 16),
                    gmp_init('0x6f615c1693cace0ba540e4fbea6514f2380830c6442cf9ea4cd34a8f2e1c30a1028ba2b88dc862815682c9a2ad0f80a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x681f0677ca148e49d2a06a03268218a536e9ab0623aec713410902440096173fa62ddfd7c3a63f59258012b65beaf257', 16),
                    gmp_init('0x738623a90a9001eae2e30f877943e4fe6e923c08a845f2ed2827d8dca2d5f6fc51c614387aa92861344a189c24ca4464', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9137d017334d94779cbdcd186f8e00d6d2313fdfac7b889fc12e5bdb0c789a68363ddf01ebb420b708e4b1e2721dfce2', 16),
                    gmp_init('0x4e49496d0f86b0cec7b994680efbeb3b5ed1c727deb44f668c0ce678a1ced644db2818a9dffeb03844db714a784b0871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb167bed98f862a0f3c4196dba01d3872534957d5e012166cbba2dd45cc27a94414506345328117d61b4065cdb47f36a1', 16),
                    gmp_init('0x98af8a19e42dad4311303171261af8572b15c22aa763a0b93a4b4847645bf81d323d826ca9e454dc51575127cd654b99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xefdb05acd0e93ed1355ef5cf333c2d86083f76013509d22bfb76715912036b425a2f5f647beb454d7c03df6fcf73fdf9', 16),
                    gmp_init('0xc3e4b638e4c3e43aea28555d2d9fdd69bb54747e85b8ab033f43747d0140c5595613c62b4a00e9862737515b6e2ac34b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc35ce6fd098af3117da8a4043622f47036c458ca811056b54227b6cce1c1fe57818639a69c71f77e70dfe318bd1d983f', 16),
                    gmp_init('0xeb1ebb615fdf7e898de056314586f3ad20d76a35185df2a4d71c1f11dee3e163da37a38659966ec51ca998464e59416c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73349e8fa922140fd0a874365fc38d9d1383324ed98007d5ba9c2357859828821fe4152dadbef9a669280d83f5679c30', 16),
                    gmp_init('0x8022a598d85c264f08cb0fa2c21fdc741b2576fa8723cef3d888f058afa83e51daf073dd6a3aca2cd984bf599b310c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc155d4037f070c87209e7c4c3d854a6adb9e1410325c9fa0d655a06501ea0e90e946997cdddfe211e943cd803c6e61fe', 16),
                    gmp_init('0xfed751cd08e031261177e84f45f93d5d0fd821ea98d4bd57c673cb2293589bc8181dfdf6cfc04a03ff9a16fbbf3c1395', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2845872f040059682a684b3d9572e8cc169680d6e212166e1869fdff5425711cdadf1e5cc7642c03d6847c9c8eee0086', 16),
                    gmp_init('0x68f7571e148cb6d8906bf56395d65825238392250e76f2939944a3be2cd011d7e8c2f8c69848653102e145990b97226f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fb3d81a47adb63b092d567b71b9f00d0482cc0aaa48bc43ea6699fe16251d1001dc92a0e0dd6341dd3cfb4c4b2102be', 16),
                    gmp_init('0xda6a1aed0d1b252fd1cf12a8ac818850ed22db0bcf9434f46dcf7f90e797f86589890771098796afb6aa7d238a8db3f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20b7bc99b476f45642d0ff249c36c02bd42f8ec93cc3dc4c75ea1cfde33b308b918382ea978f0c62e2ba5ed63be71d45', 16),
                    gmp_init('0xd634b4fd20ef377c290d5161ff37c61ceea72e35ecba9a5c9167601027945ef7dc37cbd5e70186e688c6c7ad3bd8189b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5248399e1ea78ee505e2dd380010ce61877e8a19b3cb92abe20f3041a260f082069dcc174e2f35449febd78ce9b71c22', 16),
                    gmp_init('0x5e08026a041d41e7be610834dc48c73c4bd050f0596150932c9e7bda8ccdffd9d75264229156e4d8393c4ca49d2323e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73073e7417042d13a6717d804c5b75a5f949f290606d52325dbbaa2f33f01076718af55dafed4d3e896a3c0be042a66e', 16),
                    gmp_init('0x567b5ac80bd506b930cd7748855956db6bdb418f09b41904da7b2143872ea76ba66db18def85a60b1a7b91e89741af5f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x89ac606a3a976ac71e39d6df7a9d39eda5a5f852964452bdb00cd47a250b7a729d3383086b74dd327a605cbf1d845828', 16),
                    gmp_init('0x310ab22e1ec6ccb49efe7f18e37bbbe84d38da8eeed7cec97fe24da6e1c388f2916f53c326a847c509df5dd5defb5093', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd7a241c6f86d8081399b2fe2f6646b54753eabe08b0f0c6c29d6e967d57f66311040bba59c1ed8981fa99eec2092094', 16),
                    gmp_init('0xc85915d216726bd50785eb35cac76369d75cc779a0542409b1f9210d2db2095713790e38c89b4280fe1cf1f374a69dff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75030622d9b9205816c8b065704e434cbcf20fc4945bc0db1cb1691a7f6c1f96cede293171db7ab93ad95de1a7b49ea1', 16),
                    gmp_init('0x118c1d8351ebfa7bd9009dabac6b6564bc56b9878dfaa2edf9b4f9d186475fe0f8c8484dbd65af6fbf8cba1c17393c81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1e78f614d9940a4500665d0a27100d35000ccf01e13abcd664b02f84cd2acdf49110175f0fc3c78889fce54aa512848', 16),
                    gmp_init('0x3e97e0582eca67fc9fb80f557cddee4a19ae5678d3f11bc7573263ad1d52f6959ce4bc1e54c7c9c4a80bb38e59400b97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb3807e9b97a3c69ef4c1b7bf64800431d8a3610c28de5015e62091ff8e4278a7d447ee1ec9b0fca0d4444ee51dcb931', 16),
                    gmp_init('0x435520b5dcfc771bba528bf4b117348a8bf54e6aca7a5c86673c3f25cb235791a1e1bbf4476d933b184f60038f234f9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46a66a85b643c096253890af2d25debdcd7611755c8f9cf1b468cbe6383ded7f0ae5f56c37fd59140283ae8b7c46fc09', 16),
                    gmp_init('0x296636f6c503b3c1686b065200c424deffe612943cf03d62adc3a3f8f8d89b230b07d54c42c9c025b21e25376c3ff68b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf98a1d0c378636ca2a582001948f66bafef3c0c140f6231c14d847314fec499544e4ea6c437242ccca4692a143ec921c', 16),
                    gmp_init('0x522101794167683be32c9fad558e795b52ceef47f417858066a352213d61964d156d666fd4e00659f5c2616255928e9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x777dcf2ee16eabbc9ab3530f5e069fb0c2eff497cd59f8e03d037a8a098604ed66730c030a3c58353d2883e90694f300', 16),
                    gmp_init('0x93ba92cdb48d63fe9705b04e5c1a85b12567d53dad29a9c3f5179751f8d1d397dfe50b22f01fd34683eabca2753bff36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x442ff1254857f8c384658274c8c30d20365b2a05c52c5d0cbad3bca3ba1737370c72667304241dd010524ea61850e103', 16),
                    gmp_init('0xb77ec2e96ff9e30a2b0ec5d9a7a0c3951ffed4aacb35c8788f02162b545ac8e8bd7781103e14ac5170d455ca67db9887', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ac1af1e1bd2db29862897eddcb6ec64737034d6e23ad7126b65d0cb3d174a32ee85569afd3e778c4999771a5d1c420b', 16),
                    gmp_init('0x7d47010a5b6643dfbed34ae840e0a838613aae8ca3ef48f0142b59faa102d05c31232091ffad9dd2f7ab0e2ccb9fcba6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x139ce60be48cb1b3a81e303a0b8fafe8fbed3ab17f3d2b307b2e66e4fc04dd69262fc08e0d2f4047640d13544c53c231', 16),
                    gmp_init('0xe0d784d8aaf14e01e2f49358cae22cdf4e1a46b5ce5acdff35f0606535d5e350877968f29209269009a5807424102b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa897a3f79fcc9f584421954b0d804a9f2d25d4b7a51a4399abed92a33f082e717d65af5d8691b009a135ad1e98a59171', 16),
                    gmp_init('0xe4241115d79908b5eaeb725babf2d5ea7c3154f36b10a05deec58a80c78f25023df89f69e1d089742f0e38f706f35527', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd70a67dadb0cbf0230114c475d68dcdf9c44e604c7c0c98f25ef4dac1e8c305a9f5e3326f3ed68326273c3e99dc1f5a', 16),
                    gmp_init('0xf4fedea478aed8e2b65398fcb38c89bace1c38e9629cf1272dcc43e481dbcefe45dfa0e554a8cdce3ad87c1098544c46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb63a24a4b37f7fd8dc386e0653a98314a41133845c445f1dfe8a5b9f022d62abd64e6552df95755cc1cd86d35aad8e0a', 16),
                    gmp_init('0x92219bb86695de4e5e95e5c9d68b0ea9f3698c1eacf743abac009653551639bce546a751d2728f32d2a667c4a00f6142', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64475d500e0c43540ff1786ea99d5728b27ad0f57e6d713736bb69687645c8c9a23549ebf7b436b59c7ec0224234c457', 16),
                    gmp_init('0xedd49c7f1d86b95fb20d92116bb4d9c0d0a4d250c56375091909f882f9bd6605a8f5904042fcca0a9ca6a54888c7d16e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x59de5a56e0344c2a85c3003bb658221b7707a8155831213c1cf6877ddaf57c5ece690ad306a39bd4ac45111a9211fa73', 16),
                    gmp_init('0x411d2298d916513afeb4cd34a08f5c25a41ca1e08199fac336089f518ef2acbb02e3059cf49c0bee468ac4c7a45d9e35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2d9a835fa366cdaddcec5d1fd319d5fdde89ac290f1aaf052764f0c2dc71892cad1648f9a4fa1475bf5bf9cfb2b8c90', 16),
                    gmp_init('0xe8cc597d05783c6204b14185c15e70037040e01be67fb56ec907fd631a4e4eaef7138da29446a19edf308e16564cc6e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33c647e284fc0eb253e42b48b1c0dad61a321d5fea83a64a3001e999b61580fe2614e322b106c1720d361718d63e042e', 16),
                    gmp_init('0x83cbbf35ab9e2a845515a2c9cf90172ed20d4d26403978ebdd0b0386f66936cb4fc4299066b172a7ba4644e0d330e54e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9934d3f89e8749c985fce4076e5bc287c3ce15b767de9b7b49039e18bb9b505123f42a646ee15b65d78a0f476c50b635', 16),
                    gmp_init('0x5ffb0e4e132bd70863e816dec9135f29efd09ef26853d583b8f671ccda6bc9c9639692d54ebae7c6587b3fd5cf2276b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1332d7680200efc8e0e9a140385dedcec14d9d3fcc3b85621367d5c0a9bb9e0600f156bee23e055e4fee5a94ce066c5a', 16),
                    gmp_init('0x7002c3bfdc5aa4a323ffb6ae40e3c17fa960a6ea97c7f7585326750a865b67bca60cb92d1f9f1d944a8ab442a4cee262', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91fa78d7088277a13bd8a8dfea3148c23f2ca2642b9fad9c30716a0da5d9d23ec152b7f0d0bebb67cab09d3cdd4b300f', 16),
                    gmp_init('0xc81de82d82d9b7fe60ea4fec46cec9ef3af94219dfbcb5292e35c7b4c39b06e3052868647877ea9827e656d576392683', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8880c28b917691eeb4f213785e7c68ae85521590721578a373aaf1be0597145d0d1c8df38ec1e59ee15b9e2268c9122b', 16),
                    gmp_init('0x476b210b098dde2a638018f426f0ffa9b15c97ea23932d8edb50b969dfab768d75416b2871280b3cfcebec82f215e680', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfebe258abe457a2f755e10d353c9c9fef49cecbec688fcbd8d4e49f4a693786760f2c47fd16642cf3ad1c76646909e86', 16),
                    gmp_init('0x67f8693822ec34052611283229ed425a51c5b45e573f7c67499b7e3ea955305468280b1dc72505d16ad40a196b5caef1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x370d68e89d217aeb8436aa2404d04db9a5a617d9496bfd5949bd63393559af2fa6441bdc5763bb98724cc931caf91c99', 16),
                    gmp_init('0xbd77bc7d3c5ef10bc8a1714455deb670c48caf3aded960a02b5d1cba59f1d0117bbadda29007f0faab831990b2683063', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe934ceece7f4df28c8ce8dda281edd39373b63debcd10a9543085e974370fd7ca6b92364bddf39a5cf81b8d6d5ef6693', 16),
                    gmp_init('0x1616231ad7968dce352a71ddcd4356f2a65632aa57a7bd2695a84ba0b7de561a078cdebb223d2b8739b45a792dea3558', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa106963451812eddc5d77622a96979c321e83815e3356b57dd3f0f4be7d4bce67a4df55b5bece3027812ac6f9eacc06d', 16),
                    gmp_init('0x5bc7c6172a50823bdb2b369bca5ccdc37ea237f2e5c488dd6a648048119a61cc56a428c8994421917d38a5adddb6291f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6446a70b9b01c72f499b8a25640879fe7f87438ef799cc582b2decb1c5d76d9e81a061ad54fc3facf3aeb152fba6934', 16),
                    gmp_init('0xe2ac882927ee825eec94ad5aed4c9fa903246d7e18274a5abc06a1f6d791783c397a41cb79a129e37d356f0707e58dab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4a5a22cdc090276d7afac3af85afb0ad38a0a3d5f2c89b7b45a90c9c6a95d0ec92a7f7dd3d5d24d21e1538e9b7375e2', 16),
                    gmp_init('0xe3e3ef3560429bc1a4941fa5f2c798e982fcfb5914a5ac45de420732b7544a0246be62b86cda4ae93c6d98437fd290c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x553a27cd19f8d51bff5a7fce976c2099456c6bf22730f52c85d645b6d3faa6ab311698066f591bb7d26167617f2c9e7f', 16),
                    gmp_init('0x548191198f5b93a0ee3562e22f53720215b5f19a28163a477fd09c1668282b81852aa18d8d767fd6d949f752170a402a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8afd00a99a17950b1f7eb3d3eeeec3d1180effe3a3234c62eeeeffa4162fa43e43614b6f42f5335cb9b41b088e1e7ec', 16),
                    gmp_init('0x97c3414aea9b57dd30e5e1ae9c55f95d4ca3bb9676b5a26107e5c86de1b6ba4cdb0a1fa4056223fc4e49f586455423a8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ec12d78d084b7cbbb4003bdc903dc6aaba9629554de88afbcc4322e417fb221ec1d62bcefe97e5beba8e784bbc7e72a', 16),
                    gmp_init('0x5d74a6c96f80fa8be716ccfd49f4c8cf019938092491c59f6e0920c206936041028784036af9e4de9093107bc3d9d39a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdff5d78e52e83a1b2128765415b43936ad5643505f1dbe9e8e8a314685cb49e8bb26b1f0baff67e214a5541574a2d7a', 16),
                    gmp_init('0x4db0bc427857aa4c13f5d41ff10b944a00377f995963c951ef01a9d8dd2d7ec4dcc72e10d4d391b8e715e976978e2b11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabb03a3466938ba111143ce096463b9f4c7a281e2a5bd00ce88b7100d31231291f6bc73fb16426502db6411aec88628', 16),
                    gmp_init('0x115548145608271b91cb81403da783e1e88a2401943275c9c4d58be9a725caf5313bbdf66d3e0be954a306faef49f86a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79d29243dcde410789b81c4f6a8ece33bcbee39a6d59f0c5464719634f6bbc3e3e5a44a7037db03463c86b9043ad5051', 16),
                    gmp_init('0x99a5cf1bd320b877e225dcce675bbb074204b65694918c2e24c45a58ec1346f4b32dd9da7579045dce4e0ce5928f3240', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x104bd81a2e5c2641890e6e9e1629423e9208cb2e162a17664e186cf0d807c337070931d5091c49539a7e156476bd8239', 16),
                    gmp_init('0x5cfbd277b9f047ff7312b6a1fd9be1b5673d7d95730bcb164fc1ee29e27e3d0c9930341da944bb844d6e79d15cc3ac52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf28fdd5c09c364175373d22c8afccc15a826a607685c744024285f7fff2f1d534d7372700435537f53055ec4806b25b9', 16),
                    gmp_init('0x8d53372b64b5690e47bb254e9313bc807ca1600f375a08e3dffd429e4276b92387b1666e6047de74340ecebf7e3444b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37b9b726a36c769a8f866e019983964424ced6aa4cf495fd64c230b942db236b2614a4df49dcbd71886e3b9f7b00a982', 16),
                    gmp_init('0x2e4da390e51464ce5c8871db8fc29a847fdee32efa7f8fd303a11ad2cc2c531144a1b41571478cd6cce562fc4514eb3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c30f1e31b3b97398fcd8803614fc6886d8caf0059aef854b9917697932633426449a8854edc6a2277eef9adef78aedd', 16),
                    gmp_init('0xa3e17f44c2fdd6fb80d471914a1e48ee5c2494b5bcbbb181949f9fa188a23a7ee4a783f710fce62ae5ee56e9752242d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93ee876c28abde16870487d4673e4a81d065617a2b25537096c5355f68a05e3cb23638e5b0d61c4484116629256a1d9d', 16),
                    gmp_init('0x23cce5a2d61ac4ea2b4c337fc57f753220f24ed372de9f0baec09af6748a10f9bbc4d24a1d2e5baf9634fe306e4cc6d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4eba4e8cc3af97890888d8b64d4178bd3d9c095703afd98392eb41d79f8cd22e82a5d6944ea5843d49005294e7548f67', 16),
                    gmp_init('0x630fb8a206e565a497781f0268da0016f2d79433fb556ac86b4d90fbf0ecd785e429e5ccb724ebc6c7bf9868b09c40c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x300d7e33ecca4aeea0e4214c20356571d29d92a87f2b3ccfbed5b418a1d4c21b662039c49bb141e6dbdedc8f489f20cb', 16),
                    gmp_init('0x580040d6df7bb617aaee9ce29bb91cfaf5e900f28cdeb29e08ac534118a2c68f3b3d60a49b08bff731b54806901de4b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x852f270c9f03c677d5d964fa7aaf390ef79310ea77a4ed25a53fb412040f7fda8872bcd1c0464f79b433a79cb2a2eff1', 16),
                    gmp_init('0x90b47a29186d4fd71163d62e386ad6e47e421012c5f33d9bd5739a6077b4807a108fa47f9bc49fddb5e506a4dff78d47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23884ea788687c074fed63d402f1407f4cb1de6223602f0ffb95d2a5f9f5421e2042f38a46345a0d9e156aa97c9fdf89', 16),
                    gmp_init('0xdac2ea61276375eb0669a5d756015f3e965b0a30eb3b436ee096467b65757afd8ae482a4f45f97f0ff92c5c88a226869', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc854f9893e269d40b1c71b85a3440ef970203adeadebf56cb79d954b4910efe0852ea9771eb496e2d349890984343f3', 16),
                    gmp_init('0x7ef81e91dcb4af8f893325c4f79b7f4f8375fa1af6ba38e9b84b4ae8f143ab0336890fb73312e1194ce2106b99352b0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe049af8b1b945b9d901f96fcadf87a8da1e578750f95d836eb0d8e4aedf2cae1f63c9fe82d21c0046949992899471fe5', 16),
                    gmp_init('0xa7993c1511ab7a09f4495b0dc9af7af962d5c20e5b5f04cc49e16fee95cdfbb2411189051f5ffea1bd1f188d1e551f66', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb31975d3f87947487aa7ae1287ec952d7a9336d43e1774a6b4ef28cf1cc0d4b1950f44818591e9ec0762fe2f08d7e82f', 16),
                    gmp_init('0xdf11408c7c371327185b2584e7dcbd8e63628bc19ca19d833de7b18b6186f30e99002b9530560a02b96a90424a220ca4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde9b67f3265436adbd5034660b6b608a2c60bdca21ea2fec04c9e7a4c4dd3e107bb818f7c700ea1841f1a766394b44df', 16),
                    gmp_init('0xe3ec604ac8bf365835d2f32ac94f4dbf82df7261f3f566c03e6b29ad354e9bc18edfcb99520452e53169f3d907279157', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97bca53aba07b44779aeec021c2eb54881e4eff138bbb9941395042e85e282800c980c600a39bbe8f81452f8fdcbae9e', 16),
                    gmp_init('0x10fe0badf517bf31d7d62d4ff955d6aeb5fc567f7289c3664687114c29e3065f8dddd400e29aceb10718edcca562a5ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x470df2a08d564334f48cc136892db5a3a5224bc9f1ae0df729c526cd0b05c74b4d95d9c0ccbab7337a99761f3a9d8caf', 16),
                    gmp_init('0xe36389ce96fcbb8d4655716c9942d777c7790f33271bf94454723439d6ba3734656b622f82c88f214f1f6a9e6c143072', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4326dca8fca27de9065a02c3d79c65918be7fae556be797f89954368fba00599d57a3a258d3a30daeebad8a389660fd5', 16),
                    gmp_init('0xb7c8cbb7b438ad8d493ef951df115d79e2c681a647e3e4d7142fd06021cb759c406c6883711eb85a5ba0e56f965e5c25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbddcae2c43cfb36d3d86e2de85e1fb0ec31b8eafd3bd2d5de84ef68cd5ac6e49dd5adb5d61ac012cb8e9f7f36beaadcf', 16),
                    gmp_init('0x74b4ab69a37891376782775daa91b672cc674249caf4db732c68ad375da71a67dec0e1c3ba44eb6c844945f983140338', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea4e3baf6c7d1c578331a1570b05895bb705b4274700240c5998a2f5bc1f6a4f963a3f41e5c16f88c971ad60b3dfef9', 16),
                    gmp_init('0x2fceaf70ee53b734b6226747889ad5656a1db1b37d224aa94cd285b6e14efba8cc4d16e8fa45e55c8eb45ae7b50018fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22517a05d20f46991ce5a8e2b003d730889a1b41fcefd79901a8072612e11d7667f00fe0b54cfa539ef4a89d4fab638f', 16),
                    gmp_init('0x76bd1c1a551d84ca30d476828bfee08f76e23ff962009965ffa68fc33f87fd3b7c2130b94ead0cf4dd1bf7bdcc4ee7c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0197f858ce2c751b1a19750d3995fc21699edd4520a173e7f268c2593557e1505a00fed02d03b97c699bfbfd129f4bd', 16),
                    gmp_init('0xcfdad3978a0ce868ec8441b5695f323eafacab0914e2701257fb07af11baedd1ec8f2a5374a14cce6e0c477c9ffe0af9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8039f80c763d269e2b0f81c91df250d3f887ab499e73f363b7d6c4599de60c124f6c0c95e8a48f9d370450aeedf2bf7c', 16),
                    gmp_init('0x4e177e8d18f6dbde20b8097264d33a4fa00c2d52da25fd439fb67e042e19bc755521688b1f29b3d5751bc4cb9194d7f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7eba70c45a231308b182034683e8413601600a5629e473a9cc98e874ad4b35776aba78cc26b04a6d40d12555538ac2d9', 16),
                    gmp_init('0xdaa3ace780df56f1b4c2582d70b170767f95e4a89c2144622f1585ebfaf6420eda42c12486d214b17fa353925319b3ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c800f88700dd7991f466c02fb0296f58da64d7c5481d4f61bc5624bbdf49b19e5eaf145aac5ad4ef0ba185e7b20a355', 16),
                    gmp_init('0x1bc9ec25789f4d25f1ae58ca5d4882ff7316b539a7a09d0bb1607f858c1a93f4df22d14afca3a337de6b70fef2cba317', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x362c57461138b0486972ed984edd351f3a60ea0eda9c8b50478f45681dfea4838b0a7d46d65f982bde9ccdfa3386b130', 16),
                    gmp_init('0xcf1fc429e2bc3623a9227510a09b59376f86000d94fb3b95085139835467b25ba461108790b962ec4dd37d1487e9b696', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbebb7c4b16f52ed0fe54938a4d8a7e0e4493a94f5624cce7ca50d74f7d50f480cffdbe423eed7ab8d39fb91585c0dca4', 16),
                    gmp_init('0xa15f427c5eb034ec254214bb3501a2015f11206e90b65af47463cdb4815c6ea1442d210673a327962867f3f030012f95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdac28ec2b070223fd312f034f31a6beb82c70c908e466318f41b94212aec4e7ce4e6ae126ed283de1f72ab760762bd3e', 16),
                    gmp_init('0xb6200c0a8922cdf5b15af695fafde8f26978fcadf6d9fd48855862063379e3200f0e0fa43e22398635aeca932809e73d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf84e292b7bcc96f57430740ebec4a862f1f8e726195b04d3f94c76cd8cc5b531ddbeef12749c85ede7658a429a87bddb', 16),
                    gmp_init('0x3948f91f6c08865619c9c477acc19cdbd94d431d29ab1ca6e5f7a48616ebe27e6f60fb80dccd2a07adb05a6f05afad92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3db8468d0dcda0d51621e068c14c4ee470e0dd6f38a39d9fdbcca42bca21cdbd77aba0b4f4404f38f2058252d8ea58f2', 16),
                    gmp_init('0x385ea9629f7c3a4b32fbb970831638fd0087dda7907626c5a80f413708b6461312bffd54f16e6c26f4fe05aba7c1d2a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b19f14b45c52dce70b8fca4bf657b4d35d9a5ad870b8ed2176fc23fb16f84d8fb80114d199070b71928cb30c815e0e8', 16),
                    gmp_init('0x7a857c7a9e034c031c5b02197595c40530448af19e14086ee4e6d7ed897f24b971a895c790c4a329907cc829e0e4472f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a94da88e716738d1fbc32679dcca36e3d325ebfb97879ced95ff55e809892c1344a1321b700697ade75a86751e8ef2b', 16),
                    gmp_init('0x396f6cf9833acf9b3653179152e9c2aeca5ac8b16f2873832285bc725417ae5c5a7ffe2918ce4ecf6a830772c67fe39c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef9cd74c6e9be9a03d03f16b3be5164104fdbbac37ef50a694ffcf3330c0ee1a872ae179d4c420270feadb46be13241', 16),
                    gmp_init('0x10b93b7ec6b31778c864763567c44060cd33f8153955b9863268737bf3af8bf27d73713a4ecd343a7f484049218b2dd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8df8685e54d028e84c580ccc63eb05a0ad7b3f8906e6720efbbf585d20b71f616b7439a26e310863aa10325e38471f9b', 16),
                    gmp_init('0x90189a300cd5c03f871f1b11c25fab5cda4d536a7cfcd1dcddd747fd744c685cd5c2921e1a0de86d08acf848dcf87dd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62376cd69eab63088fcf1202f366347df2e23aab0dc2979eee6e03629b1db6e806510e3b2f6c37456b587a623d47877a', 16),
                    gmp_init('0xb0fc5563f33a354606c819d45215157bbc273b62608c16e0260e99e66b68780bd4ade6f0660bee2eeb92f8c99ceb2c28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x899bb138027edcdfde42e060cdcadfeccde93ee659fafcf6ca4c6129ed4184dc3e6a73ecfc1d4a68038ddc4808bd0cb6', 16),
                    gmp_init('0x729605b27284cb693fd1063b71c8f4247b66844c1c3af83bff7933143e301f02dd093eec7c0b49d3a2017e404dc899c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde97d275ace42dd3d34ef04cc310a08eed873faab175118471aeb8cd5c2c8597342d07d12af834c3f5e194c261312317', 16),
                    gmp_init('0xc35cd5ab1a01976cc69048424a6a85b4b2700cdaed4f5207745609bc992891c52da8171a10e615e2f693f82c7b21491c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b4a56a2b673b8d41762394abd5e3c3fdf5cc47b0f5c934de0e710ac5069b20105fe2804127e2b65d452b0c67d28454a', 16),
                    gmp_init('0x53c02734e3a594101665d1a5ea7b6de00d717f3277221bdbab7f9af7a5bacea8ec25fb8cad5f74365edd73de5f3cba5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb359fe7022e1e09b3c4750fe61d32910c4c1e247ad5805e6f46b8357c4c1b47986c0341e0d0a0916bcf1d0a28a82fc5f', 16),
                    gmp_init('0x6332810843175c9e894da8af8c8762f2939391e667ab0f6c099e41c261343f310a3bd4f8e528bce889c17d01e1004b0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6d2a7d11c204b72ba9d7d7c694d6e408b58606c167f0bf0fd34ef24db4545a44032856d1fa45683d0c37d5e04bacdc7', 16),
                    gmp_init('0x7af00a676e8c01bf25451caf45bc0f6a3b2d62600c90dd0840c38d3ed85dff1c17fce2fe6dd3d0c59731f9191a054bf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54ace024d80978ba05ce4423d89f3c9c80b5076b17e90de68a93bcce3ecfe3aa3a5af49e475439a1790ed9677572afd', 16),
                    gmp_init('0xebb400103881edc582e62205c62c46cb5b9a80d79601ee220d86c0b2e7fdd2be67432a886c35d0f35b3281a529d7cf55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d8ba43f2d6160c9fdc08b4cfe869aacce9aeb72438d98f04ec470128ed1e3daeffdc478ba53d130f89ac3cc0fd3f1fa', 16),
                    gmp_init('0x5aa398cecb4aa8062b3beb5e8d9ce27fec5378886f802c0c0242c6192655a45462f8889384526188ccc98a5e2de1b944', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0508bc353b3ec566df0fe65e295eddc176332767c565858a7cfb9cb9e0aa66ece0c8168932623f0f12786e912871b55', 16),
                    gmp_init('0xba343896d172a8b9e7ef069fc82c08a9602565cdc978a57e9a63f88c9cb1ed7d3094d499269691d8b988bfc1e1f528b6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf4095b6fedeeb69857bf0a2370f1fa008e3ba3e5ab0f109fa8c8b378263796fd471c2fc852f856bc1ec8835640a566e4', 16),
                    gmp_init('0xbf6ec45490a13cb3ab946c508ad736ce896e8f4e8651b370202b59058a9437e5637af70d31ea077699472dffb3ee6deb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xede509ef54b0511ae1d07ec7048b845d3d61b0b3a8453fd4965c481d8d800be7eeeb3dc4a2a968874f7181987cd61cb4', 16),
                    gmp_init('0x9c3b0c3c92f4bff5515a1ff3f4305c3247f11a99fde11706d824590fb23d9ff27e2d5bcf785d3008c85b81b54c8b3eed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc06adaf41cebef2437fb08c2c72ab23287094fad8e1416b2a67fb536019eb69171c8956b459f311e927d37a3a5b4b9b', 16),
                    gmp_init('0xa09f9e9653270a789b660a643c235b31a2d5ba0fc4293156339891e7921f0bf4ba53a5ab1d606dfc2a262ba064359006', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2173d930442c035ca8f4ac78c7e05378f7ac22f04b46abcf6bf2eaf9a4ea7fb7bae6e28cfb91a48d0660625afb8918e1', 16),
                    gmp_init('0x3ba2c954cb36f4d39e08e59d315b2030ffd57fad513a7a5902315155e3742b308f65f74d46996e6d93a2e1d0c12c30fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0196eb85be75dbaf37214d2a1c0eed43876d60edb5310179d902cd1b7bfb5df48d93078916feb023d5cd742c494e0b9', 16),
                    gmp_init('0x8ee6f69333bbc97e8210991dac943754eba4b79132d087f45f6a1e423aa13831ad7b7818b3e354a965b7b6211fbf3871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb19282d9c603f525c1476aabbb079182fc0cd4ac8be3e8984d9b6f9091c4702f36ac746b5882f73b99479ea432822ff6', 16),
                    gmp_init('0x8dbb139fff5ae03fad7c44232141a03460effaaa5db0a6836f2297523013ce01ca016254bbb429ef6e0df374fe0c6887', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4033402cbd7f6013adc20ab918703405c396c33ef39b2950b750bceec06a4bbdd0951afe7e7f7bb6bf4fd27df454f756', 16),
                    gmp_init('0x61f5a43069ec24ba0f932a67c971a63cd4f4c994eb4438c2249fe2cb761caffabd43371b58ca4f34236be56dd90fdfc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f1bcd7821240d2008cdb1ef77592de0fde27d3b63026cd7cc82e3d4f310fe3aace6c9dc9ca80a00a6a7b03cc73280d', 16),
                    gmp_init('0x6b0ffa39a42bb2c1b515ba0a4f0d276c554c231de223b7702be43fef072c1dfef0d9d44c20110d7b4cde8fd37b60092e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56c704b5fe670abfbc65dfa01959b71fdf885b6b0fadaf12a9cb742e3ec2cb2de6410786353938055f77191befc7873c', 16),
                    gmp_init('0x1d65ebf82a58afee2e00b79ed4a2eeb5bd06392c9fd7371bac067dfbb3f793996038f1a09f14aa24e8a991dec7ca33b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x633bdcc78547bd3ae2910cab1f2628aed2342d48047b63aa059e49939ef899042435c6a2501f6713cf3259c9ca8caed0', 16),
                    gmp_init('0x6154206737d3e685a81077de86849e94051711fc1128167945e7b67f4478b00c55736a57250676a85414ab2d68d9d664', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b31afd2de035314d64593ad31d5febb7718a371b8753577ce97ead013caa04a246d8939660b4804fc76b2b714bd3a5', 16),
                    gmp_init('0x93e5cb91ab9272d64bb6b4c37b68edd44bdca0afee6ba9e1babf3f8e66876608f783e49148eaad3f3b5ef2b5be68e2a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x874fc4e9a617554619881fe07fb91f06cf93df7c1b2c4da6612cfe6b3d353c8bae1a0ae0ccaeb36590aad20d23954e04', 16),
                    gmp_init('0x7b99c3adfa34602712302e60175df50bbd921adf26bd2874a67b9a63b114b34f3e8c20a07ea789e976b432304c3f2251', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3ad483975d26baeae70404fa72ae03c62ac87672fe45da62341e6007d1fc5a0c7f69675c0b5b7333159c26745afc8df', 16),
                    gmp_init('0xd97c6c7460283880facb2253afa06947ed108ad6d648b55794a904f08d3f74a0b2fc13e0e57b8f69f8c033bd4a825b7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc92068908792abd3eb0ad75a246b809afc87c6f5a606b4e7dad7b784718dbe309248af05c2ecfbd395205fb0535100e', 16),
                    gmp_init('0x5e34dbb92836ab8ba5c2eb1ee25625be7b4e3c5f738eca25dbce2f465d62b8ba38d1c29a901c26c100a3be79009f0412', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4974aa438b32358fede43491476fa4c3a0cc35a0e136f30e45ea5a0d77dfd7eb47a667870036ea1a80e21a91cbf551fb', 16),
                    gmp_init('0xcb6b347947ec8e4dcfbd1e5a1e37cdbb8a8cab04c7c0b4a6f72aef54eac955340ca8827fe49055676a7b1d87061e35f6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9d755d13234edf6d79cb7bf169420b94846a727b39bfb9cce6d86f21cd1c65ed19b11f296d03b7b64a022566843354fa', 16),
                    gmp_init('0xc490547b2bdbeabb43b47a5af5eab7947ce2a463321df41e0f85c2af52e6f955fa15ea934078f9eda17f33fb67903be8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x699df0e0fd60e3d2a8007c97607b2e5c037d52989a7d39146e549c8caba006a543431d9a368ae121695dd912622e4d42', 16),
                    gmp_init('0xdb2cc56addbacc9b7ecda80b451d6b41cacd5146be44c2a65ad5bb968ee6f8538f1f6f4403324e141c875d46f0d5cc0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cb820f267a1064ba8104ecb0ac3726b8991ef6c599c6b8653684a9c9709bc0e973645954bac3acb240345d49d807cab', 16),
                    gmp_init('0x99c442dacb1f2e18ddc7244022cf1a767753851d0679cfe827264c294a2a14d56f8ef7a4eafb0e2f0d8a9b12bfadeb38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf39eadf112b4c1d06e908b4ed40bbcc9f874de9ee23ad957c2beb3b1dfb3d5b03233681c71cbf6b8fd5361146c236097', 16),
                    gmp_init('0xc66dc376be0029f96dc2f741a53eeade066175245a805f4252863605283f634d4bf88e2550e7f46cec7351b06303e910', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1884c0ec07a449762c6bd7d8b782ac435bc5ebb9d3f77764b751e94adefe6b70ac099b0a8d2bd5d00888fd92b23c896', 16),
                    gmp_init('0x29b4ca19cb80213d40334439ba29ce13a9a8c5d9265d469cd0a2ffaa80bf1d92001f95d399ad10facc03d9c51e542b1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0ce051561dc035da83e4769731c5a36417ff1e3e0fdc5d03d2bc2a6b4edb66b1abb57790cda23cdf1641195fce288eb', 16),
                    gmp_init('0xd0fec4659070f3dd8fc873cccad0541f1163b33efe42ac7858b17c79047e943eec850ce0d068e24a7aea9fba34413fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e28f03994a33148b2d7bd5ca6e151e65fb0357bec4bf280767ac904e19058c2219f27d9be5c4db25665d855059e8c9a', 16),
                    gmp_init('0xf766980b17102ded12049c3c386832269c214dc497c08110fc5305940009afb62ebb9b24c4690f3192d03cdf810f36a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4387c1c3fa3c128dd0f0a90f3b4280482d726a8ba17c7bec49c3deaf818a4b4d57b1acb2e579ab4fe1024711cc902a90', 16),
                    gmp_init('0x2609076bd7b24a9ce731b7b9bc7155f925fb4ff1bc54d6f9cb9731403e42fa561ca6de6cee5ef58f0a2ce76543cf5c3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe232bcf3e4fa3c3350665bad18b10818d4cd3760f314ffcd686a390e8c958965da99348f8fa31e0871194e5badaedba7', 16),
                    gmp_init('0xbf58bccf20864ac2c1be8e3a62c718b2272805aa5971001fa4cdfccfb30ffdb1ede5c239fac95123c90b0cc1ee61c109', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf8731cd2d1a488b403e6ad73873c7f864a4b8f3fac9e56c59beff4e3c39586ed66c851b8aa966dd5735fec9451ad3ae', 16),
                    gmp_init('0x3ac446533bd7095963133db6f1bcf6a84713e7a5315283c07f530385d26ddeb48928ce0d922719de24205919e974449d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb1feec63271462e68b34e6cd1c33d5bca0b37c24782519fc42561f8d15ba0f2d955f4eace532067fe6375e83d47db66', 16),
                    gmp_init('0xb168819fe55a56359a726e932a2f6e41b44828afdcdd692fd103d659fbb0c5cb204db7be5e08deb8fc212f3999a1a86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb05910ee5f216dac935cec58705425ffbd435514b2a37a7a20e8119fa62dfc6e497d496eb80ecb0523be2e48f960d72d', 16),
                    gmp_init('0x174e8ed305c8a96417efea92062bc814fd1c29d51a8793c9c50767df76a648db33109c9cbd4a27b8336d827e45a1fcd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2955a6a66b6c80bd211f50773c5b022945a3e5117ec5c9df8f84b8cb7c8373b836c5658d74a46e3754419ab24cf896c3', 16),
                    gmp_init('0xca96932ac665af5e57708ffac214456a101abc736cfea329ed34db7378282613da814b1647f9fda756a0b7ff2c264438', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf4333234d0ce871256e02afd20c8c29dd18443ec27ea99e16e23d8010bf5c80f63bf0ddcc73aac7bdb6e4d387b8832a', 16),
                    gmp_init('0x299e15620acea0f12397a152d7b85ebd239f924f33ee133fa5555b19c67c39ed5d9b2f0c64d7bf51a34aac862f554a21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1c0078d7def3e2dfa503a7c001d8ca5ef6a7c21c8bf44108c8e91e2553d236fc96c7c967e0140ba1e8a0602453f9bc3', 16),
                    gmp_init('0x54a91ce6551bc8b71106f900811fc7cce9c6e2f58665d6b0d5197c79ff56119d07f53ca4deaf84cfe00cd0b427ef4d9d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf532389a060cbd1bd6e98b0d37ca7abc4360390918141b1a4b58808b3f8686a92c3e0c91558717db39c1b328d8ee21c9', 16),
                    gmp_init('0xb9d2852cc3b38e696f04caa2de3a82babd22cfb2a2124163bc40ce5abe64360331ea31b1085a4e9a7a7e183923d86ecd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5c22c7da00ac073d1bdab6c10dab49bfb590ecfce9b050d33df4305080336c4eb0ef027c20b658a969927c2779fa568', 16),
                    gmp_init('0x9be8c8da2c89865fdec9bfb542a66c3f30ebed9f8b67679ae17dab49d7f536db6f3aa29e8ce352d7e5cb982cb77d597f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x418585a723ee7d764b3f91021d69d606e1a959e6b7bdefe8a91cb7cb5b8f7c2cc703c487f58dd3a7ccea65f9fbf5de5', 16),
                    gmp_init('0xf190be7e57543114741b85ff12ddb1024e83ce078a0f010c56ad8f91e4bd2494aa90698a0d83371c6a7e5c7c5b797de2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe90123163bd23b94eff6eba448eb7302d65ebcaf5669eb850d09305e4e978b125166900f46db70be9e288ebbb932196e', 16),
                    gmp_init('0xbc486607ebc263943a0072f0b493f447de8c4e7dca741397f2490cdf2b9ffa4d111a6aedbd15553e9b6592a0822fed98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a770f8f129fd4665b9467e66292f5a9f60b9d3b1338db1e629ed4e73084bc48d18151ffe2208a39925cbf46b820cc41', 16),
                    gmp_init('0xdaabebf43cc4c2357993c5fd468318af4efef311286a9c70ab88d4875dbc3fd7a0ab0a861ea8c1339861f6017845743c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9472cae24c40c1bf543472870cf9e1d908b8fcd5c0d93509f54e35e6a4a2925291d2ea8af1d1e20421b1d5c1d5a9710', 16),
                    gmp_init('0x9e769bd554f4517639ed0892992f22aed932612af72b42a82388b62c72fcf7dbe6bdcc1efc2455d104fb0f10f4bc26e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1e6e5e4fafebc0476962f417dd7366b93f0298eb4e18052a3c6dbaea15207d55aa2b359e02c66779a5b763bcad68884', 16),
                    gmp_init('0xf89cf775716aa814eeceec43981400f35f70404b287efc3545e38fe0f8d84364c29ff9a8c58f3797adaf35a2b7cf818c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6276cffd19f66142b787ae46140b28a0cb9837a39deef30f4f1cb39deb9b06671f93955b633caaea3c535f4758b8517', 16),
                    gmp_init('0x12e78aaaf0118aea0a0f7ae17886aca4ac1ca076e6ef27895a3911b3e2d88f635b81ec2afad4613f47da54ebd4ff6c15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a4efdea733bb4344dd104e88b4ee9701263dc6e16361f04c1057efa78d58b7e5d36c4451df5d737e3035e8bb73046bd', 16),
                    gmp_init('0x7b380b0c906e8df1744013ffeec7fdb79744cf5ecdb043a9814bc4b707e01ec5f9f8363b61f44c47e196405e771ccad7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6255b7c66dee5aa3ae55003910eaa6fd2411da0c53d603386fb86b1b72562a019218e3fbbeef6674527d8ed2b1d359f9', 16),
                    gmp_init('0x24d66b81f12a1ec508fac2275c96c5dc32603a479d0ba2b953a49bf401d9bc8bcaf711b9480d3a5bd32abae0dcc02d5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3d3b27d0d8690be32389c110af8a3de3ef248fec1feab425bc04a032beeb8c654e727e856e552992530775618a2ae91', 16),
                    gmp_init('0x19cb80b00c8c4aafcf84aa5dbb3e880f403879dab5a0fe7a94e65eb71297a5aa2b9802ea3beef187757dc8e9ec6b2aab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8e6315d8e279b28d5ac04171b99e4d2110018b9f5fb70c2a8049dd09af8a0af68c2cb6e7acc95f4f66a761c642bb19', 16),
                    gmp_init('0xdef711fc597dd8301713f7c3f902f9b0d4b58e15b9023d22e5db6e11c60bb274541db3dfa0b72dd3405acdd0eab47d1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf181e550b10e502fbb78089d82faac61c05f2c33065dc57442690869f0429fbdcff73bd59a78c6ce3e631f2a0e7d1eb', 16),
                    gmp_init('0x476fd1648f533d5a72e757608cd734a3bc741abe7a6026d59c954a5fe792b218f4eda4c30187561ea1922ca7ff3ad464', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8639267759627bdbd718555317771ea394383978ff9c88f55e85beae4558d2d75f7c554e562189d1d07b7e8bea9707d9', 16),
                    gmp_init('0xc732e647b0d621f5d32a0b59b9e1b53b69270f6fad0880a110995e3825148537d8e01dfe1b13408a5b4d20a91d0f432c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec5178a186bd702ac17bc40d1b7ea9fdc6749ddc6f0db54b7f2fef396c065fdd790cf3d3e04187654157898036e48931', 16),
                    gmp_init('0x3afac506992051b26c83ee80cba1ea69281a7d2491b32ee96e252d7261f65d049239f5d181deca0d22895800e6276d0d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa3f973765d6bd8af7dbe997ec1bd4c63422454f0da220c9b0a8ce94054a63592ffe3075972dcbd769703b2f6364f3d9b', 16),
                    gmp_init('0x228c222833435953061b2bce4e84c4a3f72bf2a53251dfef19425828076eec6c9fe70e8ccaba0102acbdc0141fb62abf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5007df563b0fed0baad8a9a5ca3824c1be42b59a865c96688e5e8b2688257d50ffebecfa7889c3f0219429a83dba7976', 16),
                    gmp_init('0x68fb60a657871405dc28a26e812dfc3f732efa8973ec8bc104e20df75d4dc8b971a89236a122379c26a7928964b4c044', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39525bfee4c5105eb1a009c8d5993067d015e540ee7fce776b418bd52ff96bde359f9c05409ebd770e0e4636a2f45920', 16),
                    gmp_init('0x4c788de4cfdd43eaa38e24db16f420a25285a9f174212bbe4789decdb0f7a5dbb729e9da3d0d23d71f9fdfd35f85aabb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaeceb2d5ddeb6dc9f4ef04eba22d9204f4b0550a2b98b6dbd460ae53682d570a083ec61742ceba6ed5a43c8ce361626a', 16),
                    gmp_init('0x858175324b6c9e09959971165654e5df24abc0775ac83157da61ab45e4186ef720f7f2311d104da94a4566631fa863f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe7aa0b1478afba6eb38b669a70fd3c4053deb2c895a49378b889001a9ccb6bb663042308765d06c53538a11bcea77e9', 16),
                    gmp_init('0x4ab43385af675cc36298ba9e17cc5c27e0d4854d147cc0f5360fdfe417f8d2b66f7eb483eb7c6327c322ce90ce6dd6c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2cd7c2b28f8d648afbf0b8dd134d24db6ba33ec6945405417345ba44f315c950be77fd588cf2c8169bfbf1c3413abd', 16),
                    gmp_init('0xadddbe6e791ee6cb3e6c1b0865a08a6cd8172259c8571525c4046b3335bc4f97281d12389582da40301d606961041f5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa925d0a924cef0890cd92abc5499d51cbacc4cabd4ff0df33316e0b8c8c08f7972070f76e7044bfefc91c9f4cb882c2a', 16),
                    gmp_init('0x6a0d7c7003ba597c1eca46cb43df0d1434b687c1ddd88c0660b86cdbfe1ddfc25ecbddb0f638d2c0283ced4e78ae5070', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f3916064945560704c5c0ef51da970bd4a5771ef91c31596abdec43684fe3d462c8f0dfb69b4f29b11fc57c3a5a01a', 16),
                    gmp_init('0x5be970dc0e40a55c8039a1c4eaa5c7f57251617b667823d500a4ca71b44db54413ab179b4b2e5d3ed363315d8434a8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15938aeb17f26ccc7b2c6f2bb3ab240c153cba5dcea1d73c6b094ffa5ec5606152466a2ba9ccf36ffa3613fc200bd009', 16),
                    gmp_init('0x98bde7e5c9907cab506529d5556a23f7c89ca60c9dddd487e9d5df41d9bfc9258eb067cf966a45006d91a5fb626c8f40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34f82f6a7bce205416a4f4d2047119d13eca8ec2a64dcae8fe39bcc2df1c10ec7c4caaf7e07c14fe1d1956ca46fab11f', 16),
                    gmp_init('0x343f6ef9343a3d936bb4781345c589ab4bb43be79ff939410094ce9a48f9ac9e7113041b1eac67a3eb25fc329f63cd80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe09e59ce98ab6b976eb0d91770696f8b26aa86ed1c77bf24cedbd9ec59b00c9822e4dc4ceabbdd2a0c67d5629332de10', 16),
                    gmp_init('0xe8b8fa6a860025ea8bd33df7810b1dbec7ac1d50d9ee11e20453d81e878887069f7bd6e18df925a5769b39215cc8cf01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f0e7aa3652b7c4d53291228a2dc39bb5b6f2450f66842a4ddf6ae35e56ec0d6ed4a5a91f9ec8b5b75021d1a35411ead', 16),
                    gmp_init('0xa4c9c17cf5d62f0e2c9b330e3cb878feeea51f78aaf854589bf3dd18830fdbfc7af41f69a385fb8e856807d443530ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ef64fcf1c99608942a1034aa228f2a5c7c78139b2a16dcf572a4be8d098e75604f214a79bf9f6bceeb75282241c6172', 16),
                    gmp_init('0xd97759ff042e5a523f9bf3a0754bfe5a866927a61ef0d5ae37d64bc7c1f1184207ebf1732379b1f39a0d8620eb0005a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41ea17047d875170859815edaa3274378388e07cbb3ae4e25b98dcbcef3513761a1b6494b86d4fc43c6d538369ff9d3d', 16),
                    gmp_init('0x96c6244e94748dfc52fd810e0f7c1bc98e3fb2d0197c5cc079e4c73b7fb39787945bdb90929002725cea70fcd1743c42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eb0d1e664c676f9d8aea60e5cf4730b4812d0aab65a408a7d5577cb64128ddcf33beb91fd74725faf6cc166d8937fd2', 16),
                    gmp_init('0x1eefdd96b436474157f044cb02559b2de9e8bbf7b2f4d7f5941f5e81ff99fdd76c876d5d4b724da59087490c2a6c7650', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1b8607872971b4d63caec84571fdb4238ea6e63c6d9fa8d0c867147ea86ca648b68661b30add81d522fed8ddde151060', 16),
                    gmp_init('0xbd60a0400f597307cbefa5933f6059b73750825e38b8d1161dbef0a1a4e95e69630c727a5b5d3e242c6e8711de1aa18f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64752e971303fc3e8c7985bc06aca2e5ff6e8130562c17fd2bc603423c8d610e50a3ff4643fbe8a80147632821a86f9', 16),
                    gmp_init('0x930471319adc000808157767291b2937baf6f7b7dd8c9e89c22e28f80dc2df972fa9b638f7b8a3b3e0d3a7ecc9821894', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd87166196ce0285b0993566f8282827f18e5648164a48cc858181da51d4ccdcf2c713f859ffa31127e58aca65a707ed3', 16),
                    gmp_init('0xb2b275c29e2f2a6c837a4e97a9323059a6cf85898dd684774e6b1228f1774f888274ed162fea31d0b6bd917ee133a514', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x727b1e05c9f81233a60dc05785f320b0fc6ac9ffe21212f8d9f29516dc78034f652bb7784d629ee3c85d563d97a70627', 16),
                    gmp_init('0xba2656c1bcc90ae7c4a6106e4816ff176962f38dd140177da41ae56d9b270122a489c35abcc9454e793f967c5651c107', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f151e1d4ea9cf4b5d64165902772377457ae25d8a99ffbbcb7f4cf5744c4072d1340388fa8ff5c7d18dd98fef63a330', 16),
                    gmp_init('0x929219b5d60f957e701e24979a992b248dd15f30c62c7c242cb4cc08f45b677a6fc6086e8a3ee72994fa275bfd9c9118', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d55c0cbd9e4b8634dad2f6904b4de6c7d9779e70ca97d8716b0a8e2294e5d8a9f1b0172ec189ddf1a9efa62321c99d', 16),
                    gmp_init('0xb366bce701997a4f4db97ec0a76f17e3c98f2238f474733609b4ebc6f41a9b5dc5c4e7450249bb083416bc7d34f9593a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b4e2a0d3bab2242f08ac328dd4b3241bbe7af1cf145cc46ab1d608e6dcf7d35b78b18df32f80ded6dd0eb38502ab6ae', 16),
                    gmp_init('0x32a2106f775e45b727738a87844af27a44946d5b032b062aa1024046de88a9aa102d32e0e98df817cf2b5bb7b9bb540e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x314ac7fb2388af4e0bfd0f5888c9420292d67fcdd3ddd71f92d8b6fdc39cb2737e6bf0db1649c4fc14dfd72bc34f6278', 16),
                    gmp_init('0x603cb4916a4229e8f6e2c7a580d28f4bd8105f3895ed33b7f44672644a109e94356b86e61a9f058cbf55fc6eea2f9b4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeac810feb3ec5caae36e3d66c298fbabc98087d7e27380ed5253ad3af3791cacad2b14696a0bc38c92e17f3a48f5c1d6', 16),
                    gmp_init('0x70068d0a62cabd83a0982425587d32e3b7d5d24cdb33583b3d83b0735b13893f6c91839eaa935ab3cb69c432a5494720', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa936ce8f8aeeb727a94d49c610fff17cc16594a8fc20b373cf0a861998b5a2dd195a8303c0be7a0b16b504102a9573eb', 16),
                    gmp_init('0xe95f565c9e0042576a82cb43cb4cadac3b987af781d02270175add5f524f98c75f359a509f4e51281b3da6af93d52871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9a59b03f45057dd43af1b083653aac240e29190f6ce962971e806f564c24ffd5a3764c69f08c390719581b41429f90c', 16),
                    gmp_init('0x33f4649b5242789a71ea68a43ad5c0dde9a1ab64423a225b6614fe0591150bcfb9ac2f230c444c04371f49c653380550', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc805c04b8e745b9ede8c467a8cf5cb2f8ab9903a6228daa0c1b62ccae1be80bfb8b9bb7d7083e3c0a43f390ce8462171', 16),
                    gmp_init('0xde32a49eecf4ea309206f373fc1566aea360617c43ff484d2b01959da44f399fb772bec0fa32384571c6b8f13938d98e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8af8b609fc6e1c8d98c06c70d3b00f22105b8f40654a86cd90faea8defd1956ffccf4d23c5e3556e001ab135edb4e60', 16),
                    gmp_init('0x9f64492c923df0b645d3db48bb69bac0c233d28893e17c9f79a1e6957eca4957e9e169cd8af10c8b62cb050445149267', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7a9fba3c876bc8f9c4d1bade36070352a6edf29af86940379bcfd12c6e2229a0197ecd6a2de77b329c367929768cb0', 16),
                    gmp_init('0xcade916578b80a2bd806d4c904bfbe124b3c12c1088fa7827fe7df4e54fa6f2f4508a700e970927c79eeffccb9558d39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x670477f08a9b26e9844aaa78e886c019a1307e6e67fe5675f4635cac69854bc787598f389a5721e07bcf3a55585b2626', 16),
                    gmp_init('0x954cab7ac87bdabda2901d6c126c93dc85d62b6abb32044378038cd89cba6dda571ba9428725f98e3f858ebe4787c6a2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2e4e9ade4ec7704a74c6968859f0736dc4450f9405243e7e9c12afd243b8def60a3e3a183eeed861c9b75bfdf5324c87', 16),
                    gmp_init('0xec1ef93ebbc36994eca60f71d82dcd7d47d089543f872163030730839c623b324ecc34d24d7ccd32c29f735cc4a0143d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6f04805603192a0c1839805f3e198eadc9b89062c9a4b5e3835d0c7400dccbb7294092a22463ea81c15681e7c8ef3d0', 16),
                    gmp_init('0xae7650d5eeaa3725cbb7781a1c77698d3ade08b2cc1b5ff23561c9295b5b56bfb63da2871dba7c90f21fb42cb582a2c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac9528a968475e3ceca728eb522159f7f3af0ac97dca998048eece427f6a7fe96e3394608249bb0ba9cca5b055784829', 16),
                    gmp_init('0x64c12bf42883518d9deb19ecdc7b7f16d3329541d17ade30bb70b2b114b813c683a516e9e24cabee501fc3edae1facb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cc111cd05f11d10d139f507ec4cd87676997c4f2645d77bc9436a6ecd71b7ab65a9221ccfbe4d1b6faf1a2cbb0a893e', 16),
                    gmp_init('0x3a5f27850b004592da0dff1bc48b2686f13a818f772731091037a130e1c292a5c839b2d15730d22611d63da38c099f48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c0261c9bda4b5a159e6dbe13c662a1a4301e1d1bc1221ce09153d28084288d55e89555153b061b48af4fb6c6dea8225', 16),
                    gmp_init('0xb4ca899212afb54b5654b702d5ed6c00a48b28d94c876c232d4fd18477be6de6d3e902828a2cdc56d089cbdaac43abef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6a968dc993f197e366e3b7e88980499625591788307d185de7065bfb228c3f4579faf88d7e762e85540fbbbb3b9e95f', 16),
                    gmp_init('0x573c007ba9b5db429f7c80588b40612c55aac67610db117814547b9de5fb2b52cafe4c6d2669579f2fd72e7b48bb0dcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x177b08309228df0fefbd00430300449c1e3bb4c687a35f65d2ca4559eb83cdd363e1a5ea5601e80627d1ad7391eca7d', 16),
                    gmp_init('0xae981bc29d905fbdf68e571132f4e99ca072585634f376e3989c17b9c6187f5c084bd412150ac9589571ff7531b33807', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fa9fe2e78bc44f8a8b70f6cf2cc2b0ca7c8e6fc66130c26a05c4b6dd72465c85ce51fb7802f474173e11ee78f502fdc', 16),
                    gmp_init('0xd9e505a9707c26805d789929fb6bef3cfe35cf21a0b4b270a9c5f7dfe834b9af4fa64713265cb960af3aa05ae6935da0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9aee33b4e078f3b410a0ee1f9e0705b9edcf271f65898406c9dd9be2675f5b5805c124e5c40b58ab0e335339c12f2478', 16),
                    gmp_init('0xa80a2b94d831f28e298ba93d2046e9f579f0d1eda54d9b36ac9bf371a94887b444fd9bea24733bff1f20e001b5e7cd86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x100903681d477c394ada8d82eb5973ad40cdd084804c481625bc7fa9062212f522643c36f86fb666b0ebd19388077033', 16),
                    gmp_init('0x66471640204e553b9e0beba1b2e506fc55fb7f303f0bf4b3951b87c6282f9b5c70aefb37c374283b71d0a3b4d7adc35a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2dc3271d20156a1baa32c79ca0854440b9f5fdd8ade0140e9c44a33cd88b85f8afe59f1ca8230c3b3760cc5b1e35d736', 16),
                    gmp_init('0x37f71a86707dba9eb817d836e7eb39b83fc623bbe0482b1129548eb2d2ed9f4e307ffbfc1ff559057bccd3d83f0f0ba1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cd0f3555daf4cd6f1670e58298fa4a1c986b5d96a828a1d91fd883f50ed89009e7772a65e89666d92074e920a2af4cd', 16),
                    gmp_init('0x7d3f6b8fd7eb2b3df0c642aebad8251c5e1e3ca567332eb50176b99063f0b59d1501d1f4055e390021b5ddf44229a560', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9ed4c89b2e39559df0afd933d07fc7d8ff944183e688dd20b5f003e12a74ee11dc339df46bda8309aa27e1c7db40537', 16),
                    gmp_init('0xcead7c416a1092536d76899cadabd89fb782c6992dc1347fdf4e7c9d8e61aa2f66af6b9adc86ec66cd3afea274f49c1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57440d8e2a4f9db2464cac65c595b0894720d6bbb878fa14d07b014ac8b00c42b89d67ce68afc94b46bea01f7ef0fbe8', 16),
                    gmp_init('0xa4e7efbaa7120682c0c333917aa96a78418a91353b9434f0641797ef96e571d0c8f658cd100abe802f3534fd6c2856f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71b733c59c03c045236335ac464ed327b0bd0e58c45b3c3de020d4f8f30660534b3bcb19d3a8619e2cc5c35d639adda', 16),
                    gmp_init('0x661474667febef1f1af3baafd9507bce83767ce7e906e91134765015b11e160de5ebc1425f10f7fa70943adcb31d7d8d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa7fc27f272bff2463bdfaa52a3ea90086a163adfa07bed4317ff8f7ce9236f3fd0557c605251d5e5e54c3c1c268106ab', 16),
                    gmp_init('0x344ad7d91c82f217167c9adf81b96729939226dda9a55def5c5a7fd8e8e859da35b365a47c8791a2997c662739df6db2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae6f08712bb688212da9f4bf4749e090165882d9b158bd34c17985a52381b66e7fe0e2394ba826bd23337bcb1db16089', 16),
                    gmp_init('0x345c4e0f3e615afc205b64c14a7de1f5b83db405d6497300217a3695ae1519885fc686aaa922d6236f4e4ca4d5fe9b94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x161eb511770981f97d66d0d084e7f1fe6b622e5d52d2a74558c992edbcb50da1276c6932bac7b1543cdb6605ca810d3b', 16),
                    gmp_init('0xd76509be9f68870320010d4105eb60afe38e4eaf2c092884f6752af792c490b9d1c8c5889d5907222e9629542416a5c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda623d612839294d3e1cf4ae59669c565de021ef86fab6e11701c2018a3cd01bd43955bfcf794260e7c11e6e04a068c4', 16),
                    gmp_init('0xe3016497db69c5d9a8a9119b925e3192ece8d4117a30d52b29eeaeb0bac0b5ad6625cd9cc2dedd3ade326f7bed75aa2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb77f6dd09dbaa6ff8112b5ddaeee476a7369acbe3fe5eb05babfc2f85995e0d917e75b3114b4897d92a4a10359c6017b', 16),
                    gmp_init('0xb6201e8310a8d6c4dfb8110574ee0ca7c7c2488612efd97ee8000f90ca6ba6d83a5917febb21ac477d9c9e43b7d7053a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47815fcaa9372c65936a4acef2e5dc1de51998b501a8a72fb5d4e8d8ccedb6257744939357e4ba1a74d87e3dee754bba', 16),
                    gmp_init('0x94d71b191e11e555ce188921d689cf1301cc58087a245b0cba2482c63e26f7c41b24ad877f0e244db0dc35cf91208aec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaabb66ed9d1a278959d2aeb97d19f180b9b6889e4a987776ccda662b7010f0ee519f790d6edb336ada334c49bb794e95', 16),
                    gmp_init('0x280e8d03458edb1a2dace517a6388415a5ac256f2666ca9a2e0c3a3b7a488ddab6316fe3d8dd6ca332133909eb99c203', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed6ca2297684621fb2a8deae7c41d955079b97430df22e0441337a6e52df0f78db670e95fbc35de237010de915046c3', 16),
                    gmp_init('0x4705dc6612e2a8915b0ba4175e7b4dfcc476287c4197f7bd7d0e2f2130942442cc43b4ce6afb7d08a690b59410613a68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x799e2985c64693c118bcbd58f2ba936e06038c83b91871b1ddd3b371fcbd69b7487b9f86dc6a7633d55445385441ecf8', 16),
                    gmp_init('0xe55305a81560b2a6b011a6ef98ce9a1d99a18d4bd5c65b137a4056c963d62cbbc748aad01a37bc27a667ea548e825eea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6155f11df0c44f569e7067b03082c35f38bac6f8c38b7b130779e47b08c4a203b4135498dc88da78a38b2f17469a7da0', 16),
                    gmp_init('0x17ba73288438b097314fe97bf8be57ad79e0e4253d0b9b6bb104275c06b4aba88cd85d6f0d5c0b43d3edacd8ee85528d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3df0186cfb307988fe17156e8d3cad168da2acda9d180ce29f5223fe26d3f34d6ff6395ca9573adb2411989bc9083f17', 16),
                    gmp_init('0xc8379cd27ec6ed6e5e08f4dcfcc884a3ce9aaaf5a4869cb3072d33c493ed7f840bba895cef4453db3b9ea8b04ec36de7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10739ec527150e5b61940a28700a704fbee76973e2d0cca3679f7b1c346a4f758aea8680920e6ae5cc475bde9976f89', 16),
                    gmp_init('0xb84fcdece5a8f89ec6b84fb74ae3f972fff9820f799e69480d1e029b0edda57778eed660b1f8625d65c43f9a081259d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20e1554c8ea5b83765497942e231832f0f310c1ea888242b38a70b3d030010587c263e80a6002d7f1aaa96d72f0a33c', 16),
                    gmp_init('0x512d762544f3030496fae643d8e8eb706326fa030b4d772161145a85cf504de9150923850eb25f7939eeb9d63ff511b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5347b8da02df4d22363bf8407be35369ac22e60ddc862627c16659e8d68c85bd54fb9a68c3839365f8371cbeaf151b3c', 16),
                    gmp_init('0x5765707bc14d5360d601aa83e2316114b9711a89693d5732093f1d3bb9b56f9e156a1fa55885458b852442913252d742', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ad048fe8f5b3baafa903e91cf5c3c18302c9d11014e8778c41db569ca00cdad0ef6db00a33be08dcc4445eff5ffe6c4', 16),
                    gmp_init('0x3777e1a399e9952299414ac734483f51eece1256284aa31da1960a647ca408f3ea2fa4f05ed27c7a44d0d596262a5e4e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc7706509a1c855e6adbe354fd3724ac078d97625081d42013efac0dac7d54f8e0fbdf6b9d10970f68d12fe425ca8fad8', 16),
                    gmp_init('0x4cfec7ced5c067d33c1123818dc0a40a560334727b90d88c2ae095f6b53a955ebf575954828a967f3e610d70ddee3fa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4fb4faf93aafe25b92542956c78bda49f92bc778c6372920df0a00e089c502c282c3a338e87308b61f246f15d80df16', 16),
                    gmp_init('0xb6224913af108fb9269eacb5636724d3aeed6fabd9f6fcdc30ee099eb6c179c2496473960d783e126d4f49077dbf2133', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7509b4bd45e0ff9e191f3bff575b7b39db493c9f4e86ceec067b61e214bc4edfca562c3d1b173e77f4109be9d7f512d', 16),
                    gmp_init('0x32533216de0da9ce5c127c3fda1b4ba3ce9474de3ac76c0c78123688aefaa657596f91f4da22c3e7289ec8a1497f2236', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x346e353728d985b81c2bc1a83cd1e0c9ffb76317609ce622f1a6fdc98418abaacd1dbb13470234a1c025832376613a21', 16),
                    gmp_init('0xb5536534d1456f79a3dc918c244444bdf51c5841e41bb818b60e0bb3bffe1d455fbbb6c751335d2cb98c082a6cf4ba90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc72f48497427879d6c0a6a75314b4309c055108db010519e8de497fae0e9bff1906bebc5c8310c2467d472b92da214ea', 16),
                    gmp_init('0xa6dd4a6126f7846191f6b86a81b1a37c5496c5e424ce656da4c13330368cfe37244193f6a84da301d2a16112a9d7130f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ea7ee9aabd15221e33a6f99c3c2b547417487dee5aca9ef5f5cc26f365d873b39a5a9fc6b2659c54def08ed4fa394e', 16),
                    gmp_init('0x6731f5554e8d2934f0e3942a18f0ad9330723a86e83d27eb8eebacf13dfb9ae063d2c526799d3de27460e5b076a75e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x362c722ece52860a0abd37f847e5d97cdd556617f6f96f76fc720e23bf744af45e8a847fd1c3f2477d909cba7f764113', 16),
                    gmp_init('0x9d1dc12fffb727bb352eab779c76ad988079e2d3f8b8dc788b8cfaacec148eef33f668e8d63e7ad147d63c0fe1885c2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4996a15fe4c3a28b07842c5408c057ed29acf01e32dc2d0ff068f96c7ae897276bcd94e2879a2b620fd1113d073804a4', 16),
                    gmp_init('0x9a09ca9d2964179e1a83da328064c8636571b00a52ccc678ee280d182d13d768d81614cc308bbbe73b2c0d75b2ee34da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87a149b867c2b54e0bc82e5316dda7bc7afe1331153b8aeb4b80b0de35f4f0b544cbc63a98376b3a1350c625572fb7b1', 16),
                    gmp_init('0x3673f462fb09ed4b37ecd48747a27fdce6ac435aa60eaa89c261b06c8dd0ab81fc70e648c42427fd896b129f1ca6438f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d80a6eb5ba12b44faad123163b27c696eadc3754f44a8c67e829dbc496e4efce035a82c979203345574b77f111233d8', 16),
                    gmp_init('0x7b8b9cd492baa2503c55e643b69f4bc9746fa50f0d99f7d538e47cc0ea867f4fffcc5b2a61a8381b0f525f0ffa4ce9a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x643d92f5455cf98aedc496039ba824bc1b53a69908edd0adb093a83dd5eb89d80b2cff22938c1a5105d2eca821b6faa8', 16),
                    gmp_init('0x5a48af13d144f4beafa2e22e7c0ca1410705416f34154622005b21881b57f18307d42c0399b121883c4d9a7f4dd9c20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87a6f67ef5602d61fd2a0a0b151b06961a477372e50111dbf600699c1534e80449387722a522accff1566115dd851879', 16),
                    gmp_init('0x547ed57cd89ffb811604080448a93c7a847fdade9741372a96ad0d04a3d402b14c41ea36eb4c2814586e873588952e43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85b8738fd7375555f983e8ce3097165b4fe13e87aa3dac5716ebb39c1d55689339123e8568b53211de1df058921b22d0', 16),
                    gmp_init('0x8fb63cc3b692706a25a5b8883769a15d8093947feec61a0f2458ec1228e747654dc106548700c5ce062722f1789fd5ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d2aca0b1e2bdbc3e2bfb640e87c1840580e31ecd6e7aec99da7f04e6da13d97a0c1bac879bb29791298ab88ea5e687', 16),
                    gmp_init('0x56ca38776d69703afb0831b304cd645dfff05e44a0b9714e0298ac30156da1016f76e6f9b00fe5a3b8d09f0488e700a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f677a6532f6546ee28d3f13b05070d47f6ea68c85cdb078ff6dc2cc24e52f40066d96018eedee772bc1afdc913b6411', 16),
                    gmp_init('0xd8644386065e2488f3e476669819c8fbf1715d3e040b189d3a1d9d4e4d0b01621437ad10b7768ba1874d593521fc31ed', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x873893319b8bb5395b51b855b1b8e23736ee2eea3031e72056aead32f86e089a05b67f0b2f3bc02ea4f057aeeb02d061', 16),
                    gmp_init('0x509e270d600a1b20aec182bc952c8acc0f317f1ba4aef7d82c97dab6506a5c3696ed905ac40ea2625841ee49205e62e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1af541b95c88f0f73b05703895b51f02e62f48b8ffb9b855ffb1fcd276b00ed8a5225855184c30102a172790038b3b1', 16),
                    gmp_init('0xce20f9cd28c2113b5c98ff50db8f60b511f639a13975da38b940c82585c6e9bb9e3445943d4423c6082a6621c7de8e5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2003a3c8a763f7d2140232fd05a099f6d038f55b9cbed9bd342ee505154e075f7fb253d375308eb999827ac2235c5081', 16),
                    gmp_init('0xd9d73dc03e691114918d4676a8c4a1ecd7351f0800c7bd3af0bfb8696872aca58e8155591b6f0972cdd8653c5c50ae9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7610bb500e93b90549cf03b77cbeeab451755490c19917a9626a130dee85669016a17ceded96ae7586f1fd865454fe22', 16),
                    gmp_init('0x84e427caca329d6cbfc2cd8c5f8d40edb88da8020aeaa43fab3641cf4279281b2762840ad58150c3c31f453de97c17cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ed46e9c6018e613debf6864ddde1de11cc082a9d5ad8c5f8a74371a8bf20b0e70a4f13d7e8ba1eeeed08a60e2b7d161', 16),
                    gmp_init('0x5a79d9cc5f07887428d7d7f91cb13b65ed60a124e0d43d2037ab567d89aae477e5040be624f7f26b67e6acf47daf30ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b3168f75e6a841f7e06f383e718aaa40db2f6c937264fd33ae551a38251d667406602625ab02f1f2be191746a069ee5', 16),
                    gmp_init('0x9e92c7922de7fe8327700a3c4af40da471ba40fbc5da22e4dbe7fe7495a313af52558d89f7a92df7435d9d6bf5b21ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc88e9b531f639771642ace347e08a687eaddbe77c2762a8e856cffb8a6fd20f114e60ba5d3fc57891410920016b2a15f', 16),
                    gmp_init('0xc63328e8cd8c55a3209a451d22c2e4420476e6c39703a586f5d64e467fe5c93e8b5c79463e23b8dde31dceb0c816d1b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa068909f7c3f582957cc340b8b5cf0604cef534f395542c19212c4aee9ce4617e739b7afc66ddad317ef0288c00ea431', 16),
                    gmp_init('0xbea3c1351abdfcef6f1bdec1e56f1fd6015d6d9b9f9bf24f9a10b64658d2ea8f0c412e87331ef7616fbfaedd5cbf427a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28051e714e3a72f4bec2f18b065b07cf07e1dfc49a8a78992e932568c54e05ddaf5fbf20d9bfc8361545638533fa6a23', 16),
                    gmp_init('0xe47728aa5644e0a5949fe2604057ca5529a38b176068fea47a13eece559637266ac06e672425241b01544673709b3da6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c44179a8bd0a18585e88bc7b40a5950f22ae42d2b162ab664b12902f105303f2fb6ee5ee328539a86b3929bb00cba1a', 16),
                    gmp_init('0xdeef8007c9e12d8e530574c42519137a4c9c69ce8d3e90a0f3da0da2c84131465b0118e6d7db0bd03aaf6a5314d4139f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7db006b6cce47d9f354dc04afd3ea6d5d456b8c0d990c549e381198ad9a3478d318afd097e0dc76a36f56737d6c94a24', 16),
                    gmp_init('0x9aad616831c1b461685c729c0226cad8db03581893e780fdd010754d6cd379c6c1339d41eeb15264a1e7eccaef47c2ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea2d0da5dd3d2779f433e9dbd85c06d1edf081330d3800c6c0edabe1e01f5e8cda635cfd17fa50f66adc000d227f03db', 16),
                    gmp_init('0x87f1c8b1038cd8503e07da7d8f89e508bc8a9fdfbf3e4003f04e3f1b221c7aa67c7cf50398918c4a6006ed8e82f6f091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66f09cf5ebff51f4feb423c84d13888413e84b7b10930c952aea2332970c8e2afa05e005c2eb6096ba7a4d032c343acf', 16),
                    gmp_init('0x7f093c11b2b8b6ac25b3ec9f408d1a1e07860a96bded56157ef6c8a157120c29fb477f31026fd619abdbc0a5ca7a06db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x757e3a808f0734acf4ad492acaadb59bddaa92d3d6fb63969b23a95e5e50b3f200708c722cf1ce1e5489f0c4b47e563', 16),
                    gmp_init('0x9c7713d7aeb7a7b7cd4a419167b5e3ddf8942addd1acc71e68def1de5f3c69047d6f0ef8031db823e909daa53a0bb189', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1a272dfa57e8c3e6b2aa5c71caa5c5528bf4539cff5b4282f0a95bee7fac8b6e20b78e31851ec8d4346514af1a956bc', 16),
                    gmp_init('0xf8bf71697508e38f7c315e35bd49ee97c0c6f74dd66ce2dbf274740cf4310192d2127b9f31bf33bfb6343722cb7a7f7e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd4e59198608db07dd0bdcca9bf4ea967f2ecc08360518230c057820f553e946b7164fd9b71076f002505f3220d71d442', 16),
                    gmp_init('0x96c4edbd147750f198c302a2048e4b41c1e82061ede301efbd10607b214592a9618379a5fcd18ce5e4b80367f5b834cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe18673956b23e753d8437dc3d3623bcf840526f8ea04c0ee30d700c379972959abc72da0f117801ba2b3b85844aecdb0', 16),
                    gmp_init('0x2af917ebac27be2b89dcd81630042846bf210d595a83569d0e3db5683a634b892446d5739d23df03b4330e3f3c9061fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62b473949b18801feb751bb997f42a4888ed2eacb21235a90ee14dc22ff3598b9a3d4edcbc18b3898c713a3e968a77ac', 16),
                    gmp_init('0x574e164b071fe641deb3dad420d26b3a5ad258c4fa8540d8d3e4ceba09400a7bd2973090580907069b87609c1ce52c2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa30a45760014c493eda342079660b37b3b3c490b022894d755266c1e022aa89b5432f47f7ec4400bcc32546cf8de14fd', 16),
                    gmp_init('0x9edb22c1c8ff9fc74fdf44b571cfe7e8115c844d5aa918bfc8ae5ff116900016526a6c3aa31e8acc0933dd66f5833839', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x207089b868e66d7ca23115fde3c0f7a15a6d43485f792890267680e69e61c9ad6290bba98b4c5c2a1aaab59bb3dbe669', 16),
                    gmp_init('0xa44487413e8b94296a37f56fa6558d1f4b6c84aa5200cdca6ee0eca792e1645735968b2f9aeead671ecfc07755b1ec56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4157400c8b50a6c5735f17ad403f018fb94f95b07ddd616f3f5a797d97e6c4b1c425dd42b7feab524b196b84e532a52c', 16),
                    gmp_init('0x11e0a1a4b728ae58c330d5536425c6a0fc8a02ef920f9396b7d3d16bf0118aa9d8850f57b9b288d87e4254a75aa6d751', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2fb980f871e7629725a5dc5a57da3f1a1dc563bd24063630d443a476f731f6a2a16b436aef01846a7b2b30ee605c136', 16),
                    gmp_init('0x59ac0a89f145d8c3cc1babd8a71f4d3c8ace4597e3566ee5a7abf827f7f9dc1e8f81537936543a509a0960bdcda9c8b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cff10cad19b7729ef2facba9715f3dcba965ffd0843c3c78f549345d8a3fe6d8567c613cdbdfc21d297e9d46a38d64', 16),
                    gmp_init('0xa1daa4dc78668a374c0fa39af95227d40b5f1e428f17cccad25b5ab96df97cf810d52de93611540a9dbb8086499baabf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b96d3ec61ef4adc413cd58ff0ab41b8dc1058acda16861cd21a63ad744e7acbd942aeda2acf0ceef9378555c2012e7d', 16),
                    gmp_init('0x372b966641a42d06237a621963137f2bd0d8b18dac9c94754553653957756558165acc4d7859e61ca3e8630317b9aab4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a3b765628fce1639397c1c7bb1ef45d8be7d467d34efaca94fcf2b61c69a8b7acc4ed6812c16e5c9abbb78af61fb88b', 16),
                    gmp_init('0x8fdac7349f5d6c43d4d2c7ce427ebd004083cea29cff0a76055d43f0746c6be5c8f8784be8bc8ee0d0d8c011d40dc97c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x654181c8be946a44b056302d90826d23242f8e903e531118911491d9b55b95ba5ab89ccb7891b68a3d93aa06d9254ad5', 16),
                    gmp_init('0x6a3028202a117bc49728b8fddc207a886a98c634aed01cb3bb11aa20321721ebb43f668257778f2aca33ba437db8c2f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3aa7add01e044a8ffb235a36a571297fb6dc538b4e08699c63a527de1abaa6a11dd8fbc0e43eaa05c16f2f41db74d06', 16),
                    gmp_init('0x894be71df2340e0f20d826b67f84628e1050478bd1917474af6b59ddfc240abb97b1193eaa2982b4cc29437a28605e83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x679aa55b638a81f64794a19dceac7ab166cf8eca015d5b0cd24718bf90c2aae7868ee73e48ec85096657012c85c3bb11', 16),
                    gmp_init('0xa031452b5d8ba01c56d64835d203c9844a0e1051886d8e528b2195fe082fae3fe84fa0f42d15d44f0e42a93ef2d64867', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7256ac3d863bd8b3cade0243f9d8d13bcd2bb57cac456705c84a952b3b766fa6c484f54306eb61ac48e70565d10e82e6', 16),
                    gmp_init('0xf56ce2268ace6a17ac887b10a23aa94d8c6a39fb043508f5655b4d9c9946cc4a32c83a985ad6dcf1f58024bbc5e5c327', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x284ce9dd3f559a4f353d71f632bbde3616bbebe994144689e2be73d72af399f793341da7f7839e1d37c9567adfc9bbc9', 16),
                    gmp_init('0xdf2d7ce717c1943a8aadb93fa37e1bb6b640f54b072def89568091f822fefb202d24cca643d3f4ecc4a79af4370f7f1e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe10cb36d11cd506e23a42ea485d5a52411c2df652b7b03e92bb64e18287c9b53ea2b1df419bf5f4984a2ae350020362e', 16),
                    gmp_init('0xd7e679724697d36352ec806a31d6ab0b425d781706cc84c07768fb7fe90ed2a464666b5536adb53ee5f50bfe2adaefc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0cb9e35473716af0bb35a2b7c34c52eed8d941dc129f201e67b6a46af7a3e330065a1af71d9bee1587b2e13e2b3d371', 16),
                    gmp_init('0xb727daf89515c04a45b6a37d2dfac3a543ce50832265e29f22c87ebc1e6e6cac7192de7f9c66e98d0cb062cf34eb3b8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea9adb70032fa744051536092724dfc0993fdfed5cb914af33a8c003301b669cf11bdd66654df12544461e29d49176d9', 16),
                    gmp_init('0xe7a7bd33721708c4acae4c89bbf92795f042c49183888d47acd1b0e5b77b664808c546c04a2685233c262539d90e8f39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e9ba344be18e6cf3cde541f7b6dbf08b3967e774b4e69d07ae918a400a9db2a694d3fd27e125f0ef8b71d742808e9d1', 16),
                    gmp_init('0xf4f15bd5ef27ca90dbb27c39ae4067178742026034a90efbe1edee6640f72a8db35817408b222209d95d182e14817498', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedbde93e25fb3a4d38271dc86dee1ff639d1ddf2b349fca2607bf4d56456c33c472271d71ac10c82be9f82630b2377ad', 16),
                    gmp_init('0xee5fe7ce10473d7ec7a665074bc8a462f90e2ebd8828d3151f388b77a701a3559a8d2cd92ffba9f5d3dee04f87a4ee6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb42cc251fe9c5bbdac2caaf20920c5d8fb018b178099201017104d5f6fc72856ed3439d5044ef63f25d3d8594908b77c', 16),
                    gmp_init('0x3419e800088f4b4a24973cdc7d980cc45f2201ab9bdf95abbc461202c45ac8d1cddbd006d8c4cf96b92419c7198a08a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a7ffacafa71e7b9232d6fb47f51d2f0d7d9ef0c3c50571d7fbd82ad8279e64dc381731bd783b375bdea727c94afd765', 16),
                    gmp_init('0x19ef4e9d9ae7687c6eb5134ea138de479c3fb00946a8a6f518b493170407c734770aee82b3026dc8f946afc19166e3e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x728b39afe59025fe44a7534802ebf3a286d52e5335c086e9eb4ad31e095b50ea07600b2841e742020d511cf10a9291dd', 16),
                    gmp_init('0xc8cacc04541e647db78c55fd19e87ae4688545f03cc80e0a17838c8d3dd71326ab08b817083eac3f0b2b588a5e0aa4a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8944091c4cb4ef4eefbd8d6c9f18f16230c3c85923eb565f01ec1c68cd251d18a0cb6b78d872a1dab645ed4c1f546966', 16),
                    gmp_init('0xca35986564306a70c31f2a567e299a4f666c0c3422edce1c9f324965e89e5b90d9602c950a1b80a2548a56098b8bbf50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x629abd94dcc06db805c820ccd3f41d9b233376071b81bcadc12206aa72e363d2ec09c15bf2b4db26efe0bfe698bf729f', 16),
                    gmp_init('0x75777265167be6ef5ee7920fa2bd6f93c4decd9354e2997623c7bc431ac2108e6192e9b4536ba6da145777218c5d9ac3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68653a176a50f58f7ce36226e32da327d0bc5768a9a136902766ef72a260bdd0e8020d4f960a6f11c4bdb226b912851e', 16),
                    gmp_init('0xfc7a121820146a06b3977605c6a661769c162213462595dfc63b63af737f1213a0c2e8efe467110ffab0d9f3a0450817', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2da4957272bdd40aa155d18844271222a296b88dc8ea05f088a9c0d822d4f1530285bbd2a7cb17b7d506cd2effcb804f', 16),
                    gmp_init('0x9e3432de57cbb3df4f553fb4ab37c24901fafad513370bb73173a5e31915544721769b399d158c51cc6145beee9a1bca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c7f87d4603ab5893e7b76a8012430d3225d14e4f29c1f9133bd63f3260edd9916b8f3bbe9ff3fe345876cf5811e395', 16),
                    gmp_init('0x2ddf00f2905c373aa395dbfb5bed03ac8958c1b019bd858cc7575b34d953af0cbc374780401e88ce70361939c0f7234b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf857e32a37839b5b88d355cf5e43ee885f03576d9322e871d2fe714ee7d32f37914c4064ac3ebda51422469adbbf682', 16),
                    gmp_init('0x3c8939a2156febc55ef0c043fd8b7edd0bb26e186069fa79c6c0cce834a61c3200bd6f448ee4d2145a1ea8d616b69aff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x575d5ba75f4a65877393788bb2b5a18dc84f622eb37e5b918c2b0ad00181a02178bdda489d1a5f28c74a30798911778c', 16),
                    gmp_init('0x1cc8ca4bc218459d31b725bc8d7d49d40886b30709184feaf9eb201892a47b6865119c3783614edce5dc1c263df4e660', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1a60ec14eeb92e0cd71ed2a695d268aace059f5b5677cfe55f3af201efc36d768f8d46cd7bc1a00d6a0642f837c3ccaa', 16),
                    gmp_init('0x8859ef7eddb96fd59d89fa3427f4b8e09614a3ec752a51f056181333130860daba955625962a83fb9097f04340111ed6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91ac9bf0dfbba65626692878b48a0270cd1467ab5c38b0b0bf6bdf6ec40cda175bf5bf04623118308314ff5ec910ca1a', 16),
                    gmp_init('0xab87ccd7595aa60fb689d675e35c52a15bd0200e6c17ecda4720c80738fca75958ec80c490056fe9cb1e6d55d0ffbdba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35ff5dc5a821b375338b575e99787b60493ebab6811313aad774e597199e3b6acc8c27f73c04ad557752e818625caf5c', 16),
                    gmp_init('0x4428a2aa6e2a938a6ec26c641c1101e35679fae292d8959bb0f0b63765e7423786f72364c1560215f9d101ac95ec4b5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf07d5ca532f0e6bc9da2425a21ac1c0ceff6ab98c0b205177a299cab5d933587aa28205f27ff2041802676c4e07c2449', 16),
                    gmp_init('0x2288a43cb47a0df138cb110c1ec73a3e4557ee8cf9971ba97b70cf2ed5d421041901fc80ea413e12a8d303693f98652e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7e69cc70b737f7a22193624d092b885cee9846b40f193ecaccd3ecabc4479609eb8ae04524607243abb4762b354e7a6', 16),
                    gmp_init('0xd8d9a9f6fb4af43ddb4b70d2963738d9ba79441bf7263da52ce7e1b1681a07e869d69c0fce4b055c24d350d9920448a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9935587db797a1f86882f189f6ae9e3dc31ce3184398b45d9d6a78371053bf7654dbb75b0100d7fcd6fe140871947d32', 16),
                    gmp_init('0xc7d569934a956ee88e177f284e4a82c31b3efab19e03d7da04931bcfa1ce79bcbd1cba3f38da70aab52033323f5cb74b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cce00060fcbcac827314a65de1aa3a3f360f3351453fd5f910082bc80ec38e6c061fb3f7782d8524284c1785f323fb1', 16),
                    gmp_init('0xbe1093bd3f2e3a8af6e6d36e1bb13cb8e6ce16748745de4fcbcb20289e194cb1cd984c288a33f06dfc94a51dbfbbbe2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a28753805b2e335500258969ef1db01909315b32a337185abfc6e66e5863058d9447b276588ce43cf8ed71ef01c5653', 16),
                    gmp_init('0xd6fbf9dd4b8daa0133b810a399fd7aa991708e9f88b66b31483bcdfe0d79face86e81f12c62b41886c0ef385182b1d36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fbda36f56af2a05ea50010eee7a1116be4cd58ff338bd8f8b4044fe036e0e21d5ed5cc006ded5076d2a0defc984cd5d', 16),
                    gmp_init('0xa2fb0f2dae3171335da41559216ebfbf0740064b0d045cf02cab16b21b4c2e81a0df552227110f40402b40681d965f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf9b2df927f3f166f9d8362d8ce9b9caa967c410620595b2c511fb28ce48c948eef84e38a3e83ded40d0b94a7ee91e1', 16),
                    gmp_init('0x6754d92fb5e92793e4058bd315366e32f31d0921e7f5a89a2b9261671e0383b9588447b694db20a60a4a1507be4864b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9192a086fa34812dbfc5e281ceca3e68dd71ccc5f4bf411a709eca69b2761a5c3f59a4b891927115c43f31c5bdd8dab6', 16),
                    gmp_init('0x24e8685d43a8f1018f77c55767869aa4a7fa4df02f85544a544f68b738b0158087094a55411d1212cdf5c429e79cc9d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a0917f6edf642a49162e142fdb03227d4af3155139e16d797089e900de282c14845ae2ce0dd1c719a50792a181c3cb', 16),
                    gmp_init('0xe8799e230eb540de772110d59db784cfc591805907eaa93d055cc62be6f3b47b4f42fe2595a51c3817170716c9be0725', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d540d2fecb08abefeddecb13853635ca0fee3f523c29bf4087aca584f6ec425fd8e6b487c037995e3cef00bb75a0ce6', 16),
                    gmp_init('0x5f2756ea04caa21d3a266eaedc59d583a260399a3c3440ee85befd17952245372f8fff93abb504074128a640295c84ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x950510cfea9ffbadea1ceda730d4faa91323fae432741efdf22a7196606a8c5dc2c7ae849705f075afc8953ea4a2c7f8', 16),
                    gmp_init('0xa157759ca190dd9583a9f19b1241addade5b2992d0b2fe05f9dec7f8150c44feb387e8b8ff5cf03a9e03fc84cc59daa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90b58da75ba2ab40c262ecf1ef4c517f1ffad1a6b5d80daad46f56360dd4a112a3137a8ea78809bfee2997987a079047', 16),
                    gmp_init('0x8f7662813215e579b651173c287f9accb0f9f4bfb5ebeb0a8ca9597c0dcccd881a9d6fa6a6ea41ebf2f4adafd8330a01', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3650873927b18635fe835db369d064b00088cc116c504757dacd84191b8b552cb207dd3d20bc008c066e749256eb547', 16),
                    gmp_init('0x811e25b1226ce3b0388b7a9f7e91a1903ed290b766527a63386101556bb2d5d8a578322e7b9e974e53948b386ee6c982', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d08b6ddb8a84de45ed1f12e23edb4f9558a4ac2be714244916cc4c392cafafe7248edf2df0ff407c5a7d47dc3d602ce', 16),
                    gmp_init('0x18ba98d20df0e720f0dd41bd164fd2d6a4d7479eff74f16510399869f9ef46ece6d3dfd254b2a8e7171bff2a9e9da7cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ed69b4330f8a23c55462938061e69b30bd0f129f9af1b8476b597a43d67ca5f670e49e6ced807923ae2d1bb6c9e9744', 16),
                    gmp_init('0x125ce73e9b4f1020dbb1fdadd5b9450dbf12f90fb0d5441acabb83ab88fb7ea607c49871a728c69d997d57861e4877cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83dcc3e1c4b4d9111f97e2a310fa9e3a80670864823717f82eec1aa9ce7246e9f98f78820265b684bc04e031b839ad99', 16),
                    gmp_init('0xf54f7fd271bfb7c358b72b3c3a2262da7fea2093c8bc7c3b2203f9e1b68776ba30c6f7dea720a52c53a7604c5595d9e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a2cb15bd2c8326f55eb59f7d9782ec66bc5f2a5c507964a86d9c1314c101f3c392a597159fa670413179681213a6e54', 16),
                    gmp_init('0xc6b622f3b2bfefaf03a667997c43053b0aad44aab77cc0e96a6885e1521c51c56b644ffaa9992da74248dc4f53553c1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x199bd0e605527d959cb620106976930e8eabf14effb707be1cc85f1d7893302e940957434490120d8eee3b110b626e1a', 16),
                    gmp_init('0x3a0501fad25f89a93914185c1de99e305863a17c1d311e927a55d351b036d8ca9cc99bf5be5ec0d2d67c81b98cc5a87b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5067d67fabd6c75c09dfe830d1f2542c440359d324645c0cb0cf13b9151590840b2f691120599f1cccbba0c3df306f7', 16),
                    gmp_init('0x3c4368aa78d454d902131d55b3bf6462a3711867758267117e37e71482c08528d45b5e6c731614b784fd04dfd5c30780', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67c3d49d83d3550c8eefe537963102b09ab20872e578dacdf059cd025be5289303fe4822c665a9647a9c42a6bc903eef', 16),
                    gmp_init('0x7ebae722cac3bb1f727f1ccd2d28202e84780a079339dd73f77a0c0eac36692ad23ec4fdf8366ea6febfd069125aa06e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed6401cc58e0b2ab527325e047141bf723808077505ab509e914294f1ec0053319a24d6af67d6c4e3e0f2a9f090c80cb', 16),
                    gmp_init('0x787335ea3fdb3d37edf0e56214aec20b7732ffca7a86ba0055abf9ca6e029153b147f91f615d3c20dc12269163a3d867', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32720b9da5989d75d8933d3202ca031c204968e6c9bdedc9e242334d86f0d5a178c16703f35e2ca52cd8f9328f8e56de', 16),
                    gmp_init('0x9afee19048f4a461dbc3f31303195c0830f7b5396fff5bb0456261da808960c5e774ca25f842e97710070a9f141444ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ea246cd60eb6bac0a5da7e743ed8e4c9f2ecb332b731a4a27ddc19127de5d9f772ca736ce8a7f14b1efb7d649c5ba99', 16),
                    gmp_init('0x6c7956d6179a088bedab257d12053e93645336153983560bab43eb37a305d22513630242e073e866dc0bd8246d2249a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb178fa1f169798ae81338de6a8e9bc1127c25d8ce17a6c2ca458bd576682e02480fa336c03dd6c2a04e57d34c9d2ddba', 16),
                    gmp_init('0x582061e1b37ea8bf51fab17b31a70e31a6b43cbce13bb2eb846f3dd5319fb6ee9b6015ff9f878374a90478421e202697', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25605dd1af7fb4852f7be9a70ae9d67c049c99ac6f8fb2c1f4e73d07e558e0d606a6359b6e23eeccc18597ee6a74bce9', 16),
                    gmp_init('0x9badb73f91c996fd6e49aded5e4f16559b2680f65d7061453250b2ac93c148bff610f22522112463d886f5782e92a2e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e2ca73d72e1c731c05cb50f479edfb45ae7a7c0696fbf6a76d02f11dece07e9b27dcbdebfacdae36b53933e85ecc47', 16),
                    gmp_init('0xcdbad576129828aba12e0ece8384bb6f54b94dea417ec802548b86c45981eef1b72a6d0e4f5e1f1271aa8f64a7316164', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507d6f5ae28e0815e699d5452d16e57902fd7011277f3ff615e81228aa5b9de3312ccb1fc406b7061e9da0c42a7fa542', 16),
                    gmp_init('0xbccfe91f852b965afbc606097c012cf2db7144cd0cfdd6463fca681964d4796142456041f73fb5d61f7ac29a1feb1d1f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7d1b47339420e572eb5c750215f458ff220d65288ba4a18e4460b514f1095811a4678f28dae4edccdfb863bb1f336928', 16),
                    gmp_init('0xf75eff066402b5c6106561e9837a6b850f6b57f604211c4e732bf98f77f540929e2e938da0f2b51956b340446f39d742', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fcb3db89b2bd070a1e36e3e70fd63e52013034298ad8bb25b3d978e644ee4dc6f3b25df37461e099ba85c559b9a745d', 16),
                    gmp_init('0x5650e354aafe46ca1cc97f8772169ee329f31c2e11c18ef90740b872ca7f2b79b4a917f6dbbacc1614a2c419d7a2a95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2e0301e32e9cf032353d6852c74495279c6e8164e2751150b165aa4db57e2e563939701ddf07ba78e7b2d372113db2e', 16),
                    gmp_init('0xeaa716a10b24caa18e933d342ec355e26f1c9c2bb796080253f41767f72d2c8d40546a03002405c10358e75e3edbb7c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7de6523f5823069a04de80ec60d241d8f5731b6dbe8d567d1be27cf919d29dd60188e4eaf2dff0a7bc6620bdf08fb51', 16),
                    gmp_init('0x9d1c06077b330a3b6d155ebd6e6bbddf1d2b5767cd3d0048e905720acdabcf7d37dd4fa724922ff1d1c727dbc3f7c54e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9754de31a8ef19be27bffc97f9e8ea38e950d7861d46a895057c81dc33e505691d228ba8e791a2a487fb96f782492ca8', 16),
                    gmp_init('0x196581eefddfe8dd07c94cd3488d70feb40e0f05650db1f7be42edcff6e28d6ae70d9f14019514092833ab08159ea2ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9692b6aaa7d582004f6ddc2504fb12cd4484ea23dfc36e5deee0fcdb72435a3d65ab31e0d4be26ba98fb25cffd7d0e9', 16),
                    gmp_init('0xfae87c2e34f4c1f338752446df8ff454528193a0adbe1d754b414706c630061eb179e9848dd1ea6daaffc72d10f304ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30c648873ddc353f7ac8cdaa0e5b24efd4e8aa0ceb3493cdc3a4d21ef66fcf6f6c82492f8a05d8b3661233b77f828406', 16),
                    gmp_init('0x8b4785f2ea7c93f598fa181e18cf4a8f1f6aac138dc920aad897d78bcbdcc7d4dd46b7de3302027d1dcff5559fd7e6ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd862f30483d13925f8447c9ffd06a669233ee413e8f1df42845d33438482debef3a986e1086fbd7b396b32b0a020cfaa', 16),
                    gmp_init('0xb40a1c1025a3c6e8464973fc1a99f670dbd225eeabab017a454005aa446c1f26bdf667c073e65f7ff198bb9f950d5d50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ca5e17d701c09b932c1909962d73c85bf65736d12ac2b8a3f98f1ea1e732fd21f314ea621c257135ea26c2362b4a5d8', 16),
                    gmp_init('0xcc8bdeb07f9e3f878e9f9bd0677517f26b9cdd48e11fbb7376333a7e83bb5da163e1934f4f718f95388f0121fa02d7a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a66626f9152cb1d93438a2540da00b76ef90ca068ff251b7a24d9d5c5c21018467d6a3b66dd9b5d3f2ff7e444a848b4', 16),
                    gmp_init('0xf50556a34f9d8bbbd65b108db62ca556598d12547057b0b602016faa3fb5813f2edea1eae1e90c865cc00af4670f1da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x312e96e23f98e06ec9f8ecb05754e4b019a3e4b13edac25c884a4c0f83c890f59330a2ed2694663f7940315a0144aa2a', 16),
                    gmp_init('0x1440cfa1aceffd717c0d46636289b318f524a7c92aa33b24827c27d4725da6e51d10327caffde2482953b1c875acec9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13b9fea10fd7453be2ca1ec47e98a7c0cdce193e407869948c9802dee95658078bc63afda38becccd5fe75827163a7da', 16),
                    gmp_init('0x3a2d99021fbe0a765a59c7d46e93c970a16d4e09392a6dc13e50bbbfdc36765db1d986100034db16eef6f18b78f4d78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e42ec780cc037aa2e99558a4710ed3dc95b9c6eb7f7e34f0123157db8b47b8f9ea2180465b1dd29027df845e780b24', 16),
                    gmp_init('0xf4a0ef75daee5711a4184a4d83b43831e93bd4c165bb35a14a3b9bdc1fbdc1cf686e635dcfdb4490a89cbbb15fa5a9a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe83060fccd8c0d86e24eeff9eae1066ee49064cae2c161de61c3c8f4eceede7de8f2582b1118ba1d9746b7853a85e8f', 16),
                    gmp_init('0x4f0836891e25de85d117f608dbbb8f18180cf94e2c46feeca43b223a26746ef0c1de2788e146d6d1fe1bffb901214320', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x229e396cb05fe14979f9dc81593a3fe6b7dc4e101bc9b6bb6dd4ec5c642e09947ee6f4c88aefc77000906cbfc17a9509', 16),
                    gmp_init('0xf0b6d5c8746a7858a23266adb54c6f06e4600e041ca3edc32347cc9699f5027e64a45cdd914188c9977eb4c0188c58df', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4e5a9dfe6ac2c3ef049f9294aaf0c000d214b583badc49fb712e1253ee0d124b89bba01d262810506f5e0f5d2805e596', 16),
                    gmp_init('0x526f1b07f6acf1717bdd7fa6306b571281a2b6587a5e5a25b5a0603d0051e0574b8f321bced6e714965622c691013e25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a985fe8c9e99c018ac9a1edbcf843b4b1c2a5bb841447a2b84d53863d5128c3b74dd3e52d7a2bf58d0ccefc54a20f0f', 16),
                    gmp_init('0xd096128b418aaefe2c4c0940803f23fe6aab161e7fa12003bd3632efc4212524e33f37bd42fc437cbcf6bac890d636a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd39a39b13c5aa103f01289847d6c4eb8a07e761e035524861695676d2226ccdcf30983f32570b6be13092201ae948731', 16),
                    gmp_init('0xd73f96b7bd8775bc5b9a533103671a216bb8b902c7d9918cad856519fb19cc06de6c0e326c6124d584286c0657da5c7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5b63054672d46d11ece663e0aa2c0e1eeeca14af141b6aed40d2f799d544c01a355a642d079f1b89321e632dd33f658', 16),
                    gmp_init('0xd09b496715ad2ad9d31c0473956847e7c0b478e154b820ba1ceb2cc3e043f4d1b14f78f33e214c241a856428492dab78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x463eb450181f57a6990c855172668e0367f4e43938287c10919de6f94ae2ee504e24749c8351d281c9179a6a373703f5', 16),
                    gmp_init('0x8d6a583ae9d240868591518f3c7c293931f2982352fd0fd22f4c4a4030206e8f6a4df41c701382bfc7114244601ef99c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2188ee80b5ecd6e9597a4a520ee32c7d062f970df5a67c0ee8d665d01e2e5fdef73de629948adcc211e8e84b3d59b9f8', 16),
                    gmp_init('0xfca0578fdf27282735255057d294f7a53cd0325e36b43cd8f701fe08b277862d7e6c0451bdf94a5402e11252fdf8e7fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7510bc90f63066830a092effed99dabfe86766cffc0450877a319d45bfc3586e1abfec315a962d2406e4c121a9f924f2', 16),
                    gmp_init('0x7a9b375e10bd862a50bc30fcf51881a7db0c21cdde1bd5e09a4c2bc761a6ab80792380f741a9877a3ec97dcefd4c2c1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc34fdec3c9dd7bf0b3adf2871d936522f07b82b0ea31e4eef76b6b2aabcae1f2e9030b07456a57ff54b76ad9aec56242', 16),
                    gmp_init('0xcec34ed808039aff7ab935cb119f346206a250a5bc24411fccb5fef8d9d0c760140d048fb97aba7d4f1aecf94087efc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5806cc28535238783e6a79987c947d9e8fe8260e0979a8293ba2e9fa4412d3723e0715a0deca67140a7351f5c6cd8bac', 16),
                    gmp_init('0x639e6c230e7c381bde7f173aab1457fc0cd405d5fd954e5a95312fd1a48f137f1ecd609525c7607fb12e478df2ee2036', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa0e5a489caff98f5833153d35f6bfb4890c64296d21d63383966a97ca379fe4f566778b2333de441249437ecbd8de9e', 16),
                    gmp_init('0x3985391f337e6ab9590636c1806fce549b54716d68e3c0516096ddeb6c0f3afb88ef58ce541f56cd7535f735e66cca1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc3d6b63b38257bd24f1b980428d3691881db1fced8e40377d6a4034d3fb2bb5317e975218153a8a3df75c83eae1bc96', 16),
                    gmp_init('0x8a3de7ccf450f88f0c0ec4d3188771c8421e79fc16df99952e70f310e90e1de28c82813ccd1a86187e7d2dfa49fd6d4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x199b9a370cd0a8a13b8efb8cb0dbab2aa0c8d8855dfc6eae1994bbc38ae0bc59efd04150f2a8bdc91d69332ae071e86b', 16),
                    gmp_init('0x8bffc03e36270b68044b105d11f512b6f17dfaefacd34d05f7e7803408a054bdf8931d0d4a840fd6dcdbe90d6216e20d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36b74e37cd6a93caafa267c6a8919f64602ef0b8d9612510ddbb71fd7a7c5f953a68b954239ec185152875291461c7dc', 16),
                    gmp_init('0xd70dd8d2ab382ffff0724f3c6dd0a91c863c9f322aea0987764033b9dafd2c34e60832f164beb33d410977b1f1ba47a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bd6995c8ee5a1061e548359a9aa0bb83cfabd0d71bc05343f05433361fbbb9800f685a6e04dc13fad1c2eedfe0b214b', 16),
                    gmp_init('0x469794d0678b989151f28caef95c5f89588f2a05d59a13af52397f489a2e24aeccc4cebcdb6e2d02abc616170ed1175a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd710f8d06d567a069bfbcb026a7811b8c4550eee1e4734e2b59426b4719848a8ec6b5f3b4ed5823092c29c40bd28d60b', 16),
                    gmp_init('0x7c157bf3d2e4fc93140ef4175574621c82cb0bbad0eb2139923c92f57f2b2fb095d654853b4f2c9b2e08631749eebe60', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4f769c4906508f4522046f04921335edf5035e9a3eba33088c6750b96ada20646176a0eff99591e82606311837d6c1b7', 16),
                    gmp_init('0x7e35d102849988cb4193702968e2eda5994d283d8c756857efbec9a6ca599ce5a8a4a41344b0f2e19bde2f072c18581e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9fb189da2cf7e33c614c051df68b90d1d696dd706ff3cdc91a0ed3a911efea2d61fc391cae56ff006ac844143734351', 16),
                    gmp_init('0xb40137680eae3e84db567865b11c7981a6ae0f6e3dc853bd1f11063d2fa7c0ed7c46a6fa391d082b2788260d077e997f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf3e6245768f02c4c8a7631d1f7e01ec90d1e74b7a9917298e3442fed6a5d010991f831666a5593f92e31dfc98bb0f90', 16),
                    gmp_init('0x4c17af7628095ef2c05b84ea266052d4c17ed7ed262067f1e046a8921677ebc44fa9839cc6dc4b1396f20a64e0bc8bb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb43c75ac4a2a5408a2e399bfb2086dbf6c0b16d6ad5347e5446ebdda887de31994dd5f37a2c2db95e5cf38d35eb41c96', 16),
                    gmp_init('0xf5c20bfbf79950a2d6f7111fb9336d32de6d2955d5880cc0709394fbc104d7ed977eaa20cba4a0022477f19c5193ba70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdaad484dcc544c97dd6431c1188dd6e6c9d5aac08d64396e23ab47fe0c24e00181646859c3be4ac867f1943f1307a23f', 16),
                    gmp_init('0x4528b31f8162d679c6bf9af86064e3a258c0e6355b3c7601ff1eb68a113efe1fcd0422c54c1aa90dc92128ebf9dc4747', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec47bfe4f431cf4e34f4c5f2697af93c390b190633ca10c8fa00fee475be1c8a7f389be43f68b5f5144c775b89882dc4', 16),
                    gmp_init('0x580d92f47b6c2a6528a4e36b8746afe3bea5f609f87d8573a5180a3cd840873ec4d8d43b3576931d3e22ad7150ed6b7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc1b0a72afe34d141829bbdf3db1c1f810b76ca90342b513398d04eebee860fcf616137a561e74699a4211b5d8bc3979', 16),
                    gmp_init('0x5c9b53b81f460bf71049666657da48fce289cdd686234a4da9da785788ef6c03bc3c4b34393474753af1aa7894333f9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d9d22cf70dc35e04db7768b232a750f5d6adc50e93b5ac1baad7a8959ce059dd723de6d64902f762a67dc19d95bb177', 16),
                    gmp_init('0x4c25e003d207aeceb0dbe352c9d4651973212db3367df9bd90632d4c9f5b607cbf31a13bf7a7865e44f78c1fd7d44f0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5eabc834aa11845bcacb513dfb3617334488e7f560fac392804b4a8de6359e3e834c4c019754835b268e06866fc4d708', 16),
                    gmp_init('0xbe2c54ea84df9733c41a17199c706ae171854685d8b3400bd573338b91aec0958a15a40de31142e2f8702c3dcc00974f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x168279bf5374ae428e6915e76efe8d36bf6484c26216bd6f7617c3ff322f1a2f7a87614e642198a005831d8e23fd7e6c', 16),
                    gmp_init('0xb0f21fa0e26414cd5eb0d9f0376ad27a836744c27d29803d6cba1cb417620eb2f8307bdbe22e1ac5104819f121b10a4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2545338abfa7a9091236dbef01bd837d89efd0eb58c2579a3475837d12e970ff0c8b13c54c803d319dac473c7b5c3fc', 16),
                    gmp_init('0x7b70e23f7eb7eadc507dc59d186fff8ea3172019f9e1590f95f490ad8560a9ccf12a12bbf7b7cba4cd7dbaa07e978383', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeeee3992c8ee6278ddb3bb51412bbd39e1ca172c875b0281245fd060ffc57869142c02f2e9dbbc4486accd8d168d726e', 16),
                    gmp_init('0xae2247a66493fb3c091d0b880ed1ee75a3bb64c5c762c948a0b545f5fcdb8ebb12def88eff7fb2e1888fb896036d10a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x487af0ecba13c86fcd4d49b5c7eae2209f612036d546e32d3ae64262d19533c2fcda5a588435e170a8f6985f522327a2', 16),
                    gmp_init('0xe976da39cd8bd83e454d7e613efc6e49f42224645bb41d3cd15742075ed0dcad6823dbbf75c26590056daa12a20cd525', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe654970e64e04e37187404812b10720ed7eb94970c99bb446e548f94eb6faff313cbf9585ff1d466c3725320d13d74b1', 16),
                    gmp_init('0xdae59cc00cb4e85d6336ff85026ed9fd292d455148a048ab62c8d8e580f7a6f1c31fb06c70861f1c376954c1455034ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xecadcdd720adc4bbf8f8149d1bd3903687f46bc594884cdad84340b7058daa78ba54ac5babdce7adff82f6c8f0539d9f', 16),
                    gmp_init('0xdbbfbe73c2a899c95258222a2fbb8538f36c4197a5815f3630452a16c3881de7c12976228c25600537a471967e4e61da', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8b31d35358d442508c78145d0936e3794df54bca5e188d496530679b25efe64307b4a582b4a737ec686fba639a0b4196', 16),
                    gmp_init('0xbc3a4e5b6e84fe251c8c3fcf7f22ee03c0414185663ee951c37b19d92da9ca1e257cb87afe9f287758830d04dbf1b2b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x510537a023b41693f6b18346d07e5b1b81eca3f4282aeea3dedb823e995a805a440e40014bacc6d2cc35e2c3eb25d058', 16),
                    gmp_init('0x3a724ff26a015fcf171d582ca49ce9d436b5da58ebf3c2f239701d18b9d48bbf355d2ee35604c7573bcd50e6d01ee86f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9d54df22a5b24562a757ca18b2130064dfa5539322997e0e85c9b9ad09b261ca882f61d6283d869935acd17d3f2b701', 16),
                    gmp_init('0x4d0db837f936beabff4c8c9afb1eace2f801ab6b8ef453ab2cccb06f627b7137d6400bde20166b444edc316c363173e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2913d4eb34cb8fa1cd958f857f52c6e50e63f46050feaf12cf1df4fdc30bd6596cc28a6cca52b096d490b021e0bde8c2', 16),
                    gmp_init('0x47b885f5a14ffb1a5cce5a07765a13227855d537603fd5f2d48722eb3bb7da7b47f863ab1a874d8cbf987e9b083dcb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe4ad39d720ad0e1bdb9462a8633cdffd2eace5506cdc45f06e1029c51f3adf6d2c0528198e7ca53695fcd31f51a22736', 16),
                    gmp_init('0x8cbf070e73c2399b73d942123c2d60ba555b842f57972879469db40a0187f8adf522ca2311380099c6764d3cdb736e5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52b103f7c5e8a19891f1c504615076bdc601a5139d51dfc60e6c616ee4159f45e20a83b4efc725aebcaf1ee9bd0ef927', 16),
                    gmp_init('0x5cd81b8f91830d31681eae23e16fdaaac22143f893f29f938cbe829e0df0a9f86160fc82509ea1e69981ace0ecc50a4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa50e2374cbc0c7f675733a4856a37ec789b47b4c2162da53ddde6ca3c5c89377cfb5fa7b67e8ad3bd239236bc7b3033f', 16),
                    gmp_init('0x868f07c58eb0ce29c7571df4cfca2c6f6931e761bd1c9e0b2584902c0e5100a56dadbd699bb8b0f5931e06da129e3dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d4c684184e4468cb55e14b747b914c4581128468d5195a33a6c52df2b512ea5c20995c57bb0f92df79bbe27e8ff36f4', 16),
                    gmp_init('0x300fc51960461e7397d2172bc1d6995cec47485c2e34bf6e9757e89d65ef7ef29561ee22c2b2ab26cd48ce283cb77354', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ef2c3e9be42762db1e7325d65cf9bd98b3806bb99935691d623b84f9786d8dedca29205d66ad048b38a19531876a908', 16),
                    gmp_init('0xdb9108635375aed43989dd472e862c305603cec397c975c912428efb83af5c68d25d104f0dff7a69dea82c706a117c26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6f9357aa42e09926a08273f383807089c011c81038a578d2031f1d28606517c4864668e40b60b0a4e85018aeb8dbb39', 16),
                    gmp_init('0xfa7f3b34304a4ea520a7838cab33101695fc4e428ad42427c65cc31eec5c9e37cfb273e5af3a5ce37e74501407eb6707', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2dc15688ab8e84132de7e49b030766a7a7c4bd80d7a420c8636dd30c52975188cc589dbbbb5af32cdc3e0015b66919c', 16),
                    gmp_init('0x64802554c989a2c9576bb4f27c32a2ef6acd61bc0775269e89e293fdc0efee482a7dfefe969763a7dbec43f7f885c001', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3eeacc4e4a4e92b36aa7f187421c179bc8e8d8627d31b7e39aa81bec2240d31ba559bc8555b6a76b8f6902fadb76a97b', 16),
                    gmp_init('0xe107af4ba0a8aeadc1e2fe0145f6766ebbfec56a46e38093f1a317d5b8ecba174229c8f5135e96c6a4344912d13b9908', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa65c01fe2c4c23d1ad85734c35634338068d86402cbf170f128188228a05c295a264e49351db16987c511440163c169b', 16),
                    gmp_init('0x64e35ca61bf3b9e0b4c2b0e13c955f63645ee4766cda334ee0398d2bdb581a4749863648fc281ebbd29d1f1035a41dfe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf744800b6b96ced720eb58031d9bba2373e7b4a296370723ce6175e86cd047a4da94752743b1f9d0972a7d3dc619fe5', 16),
                    gmp_init('0x87820061ff5515d51e7229232adef50e0002ea7014c1914ba74fef0b0bc32850d0b4aa70286323a7cb2e4ba5acb5b63c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd413570daef6c0733df55f3159ccce1c435a652606bf87cf7a24a485f63380f089bfc17b3befcf5ac73de4d64503883', 16),
                    gmp_init('0x3a6af3f4c3c7b28dd2f7218fe8b43a39a995f6eea265354dc1344e04852b69230ccf9a511e9dbff820e8acf19d95dee2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd15fdfb4eccf825fdd83eadfe0e160280e7c0d8fd2000d9184d529756d0f4d11db56b796c56e955898163d1791f22d45', 16),
                    gmp_init('0x1bbea6c38ab95c3404ae4be665ab7f33ab2344ebfaa8f031f339b53dd705d8807414770c01ae050c183b44e192b01ea6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9180059b49c3a23064b758895b35f7fe2728cd9e0f0d85ffcab4deb58114ac3ed5dac68a600c30c14eb769081ff4ed6a', 16),
                    gmp_init('0x64c8f91cb4203fc58563021d611795c4f9f8a1dd138a1bbb690622b25719762a36d56083d6ea74b74329d6f31a8b4fdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b57cb810a5575f2a1ae293b9f7f84e81f495235772dde6271b4e2b45cd8dc93d414dd5b128781334de807ab780ed78b', 16),
                    gmp_init('0xa925aaa7cdca5d82d252d39957818fc2815e48716f1493e632104a29d6b5edb481b9bf9ac0586cfb491f55d20f3b69d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd258b387dcfee29caebcdffe192d880aca8090147db698342cef98412735dbe9b0e2b6983ab51d9aea4679e12769e49e', 16),
                    gmp_init('0xc1b6f8ca09358ada3132ba57e2ce916e2cbc7c938eac39b6d6fb23f41b4d0513577cc62b41c30fbe6af299951441ea63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2050e090b0c03b73051fdea02b17991a19c43099b8e7d43dcb9275fc7a8b4da075bd9f4c2efd0453537f3c75d0a580e6', 16),
                    gmp_init('0x59daa1c441561652e700ae237648365577180b5046f07e5819e1d71c0dc5907730be3f55f55e25de9108b093585eb6a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x603a625826d7f489b465780d147d540cb9e7ab886bdf29fc27a70d4a406491065fbd1260e295a1e5232be8ccf8365946', 16),
                    gmp_init('0x9a39b455220b3aeac2f6544c9f8fcd886aa3fb33d08df19cd2c951555e3ae885c5271290aa815a1e4fa2ee00c7977a95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb541328c7ce84518d7aa5a423fdb52c35814c758886a9c450df143921a8ff087bb0f42073582ca08075067992320c34f', 16),
                    gmp_init('0x2fe7c7f4b390d4c6aee4ab8715ea2ab33ecf5b0bc24e6f510b6021ec6c922f94551b8c95fb92e2eba38596b2a242e8c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5f6ed9ca33899398859b5818a271ff6c254c1875036d689d341416eb31546cb8aaa469784b52db8e111e4db8c212b5', 16),
                    gmp_init('0x34be3813bfc96ae1794b8bbc730fd7e361337ebb7aee362fceeeb28e7ec773388306cede6430001e3898b2d4a9787a22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5bd31698f9f7e7e9daeab19901fc14099155137bc807296bab45c88a44c92808dfa9b7ba59cce28ec477c6c00919106', 16),
                    gmp_init('0x419c2cbb94af3f0c09ee687a76cad354280b97f94168632221aa420080f3c67a1005488bc8354fcf1a0ec836e9b57cb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa13cbc7637c1d99867e1ae3b2729de123c70ef4c7ea0948c52ff629c886fda3a5dc003603be4cc4b659ea9dd74d9e8dd', 16),
                    gmp_init('0xe9fd9e21884686a1a791512644e7eb14b5dfa3e83042d55541a676fae9984a4d74adb10ecb0fb83f04d081614ed358ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc991bfd0abc283c5c7aa3d5fb68680091011f2b4d64453286c8ca3db30b87675fc223709e6f9ada7d435986142b9b41a', 16),
                    gmp_init('0x77daa75f26006b2ee5ce6ea698a4955325bfba023665730b5f9b7311e8d8497022e2ef61dc4b6233ec7039fb38bedbba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf19a753fdd16d80f299d1b8971420ad208406b1cdff75874a87169c17d16b5635379d5d4c5c8c73ae7d35085c9339ab', 16),
                    gmp_init('0xeeb475fa2c6a83b5f2b489b8bf8a9145df5beb7f5ffaa95aa48b749703528b33204ee2e9a90eb5b76c2a43587fcc584c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83582462f16b1027fd3aa7c968b5299ad143ff28769d0d96857a4c5f892e8ebe4087cdb5b8aed2ac3668c30990a00286', 16),
                    gmp_init('0xfef6885212b0669ad0cf0ed3815b657c33240e078cf768edac82d02896352282d84d210e1f2ddc93f9b9d80ff49082fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b06678cbb775ca1786806890431d30c946f1ebae04bd0fefd956f6261e3ac8c07da28e8227164ab00389da869a859d6', 16),
                    gmp_init('0xe97877c6bb0ee381f272ef318babe1a75541169d94f1fa77b0ad9306fdf6a4c657fd98f26f5833a8c734841f6f79d1b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab59672c1e65a25f2bd71f4850fab1398eda4aa79fdac418c6a2336944a4d18b9dbf2ff6c263ba83a1add8dd2cbe857c', 16),
                    gmp_init('0xee16949bc83228124b82503ce0100037811a0471f7616754c4c99e005bead200cf113d50e4bb84056b6da80cbf38366b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x778bfe301d798ddd5f9507f0846e6f593d84e21e77d8d02f054cd79b9caf93b8511af0d367fec6ab8568960c8456b4da', 16),
                    gmp_init('0xbe41e479a3ae9e76150686bf1ec658a737869c2f72f26ec8f7f6ea02f76431b9fca8c5befa735802fe97a16b1b8935ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a6c7b487d6ce34847ab3fcb86b8935f0de095094f885d0a68f09dd0bb2c1dd2bd4e3434a4d2d912e11d749ab35d9cb0', 16),
                    gmp_init('0xc9819b4102ee8a6d1e18efb2837bf6c0965c63b9f7ff304e243d3e87733018a124f75c5fbdf0bb5bc746f0db7c8b9563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd522a7e9d37f67696350f3d4a86e5f2e21f4b5d9ac5119dff3a5bf08dd6be22f07c163f1bd60f0132b090e377434d0', 16),
                    gmp_init('0x917bf9c8163763d5ffeebd3e6d93bab1d34cd59195742d5907e96de9445c677c56e919122ce2a87f3652021152e2b852', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8130cb0670c38f0ce47fa2f83dafc6ef639eb2df09dd7f4e49f9bc53357d89ded4782e62719e667a1b2f0e767c870844', 16),
                    gmp_init('0xdfeab4b877ae4a4709308d74a8cede3ceed95e0dc700734b9dd758f42ad2c0da3427ea30386d4a29ee77ce1dce216187', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42dff0f76f44bd15607d942bc653f347a206fba34ce0880c8b5895c36e9dce47ee4205b5e696f6396a66eda1a8701430', 16),
                    gmp_init('0x3ac4d3d03758be5d2ab7692e7f5f203788c40fe3dd8efd68019324436a7c173175fd8b4c86e36b3ebf64be28dec93846', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34ee5d81e45b6e61bbe46e1437a4c985eab938ace9cad8390d64b84ba7a22d0bc270bb96fe4007905f165ffe3987fbe1', 16),
                    gmp_init('0xca4744208c9175aa388d76b5b16591eee95464674a8b85d75d103d3ab638a3025ddc4fe68c6201e5308bd8853cd62690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd283ab71366e54c6fe819ce2827b5428f81509ee785d00082f4df00eb757cff921e9c4a25e43c9bfd15665ce1814feed', 16),
                    gmp_init('0xb3ef0f6f9c173f42a739543a339bedb23bf513bc37928204324bbf5dcfa71ea1fe6b2b2038d954288ecd5a16df187db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7883978dbcc5b7010778cd4ba3e5d7fe2c21fa2f6180671ae4a78e379ee18a52bc41e648ccafec12426676061945d3a3', 16),
                    gmp_init('0xd980153eac47e6c0e1a439508ab87b311c80050a76f5dac1dfcb26b0f90bd433eb92b2bcf048e8f19eb636aaeb860245', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eca959b836c58a0aae59d1c63d81ddefd26a81470b5d1b278499a5860a65383584a2d57ba3ad38d097cc5849b0ab534', 16),
                    gmp_init('0x19eecce240647d56bce18cf7fe8f1dea903c56fe7b31cba4dec879c34fcf13422e4bd5430fd856d79d9b972c146428a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e6a0f3c06b70b950723882e5b78da139c5dfcb6ed770c63a72accfaa61a58334e67e795fd01aeeffa9bfb64a60c3444', 16),
                    gmp_init('0x68d1d8abc00c67cbb04f79b9086d2f1161a4d34b1bc1cccf9fa30bf48ba559193cb81a38edd8c67cbd23358c0060b60c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f4ce0d5b15d9051bd9e48cec5d6569a3816832a50cb5844da632bdafcbd168397afec2ec67ca8217fbbd655e9a33bbf', 16),
                    gmp_init('0xdd7be5b640f10f4c41b507e6a484201824d30c1aeb6774392995f8f610d9429a041fead2069b6d3a6afa726d3ba26de3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac7246504b9d028acaebfb83748dbbd58f7aaf469f2587b350f5208bdf450cb67e1dc968912e90ff28709d549d272336', 16),
                    gmp_init('0x42bfefe88e95345dffcae6a1edaebca0317ce2473550a8848791a1ec72b36f01786564a4b99cd1fa42354b34b88f5181', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x381cef2de42b604de45e91637a12c205084a014b184df78d48d792de335c814d31ea3f963f7155b14fa3daa2f20142e2', 16),
                    gmp_init('0xce7a04df49326db9bb1209dbd11127a7ee8ff240f75dcdc401ad73adedfafd95cde1ecd6f30973c7f3e606d3e193d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x773383f22fe77fe999ab012b6413bcffa1765fa13980b05fd5b39dc6cb2216ce3001f1fc93cc57de45df5a605f518047', 16),
                    gmp_init('0x11c01edf01ab4421ca0ce6164bd16e238ca0b0395dc7864feb1b2add9389ed06aacb596c4e839929ed6d7c1ac876efa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29873215eab099bf86f8a8bf895f7059db1d3d5c088bcdfc03ec20e067b9b394db6254bb3d3c786086ce89b6f590ffc9', 16),
                    gmp_init('0x185109e5e8af6e990ace40b24e885a8dbf2c67d4b8bb9ce519cb632fd302aa818ced14f90f09bca9ef4c7c11720cbb17', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x137d087286fea1b0356556fe9d07fdddb56aa4a4f2ddd3e9a02d41138172145c59bbaa8709dd1ca27aa293664ec91657', 16),
                    gmp_init('0x9586a28c7820e29e732f05a054041a11b603544f6e41c6861283110d41df85f80db3df0ec2472c1542e9a2862f711ecf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34bcf4a54976514e360df99eac7902be19d55ab14193edc885d944a51a59cee5200f2c69de2b078130f28c58b94a0f6d', 16),
                    gmp_init('0xdfb3611a728ad90759ed7d6d0f1928fd08ef486d4e46457358e25e3cb212bc08eac6f5aaabe870eb23ed1ee12816db1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18a9502acebb78b1c46fdee4cd5494bfb7fb39fa8f48f6ecf50fdf08b0069a51290184f72e7688191d74ecd6d966d64', 16),
                    gmp_init('0xc4e3e3f796a86afe5c7cb3505de0bcddb5d520e20dca02f7beb24e42dff9f18f685b96c0e1bbcef611bb62242e41e240', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbbbea79c10d9acfdf1883331595f801b237ffefa2da6c4eb719027d44adce518cf877eb604e8982538591e28b8dc355', 16),
                    gmp_init('0x75ae8b340719c05d39a90d6ca0f6b5cc65a666e8cc47a6073a358fd1d40cb68a9e94cff574ded5d73165af04f162e2e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55706f8866a09fd25114ca408cae704bcc128c05db0ce910cd798a7aa2d71eb32e5c5c86e6c3d1f14940a79c3f32fcb6', 16),
                    gmp_init('0xda42fe9be67f27b43ae6a0e1205b2773a1a547aa695f35792cc53605a0146a62e5d808a877fbfa11d70a5b1233f8a7ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22f30f9a760d494599428c4c9554754d10f174af1a79ae06f3b135889af2654beed74f56a3bc83ac0285cf8548974c42', 16),
                    gmp_init('0xdbe912389c48bace5630593f2982fa3eb730ed5bc62849fffbe7875d7fb0970469223ef8266d5a0a0dd479483b61a280', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x372f59802e1a92877dbc115f4bb7e799fdd29308942aabe85be5c662274744a217ad6d72d779cb3b3a926c945cefff4c', 16),
                    gmp_init('0x7ac56e1a670e6caa5d7565903d8775e9e2f6f73114a4fa79d8fbb5d7f5dea582cb1b7e8fde5e5ae8eef2adf08eaa9bec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93412af8d3f88b3f7edac629c4a612df6641b7693a22af64c9a148a8a0ca4ea953f1538a270a79dc8d6e50fb5f6be87c', 16),
                    gmp_init('0xa5ad027d4e755d01a34f79729b5d435dd2cc1d4e39fc6fb93f79d250391b1f9f4ca40eda4a35dcadec41c63225fc216b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27bc41ac3546012a96c585e2e211031608a0e9de3c0ded721bfe4b341c4ea9403d8045c2f214d1d4f515d78b3c0f7074', 16),
                    gmp_init('0xe017fcb3f30e8c8068621aeeda72920d1addd7454dbc49df75dff1cbb7f38b6596efbb33d5d969d4d3b05be3709da766', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2be81d4376a682783336f42305ceaf48697358c5c0a04af217ea618632ee884bbe770fb1bb8060095a91fa6f334995aa', 16),
                    gmp_init('0x1906e6d5901af88c21604927d9abea26344880bcd93bf500b28188dfc50a48a3ae3079528b89a353732d45cb2c2f0130', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xefae4764d2b312e4956c1daeaf6e8ea84ae63390af7305a338dc8d71254c237b998af041a3655176df052d6d8a9bbcf4', 16),
                    gmp_init('0x637c01d513e05ecf268392638efae1a14abb618598939c538280df498edf1e5d08fa09963a83670513ee501441e4c572', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6804d6af869057d9d3fe393823acc6ae0a153c285bb499271db8495268d28e899c2d0547dc9c0547509199ee3cb92137', 16),
                    gmp_init('0x2ee8ef5a3e972120fe0bf11f5e56cbd3e60f03483cec15232c56f691a435ac1261d2b4a8df9275859ef75ec35ec45eb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fcc4aff2357b5bef11551e8d84d467e751f83cb79d1216aee8dd74ed7dec6d53795bf29dd4472a5c7e0d30446a68d23', 16),
                    gmp_init('0x18b21298395d610b944f1664772b7775262b58ece3835040d353d3b48b1891940912c67dcf385430bb8bc03ef6056ac3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17eb2e17d384668a4eeee811d578e54539ff261c84a3a1c39b360d5e50447378543fa291277477ba71a693e2e196e97b', 16),
                    gmp_init('0x4876e541e25a80ebeb90a09885ab59be815986209c2355fa49960e2ef91aaa00eef8aab5fb5a4ea3ba5684272dff0072', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe4666676b4a0e0b6a3038ac284d21cec6ced4058345eb652c9f575c777d90ea855db9b7a6f5336e9beef8f80ad5261ae', 16),
                    gmp_init('0x560318e9a6113464071704a595ee07c8bf916f874b226710acb67e3f31a5d8a3e0b4b28b6467da2ee183f7f9c3eb8ec3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb3d99da97ebd5f3cb031da3effd6582cc05cfe04182a49cc66b6274cc951c5d9212dcf2c51f721aedb22f743057a5682', 16),
                    gmp_init('0x75b71e1bd554d1d35337672bf5203595f5bee88d6301c209f411e7ca96fb58228d37cb72c720a95e4d7e446d7a3d1084', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa179ad8f81da43669d49c404549c69943a476f7499314aad0f92bf0974dfdc53abc52a2539040d16cc397b2034f92fc0', 16),
                    gmp_init('0xda9fd8068543a8d6933a145e84d11aaf360a1b9e572f118155b29dc0caae1356dcee1d15c8f488c3a8140e0f957475df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa54b25c4df95cec60df6770c805740e4f698907e41087a0b142506c1937e48ae7046a1100defce89d47c0ed5ae0d0480', 16),
                    gmp_init('0x92d3cf6efdb7d86d0196de2880caecd21f90904eeed92a8c6c96e993976cb6eb06b912a1ee435f80a9cdbfd0c63b0d79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7396064945ec7f3121a96504758d0bc2ade3a46ae335ddb917cd5338cb2ecd2019a493498166e01da3df313fe9bb1adc', 16),
                    gmp_init('0xa4b29da0d8fe460b43124f15f7ab941f8a0b3df67f3f739d06b2537421ad1350addeafd6d8694ad84174d2b7db79c2d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97d93eb93bdf351d5ee26a421c70539caf7400045c25cb8ca65fe6c1ef243ce26ab6b3d184ebe8515141dee6a88b3d48', 16),
                    gmp_init('0x90acb65f404ca31195642d8496dec79b6e377c72e6893aec1dfa86014a6a1ce8a07475de3bae40dae8a75b6cfd39f8cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf98ab50305908a8d4e7a68c6b2b7517390beb9939184914e4764cbcf340aa74ead52a844db51659296460d70fdbbc846', 16),
                    gmp_init('0xd3590c563ddf48f9a15044396d551f8d0b04a072a6c3d8cc94ff37eef2ea77e836765f35e7088b54f83b8c4bbc294465', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0b910c7df3acab0340c0217a247b3c0af80e53d603d0cd7def1b32eccd06860326954e19bfc83f4b5113cc24747d927', 16),
                    gmp_init('0xf5173836bb9dfedb4235fc061664465275215b86773c4702f9882deb0eb4b04c106f1b6f9fde8503bdde28956bc95aee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde1b58d5a6597374280a1d9bd4171a3444d4a3792229fe396a0442e4c7b0c25472097574ef0a4a00ef0eb2b4b2a122aa', 16),
                    gmp_init('0xc2b76ed80ea8a2844b6316b05fafb38b5e2f1ad0605b2b861452b38925aa1d281c34d41abbf1a588d3ab773866677a12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbcaa51cf6b2cc0fd6d606bfb1a3230718a06746d2a4351f8bd414e1be7117bb6f547073c86920f48f34d653d9e71f493', 16),
                    gmp_init('0x4e08b0b2069768e6d36c7aa0b0ffd9af40a6fe45284216b8ee1b37f531c3af847a3027edc3c80fa07d2b34d487cadd2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bdf92f58c4cdd0f1460cd19dfa3b1cf36b7abaa7721a1779ee071159dd6aec7408a0dd9ffc630cfe711874f322f574', 16),
                    gmp_init('0xcef6a8d59c47a8fe7619317a43770837d14c0e2514aa25be4beb79f24a0aa024911c41830002d86ed02d30fb322ee7cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5269fb7f65e1b00d05df848e6ab5dc6329bfad0b5a21e8437b722088fd9dd90b524e1043fb81e12380a1728a61bdee7', 16),
                    gmp_init('0xd7d164059fec16dccd61d355412c2f31279409e602249ea8aee0a47ffcdc180327d36da37075b744869759770784afa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83b850e5d41aa95d65130e77d15ce76e38a8a11712a5f4d2d3b6c604f885616ba269e7939061eea025e3c62990e33539', 16),
                    gmp_init('0xb906adbae9d50b0cd37c745ec94344a2fe30beb9b86fe3e8ae865c99fec25b792dd1a9e42ca1f29a6b2b6d7c71f75404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69990897a44259858c07a263da9cd45a4bafdb191ad8c5f19b44d5d5fc42a2af9563bda5760d0b86278d8c3cc29404a0', 16),
                    gmp_init('0x3fbc7ac04a6835c5969247e3f80303e578fbfa8f0e3d6130eff8d0f30380f3244a4052c74eff18eae51fa1b3546ebdaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x174d255cb826c1ab8816b4923b32daac79d2e22b3918072ce3c18702a06073f36d27b458cc93b989ef2c547d089b6f1e', 16),
                    gmp_init('0x6509352d2f690256217054a6a716489e6269429a84b5432a833d73f791b7604a171612638e400f5b429862a7363298e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5b27f22eb0f9afa4ff228b809b16ebee55d448626b8f2879830f769275f18c5fd55aa31d892d7dce5b23a24c03273dc', 16),
                    gmp_init('0xe44df983540e50a31609a928da117e725bf5f04ab91770d01801f44fd3590a5333fff5fc6e2b2be503fb729e54299bc3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5916fdca401f5436b735f7b4b36de182e60fda5097f2913e1f1652fec4cc9ae90ad397a736c2daf9f5e6c882dcf5b44d', 16),
                    gmp_init('0xc00c4d4ec9c9273d501d12e8423aa34032927302f3197f7fed647ceae55b3b1caea86e9fb6a87be380453099cf414a55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6c64174d80674530171f5f34979c2960817b49995eee5d472dc8d52b9775c41eca1d4d5638078fc3ad64ba6c094c2d1', 16),
                    gmp_init('0xefd7d25d4161a273b6eec090a6b22cc77c04c9125e9263b649af98b4bddba9661f5ecd7d947d4b0b4e1248c30584d8f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75218cabf6e7fb2e30675a676a74a28d65f52e692446bc92bf12ac043e1591b10a1129cb81169f5c9e65dc8d6a85812e', 16),
                    gmp_init('0xdd6f387ad670eb8d6c48cf4b0bcdf79b4e2b24fa9a85b1b778e32d08487150314036b09fd4ffa13c7e68480a5ff11aac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65e03b5f1e0ffe1adc4d3bb7009cf83f21c5132d4dd13ec16113f954831d86eeebd70dbd6b60eaed4a8013b775b102e9', 16),
                    gmp_init('0xeaeb179ebaa4931dc888711a579c0b8f57e781a8a585310955abf92fcc13e08501dcb5cce017e212668984399626e70d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf067468bf2f7633df5fdb63e6a84d32e78a748be1e712589834acddd7bb7740f030ddec29f7af189d0bc5c6e5bf2ae0', 16),
                    gmp_init('0x71eb227aadb194651e121f60421e9b163d1c5551f45eb137d606f2a8a9165441f3dfc3d6109b12d4396ea4be9f0e1f41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x689cc7d396bba6869a10bf96939f5682e7be26ef6e04f7bfad993b4c2a3a03626ddbad233d7a10219bf1030737250fa', 16),
                    gmp_init('0x10dcedf29252387ab2506c0b826bf9ca14a4f06387b2da676b25902c497bc66e51d0f9ae3d3a2c2085541917b82378f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7382b8f2574cd314c91445ecc3a2a68692032420c80d456d7316ad69b621f3ef3fff01f2ace4091b9c759ae805ba2b0c', 16),
                    gmp_init('0xd880476bd773bb027bdb2d8f31dc41576ee5c4373df0c73423b3fd03b59e5a9df73ec809aa2dc861f0b8c621a7e7371f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5370c73c66ba7afb044d45af1f474d7156fe29e5336e4635de167697ed4c028bd5f913a2b6b01a9707aba70a48453eec', 16),
                    gmp_init('0x2cab1aa75325e3ec17061b747b0927fdf881eb89981320f522c8f08a7e3e7e13228862f69ec6231921e4169d66f451b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe409635b5557f3c9e245a7927d3f1cd6dda970e90ded91256cd2bebf0b1774ef7e846003e24ffb1b1eda0f7ab4f3ed99', 16),
                    gmp_init('0xcd14fdbe675385d92d56381772599b2d48ba23209d37e856a8a53116a0b38096635cba42078cbaf1b57b195ea156b334', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96d4d164aac8c93536ea99a04912251c54be7eefd56d7361ed76d30c47dbeb7e2938a4d0c5322be2ed7ebe132f712038', 16),
                    gmp_init('0x9f453c4e06be7dfb02e99d5e2dee680919a79c0eaf0a56994962967a4eebb05164be8d8b926b50f81879a646a88a84b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb2c3fba786214251382f7e1a783390979799bf9dc764fa2e635f2ae5de89267faab7da7fa4cd8d8079263a3febfa48', 16),
                    gmp_init('0x6b392cc032a39f03e37ce2bb587af1064ea1fd3e099346cd3de149c9bad994684bea035fa5250c57dd82c9a59dd48c86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3cc2fa20ba77fd819c163cc13bbaec63973ca15ec50158588df998e9e47c0dc5581faaf23262fee233da6f108a0c134', 16),
                    gmp_init('0x74f0d8a8dea6bbe75996eaab5a6ef737b7ea6ec57f728032d138fc3b55926d8e3e9d2f934b90717fe1ab868a02635cf8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebd7581bfcf4448310bd6744d29535d4993ef8b35f52e107e4ad41d7dca5d59b449c3957f62d22782d4ee5fe1fe80944', 16),
                    gmp_init('0x1af7ac358e79e6c790a082a9197e4abeea0ff4b200bf9a717ba675dbaffc52c4fdaa852b31c2758c069132f229a58fbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa13d1c0ed5b3b6760f4656d3ad767358d9bd8425ed54e6f67d2b7f1f4303003d9813c44c7473dd7b4c4630e901db971', 16),
                    gmp_init('0xa9e0ea439ef292240a1fb2cfb26220b594ff2d6ffb91d72c4b26ec702d72f69c6b0c92450217a93300eb5aa7f8338b19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb90d2a4660f04f5a453a67504899bddca69b7c019cedd98aeb27e4fd28d1b37979e8d54b2772b2d65e8682fdf6a67bf5', 16),
                    gmp_init('0x3af49722e8208bce6d01b8afb30a1c11ab704e0a70acdcf8fa9d6347d2f0f1ee46ff6effa5d5269c5122c73bdd19cafd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xad0cad662b9046b5d91c12c57991a2b7262fd9322a8a454a3692169f687bb208f8e673e64917a76e63416ddf839484bc', 16),
                    gmp_init('0x806fbd102b8e1ad3603bb39f4ebf2d1cf8ad16efabfc71c799c48720f5a0cf25d36aab4f95de57dcb9e4584d4ce184ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73b32aa391b5185971070e1f0f80ead28637fb14a82414ab9ba19c961eadf12e745def903f7ea0bc3195fdb85bbc9ac9', 16),
                    gmp_init('0xb25277d8fe2167f2d25513dc5ff236ae83a90266440186691649d4f84e474cb8d630aa77ad2ac5c8980c82b9ee819191', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e9e19c265f4ac88e69274b9337432799d84cb2db27a037a3ef8f4b648aa759808be861ecd5fab3c87c86deb53996eef', 16),
                    gmp_init('0xda3251379b46be9f238dd5486cef4af844cf300e568566216902bcb1e97736b0237e8f66827d37c894a691b39d3e74bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c628772682fabc9747e82bb2b4dea9ce8c50da034f6d1295cd7e6f527fb3a9f022c7dca091b137999a101e7785b6f97', 16),
                    gmp_init('0xfb825ae7ece896d36e59833c7b5e714a0350b6a205d1cfb4b1ddee93b811029718cc087b9c565b8db53719a8b6e95303', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2ed3e08cb110b3ef86e779276b1400efc126226a17ff81e78c8373d0c455ce2621c9c1c59a9f44ba97fc08d2068acbb', 16),
                    gmp_init('0x29217dbbed12e6c367d4a07e177f82666263a1ffa07efa7eac650c08ff0962b8f0e7ba2338763be8a3f5279f3f3f1e4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118e885be7735f2a1b47804316a1cf869173379d481da2613f84d2d92d277ad466268e45b9149fbfbf852c813fe2fc6f', 16),
                    gmp_init('0xb23861286b27539056937e7ed6d2cb7ad406e3b5a92eb8ada68aa2e47052b26aa4a799ed8f7c8fae0a9b2bb0c0ddc1a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91a77affa1ab90ab96108bc3c0d39a44b2b3ed146e23d0cb4e7a93b7e4403f357c8437c1b890868031700a144a01a916', 16),
                    gmp_init('0x668acac59f0c1de941fab2f87e4b5300f8f1f54f202de51e3e71395ed6b141db5cf4c91318f566fff31168eb7bc6f273', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76f6e90bd832af817b1441dfeff9d89d86bcd55db749ab155d8caf926322d330a0f0a97a6ef5335401252e5a1d8af374', 16),
                    gmp_init('0x83f3475b9dc2750d350f524de15bc40b240840c250972de317add94d3a72a5c48c810d3243ba86b21a34a2faf7021abe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb85d7bb291532429ad569a3ab4c08505572da55ca7bf54059ebd710a0dc911414e8b6168d5842da09d6eb4a96cce313', 16),
                    gmp_init('0x374c0036d66eff1c28cba769ce3132b8013dfc854b5ec768f249838e3cb766127d7f8d2a39bdb6dab91d7041a274ade5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52de2e42326ea3914a3f7ea86891e13fb9ef7a2dff0efe207e935063e4c49595387f42a8abd0ba3c623a5254b55f92d1', 16),
                    gmp_init('0x3cd7c39fa290e468d7f139a736591ab74e309b2a13842952d2032ca1d9bf31dfe52e7e0c6d1b4e2b74b2eb3600d38011', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8de3d99c4919a33c78516f225256a23b1f3e6e0ad44bcc31f28699b4503032c126fab8980b8eb2d7f7f02964d58c5d8a', 16),
                    gmp_init('0xebe482f93a2688f757946f099ebf7ba98424f019c6d8460e13677e994a51443b0330e18c496accb9cb2a2e9a563b251d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa54a9ab98f8216e89243c053a5c7741863eccf16c19394f1fcdb7dcf3032db2b026d09c52942c23cc507c243b65d4136', 16),
                    gmp_init('0xfc9fa0c41a7dced72fad9d07b4f9558be6c2bd2ebfddcaae1de5ec43bec1b362fd72e4184c4b1ef27acaee383adc95ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4807c8a8e71231a7716a1a0bd132e6376029d999607e8248ce3239bc5cd91feb6e69a814074adf235b4b4ae87f65917', 16),
                    gmp_init('0x3d4d67eabef6e1e5fba839aa327b7f023304304d44fd0c308ea33915a6f9da0f0f1fcb5e66c0a6c7bda9d00c02f613ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd065fbe6c407e5cadb30166f4a82f88c7fed8843bd4a4caa7b5e5852b3ce8db8f824c02a6f5a7132cf58aab325a1ea5e', 16),
                    gmp_init('0xcbbc543576c39d4db2609547a0467d778882b38eb84203006bd2ed34d39b05eddcea18d35d1233e45c385cf7aaee284a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a1ae00b94ad674cef07ec381ca69834334c8a64e910a3a83cc6ae1c28c0f3c4ec1a3760585fe9621defd0e815820793', 16),
                    gmp_init('0x873fc10d7038aae982ba03e37d6bc4afe6c2adf5087269a0508333439215fcb736dad5ea058aeb445bea92a1a7d5b2d2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xdd22a800f3cdbdd48d7d76002fd30feee1cb78ca8b1122c6f83f8cb0087fecfde002ff5a5742664b064b0f77ad3ab043', 16),
                    gmp_init('0x9926862dee1842f986d0cea210275f27247587582759b7ac25e7253e8e765f15517adad9fc7e03ed8b5ff455287ec7aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd805ab702f6137517651c75082289b792b9798ac2e0168d3045e687969a572e5d7c4a16984a801aff466437c2a0e5c7', 16),
                    gmp_init('0x65b2f90d1b25fd608e240f08a2b3a2cd752cd12f632e698da79e169d5b65096db23d7069dde24db273d5670ed8fe3fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde2f8ced76cbf386cacfc3a75e1f72a8c258c40262c273e8dcb887ccdf6b24987aac167fc13b17168b8488eafd7b4296', 16),
                    gmp_init('0x2b0e25c6ae086cf7dbbde7e7819176060cad3ee7ecc7d27114ccac6c49ab821cde26e80e1b45884f4ece34078d865d53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8786cf16bc08caf6f359c22f6c2f18df8aa24362896828ad36513cf8f633639440447620bfaa5797b1756ca8787d7f2f', 16),
                    gmp_init('0x9b80d141056df693d2dd863e56c4683a151dfdb115a3e948a73f09c6f387217512dea57d34cd8007447123b1194072ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfefcadcd3d82a56244fe215c8ebc688b2295a3b7ed1857e85227e0e051a2aaeb22dfc623d185b922380cd098fa2be0c', 16),
                    gmp_init('0x2bf3f69f14008e031bdd5fe680c934c939d0beebab8a72e277b2c528547a9495378ac77dba2e965680ca352678809378', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123740a7b903573ab2620c7303ef71b9fe990fb109c704e650294260e49387de63f9fb2e2743c46544a80a6c67093df6', 16),
                    gmp_init('0x679794fc7697a24263a49640aa5341300ffc8dc07556836e5535947a249e952654d31948b6ec2f39a877482330b5ece8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa56e2985921a4e7b79a14c1012b2329f178834755444f516346ea537f53377eafbadafbd084d964d991d646171d68e', 16),
                    gmp_init('0x3513f5228215c1a0de0a1a3dc5ec02116e37b85816589f196180a8336af63266ff7479a58fa74d2934731af289d66d27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76c9cbd1e7a563eeaa617c8c0fb254ca499d6124066651cfaad69e193b6406d1887c7e244324af38a52e8c202644dc98', 16),
                    gmp_init('0xd2cb2d0919f54d28f64190aa72caecf40c49b061a38c0769b0ad0ba3d10163faebc469299be827d26210904115e251f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa66781899ea574d760cfc254acf29924c184e3c405e1b7848f72ce8feea49f9fbb792d392e8e2c3b973d1d70ac36209', 16),
                    gmp_init('0x14c4b718c9b17321466cd78c0e5ecf017f62dcce138a19e1df03f3753f467610d258adff8a47b82900eb986da71aff59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddb9f8360579a9ae9dc15f56f8b3a7afbf364800dd00f3e864822d9bf40556ab5c9accf6c0be2a45474ca2bc44477771', 16),
                    gmp_init('0x5ef2b27fe60aba270b46a1bcdf69ecb9d73b0dd1119bfa527fbb8a82b4bd5db4a31ca0e58601ba7a21c2e24cd8591917', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae3d1a0d8b34886d90866f0103e4315f05450107e67c194c4349038f250139bce91a9ff073adb3a4f0832849b3342021', 16),
                    gmp_init('0x31de67ae3d7c31fe9d645e12d96508c202f13449e58640554772b54234ec5ac015fc7fe848011de7d8e9351c29dcbaa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4585b171aa327365e22ef7d2ded31b5c097946fd15b8756f58020fa9ee0992d496d11bb23c3c7a59cb0657a1bb86c5f', 16),
                    gmp_init('0xa0413471708381e2da52b7a15cd76eaef7f8d6b647d63194fda20b6f963b5c7c854263a01ac0023bb03590334d85942b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12577d34bac742d81134ab74f772ce3f553f2c559b966ec9d37351f37fa6f4ea64095d717b05b62a509b6d91d3291270', 16),
                    gmp_init('0x3a69796a3f7b8150b50a6881ec93f8910f9708962ee99ab277029a5bcacc919df94ecfba711c879c6e7efe963fb4c386', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63e7ca8f3b450cdeb0ecb6ff279862f985d08c73d3a68165175492b5610c04451f538c1ec3a4a244af855e1783d71326', 16),
                    gmp_init('0xa106f0243d549ee8d12d693b6eb8a4331145cbb166f1192242fad4ae98ffdc0c9516a6375350f9a7e8bd44b097ae835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf33f4e2c747d820ba9d56d48fa36eb5ebf8b96e702c15f6f6fd246a9edaea6d9b4fd728464e47e675d9c0b7f9e96e5aa', 16),
                    gmp_init('0xe7081b92fed663058444199ec14b40323e4dc93ce7e6430c2a754ee6f43b168786159845879575507dc142215fab268f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4fa9b82487db5c077bd4d1121df710deca3aa1c935be0e7c2dc25204370da1ba98ade2d9fa12106d64809cc77c84ad05', 16),
                    gmp_init('0x333edd5cc2737a292013139e16a3589ded1fec99b6296d2ce2765b0528aa18e7d0afb3ca27d1e9ff5ba62b469c821b7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e6af6405baaa9f60e9cf4e12f5a8e79b1205e7ce7147ee627bec846b110fef8cbb454f89ac9935d507eadf4fc99e1c8', 16),
                    gmp_init('0xa34b2620955b1f27f8db1988f6f087881a46db654a2f2a556020b2ed58f8ee5e8222f0eb212f29d037ad44778442cc69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2642c000af55aa780d1af458783081898a3be0f303d6d9ef5d841f4217793c32f8d772885a67988b9630603c2f28385', 16),
                    gmp_init('0x59c6ffc6d57a761e810d2c648e0bee5f5c9bfe59a8b5ca46fe223b754f13f45af39b436a2474b2f85c628d4e2633c1ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd628049e35d0aebf3b50e7968028ebcc18a4523bcfa0b91141e9a006fd1de2be1a2e743e90cb2289476794db1626a3ab', 16),
                    gmp_init('0x21322b00b1787d2bae309f2baccaf5a3f99f424aefc267374ed0a5975bccd23d879cc447944b6918baa2a6719beccc48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x407bf578c97e1503e96b05e47e06c09ff71a150ce44064040aefefd78ebbdb21dd7ac3e55116ba44067f45362c599265', 16),
                    gmp_init('0x46a66f7b48140cff27887e6cb876557dcc29a3ead89ee5a7f9a2b0a761ad1987e644534a93986d977d46120c58a147a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9821c37fd1937211b9361c5d28e54ee9dc33d12dedae814bcdb074773e3859a35e8ab96191a370e5a537ff28380e272', 16),
                    gmp_init('0x44e8da1cb49244a9480dc795915656225c70b8b217265d2ddecd229de87340fd797e6b3a24978120d5af9f92b108a2bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d38be152555a5111098d77e2633b0164537910cb70c15b3b6061ec1d5b28c0b569917435090bbfc820ccaf3393ff447', 16),
                    gmp_init('0x67b40beaa6b5ae22188d2909fab5a9c3c0ab14126c40e647ba9d5926dfed753846f2ee26d51a256886f67e040a6c32ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdadda600d2cf75badb59c5b14d732beeeeb6b6c2813baedc881004e8702b845162dc9bd58462a9e14ae018cc3bafa793', 16),
                    gmp_init('0xcad99799d023dbf5e349ac89c954f941d2599e54c00e4fda63c2af5a04915a0efc16e3196020fe54db4bd3758695642e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54fe523b435bc35398ffe265699ae2bdaffed02ba0d4a59b3aeb307bf95a1a77f86609034ecdcec0f1fa87a70661e696', 16),
                    gmp_init('0xb95547d264f9c6350058edb7874d09da7fd9553838384edc061a551910dae5419c94560aa7e3812e434fe714e382b496', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8415df415bd018f43eda13e1be7df7a9fcc8b6b41b79a5af6cd61bb11303e4684ea649df318dd35f2956df1486331776', 16),
                    gmp_init('0xb0598ba68f6b4babc4815adba276644099b2bf37f87cf30a80eb488f03e00d8e4fbbf8f491dc2ca4d41b6bc2d5620ef6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56c28c77672c8f631848d6274dd31bdf8f585c84a4234ad9f682474925f4a989208cd08b70d5f9ec04604250f3c09935', 16),
                    gmp_init('0x3e83db73a14cf724de4ab7e1fcd2bc668c1f89db7f1da759d4e2cc68bf5fe6c0ef60f1e4c50d8fd2324c2c236142d72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x146cfb9f6f714a759289e810b1bf76e7bab7128fe8442ff5f9f0ee569286b0a435ef766495a00b72da3751b368a092f1', 16),
                    gmp_init('0xacee7663b4cffe72df8318ef723328cdf20a25d8566286a9b32316cd4ed45a60101826b937abf3f47dd738c444840e63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3b15bfdaf5eb184458f671d9bc3440941a0b8ccc8f74560612b38f694bb94aba4f9c46c1f057d817154717e1063df40', 16),
                    gmp_init('0x12e7bf6ae0f7bb696812723f496e75a93bc8c2bff3dc455704a1a03a61ccfa113013fde21a1b9675da58a940a11729ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x906cf3fa5f1d6efd9c98f38ecb2091079acaf25d4abf416e1a3dcadf02381a5d78330171f1671fd640406c9a0c6b56aa', 16),
                    gmp_init('0x54c52687c3736a9daddcfed420a4ee5f917317d7f03dc425af0761a4fb958156de01e178e975745b8ed09a12efc603e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cb47c9543efb6f154fd8e92c65415e116e6e2595f0c02e0127b7dfd282ce90bc916ef455d74caf18d5c8a109d245060', 16),
                    gmp_init('0xd588a64a076b7436815ff9576965c76febbb2d43f0c92aabc696d841b5dddd0d3dccfa8da2857be644f4360332dc40a8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x851ea5d61d5dc73235ff277c575d2139933a8beaf8f9b6df8dbefaeeb4ba5e68205fb93a1bfefcc464fac04cf055ffea', 16),
                    gmp_init('0x5dc6ee8f821aecce785c7b870516a17f32f82b9230b8384ff5307fb661b9d6267c46012d885ea15fa6c32ab62f5fe954', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa0607771042436baf2e30df72d786f43611fd38818cdb1cabce755550297edb02fee81a24bf944c8a9d1afe97c715da', 16),
                    gmp_init('0xc31ed2b3ffe1dfbb7d8ad66e005ca7c431908465d5f165326ddb067850667529c2f23336ae5635fc975fc44bf870aa38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb9ad200f3c66632bd9b1f03b7d725db2f63ea84068e5ba5679c93b746e7b3e5a83f71660e53921669e042013d681aaa', 16),
                    gmp_init('0x68a7248080d0438cc4cefff0d1ceee6972bb4bd1d9114adb592775566e653c9f8faf2372858f22cef0dcc19bafc66759', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd6175bd41cfbf9341566ce3119bfcf162bede5a512c518c72ae68254be9f625f76092e9db4e8d0ad375300e34fd163b', 16),
                    gmp_init('0x9a15d92c3947ffb270cbfa5f7189c6388e03096714585e11f5e64cb504d16f0af8d002159d2d5c48807dfe52af4ac70f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb14c652412c137ba1920eb514fc83b5cec070eb6edaa25661d00206a5e6233809e59d4a2bbbbc9f1c3b630bb88612852', 16),
                    gmp_init('0x8c5e7157118e23ab35ad8df090fcc7f3661be55df779f071fcb3ace9e4421cdb6170cc7ee2376a2cbce01a88ece1b9e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe5e6b33eb1be2ff12dd177386a67a1ee39374039a8f4d7714fa6dd4bf46cb0ca0a218bc36e11e0c79432ad32afdec84', 16),
                    gmp_init('0x38004da28c246ed31fd16150a370ed29c5534f810cb6d12cc64144fafdf7e459128b7975ee85776636d54a94c2789d6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3ec1798ec4c1b0e9c3f3915eb2e818e93e610f64f8a7aebb8ddcbe2dc64fb37c51c1b55ab86cb7164177ac094ab0923', 16),
                    gmp_init('0xd3d0c24170e31968674b1d32932eb95c1b24c6f07b0556b0945065a73d48b84c7162123585d8649330bb3e56016b60c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x826345c9f1e9f41638378792aebcf208d2ae7c6588bba8685333a589a20f10576b6983eb44d7ef8e61df1a56b3752d25', 16),
                    gmp_init('0x61a636a128781fa2e137f089b26474b4c35d61836f232845d7031f93f707afb161f0e88f3c6845a7b302c0a983662976', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3ea94fcfcc6ee27c1fb817277fa6df042653c6615347e0f3c2611c781f78aa8423e291fbc5bba9ee477e3c7eaab5039', 16),
                    gmp_init('0xb013082cbeaecacfe85e4741d3077676dbd0d2cc784f2515d9b6419348544d24628802b67cc60bebf54761220b98e2d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda385707434e80caafced8821b3bd86666346a1ccc72289738ecceda36729b0a1715e5d5feca662a1476cb9cf4a86cbe', 16),
                    gmp_init('0x1b28638fd27da642720c2a37e491a1d31c0728495d4e0821d8faea4fd0f1fc6886ef7f44b94da6096be98e444b5a208d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0c3cafd59b452cc90f45f6b6dbc82e68ac7ed2a5767bf553bff90341b48fed383f21919992211232471ba972b1d0149', 16),
                    gmp_init('0xc70ff724b809554dda41df85e92a90750242e1f89139ccb3198d862cc84684255e8055d780577b9304aa48194d8c006b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6751cbbc7ef77e27c96d2abc7f81bfdc79095f9e7417b5f654765ebe5067eeeef8c8447ce5788aaf3ce4043bc0af197', 16),
                    gmp_init('0x51b6653425899f57608359afaf471e89e256f40baa230793e948aadca1bce93c6ce5b603d53c3b08972e17ef5e8b5c03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda1049f3d6b34e5b415d5337ede76cc331c521432332888d4fec07f5f0a02c83a7722bdd708a154dce1a1dffd5ec3d47', 16),
                    gmp_init('0xf0c9fc3add1276b8940cfb5396258b5d8b4bd4ad379a53029f66151e29e6b597be7f4e6b3c981fa5d8b7a544de3e8dcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0533e74cdbc02ec5bb3a7a03060f5482295b82feff665e0dc82b060cb2669f086480cc0f6f811c29c90f4ac939f732c', 16),
                    gmp_init('0x42b4205b508aa871dcd2e799bc8a654403d7fc89a37b5ee5bee0bc692c97dae468d4d3df2ad995cff0c98ff95479a31d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a5c18c21c606f2498afd3445fb8ce8ceddf32e139f2c44db78ba34a947fcd20f52e1a279836b926e60b762878ee4a53', 16),
                    gmp_init('0x9aac05b3a4d3a2836e64201bd3d4ae835da1861f6240bdcf408b6b89604ea6463c0678d00b0bdbd90b3a939fa90a3ee', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc19e0b4c800119c440f7f9e706421279b42a31af8a3e297ddb2987894d10ddeaba065458a4f52d78a628b09aaa03bd53', 16),
                    gmp_init('0x16f3fdbf0356b301e5a0191d1f5b77f6577a30eae3567af9c1c7cad135f6ebf2af68aa6de639d858822d0fc5e6c88c41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b793af458a9bde3b38e9816ac35967221511ec70b6e7624bfd5aad64b53391321602406047cb6772488a5e242167978', 16),
                    gmp_init('0xb4744f7dc0f02eb8b24c6dea5ded11ef822a5c687a770f812f04dd33de5f9256efd02e821f1061fca8448af044999a6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a509ee26fabc337f820ca874cdf382a623be1091e0922c4412788de72320efe88525311345523a8c6d13d9055de60e2', 16),
                    gmp_init('0x9a8d3d400bcca1dcb9484b480e0efa1caf3d0a9e581798b747cfb5b11f77605fadded6ea7c7fa6fb2123b6403da53b9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85bca8c6c8a9679ecf48637947c24c0d6d99d1ed631d06bef12df0bf0859640699891a6354c7e1a0eb39da6d89f1162', 16),
                    gmp_init('0x23fce909a8cb1cc52ed806f8724ecc40aaa5efe7b065d78ce64a440df1ebd1799072c1f32a29f6183d501ec08e8305e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a8217c8e8cc4419738eb43dd2f845cc5ec8010e2c6a277499a04bbf5d54eef2b2ec62213b5e93cbc5405556f13d61f7', 16),
                    gmp_init('0x91306dbdcbc986256c9fc6a53eda619d7a68a8ed13267b0493a8ffa5aa6ee304e2a5656ca3a04352365707829026fbd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b8d7fec88d1ce09901c725c438504c8788fccac9cb38b9ce9bccc6e1da61f64936ab7947484a66204679e7b1c35daaa', 16),
                    gmp_init('0xd33930fb1cce226727d17a6c15bc7e9930f43933cb5dfefe646994399b7e151c2e1c5958d846e88114b9b687c6f9a80c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddde438ae7fe418c5fd943bdd58e4b2d0d57f75a8775011000098538b5829b862f7c46cd22f78e204eb8364d4f3bf0bb', 16),
                    gmp_init('0x87ce6a49d7917ea90efe506d140f34f1734ed3a684d64d337088c49da6f2dacdcf32925b999add1feee61463e6173c57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c9368184eadad3f1d2f03cf2e93f34c2a8f69989374df943291757f84bd843400ed9abb9fef7208aefea69f3d36263b', 16),
                    gmp_init('0x953b8743028486050a41b8aa3d48973d8d7d6d6a7f1317eaf5d41e423a0958b08317497dd62df5b0916baaff916cde09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4ac6ca5588b5558c94be86415ef4658d9a47617893a764b7341f958af1b2721773174ade385be745834d4f7db6c1be0', 16),
                    gmp_init('0x99324d723d21f15ad9af8db89ff512698605b3039ebfcca764150312f4d875035649d764e40dd43da68932ed604e818e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb35462b7fa19b2ea8f8d94c4db303dd50d9e3b88dad1f294d38350f653be209b21eeb8a088993da21502e6982e86e522', 16),
                    gmp_init('0x59b6bc3a99c9d3bac4f6a5429754314bf439db14181e7984b8f6fc4092b91a3556831205581096aa2f1d9e05ae467e44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d19f7b68598ea1c283c8171ab5f0adfb20d327ab44da1d64e78c9326d4775c74646c2572e6ad902d10ca702a86b8e14', 16),
                    gmp_init('0x3b584e20861bf7acf66c491b525a584b3bca0e58cedad4786c32eef25e1dba663498e52a4087d5aec6278782a55e2f41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffbd59ad1d18ab9b7f46f094c8ef17a344e5a1f51431446230363910962fea179e82706131429dc7be9ce6b5f3eecd41', 16),
                    gmp_init('0x6a09dd83819eb0d069f381d6e16351fb2844932bbbd3f4464c0cb0f02b05c9259437151f516d46edffc0f826baa51960', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721e722e78b42300c0c95778fb3a10ad3be245cf876e128ef46906881ee09aeb905c03e035e69ab5426c15584bf0f5a', 16),
                    gmp_init('0xb43425d7792071bcd37ccb7b6f07dc618f6958667324af4057263b126fdbcaa14e0df12a2adb450e89029149d9f6804a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffb23ecc8987931f5bbebf5ab65cb17bab7513e324e42c80bfddbbf8b3e0d01ed19d90776eff752c33d850e504fe1bea', 16),
                    gmp_init('0x34364adc20da6c672672f8f8624489a6310869b83d6dd8a279898dde4b26ca5ea7e823e3cfb3b0a69d3111f4818bee09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57aa537d68956272256c2ece57e772e9f78c1e3b322dbc5504206e68132d5b6274bbf4ae28be38f9a6efa42d1912f701', 16),
                    gmp_init('0xfd99d661ed42e9826ebc3f9e0c6be476978c9578e72880c783b1d3b1358784c986b1e009aadd2baa6958fd4e026e09d0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x96b2eecba9e6006296880dfc871a332f16543ced87164fe9d7b9e34004ff152b3ef70872bb66b55dcc794d81bc7c0795', 16),
                    gmp_init('0xb9fb524a87b431ed76c846cf37ea27c4aa3dd92db2cb7d0e738590eea8ec664e27a8e3fd0bbac0918f80a433d3eb1cca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf832d2a55b7d6b4e1a231283d57e42a18e4a40343fa794a9d7342f876d13a03848b499d1f6b9b0d9b221d68bee8ccb1', 16),
                    gmp_init('0x2874145b88d6e0d416fa4cd4e46c94591629825352b90cacf8b5b589d5ba5f749c3e1bda31132bd6fe160dfdf3412ece', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a21b95a97b767cc3c3e3478604fdf05e30c6064b0727f8af842c133720c83c577fd220ee94ce8d5339861e57564ba48', 16),
                    gmp_init('0xa851ea6f24d1e6aebadd6515ed15dbdecb7c1ada323a2a0e467ee9e133b893c71d5a66d1afe419d7314c861417c40543', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21c214699ee39e4487e7f0ad13437b7e3713e5ffec25d181ec8d45e8f53119096ce37c477c5545a6c4e0f165327974c6', 16),
                    gmp_init('0x86b02ff068bd39801169a58c3108c92937639659e9b2e1e1d78cfff7e13eea6df21e51728350cfcfddb4ea1cf4b697f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47d48bf6ea2e0df9f76c6f4f7d6f0e98f2c675afd979888cadaf59b329dc851f80920810f97aeb53e556bdf9c93ade0', 16),
                    gmp_init('0x147ac8061e4376641ff1edb43c333e89fe34a4ddda7f0e1910d72f7294b6673470ab4a455f355a63e8a56813eac91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8e739b799abd76e8a8eee8ad6182c6917f6f72c15f0a5c81c2798841fddb8b1527b4a0f3fe02eb4420193a4e83a0f8', 16),
                    gmp_init('0xb9aebc15fac9cb33ea7340dc6cfef97981b0ee9b6d57153685dacb7abf925076b5a4784e7290f3ea1c22a5575a88914f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e9d52ecbb1e89402f75709a67561620d4cbaade359639d6176d3182b20a073fe5f8f32d76988a0f1dd3f22156048cd6', 16),
                    gmp_init('0xf81ab8032702d6fe8ac56ccbf6d44d6d9eea0baac984961ee8a6de3a36668222c3986f2d80551595808dc806050b91a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x769303ca523073afeead3b9b609b715dd7d34b0fdabde87f0882a7e5658f242d100d22a69f4bd60b42f0dc986e9b7750', 16),
                    gmp_init('0x502de02c6dcfbee9892d237589af63c84adabad06c84682c2ba690d1ffa92d22075284dd726eedf516e7491e51f56b64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3eecc784ada9d342ddb8175ec40215a20e94f229c1a413459de339f1cfde58045103b00bb054a56f7adf935a4dcd044', 16),
                    gmp_init('0xc1b08c84684a9f2d2e23046803d835be732eda5c337d4db8c4be92193b3afc11a34476ad3224705cf614199e2a68c6f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e1bb443f62f68fa4250944491105c1bc29bdcb7aefbc757af27f1da4c52efccbe1988a393afef9fd42c45c22f412788', 16),
                    gmp_init('0xd542edad191152a86c982d14e1fdbd04a4f0367a445539371d547dcd2a3ec04f2fc8ab792c6fa5a1ffd8e5564bd9683f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9ce4e2537cff7d5794a49c1a6bef65e78b6c32f14ad7767c51492ff058d145aa62bfe7887255d447ec431dda9e1f4d', 16),
                    gmp_init('0x8907dca098dfee0d72ccbe56230e2478fe8569d4074455e6484ca064341d1df12fdb04c3da3445e3d6a5e7bd7c5a85ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd887a0d6fd045709a56c30d7c7e4fb87e3c4fe418287ca4a666836d000b6244143515c82b37ce90b0594a3a906764c45', 16),
                    gmp_init('0x95e67acec723ff35542cd9cf037cff5132367e1d4a20e6c3f74f794d25886ce0aaaa043de79ac299adb126043678ad1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7239f64025084f3047759b95b84d6e3f7105a1cc0ca43003aa2f76e78b6e78d5f699f55a0e10176d4d07929f10aeb978', 16),
                    gmp_init('0xdd406e706d7918d76a0031cfa6cd15e64aa8382fc02a1604b3b64e4dc85facad96781469d5fcd466374f6b6c2829e3d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd964b8d2a0f0f589ef97d630cc79694a5d0ddbff8c7c2d60d2885c8f855461440b9ccdaf2b01a634a9c9c3fb1ce06dec', 16),
                    gmp_init('0x89418a076a6f13acfe8b3ce74bb29a705422d563e79939bbad4896b6a07fe7addf476d09f4c67551eaf7b9b36b5b0ebe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc25fbe610e41c5b11d2e2a99971a430f0e71a07098f5e55f44011c8b834e48ebb56fa908d49554ca6878397b08f51315', 16),
                    gmp_init('0x187ebdece32e1a2fe5d187538ac97bce16552d6dd5ec71a849ffc35956ea59908c972b142dd403c5c79972d29e437693', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3dc56a32127f8c4ff9bc786c01f2318d49baf2960df0fafe9ef815283933f3e96b258ca2371da833794a459a6c91ad26', 16),
                    gmp_init('0xea9ec23dcfc82f759a7eaf3243b2cbdc2103c6a0c8acaf2428c3a32cd1b32a37a42f9dde468e6a05329b33e950c23814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x797fb73b751184351a403c5de5ec501806f82e2e2163ff3dd5a30f74cca16eb81333227fa7fbd3b53a9ebfaa9c3fa9a3', 16),
                    gmp_init('0x114ab08f4f496ef7597d30ae28df0396c50df58c5af00c250551fadd143620e73f997323e139916fb72c3035c71ecf44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5431fa786b1ac5de04dedcb67d8ff2c2fe5f0b3fa776d0db3fcbaaeda552ca6d122a70d319c5a0c4b04416cb26aef425', 16),
                    gmp_init('0xf0313e1ccb0295824d5d931c43b49b07b70495b7d18032f1705d530467923ccf495bf99e18e9e4f9332161bc084a5248', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd525d30f236d129817641e518433ff4176bddc204e8babda60b1e51379648368f3b5f4488b021c3ba9d76b04005df08', 16),
                    gmp_init('0xc94fcc281aca88e9362e9daeab830e25a32cf13125107b5352b986174e3f0f62ed7998ce867f7761881b5526b4a549dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb403f894c9caca01caa45a8669c3c4231b744ae54c7bc0b97f9f7f1df823a1575a67fe7f316b307a2ae2f31049f7893f', 16),
                    gmp_init('0xe42b16f1f880249fddf948858702a2ee09367c96ab817f676c7cd2e7a265cd63864df0306490ac027ca101955d3a32f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3d49ea8607c614ba76d6a4fd5168febde8633ed5d40439b656503d7d90e259c7cebba35d611b2cecba4ca5f954be6a8', 16),
                    gmp_init('0xbd88a0c1feec5d52d3902d5ff334ba160dbb4b8a352c274845c0acb3b0ae7507e8267ddc8b37c9ea4042eec828269279', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24334c46f618ab7d7b46cd2c6101cbcedb98adb35911192c5c95fc7eb92f9feb8feff018ca9da950eb6c5f9bab8b5b1e', 16),
                    gmp_init('0x76d458a5955ef722e18a29503894077844a955ddc4f23846a0a64e372af979d87b8dee5db355c4db7bef7d4df4cd6fef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4843250b787b5ab5dbaad9771ebb390935700204d81a406db6ccc621071e6d411c79d286cc463b49c52d567c285278af', 16),
                    gmp_init('0x5347f74762d3c6bec6d6c24f57aaa33295be1420c49eb7c2d6066ae373a76b45680d51b5e996346154ddacdfb0f1b8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf478e65377f33a3f95b7d4ccc1cd75e6750b279cba37b2392433d5de3428f01e8b2cd6db86681c3ad46a64c04b0a79f3', 16),
                    gmp_init('0xae1569c95ec43704cee7dbd4ed57afe4af2cfdea24a4dec3278d648db614a07611d41e9dd9182e642de3db02f7374ab1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8237a49706e60ea8e90b0cb57fe4edc2ae1892e9cea6ac8e22acd074624bf34f15fdadba92ed920784cb67784983052', 16),
                    gmp_init('0x1134ba43dfd201678af86d4939c21b1160d9f4ce30b9c2818f56b911d1289dd74a46b50552e2bdfe3c5236fa3858830', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23e884cf9baf9ed1a79b2407ab6e144fc72ff6296481e45e0aed5b5673a7cb0aca1ff56cf9ea371599b41eeadb07a28a', 16),
                    gmp_init('0x42a01723b3795cfc6931a9bbb1f2c80b305814fa61fb94f2efcaf97f54d6720ef6fc89ebb45a7527a4399b7a8a2de0af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3c24012bbccf247c51c61c83722a5a99801dcf908e3de185aa1c7ae5974d5136f69456e7c4ec08d403f39579825529e', 16),
                    gmp_init('0xf62afb2905c97f6b10e8fabbda630aa9dc1ce03a2e33f9c568340b1d91a97f212771d98c8084f2254d8378a7bd2c240d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf4d4f4a385851fd0818db0f00d6f35904227dd87fb6624ea384d14eac66e78442725078b7f12b72cdb0f241911aa294', 16),
                    gmp_init('0x691682244b0874e8100f5a86b32bfb9249845025a31b0abecb96b2eb41447fbb400cde948ff16a67a893b16835a166d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa30f3010d0cd7a1de6af1971b7c6485abd4297d7ec68a8355fece2fa08f89d1e55869ce34ffbcf4aa088b6dde659edef', 16),
                    gmp_init('0x3e22ee543531ec9ccec3a16fc01a1b7f210d0f0ebc3f33ecbf557b46ca25c2c94b558ef92cc7fb412ae73bb476b35742', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c78d33c4f1cbe9df322c97f7b83f76e362e5460e152e0b01dae32ecc6b4d31aad8c2d696662b67f9d82a4b6aa42db2', 16),
                    gmp_init('0x2d37f1ea8f953a815e593589655faf8fceb27f7a3bafabcf4414c79007e5eb8fd9597ea7f2ef25463b90a6bd2232293c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc57f7195462109a01940113c400435fa14b81ed8d51abd7c18b1c2e02d8d837866e39e7b1c6e73daf68a33e61b635020', 16),
                    gmp_init('0xd1137ea3c0b5abd908402d5a9af2e50d7379eac9d21eda2a25f6a9b4eeeeba471abea7851b8ec4007ec34da2279cac7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x522aa0f6a47ab3cd3fb65042eccea1db1632adfa550d64219055df0f99eef87dbc7dc221f5e4f836939adac418ae2aa1', 16),
                    gmp_init('0x61b26784b039dac956b4d70c88c2f85b466c77a3ffc3ac60e320ede66498df674078d9f414ef8a1b44fa6cbce073d866', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40576504c67222a4f2a7b114f6c6c2f38a07fb8fc45135acbee852b07d87cf86b0496d6aeea70a596b30248df519e99d', 16),
                    gmp_init('0x6098e471953d5aa9d7eb5e3403f27a94cd82a594925089af9fc54360f9161158f452f675e5138d199eff9a5279efe7e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56a70fdeb2e2d12d545bad751c4ad9dd71a66cf0268824e51871f086ded4b1cecf2b2a4c288e371dc84f66efa821c05e', 16),
                    gmp_init('0xc0847b35867291297a0752d185a3bb44cbff188210a77f41909320ea7738045ef89ad97fb9d43975b51f83d5946bf3ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc280890c4e6b9886d2394f0f6d974ac03c497ada083ce171366109ff65e0d737a549775913e8b878c5c187e567cc55af', 16),
                    gmp_init('0x171e32b981f399d89b4fb8e507409cfc0b09496e4d4e836c67c472b8a788384b430ccf2345b04d3c9e83356fb906a29f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff0e658ec6c3c267e7734600a3215c8ae565584b9d5d69cdc9a708bd11e013ff9231db62cc05321259908842b7bd7efb', 16),
                    gmp_init('0x3e340317352d5e6a9a7d11c5d3f8740c37430b7db80836fc19476a326fdf166c9e067ab0e0c79926040fc1bf2b27e18f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa50a8bb4a7062b1a6f519b173b80eb45006d223add92aae612ae6a001856e7cd89fe565e8b2ae30c6edfed0f3d54bcb8', 16),
                    gmp_init('0xe6b4e18a85f1ebb80ed12c993e70785c21f31d2709dcd1b4b02d647fbb68490e442304f62805dcbc7e53dd5c5fc20de8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19241a40d65d8a8e711460cba36c6dec168eafc701e5aab3a82c5a03f4606cc059518a4ffa7a9c9b30f591a2a54b9dc0', 16),
                    gmp_init('0xdb6e3a5e2faf2b131ef01867ac59e6ad55b9a83ac4ecaf7f0fb8b8d3cf6c6b0f19dcd1bf1ab47c3045c2365ddd9bf33f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7055d1775c36dd731f9ff54cc18208d775d149a7150e9496a41241c6f7ed2ee0ddff762b2c79e7cbdab54b7c40c36f04', 16),
                    gmp_init('0x7d87034710d2c3739a4d287bc646098f42519d70d0abf46eda43184e8e65711c3659a6e65b96d57002ff33db84255521', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe034a04747a351a1834ccbcb520956983ad6fc3af7de5c0f8965bc884baa225d1c394d492b2211a3b342a2f1f6a518ee', 16),
                    gmp_init('0xe738f72ac4a1060bc3376a7e089bef9da47336c6409e4c70e2b7929d41fe89e0a2b58657733e6c82930093f711518bf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3755a4bcd349bb0c08075c12f85a0077c653d77edfdfa7fe50432ce852019e14f103ef2140ebb1949a730deae72c0ea', 16),
                    gmp_init('0xcd36df94c3b385b08ce0d9c55ed5e784f38013bf1b55d0d6962a29529be98243e879fef9ab220de1f022e22416d71ae7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8326ad9acb968a26af831a49f16398be73aa5e4818ce08f5ad91e0183bbb2783f9075361f8e586998c10a1a6b8182142', 16),
                    gmp_init('0x45f0648cf131d6e81a7c8f83570385e0ad7df2dd9a3b6f3aac357f74abbc7f7c4a9eea859112bec4cf762c4deb8ed330', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59576f2877ced35f2b322b8ffd0f88a9e38d3c3498c886e4bcdbecd494ecbe4accd0ab92dab1dcebd65b6d26bfcee499', 16),
                    gmp_init('0x2d602f16030a03784634f4bb45cd76deea4695cc95e046b2feed35c90abd7b59e0ef719dc64347de3b16aa6771787954', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x272e2556226fe87276bfefec5be2e8a812642ddc7ebb2a4908976b0576a0aacc855773a7ac72f95a3edec75ad81edee6', 16),
                    gmp_init('0x7622a26db238a41c1e2dafb272ea3712a8c04cac543dc0f4e6a1266cafd7cb4b102a44f419b49723c4e5bfbed378aaa7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d83efb80b70217c60cebbbb1c962584107c76061d649a47683df5543670d2287c3581ec777d47cf29e5e39f49f68a07', 16),
                    gmp_init('0x3106c84e52dd8711c635bdae66d8f981db7cc58a0b36ada8e6bcd22fc148dea487387d075eeb41cb0546532ec8755d18', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x821c76bb40e8d69407951ffeec50ac0df85098a6eb642cb12746e10126a92fefa2be12ab3b066f62173d9554b6ca9da5', 16),
                    gmp_init('0x4dbf6d739e40a86c51d039963a4e10dbb1e2d2cee78c0cf12ba847f80984ca6d316e074c756b176c9529388e11836d15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0ff480d0a5cd1cef99a4e1c53716db9504ecdbc80fcd26886af089afd24b48aaa90ce8de3e686d99e792c327a7bb8a3', 16),
                    gmp_init('0x28b1026d7de9680e762efe4b3eea28877abe4798887d9ceafdb42fc8040ee8afb45e5d369725b87891bb9491d8e08f86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87539b605aba50f7aed1ec52ec2be5fa103cb5ce0f3f2cc375985c1168762a407c2fe14ceb792d03c88daaea7f2f67fd', 16),
                    gmp_init('0xe6525a0b606e321f7d4c43e54319d2e06584d02bf39efbfe5ed66ac4d681f4915773d2586474c1806efe252a295f9058', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb090a525abf015f2c8180ee16b03288782cff2acd957bf5bd71db6668c57cca16a7f9ad0f42da48b760d705650f68e44', 16),
                    gmp_init('0x1afdb422efd985a19b109f6fead9feece4fbeb47b09ae690e514929ee921e5270b560e33248e0ff80ce162690b0f97fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4ef8dcb4e19ab980f4e25e47b2a16e57d99b137c0e08772d970634f7748efab3cb5354c3166c5119c3070d60f2571e', 16),
                    gmp_init('0xe730cdf0025eb32bf996cbc4a4c08e80dda8b92c1539c28a15834007a42961e95d698ffadc93256a42691ea00bc18432', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57017492624c35b3433052e1c761ddfc4cb529086e4fc8f6e8f11d8a8fd7a05996f68281d1380b4957180aad9d5a6f4a', 16),
                    gmp_init('0xe2a14b52e128be847a79fc72fdb5c416bd96f8f4b584ed33948ea0635733e348cd66d021456151657aa5cff26597058a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3982177ccc5f178f2a0c3f0b25acc8641fbc679a56ad8fd6bda6e910658baef0cc568f464dae7eb6c4b9c598fc693e4f', 16),
                    gmp_init('0xc075c0722db10d701975d071fb58712925c4f035e9d1f0635cc69020d1ab7e7518e9da8c3603160afa43c6684af85802', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fa0bff7f99cd3dd1c5a634fd3359c26de1f39cb5699850a29faa251245976ea3f42b6bccc6f8e39b39484ce5f16fbd3', 16),
                    gmp_init('0xf08cd218167f9f358371caa05067321857bc5ca8ea678115dcb8850bbc847fc03316e0260c7ac8acb52a0c9e0e248cf8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba9537e0cd03c0a693bd9f342ae5d003be9bdb9ec89597bef11f11aa48b713c700acf20f5d165ab91ebbed3fec0465d1', 16),
                    gmp_init('0xdc71e85b3f5f8e72e71a088808ccd8be63dc9a541e77dfb5595d05fc2b7c6b36a77714710abed1f01cab00fc485fdd8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x722ae3c19a5035b496a1ac1eced0a63a3d97ed07055692136c42383f7b04380e3893ddd882a2134aba1fc74892291c33', 16),
                    gmp_init('0x93e9472e96ac096f43205db0248c17929559c38f0fd2e2a7e61c23e9df7a06a624f2ae5a162737968f9715d7763722a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13e9d8ec8002a718f185bcb6cedfee68e713052fe1fd180566ac3fdd573deece193804213e6eca85ea91de766d8203fa', 16),
                    gmp_init('0xe691d0da5e16b82ea03e0c67b3f5552b4c5507f9f37aacc50d9c4136f5e99129356e911cf013e0ff46368ef6db6b8de0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x338687e4171a43ab3805ec48c46383958d3d7cde10e11bdab06a7f94f12a9ca32ee1f2c7339663a791e416b295e02f5a', 16),
                    gmp_init('0x9fc0b2b4b800c9a3352e2c3d03b0abb09ccc3cd944b62898f264dbc2f3837d6c8d88eea352e1f0971ec239d60aadf43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c1c41b006ec6e2341249e7b4175fc656430d9a09f45118e4120e5e7b81736ece638479a1861945a5458078a6626a968', 16),
                    gmp_init('0xfd921a0ceab127e2d77cce0bdb347590167b1c589d1a063afe669d6072e49e1e9b9d56946630c1ced856e09fdfdd03b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b85cc256fe588799789c8c02b7cbfa08476ba1c37f6ff18ef370f3693ec726d95e03c39be423eb09c480cfde23e991', 16),
                    gmp_init('0xcf7e330cd433cddb288d1b11d3b9639c18a5be69218273680ed0849455e4c063edfb5012f2651822f385e8f243d7e416', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee8cb576f358f89a76fc1df02b47d7f21aaa090d218af3ac1e2f30cfbf8404520d45d33d70ba5d962c106aa5fdd6eb78', 16),
                    gmp_init('0xb5e3246c6c9b4a8f868394630c0bb4b00e8d0806fb7d80abe4c8d557f2b0b901ae1b9a5e53c79443e60b1da4b3c94e1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd7a0aafa04727dc66d9135fafc01b123d72e7d2790f1c750cb78360e01887409cf4e3a5f496a4e520ee2798da22fd201', 16),
                    gmp_init('0xe3bfdebaa1dd075276940e40f1808db69aa1ad6498ed293fa41158d2a1f86b495d3bfca7b212cd3a3eaf4dc328997d31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a164f19edb4a18441b236a9a06a2fbbb26d29eec623f9acdf7d82328fb219326ec8dba6c23228fa4e3f191c17ea438f', 16),
                    gmp_init('0x34da388c66d50c83faffc22d6565b29a8001d9a119fd17d85e5510cc315d4ff51602c3d3772114221d46e89bdefe745f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c93116cce872ffa1f486411364170f764c8e33bd7c6b2ecdd2de70483e94a44edee2bd98f4c4d39523e92558232343e', 16),
                    gmp_init('0xda24987211065ee50b92997cfe0a7ca26f58963bfe63aed2318e5c80996ea2031909912c65bfe6e0177ef239618557c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbd1ac0a1949fe91f1d51efb6607f912d2cc43af1f432c27c6d72a411149084eb9e25a5bd17743a37861fcf48ebfed31', 16),
                    gmp_init('0xddb2b35e30d50db65e64f137665ec5476936ccbdd514af4988139c88a72e66337a03bf880f55ad8c9e70d0c4217ffc8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c6b73fbec1d3ce511e4a4e50d32cfb55772259a8f1455791ceb880d80f1de63109a3d6fcd1d095118bad3523868d9d1', 16),
                    gmp_init('0x8400e52fc54bbd53658bfee5b5312306e0ee0d01258918084038bf0ed3fb25ad8729e277b0e29586f477c993cb4bd14e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x266275cf8d591e04111ec9a7e8c414a6a6e857e52fef8fcdf6379ab671444e3a3aa9d5521a574c9947e48e98fc67546c', 16),
                    gmp_init('0x1e1446afc96899987c2c53a1a50ef0b976559c496ebeaa2e019056a45693220b5946539ffd47927889208c617afc9ebc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0d968153c7f3125b7e3abd572c7135f7ee13e86ea272b854b56f17a7554b344793bdc246c15194dd1ad1d62207f2b71', 16),
                    gmp_init('0x74ac96078d87b4a4770e281492754ab8add3f804ea3cd23d9f9b052a5f8929516a7db396f879e7a63c58c9837613b8a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8aab822f8d15cdcbecc10c04fb55a250db6842a8659ad67a81e564adde1a4155b196fadf8dac9e8ffdee03dde74607b3', 16),
                    gmp_init('0x2a001cd383b95a1507bea4732dc3ae4c4f74c9da274e87a22d76ab67e957234273fbe6a1a0feb7433d2e9d80e6ce9569', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd79cb86f48a030deb5f059517ed857013e383cd3476bea3040a73d718ada00911ce95caa5aaf27e7b2b6b921dad5b83d', 16),
                    gmp_init('0x88f684711c9f83ca00e07b0f1ee4f25c0fdb2cc50d088227a95e0602d07cd7c2266d79bbc26f8bce53cbc8ecc110139a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x532af435ce85029225cc820feb51d0bde3f84f21b3cac8e54964a148c2c5172bcd54de1ee57f20eb1915e1a2a87b5458', 16),
                    gmp_init('0x2a9b37c13041e8d2bcfedfd538e0af23dea2f1837a71050c14de68c12f4b8763601b1571dbf974fc6e8afc3706038367', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xefbb8bfac4c1170c839e662805def36d4023db916ea93f3903345763d726a903462e52e279f9da28c893ee1da72c82fd', 16),
                    gmp_init('0xdad34878077f593cf011e1162f6099603723c298ad7d598918e7962c66c1297d3fc4ff460e94f87ff613fda7d49273a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ec41557a897a16a7e0628fd64bbafebdc0a53d50acf0a7b444e77ea3ad2402dc9053b492a261a00d6df49e2e7cca189', 16),
                    gmp_init('0x669beae4ed3332413c7b356d5226b6a0667cd93c002acf4ba6396115a8cbafa046483691994fc90aff6d42087f4d481a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dd89b16f9ced2649de8036dc328bf9a9a162627ce4a882f7764664cc5d639dc99bb15243efc609bff2ebfa641cd0e0a', 16),
                    gmp_init('0x53ac03639507723ad5019f689a6b57445254cc70763bd76cf3ce7681963a1bfa4c18b22b0205cb57f42efb6961ae458c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe197588f26199f72f11998f1864a4065b26d38e9baac543eca7cc65d4a138f2a3cbbb3c4bb973583e05073070d73bf2', 16),
                    gmp_init('0x7d72d53b761076f20bd7365940b8b4767e012ba3b4dc2ab6a0ffe2b929d0c03711852cd8381ade0de0f5327edea52c90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe564e3f8171229aec348c684b7242468aaedc50706227005aa14684f4bfed2a6ece422ca91f6b305d344e81e5917e720', 16),
                    gmp_init('0x4342e6f9965401ddb1cba5ab2076470ddd2d5655968aff10661ee611df97d7f003e708bab75b30ea1fab5aa869b4b512', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf59328c85bc0b5b5d2f9c128cd470675efb3591a9e1e75ca802e7ed804c9e381ec6284acdf3cf2e10139babfea22e778', 16),
                    gmp_init('0x850a3c8a825613aaca1499c82592ab4e682cd98a8dcdf8e3d51d3e0c7438e95ee4c16b59050839cf70d17b7a18aac609', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x102752389ebb25c8afc2eb489db7ee8659e4ba18101f9d5977160bdff737724c43f91f6a9c21fc9fdfec9a0b36e88e43', 16),
                    gmp_init('0xfe95f108744f3ca3ba5f44f377453430314fd820cce3aab9b0e226721f0ecd4c2c9054257425764616890252a9fab8e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f93132c9e929f7e696f7b54f9bbce991511fccefe229351af46a9651f092a1aa1a0f0bb47d7de0de95bec53c82a5064', 16),
                    gmp_init('0xfe450ad5692b593a2c4da27ee6f2ae29ab4c6b2611ad43c204cd2903f4fd49ab0b85fe129f045216aea2a30409da9b11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xccbf70ae81c507bf19c08e60a7ca9f4649ecc4dd6cf597817d0481d6009ccccd01274f4dc763059496ce030ecea1822c', 16),
                    gmp_init('0x8828e730fe1de7bbd00ed3662c7eaa60b354125caf691fd850d85df2fb9df0845ca54f539b33ff075d1c81d16a34f444', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa801024fa504074fbea80480b98629f791858fe214de64d432e3d541b6172d1c852ce3a3d4ac3371095b3004d1cfd954', 16),
                    gmp_init('0x7488c4d0c8cbe83e3b47bf9e024dc7e9d795caa2df3a8e9238194941f82ea28cc76ae33e635893fc07768e47276ff83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb08920c1f4ffac99f28fc77dd89ca5091b5ea777d38afcff157e5468803eae6095975dbb5c362ef84230cadbc038fb2', 16),
                    gmp_init('0xdaf56934c92315db1cb62635b8055ee10f92cfdc1afb8426e1fd12ecfa582574a6dcbb152f43723063522ea90cc00748', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe628b59047059bccde421a6b90a5922a6e5053a88690b03e8899238e29f2b69ccc2a615dfaaf6291b3f42330658aaab9', 16),
                    gmp_init('0xa00cfa260bbc7cb57b9ed85b23b9e4f406fcd08744953e052ad11f37ad09cd1c70517d623a14327c4aa2df22f032ae22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd50da40edc72b8f8720490904a62cbcf859bb4b0290a08174dd8e5e2879c8bcf98760fb49e54cca21227c5fa6ce25a04', 16),
                    gmp_init('0x11ccf402afc9ded114ef066a17922f723f04b48ba1f41c42356d146d6b58da78f37f506e391022aec527b78fb42ffc5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd486c9b9f773fe75eda88594342d8935934722f099b3c2dc9acb1daf916520b96f2a88b69afb231750a9e74ea7ed696', 16),
                    gmp_init('0x9ec6b7ed352affabaa27ab5e211700b5a9fe2a2381a7bba96c39eecd5210c683d385bb81ed6c11f1a12c3d77ca2a1e36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7048ac8f271bfa0295247f829797a1ed69fbd5a04bf6f2460c87629c79cead07c50122952a7eca8974a0b1ea546deace', 16),
                    gmp_init('0x407569f5c6554e775c301ea855879b76f27082e8e0e47f7dddf842563043ffa549a4665c29e97af7afd055853766d9c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4656c0755b60b3e703909d3ca4eb7b296305c38916b8050e0ee038ddf6230b8cd6aa5f7cebc456d272e3431c6e0e952', 16),
                    gmp_init('0x3d7b796ae373d71f164d24bb532564758b3274491ecee33abf6751c902a454126324fe375d0988eaab9dafe2989571ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed5d48689877815384d6414389141d43b874d98d387439ef63debca18d77c8213c6768de0f09d63cfdccc8977778335b', 16),
                    gmp_init('0xd356f9751a62e73c1de6a6ef62a0e051471d2d7fd72c315da165d339c885ec0cf01ad25949a884ba0581fdac345071b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6579bca77d6e28fcd783a5f00491479a369ae5540af822c936e65089d4407e7d0433bff7944f551986c3c873cd76fcff', 16),
                    gmp_init('0x80f2ab868da96061699150afd4cc2e2c50f3343a369fc42494538ae1ab6541403fac844bb35e84fb97c7614ef1468bff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a1692a81df8d174d7a70358c0f615cfc2fda37a0d02ac8275a3d97ec6889e19d9b5432eedad5023622be7c265da5ebf', 16),
                    gmp_init('0x7f10b14d041d54abd9d98c6a320c7f50d321cee48c03060f025650a41c9ba69b3950dfc3dbfe466c0eb38799e5d823b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cdc60e2c81f513f6c62a13c1839f2c5a4f3844c7b5d470c168cac961c823baeb8719a8d46a785ebcb1de2240b8a5da', 16),
                    gmp_init('0xd04a385fb197e9914cf85f206a633a64b8f2ff304f21f1f4be159f255146483808b6b471e5afdac6e8c08edd59e1621d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x95b1fa9e16e36b9dc6e7b862d4ca4ce0058ea1e6425e7020318c2bdfa1ea026af9c58abd558bd4313f8229a8d81e43b0', 16),
                    gmp_init('0x2a25788975d1fd363d0bcb890abccb66f803233697015da22be2acf494c0cfde11d4efaa5914f4c24b5115e0e2cbfa44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee1baf9eb0bf5b5cb2014237a8fec1005125d96b852835d4e0fa96c45452c30275c6e8b7fb9ee706a36e31fca7e14301', 16),
                    gmp_init('0x4cb6408ff5e8a93c87fcc0c301f581d9ce2328f6db3c9c2fd7aac552df2befcf48a2ef7bc9e3d23537d1e1ea291f8587', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb83810542bd884d8d3d035833a01e76de0491368ce2f356c761bf6c3cecc6add31f18b1b4d4361a5753d7ce8b5324df', 16),
                    gmp_init('0x906780643e35872726169b05663ad1dd93cfeaab9adcfe256b6d47750ec9829ac189dce9bb7e546af9d3a5d85e5a3f9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x712e80dd26cfcdbd95b711981e08a41ea4c0483d20b20885ea139c4ed0ed4f86d2deb361fb459fbc138b6b2aea22d48a', 16),
                    gmp_init('0x6733362086c2dbd36c5401e7729c428c173544d035af610f843addab345ba72c685573c7b79c46217872cd930ea38399', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb4ee9b397fb84706927300c5d6831ff27bde1cbafb6e42e29fcef037db11b7e0eea43d41cbbb9c62d0a33a1c8d698c7', 16),
                    gmp_init('0xff92eec7c9168684250ff4e5aaaede4772f308e76ef2a2cb08a1f79527de0a0fe1228ca16ac7bdd7d8b7318a5a2ce6c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x703723a0a0c1ebb0a95e298665f44703ea13586a4f1d6f396ae69acdc9df98dc40d7b1db5e5036aa067fd6b427a01175', 16),
                    gmp_init('0x8d1c793322a96b75e419dc319ed94ae3c7dc1afdc2014a9e2f68603748d4cb3cb3d9af44a94e26045fc522f6f3d4fa1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce04c64567d57a73be87350cd4a6c91029f821d0d3d5d20ddf3f55fac319c636970009ba53df3e30f5349bbdbc59fe30', 16),
                    gmp_init('0xadc06c98253e72623432bb992f14fb1befecbc9753b10bede452f37d8d171e9213c515e807dff96e668a6522a143aa6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x318cd7713db933d22751e02032f256d92d570974baf2c5959fbe77f840b46f3fc9efa8f39dea944f87736441ea9ff07c', 16),
                    gmp_init('0x9aa28f62d605195aaeb0f2414a33e16e5ab45bc3c970df81bdd01ab3898e945bb3f31ab0ae24bb1aca030347ce223dc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e7478c8f0bff6f6224ea6ea0fa3969d732238b17014896a42da21c7c16ad6fab759f621351d329e4806b62b80e6cce', 16),
                    gmp_init('0x916c1d714df7860af62a9ba4c3c206f46c2af981887bb88c6a65445aee94d389646f452d9be005b0e5bc2520ec96a15e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8e6c9d281d3bf770d6a24f1a3fb1f04efb1a8cd02a2c013f3169c5866683d564f078ebb81c30b908da0d583175ee3f', 16),
                    gmp_init('0x4aaf978944068a2fb42aefd6d71d38bd641e58301f5e8967f90adcf006ad59acb074cb563b59ca4c27e014ed2f57ccc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f8054fa440d3d1a865221299f7b9f5890d04ca9d0bcd8ab53499f5f9d4ef4f36d92d97339bb3042cf0d90cf71cdc8da', 16),
                    gmp_init('0xe5a961336aaaaee111e5e094c010252a63718946610eefc3954851a98c6b5adaec0f3b02c1b84c0ae79a5c246969ad8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13005794e4a0370c4139cc51906def3515720e31769c737c6d7fe9f0ebb41fc73b411faf95a48e6ba8f012c3d15d5454', 16),
                    gmp_init('0xe0198e958e2d8190816bee896b8358672c6fe38ccbf02b954112129ab1ad7d8ea70d63ead98633b7e7dfe4ea4e05acf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1215054c6cb53931298bf050b66b50e61a9b80310a6f39ab12a1d651b37efaa338609bf3dce117c816df9833faa91151', 16),
                    gmp_init('0xaa5143f6882464c2664fecad593762e90dceb47b0f7e956ff191a94cc13e1a414e6d06e9eb08031ca8ba5cb9f13b7f76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x985f48e460d652c9df95bae891f1a2b91397be430116467db86eb12409e086e326502938a31617493a8e233e6af4f349', 16),
                    gmp_init('0x7504e3e0cbbe453b8328941a0990e9c5608e73fc6ae658d9c3ddffacacbff550b79c00c967624809bf6a155b60c17e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6e50115dd93161b0be92dbd6822ab16cab8c24fa74823e5c28be198ed6999f74e70895278faca8de353a753af6a129e', 16),
                    gmp_init('0x55e072c2a12a2e91404e17030df2a88b574948912a87718db814935ba40ce2ade4432ba703f094517d1a3446a7137f30', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x64247c77848b8e4e2f1f10d1e589ff8b31e3d90a8c3782b829242bde81156ecfaa51cd7b51f9e5b661f040bec690ccc6', 16),
                    gmp_init('0xc3b58cdee179a68093664f3bfbc4cd34e05e0653bf73456805dfc1996e22db4bb1cdeaa6331a0e134004d2f287e2519f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9007700b51b877f0324336bd7ff1f8f8045ac01fc8c6d264584187511ec1753d42b7fe2c42003b8f50ef44603ad8ac6b', 16),
                    gmp_init('0x67d88f7614743347e8d003435cf80052ff4e186e7bcfd9b06c5dcd371e5fcfd2e5ef9abab45f754fe6e9b08108d032e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc7ddc5fb881189859427d21bf2a51638d0b1fd74a9df545294a84e9a7564a726523df2931a1889ed604529c3b3f614', 16),
                    gmp_init('0x56b6152c12206504398f6d299a6d41ce3e0ac074a0bc971abad404776dc96548013d279b2c1ddc0f6d2bb3a3d225e23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7df99b9b029e298a8470b9940c980f28f513657613b5365e37152f232538d15fd917e99d309837d52c776717a6c4416f', 16),
                    gmp_init('0xc00054f6e33a8d5455cb829ebf341e339713b2c47ecec2e7e333577119926452a63990ccdde9a3960aae5a0232292cab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a695b6fe1dde5587c7dab9ff932931b9501384f854656e9f46386c805eb03729a0df6a79f488fadaa1392c0b037597d', 16),
                    gmp_init('0x770d7a7963d7c48e26b203a0bb70840e6d71b2094f082a61873958ce341f5b38dd1c5d1e897d708a300b341045dfc120', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59103d7122d11dc09bdbec42fd8b0203c7a9a502ad151feabc28822c9cbd691c29ee45d1f0aad0045a4be5ba8a334ad8', 16),
                    gmp_init('0x24851696128b2010746aeb3d7eedfc77dcc2f1eba6ebb0626e68a4dcdf2e1971410d262825ab6007cba2691d6d280ed7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae3baaaa54d68835e1b94edf34e1e86456d4a42cd23c37d758d2d6bd6b400d8688f3c8035c50c703934e134b639d8c12', 16),
                    gmp_init('0x781d73fb83527b95626213d3f23020bf6fa52bfd6313f071745e0746ba5aad60b17c79b3adf90634d182449aaaa95062', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50877ca1ae348f833cbf552bbbcad4631bccfb9f47a9653d96d366a0e641ca4bbd24cb9b6babc04265d32702e0da80d5', 16),
                    gmp_init('0xed1cc8e7a870fa0730d80c100334f332d6efa0b803390aabc838d7596d1d937b9ad29d28b66fb4c3e6ac5cd5981f7cb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d5da10d86c86daef94233a7f0fefa7ee8de42e88ab15252fde7db055a40a136d3420de5d11548f1056be3f7ea2e27d0', 16),
                    gmp_init('0xc3678177363ee563449fff66a4d9c7b94d1cc6378d3f00fe1e8896d2e9cbef420fb843c86c2ef9ce4abca0e149d33e02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5397e17ddf32b058a52a01962eeed0b71621006cc0b5d5e6d05985e23bd078f07a0f45979f82d9d11be190494ad74353', 16),
                    gmp_init('0xf20f5d16ed64bce1be50a38aa47516a965f130df1722b3a53a236371d53ddc7766b9044f0b2959a9039c977851ad100e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe3e1b1bc38e74a23141d4c645d3ae4637c7d68e393dae28e607ae226a9b8a225effc42bb9a04dd90df1c81c3ae7cfb', 16),
                    gmp_init('0xe064e7617faa8088dae7648dd2b719136c36e3e9aa5c22009af8e783c76fe09c10e223e47daf4f5d60a5e825e1db521a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61ae179f694ba3ca3359be087332d706ab19bc16c0956e6fcd2c81b330e58dc968ed4e398d6dc8b4bf6f4c80422fac5b', 16),
                    gmp_init('0xa971820d11ab2bb0bb8eec610e04e56b877aedb3deed6004fd23ce56fdedade97dc5ccd653f91e05ccc0e22425d1ec8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x632420f8fa5041dc4e6460de2d7132fc6fe7a0e5311e5aec107d098af9d9dbfb5d60b902b0029c8172f06cc42bfdedbf', 16),
                    gmp_init('0x810eb3ffcef2535b3d3afe9ac20edd2c82c6688c96279b136bb345eedc049d499e18548b723f7c2688f994e863ec6739', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6e4f93bbe4591c7217f2c562f73b1be8e0bb5a30e189815d27c7f2fb65a2b596b4836ac7b5ee541261930c19f8342e5', 16),
                    gmp_init('0xfbf088054130bd0b75e062ae8ca9da8aa6217cfaee829b01be71d0df5f4b9c8ee550eda7a502c7532699115c71ee49f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37c3985d6bc47723530f47e7dced61db0b7196d69f75a1488b57b11cf0fd361f005b635b2800d75a1948c489af032c3b', 16),
                    gmp_init('0xe1addc500549eab76b35777000b33ff488ab8a2f8c2e61c8e3d1d82bfe4c884e5f840a231c4082dff88a1de479ae7930', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3c23dad9262a66c594133abed2958a59cc04e2b44c430cedcd2a14590a65d44fb2088fe46390eb18fcdc8ff8ae10aa6c', 16),
                    gmp_init('0xacac369523484b362f2510e846cfc593bc181fa70b708b291da58eb700a42cd6d26fe4e3e48ef3d4f24b93eba56600f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71c0dde01f7e722a1419406e1a4a2d57f273ddbeab917ec2317a4aa5155c1229af3423f802299c961291d012f6f29dce', 16),
                    gmp_init('0xbfe13556bba83f02ec3a00c04f1abe30b2d8605796bde70682349c269cc22a763765093da306b8ebb413392df5fed19f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x436554198e381faa9d7dd21a87eb98cd85680516132d786cb0cee21fe08b09e17c0f038e2bd0d6c792365842ec0d9960', 16),
                    gmp_init('0x28cb0b65ea0e984b26d5e13ef705a76e52710725969f342aa7f4596b9d99927a3fcee0ffe142107d74f55c7e5d2038a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bd834966ff17be1c86e2e45e82b93992b48bfafedb5f7818548f17de9f2445f222a43e67d0246d68f2c6e10af582361', 16),
                    gmp_init('0x5bc9392dea780432e494c1b4a154e87e0e7082aad1d90746a6090a93fa11a81fad89e0244761cea1ee4dd596b8775b72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd794906223aa17a6fda784fffd33a2f0152c1a22be54c36febae51fb088f50f1dbbf4ed7ae400e358919f5166a7daffd', 16),
                    gmp_init('0x78815efdd7c874d871a86d684c3551cb1054d2e7105daf29b1d06db1408de30a69b47dcf475c0edd7da0d5323fb726cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf73104addabad57c219f9bf1edadd94b50e815c52ae3f95e92447a5733afd930eb9f479528d6fcf677feecebca843743', 16),
                    gmp_init('0x92d5408834c833416b0980a3be87b2cc12f3352411f809946b40cc4493dec32a4ba95e3475be7318bd20239673f941bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe776291b1c6067f6e86a9eb680152e1f571ecdf32df1b4fc11f13c1c6f676668316e3ec1a97229c9cf42606c481aaf23', 16),
                    gmp_init('0x318b25e99d6ecbad323721cb66b0187378fa6091d7bf09b89054fe9020c2d9089ed2f1feee7a87155bea8c5281493c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8eb2114004241bd8b5d42098ae7d58bc35a94e6ac1b02f4cb538303faac375abd5059c9036afb3bcb610182a93c10a7', 16),
                    gmp_init('0xabb60ce6105529ba2c4382ffa2675d2489b18aed0ea77d120adae8a9fab6be4dc6d2bcdf31306b48aa3c554a262fac2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9ad13dbba1c45ff976ce281d341239c116f51c6dc93d7051eb7245ef83181a476088f15a333a93806a617167fc55bbc', 16),
                    gmp_init('0x5a72c7acc837a83614a8e9b10beb03e390f7d5f0861e93dd439c3f11e24b5417bd5f492e2ff7509ebabc3c466ca4910f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa081557d24b6d6151c82007e0502d1d95f21fb87886957a7fdefa31a06cb7d18bef13c3647cc5ac06f3c32aeab785ec3', 16),
                    gmp_init('0xd482fe39d6ea2e617e045d1a708d5fd5cf2292623cffd359e77249f66eb7b286010e928c46c8c4cb6ecaf8edd08a6f69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7554e8a0abd5b427dada8b3f4fb2fecb7183c244d81268cb1f2d277e46dcf2a252de90ebe6fbdc2d6d5c0a9cddda9a8', 16),
                    gmp_init('0x2b4bd2ef72fdee3e45df76a67956f647366d8f8a98fd95dffe5f85533e866aab271be52b250016ada4bdb9e1e02c5528', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x747a1c389f3cf30deeccbf82aba771b62de7cd05230d6a8ecf16b3c7be9587ddf0d986a7a71ae137d770f327d93e08b7', 16),
                    gmp_init('0x886d74734d1911cfda113434890f10320dc1d8b9a32428b0e3d12370c0909489f93ac833f7ea540f48c7ad301d243331', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4275c51e9ee1c95f0242e5d06aa815b0675555ab2341d62fa8ab9147d3dd39c4760d5046ecfe439fa795c5d1a39f0984', 16),
                    gmp_init('0xf544056381e76712f34746087018743abd1830c82b3134a632d11f7055c98d9f27929d5f44d04891db2eed3548ef823c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9accd5e3d132f91bac607a3409a08a592981e19353375dad28a6b039ff491ba80be814f013c20487eaa4a6c2f1c504', 16),
                    gmp_init('0x8a199b593dded965efd88dd44018272b1c368e529a78f88d2bcb1ef06022ab7ec6e5421e6351958739c2b8fdb968d456', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70912dd5e9030f987f652ec6fb953644d7b1e1a5b9fcd7302acd5faff2b71825e62521c85ef626e01981bad72550a104', 16),
                    gmp_init('0xbfa1bd5f545c7f4bbe521082d30b632cddda09485573c66cc3a464a2be7162ef700fd0f8af1e1a4a3a560dcd38e538eb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x347aaead991289ef53ae49c0c19e2e370ad21bb2353d962803ab6c8a0fb7e1355ea3d73e4a2defc3e2117b3cce6020d3', 16),
                    gmp_init('0x82f3242ff22dd9cc6e0a0084095dec264f2f1054341befdcf9015e85512e854e377b89f9a27598a037d7d0bdd090e5aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x438b010f2dd6fc6422c38bf32bdcd256954f5220263f6e1e53c9b21d58a0c9ae589f703beb3e24a8e117fe21dcaadfaa', 16),
                    gmp_init('0xf92174d3304d54fcaf36420950e4f9cf164aed20fc8f2f2e96ba4106c4a826262bf0071443ce348fbf858cf00ab44350', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55f06f598fe99b0761844fca68ff0e89b2dc686e13022c0f13d2ce3089eb6adf0811c4c726db66754869573985bae667', 16),
                    gmp_init('0x3afa23a59478dcd6af6b563f306c840bf0dbc007b251d5d2dd29d1c64a9afbc41365fb2e4e9c8fce069be937ba118378', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2e41ceb2dd3d73b599e5b75ccb7732ae40eb4d885a752cbd759a88ae250b41c7cbf458247497265ec3fa50130d96b56', 16),
                    gmp_init('0x25fa5fe3c6ed4fc9e5fc6441d0a8808ba5bb57aa04ec09914ebecc3dd1cdc8b2038ab2f29cb90c443c29d7a82247d827', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5aa230a88569337294e692456cd2996d88dab3c31c2bca25c9c661202e8fc8cb2bb7db7627e0735a8ff2c3ab0a5202', 16),
                    gmp_init('0x675324debba9e9c69b042b3836572f8bbaaf59bf80363920ee5c3abd6d9f7e06537be8a836187bcf36027169a222ea9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5d717dbc7291155ad875cf56c5921592918c22abe9a725d1f69879ab2fc76e440c83d8bdbf6818a25d669b9363b8d6f', 16),
                    gmp_init('0x12e9e9ea4cd61efac8f1ebf9a54ac6abc689b1d5ba00d6b5584df7b1066891eff35eeab3fd3e5de2b709765840e01969', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3721e7a2e3997d1e122bdc3278441af40bed669455dfaa8c507747741c66442f63f5c429139b02c0e5ea20944e0733f3', 16),
                    gmp_init('0x15f633c268233aaa4c234879ee8bf7629a83eab62edf1a932508f58534b7191cd90cf453a9e30a89c1d3bd8eb1931b12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebad00f66e3cc61317e806bb724b462b96162fe28e5f417d641e4db8a10984c577e0c4331c1dd036d4df2c72e5d8daf3', 16),
                    gmp_init('0x98b892883cf056fa41ee512aac24281fead0986a135a012f10bf151a301f8eda06edd2eb7c91153feae075162261b781', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeec10aebd695309bd5d86e0e954222d51264a1e618b6c73d0c8485874d539f2b07dbfe4677db276197bb10db36ae9861', 16),
                    gmp_init('0xa9f3a7dbde0ff8c1d9ead1787501a7a85c9565e232fd63787adeae8f76fb830f5e5fba68ac74c039a7277e11190538a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bac1ebdb7afa0d442c0edee8425f6205206e7584e7f678fb567bf3eacf241d15c5d487f3e1393068f96aa9eb88fcae9', 16),
                    gmp_init('0xfe2a0a16b67c4064e56814726d3127822bbf62876e169edba78de6f837b130d68b07a552792abd899dbe4399e2069115', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbab0f3728d2dd9a06fba44959431d55e40765b92db9a71932d3d1e5560526755f58b38b3a28fd2269c46fb6066c12169', 16),
                    gmp_init('0x16b753722eff1c4c255c92ea2adc96abc7dd4a56f5a2a4566d2bacbec51699b1f73213aa1eb222828403161daf190655', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbef0acec068bbdc00251205f10ee4e787b38b0a6b9b857e09d6b2b31bc9d395254a7a443450531bcd717ec34b64bc9b8', 16),
                    gmp_init('0x174154bfa6fe96914290608d33790c2c8b1991c168e824ca14dfaf56a267d04ad4838bb083522b4170e7b32cd91f4ad0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9db0a48a6116a435a738b45783e57dedfef2661205e72a2b9f18e952ca3585112ff3e521c8a3e9c0e6647e380741ac7a', 16),
                    gmp_init('0xd4b3e8f9c6ed75ab577899210b240dec33b251f97539f1ddbd789efa691aa5649f39d02e238ae461f32100201fa8706f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99b1ba707c277e026d391f603ff00babae09415f7d09f6cab6f49b29c9136949f6659833682f9281c2535abe935d4626', 16),
                    gmp_init('0x836afafecc8288893aad424459dd24a548394d7b10c35e784061102ae67d7f6b74c7a59df20ab408ffa0e5947060eaa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcad319bb786ef22ad025dd202ceb5305814dbfc1fc50a93e5a64e944059b7094160fda7a2cba1313e0988057f2742a36', 16),
                    gmp_init('0x32b3e46b21486b3f7bdb30c775cf737cb34a664791644375ac914fb4d3d522eb9083a76fcd2e1299d6b14ac952acdc43', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe9a70d3a6a893ee6e29eca365416b1c5a05c151a167d467dcd03908f66dfa43edea3576709d866e4e816e48c2e2cc4ab', 16),
                    gmp_init('0xfd6d07b05f3c441108ea4e874fc5d5ba8256b5b47f32556bc38d34733fbb588fba6267711e5f9b5345983ebab620e1e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbad3bda2cb8c515474f80eb9608ef2a952ce45601f1b4a50fdc2945e4273b01ccb307882e62cd2f80ffd6d1e250e06c5', 16),
                    gmp_init('0xb7c7691f9f41a202e94426842dca35c47bfbd7eddc2e7bb0ae6a732ec9250bc594b40bfbe7e570441b6359abbea45692', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa953d78f9a24fac307a9ff721dd922ba816d4925b86bc88dd5a82b6b1076b6bdf6f157d3f38347d3fd7205749c3804ac', 16),
                    gmp_init('0x95508b0594869b8653b91a8aaca5091ae021ea4abd898ad5a352758f1ba8501d332a00508b4509269435ad1e1b8f261f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x691e60f01b47af6fa6feafd679a04a12800e99f8fdd95ae432f9c77ed6f9161c58b5f8f949938dbd877e33e51a13b422', 16),
                    gmp_init('0xae2af79fe7f270cf04d5ffd17e1afe8942e1e3f1d4bc910339f55177fc66c12b0c10a4f6da464cbdb15ec51a7abadba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4644b28ee8c637ea275431754d4b2d84aa6ee59f92d61a6840fcee429462cad906c93205b4424be978581c3fcf81f372', 16),
                    gmp_init('0x9d5e3342733911f226889364d2b771c0e149721bf15ab694ec1176d0fc86dae92aab3c6540146dddca61a54224c118e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9c03b2540388371ec221b0258c43579312fe8e8be957c8dcf92df69c5a02b6d1711c982f022b781ba19213c5d952e95', 16),
                    gmp_init('0x28dd48f81bf498b7cf91c6e784e4a94bf0a9808bf2cf07bbb74264363b5a36607efa5a9f85ea267cccc93cc731ad68ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf598e18af31cc7c10369c666b1bcd4adf923d5caaa934443028d659a868469c1bae2ed7305c496e82c0e9c2d5b6b070', 16),
                    gmp_init('0x7b4902b4ae8af89fddf757cf2b49837e524264b426584cc8953a32ad980166aa14fcc590e489e357ff056b1f6b3480bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x794fd7033873d74654de51354a54ffe22cfd9c005f32717350bcd1d84d21721e035bfd97bd3e2ac596c21b74339856fa', 16),
                    gmp_init('0x36c7cce241531915dc9cbaa7fd79064185f2759b038696a4c78e9d5ac3bdd06e236a941e559d2ff2f6057753cda371c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf0544f90f98142440dfd3b2cad128ea29758ff63140833217cc8ca857ee868a35b1d3459dff61ace2ddb523825a82ce', 16),
                    gmp_init('0xb3d1125590dfdeeb8cc27c674b5433168e4efa2778b679cf2063ed78a6f8f9b39710e04c6f560d687830568ac10b641d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd09cc1e9eb76926a09ffab54ea474b33de3d6b5cf8b7c600e7a9a0513088ce0877fb49be753197f9b382595523175dd1', 16),
                    gmp_init('0x4290c4ae33ca53ecff7babc8a553eec1cac98982f43c06579eb6961070abb8f15ef44e6d7e41ec4bde12c9b64a9b1c6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88f8ce4c662331de8e0b39478afb08b210ce81cb55d63e3c8e0d4049d3527fb2fad07ece0ca77cb55e7d9517be970702', 16),
                    gmp_init('0x5c85a0ca3f93f51e637a8d7352ab5ca91fdb2e57eac49ce75d45652a7de2c11250229f71e15bba2b806a7fe16ed82720', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28ca5861ee90447fd146df1306b97190bcaba0623544b9a78eb9df473e6d584c3f8814f65e4c0a3c791472abb3902f81', 16),
                    gmp_init('0xd63ecd0a497f599d3180538c1cccdef608a9898d8d0773e47e91dd9590e7fd982b17e396177d811eaafd954b913e5c39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93524c3cb3039089f91a16320b5cfd71f40ce62e53ab6ccebbe6fda5bf7019c42eb677aa5b30dd556ac601e176c3b275', 16),
                    gmp_init('0x8604f3e93b3e583ceedfd64e660b2e473b7dbeb5b2ba05fdb6ab6fd45c441a50de27f13c6a226028a9f75f9732d4f0fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fad2fbedd941b1dacef35141f3e09cab8120b6196718dbb1b675c9051261942d54d55aad9113295372b31b9bd361df7', 16),
                    gmp_init('0x935ddc21967bcedb65ea8ae52c1152062bf092ce53f6c9a4f7ad8a47940ff14322ab1dadb48281e06be88072c32edbdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x687990cafe6e2044b34d981b7a14db92d2f7967a8c5ec3010689a3036313ae26f6b29e5a3c3926ba4b44f0cc0bc57aef', 16),
                    gmp_init('0xe921e2c20afc3ebb84f150196f7155537b3b1cd31702868b43d08b7e2cfa99983af5a82a19cca5112e9c3c25ba554f92', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc6b405288edffa7fdbc082aba71bfebcf03811a5455c1c820f54907fa76f70c9464a92d055db2392b3de52c7a213e83b', 16),
                    gmp_init('0x5c88fb72c6c4eafbb78ca0ff03519fa164acc0d1640707c9888e190753eec12112b29e9a4c00333ac07bb07de3636016', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18c75c58934db08c1f23d0d69abb9dd77ae4db886720890f020467273e5af35f6a009b2827faa8797f4101d64188663c', 16),
                    gmp_init('0xfa590875c653da04a607e6a70bb0a6f8ebc4f11a818dc44015f39a0f457ad7765948a86668c8b6b617eb36e70faf9e97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x701d14f863902d8d8451baa5fee3fd004a6820feb1bbdcc6c7a859b7067d6b1c436aabebb37c91fabdd4b2038bf77bb6', 16),
                    gmp_init('0xcb7b67b559b549d24600c6c21c6c642969bb3a8b0ed785cb55b2baf154119890c1441e920670431cf47c0f3bc68211fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ca96ac03066a6df4c0494552119279797bb90f731747810e0f5d7b6bd58b9ad90aa314c57fab67ebb47ed31e3f96728', 16),
                    gmp_init('0x4e9bf508b14cac62900e9da24e0239d1a7f49c92152ad93f27e35269905d2d97c38c12ef77d5a0a16aaeaf7bcb3caa40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3fb154965ff710ddade55aeedf1dd9461eec524cfe79e95b8d037ed4dd52a912b83506b3c4d95bb1a3d31d679d31448', 16),
                    gmp_init('0x768ae80c5a0d259915b0132fb84f6477fef4ffe3ea792a9500f1daf9d8921a1b4b00cc3a0506bff478701e420f26d7b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd99ff4257636491fe912f2be0728804e73dacff95bdff8b21abe264da1c9551f8358a1917f4f16830a619c781a7603d', 16),
                    gmp_init('0x1faf8d94a0904a901903f9fcc0e3c2e36c8e744465d61a5d21110f1f645fe534976bd8126d14c758915c396e1a684eb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e31368290f31a6784149035b15d2945515cfcfe8f9298496325b6c498ffaba52cd9ecbe4e98e6af20527222e898cbcc', 16),
                    gmp_init('0xef81bc42db2481918b4d6bc6c284875ca48c501fd4b854634ed79afa842dd57399a0bb57d0d5a059148c8386713398bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca5085364eb39b9382d0ef7cc51f1bddba005bb7dd8878553608801c083e4216848551f661431bfce1ad1f37f9bfcb4b', 16),
                    gmp_init('0x45a5e9e6719b4d4d3232f91af62923f9db13eb2ec1ee3b09a65c35d85cf633bbff277be90549a52753703ee66a98be1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97b0175fcbc8b0b8008cf2c24618b9deb0f2735734e738cd54774f9a017a78b3eeb4781133fd82750f8ccb8c02beec15', 16),
                    gmp_init('0x96b15a2615b223f32816e1512dd9f0b93bff97b805b91be8866e7322922ad7345d3b1f03b7b32eac8bbeb8faea989a65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a70979a86d8d222df0b0ed3e9c3d8f089d6b47e6d4277d47aafc4e132589071622e2a039b22b5cf05b8eef584666af', 16),
                    gmp_init('0x2de137c97c156a502d7d6449d769fb83e3cca55f466b56719981f18acab1d8c1f877f3e0e4f6bee17940b55f67931f9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc441be752438b790763d4fbb35d925e615895e313478a8ed878ddde3d49844a9ddd33e697e6610605aacaf3ba9ebd965', 16),
                    gmp_init('0x42c294de3f391bd16e1baa825ea8bd9558b3595882966305ac79e6321aab6ffb03e7c6f1bcef63dbd8141ca0a03c20cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadd2c4a138525fa22c4335bda25fdcc5341dd8936e0f6d1a68c6ca7977242e20b174408b8883e397774a22abba2eca25', 16),
                    gmp_init('0x5f9ac52c69f52c502be16e3ef0788961ae3e6e96b1aa9b051bb2e84401bd83b66e4760a25d762970ad47f7d03e522edc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c49d432ecbc886e7a42f5c426b16ba41f5b7bacb7110f8864ed6cd133add13f248e3c50675f5c14994cbb202d0f89d0', 16),
                    gmp_init('0xdbae4f2a5666a4534fa0053dbfe74c3e54fb1dbb8ec78f656af7f10b14a1f7435ab90db2a7cd9570a389fac08142cdd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb95ad1bdcff20956ef1c209676b2a96f1bb5eaa189a47a908b0559d1b78e5aa359ecf550d43c2e106eb5e119e1b5495e', 16),
                    gmp_init('0x8526f852b3f1661da65ac1e4cde9afc40656fc8e5caf43c056b972cacaa050637f79132b6f680469ef2d25a58d2d17e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fbc73a3a78311ec06dca7ab189df3787765cee6b1268cacf9db9909fdd9dfb8ebdd1276f815dcab4878504f5538bd2', 16),
                    gmp_init('0xd8a3bcbdde9ae50743f454d3153b21e179f99441299e2629352d8ba49991830416a9a1a287e2a7c7e15508e671cfba00', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x88a2cd73c68c9e4f926e0999daf4eed1cb15d86f978aea8a0880535aa774654ea8d57ab93281b1ab0aa8984aa8492b0e', 16),
                    gmp_init('0x93cf558322a208382e0ebe2e27e929e340c015d99732c2213cbc116c2bd8bcd4f8fb7ddad99a80f517e0ac0bfcf69d9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffca1caf9b383c01569e915bca88624a46d368fb1dc140c435932388da76e9b08a7f847fa6a02712e96741e5521c2216', 16),
                    gmp_init('0xeec95880ddcd33a10d7762de8b13bf44cfdb587839a3b7d5b842f42412e50feb667b4e0db1cc2c4fbeb857aab68b56e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd091c617b591de39b1018eda0d874b5b838ea4498a075ff1ce9b3c01ece519e43fb3fcf8656a8c99037b1cdb8b0f3359', 16),
                    gmp_init('0xdc5096d0434c77d4eb1478e6d38b7daa4af5f02d27d347896b9d80a271fd30fa9b0b0de376105b5262789040e2828ad2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3c3ae918c5dd74237a84668871050ff30ae97483e05d22d7c888fac0f4d33601189e71c092a356642e9d4e4dc0bd11c', 16),
                    gmp_init('0x70447208859990b481ff2a308886ee6d690bcac2f95c081f65f5caa865610c6ac00ebd7c744cc26ee31c626a7097a773', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b4de0c3259c3add5f1e5b07eb2f0fa9ac5e28a7392628918b18a8f2c1ee9d1e30b402f2bd40f4f24de269dc6f3a5002', 16),
                    gmp_init('0xbda036732f5ee6f071647bdcfef919b77c69980a5a1943ed143031189f277d2df744d7210125b92034c349448ac67c8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8741308801ec6bb3431867471cc7b8fa351234d53024e6ebb892578a0e7ee70220abd79cfcf65c447e8adbd267331ea', 16),
                    gmp_init('0x5ef75ab3737636e527b1784317816ab046837f39c9f827a6bb0752eb1e491a33b1ebda7c9368a7415f1aca50e4d2c1cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18decf6a11fa81feca366876ead3c4fb068b27f78938d128c9c68dea3ef5c91492b031902ef3c7de438b07eb29b9b406', 16),
                    gmp_init('0xadc5857da8162586c3555e3c96eedc4b3ba6c1e7b67f41679e4c9be4bf2380aec76e6fb13616e5bf5c04d72d23bba878', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x750c5526c70c8b42bb7f2abfdf87b655fcc399c0cca29cbf9835403ebf785b21f71bb7e05bf1658ded317249135af53c', 16),
                    gmp_init('0x82f2023548c7db52ccc122bfcc513cfcdc90e5be66ce49b209c1da5dcd1d3011af61ee32a10df1d19744764b146ea18c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf53f76574ed4a07be4aae6a1d73fe7b96a740d6f900ee41d7d44f5ffdebeb33359b05a2f828287ead2786f2ff6385c5b', 16),
                    gmp_init('0x6d7add827aceba85fc23d2a50aa3e91e58a34ca2b5b32b1ff74224f4200ea2e97466b85f5b1ef5128ae6b921abb1b5e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x948a20fb60095ad9d1aaf554bca0575ebe8cbd1b849948214f9caceea868b8aa803ffcad9f022ec74f3eaab0798a230b', 16),
                    gmp_init('0xede013496a4b08795f3bcbe3b789af0aae99a8849e35b2adcb84d64895599e5c9a143decb844d1f8bfc676487932e92f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c5c334e00380ae72c66a02fb6c30d9d3d9f548650a2d9f5f2e0dd95f53324aa08d8b41f6d6d28e9dae9afe5f0e794a', 16),
                    gmp_init('0x78427b464d5e8210b087d66abb505e196cc1a648e39cb6730ab900d7103acf65dd339f11c898a07b8cb21d381f400ca5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf59b36de71ef518256885caf7f3d0b3c065965f84ccf69cdd3ebbc360173a9ff6644bd50251cb72bb1e1d3c5121d938', 16),
                    gmp_init('0xef1b4ec4051f0feae7fbb3c912dbadd308b15ae5cceaa494a3ae82bb343a41c3ccbacb5bb363e69d046b8e379929ff5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4d0b43da293b4111fcf5725866df7738e8849c6f9b08e7c5e764fa0059b4deba3b347bff7e5abc335ac14556875f4be', 16),
                    gmp_init('0x43651fe229ce95ef73a4664420b7cc1e8570b573ced2926146f76ddbf57bf7edb8977db3327d7217514af997489b6ba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2493e8d20a421e0db5a8a93456ab5f93eb41eb5066c6b7eee12dcc5d5022af11de252f20cdc8025e7424ee723ed5ca35', 16),
                    gmp_init('0xd6a892b42c382ad8c394a50730e4fbf414a7e28aab905b92157f74e5dbde45182362d9bfd8382b231447e4114bc4c258', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae354b532d0f16480fe2aa4b00a5537bb8a5614af74ca363b3e3c2bcac80696019c6a360be511d46fa7bac59e14343cf', 16),
                    gmp_init('0x1cb60ea5ede23d73af51a3bf11b5ce2116548c7e8ae24a4c05e2fcd477bc80188f5c5728da3fff6b2a32fc782a327069', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb2e694d4030b722611a125ac78b6451097b15d0efede4d58448c5f77c419b34e2ae421bff933e2638c56d73bde68b4d8', 16),
                    gmp_init('0x1bd1a457337228e6933664fc603b018906cb5dd7001f8107a898f0663dbb7eb64af74b9d3ea4a11a56d6e47db25b8465', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68539d9fc334176a72cafd7340120dd8821ef0a60e835a2a1478f40f0f28256ddc5bfbf3c560cb1a88ef9c6cfa8cb59e', 16),
                    gmp_init('0x7d3b5f2fdc7304b6bc109ec032424a07d11344de41d0e521c923c5bff6bf487f91bdf2c013285453a3d4e662e5bdd9dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4544ceeed7d5c3dc06d7bdb11e262158bdbf54447e08a4e21a0145caf1ef97f0768a0cbaa102fd46b7817ff5248d27d5', 16),
                    gmp_init('0x325db2f693c37bc0a944a8bd6884ccf49bd4567587e9cc169c5c1b18b5de4cfb9ea46dac84ae076d5e1ff066256e62aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x457c6ce0d3bfc264d158bb40e07db339ae4aac6517fcce977b803785626b13d861099fba580774713454600daecd03ff', 16),
                    gmp_init('0xa7be3010e62704159c56e2701e2b8ed7050dcf553bef8bdaf7e57758f76bdebae26b7df2124c56ac2acbe4fcda9182ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90c6112b29d14fb22653632bbdef053d840ea75bd179d61680cba5aed2c3628161961d03d2c58f587d111216ed0f0b79', 16),
                    gmp_init('0x112afa1abb10e5334c8d82500b3dcc44c47f1bfec4408bb20aafaebbb919213b9fe4e30e45ce3c8f08812ab1181b09ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeac8b06378244e0ff12ade66b5894b30d495ec7e94a633d8c14e409abec6881727d765f5a9b1b737a858f9f03eb5524', 16),
                    gmp_init('0x113443f650a8a78e56ca7c429fb8193c348ed7088c33a94c537a72f0037a66c16dd2f92ef30a6b1aa557f9eb0a68edb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae5bb69baf7f1aa76ab4f0ede92aab5571fa7e02ca42a865f59b3e019afcc3bc1c1cd7f470dada6fa3633b46e7eb9fca', 16),
                    gmp_init('0x5526a47d4d60021d7dd9cfcb2a73222981094ade45302674f7601b75df90e37f33d2ec416f0a203a26c88e39ab4bd359', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbda053f88157b9bdf6fc148894696da3d4c227f36d7cc343d3f892db365872280dec62e56993a49fdd8e0fa6fb45e5c1', 16),
                    gmp_init('0x324c9c53674abe8497cc5b2084fd9d082bfc501b1286789402ae38a83d2186bd9516405f5a4d160411e3b627de69cc92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x677d350a36b6bea0241981d8fd8b67d5c913902c9aede0c61f20cd7bbb1781fdef8985dc0ab1d54b6d3aab2fa302c6b7', 16),
                    gmp_init('0xf4139093f0772135eeeee4d0411042db281e2a232ef6b1b49195091217109f9dc44d3bc7f35d9d9f39d73a0b68ba295d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x533b93088aaa2bcbe1ce7584c71af12c4140db74ac19db3172b7314024fe4fe974083a3fb6a4ab2c79eb2a6f10561399', 16),
                    gmp_init('0x6a44e9e712257b0043fbc8d01cf177f661c05884b0971242b6f9a326ce028d022bc5b061956cc6e8a68809736702ccc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2648490bc6c8c999adcdff636e9d19ec1ac1b3f97135c647dc13be711bc02a3354ee78b8c1c37c851965cb7d075dab', 16),
                    gmp_init('0x7a0c07e5a87fb92a34ec5362d27fbb030b142efc8aac65ee57b692058c5c61c3a51da5fb13b0948b69dcbdeb8c18c3ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad2050ae617423732b722133ebc16a4b69259ec7aa10dc1d77cee2386605e676be02d0299ca7ad6e29ed4f351f2b4561', 16),
                    gmp_init('0x2f91058ce3cbecea0dc8368bdebee010a714566dca3b1c61db82447e531d52d4b5b11fee763015f34dc88f3e7e300d07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb98ab120356966c3cc47c6c9a820120ff430be5a542e873e4911c90595f01029defd0897c25738b9b30529ef74fa4c1e', 16),
                    gmp_init('0x7bc370681b59f4f056bfbaaead1daa95a87c92aff6a3c2351bcda4aac9899dd4e0be09452c0e375f3de102bae42f65ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8a7b1da8dff8e00d3cf8e8b90e3600003b701780014497643ec5c3a438022285469f24ac32e66a2cc5589cb5dc6021', 16),
                    gmp_init('0xee49c77b02f68939e2432e8389bfa4b54ce171c3db81b21deca15188d45d2533cbe70ae5a2e81cfde2870cfb9cc47d5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f205bbe7c9d2e2b0e41e41787c09e31e94a5644a4f6d9d95e63b13fc0c719e4ab22e3eec49084632441038202d82855', 16),
                    gmp_init('0x87b2c338e4c4bc9a37a3717b051d29eacaa846f0ee6834f335c7e4425dd8a1465c4450ebe19d44e9221a6f3157dc2dab', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4715481846399bb0748e65898428733fa5aa0a42245574092832404a1eedd379e803284aa65c0ae6393890cc9d1fe745', 16),
                    gmp_init('0xa9254622b13dde8678fd2858647fc14c1bcfaa80024108cb990a3e37fdfab4d0b51a3ef3ca2df4e5fbed33d90374e84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1311dd5bd3b62f0819b03ff37894523e194ab7c1cc595681a9a44d5ae189b44c311167c8e2e22484d1b952fd98b8dd8f', 16),
                    gmp_init('0x6dc06731dc2cf9e57628e4d02061d84bebd0b70b39e656fa8c676cd7a9a8d44f4726ddab401e733d661f31c012532154', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc63fb678285cfd41e790ca3bd7a6c62aced5bec096e4b084ba299bdd4deb98ec8f8b1844b8048774f82b743419b8c564', 16),
                    gmp_init('0xbdb06b56b3fb2e391bd3ec2cd16bc0b0a7d4c7648e9d86d7b70e0ab5109c2a0dfe300ed8c7b7ee943349b612e62ce5f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe843d026f700654c45e8c1555455f2b78c4017384ee5da15bbb33495da8efe7e58f6b5602cf470f220081f2e8de8603', 16),
                    gmp_init('0x84004cae5ee23a1212239675308675e84ec2877e9278b51e8c6d050f26fd7c2e47e476d8b88371be0eb52b5912122afb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e1c5c1060e4f469368568a2024b3eb73cd167668d9245668920ed4621de8b08e25217ff26d9402a2c6cf21c176f8a19', 16),
                    gmp_init('0x2a473d269b1d113dbf2bc771ec00b3086fef83080c1f00e4b4f0a9fc51aaafe7379bca03389a848e5ff14982806e6b55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75de54385f4adec66bec039e9bf9776a1534064973fe6232eb783ab54795bf05ddd3b86e8d65f0c934d3348fd4403b57', 16),
                    gmp_init('0x5219f3ba9bc52a50edc38c4e1fe28a34258bd2f1fa40bec9e7649932b15ca9eb8f85061a37d3028df32b84834a9bdc1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe4564ef121284b4fa38502ab7a28df99783e3c525c7a6a952531478b4eddfde8de8d6e2b5bbf7e233adce7425666fca', 16),
                    gmp_init('0x9edbb6f8c61fccbbbfddec5d6d55517ca32ce708948546cc39fce0068b80f8ef4fe5efeddcd92755076f402e131dd429', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c525924a063ffbb5829b0d561597a787d9db7f6eb24869d7c0f7d73265f525527dc4e79d47af14e86c280b1f2a56e3a', 16),
                    gmp_init('0x4574b4e16ed0eabe7b6eb7f26335c53e862bdecc32c2255c706c54f1403b8b3af972e098f64e5edabc41346b180556d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74d0c74c153b3a81985be07e0dfaa49948760d1223dcbd7f5eea7e504627d53a27b7006c26b2401ea17bd67a00ababef', 16),
                    gmp_init('0xecb89960d64f24ee686fe8855a8349913d4014ded4e9ef0cd36ab38d84615660530c7c59764ce8e1b5c3e6a60196e9d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35f2a027a7090f6180e6a7dae1940ce99433854baa2a00b30acdf051a33cb96a4066dffd88894d581055981f6c50cbe9', 16),
                    gmp_init('0x19fe063378cd8de6d4483874526f0f8c7a685ae827b4c7084327cdd2d55da0652de55f049595f590698a9cb98b4f194d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x552a98dfb68082af001a19fbc75f63471a0cea3f13271376743ebbd989a2c4ccccf9603d637aac719434a067785fe102', 16),
                    gmp_init('0x1df65f8c6a686edbf90da3a1057d413d49b8d072e80e92dfca541a56814e93abec67b8c7af8f0eb45094b1ecb58683d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e6ca761061d75d6eef6ff637918383d6ddebc75d5c8ec2e3f0b45b1f25683eea352d753640978b7f04a1a340091ed79', 16),
                    gmp_init('0x6e8ee79864d79b805068acc0fee93357baea42558dd0c4be486c9805ce8fa0dc055fc6fb559cccc4ccad34890a240c48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49eed9efead57930d568abda05b6093adf3d71d337923d2295f261db4b4b1c0006236270bacf18d2960e5b03eb591945', 16),
                    gmp_init('0xd1ce808256fbc8db01376d6c17eaec078ac4938dbed8a6cd8a6d288bbdfeaf62043368990a8af658c19536442bcd94c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b264180db9d386ea102ec0e17c23ad11c03551b166b8cdd247415a03219e6a59d31b6c4a5bdf6c863b90a16a9d8cd50', 16),
                    gmp_init('0x720ac58fd2741f79c93e3bd21a1de31a72fc36248ed5c3ddc5a42e53d88432210507046bd4b7ddd46d0b01a7575f9df4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x668960e963b87cac5bb9bde47ee856244f9dbcdbf203993e92c73e9c19a6d0d4f88ac0dd873e78110d09cde0ef5de894', 16),
                    gmp_init('0x31c39d41387cc1f6229c56de83994b809a2ef808f73f51334ef50cce6b2746e9627a63f60166f9f1165f2d692cb7a07a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe7b3f42dcad3d10923eaf4cdedfb898d39acb8f22aaa34511af000f8cd3d0497da74bdf2bb0f6ca731efc1321a9bb0aa', 16),
                    gmp_init('0x5a5d5c5ffc212920b18e3fba8615e7a5bbb25c8fc463e3b880a93ec7216b71d56f5911020e70a63398ca61b55e695394', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec5690b4acba6ed51ddb3975a70959d8ecea653e3dc8b8cfc6c59daa5cdd894c1ef1570f01536b62b57c8996b71265bf', 16),
                    gmp_init('0xa7a36f395083bbcaec9e9ab103bb5ce5bca67bea75cfa87260759dea0c4f419051352f562658c0332f98d57ae0c59d46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66f3f75b5b66aaa98aaf79222ca76a4d93ae6bd0b3baa9392686be11a0ffbb782e1671ca0f9c63cd898bd3db511b69f8', 16),
                    gmp_init('0xbc173b81175e091df15f4b571c1f9232424e7e026a91cb264653596fa263bc4671322859ccd953cf1616a86b57f6ec88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92fb6ee7b8a03957bcdaca6f6c7f3d73e6d8bc2ec33ae5c399da909c31f213a65b00387e330fca7850e8a16d9143f6a1', 16),
                    gmp_init('0xb533fa7e11350f4df726638fd2185d4a5a67f33ff9f2f51377c7c01fe8177cc0d77af30d555f448ee56c1f8fea11fb28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2950bf1d4f7b9e361810663a26b8fc24e3447281798c742de0077d4b29d8107cc8cf57b3c23b51fe764ef1bae89eb47', 16),
                    gmp_init('0x3ef665c85dc0e92d0de1332d19aa256ff5775dd180491f313df9236c8011f82053076ded8fb1a4de67fbd84c7276264d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1af3883293a5ecb7823e0b2eb4ecc177de0f83bc6d8bc295780cbc50d5bb574e6750213879b2aee83a55b026034bf98', 16),
                    gmp_init('0x4384adfdaa7f86506478b880554f629cb2bbf4569283f771b5f4bea37103a0be763cd3be2815afb48ff2cdd8e25f13b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x453096d7e612166deb383866dce68332d595d1703892bc87cca507d8b1ff9a4f50c3fa0aae1493f85b95e70a8ac2a4fe', 16),
                    gmp_init('0x9adb343a2cceece3d625658c1abb225a6d3ad09bca2188bd50ab2d4320e1a5328d3c3a8922368b9a6777c8e18c604cfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53a358c668ae4f2dd16ef92fca0bb4840cbfb52a024a87c0c0219bc6a08de05d7fd2f4bf87390895fc944d09f0bb2ecd', 16),
                    gmp_init('0x216162491d524bb549e57d8bfcbe1aa2ece52c8c8e260737c86df667c8bea84caefe111f8197be913ccfb90473473e88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1872d3cbef057bb8c57ca301240a5ef4976317b01ba028343d6529c2f7137548788ed544a31a9f8f1cdba50caa41af2a', 16),
                    gmp_init('0xb2e31f66c0544bc5c5f2d285fd11d933bd9ac101dd2a9a08861110b1ca394f2dd91fed6d110970741ec209501e6f863e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94b4390d67dac3fd8488ff6d0db536a879ca40a2ee432e3e3d4963db869925686576004562267c84224c618bb28843a5', 16),
                    gmp_init('0x905c450db60b9f9168118814f07e06638191e2d0d16f8e119e3882c1c6aaaaa4558d2281acce96d198509f553c8bb6ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f4bd734bdb0012c18691119dd9c81bb015c5033b02842ae9382f945291d741a3a90b6433ee50c523d5b69c6df823a33', 16),
                    gmp_init('0x938a3dde5546ff4a7f70e4b8840abfb0c151524fcff4c0db936bfa0277ae573e74aaf68a5741810b044d409d2293f63b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa549cba4373d1af7bcebe28b0f53be9f652e9c484197adfed10fb1619182277f4dc6799b17c6bcf613a938ef52eede54', 16),
                    gmp_init('0x790c502cc004bf4a79dbffbf00a056355660a632b7940ac2e1f2555cadd3fb72d466a3bc6eed583f43402e2c4e2c54d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe05781a2e2cb68008b15a833069a2a62fd0c4ed3eec546073890ed1a6e179496148af7f94c09c67d6e1511ea3506ce84', 16),
                    gmp_init('0x52ba0d3ac7bea2797b7759872c8a76440e8ff2d87356031f62573dd4b604583de9c67244577fb238f684d4eee5472581', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a87319728b6e6bd02af2ae1574681b2bc7ff739e0f1a17c11933dc1405d08fbc8e8b35439ceb662a1ee245ef134bd30', 16),
                    gmp_init('0x39df0ea03cf468ebe6f59f889de38f882c195e5c6a22807fd8d959ed885c491414fe6c9a2fabc4372601394ce13f01cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb4536ec4544f6b32e3dbbdda28beac7033467d0a75b3c0dcaeda2f960afe78bc317c43a4e67a3ab40e5c9cce5f899dad', 16),
                    gmp_init('0x739a9bc3f11f688895b77126eb491dda4215a13845a36283429840ee79b6385ff2ae9d2a5ff3772ffc68e3af07d768b0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x131f3845e55ffea38ea3df11b78cb337b7b13317eb8257aa26d7ffdc14cbf8b8cc3c82e47cd6596c7d9a06f4aa827b07', 16),
                    gmp_init('0xa36e4c381e6f179d7392cd0560edbac6e53f2bebd759ce54951cb1928d0223a7d9e13081dcf0208c1228f05189f3c69a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaf9ce76ea4007fbc3a3514c50f15d3d37551649a3ee110db88fcd250e43191514dd5eb047b2f85e53d8a17dc0814998', 16),
                    gmp_init('0x1a4019cca15131843f691e4cd7f78b413bf5b486d0ad6499b2c2dbad9bccb62fbb97609ef938b53ea49d602a00ccee8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2b0aa79872b14e57d8a4e313df5dbd46454226983121a3aeee40172fba62351537ce7ddffc9353799c022ecc351be09', 16),
                    gmp_init('0xe6840fa44c17a90570438160555c1945e79e85b622f8a1bc56e5058dea2ddc533e8ea3ff86fac3fe3279448e5107087c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e85198bb841b01cf7b1f3b112016ca9fb3fa715603fbe7976c7cda1bb21d6afe8f9dc7ad59d0ff7aeee5356c9baf54f', 16),
                    gmp_init('0xacec016adeb88aba1e53541afe3cb73da57dda9b6bdc587829020e88089db5c51a444b4a9758f036456f5d945890cd52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x339a10902f571136745c6f7b3ac741f8d9ad839764b3bcf062b607a6bd480d70e70aeb7c9dcdac337956bbac614d3067', 16),
                    gmp_init('0x41203264cf699106c47e97d765b098102738525e3c31d4ab6e4890b50b27979dc50d10174eaa84523dd4f1bf4fd00b7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa652c95db3ca3f1d5bd8e9541e159beb1d6301abc119c79a1f07107eac382eb14e54c81506af413b3db74ba12f071604', 16),
                    gmp_init('0x1507e952146e30fd1e272589c0ce0d0656a2e9aaf51777e26d4092fc01f32d76a3faaa9a92b60d87ac296b57586b7e03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84366f5181dcd620d87b5e014d0d661a76cf96911ce4889077b5379709ff3f2476493536ce1b7f2fb813314835a34c44', 16),
                    gmp_init('0x64aad1ed5ef797e3e4a820eec6a3d1a1f02297e97f21e94b1a3f72618335e10c280ea91a75dd31e6cd768a79fe8fd580', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x262918085ab92851a027c3a054636473877f1e59a664bf45ca1401cde559a36ede4ad98367b55255a4e7dbedc7511872', 16),
                    gmp_init('0xc5f96030cb62d5d05d51334ae479697f2b738c108049c45d4e53198e746f9ea104167bcd9fa799f178406dc5a3cd29f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfce09f7807f294a1199b41aabb28d388f7e24565c5924e5131fbe2cfbb5b007aa428102a66e05fd16dc70c991b2d5ce4', 16),
                    gmp_init('0xae51399bd924512f4e063fcb516c6348f761db1a89ec897687f32f81422cb4a9fdf5ac54baec6f41f94841710915f288', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8d41e52cca984b7844c76b751674e07afeb78fda02dd936c290207d9baa4a089e52c8a3fc9609498682a35073a5547a', 16),
                    gmp_init('0x8ba92e89fcd470353bc1ed19d05f64ee0daa0ad00915354f2ac76bbaa5b6859fd68ea410e99113b0b6675c63554b645', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9188e2883fe2a2ce6960348ef702b51c243e3feb128d672b472c02e65a0bc364d355590852ad3b9c24929668cf21eb07', 16),
                    gmp_init('0x321d3d8ee8fddf5b0b0ab896c239413d84d2d3ef66f0f6ad5126ea9f64e04ff0e42cdcbc0c296a471e46aecbb038a3ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e9d59b85178df864fbf57d3bb807e9d26b891bdaeaca97c8d8d1cd84411b927b2e5cd39d32ac1e40d141c6424a23a14', 16),
                    gmp_init('0x93743e4ae5b5d18a1bff334bfa91f138f9c59a331a2bab2ba9024706cf78797c9ad8d7e259c0187074066c18fb267e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0ac0d4356a382181ea5aaa344b79742be82e9598d719af1005b7074467c1ea206233d5e77db8e066349407be0968467', 16),
                    gmp_init('0x7d088cdd515d9d78e8f7929dd53ebe7f7932fa92f8da7fe615e8519956889308eee5d491908c1b958c865f4d1bb0467b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc6e6df1bf140fd815e4efae5322f162c15d9f0df9155872ff500485abd8ef563908c63f2305541e05508e31936b6811', 16),
                    gmp_init('0x98725494ea79947d6881f4bbac777936d29a3f4e0b1e6a93ffcfbf7cea4b398132683bc839292f81a33326615b2b42a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c1c0b21ac13da61e1859631720c460ff807abdc6d6eb3d537b3a88591441eff71c9e028be9b2803ceb8d3364536b1a4', 16),
                    gmp_init('0x44b55dcbd5ebea28d7261a579f5131c2813726e7a93cfb83dd366cab90d957e033e1536ccbdc75b9518588daee6a919f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5b96e58d3f5ef5960f74aa5d3721adae630527b74351358e8b42b3bbdfae696e000a18d62834f9820708a95b5992b108', 16),
                    gmp_init('0xf5132490c424ced70816d773f0fc05b1944682556809871a855ff5a779b30f0967028246bf5f18aca3cd5292aa644979', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x273ffa039961589542d17f20ffe281b1aa75fe7a229cec353a7999e5b6a187d1ee6715d77c0f20f5b9b29fa39308dbc7', 16),
                    gmp_init('0xcde2a22f673af0d1234a0b65f95a57a3322d9d647e8cf4a4e24f160a2a0dfc0384da1b296805efb54b75d0f73bc10c41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa15c110e7bef7b619473fcecae387fa64dd82c3c63ae128e99bfae791791bdd9fa59f3b60b63bde2fe703c65882b6167', 16),
                    gmp_init('0x630ebeb6d94be72a9366251bebafd417e6074b787d7ae19a72b3855650357bb3d461dea8fa5ec1572e2bfd5b1f9c7c1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80ac2a3310724f814a89ce794a2900f01491122c021e32bf22a7eed6bb61d9c7d839304fa4c874a5a65701c8bf55884a', 16),
                    gmp_init('0x2e9d0986a87196f887865f7c76fc166ad07c0d9c3c9fc484a36f10310f8d14a15122defd054feb61436728b70e314ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfbe32663952190a928f31508c19b2a80bb4b4b54d821a8a22763af6453d73740f2224810e2f615cd54c97cad444894b', 16),
                    gmp_init('0x45680fde76b453328d783a5610613a2c3bf22db3a6f824cfb7ec9980ccea895b024d8e0571f070990d25a0956da5b886', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x562669e3e23db09341d4fb3856c4b6ca5b13a7a71c7f1da24b2d47004121c875da77a6d612c6a337a7243a6dac25ef2a', 16),
                    gmp_init('0x62b9dac3949bcd88d09c54cc37ea036fc97890d54dcc5067cdec4ee737313cd934c68aabda534189dd23e6859c9bdbcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1af8d75ef66fba9cf4ab08a7e4f435072124d130ad665258b7c635669bbfc592977258a4ae73787dee034d1a5cc0d60', 16),
                    gmp_init('0x8587bbe7e55d6972690e66587b644aedaf85e1977bfa43e8dcaae2b1f53c2a58336af49a2a93a6b85be67db1c5e19121', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5d2e59ec2cf172f8325f682f0c4a604fea843d68040351e598ef09183773c6301f1814148fa22c5ee3dec4f64ebde73', 16),
                    gmp_init('0x2b7db7cf9db1156a62b00f97d975c57b9d28e6c057c8de4a8402e2fc7c21a790c471ad5b66dfa56a568fb88ed321ae6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee20e2af0e89dbcea0dea1767861f8e2323fc34600dc593c25767d9bc2e456a570f4def0c9b08afcabfefb5e43fefa1f', 16),
                    gmp_init('0xe6a56d415cdd51438306d18433d59c1d42103e38b5bfe3ec176e9a10dd5d3484e2d4ae3be5ab9ef58ea83a6587c487e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe884f231d511d22e31cdd873f6812111aba1c9c45434cc16c730c5aace80d650cb0f9a752df268d86def13bf564d12aa', 16),
                    gmp_init('0x63a2f8ece19a7f94276f0ca00372b8dad366355562e409eea4df7d7c9709edecd69b5f870935b0bfa654a5fd31730dd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaf9653177b8d2cbac46783442080734af706f1fcc40e08430330e0854a1a5773f72c45b3bcde31e4fc402be558462cc', 16),
                    gmp_init('0x9fd8dcd7acf4b8eab8326190df31182e8d9c0d6b7278c36b81d590e4f35956df2679d60393302af067dcf33b56c98fed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8898c6cc8a6b0f55345c5bf3fd08b7aa6fe06bafcc37114310c36bc1bd372bcbcb9ebd892ed1ab3221bbc7cd11e5d3f4', 16),
                    gmp_init('0x272015347a8c64af888642c2d06c93d477871ffaa875897ef5024e611a384c47298ed9d6b85b4fcf7c1ae6fb0eb37404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe17611f99ee717f0ef066eb2b2b9feca2e80ef975542d62816422994c50ce511322458fcdfd1d63e0b8309edc0ed7793', 16),
                    gmp_init('0xeaa6823e3c2bdb40bd1bc239b1757a7edf578f2a44cb633632aa15205ff5254843ab1a5c38406423a912dc31f7dac096', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5737930af6b3028a8de7a372ba2b8e502b2bc4b0b7d823609d3c75a7d9b78b7b2bca82c6173387dfc4775fbbbe738b5', 16),
                    gmp_init('0x1760f575dba44d610b505bbb885d77c5f89582119eea28067314ee19ad4e808b968cde032b5bf8bdf159ed8e182f2379', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71c63a9ac3437af88a12331f0e8b84f88fd60125ee4268999730719cba9005fd318829629285500b1a7de5305bf81bcd', 16),
                    gmp_init('0x16bf7c203b54b401fe5539f4939fd0f5acb082ceedb52d68f106b0cd2fd2e46471ea7056dd1713a6072647492c591712', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfab8664a671610dff477b7ca0f6ba10f2f260b66448572b6f7829803cc9157fffde42b6c1fbd66c39eddce1a82291675', 16),
                    gmp_init('0xf874bd319a01be2f37514e5fd267716e3ce1b3d4d038d0f75439a675c7f641e07a2c1137a03e1e95207d9a7274987483', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8be41bbecc7788c4ad3058f5ded26ee580466d26208e07c948780135c1e9ff1ae4c8f9072e517945e1728bf5a00c639', 16),
                    gmp_init('0x998b7a6f68930a864d449a91b2bf7a1165ac938d905746bdf90682c348088c67f28faaa02969c5f588556ad10bb2d1cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60dfab924ee130f41b14feca36618acffa0e13bfa9184242a6314573eefeb9dd7697d5c4e86d9211d4eeb140bba60729', 16),
                    gmp_init('0x6bed58247d4e2294a81cffc6e328a08f88172c000eaf942eb31077f123d58e7b47de071dfca6a0c25a626982ead45067', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5db75f226f1883000f2e0e32e9f30ed47d0fda495e953cd902eb1f986233dc8c7fafbb3e9d2ca58fdd9e8ba8ec4dcb', 16),
                    gmp_init('0xe17b50928bc26250d036d89e4bb5affe99a7fe2335ef4550526f582bec52d696c107538a9c0458257028ce819f67269c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeae36e26ec6aa706ad648fe3263778cb275d93229987c1a3ea05aa88e893c55d3e715a0eefb473555963e4f79a66abc2', 16),
                    gmp_init('0x8b449a5bba9a9e0c60da2d71ddf3a809e2f9c695b25d5393209810fc83ae5332c25fdef8434c81d3c82b815d9d87a8ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5e6455cac27adcd3018356469268defd7b0b233add405762f6aed416038013c203fce65f1071eaeafe9037d3946a5f2', 16),
                    gmp_init('0x75fdf87a649d50b69b70762035f3815001d1754104ce376f2f4c63f27d4d5b6bf1919eb515e53a5c5a6b232425b96d7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90ad907c3f3bec0e18799693706a542601f012934a7d0f33737135600fa11d94e2bb6123bcfc2bf2c24fc3d8e15af9f6', 16),
                    gmp_init('0xd60792bc592b09f5f47799d751fd512e38c3f6be812acb6cc261ad56260d81085a9a2bf9d58f507da95d4a7db5350980', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29f13a2438230be5af0d99d75c285bfb4a23d9b14771f6ae55c40278a9791226e44b5573738082cacb49a2373ef6f7ba', 16),
                    gmp_init('0xce23dfc1080e0fc178bdb8132bd25222bac4c7ba98967481ab8c3677417b44892f52aa599aea090e00a90dc07b0ae1a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf60e669be26d26f002095c7186568e13ac0e1979d9cda30480d7d677587fca5fcbb459fdbf207df796cf928f90ba5f94', 16),
                    gmp_init('0xeb9088720875a3cc9ecd5a04906b35f612c29e2178332b3ff01ad496f0ff653a8250afe47109e9854c24854318a3ed79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72bae1c420def63500ab535c409bae8db2d1fa7c82b37b1d2047cd0a9f15d7c48306bde32cc330daad7cfc17b93f4aba', 16),
                    gmp_init('0x71c09fbde747950ae8eb55bc713178cd8e7238c0262536e3a84fec29dd0278643c788bd34699f003977ccd03ce446f2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96cbc87859a1de14dec4ab1b4e846cbd79829ef8d395610364ac8d0b5d45fbc4e08b3ae095b62893c5a8eec5886fdbaa', 16),
                    gmp_init('0xb2ca5c01630b85195ae1bd8acff35da946def0b1784f2396f64be358d2cb2d4c41ea4c5dc6bcc8092ca42233b904c422', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3365c433e6449a51c5c4845b2535ba459f6257462e2352ca066a914d1709a8bf42279c242ff90d18b145456e98dc663c', 16),
                    gmp_init('0x63b02fb553034c58d6bbb45173b640b7d2676e599d0fb419dea39a2593cb6188a87e67cc18ccc549fdeef858a3797b81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf63949036ac098d775a5aa4df0deca01ee85fbde2cc08a8c8879b69c2e1da9ad242d0717cabf986eaaf290065f7c2063', 16),
                    gmp_init('0xde3fb1fa819e3bc735a8d4dde6ebd7b077f18b1f645060c475c96e2f8dcf9324109eb44b750266ba55e189071fad9837', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb72636144f3f39b2ac96ed408657dca8fc43abd76aa71fd8c53af3a7c59ef9c19606551c255dce101d11d7aa1c477b42', 16),
                    gmp_init('0x8228e2a4a7689ec456f81fc7c35ed0646cb1b84d23e78523bfbd34fc64d4fa96653d93af1836927d8697c0f4aa7e10ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x777d50e9306364ea8212be0dec2dd197db9b4f4c9931f9191dac820692d3af2968d7f61cab241fde56a9b00662b360ba', 16),
                    gmp_init('0x7027303cdcb578602d7a87c489fe379ea1997cd9536e3165f3452006d26b87a7ce1bd6eadf0a4a13b2bcda4193a71458', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe8b3261e88138c55e434bc3b5a3f4d141272d9fdbf716a7e63239e5dfd59d024cfaee2ef124c3655ddca4b6947f8e6e8', 16),
                    gmp_init('0xbff631093d904f20e83efae1c445565de9c7ad4c2a1d5efe87f0454896e0b000e42fce6c1ae5a9193e51527c0454b468', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5b0f9a33e952f7af48a2ace281e4f3b8164788c2ae22bf9c12836744d956605f9f6c4ddeb0c25a46e3c3520b9f7f75e', 16),
                    gmp_init('0x5109da19cbe51ad38deb1878c0a30f18c4274920cd5a51f73e6c13c0caf49231f6c18ce12fbd403f64de88ef0327c326', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0f485f26b39e8f1186995fd826f1076cabc145d9c62193b378970d0da321b13c16fe3ca06c4788ae9f11db629fd8e67', 16),
                    gmp_init('0x39397130831a76d211eecbaf7db98f6c0dd0426029248f079a69f47b21fc6df5aa1b21ee5bc7a502a313fc5b67d77c2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67f07fc6582b1b61df3888a640bb83a8e697a9a8ac89d8294d0c5680bb68e522f3d9d8207cd22cfe2664051f36b4053b', 16),
                    gmp_init('0x6430dc553032735086c6fd7c0f095d53fd9efce75dd86d1111b0708d1b45210c5b2f3b1f0de51f4c56b7874d8ef0c5cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7abb75816c98180c358add96132b6f32b566c965c5baeb4f34cdf85cb98b4c498a012bbb4552b9d9c87feb0e1cc7bba', 16),
                    gmp_init('0xb3b69534f2d4ea2f7221a69a77d5ab40362f9fd1ed2bc94015a5b96c0f2586fd0f63648b2b913a9c6519d59ba9df4a96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd68b9b84f7431db5fd34e80a3bc2c095a56238251281a7cc571496b4d72e6a78eef7c25b3756f4a9e331c28ea44e0cf', 16),
                    gmp_init('0x6cf72ac3643e0d74a78b51e726b995f39e477bc8ab67607adab749f06036c18052884053bae6fec175ff3b84c6055368', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e5889404aaf3cdbe516093d1a44b754d92478ce12cf335c247330f36a637d77d87c1716c92e21f7f544ae0d5ddb2c1', 16),
                    gmp_init('0xdbacba86d471945034423fc4e09fe66ac54101b843744e3d483b070a6ad9c2ed2251ca00fa102ad83c301cce0b40cc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53cd1822b7b7479105958cda7e7dd1814d0f9dc73ec077053e137208b72cdc57f951416072f7a287e85cb823d32e00ed', 16),
                    gmp_init('0x84d4bafeb1d41b6713dd3040b2692a277c49456a7a2f5560484e919cc33d3cf2901016b71b6ec659f398e3a276d07c10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaae486a88b922d2f5a50bb610f976d28d4139258367a363cd3376a91adf0fc3a03a28def26f31bf7f6d4328d4125743c', 16),
                    gmp_init('0xc0b9a447941529421cc313ebcb089f24dae970a211619bc13e521e5341506ffdbd56447ccd7fb3cbca401c14426bf2eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc525ea887d03fb4ecbc1a62702c1066030e2c8416f661dd020594c4f6439f9ae4f802e7ed5c17bb722975df1ca3a4ba0', 16),
                    gmp_init('0xa5846fb1c153f99682d2d23e627b61bb9205a4236a858cdd926fb5b3bcac00caaa2b1d364e1d7d9201f680731eaae1cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x812809b6ccfdafcdb5de1ffeacbd099e35ba36ba6bc1da7c0b37d903b961757393e5f081440bb25ca3194fc0cb3cd9f8', 16),
                    gmp_init('0xec45ef8131942e2d36fd58a562d812a55056b5213466e0a777584472ea8889f654a34c37947a09d4c2fd1e7362c6ac35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x154766ebc33082daee2350721cdc19bc5ed250674ea437adc476fa523fb2d18292d06cecc2fee9ddb039fdb4aadbc09e', 16),
                    gmp_init('0x521c1ae287ebeaf4ee49db8bff9539d591eb3b6647ed2e751226a61b01f169931aed38d8062b25034eb77f87dccd5562', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68f9b428b1a4db7aa4c647cab6be787e49b226735ca9d450266b74b6f1abe7c9884abee7487bbfade062d9a2ce75835a', 16),
                    gmp_init('0xff5b83b5ffc89a898c199fcea686913dd048a5d4d2668d4655d5bdaa024d102d7270f2501b661c28a9af0da8ce15a1fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72de1e88dc974183d4edde4c0463ee25277e71ed03798a3849a2626a4df63381d86e41ee104577b5a8be088c36834e77', 16),
                    gmp_init('0x58f3de6484c7ac56f2ba7f1bdbd07708aa47668a137c98c1582b81ba4467f50b16ebf9259fae56b2d8f51c348d0654fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa43b4c5ed469d08bb7794c4d7a6352ac9ae32493794287d8705495ea965c20d2583f1c78d04d7b5b171b1d480667556', 16),
                    gmp_init('0x799dbc436cee21a5c267b611f0866d64b6b10a15abcf9b808abba210052faa22956ffe4b906c002c670305e08af82448', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x302e9b41de5427a879728904ae51c7b894f85bda1eb74c1c668531fa998709c1bd93b0f9a02cce5b66f2906d9ed1436f', 16),
                    gmp_init('0x17b3545e4e0463e5bfe1079aff98c3d39366b0c88bc3c1dddbec6713337b7d7704f9430a2a67bb209da5eb758b8e632a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x597566db933605693149abf2049d2a66039bfbb4602ebc8b29c6ede63b7e97640f39279c32c1909424d4e7ea82996a8', 16),
                    gmp_init('0x26f8102275aa22e6768c058665b56cea0e36d79c0ff4b419654215c2df20295bac30fc77c7b1d5cd568e6059fefd6a15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf49a4be88f6ad2b3cb874fb93ffaf87696b52635c5fe5930cd4daf8de5d6d444ec28c65fd33e30f96033fcc136d90d7', 16),
                    gmp_init('0x605ec6b4ac1ac844c829cc57fd872396929c99abdf6554171c9205c1a98dd88b773fb7c49a269cc4e1ee44aa5b86dfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f15a99de4a0ce105ecfb2235e2ddddf357b1d88adb3ebf44740e5634d601cc18adfbdf9a8f97724deedbcfd6dfcd775', 16),
                    gmp_init('0x9f6470de1773dde007931e2a9e1eb2746e8e5e12b510615d79fa7c620310a449c428ac2ba5af8e1430c426f9703a84c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x686232350252312aba93f4d1c7ca391c534c9707280111d6e883d637eb268922c92cad8ebcd4579cb6e15bcaea14ce52', 16),
                    gmp_init('0x76ed0ea9ded8be298499ae837c4e4c62d127e41fbde03f9f8e90cdb34178dc7951e177fd2d83ca6031714af6c725f8e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddcf01c712eadafc2f629d70a21ff79ff8dfd1db67104e9f91cf285df1358e8d4720844fd99579d0963e1a43af764b67', 16),
                    gmp_init('0xfb73bf3c6dec93802a9f8fbec00cae345f7d3fbcebf2208ca0c79e506fc87d705adfb7ea04f87a3ee5a9d742f01475aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x866aa727261fb1aceb3017a7f791d94605bafa206543b018744af9aa37b9b4d1ee5f787223eef16cd566fa48711cb6d6', 16),
                    gmp_init('0x6bf5946e52c6878c34cd21db72cca571f2b7b6494eafa2cfd1943972f1301524387eacffb6a531db50ec55ab2d3380f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b69a24c3be68424012dde3534940d7d25746dec99c830b80a4a45684e0335c785378c64ab72fdb0c4c58c91c634e3a8', 16),
                    gmp_init('0x8bf25e681d0224f9c31f902f04a171c08eb0c34d43f4df48faeaca03ca422bc972f6927d1a4ca44bffce54e14a7aae17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6399789499550e9416a44663af552dddaaeb93f6c626266da4c202be2c2372207a96fd5f8633538e99a0189be161594', 16),
                    gmp_init('0x6f380c1eeac7ab67b770a5c6e4d31ab443311ff89a7ff7f6771a6b724c4ea01c5d0c2306173f99831dfc889b05d957fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa5bd4a4cfe2ce2daf10756427c6c03d9967eadb1e51fb78e05e6510113ab0a14c3861604da2b63ba7e2b85a94c706c1', 16),
                    gmp_init('0x395d34c301e53d175b1c37792ca8a233db5e29c4aa05ea3e7a8d6b30168c2e3c3f7cac69d866bd5f341069d0f69b08fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8df92192897aebf1ce65c53df18db3940923f58b3ba8a60919bc9420793432ba28c8b8b8daf8b2ad9b0a4ab33f9e0142', 16),
                    gmp_init('0xea529150426dcc8631e69d54d9ea83c1b0cc1d95a7866cf3979ea6dc8461ca353afe2ee50b184268403178b87874b967', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b4c7890d954ea7371d88058098c216d6f28ee03bcf5139e88486c9b3208d6ada71b3225cf406aab2df9526233788480', 16),
                    gmp_init('0x4cd0f3d1e40c84b62cb8a7134908132ae19c5c8ba2be062df9a015a7a0958100d644472c9a31e1a164f773dea545e3be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5b1743a76a9b5f94ed1bb2c9a38b684f690b61aa6182afa391ae43d6710cf53cd72504a972b8d8388d68a14c4a42c9f', 16),
                    gmp_init('0x545a406aaff4e49a21d142fb6149cad681646c24b5965c8ec60e0e72eccda5c3515477f1a86054cc46494c6bcc2c2077', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf91c90fa32106a4370a9e8956b4613db9509f666ace4932989421ea65d4a584b5dfb00739c38819db98a86106115e5e5', 16),
                    gmp_init('0xb1175a23972cc63d79a9a9c428439c45e861a95eeda4811877e827a7eb5cd1c979eca7d702bdcc7e1847dbe3d317639d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e33cfe0e44732c27a758ce37afc962b2aa3ca1747eec1c9d517cad6341d2b1f306460d330042d0a9db82513d4d30109', 16),
                    gmp_init('0x8e37f7858343f5a7b94542a970d52ccb9127ca313a658f11dc2480c635ac13bacd83554eaf49716162c31e254cd4fcc7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1e12df497c111c0cff08f667c413c6828d509a8d810cbef350708b657722f9a6d81be3fef1f19fd83fcd7e307742bff0', 16),
                    gmp_init('0x16c3f70a652f7b0dce08baf36e05f20e95d089dbc442f4293edb60ca0a03c29e0b4ede3b41a3fe427a8b1d6ba51b083', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43143685d6a65a02ae83e67bccffbb47d1ac1cfe283568e1c22e78a417577d0440cecbe1a70ca5fd80f6e866941a2d98', 16),
                    gmp_init('0xa54fa1303bdd48526c7d8876d30b52cd22139d05fa9e4511ffbd6deb83d2b5fd4bd89fcd896d8dcc14a8c7e26647b845', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e6f80cf277700bc1fdf855363c62f0471804bc8c1ba2876b965af08c6315fb7e7617816bd40009259bba30e13ddadfc', 16),
                    gmp_init('0x37ec6b1192618a29fad74be964248f7e86c60e59bf012314c347640e6b049b5a7cfaed75683ad2594338e871ed77f3fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2500ae2b2b95c6a854d0f00f28c5ab968482234f8acdb29c6ec66dead0396fe573da9f2e3041291d334c7afd1bf5a1d', 16),
                    gmp_init('0x66da39aa4f2110bd69f077f5337f1b330cd51bc2d634943ae4885b0a183556d1d37f53338a1d528fe0014943ca8222bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57d49e82492a12e67928fbc21a38214a7b82d1d56fe96e078701d4d1bd7476cfc0d74c1ad7b81ebd31c619559a1d0ede', 16),
                    gmp_init('0x891baa69ef3c7686641743bcfdea7c4489676ba9d2121c149afcf7e60565aba39780611bd4c67502e39fbee911e6614a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5c8b9ded92318c55aeb637677ecb854c62985fd7db2abdb20ae1520f6e7b17b342ae2e3c99c8d101eb47394dd1c4dc6', 16),
                    gmp_init('0x960ed83d635bb7f391db33376b923da51efcc1f87ef27d234cb8f76b8227155fbc49e4f31ca634edb96e834e5c3d2780', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3533b6cb5b271f583043e877185af6437963f8577b947471caa648853be36979a5c584f21e57851afa599eb316b684d', 16),
                    gmp_init('0x2917d34306615f84eb53b9bc3994d05f56d7aa13784c785f81b4163e942f994527c4177f2714daf86ceaae49b86edd4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x660e0009d94f5294ca7bd70a17130e7049e7b75b89ec3e2e99dda355c0a1181a98b8ed32c1c6f55b99adc86e91ed0819', 16),
                    gmp_init('0xcb55dcc1f89d93d1e7ee548d9ba978fb94ba21656a8e8416949513ab49376b6a70098c85b7cbdbf5e115e8a9a6b2eee8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d2e1ed84192319a5373be3a97ea06b2ca0f000041cd777ddcc4870a29bc3d2c770776cb7587160be81305e3ba613c1f', 16),
                    gmp_init('0x1aa04bc026d16ea867ea548056ebaba4941b75fa71570e50b84980e008d457512608ba51578a6e4cda2786c658432407', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf7fb76ed2a516e686c70a2bcf9e045707258404f4d6359247f0599a49988a9bae6d0ce929517eb93c5c5b2d082315f2b', 16),
                    gmp_init('0xfa9115c7cd23c6af10b735d2990e1f9ed2a4d0ff6d1d9688fc73014c39dbc88278cac1e6fccb8f6f2d534d3faabf37d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17faedea3734e44e791f3c54c56ea18722f922169114a8e1f7c2e0d12a80d7b5a2c5ce49629acb816ffeaed1e4ec9363', 16),
                    gmp_init('0x44035e0b91abfea6b43ed5ef9b672d87d17749eb5319481cf56c3dc3d99e244a804ae3fb2a2787c09cbb32a6e0ccc012', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fba05e7af0b38c140d216017a5755742ce06c344a01f52a4e2861d9a88af38161127465d6bf1358b1150bc1c959ccaf', 16),
                    gmp_init('0x733a18a513ac6a8923ed6725457214151261fce47bff85e2fd57803b676dce4254fef25531219347e070cf32e0892edf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x565bc5ae69cda678c2adf324ce9fd9f428dca2ff509342f7ffec30c5b4827eeb9298aad0152b31d5b43665ebff890967', 16),
                    gmp_init('0x4058101a6dbda08951ff4bc94660556fd95d3ee734f977b939a3862b5ac3df3b54ca2d7ffdf63268a7b34b3ba5880c3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa45b4c8c91746aa054abb76dbfe48fa4ea0896fd5c3b71678d5e2251148a09f20314d8a73ac7475d705af16f12026691', 16),
                    gmp_init('0xc5ee5eafa115e8e54b89a9cfbcf7b95e1016308208e185096ee12c53d164b1c78fd75f1e887a788a902af9e75fdaf34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71c18faf7e9c872f50a7e7735c17157375c53201754806d0743b4b472e48e513c4425780bf087c63c71bb59577188ca9', 16),
                    gmp_init('0xaeea4085eb4acb671eb51079aecec76eb1644c7188256dd17367420e268a27e98a3e4e1e9908fb938bd16eedd4e77f4d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf1d06b58035e6988deee0f971fce11838ecfdc22eb51fab616c1df9e3f4783ffa42146851c91d6d023ec0027526b2679', 16),
                    gmp_init('0x8cb496fd68517103129162d3e9c9bb60f1890009da76f82a69c8c2a1181bfeaaa7591818222a1acb13e475d2aaeed382', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24f089170d8842b00289d3597e13e6fc44662e9a76e026096f5a2761e0ebd11e82565ebf10d31ef4e10e5cc25fc4b872', 16),
                    gmp_init('0x7b10f3c79c14cc643e4d725f9a0259fcd47754fd6b0d1a0f28c0888166b16da19e3648d77cba64ec2c1604d7e0effbe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5305e59104b6d7abcfde1a3e634ddeb12ef15c1216a0d2b53f5e0d74c8944d3b18b9595f7ac8bf47dee9e0da99232bdf', 16),
                    gmp_init('0xe910bc137eb7f0e4b2b76a7b00304be8ead386291cd6644e533b11df762111c4c379e4bb3146cc6d101feddf0a70cb0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5afd62fe7e2b0f0ced2fd673543c67c5690bc7d532371748f3be4c385262163e16a370d6b1407f4ca98923ed3c7ba86', 16),
                    gmp_init('0x43ac052beb69e19096124ede217e14698e87ff3611f00cf1817efd45c35e4107d96bb531bf31b1ffd20e0b83bfe7d6ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa52879db12cd5c6bef536e4cffa55f33208df8816d2515c7b97c77acdb421bdaf1e4f2b51e09457cefd2e4b514d0f99', 16),
                    gmp_init('0xe0c32646d9f67596aa392b407eb9b2ded0d74f33705cc2090b4e7b8acbc0cc57d7054d0218f0e58c60a823972fe4c0e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b84cb59ad5a5d39ce3693a7c028f10179c197d32f31cde8cdcc6133365ad848bedbfebdecad4dbd3d22c02f5ed85ee3', 16),
                    gmp_init('0xe5ca2467f726c1e1402e52b173f7a280175a3a7818bfb69390532147e199addb550e7b3c6a3b09781dfed7d87350b307', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbdae07254d9ab26db96f86400c0fa71f7b2704757018b4d755ae3b91092458779c9b494b6ca925487e391d9d68ce844', 16),
                    gmp_init('0x1fc1f5ab90823594ae1c0c6e07d875a29601bc60929e0d68dbe8056013fa18d14babbc32c17ddbba2f9825b4093507d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdb21f05c0fc08d9d28d47e53592506b6c697751fe1edbbe98e4bdeb8b61b0f060aa7b7d9f82d61a1855da7c6f9e9275', 16),
                    gmp_init('0xb91c9e3249ddf46a8fd4d490f22d40d52dad6c1795686842d01ae8cc7df51ad44882cd220d9995c856c11bbce5713d3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2ad2966b15d9be4d7302756a3639f43a4ea1dd51504e87c153dd44cb6c0c1d12c6a7df868d0942640e03c5b7c95f8b', 16),
                    gmp_init('0xd174591282fc054e8fef5287cc417ac415a57c2742a42142ffcb2f92b084a8119a1024c4062cff6e1b605c2cea37b2ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7302cdb1f485a3e7e1a7821f8c61fa88c5c482ff6e470fbf877ff4e01bf0532b0f996a46ad04f8f728bca075d316d2a6', 16),
                    gmp_init('0xf15282393d77a7af4d89fbf10b0c792d88d562be7c614d2955ff750db6892e004534f0ccd8c5f70d7e7ee5f72e34b559', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8153f17ebc2b7158b70808cfdf622ef1b7233a8b7ecdf663901c98b475daa6660b5ea44d0116cd29223dc040d78f5e34', 16),
                    gmp_init('0x44c6db392aca60e4be1b6c699cb9131ce1e2d4bb0cc476df69151098014a92f429d8f978eb6f41f4b4ee14a1e4290bd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f3605bb78f61ee40ff4cc9975900ca3a622ce6e46fd1a30f03477e91b1123076f64cabdc2904dc87228d276b76c28c8', 16),
                    gmp_init('0xf6da25147ed4e400e009be088016fec27f9582e99aafdbe1687f44536bd339f71e4406a0e0e19d905021b06a0e983866', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63044b4fad190d905254a243d02011234044cde129cdafabbb9936c972919a68b753f1edde541c07f1ff3a34da1cece3', 16),
                    gmp_init('0xd70ae2293bcf325817be8653ad6d6dd3262f0ef7b067845abb55d16cb342120f2187741d3c33a8ac3f36a7015d62c7c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x729d1518ca9a0d5e9d89dcff884b91eaf7fbec638937fe899f0805c38f25a2c418cfdabe8eb09c18c700017857b6b625', 16),
                    gmp_init('0x4503f9442f043ae4f3b75b042fb3ed1635fa73556d304f15986f9d617224b7aa9001cde82941fd29ba208fe58bffd966', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc8729ed98abeb6598e26f91cb2f852c999c65a62701f8356f69bae35016dec7fb6304bc0c70c6f687bf2117a0468dd9', 16),
                    gmp_init('0xd7db88cc94cf95676906b7ce635c8c2ba3bc61a6c9a42a0af7d17dca9b6e3d5fd4c8ebea873f11d3117bb20642162dfe', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb2d1055817cbaa12211905035f4972d7097da395a23096863d8b29dbd08848c2f33a450ad156f761e4bfc2c04905ca71', 16),
                    gmp_init('0x354cd872c3c6cbd2237c0dba3cfd056bf82be8f52e6236c09b475d744ecf1a68e87ab07c6924666fddcebb55753ee324', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a568abfe3700a44e9df1fcdfd624bf0bafe90efe8fd496d26317550377c82a9d2d955589e2e7aebcb66c2663cfa034a', 16),
                    gmp_init('0x79569fb87d0903b5b6349601b3cb37e84d208741b6ec8a84b7b3c8dee8facc2b060ee9e8d02797e1ff64f9ea838be64f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8472b9637604fae7e0182345b2d31bf7616051990850907d546404d46de55f63b19a9fbb285863969695f73575e58cef', 16),
                    gmp_init('0x251467f2c874129442a0b0d6cbb0f7b70fa7cfd617e9d6ccd631e4e97add939f45fb72b75299efe192c2138749b28e0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6cb192cb45548c9f7f61106295d4d6e8864f1238c95832081ff8533bfff181f1344d820a5c002b680d859b4b67bbf60', 16),
                    gmp_init('0xcd4d4767e26e4d87c43ea9d216e6a4b397c4fc8356483d81d383816b2c63c212018c2cbebea379de8347afebd63f2eea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa94cb07b417acc6efcad1de573b122e4990bec9131753e2ff5d115bc2320c788007da251424f5265f3cbed25c2dd943a', 16),
                    gmp_init('0xa76546d4bbf4dcb3db109846397562beedb60b9b08be72803ca7a5717969fb8840fa5182878078db2223f73ab9516d33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc09cb14bbb6524b77fd40b01fd0cb3bf7f1bc1c12188a10d2b2920324083ed1759383be296fbf06dd2fde863e79cb83d', 16),
                    gmp_init('0xb6653c1c4aba48093e12b76051dd37214266f72326b20e709989c1fa3305f7084f2dc913a9a69a65d330997b584c96f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x186d6834241ab8990fde8f0660e6eb6d24d587bc7625eaf9c2c94d2df7a9cdbea8f5a88bc6b8da27f772079d7a92e055', 16),
                    gmp_init('0xa9fba17106c9a0bff88fde20e9d18061d6dccbb347ef924fa81c6ae65151eb4f033a2b4efcea4812293e645ae4c265e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7054c1d608281054f2919be6705fc4b1e72f659090e836b3d7f6684a1a5125fbc2f605e8f31f8563d45f7e147904a7d', 16),
                    gmp_init('0x3cbac09756160acd63a7ebe7aff159733a45bf30c40f7bfa8f0d6d804a6edca0ad231b290d2a2e0baf6cb44ba4cfb68c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d19c787f303289549ed5a2d289d3a4f7b9a656ef246a586ffe0eb17b46f837d16d6f9144b7ed1e2bfc7abb7b3861542', 16),
                    gmp_init('0x6211c6a9781496ce6eb37cc388abc5863835eaffea2b7840538c49bbd3bf86521b30784fb609c245719dd3daab66bccc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x864e323b21a4912aee264ce4dab217e09189ee58a42a506298558ed8eb40935e81a42cb4ac56db28305dc28df82a947d', 16),
                    gmp_init('0x1129d82f2190c4b1a2f6deba5913a0ddc4c2d5ff38976a984c6f4d8f907fd6322e7cba2fd428c8d9031ce2b4316acc55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x529ff0dae8c3b11103f1310f1c5ac1dc6a75bf6fe51d885512fff68f36479d0b627608bdc70f9e783df7bb21a4833e4f', 16),
                    gmp_init('0xb8cf21e81c3368aed3454a0197d3bb0d5b6b16eef7e99005e42c6d006cbfd1623a5f3041639168fb293ca7a2559c8274', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61b6e1bfffce2c633e082091e130879e949fb457a0803ad56fe3d8a9e5b896736fe02a4f6d3901276c01552ca88e537c', 16),
                    gmp_init('0xa5bbd8992ee31219553ac492aff5a2a443c19f3839d795cb813e21105f469a4c669e337573ea0ff74a89246ad9cff015', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf09eba03bffe562379b53d41796aa45e05fa1f25e3f8f6bd90f218d0ad840206ffc8c0bd88ef060f9684c93050295856', 16),
                    gmp_init('0xfb144a63acf26debacfc3e6417e75674e3a43baac3c0b6bd96562bcac831e4f2386af0363c837fa0a99b769b661e6664', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2969126391a548c8a016065d9441f28306db79043b4cbbdd0b44872922ef94a55813dda855e364e1276fc84aa1c4b75', 16),
                    gmp_init('0xe7f2549a56b956797cd6296bd822402e51f358f4d10f70de9ad916586c07e31e316f3dfa856e1f3bff7e9c1155c8f4aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb1833c955e8ab1e100c17c6fb0baff00ec6779b81dc4e605fcdca2f8f5e4ef6f799f9034694df91c9bbbca8f470af50', 16),
                    gmp_init('0xb75b527d4468de4f48bf00e6324ffba5840e2c3c6d523f6869a38e7c8658bbd57c8f1779865e9128b2e79219e73796d0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x83838b511ddd0f0956978ebbece2e50df8b09ef0923b3473d4d06a5331f666fc4392035fc3f49b85f9f5d75b3f943745', 16),
                    gmp_init('0x4c34f592c5a20177f8b944ee10685251b22f9897147bb6e84300b001d582bdfc988451ef20f79db5ce66a52d3944b6d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22ba6ea3b87eac7aa5531d8d9cdeb46e2f4e4e997db885c46abe797af3a460d34e03b5740d35520f304f3cdda81e3f6f', 16),
                    gmp_init('0xccd9d3fd33eb5c34e40ea5b73ab793a707614ae11ae6a2c08c6c825246aa6239ccd3fc0e9714bc2cfa969d6d9266b9f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef43c88db585f9aaa75c686313bb158b384091c16360686971a14daf59bddd98fe4f939018796e4a6fbb9cb14ed1dfd', 16),
                    gmp_init('0x970af005866e9ff61704326e3abbb823613c3c54e3e7207b4bc9ae2f360ef6c0f8831ab8bf655c3c8b4251a9aa4e5db4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x877d672520152c25c34f7e2aeefd1ec443c46fa345d27526e53cc8d72cc74863f890665e9588f2c5869231593ae61a86', 16),
                    gmp_init('0xbe750dfc1edc8d0a115a6b754dbb0fa6e76259b980f380282024697f6f23bbc0c3c6460b36710e57ce502f603a378f9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9beba0e9f6dc8fcaa5dc1fd182197d61fc1c96fae31a40aa5f35ce28773d3e1a530cbacec6c966ed96a72f29fe02b5c9', 16),
                    gmp_init('0xf98a77df0d8174ca2f5bfd4b602bb0b9ab757b3df4a865fab6015d381da3138b536415a7e0d1805b9e7e9464604c13ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb121390096369ef4da15c19ba85fb92603a527223a18c5e158e917eb524bd22ff32480f753f169d697b3f16b686f4b26', 16),
                    gmp_init('0xb364b351d99e6d586d80163021cb89f92722a4c07cb596f7a13d5edbf2e3e79beb89883d5b30032bba2382d684b6dc7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe54446e510422f91799885b3fcb59b904e648568507b13bda78bb7f20f830731087492e06e7494035a536b57a6804ca4', 16),
                    gmp_init('0x7685907d75c424e24cc1ccb9ca141a265b8c6e3153a67039bb866aa5db7f6459b883a82d5bbd6a24dfdb9639a7b9d730', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc899664775d03fa441687d6dc75d816ab28f491e2ba3e1c05902ba61dc73dbd853ab9c6e06f21471ff7a3e4c4e46126a', 16),
                    gmp_init('0xbd233c9a76f72de5a07c4fb2a570b723e5d10314d251b666144fc97c91285a79ad9ff322721b2030bad1db8026cb30f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfaed534bca01cb39501a2a8a14c5da44b9e149b8ea098c58dcf85e58842ad70699fee0ce601d5638fc77e0a55b282142', 16),
                    gmp_init('0x16709359412ade4b48bfcb5e7815023074cf7dfab2e13692297c2792c1ba5278872e47dae4cef636abde81cfd0260696', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52ce3ed3e4e97d19ea287d1ac99e27bbb9e7ba9d8dd2c69f78484f9b49dfb52d15fa6d70816e560ff2e1966e271dec59', 16),
                    gmp_init('0x7a826461e85db143eada6b507f46a1ad30f0c19092a95853802ce195d5c0e59c6da18ddeb15336e110380d8e41929981', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb5a6da01f186b89eb79ebad1b75157fa9d92b584935ce3e9047faa30dd76479b327bf2b15156f30e61ad4b9a1c6dd5c', 16),
                    gmp_init('0x121fd9c6b18a9d16108b72b73f881d0c6730caa01ab11a8c550d6545eefd5f2481fdf0e4417f9085d36b89cdf35e3bc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba344213b87d0cf0027779cbc28fa50f76230a0a1f4a42df1567d1bfe697c2f624f1c469abb5812d4968b265d909c9c', 16),
                    gmp_init('0xce45c3e56f89cded7da7e4a3b2757414aaa3d1897f04f509f3174935d4f99dfd746e6f73da5cc148b5db3d24cb42d758', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfab054b69a48c66d3cd53f6085b6ed582cb00d99a732e4b2aa803ac1e1ca96ea537c99fed97dbd9f733c6c1a3921d6a', 16),
                    gmp_init('0x98f205438d823ffe0c9e2a0c38573a5068d77ba0a8727e92662a1cb5e56df296c4faa9c80108aca6c308d02078b7a77f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x377fc6cf6bfaacb50e968d75a21d398a633dcd6f90f9fd1dcdda91ee39cea8624b0e470c13fa0c6a22bf2a401bf6cdef', 16),
                    gmp_init('0x6200bf4467ec6b154d48656ac650e048bcea46f0c0e6dea084d86472909619b670cc6d87d7dd97131164c094a1f1081a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5424d9d1a2a721bf40055036f72263b53c3b48908d91dd095319481c573f389f43fb347bc61b43fa93d6b4c9cb44d3e1', 16),
                    gmp_init('0xb0aa7e27800310b3c402340123247165237a3d46ff4a361eedd0cc483eced0b665d48922c74ae25d457d4489b570c91e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x228c9e51fed337f6de7e71e6b974258b57d9880c7a172ca443c7147a83f2e4d5bd5b498084aa1e7291db566d2e0d7596', 16),
                    gmp_init('0xc24e75e6aa79c4edd692a2d8c967cf9aef212ca13a05a393787532ff35d53004850869d36885406a06a9c51e267be621', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bc6fd8bf95d28b33f40ec49442e0968de8c968c6912414a5c5750a19a4bca36a1ef3af4623b060cb8f5fddc5077a516', 16),
                    gmp_init('0x333568f03089d5b597ab6db4efce50f378225fc89cc00fedbe3ea99b07eb8b8d592b9498a60166136a4351b5acd1660', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb13320c25d53a4441a63c98f49a156a0fb955dc6d3ed74920e3d9d24c02ff0027845a79c2ed0374f65c43948a8eb3f', 16),
                    gmp_init('0x517e440e566a86fd5ed9a4400bf1a1bbddcc9f5dc8964c176a3f66f0d87d4127c693a1c89b141066e7ddc2d60f9112f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x258d11bcf37d023fe819ad9ad5fbb74fdb0e476fe69f2f7cc59fb5deb162a67baca32b8c0ec18dd4de4b4a6c5d3b5c2c', 16),
                    gmp_init('0x4bb840aba3790d6cb075f78ee8ff03a9d3e6732464b3949fbf7fa21f5bc8c4c2cb562d88da0c24d2ba1b88e9381f5139', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44a835f8d4cc0a15f64a26130ac145a9d3abcdae6485df1fdda3374aebd66a30e2bcfcd69f5bc5b7391527f7d6e3a961', 16),
                    gmp_init('0xee2744eccbb82ed05905e534307fe77941fd98ae7e3613b9b9576291f3fe85922a6e987055f15ff272d35f34fdabee2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99390fdc144d19ae3f0be97e54c462ab6c9002884b31a41547e2e17977dab4c0ca728bd06b5a969dcf74576d1e5b0abe', 16),
                    gmp_init('0x8b6271f3f3994541b515879e07bb079a39e4c690f0a29ef5ce9c2beb00258bf28a6ef60d427bf9191fdc8877cc5cefc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7db9585baf5dc8333ce7e314e1aecd6047919d0df1138eaf1ff3ac7b701067e26337509ca10539513e6ac049820d0703', 16),
                    gmp_init('0x8b5956a4577f56a6c86e3ccd4ea3dfc2ea62275f9510c263d998265f5485c6dd44e4a5ab8161b109b372dc18b781d530', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabfa1b77f098dd2d4dca2c0791bd1c1f41060eafa3ef51d7d9771d16512d5095b1b51bf2d4cb4ac5ed35ec7ea7f3e7be', 16),
                    gmp_init('0xe7c028737ab510cc9e14c16abab381e4cd026f9457f4ad98fd7db7d5cb5a56fa43f6c63a9d9609eecf5b6216476f8c83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee75d25571a676bd995838d3298360cf0332f45bbbc10e5de331e5cd52883c0345f61d92ddeb34c1fa3aacc897001a2d', 16),
                    gmp_init('0xcc7d4315aadc2a446b7733a0fdd03fff48d8d4a130fd697f3b3a979b1787173bcedc9fa410fe86cea6d5b896a6242a84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd38faf31273c52f6c6cd73cd18d335794f564b5886b54c0c2c4778f39aaa8fedac0f7ed79689bfbc7ab09420ff522694', 16),
                    gmp_init('0x93d3d8a06017919255d2b6dd9f9490d76e4a3d0fb17da542a00fe3c6d8dc458673a75c7b970fce9f4e8cad53f90b155', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2d976d9f8d0a7b855704dbb39bd62a3cfbb77cee18ecafe41b0fad1b95450720d50438f8c4efdacbfc276c5f4b1092c', 16),
                    gmp_init('0xdada0b874cf514e4920f0b662dbffdf34fda189d71e5344c5b4dcae14e5e662d65007fe4b8557414b4038a9eef0c179e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd403d6fb1a6fae04c7206a8b4a34e113512c26738033157c7066147e444ff41f774d4aad6f656de8b924f15340aafe7', 16),
                    gmp_init('0xded33417b47cce837da60b55baf9a8ea54c903e971a8f1227aeabef8c97e560cacd4f56fd4099ec7e5c90bb787423323', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52d05365576e7efe99ddbefa723b602521c2074b08aab7385b9081efa749ae3182d7b5c488f993a3ee27cde7f6630583', 16),
                    gmp_init('0x6bb5504a750bfb2787a6d33510cf36363e69871c5f366969198a0d17c5ee4ab8bac6a75fd4e6ff578dbf9449efcd6439', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x402097ab1ee73960816b5efc813586431060eaf431b58e6735179f58e96eef7a606bd3525e3c1c11fc368388a903e8b3', 16),
                    gmp_init('0xf4c3eb68859ffa57d418a5550be3de729c52fbb198cfebc25b585b857ecccb864812f61b733e6f90fb7e67a6cdbf83d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd17298fb66f1fc1e3e19bba62c3a0616d351fb5680217c68579afc98ee98384848f21cad052fa2884f95565c28d96ca9', 16),
                    gmp_init('0xf1bdee26c53f381e08320a82983fb27ad1fd393e0c7d2db416bfbab4460d4f3fa0f566741e745f6351f46d0d3fd9ddac', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1bfd76a030cc3eda11fac541d9210950aaac218b29f24c098d31786b29199be62a4b411943c7549c3cedb737f3cddf3f', 16),
                    gmp_init('0x4bf2143e6fef27c98c49bb4acdfb8100796343d64def5a2f0a18d7a8d34fde05e364a04fd4e9c56307abd76200f30197', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fe7983cbd4eace97e2ff959ac82aa1cd6c2fe4d81ae25f4ae7e1cb4f534aedd0af8313fbcb37f056309727869a2bb56', 16),
                    gmp_init('0xfa23e0b54a605a27bbaeb974faf717fee5c551c7f9bcef590568a87b4fde7b5c850da2a6812fda5fd7b295809a84e277', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ee68336eef50900517df947e7b992ff45abe907dd401c85e08f53216d3573b7d0907ae072527fde501d3093bb2229f9', 16),
                    gmp_init('0x93d72dacd370e6bc10d777d7fb05925619268b954f0fcbf4f1234463f58a09d0fa4c80bd4ce6d5ba148a91629419091c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa26c61d7975da73fe156a68c4a31c37eed64d356d123bbd6c0329f34b529d246e6f4477cd836a67f3d37829a84dd3300', 16),
                    gmp_init('0x35b90f84845285b737c47e293f414924ca6b4c84157c9e25d4ccc9fe32a9370e68a97c17bbd38d76e6bdd42b46256d01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x852a261edb54a98cdd2a758403600bf744c39f4a41effefb37f0753869c00b0cbe6d2f5d46cdb4398c0cb374c0ed9f39', 16),
                    gmp_init('0x93d933e409767aa0ff49fe22d57f9d14433eeaeb5c85da775a9973d69768bdb72eac8ec1da40bb850ea751bea1bb628e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x521b88721e52e407f869aa900b4d34595255f2072ca93d44e9703b6ee792f224aa40e8a61585f15eba958faf51e8eff9', 16),
                    gmp_init('0x9645e44b80c0e3ff594beb8c9593a52ba65562489de59a4cb141871fcf3be78a10e800e633b8dc14d85f1f6fa2cecf68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc50099d0ef18623fac8280228ef1ad2d897f6a26951c9fa421e7ad052df20c3cc606cb7f5d078771d0ff407a8331fabe', 16),
                    gmp_init('0xc9610b4841edbf5309958e7befc877bbc105357eed8a85a59539e1417807eab2112d204933aa8a642871fcce0c1df5b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fcfd59dddf5afc08590d6144a0c71c7d9ddf253e411a10560515b381a04ccf47fc73730a1fbcbbd274e4d05081ac1a6', 16),
                    gmp_init('0x3b75e0e9e8b1c5698dd4e1c16fe41165dd99e65ef05a99e1a62e6466c4b75a17cfb9c03aea68db3dedbe4469a87ac7c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a72a0bd51e0f326e5b41b63832ea377ebc830a92ac7223a8197b57f0d1455bd1583a7648a0611b5a6f256616f1b6ecf', 16),
                    gmp_init('0xa37e39b809e1e3415287f696be2e429f7c86a13a5faf078fd8a1d8e006926e7a4fb3520c1e32bb8dc571ee43fabdf519', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a195767a1abaed426eef8f0899b4e72f93c6925080f0d58632d3edc96308c54d8c65a175c54fb9023fd897a32d6d70', 16),
                    gmp_init('0xc56107da87c766866e5c96e630dbf2d2d1b79b16c2862a93e16cd23beb4ee4604eb189b5318bbb369ffc4aa86b660b8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b113d30d2e0b5d9513be6c9856db1e16a4497c9f14871ee1a8b98485ee9882ea428dca8ff39c452654cb28589b45cfa', 16),
                    gmp_init('0x4835ebbe3b8e1a5f7e5518fcfcf269754ee0b758988b5cf241c8ceae0116a5ff1eaae80b61bf8b167202c3cc9dfdc36b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc23cd1e16b6167d7c1b8175a8e753e188b1f68b2282a24c4a657cdf70d91cfc6af36956b43c10066a11ca67475a8ee8b', 16),
                    gmp_init('0x32541b9e45ac16dcce970a68b0cc91adaca0237883ea503b1686fe6946e239c72187161cfaeed936d958d5e3641e8280', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc39d5942ebb60cb57bdcda5bf28b07bcc893829c1dead97fcd7b6c116767358724731a4ccce9bb795abf12500663cb59', 16),
                    gmp_init('0x24b080e494efdb4f58b94d9d420498c704e72127aa20661ac866de13220b2ee531e42dbd1ddbb463a4f6ff0b2904589a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbcbb763fb045976441d071b0c044d3d3dfd13a97e6d2fa1b3524b32f41729a99e6ccca1bf7d42be429266f16e4fd664', 16),
                    gmp_init('0xe87affff18d159502570017c1e5a73371fe08514afa8d3c08d388c7ace80b0fd7b60a78d23064b4bca6ac38fdfd057a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc35006325ec9b51b8c198d9cb9da248afa27901d00aba599726dd47c7e9432dc6527c28023a878209027ba67c5ebb37e', 16),
                    gmp_init('0x52b23bae223afb1ec1a83f9c8bee9b790868691b62131c842d5bbd2c7266a7386c5b7ee2110e2dbb3727fe88c6f770a0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa79e73cdb31bcb79b81682fa0e4d57ac875a82b402c00b31d23337a1d8be8b31b52dbe4d48ac42b2bc988641044acc65', 16),
                    gmp_init('0xf968aa661801ee82d53ff1b67c98448b213f21acc1c64b5670b3c1a1e5b5a54d363211f5915565341ee8af1914f02364', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e82969438adc0e5357af9c567d54e246abc78b0cccf75e5ad5f3eef1679eb07647b8e1f12420766d206a282ab439af4', 16),
                    gmp_init('0xc21d858a08f455278e46031e440b631686d98037049123ac53f0ed55b94b0e418c52bf5814201865288802d29d59b25e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x641660e56a7542b236a5940525dcbf0401c58337f23758bea5d00cbf3a95bc34c01bbffb08c9f8870acab598a6524a1c', 16),
                    gmp_init('0xad059f17d4ad0fa20d90d4982c650d35763c32a3dba19297b0c9fb5d5224452aa23713e3e939ef55c3cb4e1fae10046b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fa4b4c2bb71f967f85d74567d5e717c2054f902dd288d7d9096bcc7d1534823ef7deb66748f6ead4e696af6d64d2952', 16),
                    gmp_init('0x1a00f5e4d88c54eab18290fad706506f8fc0fb5f62afda6a07e6c196e8aee002f9869c0bb44ad77f58786eaf6b485567', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdea2fc6cc6a043c76c49ec2d0d58052ad7417d796aa89eb43fc044161b45df902e4537ec9d447f60670c49092f0ba3ea', 16),
                    gmp_init('0xaa4767df090c4b8d310a944909c20f42b211acaaa4deabbc6c91b28e4e931564d790cbdcaee6f303b3657483369dfefb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1192874f2e4c139c79babe7bf84481cd9c7299ae016259180670824dee9e24efb1a0220a0ed67e91e6a89cdef320d9de', 16),
                    gmp_init('0x7e12c1e03bdee7b569706132263dcb8ad6732675c94f71b27cae7bccdd120d3f4e402f2d339a0fc94ad1cfff13652f20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3a7eaf25adb162d80a925026cea93e42fd78cf30edab5f09981f6713b4de560e1b741c85017e649c1d9a6fb290f93f5', 16),
                    gmp_init('0x95d3c5eb187cd22ff9fe0b7bdb663efbb069a822134c197820b12f117bcec6a59f53bacd48bfe590f604130bdd67d52b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e95bd455a0f37e59f40ccdca5b23fa68ab4dfb40a95805b3851122c1c694e854a2c4435c1372ed5a746384c627a9091', 16),
                    gmp_init('0x618505f6165cbb78da78ef9a0f38c51562bd5ce02697a76b2ca70a91b6bb4ab9d68adc5d6e7ccd8dd73d78719332bc34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc396cb5f9e41c7a14125007c534663449c29d22e5f2bc26324b8561bd7b1c50df2201be75a14131213fe92c2857aa496', 16),
                    gmp_init('0x990daafab18d5b6c04a03002914f3ac81876a21d8fe02b6c712724d3790a95a7141e859525818cef6dea313fbea81761', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b65f880cc2667bcd6ede259555a40795043736214b7089daaf86c93665bbb78accd0312fc03261e1d06dc049f247aa', 16),
                    gmp_init('0x9dc68fd7f6b54c7e0612a5238099ab36e6cdb511a1952cba16dd0971cd9214119548d56ca46fc779029c51114e45ae5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd39f5bb454584bdc2c66a69a3d31c0de1cd2081354b0f028028e521cfc8720eacc0fe847a7532a49fb22fe3c9c9957e5', 16),
                    gmp_init('0x322fda256436d964d05df7b515585eec1e4f0d63fad7032fed9fefbd5adc82f237fc610d3322ecc60aa8788664c5b27d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c45eb14a668f395ff2641afaef7f538f7793e2a2c91a20b0f575dc24cd36f953aa1fc24860d0e1d47d4b65020d5aefa', 16),
                    gmp_init('0xc2bccfe37e0df43e76a0fa4c2e42dec1ee1fc6ffd4b9250a2cdc784333bca4b91fc25ffc08ebd203f334bb3c4b25642f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b9eb7f31033fbfbb842951166d6f1011b43d5a7f56b206aaf2d6703b4f4ac395d76174e194c40dc6e5eb14dca24b8c', 16),
                    gmp_init('0x30b635985217824772a6fdbbe8db27008f7dc1dddfae6f75a7ec5274f4ed6e4fa71140dc4321db9c23fe690359976b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8841451d66bdd7fe1b04929aab179a998195e5b9705b489d1f50c006747df58fd04d100de54bcb6f3798a97fe88ac617', 16),
                    gmp_init('0xbf4c6cfd9af5ecbea987fd2a2c3155bb97afd007c792c14458bd7eacf8982e759c471c42570dcbc10efba9a0664e195a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3773f0a49288679f88015737a14b52ee0811b15eae7c9a255e4f4fbe8ec2efe1cd5be94d02d0301de3190e5249188326', 16),
                    gmp_init('0x47226bab6a363fc0d64f2abfa79571ee808bf8d3eb51f242dbc28f7cdd2a2f1e669e13c38cffa915d198c9c079291bf3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5b4e8b1d9e9bf4d91470159c993d3a02b13228b1e8a1a2a3db6a4d398f1546be7ad2a60bff7003c63992d2a131e76220', 16),
                    gmp_init('0xc3742094d5476d33bb844df222c746098727088a37a9b579f650285ac8a2265be0781a9d3df1dfe26fcb85e90cd001d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23182077d5a65f8fa8fd9bfeff5968dd4cf3b26f44846763960248a410c02ab79128b78afd28106d747486f772d161f7', 16),
                    gmp_init('0x94c27ee7f50a0e7b98861fea9af3e91d6fef814de2c0d68f7eaccf4868f1c1a5e4231a42576de262f3998de43683a3d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2cbea43fe7a2787778dc88b0f8730f91f5394b6b0b02928efc305241a431cec43dbeb203bac0aa11a834759830e736a', 16),
                    gmp_init('0x7fc0cf364e8b527fc69d7d8cc0e914e6df42265d403d88e7fbafdcd9ced3e58d8b07b4d5e6f7daed73b0844b0f60b45f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x309b53bc5a1954f3df8323ede4a8e452d5dc4ca5de5d25aa0ae618736773eb6a433dccff3fa4a98a0e0b4bf40890acb3', 16),
                    gmp_init('0x169332d565e7831a789a0f12ff008068123d1ad169beb5edd942dbebb3768c1575e2b40a835bc41180232f66a3c6d3ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf570f7523acf3677c36fafab7aab3bc6a2fef7e5a2b18c999970f6083288e4844d173d65fc04630719fa549013d8d437', 16),
                    gmp_init('0x5f7b305fee6899019add0f8a017672f29f4edffe16f818490d9d9fe054a6bded758418531ead55108d5f1f92267c967c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec28b40e45574f4a4882efcf757f4a1767b5ece5a22137d044c92a2c1b939786df3bda0dddc3fd5069d1d94044280e35', 16),
                    gmp_init('0x56c2d74abbb4ecd638fe968c9671dc927696d0a0a8942a8c389f2a297918792259ed42bce96019ccfe3ce212000c153e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1df95ad8a9a643fed2e3d390d81bb31cdd4751d164e8fee025db58fdd9bf27c9beb2fc6709b69e4ea743f9de0ef74d7', 16),
                    gmp_init('0x31b964783169d98505faa47cf6952e6bc91d89db3d51649e16f021ee41d155b4d76f9d79407888c3e990e1590efe1cc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2b20b954cc74bc3755ada68aba94bcc9f2ed456093f59acb562af7782e9017952f307d81829aafe1f98bbd02b09e878', 16),
                    gmp_init('0x8274d3e1cf0587e00c998ad9bf565b4e1d4565dcc38dafd4bc1f354aa18b7e8111509941afc29764b8b1aeb277d356f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83a7ff937ac4ab3cf1b341480efc94a7f53f85471f15da2459d88b53690abc52c9f8359dfc5b3b31c66b2c776c7a75e8', 16),
                    gmp_init('0x2c408a05a813592ab436e70b7d51b288f3cd85dea4450155c13087797685363491fd153f1db539e47d27908962b1b89d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cf98996939eda1b8d4927ef94e0450df2ecf87e3c904a1545b3109fa095066baab9a9ec18804fe00a9740f397fe0a6a', 16),
                    gmp_init('0x317c5e40d3254b892c4c8f547dd8a7f5197f3314f8706055a82b1363a4551cd7fc45c67f62343d7a6d41cf59fe14a022', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3288a7ce8860eedc06ab200205f1954e4114fd8ed0a7e3caf29a31192a5115a5bb10aab8588ace2fa27229d83961548d', 16),
                    gmp_init('0x9e6fd1a056c402f602c8d5888f242ad08f0115c80f38c1a914d3dfaa5de49089dbba6aa3d13695ad17bd7b17e209558f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f32ff958e43357342d20ec03198c1c569c2cdd7f59316f39fba5a1754f13ba8947a67b850e228dad849ef6cc6552951', 16),
                    gmp_init('0x20b74355c979c7d30f8035ac6480589f5f00a1738707efc25e96b5b55a105fe80509eadd987789d974027b3b26f326b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd95232a5b80714dd9f8ba6be22ec731b2b657d422461c8f77f05dabe075603d21b74d8627be36f5915dbec5b81f291a6', 16),
                    gmp_init('0xb36c1c1c2aa70380c6e69fb445620953edab3eda694a30a7b1710e0a3ce86b7c6e43441953d422ad25a646b04daec796', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96bb85ac55e58865b79832b4eacb972b1b992d6f1ca60cafa82f773707d6650067a05f5daf01ca834e8ef7473113d9bd', 16),
                    gmp_init('0x66277ad69a49a87a370aa3a0b8da2f7dfd4362d89e1de57c1c112f6e035f86d1a7751fe8f6c0e34505c9f5eff5729881', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x970349dcd29e6ccc8d09225a7ef12f25a84462ee043f376e280bf1177912c307c419e2db9298c96eecadac3175a97436', 16),
                    gmp_init('0xb15909eb05331ef580c7fd6e785ab3698f553f81bcdc62ee76f1438cc2da4691b225d04c84a0ab6439aa55beba91bd66', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4cbf6414b97c0053017faf5418406ee84bf10cfbaba22d8ce867df85f30671a0e90f22663ba5812809da59b0d9a0d716', 16),
                    gmp_init('0x71b00e3d8ec66837f83a3767e03baebbbffe106afea4fa162fe0520728a501be2599843f80745095516090d9b0228bd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c5de2b2ce4a1ea66e2759e65cae904e064a173bb62503394713f3bbd151dea33e401684fc8cb717f0e288587503e42c', 16),
                    gmp_init('0x48c7f4e4496c9231a7b77cd59dd976583b25a36aaf4234bada93c00b7474a19ea221c788494c19dfd278c2feeb52ba01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfabdeca051c058f4f47609edf8f2c6a4ee083594b8ec1ae69ed3a633fea2227425a084092f6a490d4ab925744c25596c', 16),
                    gmp_init('0x488601d76bd6cacec00be40628aeb3db7fb8d3ce5c043308b7f38876a2a80da378a0041df90238d08d60243843f8483b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ff62db51dc44908fd349b000ea24159749e13094ee5b904b8708e5149cc02693f28634c98f8dc8449259bb755e88090', 16),
                    gmp_init('0x6a88b3b1682b7777b2bdd947110afe38d0a568c9f7e3fa56cb11a4c52f4d160fd3894bd36b23ba54ca20f7f7d2b2d177', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebe4307b46d062397138dc71e3a2d1a6824e80e4ebbc0f6eea92fb09b05b0c7b86b975656402816822e5dc3aae6a9620', 16),
                    gmp_init('0xbae8e6451905f5cc21b3dcac15905e783580dce7fba8fff0d008062b74400c6a51d10c05ec54be9b6a98502002a62be2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe631bd49c93e68ee3f8baee4ba323c223959f572111955f928bd5c696d943d4c6d8d60e7adba26c558ec8bb8ee7a22c9', 16),
                    gmp_init('0xc2247b85b44ccee5b1d74dcb01544bae4d7e56cb7c6781e45210fac5d4ac55101500dd253f0480ab7cfe8f76002cc1f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeaba3fe7fc36dac068ef1ae2d0b967b3a5a1535d32c514b1968c98cfd303b4ae47ad4f4de561266d59e7e3e6e453a00c', 16),
                    gmp_init('0x61ea9b8edb10198527db54892eea7c5030871c8fd0270d6964647cec92a5aa02df9074fb8d4956b63cb002a8d2fec6b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3496fa5956f0ad634e21be5c75bf275acb45c92e07dc8d2d6ba45d20caff7c212459cbb47f1b473882a1d5a3a9cc302c', 16),
                    gmp_init('0xc1b79b2546f7b728109e263556fa9723700a3c773dc9f8f4f18e1848489e45f275f60e806d14096ca1b8429e1acbf606', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fe125f13f9a6369271fd0bf7391433c70ad03397d8e491bac0c9e9f2492239ff3652262a46f5811c2a9ca179304cbf', 16),
                    gmp_init('0x68c499a7127dec037213ac1dfc8e5cc1bf877c84913f5f06b990fd5b417c09d7bcf05d016e9b7a034b20fe64fa6aa293', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37e79f1e6330ed74c10aff9b39fab3f9c3ca089bb47e39342d1ab9bf46146acee6d84110e28fbc3ea72ed722c599dfd0', 16),
                    gmp_init('0x31ba087ebd54c03f67259f9863e1e3bd9f60a90e0e28b93aaf54fc8f69a280148fe4936cd657db1b2f16310040c26861', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd37f8da4e5d364b1b33e418e64af8e44c3844d0eb45a0b6f0fe662bf4fe5301cdab7045b6ecdc8c4b7c2a23590464b2d', 16),
                    gmp_init('0x6f5ada3644e31bfc07dde5a27763aa57adab6bd78780b1b2227fcde0944e77f32b790a7250851bf89b8f6f7c0e2002e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c2535ca3d2b322142f16577d3192f32761a0f88148718b88d74ab8391c6cd98c5dc5cf1266ce4a1481b918ec2faebc0', 16),
                    gmp_init('0x37e465716ef06145b775ccd1fc4c3f7c6836bafd805981d29c7fe20f7e1f3b710b4a6334e5ddbf2b07e9f6f04b6cf871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x404d9aec599317d17ad0c2dbb7e9788b72c4ec24a639a312225ef28672188930f8c6c5dfc30f98e4bfb24177e4094860', 16),
                    gmp_init('0x7e41c7ae10b52c8a6ba68f82a13ecdd942f3d6b981fcb98fc17aebccac7eb65ff38548ef073ae5236881e1fb22588145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x386b142cfd24f6cd80a77439aefd9ed88ed89269c6935be518d33e9ff771bace1cb06e46ba22cf0a517e228e8c3a1261', 16),
                    gmp_init('0xc664124b73854a9bf5adadfe80b166b97f71402f2dea3048c2abe5d18d4cb57589a21b80d5e12f25794beaa34645e6c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb53936a8b2c39790e6e2651fc09210bfe225f28e7b0bac0d8f3bf34a2128997c017ee605eed61a49ff36757b23710977', 16),
                    gmp_init('0xb3fc1aaad592e983109a956beab417e8b73bf2e6d986a20e15527e91daa7a3d25578ec0cb06ca9e9c7874b275caf78c2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc948a00201213dd76e9ff806fbce159bb55cfe229ca255afee5c4ca048a8029b1b709e8f93f78a5054c5129722c317df', 16),
                    gmp_init('0xb1415ce2588cf0a0478a56ade81c6ded58f7d1d1edbbc83bf7c553016c9e06d934c95370837263de79c6ee578032ae22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae9adc82729ffbb3f27ced75107c594fa8a6727145734c83329181eecf9f30812382e29088cf9e18aec45ccb413a8a58', 16),
                    gmp_init('0x8ee10e1971dc55c22125bbc17be96d9393b957f7fd7298e30e4deffe1fe3fcf4ee5dff54651bf9dc687ae5d12cc6ec7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3293eb4819c95931df89a995ed22a5564711a0820afafb505068eb04c31f23a82d176f734a3d5a1121dc7a1c9d4a1ab2', 16),
                    gmp_init('0xefe040611468e8278e58405104848a48e6349ad16900ea494b8e2d343eafe092bd74716206618e9ab468f2b2dc82bba6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4830960657fa72436a16db005b1a7dba3292189407fb720c229564b9c38421124c9a5a4d463658e46d0f9e0b16c1139', 16),
                    gmp_init('0x873ef4e5bf6cf2b60c0656d3896396365ea640ee2b296e0c7538bc1ecd220ccb2d58c9b981b17693a67f21b37959780d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb1f1d70982cc975da90d2b4531f0d6b18f187b8f482594b2f9ae79dd445e26e8f519646b48063efe6310d8dc0657e3', 16),
                    gmp_init('0xb041a45a8fc9a4df0eab96e83308fbbdb11aef60f4f0ad07255927d1772ffad196dabd776218eda1d0e3a74511730be5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d156042b8b23df02aeb8ac1fd375fe13ec9296569b3656a059e33c6293d535670e961b30dc250fe6bf445dd4292e87b', 16),
                    gmp_init('0x13707232dfe4a37c7f0e0302b636688dc4b5c5647ec1deb50dcbbfe53e8dba59e39ee93e1361becc4a3e00faafd610b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa7caeadc5cad2ea06e670f0ed8aed3c09ab4a1b87c7a0b4830956bd893380d8058bc9c472c6b8c4b7ca59b1d5e479de', 16),
                    gmp_init('0x3c63d9d310e110647b23cd7588e6b552edefb791345ebb357cf7eb26d1628697fad6ac63df883caca069d1a4f5e2f747', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4453057befd03ed81f949fb7c52e34333f9f930b5af3142e0d8528fd0d12acd793782dc4859911cd9e515bb66f04b220', 16),
                    gmp_init('0xd54bd81a8f1b51e6067887da1580c122757c708073b415fb7fce87f6aaa5f5c8a57211b384a474970790051e93bf6651', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x382402b5f9f0a40f0110d0c7bd0ae64d4f04c16e411b543204e65620a296f55cc71e8fb65fb91f0669b892c9af779842', 16),
                    gmp_init('0xec05cf1d628d6924cd5e06b4397f79bdc971ceac8302d4705747bd712983e10a3a0aee175c0c74980f7d21c0f884dd27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xacc641888506c5c6264adb346c6857e1ece72e8e23dc79dfb9e47c04a569f9b6ceefd3d58bcfb5b7c1a4d655a5bbb251', 16),
                    gmp_init('0x8d05b3084a25ca4bdf4c02b71c5ff2b9cce69281fcbe9eed8b92f734032a55309285f19a57e9f6a3c848f5c6a9a85a1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x850e872d449a48880c59c5a493ad59385d5ca08e7d4ab30d9212231eabf88d50ac3f1469ec6dcb01c62e26d4733ed834', 16),
                    gmp_init('0x778b39d7afff1df6e43946edee01c7aec2bcc041e66fd696619b354436abadf7a0d481df19ddd04383231ba889272015', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62efda0435c67a1ada71820ff5aeb12a3cd195cb3a6b7049dd7ba719c0227197036fc53458763080491c40c653603d23', 16),
                    gmp_init('0x51ecb245772545284068dd440dd7e64969803e0a64bb26551ee1183a0180dbc429385d834a21fe4159449b059b16881', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0edd9fa0bf6e9486c35afc7940c3f108b0ac5a4f8651a425516b05ebb5178087ebd10e505fdfa4e6eb0ae9c102759d1', 16),
                    gmp_init('0xc417d53705f7d058c678daaac10bd0bbf960e2cce76cee2a8ff9934b2406c72e10a13df78a17b2bc5d7b0a11ba69d4bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadc97405631cc2e9fa1a970a83e0b819104ebc25ca533818db41da5813e33eef2810883029af120a404b91287adde5f4', 16),
                    gmp_init('0x84cc949e93f9ab42f032b5dec66c17fa72b2daa9d87d82e60717d23792ab6a2b657101f169b53276da4434a77aeb50fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc81ae4c7ab484737c6fd034ab5291f28c5132571108d614cb7780e32d4779e9466743c3fa3c328935d9083a96c3deff4', 16),
                    gmp_init('0x3880fc4ca9092b6383e86a467f62f7608fe70d617e3d16a5d665d7342d2154088713f8eb43b860699187b0738b123344', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x38174a006bfcf21e5f5449e75c7a9ba185dfb3833007a48289acc4c0b1666eaa1323feffba0f8b3d110162f2968b4a5f', 16),
                    gmp_init('0xd637fbf692ee7c2ee0bcd7af2055ee909b795d801605976de6091c183a45ad1713f390d740cb718b9f7dc2544f0474fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ba313360a646b458ab2879a6d21774d2cf020b2d1b35b4c6b73872901bfa966c023d04739dfd202e5ba6e36081e0413', 16),
                    gmp_init('0x1e5459d8d41652636aa657567cbc0ac22bc75506b3fe075a6f15678353689b12a3db5b897262060ef636f092ebb784ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd80de9fe830cfffa3803705b23ad2f1b71473f1c1e2abca0c142938a597c62afbdd75153a8b9881bff1c0bf7fa31c8d', 16),
                    gmp_init('0xeb5b38a8f3406e2f50ee8e604a94647ab856468ff470ded8462759f16fd2c4902500985515407260732e194b1f6f63df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60ca55ec431b6ba52370bd7f01981477c33f8e3709d26ed68d8f85cfb60aa6367d7bcf321eeaee8dc48fa7e68d62b9ec', 16),
                    gmp_init('0xba1290dff2c5d340ac9e64d6badb568e7cb6f6362e08101736735b379a10114a5eadd7200bd1d1fd7cf0bb818d1f469', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5db612a10c3999293968f45f64fbec0bcbcdef5b3e024b4c3d70622378decb7263d639a2002fddfd0b727de9c7e761a1', 16),
                    gmp_init('0x322ab1d768cbe962f62f2c1b5e0c8eab9ff5ed208cc2e576bb237674d99f6e4ff5903f6919c92a9dddc8f122ea12873c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x930041517f601ce34abaa7fa2efd4256df4300fe0934c3875c64adcb89a5a32aea8392fbbf890f33b5fa0f10c8d8d4a2', 16),
                    gmp_init('0x5efc7c8864379131d8c2214b30b55c0125a58c89c6e96d4a937f96967aba7271acd10f229e010ef42e8e067529917cf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7f0de6808998593b9807d76120cad15963084e9cfcc3b8edb3737e42fe06e11209da30d2de95c08f264ce3db9151a2c', 16),
                    gmp_init('0x7527e8c43d9686093a451382034c9c0a8e4303766ce1ae053186cff450b44d62a769bf6b7857cebad9820666e91568f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x351ee7eb76e173a0c30304ed65b49a5e3fe8abd7c7f3f9f4b93cc5c640fc9ac99ab065ab7147e0f1f6eb8b81953efc9b', 16),
                    gmp_init('0xf7dd96d0955da289e6602f60ec9f159e91420b17a78f713f9dbcc12ca15352362d36903b7b8fe66709f5a25ea2137d26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43e70927c6ba0e66933a001b6cc839996e32cae9d2d010271ae6db0d959f5549eb4fba2c230e138e495b70c343d99860', 16),
                    gmp_init('0x3fa457783a5c49af70bac8af2933b718d762e6fb7fb1933c22818bc7c45e7a25983ba9c1aa657c7198925f1c1dc5cb12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ce66ee79f49f4e3fde4053bcb945fd98823b6b31084238ccd2740403adebf46c15963a981d3d17e66e6ceed8958832d', 16),
                    gmp_init('0xfbb472b934ea49f5c2af3fad37970e3c95fabe9f1a85e14c09f533896efb3f2ee2e17b97176aebfebe47370c91ef051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb062d850a7f520008582e45daf8b2bed0d14122fb8a55606b846b0ffb05fb60fcd6890a0dbbe5433726149a446dfb84d', 16),
                    gmp_init('0xd8d5f464b76b7ffba09a50f69a471e7f51b6f9764274ad149168d949fbf714cc2b4e093f702367124d8280bf90ebcc97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa901806f1975e15c244586582d248ba57d2fbf7b1238e804cad7a2d5f03b86386090f32e83a8cbf428f821578d2cff30', 16),
                    gmp_init('0x47738589cf62411aa0f8ea5be5804dcda54009fd7c9bea84f3e6894c587eacb133fe6cc1b2fb39827b6fc61241c9b1f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd513066ada2be0ff895bafa66dc597020954adbffc658b3e2c5fe1eeb38d23dbd2a7657cdf31a65e2cbd19bc7f52c70', 16),
                    gmp_init('0xf8952ddb280cd163652726c057765c2cc3e7e85832c4f5f397576540e8af14da9aa08b3ff26a9cccf3f85e601f4d0c3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6a226b8954d2fb7e093a039ad9ee67122a6c77bff3ef16462ab1a07e5531bfeb71dd36872c30887e14a5db4c5b807c4', 16),
                    gmp_init('0x425b261e6457bcef4f2107e46937acd43f6505a64a5c0b401e67a0a7fcc064b5baa9b814048cca143a08db41bfbe79c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c4591e428ca9aff9105fe5f9f0f532f6952584c24e82f018991bc2cdb73dd6020997b9d4f682384b9d14fa316ebeddb', 16),
                    gmp_init('0xb9fc25b02a75fccd1abe78a9b8ac562fe37783ed6110253ad797439137e023a65dfbe98c16591c3f178842116e6dfe89', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbe0e98a044cff24ca367d78805216d7a760aca367726e5728f1ca0092244896fb6809115caeb77c58fad0c67e3667565', 16),
                    gmp_init('0x59b93f2961f862be9b9c992356515f408eda59498a7187e0da5422de736ba12c0278f9c88fdcf0e2828913588aef73c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4468d9524a6a53785bb712601c5bea9c327edeb42e52691e4eb51467e044fd22a66c18837d0cfba9ef638f1cebb0725f', 16),
                    gmp_init('0x4fc0bfe0671c2089507c13ef992c19981088d3c43f2562ff3399671072bbd3945c9be610bf0c2af34bf303f506dfbcdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b08c5c88e5490831d6b3010f624ff1430b80441bd058698c51117d545fb94453fae7955f24acf879b5730ce02394c3', 16),
                    gmp_init('0x1a7f00a9b15dcf889cddffb93eaafa5553d5a3aee6529c6297785233038e1cdd286bea76fac8b759b65c61a1e3816ae3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x164bd7bd0339428012f250796b080144594cf12d516936d2312a7ef1541e0e409a2795589d24e4948d58dd024d6785f5', 16),
                    gmp_init('0x653c512ee8682a031817ddf8912ca6defb99537837f5d76cae2a621d912115f8c19bb89edbdde05495d4a8134daea8e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf30aa4d15ed5886347230dac95fde087d5b65692498273bd504e5476f8ef35e72db47e9a7ec4cdc9e429ac28a0b71018', 16),
                    gmp_init('0xb964e1caf5ce3e155503a9e462d92e9cbbce822d720487e2a3492a4e4073713f762d9d3e910a8385c3c54667c3ac84d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19e3c3382d99e485e0f4eb63eb7bd21e2213f221ee9f2ff12117c37984a4ff6d2bf2ca3a9a7cef94419ec5622607954c', 16),
                    gmp_init('0xdee318d9b3b81ffe80c10c870017ac467c08188dfdde05831403634c9a49d17a7e31a7c66b3e9a5dbb5498b5c87b975d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x620d1efbc281706d310eb8ec0da57151986ee3b03cf1d2339cf8dcb3d68119d95fa5c9ef015f545afe4f5067ddc3bf48', 16),
                    gmp_init('0xbd88a34de4ac6c7e64cab05ff5ae0d762efc8f7d4b24120b980368845256321c3755806e8e0dc9128e8ace26984e975f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe8c0a0e548d130b18438cbf3a521350a150e9dd62576aba67f2cd1360322c8531c5112da0f44453d293b8036793fc6a9', 16),
                    gmp_init('0xe2adbb833c01ddbcb40116f71676fa3d3d81b83becc7c57fe20393a0e1e84102b95e0e4d5f1263826674834d61e660aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52cf50afdd9578994e1b0c3f87e9a5727ff2c33f7f32c1001f0ccf53db38e8efd4dd5e4eead9d4dc863f3a7d93986ee8', 16),
                    gmp_init('0xfd8247fb87bbc2107c3b5903dce7197cb4fed323bb614574d941c5e27d3c5e130f1dca1a5871e5242d49e855138c50b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae89e64a595291a1f3ceb7065ae867aae154ece65cf1308daa1b9ceb00634b39ae70d102e9cc0f2187b0448fba19cb43', 16),
                    gmp_init('0xb017ce94668ad005d2a5ddfef2e58ba7d87d649f2b760dd91a483dfb9133053fc6a8276117f3b52d9273f217a6b6c7db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9a96f21b3d56d7cda13867daaf184a67f5616dd324d23c42ac6b35d66b40198e66295dadf891b102e5f55f2133b72b7', 16),
                    gmp_init('0x16440b29ac3385ea4b92279c3d6f03a62d65953822a491817489de5157b90d47d4087b7e0e44505c08d294f0565b92bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e28d19a9ed669f932be396dea9080e8cb7d5be46c2a46b33e03a15d1a0576cb23859bdfa7430b52f9eeb6d19dc6c963', 16),
                    gmp_init('0xb3e37ec5755d6a47db5c6a4b95dc252c56d9d591a7c863cfc1ef8e7ff3cec6477162543afb3573accc3595f1e2c0ba9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x345e3e6a726cbccac7f5b10e1b1ffa5494af20c8cfa271702ad9fa20d867f21f9efa7254a3c7cd6eaa34e82c7a855317', 16),
                    gmp_init('0xfb192bac3dfb40b49f098ed3c061a43a0dd53feb58420cf2acb5298c75429bbdb953af0f0cfdc87795f970ef566255c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc48c9b30f11a443c79545741b90059b18c8078d4613d3a2ccf8279d7c08d8ada0b1cc34a9a5fc6c258b4dafb4c08a82d', 16),
                    gmp_init('0xcc1b5edbf56b5a67932f6ddf4b3cc95fa12734e94a7c4d0082751acacce509dda4a185a0fd4476b5a7fd23397b7227a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x570fd825d1510022f398a26bc547cf871b7fec782bc4a90055b6a2b049f6369366198683eefac81cbc7ff79d446ed595', 16),
                    gmp_init('0x3314a0deb386ee0686f1c1d5787028c4d87e80f496d3f09120f35e0badc450068bf5fa27b2241408974c38f6f4b66658', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xefc23d8bb6403d8f6feb14eb9e53d17d568c2f8bc12e5467eceef53133f0c368da3cb33b8e32f84653dca6a695ddd724', 16),
                    gmp_init('0x65e4ee35380a0d133f5d0995bf01863252f38699bc4d1a9d5a09b405e1c86c06c8d03cf8afb7b2b737a92437589533ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc2e8dc6423a8542e6536334885677c971cfd5a89051ef97963135ea8ada5b429cd6b90d27132b93941b89936344ecc', 16),
                    gmp_init('0x55cd17c9ca2c7d03ca03493a2158be0674469de28de39b2c7af8de1b348e65bc635ea24505c0ac035f271304c85940e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x272ea4621dd7d37d4b8ff99141618540c54830f2a88f8a53e5f66e93a2f537267937b26e4e01545b632b7146f597c3a6', 16),
                    gmp_init('0xf82758338c3af404703da03f9d7b86730e22b743f00a94bab46eeece7c7ed067dc91ce692e2e406b87b989ae65d404b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e65813d3b8fe86c4f92c529b25e8414d8797ac9bdf875328dea2ec944ba990942a62f965b982d059781202b2d6eaec', 16),
                    gmp_init('0xd0345c845e45862968056584d527421376f4bea22af1a317841ac509d7718a4055cce42faa20b58506a8e98520352cdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8097f0afce4bd10a3bdeb7095ca91db5e4a7cfe1138b73a8e88564cf1596ae607e29d3edf0a117d1835ecf064069b93', 16),
                    gmp_init('0x7b5afbdf66745c2132970c605e88a9c035a32ec875bee35435732419668d35c0c12fb3ef5b40f194773fb2b072b8e87d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30ad1953965da91a827d9bf9b93365e77026c1f3ddf0c20dd7db9954388c4035c9ced9194dda65fbf8baa4ddff9adf92', 16),
                    gmp_init('0x9320e2549db90343e557c8a2fad416ac9e74eb4b8ada7f32eb9aeef7de282ea9188835554774083f1e38c94b4a9f49fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d5a7c2a7859aa006ca27c8a05f9e83071d87d29798a0511f2f62923a18872fb98a2d71b591b018f7e60582d07bd4728', 16),
                    gmp_init('0xcf36264a365dd6228f70eb888486d0621703943ab59fa8b1ee9132431c6c9bd947521bbfec5f938bdddfbd16e9103d4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x293e65bb6cbeaded77ea714ed1d076758e2f0fb1e34f249dd8f75995dcd021e6c101bb76bb93d70e455aa8c77f4e3830', 16),
                    gmp_init('0xd15647dd3b8ffa9d73c0d21b74f7e90b51679bef8cd8349b303a0852b308269dd21cea409102a44a9e9a7a5503253e7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd495dd4d4f1cd7fc9cd64a09f7269bd4c8fb7e37500b8d0636f23eb929149153cdb8f78be5fb9929815eda39d9a5b8de', 16),
                    gmp_init('0xa4c225c1137d7eb9684460df228db3c55d208294435efb89e3501d3debe40b0b2a3aa63eff2dbab4e2ada4d1389ec5de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf9a48b6884a671975958fb11faf2ffe18dc09d8345d6bf38a474b0c4c5caf511c33b4009bc6d23f6bc85b2167f4fede0', 16),
                    gmp_init('0xb40fd5ee9a620fc0534fde072f5d75187a572deadf29cbb471c94683d49b8879f3b3131adcd14a440b787bf21021b4d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4aa9715a46e2db86e7576cb9f34e6a13e82dae6f7f34f65b8ff04c73a286a88c66dae9d5ebe136916492d54cd1fffbd4', 16),
                    gmp_init('0x8435af5a56f7134503bf824a3774534e685f79724f4ca275cc9b880073db4b0ba0dfbe959ab07e63ad0f76089762ccd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbd27cf39151976817b9ff5e455b7b65fa7b0850cd8a8169e8c8d4e1982f75aed7a033869d7275d89e2b01baf20830cb', 16),
                    gmp_init('0x9759d2c5b0817d0595fe4be142a0b57c09ee191961e0ebb59a41b985b07dfd47b0a68567238b746bfea1bfa287ca16ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1dc51fb2483ad3f99c3becb095a5790e71c519ff715160821362d1e9af0327256e013469e9f8c394837a96d6388f082', 16),
                    gmp_init('0xcb8363d0b217396774eb36c99235bc3045c11f82c9da4df3758188fc84d7e31917a1a81b5a461b5f4dc918938d1c1ca1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38e0009335e507a8b61420d249e905b2b41b4eebbe8784d282188f4a8daedce6740d92fdb2ad351fb0cb23d4de01436d', 16),
                    gmp_init('0xb09d4bb6773ffc7543e751e81c6cd34bebd9f2f627bb17d05a0fb44bd4a3681cea2630615096423d45c552d061305c6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ebed49513f5f9efb6e09512bb84aaf043bf57df4fffe4f61dfe4c934f080252a2279ea89c9d713121e237758fe76bc0', 16),
                    gmp_init('0xa1d34647a71e0fd3e9b1ce9655f226b885339816db570219420d2453092fe4a2e97f0edf1fe010c5b36f13da7b0ff7a6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6d76746dd68d92e4a447eced1c1935f4d255a09c5d4bf0f8fdebb8153ad0287fae6588c1b5600f5f65b36f1e752660ab', 16),
                    gmp_init('0xc1179ca4eece0e404ed54599f8781fe27652bc9a9d6a90ae6ad8f5752e602e170f87c76389c27dfd2395ecdf66ec7670', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbeb158a9527373f3c059febaa864bb3d28bf7f98bba457392877cd32bb56a2e3cd2745002eeac709d8154229df48b31d', 16),
                    gmp_init('0x70a55c44815de3bb0354ef339c4ffaa42cf2dc6c7b341a567baea94d329ef247b6e411e74e9863423916d475c7ed39e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf12ee3a798592977d2ffff8a658097a42d79f9abf44385e0a83b4a3c86f76be6d75ffacd7f46b59b633a14b90cab667d', 16),
                    gmp_init('0xd8b0222be4a2dc2c6d17dfb86593efa8327c3d27f0a3395b2001137eae1c91399a9f5262f65f2bbe8a3270c624634a96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81d32de315e4277c9afc5f6bb2f24589436bc1024e4a498afb21392f808d6876eb72c69d50f6ae1eac347d1e157beccb', 16),
                    gmp_init('0xdedbe61341dd161f4dd8018bb28392933338a98b26172c3f930019891e20887c084789cb3a4ddf8b96fc923df4a50221', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6af8340d732c89edc88424585ac214b329ccfff1927658d607073193feac8bd4d1dde1131d26f4911ba7188a81394ce', 16),
                    gmp_init('0x7f5b243e8850e7217e8e20f807d37c993efb1ec483124b08bf460c72f1e53560fdc96147280ebe5e94e6edd1fe3377f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33a55901f41a6bf3de0d655add5d9a60ebcf3d69e09dd28da4bacbcaf392079e750d7b5feecaa189ee8d61ebdd206408', 16),
                    gmp_init('0xe0939ff50dfef050ad86611cd41a08cbaad854617d02f7ef3140e5fb8f26fec5b8f315f58ed4df1ac26b854b9b9b338d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0ffc57c0b3a2f05defbb92473154092b01bacabd49534520a888c78fbcf9f1271e356db15e6c5739ff1bb28ac8814f1', 16),
                    gmp_init('0x5cd9ce964a1ef2fbae333da73d914c782598230e64938c77037ec1c71319553cbd6831e3dc190246497d94898a1b0cc6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8af783f112a44fcf8aa148bc775acae783f67a0195ea0c2b36a3c56f922f18d63bd93b4ee5f94feb36a9aff58242bc04', 16),
                    gmp_init('0x681e7a5460088617f30d04dbfb7e55a7e5d65c0c72944e76090bdf5470418d36e685cfc9421ab1608082f9371007a35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6cb258b51793ed43236936054660caccfb7dda553cfef08e0e30944e6eb913919a4c667747538bc0cc8085c7e9d944f', 16),
                    gmp_init('0xd884dbd26b7d9e8996a4cccf81b423e559126b6919d0d254aa1493a97b77f79cbdc75bcb95ac7e7f1511ed318186172b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f485da2105d46fbc49b6fc646ee036ffb2dbf83da67043bd8ecf9ee0c1e79e9410d1b789e59a2693649cb85a9e597d3', 16),
                    gmp_init('0x2c0aa5e9370196ae0269cd6f702403ce46a8bd05e1e06084a45f61b5437da4666cd32a2c761e45d678b661e24c8418d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3493c6666298d208e47514c390f831dbc1fb2b25b5e0bcec8a65be3979aa40de707dcf4d5dcfc91026353171de571c6', 16),
                    gmp_init('0x12112cfee18690d9aff2f9cfe367d6b5d9acef27d52fb88b0476aa17d0d4619c2276c23b0ea6c894275ff0758dd4f504', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe07ca351b0917265529425478080eb24730a8253dbd7a23e224488d76bed6d171fc24ceefac8e5d336b8df6f483cb0', 16),
                    gmp_init('0x920827ab34633f2bf1fbce090a6ebfdc7c92e5f0aa00c2750fdd98cd11f1907d3ffd663ea65e85ab9787d4bfd024bbd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x384e93a0ef95745070b1337f6d60dc70c44bac8a061feab159f65a0c99896acfe66d280b9f0394867834dd92fde2cdd7', 16),
                    gmp_init('0x332ac49d3ebd39c68535e17c69c0337241b81342e01bd48ec1ea8c428bc6e385c2bbe12cc1deef98d9bab691dbc6e44e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3fb6bd1b9d10e4be693e4cd84e2335e4acf08809ebe51689f8b4ca0c242ea7d21745f11ae83a5eec49e62247bd9f8e2', 16),
                    gmp_init('0x4fe24ab9cca5f99f96852a3bfb0c90d9e6a7dc9013fdea8823ce7dae34a110da8f189cf870e048abcf70f90e078e0941', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0716d9130ce27cfaa6dcf18ac3ca3ea6d5d30d62f43be5422310710528bb7f5da7a1041372b974b3b1264eb51ca0d0d', 16),
                    gmp_init('0x6783c2c3bf77e1387a4245468faa7150c20243a913120807918a94a4534d15245c6749c3fb9108aa459d02e83876d11f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf23c10b4637ee9430231423bc46da385aee309abd12c0f3a8a1646fe51a3599f6e668ac4932b516d35b2e4383f385d2b', 16),
                    gmp_init('0xc425de168de7ac781e8c72ad267bb3fdee94bf701f2d8179af084771daad7d1d9ed447e3d45f6553c0bc215d22248e00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78930b41340b38d144f74473cc82bd11b74274b3c30838612857a93b9a93f60ccaf7ce38eb890170d4706a5fe4cf3516', 16),
                    gmp_init('0xf2323519eddb9436aaa97f0667d42dbfb9e695bc567d8d9ba885d8566df4dc5f624d92a867b7c1af4d3132d2005b8520', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92ba26a4d1335fbe4cac2455242a6fe4a3b2bd18684c6514ec5d8b89adcedda53c16c20eed232d4a42a4d006d20b2e50', 16),
                    gmp_init('0x6882255959b0725bdc239d81bc6268ffec9b221971a55c70acb2dee8b5bfb62763dc6efa890424019061f71617100b52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d195d95cf138aa2dcdd9894a7cc10dc9d2afd1805ea7cf2ed554f1133a30e90e5de85083e9e6a1348afd672c8a9e3d9', 16),
                    gmp_init('0x3ba9215d84d1de322c7caa846b2febb28b615c3f7d0a0c2ba00691efb2daaf5242e73f82dd004870fdeae586bad8b45e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf4af30bd1f0a3e69a5d936633c056b1656aa87dc37cb95bd23fba2d4de1df0c89638528a789df53da52e57f00ad744d', 16),
                    gmp_init('0x6ceb6b5509d2eef3de88dbd7d3745d7f2d07dbc728293c5367b886af29469ab47ed2ff2568eb0b656ab012fef98152da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x681186267f6f5e0dc271303d4793ebd0218418f4638f424595e8c3aed7d94aaaaf08e473656c4d027f8f4c98437f4a86', 16),
                    gmp_init('0x87f9adbfba95b3ea031f88fade23a890eb19a427e680559436e18e1eee6198ada9c6dc8864178f7b5d8b08a745439b36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c8a0ab598eb8f0780d32ce6458c1a60c0983027ea00fae147e73c8a162352fd4f3a0f55f9b84c603ea12cfebd0a33bf', 16),
                    gmp_init('0x2047d9a33c8f067360f441db5432ec9233fdca2892664d7e81d8e136a35059f1e8cc6419c22fbbd7abbcb2b143e90d42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf88a1c9e3e37c75efcbc54bfba9893675dd16c462b3099221ee1996a74e886b4cb54c291080e1ce512d469071c013803', 16),
                    gmp_init('0x57d053eb159c9cf0c5c41de59b813ffc7d59efcf4a8d25076bef1866181d536c9fc3c24f50af35ed31e2341d9ef4532', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfee97f8d093088dbc4a715f1ef6f6f269efcac9394d56c433c37feb80633b54f95ed6c89eaf2f4377a71d521c5eeb7e9', 16),
                    gmp_init('0xf99922c2f70be98d7ca1d13976709c8491f9e864c9a60db7f4135d37eb79db5fc2341d631562db643c598ca2edb4ca5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4320dc088a57727cd2c0ceefd25ac1090abdf71219b7512271c02292710f4e59f7d599e2a1e21d9adb854388be97d339', 16),
                    gmp_init('0xf2cbe51f317009ac7ff4a916be079952722cd73714369fb9ca6a88cd3b3e19a6dd2a4e3dec5e5200bd91ed619fe0d9ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7630684b31d58a0a3d2ccd21c0fcaee6627f82d16c44b94c711e42c852ed49f17731f0d574090d9815227568db988583', 16),
                    gmp_init('0xb63de39a79de709a4b84b935101330257f3ca2ec85d6e232c2104507d9efef3f27359faaeef0646304983ecae32c0caf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a1bc38d7856c8f4f55a0d6310e069f7e7a85829ca6204192affdc5e189521c255b5368d61dcfb2c685ab4d2226f3a88', 16),
                    gmp_init('0x5dff8c20a5e1fadce168dbc9c8c27558061ec60a3f8f536f609b1e139ea4666ff6d73d01da7a59adada42cfd3502e876', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fd6078ab0e5f1e402f6d306af0682bea38de3c365bfd8d70800c45ba6c0df4f3bcfd80ca55a60cfc71ca2af5a30424a', 16),
                    gmp_init('0x6e9a4981545c49b0886ed619b9cb8ed1ffeb709c6d2c6878984622b2c3051d473fa62af0057ba8273292cbe997448486', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a67fc470cb0b8c14b7a0f57cc71d314df56161c08ca08efec253c5a719f95fdec9255b59f21b19cc5d1850e82754e2b', 16),
                    gmp_init('0x161c5e9b51e61aa9cddd308acf5a13b1c06be16f14819707be24e0309821edeae75b80d347f079990d2942fdedfa5dcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32ae00254723a4ada16e034baddf35a2ccc29ead30a574f076120dc2508100acfdefb51a313900efd01606a730e8a72b', 16),
                    gmp_init('0x5dd313e31c42f1cdd2ab212652fa7fa187b2f57d8706a1b8c46295446e50b7ce00cca40011b06e042a9958671e1ca3db', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ddb732abda7cd6e85aedf045628ecbf1fa6864a0dc0cf8a9d444129d12c29b080c08580b19a81610e2488daa019503', 16),
                    gmp_init('0x36653375486076ea7e567e0a7d8e3f1e907a086a6670948896d53577cd22a9805a186f7634e4a37609bb6d5b9ef190ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f1848138b2da779f1eb170c82534be871f0874fcf75d168afadc354547bb152fdc1aa90b88aa02cf86706a79fc1f787', 16),
                    gmp_init('0xc039a1b794592576dda406bd58e8d174b9809db194c54ceee79cd1e249aa9d565cd11319c1d0b247a782cda1aef04a82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x845748f6c6060f5158c538aba3eaafddaf371189429229fe1c27c0485638d8279f1e4ad5bf1d378ce1a0b3db9d0d972f', 16),
                    gmp_init('0x973f3ff90422e93ee0140093f966ab5523c4bdb8a78899eeb8c5aff9476818e8a411e7f262db5e528bc4ede57ef3ed06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc710947f190ca517aeb26bfedcccb0985cbb4fa2bd399ba83bfc1990a0d803d2770b970720e07ae6d7b5f9d8521ed648', 16),
                    gmp_init('0xcfc015958ea4f682ab1a62853963351a63634f1c26b3683e6fd8fc892335f5d62b82f7053cf16a454c17fd321db95296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3363910f80a57a800aeff39ae6c6f4fef0311cb64bd22f8fa340bb33cc20589bdc147794ee9c9ed584cb0d548630dfc', 16),
                    gmp_init('0x4a8f9aa3a4fcaeacf2d0ebf02b416decde63dba6f5727bda98d4ae6f9f465f141f6f33bc04b86f384f85045a364550cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b0123c67a0796f5063d45366ee232a83cfb7a8383216e8c43bba22d4c222a1e0fac7899319121b3c3ce5e4ee9a2db3b', 16),
                    gmp_init('0xb0e08d4220960477c561b2c00bffd09bdc4b144ade80672ae5c1f8b57d4b6442e21c1f2f9f63e4faa7ce11eaefc102d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd3ce42b368a538498f36c916c7391578650ae9247733531fd2d8260879bcf56dc838ff91afa4e42ecd9ae47b728c8c2', 16),
                    gmp_init('0x27573bbd9b6af424b4508b23bc244b4da44927caa1d600e0cb0936dd57751aaf5bfff23d7bdc62e63def0edc25cffb64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ce282f74d0f4a0c74512b967d68f2f3039fa2fc3939717098c9f71dccfe23fa2bee7970bb1643c4e54a507de5160337', 16),
                    gmp_init('0xab02fee2eb9d72f1ea12f3e3cf03e5a984294a738b57d44dc080a1c26c569c443c334bd7252f9f9f307faea9a26f704f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdf46d68638e68c2d5cf01561c4aeb988d731570fcbd1e332496d4e6ddd7a60a8ad8ab7735bb9511f6ebcbd63a2fa7df', 16),
                    gmp_init('0xc9537ba547fc6f8da0bac0a9636fe29547c881439fa9769ad89e00a18a97f8aeebe7f0ff6137bd1b5472ba2b2c54b831', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9676ac8058c02356d37f59acf490305b91ae1fc5663afa19de7b0b77ef4fe0ff691db5219dd4f28f9ba6890961a8c558', 16),
                    gmp_init('0x2edb441902d19248028a50d017bb18e5aa53600fbf894f5513fd2ef0ddeee9969feb3b9e2ddc0804aa8e37b6c8ab20a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b05b5244706cd05bcf75ff11cf343bf6e4d33eb2e6359aee0e551aed2df017583d6b22804b284d4fa07ab95d69872aa', 16),
                    gmp_init('0xab7ed5c999de6e209a41ea5c442a41da2a812f4cb97c2d91f31e8c0fa727ac433fd9da413de9b47216ae06f80dc0cbc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f4fc3bfd4aa4cd2107b09e26903c93706b6888242fef8a18f344f4e9bbb70b34233c0d2cd3203dfba290b0032ad12b8', 16),
                    gmp_init('0x2f70e66e27a095f827e028d159b6c4f48d6ce4e332cdae7e4968569d4e9d9a0fdb9c27d4bda9a14466187d0380618b0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3eb7ea0906c7b7f9559baf444a72f5aaf7e41795bb2e186981685016ed68d73712befd54689a310293cce3a67d2f9c2d', 16),
                    gmp_init('0x8345519cc37f2ed092cab7a3f6fd01c2fa75ccbfdf56b02d1cfc8323cbea1eb1d4fd5f39275d3880a83b911eeef11abe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12ad6922846f63ef0ef69c0401d039467d8833624739ecd4940bb29a151b8ab2f291e8f08ce03978d30ce9df3d192706', 16),
                    gmp_init('0xcf586859e0cd17cc56b1b4fd96c0f4443a0420ee8c1d65b7f8ce9d9f6dd00866341a4cf0fa87b8e5ce054ad9aa084c9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa98758f5c0113452afe14344ea7fe6790a7b31d57756452a9e44d65cbcda8ad83379c13e4bdfb1293550aa72134f36b2', 16),
                    gmp_init('0x1f47493cd02c64e362493f266105981fecf8f13f51dcf349ac65d15aea344952308ddb18685ef2efc4723daac4810f4e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe1724c60bb8f63f2f8e13784163b4ea9dd36b95e2d7b0a906aa4e445b50530543c551eaab291f8c660defb1fcc3e621c', 16),
                    gmp_init('0xcf4d4f4dc89617ddc4601e6b36b4d5221e0f686cef7126c1769b07ce62b950aa310c26225ef6e7fb50abffb535b12e30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4d61429ff459f7d0d1bfaaec14eef9e0421c72584df597d93eb6885bba96392d5c4d51912f9e429feba907bb6a38251', 16),
                    gmp_init('0x30337eac0378e4b88f485826b07b197262d274165630c8b3ee79cfe576d54115170bc451ad73a6943a2d45dc16ffe418', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a23a77b086e87811ed8ec314a5c91a05fed1db5424b082464fa21291ddd93bab583969b58522997f8e60e7df10b4ddd', 16),
                    gmp_init('0x55bf16bd61c1d6183a160bba00d78e360cbbe840a3ee9e4b06357313cda345ad0290a248bf25c04e161de20f412de3c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc04a502aca7a9875f312c07dad4c779d50a62974ff1ade4bb40b6a6480babd1ac291a64cdc6a0c7eda55b7990ceb3453', 16),
                    gmp_init('0x216b29bc57a34e400a4c979079070103ca55f7aff7b9861f484741df18dad28a8a3ad497e3d186022a7966684d30e87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf860456c0d9e8c6d220aa12fe96abe0e8c835cfae12e154e7f4d251b4908dcd2b8f421bba9f48f8a56ff4c1a898feb4', 16),
                    gmp_init('0xf2fd3723a206a72b68094575661b92e72c7447b40cdb27c9f93bcd67db1d02da6e3df0b829ab1fcb67d64de8a0f7b80d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x902e4b9b7cac5c9e2ea939c0bfc12c29d6aefe36d671f48303479a224a24a707eb3754d785215f15cb3518cfbca96c53', 16),
                    gmp_init('0xe0e3d503e3d0901708f048dd6643b9b646a162a2d1943c3a70652438c9edb942f00ea2ac9a9e3f2d6860a412276a0516', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e1c62cab687567ce64ee5ad407e28f4c86acc1b98c539e2f317bd634d6b338e4f8f1c6113dd5f9602c9b43cd152ec3', 16),
                    gmp_init('0xc7670e4a5a375fe7074f2ffba5d534866fe81aac0c7f190a1dc4aadd0ba7c035af9c153ea4d8e1307b986adec5ee7c08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f040e8364559c30bf0993f9d06bd8b51ef71aacfd1a95915c1740ff2e8e978712f4b01d109811e48c56016e7de8fbc8', 16),
                    gmp_init('0xb4044b0cbf8f9971de4fba3858904740c8ec72c9a1b176c459f8ed557c73fe426a2ab7707a74f7b4f3cff2fab19daafd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x189b5bbed3953de7e3eb93e08a03ef9c0276b6f0dc6f41013f351ac31f09e95773b83359de3780d3718882d7dba656c9', 16),
                    gmp_init('0x2a37d24366251f58ef2d37869e023017da40338398f012464990097917d4e0e11aef9ae3f988ddafdb673e86e7e4d906', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87cc202b24f9bc48fa80a2b52370e68712bea9debc2aba01bba54f6677d53c419f6dfc110d11ef17cdf42b1c882f25df', 16),
                    gmp_init('0xe0e45426f20a0d2b482b6c276c8613f251f2dfaa1fb1048a3d887f7084147343d5cbcb9f542bc94d85064db1b1031547', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21dcb5952f27524258e285dbb5cba81d303056a0f75ef7890c9a417ac60fadc1b5afc4e4b4730572b7abce9c6544eb09', 16),
                    gmp_init('0x4f86c2017a0f9d2f3157279851cb75a1e353be796e252e3a1e2c3ade021994c18c96262611f2b16fceb48e16e7c9e327', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x944a02e6314d6f97f1510d50bc639c8364ab528cca1c26f20830371ad8bbf8d1e98a49c8778d5a1d0196e2499e54fbb0', 16),
                    gmp_init('0x3ae05a6e29156ca773207add2111e890336d025fd5cf6c192b13bf0c2721448a80d79e7628ae467e7fa30da246502b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5508d8a8bccdb0344ccf3d4b7cce6b53d2298823f313a4e85d9da7f20c90e343e3621459d30be4c73e5ef4b5e0142fb4', 16),
                    gmp_init('0xd1cd74cb369a45b0083387678513be4e6e12e60fa9b901b589c594b4feaacdacfc695d1ef37998a758a4870485661fc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x712ae70ff6ce2dae5163f95adbbf531d05ac5b1f81ee5a8a7aa6ffb542d5560385bd928eb320ef02b83345c46844966d', 16),
                    gmp_init('0xb8eb2e6e949b725f9c4deea1807be49a42812eb3a3b1672c1ca93a55b84a0b3658f02956c6daad6e5a8498570ae9578', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29410c209b9df1545861c9dab3d4f3b05f2c2f4291099a1af17d264f54e40b4cecc8661225672b2f5ddd0901455ff5e4', 16),
                    gmp_init('0x9054f366b6312168a7cc1a92febca9c5397a1599e7057b3dac0fec52c5e136f3c06ddaf6d069c1ff7853e6d914c508a0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xab468adbfab48cdfbae3cd2772430767e00b1374ce9622d25b02734b8aae6004e061870d7437575808aff4b2bc6510ad', 16),
                    gmp_init('0x10b976f0dceaf81a09bd4976d1ae018e6063ecf78ba86c86cf13ae9bbc42a3cdd8d8c262283ff85a57874d65f681a609', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31614db5d6158a224952de6ab58f1e2416f10c1edd79448bd15cd727a5024843f5ff9ae6f5376c09aff997a41875066c', 16),
                    gmp_init('0xde8e4a817cbd546bab85d12d42525df29767002418b5e08c03228b0da0e4afc1219abd9b0a65bb9cd31a1102a92d3cc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8b7cd572cf9e052adc86ec782f3b2292e7c0cebc72925e760227fdf6e5fa0757ee742e880ecce98f1b22e745f4215bc', 16),
                    gmp_init('0x89ee0d8c9b5bcccc76f263656f405990679508971704d5a3631625c5f419e1b72db8249f106d810e2f04e418efe1c5f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80de8ed4f21a00473bf7773998c5e0a5ba8d24ea79fa98214984f1018d6fb4125cbea81fd7efe097a05578c5dc9b3525', 16),
                    gmp_init('0x8411acda714aa83710d6e22516e6bc035f707c6bb8eb8480f7c873bca6a692181c1310d8d6a1726487386450725bd2c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd4074681ffd5faf9c9416982bda8386ce35e8d0e5a571511681ba732d5b94c9a0ee6ae77738e6e932541f94c3e01aaa', 16),
                    gmp_init('0x615c5a566f4a96fc33dbdb0ee8f88fdf48e9cfd0a52f656df8ae624178c37f17d8e39a08f7e1ad5205d488426c97ea3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e497c45a65a89885a4363001683bb30eb1721d26a52870231cc6c16af9abaf0e36d39992ccd7fed7bf0904d1d272fd7', 16),
                    gmp_init('0x7bd9cb34a115b662c18389192348185c0108f602b6bc339e96386b9e15b02cc162de4d555d3d65dd0a9c82052182572a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x786919385c5a2aa1cb7372d0ad53be1d232f97d1179befe824668f38913cbb277928316732d07235e67dff1adb8f9e81', 16),
                    gmp_init('0x8b0b398bc56257eeab6abdfb3d2a1a92022315f5ffdfff6bd303c6daf9ddcd21f10e5fd5bd8f2dc8590371d9c460233b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x616104d52b20930e9d65d4608e70e87ea8c05c2e29ded690c33e2121a8254adaed26c0a007ac9315b2e776310cbfc247', 16),
                    gmp_init('0x8413cc0c6d783823a837b7ac32efcfd8193cd894e8fddc081261f40a2db534cfff1f5fc5c8786a6f7689f7905c44088', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36ee36089955c51997e82535804358190758302641554dd82b62920ba69e31e41c803c6ed54a3e42a197c199744129b3', 16),
                    gmp_init('0xc045904f2af0acf22cfb3f488cf3aea73885255b0c658e1f1f508c444d00d9ca44af26458a6a5644a884390ef6f1b84e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b885803c4955a1f41abbfc4f39cdd582c800f2287e0ce05f3e7a436cf744d240d9294d69a81e60c73f9dd022f3d0be8', 16),
                    gmp_init('0xfd9f88b0bacdb349297775daee866bf365472195e8566438ed947083aeb6c8c0262c36079fb7756682627d8463098a20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc051a767307590ffe1fa17c735adad9ca58de01846372c8eb1af0f4f8184f7d56fa576a9b60069285a6ddddc3489bedd', 16),
                    gmp_init('0x58cde5163511b4856b26791b04d2fe843103d76d5df5780d04ec0eff55d933f4e3a6f9ff50edd913ac77c987457e70a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a44500db6a82c369ea06a9a85346c982d4326cebcef45c6cf6595a81d7c537c3813990e6a2674c2ac5b36390b77c5d6', 16),
                    gmp_init('0x2e3f1489bf82f8f704028d4be5bffa0e206eddbe4f3dacbfcb7cd8fcd87319a9c884c6322eaf663bff93399fc245394a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3b319b3557b4f2f404f41e4f4877eee39832dc72ebb86f08b9b7314f4a88b1bd949a5ac94d1ade3d0f581296a29fa', 16),
                    gmp_init('0x2a3c30878085b1fc1621c4f904d8f0b3c90fb4b0ca5d8d025f8b17816f08a897bc8318d26ba7e9506651b00c5a189d75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88d40bdd0c734a79153e8ab30302ec2ad1b48f47c4f0da1cebbb616d9967c039c2927fad39a4d48d32b86f81756e9314', 16),
                    gmp_init('0x760d977925af8c2d4dc69585c29c1601ad8a1d0cd3ef92a3e9dc9a5b4c67afb290e9936caf55a8f222e8625a04177539', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd4ae679fdbcff8adcc30cc8ddeb32189c3a820abb52d88aeb943c3e17b40a076910043062b97c3e9dcfc8c6efe3e9204', 16),
                    gmp_init('0x2ab2a677eeaf36659d240fef6cc743f6a65032b6c86b7e0a60bd79f0f24eee50b738fb7b616715360e80646a116a3e32', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x121ddf8c98286ca2e1a0ae1734e62f5980f7e38131fa2ac82c547f20f98f3f6ba205d8ff15754e8d7655aeeec3965d6c', 16),
                    gmp_init('0x5459524ff1a7935899c6e5cbd84aee9092a91a35e9cee91371fcdbd2251ddb378e49391c5329d56362ec2e880205f0d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e525723352a11e647f7a77f17e1926f5bbdc49bbd5f5934fa588578b29d252956d65ee4e7d8c43a2278cab127d56ae7', 16),
                    gmp_init('0x63c48c717b93764f5b0138dd9082fcf4233289293a873c9118beea2e5d75ca2adb0f8ad17aae76395381b3940cc6af3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d79343c22eadbe15591d449aea335cb0cba9800d8de2cdfc290b110e8975a6a5b8b82f2648b036e8f0045f25469119e', 16),
                    gmp_init('0xb1a768b90db88aafa4b8f7f3a8239701534d28ab9492044f8fd752716ba13eb842e7d9dc067f13c629c1e44deb23b82f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb2192a76a1fc6a234655ab78a4ccc6a32b175862108d675966f8f2654c560f9be728aa450f19fe56b09bf3425125475', 16),
                    gmp_init('0xd1942826da5e0a51e4bb724e741dfafca2ad1ced880d5bfc78b48d3342b9a553e82d2a577571691c02b44b78d377a887', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ae26379065207cc491786f5d4c91c531ce39d1ac3661883e2ea06fa9e06c1049a7f901f8ccb3208f201bc5b740ae453', 16),
                    gmp_init('0xa896a21d956d42bb74e6802f9459fe31fc332b873088ed61d91bc0ee779fb65bd7bc36f16575060870fea387820767ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa33ee4b4ffb03ad875d351319fadd8b10b3595509b27b7445a64ef6f62382f8ebba1208ed25b5ea6ec38466cb5d3038c', 16),
                    gmp_init('0x9db9267b6061595fcd6ddc78a2b6b27e8d8f7f6c9f9e56c08ff43d0691bb2377dce77ad6fdc5cd5f52198963fecc8dff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe34dfc82703fc29f612087c73743b29b18140513012d87c60f110a7366940ae1cf3bf5ed4e393530975f718d5f61095c', 16),
                    gmp_init('0xbafd54946de813c4149a156903e27df2464e18a637db2538b336ecba07596e6f271e02e9313a036ee4205abc0b0f3aae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5538f464158e8efd34eda59bbf16c86bd4a282e45555676c3fbe823db3fc52d95109d2e1b23da6565131d8182a0745d8', 16),
                    gmp_init('0xcc421b4d5faa00c75698999d0fe5ab33220b29dddbd3ff6b68fdb77b3c9c55bd05585bcc15278cc325db8dd668716fb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x913343bb9620d8435762d057bf3355f973b862d38b635424e5caf2a09a53933defe52be35cf418e93ef047a0eb99cab2', 16),
                    gmp_init('0x83c06948a050c37c942991ed769031cb5cf036b917284095ad9aadfe5980da4692a6ce4200fddbf93be2436f4d63826f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179b932c3bd6854d32cdf87bc3af75cf106909798949532e48bd12bf733235872c526bf478a405047a8792983d07630a', 16),
                    gmp_init('0x489dc4cb8106630f34a81521aa930c0ef7bac2b25f938aeb930eabc926e53d9c14a201a8f84fcb8d2e1d5f707f0ff9fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabd7d6d383e905c28ca40176ff69d4c6b99a933aa02aed4564dbd44b842e2f901c6eb1075b2bb15aed9b030de7a3976b', 16),
                    gmp_init('0xfecb1ac0c185e5263b8e5aa40a55e9d7ee8006a22dc5477af94570a99ef8bf671e5107f9183ae2cc1ef968f327b193f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba768a918595765588dcdffddcaa2c98bf9e40ca662793501ee509145effb338377a71c6cd06d5480366839857dcba1f', 16),
                    gmp_init('0x69262af309e2f460af59df252c45cf4fae23652a1c0bf06697e4aa6c9f6b7fb67a4be3a2735fda9231dff680ce37dd81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb8b965d8b682c4026680f6b9f4505e441d91e46d454bb5e1ba7da974ed9eb74e41f3117affe29a235dd6bb389c9592d', 16),
                    gmp_init('0xff3a8fab635ff8f7f77adf2f6d1ef2a511ef09ea568a7aca6b88eeae08d7ba2cec905d8b6d3df610c632d9630e934ace', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5337a1a145422c54b55a4be0a6bd2a1e9228d3dcca2b15174ce6b2656ffc616f0d72540d7fd3cd543aef4f606c6bb20b', 16),
                    gmp_init('0xcadaac06ef0f3855285b3377eaf568c0a02bf5dc05d16fb5a7f8db96d6ac01703f60c1ea0474f1d8793ad968b9eb3cf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb9e7a243149ce8b93ff106ea343b0c634200f168f23cadb20b9f71e3aaac79ef3322f3c97da8683a293b6cbb508f4a5c', 16),
                    gmp_init('0xa26c2470295b514b3de2db30ea31a6fc6fdc7481b320ba084815681360e6dfd6cfb0c722ec3bc965ba8361306e29c974', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x30b1817a3112a8ef97e3d3b449455f17221fc0f62c8e0b36eead581f21b7abd121cf10eb44b4759349c0c09da19b7f44', 16),
                    gmp_init('0x8042b7d4c042e8eb6fbb50d92ac7c5c0575dfbd06707a413ab7bf494432202c88373dbbe9f304afaee6e05b6df5745ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdab56ec0abc62f3528550602510c09cc7f2a6ec0d0021c3913182184ad4220ab0abb628c600c5780ae108d441d6267f5', 16),
                    gmp_init('0x4eff9e28691ad3736377c910157b70663c5abb2e3303c2e19950aa13f01780d2e66c5c76160c69dc4f652848bce3180f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33de558cfe2300603f0fcc464d01b8f33f11c8a1def54d4ae4703570c3d96e52aff0a62c6e79cbb72af32a711ccf3230', 16),
                    gmp_init('0x4d922bfd11c575640ff6820e275ca8cabf2a4c5d43dc1095343b6d4b67a46d746f13021dfc32a9a91ce7dc088ebce09e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaeb74b1dfdf27c48f2337b2ac929a97586567e8e3758422c12058f23717cac3881b58131ade89415deac0181fcd958ac', 16),
                    gmp_init('0xdf945a115943b7cfa73c5ccd4a9b674498835755f6a7a90ea49bb5a31efa5e2d6af186b54afa66dee5698223e2b8cd24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86855466d37094208307a168d9d4abb57604a757cd3563e6e745e3e936152bf2c26f4e88e028e23f591bd224d44d9420', 16),
                    gmp_init('0xb1bf5e44d76f8a8a648139511b1900a2f74f1028d80179757d403c7f880c95904fbd850947932ab33df04325a46627c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0fe2542bb26601c8763bbeae86cd4b12cb1f38e3f9f8df709d35089c14a983c68f697dafeb6889682e08f9e7d4e8d0e', 16),
                    gmp_init('0x8aa22561b5b6825ca6ce539b9b5e7fdd57796ae54eeb8ad5868b9c406b4bbda83f98013c3255b7912a211531e4328b4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e0438d762c2e9f092f9471eda45d75cca177bd3d211cd06575eae1c0ad683cb5c53121987e691636086bef68a822557', 16),
                    gmp_init('0x82ea0c67b8f0268053f2f3e348b17c20f6116817ac2e3d540092ee1249209d24a93b326f7b6a5053b684db9281a8dcbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1ce28062ef878b0c0eb608e9d28056b8028c7099edc1111b03afc147ff4600547ab7771484816b12897245def0101b2', 16),
                    gmp_init('0x16ecc7c1e5f47071a4a3f7d3c1705e1c6018bfe6ace277067da73b7a302da18f129f74681674f774d72bba8e9a8b829', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9e2e9f68d77faa48cdbbbebf1015c81986b3f1c03b0894ee37fe6a77802bcdbc72d4a8225048a58ae9f0fc9818baf6', 16),
                    gmp_init('0xb7e9136715d2af36c79432762aa82521a753fab6acaee266c9a6c3e5b72a26d3767a890d79da93fc133eda9ef9c6a1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaaa8eb0f2ae86f67be0aaf1a58a91cce81eefaf6bd70ae38d5ffcc03a6b864d303883d4bba736d1bac8cdecfac934e41', 16),
                    gmp_init('0x1349739b4e585ffd519fd6144796012cf78b8270b508c803b0064640d533c84183ebbe26dcf1cde5b275b05e2a1bec58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2bb3bf4ae4e0e52d7664002d8499902c3eeb593db3575b504ade2df1c09e380e398efd6852d0ff17081e199b31d8f25', 16),
                    gmp_init('0x2a01e32d326aad2fbe3689f5333c0763d849918b6767cb09fbc3df7dfb70c86f244d5c95f28f0db7ca7f0d809a6e0454', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8c34f3cf4854714438325f76095bd62253a5d4975281f69baaec15045d7406481043bff217e885ae2227c0367a588ba', 16),
                    gmp_init('0x3126acf32bbc5c584595ef19f41f12b2df2b9bd8e33b32e12db6010decbd9f13b46131e87077ccad4dadd2e45a19fd80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6b368f02dd8e7321452021945c0475d0a056958310c631fbca3b250e45f598865bda69e6ab7dfa8b6c06171aa3b7b64', 16),
                    gmp_init('0x1b41db3f8b59eaf15a3ecaee1ed24dd394b83f8851a8036436cf4301b5c86dd5e3a7a6c4f499a08f3b488bc11372af0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7c95d0a8f807c4d33897db33c122b5715489b1f0346ca058afa08adc5bede77973a0f75c71b4ff1e9ebcba3abd99ba9', 16),
                    gmp_init('0xe138a24860d6b7a72f9ab6abb80a3acf38678d87116ef32170ccc180d5a51f53506fcf12f57250968b21438640f0de55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe68260ea28664094268925b6f6fba05058d8adcd00c4596199adc6da2afa2c7012f4e98cb7bbc0172449657be0365ea8', 16),
                    gmp_init('0xab8a5792b1cd548d61079edc61ddd54a8b9ee1439e49eff7cdf75dc5d8333e3ccdf5fe0b0cbdf64e0984f99ab1473849', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xeea16f9d01697ae28c33d591ea743f41ddcc51e7fd9784aa3e2a1f7f13e54a9c6337dc9d712138f7129eb4f3550e2f47', 16),
                    gmp_init('0x7990c82eb253a99f8ba028f01ffe48a55deb5178243c87bf6dc880f9375f64064c8c03b234631a1b779e13c5a97eeec2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x486b52759c95a69f083903a3aff79e80d8c29814e6753db83707713bed71910055d93fe4f999b9fd61eda70a7cf3c75', 16),
                    gmp_init('0xdcf481def274f21b1d0d52bb7aa53cf9f70f8ebc0e7f7b20baeec5814afe550352da52a59b8d5fc9420b345044d6b247', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fe2ff8532e7e4bd6dbe0fbc5cc85916118f63feb5368f71f43b31b2c8ca140f89ea09d6f55196ceaa92c59687971b25', 16),
                    gmp_init('0x283f0d3709145fc1763ef1770de99ed497313ec08e9c8ad560a7388fd7c4820816a51bfa8e5f36d91907d4bfed933a45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97ac361fdff343222b90c4feb8d726850c8f75bd66b83664dfac142ba7448917af401bc9f4f7cd952d2482f2d4507be0', 16),
                    gmp_init('0xbe2767cd9f560d327bb5c42b15319499993a97e2c6f811314a813871741e06a50f1ff937fef16f144e3efcac8f432051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8d7d75bd038cbbe3efd20ad26a4a75a25bf8f88f9c966cad13a7bd50f1d6309be7e1aa25ae64e4080626ee4a5132afd', 16),
                    gmp_init('0x314c80cf97ed2a418cf72038e04154161d474a0481cc5aeabc54ee88996eed4071181817861d60495f25924f9dd4e042', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bb2a02fdf463f596318a4d16f1ed112da6aeee8b5e927546adb795462212e36ceabe39c38c24e084bcad459f706f7b9', 16),
                    gmp_init('0xe6271e903a7595095427bd15ac87e6097fc0a3caffb8655bf1f9d86f5b17b28af82aa68e2c5de82aa8ab98d0522fbc9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f051b132a8d85444296aa3a7a2248587bc0fbc56c2f8e669485dda4c06a1f63aed8fa9cb52c55fd988369edbfba87c9', 16),
                    gmp_init('0xc52ecdac9e34b35e838e3d35eb0fd592169d1f2d79fa55f49aad08ad52e822e4f7745f38e3aebd58e163b74732c38ae5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0b5f0705c2df049afb8680393ee36ca82b681d6796ad4e349a0c422ab4831f51a0c969e75308ed1a498b294ac4f42cf', 16),
                    gmp_init('0x5677134bebe96782c8f4575947bc3470aba1cae3c759352db81508209d7c3ca134daef8dba839ab1562c171c4da5aac7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13b2c4200cfbe815575ba5ff2e62f3fd4a693043ec215b4251379175c874aaf411984d09cd82ed1131949a7391b2d315', 16),
                    gmp_init('0x3ecc6772e116cb9cb1a0946c888ff126549d75903b987bad5882ef9aab0ce28483e73373aa6f114330782a24c7ad608d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa09bc1e682ef89f62f7f5a8bf6154a251c8098ba4d9fd0ce09b1c85a7cdf138fbfd904d83b4e86acaa642265dabee2dd', 16),
                    gmp_init('0xd3f229b23fc42d834d57524240d8ed7957c354bdbc04384ad54b70b7b68dad2d971ecdbb7eff93f9d66b5078cf82b83a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fa200d67d06d68d8ca33c3e1e9ffaf5618065616948c7eb342a632af4f283d50d932a19abae50151d68c8f8579cd0be', 16),
                    gmp_init('0x4168e70f41490933ce5e5d0e71cd556294b9ea33bb534a715b68da77646a92d8b8828df7f0cb22ae3264262dab9af93b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28923c8686ef8a47dac009f1ea800f938c3f84692115de7a4f361e969a689332ffbb00a2063698de8c0d5a1e835892b0', 16),
                    gmp_init('0xa5b6627b8f1274749b30f948392a3748f2bca7caa2e35c6497a43440b510a114faad9da807921fa5e9f85d5565a8548c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88867fcb594815c27f71402d781f369e893c9cd873d3a2b1dc2bd19c3ba01733785340c89f29cef94319f6b9572b8632', 16),
                    gmp_init('0x797d6bb18dbc10cb9d9ea4d18d2313c6b418bdc9617bd26d947f15b6259db3078a07424293b63a119d09de2e5cf622fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fd171dd278d7d4b7e7f66c8030e33941393d77713b5e37a8de766b0ac4bfa5374e9c3e6606d93868a450240fbe6d210', 16),
                    gmp_init('0x67809a73aead292a1a5bd949b5df651f0a6ffc713f82ac44581e5c2275c26842a4b23c07bcdd1dde0bf7e955604ed804', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e3ca26fbf73fd9b2798a98dd32c5422b02d9b8c79cbd0c50955daf296ac7ad536c2bcccbf4ddcccb8c6c42acdbcb41', 16),
                    gmp_init('0xda2075b4a86e53579dd49083e291c67c3dda2b8862fdf4ac2f66b02d4deef82dfdc5249ee976c8c7642ab665204cd344', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd42a4bd204b92393921cb62a8b6649542fb272e9b01753e07e0d55e7e5deb68a59777afea3122b0ef21adecc4cca56ab', 16),
                    gmp_init('0x6b51ba9b1b34ca68a970057aea3734bc5c4e46be1a7db127b05888a0fa999a4eb4d2bd31ad55b1fdc6239833da194383', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x632b661d48b34f1a97e2c512dd657250860c69ac3592893edd81cc6891a0910739253277aa7053040c4507eb52891723', 16),
                    gmp_init('0x48909218e4e66f2c3484888b910e6821629df5db32f058ec793b035f6d217eb4f9cecde2a788dd7378f3be1254e9b62f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90c76f89e151c582e222308c91245a6f3183cec21b4cfb8a0446e36340331d82d6aa41e9cf84c6de7f4daa8150f5dd9e', 16),
                    gmp_init('0x197b2b8ad7a58b253ba7855c3bfb5f006140a58697881f8b28cd16da2a3bdf47c352ccad3aa7876701561ae1c23e3b4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87c61952ed1013571f4f1164caa1a929bc6f50a0cc19c85d04902dfe993bec7a6e32e317e74135d50e5750fc2d1aeb2c', 16),
                    gmp_init('0xc97490d894c67929cfcf1e7575b463e1933b352c73fe41f8da9cf02bb3ce003ec331ef5f1ef7b465c9a43c696c411c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c068b2f850abf63b6d75abaada0fb5a931fb6bf2c6f9c542c7c7e6941203901b707ab77183cd52324b4ebbab94d61a6', 16),
                    gmp_init('0xa70212488955a3f4adc3e36c877e7d9e5df5d55462cfd85bc2a6f63db04331abdcfcc02ef43181bb2ac5cfc1848db448', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52c5d5ccd7108579334008268a2f95b871f5ff4ff67718688a04dd1c5d835ce3a693cc5a89cceb39b747aa967dca36fd', 16),
                    gmp_init('0x9f5e7ae0ff09b92555fe8122d184beefa07c18b6f3718bf767c7c2150e368842958b69bdcbc64bc191303ae7fffe0464', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8a925cddde2cb9fe383cac1283de41a66175064a1f4910d4c9cd1c875a6e4fa1fd6d3a85499a7944466d62923559e81', 16),
                    gmp_init('0x21df31f044634c1679022f1ab0b5e3382b95fac979265c36e15dccb92c7ef6e03efb129f2023432ba285014bd33d1f01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc90a68cb9a4692d1bf4d61cda1dbc8ef4ca1e28e0d0ed82b6dd80c4b57fbb2788ee83538fb591f8ee6d17438f08e50c0', 16),
                    gmp_init('0xd1abc795d7ea99f58c7025b58e0b36e5598e03c5eac656adcb4f186f3c5ef7cb359879436ff79fb43e4daa27d590c2d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x614f5936432689326f5d46e1bb315c04d1870e05ee21192624e2ad2c8f5894f742f8b0d624f2b6215624128c6a149198', 16),
                    gmp_init('0xbe78e362b8c9a9658a0f73f4b4b07e9f93c7359e2ed65c9211a79fbcc77e6d24dd6637b83693a91b7f8b27f8588e5f1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2fb47aebe4c24a522f3ec61754a6360904d6f43fa1d774ee2fb065f520e644168468fd7107e9e7b0187f1affb5abbb4', 16),
                    gmp_init('0xba3c66b6219d93e93df155fdb0f30e3013bcf68cdda9fe695c1079e82928cfa2f645688ae5abe539f81a079ea33b7c63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3182149ec8f0401b4947ca7d81d367e2dcb2faec062fa861b7f22211575cf2a31c5360400709231c4c56d25c5d0aea53', 16),
                    gmp_init('0x8ddeefb925a1ae648baebc8317908ceb1a19572c70d93b261345431f5eec800389c1461f515c860ca8278363c9f89257', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6e2eb95d2b92a5e0ab422066098a74855a8d45ef2f499eafc9bdacfafa9e161f0e7bb9e4d32aceaa3579ca2e5b0df1f', 16),
                    gmp_init('0x3bb34dd1f0213402b0cf4ba4287de6cdd0437a567caea7e9656c33f0f409744082be06a78b511c2564081881aa265ad1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad0fbc3b6d8b7d1b4e3afe15d7fce38bb03bb51a40ac1d5370511174ad78127e91fea8111fc49d6234cab216a94d00d7', 16),
                    gmp_init('0x7a86d9f1a43530cc2314b45ad22776423c2fb755cd8aa86f6f874491356bf8284edba0de94b99d28db3485bf04fb3a69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bf78c3bfe779bb635b61a1d95ff0aabe119b173e8e82cc3d7a42ba8d417558285e94ee373fe26acf831c6a7f73d1418', 16),
                    gmp_init('0x81549855f939661a11b605258b05e0ef9c3ea8c4553b08d9a0cf717845ad29e5bc4b93bd8b1069298e32bde309a78ae1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19a56c2a1f257bc0db7ab55b2c105f018ef0695a35662bd00fbfb6a5d1ace7e6e582cf1d0f2f6773cc807511a7d71b13', 16),
                    gmp_init('0xfbab70ed908c750be31c236bb9e17c7d9ce41608cc8ed9a0e1aea884719b73668c7da0b8247e6058a4064b9633d8c90f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x75bd359357fb402137e078f45af9c584e75ec303d3ad25210526e29cc1ad2df7b50d25f25929c1da305bb9a832a41354', 16),
                    gmp_init('0xd4fafd9c3b90a7794454ccf4351939a03fcbab7a2b34e6f6a8f595fd5abaee009d2dad272f0f7c459400a5296eafd08a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56269f22312929679b48f465dc9ea8474210cc1087c530cb3fec232729c51b9db081f7b2a9c1310a49ec16309b66c0f0', 16),
                    gmp_init('0xd6ddcfc975bc64361f6456d2e15301ccdb9499b7c3fe72ec7a38daf811fbbe9c027b379afac9b7aa370a5f8089238b5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x216f34b1d51fabc3e77932e09736868738003190b0e4bfa8ee6c1dadaa27dd016513f6116de68e88b581db49c70677b4', 16),
                    gmp_init('0x6ba3f533c320f954e1ff2628a3e2262ae421378a7c3606ed032c1b1d6b6117590b010799116013f0e11f3e8731320784', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc5e1a0bd6c6586ef7062b09c6450b70aae9c473d1f8de60ffce97a024e0ef2841edc930ed00cb15a557ae4aa32c2c74', 16),
                    gmp_init('0xa0456c3a628d2c38e1dc99d7808829dab7bb34d997a2fafd3e6555d5e3759dd06bdd83d4fbf739ee7c76e482199c1e66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83ca7ed79adcdcfdebd0fdcc1f36852e79969c23bfb36d6c9a36c2f7733843b05df30ac9fb0a786ffb1014e944036294', 16),
                    gmp_init('0x32bebbbcc6f387a23cf0cada59564f62bd83b24328aa2fbb477a1e8ee8184c9fbaddb865a4199621d8263a223b505755', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ff52e27726c26829c3604d2a04e3ab055cfafa1a85b90acf3454f75d3bf3e7e16ef27b7bc68edce85734124fd61f95c', 16),
                    gmp_init('0x69e7d54a42959f48d26cc64fe17ca27355298bae8cd8dc757b2949b2036db4decf6752487f1cf76d620c26b5854235e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2b00ff90f64662dda75336151fae5a3589b179b5667ad16f7ec90b3680110941c37979c58cd30dda21768510c5c0b6f', 16),
                    gmp_init('0xbaf9bdbe4b26438525eab72765dc367225831468fac65134920047d4791afaa6cb2d8eb929010cf1b1051e3036d63791', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde951db0f2c59c8874c9581188c2d2a686d1e630c41f0cfd9e425d00e3ea40210ab57529928c60b1ec4330ef98324be4', 16),
                    gmp_init('0xec247977ca9e130cfcb427c06e61da8acef6f9cacb5f324683146832df5e8b90ca222e10ee8f0d1ba7a39535a7edfbf0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb14afb2bd3862e18c0b58f0b2ce0346e66347c3c06f8c1a5bf049603ae1875bb7d78e6c79a61f58c33d3c66f15267d5e', 16),
                    gmp_init('0x656449f28c868dd8ffbcf1637162e0a5c3086ba0bb777498d9ff8608b07077a94743a47f08518d89cd687d043784919f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c571c785e58b1b46791e0b6fcc9a9836c9932a7b3ad50aaacb4cc2f720eeb30edf429bb9efe1b7cdf7c09bdbf3719e1', 16),
                    gmp_init('0x609a2d8b02e7c224f6f4bd5ebba3d0175dc54c7df3b1df7ee31d7ef0a58276c634187600721531d82b689507b55048db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70dd92cace7ae40697f8c7bad039a2d31dbb6e4e5125a418558371333ce873b8f0c8a4d990d2b4c7e57c3b08dda46949', 16),
                    gmp_init('0x754863099aeb9f50df3c56ab56785f276148be1db3f08469217a20fc2b774c8d1a396b5b947720e6599af7e4655b491e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7325190909d09debbe9f071d56f3f8d22c7d1e619d479ad06938c2dbcc080655a512d604c2ad9d1e82929f7069abdf3f', 16),
                    gmp_init('0xa36dd028025a9d9f27f21d9b5f705aea177a830f499c075a985b96a1aef9193f645a5c402c7c2cdde271af8ed4e8abee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x858ba7220ac8d7e5c1f5f5c0709bf7bfaa72a5884b16a807f63920d5256f86e97ff08104c20ff183cdbd3a139c2e8a6d', 16),
                    gmp_init('0xc1d03c3fc1c95a79e7d6d7cbf462a0db98fb6def8cba34da0869f51c83131bb62143532ca2c4c5d2403067d64093377b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8983ce14aab5c48c192273f17e224978b7966a3adff27e97a87d7cbbb14fdd6e88541bf19a6551d45517155657c72330', 16),
                    gmp_init('0x57a4a7fdfa392486d8e18736cfcbf5650def1941bc66e9b53e51f795e8a2463b2a36de1c312a871b9e41b501c937cbc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155b65d135feabe67978851b223fb55cc5484f6badbd7e72759b782f076210fc7bc71c908022a49e8d352bd2914c870', 16),
                    gmp_init('0xeec72a7bf78a11c24755b6f0d2bf8f830707eb3a6a145211b1d74001ec5fd49f450e03fd3bbc93832000c0c578d403d0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x47acf18f8026401cc6bd5e9d6cc5ffcdb8fec0e2204bf00b342a2176addb7d44c53f2a9ea828e18d84662bf665fccf36', 16),
                    gmp_init('0x1cd46eb61f6d5b1f0c23f41feb0feb7b30d8c20410c6ba12a3eb5ee6d9ec40fa8644b4c83f7911436bf12b4490c532ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa27638fa1e1ca55dc305c07cdd5194b76b1afad71428020f0a193075acd16d6f4ced3216dd2ebfc36b9b511548596617', 16),
                    gmp_init('0xf4d8ce6911a84aed7af9f0cb481ff2cd9d79cd99fadc5e8e62a9eab1985288a3097b7a8e6061bf23dbcc15dddf848788', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56849845c98262670684205f34049756cb233d446d3ad5c26ef20970b70db3f045077ddcb3970a271897a7857423debc', 16),
                    gmp_init('0x89e8f844ec5506214581005e90195ae1d8d35c80505683ab7661eb8912e7e3e0f5599f1e1de5d3daa7ca330820566922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb50fefa149402bbd59e77c1de1b1e257abc2acdefaeeab9bbef199e66194023aa82981b7d9fb6a9b1297197d6764a6d1', 16),
                    gmp_init('0xad4a9945744225292c8ebe917d33e7f8b98a70470a5b472dd60d24fd9bf4cb616278c2082a4a7d81e2495c28f2b4c11d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dfc83a21a0020085da49db54fa8a260d61a91bc0bcd84a31a04f68502967228c6df37b972caedf183a0367315f35a65', 16),
                    gmp_init('0x3ad07a495df9000dbab80439acf9e379c26ab460c96fbca4fbb80b9fbc930c7c177b41f7f3e5669ab4fcdb2d6062a51d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38a3d9ecdffdf46ebc6ba48f9c50ee53a0f0031224ef8ca275812c54e325322d39211a2e6275044d9e68e8521bcd0172', 16),
                    gmp_init('0xc44d2ee2a3313c2da37374a2bde0d2f9caaab2978953b823feffeed2705b987f43f5a8935cef00284d0f98f8aa8315fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d9ac94c1c45b0fbb97dcaedfb8edc2d9ddc01518eaad35c558c34152bda6bf464fa2ee95826185813dc6bd73fa36c32', 16),
                    gmp_init('0x12f08274dbdfc2b6ac23f223f717d130c00ff09d8608a1669ba63787c3fe14586a44043ccb75dc65ed38732729431d6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16ca2d252850e9a459781f80b30e4cde2b5c99e9dd677191aff142248b20b5e7887f95a0709f1dbd27cd56945e730f57', 16),
                    gmp_init('0xd4cee02f3a7e42e590221ae86e9d61866940d5a1e5a02906d2602e6648acb496190d6e98ace2cb13888aac5c8ed32035', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ff6ed06eef9f7d1355a69bf4b95fc3fcb2a56e5436e682f8497d967b66c3b78174cd795ccce19f191246a8e8cb84747', 16),
                    gmp_init('0x186fee36cdf015d22a1710978d16cb93e8aac7bfc0008d214ce0e163f4a6d26282bb9c9271946077a6275520b3cf557e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196b0654262065f1e5b5648fac750ddf5fa5e67ad8a74b2899e56a2b8af68b0ab2faea04ae274c6498849ef0f279ca2e', 16),
                    gmp_init('0x37d958d19d50898dd8aaa4afbf061c4d8727770892d307af6e629ef72a888c5bbbaa68a20dd8df7d360c621916ea27e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb3a2f451aad167cc403cf8eaf7de155901ea6eaea6cb4e24a19e2743bd8b90f99baa05114eada43799eb44c70015517', 16),
                    gmp_init('0x8566179f555b58c80b3a0b916e5add54d36f2f201099809f7725304ebb5fb35b4ef6682a2c6c3bdd3856f867fadbf8f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c851de6ade89dd82a3e40addc5ae4ead4a512f7d6d031cb40873d9a26013ca1bf818ad8ac6eee74b358923fc3983ff7', 16),
                    gmp_init('0x3ed155779a64e48d9eddafcf82d8a787001ecafc29096903d7b3451c7b934c066feb2a10207f916a4565b67fc2a5fcc3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8712a246d5c47a3ca3b53def900b19477fe1820c0e41c0efb54d9994f59c988591bb2598bdbe6d6b982c2b5b0ad1a8d', 16),
                    gmp_init('0x827c4c7e518f0dc18772ada5c031165e6c19c125f2783574e57f907e0bfa38c6adec9b0f8159443e783efb90386d39ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f9b094c48c55dc8db9b270652e390bf3382a9d06df1c750ec852c659dd4b848e43f0eddcb2b7e77fbdf080eb24c6512', 16),
                    gmp_init('0x9fcd77fc49207c5a90d54970342010b3461f9f4d3c38e76717c7ba139729d171c179679037f649efcebabd3eafb24af7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa79bfb7338604ab3b80d2e6d0506bd4b1f3c62dd210359762be3ea62fe9aac426bb87cd40e08ef7b3121d4d9924138ed', 16),
                    gmp_init('0x7d1c42e699291987133b99da78ab429fb63f74fc0335f65626d7e37d8bb136b4ec28a2c52de339281045091fa980d38c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2841b4daff113d3757ffcacad87a4a75f0711a2ffd23529ef1f33fca75665b49a8a8acce5413894a4d15eb3db41f372e', 16),
                    gmp_init('0x7c4525e91a5318d17184f9ff529fa3ef96ad8a9515550e581c2d38909cfc4d7ec2582db4db3e1b77c2181590c9fab249', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x841390c4b7c07ba547974cd548066b743a8ac3656dac22189e425171d28efac97df68037fa2f89e1ccb5bfcdf833cf51', 16),
                    gmp_init('0x437e1cd72d0333013b0c3ece620b050174798f0026f57057c5c6c2b9c7d434d3637923a12820235bed25e610e922439b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47284ada6fd73c260e0c1440e528fff06affe1644815d2d4c7f54d8ac392b5d1d8e3e54959d72a878b6f666f0f9e1744', 16),
                    gmp_init('0xef7d458fe2de9a2de55e5b93d0e932bc8eccf405a79eccbdab5f1e3a407429f139462702ce6b1e2197843f5c1535180d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbea9a660d46c03e6ed1ed05d8c49790d442c8f05352ee51886d586da1423d3db53c09944356f6eb634bf73263b9f3deb', 16),
                    gmp_init('0x858942ff77d94ae54ab23c94fa2d242f795338b5468f4a0eb79e80f07a367a6c96e657edcab21b7dc14f88dbe41fa0f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1d5d76b633ac2e1c16c7737cc1b942c46bd484322b33f75c731ad32146c1c91d9f212976dc118669d4775d3df27f29', 16),
                    gmp_init('0x801eab68fb0753bd6bcde7f59a78cc741899d6a7de6f8fb4443a45b526aa95129f1fd92fa5317a4a24e2247930f84b4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2f25311c828109269b6d3c15121c924f462a2fbbba48d92793070ef24c8e41d759f5d68de0195d1364882a9605e0cdc', 16),
                    gmp_init('0x68d094a579cb5ae1fcf627a10458c56263fa0d3b7e76c7f2086ba018c50507e045cf9748029742c0c13935389392e816', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e643d54b3361dfab7f039924b3857322b5d265c7f337c5b95022f2e21c705089afaf26e1a92f3433aaeb2e68c06c000', 16),
                    gmp_init('0x7ed0eaa90735f84226547fcc3253e3f662c189b27b0eaddfd51aee3036571376f3366c0c41847626ea53ed7857a0859a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcb753ec28f77d86c7ed30fe205ee0c821e7af54258ad8c39a1ebc55f9422623e4d1b457c0f635a08604727497ba4b8', 16),
                    gmp_init('0x9d70ff15b7dc4e6f27909e57a8e0b7ffce96607d9a850cf5844a4e1fa7e986770ee7f4e09424115ed5549b8dc2387e2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11edce641be65b9ce39f9ab031604aa53c8d2957acdddd4a55b9ccc6b2f1584b19bcc30564c1538606bb411a8915c661', 16),
                    gmp_init('0x9a9fa9b6b0bdd3df6b68cc1b6b98e4cc7fffb5054a51624843e936e3e6dd1d1e27d83afb478924b96a1575ed8a4d54c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ae9b90b657ec8d3b397d066b219cd9b2a899db7900e0970323325984e96086df8af75a0a47ba7e0a68a79674070b631', 16),
                    gmp_init('0xac8b958ff027a80b1dfa41dc8d29520087229fd644383653e3b7ab0542ff51f315a50928bd77a5d922cf4f180d10a37b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3dac8f1d53b9092ddccec9ada23043af7b53cf4f36e85dd5fc1348a32fb7a5768c0a85a9378f715905e4b8348575770', 16),
                    gmp_init('0x3b20bebb686b8e2c92a1e33f128948e24b0b102f3831aa2be4b43aabf44cb20ea1e594950df427923191b1a57626259e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87a0d87e0eddd2be844dde40a8b67d98bafb52e081faa9e53382c342f1a106793dd425fe162923313dc07f2237d1af4c', 16),
                    gmp_init('0xdf61f32f44bd066f5007f3312302e712fa9baf2f81b35c7b1748f8c370df044bb8b676951048a449e2d1cf7af9e7d4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a230e4659928cf5467a054c0c1c8f1685b75af84dd14118e6efb627a989cb3b66b87476dbe7f2863adb013af5a8eca4', 16),
                    gmp_init('0xbcc1dc46df74f200ef0acf4be5631a685deba33bc2febe3b0b5051dc459f442694bd750cffd46e29b3d679978f6b6efa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6cf6af4661380ad3eccfb33ea348ebc009173daa7ead0f2bd5d341f9f7eb5295ab18510f8eb11843ad1ec8b8059bbc6', 16),
                    gmp_init('0x1f650ffef964ad1fc59454fce0c83ed88247a9b6cfa3fd7b051c2a20c79b65319e8a1e819241b1ce3d56c1413a6ee0b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x458aa1a85311b31b552a55ead240c22b4499b1425f7daab9e31ec466c2930e46bb483cc0f1e31a6a174ee09292dac25b', 16),
                    gmp_init('0xacb31bcd393c3d36d419f919250702790d1209fa847039cf6e290ea323157d07ea246107d7f68985baf0580f565173d6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x13beee45e7f5d8f7f5a82b3740aa05fe35d95b85b24cadd3c59869221e1c78293abf3c5023f83b51712ae60efdb89d39', 16),
                    gmp_init('0x434837ea4f01f33115bad99aba8a0868bddd1aaa13214ea1147d8aef91c00276514d1c377eecd684a6aa9ec1df741a6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f6c87f39408463fd5cae63f363cbf201d1c32775a9cefb1ce339b6c707bda7d5d45e5f8a89147807eb3992ed549c0f2', 16),
                    gmp_init('0x7cef3c75844a31a608062b56599099015c9f380d3612297f8e1ef3a130aa342b1685028efd7ba36c1e00d65d494e250f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a5615b74148431a4f9e07cd233bc618a3082d065f7ba629071249e111e1793f4e96a0919be0d9837d7062186c58cdd2', 16),
                    gmp_init('0x4fddfc035bfca1a66c8c74a4fc242e886ad59ff83fe4ffa2087b612099835fa6e8879da75282f503b161282805650c43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9e76cf59e2969311aa2266352392e63e1d7dca42bc5fbfc70c3857af4b269ef85c2ed8b77ca9454ff547949fa2e32e4', 16),
                    gmp_init('0x442f54140f3b85dec5604ba22cda422527644d200e5758c72c9630da5c714b4c36d6051c25110c5dc0fed677884fdf04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51a45d4f02c1c42887d5947b7ada9ff8ef8574b8b486a1f5c483e256f193c1d274d0905966aebbe4e15f77af600bbb94', 16),
                    gmp_init('0x9afd2b0d2078ca4d163b3f087d7d1fd2d4791c58a699423d2c9f07d5bc031ae19a71fc22611475c735c13923d4d93f13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0c4c3faaf3ef3bdc69eed0b5da23a08b0eebe0d9be45e9fad19d1599995c2b521c9106d2cf6c593b9a7b88d17baf6b5', 16),
                    gmp_init('0xb88b52e0014bdaf3d440e1a5dc692ff92e3198edc41bd57685d3d9fcc142d76d76dbbb9b09013b1fd5535d6825736fdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeaaf99470a2f76dfe67b7c25673ff02965e536332ad5ed49c18e5ab22eb4e0132afc4791c1df10379ea209fee610f88a', 16),
                    gmp_init('0x6be0d35cf2cac56aadd733274e46374c3780f53195321b9a3ebd229b61f5dc25b9814cbc9f3643ebaec6f48837656b5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3e25cdb160208b6474e2b34d72bf586bba14f72c3f97f515a405d1429196e6673161b78ad80afe664ee504d4b161ab7', 16),
                    gmp_init('0x3770b64d5442695959fb89da7eb3a7cafcba079d32031df6213049c1cc509e3f9120caf8dd9109115f403859ac337acc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebc61e50000a11646f29be723ee5f2e50f9281ccde5c17c9273a17a678b82e9b8d0719273821da349ef7421d51da70c9', 16),
                    gmp_init('0xcde556c3a5963ba112990f4161cfeb98a93d867b7b3d9ba0edda6dbbbf7b2dd0d3176a7fbda35adbf4d28d592caebebb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d9f9d08be38c7fd00f3c04b7e7b5ca7ea4126f688732e566c01dded1880ee18a778d2bd634587d5e742cf2e2ed42db6', 16),
                    gmp_init('0x7081dce3a4109e989327f5da4ce9abba3b7d5bb3f13027a28130c9258b3078380ef8dd1e2226738732a9de0fd17fc390', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba2e0bcfe523313074207afdf5f8bcec26d21ccd44a903801420f74d813515c262cf0567f3c0aa13967115fbb499d126', 16),
                    gmp_init('0xa00b595e3352d132781b303dcdf99cd024bca161a834f38b415699ee622b29bca980a7aaa529ffbdabf2d92f7f0b1453', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53ce61a57a84a7d383c4f10c357b0fcaf38813608a5d496b5525266b787cd201327904b22a094d64215de741069d95d7', 16),
                    gmp_init('0x833cd5cc6caf2ba19289a0cd39ebd6b3b4b792438f12a0e8b910935e01fc444741ecf9b1f663ea5a136fde09d7af0a16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4952695b6a41a351b3e05f05ae491d26600469c29dcb8af1a5a9ca3e66b47e96d57d3e2f7e38637b51dbb68f34f7ebc', 16),
                    gmp_init('0x9a05342fc0e06c92af550033354b8e3d83ea38a17c42b13fe2a24f19f98565e1bac56eea070067a3e97543cd07372f4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa902cf384515911d09d9c219ba1f6a88d77e897abf3f646a21c562e84aab06c5665b42b618f16488e1d9af063b5014ed', 16),
                    gmp_init('0x8de1d248ba132d02b0ed7ae782a2861c9a5fa370b17dfea6f8e6e6c23e7926ff37b8c68b38c8d85df777fd95f1a42078', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b7b47828bfd6680a1ed2f87eca7dfc041aa3770f1b35933d601c8e64e1d477dd78d28640ef513764ab3d4b1d98a9228', 16),
                    gmp_init('0xc65744b0a771db8995f75f2a886fa3dbd28030aa1c970f8715927de30b9fdf1f6575194341c65eed5dd832d3eb156373', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
