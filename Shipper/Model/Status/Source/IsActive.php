<?php
namespace Sg\Shipper\Model\Status\Source;

class IsActive implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Ashsmith\Blog\Model\Post
     */
    protected $shipper;

    /**
     * Constructor
     *
     * @param \Ashsmith\Blog\Model\Post $post
     */
    public function __construct(\Sg\Shipper\Model\Shipper $shipper)
    {
        $this->shipper = $shipper;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->shipper->getAvailableStatuses();
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
