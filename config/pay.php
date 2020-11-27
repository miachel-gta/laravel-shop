<?php

return [
    'alipay' => [
        'app_id'         => '2016110300789411',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi8XiRbaJ3fsYWTq2UGsOOZoiDoM6/SImmebe/A/1sN0YrgRgIgWuicOSeX0kcZ7sYxf6uIPRI2eC9hiUrIdM0OF8B/yoUVFQjawiwgIQ+joHZCLjfaNgjPP/jvRNtpBSZEHAKEDu9O3H/d4+6xU0EZgSx8NbsPCzCxO67yQ9nUT4cI/69Z01bSTsqMC8ECaUyqUOJcBYpwIaI+UeRcqS38dw2qeRURxnwBRoBqL3TcrYbcwJw6G7+3xBxX5hzeJvl+kpDAOkhjF0udSd8RNxGY8zqLh3Xj1zNYYJI2GzIXlDUou34U5kiOmfb8saDiWP+/yMBnFc/OTLM4/PCxDmlwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAu0GGxrY+fN8eP/esKO34KyPiSEDOJPPsuR0r90KRw3TC438PeBMG+TbWkDBNANgTWPEKgxFzgqn8CfQvfrVutZmhJ+XmiSLspROGXA2AOXX+9ar5SFgIBcHBZ949quVtx+kd9y9Epyonmh7WXnRr9uX5LkKZshOu1xNqnEuflUPymC0Bi9O/ohRIMuSNIyOZNKTyUtwHHCwUP31rGbBQ338uaNbyGQ1KlSI3uudWRjRYIIU5PUi6I+zAK5k+UL1O2vrTdLWS6NcQVWRv0nh+Hh9D2chsVwh9lr/S+JClf44jsh5mHRawt35VQQ3pTGV0rd1B3hH/enEALEjECHGx4wIDAQABAoIBAQCOYrgB10fSmbGdwE03XiPLYeDJQgW+EYBaDfWFcSf3MIyUgeQYUJeH3ovuXdvfnW2wvrBYk2d63phYVUXcGkeRbL0e4nCWrGi26Q7MZjOu/asd0KD2woFvJzJSMapAjW4ZiYgQke+pEKPGTFaCwhHqTlpYM6o8vzy+K/Rv3gz9aLxQ0ToAtrGaFhINALskRpiMnLs7qECyvTOUoeCF7KJq0+mciXUaeJVuk6iRNih3kLABwjNHlGPN1DCq/8h7VJxRlKmfS3GJTY9tDX9yHmFv12mFUTmrOSEufSawOJ17G0H/FlL8sNVu/7ws5yyjJ/FpQrvB40EdUdfYsXzUVS1JAoGBAOybtYukQMEhcpTiPZSaEujHO1PD9HdcSIVqsTJHFHEfSlWxCHZXHtrrzuJL5xIdifruRd2aBkCPRwYfdSSkqoeF4HpQpBIJJpSVRBLYLIHAjkiAPfRSI8/QSKDWRkZ2dohiduXRW/+16jMdsk+QF6tFRssRctxBwctcw96b0mO9AoGBAMqaWrq3lZzLe1Ht9/J2l+PJoiZCZ5UzO+kHwtnaYr9AMnCq7WfkfEtOED3gEPAfGryHhKMxwC8xh/RRNoJnHzeuXHO9xuW3rkKpylq1hX0BAXvWLL8gFyY5GC2UnHwvaA8m/KYv+rCDjEHXZJKGxDyGrOM91EF7Qc308l3IoPYfAoGAaQ1xe8C/54AcSbJxuQr3nlbnJnf4kQ5uPJ50cmhQ0TEdZhKmOTTRRE4ymxMsU0S+QKWOa6e5Yuy6kiNhdZWPCYENfAFV95QMhygHA37rs+h0xAf8egAGWnyV4qOArERouIFPXRapjE2O4Ics5lqJx8eIeR0ULGsdylczuCDjNtkCgYA1MoJQNJQcL3GZ+Zn5GBqZvP/Oe/Emw+UfMuJ+wVDcVsbnvnnHpb7dJwostQC9i+1BQ3QYRZ/oxGCmTgy6AMm5nRa5bUMkXi5rYpm3Z6I9SF5TXdEx/gMWDjfDABp2oRv5nosIN+DjKCdTwnKt5qTwH4yVvk5VQz/sDDz3Uw6wkQKBgFy7HcOFplFc0a6VLuSiNorD8oqLcNgmJ34c+8dFEci4x9pRy6TajJt7SZgCalHwGqh7cnVK10FNCPjD4gqLzTsaWYTFXKiB+z3MFTucWyucpd/qdNtkSILOvWV6hT/mv9D2dR8YiOnceuPOZcfW/Nev7ndqBwvYu6sc6LTr/GpB',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
